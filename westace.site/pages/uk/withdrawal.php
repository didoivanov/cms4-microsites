<?php
/**
 * Withdrawal Page - WestAce (UK English)
 */
$page_title = 'WestAce Withdrawals - Payout Methods, Limits & Processing Times';
$page_description = 'Everything about ' . SITE_NAME . ' Casino withdrawals: payout methods, processing times, daily and monthly limits, KYC verification, and tips for faster cashouts.';
$current_page = 'withdrawal';
$lang_prefix = '/uk';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Withdrawals &amp; Payouts';
$hero_description = 'How to cash out your winnings, which methods are available, processing times, limits, and what to expect during the verification process.';
$hero_cta = 'Start Playing';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Withdrawal Overview</h2>
      <p>Cashing out at <?php echo SITE_NAME; ?> is straightforward and fee-free. We process all withdrawal requests within 24 to 72 hours depending on the payment method. Funds are returned to the same method you used for your deposit whenever possible. You must complete KYC verification before your first withdrawal.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Min Withdrawal</h4>
          <p>&pound;8 across all payment methods. Amounts below this threshold cannot be processed.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Processing Time</h4>
          <p>24-72 hours for most methods. Bank transfers may take 1-3 business days.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Withdrawal Limits</h4>
          <p>&pound;425 per day, &pound;5,950 per month. VIP members may qualify for higher limits.</p>
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
          <p>The table below shows all deposit and withdrawal options at <?php echo SITE_NAME; ?>. We process payouts to the original deposit method when possible. All deposits and withdrawals are fee-free on our end.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-payments-screen.png" alt="<?php echo SITE_NAME; ?> Casino deposit and withdrawal methods including Visa, Mastercard, Revolut, Skrill and crypto" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div class="data-table-wrap">
        <table class="data-table">
          <thead>
            <tr>
              <th>Method</th>
              <th>Min Deposit</th>
              <th>Max Deposit</th>
              <th>Min Withdrawal</th>
              <th>Max Withdrawal</th>
              <th>Processing</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Mastercard</td>
              <td>&pound;8</td>
              <td>&pound;1,700</td>
              <td>&pound;8</td>
              <td>&pound;2,550</td>
              <td>24-72 hours</td>
            </tr>
            <tr>
              <td>Paysafecard</td>
              <td>&pound;8</td>
              <td>&pound;850</td>
              <td colspan="2">Deposit only</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Visa</td>
              <td colspan="2">Withdrawal only</td>
              <td>&pound;8</td>
              <td>&pound;2,550</td>
              <td>24-72 hours</td>
            </tr>
            <tr>
              <td>Bank Transfer</td>
              <td colspan="2">Withdrawal only</td>
              <td>&pound;8</td>
              <td>&pound;4,250</td>
              <td>1-3 business days</td>
            </tr>
            <tr>
              <td>Skrill</td>
              <td>&pound;8</td>
              <td>&pound;4,250</td>
              <td>&pound;8</td>
              <td>&pound;4,250</td>
              <td>24-72 hours</td>
            </tr>
            <tr>
              <td>Neteller</td>
              <td>&pound;8</td>
              <td>&pound;4,250</td>
              <td colspan="2">Deposit only</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Bitcoin (BTC)</td>
              <td>&pound;8</td>
              <td>&pound;4,250</td>
              <td>&pound;8</td>
              <td>&pound;4,250</td>
              <td>24-72 hours</td>
            </tr>
            <tr>
              <td>Ethereum (ETH)</td>
              <td>&pound;8</td>
              <td>&pound;4,250</td>
              <td>&pound;8</td>
              <td>&pound;4,250</td>
              <td>24-72 hours</td>
            </tr>
            <tr>
              <td>Tether (USDT)</td>
              <td>&pound;8</td>
              <td>&pound;4,250</td>
              <td>&pound;8</td>
              <td>&pound;4,250</td>
              <td>24-72 hours</td>
            </tr>
            <tr>
              <td>Litecoin (LTC)</td>
              <td>&pound;8</td>
              <td>&pound;4,250</td>
              <td>&pound;8</td>
              <td>&pound;4,250</td>
              <td>24-72 hours</td>
            </tr>
            <tr>
              <td>Ripple (XRP)</td>
              <td>&pound;8</td>
              <td>&pound;4,250</td>
              <td>&pound;8</td>
              <td>&pound;4,250</td>
              <td>24-72 hours</td>
            </tr>
            <tr>
              <td>USD Coin (USDC)</td>
              <td>&pound;8</td>
              <td>&pound;4,250</td>
              <td>&pound;8</td>
              <td>&pound;4,250</td>
              <td>24-72 hours</td>
            </tr>
            <tr>
              <td>Bitcoin Cash (BCH)</td>
              <td>&pound;8</td>
              <td>&pound;4,250</td>
              <td>&pound;8</td>
              <td>&pound;4,250</td>
              <td>24-72 hours</td>
            </tr>
            <tr>
              <td>Dogecoin (DOGE)</td>
              <td>&pound;8</td>
              <td>&pound;4,250</td>
              <td>&pound;8</td>
              <td>&pound;4,250</td>
              <td>24-72 hours</td>
            </tr>
            <tr>
              <td>Cardano (ADA)</td>
              <td>&pound;8</td>
              <td>&pound;4,250</td>
              <td>&pound;8</td>
              <td>&pound;4,250</td>
              <td>24-72 hours</td>
            </tr>
          </tbody>
        </table>
      </div>

      <p style="margin-top: var(--space-4);">The exact range of payment methods may vary depending on your region. Cryptocurrency transactions require blockchain confirmations after casino processing.</p>
    </div>
  </section>

  <!-- Rollover Requirement -->
  <section class="content-section" id="rollover">
    <div class="container container--narrow">
      <h2>Deposit Rollover Requirement</h2>
      <p><?php echo SITE_NAME; ?> applies a 1x rollover requirement on all deposits. This means you must wager your deposited funds at least once before requesting a withdrawal. This is separate from any bonus wagering requirements.</p>
      <p>If you request a withdrawal without meeting the 1x rollover, a commission will be deducted:</p>
      <ul>
        <li><strong>10% commission</strong> on the deposit amount for e-wallet and crypto withdrawals</li>
        <li><strong>15% commission</strong> on the deposit amount for bank card and bank transfer withdrawals</li>
      </ul>
      <p>To avoid this charge, simply play through your deposit once before requesting a payout. One round of wagering at any amount is enough to clear the requirement.</p>
    </div>
  </section>

  <!-- How to Withdraw -->
  <section class="content-section content-section--alt" id="how-to">
    <div class="container">
      <h2>How to Make a Withdrawal</h2>
      <p>Follow these steps to request a payout from your <?php echo SITE_NAME; ?> account:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Complete any active wagering requirements.</strong> If you claimed a bonus, the full wagering requirement must be cleared before you can withdraw. Also make sure you have met the 1x deposit rollover.
          </div>
        </li>
        <li>
          <div>
            <strong>Open the cashier.</strong> Navigate to the withdrawal section in your account. You will find it in the main menu or account settings area.
          </div>
        </li>
        <li>
          <div>
            <strong>Select your payment method and amount.</strong> Choose from the available options and enter the amount you wish to withdraw. The minimum is &pound;8 across all methods. Daily limit is &pound;425, monthly limit is &pound;5,950.
          </div>
        </li>
        <li>
          <div>
            <strong>Wait for processing.</strong> <?php echo SITE_NAME; ?> processes withdrawals within 24 to 72 hours. Bank transfers may take 1-3 business days. You will be contacted if additional documents are needed for verification.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- KYC Verification -->
  <section class="content-section" id="verification">
    <div class="container">
      <h2>Account Verification (KYC)</h2>
      <p><?php echo SITE_NAME; ?> requires identity verification before approving withdrawal requests. This is a standard procedure designed to prevent fraud and comply with anti-money laundering regulations. Documents are approved within 30 days, and the verification process takes up to 10 days once submitted.</p>

      <div class="two-col">
        <div>
          <h3>Required Documents</h3>
          <ul>
            <li><strong>Proof of ID</strong> -- a passport, driving licence, or national ID card</li>
            <li><strong>Selfie with ID</strong> -- a photo of you holding the ID document</li>
            <li><strong>Proof of address</strong> -- a utility bill or bank statement dated within the last 3 months</li>
            <li><strong>Source of funds</strong> -- documentation showing where your gambling funds come from (anti-money laundering requirement)</li>
          </ul>
          <p>You have 30 days to submit the requested documents. Your account may be restricted until verification is complete.</p>
        </div>
        <div>
          <h3>Tips for Faster Verification</h3>
          <ul>
            <li>Upload your documents as soon as you register, rather than waiting for your first withdrawal</li>
            <li>Ensure all four corners of your ID are visible in the photo</li>
            <li>For the selfie, make sure both your face and the ID text are clearly readable</li>
            <li>Use a recent utility bill or bank statement for proof of address</li>
            <li>If documents are rejected, check that images are not blurry and that documents are not expired</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Faster Payouts -->
  <section class="content-section content-section--alt" id="tips">
    <div class="container container--narrow">
      <h2>Tips for Faster Payouts</h2>

      <h3>1. Choose e-wallets or cryptocurrency</h3>
      <p>Skrill and crypto options like Bitcoin, Ethereum, and Tether generally process fastest. If speed is your priority, deposit using one of these methods so your withdrawal can be returned through the same channel.</p>

      <h3>2. Verify your account early</h3>
      <p>Do not wait until your first withdrawal to submit your documents. Upload your ID, selfie, proof of address, and source of funds as soon as you register. This way, when you are ready to cash out, there will be no delays from pending verification.</p>

      <h3>3. Meet the deposit rollover</h3>
      <p>Make sure you have wagered your deposit at least once before requesting a payout. Failing to do so will result in a 10-15% commission on the deposit amount.</p>

      <h3>4. Use your original deposit method</h3>
      <p><?php echo SITE_NAME; ?> prefers to return funds to the same method used for your deposit. Using a different method may trigger additional checks and slow down the process.</p>
    </div>
  </section>

  <!-- Fees -->
  <section class="content-section" id="fees">
    <div class="container container--narrow">
      <h2>Withdrawal Fees</h2>
      <p><?php echo SITE_NAME; ?> does not charge fees for deposits or withdrawals. However, your payment provider or bank may apply their own transaction fees, currency conversion charges, or intermediary costs. Check with your payment provider for details on any third-party fees that may apply.</p>
      <p>Note: if you withdraw without meeting the 1x deposit rollover requirement, a 10% commission (15% for bank card/transfer) will be charged on the deposit amount. This is not a withdrawal fee but a rollover penalty.</p>
    </div>
  </section>

  <!-- Withdrawal FAQ -->
  <section class="content-section content-section--alt" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>Withdrawal FAQ</h2>

      <details class="faq-item">
        <summary>How long does a <?php echo SITE_NAME; ?> withdrawal take?</summary>
        <div class="faq-answer">
          <p>Most withdrawals are processed within 24 to 72 hours. E-wallets and cryptocurrency tend to arrive fastest. Bank transfers may take an additional 1-3 business days on the provider's end.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What is the minimum withdrawal at <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>The minimum withdrawal amount is &pound;8 for all payment methods.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What are the withdrawal limits?</summary>
        <div class="faq-answer">
          <p>Standard limits are &pound;425 per day and &pound;5,950 per month. Per-transaction limits depend on the method: Visa and Mastercard cap at &pound;2,550 per transaction, while Skrill, bank transfers, and all cryptocurrencies allow up to &pound;4,250. VIP players may qualify for higher limits.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Why was my withdrawal declined?</summary>
        <div class="faq-answer">
          <p>Common reasons include: incomplete wagering requirements, unmet deposit rollover, unverified account, exceeding daily or monthly limits, or requesting a payout to a method that does not match your deposit. Contact support for specific information about your case.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Are there any withdrawal fees?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> does not charge withdrawal fees. Your payment provider may apply their own charges. If you withdraw without meeting the 1x deposit rollover, a 10% commission (15% for bank card/transfer) applies to the deposit amount.</p>
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

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
