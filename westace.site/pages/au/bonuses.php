<?php
/**
 * Bonuses Page - WestAce (AU / Australian English)
 */
$page_title = 'WestAce Bonuses Australia - Welcome Bonus up to A$1,650 + 50 Free Spins';
$page_description = 'All ' . SITE_NAME . ' Casino Australia bonuses in one place. Welcome bonus up to A$1,650 + 50 free spins on your first deposit, crypto welcome, weekly reloads, daily cashback, live cashback, VIP programme and more.';
$current_page = 'bonuses';
$lang_prefix = '/au';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Casino Bonuses';
$hero_description = 'Every active promotion, welcome offer and loyalty reward currently available for Australian players. Please read the terms before claiming any offer.';
$hero_cta = 'Claim Your Bonus';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Welcome Casino Package -->
  <section class="content-section" id="welcome">
    <div class="container">
      <h2>Welcome Bonus for New Players</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>New players at <?php echo SITE_NAME; ?> can claim a first-deposit welcome bonus worth up to A$1,650 + 50 free spins. The 100% match bonus means whatever you deposit, we match it - up to A$1,650. The minimum qualifying deposit is A$17. No promo code needed - head to the cashier, select the offer, and make your deposit.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-bonuses-screen.png" alt="<?php echo SITE_NAME; ?> Casino promotions page showing welcome bonus and active promotions" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <!-- Casino Welcome - Deposit 1 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">1st Deposit: 100% up to A$1,650 + 50 Free Spins</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Make your first deposit of at least A$17 and receive a 100% match up to A$1,650. On top of that, 50 free spins are credited on a featured pokie. The wagering requirement is 35x on the bonus + deposit amount. Free spins winnings carry a separate 40x wagering requirement.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Deposit</div>
            <div class="bonus-detail__value">A$17</div>
          </div>
          <div>
            <div class="bonus-detail__label">Wagering</div>
            <div class="bonus-detail__value">35x (B+D)</div>
          </div>
          <div>
            <div class="bonus-detail__label">FS Wagering</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Free Spins</div>
            <div class="bonus-detail__value">50 FS</div>
          </div>
        </div>
      </div>

      <div style="text-align:center;margin:var(--space-6) 0">
        <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Claim A$1,650 Bonus</a>
      </div>
    </div>
  </section>

  <!-- Sports Welcome -->
  <section class="content-section content-section--alt" id="sports-welcome">
    <div class="container">
      <h2>Sports Welcome Bonus</h2>
      <p>Punters who want to start on the sportsbook can claim a three-deposit sports welcome package with a combined value of up to A$660. Each deposit qualifies for a separate match bonus.</p>

      <!-- Sports Welcome - Deposit 1 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Sports 1st Deposit: 100% up to A$330</div>
          <span class="bonus-card__tag">Sports</span>
        </div>
        <p>Make your first sportsbook deposit of at least A$35 and receive a 100% match up to A$330. Use the bonus funds to place bets on AFL, NRL, horse racing, and any other sport in the sportsbook.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Deposit</div>
            <div class="bonus-detail__value">A$35</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max Bonus</div>
            <div class="bonus-detail__value">A$330</div>
          </div>
          <div>
            <div class="bonus-detail__label">Type</div>
            <div class="bonus-detail__value">Sports</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome - Deposit 2 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Sports 2nd Deposit: 100% up to A$165</div>
          <span class="bonus-card__tag">Sports</span>
        </div>
        <p>Your second qualifying sportsbook deposit earns a 100% match up to A$165. The same minimum deposit and bonus terms apply as the first sports deposit bonus.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Deposit</div>
            <div class="bonus-detail__value">A$35</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max Bonus</div>
            <div class="bonus-detail__value">A$165</div>
          </div>
          <div>
            <div class="bonus-detail__label">Type</div>
            <div class="bonus-detail__value">Sports</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome - Deposit 3 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Sports 3rd Deposit: 100% up to A$165</div>
          <span class="bonus-card__tag">Sports</span>
        </div>
        <p>The third sportsbook deposit earns another 100% match up to A$165, bringing the total sports welcome package to A$660 across three deposits.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Deposit</div>
            <div class="bonus-detail__value">A$35</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max Bonus</div>
            <div class="bonus-detail__value">A$165</div>
          </div>
          <div>
            <div class="bonus-detail__label">Total Package</div>
            <div class="bonus-detail__value">A$660</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Crypto Welcome -->
  <section class="content-section" id="crypto-welcome">
    <div class="container">
      <h2>Crypto Welcome Bonus</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Crypto: 200% up to 3,000 USDT</div>
          <span class="bonus-card__tag">Crypto</span>
        </div>
        <p>If you prefer to deposit with cryptocurrency, there is a separate welcome offer just for you. Make a first crypto deposit of at least 100 USDT and receive a 200% match bonus up to 3,000 USDT. The wagering requirement is 40x on the bonus amount.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Deposit</div>
            <div class="bonus-detail__value">100 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Wagering</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max Bonus</div>
            <div class="bonus-detail__value">3,000 USDT</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Weekly Reload -->
  <section class="content-section content-section--alt" id="weekly-reload">
    <div class="container">
      <h2>Weekly Reload</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Weekly Reload: 70 Free Spins</div>
          <span class="bonus-card__tag">Mon-Thu</span>
        </div>
        <p>Every week from Monday to Thursday, make a deposit of at least A$17 and receive 70 free spins on a featured pokie chosen by the casino. Winnings from the free spins carry a 40x wagering requirement and must be used within 10 days.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Deposit</div>
            <div class="bonus-detail__value">A$17</div>
          </div>
          <div>
            <div class="bonus-detail__label">Free Spins</div>
            <div class="bonus-detail__value">70 FS</div>
          </div>
          <div>
            <div class="bonus-detail__label">Wagering</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Expiry</div>
            <div class="bonus-detail__value">10 days</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Weekend Reload -->
  <section class="content-section" id="weekend-reload">
    <div class="container">
      <h2>Weekend Reload Bonus</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Weekend: 50% up to A$700 + 70 Free Spins</div>
          <span class="bonus-card__tag">Weekend</span>
        </div>
        <p>Kick off the weekend with a 50% bonus match up to A$700. If your deposit is A$70 or more, you also receive 70 free spins. Deposits below A$70 still qualify for the 50% match, but the free spins are not included. Wagering requirement is 35x on the bonus amount.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Deposit</div>
            <div class="bonus-detail__value">A$17</div>
          </div>
          <div>
            <div class="bonus-detail__label">FS Min. Deposit</div>
            <div class="bonus-detail__value">A$70</div>
          </div>
          <div>
            <div class="bonus-detail__label">Wagering</div>
            <div class="bonus-detail__value">35x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Free Spins</div>
            <div class="bonus-detail__value">70 FS</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Crypto Reloads -->
  <section class="content-section content-section--alt" id="crypto-reloads">
    <div class="container">
      <h2>Crypto Reload Bonuses</h2>
      <p>Players who deposit with cryptocurrency have access to exclusive weekly and weekend reload offers with higher match percentages.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Crypto Weekly: 60% up to 1,000 USDT</div>
          <span class="bonus-card__tag">Crypto</span>
        </div>
        <p>Deposit at least 50 USDT during the week and receive a 60% match bonus up to 1,000 USDT. Wagering is 30x on the bonus. Maximum win from this bonus is capped at 5x the bonus amount.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Deposit</div>
            <div class="bonus-detail__value">50 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Wagering</div>
            <div class="bonus-detail__value">30x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max Win Cap</div>
            <div class="bonus-detail__value">5x bonus</div>
          </div>
        </div>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Crypto Weekend: 75% up to 750 USDT + 100 FS</div>
          <span class="bonus-card__tag">Crypto</span>
        </div>
        <p>On weekends, crypto deposits of 75 USDT or more qualify for a 75% match up to 750 USDT plus 100 free spins. Maximum win from this bonus is capped at 5x the bonus amount.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Deposit</div>
            <div class="bonus-detail__value">75 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Free Spins</div>
            <div class="bonus-detail__value">100 FS</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max Win Cap</div>
            <div class="bonus-detail__value">5x bonus</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Daily Cashback -->
  <section class="content-section" id="cashback">
    <div class="container">
      <h2>Daily Cashback</h2>
      <p>Players on VIP levels 2 through 5 receive daily cashback based on net losses from real money casino bets. The percentage increases with your VIP level, and the wagering requirement is just 1x - play it once and the cashback is yours.</p>

      <div class="data-table-wrap">
        <table class="data-table">
          <thead>
            <tr>
              <th>VIP Level</th>
              <th>Cashback %</th>
              <th>Min Cashback</th>
              <th>Max Cashback</th>
              <th>Wagering</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Level 2</td>
              <td>3%</td>
              <td>A$2</td>
              <td>A$140</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Level 3</td>
              <td>5%</td>
              <td>A$2</td>
              <td>A$280</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Level 4</td>
              <td>10%</td>
              <td>A$2</td>
              <td>A$420</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Level 5</td>
              <td>15%</td>
              <td>A$2</td>
              <td>A$560</td>
              <td>1x</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Live Cashback -->
  <section class="content-section content-section--alt" id="live-cashback">
    <div class="container">
      <h2>Live Casino Cashback</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Live Cashback: up to 25%</div>
          <span class="bonus-card__tag">Live Casino</span>
        </div>
        <p>All players can claim up to 25% cashback on net losses from live casino games, with a maximum payout of A$420. The wagering requirement is just 1x. This cashback must be requested manually via live chat or email every Monday between 06:00 and 23:59 UTC. Miss the window and the cashback for that week is forfeited.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Max Cashback</div>
            <div class="bonus-detail__value">A$420</div>
          </div>
          <div>
            <div class="bonus-detail__label">Wagering</div>
            <div class="bonus-detail__value">1x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Claim Day</div>
            <div class="bonus-detail__value">Monday</div>
          </div>
          <div>
            <div class="bonus-detail__label">Claim Window</div>
            <div class="bonus-detail__value">06:00-23:59 UTC</div>
          </div>
        </div>
      </div>

      <div class="highlight-box" style="margin-top: var(--space-4);">
        <h4>How to Claim Live Cashback</h4>
        <p>Contact our support team via live chat or email (support@westace.site) on Monday between 06:00 and 23:59 UTC to request your live casino cashback. The cashback is calculated on your net losses from the previous week and credited to your account after the request is processed.</p>
      </div>
    </div>
  </section>

  <!-- VIP -->
  <section class="content-section" id="vip">
    <div class="container">
      <h2>VIP Programme</h2>
      <p>The <?php echo SITE_NAME; ?> VIP Programme rewards loyal players through five levels. As you climb the tiers, you unlock better cashback rates, higher withdrawal limits, personalised offers, and a dedicated VIP manager. The programme is open to all registered players.</p>

      <h3>VIP Benefits</h3>
      <ul class="check-list">
        <li>Daily cashback increasing from 3% to 15% based on VIP level</li>
        <li>Higher deposit and withdrawal limits at upper tiers</li>
        <li>Personal VIP manager for top-level players</li>
        <li>Personalised bonus offers and promotions</li>
        <li>Priority support and faster withdrawal processing</li>
      </ul>

      <h3>Level Progression</h3>
      <p>The exact criteria for moving between VIP levels are not publicly disclosed. Progression is based on your overall activity at the casino. Contact our support team for more information about your current VIP status and what is needed to reach the next level.</p>

      <table class="quick-table">
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>VIP Levels</td><td>5 tiers</td></tr>
        <tr><td>Cashback Range</td><td>3% (Level 2) to 15% (Level 5)</td></tr>
        <tr><td>Cashback Wagering</td><td>1x</td></tr>
        <tr><td>Personal Manager</td><td>Available at higher tiers</td></tr>
        <tr><td>Progression</td><td>Based on overall activity (criteria not public)</td></tr>
      </table>

      <h3>VIP Withdrawal Limits</h3>
      <table class="quick-table">
        <tr><th>Period</th><th>Standard</th><th>VIP</th></tr>
        <tr><td>Daily</td><td>A$1,155</td><td>A$2,475</td></tr>
        <tr><td>Weekly</td><td>A$3,715</td><td>A$11,550</td></tr>
        <tr><td>Monthly</td><td>A$14,850</td><td>A$46,200</td></tr>
      </table>
    </div>
  </section>

  <!-- No-Deposit Info -->
  <section class="content-section content-section--alt" id="no-deposit">
    <div class="container container--narrow">
      <h2><?php echo SITE_NAME; ?> No-Deposit Bonus</h2>
      <p>At present, <?php echo SITE_NAME; ?> does not offer a no-deposit bonus for Australian players. The welcome bonus requires a minimum first deposit of A$17 to activate. Keep an eye on the Promotions section and check back regularly, as we frequently rotate our offers and may introduce no-deposit deals in the future.</p>
    </div>
  </section>

  <!-- Bonus FAQ -->
  <section class="content-section" id="bonus-faq">
    <div class="container container--narrow">
      <h2>Bonus FAQ</h2>

      <details class="faq-item">
        <summary>Do I need a promo code to claim a bonus?</summary>
        <div class="faq-answer">
          <p>No. All bonuses at <?php echo SITE_NAME; ?> can be claimed without a promo code. Head to the cashier, select the offer, and make the qualifying deposit. Some bonuses may need to be activated in the My Bonus section of your account.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What is the welcome bonus for Australian players?</summary>
        <div class="faq-answer">
          <p>The casino welcome bonus is 100% up to A$1,650 + 50 free spins on your first deposit. The minimum qualifying deposit is A$17. Wagering is 35x (bonus + deposit).</p>
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
        <summary>How does the daily cashback work?</summary>
        <div class="faq-answer">
          <p>Daily cashback is available for VIP levels 2 through 5. It is calculated on your net losses from real money casino bets. The percentage ranges from 3% to 15% depending on your VIP level. The wagering requirement is just 1x, which means you only need to play through the cashback amount once before withdrawing.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Do all games contribute equally to wagering?</summary>
        <div class="faq-answer">
          <p>No. Different game types contribute at different rates. Pokies typically contribute 100%, while table games and live casino titles contribute less. Check the bonus terms for the exact contribution table.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Is there a separate bonus for crypto deposits?</summary>
        <div class="faq-answer">
          <p>Yes. Crypto depositors can claim a 200% match up to 3,000 USDT as a welcome bonus, plus weekly and weekend crypto reload offers. These are separate from the standard AUD bonuses and carry their own wagering requirements.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Is there a sports betting bonus?</summary>
        <div class="faq-answer">
          <p>Yes. Australian punters can claim a three-deposit sports welcome package worth up to A$660 total - 100% up to A$330 on the first deposit, then 100% up to A$165 on each of the second and third sportsbook deposits.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
