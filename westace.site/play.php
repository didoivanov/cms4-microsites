<?php
/**
 * Affiliate redirect - mobile only
 * Mobile devices -> affiliate link
 * Desktop/other  -> homepage
 */

// Geo-block restricted countries
$blocked_countries = ['CY', 'AE', 'RO', 'UA', 'BY', 'RU'];
$visitor_country = isset($_SERVER['HTTP_CF_IPCOUNTRY']) ? strtoupper($_SERVER['HTTP_CF_IPCOUNTRY']) : '';
if (in_array($visitor_country, $blocked_countries)) {
    http_response_code(403);
    require_once __DIR__ . '/blocked.php';
    exit;
}

$ua = isset($_SERVER['HTTP_USER_AGENT']) ? strtolower($_SERVER['HTTP_USER_AGENT']) : '';

$mobile_keywords = [
    'mobile', 'android', 'iphone', 'ipod', 'ipad',
    'windows phone', 'opera mini', 'opera mobi',
    'blackberry', 'webos', 'symbian', 'palm',
    'samsung', 'huawei', 'xiaomi',
];

$is_mobile = false;
foreach ($mobile_keywords as $keyword) {
    if (strpos($ua, $keyword) !== false) {
        $is_mobile = true;
        break;
    }
}

if ($is_mobile) {
    header('Location: https://playzzz.app/play/westace', true, 302);
} else {
    header('Location: /', true, 302);
}
exit;
