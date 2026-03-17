<?php
/**
 * Withdrawal Page
 */
$page_title = SITE_NAME . ' Withdrawal - Payout Methods, Limits & Processing Time';
$page_description = 'Everything about ' . SITE_NAME . ' Casino withdrawals: payout methods, up to 7 business days processing, daily and monthly limits, KYC verification, and tips for faster cashouts.';
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
      <p>Cashing out your winnings at <?php echo SITE_NAME; ?> is a straightforward process once you understand the rules. The casino aims to process withdrawal requests within 72 hours on business days. Note that <?php echo SITE_NAME; ?> does not process withdrawals on weekends, so requests submitted on Friday evening through Sunday will begin processing on the following Monday.</p>
      <p>Wherever possible, funds are returned to the same method you used for your deposit. If that method does not support incoming transactions, the amount will be transferred to your bank account. Before your first withdrawal, you must complete KYC verification and meet the minimum deposit rollover requirement.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Min Withdrawal</h4>
          <p>&euro;20 across all payment methods. Amounts below this threshold cannot be processed.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Daily Limit</h4>
          <p>&euro;700 for standard accounts. VIP members can withdraw up to &euro;1,500 per day.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Monthly Limit</h4>
          <p>&euro;9,000 for standard players. VIP members enjoy weekly limits of &euro;7,000 and monthly limits of &euro;28,000.</p>
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
            <td>&euro;20</td>
            <td>1-5 business days</td>
            <td>Returned to the card used for deposit</td>
          </tr>
          <tr>
            <td>Skrill</td>
            <td>&euro;20</td>
            <td>Up to 24 hours</td>
            <td>Fast processing, widely available</td>
          </tr>
          <tr>
            <td>Neteller</td>
            <td>&euro;20</td>
            <td>Up to 24 hours</td>
            <td>Available in most regions</td>
          </tr>
          <tr>
            <td>Jeton</td>
            <td>&euro;20</td>
            <td>Up to 24 hours</td>
            <td>E-wallet option with broad coverage</td>
          </tr>
          <tr>
            <td>MiFinity</td>
            <td>&euro;20</td>
            <td>Up to 24 hours</td>
            <td>Digital wallet for quick payouts</td>
          </tr>
          <tr>
            <td>eZeeWallet</td>
            <td>&euro;20</td>
            <td>Up to 24 hours</td>
            <td>Check availability for your region</td>
          </tr>
          <tr>
            <td>Bank Transfer</td>
            <td>&euro;20</td>
            <td>3-7 business days</td>
            <td>Fallback when original method is unavailable</td>
          </tr>
          <tr>
            <td>Bitcoin</td>
            <td>&euro;20</td>
            <td>Up to 24 hours</td>
            <td>Requires blockchain confirmations after casino processing</td>
          </tr>
          <tr>
            <td>Ethereum</td>
            <td>&euro;20</td>
            <td>Up to 24 hours</td>
            <td>Among the fastest payout options</td>
          </tr>
          <tr>
            <td>Tether (USDT)</td>
            <td>&euro;20</td>
            <td>Up to 24 hours</td>
            <td>Stablecoin option for minimal price fluctuation</td>
          </tr>
          <tr>
            <td>Ripple (XRP)</td>
            <td>&euro;20</td>
            <td>Up to 24 hours</td>
            <td>Fast blockchain settlement</td>
          </tr>
          <tr>
            <td>USD Coin (USDC)</td>
            <td>&euro;20</td>
            <td>Up to 24 hours</td>
            <td>Stablecoin alternative to USDT</td>
          </tr>
          <tr>
            <td>Cardano (ADA)</td>
            <td>&euro;20</td>
            <td>Up to 24 hours</td>
            <td>Check availability in your region</td>
          </tr>
          <tr>
            <td>Dogecoin</td>
            <td>&euro;20</td>
            <td>Up to 24 hours</td>
            <td>Low-fee crypto withdrawals</td>
          </tr>
          <tr>
            <td>Litecoin</td>
            <td>&euro;20</td>
            <td>Up to 24 hours</td>
            <td>Faster block times than Bitcoin</td>
          </tr>
          <tr>
            <td>Bitcoin Cash</td>
            <td>&euro;20</td>
            <td>Up to 24 hours</td>
            <td>Lower fees compared to standard Bitcoin</td>
          </tr>
          <tr>
            <td>Solana (SOL)</td>
            <td>&euro;20</td>
            <td>Up to 24 hours</td>
            <td>High-speed blockchain with very low fees</td>
          </tr>
        </tbody>
      </table>

      <p>Accepted currencies for transactions: EUR, CHF, USD, CAD, AUD, NZD, PLN, BRL, NOK, ZAR, CZK, HUF, and CLP.</p>
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
            <strong>Clear the rollover requirement.</strong> Before your first withdrawal, your deposit must be wagered at least 1x. If you claimed a bonus, complete the full wagering requirement first. Failing to do so may result in a withdrawal fee.
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
            <strong>Wait for processing.</strong> <?php echo SITE_NAME; ?> processes withdrawals on business days only (Monday to Friday). Expect up to 72 hours for standard processing. Requests submitted over the weekend begin processing on Monday. You will be contacted if additional documents are needed.
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

  <!-- Large Wins -->
  <section class="content-section" id="large-wins">
    <div class="container container--narrow">
      <h2>Large Wins &amp; Extended Processing</h2>
      <div class="highlight-box">
        <h4>Withdrawals Over &euro;5,000</h4>
        <p>Winnings above &euro;5,000 may require additional review and can take longer than the standard processing time. The casino reserves the right to split large payouts into multiple installments based on the applicable daily and weekly limits. VIP members with higher limits may receive faster processing for large amounts.</p>
      </div>
      <p>If your withdrawal exceeds &euro;5,000, the <?php echo SITE_NAME; ?> team may request additional verification documents or conduct an enhanced review. This is standard practice for large transactions and is designed to protect both the player and the casino.</p>
    </div>
  </section>

  <!-- Tips for Faster Payouts -->
  <section class="content-section content-section--alt" id="tips">
    <div class="container container--narrow">
      <h2>Tips for Faster Payouts</h2>

      <h3>1. Choose e-wallets or cryptocurrency</h3>
      <p>Skrill, Neteller, Jeton, MiFinity, and crypto options like Bitcoin, Ethereum, or Solana generally process faster than card or bank transfers. With 10 different cryptocurrencies supported, <?php echo SITE_NAME; ?> offers one of the widest crypto payout selections available. If speed is your priority, deposit using one of these methods so your withdrawal can be returned through the same channel.</p>

      <h3>2. Verify your account early</h3>
      <p>Do not wait until your first withdrawal to submit your documents. Upload your ID, proof of address, and payment method verification as soon as you register. This way, when you are ready to cash out, there will be no delays from pending verification.</p>

      <h3>3. Complete the wagering before requesting</h3>
      <p>If you have an active bonus, make sure every wagering requirement is fully cleared. Requesting a withdrawal while a bonus is still active will void the bonus and any related winnings. If you only played with deposited funds, remember the 1x rollover that must be completed to avoid extra fees.</p>

      <h3>4. Stay within the limits</h3>
      <p>Withdrawal requests that exceed the daily or monthly cap will be declined. Plan your cashouts accordingly: &euro;700 per day for standard accounts, &euro;1,500 per day for VIP members. Weekly limits are &euro;2,250 (standard) and &euro;7,000 (VIP).</p>

      <h3>5. Submit requests on weekdays</h3>
      <p><?php echo SITE_NAME; ?> does not process withdrawals on weekends. Submitting your request early in the week gives the team the most time to process it before the weekend. Requests made on Friday evening or over the weekend will not begin processing until Monday.</p>

      <h3>6. Use your original deposit method</h3>
      <p><?php echo SITE_NAME; ?> prefers to return funds to the same method used for your deposit. Using a different method may trigger additional checks and slow down the process.</p>
    </div>
  </section>

  <!-- Fees -->
  <section class="content-section" id="fees">
    <div class="container container--narrow">
      <h2>Withdrawal Fees</h2>
      <p><?php echo SITE_NAME; ?> does not charge any fees for withdrawals. However, your payment provider or bank may apply their own transaction fees, currency conversion charges, or intermediary costs. Check with your payment provider for details on any third-party fees that may apply to incoming transfers.</p>
      <p>If you fail to meet the 1x deposit rollover requirement before cashing out, a processing fee may be applied. Always clear the minimum rollover first to avoid this charge.</p>
    </div>
  </section>

  <!-- Withdrawal FAQ -->
  <section class="content-section content-section--alt" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>Withdrawal FAQ</h2>

      <details class="faq-item">
        <summary>How long does a <?php echo SITE_NAME; ?> withdrawal take?</summary>
        <div class="faq-answer">
          <p>Withdrawals are processed within 72 hours on business days. <?php echo SITE_NAME; ?> does not process withdrawals on weekends, so in the worst case, a payout could take up to 7 business days from submission to receipt. E-wallets and cryptocurrency tend to be the fastest, often completing within 24 hours of casino processing. Bank transfers and card payments may take an additional 1-5 business days on the provider's end.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What is the minimum withdrawal at <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>The minimum withdrawal amount is &euro;20 for all payment methods. Amounts below this cannot be requested.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What is the maximum I can withdraw per month?</summary>
        <div class="faq-answer">
          <p>Standard players can withdraw up to &euro;9,000 per month (&euro;700 daily, &euro;2,250 weekly). VIP members have access to increased limits: &euro;1,500 daily, &euro;7,000 weekly, and &euro;28,000 monthly.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Does <?php echo SITE_NAME; ?> process withdrawals on weekends?</summary>
        <div class="faq-answer">
          <p>No. Withdrawal processing occurs on business days only (Monday through Friday). Requests submitted on weekends will begin processing on the following Monday.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Why was my withdrawal declined?</summary>
        <div class="faq-answer">
          <p>Common reasons include: incomplete wagering requirements, unverified account, exceeding daily, weekly, or monthly limits, or requesting a payout to a method that does not match your deposit. Contact support for specific information about your case.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Are there any withdrawal fees?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> does not charge withdrawal fees. Your payment provider may apply their own charges for receiving funds. If you have not met the 1x deposit rollover before requesting a withdrawal, a processing fee may be applied.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What happens with large wins over &euro;5,000?</summary>
        <div class="faq-answer">
          <p>Withdrawals exceeding &euro;5,000 may require additional verification and can take longer to process. The casino may split large payouts into installments based on your daily and weekly limits. VIP members typically receive faster processing for large amounts.</p>
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
