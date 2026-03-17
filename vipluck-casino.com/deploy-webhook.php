<?php
/**
 * GitHub Webhook → Deploy both VipLuck + Casea
 * Receives push events, pulls repo, then copies files to web roots.
 */

// ─── Config ──────────────────────────────────────────────────────
$secret    = 'cms4-microsites-deploy-2026';
$repoPath  = '/home/cms4netp/repositories/cms4-microsites';
$logFile   = '/home/cms4netp/deploy-vipluck.log';

// Deploy targets
$sites = [
    'vipluck' => [
        'src'  => $repoPath . '/vipluck-casino.com',
        'dest' => '/home/cms4netp/vipluck.onl',
    ],
    'casea' => [
        'src'  => $repoPath . '/casea.site',
        'dest' => '/home/cms4netp/simplemicrosites',
    ],
];

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
$pullCmd = "cd {$repoPath} && /usr/local/cpanel/3rdparty/bin/git pull origin main 2>&1";
$pullOut = shell_exec($pullCmd);
$log = "[{$ts}] Pull:\n{$pullOut}\n";

// ─── Deploy files to web roots ───────────────────────────────────
$results = [];

foreach ($sites as $name => $site) {
    $src  = $site['src'];
    $dest = $site['dest'];
    
    if (!is_dir($src)) {
        $results[$name] = "SKIP: src not found ($src)";
        continue;
    }
    
    $cmds = [
        // Core files
        "cp {$src}/.htaccess {$dest}/",
        "cp {$src}/config.php {$dest}/",
        "cp {$src}/index.php {$dest}/",
        "cp {$src}/deploy-webhook.php {$dest}/ 2>/dev/null || true",
        // Google verification
        "cp {$src}/google9bd8dc12ea09b94c.html {$dest}/ 2>/dev/null || true",
        // Favicon / manifest
        "cp {$src}/favicon.ico {$dest}/ 2>/dev/null || true",
        "cp {$src}/site.webmanifest {$dest}/ 2>/dev/null || true",
        // Includes
        "mkdir -p {$dest}/includes && cp {$src}/includes/*.php {$dest}/includes/",
        // Pages (EN + all langs)
        "mkdir -p {$dest}/pages && cp {$src}/pages/*.php {$dest}/pages/",
        "for L in de el pl it fr es hu sl; do if [ -d {$src}/pages/\$L ]; then mkdir -p {$dest}/pages/\$L && cp {$src}/pages/\$L/*.php {$dest}/pages/\$L/; fi; done",
        // Assets
        "mkdir -p {$dest}/assets/css && cp {$src}/assets/css/*.css {$dest}/assets/css/",
        "mkdir -p {$dest}/assets/js && cp {$src}/assets/js/*.js {$dest}/assets/js/",
        "mkdir -p {$dest}/assets/img && cp -r {$src}/assets/img/. {$dest}/assets/img/ 2>/dev/null || true",
        // Language files
        "mkdir -p {$dest}/lang && cp {$src}/lang/*.php {$dest}/lang/",
    ];
    
    $siteOut = '';
    foreach ($cmds as $c) {
        $siteOut .= shell_exec($c . ' 2>&1') . "\n";
    }
    $results[$name] = "deployed";
}

$log .= "Deploy results: " . json_encode($results) . "\n---\n";
file_put_contents($logFile, $log, FILE_APPEND);

http_response_code(200);
echo json_encode([
    'timestamp' => $ts,
    'pull' => trim($pullOut),
    'deploy' => $results,
]);
