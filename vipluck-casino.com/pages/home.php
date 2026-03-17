<?php
/**
 * Homepage
 */
$page_title = SITE_NAME . ' Casino - ' . SITE_TAGLINE;
$page_description = SITE_NAME . ' Casino offers 8,000+ games from 103+ providers, live dealer tables, sportsbook with 30+ sports, and a welcome bonus up to EUR 2,000 plus 300 free spins across three deposits. Join now and play.';
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
    <p class="hero__subtitle">Over 8,000 games from 103+ providers, a full sportsbook covering 30+ sports, live dealer tables, and a multi-tier welcome package that rewards your first three deposits.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Welcome Package</div>
      <div class="hero__bonus-value"><?php echo WELCOME_BONUS; ?></div>
      <div class="hero__bonus-extra">Sports Bonus: 100% up to &euro;500 &middot; Min deposit &euro;20</div>
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
      <p><?php echo SITE_NAME; ?> is an online casino and sportsbook launched in 2025 under Curacao license OGL/2024/129/0131, operated by 130 group N.V. The platform brings together more than 8,000 games from 103+ providers, covering slots, live dealer lobbies, table games, instant win titles, and a full sportsbook with pre-match and live betting on 30+ sports. New players receive a three-deposit welcome package worth up to EUR 2,000 plus 300 free spins on the casino side, or up to EUR 500 across three sports deposits.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Launched</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>License</th><td>Curacao OGL/2024/129/0131</td></tr>
        <tr><th>Games</th><td>8,000+ (slots, table games, live casino, instant games)</td></tr>
        <tr><th>Providers</th><td>103+ (Play'n GO, Playtech, Pragmatic Play, BGaming, Hacksaw Gaming, and more)</td></tr>
        <tr><th>Sports</th><td>30+ sports, esports, virtual sports</td></tr>
        <tr><th>Welcome Bonus</th><td><?php echo WELCOME_BONUS_TEXT; ?></td></tr>
        <tr><th>Min Deposit</th><td>EUR 10 (EUR 20 for most bonuses)</td></tr>
        <tr><th>Currencies</th><td>EUR, CHF, USD, CAD, AUD, NZD, PLN, BRL, NOK, ZAR, CZK, HUF, CLP</td></tr>
        <tr><th>Support</th><td>24/7 live chat, email, and Telegram</td></tr>
        <tr><th>Mobile</th><td>Fully responsive, no app required</td></tr>
      </table>

      <h3>Why Players Choose <?php echo SITE_NAME; ?></h3>
      <ul class="check-list">
        <li>Over 8,000 games from 103+ licensed providers</li>
        <li>Three-deposit welcome package up to EUR 2,000 + 300 free spins</li>
        <li>Full sportsbook with pre-match and live betting on 30+ sports</li>
        <li>Sports welcome bonus up to EUR 500 across three deposits</li>
        <li>Weekly reload bonuses, cashback programs, and tournaments</li>
        <li>5-tier VIP program with personal account manager and higher limits</li>
        <li>20+ payment methods including Visa, Mastercard, Skrill, crypto, and e-wallets</li>
        <li>24/7 support via live chat, email, and Telegram</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Casino Games</h4>
          <p>Thousands of slots, blackjack and roulette variations, poker, baccarat, game shows, crash games, and live dealer tables from studios like Play'n GO, Pragmatic Play, and Hacksaw Gaming.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Sportsbook</h4>
          <p>Pre-match and in-play betting on major leagues like UEFA Champions League, NBA, NHL, and Grand Slam tournaments. Esports covering Dota 2, CS2, and League of Legends. Virtual sports available around the clock.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127873;</div>
          <h4>Promotions</h4>
          <p>Three-deposit welcome packages for casino and sports, weekly reload bonuses, 15% sports cashback, tournaments, and a 5-tier VIP program with exclusive rewards.</p>
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
      <p>Browse some of the most-played titles in the casino. From high-volatility slots to classic table games and live dealer rooms, there is something for every type of player.</p>

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

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Top Game Providers</h3>
          <p>The catalog is powered by a wide mix of studios, from industry leaders to promising independent developers:</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">103+ total</span>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-games-screen.png" alt="<?php echo SITE_NAME; ?> Casino game lobby showing top slots from providers like Novomatic, Play'n GO and Hacksaw Gaming" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>
    </div>
  </section>

  <!-- Sportsbook -->
  <section class="content-section" id="sports">
    <div class="container">
      <h2>Sportsbook</h2>
      <div class="two-col" style="align-items:flex-start;gap:var(--space-8)">
        <div>
          <p>The sportsbook at <?php echo SITE_NAME; ?> covers pre-match and live betting on events from both major and smaller competitions. Football fans can wager on everything from the UEFA Champions League down to lower-division leagues, while basketball, tennis, ice hockey, and a dozen other sports fill out the schedule.</p>
          <p>Virtual sports like football, basketball, and greyhound races run around the clock. Esports betting covers Dota 2, Counter-Strike 2, League of Legends, Call of Duty, and other competitive titles.</p>

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
          <div style="text-align:center;margin-bottom:var(--space-6)">
            <img src="/assets/img/vipluck-sports.png" alt="<?php echo SITE_NAME; ?> sportsbook showing live Champions League odds and sports betting interface" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
          </div>
          <div class="highlight-box">
            <h4>Sports Welcome Bonus</h4>
            <p>New players can claim up to EUR 500 in sports bonuses across their first three deposits: 100% up to EUR 200 on the first, 100% up to EUR 150 on the second, and 100% up to EUR 150 on the third. Minimum deposit is EUR 20. Wagering requirement is 6x at minimum odds of 1.60.</p>
          </div>
          <table class="quick-table" style="margin-top: var(--space-6);">
            <tr><th>Bet Types</th><td>Pre-match, in-play, outrights, accumulators</td></tr>
            <tr><th>Sports</th><td>30+ including esports and virtuals</td></tr>
            <tr><th>Features</th><td>Accumulator boost, early payout, enhanced odds</td></tr>
            <tr><th>Cashback</th><td>15% weekly up to EUR 500</td></tr>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section content-section--alt" id="payments">
    <div class="container">
      <h2>Payment Methods</h2>
      <p><?php echo SITE_NAME; ?> supports over 20 payment methods including credit cards, e-wallets, prepaid cards, and 10 cryptocurrencies. Availability depends on your country, and deposits start from EUR 10.</p>

      <table class="quick-table">
        <tr><th>Deposit Methods</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Min Deposit</th><td>EUR 10 (EUR 20 for most bonuses)</td></tr>
        <tr><th>Min Withdrawal</th><td>EUR 20</td></tr>
        <tr><th>Max Withdrawal (Daily)</th><td>EUR 700 (VIP: EUR 1,500)</td></tr>
        <tr><th>Max Withdrawal (Weekly)</th><td>EUR 2,250 (VIP: EUR 7,000)</td></tr>
        <tr><th>Max Withdrawal (Monthly)</th><td>EUR 9,000 (VIP: EUR 28,000)</td></tr>
        <tr><th>Processing Time</th><td>Up to 72 hours, no weekend processing (up to 7 business days total)</td></tr>
        <tr><th>Currencies</th><td>EUR, CHF, USD, CAD, AUD, NZD, PLN, BRL, NOK, ZAR, CZK, HUF, CLP</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">For a detailed breakdown of withdrawal methods, limits, fees, and tips to speed up your payout, visit the <a href="/withdrawal">Withdrawal page</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section" id="mobile">
    <div class="container">
      <h2>Mobile Casino</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p><?php echo SITE_NAME; ?> does not have a dedicated mobile app, but the website is fully compatible with all smartphones and tablets. The browser-based platform delivers the same features, games, and account management tools you would find on the desktop version. No downloads required -- just open your mobile browser, log in, and play.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/vipluck-lobby.png" alt="<?php echo SITE_NAME; ?> Casino mobile lobby with welcome bonus and game navigation" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>
      <ul class="check-list">
        <li>Full game library accessible on mobile browsers</li>
        <li>Sports betting with live in-play markets</li>
        <li>Deposit and withdraw directly from your phone</li>
        <li>Live chat and Telegram support available on mobile</li>
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
          <p><?php echo SITE_NAME; ?> works with 103+ providers including Play'n GO, Playtech, Pragmatic Play, BGaming, and Hacksaw Gaming. You can play video slots, jackpot slots, Megaways titles, blackjack, roulette, baccarat, poker, game shows, crash games, and more. The sportsbook covers 30+ sports with pre-match and live betting options.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What is the welcome bonus at <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>New casino players receive a three-deposit welcome package: 100% up to EUR 500 + 100 free spins on the first deposit, 100% up to EUR 750 + 75 free spins on the second, and 100% up to EUR 750 + 125 free spins on the third. Total value: up to EUR 2,000 + 300 free spins. Sports bettors can claim up to EUR 500 across three deposits. Minimum deposit is EUR 20.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What is the maximum withdrawal at <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>Standard players can withdraw up to EUR 700 per day, EUR 2,250 per week, and EUR 9,000 per month. VIP members have higher limits: EUR 1,500 daily, EUR 7,000 weekly, and EUR 28,000 monthly. Minimum withdrawal is EUR 20. Payouts are processed within 72 hours on business days.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Does <?php echo SITE_NAME; ?> have a VIP program?</summary>
        <div class="faq-answer">
          <p>Yes. <?php echo SITE_NAME; ?> runs a 5-tier VIP program with invitation-only progression. Benefits include a personal account manager, higher withdrawal limits, exclusive bonuses, and priority payout processing. The higher your tier, the better the rewards and cashback percentages.</p>
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
          <p>You can reach the support team via live chat, email at support@vipluck.com, or Telegram around the clock. Live chat is available directly on the website for fast responses. For more details, visit the <a href="/support">Support page</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
