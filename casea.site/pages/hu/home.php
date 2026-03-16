<?php
/**
 * Homepage – Hungarian
 */
$page_title = SITE_NAME . ' Casino - ' . SITE_TAGLINE;
$page_description = SITE_NAME . ' Casino több mint 10 000 kaszinójátékot, élő osztós asztalokat, sportfogadást 30+ sportágban és akár EUR 500 + 200 ingyenes pörgetés üdvözlő bónuszt kínál. Csatlakozz most és játssz.';
$current_page = 'home';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__badge">Nyitva – játékosokat fogadunk világszerte</div>
    <h1>
      <span class="brand-name"><?php echo SITE_NAME; ?></span><br>
      <span class="brand-type">Casino</span>
    </h1>
    <p class="hero__subtitle">Több mint 10 000 játék 90+ szolgáltatótól, teljes sportfogadási kínálat 30+ sportággal, élő osztós asztalok és jutalmak, amelyek tényleg megérik.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Üdvözlő Csomag</div>
      <div class="hero__bonus-value"><?php echo WELCOME_BONUS; ?></div>
      <div class="hero__bonus-extra">Sport Bónusz: 100% akár &euro;100 &middot; Min. befizetés &euro;20</div>
    </div>
    <div class="hero__ctas">
      <a href="/play" class="btn btn--primary btn--lg" rel="nofollow"><?php echo CTA_LABEL; ?></a>
      <a href="/bonuses" class="btn btn--outline btn--lg">Bónuszok Megtekintése</a>
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
      <h2>Üdvözlünk a <?php echo SITE_NAME; ?> Casinóban</h2>
      <p>A <?php echo SITE_NAME; ?> egy modern online szerencsejáték-platform, ahol a játékosok egyetlen helyen fedezhetnek fel több ezer fogadási lehetőséget. A több mint 10 000 terméket tartalmazó kínálat nyerőgépeket, minijátékokat, virtuális kártya- és asztali játékokat, valamint élő osztós lobbik széles választékát kínálja, így egy pillanatra sem unatkozhatsz. A sportfogadási oldalon kedvező szorzók várnak több mint 30 sportágban, legyen szó labdarúgásról, kosárlabdáról, teniszről vagy e-sportokról.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Indulás</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Játékok</th><td>10 000+ (nyerőgépek, asztali játékok, élő kaszinó, azonnali játékok)</td></tr>
        <tr><th>Szolgáltatók</th><td>90+ (Pragmatic Play, Evolution, Microgaming, NetEnt, Playtech és mások)</td></tr>
        <tr><th>Sportágak</th><td>30+ sportág, e-sportok, virtuális sportok</td></tr>
        <tr><th>Üdvözlő Bónusz</th><td><?php echo WELCOME_BONUS_TEXT; ?></td></tr>
        <tr><th>Min. Befizetés</th><td>EUR 10 (EUR 20 a legtöbb bónuszhoz)</td></tr>
        <tr><th>Valuták</th><td>EUR, USD, CAD, AUD, CHF, HUF, NOK, PLN, NZD, CZK, BRL, CLP, PEN</td></tr>
        <tr><th>Támogatás</th><td>0-24 élő chat és email</td></tr>
        <tr><th>Mobil</th><td>Teljesen reszponzív, nem szükséges alkalmazás</td></tr>
      </table>

      <h3>Miért Választják a Játékosok a <?php echo SITE_NAME; ?>-t</h3>
      <ul class="check-list">
        <li>Több mint 10 000 játék 90+ megbízható szolgáltatótól</li>
        <li>Teljes sportfogadás pre-match és élő fogadásokkal 30+ sportágban</li>
        <li>Többféle üdvözlő bónusz kaszinóhoz és sportfogadáshoz</li>
        <li>Heti újratöltési bónuszok, cashback ajánlatok és hűségbolt</li>
        <li>VIP program személyes fiókkezelővel és magasabb kifizetési limitekkel</li>
        <li>Fizetés Visa, Mastercard, Skrill, kriptovaluta és más módokon</li>
        <li>0-24 ügyfélszolgálat élő chaten és emailen</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Kaszinójátékok</h4>
          <p>Nyerőgépek ezrei, blackjack és rulett változatok, póker, baccarat, game shows, azonnali játékok és élő osztós asztalok a legjobb stúdióktól.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Sportfogadás</h4>
          <p>Pre-match és élő fogadás a legnagyobb ligákra, mint az UEFA Champions League, NBA, NHL és Grand Slam tornák. Virtuális sportok és e-sportok szintén elérhetők.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127873;</div>
          <h4>Promóciók</h4>
          <p>Üdvözlő bónuszok, heti újratöltési ajánlatok, többféle cashback program, hűségbolt, kihívások és különleges ajánlatok a hét minden napján.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Social Proof / Recent Winners -->
  <section class="content-section winners-section" id="winners">
    <div class="container">
      <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--space-4);margin-bottom:var(--space-2)">
        <h2 style="margin-bottom:0">Legutóbbi Nyertesek</h2>
        <span class="live-dot">Live</span>
      </div>
      <div class="jackpot-label">Aktuális Jackpot</div>
      <div class="jackpot-amount" id="jackpotCounter">&euro;2,847,391</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Népszerű Játékok a <?php echo SITE_NAME; ?>-nál</h2>
      <p>Böngészd a kaszinó legnépszerűbb címeit. A magas volatilitású nyerőgépektől a klasszikus asztali játékokon át az élő osztós élményekig minden típusú játékos talál magának valót.</p>

      <div class="game-tabs">
        <button class="game-tab active">Összes Játék</button>
        <button class="game-tab">Nyerőgépek</button>
        <button class="game-tab">Élő Kaszinó</button>
        <button class="game-tab">Asztali Játékok</button>
        <button class="game-tab">Game Shows</button>
        <button class="game-tab">Crash Games</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Legnépszerűbb Játékszolgáltatók</h3>
          <p>A kínálatot a stúdiók széles köre biztosítja, az iparági vezetőktől az ígéretes független fejlesztőkig:</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">90+ további</span>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/casea-games.png" alt="<?php echo SITE_NAME; ?> Casino játéklobbi a legjobb nyerőgépekkel és szolgáltatókkal" style="max-width:300px;width:100%;">
        </div>
      </div>
    </div>
  </section>

  <!-- Sportsbook -->
  <section class="content-section" id="sports">
    <div class="container">
      <h2>Sportfogadás</h2>
      <div class="two-col">
        <div>
          <p>A <?php echo SITE_NAME; ?> sportfogadási szekciója pre-match és élő fogadásokat kínál mind a nagy, mind a kisebb versenyekre. A labdarúgás rajongói az UEFA Champions League-től az alacsonyabb osztályú ligákig mindenre fogadhatnak, míg a kosárlabda, tenisz, jégkorong és egy tucat további sportág tölti ki a kínálatot.</p>
          <p>A virtuális sportok, mint a labdarúgás, kosárlabda és agárverseny, éjjel-nappal elérhetők. Az e-sport fogadás a Dota 2, Counter-Strike, League of Legends, Call of Duty és más népszerű címekre terjed ki.</p>

          <h3>Elérhető Sportágak</h3>
          <ul class="check-list">
            <li>Labdarúgás (UEFA Champions League, Premier League, Bundesliga, Serie A, La Liga)</li>
            <li>Kosárlabda (NBA, EuroLeague, nemzeti ligák)</li>
            <li>Tenisz (Grand Slam, ATP, WTA)</li>
            <li>Jégkorong (NHL, KHL, SHL)</li>
            <li>E-sportok (Dota 2, CS2, League of Legends, Call of Duty)</li>
            <li>Virtuális sportok, lóversenyek és 25+ további</li>
          </ul>
        </div>
        <div>
          <div class="highlight-box">
            <h4>Sport Üdvözlő Bónusz</h4>
            <p>Az új játékosok 100%-os egyezést igényelhetnek első sport befizetésükre, akár EUR 100 értékben. A finn, német, norvég, svájci és osztrák játékosok akár EUR 200-ra is jogosultak. A bónuszhoz minimum EUR 20-as befizetés és 5x vagy 6x fogadási követelmény szükséges, országtól függően.</p>
          </div>
          <table class="quick-table" style="margin-top: var(--space-6);">
            <tr><th>Fogadás Típusok</th><td>Pre-match, élő, outright, kombinált</td></tr>
            <tr><th>Sportágak</th><td>30+ beleértve az e-sportokat és virtuálisokat</td></tr>
            <tr><th>Funkciók</th><td>Kombó boost, korai kifizetés, emelt szorzók</td></tr>
            <tr><th>Cashback</th><td>Heti 10% akár EUR 500</td></tr>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section content-section--alt" id="payments">
    <div class="container">
      <h2>Fizetési Módok</h2>
      <p>A <?php echo SITE_NAME; ?> számos népszerű fizetési lehetőséget támogat. Az elérhetőség országodtól függ, és a befizetések már EUR 10-tól indulnak.</p>

      <table class="quick-table">
        <tr><th>Befizetési Módok</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Min. Befizetés</th><td>EUR 10 (EUR 20 a legtöbb bónuszhoz)</td></tr>
        <tr><th>Min. Kifizetés</th><td>EUR 10</td></tr>
        <tr><th>Max. Kifizetés (Napi)</th><td>EUR 500 (VIP: EUR 1 500)</td></tr>
        <tr><th>Max. Kifizetés (Havi)</th><td>EUR 7 000 (VIP: EUR 20 000)</td></tr>
        <tr><th>Feldolgozási Idő</th><td>Akár 72 óra (e-pénztárcák és kriptovaluták a leggyorsabbak)</td></tr>
        <tr><th>Valuták</th><td>EUR, USD, CAD, AUD, CHF, HUF, NOK, PLN, NZD, CZK, BRL, CLP, PEN</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">A kifizetési módok, limitek, díjak és tippek részletes áttekintéséért látogass el a <a href="/withdrawal">Kifizetések oldalra</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section" id="mobile">
    <div class="container">
      <h2>Mobil Kaszinó</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p>A <?php echo SITE_NAME; ?> nem rendelkezik dedikált mobilalkalmazással, de a weboldal teljesen kompatibilis minden okostelefonnal és táblagéppel. A böngésző alapú platform ugyanazokat a funkciókat, játékokat és fiókkezelő eszközöket nyújtja, mint az asztali verzió. Nincs szükség letöltésre -- egyszerűen nyisd meg a mobilböngészőt, jelentkezz be és játssz.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/casea-mobile.png" alt="<?php echo SITE_NAME; ?> Casino mobilon" style="max-width:320px;width:100%;">
        </div>
      </div>
      <ul class="check-list">
        <li>Teljes játékkönyvtár elérhető mobilböngészőkön</li>
        <li>Sportfogadás élő piacokkal</li>
        <li>Befizethetsz és kifizettethetsz közvetlenül a telefonodról</li>
        <li>Élő chat támogatás mobilon is elérhető</li>
        <li>Nem kell alkalmazást letölteni -- működik iOS-en és Androidon</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section content-section--alt" id="faq">
    <div class="container container--narrow">
      <h2>Gyakran Ismételt Kérdések</h2>

      <details class="faq-item">
        <summary>Milyen játékokat játszhatok a <?php echo SITE_NAME; ?> Casinóban?</summary>
        <div class="faq-answer">
          <p>A <?php echo SITE_NAME; ?> több mint 90 szolgáltatóval dolgozik együtt, köztük Pragmatic Play, Evolution, Microgaming és Red Tiger. Játszhatsz videó nyerőgépeken, jackpot nyerőgépeken, Megaways címeken, blackjack változatokon, ruletten, baccarat-on, pókeren, game shows-on, crash games-en és még sok máson. A sportfogadás 30+ sportágat fed le pre-match és élő fogadási lehetőségekkel.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mi az üdvözlő bónusz a <?php echo SITE_NAME; ?> Casinóban?</summary>
        <div class="faq-answer">
          <p>Az új kaszinójátékosok 100%-os üdvözlő bónuszt igényelhetnek akár EUR 500 értékben, plusz 200 ingyenes pörgetést az első befizetésükre. A sportfogadók 100%-os egyezésre jogosultak akár EUR 100-ig (vagy EUR 200-ig országtól függően). A minimális befizetés EUR 20.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mekkora a maximális kifizetés a <?php echo SITE_NAME; ?> Casinóban?</summary>
        <div class="faq-answer">
          <p>A standard játékosok naponta akár EUR 500-t, havonta pedig akár EUR 7 000-t fizethetnek ki. A VIP tagok magasabb limiteket élveznek -- napi EUR 1 500 és havi EUR 20 000. A minimális kifizetés EUR 10.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Van VIP program a <?php echo SITE_NAME; ?>-nál?</summary>
        <div class="faq-answer">
          <p>Igen. A <?php echo SITE_NAME; ?> hűségalapú VIP programot működtet, ahol a rangod a játékod alapján emelkedik. Az előnyök közé tartozik a személyes fiókkezelő, magasabb kifizetési limitek, exkluzív promóciók és heti cashback ajánlatok, amelyek a szinteddel együtt növekednek.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Játszhatok a telefonomról?</summary>
        <div class="faq-answer">
          <p>A <?php echo SITE_NAME; ?> nem rendelkezik mobilalkalmazással, de a weboldal teljesen mobilbarát. Az összes játékot, sportfogadást és fiókfunkciót elérheted bármely modern okostelefon vagy táblagép böngészőjén keresztül.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Hogyan érhetem el az ügyfélszolgálatot?</summary>
        <div class="faq-answer">
          <p>A támogató csapatot élő chaten vagy emailen érheted el a nap 24 órájában. Az élő chat közvetlenül a weboldalon érhető el gyors válaszokért. További részletekért látogass el a <a href="/support">Támogatás oldalra</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
