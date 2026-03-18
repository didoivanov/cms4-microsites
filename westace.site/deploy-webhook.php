<?php
/**
 * GitHub Webhook Deploy Script - WestAce
 * Pulls from the shared repo, then copies westace.site files
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

// Git fetch + reset
$cmd = "cd $repo_path && git fetch origin $branch 2>&1 && git reset --hard origin/$branch 2>&1";
exec($cmd, $output, $pull_code);

// Copy westace.site files to THIS directory
$src = $repo_path . '/westace.site';
$dst = __DIR__;
$file_count = 0;

$root_files = ['.htaccess', 'config.php', 'index.php',
    'google9bd8dc12ea09b94c.html', 'robots.txt', 'sitemap.xml',
    'sitemap-pages.xml', 'favicon.ico'];
foreach ($root_files as $f) {
    if (file_exists($src . '/' . $f)) {
        @copy($src . '/' . $f, $dst . '/' . $f);
        $file_count++;
    }
}

// Copy the webhook itself last
if (file_exists($src . '/deploy-webhook.php')) {
    @copy($src . '/deploy-webhook.php', $dst . '/deploy-webhook.php');
    $file_count++;
}

// Directories
foreach (['includes', 'pages', 'assets', 'lang'] as $dir) {
    if (is_dir($src . '/' . $dir)) {
        $file_count += rcopy($src . '/' . $dir, $dst . '/' . $dir);
    }
}

$log_entry = "[$timestamp] WestAce deploy\n";
$log_entry .= "Pull: exit=$pull_code\n";
$log_entry .= "Files copied: $file_count\n";
$log_entry .= "Source: $src\n";
$log_entry .= "Destination: $dst\n";
$log_entry .= "Pull output: " . implode(" | ", $output) . "\n";
$log_entry .= str_repeat('-', 60) . "\n";
@file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);

http_response_code(200);
echo json_encode([
    'status' => ($pull_code === 0) ? 'success' : 'error',
    'pull_code' => $pull_code,
    'files_copied' => $file_count,
    'timestamp' => $timestamp,
]);
