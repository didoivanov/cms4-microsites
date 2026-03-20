<?php
/**
 * Homepage - WestAce (Czech / CS)
 */
$page_title = 'WestAce Casino - 7 000+ her, sportovní sázky a uvítací bonus až 50 000 Kč';
$page_description = SITE_NAME . ' Casino nabízí 7 000+ her od 100+ providerů, kompletní sportovní sázky s live přenosem, živé dealer stoly a uvítací bonus 100% až 25 000 Kč + 50 zatočení zdarma. Zaregistrujte se a hrajte.';
$current_page = 'home';
$lang_prefix = '/cs';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__badge"><?php echo __('hero_badge', 'Nyní otevřeno - 7 000+ her a live sportovní sázky'); ?></div>
    <h1>
      <span class="brand-name"><?php echo SITE_NAME; ?></span><br>
      <span class="brand-type">Casino</span>
    </h1>
    <p class="hero__subtitle">Přes 7 000 her od 100+ providerů, živé dealer stoly, kompletní sportovní sázky s live kurzami a uvítací balíček odměňující vaše první tři vklady.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Uvítací balíček</div>
      <div class="hero__bonus-value"><?php echo WELCOME_BONUS; ?></div>
      <div class="hero__bonus-extra">1. vklad: 100% až 25 000 Kč + 50 zatočení zdarma &middot; Min. vklad 500 Kč</div>
    </div>
    <div class="hero__ctas">
      <a href="/play" class="btn btn--primary btn--lg" rel="nofollow"><?php echo __('cta_play', 'Hrát Nyní'); ?></a>
      <a href="<?php echo $lang_prefix; ?>/bonuses" class="btn btn--outline btn--lg">Zobrazit bonusy</a>
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
      <h2>Vítejte v <?php echo SITE_NAME; ?> Casino</h2>
      <p><?php echo SITE_NAME; ?> je online casino a sázková kancelář spuštěná v roce 2026. Platforma sdružuje více než 7 000 her od 100+ providerů - zahrnuje automaty, živé dealer lobby, stolní hry, crash hry, jackpotové tituly i game shows. Vedle kasina nabízíme kompletní sportovní sázky s předzápasovými a live trhy, virtuální sporty a dostihy. Noví hráči mohou využít tříkrokový uvítací balíček v celkové hodnotě až 50 000 Kč + 150 zatočení zdarma.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Spuštění</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Hry</th><td>7 000+ (automaty, stolní hry, živé casino, crash hry, jackpoty, game shows)</td></tr>
        <tr><th>Provideři</th><td>100+ (Pragmatic Play, Playtech, Novomatic, Red Tiger, Yggdrasil, BGaming, Hacksaw Gaming a další)</td></tr>
        <tr><th>Uvítací bonus</th><td><?php echo WELCOME_BONUS_TEXT; ?></td></tr>
        <tr><th>Min. vklad</th><td>250 Kč</td></tr>
        <tr><th>Měna</th><td>CZK</td></tr>
        <tr><th>Podpora</th><td>Live chat 24/7 + e-mail</td></tr>
        <tr><th>Sportovní sázky</th><td>Ano (sport, live sázení, virtuální sporty, dostihy)</td></tr>
        <tr><th>Mobil</th><td>Plně responzivní web, aplikace není nutná</td></tr>
      </table>

      <h3>Proč hráči volí <?php echo SITE_NAME; ?></h3>
      <ul class="check-list">
        <li>Přes 7 000 her od 100+ licencovaných providerů</li>
        <li>Tříkrokový uvítací balíček až 50 000 Kč + 150 zatočení zdarma</li>
        <li>Kompletní sportovní sázky s live sázením, virtuálními sporty a dostihami</li>
        <li>Živé casino s ruletou, blackjackem, baccaratem, kostkami a pokerem</li>
        <li>Denní cashback až 15 % s požadavkem na protočení pouze 1x</li>
        <li>5stupňový VIP program s osobním manažerem a vyššími limity</li>
        <li>Podpora kryptoměn - samostatný uvítací bonus a reload nabídky</li>
        <li>Podpora 24/7 přes live chat a e-mail</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Kasinové hry</h4>
          <p>Tisíce automatů, varianty blackjacku a rulety, poker, baccarat, crash hry a živé dealer stoly od studií jako Pragmatic Play, Playtech, Novomatic, Red Tiger a Yggdrasil.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127183;</div>
          <h4>Živé casino</h4>
          <p>Živé dealer hry - ruleta, blackjack, baccarat, kostky a poker. Praví krupiéři vysílající v HD z profesionálních studií nepřetržitě celý den.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Sportovní sázky</h4>
          <p>Kompletní sázková platforma s předzápasovými i live trhy. Sázejte na Fortuna Ligu, zápasy Sparty Praha, Slavie Praha, Champions League i hokejovou Extraligu nebo NHL.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Social Proof / Recent Winners -->
  <section class="content-section winners-section" id="winners">
    <div class="container">
      <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--space-4);margin-bottom:var(--space-2)">
        <h2 style="margin-bottom:0">Nedávní výherci</h2>
        <span class="live-dot">Live</span>
      </div>
      <div class="jackpot-label">Aktuální jackpotový pool</div>
      <div class="jackpot-amount" id="jackpotCounter">71 184 775 Kč</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Oblíbené hry v <?php echo SITE_NAME; ?></h2>
      <p>Prohlédněte si nejhranější tituly v kasinu. Od vysokokolísavých automatů po klasické stolní hry, živé dealer místnosti a sportovní trhy - každý hráč najde to, co hledá.</p>

      <div class="game-tabs">
        <button class="game-tab active">Všechny hry</button>
        <button class="game-tab">Automaty</button>
        <button class="game-tab">Živé casino</button>
        <button class="game-tab">Stolní hry</button>
        <button class="game-tab">Crash hry</button>
        <button class="game-tab">Jackpoty</button>
        <button class="game-tab">Sport</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Přední herní provideři</h3>
          <p>Náš herní katalog tvoří studia od lídrů odvětví až po perspektivní nezávislé vývojáře:</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">100+ celkem</span>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-games-screen.png" alt="<?php echo SITE_NAME; ?> Casino herní lobby s top automaty od providerů Pragmatic Play, Playtech a Novomatic" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section" id="payments">
    <div class="container">
      <h2>Platební metody</h2>
      <p><?php echo SITE_NAME; ?> podporuje širokou škálu platebních metod - kreditní karty, předplacené karty, e-peněženky i kryptoměny. Vklady začínají od 250 Kč a všechny vklady i výběry jsou bez poplatků.</p>

      <table class="quick-table">
        <tr><th>Metody vkladu</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Min. vklad</th><td>250 Kč</td></tr>
        <tr><th>Min. výběr</th><td>250 Kč</td></tr>
        <tr><th>Max. výběr</th><td>12 500 Kč/den, 175 000 Kč/měsíc</td></tr>
        <tr><th>Doba zpracování</th><td>24-72 hodin</td></tr>
        <tr><th>Měna</th><td>CZK</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">Podrobný přehled metod výběru, limitů, poplatků a tipů pro rychlejší výplatu najdete na stránce <a href="<?php echo $lang_prefix; ?>/withdrawal">Výběry</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section content-section--alt" id="mobile">
    <div class="container">
      <h2>Mobilní casino</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p><?php echo SITE_NAME; ?> nemá samostatnou mobilní aplikaci, ale web je plně kompatibilní se všemi chytrými telefony a tablety. Prohlížečová platforma nabízí stejné funkce, hry a nástroje správy účtu jako desktopová verze. Bez stahování - stačí otevřít mobilní prohlížeč, přihlásit se a hrát.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/westace-mobile.png" alt="<?php echo SITE_NAME; ?> Casino mobilní lobby s uvítacím bonusem a navigací her" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>
      <ul class="check-list">
        <li>Kompletní herní knihovna přístupná v mobilním prohlížeči</li>
        <li>Živé dealer stoly a sportovní sázky kdekoliv a kdykoliv</li>
        <li>Vklady a výběry přímo z telefonu</li>
        <li>Live chat podpora dostupná na mobilních zařízeních</li>
        <li>Bez stahování aplikace - funguje na iOS i Androidu</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section" id="faq">
    <div class="container container--narrow">
      <h2>Nejčastější dotazy</h2>

      <details class="faq-item">
        <summary>Jaké hry mohu hrát v <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> spolupracuje se 100+ providery - Pragmatic Play, Playtech, Novomatic, Red Tiger, Yggdrasil, BGaming, Hacksaw Gaming, Quickspin a dalšími. K dispozici jsou videosloty, jackpotové automaty, blackjack, ruleta, baccarat, poker, crash hry, game shows a živé dealer tituly. Platforma nabízí také kompletní sportovní sázky s live sázením, virtuálními sporty a dostihami.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jaký je uvítací bonus v <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>Noví hráči získají tříkrokový uvítací balíček: 100% až 25 000 Kč + 50 zatočení zdarma na první vklad, 100% až 12 500 Kč + 50 zatočení zdarma na druhý vklad a 100% až 12 500 Kč + 50 zatočení zdarma na třetí vklad. Celková hodnota: až 50 000 Kč + 150 zatočení zdarma. Minimální vklad je 500 Kč na každý krok. Požadavky na protočení jsou 35x (bonus + vklad).</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jak rychle jsou výběry zpracovány?</summary>
        <div class="faq-answer">
          <p>Výběry jsou zpracovány do 24 až 72 hodin. Minimální výběr je 250 Kč u všech platebních metod. Denní limit výběru je 12 500 Kč a měsíční limit je 175 000 Kč. Za výběry se neúčtují žádné poplatky.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Má <?php echo SITE_NAME; ?> VIP program?</summary>
        <div class="faq-answer">
          <p>Ano. <?php echo SITE_NAME; ?> provozuje 5stupňový VIP program. Výhody zahrnují vyšší procenta cashbacku (až 15 %), zvýšené limity výběrů, prioritní zpracování, personalizované nabídky a osobního VIP manažera na nejvyšších úrovních. Přesná kritéria pro postup mezi úrovněmi nejsou veřejně zveřejněna.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mohu hrát na telefonu?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> nemá mobilní aplikaci, ale web je plně přizpůsoben pro mobilní zařízení. Všechny hry, sportovní sázky a funkce účtu jsou dostupné přes prohlížeč jakéhokoliv moderního chytrého telefonu nebo tabletu.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jak se spojím se zákaznickou podporou?</summary>
        <div class="faq-answer">
          <p>S týmem podpory se můžete spojit přes live chat 24/7 přímo na webu nebo e-mailem na adrese support@westace.com. Další informace najdete na stránce <a href="<?php echo $lang_prefix; ?>/support">Podpora</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
