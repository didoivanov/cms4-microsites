<?php
/**
 * Bonuses Page
 */
$page_title = SITE_NAME . ' Bonuses - Welcome Bonus, Free Spins, Promo Codes & No-Deposit Offers';
$page_description = 'All ' . SITE_NAME . ' Casino bonuses in one place. Welcome bonus up to EUR 500 + 200 free spins, no-deposit promo codes, weekly reload offers, cashback deals, and VIP rewards.';
$current_page = 'bonuses';

require_once __DIR__ . '/../includes/header.php';

$hero_title = SITE_NAME . ' Casino Bonuses';
$hero_description = 'Every active promotion, welcome deal, and loyalty reward currently available. Make sure to read the terms before claiming any offer.';
$hero_cta = 'Claim Your Bonus';
require_once __DIR__ . '/../includes/page-hero.php';
?>

<main>
  <!-- Welcome Bonuses -->
  <section class="content-section" id="welcome">
    <div class="container">
      <h2>Welcome Bonuses for New Players</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <p style="margin-top:0">First-time depositors at <?php echo SITE_NAME; ?> can pick from multiple welcome deals depending on whether they prefer casino games or sports betting. Each option is available on your very first deposit and cannot be combined with other promotions.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/casea-bonuses.png" alt="<?php echo SITE_NAME; ?> Casino promotions and welcome bonus offers" style="max-width:300px;width:100%;">
        </div>
      </div>

      <!-- Casino Welcome -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">100% up to &euro;500 + 200 Free Spins</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Deposit a minimum of EUR 20 to receive a full 100% match on your first deposit, capped at EUR 500. On top of that, 200 free spins are distributed in batches of 20 per day over 10 consecutive days. The first batch becomes available right after your deposit. You must claim each set within 24 hours or it expires. A deposit of at least EUR 10 also gives you 1 Bonus Crab credit for a try at the Claw Machine, where prizes include coins, free spins, bonuses, or cash rewards.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min Deposit</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Wagering</div>
            <div class="bonus-detail__value">35x (bonus + deposit)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Free Spins Wagering</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validity</div>
            <div class="bonus-detail__value">10 days</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max Bet</div>
            <div class="bonus-detail__value">&euro;5</div>
          </div>
        </div>
      </div>

      <!-- Multi-Deposit Welcome -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">250% up to &euro;3,000 + 350 Free Spins</div>
          <span class="bonus-card__tag">4-Deposit Package</span>
        </div>
        <p>A multi-deposit welcome package spread across your first four deposits. The first deposit gives you 100% up to EUR 1,000 plus 200 free spins. The second brings a 75% match up to EUR 500. The third adds 50% up to EUR 500 plus 50 free spins, and the fourth rounds it off with 25% up to EUR 1,000 plus 100 free spins.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min Deposit</div>
            <div class="bonus-detail__value">&euro;20 per deposit</div>
          </div>
          <div>
            <div class="bonus-detail__label">Wagering</div>
            <div class="bonus-detail__value">35x per bonus</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max Cashout</div>
            <div class="bonus-detail__value">10x bonus amount</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validity</div>
            <div class="bonus-detail__value">10 days per bonus</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">100% Sports Bonus up to &euro;100</div>
          <span class="bonus-card__tag">Sports</span>
        </div>
        <p>Sports bettors can grab a 100% match on their first deposit. The maximum bonus varies by region: players from Finland, Germany, Norway, Switzerland, and Austria can receive up to EUR 200. Italian players get up to EUR 150. Players from Kazakhstan, Uzbekistan, Kyrgyzstan, Tajikistan, Georgia, and Azerbaijan can get up to EUR 50. To activate the bonus, the full deposit amount must be wagered on sports bets with odds of at least 1.50.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min Deposit</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Wagering</div>
            <div class="bonus-detail__value">5x or 6x (by country)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Min Odds</div>
            <div class="bonus-detail__value">2.0 singles / 1.5 multiples</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validity</div>
            <div class="bonus-detail__value">30 days</div>
          </div>
        </div>
      </div>

      <div class="highlight-box">
        <h4><?php echo SITE_NAME; ?> Promo Code</h4>
        <p>If you have a promo code, you can enter it during the registration process. The code field appears on the sign-up form right after you select your preferred welcome bonus. Promo codes may unlock special deals or adjusted bonus terms, so it is worth checking before you deposit.</p>
      </div>
    </div>
  </section>

  <!-- Reload & Weekly -->
  <section class="content-section content-section--alt" id="reload">
    <div class="container">
      <h2>Weekly Reload Bonuses</h2>
      <p><?php echo SITE_NAME; ?> keeps the promotions coming after the welcome phase. These recurring offers refresh each week, so active players always have something to claim.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">66 Weekly Free Spins</div>
          <span class="bonus-card__tag">Monday - Thursday</span>
        </div>
        <p>Make a deposit of EUR 20 or more between Monday and Thursday to receive 66 free spins on a featured slot. You need to opt in each week before depositing. The spins must be used within 7 days, and winnings carry a 40x wagering requirement with a 10-day completion window. Max bet while the bonus is active: EUR 5.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Weekend Reload: 50% up to &euro;777 + 77 Free Spins</div>
          <span class="bonus-card__tag">Friday - Sunday</span>
        </div>
        <p>Deposit at least EUR 20 on a weekend to get a 50% match up to EUR 777. If your deposit is EUR 50 or more, you also receive 77 free spins on a selected slot. Opt-in is required before depositing. Wagering is 35x on the deposit plus bonus and 40x on free spin winnings. You have 10 days to clear the requirements.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Weekly Sports Reload: 55% up to &euro;750</div>
          <span class="bonus-card__tag">Sports</span>
        </div>
        <p>Once per week, your largest deposit qualifies for a 55% sports bonus up to EUR 750. The deposit must be rolled over once on sports bets at odds of 1.50 or higher before the bonus is credited. You can then request it through live chat or email. Wagering requirements must be met within 30 days, and the maximum cashout from this bonus is 10x its value.</p>
      </div>
    </div>
  </section>

  <!-- Cashback -->
  <section class="content-section" id="cashback">
    <div class="container">
      <h2>Cashback Programs</h2>
      <p><?php echo SITE_NAME; ?> runs three separate cashback programs: daily cashback for casino games, weekly cashback for the live casino, and weekly cashback for sports betting. Each program has its own terms and claiming process.</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Daily Casino Cashback</h4>
          <p>Available to VIP level 2 and above. VIP 2 gets 3% up to EUR 100 daily. VIP 3 gets 5% up to EUR 200. VIP 4 gets 10% up to EUR 300. VIP 5 gets 15% up to EUR 400. Cashback is credited automatically at 04:00 UTC and requires 1x wagering. You must opt in every 4 weeks.</p>
        </div>
        <div class="info-card">
          <h4>Live Casino Cashback: 25% up to &euro;350</h4>
          <p>Weekly cashback on net losses from live casino games. Minimum qualifying loss is EUR 5. Contact customer support on Monday after 06:00 UTC (before 23:59 UTC) to claim. Once credited, the cashback requires 1x wagering before withdrawal.</p>
        </div>
        <div class="info-card">
          <h4>Sports Cashback: 10% up to &euro;500</h4>
          <p>Covers net losses on sports bets from Monday to Sunday. Minimum loss of EUR 20 to qualify. Contact support on Monday to claim. The cashback carries a 3x wagering requirement and can only be used in the Sports section.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sports Promos -->
  <section class="content-section content-section--alt" id="sports-promos">
    <div class="container">
      <h2>Sports Betting Promotions</h2>
      <p>Beyond the welcome bonus and cashback, the sportsbook comes with several tools designed to add value to your bets.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Accumulator Boost: up to 100%</div>
        </div>
        <p>Place a multi-bet with 3 or more selections at odds of 1.40+ each, and your winnings receive a boost. The multiplier starts at 3% for 3 picks and climbs to 100% for 21 or more. Only real-money wagers count. Requesting a withdrawal before the bonus is credited will void it.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2 Goals Ahead Early Payout</div>
        </div>
        <p>If your team takes a 2-goal lead, your pre-match 1X2 bet pays out in full -- no need to wait for the final whistle. This offer applies to home or away win bets only. Live bets and draw bets are excluded, and cashing out will cancel the early payout.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Bet Builder: 50% Risk-Free up to &euro;50</div>
        </div>
        <p>Place a Bet Builder with odds of 1.70 or higher using at least EUR 20 in real money. If it loses, you get a free bet worth 50% of your stake (up to EUR 50). Available once per week. The free bet must be used within 3 days and carries a 3x wagering requirement at odds of 1.50+.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Enhanced Odds</div>
        </div>
        <p>Selected pre-match 1X2 markets occasionally offer boosted odds. Look for the "Enhanced Prices" indicator in the market description. Wins from enhanced odds bets are paid as real money with no extra wagering.</p>
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
          <p><?php echo SITE_NAME; ?> runs a multi-tier loyalty program that you progress through based on your wagering activity. As you climb the ranks, you unlock benefits like a personal account manager, increased withdrawal limits, exclusive bonus offers, and higher cashback percentages. The top VIP levels give access to the best weekly cashback deals and faster processing on payouts.</p>

          <h3>Bonus Crab</h3>
          <p>Every deposit of EUR 20 or more earns you 1 Bonus Crab credit. Use it to "catch" a random prize from the Claw Machine -- possible rewards include bonus money, free spins, or coins. It is a small daily perk that adds some variety to your sessions.</p>
        </div>
        <div>
          <h3>Exclusive Shop</h3>
          <p>Coins earned through play, challenges, and promotions can be spent in the shop. Rewards range from free spins on selected slots (e.g., 5 spins on Sweet Bonanza for 30 coins) to bonus money (EUR 5 for 50 coins, up to EUR 250 for 1,200 coins). It is a nice way to convert your loyalty into tangible rewards at your own pace.</p>

          <h3>Challenges</h3>
          <p>Weekly challenges reward you for meeting simple targets. Casino challenges might ask you to place EUR 0.30 bets on specific slots, while sports challenges could require EUR 15 wagers on matches with minimum 2.0 odds. Each completed challenge earns coins, and finishing 20 in a week brings a 50-coin bonus.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- No-Deposit Info -->
  <section class="content-section content-section--alt" id="no-deposit">
    <div class="container container--narrow">
      <h2><?php echo SITE_NAME; ?> No-Deposit Bonus</h2>
      <p>At this time, <?php echo SITE_NAME; ?> does not offer a classic no-deposit bonus. However, the Bonus Crab feature rewards every deposit of EUR 10 or more with a free try at the Claw Machine, where you can win spins, bonus money, coins, or cash rewards without any additional wagering on that initial prize. It functions as the closest thing to a no-deposit perk currently available on the platform.</p>
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
          <p>Yes. During registration, you will see an option to enter a promo code after selecting your preferred welcome bonus. If you have a valid code, enter it there to activate any associated perks.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Can I combine multiple bonuses?</summary>
        <div class="faq-answer">
          <p>No. Welcome bonuses and reload promotions cannot be stacked. You must complete or cancel any active bonus before claiming a new one. Some bonuses can be canceled from the Profile section or by contacting support.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What happens if I request a withdrawal before clearing the wagering?</summary>
        <div class="faq-answer">
          <p>Making a withdrawal request before completing the wagering requirements will void the bonus and any associated winnings. Make sure you have fully met the rollover before requesting a payout.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Do all games contribute equally to wagering?</summary>
        <div class="faq-answer">
          <p>No. Different game types contribute at different rates. Slots typically contribute 100%, while table games and live casino titles may contribute less. Check the bonus terms for the exact contribution table.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Are Skrill and Neteller deposits eligible for bonuses?</summary>
        <div class="faq-answer">
          <p>In most cases, deposits made via Skrill or Neteller do not qualify for the welcome bonuses. Check the specific promotion terms for exceptions.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
