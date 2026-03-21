<?php
/**
 * Sports Betting Page - WestAce (Canada / Canadian English)
 */
$page_title = 'WestAce Sports Betting Canada - NHL, CFL, NBA, MLB & Live Betting';
$page_description = 'Bet on NHL, CFL, NBA Raptors, MLB Blue Jays, MLS, and 30+ sports at ' . SITE_NAME . '. Live in-play betting, virtual sports, and competitive odds - all in CAD with no conversion fees.';
$current_page = 'sports';
$lang_prefix = '/ca';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Sportsbook';
$hero_description = 'Pre-match odds, live in-play betting, virtual sports, and Canadian sports coverage - all in one place alongside our full casino.';
$hero_cta = 'Start Betting';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Sportsbook Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Sportsbook Overview</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p><?php echo SITE_NAME; ?> is more than just a casino. We offer a full sportsbook covering pre-match betting, live in-play markets, virtual sports, and a wide range of Canadian and international leagues. Whether you follow the NHL, cheer on the Raptors, root for the Blue Jays, or back your CFL team, you will find competitive odds and a solid range of markets on every major event.</p>
          <p>Our sportsbook runs alongside the casino, so you can switch between slots, live dealer tables, and sports betting from a single account with a single balance. No need for separate wallets or transfers between sections.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-sports-screen.png" alt="<?php echo SITE_NAME; ?> sportsbook showing live NHL betting odds and Canadian sports markets" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Pre-Match Betting</h4>
          <p>Place bets on upcoming matches across 30+ sports. NHL, CFL, NBA, MLB, MLS, tennis, soccer, MMA, and more - with singles, parlays, and system bets available.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9889;</div>
          <h4>Live Betting</h4>
          <p>Bet on games as they happen with real-time odds that update every few seconds. Follow the action with live stats, scoreboards, and in-play markets across all major sports.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127918;</div>
          <h4>Virtual Sports</h4>
          <p>Simulated events running around the clock - virtual football, basketball, tennis, horse racing, and greyhounds. Results every few minutes, no waiting for real fixtures.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Canadian Sports -->
  <section class="content-section content-section--alt" id="canadian-sports">
    <div class="container">
      <h2>Canadian Sports Coverage</h2>
      <p>We know Canadian fans care about Canadian teams. Here is what you can bet on closer to home:</p>

      <div class="two-col">
        <div>
          <h3>NHL - Hockey</h3>
          <p>The NHL is the biggest sport for Canadian bettors, and we cover it in full. From regular season games to the playoffs and Stanley Cup Final, you will find markets including moneyline, puck line, over/under, period betting, and player props. All seven Canadian franchises are covered - Leafs, Canadiens, Canucks, Flames, Oilers, Senators, and Jets.</p>

          <h3>CFL - Canadian Football</h3>
          <p>Bet on CFL games throughout the regular season and all the way through to the Grey Cup. Moneyline, spread, totals, and first-half markets are all available. Nine CFL teams are covered across both conferences.</p>

          <h3>NBA - Basketball</h3>
          <p>Follow the Toronto Raptors through the regular season and into the playoffs. Standard basketball markets include moneyline, spread, totals, quarter betting, and a range of player props. All 30 NBA teams are covered.</p>
        </div>
        <div>
          <h3>MLB - Baseball</h3>
          <p>Back the Toronto Blue Jays alongside all 30 MLB teams throughout the 162-game season and into October. Moneyline, run line, totals, first-5-innings lines, and player prop bets are available during the regular season and playoffs.</p>

          <h3>MLS - Soccer</h3>
          <p>Bet on Canadian MLS clubs including Toronto FC, CF Montreal, and Vancouver Whitecaps. Match winner, Asian handicap, total goals, both teams to score, and in-play markets are all available throughout the MLS season.</p>

          <h3>International Soccer</h3>
          <p>On top of MLS, we cover the English Premier League, La Liga, Serie A, Bundesliga, Champions League, CONCACAF competitions, and hundreds of other leagues and cups from around the world.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Available Sports -->
  <section class="content-section" id="sports">
    <div class="container">
      <h2>All Available Sports</h2>
      <p>Our sportsbook covers a broad range of sports from leagues and tournaments around the world. Here are the most popular markets:</p>

      <div class="two-col">
        <div>
          <h3>Popular Sports</h3>
          <ul class="check-list">
            <li>Ice Hockey - NHL (all 32 teams), international tournaments, IIHF World Championship</li>
            <li>Football (Soccer) - Premier League, La Liga, Bundesliga, Serie A, Champions League, MLS, CONCACAF</li>
            <li>Basketball - NBA (Raptors and more), EuroLeague, national leagues</li>
            <li>Baseball - MLB (Blue Jays and all 30 teams), NPB, KBO</li>
            <li>Canadian Football - CFL (all 9 teams), Grey Cup</li>
            <li>Tennis - Grand Slams, ATP, WTA, and Challenger events</li>
            <li>MMA / Boxing - UFC, Bellator, and major boxing cards</li>
          </ul>
        </div>
        <div>
          <h3>More Sports</h3>
          <ul class="check-list">
            <li>Esports - CS2, Dota 2, League of Legends, Valorant</li>
            <li>American Football - NFL, college football</li>
            <li>Cricket - IPL, T20 World Cup, international test matches</li>
            <li>Rugby Union and Rugby League</li>
            <li>Volleyball - national leagues and international events</li>
            <li>Handball - European and international events</li>
            <li>Darts, Snooker, Cycling, Formula 1, Table Tennis</li>
          </ul>
        </div>
      </div>

      <p style="margin-top: var(--space-6);">Live betting is available on most sports listed above. Odds update in real time based on the current game situation, so you can react to goals, runs, touchdowns, and momentum shifts as they happen.</p>
    </div>
  </section>

  <!-- Sports Bonus -->
  <section class="content-section content-section--alt" id="sports-bonus">
    <div class="container container--narrow">
      <h2>Sports Welcome Bonus</h2>
      <p>New Canadian players can claim a dedicated sports welcome package worth up to C$750 across three deposits. Each qualifying deposit of at least C$30 earns a 100% match bonus that can be used on any sports market in the sportsbook.</p>

      <table class="quick-table">
        <tr><th>1st Sports Deposit</th><td>100% up to C$300</td></tr>
        <tr><th>2nd Sports Deposit</th><td>100% up to C$225</td></tr>
        <tr><th>3rd Sports Deposit</th><td>100% up to C$225</td></tr>
        <tr><th>Total Package</th><td>Up to C$750</td></tr>
        <tr><th>Min Deposit</th><td>C$30</td></tr>
        <tr><th>Wagering</th><td>5x on bonus amount (sports bets)</td></tr>
        <tr><th>Min Odds</th><td>1.50</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">For full details on all available bonuses, visit the <a href="<?php echo $lang_prefix; ?>/bonuses">Bonuses page</a>.</p>
    </div>
  </section>

  <!-- Virtual Sports -->
  <section class="content-section" id="virtual">
    <div class="container container--narrow">
      <h2>Virtual Sports</h2>
      <p>When there are no live games to bet on, our virtual sports section keeps the action going 24/7. Events are simulated by certified random number generators, so outcomes are fair and unpredictable.</p>

      <h3>Available Virtual Sports</h3>
      <ul>
        <li><strong>Virtual Football</strong> - full match simulations with league tables and cup formats</li>
        <li><strong>Virtual Basketball</strong> - quarter-by-quarter simulations with standard basketball markets</li>
        <li><strong>Virtual Tennis</strong> - set-by-set matches with match winner and correct score options</li>
        <li><strong>Virtual Horse Racing</strong> - flat and jump racing with win, place, and forecast bets</li>
        <li><strong>Virtual Greyhounds</strong> - short races with win and forecast markets</li>
      </ul>
      <p>New virtual events start every 2-3 minutes, so there is always something to bet on - great for the quieter parts of the sports calendar.</p>
    </div>
  </section>

  <!-- How to Bet -->
  <section class="content-section content-section--alt" id="how-to-bet">
    <div class="container container--narrow">
      <h2>How to Place a Bet</h2>
      <p>Getting started with sports betting at <?php echo SITE_NAME; ?> is straightforward:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Log in to your account.</strong> Head to <a href="/ca/login">login</a> and sign in with your email and password. If you are new, registration takes about two minutes.
          </div>
        </li>
        <li>
          <div>
            <strong>Go to the Sportsbook.</strong> Click the Sports tab in the main navigation. You will see the available sports listed on the left side and featured markets in the main area.
          </div>
        </li>
        <li>
          <div>
            <strong>Select your event and market.</strong> Browse by sport or use the search to find a specific team or event. Click on the odds for the selection you want - it will be added to your bet slip.
          </div>
        </li>
        <li>
          <div>
            <strong>Enter your stake and confirm.</strong> Enter how much you want to bet in the bet slip on the right side of the screen. Review your bet and click Place Bet. Your account balance will update immediately.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Betting Tips -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Sports Betting Tips</h2>
      <p>A few straightforward guidelines to keep your sports betting enjoyable and sustainable:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Set a budget before you start.</strong> Decide how much you are willing to bet for the week or month, and stick to it. Treat it as entertainment spending, not income.
          </div>
        </li>
        <li>
          <div>
            <strong>Bet on sports you know well.</strong> Stick to leagues and sports where you have real knowledge. Familiarity with teams, players, and conditions gives you better judgement than chasing random markets.
          </div>
        </li>
        <li>
          <div>
            <strong>Do not chase losses.</strong> If you have had a rough run, avoid raising your stakes to try to recover. Take a break and come back with a clear head.
          </div>
        </li>
        <li>
          <div>
            <strong>Keep records of your bets.</strong> Track what you bet on, the odds, and the outcomes. Over time, this helps you identify where you are making good decisions and where you are not.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Sports FAQ -->
  <section class="content-section content-section--alt" id="sports-faq">
    <div class="container container--narrow">
      <h2>Sportsbook FAQ</h2>

      <details class="faq-item">
        <summary>Does <?php echo SITE_NAME; ?> have a sportsbook?</summary>
        <div class="faq-answer">
          <p>Yes. We offer a full sportsbook with pre-match betting, live in-play markets, virtual sports, and Canadian and international sports coverage alongside our casino. You can switch between casino and sports from the same account.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Can I bet on NHL, CFL, and other Canadian sports?</summary>
        <div class="faq-answer">
          <p>Yes. <?php echo SITE_NAME; ?> covers NHL hockey, CFL football, NBA basketball including the Toronto Raptors, MLB baseball including the Toronto Blue Jays, and MLS soccer including Canadian clubs Toronto FC, CF Montreal, and Vancouver Whitecaps. Both pre-match and live in-play markets are available.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What sports can I bet on?</summary>
        <div class="faq-answer">
          <p>We cover 30+ sports including NHL, CFL, NBA, MLB, MLS, soccer, tennis, MMA, boxing, esports, American football, baseball, cricket, rugby, and many more. Both major leagues and smaller competitions are available.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Is live betting available?</summary>
        <div class="faq-answer">
          <p>Yes. Live in-play betting is available on most sports. Odds update in real time as games progress, and you can place bets throughout the event on a wide range of markets.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What are virtual sports?</summary>
        <div class="faq-answer">
          <p>Virtual sports are simulated events powered by random number generators. They run 24/7 with new events every few minutes. We offer virtual football, basketball, tennis, horse racing, and greyhounds - perfect when there are no live matches scheduled.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Can I use my casino balance for sports betting?</summary>
        <div class="faq-answer">
          <p>Yes. <?php echo SITE_NAME; ?> uses a single balance for both casino and sportsbook. Deposits go into one account, and you can use the same funds for slots, live casino, or sports betting without any transfers.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What is the minimum bet on sports?</summary>
        <div class="faq-answer">
          <p>Minimum bets vary by sport and market but are typically very low, starting from C$0.75 on most events. Check the bet slip for the exact minimum on each specific market.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Is there a sports welcome bonus?</summary>
        <div class="faq-answer">
          <p>Yes. New Canadian players can claim a sports welcome package worth up to C$750 across three deposits (100% up to C$300, then 100% up to C$225 twice). Wagering is 5x on sports bets at minimum odds of 1.50. See the <a href="<?php echo $lang_prefix; ?>/bonuses">Bonuses page</a> for full details.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
