<?php
/**
 * Unified Deploy Webhook
 * Pulls repo, then copies files to all site web roots.
 */

$secret   = 'cms4-microsites-deploy-2026';
$repoPath = '/home/cms4netp/repositories/cms4-microsites';
$logFile  = '/home/cms4netp/deploy.log';

$payload   = file_get_contents('php://input');
$sigHeader = $_SERVER['HTTP_X_HUB_SIGNATURE_256'] ?? '';

if (empty($sigHeader)) { http_response_code(403); die('Missing signature'); }
$expected = 'sha256=' . hash_hmac('sha256', $payload, $secret);
if (!hash_equals($expected, $sigHeader)) { http_response_code(403); die('Invalid signature'); }

$event = $_SERVER['HTTP_X_GITHUB_EVENT'] ?? '';
if ($event !== 'push') { http_response_code(200); die(json_encode(['skipped' => $event])); }

$ts      = date('Y-m-d H:i:s');
$pullOut = shell_exec("cd {$repoPath} && /usr/local/cpanel/3rdparty/bin/git pull origin main 2>&1");

$sites = [
    'casea.site'         => '/home/cms4netp/simplemicrosites',
    'vipluck-casino.com' => '/home/cms4netp/vipluck.onl',
];

$results = [];
foreach ($sites as $subdir => $dest) {
    $src = $repoPath . '/' . $subdir;
    if (!is_dir($src)) { $results[$subdir] = 'src missing'; continue; }
    $cmds = [
        "cp {$src}/.htaccess {$dest}/",
        "cp {$src}/config.php {$dest}/",
        "cp {$src}/index.php {$dest}/",
        "cp {$src}/google9bd8dc12ea09b94c.html {$dest}/ 2>/dev/null || true",
        "cp {$src}/favicon.ico {$dest}/ 2>/dev/null || true",
        "cp {$src}/site.webmanifest {$dest}/ 2>/dev/null || true",
        "cp {$src}/robots.txt {$dest}/ 2>/dev/null || true",
        "cp {$src}/sitemap.xml {$dest}/ 2>/dev/null || true",
        "cp {$repoPath}/deploy-webhook.php {$dest}/",
        "mkdir -p {$dest}/includes && cp {$src}/includes/*.php {$dest}/includes/",
        "mkdir -p {$dest}/pages && cp {$src}/pages/*.php {$dest}/pages/",
        "for L in \$(ls -d {$src}/pages/*/ 2>/dev/null | xargs -I{} basename {}); do mkdir -p {$dest}/pages/\$L && cp {$src}/pages/\$L/*.php {$dest}/pages/\$L/; done",
        "mkdir -p {$dest}/assets/css && cp {$src}/assets/css/*.css {$dest}/assets/css/",
        "mkdir -p {$dest}/assets/js && cp {$src}/assets/js/*.js {$dest}/assets/js/",
        "mkdir -p {$dest}/assets/img && cp -r {$src}/assets/img/. {$dest}/assets/img/ 2>/dev/null || true",
        "mkdir -p {$dest}/lang && cp {$src}/lang/*.php {$dest}/lang/",
    ];
    foreach ($cmds as $c) { shell_exec($c . ' 2>&1'); }
    $results[$subdir] = 'deployed';
}

$log = "[{$ts}] Pull:\n{$pullOut}\nDeploy: " . json_encode($results) . "\n---\n";
file_put_contents($logFile, $log, FILE_APPEND);

http_response_code(200);
echo json_encode(['timestamp' => $ts, 'pull' => trim($pullOut ?? ''), 'deploy' => $results]);
