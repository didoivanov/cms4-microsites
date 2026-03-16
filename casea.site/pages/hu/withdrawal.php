<?php
/**
 * Withdrawal Page – Hungarian
 */
$page_title = SITE_NAME . ' Kifizetés - Fizetési Módok, Limitek & Feldolgozási Idő';
$page_description = 'Minden a ' . SITE_NAME . ' Casino kifizetésekről: fizetési módok, akár 72 órás feldolgozási idő, napi és havi limitek, KYC ellenőrzés és tippek a gyorsabb kifizetéshez.';
$current_page = 'withdrawal';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Kifizetések &amp; Pénzforgalom';
$hero_description = 'Hogyan fizettetheted ki a nyereményeidet, milyen módszerek érhetők el, feldolgozási idők, limitek és mire számíthatsz az ellenőrzési folyamat során.';
$hero_cta = 'Kezdj el Játszani';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Kifizetési Áttekintés</h2>
      <p>A nyereményeid kifizetése a <?php echo SITE_NAME; ?>-nál egyszerű, ha ismered a szabályokat. A kifizetések jellemzően 72 órán belül feldolgozásra kerülnek, és ahol lehetséges, a kaszinó ugyanarra a módszerre küldi vissza az összeget, amellyel befizettél. Ha az adott módszer nem támogatja a bejövő tranzakciókat, az összeget bankszámlára utalják.</p>
      <p>Az első kifizetési kérelem előtt KYC (Ismerd meg Ügyfeledet) ellenőrzést kell teljesítened, és meg kell bizonyosodnod arról, hogy a minimális befizetési rollover követelménynek eleget tettél.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Min. Kifizetés</h4>
          <p>EUR 10 minden fizetési módnál. Az ez alatti összegek nem dolgozhatók fel.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Napi Limit</h4>
          <p>EUR 500 standard fiókok esetén. VIP tagok naponta akár EUR 1 500-t fizethetnek ki.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Havi Limit</h4>
          <p>EUR 7 000 új játékosok számára. VIP tagok havonta maximum EUR 20 000-t élveznek.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Payment Methods Table -->
  <section class="content-section content-section--alt" id="methods">
    <div class="container">
      <h2>Kifizetési Módok</h2>
      <p>A kifizetéshez elérhető módszerek az országodtól és a befizetési módodtól függenek. Általánosságban a <?php echo SITE_NAME; ?> az eredeti befizetési módra dolgozza fel a kifizetéseket, ha lehetséges.</p>

      <table class="data-table">
        <thead>
          <tr>
            <th>Módszer</th>
            <th>Min. Kifizetés</th>
            <th>Feldolgozási Idő</th>
            <th>Megjegyzés</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Visa / Mastercard</td>
            <td>&euro;10</td>
            <td>1-3 munkanap</td>
            <td>A befizetéshez használt kártyára kerül visszautalásra</td>
          </tr>
          <tr>
            <td>Skrill</td>
            <td>&euro;10</td>
            <td>Akár 24 óra</td>
            <td>Gyors feldolgozás, széles körben elérhető</td>
          </tr>
          <tr>
            <td>Neteller</td>
            <td>&euro;10</td>
            <td>Akár 24 óra</td>
            <td>A legtöbb régióban elérhető</td>
          </tr>
          <tr>
            <td>Banki Átutalás</td>
            <td>&euro;20</td>
            <td>2-5 munkanap</td>
            <td>Tartalék megoldás, ha az eredeti módszer nem elérhető</td>
          </tr>
          <tr>
            <td>Bitcoin</td>
            <td>&euro;10</td>
            <td>Akár 24 óra</td>
            <td>A kaszinó feldolgozása után blockchain megerősítések szükségesek</td>
          </tr>
          <tr>
            <td>Ethereum</td>
            <td>&euro;10</td>
            <td>Akár 24 óra</td>
            <td>A kriptovaluták általában a leggyorsabb kifizetést biztosítják</td>
          </tr>
          <tr>
            <td>Litecoin / Tether / Ripple</td>
            <td>&euro;10</td>
            <td>Akár 24 óra</td>
            <td>Ellenőrizd az elérhetőséget a régiódban</td>
          </tr>
        </tbody>
      </table>

      <p>Elfogadott valuták tranzakciókhoz: EUR, USD, CAD, AUD, CHF, HUF, NOK, PLN, NZD, CZK, BRL, CLP és PEN.</p>
    </div>
  </section>

  <!-- How to Withdraw -->
  <section class="content-section" id="how-to">
    <div class="container">
      <h2>Hogyan Kérj Kifizetést</h2>
      <p>Kövesd ezeket a lépéseket a <?php echo SITE_NAME; ?> fiókodból történő kifizetés igényléséhez:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Teljesítsd a rollover követelményt.</strong> Az első kifizetésed előtt a befizetésedet legalább 1x meg kell fogadnod. Ha bónuszt igényeltél, először teljesítsd a teljes fogadási követelményt. Ennek elmulasztása 10%-os kifizetési díjat vonhat maga után.
          </div>
        </li>
        <li>
          <div>
            <strong>Nyisd meg a pénztárat.</strong> Navigálj a fiókod kifizetési szekciójához. A főmenüben vagy a fiókbeállítások területén találod.
          </div>
        </li>
        <li>
          <div>
            <strong>Válaszd ki a fizetési módot és az összeget.</strong> Válassz az elérhető lehetőségek közül, és add meg a kifizetni kívánt összeget. Győződj meg róla, hogy az engedélyezett limiteken belül van.
          </div>
        </li>
        <li>
          <div>
            <strong>Várd meg a feldolgozást.</strong> A kaszinó felülvizsgálja minden kérelmet, és jellemzően 3 munkanapon belül dolgozza fel a kifizetéseket. Ha további dokumentumokra van szükség, felveszik veled a kapcsolatot.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- KYC Verification -->
  <section class="content-section content-section--alt" id="verification">
    <div class="container">
      <h2>Fiók Ellenőrzés (KYC)</h2>
      <p>A <?php echo SITE_NAME; ?> személyazonosság-ellenőrzést követel meg a kifizetési kérelmek jóváhagyása előtt. Ez egy iparági standard eljárás, amelynek célja a csalás megelőzése és a pénzmosás elleni szabályozásnak való megfelelés.</p>

      <div class="two-col">
        <div>
          <h3>Szükséges Dokumentumok</h3>
          <ul>
            <li>Hivatalos személyazonosító okmány (útlevél, vezetői engedély vagy személyi igazolvány)</li>
            <li>Lakcímigazolás (közüzemi számla vagy bankszámlakivonat, legfeljebb 3 hónapos)</li>
            <li>Fizetési mód igazolása (hitel-/betéti kártya fotó, e-pénztárca képernyőkép vagy kriptotárca megerősítés)</li>
          </ul>
          <p>A dokumentumkérelem benyújtásától számítva 30 napod van az iratok benyújtására. Ha ezen időn belül nem nyújtod be, a fiókod bezárásra kerülhet.</p>
        </div>
        <div>
          <h3>Ellenőrzési Határidő</h3>
          <p>A dokumentumok felülvizsgálatának standard feldolgozási ideje legfeljebb 10 munkanap, bár kivételes esetekben hosszabb is lehet. A kaszinó harmadik féltől származó ellenőrző szolgáltatásokat használhat, vagy további ellenőrzéseket kérhet, például videóhívást vagy telefonos ellenőrzést.</p>
          <p>A dokumentumokat a profilod «Beállítások - Fiók Ellenőrzés» szekciójában töltheted fel. Készíts tiszta, jól megvilágított fotókat az olvashatatlan dokumentumok miatti késedelmek elkerülése érdekében.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Faster Payouts -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Tippek a Gyorsabb Kifizetéshez</h2>

      <div class="highlight-box">
        <h4>Gyorsítsd Fel a <?php echo SITE_NAME; ?> Kifizetésedet</h4>
        <p>Kövesd ezeket a gyakorlatokat a kifizetési késedelmek minimalizálása és a nyeremények gyorsabb átvétele érdekében.</p>
      </div>

      <h3>1. Válassz e-pénztárcát vagy kriptovalutát</h3>
      <p>A Skrill, Neteller és a kriptovaluták, mint a Bitcoin vagy Ethereum, általában gyorsabban feldolgozásra kerülnek, mint a kártyás vagy banki átutalások. Ha a sebesség a prioritásod, fizess be ezen módszerek egyikével, hogy a kifizetésed ugyanazon a csatornán térjen vissza.</p>

      <h3>2. Ellenőriztesd a fiókodat korán</h3>
      <p>Ne várd meg az első kifizetésedet a dokumentumaid benyújtásával. Töltsd fel a személyazonosító okmányodat, lakcímigazolást és fizetési mód igazolást, amint regisztrálsz. Így amikor készen állsz a kifizetésre, nem lesz késedelem a függő ellenőrzés miatt.</p>

      <h3>3. Teljesítsd a fogadási követelményt a kérelem előtt</h3>
      <p>Ha aktív bónuszod van, győződj meg róla, hogy minden fogadási követelmény teljesen teljesítve van. Kifizetés igénylése aktív bónusz mellett érvényteleníti a bónuszt és a kapcsolódó nyereményeket. Ha csak befizetett pénzzel játszottál, emlékezz az 1x rollover-re, amelyet teljesíteni kell az extra díj elkerülése érdekében.</p>

      <h3>4. Maradj a limiteken belül</h3>
      <p>A napi vagy havi felső határt meghaladó kifizetési kérelmeket elutasítják. Tervezd meg a kifizetéseidet ennek megfelelően: EUR 500 naponta standard fiókok esetén, EUR 1 500 naponta VIP tagok számára.</p>

      <h3>5. Használd az eredeti befizetési módot</h3>
      <p>A <?php echo SITE_NAME; ?> előnyben részesíti az összeg visszaküldését ugyanarra a módszerre, amellyel befizettél. Másik módszer használata további ellenőrzéseket válthat ki, és lassíthatja a folyamatot.</p>
    </div>
  </section>

  <!-- Withdrawal FAQ -->
  <section class="content-section content-section--alt" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>Kifizetési GYIK</h2>

      <details class="faq-item">
        <summary>Mennyi ideig tart a <?php echo SITE_NAME; ?> kifizetés?</summary>
        <div class="faq-answer">
          <p>A kifizetések 72 órán (3 munkanapon) belül feldolgozásra kerülnek. Az e-pénztárcák és kriptovaluták általában a leggyorsabbak, gyakran a kaszinó feldolgozásától számítva 24 órán belül befejeződnek. A banki átutalások és kártyás kifizetések a szolgáltató részéről további 1-5 munkanapot vehetnek igénybe.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mennyi a minimális kifizetés a <?php echo SITE_NAME; ?>-nál?</summary>
        <div class="faq-answer">
          <p>A minimális kifizetési összeg EUR 10 minden fizetési módnál. Ez alatti összegek nem igényelhetők.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mennyit fizethetek ki maximum havonta?</summary>
        <div class="faq-answer">
          <p>A standard játékosok havonta akár EUR 7 000-t fizethetnek ki. A VIP tagok megemelt, havi EUR 20 000-es limittel rendelkeznek. Napi korlátok is érvényesek: EUR 500 standard fiókok, EUR 1 500 VIP esetén.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Miért utasították el a kifizetésemet?</summary>
        <div class="faq-answer">
          <p>Gyakori okok: befejezetlen fogadási követelmények, nem ellenőrzött fiók, napi vagy havi limit túllépése, vagy a befizetéstől eltérő módszerre történő kifizetési kérelem. Vedd fel a kapcsolatot az ügyfélszolgálattal az eseted részleteiért.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Van kifizetési díj?</summary>
        <div class="faq-answer">
          <p>Nincs standard kifizetési díj. Ha azonban nem teljesíted az 1x befizetési rollover követelményt a kifizetés előtt, 10%-os díj kerülhet felszámításra. Mindig teljesítsd először a minimális rollover-t, hogy elkerüld ezt a díjat.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Visszavonhatom a függőben lévő kifizetésemet?</summary>
        <div class="faq-answer">
          <p>A feldolgozási stádiumtól függően lehetséges a függőben lévő kifizetési kérelem visszavonása. Vedd fel a kapcsolatot az ügyfélszolgálattal élő chaten a visszavonáshoz szükséges segítségért.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
