<?php
/**
 * Homepage
 */
$page_title = SITE_NAME . ' Casino - ' . SITE_TAGLINE;
$page_description = SITE_NAME . ' Casino offers 10,000+ casino games, live dealers, sportsbook with 30+ sports, and a welcome bonus up to EUR 500 plus 200 free spins. Join now and play.';
$current_page = 'home';

require_once __DIR__ . '/../includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__badge">Now open - accepting players worldwide</div>
    <h1>
      <span class="brand-name"><?php echo SITE_NAME; ?></span><br>
      <span class="brand-type">Casino</span>
    </h1>
    <p class="hero__subtitle">Over 10,000 games from 90+ providers, a full sportsbook covering 30+ sports, live dealer tables, and rewards that actually pay off.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Welcome Package</div>
      <div class="hero__bonus-value"><?php echo WELCOME_BONUS; ?></div>
      <div class="hero__bonus-extra">Sports Bonus: 100% up to &euro;100 &middot; Min deposit &euro;20</div>
    </div>
    <div class="hero__ctas">
      <a href="<?php echo CTA_URL; ?>" class="btn btn--primary btn--lg" target="_blank" rel="noopener"><?php echo CTA_LABEL; ?></a>
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
      <p><?php echo SITE_NAME; ?> is a fresh online gambling platform where players can explore thousands of betting options all in one place. With a catalog of more than 10,000 products covering slots, mini-games, virtual card and table games, and a selection of live dealer lobbies, there is never a dull moment. On the sportsbook side, favorable odds across more than 30 sports keep things interesting for football, basketball, tennis, and esports fans alike.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Launched</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Games</th><td>10,000+ (slots, table games, live casino, instant games)</td></tr>
        <tr><th>Providers</th><td>90+ (Pragmatic Play, Evolution, Microgaming, NetEnt, Playtech, and more)</td></tr>
        <tr><th>Sports</th><td>30+ sports, esports, virtual sports</td></tr>
        <tr><th>Welcome Bonus</th><td><?php echo WELCOME_BONUS_TEXT; ?></td></tr>
        <tr><th>Min Deposit</th><td>EUR 10 (EUR 20 for most bonuses)</td></tr>
        <tr><th>Currencies</th><td>EUR, USD, CAD, AUD, CHF, HUF, NOK, PLN, NZD, CZK, BRL, CLP, PEN</td></tr>
        <tr><th>Support</th><td>24/7 live chat and email</td></tr>
        <tr><th>Mobile</th><td>Fully responsive, no app required</td></tr>
      </table>

      <h3>Why Players Choose <?php echo SITE_NAME; ?></h3>
      <ul class="check-list">
        <li>More than 10,000 games from 90+ trusted providers</li>
        <li>Full sportsbook with pre-match and live betting on 30+ sports</li>
        <li>Multiple welcome bonus options for casino and sports</li>
        <li>Weekly reload bonuses, cashback deals, and a loyalty shop</li>
        <li>VIP program with personal account manager and higher withdrawal limits</li>
        <li>Payments via Visa, Mastercard, Skrill, crypto, and more</li>
        <li>24/7 customer support through live chat and email</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Casino Games</h4>
          <p>Thousands of slots, blackjack and roulette variations, poker, baccarat, game shows, instant games, and live dealer tables from top-tier studios.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Sportsbook</h4>
          <p>Pre-match and in-play betting on major leagues like UEFA Champions League, NBA, NHL, and Grand Slam tournaments. Virtual sports and esports also available.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127873;</div>
          <h4>Promotions</h4>
          <p>Welcome bonuses, weekly reload deals, multiple cashback programs, a loyalty shop, challenges, and special offers throughout the week.</p>
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
      <p>Browse some of the most-played titles in the casino. From high-volatility slots to classic table games and live dealer experiences, there is something for every type of player.</p>

      <div class="game-tabs">
        <button class="game-tab active">All Games</button>
        <button class="game-tab">Slots</button>
        <button class="game-tab">Live Casino</button>
        <button class="game-tab">Table Games</button>
        <button class="game-tab">Game Shows</button>
        <button class="game-tab">Crash Games</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <h3>Top Game Providers</h3>
      <p>The catalog is powered by a wide mix of studios, from industry leaders to promising independent developers:</p>
      <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
        <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
        <span class="provider-tag">90+ more</span>
      </div>
    </div>
  </section>

  <!-- Sportsbook -->
  <section class="content-section" id="sports">
    <div class="container">
      <h2>Sportsbook</h2>
      <div class="two-col">
        <div>
          <p>The sportsbook section at <?php echo SITE_NAME; ?> covers pre-match and live betting on events from both major and smaller competitions. Football fans can wager on everything from the UEFA Champions League down to lower-division leagues, while basketball, tennis, hockey, and a dozen other sports fill out the schedule.</p>
          <p>Virtual sports like football, basketball, and dog races are available around the clock. Esports betting covers Dota 2, Counter-Strike, League of Legends, Call of Duty, and other popular titles.</p>

          <h3>Available Sports</h3>
          <ul class="check-list">
            <li>Football (UEFA Champions League, Premier League, Bundesliga, Serie A, La Liga)</li>
            <li>Basketball (NBA, EuroLeague, national leagues)</li>
            <li>Tennis (Grand Slam, ATP, WTA)</li>
            <li>Ice Hockey (NHL, KHL, SHL)</li>
            <li>Esports (Dota 2, CS2, League of Legends, Call of Duty)</li>
            <li>Virtual sports, horse racing, and 25+ more</li>
          </ul>
        </div>
        <div>
          <div class="highlight-box">
            <h4>Sports Welcome Bonus</h4>
            <p>New players can claim a 100% match on their first sports deposit, worth up to EUR 100. Finnish, German, Norwegian, Swiss, and Austrian players qualify for up to EUR 200. The bonus requires a minimum deposit of EUR 20 and a 5x or 6x wagering requirement depending on your country.</p>
          </div>
          <table class="quick-table" style="margin-top: var(--space-6);">
            <tr><th>Bet Types</th><td>Pre-match, in-play, outrights, accumulators</td></tr>
            <tr><th>Sports</th><td>30+ including esports and virtuals</td></tr>
            <tr><th>Features</th><td>Accumulator boost, early payout, enhanced odds</td></tr>
            <tr><th>Cashback</th><td>10% weekly up to EUR 500</td></tr>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section content-section--alt" id="payments">
    <div class="container">
      <h2>Payment Methods</h2>
      <p><?php echo SITE_NAME; ?> supports several popular payment options. Availability depends on your country, and deposits start from just EUR 10.</p>

      <table class="quick-table">
        <tr><th>Deposit Methods</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Min Deposit</th><td>EUR 10 (EUR 20 for most bonuses)</td></tr>
        <tr><th>Min Withdrawal</th><td>EUR 10</td></tr>
        <tr><th>Max Withdrawal (Daily)</th><td>EUR 500 (VIP: EUR 1,500)</td></tr>
        <tr><th>Max Withdrawal (Monthly)</th><td>EUR 7,000 (VIP: EUR 20,000)</td></tr>
        <tr><th>Processing Time</th><td>Up to 72 hours (e-wallets and crypto are fastest)</td></tr>
        <tr><th>Currencies</th><td>EUR, USD, CAD, AUD, CHF, HUF, NOK, PLN, NZD, CZK, BRL, CLP, PEN</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">For a detailed breakdown of withdrawal methods, limits, fees, and tips to speed up your payout, visit the <a href="/withdrawal">Withdrawal page</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section" id="mobile">
    <div class="container">
      <h2>Mobile Casino</h2>
      <p><?php echo SITE_NAME; ?> does not have a dedicated mobile app, but the website is fully compatible with all smartphones and tablets. The browser-based platform delivers the same features, games, and account management tools you would find on the desktop version. No downloads required -- just open your mobile browser, log in, and play.</p>
      <ul class="check-list">
        <li>Full game library accessible on mobile browsers</li>
        <li>Sports betting with live in-play markets</li>
        <li>Deposit and withdraw directly from your phone</li>
        <li>Live chat support available on mobile</li>
        <li>No app download needed -- works on iOS and Android</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section content-section--alt" id="faq">
    <div class="container container--narrow">
      <h2>Frequently Asked Questions</h2>

      <details class="faq-item">
        <summary>What kind of games can I play at <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> works with over 90 providers including Pragmatic Play, Evolution, Microgaming, and Red Tiger. You can play video slots, jackpot slots, Megaways titles, blackjack variations, roulette, baccarat, poker, game shows, crash games, and more. The sportsbook covers 30+ sports with pre-match and live betting options.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What is the welcome bonus at <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>New casino players can claim a 100% welcome bonus of up to EUR 500 plus 200 free spins on their first deposit. Sportsbook players are eligible for a 100% match up to EUR 100 (or EUR 200 depending on your country). Minimum deposit is EUR 20.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What is the maximum withdrawal at <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>Standard players can withdraw up to EUR 500 per day and EUR 7,000 per month. VIP members have access to higher limits -- up to EUR 1,500 daily and EUR 20,000 monthly. Minimum withdrawal is EUR 10.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Does <?php echo SITE_NAME; ?> have a VIP program?</summary>
        <div class="faq-answer">
          <p>Yes. <?php echo SITE_NAME; ?> runs a loyalty-based VIP program where your rank increases as you play. Benefits include a personal account manager, higher withdrawal limits, exclusive promotions, and weekly cashback offers that scale with your level.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Can I play on my phone?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> does not have a mobile app, but the website is fully mobile-friendly. You can access all games, sports betting, and account features through any modern smartphone or tablet browser.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>How do I reach customer support?</summary>
        <div class="faq-answer">
          <p>You can reach the support team via live chat or email around the clock. Live chat is available directly on the website for fast responses. For more details, visit the <a href="/support">Support page</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
