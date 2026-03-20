<?php
/**
 * Main Router
 * Handles clean URLs and routes to the correct page template.
 */

// ─── Geo-block restricted countries ──────────────────────────────
$blocked_countries = ['CY', 'AE', 'RO', 'UA', 'BY', 'RU'];
$visitor_country = isset($_SERVER['HTTP_CF_IPCOUNTRY']) ? strtoupper($_SERVER['HTTP_CF_IPCOUNTRY']) : '';
if (in_array($visitor_country, $blocked_countries)) {
    http_response_code(403);
    require_once __DIR__ . '/blocked.php';
    exit;
}

// Serve static root files directly (Google verification, robots, sitemap)
$_requested = isset($_GET['page']) ? trim($_GET['page'], '/') : '';
if (preg_match('/^[\w.-]+\.(html|txt|xml)$/', $_requested)) {
    $_candidates = [
        __DIR__ . '/' . $_requested,
        '/home/cms4netp/simplemicrosites/daytonaspin-uk.com/' . $_requested,
    ];
    foreach ($_candidates as $_static) {
        if (file_exists($_static)) {
            $ext = pathinfo($_static, PATHINFO_EXTENSION);
            $types = ['html' => 'text/html', 'txt' => 'text/plain', 'xml' => 'application/xml'];
            header('Content-Type: ' . ($types[$ext] ?? 'text/plain'));
            readfile($_static);
            exit;
        }
    }
}

// Try local config first, fall back to repo source
if (file_exists(__DIR__ . '/config.php')) {
    require_once __DIR__ . '/config.php';
} else {
    require_once '/home/cms4netp/simplemicrosites/daytonaspin-uk.com/config.php';
}

// Define repo source fallback path
define('REPO_SRC', '/home/cms4netp/simplemicrosites/daytonaspin-uk.com');

// Determine which page to load
$page = isset($_GET['page']) ? trim($_GET['page'], '/') : 'home';

// No language prefix detection needed (single-language site)
$CURRENT_LANG = 'en';
$lang_prefix = '';

// Map of valid pages
$pages = [
    'home'       => 'pages/home.php',
    'bonuses'    => 'pages/bonuses.php',
    'withdrawal' => 'pages/withdrawal.php',
    'support'    => 'pages/support.php',
    'login'      => 'pages/login.php',
    'privacy'    => 'pages/privacy.php',
    'terms'      => 'pages/terms.php',
    'responsible-gambling' => 'pages/responsible-gambling.php',
    'cookies'    => 'pages/cookies.php',
];

// 404 for unknown pages
if (!array_key_exists($page, $pages)) {
    http_response_code(404);
    $page = 'home';
}

// Load language strings (check local then repo source)
$lang_file = __DIR__ . '/lang/en.php';
$lang_file_repo = defined('REPO_SRC') ? REPO_SRC . '/lang/en.php' : '';
if (file_exists($lang_file)) {
    $LANG = require $lang_file;
} elseif ($lang_file_repo && file_exists($lang_file_repo)) {
    $LANG = require $lang_file_repo;
} else {
    $LANG = [];
}

// Helper function for translations
function __($key, $default = '') {
    global $LANG;
    return isset($LANG[$key]) ? $LANG[$key] : ($default ?: $key);
}

// Update nav items with translations
$NAV_ITEMS = [
    ['url' => '/bonuses',    'label' => __('nav_bonuses', 'Bonuses'),       'page' => 'bonuses'],
    ['url' => '/withdrawal', 'label' => __('nav_withdrawal', 'Withdrawal'), 'page' => 'withdrawal'],
    ['url' => '/support',    'label' => __('nav_support', 'Support'),       'page' => 'support'],
];

$current_page = $page;

// Load the page template (check local then repo source)
$page_file = __DIR__ . '/' . $pages[$page];
if (!file_exists($page_file) && defined('REPO_SRC')) {
    $page_file = REPO_SRC . '/' . $pages[$page];
}
require_once $page_file;
