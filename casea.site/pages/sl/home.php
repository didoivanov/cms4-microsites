<?php
/**
 * Homepage - Slovenian
 */
$page_title = SITE_NAME . ' Casino - ' . SITE_TAGLINE;
$page_description = SITE_NAME . ' Casino ponuja več kot 10.000 casino iger, žive delilce, športno stavnico z 30+ športi in dobrodošlični bonus do 500 EUR ter 200 brezplačnih vrtljajev. Pridruži se in igraj.';
$current_page = 'home';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__badge"><?php echo __('hero_badge', 'Zdaj odprto - sprejemamo igralce z vsega sveta'); ?></div>
    <h1>
      <span class="brand-name"><?php echo SITE_NAME; ?></span><br>
      <span class="brand-type">Casino</span>
    </h1>
    <p class="hero__subtitle"><?php echo __('hero_subtitle', 'Več kot 10.000 iger od 90+ ponudnikov, popolna športna stavnica za 30+ športov, mize z živimi delilci in nagrade, ki se resnično izplačajo.'); ?></p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label"><?php echo __('welcome_label', 'Dobrodošlični paket'); ?></div>
      <div class="hero__bonus-value">100% do &euro;500 + 200 brezplačnih vrtljajev</div>
      <div class="hero__bonus-extra">Športni bonus: 100% do &euro;100 &middot; Min. polog &euro;20</div>
    </div>
    <div class="hero__ctas">
      <a href="/play" class="btn btn--primary btn--lg" rel="nofollow"><?php echo __('cta_play', 'Igraj zdaj'); ?></a>
      <a href="<?php echo $lang_prefix; ?>/bonuses" class="btn btn--outline btn--lg">Poglej bonuse</a>
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
      <h2>Dobrodošli v <?php echo SITE_NAME; ?> Casino</h2>
      <p><?php echo SITE_NAME; ?> je sveža spletna igralniška platforma, kjer lahko igralci raziskujejo na tisoče stavnih možnosti na enem mestu. S katalogom več kot 10.000 izdelkov, ki zajemajo igralne avtomate, mini igre, virtualne karte in namizne igre ter izbor miz z živimi delilci, se nikoli ne boš dolgočasil. Na strani športne stavnice ugodne kvote za več kot 30 športov poskrbijo za nogometne, košarkarske, teniške in e-športne navdušence.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Ustanovljeno</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Igre</th><td>10.000+ (igralni avtomati, namizne igre, casino v živo, hitre igre)</td></tr>
        <tr><th>Ponudniki</th><td>90+ (Pragmatic Play, Evolution, Microgaming, NetEnt, Playtech in drugi)</td></tr>
        <tr><th>Športi</th><td>30+ športov, e-šport, virtualni športi</td></tr>
        <tr><th>Dobrodošlični bonus</th><td>100% do 500 EUR + 200 brezplačnih vrtljajev</td></tr>
        <tr><th>Min. polog</th><td>EUR 10 (EUR 20 za večino bonusov)</td></tr>
        <tr><th>Valute</th><td>EUR, USD, CAD, AUD, CHF, HUF, NOK, PLN, NZD, CZK, BRL, CLP, PEN</td></tr>
        <tr><th>Podpora</th><td>24/7 klepet v živo in e-pošta</td></tr>
        <tr><th>Mobilno</th><td>Popolnoma prilagojeno, aplikacija ni potrebna</td></tr>
      </table>

      <h3>Zakaj igralci izberejo <?php echo SITE_NAME; ?></h3>
      <ul class="check-list">
        <li>Več kot 10.000 iger od 90+ zaupanja vrednih ponudnikov</li>
        <li>Popolna športna stavnica s pred-tekmo in stavami v živo na 30+ športov</li>
        <li>Več možnosti dobrodošličnega bonusa za casino in šport</li>
        <li>Tedenski bonusi za dopolnitev, cashback ponudbe in trgovina z nagradami</li>
        <li>VIP program z osebnim upravljavcem računa in višjimi limiti izplačil</li>
        <li>Plačila prek Visa, Mastercard, Skrill, kriptovalut in drugih</li>
        <li>24/7 podpora strankam prek klepeta v živo in e-pošte</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Casino igre</h4>
          <p>Na tisoče igralnih avtomatov, variacije blackjacka in rulete, poker, baccarat, igre s TV voditeljem, hitre igre in mize z živimi delilci od vrhunskih studiev.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Športna stavnica</h4>
          <p>Stave pred tekmo in v živo na vse pomembne lige, kot so UEFA Liga prvakov, NBA, NHL in Grand Slam turnirji. Na voljo so tudi virtualni športi in e-šport.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127873;</div>
          <h4>Promocije</h4>
          <p>Dobrodošlični bonusi, tedenski bonusi za dopolnitev, več programov cashback, trgovina z nagradami, izzivi in posebne ponudbe skozi ves teden.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Social Proof / Recent Winners -->
  <section class="content-section winners-section" id="winners">
    <div class="container">
      <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--space-4);margin-bottom:var(--space-2)">
        <h2 style="margin-bottom:0">Nedavni zmagovalci</h2>
        <span class="live-dot">V živo</span>
      </div>
      <div class="jackpot-label">Trenutni jackpot sklad</div>
      <div class="jackpot-amount" id="jackpotCounter">&euro;2,847,391</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Priljubljene igre na <?php echo SITE_NAME; ?></h2>
      <p>Prebrskaj nekatere izmed najbolj igranih naslovov v casinu. Od igralnih avtomatov z visoko varianco do klasičnih namiznih iger in izkušenj z živimi delilci je tu nekaj za vsakega igralca.</p>

      <div class="game-tabs">
        <button class="game-tab active">Vse igre</button>
        <button class="game-tab">Igralni avtomati</button>
        <button class="game-tab">Casino v živo</button>
        <button class="game-tab">Namizne igre</button>
        <button class="game-tab">Igre s TV voditeljem</button>
        <button class="game-tab">Crash igre</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Najboljši ponudniki iger</h3>
          <p>Katalog poganjajo raznovrstni studii, od vodilnih v industriji do obetavnih neodvisnih razvijalcev:</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">90+ več</span>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/casea-games.png" alt="<?php echo SITE_NAME; ?> Casino igralna dvorana z najboljšimi avtomati in ponudniki" style="max-width:300px;width:100%;">
        </div>
      </div>
    </div>
  </section>

  <!-- Sportsbook -->
  <section class="content-section" id="sports">
    <div class="container">
      <h2>Športna stavnica</h2>
      <div class="two-col">
        <div>
          <p>Sekcija športne stavnice na <?php echo SITE_NAME; ?> pokriva stave pred tekmo in v živo na dogodke iz velikih in manjših tekmovanj. Nogometni navdušenci lahko stavijo na vse, od UEFA Lige prvakov do nižjeligaških tekem, medtem ko košarka, tenis, hokej in ducat drugih športov zapolnjujejo program.</p>
          <p>Virtualni športi, kot so nogomet, košarka in pasje dirke, so na voljo neprekinjeno. Stave na e-šport pokrivajo Dota 2, Counter-Strike, League of Legends, Call of Duty in druge priljubljene naslove.</p>

          <h3>Razpoložljivi športi</h3>
          <ul class="check-list">
            <li>Nogomet (UEFA Liga prvakov, Premier League, Bundesliga, Serie A, La Liga)</li>
            <li>Košarka (NBA, EuroLeague, nacionalne lige)</li>
            <li>Tenis (Grand Slam, ATP, WTA)</li>
            <li>Hokej na ledu (NHL, KHL, SHL)</li>
            <li>E-šport (Dota 2, CS2, League of Legends, Call of Duty)</li>
            <li>Virtualni športi, konjske dirke in 25+ več</li>
          </ul>
        </div>
        <div>
          <div class="highlight-box">
            <h4>Športni dobrodošlični bonus</h4>
            <p>Novi igralci lahko uveljavljajo 100% ujemanje na svoj prvi športni polog v vrednosti do EUR 100. Finski, nemški, norveški, švicarski in avstrijski igralci se kvalificirajo za do EUR 200. Bonus zahteva minimalni polog EUR 20 in 5x ali 6x zahtevo za obračanje, odvisno od tvoje države.</p>
          </div>
          <table class="quick-table" style="margin-top: var(--space-6);">
            <tr><th>Vrste stav</th><td>Pred tekmo, v živo, dolgoročne, kombinacije</td></tr>
            <tr><th>Športi</th><td>30+, vključno z e-športom in virtualnimi</td></tr>
            <tr><th>Funkcije</th><td>Boost za kombinacije, zgodnje izplačilo, izboljšane kvote</td></tr>
            <tr><th>Cashback</th><td>10% tedensko do EUR 500</td></tr>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section content-section--alt" id="payments">
    <div class="container">
      <h2>Plačilne metode</h2>
      <p><?php echo SITE_NAME; ?> podpira več priljubljenih plačilnih možnosti. Razpoložljivost je odvisna od tvoje države, pologe pa lahko opraviš že od EUR 10 naprej.</p>

      <table class="quick-table">
        <tr><th>Načini pologa</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Min. polog</th><td>EUR 10 (EUR 20 za večino bonusov)</td></tr>
        <tr><th>Min. izplačilo</th><td>EUR 10</td></tr>
        <tr><th>Maks. izplačilo (dnevno)</th><td>EUR 500 (VIP: EUR 1.500)</td></tr>
        <tr><th>Maks. izplačilo (mesečno)</th><td>EUR 7.000 (VIP: EUR 20.000)</td></tr>
        <tr><th>Čas obdelave</th><td>Do 72 ur (e-denarnice in kriptovalute so najhitrejše)</td></tr>
        <tr><th>Valute</th><td>EUR, USD, CAD, AUD, CHF, HUF, NOK, PLN, NZD, CZK, BRL, CLP, PEN</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">Za podrobno razčlenitev načinov izplačil, limitov, provizij in nasvetov za hitrejša izplačila obišči stran <a href="<?php echo $lang_prefix; ?>/withdrawal">Izplačila</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section" id="mobile">
    <div class="container">
      <h2>Mobilni casino</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p><?php echo SITE_NAME; ?> nima namenske mobilne aplikacije, toda spletna stran je popolnoma združljiva z vsemi pametnimi telefoni in tabličnimi računalniki. Platforma v brskalniku nudi enake funkcije, igre in orodja za upravljanje računa kot namizna različica. Prenosi niso potrebni -- preprosto odpri mobilni brskalnik, se prijavi in igraj.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/casea-mobile.png" alt="<?php echo SITE_NAME; ?> Casino na mobilnem telefonu" style="max-width:320px;width:100%;">
        </div>
      </div>
      <ul class="check-list">
        <li>Celotna knjižnica iger dostopna v mobilnih brskalnikih</li>
        <li>Športne stave s trgi v živo</li>
        <li>Polog in izplačilo neposredno s telefona</li>
        <li>Podpora prek klepeta v živo na mobilnem</li>
        <li>Prenos aplikacije ni potreben -- deluje na iOS in Android</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section content-section--alt" id="faq">
    <div class="container container--narrow">
      <h2>Pogosta vprašanja</h2>

      <details class="faq-item">
        <summary>Kakšne igre lahko igram na <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> sodeluje z več kot 90 ponudniki, vključno s Pragmatic Play, Evolution, Microgaming in Red Tiger. Igraš lahko video igralne avtomate, jackpot avtomate, Megaways naslove, variacije blackjacka, ruleto, baccarat, poker, igre s TV voditeljem, crash igre in še več. Športna stavnica pokriva 30+ športov s stavami pred tekmo in v živo.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kakšen je dobrodošlični bonus na <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>Novi casino igralci lahko uveljavljajo 100% dobrodošlični bonus do EUR 500 plus 200 brezplačnih vrtljajev ob prvem pologu. Igralci športne stavnice so upravičeni do 100% ujemanja do EUR 100 (ali EUR 200, odvisno od države). Minimalni polog je EUR 20.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kakšno je najvišje izplačilo na <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>Standardni igralci lahko izplačajo do EUR 500 na dan in EUR 7.000 na mesec. VIP člani imajo dostop do višjih limitov -- do EUR 1.500 dnevno in EUR 20.000 mesečno. Minimalno izplačilo je EUR 10.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Ali ima <?php echo SITE_NAME; ?> VIP program?</summary>
        <div class="faq-answer">
          <p>Da. <?php echo SITE_NAME; ?> ima večstopenjski program zvestobe, v katerem napreduješ z igranjem. Ugodnosti vključujejo osebnega upravljavca računa, višje limite izplačil, ekskluzivne promocije in tedenski cashback, ki narašča z tvojo stopnjo.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Ali lahko igram na telefonu?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> nima mobilne aplikacije, toda spletna stran je popolnoma prilagojena za mobilne naprave. Vse igre, športne stave in funkcije računa so dostopne prek katerega koli sodobnega brskalnika na pametnem telefonu ali tabličnem računalniku.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kako stopim v stik s podporo strankam?</summary>
        <div class="faq-answer">
          <p>Ekipo za podporo lahko kontaktiraš prek klepeta v živo ali e-pošte kadarkoli. Klepet v živo je na voljo neposredno na spletni strani za hitre odgovore. Za več podrobnosti obišči stran <a href="<?php echo $lang_prefix; ?>/support">Podpora</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
