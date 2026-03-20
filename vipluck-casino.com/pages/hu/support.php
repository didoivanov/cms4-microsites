<?php
/**
 * Support Page – Hungarian
 */
$page_title = SITE_NAME . ' Ügyfélszolgálat - Élő chat, e-mail, Telegram és segítség';
$page_description = 'Keresd a ' . SITE_NAME . ' Casino ügyfélszolgálatát 24/7 élő chaten, e-mailben (support@vipluck.com) vagy Telegramon. Segítség befizetésnél, kifizetésnél, bónuszoknál, fiókproblémáknál és technikai kérdéseknél.';
$current_page = 'support';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Ügyfélszolgálat';
$hero_description = 'Segítünk minden kérdésben, ami a fiókodat, befizetéseidet, kifizetéseidet, bónuszaidat vagy technikai problémáidat érinti. Keress minket bármikor.';
$hero_cta = 'Élő chat megnyitása';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Contact Options -->
  <section class="content-section" id="contact">
    <div class="container">
      <h2>Így érhetsz el minket</h2>
      <p><?php echo SITE_NAME; ?> három támogatási csatornát kínál, hogy bármikor kaphass segítséget. Legyen szó egy gyors bónuszos kérdésről, fizetési problémáról, vagy inkább üzenetküldő appot részesítesz előnybe - csapatunk készen áll.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128172;</div>
          <h4>Élő chat</h4>
          <p>A leggyorsabb módja a segítségkérésnek. Kattints a chat ikonra a weboldal bármelyik oldalán, és azonnal kapcsolatba léphetsz egy ügyfélszolgálati munkatárssal. Az átlagos válaszidő 2 percen belül van. Napi 24 órában, heti 7 napban elérhető.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9993;</div>
          <h4>E-mail támogatás</h4>
          <p>Részletes kérdéseknél vagy dokumentumok beküldésekor az e-mail a legjobb választás. Küldd kérdésedet a <strong>support@vipluck.com</strong> címre, és számíts 24 órán belüli válaszra. Mindenképpen add meg fiókadataidat és a probléma egyértelmű leírását.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9992;</div>
          <h4>Telegram</h4>
          <p><?php echo SITE_NAME; ?> hivatalos Telegram-csatornát működtet támogatáshoz és bejelentésekhez. Ott gyors kérdéseket tehetsz fel, értesülhetsz az akciókról és általános segítséget kaphatsz. A Telegram-linket megtalálod a kaszinó weboldalán.</p>
        </div>
      </div>

      <table class="data-table" style="margin-top: var(--space-8);">
        <thead>
          <tr>
            <th>Csatorna</th>
            <th>Elérhetőség</th>
            <th>Válaszidő</th>
            <th>Mire alkalmas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Élő chat</td>
            <td>24/7</td>
            <td>2 percen belül</td>
            <td>Gyors kérdések, bónusz-segítség, befizetési problémák</td>
          </tr>
          <tr>
            <td>E-mail</td>
            <td>24/7</td>
            <td>Akár 24 óra</td>
            <td>Dokumentum feltöltése, részletes esetek, panaszok</td>
          </tr>
          <tr>
            <td>Telegram</td>
            <td>24/7</td>
            <td>Változó</td>
            <td>Gyors kérdések, akciók, bejelentések</td>
          </tr>
          <tr>
            <td>Telefon</td>
            <td>Nem elérhető</td>
            <td>-</td>
            <td>-</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- What Support Can Help With -->
  <section class="content-section content-section--alt" id="topics">
    <div class="container">
      <h2>Miben segíthet az ügyfélszolgálat?</h2>
      <p>Az ügyfélszolgálati csapatunk széles témakörben nyújt segítséget. Íme a leggyakoribb területek, amelyekben a játékosok segítséget kérnek:</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Fiók &amp; Regisztráció</h4>
          <p>Segítség a fiók létrehozásában, személyes adatok frissítésében, jelszó visszaállításban, felhasználónév visszaszerzésben és bejelentkezési problémáknál. Ha a fiókod zárolva van vagy korlátolt, az ügyfélszolgálat ellenőrizheti az állapotodat.</p>
        </div>
        <div class="info-card">
          <h4>Befizetések &amp; Fizetések</h4>
          <p>Segítség sikertelen befizetéseknél, fizetési módszerekkel kapcsolatos kérdéseknél, pénznemválasztásnál és tranzakciós státusz lekérdezéseknél. Az ügyfélszolgálat akkor is segít, ha egy befizetés nem jelenik meg az egyenlegeden.</p>
        </div>
        <div class="info-card">
          <h4>Kifizetések &amp; Nyeremény felvétele</h4>
          <p>Kérdések a kifizetések feldolgozási idejéről, függőben lévő kérelmekről, elutasított kifizetésekről és limitkorrekciókról. Kérjük, vedd figyelembe: <?php echo SITE_NAME; ?> hétvégén nem dolgoz fel kifizetéseket. Részletes információért látogasd meg a <a href="/hu/withdrawal">kifizetési oldalt</a>.</p>
        </div>
        <div class="info-card">
          <h4>Bónuszok &amp; Akciók</h4>
          <p>Bónuszfeltételek, forgalmi követelmények tisztázása, ajánlatok aktiválása és aktív bónuszok visszavonása. Az ügyfélszolgálat részleteket adhat konkrét akciókról és részvételi feltételekről.</p>
        </div>
        <div class="info-card">
          <h4>Ellenőrzés &amp; KYC</h4>
          <p>Segítség dokumentumok beküldésénél, ellenőrzési státusznál, elfogadott dokumentumtípusoknál és időkeretekkel kapcsolatban. A dokumentumokat a fiókbeállításokban töltheted fel, de az ügyfélszolgálat probléma esetén segít.</p>
        </div>
        <div class="info-card">
          <h4>Technikai problémák</h4>
          <p>Segítség, ha a játékok nem töltődnek be, weboldalhibáknál, mobil kompatibilitási problémáknál és böngésző-hibáknál. Az ügyfélszolgálat elemezheti a hibákat és technikai problémákat továbbíthatja a fejlesztői csapatnak.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Site Languages -->
  <section class="content-section" id="languages">
    <div class="container container--narrow">
      <h2>Támogatott nyelvek</h2>
      <p>A <?php echo SITE_NAME; ?> webhely 13 nyelven érhető el, hogy különböző régiókból érkező játékosoknak is segíthessen:</p>
      <div class="info-grid">
        <div class="info-card">
          <h4>Európai nyelvek</h4>
          <ul>
            <li>English</li>
            <li>Deutsch (German)</li>
            <li>Norsk (Norwegian)</li>
            <li>Fran&ccedil;ais (French)</li>
            <li>Italiano (Italian)</li>
            <li>Espa&ntilde;ol (Spanish)</li>
            <li>Portugu&ecirc;s (Portuguese)</li>
            <li>Suomi (Finnish)</li>
            <li>&Ccaron;e&scaron;tina (Czech)</li>
          </ul>
        </div>
        <div class="info-card">
          <h4>További nyelvek</h4>
          <ul>
            <li>&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940; (Greek)</li>
            <li>&#1575;&#1604;&#1593;&#1585;&#1576;&#1610;&#1577; (Arabic)</li>
            <li>Polski (Polish)</li>
            <li>Magyar (Hungarian)</li>
          </ul>
        </div>
      </div>
      <p>Az ügyfélszolgálati munkatársak általában angolul tudnak segíteni, és az elérhetőségtől függően más felsorolt nyelveken is.</p>
    </div>
  </section>

  <!-- Tips for Contacting Support -->
  <section class="content-section content-section--alt" id="tips">
    <div class="container container--narrow">
      <h2>Így hozd ki a legtöbbet a támogatási kéréséből</h2>
      <p>Néhány egyszerű lépéssel segítheted a támogatási csapatot, hogy gyorsabban megoldják a problémádat:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Tartsd kéznél a fiókadataidat.</strong> A felhasználóneved vagy e-mail-címed segít az ügyfélszolgálatnak gyorsan megtalálni a fiókodat. Ha egy konkrét tranzakcióról van szó, tartsd kéznél a referenciaszámot.
          </div>
        </li>
        <li>
          <div>
            <strong>Írd le érthetően a problémát.</strong> Magyarázd el, mi történt, mikor történt, és mit vártál. Képernyőképek segítenek technikai problémáknál vagy vitatott tranzakcióknál.
          </div>
        </li>
        <li>
          <div>
            <strong>Válaszd a megfelelő csatornát.</strong> Sürgős ügyeknél (zárolt fiók, sikertelen befizetés) az élő chat a legjobb választás. Dokumentumok benyújtásához vagy összetett esetekhez a support@vipluck.com e-mail-cím ad több mozgásteret a csapatnak. Gyors kérdéseknél vagy akciófrissítéseknél próbáld a Telegram-csatornát.
          </div>
        </li>
        <li>
          <div>
            <strong>Nézd meg előbb a GYIK-ot.</strong> Sok általános kérdést - bónuszokról, kifizetésekről és fiókkezelésről - a weboldalon lévő GYIK-részek megválaszolnak. Egy gyors pillantás megkímélhet a várakozástól.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Responsible Gambling -->
  <section class="content-section" id="responsible">
    <div class="container container--narrow">
      <h2>Felelős játék &amp; Önkizárás</h2>
      <p><?php echo SITE_NAME; ?> komolyan veszi a felelős játékot. Ha úgy érzed, hogy a játékszokásaid problémássá válnak, az ügyfélszolgálati csapatunk segíthet befizetési limitek, hűtési idők vagy önkizárás beállításában a platformon.</p>
      <p>Az önkizárási lehetőségek az ideiglenes szünetektől a végleges fiókzárásig terjednek. Az aktiválás után az önkizárás csak a meghatározott időszak lejárta után vonható vissza. Vedd fel a kapcsolatot az ügyfélszolgálattal élő chaten, e-mailben a support@vipluck.com címen vagy Telegramon az elérhető lehetőségek megbeszéléséhez.</p>
      <p>Külső segítségért fordulhatsz olyan szervezetekhez, mint a Gamblers Anonymous (Névtelen Játékosok), amelyek ingyenes és bizalmas tanácsadást nyújtanak.</p>
    </div>
  </section>

  <!-- Support FAQ -->
  <section class="content-section content-section--alt" id="support-faq">
    <div class="container container--narrow">
      <h2>Ügyfélszolgálati GYIK</h2>

      <details class="faq-item">
        <summary>Több nyelven is elérhető a <?php echo SITE_NAME; ?> ügyfélszolgálata?</summary>
        <div class="faq-answer">
          <p>A weboldal 13 nyelven érhető el: angolul, németül, norvégul, franciául, olaszul, spanyolul, portugálul, görögül, arabul, lengyelül, magyarul, finnül és csehül. Az ügyfélszolgálati munkatársak általában angolul tudnak segíteni, és az elérhetőségtől függően más nyelveken is.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Milyen gyorsan válaszol az élő chat?</summary>
        <div class="faq-answer">
          <p>Normál körülmények között az élő chat válaszok 1-2 percen belül megérkeznek. Csúcsforgalom idején a várakozási idő valamivel hosszabb lehet, de a csapat azon dolgozik, hogy a késedelmeket minimálisra csökkentse.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mi a support e-mail-cím?</summary>
        <div class="faq-answer">
          <p>A <?php echo SITE_NAME; ?> ügyfélszolgálatát e-mailben a <strong>support@vipluck.com</strong> címen érheted el. Add meg a felhasználónevedet vagy regisztrált e-mail-címedet, a probléma leírását és az összes releváns képernyőképet vagy tranzakciós referenciát. Számíts 24 órán belüli válaszra.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Elérhető a support Telegramon?</summary>
        <div class="faq-answer">
          <p>Igen. <?php echo SITE_NAME; ?> rendelkezik hivatalos Telegram-csatornával, ahol támogatást kaphatsz, akciókat láthatsz és frissítéseket kaphatsz. A hivatalos csatorna linkje megtalálható a kaszinó weboldalán.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Segít a support egy bónusz visszavonásában?</summary>
        <div class="faq-answer">
          <p>Igen. Ha vissza szeretnél vonni egy aktív bónuszt, azt megteheted a fiókod profil részében, vagy felveheted a kapcsolatot az ügyfélszolgálattal élő chaten vagy e-mailben. Vedd figyelembe, hogy a bónusz visszavonása eltávolítja a bónuszösszeget és az abból származó nyereményeket.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mi van, ha a problémám nem oldódik meg?</summary>
        <div class="faq-answer">
          <p>Ha az első válasszal nem vagy elégedett, kérd meg, hogy az esetedet továbbítsák egy vezető munkatárshoz vagy feletteshez. Megoldatlan viták esetén hivatkozhatsz az Általános Szerződési Feltételekben meghatározott panaszkezelési eljárásokra is.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Be lehet állíttatni befizetési vagy veszteséglimiteket?</summary>
        <div class="faq-answer">
          <p>Igen. Vedd fel a kapcsolatot az ügyfélszolgálattal napi, heti vagy havi befizetési limitek beállításához. Kérhetsz veszteséglimiteket vagy munkamenet-időre vonatkozó emlékeztetőket is, hogy jobban kézben tartsd a játékszokásaidat.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
