<?php
/**
 * Withdrawal Page - DaytonaSpin UK
 */
$page_title = SITE_NAME . ' Withdrawal - Payout Methods, Limits & Processing Time';
$page_description = 'Everything about ' . SITE_NAME . ' Casino withdrawals: payout methods, up to 24-hour processing, minimum limits, KYC verification, and tips for faster cashouts.';
$current_page = 'withdrawal';

require_once __DIR__ . '/../includes/header.php';

$hero_title = SITE_NAME . ' Withdrawal &amp; Payouts';
$hero_description = 'How to cash out your winnings, which methods are available, processing times, limits, and what to expect during the verification process.';
$hero_cta = 'Start Playing';
require_once __DIR__ . '/../includes/page-hero.php';
?>

<main>
  <!-- Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Withdrawal Overview</h2>
      <p>Cashing out your winnings at <?php echo SITE_NAME; ?> is straightforward. The casino processes all withdrawal requests within 24 hours. Wherever possible, funds are returned to the same method you used for your deposit. Before your first withdrawal, you must complete KYC verification.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Min Withdrawal</h4>
          <p>&pound;20 across all payment methods. Amounts below this threshold cannot be processed.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Processing Time</h4>
          <p>Up to 24 hours for all methods. Some delays may occur due to public holidays or weekends.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Min Deposit</h4>
          <p>&pound;10 for most methods, &pound;20 for cryptocurrency deposits.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Payment Methods Table -->
  <section class="content-section content-section--alt" id="methods">
    <div class="container">
      <h2>Payment Methods</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>The methods available for deposit and withdrawal depend on your region. <?php echo SITE_NAME; ?> processes payouts to the original deposit method when possible.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/daytonaspin-payments-screen.png" alt="<?php echo SITE_NAME; ?> Casino payment methods including Visa, Mastercard, Skrill, Apple Pay, Google Pay, Revolut, and cryptocurrencies" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <table class="data-table">
        <thead>
          <tr>
            <th>Method</th>
            <th>Min Deposit</th>
            <th>Min Withdrawal</th>
            <th>Processing Time</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Visa</td>
            <td>&pound;10</td>
            <td>&pound;20</td>
            <td>Up to 24 hours</td>
          </tr>
          <tr>
            <td>Mastercard</td>
            <td>&pound;10</td>
            <td>&pound;20</td>
            <td>Up to 24 hours</td>
          </tr>
          <tr>
            <td>Skrill</td>
            <td>&pound;10</td>
            <td>&pound;20</td>
            <td>Up to 24 hours</td>
          </tr>
          <tr>
            <td>Apple Pay</td>
            <td>&pound;10</td>
            <td>&pound;20</td>
            <td>Up to 24 hours</td>
          </tr>
          <tr>
            <td>Google Pay</td>
            <td>&pound;10</td>
            <td>&pound;20</td>
            <td>Up to 24 hours</td>
          </tr>
          <tr>
            <td>Revolut</td>
            <td>&pound;10</td>
            <td>&pound;20</td>
            <td>Up to 24 hours</td>
          </tr>
          <tr>
            <td>Bank Transfer</td>
            <td>&pound;10</td>
            <td>&pound;20</td>
            <td>1-3 business days</td>
          </tr>
          <tr>
            <td>Bitcoin (BTC)</td>
            <td>&pound;20</td>
            <td>&pound;20</td>
            <td>Up to 24 hours</td>
          </tr>
          <tr>
            <td>Ethereum (ETH)</td>
            <td>&pound;20</td>
            <td>&pound;20</td>
            <td>Up to 24 hours</td>
          </tr>
          <tr>
            <td>Tether (USDT)</td>
            <td>&pound;20</td>
            <td>&pound;20</td>
            <td>Up to 24 hours</td>
          </tr>
          <tr>
            <td>Litecoin (LTC)</td>
            <td>&pound;20</td>
            <td>&pound;20</td>
            <td>Up to 24 hours</td>
          </tr>
          <tr>
            <td>Dogecoin (DOGE)</td>
            <td>&pound;20</td>
            <td>&pound;20</td>
            <td>Up to 24 hours</td>
          </tr>
          <tr>
            <td>Tron (TRX)</td>
            <td>&pound;20</td>
            <td>&pound;20</td>
            <td>Up to 24 hours</td>
          </tr>
        </tbody>
      </table>

      <p style="margin-top: var(--space-4);">The exact range of payment methods may vary depending on your region. Cryptocurrency transactions require blockchain confirmations after casino processing.</p>
    </div>
  </section>

  <!-- How to Withdraw -->
  <section class="content-section" id="how-to">
    <div class="container">
      <h2>How to Make a Withdrawal</h2>
      <p>Follow these steps to request a payout from your <?php echo SITE_NAME; ?> account:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Complete any active wagering requirements.</strong> If you claimed a bonus, the full wagering requirement must be cleared before you can withdraw. Requesting a payout with an active bonus will void the bonus and any related winnings.
          </div>
        </li>
        <li>
          <div>
            <strong>Open the cashier.</strong> Navigate to the withdrawal section in your account. You will find it in the main menu or account settings area.
          </div>
        </li>
        <li>
          <div>
            <strong>Select your payment method and amount.</strong> Choose from the available options and enter the amount you wish to withdraw. The minimum is &pound;20 across all methods.
          </div>
        </li>
        <li>
          <div>
            <strong>Wait for processing.</strong> <?php echo SITE_NAME; ?> processes withdrawals within 24 hours. You will be contacted if additional documents are needed for verification.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- KYC Verification -->
  <section class="content-section content-section--alt" id="verification">
    <div class="container">
      <h2>Account Verification (KYC)</h2>
      <p><?php echo SITE_NAME; ?> requires identity verification before approving withdrawal requests. This is a standard procedure designed to prevent fraud and comply with anti-money laundering regulations.</p>

      <div class="two-col">
        <div>
          <h3>Required Documents</h3>
          <ul>
            <li>A government-issued ID (passport, driving licence, or national ID card)</li>
            <li>Proof of address (utility bill or bank statement, dated within the last 3 months)</li>
            <li>Source of funds check may be requested</li>
          </ul>
          <p>The verification process typically takes less than 24-48 hours. Make sure to submit clear, well-lit photos to avoid delays.</p>
        </div>
        <div>
          <h3>Tips for Faster Verification</h3>
          <ul>
            <li>Upload your documents as soon as you register, rather than waiting for your first withdrawal</li>
            <li>Ensure all four corners of your ID are visible in the photo</li>
            <li>Use a recent utility bill or bank statement for proof of address</li>
            <li>If documents are rejected, check that images are not blurry and that documents are not expired</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Faster Payouts -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Tips for Faster Payouts</h2>

      <h3>1. Choose e-wallets or cryptocurrency</h3>
      <p>Skrill, Apple Pay, Google Pay, Revolut, and crypto options like Bitcoin and Ethereum generally process fastest. If speed is your priority, deposit using one of these methods so your withdrawal can be returned through the same channel.</p>

      <h3>2. Verify your account early</h3>
      <p>Do not wait until your first withdrawal to submit your documents. Upload your ID and proof of address as soon as you register. This way, when you are ready to cash out, there will be no delays from pending verification.</p>

      <h3>3. Complete wagering before requesting</h3>
      <p>If you have an active bonus, make sure every wagering requirement is fully cleared. Requesting a withdrawal while a bonus is still active will void the bonus and any related winnings.</p>

      <h3>4. Use your original deposit method</h3>
      <p><?php echo SITE_NAME; ?> prefers to return funds to the same method used for your deposit. Using a different method may trigger additional checks and slow down the process.</p>
    </div>
  </section>

  <!-- Fees -->
  <section class="content-section content-section--alt" id="fees">
    <div class="container container--narrow">
      <h2>Withdrawal Fees</h2>
      <p><?php echo SITE_NAME; ?> does not charge fees for withdrawals. However, your payment provider or bank may apply their own transaction fees, currency conversion charges, or intermediary costs. Check with your payment provider for details on any third-party fees that may apply.</p>
    </div>
  </section>

  <!-- Withdrawal FAQ -->
  <section class="content-section" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>Withdrawal FAQ</h2>

      <details class="faq-item">
        <summary>How long does a <?php echo SITE_NAME; ?> withdrawal take?</summary>
        <div class="faq-answer">
          <p>All withdrawals are processed within 24 hours. E-wallets and cryptocurrency tend to arrive fastest. Bank transfers may take an additional 1-3 business days on the provider's end. Some delays may occur due to public holidays or weekends.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What is the minimum withdrawal at <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>The minimum withdrawal amount is &pound;20 for all payment methods.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What is the maximum withdrawal limit?</summary>
        <div class="faq-answer">
          <p>Maximum withdrawal limits are not publicly specified. VIP members benefit from higher limits. Contact support for details about your account's withdrawal limits.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Why was my withdrawal declined?</summary>
        <div class="faq-answer">
          <p>Common reasons include: incomplete wagering requirements, unverified account, or requesting a payout to a method that does not match your deposit. Contact support for specific information about your case.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Are there any withdrawal fees?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> does not charge withdrawal fees. Your payment provider may apply their own charges for receiving funds.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Can I cancel a pending withdrawal?</summary>
        <div class="faq-answer">
          <p>Depending on the processing stage, you may be able to cancel a pending withdrawal request. Contact customer support through live chat for assistance.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
