<?php
/**
 * Support Page - WestAce
 */
$page_title = SITE_NAME . ' Customer Support - Live Chat, Email & Help Centre';
$page_description = 'Reach ' . SITE_NAME . ' Casino customer support via 24/7 live chat or email at support@westace.com. Get help with deposits, withdrawals, bonuses, account issues, and technical questions.';
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
      <p><?php echo SITE_NAME; ?> offers two support channels so you can always get help when you need it. Whether you have a quick question about a promotion or need help resolving a payment issue, our team is available around the clock.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128172;</div>
          <h4>Live Chat</h4>
          <p>The fastest way to get help. Click the chat icon on any page to start a conversation with a support agent. Our live agents typically respond within 5 minutes. Available 24 hours a day, 7 days a week.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9993;</div>
          <h4>Email Support</h4>
          <p>For detailed questions or document submissions, email is the best option. Send your enquiry to <strong>support@westace.com</strong> and expect a response within 24 hours. Include your account details and a clear description of the issue.</p>
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
            <td>Within 5 minutes</td>
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
      <p>Our customer support team handles a wide range of topics. Here are the most common areas where players reach out for assistance:</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Account &amp; Registration</h4>
          <p>Help with creating an account, updating personal information, resetting passwords, and resolving login issues. If your account is locked or restricted, support can review your status.</p>
        </div>
        <div class="info-card">
          <h4>Deposits &amp; Payments</h4>
          <p>Assistance with failed deposits, payment method questions, and transaction status checks. Support can also help if a deposit does not appear in your balance.</p>
        </div>
        <div class="info-card">
          <h4>Withdrawals &amp; Payouts</h4>
          <p>Questions about withdrawal processing times, pending requests, and declined payouts. For detailed withdrawal information, visit the <a href="/withdrawal">Withdrawal page</a>.</p>
        </div>
        <div class="info-card">
          <h4>Bonuses &amp; Promotions</h4>
          <p>Clarification on bonus terms, wagering requirements, activation of offers, and cancellation of active bonuses. Support can explain specific promotion details and eligibility conditions.</p>
        </div>
        <div class="info-card">
          <h4>Verification &amp; KYC</h4>
          <p>Guidance on document submission, verification status, accepted document types, and timeline estimates. Support can assist if issues arise during the verification process.</p>
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
      <p>A few simple steps can help our support team resolve your issue faster:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Have your account details ready.</strong> Your username or email address helps support locate your account quickly. If the issue involves a specific transaction, have the reference number handy.
          </div>
        </li>
        <li>
          <div>
            <strong>Describe the problem clearly.</strong> Explain what happened, when it happened, and what you expected to happen. Screenshots are helpful for technical issues or disputed transactions.
          </div>
        </li>
        <li>
          <div>
            <strong>Use the right channel.</strong> For urgent issues (locked account, failed deposit), live chat is your best bet. For document submissions or complex cases requiring investigation, email at support@westace.com gives the team more room to work.
          </div>
        </li>
        <li>
          <div>
            <strong>Check the FAQ first.</strong> Many common questions about bonuses, withdrawals, and account management are covered in the FAQ sections throughout this site.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Responsible Gambling -->
  <section class="content-section content-section--alt" id="responsible">
    <div class="container container--narrow">
      <h2>Responsible Gambling &amp; Self-Exclusion</h2>
      <p><?php echo SITE_NAME; ?> takes responsible gambling seriously. If you feel that your gambling habits are becoming a problem, our support team can help you arrange a self-exclusion from the platform.</p>
      <p>Self-exclusion is available for a set period or permanently. Once activated, self-exclusion cannot be reversed until the set period expires. During the self-exclusion period, you will not be able to log in or place any bets. Contact support via live chat or email at support@westace.com to request self-exclusion.</p>

      <h3>Self-Assessment</h3>
      <p>Ask yourself the following questions to evaluate whether gambling may be affecting your life:</p>
      <ul>
        <li>Is your spending getting out of control?</li>
        <li>Do you borrow money to keep gambling?</li>
        <li>Have you been spending less time with family and friends?</li>
        <li>Have the opinions of others about your gambling started to bother you?</li>
        <li>Have you lost interest in your usual hobbies or activities?</li>
        <li>Are you feeling down or anxious because of gambling losses?</li>
        <li>Have you ever lied about how much time or money you spend gambling?</li>
      </ul>
      <p>If you answered yes to several of these questions, we recommend contacting a help organisation:</p>
      <ul>
        <li><strong>GamCare</strong> - free advice and support for gambling-related issues</li>
        <li><strong>Gamble Aware</strong> - information and resources for responsible gambling</li>
        <li><strong>Gambling Therapy</strong> - free, confidential support and counselling</li>
        <li><strong>Gamblers Anonymous</strong> - peer support and recovery meetings worldwide</li>
      </ul>

      <h3>Helpful Tips</h3>
      <ul>
        <li>Do not treat gambling as a source of income</li>
        <li>Set a budget for time and money, and stick to it</li>
        <li>Only gamble with money you can afford to lose</li>
        <li>Avoid gambling when you are stressed, upset, or under the influence of alcohol</li>
      </ul>
    </div>
  </section>

  <!-- Support FAQ -->
  <section class="content-section" id="support-faq">
    <div class="container container--narrow">
      <h2>Support FAQ</h2>

      <details class="faq-item">
        <summary>Is <?php echo SITE_NAME; ?> support available 24/7?</summary>
        <div class="faq-answer">
          <p>Yes. Both live chat and email support are available around the clock, 24 hours a day, 7 days a week.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>How quickly will live chat respond?</summary>
        <div class="faq-answer">
          <p>Live chat agents typically respond within 5 minutes. During peak hours, wait times may be slightly longer.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What is the email address for support?</summary>
        <div class="faq-answer">
          <p>You can reach <?php echo SITE_NAME; ?> support by email at <strong>support@westace.com</strong>. Include your username or registered email, a description of the issue, and any relevant screenshots. Expect a response within 24 hours.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Can support help me cancel a bonus?</summary>
        <div class="faq-answer">
          <p>Yes. If you want to cancel an active bonus, contact support via live chat or email. Keep in mind that cancelling a bonus removes the bonus amount and any winnings generated from it.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What if my issue is not resolved?</summary>
        <div class="faq-answer">
          <p>If you are not satisfied with the initial response, ask for your case to be escalated to a senior agent. Provide as much detail as possible to help the team investigate your case thoroughly.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Can I request self-exclusion?</summary>
        <div class="faq-answer">
          <p>Yes. Contact support via live chat or email to arrange self-exclusion for a set period or permanently. During self-exclusion, you cannot log in or place any bets.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
