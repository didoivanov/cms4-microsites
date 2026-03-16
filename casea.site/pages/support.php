<?php
/**
 * Support Page
 */
$page_title = SITE_NAME . ' Customer Support - Live Chat, Email & Help Center';
$page_description = 'Reach ' . SITE_NAME . ' Casino customer support via 24/7 live chat or email. Get help with deposits, withdrawals, bonuses, account issues, and technical questions.';
$current_page = 'support';

require_once __DIR__ . '/../includes/header.php';

$hero_title = SITE_NAME . ' Customer Support';
$hero_description = 'We are here to help with any questions about your account, deposits, withdrawals, bonuses, or technical issues. Reach out any time.';
$hero_cta = 'Open Live Chat';
require_once __DIR__ . '/../includes/page-hero.php';
?>

<main>
  <!-- Contact Options -->
  <section class="content-section" id="contact">
    <div class="container">
      <h2>How to Reach Us</h2>
      <p><?php echo SITE_NAME; ?> offers two main support channels, both available around the clock. Whether you have a quick question about a promotion or need help resolving a payment issue, the team is ready to assist.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128172;</div>
          <h4>Live Chat</h4>
          <p>The fastest way to get help. Click the chat icon on any page of the website to start a conversation with a support agent. Average response time is under 2 minutes during regular hours. Available 24 hours a day, 7 days a week.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9993;</div>
          <h4>Email Support</h4>
          <p>For detailed questions or document submissions, email is the best option. Send your inquiry and expect a response within 24 hours. Be sure to include your account details and a clear description of the issue.</p>
        </div>
      </div>

      <table class="data-table" style="margin-top: var(--space-8);">
        <thead>
          <tr>
            <th>Channel</th>
            <th>Availability</th>
            <th>Response Time</th>
            <th>Best For</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Live Chat</td>
            <td>24/7</td>
            <td>Under 2 minutes</td>
            <td>Quick questions, bonus help, deposit issues</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>24/7</td>
            <td>Up to 24 hours</td>
            <td>Document uploads, detailed cases, complaints</td>
          </tr>
          <tr>
            <td>Phone</td>
            <td>Not available</td>
            <td>-</td>
            <td>-</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- What Support Can Help With -->
  <section class="content-section content-section--alt" id="topics">
    <div class="container">
      <h2>What Can Support Help With?</h2>
      <p>The customer support team handles a wide range of topics. Here are the most common areas where players reach out for assistance:</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Account &amp; Registration</h4>
          <p>Help with creating an account, updating personal information, resetting passwords, and resolving login issues. If your account is locked or restricted, support can review your status.</p>
        </div>
        <div class="info-card">
          <h4>Deposits &amp; Payments</h4>
          <p>Assistance with failed deposits, payment method questions, currency options, and transaction status checks. Support can also help if a deposit does not appear in your balance.</p>
        </div>
        <div class="info-card">
          <h4>Withdrawals &amp; Payouts</h4>
          <p>Questions about withdrawal processing times, pending requests, declined payouts, and limit adjustments. For detailed withdrawal information, visit the <a href="/withdrawal">Withdrawal page</a>.</p>
        </div>
        <div class="info-card">
          <h4>Bonuses &amp; Promotions</h4>
          <p>Clarification on bonus terms, wagering requirements, activation of offers, and cancellation of active bonuses. Support can explain specific promotion details and eligibility conditions.</p>
        </div>
        <div class="info-card">
          <h4>Verification &amp; KYC</h4>
          <p>Guidance on document submission, verification status, accepted document types, and timeline estimates. You can upload documents in your account settings, but support can assist if issues arise.</p>
        </div>
        <div class="info-card">
          <h4>Technical Issues</h4>
          <p>Help with games not loading, website errors, mobile compatibility problems, and browser-related issues. Support can troubleshoot and escalate technical bugs to the development team.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Contacting Support -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Getting the Most From Your Support Request</h2>
      <p>A few simple steps can help the support team resolve your issue faster:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Have your account details ready.</strong> Your email address or username helps support locate your account quickly. If the issue involves a specific transaction, have the reference number handy.
          </div>
        </li>
        <li>
          <div>
            <strong>Describe the problem clearly.</strong> Explain what happened, when it happened, and what you expected to happen. Screenshots are helpful for technical issues or disputed transactions.
          </div>
        </li>
        <li>
          <div>
            <strong>Use the right channel.</strong> For urgent issues (locked account, failed deposit), live chat is your best bet. For document submissions or complex cases requiring investigation, email gives the team more room to work.
          </div>
        </li>
        <li>
          <div>
            <strong>Check the FAQ first.</strong> Many common questions about bonuses, withdrawals, and account management are covered in the FAQ sections throughout this site. A quick check might save you the wait.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Responsible Gambling -->
  <section class="content-section content-section--alt" id="responsible">
    <div class="container container--narrow">
      <h2>Responsible Gambling &amp; Self-Exclusion</h2>
      <p><?php echo SITE_NAME; ?> takes responsible gambling seriously. If you feel that your gambling habits are becoming a problem, the support team can help you set deposit limits, cooling-off periods, or arrange a self-exclusion from the platform.</p>
      <p>Self-exclusion options range from temporary breaks to permanent account closure. Once activated, self-exclusion cannot be reversed until the set period expires. Contact support via live chat or email to discuss available options.</p>
      <p>For external support, you can reach out to organizations like GamCare or Gamblers Anonymous for free, confidential advice and counseling.</p>
    </div>
  </section>

  <!-- Support FAQ -->
  <section class="content-section" id="support-faq">
    <div class="container container--narrow">
      <h2>Support FAQ</h2>

      <details class="faq-item">
        <summary>Is <?php echo SITE_NAME; ?> support available in multiple languages?</summary>
        <div class="faq-answer">
          <p>The website supports Polish, English, Finnish, German, Hungarian, Norwegian, Italian, Spanish, Czech, and Portuguese. Support agents can typically assist in English and may be able to help in other listed languages depending on availability.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>How quickly will live chat respond?</summary>
        <div class="faq-answer">
          <p>During normal conditions, live chat responses come within 1-2 minutes. During peak hours or high traffic periods, wait times may be slightly longer, but the team works to keep delays to a minimum.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Can support help me cancel a bonus?</summary>
        <div class="faq-answer">
          <p>Yes. If you want to cancel an active bonus, you can do it yourself from the Profile section of your account, or contact support via live chat or email. Keep in mind that canceling a bonus removes the bonus amount and any winnings generated from it.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What if my issue is not resolved?</summary>
        <div class="faq-answer">
          <p>If you are not satisfied with the initial response, ask for your case to be escalated to a senior agent or supervisor. For unresolved disputes, you may also refer to the casino's complaint procedures outlined in the Terms and Conditions.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Can I request deposit or loss limits?</summary>
        <div class="faq-answer">
          <p>Yes. Contact support to set daily, weekly, or monthly deposit limits. You can also request loss limits or session time reminders to help manage your gambling activity.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
