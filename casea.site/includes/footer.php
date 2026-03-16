<?php
/**
 * Footer include
 * Expects config.php loaded
 */
if (!defined('SITE_NAME')) { require_once __DIR__ . '/../config.php'; }
?>

<!-- CTA Banner (appears on all pages) -->
<section class="content-section cta-banner">
  <div class="container">
    <h2>Ready to Get Started?</h2>
    <p>Create your account in under a minute and claim your welcome bonus today.</p>
    <a href="<?php echo CTA_SIGNUP_URL; ?>" class="btn btn--primary btn--lg" target="_blank" rel="noopener"><?php echo CTA_SIGNUP_LABEL; ?></a>
  </div>
</section>

<!-- FOOTER -->
<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="/" class="site-logo"><?php echo SITE_NAME; ?></a>
        <p>Over 10,000 games, 90+ providers, a full sportsbook, and 24/7 live support. Play casino games, bet on sports, and enjoy generous bonus offers.</p>
        <div class="footer-badges">
          <span class="footer-badge">&#128274; SSL Encrypted</span>
          <span class="footer-badge">18+</span>
          <span class="footer-badge">&#9917; Sportsbook</span>
        </div>
      </div>
      <div class="footer-col">
        <h5>Casino</h5>
        <ul>
          <li><a href="/bonuses">Bonuses</a></li>
          <li><a href="/#games">Games</a></li>
          <li><a href="/#sports">Sportsbook</a></li>
          <li><a href="/#payments">Payments</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h5>Help</h5>
        <ul>
          <li><a href="/login">Login</a></li>
          <li><a href="/support">Contact Support</a></li>
          <li><a href="/withdrawal">Withdrawal</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h5>Legal</h5>
        <ul>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms &amp; Conditions</a></li>
          <li><a href="#">Responsible Gambling</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="footer-bottom__inner">
        <p class="footer-disclaimer">This website is an independent affiliate site and is not operated by <?php echo SITE_NAME; ?> Casino. All casino games and sports betting services are provided by <?php echo SITE_NAME; ?>. We may receive a commission for referrals. Gambling can be addictive -- play responsibly. You must be 18 years or older to participate. Bonus terms, wagering requirements, and withdrawal conditions apply. Please verify the availability of services in your jurisdiction before registering.</p>
        <div class="footer-legal-links">
          <a href="#">Privacy</a>
          <a href="#">Terms</a>
          <a href="#">Cookies</a>
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
      <span class="sticky-cta__bonus"><?php echo WELCOME_BONUS; ?></span>
    </div>
    <a href="<?php echo CTA_URL; ?>" class="btn btn--primary" target="_blank" rel="noopener"><?php echo CTA_LABEL; ?></a>
  </div>
</div>

<script src="/assets/js/app.js"></script>
</body>
</html>
