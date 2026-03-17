<?php
/**
 * Bonuses Page – VipLuck Casino
 */
$page_title = SITE_NAME . ' Bonuses - Welcome Bonus, Free Spins, Cashback & VIP Rewards';
$page_description = 'All ' . SITE_NAME . ' Casino bonuses in one place. Welcome package up to EUR 2,000 + 300 free spins across 3 deposits, sports welcome up to EUR 500, weekly reload offers, cashback programs, VIP rewards and more.';
$current_page = 'bonuses';

require_once __DIR__ . '/../includes/header.php';

$hero_title = SITE_NAME . ' Casino Bonuses';
$hero_description = 'Every active promotion, welcome offer and loyalty reward currently available. Please read the terms before claiming any offer.';
$hero_cta = 'Claim Your Bonus';
require_once __DIR__ . '/../includes/page-hero.php';
?>

<main>
  <!-- Welcome Casino Package -->
  <section class="content-section" id="welcome">
    <div class="container">
      <h2>Welcome Bonuses for New Players</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <p style="margin-top:0">New players at <?php echo SITE_NAME; ?> can choose between a casino welcome package or a sports welcome package. The casino offer spreads across your first three deposits with a combined value of up to &euro;2,000 + 300 free spins. The sports package delivers up to &euro;500 across three deposits. Each option is available on your first qualifying deposit and cannot be combined with other promotions.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-bonuses.png" alt="<?php echo SITE_NAME; ?> Casino promotions and welcome bonus offers" style="max-width:300px;width:100%;">
        </div>
      </div>

      <!-- Casino Welcome – Deposit 1 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">1st Deposit: 100% up to &euro;500 + 100 Free Spins</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Make your first deposit of at least &euro;20 and receive a 100% match up to &euro;500. On top of that, 100 free spins are credited in batches of 20 per day over 5 consecutive days. The first batch is available immediately after your deposit clears. Each batch must be used within 24 hours or it expires. A deposit of &euro;10 or more also earns 1 Bonus Crab credit for a chance at the Claw Machine, where prizes include coins, free spins, bonus funds or cash rewards.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Deposit</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Wagering</div>
            <div class="bonus-detail__value">35x (bonus + deposit)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Free Spin Wagering</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validity</div>
            <div class="bonus-detail__value">10 days</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max. Bet</div>
            <div class="bonus-detail__value">&euro;5</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome – Deposit 2 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2nd Deposit: 75% up to &euro;750 + 75 Free Spins</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Your second deposit of &euro;20 or more qualifies for a 75% match up to &euro;750, plus 75 free spins on a featured slot. Free spins are credited in batches of 25 per day over 3 days. The same wagering requirements and validity periods apply as the first deposit bonus.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Deposit</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Wagering</div>
            <div class="bonus-detail__value">35x (bonus + deposit)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Free Spin Wagering</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validity</div>
            <div class="bonus-detail__value">10 days</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome – Deposit 3 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">3rd Deposit: 50% up to &euro;750 + 125 Free Spins</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>The third deposit of &euro;20 or more earns a 50% match up to &euro;750, along with 125 free spins delivered in batches of 25 per day over 5 days. This brings the total welcome package to &euro;2,000 in bonus funds and 300 free spins across your first three deposits.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Deposit</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Wagering</div>
            <div class="bonus-detail__value">35x (bonus + deposit)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Free Spin Wagering</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validity</div>
            <div class="bonus-detail__value">10 days</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome – Deposit 1 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">1st Sports Deposit: 100% up to &euro;200</div>
          <span class="bonus-card__tag">Sports</span>
        </div>
        <p>Sports bettors receive a 100% match on their first deposit up to &euro;200. The maximum bonus amount varies by region: players from Finland, Germany, Norway, Switzerland and Austria can receive up to &euro;200. Italian players receive up to &euro;150. Players from Kazakhstan, Uzbekistan, Kyrgyzstan, Tajikistan, Georgia and Azerbaijan receive up to &euro;50. To activate the bonus, the full deposit amount must be wagered on sports bets at minimum odds of 1.50.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Deposit</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Wagering</div>
            <div class="bonus-detail__value">5x or 6x (varies by country)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Min. Odds</div>
            <div class="bonus-detail__value">2.0 singles / 1.5 accumulators</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validity</div>
            <div class="bonus-detail__value">30 days</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome – Deposit 2 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2nd Sports Deposit: 75% up to &euro;150</div>
          <span class="bonus-card__tag">Sports</span>
        </div>
        <p>The second sports deposit of &euro;20 or more earns a 75% match up to &euro;150. The same activation and wagering conditions apply as the first sports bonus. The deposit must be fully wagered on sports bets at minimum odds of 1.50 before the bonus is credited.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Deposit</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Wagering</div>
            <div class="bonus-detail__value">5x or 6x (varies by country)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validity</div>
            <div class="bonus-detail__value">30 days</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome – Deposit 3 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">3rd Sports Deposit: 50% up to &euro;150</div>
          <span class="bonus-card__tag">Sports</span>
        </div>
        <p>The third sports deposit of &euro;20 or more qualifies for a 50% match up to &euro;150. This completes the sports welcome package at a combined value of up to &euro;500 across three deposits. All wagering requirements must be met within 30 days of each deposit.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Deposit</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Wagering</div>
            <div class="bonus-detail__value">5x or 6x (varies by country)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validity</div>
            <div class="bonus-detail__value">30 days</div>
          </div>
        </div>
      </div>

      <div class="highlight-box">
        <h4><?php echo SITE_NAME; ?> Promo Code</h4>
        <p>If you have a promo code, you can enter it during the registration process. The code field appears on the sign-up form, right after selecting your preferred welcome bonus. Promo codes can unlock special offers or modified bonus terms, so it is worth checking before you deposit.</p>
      </div>

      <div class="highlight-box" style="margin-top: var(--space-4);">
        <h4>Max Win Rule</h4>
        <p>Players residing in Brazil, Chile, Japan, Peru and Thailand are subject to a maximum win cap of 10x the bonus amount on all bonus-funded play. This applies to welcome bonuses, reload bonuses and any other promotional offer. Winnings exceeding this cap will be adjusted accordingly.</p>
      </div>
    </div>
  </section>

  <!-- Reload & Weekly -->
  <section class="content-section content-section--alt" id="reload">
    <div class="container">
      <h2>Weekly Reload Bonuses</h2>
      <p><?php echo SITE_NAME; ?> keeps the promotions going well past the welcome phase. These recurring offers reset weekly, giving active players something to claim every week.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Weekly Boost: 50 Free Spins</div>
          <span class="bonus-card__tag">Monday - Thursday</span>
        </div>
        <p>Deposit &euro;20 or more between Monday and Thursday and receive 50 free spins on a featured slot. You must opt in each week before depositing. Spins must be used within 7 days, and winnings carry a 40x wagering requirement with a 10-day completion window. Max bet while the bonus is active: &euro;5.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Weekend Reload: 50% up to &euro;500 + 75 Free Spins</div>
          <span class="bonus-card__tag">Friday - Sunday</span>
        </div>
        <p>Deposit at least &euro;20 on the weekend and get a 50% match up to &euro;500. If your deposit is &euro;50 or more, you also receive 75 free spins on a selected slot. You must opt in before depositing. The wagering requirement is 35x on deposit and bonus, and 40x on free spin winnings. You have 10 days to complete the requirements.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Sunday Special: 30% up to &euro;300 + 50 Free Spins</div>
          <span class="bonus-card__tag">Sunday Only</span>
        </div>
        <p>An additional Sunday-only offer for players who want an extra boost heading into the new week. Deposit &euro;20 or more and receive a 30% match up to &euro;300 plus 50 free spins. Opt-in is required. Wagering is 35x on deposit and bonus, 40x on free spin winnings, with a 10-day completion period.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Weekly Sports Reload: 55% up to &euro;300</div>
          <span class="bonus-card__tag">Sports</span>
        </div>
        <p>Once per week, your largest deposit qualifies for a 55% sports bonus worth up to &euro;300. The deposit must be wagered once on sports bets at minimum odds of 1.50 before the bonus is credited. You can then claim it via live chat or email. The wagering requirements must be completed within 30 days, and the maximum cashout from this bonus is 10x its value.</p>
      </div>
    </div>
  </section>

  <!-- Cashback -->
  <section class="content-section" id="cashback">
    <div class="container">
      <h2>Cashback Programs</h2>
      <p><?php echo SITE_NAME; ?> runs three separate cashback programs: daily cashback for casino games, weekly cashback for live casino and weekly cashback for sports betting. Each program has its own terms and claim process.</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Daily Casino Cashback</h4>
          <p>Available from VIP Level 3 and above. VIP 3 receives 5% daily up to &euro;200. VIP 4 gets 10% up to &euro;300. VIP 5 receives 15% up to &euro;500. Cashback is credited automatically at 04:00 UTC with a 1x wagering requirement. You must re-opt in every 4 weeks.</p>
        </div>
        <div class="info-card">
          <h4>Live Casino Cashback: 25% up to &euro;350</h4>
          <p>Weekly cashback on net losses from live casino games. The minimum qualifying loss is &euro;5. Contact support on Monday after 06:00 UTC (before 23:59 UTC) to claim. Once credited, the cashback carries a 1x wagering requirement before withdrawal.</p>
        </div>
        <div class="info-card">
          <h4>Sports Cashback: 15% up to &euro;500</h4>
          <p>Covers net losses from sports bets placed Monday through Sunday. A minimum &euro;20 loss is required to qualify. Contact support on Monday to claim. The cashback comes with a 3x wagering requirement and can only be used in the Sports section.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sports Promos -->
  <section class="content-section content-section--alt" id="sports-promos">
    <div class="container">
      <h2>Sports Betting Promotions</h2>
      <p>Beyond the welcome bonus and cashback, the sportsbook section includes several tools that add value to your bets.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Accumulator Boost: up to 100%</div>
        </div>
        <p>Place an accumulator bet with 3 or more selections, each at 1.40+ odds, and your winnings receive a bonus. The multiplier starts at 3% for 3 legs and scales up to 100% for 21 or more legs. Only real-money bets count. Requesting a withdrawal before the boost is credited voids the bonus.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2-Goal Lead Early Payout</div>
        </div>
        <p>If your team goes 2 goals ahead, your pre-match 1X2 bet is settled in full as a winner -- no need to wait for the final whistle. This offer applies to home or away win bets only. Live bets and draw bets are excluded, and cashing out early voids the early payout.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Sports Boost: 20% up to &euro;100</div>
        </div>
        <p>A weekly sports boost available to all active players. Deposit &euro;20 or more and receive a 20% bonus up to &euro;100 for sports betting. The bonus must be wagered 5x at minimum odds of 1.50 within 14 days. Opt-in is required via your account profile.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Friday Advantage: Free Bet up to &euro;50</div>
        </div>
        <p>Every Friday, place a qualifying sports bet of &euro;20 or more at minimum odds of 1.80. If the bet loses, you receive a free bet worth 50% of your stake, up to &euro;50. The free bet must be used within 3 days and carries a 3x wagering requirement at minimum odds of 1.50.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Weekend Sports Reload: 40% up to &euro;200</div>
        </div>
        <p>Deposit &euro;20 or more on Saturday or Sunday and receive a 40% sports bonus up to &euro;200. The deposit must be wagered once on sports bets at minimum odds of 1.50 before the bonus activates. Wagering requirements must be completed within 30 days, and the maximum payout from this bonus is 10x its value.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Enhanced Odds</div>
        </div>
        <p>Selected pre-match 1X2 markets occasionally feature boosted odds. Look for the "Enhanced Prices" label in the market description. Winnings from enhanced odds bets are paid as real money with no additional wagering requirement.</p>
      </div>
    </div>
  </section>

  <!-- VIP, Shop, Crab -->
  <section class="content-section" id="vip">
    <div class="container">
      <h2>VIP Program &amp; Extras</h2>
      <div class="two-col">
        <div>
          <h3>VIP Program</h3>
          <p><?php echo SITE_NAME; ?> operates a five-tier loyalty program that you progress through based on your wagering activity. The tiers are Bronze, Silver, Gold, Platinum and Diamond. As you climb, you unlock benefits such as a personal account manager, increased withdrawal limits, exclusive bonus offers and higher cashback percentages. Diamond-tier members gain access to the best weekly cashback deals, priority withdrawals and invitations to exclusive events.</p>

          <h4>VIP Tier Benefits</h4>
          <table class="quick-table">
            <tr><th>Tier</th><th>Benefits</th></tr>
            <tr><td>Bronze</td><td>Base cashback rates, access to standard promotions, Coin rewards on activity</td></tr>
            <tr><td>Silver</td><td>Improved cashback (3%), faster withdrawal processing, birthday bonus</td></tr>
            <tr><td>Gold</td><td>5% cashback up to &euro;200/day, personal account manager, higher withdrawal limits</td></tr>
            <tr><td>Platinum</td><td>10% cashback up to &euro;300/day, exclusive promotions, priority support</td></tr>
            <tr><td>Diamond</td><td>15% cashback up to &euro;500/day, highest limits, VIP events, custom offers</td></tr>
          </table>

          <h3>Bonus Crab</h3>
          <p>Every deposit of &euro;10 or more earns 1 Bonus Crab credit. Use it to "catch" a random prize from the Claw Machine -- possible rewards include bonus funds, free spins or coins. A small daily extra that adds variety to your playing experience.</p>
        </div>
        <div>
          <h3>Coins &amp; Shop</h3>
          <p>Coins are earned through gameplay, challenges and promotions. You can spend them in the <?php echo SITE_NAME; ?> Shop on rewards ranging from free spins on selected slots (e.g. 5 spins on Sweet Bonanza for 30 Coins) to bonus funds (&euro;5 for 50 Coins, up to &euro;250 for 1,200 Coins). A great way to turn your loyalty into tangible rewards at your own pace.</p>

          <h3>Challenges</h3>
          <p>Weekly challenges reward you for completing simple objectives. Casino challenges may ask you to place &euro;0.50 bets on specific slots, while sports challenges might require &euro;15 bets on matches with minimum 2.0 odds. Each completed challenge earns Coins, and completing 20 in a week unlocks a 50-Coin bonus.</p>

          <h3>Anniversary Special</h3>
          <p>On the anniversary of your account registration, <?php echo SITE_NAME; ?> offers a special bonus package. The offer scales with your VIP tier and account activity, and is delivered automatically to your account on your anniversary date. Check your notifications or contact support if you believe your anniversary bonus is missing.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- No-Deposit Info -->
  <section class="content-section content-section--alt" id="no-deposit">
    <div class="container container--narrow">
      <h2><?php echo SITE_NAME; ?> No-Deposit Bonus</h2>
      <p>Currently, <?php echo SITE_NAME; ?> does not offer a classic no-deposit bonus. However, the Bonus Crab feature rewards every deposit of &euro;10 or more with a free try at the Claw Machine, where you can win spins, bonus funds, coins or cash rewards without additional wagering on the original prize. This is the closest thing to a no-deposit perk currently available on the platform.</p>
      <p>Keep an eye on the Promotions section and check back regularly, as the casino frequently rotates its offers and may introduce no-deposit deals or free bonus codes in the future.</p>
    </div>
  </section>

  <!-- Bonus FAQ -->
  <section class="content-section" id="bonus-faq">
    <div class="container container--narrow">
      <h2>Bonus FAQ</h2>

      <details class="faq-item">
        <summary>Can I use a promo code at <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Yes. During registration you have the option to enter a promo code after selecting your preferred welcome bonus. If you have a valid code, enter it there to activate the associated benefits.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Can I combine multiple bonuses?</summary>
        <div class="faq-answer">
          <p>No. Welcome bonuses and reload promotions cannot be stacked. You must complete or cancel any active bonus before claiming a new one. Some bonuses can be cancelled from your Profile section or by contacting support.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What happens if I request a withdrawal before completing wagering?</summary>
        <div class="faq-answer">
          <p>Requesting a withdrawal before the wagering requirements are met will void the bonus and any associated winnings. Make sure you have fully completed the rollover before requesting a cashout.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Do all games contribute equally to wagering requirements?</summary>
        <div class="faq-answer">
          <p>No. Different game types contribute at different rates. Slots typically contribute 100%, while table games and live casino titles contribute less. Check the bonus terms for the exact contribution table.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Are Skrill and Neteller deposits eligible for bonuses?</summary>
        <div class="faq-answer">
          <p>In most cases, deposits made via Skrill or Neteller are not eligible for welcome bonuses. Check the specific promotion terms for any exceptions.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Does the max win rule apply to me?</summary>
        <div class="faq-answer">
          <p>The 10x max win cap applies to residents of Brazil, Chile, Japan, Peru and Thailand. If you reside in one of these countries, your winnings from bonus-funded play are capped at 10 times the bonus amount. Players from other regions are not subject to this rule.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>How does the anniversary bonus work?</summary>
        <div class="faq-answer">
          <p>Each year on the anniversary of your registration, <?php echo SITE_NAME; ?> delivers a special bonus to your account. The size and type of the offer depends on your VIP tier and overall activity. The bonus is credited automatically -- check your notifications or contact support if you do not receive it.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
