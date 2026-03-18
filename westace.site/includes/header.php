<?php
/**
 * Header include - WestAce
 * Expects: $page_title, $page_description, $current_page (set before including)
 */
if (!defined('SITE_NAME')) { require_once __DIR__ . '/../config.php'; }

$page_slug = ($current_page === 'home') ? '' : $current_page;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $page_title; ?></title>
<meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
<meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
<meta property="og:type" content="<?php echo META_OG_TYPE; ?>">
<link rel="canonical" href="<?php echo SITE_URL . '/' . $page_slug; ?>">
<link rel="stylesheet" href="/assets/css/base.css?v=20260318">
<link rel="stylesheet" href="/assets/css/style.css?v=20260318">
<?php if (!empty($THEME)): ?>
<style>
:root {
<?php foreach ($THEME as $prop => $val): ?>
  --<?php echo $prop; ?>: <?php echo $val; ?>;
<?php endforeach; ?>
}
</style>
<?php endif; ?>
</head>
<body>

<!-- HEADER -->
<header class="site-header" style="background:rgba(20,16,11,0.95)">
  <div class="container">
    <a href="/" class="site-logo" aria-label="<?php echo SITE_NAME; ?> Casino home">
      <svg fill="none" height="38" viewBox="0 0 220 38" xmlns="http://www.w3.org/2000/svg">
        <!-- Bowling pin icon -->
        <ellipse cx="16" cy="28" rx="7" ry="9" fill="#d4a017" opacity="0.9"/>
        <ellipse cx="16" cy="16" rx="4.5" ry="5" fill="#d4a017"/>
        <ellipse cx="16" cy="8" rx="3" ry="3.5" fill="#e8b730"/>
        <rect x="12.5" y="11" width="7" height="5" rx="2" fill="#d4a017"/>
        <ellipse cx="16" cy="13.5" rx="3.2" ry="1.2" fill="#b8880f" opacity="0.5"/>
        <!-- "West" in elegant serif -->
        <text x="34" y="27" font-family="Georgia, 'Times New Roman', serif" font-size="24" font-weight="400" fill="#d4a017" letter-spacing="1">West</text>
        <!-- "Ace" in bold -->
        <text x="110" y="27" font-family="Georgia, 'Times New Roman', serif" font-size="24" font-weight="700" fill="#e8b730" letter-spacing="1">Ace</text>
      </svg>
    </a>
    <a href="/play" class="btn btn--primary btn--mobile-cta" rel="nofollow"><?php echo __('cta_play', 'Play Now'); ?></a>
    <button class="nav-toggle" aria-label="Toggle menu">
      <span></span><span></span><span></span>
    </button>
    <nav class="nav-main nav-main--desktop" aria-label="Main navigation">
<?php foreach ($NAV_ITEMS as $item): ?>
      <a href="<?php echo $item['url']; ?>"<?php echo ($current_page === $item['page']) ? ' class="active"' : ''; ?>><?php echo $item['label']; ?></a>
<?php endforeach; ?>
    </nav>
    <div class="nav-actions">
      <a href="/login" class="btn btn--outline"><?php echo __('nav_login', 'Log In'); ?></a>
      <a href="/play" class="btn btn--primary" rel="nofollow"><?php echo __('nav_signup', 'Sign Up'); ?></a>
    </div>
  </div>
</header>
<!-- Mobile nav overlay -->
<nav class="nav-mobile" id="navMobile" aria-label="Mobile navigation">
<?php foreach ($NAV_ITEMS as $item): ?>
  <a href="<?php echo $item['url']; ?>"<?php echo ($current_page === $item['page']) ? ' class="active"' : ''; ?>><?php echo $item['label']; ?></a>
<?php endforeach; ?>
  <div class="mobile-actions">
    <a href="/login" class="btn btn--outline"><?php echo __('nav_login', 'Log In'); ?></a>
    <a href="/play" class="btn btn--primary" rel="nofollow"><?php echo __('nav_signup', 'Sign Up'); ?></a>
  </div>
</nav>
