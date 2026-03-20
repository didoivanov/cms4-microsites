<?php
/**
 * Cookie Policy - VipLuck
 */
$page_title = 'Cookie Policy - ' . SITE_NAME . ' Casino';
$page_description = 'Cookie policy for ' . SITE_DOMAIN . '. Learn what cookies we use and how to manage them.';
$current_page = 'cookies';

require_once __DIR__ . '/../includes/header.php';
?>

<main>
  <section class="content-section legal-page">
    <div class="container container--narrow">
      <h1>Cookie Policy</h1>
      <p class="legal-updated">Last updated: 20 March 2026</p>

      <h2>What Are Cookies</h2>
      <p>Cookies are small text files placed on your device when you visit a website. They are widely used to make sites work properly, remember your preferences, and provide anonymised usage data to site owners.</p>

      <h2>How We Use Cookies</h2>
      <p><?php echo SITE_DOMAIN; ?> is a lightweight affiliate information site. We do not use cookies for advertising, personalisation, or tracking across other websites. The cookies on this site fall into three categories:</p>

      <h3>Essential Cookies</h3>
      <p>These are required for the site to function correctly. They include cookies set by our hosting provider (Cloudflare) for security and performance, such as bot detection and DDoS protection. These cannot be disabled without affecting site functionality.</p>
      <table class="data-table">
        <thead>
          <tr><th>Cookie</th><th>Provider</th><th>Purpose</th><th>Duration</th></tr>
        </thead>
        <tbody>
          <tr><td>__cf_bm</td><td>Cloudflare</td><td>Bot management and security</td><td>30 minutes</td></tr>
          <tr><td>cf_clearance</td><td>Cloudflare</td><td>Security challenge verification</td><td>Up to 1 year</td></tr>
        </tbody>
      </table>

      <h3>Analytics Cookies</h3>
      <p>We may use Google Analytics to understand how visitors interact with the site, such as which pages are most popular and how visitors arrive. This data is anonymised and aggregated. No personally identifiable information is collected.</p>
      <table class="data-table">
        <thead>
          <tr><th>Cookie</th><th>Provider</th><th>Purpose</th><th>Duration</th></tr>
        </thead>
        <tbody>
          <tr><td>_ga</td><td>Google Analytics</td><td>Distinguishes unique visitors</td><td>2 years</td></tr>
          <tr><td>_ga_*</td><td>Google Analytics</td><td>Maintains session state</td><td>2 years</td></tr>
        </tbody>
      </table>

      <h3>Marketing / Affiliate Cookies</h3>
      <p>We do not set marketing cookies ourselves. However, when you click an affiliate link on our site, the destination platform may set cookies to track the referral. These cookies are set by the third party and are governed by their cookie policy, not ours.</p>

      <h2>Third-Party Cookies</h2>
      <p>When you click an affiliate link and leave our site, the destination website may set its own cookies. We have no control over these. Please refer to the casino operator's cookie policy for details.</p>

      <h2>Cookie Consent</h2>
      <p>Under the EU ePrivacy Directive and GDPR, we are required to obtain your consent before placing non-essential cookies on your device. Essential cookies that are strictly necessary for the site to function do not require consent. By continuing to use this site, you consent to the use of analytics cookies as described above. You may withdraw consent at any time by adjusting your browser settings.</p>

      <h2>Managing Cookies</h2>
      <p>You can control and delete cookies through your browser settings. Most browsers allow you to:</p>
      <ul>
        <li>View what cookies are stored and delete them individually</li>
        <li>Block third-party cookies</li>
        <li>Block all cookies from specific sites</li>
        <li>Block all cookies entirely</li>
        <li>Delete all cookies when you close the browser</li>
      </ul>
      <p>Disabling cookies may affect site functionality, particularly security features provided by Cloudflare.</p>
      <p>For instructions on managing cookies in your browser:</p>
      <ul>
        <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener noreferrer">Google Chrome</a></li>
        <li><a href="https://support.mozilla.org/en-US/kb/cookies-information-websites-store-on-your-computer" target="_blank" rel="noopener noreferrer">Mozilla Firefox</a></li>
        <li><a href="https://support.apple.com/en-gb/guide/safari/sfri11471/mac" target="_blank" rel="noopener noreferrer">Safari</a></li>
        <li><a href="https://support.microsoft.com/en-gb/microsoft-edge/delete-cookies-in-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank" rel="noopener noreferrer">Microsoft Edge</a></li>
      </ul>

      <h2>Changes to This Policy</h2>
      <p>We may update this cookie policy from time to time. Any changes will be posted on this page with an updated revision date.</p>

      <h2>Contact</h2>
      <p>If you have questions about our use of cookies, please contact us at <a href="mailto:info@<?php echo SITE_DOMAIN; ?>">info@<?php echo SITE_DOMAIN; ?></a> or visit our <a href="/support">Support</a> page.</p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
