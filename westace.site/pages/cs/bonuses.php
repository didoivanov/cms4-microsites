<?php
/**
 * Bonuses Page - WestAce (Czech / CS)
 */
$page_title = 'WestAce Bonusy - Uvítací bonus, zatočení zdarma, cashback a VIP odměny';
$page_description = 'Všechny bonusy ' . SITE_NAME . ' Casino na jednom místě. Uvítací balíček až 50 000 Kč + 150 zatočení zdarma na 3 vklady, krypto uvítací bonus, týdenní reloady, denní cashback, cashback v živém casinu, VIP program a další.';
$current_page = 'bonuses';
$lang_prefix = '/cs';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Casino bonusy';
$hero_description = 'Všechny aktivní akce, uvítací nabídky a věrnostní odměny, které jsou právě dostupné. Před uplatněním jakékoli nabídky si prosím přečtěte podmínky.';
$hero_cta = 'Získat bonus';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Welcome Casino Package -->
  <section class="content-section" id="welcome">
    <div class="container">
      <h2>Uvítací balíček pro nové hráče</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Noví hráči v <?php echo SITE_NAME; ?> mohou získat tříkrokový uvítací balíček v celkové hodnotě až 50 000 Kč + 150 zatočení zdarma. Každý vklad přináší 100% bonusovou shodu a 50 zatočení zdarma. Minimální kvalifikační vklad je 500 Kč na každý krok. Žádný promo kód není potřeba - stačí navštívit pokladnu, vybrat nabídku a provést kvalifikační vklad.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-bonuses-screen.png" alt="<?php echo SITE_NAME; ?> Casino stránka akcí s uvítacím bonusem a aktivními nabídkami" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <!-- Casino Welcome - Deposit 1 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">1. vklad: 100% až 25 000 Kč + 50 zatočení zdarma</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Proveďte první vklad alespoň 500 Kč a získejte 100% bonus až 25 000 Kč. K tomu obdržíte 50 zatočení zdarma na vybraném automatu. Požadavky na protočení jsou 35x od součtu bonusu a vkladu. Výhry ze zatočení zdarma mají samostatný požadavek na protočení 40x.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. vklad</div>
            <div class="bonus-detail__value">500 Kč</div>
          </div>
          <div>
            <div class="bonus-detail__label">Protočení</div>
            <div class="bonus-detail__value">35x (B+V)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Protočení ZZ</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Zatočení zdarma</div>
            <div class="bonus-detail__value">50 ZZ</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome - Deposit 2 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2. vklad: 100% až 12 500 Kč + 50 zatočení zdarma</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Druhý vklad vás opravňuje k 100% bonusu až 12 500 Kč plus dalším 50 zatočením zdarma. Platí stejné požadavky na protočení jako u bonusu na první vklad.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. vklad</div>
            <div class="bonus-detail__value">500 Kč</div>
          </div>
          <div>
            <div class="bonus-detail__label">Protočení</div>
            <div class="bonus-detail__value">35x (B+V)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Protočení ZZ</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Zatočení zdarma</div>
            <div class="bonus-detail__value">50 ZZ</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome - Deposit 3 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">3. vklad: 100% až 12 500 Kč + 50 zatočení zdarma</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Třetí vklad přináší 100% bonus až 12 500 Kč a 50 zatočení zdarma. Celkový uvítací balíček tak dosahuje hodnoty 50 000 Kč v bonusových prostředcích a 150 zatočení zdarma na vaše první tři vklady.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. vklad</div>
            <div class="bonus-detail__value">500 Kč</div>
          </div>
          <div>
            <div class="bonus-detail__label">Protočení</div>
            <div class="bonus-detail__value">35x (B+V)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Protočení ZZ</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Zatočení zdarma</div>
            <div class="bonus-detail__value">50 ZZ</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Crypto Welcome -->
  <section class="content-section content-section--alt" id="crypto-welcome">
    <div class="container">
      <h2>Krypto uvítací bonus</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Krypto: 200% až 3 000 USDT</div>
          <span class="bonus-card__tag">Krypto</span>
        </div>
        <p>Pokud dáváte přednost vkladům v kryptoměnách, máme pro vás samostatnou uvítací nabídku. Proveďte první krypto vklad alespoň 100 USDT a získejte 200% bonusovou shodu až 3 000 USDT. Požadavky na protočení jsou 40x od výše bonusu.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. vklad</div>
            <div class="bonus-detail__value">100 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Protočení</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max. bonus</div>
            <div class="bonus-detail__value">3 000 USDT</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Weekly Reload -->
  <section class="content-section" id="weekly-reload">
    <div class="container">
      <h2>Týdenní reload</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Týdenní reload: 70 zatočení zdarma</div>
          <span class="bonus-card__tag">Po-Čt</span>
        </div>
        <p>Každý týden od pondělí do čtvrtka proveďte vklad alespoň 500 Kč a získejte 70 zatočení zdarma na vybraném automatu. Výhry ze zatočení zdarma podléhají požadavku na protočení 40x a musí být využity do 10 dnů.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. vklad</div>
            <div class="bonus-detail__value">500 Kč</div>
          </div>
          <div>
            <div class="bonus-detail__label">Zatočení zdarma</div>
            <div class="bonus-detail__value">70 ZZ</div>
          </div>
          <div>
            <div class="bonus-detail__label">Protočení</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Platnost</div>
            <div class="bonus-detail__value">10 dní</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Weekend Reload -->
  <section class="content-section content-section--alt" id="weekend-reload">
    <div class="container">
      <h2>Víkendový reload bonus</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Víkend: 50% až 12 500 Kč + 70 zatočení zdarma</div>
          <span class="bonus-card__tag">Víkend</span>
        </div>
        <p>Rozjeďte víkend s 50% bonusem až 12 500 Kč. Pokud váš vklad dosáhne alespoň 1 250 Kč, získáte navíc 70 zatočení zdarma. Vklady pod 1 250 Kč se stále kvalifikují na 50% shodu, zatočení zdarma však nejsou součástí nabídky. Požadavky na protočení jsou 35x od výše bonusu.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. vklad</div>
            <div class="bonus-detail__value">500 Kč</div>
          </div>
          <div>
            <div class="bonus-detail__label">Min. vklad pro ZZ</div>
            <div class="bonus-detail__value">1 250 Kč</div>
          </div>
          <div>
            <div class="bonus-detail__label">Protočení</div>
            <div class="bonus-detail__value">35x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Zatočení zdarma</div>
            <div class="bonus-detail__value">70 ZZ</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Crypto Reloads -->
  <section class="content-section" id="crypto-reloads">
    <div class="container">
      <h2>Krypto reload bonusy</h2>
      <p>Hráči vkládající kryptoměnami mají přístup k exkluzivním týdenním a víkendovým reload nabídkám s vyšším procentem bonusu.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Krypto týdenní: 60% až 1 000 USDT</div>
          <span class="bonus-card__tag">Krypto</span>
        </div>
        <p>Vložte alespoň 50 USDT v průběhu týdne a získejte 60% bonusovou shodu až 1 000 USDT. Protočení je 30x od výše bonusu. Maximální výhra z tohoto bonusu je omezena na 5násobek výše bonusu.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. vklad</div>
            <div class="bonus-detail__value">50 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Protočení</div>
            <div class="bonus-detail__value">30x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max. výhra</div>
            <div class="bonus-detail__value">5x bonus</div>
          </div>
        </div>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Krypto víkend: 75% až 750 USDT + 100 ZZ</div>
          <span class="bonus-card__tag">Krypto</span>
        </div>
        <p>O víkendech se krypto vklady od 75 USDT kvalifikují na 75% bonus až 750 USDT plus 100 zatočení zdarma. Maximální výhra z tohoto bonusu je omezena na 5násobek výše bonusu.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. vklad</div>
            <div class="bonus-detail__value">75 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Zatočení zdarma</div>
            <div class="bonus-detail__value">100 ZZ</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max. výhra</div>
            <div class="bonus-detail__value">5x bonus</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Daily Cashback -->
  <section class="content-section content-section--alt" id="cashback">
    <div class="container">
      <h2>Denní cashback</h2>
      <p>Hráči na úrovních VIP 2 až 5 dostávají denní cashback z čistých ztrát ze sázek za skutečné peníze v casinu. Procento roste s vaší VIP úrovní a požadavek na protočení je jen 1x - zahrajte jednou a cashback je váš.</p>

      <div class="data-table-wrap">
        <table class="data-table">
          <thead>
            <tr>
              <th>VIP úroveň</th>
              <th>Cashback %</th>
              <th>Min. cashback</th>
              <th>Max. cashback</th>
              <th>Protočení</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Úroveň 2</td>
              <td>3 %</td>
              <td>25 Kč</td>
              <td>2 500 Kč</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Úroveň 3</td>
              <td>5 %</td>
              <td>25 Kč</td>
              <td>5 000 Kč</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Úroveň 4</td>
              <td>10 %</td>
              <td>25 Kč</td>
              <td>7 500 Kč</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Úroveň 5</td>
              <td>15 %</td>
              <td>25 Kč</td>
              <td>10 000 Kč</td>
              <td>1x</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Live Cashback -->
  <section class="content-section" id="live-cashback">
    <div class="container">
      <h2>Cashback v živém casinu</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Live cashback: až 25 %</div>
          <span class="bonus-card__tag">Živé casino</span>
        </div>
        <p>Všichni hráči mohou získat až 25 % cashbacku z čistých ztrát v živých kasinových hrách, s maximální výplatou 7 500 Kč. Požadavek na protočení je pouze 1x. Tento cashback je však nutné vyžádat ručně přes live chat nebo e-mail každé pondělí mezi 06:00 a 23:59 UTC. Pokud okno pro uplatnění zmeškáte, cashback za daný týden propadá.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Max. cashback</div>
            <div class="bonus-detail__value">7 500 Kč</div>
          </div>
          <div>
            <div class="bonus-detail__label">Protočení</div>
            <div class="bonus-detail__value">1x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Den uplatnění</div>
            <div class="bonus-detail__value">Pondělí</div>
          </div>
          <div>
            <div class="bonus-detail__label">Okno uplatnění</div>
            <div class="bonus-detail__value">06:00-23:59 UTC</div>
          </div>
        </div>
      </div>

      <div class="highlight-box" style="margin-top: var(--space-4);">
        <h4>Jak uplatnit cashback v živém casinu</h4>
        <p>Kontaktujte náš tým podpory přes live chat nebo e-mail (support@westace.com) v pondělí mezi 06:00 a 23:59 UTC a požádejte o cashback z živého casina. Cashback se vypočítává z vašich čistých ztrát za předchozí týden a po zpracování žádosti je připsán na váš účet.</p>
      </div>
    </div>
  </section>

  <!-- VIP -->
  <section class="content-section content-section--alt" id="vip">
    <div class="container">
      <h2>VIP program</h2>
      <p>VIP program <?php echo SITE_NAME; ?> odměňuje věrné hráče prostřednictvím pěti úrovní. S postupem na vyšší příčky odemykáte lepší sazby cashbacku, vyšší limity výběrů, personalizované nabídky a osobního VIP manažera. Program je otevřen všem registrovaným hráčům.</p>

      <h3>VIP výhody</h3>
      <ul class="check-list">
        <li>Denní cashback rostoucí od 3 % do 15 % podle VIP úrovně</li>
        <li>Vyšší limity vkladů a výběrů na vyšších úrovních</li>
        <li>Osobní VIP manažer pro hráče na nejvyšší úrovni</li>
        <li>Personalizované bonusové nabídky a akce</li>
        <li>Prioritní podpora a rychlejší zpracování výběrů</li>
      </ul>

      <h3>Postup mezi úrovněmi</h3>
      <p>Přesná kritéria pro postup mezi VIP úrovněmi nejsou veřejně zveřejněna. Postup závisí na vaší celkové aktivitě v casinu. Kontaktujte náš tým podpory pro informace o vašem aktuálním VIP statusu a podmínkách pro dosažení další úrovně.</p>

      <table class="quick-table">
        <tr><th>Funkce</th><th>Podrobnosti</th></tr>
        <tr><td>VIP úrovně</td><td>5 stupňů</td></tr>
        <tr><td>Rozsah cashbacku</td><td>3 % (úroveň 2) až 15 % (úroveň 5)</td></tr>
        <tr><td>Protočení cashbacku</td><td>1x</td></tr>
        <tr><td>Osobní manažer</td><td>Dostupný na vyšších úrovních</td></tr>
        <tr><td>Postup</td><td>Na základě celkové aktivity (kritéria nejsou veřejná)</td></tr>
      </table>
    </div>
  </section>

  <!-- No-Deposit Info -->
  <section class="content-section" id="no-deposit">
    <div class="container container--narrow">
      <h2><?php echo SITE_NAME; ?> bonus bez vkladu</h2>
      <p>V současné době <?php echo SITE_NAME; ?> nenabízí bonus bez vkladu. Uvítací balíček vyžaduje minimální první vklad 500 Kč pro aktivaci. Sledujte sekci Akce a pravidelně se vracejte - naše nabídky se průběžně obměňují a v budoucnu mohou přibýt i akce bez vkladu.</p>
    </div>
  </section>

  <!-- Bonus FAQ -->
  <section class="content-section content-section--alt" id="bonus-faq">
    <div class="container container--narrow">
      <h2>Nejčastější dotazy k bonusům</h2>

      <details class="faq-item">
        <summary>Potřebuji promo kód pro uplatnění bonusu?</summary>
        <div class="faq-answer">
          <p>Ne. Všechny bonusy v <?php echo SITE_NAME; ?> lze uplatnit bez promo kódu. Stačí navštívit pokladnu, vybrat nabídku a provést kvalifikační vklad. Některé bonusy může být nutné aktivovat v sekci Moje bonusy ve vašem účtu.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jaká je celková hodnota uvítacího balíčku?</summary>
        <div class="faq-answer">
          <p>Celý uvítací balíček má hodnotu až 50 000 Kč v bonusových prostředcích plus 150 zatočení zdarma na tři vklady. Každý vklad přináší 100% shodu: až 25 000 Kč na první vklad a až 12 500 Kč na každý z dalších dvou.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mohu kombinovat více bonusů najednou?</summary>
        <div class="faq-answer">
          <p>Ne. Před uplatněním nového bonusu musíte dokončit nebo vzdát se aktivního bonusu. Bonusy nelze kombinovat.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Co se stane, pokud požádám o výběr před splněním požadavků na protočení?</summary>
        <div class="faq-answer">
          <p>Žádost o výběr před splněním požadavků na protočení způsobí zrušení bonusu a veškerých souvisejících výher. Před žádostí o výběr splňte kompletní protočení.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jak funguje denní cashback?</summary>
        <div class="faq-answer">
          <p>Denní cashback je dostupný pro VIP úrovně 2 až 5. Vypočítává se z čistých ztrát ze sázek za skutečné peníze v casinu. Procento se pohybuje od 3 % do 15 % podle vaší VIP úrovně. Požadavek na protočení je pouze 1x - stačí cashback jednou protočit před výběrem.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Přispívají všechny hry ke splnění protočení stejnou měrou?</summary>
        <div class="faq-answer">
          <p>Ne. Různé typy her přispívají různou mírou. Automaty obvykle přispívají 100 %, zatímco stolní hry a živé kasinové tituly mají nižší příspěvek. Přesnou tabulku příspěvků najdete v podmínkách bonusu.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Existuje samostatný bonus pro krypto vklady?</summary>
        <div class="faq-answer">
          <p>Ano. Hráči vkládající kryptoměnami mohou získat 200% uvítací bonus až 3 000 USDT, plus týdenní a víkendové krypto reload nabídky. Tyto jsou odděleny od standardních CZK bonusů a mají vlastní požadavky na protočení.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
