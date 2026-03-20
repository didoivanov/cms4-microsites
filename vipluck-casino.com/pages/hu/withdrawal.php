<?php
/**
 * Withdrawal Page – Hungarian
 */
$page_title = SITE_NAME . ' Kifizetés - Módszerek, limitek és feldolgozási idő';
$page_description = 'Minden, amit a ' . SITE_NAME . ' Casino kifizetéséről tudni kell: elérhető módszerek, akár 7 munkanapig tartó feldolgozási idő, napi és havi limitek, KYC-ellenőrzés és tippek a gyorsabb kifizetéshez.';
$current_page = 'withdrawal';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Kifizetés &amp; Nyeremények felvétele';
$hero_description = 'Így veheted fel a nyereményeidet: elérhető módszerek, feldolgozási idők, limitek és az ellenőrzési folyamat lépései.';
$hero_cta = 'Játssz most';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Kifizetés - áttekintés</h2>
      <p>A nyeremények felvétele <?php echo SITE_NAME; ?>-nál egyszerű, ha ismered a szabályokat. A kifizetési kérelmeket munkanapokon belül 72 órán belül dolgozzuk fel. Fontos tudni: <?php echo SITE_NAME; ?> hétvégén nem dolgoz fel kifizetéseket. A péntek estétől vasárnapig beküldött kérelmek a következő hétfőtől kerülnek feldolgozásra.</p>
      <p>Ha lehetséges, ugyanarra a fizetési módra utaljuk vissza a pénzt, amellyel a befizetésedet intézted. Ha az adott módszer nem fogad bejövő átutalást, a összeget bankszámlára küldjük. Az első kifizetés előtt el kell végezni a KYC-ellenőrzést, és teljesíteni kell a befizetési forgalmi követelményt.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Minimum kifizetés</h4>
          <p>7 800 Ft minden fizetési módnál. Az ennél kisebb összegek nem dolgozhatók fel.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Napi limit</h4>
          <p>273 000 Ft standard számláknál. VIP-tagok naponta akár 585 000 Ft-ot vehetnek fel.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Havi limit</h4>
          <p>3 510 000 Ft standard játékosoknál. VIP-tagoknak heti 2 730 000 Ft és havi 10 920 000 Ft a limitjük.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Payment Methods Table -->
  <section class="content-section content-section--alt" id="methods">
    <div class="container">
      <h2>Kifizetési módszerek</h2>
      <div class="two-col" style="align-items:flex-start;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p style="margin-top:0">Az elérhető kifizetési módszerek az országodtól és a befizetési módtól függenek. Alapszabályként <?php echo SITE_NAME; ?> lehetőség szerint az eredeti befizetési módszerre utalja vissza a nyereményt.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-payments.png" alt="<?php echo SITE_NAME; ?> Casino fizetési módszerek: Jeton, MiFinity, eZeeWallet, Bitcoin, Ethereum, Tether, Ripple és még sok más" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>

      <table class="data-table">
        <thead>
          <tr>
            <th>Módszer</th>
            <th>Min. kifizetés</th>
            <th>Feldolgozási idő</th>
            <th>Megjegyzés</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Visa / Mastercard</td>
            <td>7 800 Ft</td>
            <td>1-5 munkanap</td>
            <td>Visszautalás a befizetéshez használt kártyára</td>
          </tr>
          <tr>
            <td>Skrill</td>
            <td>7 800 Ft</td>
            <td>Akár 24 óra</td>
            <td>Gyors feldolgozás, széles körben elérhető</td>
          </tr>
          <tr>
            <td>Neteller</td>
            <td>7 800 Ft</td>
            <td>Akár 24 óra</td>
            <td>A legtöbb régióban elérhető</td>
          </tr>
          <tr>
            <td>Jeton</td>
            <td>7 800 Ft</td>
            <td>Akár 24 óra</td>
            <td>E-tárca széles lefedettséggel</td>
          </tr>
          <tr>
            <td>MiFinity</td>
            <td>7 800 Ft</td>
            <td>Akár 24 óra</td>
            <td>Digitális tárca gyors kifizetésekhez</td>
          </tr>
          <tr>
            <td>eZeeWallet</td>
            <td>7 800 Ft</td>
            <td>Akár 24 óra</td>
            <td>Elérhetőség régiónként eltérő lehet</td>
          </tr>
          <tr>
            <td>Banki átutalás</td>
            <td>7 800 Ft</td>
            <td>3-7 munkanap</td>
            <td>Alternatív módszer, ha az eredeti nem elérhető</td>
          </tr>
          <tr>
            <td>Bitcoin</td>
            <td>7 800 Ft</td>
            <td>Akár 24 óra</td>
            <td>A kaszinó feldolgozása után blokklánc-megerősítés szükséges</td>
          </tr>
          <tr>
            <td>Ethereum</td>
            <td>7 800 Ft</td>
            <td>Akár 24 óra</td>
            <td>Az egyik leggyorsabb kifizetési lehetőség</td>
          </tr>
          <tr>
            <td>Tether (USDT)</td>
            <td>7 800 Ft</td>
            <td>Akár 24 óra</td>
            <td>Stablecoin minimális árfolyam-ingadozással</td>
          </tr>
          <tr>
            <td>Ripple (XRP)</td>
            <td>7 800 Ft</td>
            <td>Akár 24 óra</td>
            <td>Gyors blokklánc-elszámolás</td>
          </tr>
          <tr>
            <td>USD Coin (USDC)</td>
            <td>7 800 Ft</td>
            <td>Akár 24 óra</td>
            <td>Stablecoin alternatíva a USDT helyett</td>
          </tr>
          <tr>
            <td>Cardano (ADA)</td>
            <td>7 800 Ft</td>
            <td>Akár 24 óra</td>
            <td>Elérhetőség régiónként eltérő lehet</td>
          </tr>
          <tr>
            <td>Dogecoin</td>
            <td>7 800 Ft</td>
            <td>Akár 24 óra</td>
            <td>Alacsony díjú kriptó kifizetés</td>
          </tr>
          <tr>
            <td>Litecoin</td>
            <td>7 800 Ft</td>
            <td>Akár 24 óra</td>
            <td>Gyorsabb blokkidők, mint Bitcoinnál</td>
          </tr>
          <tr>
            <td>Bitcoin Cash</td>
            <td>7 800 Ft</td>
            <td>Akár 24 óra</td>
            <td>Alacsonyabb díjak, mint a standard Bitcoinnál</td>
          </tr>
          <tr>
            <td>Solana (SOL)</td>
            <td>7 800 Ft</td>
            <td>Akár 24 óra</td>
            <td>Gyors blokklánc nagyon alacsony díjakkal</td>
          </tr>
        </tbody>
      </table>

      <p>Elfogadott tranzakciós valuták: EUR, CHF, USD, CAD, AUD, NZD, PLN, BRL, NOK, ZAR, CZK, HUF és CLP.</p>
    </div>
  </section>

  <!-- How to Withdraw -->
  <section class="content-section" id="how-to">
    <div class="container">
      <h2>Így kérhetsz kifizetést</h2>
      <p>Kövesd ezeket a lépéseket, ha pénzt szeretnél felvenni a <?php echo SITE_NAME; ?>-fiókodbóli:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Teljesítsd a forgalmi követelményt.</strong> Az első kifizetés előtt a befizetésedet legalább 1x-es forgatással kell teljesíteni. Ha bónuszt vettél igénybe, előbb teljesítsd a teljes forgatási követelményt. Ellenkező esetben feldolgozási díj merülhet fel.
          </div>
        </li>
        <li>
          <div>
            <strong>Nyisd meg a pénztárt.</strong> Navigálj a fiókodban a kifizetési részhez. A főmenüből vagy a fiókbeállításokból érheted el.
          </div>
        </li>
        <li>
          <div>
            <strong>Válassz fizetési módszert és add meg az összeget.</strong> Válassz az elérhető lehetőségek közül, és add meg a kívánt kifizetési összeget. Ügyelj arra, hogy az érvényes limiteken belül maradj.
          </div>
        </li>
        <li>
          <div>
            <strong>Várd meg a feldolgozást.</strong> <?php echo SITE_NAME; ?> csak munkanapokon (hétfőtől péntekig) dolgoz fel kifizetéseket. A standard feldolgozáshoz számíts akár 72 órára is. A hétvégén benyújtott kérelmek hétfőtől kerülnek feldolgozásra. Ha további dokumentumokra van szükség, felkeresünk téged.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- KYC Verification -->
  <section class="content-section content-section--alt" id="verification">
    <div class="container">
      <h2>Fiók-ellenőrzés (KYC)</h2>
      <p><?php echo SITE_NAME; ?> személyazonosság-ellenőrzést kér, mielőtt jóváhagyja a kifizetési kérelmeket. Ez egy iparági szabvány a csalás megelőzésére és a pénzmosás elleni előírások betartására.</p>

      <div class="two-col">
        <div>
          <h3>Szükséges dokumentumok</h3>
          <ul>
            <li>Érvényes fényképes személyazonosító okmány (útlevél, jogosítvány vagy személyi igazolvány)</li>
            <li>Lakcímigazolás (közüzemi számla vagy bankszámlakivonat, legfeljebb 3 hónapos)</li>
            <li>Fizetési módszer ellenőrzése (hitel-/betéti kártya fotója, e-tárca képernyőképe vagy kriptótárca megerősítése)</li>
          </ul>
          <p>Az első dokumentumkérés napjától számítva 30 napod van a dokumentumok benyújtására. Ha ezt a határidőt nem tartod be, a fiókod zárolható.</p>
        </div>
        <div>
          <h3>Ellenőrzési időkeret</h3>
          <p>A dokumentumok felülvizsgálatának standard feldolgozási ideje akár 10 munkanap is lehet, kivételes esetekben ennél tovább. A kaszinó harmadik feles ellenőrző szolgáltatásokat vehet igénybe, vagy kérhet további ellenőrzéseket, például videohívást vagy telefonos azonosítást.</p>
          <p>A dokumentumokat a profilodon belüli "Beállítások - Fiók-ellenőrzés" részben töltheted fel. Készíts éles, jól megvilágított fotókat, hogy elkerüld az olvashatatlan dokumentumok miatti késedelmet.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Large Wins -->
  <section class="content-section" id="large-wins">
    <div class="container container--narrow">
      <h2>Nagy nyeremények &amp; meghosszabbított feldolgozás</h2>
      <div class="highlight-box">
        <h4>1 950 000 Ft feletti kifizetések</h4>
        <p>Az 1 950 000 Ft feletti nyeremények további felülvizsgálatot igényelhetnek, és hosszabb ideig tarthatnak a standard feldolgozási időnél. A kaszinó fenntartja a jogot, hogy a nagy kifizetéseket az érvényes napi és heti limitek alapján több részletben fizesse ki. A magasabb limitekkel rendelkező VIP-tagok valószínűleg gyorsabb feldolgozást kapnak nagyobb összegek esetén.</p>
      </div>
      <p>Ha a kifizetésed meghaladja az 1 950 000 Ft-ot, a <?php echo SITE_NAME; ?>-csapat további ellenőrző dokumentumokat kérhet, vagy kiterjesztett felülvizsgálatot végezhet. Ez megszokott gyakorlat nagy tranzakcióknál, és mind a játékos, mind a kaszinó védelmét szolgálja.</p>
    </div>
  </section>

  <!-- Tips for Faster Payouts -->
  <section class="content-section content-section--alt" id="tips">
    <div class="container container--narrow">
      <h2>Tippek a gyorsabb kifizetéshez</h2>

      <h3>1. Válassz e-tárcát vagy kriptovalutát</h3>
      <p>A Skrill, Neteller, Jeton, MiFinity és a kriptó lehetőségek, mint a Bitcoin, Ethereum vagy Solana, általában gyorsabban dolgozódnak fel, mint a kártyás vagy banki átutalások. 10 különböző kriptovalutával <?php echo SITE_NAME; ?> az egyik legtágabb kriptó kifizetési választékot kínálja. Ha fontos a sebesség, fizess be valamelyik ilyen módszerrel, hogy a kifizetés ugyanazon a csatornán érkezzen.</p>

      <h3>2. Ellenőriztesd a fiókod időben</h3>
      <p>Ne várd meg az első kifizetésig, hogy benyújtsd a dokumentumokat. Töltsd fel a személyazonossági igazolványt, lakcímigazolást és a fizetési módszer ellenőrzési anyagát közvetlenül a regisztráció után. Így a kifizetésnél nem lesz késedelem a függőben lévő ellenőrzések miatt.</p>

      <h3>3. Teljesítsd a forgatási követelményeket a kérelem előtt</h3>
      <p>Ha van aktív bónuszod, győződj meg arról, hogy az összes forgatási követelmény teljes egészében teljesítve van. Egy kifizetési kérelem benyújtása aktív bónusz mellett a bónusz és az összes kapcsolódó nyeremény elvesztéséhez vezet. Ha csak befizetett egyenleggel játszottál, ne feledkezz meg az 1x-es forgatásról, amelyet a plusz díj elkerülése érdekében teljesíteni kell.</p>

      <h3>4. Maradj a limiteken belül</h3>
      <p>A napi vagy havi limitet meghaladó kifizetési kérelmeket elutasítják. Tervezd meg a kifizetéseket ennek megfelelően: standard számlánál napi 273 000 Ft, VIP-tagoknál napi 585 000 Ft. A heti limitek 877 500 Ft (standard) és 2 730 000 Ft (VIP).</p>

      <h3>5. Nyújtsd be a kérelmet munkanapon</h3>
      <p><?php echo SITE_NAME; ?> hétvégén nem dolgoz fel kifizetéseket. Ha a hét elején nyújtod be a kérelmet, a csapatnak több ideje van a feldolgozásra a hétvége előtt. A péntek esti vagy hétvégi kérelmek csak hétfőtől kerülnek feldolgozásra.</p>

      <h3>6. Használd az eredeti befizetési módszert</h3>
      <p><?php echo SITE_NAME; ?> előnyben részesíti, hogy ugyanarra a módszerre fizessen ki, amellyel a befizetés történt. Más módszer használata további ellenőrzéseket válthat ki és lassíthatja a folyamatot.</p>
    </div>
  </section>

  <!-- Fees -->
  <section class="content-section" id="fees">
    <div class="container container--narrow">
      <h2>Kifizetési díjak</h2>
      <p><?php echo SITE_NAME; ?> nem számít fel díjat a kifizetésekért. A fizetési szolgáltatód vagy a bankod azonban saját tranzakciós díjakat, valutaváltási költségeket vagy közvetítői díjakat számíthat fel. Érdeklődj a fizetési szolgáltatódnál a bejövő átutalásokra vonatkozó esetleges harmadik feles díjakról.</p>
      <p>Ha nem teljesíted a befizetési forgalmi 1x-es követelményt, mielőtt kifizetést kérsz, feldolgozási díj merülhet fel. Mindig teljesítsd előbb a minimális forgalmat, hogy elkerüld ezt a díjat.</p>
    </div>
  </section>

  <!-- Withdrawal FAQ -->
  <section class="content-section content-section--alt" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>Kifizetési GYIK</h2>

      <details class="faq-item">
        <summary>Mennyi ideig tart egy kifizetés a <?php echo SITE_NAME; ?>-nál?</summary>
        <div class="faq-answer">
          <p>A kifizetéseket munkanapokon belül 72 órán belül dolgozzuk fel. <?php echo SITE_NAME; ?> hétvégén nem dolgoz fel kifizetéseket - a legrosszabb esetben a benyújtástól a megérkezésig akár 7 munkanap is telhet. Az e-tárcák és kriptovaluták általában a leggyorsabbak, és a kaszinó feldolgozása után sokszor 24 órán belül megérkeznek. A banki átutalások és kártyás kifizetések a szolgáltató oldalán további 1-5 munkanapot vehetnek igénybe.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mi a minimális kifizetési összeg a <?php echo SITE_NAME; ?>-nál?</summary>
        <div class="faq-answer">
          <p>A minimális kifizetési összeg 7 800 Ft minden fizetési módnál. Ennél kisebb összegeket nem lehet kifizetni.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mennyit lehet havonta maximum felvenni?</summary>
        <div class="faq-answer">
          <p>Standard játékosok havonta akár 3 510 000 Ft-ot vehetnek fel (napi 273 000 Ft, heti 877 500 Ft). VIP-tagoknak magasabbak a limitjeik: napi 585 000 Ft, heti 2 730 000 Ft és havi 10 920 000 Ft.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Feldolgoz-e <?php echo SITE_NAME; ?> kifizetéseket hétvégén?</summary>
        <div class="faq-answer">
          <p>Nem. A kifizetések feldolgozása csak munkanapokon (hétfőtől péntekig) zajlik. A hétvégén benyújtott kérelmek a következő hétfőtől kerülnek feldolgozásra.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Miért utasították el a kifizetésemet?</summary>
        <div class="faq-answer">
          <p>Gyakori okok: nem teljesített forgatási követelmények, ellenőrizetlen fiók, a napi, heti vagy havi limit túllépése, vagy olyan módszerre történő kifizetési kísérlet, amely nem egyezik meg a befizetési módszerrel. Vedd fel a kapcsolatot az ügyfélszolgálattal az eseteddel kapcsolatos részletekért.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Vannak kifizetési díjak?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> nem számít fel kifizetési díjat. A fizetési szolgáltatód saját díjakat számíthat fel a pénzfogadásért. Ha nem teljesítetted a befizetési forgalmi 1x-es követelményt a kifizetési kérelem előtt, feldolgozási díj merülhet fel.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mi történik az 1 950 000 Ft feletti nagy nyereményekkel?</summary>
        <div class="faq-answer">
          <p>Az 1 950 000 Ft feletti kifizetések további ellenőrzést igényelhetnek és tovább tarthatnak. A kaszinó a napi és heti limitek alapján részletekben is kifizethet nagy összegeket. A VIP-tagok általában gyorsabb feldolgozást kapnak nagy összegek esetén.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Törölhetem a függőben lévő kifizetésemet?</summary>
        <div class="faq-answer">
          <p>A feldolgozási állapottól függően a függőben lévő kifizetés esetleg törölhető. Vedd fel a kapcsolatot az ügyfélszolgálattal élő chat-en keresztül a törléshez szükséges segítségért.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
