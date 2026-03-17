<?php
$secret   = 'cms4-microsites-deploy-2026';
$repoPath = '/home/cms4netp/simplemicrosites';
$logFile  = '/home/cms4netp/deploy.log';

$payload   = file_get_contents('php://input');
$sigHeader = $_SERVER['HTTP_X_HUB_SIGNATURE_256'] ?? '';
if (empty($sigHeader)) { http_response_code(403); die('Missing signature'); }
$expected = 'sha256=' . hash_hmac('sha256', $payload, $secret);
if (!hash_equals($expected, $sigHeader)) { http_response_code(403); die('Invalid signature'); }

$event = $_SERVER['HTTP_X_GITHUB_EVENT'] ?? '';
if ($event !== 'push') { http_response_code(200); die(json_encode(['skipped' => $event])); }

$ts = date('Y-m-d H:i:s');

// Step 1: Pull latest from GitHub
$pullOut = shell_exec("cd {$repoPath} && /usr/local/cpanel/3rdparty/bin/git pull origin main 2>&1");

// Step 2: Trigger cPanel deployment (runs .cpanel.yml tasks)
$deployOut = shell_exec("/usr/local/cpanel/bin/uapi VersionControlDeployment create repository_root={$repoPath} 2>&1");

$log = "[{$ts}] Pull:\n{$pullOut}\nDeploy:\n{$deployOut}\n---\n";
file_put_contents($logFile, $log, FILE_APPEND);

http_response_code(200);
echo json_encode([
    'timestamp' => $ts,
    'pull' => trim($pullOut ?? ''),
    'deploy' => trim($deployOut ?? ''),
]);
