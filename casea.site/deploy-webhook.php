<?php
/**
 * GitHub Webhook Deploy Script
 * Receives push events from GitHub and triggers git pull + cPanel deploy.
 * 
 * Security: Validates GitHub webhook signature using a shared secret.
 */

// ─── Configuration ───────────────────────────────────────────────
$secret = 'cms4-microsites-deploy-2026';
$repo_path = '/home/cms4netp/simplemicrosites';
$log_file = $repo_path . '/deploy-log.txt';
$branch = 'main';

// ─── Validate Request ────────────────────────────────────────────
// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die('Method not allowed');
}

// Get the raw payload
$payload = file_get_contents('php://input');

// Validate GitHub signature
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

// Parse payload
$data = json_decode($payload, true);

// Only deploy on pushes to the target branch
$ref = isset($data['ref']) ? $data['ref'] : '';
if ($ref !== 'refs/heads/' . $branch) {
    http_response_code(200);
    die('Skipped: not target branch');
}

// ─── Deploy ──────────────────────────────────────────────────────
$timestamp = date('Y-m-d H:i:s');
$output = [];

// Pull latest changes
$cmd = "cd $repo_path && git pull origin $branch 2>&1";
exec($cmd, $output, $return_code);

// Run cPanel deploy
$deploy_cmd = "/usr/local/cpanel/bin/uapi VersionControlDeployment create repository_root=$repo_path 2>&1";
exec($deploy_cmd, $output, $deploy_code);

// Fallback: manually copy files if cPanel deploy fails
if ($deploy_code !== 0) {
    $src = $repo_path . '/casea.site';
    $dst = $repo_path;
    $copy_cmds = [
        "cp $src/.htaccess $dst/",
        "cp $src/config.php $dst/",
        "cp $src/index.php $dst/",
        "cp $src/deploy-webhook.php $dst/ 2>/dev/null || true",
        "mkdir -p $dst/includes && cp $src/includes/*.php $dst/includes/",
        "mkdir -p $dst/pages && cp $src/pages/*.php $dst/pages/",
        "for LANG in de el pl it fr es hu; do mkdir -p $dst/pages/\$LANG && cp $src/pages/\$LANG/*.php $dst/pages/\$LANG/; done",
        "mkdir -p $dst/assets/css && cp $src/assets/css/*.css $dst/assets/css/",
        "mkdir -p $dst/assets/js && cp $src/assets/js/*.js $dst/assets/js/",
        "mkdir -p $dst/assets/img && cp $src/assets/img/* $dst/assets/img/ 2>/dev/null || true",
        "mkdir -p $dst/lang && for LANG in en de el pl it fr es hu; do cp $src/lang/\$LANG.php $dst/lang/; done",
    ];
    foreach ($copy_cmds as $ccmd) {
        exec($ccmd . ' 2>&1', $output);
    }
    $output[] = 'Fallback file copy completed';
}

// Log results
$log_entry = "[$timestamp] Deploy triggered\n";
$log_entry .= "Pull exit code: $return_code\n";
$log_entry .= "Deploy exit code: $deploy_code\n";
$log_entry .= "Output:\n" . implode("\n", $output) . "\n";
$log_entry .= str_repeat('-', 60) . "\n";

file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);

// Respond
http_response_code(200);
echo json_encode([
    'status' => ($return_code === 0) ? 'success' : 'error',
    'pull_code' => $return_code,
    'deploy_code' => $deploy_code,
    'timestamp' => $timestamp,
]);
