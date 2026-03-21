<?php
/**
 * Homepage - WestAce (AU / Australian English)
 */
$page_title = 'WestAce Casino Australia - 7,000+ Games, Sportsbook & Welcome Bonus up to A$1,650';
$page_description = SITE_NAME . ' Casino Australia offers 7,000+ games from 100+ providers, full sportsbook with live betting, live dealer tables, and a welcome bonus of 100% up to A$1,650 plus 50 free spins. Join now and play.';
$current_page = 'home';
$lang_prefix = '/au';

// Override stats for AUD
$STATS = [
    ['value' => '7,000+', 'label' => 'Games'],
    ['value' => '100+',   'label' => 'Providers'],
    ['value' => 'A$1,650', 'label' => 'Welcome Bonus'],
    ['value' => '24/7',   'label' => 'Live Support'],
];

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__badge"><?php echo __('hero_badge', 'Now open - 7,000+ games and live sports betting'); ?></div>
    <h1>
      <span class="brand-name"><?php echo SITE_NAME; ?></span><br>
      <span class="brand-type">Casino</span>
    </h1>
    <p class="hero__subtitle">Over 7,000 games from 100+ providers, live dealer tables, full sportsbook with live betting, and a welcome bonus that gives Aussie punters a real head start.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Welcome Bonus</div>
      <div class="hero__bonus-value">100% up to A$1,650 + 50 Free Spins</div>
      <div class="hero__bonus-extra">1st Deposit: 100% up to A$1,650 + 50 Free Spins &middot; Min deposit A$17</div>
    </div>
    <div class="hero__ctas">
      <a href="/play" class="btn btn--primary btn--lg" rel="nofollow"><?php echo __('cta_play', 'Play Now'); ?></a>
      <a href="<?php echo $lang_prefix; ?>/bonuses" class="btn btn--outline btn--lg">View Bonuses</a>
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
      <h2>Welcome to <?php echo SITE_NAME; ?> Casino Australia</h2>
      <p><?php echo SITE_NAME; ?> is an online casino and sportsbook built for Australian punters, launched in 2026. The platform brings together more than 7,000 games from 100+ providers, covering pokies, live dealer lobbies, table games, crash games, jackpot titles, and game shows. Alongside the casino, we run a full sportsbook covering AFL, NRL, A-League, Big Bash League, horse racing at Flemington and Randwick, live in-play markets, and virtual sports. New Australian players can claim a welcome bonus of 100% up to A$1,650 plus 50 free spins on their first deposit, all in AUD with no currency conversion.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Launched</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Games</th><td>7,000+ (pokies, table games, live casino, crash games, jackpots, game shows)</td></tr>
        <tr><th>Providers</th><td>100+ (Pragmatic Play, Playtech, Novomatic, Red Tiger, Yggdrasil, BGaming, Hacksaw Gaming, and more)</td></tr>
        <tr><th>Welcome Bonus</th><td>100% up to A$1,650 + 50 Free Spins (1st deposit)</td></tr>
        <tr><th>Min Deposit</th><td>A$17</td></tr>
        <tr><th>Currency</th><td>AUD</td></tr>
        <tr><th>Support</th><td>24/7 live chat + email</td></tr>
        <tr><th>Sportsbook</th><td>Yes (AFL, NRL, A-League, horse racing, live betting, virtual sports)</td></tr>
        <tr><th>Mobile</th><td>Fully responsive, no app required</td></tr>
      </table>

      <h3>Why Australian Punters Choose <?php echo SITE_NAME; ?></h3>
      <ul class="check-list">
        <li>Over 7,000 games from 100+ licensed providers, all playable in AUD</li>
        <li>Welcome bonus of 100% up to A$1,650 + 50 free spins on your first deposit</li>
        <li>Sportsbook with AFL, NRL, A-League, Big Bash League, horse racing, and live in-play markets</li>
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
          <p>Thousands of pokies, blackjack and roulette variations, poker, baccarat, crash games, and live dealer tables from studios like Pragmatic Play, Playtech, Novomatic, Red Tiger, and Yggdrasil.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127183;</div>
          <h4>Live Casino</h4>
          <p>Live dealer games including roulette, blackjack, baccarat, dice, and poker. Real croupiers streaming in HD from professional studios around the clock.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Sportsbook</h4>
          <p>Bet on AFL, NRL, A-League, Big Bash League, and dozens of international leagues. Horse racing covers Flemington, Randwick, and Caulfield. Virtual sports and live in-play markets round out the offering.</p>
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
      <div class="jackpot-amount" id="jackpotCounter">A$3,993,465</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Popular Games at <?php echo SITE_NAME; ?> Australia</h2>
      <p>Browse some of the most-played titles among Australian punters. From high-volatility pokies to classic table games, live dealer rooms, and sports markets covering Australian football and horse racing, there is something for every type of player.</p>

      <div class="game-tabs">
        <button class="game-tab active">All Games</button>
        <button class="game-tab">Pokies</button>
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
          <img src="/assets/img/westace-games-screen.png" alt="<?php echo SITE_NAME; ?> Casino game lobby showing top pokies from providers like Pragmatic Play, Playtech and Novomatic" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section" id="payments">
    <div class="container">
      <h2>Payment Methods for Australian Players</h2>
      <p><?php echo SITE_NAME; ?> supports a range of payment methods popular with Australian players, including bank cards, e-wallets, and cryptocurrencies. All transactions are in AUD with no conversion fees. Deposits start from A$17, and all deposits and withdrawals are fee-free on our end.</p>

      <table class="quick-table">
        <tr><th>Deposit Methods</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Min Deposit</th><td>A$17</td></tr>
        <tr><th>Min Withdrawal</th><td>A$35</td></tr>
        <tr><th>Max Withdrawal</th><td>A$1,155/day, A$3,715/week, A$14,850/month</td></tr>
        <tr><th>Payout Time</th><td>24-72 hours</td></tr>
        <tr><th>Currency</th><td>AUD</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">For a full breakdown of withdrawal methods, limits, fees, and tips to speed up your payout, visit the <a href="<?php echo $lang_prefix; ?>/withdrawal">Withdrawal page</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section content-section--alt" id="mobile">
    <div class="container">
      <h2>Mobile Casino</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p><?php echo SITE_NAME; ?> does not have a dedicated mobile app, but the website runs smoothly on any Australian mobile network. The browser-based platform delivers the same features, games, and account management tools you would find on the desktop version. No downloads required - open Safari, Chrome, or any mobile browser, log in, and play.</p>
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
        <li>No app download needed - works on iOS and Android</li>
      </ul>
    </div>
  </section>

  <!-- Responsible Gambling -->
  <section class="content-section" id="responsible">
    <div class="container container--narrow">
      <h2>Responsible Gambling</h2>
      <p><?php echo SITE_NAME; ?> encourages all players to gamble responsibly. Set deposit limits, take breaks, and never chase losses. If you feel gambling is affecting your life, help is available in Australia:</p>
      <ul>
        <li><strong>Gambling Help Online</strong> - free, confidential 24/7 support - <a href="https://www.gamblinghelponline.org.au" target="_blank" rel="noopener noreferrer">gamblinghelponline.org.au</a></li>
        <li><strong>Gambling Help</strong> - call 1800 858 858 (free, 24/7)</li>
      </ul>
      <p>Contact our <a href="<?php echo $lang_prefix; ?>/support">support team</a> to set limits or arrange a self-exclusion from your account at any time.</p>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section content-section--alt" id="faq">
    <div class="container container--narrow">
      <h2>Frequently Asked Questions</h2>

      <details class="faq-item">
        <summary>What games can Australian players access at <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> works with 100+ providers including Pragmatic Play, Playtech, Novomatic, Red Tiger, Yggdrasil, BGaming, Hacksaw Gaming, and Quickspin. Australian punters can access pokies, jackpot slots, blackjack, roulette, baccarat, poker, crash games, game shows, and live dealer tables. The sportsbook covers AFL, NRL, A-League, Big Bash League, horse racing, and live betting.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What is the welcome bonus for Australian players?</summary>
        <div class="faq-answer">
          <p>New Australian players receive a first-deposit welcome bonus: 100% up to A$1,650 + 50 free spins. The minimum qualifying deposit is A$17. Wagering is 35x (bonus + deposit). Free spins winnings carry a 40x wagering requirement.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>How quickly are withdrawals processed?</summary>
        <div class="faq-answer">
          <p>Withdrawals are processed within 24 to 72 hours. The minimum withdrawal is A$35 across all payment methods. Daily withdrawal limit is A$1,155, and the monthly limit is A$14,850. No fees are charged on withdrawals from our end.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Does <?php echo SITE_NAME; ?> have a VIP programme?</summary>
        <div class="faq-answer">
          <p>Yes. <?php echo SITE_NAME; ?> runs a 5-level VIP programme. Benefits include higher cashback percentages (up to 15%), increased withdrawal limits, priority processing, personalised offers, and a personal VIP manager at the top tiers. The criteria for moving between levels are not publicly disclosed.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Can I play on my phone in Australia?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> does not have a mobile app, but the website works on any Australian mobile browser. You can access all games, the sportsbook, and account features through Safari on iPhone or Chrome on Android. No downloads, no VPN required.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>How do I reach customer support?</summary>
        <div class="faq-answer">
          <p>You can reach the support team via 24/7 live chat directly on the website, or by email at support@westace.site. If you need help with responsible gambling, contact Gambling Help on 1800 858 858 or visit <a href="https://www.gamblinghelponline.org.au" target="_blank" rel="nofollow noopener">gamblinghelponline.org.au</a>. For more details, visit the <a href="<?php echo $lang_prefix; ?>/support">Support page</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
