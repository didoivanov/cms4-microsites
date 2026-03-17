<?php
/**
 * GitHub Webhook Deploy Script - Casea.site
 * Pulls from the shared repo, then copies site files to their web roots.
 * Handles: casea.site, vipluck.onl, daytonaspin-uk.com
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

// Deploy a site: copy root files, webhook, and directories
function deploy_site($src, $dst, $root_files) {
    $count = 0;
    $errors = [];
    if (!is_dir($src) || !is_dir($dst)) return ['count' => 0, 'errors' => ['directory not found']];
    foreach ($root_files as $f) {
        if (file_exists($src . '/' . $f)) {
            $ok = @copy($src . '/' . $f, $dst . '/' . $f);
            if ($ok) $count++;
            else $errors[] = $f;
        }
    }
    if (file_exists($src . '/deploy-webhook.php')) {
        $ok = @copy($src . '/deploy-webhook.php', $dst . '/deploy-webhook.php');
        if ($ok) $count++;
        else $errors[] = 'deploy-webhook.php';
    }
    foreach (['includes', 'pages', 'assets', 'lang'] as $dir) {
        if (is_dir($src . '/' . $dir)) {
            $count += rcopy($src . '/' . $dir, $dst . '/' . $dir);
        }
    }
    return ['count' => $count, 'errors' => $errors];
}

$timestamp = date('Y-m-d H:i:s');
$output = [];

// Git fetch + reset (avoids dirty-worktree errors)
$cmd = "cd $repo_path && git fetch origin $branch 2>&1 && git reset --hard origin/$branch 2>&1";
exec($cmd, $output, $pull_code);

$root_files = ['.htaccess', 'config.php', 'index.php',
    'google9bd8dc12ea09b94c.html', 'robots.txt', 'sitemap.xml',
    'sitemap-pages.xml', 'sitemap-hreflang.xml', 'favicon.ico', 'site.webmanifest'];

// Deploy casea.site (repo root = web root)
$casea = deploy_site($repo_path . '/casea.site', __DIR__, $root_files);

// Deploy vipluck.onl
$vipluck = deploy_site($repo_path . '/vipluck-casino.com', '/home/cms4netp/vipluck.onl', $root_files);

// Deploy daytonaspin-uk.com
$daytona = deploy_site($repo_path . '/daytonaspin-uk.com', '/home/cms4netp/daytonaspin-uk.com', $root_files);

$log_entry = "[$timestamp] Multi-site deploy\n";
$log_entry .= "Pull: exit=$pull_code\n";
$log_entry .= "Casea: {$casea['count']} files\n";
$log_entry .= "VipLuck: {$vipluck['count']} files\n";
$log_entry .= "DaytonaSpin: {$daytona['count']} files\n";
if (!empty($vipluck['errors'])) $log_entry .= "VipLuck errors: " . implode(', ', $vipluck['errors']) . "\n";
if (!empty($daytona['errors'])) $log_entry .= "DaytonaSpin errors: " . implode(', ', $daytona['errors']) . "\n";
$log_entry .= "Pull output: " . implode(" | ", $output) . "\n";
$log_entry .= str_repeat('-', 60) . "\n";
@file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);

http_response_code(200);
echo json_encode([
    'status' => ($pull_code === 0) ? 'success' : 'error',
    'pull_code' => $pull_code,
    'casea_files' => $casea['count'],
    'vipluck_files' => $vipluck['count'],
    'daytona_files' => $daytona['count'],
    'daytona_errors' => $daytona['errors'],
    'timestamp' => $timestamp,
]);
