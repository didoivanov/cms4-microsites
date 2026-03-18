<?php
/**
 * Homepage - WestAce
 */
$page_title = SITE_NAME . ' Casino - ' . SITE_TAGLINE;
$page_description = SITE_NAME . ' Casino offers 7,000+ games from 100+ providers, full sportsbook with live betting, live dealer tables, and a welcome bonus of 100% up to EUR 1,000 plus 50 free spins. Join now and play.';
$current_page = 'home';

require_once __DIR__ . '/../includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__badge"><?php echo __('hero_badge', 'Now open - 7,000+ games and live sports betting'); ?></div>
    <h1>
      <span class="brand-name"><?php echo SITE_NAME; ?></span><br>
      <span class="brand-type">Casino</span>
    </h1>
    <p class="hero__subtitle">Over 7,000 games from 100+ providers, live dealer tables, full sportsbook with live betting, and a welcome package that rewards your first three deposits.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Welcome Package</div>
      <div class="hero__bonus-value"><?php echo WELCOME_BONUS; ?></div>
      <div class="hero__bonus-extra">1st Deposit: 100% up to &euro;1,000 + 50 Free Spins &middot; Min deposit &euro;20</div>
    </div>
    <div class="hero__ctas">
      <a href="/play" class="btn btn--primary btn--lg" rel="nofollow"><?php echo __('cta_play', 'Play Now'); ?></a>
      <a href="/bonuses" class="btn btn--outline btn--lg">View Bonuses</a>
    </div>
  </div>
</section>

<!-- STATS BAR -->
<section class="stats-bar">
  <div class="container">
    <div class="stats-bar__grid">
<?php foreach ($STATS as $stat): ?>
      <div class="stat">
        <div class="stat__value"><?php echo $stat['value']; ?></div>
        <div class="stat__label"><?php echo $stat['label']; ?></div>
      </div>
<?php endforeach; ?>
    </div>
  </div>
</section>

