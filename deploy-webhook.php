<?php
/**
 * GitHub Webhook Deploy Script
 * Receives push events from GitHub and triggers git pull + file copy.
 * 
 * Instead of relying on cPanel UAPI (which can fail with "uncommitted changes"),
 * this webhook runs the .cpanel.yml copy tasks directly as shell commands.
 * 
 * Security: Validates GitHub webhook signature using a shared secret.
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

// ─── Deploy ──────────────────────────────────────────────────────
$timestamp = date('Y-m-d H:i:s');
$output = [];

// Step 1: Pull latest changes
$cmd = "cd $repo_path && git pull origin $branch 2>&1";
exec($cmd, $output, $pull_code);

// Step 2: Copy casea.site files to web root (repo root = web root for casea.site)
$casea_cmds = [
    "export DEPLOYPATH=$repo_path",
    "/bin/cp $repo_path/casea.site/.htaccess $repo_path/",
    "/bin/cp $repo_path/casea.site/config.php $repo_path/",
    "/bin/cp $repo_path/casea.site/index.php $repo_path/",
    "/bin/cp $repo_path/casea.site/deploy-webhook.php $repo_path/",
    "/bin/cp $repo_path/casea.site/google9bd8dc12ea09b94c.html $repo_path/ 2>/dev/null",
    "/bin/cp $repo_path/casea.site/robots.txt $repo_path/ 2>/dev/null",
    "/bin/cp $repo_path/casea.site/sitemap.xml $repo_path/ 2>/dev/null",
    "/bin/cp $repo_path/casea.site/sitemap-pages.xml $repo_path/ 2>/dev/null",
    "/bin/cp $repo_path/casea.site/sitemap-hreflang.xml $repo_path/ 2>/dev/null",
    "/bin/cp $repo_path/casea.site/favicon.ico $repo_path/ 2>/dev/null",
    "/bin/cp $repo_path/casea.site/site.webmanifest $repo_path/ 2>/dev/null",
    "/bin/mkdir -p $repo_path/includes && /bin/cp $repo_path/casea.site/includes/*.php $repo_path/includes/",
    "/bin/mkdir -p $repo_path/pages && /bin/cp $repo_path/casea.site/pages/*.php $repo_path/pages/",
    "for LANG in de el pl it fr es hu sl; do /bin/mkdir -p $repo_path/pages/\$LANG && /bin/cp $repo_path/casea.site/pages/\$LANG/*.php $repo_path/pages/\$LANG/ 2>/dev/null; done",
    "/bin/mkdir -p $repo_path/assets/css && /bin/cp $repo_path/casea.site/assets/css/*.css $repo_path/assets/css/",
    "/bin/mkdir -p $repo_path/assets/js && /bin/cp $repo_path/casea.site/assets/js/*.js $repo_path/assets/js/",
    "/bin/mkdir -p $repo_path/assets/img && /bin/cp -r $repo_path/casea.site/assets/img/. $repo_path/assets/img/ 2>/dev/null",
    "/bin/mkdir -p $repo_path/lang && /bin/cp $repo_path/casea.site/lang/*.php $repo_path/lang/",
];

$copy_output = [];
$copy_code = 0;
foreach ($casea_cmds as $c) {
    exec($c . ' 2>&1', $copy_output, $rc);
    if ($rc !== 0 && $copy_code === 0) {
        $copy_code = $rc;
    }
}

// Step 3: Copy vipluck-casino.com files to /home/cms4netp/vipluck.onl/
$vipluck_path = '/home/cms4netp/vipluck.onl';
$vipluck_cmds = [
    "/bin/mkdir -p $vipluck_path",
    "/bin/cp $repo_path/vipluck-casino.com/.htaccess $vipluck_path/",
    "/bin/cp $repo_path/vipluck-casino.com/config.php $vipluck_path/",
    "/bin/cp $repo_path/vipluck-casino.com/index.php $vipluck_path/",
    "/bin/cp $repo_path/vipluck-casino.com/deploy-webhook.php $vipluck_path/",
    "/bin/cp $repo_path/vipluck-casino.com/google9bd8dc12ea09b94c.html $vipluck_path/ 2>/dev/null",
    "/bin/cp $repo_path/vipluck-casino.com/robots.txt $vipluck_path/ 2>/dev/null",
    "/bin/cp $repo_path/vipluck-casino.com/sitemap.xml $vipluck_path/ 2>/dev/null",
    "/bin/cp $repo_path/vipluck-casino.com/sitemap-pages.xml $vipluck_path/ 2>/dev/null",
    "/bin/cp $repo_path/vipluck-casino.com/sitemap-hreflang.xml $vipluck_path/ 2>/dev/null",
    "/bin/cp $repo_path/vipluck-casino.com/favicon.ico $vipluck_path/ 2>/dev/null",
    "/bin/cp $repo_path/vipluck-casino.com/site.webmanifest $vipluck_path/ 2>/dev/null",
    "/bin/mkdir -p $vipluck_path/includes && /bin/cp $repo_path/vipluck-casino.com/includes/*.php $vipluck_path/includes/",
    "/bin/mkdir -p $vipluck_path/pages && /bin/cp $repo_path/vipluck-casino.com/pages/*.php $vipluck_path/pages/",
    "for LANG in fr pl it; do /bin/mkdir -p $vipluck_path/pages/\$LANG && /bin/cp $repo_path/vipluck-casino.com/pages/\$LANG/*.php $vipluck_path/pages/\$LANG/ 2>/dev/null; done",
    "/bin/mkdir -p $vipluck_path/assets/css && /bin/cp $repo_path/vipluck-casino.com/assets/css/*.css $vipluck_path/assets/css/",
    "/bin/mkdir -p $vipluck_path/assets/js && /bin/cp $repo_path/vipluck-casino.com/assets/js/*.js $vipluck_path/assets/js/",
    "/bin/mkdir -p $vipluck_path/assets/img && /bin/cp -r $repo_path/vipluck-casino.com/assets/img/. $vipluck_path/assets/img/ 2>/dev/null",
    "/bin/mkdir -p $vipluck_path/lang && /bin/cp $repo_path/vipluck-casino.com/lang/*.php $vipluck_path/lang/",
];

$vipluck_output = [];
$vipluck_code = 0;
foreach ($vipluck_cmds as $c) {
    exec($c . ' 2>&1', $vipluck_output, $rc);
    if ($rc !== 0 && $vipluck_code === 0) {
        $vipluck_code = $rc;
    }
}

// ─── Log Results ─────────────────────────────────────────────────
$log_entry = "[$timestamp] Deploy triggered\n";
$log_entry .= "Pull exit code: $pull_code\n";
$log_entry .= "Casea copy exit code: $copy_code\n";
$log_entry .= "VipLuck copy exit code: $vipluck_code\n";
$log_entry .= "Pull output:\n" . implode("\n", $output) . "\n";
$log_entry .= "Casea copy output:\n" . implode("\n", $copy_output) . "\n";
$log_entry .= "VipLuck copy output:\n" . implode("\n", $vipluck_output) . "\n";
$log_entry .= str_repeat('-', 60) . "\n";

file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);

// ─── Respond ─────────────────────────────────────────────────────
http_response_code(200);
echo json_encode([
    'status' => ($pull_code === 0) ? 'success' : 'error',
    'pull_code' => $pull_code,
    'casea_copy_code' => $copy_code,
    'vipluck_copy_code' => $vipluck_code,
    'timestamp' => $timestamp,
]);
