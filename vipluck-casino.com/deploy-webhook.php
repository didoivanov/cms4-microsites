<?php
/**
 * GitHub Webhook Deploy Script
 * Receives push events from GitHub and triggers git pull + cPanel deploy.
 */
$secret    = 'cms4-microsites-deploy-2026';
$repo_path = '/home/cms4netp/simplemicrosites';
$log_file  = '/home/cms4netp/deploy.log';
$branch    = 'main';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die('Method not allowed');
}

$payload    = file_get_contents('php://input');
$sig_header = $_SERVER['HTTP_X_HUB_SIGNATURE_256'] ?? '';
if (!empty($secret)) {
    $expected = 'sha256=' . hash_hmac('sha256', $payload, $secret);
    if (!hash_equals($expected, $sig_header)) {
        http_response_code(403);
        die('Invalid signature');
    }
}

$data = json_decode($payload, true);
$event = $_SERVER['HTTP_X_GITHUB_EVENT'] ?? '';
if ($event !== 'push') {
    http_response_code(200);
    die(json_encode(['skipped' => $event]));
}

$timestamp = date('Y-m-d H:i:s');
$output = [];

// Pull latest changes
$git = file_exists('/usr/local/cpanel/3rdparty/bin/git')
     ? '/usr/local/cpanel/3rdparty/bin/git'
     : 'git';
exec("cd $repo_path && $git pull origin $branch 2>&1", $output, $pull_code);

// Trigger cPanel deployment (.cpanel.yml)
exec("/usr/local/cpanel/bin/uapi VersionControlDeployment create repository_root=$repo_path 2>&1", $output, $deploy_code);

$log = "[$timestamp] Pull code: $pull_code | Deploy code: $deploy_code\n"
     . implode("\n", $output) . "\n---\n";
file_put_contents($log_file, $log, FILE_APPEND | LOCK_EX);

http_response_code(200);
echo json_encode([
    'timestamp'   => $timestamp,
    'pull_code'   => $pull_code,
    'deploy_code' => $deploy_code,
    'output'      => implode("\n", $output),
]);
