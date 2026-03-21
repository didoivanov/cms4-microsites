<?php
/**
 * Sports Betting Page - WestAce (AU / Australian English)
 */
$page_title = 'WestAce Sports Betting Australia - AFL, NRL, Horse Racing, Live Betting';
$page_description = 'Bet on AFL, NRL, A-League, Big Bash League, horse racing, and more at ' . SITE_NAME . '. Live in-play betting, virtual sports, and competitive odds across 30+ sports.';
$current_page = 'sports';
$lang_prefix = '/au';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Sportsbook';
$hero_description = 'Pre-match odds, live in-play betting, virtual sports, and horse racing from Australian and international events - all in one place alongside our full casino.';
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
          <p><?php echo SITE_NAME; ?> is more than just a casino. We offer a full sportsbook covering pre-match betting, live in-play markets, virtual sports, and horse racing. Whether you follow the AFL, NRL, A-League, Big Bash League, or prefer international competitions, you will find competitive odds and a wide range of markets on every major event.</p>
          <p>Our sportsbook runs alongside the casino, so you can switch between pokies, live dealer tables, and sports betting from a single account with a single balance. No need for separate wallets or transfers.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-sports-screen.png" alt="<?php echo SITE_NAME; ?> sportsbook showing live AFL betting odds and Australian sports markets" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Pre-Match Betting</h4>
          <p>Place bets on upcoming matches across 30+ sports. AFL, NRL, A-League, cricket, tennis, basketball, MMA, and more - with singles, accumulators, and system bets available.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9889;</div>
          <h4>Live Betting</h4>
          <p>Bet on matches as they happen with real-time odds that update every few seconds. Follow the action with live stats, scoreboards, and in-play markets across all major sports.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127918;</div>
          <h4>Virtual Sports</h4>
          <p>Simulated events running around the clock - virtual football, basketball, tennis, horse racing, and greyhounds. Results every few minutes, no waiting for real fixtures.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sports Bonus -->
  <section class="content-section content-section--alt" id="sports-bonus">
    <div class="container container--narrow">
      <h2>Sports Welcome Bonus</h2>
      <p>New Australian punters can claim a three-deposit sports welcome package worth up to A$660 total. Each sportsbook deposit qualifies for a 100% match bonus.</p>

      <table class="quick-table">
        <tr><th>1st Deposit</th><td>100% up to A$330</td></tr>
        <tr><th>2nd Deposit</th><td>100% up to A$165</td></tr>
        <tr><th>3rd Deposit</th><td>100% up to A$165</td></tr>
        <tr><th>Total</th><td>Up to A$660</td></tr>
        <tr><th>Min Deposit</th><td>A$35</td></tr>
      </table>

      <div style="text-align:center;margin:var(--space-6) 0">
        <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Claim Sports Bonus</a>
      </div>

      <p>For full details on all available bonuses including the casino welcome offer, visit the <a href="<?php echo $lang_prefix; ?>/bonuses">Bonuses page</a>.</p>
    </div>
  </section>

  <!-- Australian Sports -->
  <section class="content-section" id="australian-sports">
    <div class="container">
      <h2>Australian Sports Betting</h2>
      <p>We know what Australian punters care about. Our sportsbook puts the home sports front and centre, with deep markets and competitive odds on the competitions that matter most to Australian bettors.</p>

      <div class="two-col">
        <div>
          <h3>Australian Sports</h3>
          <ul class="check-list">
            <li>AFL - all rounds, finals, Grand Final, and marquee interstate matches</li>
            <li>NRL - regular season, State of Origin, and finals series</li>
            <li>A-League Men and Women - full season and finals</li>
            <li>Big Bash League (BBL) - all matches including finals</li>
            <li>Rugby Union - Super Rugby Pacific, Wallabies test matches, and World Cup</li>
            <li>Australian Open tennis - all rounds from all four Grand Slams</li>
            <li>Horse racing - Flemington, Randwick, Caulfield, Moonee Valley, Rosehill, and more</li>
          </ul>
        </div>
        <div>
          <h3>International Sports</h3>
          <ul class="check-list">
            <li>Football - Premier League, La Liga, Bundesliga, Serie A, Champions League, World Cup, and hundreds of other competitions</li>
            <li>Cricket - international test matches, ODIs, T20 World Cup, IPL, and The Ashes</li>
            <li>Basketball - NBA, NBL, EuroLeague, and national leagues</li>
            <li>Tennis - Grand Slams, ATP, WTA, and Challenger events</li>
            <li>Ice Hockey - NHL, KHL, and European leagues</li>
            <li>MMA and Boxing - UFC, Bellator, and major boxing cards</li>
            <li>Esports - CS2, Dota 2, League of Legends, Valorant</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Available Sports -->
  <section class="content-section content-section--alt" id="sports">
    <div class="container">
      <h2>All Available Sports</h2>
      <p>Our sportsbook covers a broad range of sports from leagues and tournaments around the world. Here are some of the most popular markets:</p>

      <div class="two-col">
        <div>
          <h3>Popular Sports</h3>
          <ul class="check-list">
            <li>AFL - all rounds and finals, including Grand Final head-to-head, margin, and first scorer markets</li>
            <li>NRL - regular season, State of Origin, and Dally M award specials</li>
            <li>Cricket - BBL, international matches, The Ashes, and IPL</li>
            <li>Football - Premier League, Bundesliga, La Liga, Serie A, Champions League, and more</li>
            <li>Tennis - Grand Slams, ATP, WTA, and Challenger events</li>
            <li>Basketball - NBA, NBL, EuroLeague, and national leagues</li>
            <li>MMA and Boxing - UFC, Bellator, and major boxing cards</li>
          </ul>
        </div>
        <div>
          <h3>More Sports</h3>
          <ul class="check-list">
            <li>Rugby Union and Rugby League - Super Rugby, NRL, international tests</li>
            <li>American Football - NFL and college football</li>
            <li>Baseball - MLB, NPB, KBO</li>
            <li>Ice Hockey - NHL, KHL, SHL, and European leagues</li>
            <li>Volleyball - national leagues and international competitions</li>
            <li>Table Tennis - professional and world events</li>
            <li>Darts, Snooker, Cycling, Formula 1</li>
          </ul>
        </div>
      </div>

      <p style="margin-top: var(--space-6);">Live betting is available on most sports listed above. Odds update in real time based on the current match situation, so you can react to goals, tries, and momentum shifts as they happen.</p>
    </div>
  </section>

  <!-- Horse Racing -->
  <section class="content-section" id="horse-racing">
    <div class="container container--narrow">
      <h2>Horse Racing</h2>
      <p><?php echo SITE_NAME; ?> covers horse racing from tracks across Australia, New Zealand, the UK, Ireland, France, and other major racing nations. You will find ante-post markets for major carnivals as well as day-of-race odds with win, place, and each-way options.</p>
      <p>Key Australian meetings like the Melbourne Cup, Cox Plate, Caulfield Cup, Golden Rose, Queen Elizabeth Stakes, and the Magic Millions are covered with a full range of markets. For everyday racing, we offer standard win and place betting on all metropolitan and feature country races. International meetings like Cheltenham, Royal Ascot, and the Grand National are also available.</p>

      <h3>Australian Race Meets Covered</h3>
      <ul>
        <li><strong>Melbourne Cup Carnival</strong> - full Flemington programme including the Cup, Oaks, Derby, and Stakes days</li>
        <li><strong>Sydney carnival meetings</strong> - Golden Eagle, Epsom Handicap, Winx Stakes</li>
        <li><strong>Queensland carnival</strong> - Stradbroke Handicap, Q22, The Gateway</li>
        <li><strong>Magic Millions</strong> - Gold Coast carnival including the Classic and Sprint</li>
        <li><strong>Daily metropolitan racing</strong> - Flemington, Randwick, Caulfield, Moonee Valley, Rosehill</li>
      </ul>
    </div>
  </section>

  <!-- Virtual Sports -->
  <section class="content-section content-section--alt" id="virtual">
    <div class="container container--narrow">
      <h2>Virtual Sports</h2>
      <p>When there are no live fixtures to bet on, our virtual sports section keeps the action going 24/7. Events are simulated by certified random number generators, so outcomes are fair and unpredictable.</p>

      <h3>Available Virtual Sports</h3>
      <ul>
        <li><strong>Virtual Football</strong> - full match simulations with league tables and cup formats</li>
        <li><strong>Virtual Basketball</strong> - quarter-by-quarter simulations with standard basketball markets</li>
        <li><strong>Virtual Tennis</strong> - set-by-set matches with match winner and correct score options</li>
        <li><strong>Virtual Horse Racing</strong> - flat and jump racing with win, place, and forecast bets</li>
        <li><strong>Virtual Greyhounds</strong> - short races with win and forecast markets</li>
      </ul>
      <p>New virtual events start every 2-3 minutes, so there is always something to bet on regardless of what time it is in Australia.</p>
    </div>
  </section>

  <!-- Bet Types -->
  <section class="content-section" id="bet-types">
    <div class="container container--narrow">
      <h2>Bet Types Available</h2>
      <p><?php echo SITE_NAME; ?> supports a range of bet types to suit every punter, from straightforward win bets to multi-leg accumulators.</p>

      <h3>Standard Bet Types</h3>
      <ul>
        <li><strong>Singles</strong> - one selection, straightforward win or loss</li>
        <li><strong>Accumulators (multis)</strong> - two or more selections combined, all must win for a return</li>
        <li><strong>System bets</strong> - cover multiple combinations within your selections for partial returns</li>
        <li><strong>Live/In-play bets</strong> - placed during the event with real-time odds</li>
      </ul>

      <h3>Markets Available</h3>
      <p>Depending on the sport, common markets include match winner, handicap, over/under totals, first scorer, correct score, half-time result, method of dismissal, player props, and many more. AFL and NRL markets include head-to-head, line betting, total points, and first/last try scorer options.</p>
    </div>
  </section>

  <!-- Sports Betting Tips -->
  <section class="content-section content-section--alt" id="tips">
    <div class="container container--narrow">
      <h2>Sports Betting Tips</h2>
      <p>A few straightforward guidelines to keep your sports betting enjoyable and sustainable:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Set a budget before you start.</strong> Decide how much you are willing to bet for the week or month, and do not go over it. Treat it as entertainment spending, not an investment.
          </div>
        </li>
        <li>
          <div>
            <strong>Bet on sports you understand.</strong> Stick to leagues and sports where you have genuine knowledge. Familiarity with teams, players, and conditions gives you better judgement than chasing random markets.
          </div>
        </li>
        <li>
          <div>
            <strong>Avoid chasing losses.</strong> If you have had a bad run, do not increase your stakes to try to win it back. Take a break and come back with a clear head.
          </div>
        </li>
        <li>
          <div>
            <strong>Keep records.</strong> Track your bets so you know what is working and what is not. Over time, this helps you spot patterns and make better decisions.
          </div>
        </li>
      </ol>

      <div class="highlight-box" style="margin-top: var(--space-6);">
        <h4>Responsible Gambling</h4>
        <p>If betting is no longer fun, or you find it hard to stop, free help is available. Call Gambling Help on <strong>1800 858 858</strong> (free, 24/7) or visit <a href="https://www.gamblinghelponline.org.au" target="_blank" rel="noopener noreferrer">gamblinghelponline.org.au</a>. You can also contact our <a href="<?php echo $lang_prefix; ?>/support">support team</a> to set limits or arrange a self-exclusion at any time.</p>
      </div>
    </div>
  </section>

  <!-- Sports FAQ -->
  <section class="content-section" id="sports-faq">
    <div class="container container--narrow">
      <h2>Sportsbook FAQ</h2>

      <details class="faq-item">
        <summary>Does <?php echo SITE_NAME; ?> have a sportsbook?</summary>
        <div class="faq-answer">
          <p>Yes. We offer a full sportsbook with pre-match betting, live in-play markets, virtual sports, and horse racing alongside our casino. You can switch between casino and sports from the same account using the same balance.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Can I bet on AFL and NRL at <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Yes. AFL and NRL are among our most popular markets. We cover all regular season rounds, finals, and the Grand Final. Markets include head-to-head, line betting, total points, first/last try scorer, and more.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What sports can I bet on?</summary>
        <div class="faq-answer">
          <p>We cover 30+ sports including AFL, NRL, A-League, Big Bash League, rugby union, cricket, tennis, basketball, ice hockey, MMA, boxing, esports, horse racing, American football, baseball, and many more. Both major leagues and smaller competitions are available.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Is live betting available?</summary>
        <div class="faq-answer">
          <p>Yes. Live in-play betting is available on most sports. Odds update in real time as matches progress, and you can place bets throughout the event.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What are virtual sports?</summary>
        <div class="faq-answer">
          <p>Virtual sports are simulated events powered by random number generators. They run 24/7 with new events every few minutes. We offer virtual football, basketball, tennis, horse racing, and greyhounds - handy for Australian punters when there are no live events on.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Can I use my casino balance for sports betting?</summary>
        <div class="faq-answer">
          <p>Yes. <?php echo SITE_NAME; ?> uses a single balance for both casino and sportsbook. Deposits go into one account, and you can use the same funds for pokies, live casino, or sports betting without any transfers.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What is the minimum bet on sports?</summary>
        <div class="faq-answer">
          <p>Minimum bets vary by sport and market but are typically very low, starting from A$1 on most events. Check the bet slip for the exact minimum on each market.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Is horse racing covered at <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Yes. We cover Australian racing including all major metropolitan meets at Flemington, Randwick, Caulfield, Moonee Valley, and Rosehill. Carnival events like the Melbourne Cup, Cox Plate, and Golden Rose are covered with full markets. International racing from the UK, Ireland, and France is also available.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
