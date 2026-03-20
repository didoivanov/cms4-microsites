<?php
/**
 * Footer include
 * Expects config.php loaded, $LANG available
 */
if (!defined('SITE_NAME')) { require_once __DIR__ . '/../config.php'; }
?>

<!-- CTA Banner (appears on all pages) -->
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
        <a href="<?php echo $lang_prefix; ?>/" class="site-logo"><?php echo SITE_NAME; ?></a>
        <p><?php echo __('footer_brand_desc', 'Over 10,000 games, 90+ providers, a full sportsbook, and 24/7 live support. Play casino games, bet on sports, and enjoy generous bonus offers.'); ?></p>
        <div class="footer-badges">
          <span class="footer-badge">&#128274; SSL</span>
          <span class="footer-badge">18+</span>
          <span class="footer-badge">&#9917; <?php echo __('footer_sportsbook', 'Sportsbook'); ?></span>
        </div>
      </div>
      <div class="footer-col">
        <h5>Casino</h5>
        <ul>
          <li><a href="<?php echo $lang_prefix; ?>/bonuses"><?php echo __('nav_bonuses', 'Bonuses'); ?></a></li>
          <li><a href="<?php echo $lang_prefix; ?>/#games"><?php echo __('games', 'Games'); ?></a></li>
          <li><a href="<?php echo $lang_prefix; ?>/#sports"><?php echo __('footer_sportsbook', 'Sportsbook'); ?></a></li>
          <li><a href="<?php echo $lang_prefix; ?>/#payments"><?php echo __('footer_payments', 'Payments'); ?></a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h5><?php echo __('footer_help', 'Help'); ?></h5>
        <ul>
          <li><a href="<?php echo $lang_prefix; ?>/login"><?php echo __('nav_login', 'Log In'); ?></a></li>
          <li><a href="<?php echo $lang_prefix; ?>/support"><?php echo __('footer_contact_support', 'Contact Support'); ?></a></li>
          <li><a href="<?php echo $lang_prefix; ?>/withdrawal"><?php echo __('nav_withdrawal', 'Withdrawal'); ?></a></li>
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
        <p class="footer-disclaimer"><?php echo sprintf(__('footer_disclaimer', 'This website is an independent affiliate site and is not operated by %s Casino. All casino games and sports betting services are provided by %s. We may receive a commission for referrals. Gambling can be addictive -- play responsibly. You must be 18 years or older to participate. Bonus terms, wagering requirements, and withdrawal conditions apply. Please verify the availability of services in your jurisdiction before registering.'), SITE_NAME, SITE_NAME); ?></p>
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
      <span class="sticky-cta__bonus"><?php echo __('sticky_bonus', '100% up to &euro;500 + 200 Free Spins'); ?></span>
    </div>
    <a href="/play" class="btn btn--primary" rel="nofollow"><?php echo __('cta_play', 'Play Now'); ?></a>
  </div>
</div>

<?php
// Currency config for JS (winners, jackpot counter)
$CURRENCY_MAP = [
    'pl' => ['symbol' => 'PLN ', 'suffix' => '', 'multiplier' => 4.27, 'locale' => 'pl-PL', 'jackpot_base' => 12150000],
    'hu' => ['symbol' => '',     'suffix' => ' Ft', 'multiplier' => 390, 'locale' => 'hu-HU', 'jackpot_base' => 1110000000],
];
$cur = isset($CURRENCY_MAP[$CURRENT_LANG]) ? $CURRENCY_MAP[$CURRENT_LANG] : ['symbol' => '&euro;', 'suffix' => '', 'multiplier' => 1, 'locale' => 'en-US', 'jackpot_base' => 2847391];
?>
<script>
window.CASINO_CURRENCY = {
  symbol: '<?php echo $cur["symbol"]; ?>',
  suffix: '<?php echo $cur["suffix"]; ?>',
  multiplier: <?php echo $cur["multiplier"]; ?>,
  locale: '<?php echo $cur["locale"]; ?>',
  jackpotBase: <?php echo $cur["jackpot_base"]; ?>
};
</script>
<script src="/assets/js/app.js?v=20260317e"></script>
</body>
</html>
