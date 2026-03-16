<?php
/**
 * Main Router
 * Handles clean URLs and routes to the correct page template.
 */
require_once __DIR__ . '/config.php';

// Determine which page to load
$page = isset($_GET['page']) ? trim($_GET['page'], '/') : 'home';

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
    $page = 'home'; // fallback to home, or create a 404 page
}

$current_page = $page;

// Load the page template
require_once __DIR__ . '/' . $pages[$page];
