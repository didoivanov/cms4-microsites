<?php
/**
 * Bonuses Page - DaytonaSpin UK
 */
$page_title = SITE_NAME . ' Bonuses - Welcome Bonus, Free Spins, Cashback & VIP Rewards';
$page_description = 'All ' . SITE_NAME . ' Casino bonuses in one place. Welcome package up to GBP 2,000 + 100 free spins across 3 deposits, high roller bonus, weekly cashback, rakeback, VIP programme and more.';
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
      <h2>Welcome Package for New Players</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>New players at <?php echo SITE_NAME; ?> can claim a three-deposit welcome package with a combined value of up to &pound;2,000 + 100 free spins. The package covers 225% in bonus funds spread across your first three deposits. No promo code is needed -- simply visit the cashier, select the offer, and make your qualifying deposit.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/daytonaspin-bonuses-screen.png" alt="<?php echo SITE_NAME; ?> Casino promotions page showing welcome bonus tiers and free money section" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <!-- Casino Welcome - Deposit 1 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">1st Deposit: 100% up to &pound;700 + 50 Free Spins</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Make your first deposit of at least &pound;45 and receive a 100% match up to &pound;700. On top of that, 50 free spins are credited on Burning Chilli X. The wagering requirement is 35x on the bonus amount, and you have 1 day to complete it. The maximum win from bonus play is capped at 5x the bonus value.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Deposit</div>
            <div class="bonus-detail__value">&pound;45</div>
          </div>
          <div>
            <div class="bonus-detail__label">Wagering</div>
            <div class="bonus-detail__value">35x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Free Spins Game</div>
            <div class="bonus-detail__value">Burning Chilli X</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validity</div>
            <div class="bonus-detail__value">1 day</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max Win</div>
            <div class="bonus-detail__value">5x bonus value</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome - Deposit 2 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2nd Deposit: 55% up to &pound;700 + 50 Free Spins</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Your second deposit qualifies for a 55% match up to &pound;700, plus 50 free spins on Gold Rush with Johnny Cash by BGaming. The same wagering requirements and validity periods apply as the first deposit bonus.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Deposit</div>
            <div class="bonus-detail__value">&pound;45</div>
          </div>
          <div>
            <div class="bonus-detail__label">Wagering</div>
            <div class="bonus-detail__value">35x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Free Spins Game</div>
            <div class="bonus-detail__value">Gold Rush with Johnny Cash</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validity</div>
            <div class="bonus-detail__value">1 day</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome - Deposit 3 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">3rd Deposit: 100% up to &pound;700</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>The third deposit earns a 100% match up to &pound;700. No free spins are included with this tier. This brings the total welcome package to &pound;2,000 in bonus funds and 100 free spins across your first three deposits.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Deposit</div>
            <div class="bonus-detail__value">&pound;45</div>
          </div>
          <div>
            <div class="bonus-detail__label">Wagering</div>
            <div class="bonus-detail__value">35x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validity</div>
            <div class="bonus-detail__value">1 day</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max Win</div>
            <div class="bonus-detail__value">5x bonus value</div>
          </div>
        </div>
      </div>

      <div class="highlight-box" style="margin-top: var(--space-4);">
        <h4>No Promo Code Required</h4>
        <p>You do not need a promo code to claim any bonus at <?php echo SITE_NAME; ?> Casino. Simply visit the cashier, choose your preferred offer, and make the qualifying deposit. The bonus will be credited automatically.</p>
      </div>
    </div>
  </section>

  <!-- High Roller -->
  <section class="content-section content-section--alt" id="high-roller">
    <div class="container">
      <h2>High Roller Bonus</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">High Roller: 50% up to &pound;700</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Designed for players who prefer larger stakes. Deposit at least &pound;450 and receive a 50% match bonus up to &pound;700. No free spins are included. The wagering requirement is 35x, and you have 1 day to complete the turnover. The maximum win from this bonus is capped at 5x the bonus value.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Deposit</div>
            <div class="bonus-detail__value">&pound;450</div>
          </div>
          <div>
            <div class="bonus-detail__label">Wagering</div>
            <div class="bonus-detail__value">35x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validity</div>
            <div class="bonus-detail__value">1 day</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max Win</div>
            <div class="bonus-detail__value">5x bonus value</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Cashback -->
  <section class="content-section" id="cashback">
    <div class="container">
      <h2>Weekly Cashback</h2>
      <p>Every Monday, <?php echo SITE_NAME; ?> credits cashback based on your net deposits from the previous week. A minimum deposit of &pound;20 is required to qualify. The cashback amount must be wagered 3x within 24 hours before it can be withdrawn.</p>

      <table class="data-table">
        <thead>
          <tr>
            <th>Grade</th>
            <th>Net Deposit Range</th>
            <th>Cashback %</th>
            <th>Max Cashback</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Grade 1</td>
            <td>&pound;25 - &pound;1,300</td>
            <td>5%</td>
            <td>&pound;130</td>
          </tr>
          <tr>
            <td>Grade 2</td>
            <td>&pound;1,300 - &pound;7,000</td>
            <td>6%</td>
            <td>&pound;700</td>
          </tr>
          <tr>
            <td>Grade 3</td>
            <td>&pound;7,000 - &pound;14,000</td>
            <td>8%</td>
            <td>&pound;1,300</td>
          </tr>
          <tr>
            <td>Grade 4</td>
            <td>&pound;14,000 - &pound;35,000</td>
            <td>10%</td>
            <td>&pound;4,350</td>
          </tr>
          <tr>
            <td>Grade 5</td>
            <td>&pound;35,000+</td>
            <td>12.5%</td>
            <td>&pound;7,000</td>
          </tr>
          <tr>
            <td>VIP</td>
            <td>By invitation</td>
            <td>Up to 25%</td>
            <td>Contact VIP manager</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- Rakeback -->
  <section class="content-section content-section--alt" id="rakeback">
    <div class="container">
      <h2>Weekly Rakeback</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Live Casino Rakeback: up to 5%</div>
          <span class="bonus-card__tag">Tuesday</span>
        </div>
        <p>Every Tuesday, you can receive a percentage of your live casino bets back. The rakeback is valid only for live dealer games and the exact percentage depends on your VIP level. A minimum accumulated rake of &pound;5 during the calculation period is required to qualify. At Gold level, you receive 4% rakeback with a 5x wagering requirement. At Platinum level, you receive 5% rakeback with just 1x wagering.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Games</div>
            <div class="bonus-detail__value">Live Casino only</div>
          </div>
          <div>
            <div class="bonus-detail__label">Min. Rake</div>
            <div class="bonus-detail__value">&pound;5</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max Rakeback</div>
            <div class="bonus-detail__value">Up to 5%</div>
          </div>
          <div>
            <div class="bonus-detail__label">Day</div>
            <div class="bonus-detail__value">Every Tuesday</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Tournaments -->
  <section class="content-section" id="tournaments">
    <div class="container">
      <h2>Jackpots &amp; Tournaments</h2>
      <p><?php echo SITE_NAME; ?> runs regular tournaments with substantial prize pools. Compete against other players for a share of the winnings.</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Jackpot</h4>
          <p>A progressive jackpot game with a total prize pool of up to &pound;870,000. Place your bets, spin the reels, and watch the prize pot grow in real time.</p>
        </div>
        <div class="info-card">
          <h4>Drops Frenzy Fest</h4>
          <p>A recurring tournament with a total prize pool of &pound;26,000. Eligible slot games contribute to the leaderboard -- top finishers take home cash prizes.</p>
        </div>
        <div class="info-card">
          <h4>Big Sunday Blast</h4>
          <p>Every Sunday, a &pound;17,000 prize pool is up for grabs. Play qualifying games and climb the leaderboard throughout the day.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- VIP -->
  <section class="content-section content-section--alt" id="vip">
    <div class="container">
      <h2>VIP Programme</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>The <?php echo SITE_NAME; ?> VIP Programme rewards loyal players through four levels: Bronze, Silver, Gold, and Platinum. As you climb the tiers, you unlock better cashback and rakeback rates, higher withdrawal limits, priority processing, a personal VIP manager, and level-up rewards. The programme is open to all registered players with a verified account.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/daytonaspin-vip-screen.png" alt="<?php echo SITE_NAME; ?> Casino VIP programme showing Gold and Silver tiers with level-up rewards and rakeback details" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <h3>How to Earn Points</h3>
      <p>Points are earned through two activities:</p>
      <ul>
        <li>Every &pound;7 wagered = 1 point</li>
        <li>Every &pound;17 deposited = 1 point</li>
      </ul>
      <p>All game types count towards point accumulation, including slots, table games, live dealer, and more.</p>

      <h4>VIP Tier Benefits</h4>
      <table class="quick-table">
        <tr><th>Tier</th><th>Benefits</th></tr>
        <tr><td>Bronze</td><td>Base cashback rates, access to standard promotions</td></tr>
        <tr><td>Silver</td><td>Improved cashback, faster withdrawal processing</td></tr>
        <tr><td>Gold</td><td>Higher cashback, 4% live casino rakeback (5x wager), personal account manager, higher withdrawal limits</td></tr>
        <tr><td>Platinum</td><td>Maximum cashback up to 25%, 5% live casino rakeback (1x wager), highest limits, priority support, VIP manager, level-up rewards</td></tr>
      </table>
    </div>
  </section>

  <!-- No-Deposit Info -->
  <section class="content-section" id="no-deposit">
    <div class="container container--narrow">
      <h2><?php echo SITE_NAME; ?> No-Deposit Bonus</h2>
      <p>At present, <?php echo SITE_NAME; ?> does not offer a classic no-deposit bonus. The welcome package requires a minimum first deposit of &pound;45 to activate. Keep an eye on the Promotions section and check back regularly, as the casino frequently rotates its offers and may introduce no-deposit deals in the future.</p>
    </div>
  </section>

  <!-- Bonus FAQ -->
  <section class="content-section content-section--alt" id="bonus-faq">
    <div class="container container--narrow">
      <h2>Bonus FAQ</h2>

      <details class="faq-item">
        <summary>Do I need a promo code to claim a bonus?</summary>
        <div class="faq-answer">
          <p>No. All bonuses at <?php echo SITE_NAME; ?> can be claimed without a promo code. Simply visit the cashier, select the offer, and make the qualifying deposit.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Can I combine multiple bonuses?</summary>
        <div class="faq-answer">
          <p>No. You must complete or forfeit any active bonus before claiming a new one. Bonuses cannot be stacked.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What happens if I withdraw before completing wagering?</summary>
        <div class="faq-answer">
          <p>Requesting a withdrawal before the wagering requirement is met will void the bonus and any associated winnings. Complete the full rollover before requesting a cashout.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>How long do I have to complete the wagering?</summary>
        <div class="faq-answer">
          <p>All welcome bonuses and the high roller bonus must be wagered within 1 day of claiming. Cashback has a 24-hour wagering window as well. Make sure to check the specific terms for each promotion.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What is the maximum win from bonus play?</summary>
        <div class="faq-answer">
          <p>The maximum win from bonus-funded play is capped at 5x the original bonus value. For example, if you receive a &pound;700 bonus, the most you can withdraw from bonus winnings is &pound;3,500.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Do all games contribute equally to wagering?</summary>
        <div class="faq-answer">
          <p>No. Different game types contribute at different rates. Slots typically contribute 100%, while table games and live casino titles contribute less. Check the bonus terms for the exact contribution table.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What is the minimum deposit to claim the welcome bonus?</summary>
        <div class="faq-answer">
          <p>The minimum deposit to claim any of the three welcome bonuses is &pound;45. For the high roller bonus, the minimum deposit is &pound;450.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
