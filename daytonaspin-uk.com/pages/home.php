<?php
/**
 * Homepage - DaytonaSpin UK
 */
$page_title = SITE_NAME . ' Casino - ' . SITE_TAGLINE;
$page_description = SITE_NAME . ' Casino offers 8,000+ games from 136+ providers, live dealer tables, and a welcome bonus of 225% up to GBP 2,000 plus 100 free spins across three deposits. Join now and play.';
$current_page = 'home';

require_once __DIR__ . '/../includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__badge">Now open - accepting UK players</div>
    <h1>
      <span class="brand-name"><?php echo SITE_NAME; ?></span><br>
      <span class="brand-type">Casino</span>
    </h1>
    <p class="hero__subtitle">Over 8,000 games from 136+ providers, live dealer tables with real croupiers, and a multi-tier welcome package that rewards your first three deposits.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Welcome Package</div>
      <div class="hero__bonus-value"><?php echo WELCOME_BONUS; ?></div>
      <div class="hero__bonus-extra">1st Deposit: 100% up to &pound;700 + 50 Free Spins &middot; Min deposit &pound;45</div>
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
      <p><?php echo SITE_NAME; ?> is an online casino launched in 2023, owned and operated by Win Top Ltd under a licence from the Anjouan Gaming Authority. The platform brings together more than 8,000 games from 136+ providers, covering slots, live dealer lobbies, table games, crash games, and jackpot titles. New players can claim a three-deposit welcome package worth up to &pound;2,000 plus 100 free spins.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Launched</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Licence</th><td>Anjouan Gaming Authority</td></tr>
        <tr><th>Owner</th><td>Win Top Ltd</td></tr>
        <tr><th>Games</th><td>8,000+ (slots, table games, live casino, crash games, jackpots)</td></tr>
        <tr><th>Providers</th><td>136+ (Pragmatic Play, Play'n GO, Yggdrasil, BGaming, Hacksaw Gaming, Quickspin, and more)</td></tr>
        <tr><th>Welcome Bonus</th><td><?php echo WELCOME_BONUS_TEXT; ?></td></tr>
        <tr><th>Min Deposit</th><td>&pound;10 (&pound;20 for crypto)</td></tr>
        <tr><th>Currency</th><td>GBP</td></tr>
        <tr><th>Support</th><td>24/7 live chat, email</td></tr>
        <tr><th>Mobile</th><td>Fully responsive, no app required</td></tr>
      </table>

      <h3>Why Players Choose <?php echo SITE_NAME; ?></h3>
      <ul class="check-list">
        <li>Over 8,000 games from 136+ licensed providers</li>
        <li>Three-deposit welcome package up to &pound;2,000 + 100 free spins</li>
        <li>340+ live casino tables with real dealers</li>
        <li>Weekly cashback up to 25% and rakeback on live casino</li>
        <li>Tournaments with prize pools reaching &pound;870,000</li>
        <li>4-tier VIP programme with personal manager and higher limits</li>
        <li>Multiple payment methods including Visa, Apple Pay, crypto, and more</li>
        <li>24/7 support via live chat and email</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Casino Games</h4>
          <p>Thousands of slots, blackjack and roulette variations, poker, baccarat, crash games, and live dealer tables from studios like Pragmatic Play, Play'n GO, Yggdrasil, and Hacksaw Gaming.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127183;</div>
          <h4>Live Casino</h4>
          <p>Over 340 live dealer games including roulette, blackjack, baccarat, poker, and game shows. Real croupiers streaming in HD from professional studios around the clock.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127873;</div>
          <h4>Promotions</h4>
          <p>Three-deposit welcome package, weekly cashback across five grades, live casino rakeback every Tuesday, high roller bonus, and a 4-tier VIP programme with exclusive rewards.</p>
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
      <div class="jackpot-amount" id="jackpotCounter">&pound;1,847,391</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Popular Games at <?php echo SITE_NAME; ?></h2>
      <p>Browse some of the most-played titles in the casino. From high-volatility slots to classic table games and live dealer rooms, there is something for every type of player.</p>

      <div class="game-tabs">
        <button class="game-tab active">All Games</button>
        <button class="game-tab">Slots</button>
        <button class="game-tab">Live Casino</button>
        <button class="game-tab">Table Games</button>
        <button class="game-tab">Crash Games</button>
        <button class="game-tab">Jackpots</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Top Game Providers</h3>
          <p>The catalogue is powered by a wide mix of studios, from industry leaders to promising independent developers:</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">136+ total</span>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/daytonaspin-games-screen.png" alt="<?php echo SITE_NAME; ?> Casino game lobby showing top slots from providers like Pragmatic Play, Play'n GO and Hacksaw Gaming" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section" id="payments">
    <div class="container">
      <h2>Payment Methods</h2>
      <p><?php echo SITE_NAME; ?> supports a range of payment methods including credit cards, e-wallets, mobile payments, and cryptocurrencies. Deposits start from &pound;10, and all withdrawals are processed within 24 hours.</p>

      <table class="quick-table">
        <tr><th>Deposit Methods</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Min Deposit</th><td>&pound;10 (&pound;20 for crypto)</td></tr>
        <tr><th>Min Withdrawal</th><td>&pound;20</td></tr>
        <tr><th>Payout Time</th><td>Up to 24 hours</td></tr>
        <tr><th>Currency</th><td>GBP</td></tr>
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
          <img src="/assets/img/daytonaspin-mobile.png" alt="<?php echo SITE_NAME; ?> Casino mobile lobby with welcome bonus and game navigation" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>
      <ul class="check-list">
        <li>Full game library accessible on mobile browsers</li>
        <li>Live dealer tables optimised for smaller screens</li>
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
          <p><?php echo SITE_NAME; ?> works with 136+ providers including Pragmatic Play, Play'n GO, Yggdrasil, BGaming, Hacksaw Gaming, and Quickspin. You can play video slots, jackpot slots, blackjack, roulette, baccarat, poker, crash games, scratch cards, and 340+ live dealer titles.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What is the welcome bonus at <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>New players receive a three-deposit welcome package: 100% up to &pound;700 + 50 free spins on the first deposit, 55% up to &pound;700 + 50 free spins on the second, and 100% up to &pound;700 on the third. Total value: up to &pound;2,000 + 100 free spins. Minimum first deposit is &pound;45. Wagering is 35x.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>How quickly are withdrawals processed?</summary>
        <div class="faq-answer">
          <p>All withdrawals are processed within 24 hours. The minimum withdrawal is &pound;20 across all payment methods. Some delays may occur due to public holidays or weekends.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Does <?php echo SITE_NAME; ?> have a VIP programme?</summary>
        <div class="faq-answer">
          <p>Yes. <?php echo SITE_NAME; ?> runs a 4-tier VIP programme (Bronze, Silver, Gold, Platinum). Benefits include higher cashback and rakeback percentages, increased withdrawal limits, priority processing, a personal VIP manager, and level-up rewards. Every &pound;7 wagered earns 1 point, and every &pound;17 deposited also earns 1 point.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Can I play on my phone?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> does not have a mobile app, but the website is fully mobile-friendly. You can access all games and account features through any modern smartphone or tablet browser.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>How do I reach customer support?</summary>
        <div class="faq-answer">
          <p>You can reach the support team via 24/7 live chat directly on the website, or by email at support@daytonaspin.com. For more details, visit the <a href="/support">Support page</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
