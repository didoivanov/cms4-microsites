<?php
$secret  = 'cms4-microsites-deploy-2026';
$logFile = '/home/cms4netp/deploy.log';

$payload   = file_get_contents('php://input');
$sigHeader = $_SERVER['HTTP_X_HUB_SIGNATURE_256'] ?? '';
if (empty($sigHeader)) { http_response_code(403); die('Missing signature'); }
$expected = 'sha256=' . hash_hmac('sha256', $payload, $secret);
if (!hash_equals($expected, $sigHeader)) { http_response_code(403); die('Invalid signature'); }

$event = $_SERVER['HTTP_X_GITHUB_EVENT'] ?? '';
if ($event !== 'push') { http_response_code(200); die(json_encode(['skipped' => $event])); }

$ts = date('Y-m-d H:i:s');

// The repo root is one level above the document root
$repoPath = dirname(__DIR__);
$pullOut = shell_exec("cd {$repoPath} && /usr/local/cpanel/3rdparty/bin/git pull origin main 2>&1");

// Debug info
$debug = [
    'docroot' => $_SERVER['DOCUMENT_ROOT'] ?? 'unknown',
    'dir' => __DIR__,
    'repoPath' => $repoPath,
];

$log = "[{$ts}] Pull from {$repoPath}:\n{$pullOut}\n---\n";
file_put_contents($logFile, $log, FILE_APPEND);

http_response_code(200);
echo json_encode([
    'timestamp' => $ts,
    'pull' => trim($pullOut ?? ''),
    'debug' => $debug,
]);
