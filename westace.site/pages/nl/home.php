<?php
/**
 * Homepage - WestAce (Dutch / NL)
 */
$page_title = 'WestAce Casino - 7.000+ Spellen, Sportsbook & Welkomstbonus tot €2.000';
$page_description = SITE_NAME . ' Casino biedt 7.000+ spellen van 100+ aanbieders, een volledige sportsbook met live wedden, live dealer tafels en een welkomstbonus van 100% tot €1.000 plus 50 Gratis Spins. Meld je aan en speel.';
$current_page = 'home';
$lang_prefix = '/nl';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__badge">Nu geopend -- 7.000+ spellen en live sportweddenschappen</div>
    <h1>
      <span class="brand-name"><?php echo SITE_NAME; ?></span><br>
      <span class="brand-type">Casino</span>
    </h1>
    <p class="hero__subtitle">Meer dan 7.000 spellen van 100+ aanbieders, live dealer tafels, een volledige sportsbook met live wedden en een welkomstpakket dat je eerste drie stortingen beloont.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Welkomstpakket</div>
      <div class="hero__bonus-value"><?php echo WELCOME_BONUS; ?></div>
      <div class="hero__bonus-extra">1e Storting: 100% tot &euro;1.000 + 50 Gratis Spins &middot; Min storting &euro;20</div>
    </div>
    <div class="hero__ctas">
      <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Nu Spelen</a>
      <a href="<?php echo $lang_prefix; ?>/bonuses" class="btn btn--outline btn--lg">Bekijk Bonussen</a>
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
      <h2>Welkom bij <?php echo SITE_NAME; ?> Casino</h2>
      <p><?php echo SITE_NAME; ?> is een online casino en sportsbook dat in 2026 is gelanceerd. Het platform brengt meer dan 7.000 spellen samen van 100+ aanbieders, waaronder slots, live dealer lobby's, tafelspellen, crash games, jackpot titels en game shows. Naast het casino bieden wij een volledige sportsbook met pre-match en live wedden, virtuele sporten en paardenrennen. Nieuwe spelers kunnen een welkomstpakket claimen over drie stortingen ter waarde van tot &euro;2.000 plus 150 Gratis Spins.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Gelanceerd</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Spellen</th><td>7.000+ (slots, tafelspellen, live casino, crash games, jackpots, game shows)</td></tr>
        <tr><th>Aanbieders</th><td>100+ (Pragmatic Play, Playtech, Novomatic, Red Tiger, Yggdrasil, BGaming, Hacksaw Gaming en meer)</td></tr>
        <tr><th>Welkomstbonus</th><td><?php echo WELCOME_BONUS_TEXT; ?></td></tr>
        <tr><th>Min Storting</th><td>&euro;10</td></tr>
        <tr><th>Valuta</th><td>EUR</td></tr>
        <tr><th>Ondersteuning</th><td>24/7 live chat + e-mail</td></tr>
        <tr><th>Sportsbook</th><td>Ja (sport, live wedden, virtuele sporten, paardenrennen)</td></tr>
        <tr><th>Mobiel</th><td>Volledig responsief, geen app nodig</td></tr>
      </table>

      <h3>Waarom spelers kiezen voor <?php echo SITE_NAME; ?></h3>
      <ul class="check-list">
        <li>Meer dan 7.000 spellen van 100+ gelicentieerde aanbieders</li>
        <li>Welkomstpakket over drie stortingen tot &euro;2.000 + 150 Gratis Spins</li>
        <li>Volledige sportsbook met live wedden, virtuele sporten en paardenrennen</li>
        <li>Live casino met roulette, blackjack, baccarat, dobbelspellen en poker</li>
        <li>Dagelijkse cashback tot 15% met slechts 1x inzetvereiste</li>
        <li>VIP-programma met 5 niveaus, persoonlijke manager en hogere limieten</li>
        <li>Cryptovriendelijk met aparte welkomstbonus en herlaadaanbiedingen</li>
        <li>24/7 ondersteuning via live chat en e-mail</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Casinospellen</h4>
          <p>Duizenden slots, blackjack- en roulettevarianten, poker, baccarat, crash games en live dealer tafels van studio's als Pragmatic Play, Playtech, Novomatic, Red Tiger en Yggdrasil.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127183;</div>
          <h4>Live Casino</h4>
          <p>Live dealer spellen waaronder roulette, blackjack, baccarat, dobbelspellen en poker. Echte croupiers streamen in HD vanuit professionele studio's, dag en nacht.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Sportsbook</h4>
          <p>Compleet sportweddenplatform met pre-match en live in-play markten. Virtuele sporten en paardenrennen maken het aanbod compleet voor sportliefhebbers.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Social Proof / Recent Winners -->
  <section class="content-section winners-section" id="winners">
    <div class="container">
      <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--space-4);margin-bottom:var(--space-2)">
        <h2 style="margin-bottom:0">Recente Winnaars</h2>
        <span class="live-dot">Live</span>
      </div>
      <div class="jackpot-label">Huidige Jackpot Pool</div>
      <div class="jackpot-amount" id="jackpotCounter">&euro;2.847.391</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Populaire Spellen bij <?php echo SITE_NAME; ?></h2>
      <p>Bekijk een selectie van de meest gespeelde titels in het casino. Van high-volatility slots tot klassieke tafelspellen, live dealer kamers en sportweddenschappen -- er is voor elk type speler iets te vinden.</p>

      <div class="game-tabs">
        <button class="game-tab active">Alle Spellen</button>
        <button class="game-tab">Slots</button>
        <button class="game-tab">Live Casino</button>
        <button class="game-tab">Tafelspellen</button>
        <button class="game-tab">Crash Games</button>
        <button class="game-tab">Jackpots</button>
        <button class="game-tab">Sport</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Top Spelaanbieders</h3>
          <p>Onze spelcatalogus wordt aangedreven door een brede mix van studio's, van marktleiders tot veelbelovende onafhankelijke ontwikkelaars:</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">100+ totaal</span>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-games-screen.png" alt="<?php echo SITE_NAME; ?> Casino spellobby met topslots van aanbieders als Pragmatic Play, Playtech en Novomatic" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section" id="payments">
    <div class="container">
      <h2>Betaalmethoden</h2>
      <p><?php echo SITE_NAME; ?> ondersteunt een breed scala aan betaalmethoden, waaronder creditcards, prepaidkaarten, e-wallets en cryptovaluta. Stortingen beginnen vanaf &euro;10 en alle stortingen en opnames zijn kosteloos.</p>

      <table class="quick-table">
        <tr><th>Stortingsmethoden</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Min Storting</th><td>&euro;10</td></tr>
        <tr><th>Min Opname</th><td>&euro;10</td></tr>
        <tr><th>Max Opname</th><td>&euro;500/dag, &euro;7.000/maand</td></tr>
        <tr><th>Uitbetalingstijd</th><td>24-72 uur</td></tr>
        <tr><th>Valuta</th><td>EUR</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">Voor een gedetailleerd overzicht van opnamemethoden, limieten, kosten en tips om je uitbetaling te versnellen, bezoek de <a href="<?php echo $lang_prefix; ?>/withdrawal">Uitbetalingspagina</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section content-section--alt" id="mobile">
    <div class="container">
      <h2>Mobiel Casino</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p><?php echo SITE_NAME; ?> heeft geen speciale mobiele app, maar de website werkt volledig op alle smartphones en tablets. Het browsergebaseerde platform biedt dezelfde functies, spellen en accountbeheermogelijkheden als de desktopversie. Geen downloads nodig -- open je mobiele browser, log in en speel.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/westace-mobile.png" alt="<?php echo SITE_NAME; ?> Casino mobiele lobby met welkomstbonus en spelnavigatie" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>
      <ul class="check-list">
        <li>Volledige spelbibliotheek beschikbaar op mobiele browsers</li>
        <li>Live dealer tafels en sportsbook onderweg</li>
        <li>Storten en opnemen rechtstreeks vanaf je telefoon</li>
        <li>Live chat ondersteuning beschikbaar op mobiel</li>
        <li>Geen app-download nodig -- werkt op iOS en Android</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section" id="faq">
    <div class="container container--narrow">
      <h2>Veelgestelde Vragen</h2>

      <details class="faq-item">
        <summary>Welke soorten spellen kan ik spelen bij <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> werkt samen met 100+ aanbieders waaronder Pragmatic Play, Playtech, Novomatic, Red Tiger, Yggdrasil, BGaming, Hacksaw Gaming en Quickspin. Je kunt videoslots, jackpot slots, blackjack, roulette, baccarat, poker, crash games, game shows en live dealer titels spelen. Daarnaast is er een volledige sportsbook met live wedden, virtuele sporten en paardenrennen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wat is de welkomstbonus bij <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>Nieuwe spelers ontvangen een welkomstpakket over drie stortingen: 100% tot &euro;1.000 + 50 Gratis Spins op de eerste storting, 100% tot &euro;500 + 50 Gratis Spins op de tweede en 100% tot &euro;500 + 50 Gratis Spins op de derde. Totale waarde: tot &euro;2.000 + 150 Gratis Spins. Minimumstorting is &euro;20 per niveau. De inzetvereiste is 35x (bonus + storting).</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Hoe snel worden opnames verwerkt?</summary>
        <div class="faq-answer">
          <p>Opnames worden binnen 24 tot 72 uur verwerkt. De minimumopname is &euro;10 voor alle betaalmethoden. Het dagelijkse opnamelimiet is &euro;500 en het maandelijkse limiet &euro;7.000. Er worden geen kosten in rekening gebracht voor opnames.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Heeft <?php echo SITE_NAME; ?> een VIP-programma?</summary>
        <div class="faq-answer">
          <p>Ja. <?php echo SITE_NAME; ?> heeft een VIP-programma met 5 niveaus. Voordelen zijn onder meer hogere cashbackpercentages (tot 15%), verhoogde opnamelimieten, prioriteitsverwerking, persoonlijke aanbiedingen en een persoonlijke VIP-manager op de hoogste niveaus. De exacte criteria voor het doorstromen tussen niveaus worden niet openbaar gemaakt.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kan ik op mijn telefoon spelen?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> heeft geen mobiele app, maar de website is volledig geschikt voor mobiel gebruik. Je hebt toegang tot alle spellen, de sportsbook en accountfuncties via elke moderne smartphone of tablet browser.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Hoe bereik ik de klantenservice?</summary>
        <div class="faq-answer">
          <p>Je kunt het ondersteuningsteam bereiken via 24/7 live chat direct op de website, of per e-mail op support@westace.com. Ga voor meer informatie naar de <a href="<?php echo $lang_prefix; ?>/support">Ondersteuningspagina</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
