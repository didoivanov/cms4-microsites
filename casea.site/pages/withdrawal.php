<?php
/**
 * Withdrawal Page
 */
$page_title = SITE_NAME . ' Withdrawal - Payout Methods, Limits & Processing Time';
$page_description = 'Everything about ' . SITE_NAME . ' Casino withdrawals: payout methods, processing time up to 72 hours, daily and monthly limits, KYC verification, and tips to speed up your cashout.';
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
      <p>Getting your winnings out of <?php echo SITE_NAME; ?> is straightforward once you know the rules. Payouts are typically processed within 72 hours, and wherever possible, the casino sends funds back to the same method you used for your deposit. If that method does not support incoming transactions, the funds will be sent to your bank account instead.</p>
      <p>Before requesting your first withdrawal, you will need to complete a KYC (Know Your Customer) verification and make sure you have met the minimum deposit rollover requirement.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Min Withdrawal</h4>
          <p>EUR 10 across all payment methods. Amounts below this threshold cannot be processed.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Daily Limit</h4>
          <p>EUR 500 for standard accounts. VIP members can withdraw up to EUR 1,500 per day.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Monthly Limit</h4>
          <p>EUR 7,000 for new players. VIP members enjoy a maximum of EUR 20,000 per month.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Payment Methods Table -->
  <section class="content-section content-section--alt" id="methods">
    <div class="container">
      <h2>Payout Methods</h2>
      <p>The methods available for withdrawal depend on your country and how you deposited. In general, <?php echo SITE_NAME; ?> processes payouts to the original deposit method when possible.</p>

      <table class="data-table">
        <thead>
          <tr>
            <th>Method</th>
            <th>Min Withdrawal</th>
            <th>Processing Time</th>
            <th>Notes</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Visa / Mastercard</td>
            <td>&euro;10</td>
            <td>1-3 business days</td>
            <td>Returned to the card used for deposit</td>
          </tr>
          <tr>
            <td>Skrill</td>
            <td>&euro;10</td>
            <td>Up to 24 hours</td>
            <td>Fast processing, widely available</td>
          </tr>
          <tr>
            <td>Neteller</td>
            <td>&euro;10</td>
            <td>Up to 24 hours</td>
            <td>Available in most regions</td>
          </tr>
          <tr>
            <td>Bank Transfer</td>
            <td>&euro;20</td>
            <td>2-5 business days</td>
            <td>Used as fallback when original method is unavailable</td>
          </tr>
          <tr>
            <td>Bitcoin</td>
            <td>&euro;10</td>
            <td>Up to 24 hours</td>
            <td>Requires blockchain confirmations after casino processing</td>
          </tr>
          <tr>
            <td>Ethereum</td>
            <td>&euro;10</td>
            <td>Up to 24 hours</td>
            <td>Crypto payouts tend to be among the fastest</td>
          </tr>
          <tr>
            <td>Litecoin / Tether / Ripple</td>
            <td>&euro;10</td>
            <td>Up to 24 hours</td>
            <td>Check availability for your region</td>
          </tr>
        </tbody>
      </table>

      <p>Accepted currencies for transactions: EUR, USD, CAD, AUD, CHF, HUF, NOK, PLN, NZD, CZK, BRL, CLP, and PEN.</p>
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
            <strong>Clear the rollover requirement.</strong> Before your first withdrawal, your deposit must be wagered at least 1x. If you claimed a bonus, complete the full wagering requirement first. Failing to do so may result in a 10% withdrawal fee.
          </div>
        </li>
        <li>
          <div>
            <strong>Open the cashier.</strong> Navigate to the withdrawal section in your account. You will find it in the main menu or account settings area.
          </div>
        </li>
        <li>
          <div>
            <strong>Select your payment method and amount.</strong> Choose from the available options and enter the amount you wish to withdraw. Make sure it falls within the allowed limits.
          </div>
        </li>
        <li>
          <div>
            <strong>Wait for processing.</strong> The casino reviews each request and typically processes payouts within 3 business days. You will be contacted if additional documents are needed.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- KYC Verification -->
  <section class="content-section content-section--alt" id="verification">
    <div class="container">
      <h2>Account Verification (KYC)</h2>
      <p><?php echo SITE_NAME; ?> requires identity verification before approving withdrawal requests. This is a standard procedure in the industry, designed to prevent fraud and comply with anti-money laundering regulations.</p>

      <div class="two-col">
        <div>
          <h3>Required Documents</h3>
          <ul>
            <li>A government-issued ID (passport, driver's license, or national ID card)</li>
            <li>Proof of address (utility bill or bank statement, dated within the last 3 months)</li>
            <li>Payment method verification (credit/debit card photo, e-wallet screenshot, or crypto wallet confirmation)</li>
          </ul>
          <p>You have 30 days from the initial document request to submit your papers. If you fail to provide them within this timeframe, your account may be closed.</p>
        </div>
        <div>
          <h3>Verification Timeline</h3>
          <p>The standard processing time for document review is up to 10 business days, though it may take longer in exceptional cases. The casino may use third-party verification services or request additional checks such as a video call or phone verification.</p>
          <p>You can upload documents in the "Settings - Account Verification" section of your profile. Take clear, well-lit photos to avoid delays caused by illegible documents.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Faster Payouts -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Tips for Faster Payouts</h2>

      <div class="highlight-box">
        <h4>Speed Up Your <?php echo SITE_NAME; ?> Withdrawal</h4>
        <p>Follow these practices to minimize payout delays and get your winnings sooner.</p>
      </div>

      <h3>1. Choose e-wallets or cryptocurrency</h3>
      <p>Skrill, Neteller, and crypto options like Bitcoin or Ethereum generally process faster than card or bank transfers. If speed is your priority, deposit using one of these methods so your withdrawal can be returned to the same channel.</p>

      <h3>2. Verify your account early</h3>
      <p>Do not wait until your first withdrawal to submit your documents. Upload your ID, proof of address, and payment method verification as soon as you register. This way, when you are ready to cash out, there will be no delays from pending verification.</p>

      <h3>3. Complete the wagering before requesting</h3>
      <p>If you have an active bonus, make sure every wagering requirement is fully cleared. Requesting a withdrawal while a bonus is still active will void the bonus and any related winnings. If you only played with deposited funds, remember the 1x rollover that must be completed to avoid the extra fee.</p>

      <h3>4. Stay within the limits</h3>
      <p>Withdrawal requests that exceed the daily or monthly cap will be declined. Plan your cashouts accordingly: EUR 500 per day for standard accounts, EUR 1,500 per day for VIP members.</p>

      <h3>5. Use your original deposit method</h3>
      <p><?php echo SITE_NAME; ?> prefers to return funds to the same method used for your deposit. Using a different method may trigger additional checks and slow down the process.</p>
    </div>
  </section>

  <!-- Withdrawal FAQ -->
  <section class="content-section content-section--alt" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>Withdrawal FAQ</h2>

      <details class="faq-item">
        <summary>How long does a <?php echo SITE_NAME; ?> withdrawal take?</summary>
        <div class="faq-answer">
          <p>Withdrawals are processed within 72 hours (3 business days). E-wallets and cryptocurrency tend to be the fastest, often completing within 24 hours of casino processing. Bank transfers and card payments may take an additional 1-5 business days on the provider's end.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What is the minimum withdrawal at <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>The minimum withdrawal amount is EUR 10 for all payment methods. Amounts below this cannot be requested.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What is the maximum I can withdraw per month?</summary>
        <div class="faq-answer">
          <p>Standard players can withdraw up to EUR 7,000 per month. VIP members have access to an increased limit of EUR 20,000 monthly. Daily caps apply as well: EUR 500 for standard accounts, EUR 1,500 for VIP.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Why was my withdrawal declined?</summary>
        <div class="faq-answer">
          <p>Common reasons include: incomplete wagering requirements, unverified account, exceeding daily or monthly limits, or requesting a payout to a method that does not match your deposit. Contact support for specific information about your case.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Is there a fee for withdrawals?</summary>
        <div class="faq-answer">
          <p>There is no standard withdrawal fee. However, if you fail to meet the 1x deposit rollover requirement before cashing out, a 10% fee may be applied. Always clear the minimum rollover first to avoid this charge.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Can I cancel a pending withdrawal?</summary>
        <div class="faq-answer">
          <p>Depending on the processing stage, you may be able to cancel a pending withdrawal request. Contact customer support through live chat for assistance with cancellation.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
