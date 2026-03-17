<?php
/**
 * GitHub Webhook → cPanel Git Pull
 * Receives push events and triggers a git pull on the server.
 */

// ─── Config ──────────────────────────────────────────────────────
$secret    = 'cms4-microsites-deploy-2026';
$repoPath  = '/home/cms4netp/repositories/cms4-microsites';
$logFile   = '/home/cms4netp/deploy-vipluck.log';

// ─── Verify Signature ────────────────────────────────────────────
$payload   = file_get_contents('php://input');
$sigHeader = isset($_SERVER['HTTP_X_HUB_SIGNATURE_256'])
    ? $_SERVER['HTTP_X_HUB_SIGNATURE_256']
    : '';

if (empty($sigHeader)) {
    http_response_code(403);
    die('Missing signature');
}

$expected = 'sha256=' . hash_hmac('sha256', $payload, $secret);

if (!hash_equals($expected, $sigHeader)) {
    http_response_code(403);
    die('Invalid signature');
}

// ─── Only process push events ────────────────────────────────────
$event = isset($_SERVER['HTTP_X_GITHUB_EVENT']) ? $_SERVER['HTTP_X_GITHUB_EVENT'] : '';
if ($event !== 'push') {
    http_response_code(200);
    die('Ignored event: ' . $event);
}

// ─── Pull latest code ────────────────────────────────────────────
$ts  = date('Y-m-d H:i:s');
$cmd = "cd {$repoPath} && /usr/local/cpanel/3rdparty/bin/git pull origin main 2>&1";
$out = shell_exec($cmd);

$log = "[{$ts}] Pull triggered\n{$out}\n---\n";
file_put_contents($logFile, $log, FILE_APPEND);

http_response_code(200);
echo "Deployed at {$ts}\n{$out}";
