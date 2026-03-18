<?php
/**
 * Footer include - WestAce
 * Expects config.php loaded, $LANG available
 */
if (!defined('SITE_NAME')) { require_once __DIR__ . '/../config.php'; }
?>

<!-- CTA Banner -->
<section class="content-section cta-banner">
  <div class="container">
    <h2><?php echo __('cta_ready', 'Ready to Get Started?'); ?></h2>
    <p><?php echo __('cta_ready_desc', 'Create your account in under a minute and claim your welcome bonus today.'); ?></p>
    <a href="/play" class="btn btn--primary btn--lg" rel="nofollow"><?php echo __('nav_signup', 'Sign Up'); ?></a>
  </div>
</section>

<!-- FOOTER -->
<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="/" class="site-logo"><?php echo SITE_NAME; ?></a>
        <p><?php echo __('footer_brand_desc', 'Over 7,000 games, 100+ providers, full sportsbook, and 24/7 live support. Play casino games, bet on sports, and enjoy generous bonus offers.'); ?></p>
        <div class="footer-badges">
          <span class="footer-badge">&#128274; SSL</span>
          <span class="footer-badge">18+</span>
        </div>
      </div>
      <div class="footer-col">
        <h5>Casino</h5>
        <ul>
          <li><a href="/bonuses"><?php echo __('nav_bonuses', 'Bonuses'); ?></a></li>
          <li><a href="/#games"><?php echo __('games', 'Games'); ?></a></li>
          <li><a href="/sports"><?php echo __('nav_sports', 'Sports'); ?></a></li>
          <li><a href="/#payments"><?php echo __('footer_payments', 'Payments'); ?></a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h5><?php echo __('footer_help', 'Help'); ?></h5>
        <ul>
          <li><a href="/login"><?php echo __('nav_login', 'Log In'); ?></a></li>
          <li><a href="/support"><?php echo __('footer_contact_support', 'Contact Support'); ?></a></li>
          <li><a href="/withdrawal"><?php echo __('nav_withdrawal', 'Withdrawal'); ?></a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h5><?php echo __('footer_legal', 'Legal'); ?></h5>
        <ul>
          <li><a href="/privacy"><?php echo __('footer_privacy', 'Privacy Policy'); ?></a></li>
          <li><a href="/terms"><?php echo __('footer_terms', 'Terms & Conditions'); ?></a></li>
          <li><a href="/responsible-gambling"><?php echo __('footer_responsible', 'Responsible Gambling'); ?></a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="footer-bottom__inner">
        <p class="footer-disclaimer"><?php echo sprintf(__('footer_disclaimer', 'This website is an independent affiliate site and is not operated by %s Casino. All casino games are provided by %s. We may receive a commission for referrals. Gambling can be addictive -- play responsibly. You must be 18 years or older to participate. Bonus terms, wagering requirements, and withdrawal conditions apply. Please verify the availability of services in your jurisdiction before registering.'), SITE_NAME, SITE_NAME); ?></p>
        <div class="footer-legal-links">
          <a href="/privacy"><?php echo __('footer_privacy_short', 'Privacy'); ?></a>
          <a href="/terms"><?php echo __('footer_terms_short', 'Terms'); ?></a>
          <a href="/cookies">Cookies</a>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- STICKY CTA -->
<div class="sticky-cta" id="stickyCta">
  <div class="container">
    <div class="sticky-cta__text">
      <span><?php echo SITE_NAME; ?> Casino</span>
      <span class="sticky-cta__bonus"><?php echo __('sticky_bonus', '100% up to &euro;1,000 + 50 Free Spins'); ?></span>
    </div>
    <a href="/play" class="btn btn--primary" rel="nofollow"><?php echo __('cta_play', 'Play Now'); ?></a>
  </div>
</div>

<script>
window.CASINO_CURRENCY = {
  symbol: '\u20AC',
  suffix: '',
  multiplier: 1,
  locale: 'de-DE',
  jackpotBase: 2847391
};
</script>
<script src="/assets/js/app.js?v=20260318"></script>
</body>
</html>
