<?php
/**
 * Kifizetés oldal - WestAce (Magyar / HU)
 */
$page_title = SITE_NAME . ' Kifizetés - Fizetési módok, limitek és feldolgozási idők';
$page_description = 'Minden, amit a ' . SITE_NAME . ' Casino kifizetéseiről tudni kell: fizetési módok, feldolgozási idők, napi és havi limitek, KYC-ellenőrzés és tippek a gyorsabb kifizetéshez.';
$current_page = 'withdrawal';
$lang_prefix = '/hu';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Kifizetés';
$hero_description = 'Hogyan veheted fel a nyereményeidet, milyen módok érhetők el, mik a feldolgozási idők és limitek, és mit várj az ellenőrzési folyamat során.';
$hero_cta = 'Játssz Most';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Áttekintés -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Kifizetések áttekintése</h2>
      <p>A kifizetések a <?php echo SITE_NAME; ?> kaszinónál egyszerűek és díjmentesek. Minden kifizetési kérelmet a fizetési módtól függően 24-72 órán belül feldolgozunk. Az összeget lehetőség szerint ugyanarra a módszerre utaljuk vissza, amellyel a befizetést végrehajtottad. Az első kifizetés előtt el kell végezni a KYC-ellenőrzést.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Minimális kifizetés</h4>
          <p>4 000 Ft minden fizetési módnál. Ennél kisebb összeg nem dolgozható fel.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Feldolgozási idő</h4>
          <p>24-72 óra a legtöbb módnál. A banki átutalás 1-3 munkanapot vehet igénybe.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Kifizetési limitek</h4>
          <p>205 000 Ft/nap, 2 870 000 Ft/hónap. A VIP-tagok magasabb limiteket igényelhetnek.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Fizetési módok táblázata -->
  <section class="content-section content-section--alt" id="methods">
    <div class="container">
      <h2>Fizetési módok</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Az alábbi táblázat a <?php echo SITE_NAME; ?> összes be- és kifizetési lehetőségét mutatja. Ha lehetséges, a kifizetést ugyanarra a módszerre teljesítjük, amellyel a befizetést végezted. Minden be- és kifizetés díjmentes a mi oldalunkon.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-payments-screen.png" alt="<?php echo SITE_NAME; ?> Casino befizetési és kifizetési módok - Visa, Mastercard, Revolut, Skrill és kriptovaluta" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div class="data-table-wrap">
        <table class="data-table">
          <thead>
            <tr>
              <th>Fizetési mód</th>
              <th>Min. befizetés</th>
              <th>Max. befizetés</th>
              <th>Min. kifizetés</th>
              <th>Max. kifizetés</th>
              <th>Feldolgozás</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Mastercard</td>
              <td>4 000 Ft</td>
              <td>860 000 Ft</td>
              <td>4 000 Ft</td>
              <td>1 230 000 Ft</td>
              <td>24-72 óra</td>
            </tr>
            <tr>
              <td>Paysafecard</td>
              <td>4 000 Ft</td>
              <td>410 000 Ft</td>
              <td colspan="2">Csak befizetés</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Visa</td>
              <td colspan="2">Csak kifizetés</td>
              <td>4 000 Ft</td>
              <td>1 230 000 Ft</td>
              <td>24-72 óra</td>
            </tr>
            <tr>
              <td>Banki átutalás</td>
              <td colspan="2">Csak kifizetés</td>
              <td>4 000 Ft</td>
              <td>2 050 000 Ft</td>
              <td>1-3 munkanap</td>
            </tr>
            <tr>
              <td>Skrill</td>
              <td>4 000 Ft</td>
              <td>2 050 000 Ft</td>
              <td>4 000 Ft</td>
              <td>2 050 000 Ft</td>
              <td>24-72 óra</td>
            </tr>
            <tr>
              <td>Neteller</td>
              <td>4 000 Ft</td>
              <td>2 050 000 Ft</td>
              <td colspan="2">Csak befizetés</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Bitcoin (BTC)</td>
              <td>4 000 Ft</td>
              <td>2 050 000 Ft</td>
              <td>4 000 Ft</td>
              <td>2 050 000 Ft</td>
              <td>24-72 óra</td>
            </tr>
            <tr>
              <td>Ethereum (ETH)</td>
              <td>4 000 Ft</td>
              <td>2 050 000 Ft</td>
              <td>4 000 Ft</td>
              <td>2 050 000 Ft</td>
              <td>24-72 óra</td>
            </tr>
            <tr>
              <td>Tether (USDT)</td>
              <td>4 000 Ft</td>
              <td>2 050 000 Ft</td>
              <td>4 000 Ft</td>
              <td>2 050 000 Ft</td>
              <td>24-72 óra</td>
            </tr>
            <tr>
              <td>Litecoin (LTC)</td>
              <td>4 000 Ft</td>
              <td>2 050 000 Ft</td>
              <td>4 000 Ft</td>
              <td>2 050 000 Ft</td>
              <td>24-72 óra</td>
            </tr>
            <tr>
              <td>Ripple (XRP)</td>
              <td>4 000 Ft</td>
              <td>2 050 000 Ft</td>
              <td>4 000 Ft</td>
              <td>2 050 000 Ft</td>
              <td>24-72 óra</td>
            </tr>
            <tr>
              <td>USD Coin (USDC)</td>
              <td>4 000 Ft</td>
              <td>2 050 000 Ft</td>
              <td>4 000 Ft</td>
              <td>2 050 000 Ft</td>
              <td>24-72 óra</td>
            </tr>
            <tr>
              <td>Bitcoin Cash (BCH)</td>
              <td>4 000 Ft</td>
              <td>2 050 000 Ft</td>
              <td>4 000 Ft</td>
              <td>2 050 000 Ft</td>
              <td>24-72 óra</td>
            </tr>
            <tr>
              <td>Dogecoin (DOGE)</td>
              <td>4 000 Ft</td>
              <td>2 050 000 Ft</td>
              <td>4 000 Ft</td>
              <td>2 050 000 Ft</td>
              <td>24-72 óra</td>
            </tr>
            <tr>
              <td>Cardano (ADA)</td>
              <td>4 000 Ft</td>
              <td>2 050 000 Ft</td>
              <td>4 000 Ft</td>
              <td>2 050 000 Ft</td>
              <td>24-72 óra</td>
            </tr>
          </tbody>
        </table>
      </div>

      <p style="margin-top: var(--space-4);">Az elérhető fizetési módok köre régiótól függően változhat. A kriptovalutás tranzakciók a kaszinó feldolgozása után blokklánc-megerősítést is igényelnek.</p>
    </div>
  </section>

  <!-- Forgalmi követelmény -->
  <section class="content-section" id="rollover">
    <div class="container container--narrow">
      <h2>Befizetési forgalmi követelmény</h2>
      <p>A <?php echo SITE_NAME; ?> kaszinó 1x forgalmi követelményt alkalmaz minden befizetésre. Ez azt jelenti, hogy a befizetett összeget legalább egyszer meg kell fogadni a kifizetési kérelem benyújtása előtt. Ez elkülönül a bónuszok megforgatási követelményétől.</p>
      <p>Ha a kifizetési kérelmet az 1x forgalom teljesítése nélkül nyújtod be, jutalék kerül levonásra:</p>
      <ul>
        <li><strong>10%-os jutalék</strong> a befizetett összeg után e-wallet és kriptovalutás kifizetések esetén</li>
        <li><strong>15%-os jutalék</strong> a befizetett összeg után bankkártyás és banki átutalásos kifizetések esetén</li>
      </ul>
      <p>A jutalék elkerüléséhez egyszerűen játssz a befizetéseddel legalább egyszer, mielőtt kifizetést kérsz.</p>
    </div>
  </section>

  <!-- Hogyan végezz kifizetést -->
  <section class="content-section content-section--alt" id="how-to">
    <div class="container">
      <h2>Hogyan végezz kifizetést</h2>
      <p>Kövesd az alábbi lépéseket, ha nyereményedet fel szeretnéd venni a <?php echo SITE_NAME; ?> fiókodból:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Teljesítsd az összes aktív megforgatási követelményt.</strong> Ha bónuszt vettél igénybe, a teljes megforgatási követelményt teljesíteni kell a kifizetés előtt. Győződj meg arról is, hogy az 1x befizetési forgalom teljesült.
          </div>
        </li>
        <li>
          <div>
            <strong>Nyisd meg a pénztárat.</strong> Navigálj a kifizetés részhez a fiókodon belül. A főmenüben vagy a fiókbeállításokban találod.
          </div>
        </li>
        <li>
          <div>
            <strong>Válaszd ki a fizetési módot és az összeget.</strong> Válassz az elérhető lehetőségek közül, és add meg a kifizetni kívánt összeget. A minimum 4 000 Ft minden módnál. A napi limit 205 000 Ft, a havi limit 2 870 000 Ft.
          </div>
        </li>
        <li>
          <div>
            <strong>Várd meg a feldolgozást.</strong> A <?php echo SITE_NAME; ?> 24-72 órán belül dolgozza fel a kifizetéseket. A banki átutalás 1-3 munkanapot vehet igénybe a bank részérol. Ha további dokumentumokra van szükség az ellenőrzéshez, felvesszük veled a kapcsolatot.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- KYC ellenőrzés -->
  <section class="content-section" id="verification">
    <div class="container">
      <h2>Személyazonosság-ellenőrzés (KYC)</h2>
      <p>A <?php echo SITE_NAME; ?> kaszinó személyazonosság-ellenőrzést ír elő a kifizetési kérelmek jóváhagyása előtt. Ez egy bevett eljárás, amelynek célja a csalás megelőzése és a pénzmosás elleni szabályok betartása. A dokumentumok 30 napon belül kerülnek jóváhagyásra, a beküldést követően az ellenőrzés legfeljebb 10 napot vesz igénybe.</p>

      <div class="two-col">
        <div>
          <h3>Szükséges dokumentumok</h3>
          <ul>
            <li><strong>Személyazonosság igazolása</strong> - útlevél, jogosítvány vagy személyi igazolvány</li>
            <li><strong>Szelfi az igazolvánnyal</strong> - egy fénykép rólad, amelyen az igazolvány is látható</li>
            <li><strong>Lakcím igazolása</strong> - az utóbbi 3 hónapból származó közüzemi számla vagy bankszámlakivonat</li>
            <li><strong>Pénzforrás igazolása</strong> - dokumentum arról, honnan származnak a szerencsejátékra fordított összegek (pénzmosás elleni követelmény)</li>
          </ul>
          <p>A kért dokumentumokat 30 napon belül kell benyújtani. A fiókod korlátozva lehet, amíg az ellenőrzés nem fejeződik be.</p>
        </div>
        <div>
          <h3>Tippek a gyorsabb ellenőrzéshez</h3>
          <ul>
            <li>Töltsd fel a dokumentumokat minél hamarabb a regisztrációt követően, ne várd meg az első kifizetést</li>
            <li>Győződj meg arról, hogy az igazolvány mind a négy sarka látható a fotón</li>
            <li>A szelfin az arcod és az igazolvány szövege is legyen jól olvasható</li>
            <li>Lakcím igazoláshoz friss közüzemi számlát vagy bankszámlakivonatot használj</li>
            <li>Ha a dokumentumot visszautasítják, ellenőrizd, hogy a kép nem homályos, és az igazolvány nem járt-e le</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Tippek a gyorsabb kifizetéshez -->
  <section class="content-section content-section--alt" id="tips">
    <div class="container container--narrow">
      <h2>Tippek a gyorsabb kifizetéshez</h2>

      <h3>1. Válassz e-walletet vagy kriptovalutát</h3>
      <p>A Skrill és a kriptovalutás módok - például a Bitcoin, az Ethereum vagy a Tether - általában a leggyorsabban teljesülnek. Ha a sebesség a prioritás, ezekkel a módokkal fizess be, hogy a kifizetés is ugyanezen a csatornán érkezzen vissza.</p>

      <h3>2. Ellenőriztesd a fiókodat idejekorán</h3>
      <p>Ne várd meg az első kifizetést a dokumentumok beküldéséhez. Töltsd fel a személyit, a szelfid, a lakcímigazolást és a pénzforrás dokumentumot mindjárt a regisztrációkor. Így amikor kifizetést kérsz, nem lesz késedelem a folyamatban lévő ellenőrzés miatt.</p>

      <h3>3. Teljesítsd a befizetési forgalmat</h3>
      <p>Győződj meg arról, hogy a befizetett összeget legalább egyszer megjátszottad a kifizetési kérelem benyújtása előtt. Ha ezt elmulasztod, a befizetett összeg 10-15%-ának megfelelő jutalékot vonnak le.</p>

      <h3>4. Használd az eredeti befizetési módot</h3>
      <p>A <?php echo SITE_NAME; ?> lehetőség szerint ugyanarra a módszerre utalja vissza az összeget, amellyel a befizetést végezted. Más módszer választása további ellenőrzést vonhat maga után, és lassíthatja a folyamatot.</p>
    </div>
  </section>

  <!-- Díjak -->
  <section class="content-section" id="fees">
    <div class="container container--narrow">
      <h2>Kifizetési díjak</h2>
      <p>A <?php echo SITE_NAME; ?> nem számít fel díjat a befizetések és kifizetések után. Ugyanakkor a fizetési szolgáltatód vagy a bankod saját tranzakciós díjakat, devizaváltási költségeket vagy közvetítői díjakat alkalmazhat. Az esetleges harmadik féltől származó díjakról érdeklődd meg a fizetési szolgáltatódnál.</p>
      <p>Megjegyzés: ha az 1x befizetési forgalom teljesítése nélkül kérsz kifizetést, a befizetett összeg 10%-ának (bankkártya/átutalás esetén 15%-ának) megfelelő jutalékot vonnak le. Ez nem kifizetési díj, hanem forgalmi büntetés.</p>
    </div>
  </section>

  <!-- Kifizetési GYIK -->
  <section class="content-section content-section--alt" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>Kifizetési GYIK</h2>

      <details class="faq-item">
        <summary>Mennyi ideig tart egy <?php echo SITE_NAME; ?> kifizetés?</summary>
        <div class="faq-answer">
          <p>A legtöbb kifizetést 24-72 órán belül dolgozzuk fel. Az e-walletek és a kriptovaluták érkeznek meg általában a leggyorsabban. A banki átutalásnál a bank oldalán további 1-3 munkanap is előfordulhat.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mi a minimális kifizetési összeg a <?php echo SITE_NAME; ?> kaszinónál?</summary>
        <div class="faq-answer">
          <p>A minimális kifizetési összeg minden fizetési módnál 4 000 Ft.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mik a kifizetési limitek?</summary>
        <div class="faq-answer">
          <p>Az általános limitek 205 000 Ft/nap és 2 870 000 Ft/hónap. A tranzakciónkénti limitek módtól függnek: Visa és Mastercard esetén 1 230 000 Ft, Skrill, banki átutalás és kriptovaluta esetén 2 050 000 Ft egy tranzakcióban. A VIP-játékosok magasabb limiteket igényelhetnek.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Miért utasították el a kifizetésemet?</summary>
        <div class="faq-answer">
          <p>Gyakori okok: be nem fejezett megforgatási követelmény, teljesítetlen befizetési forgalom, nem ellenőrzött fiók, napi vagy havi limit túllépése, vagy olyan módszerre kért kifizetés, amely nem egyezik a befizetés módjával. A konkrét eseteddel kapcsolatban fordulj az ügyfélszolgálathoz.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Vannak kifizetési díjak?</summary>
        <div class="faq-answer">
          <p>A <?php echo SITE_NAME; ?> nem számít fel kifizetési díjat. A fizetési szolgáltatód saját díjakat alkalmazhat. Ha az 1x befizetési forgalom teljesítése nélkül kérsz kifizetést, 10%-os jutalék (bankkártya/átutalás esetén 15%) kerül levonásra a befizetett összegre vetítve.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Visszavonható egy függőben lévő kifizetés?</summary>
        <div class="faq-answer">
          <p>A feldolgozási fázistól függően lehetséges lehet a kifizetési kérelem visszavonása. Az élő csevegésen keresztül vedd fel a kapcsolatot az ügyfélszolgálattal a segítségért.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
