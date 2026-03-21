<?php
/**
 * Support Page - WestAce (Australian English)
 */
$page_title = 'WestAce Customer Support - 24/7 Live Chat & Email';
$page_description = 'Reach ' . SITE_NAME . ' Casino AU customer support via 24/7 live chat or email at info@westace.site. Get help with deposits, withdrawals, bonuses, account questions, and technical issues.';
$current_page = 'support';
$lang_prefix = '/au';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Customer Support';
$hero_description = 'We\'re here to help with any questions about your account, deposits, withdrawals, bonuses, or technical issues. Get in touch any time.';
$hero_cta = 'Open Live Chat';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Contact Options -->
  <section class="content-section" id="contact">
    <div class="container">
      <h2>How to Get in Touch</h2>
      <p><?php echo SITE_NAME; ?> runs two support channels so you can always get help when you need it. Whether it's a quick question about a promo or a payment issue that needs sorting out, our team is on around the clock.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128172;</div>
          <h4>Live Chat</h4>
          <p>The quickest way to get answers. Click the chat icon on any page to connect with a support agent. Our agents typically respond within 5 minutes. Available 24 hours a day, 7 days a week.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9993;</div>
          <h4>Email Support</h4>
          <p>For detailed questions or document submissions, email is the way to go. Send your query to <strong>info@westace.site</strong> and expect a reply within 24 hours. Include your account details and a clear description of the issue so we can get it sorted faster.</p>
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
      <p>Our support team handles a wide range of topics. Here are the most common areas where Aussie players reach out for a hand:</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Account &amp; Registration</h4>
          <p>Help with creating an account, updating personal details, resetting passwords, and sorting out login issues. If your account has been locked or restricted, support can review your situation and let you know what's needed.</p>
        </div>
        <div class="info-card">
          <h4>Deposits &amp; Payments</h4>
          <p>Assistance with failed deposits, payment method questions, and transaction status checks. Support can also look into it if a deposit doesn't show up in your balance.</p>
        </div>
        <div class="info-card">
          <h4>Withdrawals &amp; Payouts</h4>
          <p>Questions about withdrawal processing times, pending requests, and declined payouts. For a full rundown of withdrawal options and limits, visit the <a href="<?php echo $lang_prefix; ?>/withdrawal">Withdrawal page</a>.</p>
        </div>
        <div class="info-card">
          <h4>Bonuses &amp; Promotions</h4>
          <p>Clarification on bonus terms, wagering requirements, activating offers, and cancelling active bonuses. Support can walk you through specific promotion details and eligibility conditions.</p>
        </div>
        <div class="info-card">
          <h4>Verification &amp; KYC</h4>
          <p>Guidance on document submission, verification status, accepted document types, and timeline estimates. Support can step in if something goes wrong during the verification process.</p>
        </div>
        <div class="info-card">
          <h4>Technical Issues</h4>
          <p>Help with games not loading, site errors, mobile compatibility problems, and browser-related issues. Support can troubleshoot and escalate bugs to the dev team if needed.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Contacting Support -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Getting the Most Out of Your Support Request</h2>
      <p>A few simple steps can help the support team resolve your issue faster:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Have your account details ready.</strong> Your username or email address helps support find your account quickly. If the issue involves a specific transaction, have the reference number on hand.
          </div>
        </li>
        <li>
          <div>
            <strong>Describe the problem clearly.</strong> Explain what happened, when it happened, and what you expected to happen. Screenshots are helpful for technical issues or disputed transactions.
          </div>
        </li>
        <li>
          <div>
            <strong>Use the right channel.</strong> For urgent issues - locked account, failed deposit - live chat is your best bet. For document submissions or complex cases that need investigation, email at info@westace.site gives the team more room to work through it properly.
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
      <p><?php echo SITE_NAME; ?> takes responsible gambling seriously. If you feel your gambling habits are getting out of hand, our support team can help you arrange a self-exclusion from the platform.</p>
      <p>Self-exclusion is available for a set period or permanently. Once activated, it cannot be reversed until the set period expires. During self-exclusion, you won't be able to log in or place any bets. Contact support via live chat or email at info@westace.site to request self-exclusion.</p>

      <h3>Self-Assessment</h3>
      <p>Ask yourself these questions honestly to gauge whether gambling might be affecting your life:</p>
      <ul>
        <li>Is your spending getting out of control?</li>
        <li>Are you borrowing money to keep gambling?</li>
        <li>Have you been spending less time with family and friends?</li>
        <li>Do other people's opinions about your gambling bother you?</li>
        <li>Have you lost interest in hobbies or activities you used to enjoy?</li>
        <li>Are you feeling down or anxious because of gambling losses?</li>
        <li>Have you ever lied about how much time or money you spend gambling?</li>
      </ul>
      <p>If you answered yes to a few of these, we recommend reaching out to a help organisation:</p>
      <ul>
        <li><strong>Gambling Help</strong> - free counselling and support for Australians affected by gambling - <a href="https://www.gamblinghelponline.org.au" target="_blank" rel="noopener noreferrer">gamblinghelponline.org.au</a> - 1800 858 858</li>
        <li><strong>Lifeline</strong> - 24/7 crisis support and suicide prevention - <a href="https://www.lifeline.org.au" target="_blank" rel="noopener noreferrer">lifeline.org.au</a> - 13 11 14</li>
        <li><strong>BeyondBlue</strong> - mental health support including gambling-related distress - <a href="https://www.beyondblue.org.au" target="_blank" rel="noopener noreferrer">beyondblue.org.au</a> - 1300 22 4636</li>
        <li><strong>Gambling Help Online</strong> - free online chat and counselling, available 24/7 - <a href="https://www.gamblinghelponline.org.au" target="_blank" rel="noopener noreferrer">gamblinghelponline.org.au</a></li>
      </ul>

      <h3>Helpful Tips</h3>
      <ul>
        <li>Don't treat gambling as a source of income</li>
        <li>Set a budget for time and money, and stick to it</li>
        <li>Only gamble with money you can afford to lose</li>
        <li>Avoid gambling when you're stressed, upset, or after a few drinks</li>
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
          <p>Live chat agents typically respond within 5 minutes. During peak times, wait times may be a little longer.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What is the email address for support?</summary>
        <div class="faq-answer">
          <p>You can reach <?php echo SITE_NAME; ?> support by email at <strong>info@westace.site</strong>. Include your username or registered email, a description of the issue, and any relevant screenshots. Expect a reply within 24 hours.</p>
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
          <p>If you're not satisfied with the initial response, ask for your case to be escalated to a senior agent. Provide as much detail as possible to help the team investigate thoroughly.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Can I request self-exclusion?</summary>
        <div class="faq-answer">
          <p>Yes. Contact support via live chat or email to arrange self-exclusion for a set period or permanently. You can also reach out to <a href="https://www.gamblinghelponline.org.au" target="_blank" rel="noopener noreferrer">Gambling Help Online</a> on 1800 858 858 for independent support. During self-exclusion, you won't be able to log in or place any bets.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
