<?php
/**
 * Header include
 * Expects: $page_title, $page_description, $current_page (set before including)
 */
if (!defined('SITE_NAME')) { require_once __DIR__ . '/../config.php'; }

// Build current page path for hreflang and lang switcher
$page_slug = ($current_page === 'home') ? '' : $current_page;
?>
<!DOCTYPE html>
<html lang="<?php echo $CURRENT_LANG; ?>">
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
<link rel="canonical" href="<?php echo SITE_URL . $lang_prefix . '/' . $page_slug; ?>">
<?php
// Hreflang tags for active languages
$active_langs = array_filter($LANGUAGES, function($v) { return $v[2]; });
if (count($active_langs) > 1):
    foreach ($active_langs as $code => $lang_info):
        $href_prefix = ($code === 'en') ? '' : '/' . $code;
        $href = SITE_URL . $href_prefix . '/' . $page_slug;
?>
<link rel="alternate" hreflang="<?php echo $code; ?>" href="<?php echo $href; ?>">
<?php endforeach; ?>
<link rel="alternate" hreflang="x-default" href="<?php echo SITE_URL . '/' . $page_slug; ?>">
<?php endif; ?>
<link rel="stylesheet" href="/assets/css/base.css?v=20260317e">
<link rel="stylesheet" href="/assets/css/style.css?v=20260317e">
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
    <a href="<?php echo $lang_prefix; ?>/" class="site-logo"><?php echo SITE_NAME; ?></a>
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
      <!-- Language selector -->
      <div class="lang-selector">
        <button class="lang-selector__toggle" aria-label="Select language">
          <span class="lang-flag"><?php echo isset($LANGUAGES[$CURRENT_LANG][3]) ? $LANGUAGES[$CURRENT_LANG][3] : ''; ?></span>
          <?php echo strtoupper($CURRENT_LANG); ?>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:12px;height:12px"><path d="M6 9l6 6 6-6"/></svg>
        </button>
        <div class="lang-selector__dropdown">
<?php
foreach ($LANGUAGES as $code => $lang_info):
    if (!$lang_info[2]) continue; // skip inactive languages
    $switch_prefix = ($code === 'en') ? '' : '/' . $code;
    $switch_url = $switch_prefix . '/' . $page_slug;
    $flag = isset($lang_info[3]) ? $lang_info[3] : '';
?>
          <a href="<?php echo $switch_url; ?>"<?php echo ($code === $CURRENT_LANG) ? ' class="active"' : ''; ?>><span class="lang-flag"><?php echo $flag; ?></span> <?php echo $lang_info[1]; ?></a>
<?php endforeach; ?>
        </div>
      </div>
      <a href="<?php echo $lang_prefix; ?>/login" class="btn btn--outline"><?php echo __('nav_login', 'Log In'); ?></a>
      <a href="/play" class="btn btn--primary" rel="nofollow"><?php echo __('nav_signup', 'Sign Up'); ?></a>
    </div>
  </div>
</header>
<!-- Mobile nav overlay (outside header to avoid backdrop-filter containment) -->
<nav class="nav-mobile" id="navMobile" aria-label="Mobile navigation">
<?php foreach ($NAV_ITEMS as $item): ?>
  <a href="<?php echo $item['url']; ?>"<?php echo ($current_page === $item['page']) ? ' class="active"' : ''; ?>><?php echo $item['label']; ?></a>
<?php endforeach; ?>
  <div class="mobile-lang">
<?php
foreach ($LANGUAGES as $code => $lang_info):
    if (!$lang_info[2]) continue;
    $m_prefix = ($code === 'en') ? '' : '/' . $code;
    $m_url = $m_prefix . '/' . $page_slug;
    $m_flag = isset($lang_info[3]) ? $lang_info[3] : '';
?>
    <a href="<?php echo $m_url; ?>"<?php echo ($code === $CURRENT_LANG) ? ' class="active"' : ''; ?>><span class="lang-flag"><?php echo $m_flag; ?></span> <?php echo strtoupper($code); ?></a>
<?php endforeach; ?>
  </div>
  <div class="mobile-actions">
    <a href="<?php echo $lang_prefix; ?>/login" class="btn btn--outline"><?php echo __('nav_login', 'Log In'); ?></a>
    <a href="/play" class="btn btn--primary" rel="nofollow"><?php echo __('nav_signup', 'Sign Up'); ?></a>
  </div>
</nav>