<!-- MAIN CONTENT -->
<main>
  <!-- About -->
  <section class="content-section" id="about">
    <div class="container">
      <h2>Welcome to <?php echo SITE_NAME; ?> Casino</h2>
      <p><?php echo SITE_NAME; ?> is an online casino and sportsbook launched in 2026. The platform brings together more than 7,000 games from 100+ providers, covering slots, live dealer lobbies, table games, crash games, jackpot titles, and game shows. On top of the casino, we offer a full sportsbook with pre-match and live betting, virtual sports, and horse racing. New players can claim a three-deposit welcome package worth up to &euro;2,000 plus 150 free spins.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Launched</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Games</th><td>7,000+ (slots, table games, live casino, crash games, jackpots, game shows)</td></tr>
        <tr><th>Providers</th><td>100+ (Pragmatic Play, Playtech, Novomatic, Red Tiger, Yggdrasil, BGaming, Hacksaw Gaming, and more)</td></tr>
        <tr><th>Welcome Bonus</th><td><?php echo WELCOME_BONUS_TEXT; ?></td></tr>
        <tr><th>Min Deposit</th><td>&euro;10</td></tr>
        <tr><th>Currency</th><td>EUR</td></tr>
        <tr><th>Support</th><td>24/7 live chat + email</td></tr>
        <tr><th>Sportsbook</th><td>Yes (sports, live betting, virtual sports, horse racing)</td></tr>
        <tr><th>Mobile</th><td>Fully responsive, no app required</td></tr>
      </table>

      <h3>Why Players Choose <?php echo SITE_NAME; ?></h3>
      <ul class="check-list">
        <li>Over 7,000 games from 100+ licensed providers</li>
        <li>Three-deposit welcome package up to &euro;2,000 + 150 free spins</li>
        <li>Full sportsbook with live betting, virtual sports, and horse racing</li>
        <li>Live casino with roulette, blackjack, baccarat, dice, and poker</li>
        <li>Daily cashback up to 15% with just 1x wagering requirement</li>
        <li>5-level VIP programme with personal manager and higher limits</li>
        <li>Crypto-friendly with separate welcome bonus and reload offers</li>
        <li>24/7 support via live chat and email</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Casino Games</h4>
          <p>Thousands of slots, blackjack and roulette variations, poker, baccarat, crash games, and live dealer tables from studios like Pragmatic Play, Playtech, Novomatic, Red Tiger, and Yggdrasil.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127183;</div>
          <h4>Live Casino</h4>
          <p>Live dealer games including roulette, blackjack, baccarat, dice, and poker. Real croupiers streaming in HD from professional studios around the clock.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Sportsbook</h4>
          <p>Full sports betting platform with pre-match and live in-play markets. Virtual sports and horse racing round out the offering for sports fans.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Social Proof / Recent Winners -->
  <section class="content-section winners-section" id="winners">
    <div class="container">
      <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--space-4);margin-bottom:var(--space-2)">
        <h2 style="margin-bottom:0">Recent Winners</h2>
        <span class="live-dot">Live</span>
      </div>
      <div class="jackpot-label">Current Jackpot Pool</div>
      <div class="jackpot-amount" id="jackpotCounter">&euro;2,847,391</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Popular Games at <?php echo SITE_NAME; ?></h2>
      <p>Browse some of the most-played titles across the casino. From high-volatility slots to classic table games, live dealer rooms, and sports markets, there is something for every type of player.</p>

      <div class="game-tabs">
        <button class="game-tab active">All Games</button>
        <button class="game-tab">Slots</button>
        <button class="game-tab">Live Casino</button>
        <button class="game-tab">Table Games</button>
        <button class="game-tab">Crash Games</button>
        <button class="game-tab">Jackpots</button>
        <button class="game-tab">Sports</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Top Game Providers</h3>
          <p>Our game catalogue is powered by a wide mix of studios, from industry leaders to promising independent developers:</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">100+ total</span>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-games-screen.png" alt="<?php echo SITE_NAME; ?> Casino game lobby showing top slots from providers like Pragmatic Play, Playtech and Novomatic" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section" id="payments">
    <div class="container">
      <h2>Payment Methods</h2>
      <p><?php echo SITE_NAME; ?> supports a range of payment methods including credit cards, prepaid cards, e-wallets, and cryptocurrencies. Deposits start from &euro;10, and all deposits and withdrawals are fee-free.</p>

      <table class="quick-table">
        <tr><th>Deposit Methods</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Min Deposit</th><td>&euro;10</td></tr>
        <tr><th>Min Withdrawal</th><td>&euro;10</td></tr>
        <tr><th>Max Withdrawal</th><td>&euro;500/day, &euro;7,000/month</td></tr>
        <tr><th>Payout Time</th><td>24-72 hours</td></tr>
        <tr><th>Currency</th><td>EUR</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">For a detailed breakdown of withdrawal methods, limits, fees, and tips to speed up your payout, visit the <a href="/withdrawal">Withdrawal page</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section content-section--alt" id="mobile">
    <div class="container">
      <h2>Mobile Casino</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p><?php echo SITE_NAME; ?> does not have a dedicated mobile app, but the website is fully compatible with all smartphones and tablets. The browser-based platform delivers the same features, games, and account management tools you would find on the desktop version. No downloads required -- just open your mobile browser, log in, and play.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/westace-mobile.png" alt="<?php echo SITE_NAME; ?> Casino mobile lobby with welcome bonus and game navigation" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>
      <ul class="check-list">
        <li>Full game library accessible on mobile browsers</li>
        <li>Live dealer tables and sportsbook on the go</li>
        <li>Deposit and withdraw directly from your phone</li>
        <li>Live chat support available on mobile</li>
        <li>No app download needed -- works on iOS and Android</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section" id="faq">
    <div class="container container--narrow">
      <h2>Frequently Asked Questions</h2>

      <details class="faq-item">
        <summary>What kind of games can I play at <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> works with 100+ providers including Pragmatic Play, Playtech, Novomatic, Red Tiger, Yggdrasil, BGaming, Hacksaw Gaming, and Quickspin. You can play video slots, jackpot slots, blackjack, roulette, baccarat, poker, crash games, game shows, and live dealer titles. There is also a full sportsbook with live betting, virtual sports, and horse racing.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What is the welcome bonus at <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>New players receive a three-deposit welcome package: 100% up to &euro;1,000 + 50 free spins on the first deposit, 100% up to &euro;500 + 50 free spins on the second, and 100% up to &euro;500 + 50 free spins on the third. Total value: up to &euro;2,000 + 150 free spins. Minimum deposit is &euro;20 per tier. Wagering is 35x (bonus + deposit).</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>How quickly are withdrawals processed?</summary>
        <div class="faq-answer">
          <p>Withdrawals are processed within 24 to 72 hours. The minimum withdrawal is &euro;10 across all payment methods. Daily withdrawal limit is &euro;500, and the monthly limit is &euro;7,000. No fees are charged on withdrawals.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Does <?php echo SITE_NAME; ?> have a VIP programme?</summary>
        <div class="faq-answer">
          <p>Yes. <?php echo SITE_NAME; ?> runs a 5-level VIP programme. Benefits include higher cashback percentages (up to 15%), increased withdrawal limits, priority processing, personalised offers, and a personal VIP manager at the top tiers. The criteria for moving between levels are not publicly disclosed.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Can I play on my phone?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> does not have a mobile app, but the website is fully mobile-friendly. You can access all games, the sportsbook, and account features through any modern smartphone or tablet browser.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>How do I reach customer support?</summary>
        <div class="faq-answer">
          <p>You can reach the support team via 24/7 live chat directly on the website, or by email at support@westace.com. For more details, visit the <a href="/support">Support page</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
