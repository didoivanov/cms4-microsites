<?php
/**
 * GitHub Webhook Deploy Script - Casea.site
 * Pulls from the shared repo, then copies casea.site files
 * to this web root using PHP's native copy functions.
 * Also attempts to copy vipluck-casino.com files to vipluck.onl.
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

// Git fetch + reset (avoids dirty-worktree errors from previous deploys)
$cmd = "cd $repo_path && git fetch origin $branch 2>&1 && git reset --hard origin/$branch 2>&1";
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

// Also deploy vipluck-casino.com to /home/cms4netp/vipluck.onl/
$vl_src = $repo_path . '/vipluck-casino.com';
$vl_dst = '/home/cms4netp/vipluck.onl';
$vl_count = 0;
$vl_errors = [];
if (is_dir($vl_src) && is_dir($vl_dst)) {
    foreach ($root_files as $f) {
        if (file_exists($vl_src . '/' . $f)) {
            $ok = @copy($vl_src . '/' . $f, $vl_dst . '/' . $f);
            if ($ok) $vl_count++;
            else $vl_errors[] = $f;
        }
    }
    if (file_exists($vl_src . '/deploy-webhook.php')) {
        $ok = @copy($vl_src . '/deploy-webhook.php', $vl_dst . '/deploy-webhook.php');
        if ($ok) $vl_count++;
        else $vl_errors[] = 'deploy-webhook.php';
    }
    foreach (['includes', 'pages', 'assets', 'lang'] as $dir) {
        if (is_dir($vl_src . '/' . $dir)) {
            $vl_count += rcopy($vl_src . '/' . $dir, $vl_dst . '/' . $dir);
        }
    }
}

$log_entry = "[$timestamp] Casea deploy\n";
$log_entry .= "Pull: exit=$pull_code\n";
$log_entry .= "Casea files: $file_count\n";
$log_entry .= "VipLuck files: $vl_count\n";
if (!empty($vl_errors)) {
    $log_entry .= "VipLuck errors: " . implode(', ', $vl_errors) . "\n";
}
$log_entry .= "Pull output: " . implode(" | ", $output) . "\n";
$log_entry .= str_repeat('-', 60) . "\n";
@file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);

http_response_code(200);
echo json_encode([
    'status' => ($pull_code === 0) ? 'success' : 'error',
    'pull_code' => $pull_code,
    'casea_files' => $file_count,
    'vipluck_files' => $vl_count,
    'vipluck_errors' => $vl_errors,
    'timestamp' => $timestamp,
]);
