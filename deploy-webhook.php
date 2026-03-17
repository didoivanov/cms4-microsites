<?php
/**
 * Unified Deploy Webhook
 * Pulls repo, then copies files to all site web roots.
 * Place this file in each site's web root OR call from one site.
 */

$secret   = 'cms4-microsites-deploy-2026';
$repoPath = '/home/cms4netp/repositories/cms4-microsites';
$logFile  = '/home/cms4netp/deploy.log';

// ─── Verify Signature ────────────────────────────────────────────
$payload   = file_get_contents('php://input');
$sigHeader = $_SERVER['HTTP_X_HUB_SIGNATURE_256'] ?? '';

if (empty($sigHeader)) { http_response_code(403); die('Missing signature'); }

$expected = 'sha256=' . hash_hmac('sha256', $payload, $secret);
if (!hash_equals($expected, $sigHeader)) { http_response_code(403); die('Invalid signature'); }

// ─── Only process push events ────────────────────────────────────
$event = $_SERVER['HTTP_X_GITHUB_EVENT'] ?? '';
if ($event !== 'push') { http_response_code(200); die(json_encode(['skipped' => $event])); }

// ─── Pull ────────────────────────────────────────────────────────
$ts      = date('Y-m-d H:i:s');
$pullOut = shell_exec("cd {$repoPath} && /usr/local/cpanel/3rdparty/bin/git pull origin main 2>&1");

// ─── Site map: repo subdirectory → web root ──────────────────────
$sites = [
    'casea.site'         => '/home/cms4netp/simplemicrosites',
    'vipluck-casino.com' => '/home/cms4netp/vipluck.onl',
];

$results = [];

foreach ($sites as $subdir => $dest) {
    $src = $repoPath . '/' . $subdir;
    if (!is_dir($src)) { $results[$subdir] = 'src missing'; continue; }

    $cmds = [
        // Core PHP files
        "cp {$src}/.htaccess {$dest}/",
        "cp {$src}/config.php {$dest}/",
        "cp {$src}/index.php {$dest}/",
        // Google verification + misc root files
        "cp {$src}/google9bd8dc12ea09b94c.html {$dest}/ 2>/dev/null || true",
        "cp {$src}/favicon.ico {$dest}/ 2>/dev/null || true",
        "cp {$src}/site.webmanifest {$dest}/ 2>/dev/null || true",
        "cp {$src}/robots.txt {$dest}/ 2>/dev/null || true",
        "cp {$src}/sitemap.xml {$dest}/ 2>/dev/null || true",
        // Deploy webhook (self-update)
        "cp {$repoPath}/deploy-webhook.php {$dest}/",
        // Includes
        "mkdir -p {$dest}/includes && cp {$src}/includes/*.php {$dest}/includes/",
        // Pages (EN)
        "mkdir -p {$dest}/pages && cp {$src}/pages/*.php {$dest}/pages/",
        // Pages (all language subdirectories)
        "for L in \$(ls -d {$src}/pages/*/ 2>/dev/null | xargs -I{} basename {}); do mkdir -p {$dest}/pages/\$L && cp {$src}/pages/\$L/*.php {$dest}/pages/\$L/; done",
        // Assets
        "mkdir -p {$dest}/assets/css && cp {$src}/assets/css/*.css {$dest}/assets/css/",
        "mkdir -p {$dest}/assets/js && cp {$src}/assets/js/*.js {$dest}/assets/js/",
        "mkdir -p {$dest}/assets/img && cp -r {$src}/assets/img/. {$dest}/assets/img/ 2>/dev/null || true",
        // Language files
        "mkdir -p {$dest}/lang && cp {$src}/lang/*.php {$dest}/lang/",
    ];

    foreach ($cmds as $c) { shell_exec($c . ' 2>&1'); }
    $results[$subdir] = 'deployed';
}

// ─── Log ─────────────────────────────────────────────────────────
$log = "[{$ts}] Pull:\n{$pullOut}\nDeploy: " . json_encode($results) . "\n---\n";
file_put_contents($logFile, $log, FILE_APPEND);

http_response_code(200);
echo json_encode(['timestamp' => $ts, 'pull' => trim($pullOut ?? ''), 'deploy' => $results]);
