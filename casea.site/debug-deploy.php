<?php
// Temporary debug - remove after fixing
$repoPath = '/home/cms4netp/simplemicrosites';
$out = [];
$out['repo_exists'] = is_dir($repoPath);
$out['repo_ls'] = shell_exec("ls -la {$repoPath}/ 2>&1");
$out['casea_exists'] = is_dir($repoPath . '/casea.site');
$out['vipluck_exists'] = is_dir($repoPath . '/vipluck-casino.com');
$out['git_status'] = shell_exec("cd {$repoPath} && git status --short 2>&1");
$out['git_log'] = shell_exec("cd {$repoPath} && git log --oneline -3 2>&1");
$out['whoami'] = shell_exec("whoami 2>&1");
header('Content-Type: application/json');
echo json_encode($out, JSON_PRETTY_PRINT);
