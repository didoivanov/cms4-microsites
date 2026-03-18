<?php
/**
 * Privacy Policy - WestAce (UK English)
 */
$page_title = 'WestAce Privacy Policy - How We Protect Your Data';
$page_description = 'Privacy policy for ' . DOMAIN . '. Learn how we handle your data as an independent affiliate review site, your rights under UK GDPR, and how to contact the ICO.';
$current_page = 'privacy';
$lang_prefix = '/uk';

require_once __DIR__ . '/../../includes/header.php';
?>

<main>
  <section class="content-section legal-page">
    <div class="container container--narrow">
      <h1>Privacy Policy</h1>
      <p class="legal-updated">Last updated: 18 March 2026</p>

      <h2>Who We Are</h2>
      <p><?php echo DOMAIN; ?> is an independent affiliate website that publishes informational content and reviews about <?php echo SITE_NAME; ?> Casino. We are not a casino, we do not accept bets, and we do not process gambling transactions of any kind. When you click certain links on our site, you may be redirected to the casino operator's website, which is governed by its own privacy policy and terms.</p>

      <h2>What Data We Collect</h2>
      <p>We keep data collection to an absolute minimum. We do not require registration, accounts, or personal details to browse this site. The data we may collect includes:</p>
      <ul>
        <li><strong>Anonymised analytics data</strong> -- page views, approximate geographic region, device type, and referral source. This helps us understand how the site is used and improve our content.</li>
        <li><strong>Cookies and similar technologies</strong> -- small text files stored in your browser for analytics and basic site functionality. See our <a href="<?php echo $lang_prefix; ?>/cookies">Cookie Policy</a> for full details.</li>
        <li><strong>Server logs</strong> -- your IP address, browser type, and pages visited may be recorded automatically by our hosting provider for security and operational purposes. These logs are retained for a limited period and are not used for marketing.</li>
      </ul>
      <p>We do not collect names, email addresses, phone numbers, payment details, or any other personally identifiable information through this website. We do not store financial data, betting history, or any customer account information.</p>

      <h2>How We Use Data</h2>
      <p>Any data collected is used solely to:</p>
      <ul>
        <li>Understand visitor traffic and improve site content</li>
        <li>Ensure the site functions correctly</li>
        <li>Detect and prevent abuse or security threats</li>
      </ul>
      <p>We do not sell, rent, or share personal data with third parties for marketing purposes.</p>

      <h2>Third-Party Services</h2>
      <p>We may use the following third-party services, each governed by its own privacy policy:</p>
      <ul>
        <li><strong>Google Analytics</strong> -- for anonymised traffic analysis</li>
        <li><strong>Cloudflare</strong> -- for content delivery and security</li>
        <li><strong>Affiliate partner links</strong> -- when you click a link to visit <?php echo SITE_NAME; ?> Casino, you leave our site and are subject to the casino operator's privacy practices</li>
      </ul>

      <h2>Your Rights Under UK GDPR</h2>
      <p>Under the UK General Data Protection Regulation (UK GDPR) and the Data Protection Act 2018, you have the right to:</p>
      <ul>
        <li>Request access to any personal data we hold about you</li>
        <li>Request correction or deletion of that data</li>
        <li>Object to or restrict processing</li>
        <li>Data portability -- receive your data in a structured, machine-readable format</li>
        <li>Withdraw consent at any time (e.g. by disabling cookies in your browser)</li>
        <li>Lodge a complaint with the Information Commissioner's Office (ICO)</li>
      </ul>
      <p>Since we do not collect personal data through this site, these rights are unlikely to be relevant in practice. However, if you have any concerns, please contact us.</p>

      <h2>Information Commissioner's Office (ICO)</h2>
      <p>If you are unhappy with how we handle your data, you have the right to complain to the UK's data protection supervisory authority:</p>
      <ul>
        <li><strong>Information Commissioner's Office (ICO)</strong></li>
        <li>Website: <a href="https://www.ico.org.uk" target="_blank" rel="noopener noreferrer">ico.org.uk</a></li>
        <li>Helpline: 0303 123 1113</li>
      </ul>

      <h2>Data Retention</h2>
      <p>Server logs are retained for up to 90 days. Analytics data is aggregated and anonymised. We do not maintain any database of user information.</p>

      <h2>International Transfers</h2>
      <p>Some third-party services we use (such as Google Analytics and Cloudflare) may process data outside the United Kingdom. Where this occurs, appropriate safeguards are in place in accordance with UK GDPR requirements, including standard contractual clauses and adequacy decisions recognised by the UK government.</p>

      <h2>Children</h2>
      <p>This website is intended for adults aged 18 and over. We do not knowingly collect data from anyone under 18.</p>

      <h2>Contact</h2>
      <p>If you have questions about this privacy policy, you can reach us at <a href="mailto:info@westace.site">info@westace.site</a> or visit our <a href="<?php echo $lang_prefix; ?>/support">Support</a> page.</p>

      <h2>Changes to This Policy</h2>
      <p>We may update this policy from time to time. Any changes will be posted on this page with an updated revision date.</p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
