<?php
/**
 * Main Router
 * Handles clean URLs, language prefix detection, and routes to the correct page template.
 */

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

require_once __DIR__ . '/config.php';

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
    'home'       => 'pages/home.php',
    'bonuses'    => 'pages/bonuses.php',
    'withdrawal' => 'pages/withdrawal.php',
    'support'    => 'pages/support.php',
    'login'      => 'pages/login.php',
];

// 404 for unknown pages
if (!array_key_exists($page, $pages)) {
    http_response_code(404);
    $page = 'home';
}

// Check for localized page version
if ($CURRENT_LANG !== 'en') {
    $localized_file = 'pages/' . $CURRENT_LANG . '/' . basename($pages[$page]);
    if (file_exists(__DIR__ . '/' . $localized_file)) {
        $pages[$page] = $localized_file;
    }
}

// Load language strings
$lang_file = __DIR__ . '/lang/' . $CURRENT_LANG . '.php';
if (file_exists($lang_file)) {
    $LANG = require $lang_file;
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

// Load the page template
require_once __DIR__ . '/' . $pages[$page];
