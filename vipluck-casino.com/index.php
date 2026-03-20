<?php
/**
 * Main Router
 * Handles clean URLs, language prefix detection, and routes to the correct page template.
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
    // Check current directory first, then repo source directory as fallback
    $_candidates = [
        __DIR__ . '/' . $_requested,
        '/home/cms4netp/simplemicrosites/vipluck-casino.com/' . $_requested,
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
    require_once '/home/cms4netp/simplemicrosites/vipluck-casino.com/config.php';
}

// Define repo source fallback path
define('REPO_SRC', '/home/cms4netp/simplemicrosites/vipluck-casino.com');

// Determine which page to load
$page = isset($_GET['page']) ? trim($_GET['page'], '/') : 'home';

// Detect language prefix (e.g., /de/bonuses → lang=de, page=bonuses)
$CURRENT_LANG = 'en';
$lang_prefix = '';

foreach (array_keys($LANGUAGES) as $code) {
    if ($code === 'en') continue; // English has no prefix
    if ($page === $code) {
        // Exact match: /de → German homepage
        $CURRENT_LANG = $code;
        $lang_prefix = '/' . $code;
        $page = 'home';
        break;
    } elseif (strpos($page, $code . '/') === 0) {
        // Prefix match: /de/bonuses → German bonuses page
        $CURRENT_LANG = $code;
        $lang_prefix = '/' . $code;
        $page = substr($page, strlen($code) + 1);
        break;
    }
}

// Override from query param (legacy support)
if (isset($_GET['lang']) && array_key_exists($_GET['lang'], $LANGUAGES)) {
    $CURRENT_LANG = $_GET['lang'];
    $lang_prefix = ($CURRENT_LANG === 'en') ? '' : '/' . $CURRENT_LANG;
}

// Map of valid pages
$pages = [
    'home'                 => 'pages/home.php',
    'bonuses'              => 'pages/bonuses.php',
    'withdrawal'           => 'pages/withdrawal.php',
    'support'              => 'pages/support.php',
    'login'                => 'pages/login.php',
    'privacy'              => 'pages/privacy.php',
    'terms'                => 'pages/terms.php',
    'responsible-gambling'  => 'pages/responsible-gambling.php',
    'cookies'              => 'pages/cookies.php',
];

// 404 for unknown pages
if (!array_key_exists($page, $pages)) {
    http_response_code(404);
    $page = 'home';
}

// Check for localized page version
if ($CURRENT_LANG !== 'en') {
    $localized_rel = 'pages/' . $CURRENT_LANG . '/' . basename($pages[$page]);
    if (file_exists(__DIR__ . '/' . $localized_rel)) {
        $pages[$page] = $localized_rel;
    } elseif (defined('REPO_SRC') && file_exists(REPO_SRC . '/' . $localized_rel)) {
        $pages[$page] = $localized_rel;
    }
}

// Load language strings (check local then repo source)
$lang_file = __DIR__ . '/lang/' . $CURRENT_LANG . '.php';
$lang_file_repo = defined('REPO_SRC') ? REPO_SRC . '/lang/' . $CURRENT_LANG . '.php' : '';
if (file_exists($lang_file)) {
    $LANG = require $lang_file;
} elseif ($lang_file_repo && file_exists($lang_file_repo)) {
    $LANG = require $lang_file_repo;
} else {
    $LANG = require __DIR__ . '/lang/en.php';
}

// Helper function for translations
function __($key, $default = '') {
    global $LANG;
    return isset($LANG[$key]) ? $LANG[$key] : ($default ?: $key);
}

// Update nav items with translations
$NAV_ITEMS = [
    ['url' => $lang_prefix . '/bonuses',    'label' => __('nav_bonuses', 'Bonuses'),       'page' => 'bonuses'],
    ['url' => $lang_prefix . '/withdrawal', 'label' => __('nav_withdrawal', 'Withdrawal'), 'page' => 'withdrawal'],
    ['url' => $lang_prefix . '/support',    'label' => __('nav_support', 'Support'),       'page' => 'support'],
];

$current_page = $page;

// Load the page template (check local then repo source)
$page_file = __DIR__ . '/' . $pages[$page];
if (!file_exists($page_file) && defined('REPO_SRC')) {
    $page_file = REPO_SRC . '/' . $pages[$page];
}
require_once $page_file;
