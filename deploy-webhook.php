<?php
/**
 * GitHub Webhook Deploy Script - Casea.site
 * Pulls from the shared repo, then copies casea.site files
 * to this web root using PHP's native copy functions.
 */

$secret = 'cms4-microsites-deploy-2026';
$repo_path = '/home/cms4netp/simplemicrosites';
$log_file = __DIR__ . '/deploy-log.txt';
$branch = 'main';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die('Method not allowed');
}

$payload = file_get_contents('php://input');
$sig_header = isset($_SERVER['HTTP_X_HUB_SIGNATURE_256']) 
    ? $_SERVER['HTTP_X_HUB_SIGNATURE_256'] : '';

if (!empty($secret)) {
    $expected = 'sha256=' . hash_hmac('sha256', $payload, $secret);
    if (!hash_equals($expected, $sig_header)) {
        http_response_code(403);
        die('Invalid signature');
    }
}

$data = json_decode($payload, true);
$ref = isset($data['ref']) ? $data['ref'] : '';
if ($ref !== 'refs/heads/' . $branch) {
    http_response_code(200);
    die('Skipped: not target branch');
}

function rcopy($src, $dst) {
    $count = 0;
    if (!is_dir($src)) return $count;
    if (!is_dir($dst)) @mkdir($dst, 0755, true);
    $dir = opendir($src);
    while (($file = readdir($dir)) !== false) {
        if ($file === '.' || $file === '..') continue;
        $s = $src . '/' . $file;
        $d = $dst . '/' . $file;
        if (is_dir($s)) {
            $count += rcopy($s, $d);
        } else {
            @copy($s, $d);
            $count++;
        }
    }
    closedir($dir);
    return $count;
}

$timestamp = date('Y-m-d H:i:s');
$output = [];

// Git pull
$cmd = "cd $repo_path && git pull origin $branch 2>&1";
exec($cmd, $output, $pull_code);

// Copy casea.site files to THIS directory (repo root = casea web root)
$src = $repo_path . '/casea.site';
$dst = __DIR__;
$file_count = 0;

$root_files = ['.htaccess', 'config.php', 'index.php',
    'google9bd8dc12ea09b94c.html', 'robots.txt', 'sitemap.xml',
    'sitemap-pages.xml', 'sitemap-hreflang.xml', 'favicon.ico', 'site.webmanifest'];
foreach ($root_files as $f) {
    if (file_exists($src . '/' . $f)) {
        @copy($src . '/' . $f, $dst . '/' . $f);
        $file_count++;
    }
}
if (file_exists($src . '/deploy-webhook.php')) {
    @copy($src . '/deploy-webhook.php', $dst . '/deploy-webhook.php');
    $file_count++;
}
foreach (['includes', 'pages', 'assets', 'lang'] as $dir) {
    if (is_dir($src . '/' . $dir)) {
        $file_count += rcopy($src . '/' . $dir, $dst . '/' . $dir);
    }
}

// Also try to update the vipluck webhook (cross-site copy)
$vipluck_webhook_src = $repo_path . '/vipluck-casino.com/deploy-webhook.php';
$vipluck_webhook_dst = '/home/cms4netp/vipluck.onl/deploy-webhook.php';
$vipluck_updated = false;
if (file_exists($vipluck_webhook_src)) {
    $vipluck_updated = @copy($vipluck_webhook_src, $vipluck_webhook_dst);
}

$log_entry = "[$timestamp] Casea deploy | Pull=$pull_code | Files=$file_count | VipLuck webhook=" . ($vipluck_updated ? 'updated' : 'failed') . "\n";
$log_entry .= implode(" | ", $output) . "\n" . str_repeat('-', 60) . "\n";
@file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);

http_response_code(200);
echo json_encode([
    'status' => ($pull_code === 0) ? 'success' : 'error',
    'pull_code' => $pull_code,
    'files_copied' => $file_count,
    'timestamp' => $timestamp,
]);
