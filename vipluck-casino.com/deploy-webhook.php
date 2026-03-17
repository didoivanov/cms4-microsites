<?php
/**
 * Git pull webhook - receives GitHub push events and pulls changes.
 * Each domain points directly to its subdirectory in the repo working tree,
 * so no file copying is needed. Git pull updates everything in place.
 */
$secret  = 'cms4-microsites-deploy-2026';
$logFile = '/home/cms4netp/deploy.log';
$repoPath = '/home/cms4netp/simplemicrosites';

$payload   = file_get_contents('php://input');
$sigHeader = $_SERVER['HTTP_X_HUB_SIGNATURE_256'] ?? '';
if (empty($sigHeader)) { http_response_code(403); die('Missing signature'); }
$expected = 'sha256=' . hash_hmac('sha256', $payload, $secret);
if (!hash_equals($expected, $sigHeader)) { http_response_code(403); die('Invalid signature'); }

$event = $_SERVER['HTTP_X_GITHUB_EVENT'] ?? '';
if ($event !== 'push') { http_response_code(200); die(json_encode(['skipped' => $event])); }

$ts = date('Y-m-d H:i:s');

// Pull latest changes - domains serve directly from repo subdirectories
$gitBin = '/usr/local/cpanel/3rdparty/bin/git';
if (!file_exists($gitBin)) { $gitBin = 'git'; }
$pullOut = shell_exec("cd {$repoPath} && {$gitBin} pull origin main 2>&1");

$log = "[{$ts}] Pull at {$repoPath}:\n{$pullOut}\n---\n";
file_put_contents($logFile, $log, FILE_APPEND);
http_response_code(200);
echo json_encode(['timestamp' => $ts, 'repo' => $repoPath, 'pull' => trim($pullOut ?? '')]);
