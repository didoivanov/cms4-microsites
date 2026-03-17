<?php
/**
 * GitHub Webhook Deploy Script
 * Receives push events from GitHub, triggers git pull, then copies files
 * using PHP functions (not shell exec) for reliability on shared hosting.
 */

// ─── Configuration ───────────────────────────────────────────────
$secret = 'cms4-microsites-deploy-2026';
$repo_path = '/home/cms4netp/simplemicrosites';
$log_file = $repo_path . '/deploy-log.txt';
$branch = 'main';

// ─── Validate Request ────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die('Method not allowed');
}

$payload = file_get_contents('php://input');

$sig_header = isset($_SERVER['HTTP_X_HUB_SIGNATURE_256']) 
    ? $_SERVER['HTTP_X_HUB_SIGNATURE_256'] 
    : '';

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

// ─── Helper: Recursive directory copy using PHP ──────────────────
function rcopy($src, $dst) {
    $count = 0;
    if (!is_dir($src)) return $count;
    if (!is_dir($dst)) mkdir($dst, 0755, true);
    
    $dir = opendir($src);
    while (($file = readdir($dir)) !== false) {
        if ($file === '.' || $file === '..') continue;
        $srcPath = $src . '/' . $file;
        $dstPath = $dst . '/' . $file;
        if (is_dir($srcPath)) {
            $count += rcopy($srcPath, $dstPath);
        } else {
            copy($srcPath, $dstPath);
            $count++;
        }
    }
    closedir($dir);
    return $count;
}

// ─── Deploy ──────────────────────────────────────────────────────
$timestamp = date('Y-m-d H:i:s');
$output = [];

// Step 1: Git pull
$cmd = "cd $repo_path && git pull origin $branch 2>&1";
exec($cmd, $output, $pull_code);

// Step 2: Copy casea.site → repo root (web root for casea.site)
$casea_src = $repo_path . '/casea.site';
$casea_dst = $repo_path;
$casea_count = 0;

// Copy root files
$root_files = ['.htaccess', 'config.php', 'index.php', 'deploy-webhook.php',
    'google9bd8dc12ea09b94c.html', 'robots.txt', 'sitemap.xml',
    'sitemap-pages.xml', 'sitemap-hreflang.xml', 'favicon.ico', 'site.webmanifest'];
foreach ($root_files as $f) {
    if (file_exists($casea_src . '/' . $f)) {
        copy($casea_src . '/' . $f, $casea_dst . '/' . $f);
        $casea_count++;
    }
}
// Copy directories
foreach (['includes', 'pages', 'assets', 'lang'] as $dir) {
    if (is_dir($casea_src . '/' . $dir)) {
        $casea_count += rcopy($casea_src . '/' . $dir, $casea_dst . '/' . $dir);
    }
}

// Step 3: Copy vipluck-casino.com → /home/cms4netp/vipluck.onl/
$vipluck_src = $repo_path . '/vipluck-casino.com';
$vipluck_dst = '/home/cms4netp/vipluck.onl';
$vipluck_count = 0;

if (!is_dir($vipluck_dst)) mkdir($vipluck_dst, 0755, true);

// Copy root files
foreach ($root_files as $f) {
    if (file_exists($vipluck_src . '/' . $f)) {
        copy($vipluck_src . '/' . $f, $vipluck_dst . '/' . $f);
        $vipluck_count++;
    }
}
// Copy directories
foreach (['includes', 'pages', 'assets', 'lang'] as $dir) {
    if (is_dir($vipluck_src . '/' . $dir)) {
        $vipluck_count += rcopy($vipluck_src . '/' . $dir, $vipluck_dst . '/' . $dir);
    }
}

// ─── Log ─────────────────────────────────────────────────────────
$log_entry = "[$timestamp] Deploy triggered\n";
$log_entry .= "Pull: exit=$pull_code\n";
$log_entry .= "Casea files copied: $casea_count\n";
$log_entry .= "VipLuck files copied: $vipluck_count\n";
$log_entry .= "Pull output: " . implode("\n", $output) . "\n";
$log_entry .= str_repeat('-', 60) . "\n";
file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);

// ─── Respond ─────────────────────────────────────────────────────
http_response_code(200);
echo json_encode([
    'status' => ($pull_code === 0) ? 'success' : 'error',
    'pull_code' => $pull_code,
    'casea_files' => $casea_count,
    'vipluck_files' => $vipluck_count,
    'timestamp' => $timestamp,
]);
