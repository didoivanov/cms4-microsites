<?php
$secret  = 'cms4-microsites-deploy-2026';

$payload   = file_get_contents('php://input');
$sigHeader = $_SERVER['HTTP_X_HUB_SIGNATURE_256'] ?? '';
if (empty($sigHeader)) { http_response_code(403); die('Missing signature'); }
$expected = 'sha256=' . hash_hmac('sha256', $payload, $secret);
if (!hash_equals($expected, $sigHeader)) { http_response_code(403); die('Invalid signature'); }

$event = $_SERVER['HTTP_X_GITHUB_EVENT'] ?? '';
if ($event !== 'push') { http_response_code(200); die(json_encode(['skipped' => $event])); }

// Report location info
http_response_code(200);
echo json_encode([
    'file' => __FILE__,
    'dir' => __DIR__,
    'docroot' => $_SERVER['DOCUMENT_ROOT'] ?? 'none',
    'script' => $_SERVER['SCRIPT_FILENAME'] ?? 'none',
]);
