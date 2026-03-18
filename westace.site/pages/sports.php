<?php
/**
 * Sports Betting Page - WestAce
 */
$page_title = SITE_NAME . ' Sportsbook - Sports Betting, Live Betting & Virtual Sports';
$page_description = 'Bet on football, tennis, basketball, horse racing, and more at ' . SITE_NAME . '. Live in-play betting, virtual sports, and competitive odds across 30+ sports.';
$current_page = 'sports';

require_once __DIR__ . '/../includes/header.php';

$hero_title = SITE_NAME . ' Sportsbook';
$hero_description = 'Pre-match odds, live in-play betting, virtual sports, and horse racing -- all in one place alongside our full casino.';
$hero_cta = 'Start Betting';
require_once __DIR__ . '/../includes/page-hero.php';
?>

<main>
  <!-- Sportsbook Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Sportsbook Overview</h2>
      <p><?php echo SITE_NAME; ?> is more than just a casino. We offer a full sportsbook covering pre-match betting, live in-play markets, virtual sports, and horse racing. Whether you follow the Premier League, the NBA, or Grand Slam tennis, you will find competitive odds and a wide range of markets on every major event.</p>
      <p>Our sportsbook runs alongside the casino, so you can switch between slots, live dealer tables, and sports betting from a single account with a single balance. No need for separate wallets or transfers.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Pre-Match Betting</h4>
          <p>Place bets on upcoming matches across 30+ sports. Football, tennis, basketball, cricket, ice hockey, MMA, and more -- with singles, accumulators, and system bets available.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9889;</div>
          <h4>Live Betting</h4>
          <p>Bet on matches as they happen with real-time odds that update every few seconds. Follow the action with live stats, scoreboards, and in-play markets across all major sports.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127918;</div>
          <h4>Virtual Sports</h4>
          <p>Simulated events running around the clock -- virtual football, basketball, tennis, horse racing, and greyhounds. Results every few minutes, no waiting for real fixtures.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Available Sports -->
  <section class="content-section content-section--alt" id="sports">
    <div class="container">
      <h2>Available Sports</h2>
      <p>Our sportsbook covers a broad range of sports from leagues and tournaments around the world. Here are some of the most popular markets:</p>

      <div class="two-col">
        <div>
          <h3>Popular Sports</h3>
          <ul class="check-list">
            <li>Football -- Premier League, La Liga, Bundesliga, Serie A, Champions League, World Cup qualifiers, and hundreds of lower leagues</li>
            <li>Tennis -- Grand Slams, ATP, WTA, and Challenger events</li>
            <li>Basketball -- NBA, EuroLeague, national leagues</li>
            <li>Ice Hockey -- NHL, KHL, SHL, and European leagues</li>
            <li>Cricket -- IPL, international test matches, T20 World Cup</li>
            <li>MMA / Boxing -- UFC, Bellator, and major boxing cards</li>
            <li>Esports -- CS2, Dota 2, League of Legends, Valorant</li>
          </ul>
        </div>
        <div>
          <h3>More Sports</h3>
          <ul class="check-list">
            <li>Rugby Union and Rugby League</li>
            <li>American Football -- NFL, college football</li>
            <li>Baseball -- MLB, NPB, KBO</li>
            <li>Handball -- European and international events</li>
            <li>Volleyball -- national leagues and international</li>
            <li>Table Tennis -- professional and world events</li>
            <li>Darts, Snooker, Cycling, Formula 1</li>
          </ul>
        </div>
      </div>

      <p style="margin-top: var(--space-6);">Live betting is available on most sports listed above. Odds update in real time based on the current match situation, so you can react to goals, breaks, and momentum shifts as they happen.</p>
    </div>
  </section>

  <!-- Horse Racing -->
  <section class="content-section" id="horse-racing">
    <div class="container container--narrow">
      <h2>Horse Racing</h2>
      <p><?php echo SITE_NAME; ?> covers horse racing from tracks across the UK, Ireland, France, Australia, and other major racing nations. You will find ante-post markets for major festivals as well as day-of-race odds with win, place, and each-way options.</p>
      <p>Key meetings like Cheltenham, Royal Ascot, the Grand National, and the Melbourne Cup are covered with a full range of markets. For everyday racing, we offer standard win and place betting on most UK and Irish fixtures.</p>
    </div>
  </section>

  <!-- Virtual Sports -->
  <section class="content-section content-section--alt" id="virtual">
    <div class="container container--narrow">
      <h2>Virtual Sports</h2>
      <p>When there are no live fixtures to bet on, our virtual sports section keeps the action going 24/7. Events are simulated by certified random number generators, so outcomes are fair and unpredictable.</p>

      <h3>Available Virtual Sports</h3>
      <ul>
        <li><strong>Virtual Football</strong> -- full match simulations with league tables and cup formats</li>
        <li><strong>Virtual Basketball</strong> -- quarter-by-quarter simulations with standard basketball markets</li>
        <li><strong>Virtual Tennis</strong> -- set-by-set matches with match winner and correct score options</li>
        <li><strong>Virtual Horse Racing</strong> -- flat and jump racing with win, place, and forecast bets</li>
        <li><strong>Virtual Greyhounds</strong> -- short races with win and forecast markets</li>
      </ul>
      <p>New virtual events start every 2-3 minutes, so there is always something to bet on.</p>
    </div>
  </section>

  <!-- Sports Betting Tips -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Sports Betting Tips</h2>
      <p>A few straightforward guidelines to keep your sports betting fun and sustainable:</p>

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
    </div>
  </section>

  <!-- Sports FAQ -->
  <section class="content-section content-section--alt" id="sports-faq">
    <div class="container container--narrow">
      <h2>Sportsbook FAQ</h2>

      <details class="faq-item">
        <summary>Does <?php echo SITE_NAME; ?> have a sportsbook?</summary>
        <div class="faq-answer">
          <p>Yes. We offer a full sportsbook with pre-match betting, live in-play markets, virtual sports, and horse racing alongside our casino. You can switch between casino and sports from the same account.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What sports can I bet on?</summary>
        <div class="faq-answer">
          <p>We cover 30+ sports including football, tennis, basketball, cricket, ice hockey, MMA, boxing, esports, horse racing, rugby, American football, baseball, and many more. Both major leagues and smaller competitions are available.</p>
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
          <p>Virtual sports are simulated events powered by random number generators. They run 24/7 with new events every few minutes. We offer virtual football, basketball, tennis, horse racing, and greyhounds.</p>
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
          <p>Minimum bets vary by sport and market but are typically very low, starting from &euro;0.50 on most events. Check the bet slip for the exact minimum on each market.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
