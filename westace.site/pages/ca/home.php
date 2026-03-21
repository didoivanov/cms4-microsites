<?php
/**
 * Homepage - WestAce (Canada / Canadian English)
 */
$page_title = 'WestAce Casino Canada - 7,000+ Games, Sportsbook & Welcome Bonus up to C$1,500';
$page_description = SITE_NAME . ' Casino Canada offers 7,000+ games from 100+ providers, full sportsbook with live betting, live dealer tables, and a welcome bonus of 100% up to C$1,500 plus 50 free spins. Play in CAD with no conversion fees.';
$current_page = 'home';
$lang_prefix = '/ca';

// Override stats for CAD
$STATS = [
    ['value' => '7,000+', 'label' => 'Games'],
    ['value' => '100+',   'label' => 'Providers'],
    ['value' => 'C$1,500', 'label' => 'Welcome Bonus'],
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
    <p class="hero__subtitle">Over 7,000 games from 100+ providers, live dealer tables, full sportsbook with live in-play betting, and a welcome bonus on your first deposit - all in Canadian dollars.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Welcome Bonus</div>
      <div class="hero__bonus-value">100% up to C$1,500 + 50 Free Spins</div>
      <div class="hero__bonus-extra">1st Deposit: 100% up to C$1,500 + 50 Free Spins &middot; Min deposit C$30</div>
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
      <h2>Welcome to <?php echo SITE_NAME; ?> Casino Canada</h2>
      <p><?php echo SITE_NAME; ?> is an online casino and sportsbook built for Canadian players, launched in 2026. The platform brings together more than 7,000 games from 100+ providers, covering slots, live dealer lobbies, table games, crash games, jackpot titles, and game shows. Alongside the casino, we run a full sportsbook covering NHL hockey, CFL football, NBA basketball (go Raptors), MLB baseball (go Blue Jays), MLS soccer, and live in-play markets. New Canadian players can claim a welcome bonus worth up to C$1,500 plus 50 free spins on their first deposit, all in CAD with no currency conversion.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Launched</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Games</th><td>7,000+ (slots, table games, live casino, crash games, jackpots, game shows)</td></tr>
        <tr><th>Providers</th><td>100+ (Pragmatic Play, Playtech, Novomatic, Red Tiger, Yggdrasil, BGaming, Hacksaw Gaming, and more)</td></tr>
        <tr><th>Welcome Bonus</th><td>100% up to C$1,500 + 50 Free Spins (1st deposit)</td></tr>
        <tr><th>Min Deposit</th><td>C$15 (C$30 for most bonuses)</td></tr>
        <tr><th>Currency</th><td>CAD (Canadian Dollar)</td></tr>
        <tr><th>Support</th><td>24/7 live chat + email</td></tr>
        <tr><th>Sportsbook</th><td>Yes (NHL, CFL, NBA, MLB, MLS, and 30+ more sports)</td></tr>
        <tr><th>Mobile</th><td>Fully responsive, no app required</td></tr>
        <tr><th>License</th><td>Curacao</td></tr>
      </table>

      <h3>Why Canadian Players Choose <?php echo SITE_NAME; ?></h3>
      <ul class="check-list">
        <li>Over 7,000 games from 100+ licensed providers, all playable in CAD</li>
        <li>Welcome bonus up to C$1,500 + 50 free spins on your first deposit</li>
        <li>Sportsbook with NHL, CFL, NBA Raptors, MLB Blue Jays, MLS Canadian clubs, and live in-play markets</li>
        <li>Live casino with roulette, blackjack, baccarat, dice, and poker</li>
        <li>Daily cashback up to 15% with just 1x wagering requirement</li>
        <li>5-level VIP programme with personal manager and higher limits</li>
        <li>Interac supported alongside Mastercard, e-wallets, and crypto</li>
        <li>Crypto-friendly with a separate welcome bonus and reload offers</li>
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
          <p>Bet on NHL, CFL, NBA, MLB, and MLS alongside international football, tennis, and more. Live in-play markets and virtual sports round out the offering - all from a single account.</p>
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
      <div class="jackpot-amount" id="jackpotCounter">C$2,420,282</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Popular Games at <?php echo SITE_NAME; ?> Canada</h2>
      <p>Browse some of the most-played titles among Canadian players. From high-volatility slots to classic table games, live dealer rooms, and sports markets covering NHL, CFL, NBA, and MLB - there is something for every type of player.</p>

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
      <h2>Payment Methods for Canadian Players</h2>
      <p><?php echo SITE_NAME; ?> supports a range of payment methods popular with Canadian players, including Interac, debit and credit cards, e-wallets, and cryptocurrencies. All transactions are in CAD with no conversion fees. Deposits start from C$15, and all deposits and withdrawals are fee-free on our end.</p>

      <table class="quick-table">
        <tr><th>Deposit Methods</th><td>Interac, <?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Min Deposit</th><td>C$15 (C$30 for most bonuses)</td></tr>
        <tr><th>Min Withdrawal</th><td>C$30</td></tr>
        <tr><th>Max Withdrawal</th><td>C$1,050/day &middot; C$3,375/week &middot; C$13,500/month</td></tr>
        <tr><th>VIP Withdrawal</th><td>C$2,250/day &middot; C$10,500/week &middot; C$42,000/month</td></tr>
        <tr><th>Payout Time</th><td>24-72 hours</td></tr>
        <tr><th>Currency</th><td>CAD</td></tr>
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
          <p><?php echo SITE_NAME; ?> does not have a dedicated mobile app, but the website runs smoothly on any Canadian mobile network. The browser-based platform delivers the same features, games, and account management tools you would find on the desktop version. No downloads required - open Safari, Chrome, or any mobile browser, log in, and play.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/westace-mobile.png" alt="<?php echo SITE_NAME; ?> Casino mobile lobby with welcome bonus and game navigation" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>
      <ul class="check-list">
        <li>Full game library accessible on mobile browsers</li>
        <li>Live dealer tables and sportsbook on the go</li>
        <li>Deposit and withdraw directly from your phone - Interac works great on mobile</li>
        <li>Live chat support available on mobile</li>
        <li>No app download needed - works on iOS and Android</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section" id="faq">
    <div class="container container--narrow">
      <h2>Frequently Asked Questions</h2>

      <details class="faq-item">
        <summary>What games can Canadian players access at <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> works with 100+ providers including Pragmatic Play, Playtech, Novomatic, Red Tiger, Yggdrasil, BGaming, Hacksaw Gaming, and Quickspin. Canadian players can access video slots, jackpot slots, blackjack, roulette, baccarat, poker, crash games, game shows, and live dealer tables. The sportsbook covers NHL, CFL, NBA, MLB, MLS, and dozens of international sports with live betting.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What is the welcome bonus for Canadian players?</summary>
        <div class="faq-answer">
          <p>New Canadian players receive a single-deposit welcome bonus: 100% up to C$1,500 + 50 free spins. The minimum qualifying deposit is C$30. No promo code is needed. Wagering requirement is 35x on the bonus + deposit amount. Free spin winnings carry a separate 40x wagering requirement.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>How quickly are withdrawals processed?</summary>
        <div class="faq-answer">
          <p>Withdrawals are processed within 24 to 72 hours. The minimum withdrawal is C$30 across all payment methods. Standard daily withdrawal limit is C$1,050, weekly C$3,375, and monthly C$13,500. VIP players get higher limits. No fees are charged on withdrawals by <?php echo SITE_NAME; ?>.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Does <?php echo SITE_NAME; ?> accept Interac?</summary>
        <div class="faq-answer">
          <p>Yes. Interac is one of the most popular payment options for Canadian players and is supported for deposits at <?php echo SITE_NAME; ?>. You can also use Mastercard, e-wallets like Skrill, and multiple cryptocurrencies. For full details on methods and limits, visit the <a href="<?php echo $lang_prefix; ?>/withdrawal">Withdrawal page</a>.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Does <?php echo SITE_NAME; ?> have a VIP programme?</summary>
        <div class="faq-answer">
          <p>Yes. <?php echo SITE_NAME; ?> runs a 5-level VIP programme. Benefits include higher cashback percentages (up to 15%), increased withdrawal limits, priority processing, personalised offers, and a personal VIP manager at the top tiers. The criteria for moving between levels are not publicly disclosed - contact support for your current status.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Can I bet on Canadian sports like NHL and CFL?</summary>
        <div class="faq-answer">
          <p>Absolutely. <?php echo SITE_NAME; ?> covers NHL hockey, CFL football, NBA basketball including the Toronto Raptors, MLB baseball including the Toronto Blue Jays, and MLS soccer including Canadian clubs. Pre-match and live in-play markets are available. For full details, see the <a href="<?php echo $lang_prefix; ?>/sports">Sports page</a>.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>How do I reach customer support?</summary>
        <div class="faq-answer">
          <p>You can reach the support team via 24/7 live chat directly on the website, or by email at support@westace.site. The support team is available around the clock. For more details, visit the <a href="<?php echo $lang_prefix; ?>/support">Support page</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
