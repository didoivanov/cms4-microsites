<?php
/**
 * Bonuses Page – Hungarian
 */
$page_title = SITE_NAME . ' Bónuszok - Üdvözlő Bónusz, Ingyenes Pörgetés, Promókódok & Befizetés Nélküli Ajánlatok';
$page_description = 'Az összes ' . SITE_NAME . ' Casino bónusz egy helyen. Üdvözlő bónusz akár EUR 500 + 200 ingyenes pörgetés, befizetés nélküli promókódok, heti újratöltési ajánlatok, cashback és VIP jutalmak.';
$current_page = 'bonuses';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Casino Bónuszok';
$hero_description = 'Minden aktív promóció, üdvözlő ajánlat és hűségjutalom, ami jelenleg elérhető. Kérjük, olvasd el a feltételeket, mielőtt bármely ajánlatot igénylnéd.';
$hero_cta = 'Igényeld a Bónuszod';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Welcome Bonuses -->
  <section class="content-section" id="welcome">
    <div class="container">
      <h2>Üdvözlő Bónuszok Új Játékosoknak</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <p style="margin-top:0">Az első befizetők a <?php echo SITE_NAME; ?>-nál többféle üdvözlő ajánlat közül választhatnak, attól függően, hogy kaszinójátékokat vagy sportfogadást preferálnak. Minden opció az első befizetésre érhető el, és nem kombinálható más promóciókkal.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/casea-bonuses.png" alt="<?php echo SITE_NAME; ?> Casino promóciók és üdvözlő bónusz ajánlatok" style="max-width:300px;width:100%;">
        </div>
      </div>

      <!-- Casino Welcome -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">100% akár &euro;500 + 200 Ingyenes Pörgetés</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Fizess be minimum EUR 20-t, hogy teljes 100%-os egyezést kapj az első befizetésedre, maximum EUR 500 értékben. Ezen felül 200 ingyenes pörgetést kapsz napi 20-as kötegekben, 10 egymást követő napon. Az első köteg rögtön a befizetésed után elérhető. Minden sorozatot 24 órán belül igényelned kell, különben lejár. Legalább EUR 10-es befizetés 1 Bonus Crab kreditet is ad, amivel próbálkozhatsz a Karom Gépen, ahol a nyeremények érmék, ingyenes pörgetések, bónuszok vagy készpénz jutalmak lehetnek.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Befizetés</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Fogadási Követelmény</div>
            <div class="bonus-detail__value">35x (bónusz + befizetés)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Ingyenes Pörgetés Fogadás</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Érvényesség</div>
            <div class="bonus-detail__value">10 nap</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max. Tét</div>
            <div class="bonus-detail__value">&euro;5</div>
          </div>
        </div>
      </div>

      <!-- Multi-Deposit Welcome -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">250% akár &euro;3 000 + 350 Ingyenes Pörgetés</div>
          <span class="bonus-card__tag">4 Befizetéses Csomag</span>
        </div>
        <p>Egy többlépcsős üdvözlő csomag, amely az első négy befizetésedre oszlik el. Az első befizetés 100%-ot ad akár EUR 1 000-ig, plusz 200 ingyenes pörgetést. A második 75%-os egyezést hoz akár EUR 500-ig. A harmadik 50%-ot ad akár EUR 500-ig, plusz 50 ingyenes pörgetést, a negyedik pedig 25%-kal zárja akár EUR 1 000-ig, plusz 100 ingyenes pörgetés.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Befizetés</div>
            <div class="bonus-detail__value">&euro;20 befizetésenként</div>
          </div>
          <div>
            <div class="bonus-detail__label">Fogadási Követelmény</div>
            <div class="bonus-detail__value">35x bónuszonként</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max. Kifizetés</div>
            <div class="bonus-detail__value">10x a bónusz összege</div>
          </div>
          <div>
            <div class="bonus-detail__label">Érvényesség</div>
            <div class="bonus-detail__value">10 nap bónuszonként</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">100% Sport Bónusz akár &euro;100</div>
          <span class="bonus-card__tag">Sport</span>
        </div>
        <p>A sportfogadók 100%-os egyezést kaphatnak első befizetésükre. A maximális bónusz régiónként változik: a finn, német, norvég, svájci és osztrák játékosok akár EUR 200-t kaphatnak. Az olasz játékosok akár EUR 150-t. A kazah, üzbég, kirgiz, tádzsik, grúz és azeri játékosok akár EUR 50-t kaphatnak. A bónusz aktiválásához a teljes befizetési összeget sportfogadásokra kell megtenni, legalább 1,50-es szorzóval.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Befizetés</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Fogadási Követelmény</div>
            <div class="bonus-detail__value">5x vagy 6x (országtól függően)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Min. Szorzó</div>
            <div class="bonus-detail__value">2.0 szimpla / 1.5 kombinált</div>
          </div>
          <div>
            <div class="bonus-detail__label">Érvényesség</div>
            <div class="bonus-detail__value">30 nap</div>
          </div>
        </div>
      </div>

      <div class="highlight-box">
        <h4><?php echo SITE_NAME; ?> Promókód</h4>
        <p>Ha van promókódod, a regisztrációs folyamat során megadhatod. A kód mező a regisztrációs űrlapon jelenik meg, közvetlenül az előnyben részesített üdvözlő bónusz kiválasztása után. A promókódok speciális ajánlatokat vagy módosított bónuszfeltételeket nyithatnak meg, ezért érdemes ellenőrizni befizetés előtt.</p>
      </div>
    </div>
  </section>

  <!-- Reload & Weekly -->
  <section class="content-section content-section--alt" id="reload">
    <div class="container">
      <h2>Heti Újratöltési Bónuszok</h2>
      <p>A <?php echo SITE_NAME; ?> az üdvözlő fázis után is folytatja a promóciókat. Ezek a visszatérő ajánlatok hetente megújulnak, így az aktív játékosoknak mindig van mit igényelniük.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Heti 66 Ingyenes Pörgetés</div>
          <span class="bonus-card__tag">Hétfő - Csütörtök</span>
        </div>
        <p>Fizess be EUR 20-t vagy többet hétfő és csütörtök között, és 66 ingyenes pörgetést kapsz egy kiemelt nyerőgépen. Minden héten be kell jelentkezned a befizetés előtt. A pörgetéseket 7 napon belül fel kell használni, a nyereményekre 40x fogadási követelmény vonatkozik, 10 napos teljesítési határidővel. Maximum tét a bónusz aktív állapotában: EUR 5.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Hétvégi Újratöltés: 50% akár &euro;777 + 77 Ingyenes Pörgetés</div>
          <span class="bonus-card__tag">Péntek - Vasárnap</span>
        </div>
        <p>Fizess be legalább EUR 20-t hétvégén, és 50%-os egyezést kapsz akár EUR 777-ig. Ha a befizetésed EUR 50 vagy több, 77 ingyenes pörgetést is kapsz egy kiválasztott nyerőgépen. Befizetés előtt be kell jelentkezned. A fogadási követelmény 35x a befizetésre és bónuszra, valamint 40x az ingyenes pörgetésekből származó nyereményekre. 10 napod van a követelmények teljesítésére.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Heti Sport Újratöltés: 55% akár &euro;750</div>
          <span class="bonus-card__tag">Sport</span>
        </div>
        <p>Hetente egyszer a legnagyobb befizetésed 55%-os sportbónuszra jogosít akár EUR 750 értékben. A befizetést egyszer meg kell fogadni sportfogadásokra legalább 1,50-es szorzóval, mielőtt a bónusz jóváírásra kerül. Ezután élő chaten vagy emailben igényelheted. A fogadási követelményeket 30 napon belül kell teljesíteni, és a maximális kifizetés ebből a bónuszból 10x az értéke.</p>
      </div>
    </div>
  </section>

  <!-- Cashback -->
  <section class="content-section" id="cashback">
    <div class="container">
      <h2>Cashback Programok</h2>
      <p>A <?php echo SITE_NAME; ?> három különálló cashback programot működtet: napi cashback kaszinójátékokra, heti cashback élő kaszinóra és heti cashback sportfogadásra. Minden programnak saját feltételei és igénylési folyamata van.</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Napi Casino Cashback</h4>
          <p>VIP 2. szint és afölött érhető el. A VIP 2 napi 3%-ot kap akár EUR 100-ig. A VIP 3 5%-ot akár EUR 200-ig. A VIP 4 10%-ot akár EUR 300-ig. A VIP 5 15%-ot akár EUR 400-ig. A cashback automatikusan jóváírásra kerül 04:00 UTC-kor, és 1x fogadási követelmény vonatkozik rá. 4 hetente újra be kell jelentkezned.</p>
        </div>
        <div class="info-card">
          <h4>Élő Casino Cashback: 25% akár &euro;350</h4>
          <p>Heti cashback az élő kaszinójátékok nettó veszteségére. A minimum qualifying veszteség EUR 5. Hétfőn 06:00 UTC után (23:59 UTC előtt) vedd fel a kapcsolatot az ügyfélszolgálattal az igényléshez. Jóváírás után a cashback 1x fogadási követelménnyel rendelkezik a kifizetés előtt.</p>
        </div>
        <div class="info-card">
          <h4>Sport Cashback: 10% akár &euro;500</h4>
          <p>A sportfogadások hétfőtől vasárnapig tartó nettó veszteségét fedezi. Minimum EUR 20-as veszteség szükséges a jogosultsághoz. Hétfőn vedd fel a kapcsolatot az ügyfélszolgálattal az igényléshez. A cashback 3x fogadási követelménnyel jár, és csak a Sport szekcióban használható.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sports Promos -->
  <section class="content-section content-section--alt" id="sports-promos">
    <div class="container">
      <h2>Sportfogadási Promóciók</h2>
      <p>Az üdvözlő bónuszon és a cashbacken túl a sportfogadási szekció számos eszközzel rendelkezik, amelyek értéket adnak a fogadásaidhoz.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Accumulator Boost: akár 100%</div>
        </div>
        <p>Tégy meg egy kombinált fogadást 3 vagy több kiválasztással, egyenként 1,40+ szorzóval, és a nyereményeid bónuszt kapnak. A szorzó 3%-ról indul 3 tételnél, és akár 100%-ig emelkedik 21 vagy több tételnél. Csak valódi pénzes fogadások számítanak. Ha kifizetést kérsz, mielőtt a bónusz jóváírásra kerül, az érvénytelenné válik.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2 Gólos Előny Korai Kifizetés</div>
        </div>
        <p>Ha a csapatod 2 gólos előnybe kerül, a pre-match 1X2 fogadásod teljes értékben kifizetésre kerül -- nem kell megvárni a végeredményt. Ez az ajánlat csak hazai vagy vendég győzelemre szóló fogadásokra vonatkozik. Az élő fogadások és döntetlen fogadások ki vannak zárva, és a korai kifizetés a cash out használatával érvénytelenné válik.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Bet Builder: 50% Kockázatmentes akár &euro;50</div>
        </div>
        <p>Tégy meg egy Bet Builder fogadást legalább 1,70-es szorzóval, minimum EUR 20 valódi pénzzel. Ha veszítesz, a téted 50%-ának megfelelő ingyenes fogadást kapsz (akár EUR 50). Hetente egyszer érhető el. Az ingyenes fogadást 3 napon belül fel kell használni, és 3x fogadási követelmény vonatkozik rá, legalább 1,50-es szorzóval.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Emelt Szorzók</div>
        </div>
        <p>Egyes kiválasztott pre-match 1X2 piacok alkalmanként emelt szorzókat kínálnak. Keresd az "Enhanced Prices" jelzést a piac leírásában. Az emelt szorzós fogadásokból származó nyeremények valódi pénzként kerülnek kifizetésre, további fogadási követelmény nélkül.</p>
      </div>
    </div>
  </section>

  <!-- VIP, Shop, Crab -->
  <section class="content-section" id="vip">
    <div class="container">
      <h2>VIP Program &amp; Extrák</h2>
      <div class="two-col">
        <div>
          <h3>VIP Program</h3>
          <p>A <?php echo SITE_NAME; ?> többszintű hűségprogramot működtet, amelyen a fogadási aktivitásod alapján haladhatsz előre. Ahogy feljebb lépsz, olyan előnyöket nyitsz meg, mint a személyes fiókkezelő, megemelt kifizetési limitek, exkluzív bónusz ajánlatok és magasabb cashback százalékok. A legmagasabb VIP szintek hozzáférést biztosítanak a legjobb heti cashback ajánlatokhoz és gyorsabb kifizetés-feldolgozáshoz.</p>

          <h3>Bonus Crab</h3>
          <p>Minden EUR 20-as vagy annál nagyobb befizetés 1 Bonus Crab kreditet ad. Használd, hogy "elkapj" egy véletlenszerű nyereményt a Karom Gépből -- a lehetséges jutalmak bónuszpénzt, ingyenes pörgetéseket vagy érméket tartalmaznak. Egy kis napi extra, ami változatosságot ad a játékélményedhez.</p>
        </div>
        <div>
          <h3>Exkluzív Bolt</h3>
          <p>A játékon, kihívásokon és promóciókon keresztül szerzett érmék a boltban költhetők el. A jutalmak az ingyenes pörgetésektől kiválasztott nyerőgépeken (pl. 5 pörgetés a Sweet Bonanza-n 30 érmékért) a bónuszpénzig terjednek (EUR 5 50 érmékért, akár EUR 250 1 200 érmékért). Remek módja annak, hogy a hűségedet kézzelfogható jutalmakká alakítsd a saját tempódban.</p>

          <h3>Kihívások</h3>
          <p>A heti kihívások egyszerű célok teljesítéséért jutalmaznak. A kaszinós kihívások megkérhetnek, hogy EUR 0,30-as téteket tegyél adott nyerőgépeken, míg a sport kihívások EUR 15-ös fogadásokat kérhetnek minimum 2,0-s szorzójú mérkőzésekre. Minden teljesített kihívás érméket ad, és heti 20 teljesítése 50 érme bónuszt hoz.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- No-Deposit Info -->
  <section class="content-section content-section--alt" id="no-deposit">
    <div class="container container--narrow">
      <h2><?php echo SITE_NAME; ?> Befizetés Nélküli Bónusz</h2>
      <p>Jelenleg a <?php echo SITE_NAME; ?> nem kínál klasszikus befizetés nélküli bónuszt. A Bonus Crab funkció azonban minden EUR 10-es vagy annál nagyobb befizetést jutalmaz egy ingyenes próbával a Karom Gépen, ahol pörgetéseket, bónuszpénzt, érméket vagy készpénz jutalmakat nyerhetsz, anélkül, hogy az eredeti nyereményre további fogadási követelmény vonatkozna. Ez a jelenleg elérhető legközelebbi dolog a befizetés nélküli juttatáshoz a platformon.</p>
      <p>Figyeld a Promóciók szekciót és nézz vissza rendszeresen, mivel a kaszinó gyakran rotálja ajánlatait, és a jövőben befizetés nélküli ajánlatokat vagy ingyenes bónuszkódokat is bevezethet.</p>
    </div>
  </section>

  <!-- Bonus FAQ -->
  <section class="content-section" id="bonus-faq">
    <div class="container container--narrow">
      <h2>Bónusz GYIK</h2>

      <details class="faq-item">
        <summary>Használhatok promókódot a <?php echo SITE_NAME; ?>-nál?</summary>
        <div class="faq-answer">
          <p>Igen. A regisztráció során lehetőséged van promókód megadására, miután kiválasztottad az előnyben részesített üdvözlő bónuszodat. Ha van érvényes kódod, add meg ott a kapcsolódó előnyök aktiválásához.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kombinálhatok több bónuszt?</summary>
        <div class="faq-answer">
          <p>Nem. Az üdvözlő bónuszok és az újratöltési promóciók nem halmozhatók. Minden aktív bónuszt teljesítened vagy törölnöd kell, mielőtt újat igényelnél. Egyes bónuszok a Profil szekcióból vagy az ügyfélszolgálat megkeresésével törölhetők.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mi történik, ha kifizetést kérek a fogadási követelmény teljesítése előtt?</summary>
        <div class="faq-answer">
          <p>A kifizetés igénylése a fogadási követelmények teljesítése előtt érvényteleníti a bónuszt és a hozzá kapcsolódó nyereményeket. Győződj meg róla, hogy teljes mértékben teljesítetted a rollover-t, mielőtt kifizetést kérsz.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Minden játék egyenlően járul hozzá a fogadási követelményhez?</summary>
        <div class="faq-answer">
          <p>Nem. A különböző játéktípusok eltérő arányban járulnak hozzá. A nyerőgépek általában 100%-kal járulnak hozzá, míg az asztali játékok és az élő kaszinó címek kevesebbel. Ellenőrizd a bónusz feltételeit a pontos hozzájárulási táblázatért.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>A Skrill és Neteller befizetések jogosultak bónuszokra?</summary>
        <div class="faq-answer">
          <p>A legtöbb esetben a Skrill vagy Neteller útján végrehajtott befizetések nem jogosultak az üdvözlő bónuszokra. Ellenőrizd az adott promóció feltételeit a kivételekért.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
