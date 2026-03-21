<?php
/**
 * Withdrawal Page - WestAce (Canada / Canadian English)
 */
$page_title = 'WestAce Withdrawals Canada - Payout Methods, Limits & Processing Times';
$page_description = 'Everything about ' . SITE_NAME . ' Casino Canada withdrawals: payout methods including Interac, processing times, daily and monthly limits in CAD, KYC verification, and tips for faster cashouts.';
$current_page = 'withdrawal';
$lang_prefix = '/ca';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Withdrawals &amp; Payouts';
$hero_description = 'How to cash out your winnings in CAD, which methods are available, processing times, limits, and what to expect during the verification process.';
$hero_cta = 'Start Playing';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Withdrawal Overview</h2>
      <p>Cashing out at <?php echo SITE_NAME; ?> is straightforward and fee-free. We process all withdrawal requests within 24 to 72 hours depending on the payment method. Funds are returned to the same method you used for your deposit whenever possible. You must complete KYC verification before your first withdrawal. All transactions are in Canadian dollars - no currency conversion required.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Min Withdrawal</h4>
          <p>C$30 across all payment methods. Amounts below this threshold cannot be processed.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Processing Time</h4>
          <p>24-72 hours for most methods. Bank transfers may take 1-3 business days on top of casino processing.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Withdrawal Limits</h4>
          <p>C$1,050/day, C$3,375/week, C$13,500/month for standard accounts. VIP members qualify for higher limits.</p>
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
          <p>The table below shows all deposit and withdrawal options at <?php echo SITE_NAME; ?> for Canadian players. Interac is a popular choice for Canadians - fast, familiar, and available directly through your Canadian bank. All transactions are processed in CAD with no conversion fees on our end.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-payments-screen.png" alt="<?php echo SITE_NAME; ?> Casino deposit and withdrawal methods including Interac, Mastercard, Skrill and crypto" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
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
              <td>Interac</td>
              <td>C$15</td>
              <td>C$6,000</td>
              <td>C$30</td>
              <td>C$6,000</td>
              <td>24-72 hours</td>
            </tr>
            <tr>
              <td>Mastercard</td>
              <td>C$15</td>
              <td>C$3,000</td>
              <td>C$30</td>
              <td>C$4,500</td>
              <td>24-72 hours</td>
            </tr>
            <tr>
              <td>Paysafecard</td>
              <td>C$15</td>
              <td>C$1,500</td>
              <td colspan="2">Deposit only</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Visa</td>
              <td colspan="2">Withdrawal only</td>
              <td>C$30</td>
              <td>C$4,500</td>
              <td>24-72 hours</td>
            </tr>
            <tr>
              <td>Bank Transfer</td>
              <td colspan="2">Withdrawal only</td>
              <td>C$30</td>
              <td>C$7,500</td>
              <td>1-3 business days</td>
            </tr>
            <tr>
              <td>Skrill</td>
              <td>C$15</td>
              <td>C$7,500</td>
              <td>C$30</td>
              <td>C$7,500</td>
              <td>24-72 hours</td>
            </tr>
            <tr>
              <td>Neteller</td>
              <td>C$15</td>
              <td>C$7,500</td>
              <td colspan="2">Deposit only</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Bitcoin (BTC)</td>
              <td>C$15</td>
              <td>C$7,500</td>
              <td>C$30</td>
              <td>C$7,500</td>
              <td>24-72 hours</td>
            </tr>
            <tr>
              <td>Ethereum (ETH)</td>
              <td>C$15</td>
              <td>C$7,500</td>
              <td>C$30</td>
              <td>C$7,500</td>
              <td>24-72 hours</td>
            </tr>
            <tr>
              <td>Tether (USDT)</td>
              <td>C$15</td>
              <td>C$7,500</td>
              <td>C$30</td>
              <td>C$7,500</td>
              <td>24-72 hours</td>
            </tr>
            <tr>
              <td>Litecoin (LTC)</td>
              <td>C$15</td>
              <td>C$7,500</td>
              <td>C$30</td>
              <td>C$7,500</td>
              <td>24-72 hours</td>
            </tr>
            <tr>
              <td>Ripple (XRP)</td>
              <td>C$15</td>
              <td>C$7,500</td>
              <td>C$30</td>
              <td>C$7,500</td>
              <td>24-72 hours</td>
            </tr>
            <tr>
              <td>USD Coin (USDC)</td>
              <td>C$15</td>
              <td>C$7,500</td>
              <td>C$30</td>
              <td>C$7,500</td>
              <td>24-72 hours</td>
            </tr>
            <tr>
              <td>Bitcoin Cash (BCH)</td>
              <td>C$15</td>
              <td>C$7,500</td>
              <td>C$30</td>
              <td>C$7,500</td>
              <td>24-72 hours</td>
            </tr>
            <tr>
              <td>Dogecoin (DOGE)</td>
              <td>C$15</td>
              <td>C$7,500</td>
              <td>C$30</td>
              <td>C$7,500</td>
              <td>24-72 hours</td>
            </tr>
            <tr>
              <td>Cardano (ADA)</td>
              <td>C$15</td>
              <td>C$7,500</td>
              <td>C$30</td>
              <td>C$7,500</td>
              <td>24-72 hours</td>
            </tr>
          </tbody>
        </table>
      </div>

      <p style="margin-top: var(--space-4);">The exact range of payment methods may vary depending on your region and device. Cryptocurrency transactions require blockchain confirmations after casino processing, which may add a small amount of time beyond the casino processing window.</p>
    </div>
  </section>

  <!-- Withdrawal Limits -->
  <section class="content-section" id="limits">
    <div class="container container--narrow">
      <h2>Withdrawal Limits</h2>
      <p>Standard withdrawal limits apply to all accounts. VIP players can qualify for significantly higher limits based on their tier. Contact support for details on VIP limit upgrades.</p>

      <div class="data-table-wrap">
        <table class="data-table">
          <thead>
            <tr>
              <th>Account Type</th>
              <th>Daily Limit</th>
              <th>Weekly Limit</th>
              <th>Monthly Limit</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Standard</td>
              <td>C$1,050</td>
              <td>C$3,375</td>
              <td>C$13,500</td>
            </tr>
            <tr>
              <td>VIP</td>
              <td>C$2,250</td>
              <td>C$10,500</td>
              <td>C$42,000</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Rollover Requirement -->
  <section class="content-section content-section--alt" id="rollover">
    <div class="container container--narrow">
      <h2>Deposit Rollover Requirement</h2>
      <p><?php echo SITE_NAME; ?> applies a 1x rollover requirement on all deposits. This means you must wager your deposited funds at least once before requesting a withdrawal. This is separate from any bonus wagering requirements and applies to your real money deposit balance.</p>
      <p>If you request a withdrawal without meeting the 1x rollover, a commission will be deducted:</p>
      <ul>
        <li><strong>10% commission</strong> on the deposit amount for e-wallet and crypto withdrawals</li>
        <li><strong>15% commission</strong> on the deposit amount for bank card and bank transfer withdrawals</li>
      </ul>
      <p>To avoid this charge, simply play through your deposit once before requesting a payout. One round of wagering at any amount is enough to clear the requirement.</p>
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
            <strong>Complete any active wagering requirements.</strong> If you claimed a bonus, the full wagering requirement must be cleared before you can withdraw. Also make sure you have met the 1x deposit rollover on your real money balance.
          </div>
        </li>
        <li>
          <div>
            <strong>Open the cashier.</strong> Navigate to the withdrawal section in your account. You will find it in the main menu or account settings area. Select the withdrawal tab.
          </div>
        </li>
        <li>
          <div>
            <strong>Select your payment method and amount.</strong> Choose from the available options and enter the amount you wish to withdraw in CAD. The minimum is C$30 across all methods. Daily limit is C$1,050, and the monthly limit is C$13,500 for standard accounts.
          </div>
        </li>
        <li>
          <div>
            <strong>Wait for processing.</strong> <?php echo SITE_NAME; ?> processes withdrawals within 24 to 72 hours. Bank transfers may take an additional 1-3 business days after casino processing. You will be contacted if additional documents are required for verification.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- KYC Verification -->
  <section class="content-section content-section--alt" id="verification">
    <div class="container">
      <h2>Account Verification (KYC)</h2>
      <p><?php echo SITE_NAME; ?> requires identity verification before approving withdrawal requests. This is a standard procedure designed to prevent fraud and comply with anti-money laundering regulations. Documents are approved within 30 days, and the verification process typically takes up to 10 days once all documents are submitted.</p>

      <div class="two-col">
        <div>
          <h3>Required Documents</h3>
          <ul>
            <li><strong>Proof of ID</strong> - a Canadian passport, provincial driver's licence, or government-issued photo ID</li>
            <li><strong>Selfie with ID</strong> - a photo of you holding the ID document</li>
            <li><strong>Proof of address</strong> - a utility bill, bank statement, or government letter dated within the last 3 months showing your Canadian address</li>
            <li><strong>Source of funds</strong> - documentation showing where your gambling funds come from (anti-money laundering requirement)</li>
          </ul>
          <p>You have 30 days to submit the requested documents. Your account may be restricted until verification is complete.</p>
        </div>
        <div>
          <h3>Tips for Faster Verification</h3>
          <ul>
            <li>Upload your documents as soon as you register, rather than waiting until your first withdrawal request</li>
            <li>Ensure all four corners of your ID are clearly visible in the photo</li>
            <li>For the selfie, make sure both your face and the ID text are clearly readable</li>
            <li>Use a recent utility bill or Canadian bank statement for proof of address</li>
            <li>If documents are rejected, check that images are not blurry and that documents have not expired</li>
            <li>Canadian driver's licences and passports are preferred for fastest processing</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Faster Payouts -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Tips for Faster Payouts</h2>

      <h3>1. Use Interac or cryptocurrency</h3>
      <p>Interac is a go-to for Canadian players - it is fast, familiar, and connects directly to your Canadian bank account. Cryptocurrency options like Bitcoin, Ethereum, and Tether also tend to process quickly. If speed is your priority, deposit using one of these methods so your withdrawal can be returned through the same channel.</p>

      <h3>2. Verify your account early</h3>
      <p>Do not wait until your first withdrawal to submit your documents. Upload your ID, selfie, proof of address, and source of funds as soon as you register. That way, when you are ready to cash out, there are no delays from pending verification.</p>

      <h3>3. Meet the deposit rollover</h3>
      <p>Make sure you have wagered your deposit at least once before requesting a payout. Failing to do so will result in a 10-15% commission on the deposit amount - a cost that is easy to avoid by playing through your balance first.</p>

      <h3>4. Use your original deposit method</h3>
      <p><?php echo SITE_NAME; ?> prefers to return funds to the same method used for your deposit. Using a different method may trigger additional verification checks and slow down the process.</p>
    </div>
  </section>

  <!-- Fees -->
  <section class="content-section content-section--alt" id="fees">
    <div class="container container--narrow">
      <h2>Withdrawal Fees</h2>
      <p><?php echo SITE_NAME; ?> does not charge fees for deposits or withdrawals. However, your payment provider or bank may apply their own transaction fees or processing charges. This is especially worth checking with bank transfers. Check with your payment provider for details on any third-party fees that may apply.</p>
      <p>Note: if you withdraw without meeting the 1x deposit rollover requirement, a 10% commission (15% for bank card and bank transfer) will be charged on the deposit amount. This is not a withdrawal fee - it is a rollover penalty that can be avoided by playing through your deposit first.</p>
    </div>
  </section>

  <!-- Withdrawal FAQ -->
  <section class="content-section" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>Withdrawal FAQ</h2>

      <details class="faq-item">
        <summary>How long does a <?php echo SITE_NAME; ?> withdrawal take?</summary>
        <div class="faq-answer">
          <p>Most withdrawals are processed within 24 to 72 hours. Interac and cryptocurrency tend to arrive fastest. Bank transfers may take an additional 1-3 business days on the provider's end after casino processing.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What is the minimum withdrawal at <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>The minimum withdrawal amount is C$30 for all payment methods.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What are the withdrawal limits in Canada?</summary>
        <div class="faq-answer">
          <p>Standard limits are C$1,050 per day, C$3,375 per week, and C$13,500 per month. VIP players can access higher limits of C$2,250 per day, C$10,500 per week, and C$42,000 per month. Per-transaction limits depend on the method: Interac allows up to C$6,000, while Mastercard and Visa cap at C$4,500 per transaction. Skrill and all cryptocurrencies allow up to C$7,500 per transaction.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Does <?php echo SITE_NAME; ?> accept Interac for withdrawals?</summary>
        <div class="faq-answer">
          <p>Yes. Interac is available for both deposits and withdrawals at <?php echo SITE_NAME; ?> Canada. It is one of the most popular methods for Canadian players because it connects directly to your bank account and processes quickly - typically within 24 to 72 hours.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Why was my withdrawal declined?</summary>
        <div class="faq-answer">
          <p>Common reasons include: incomplete wagering requirements, unmet 1x deposit rollover, unverified account (KYC not completed), exceeding daily or monthly limits, or requesting a payout to a method that does not match your deposit. Contact support via live chat for specific information about your case.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Are there any withdrawal fees?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> does not charge withdrawal fees on its end. Your payment provider may apply their own charges. If you withdraw without meeting the 1x deposit rollover, a 10% commission (15% for bank card and bank transfer) applies to the deposit amount - this can be avoided by wagering through your deposit before cashing out.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Can I cancel a pending withdrawal?</summary>
        <div class="faq-answer">
          <p>Depending on the processing stage, you may be able to cancel a pending withdrawal request. Contact customer support through live chat as soon as possible if you need to cancel. Once a withdrawal has been approved and sent, it cannot be reversed.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Do I need to verify my account before withdrawing?</summary>
        <div class="faq-answer">
          <p>Yes. <?php echo SITE_NAME; ?> requires KYC verification before processing your first withdrawal. You will need to provide proof of identity (Canadian passport or driver's licence), a selfie with your ID, and proof of address. We recommend submitting these documents shortly after registration to avoid delays when you are ready to cash out.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
