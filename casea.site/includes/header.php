<?php
/**
 * Header include
 * Expects: $page_title, $page_description, $current_page (set before including)
 */
if (!defined('SITE_NAME')) { require_once __DIR__ . '/../config.php'; }
?>
<!DOCTYPE html>
<html lang="<?php echo $CURRENT_LANG; ?>">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $page_title; ?></title>
<meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
<meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
<meta property="og:type" content="<?php echo META_OG_TYPE; ?>">
<link rel="canonical" href="<?php echo SITE_URL . '/' . ($current_page === 'home' ? '' : $current_page); ?>">
<link rel="stylesheet" href="/assets/css/base.css">
<link rel="stylesheet" href="/assets/css/style.css">
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
<header class="site-header">
  <div class="container">
    <a href="/" class="site-logo"><?php echo SITE_NAME; ?></a>
    <button class="nav-toggle" aria-label="Toggle menu">
      <span></span><span></span><span></span>
    </button>
    <nav class="nav-main" aria-label="Main navigation">
<?php foreach ($NAV_ITEMS as $item): ?>
      <a href="<?php echo $item['url']; ?>"<?php echo ($current_page === $item['page']) ? ' class="active"' : ''; ?>><?php echo $item['label']; ?></a>
<?php endforeach; ?>
      <div class="mobile-actions">
        <a href="/play" class="btn btn--outline" rel="nofollow">Log In</a>
        <a href="/play" class="btn btn--primary" rel="nofollow"><?php echo CTA_SIGNUP_LABEL; ?></a>
      </div>
    </nav>
    <div class="nav-actions">
      <!-- Language selector -->
      <div class="lang-selector">
        <button class="lang-selector__toggle" aria-label="Select language">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
          <?php echo strtoupper($CURRENT_LANG); ?>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:12px;height:12px"><path d="M6 9l6 6 6-6"/></svg>
        </button>
        <div class="lang-selector__dropdown">
<?php foreach ($LANGUAGES as $code => $lang): ?>
          <a href="?lang=<?php echo $code; ?>"<?php echo ($code === $CURRENT_LANG) ? ' class="active"' : ''; ?>><?php echo $lang[1]; ?></a>
<?php endforeach; ?>
        </div>
      </div>
      <a href="/play" class="btn btn--outline" rel="nofollow">Log In</a>
      <a href="/play" class="btn btn--primary" rel="nofollow"><?php echo CTA_SIGNUP_LABEL; ?></a>
    </div>
  </div>
</header>
