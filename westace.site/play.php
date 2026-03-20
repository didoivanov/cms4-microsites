<?php
/**
 * Affiliate redirect - mobile only
 * Mobile devices -> affiliate link
 * Desktop/other  -> homepage
 */

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
