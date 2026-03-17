<?php
/**
 * Support Page – Hungarian
 */
$page_title = SITE_NAME . ' Ügyfélszolgálat - Élő Chat, Email & Súgóközpont';
$page_description = 'Lépj kapcsolatba a ' . SITE_NAME . ' Casino ügyfélszolgálatával 0-24 élő chaten vagy emailen. Segítséget kaphatsz befizetésekkel, kifizetésekkel, bónuszokkal, fiókproblémákkal és technikai kérdésekkel kapcsolatban.';
$current_page = 'support';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Ügyfélszolgálat';
$hero_description = 'Segítünk bármilyen kérdésben a fiókoddal, befizetésekkel, kifizetésekkel, bónuszokkal vagy technikai problémákkal kapcsolatban. Keress minket bármikor.';
$hero_cta = 'Élő Chat Megnyitása';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Contact Options -->
  <section class="content-section" id="contact">
    <div class="container">
      <h2>Hogyan Érhetsz El Minket</h2>
      <p>A <?php echo SITE_NAME; ?> két fő támogatási csatornát kínál, mindkettő éjjel-nappal elérhető. Akár egy gyors kérdésed van egy promócióról, akár segítségre van szükséged egy fizetési probléma megoldásához, a csapat készen áll a segítségnyújtásra.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128172;</div>
          <h4>Élő Chat</h4>
          <p>A leggyorsabb módja a segítségkérésnek. Kattints a chat ikonra a weboldal bármely oldalán, hogy beszélgetést kezdj egy ügyfélszolgálati munkatárssal. Az átlagos válaszidő 2 percen belüli szokásos időszakban. A nap 24 órájában, a hét 7 napján elérhető.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9993;</div>
          <h4>Email Támogatás</h4>
          <p>Részletes kérdések vagy dokumentumok benyújtása esetén az email a legjobb lehetőség. Küldd el a megkeresésedet, és 24 órán belül számíthatsz válaszra. Mindenképpen add meg a fiókod adatait és a probléma világos leírását.</p>
        </div>
      </div>

      <table class="data-table" style="margin-top: var(--space-8);">
        <thead>
          <tr>
            <th>Csatorna</th>
            <th>Elérhetőség</th>
            <th>Válaszidő</th>
            <th>Ideális</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Élő Chat</td>
            <td>0-24</td>
            <td>2 percen belül</td>
            <td>Gyors kérdések, bónusz segítség, befizetési problémák</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>0-24</td>
            <td>Akár 24 óra</td>
            <td>Dokumentumfeltöltés, részletes esetek, panaszok</td>
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
      <h2>Miben Segíthet az Ügyfélszolgálat?</h2>
      <p>Az ügyfélszolgálati csapat témák széles körében nyújt segítséget. Íme a leggyakoribb területek, amelyekkel a játékosok megkeresik a támogatást:</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Fiók &amp; Regisztráció</h4>
          <p>Segítség fiók létrehozásában, személyes adatok frissítésében, jelszó visszaállításban és bejelentkezési problémák megoldásában. Ha a fiókod zárolva vagy korlátozva van, az ügyfélszolgálat felülvizsgálhatja a státuszodat.</p>
        </div>
        <div class="info-card">
          <h4>Befizetések &amp; Fizetések</h4>
          <p>Segítség sikertelen befizetéseknél, fizetési mód kérdéseknél, valutaopciók és tranzakciós állapot ellenőrzésnél. Az ügyfélszolgálat abban is tud segíteni, ha egy befizetés nem jelenik meg az egyenlegedben.</p>
        </div>
        <div class="info-card">
          <h4>Kifizetések &amp; Pénzforgalom</h4>
          <p>Kérdések a kifizetési feldolgozási időkről, függőben lévő kérelmekről, elutasított kifizetésekről és limitbeállításokról. Részletes kifizetési információkért látogass el a <a href="<?php echo $lang_prefix; ?>/withdrawal">Kifizetések oldalra</a>.</p>
        </div>
        <div class="info-card">
          <h4>Bónuszok &amp; Promóciók</h4>
          <p>Tisztázás a bónuszfeltételekről, fogadási követelményekről, ajánlatok aktiválásáról és aktív bónuszok törléséről. Az ügyfélszolgálat elmagyarázhatja az egyes promóciók részleteit és jogosultsági feltételeit.</p>
        </div>
        <div class="info-card">
          <h4>Ellenőrzés &amp; KYC</h4>
          <p>Útmutatás dokumentumok benyújtásához, ellenőrzési státuszhoz, elfogadott dokumentumtípusokhoz és becsült határidőkhöz. Dokumentumokat a fiókbeállításaidban tölthetsz fel, de az ügyfélszolgálat segíthet, ha problémák merülnek fel.</p>
        </div>
        <div class="info-card">
          <h4>Technikai Problémák</h4>
          <p>Segítség, ha a játékok nem töltődnek be, weboldal hibák, mobil kompatibilitási problémák és böngészővel kapcsolatos gondok esetén. Az ügyfélszolgálat elháríthatja a hibát, és továbbíthatja a technikai problémákat a fejlesztői csapatnak.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Contacting Support -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Hogyan Hozd Ki a Legtöbbet a Megkeresésedből</h2>
      <p>Néhány egyszerű lépés segíthet az ügyfélszolgálatnak gyorsabban megoldani a problémádat:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Tartsd kéznél a fiókod adatait.</strong> Az email címed vagy felhasználóneved segít az ügyfélszolgálatnak gyorsan megtalálni a fiókodat. Ha a probléma egy konkrét tranzakcióval kapcsolatos, legyen nálad a referenciaszám.
          </div>
        </li>
        <li>
          <div>
            <strong>Írd le a problémát világosan.</strong> Magyarázd el, mi történt, mikor történt, és mit vártál, hogy történjen. A képernyőképek hasznosak technikai problémák vagy vitatott tranzakciók esetén.
          </div>
        </li>
        <li>
          <div>
            <strong>Használd a megfelelő csatornát.</strong> Sürgős problémák esetén (zárolt fiók, sikertelen befizetés) az élő chat a legjobb választás. Dokumentumok benyújtásához vagy összetett, vizsgálatot igénylő esetekhez az email több teret ad a csapatnak a munkához.
          </div>
        </li>
        <li>
          <div>
            <strong>Először nézd meg a GYIK-et.</strong> Sok gyakori kérdés a bónuszokról, kifizetésekről és fiókkezelésről megtalálható a GYIK szekciókban ezen az oldalon. Egy gyors ellenőrzés megspórolhatja neked a várakozást.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Responsible Gambling -->
  <section class="content-section content-section--alt" id="responsible">
    <div class="container container--narrow">
      <h2>Felelős Játék &amp; Önkizárás</h2>
      <p>A <?php echo SITE_NAME; ?> komolyan veszi a felelős játékot. Ha úgy érzed, hogy a szerencsejáték-szokásaid problémává válnak, az ügyfélszolgálat segíthet befizetési limitek, lehűlési időszakok beállításában, vagy önkizárás megszervezésében a platformról.</p>
      <p>Az önkizárási lehetőségek az ideiglenes szünetektől a végleges fiókbezárásig terjednek. Az aktiválás után az önkizárás nem vonható vissza a beállított időszak lejártáig. Vedd fel a kapcsolatot az ügyfélszolgálattal élő chaten vagy emailen az elérhető lehetőségek megbeszéléséhez.</p>
      <p>Külső támogatásért fordulhatsz olyan szervezetekhez, mint a GamCare vagy a Gamblers Anonymous, ahol ingyenes, bizalmas tanácsadást és segítséget kaphatsz.</p>
    </div>
  </section>

  <!-- Support FAQ -->
  <section class="content-section" id="support-faq">
    <div class="container container--narrow">
      <h2>Ügyfélszolgálat GYIK</h2>

      <details class="faq-item">
        <summary>Elérhető a <?php echo SITE_NAME; ?> ügyfélszolgálata több nyelven?</summary>
        <div class="faq-answer">
          <p>A weboldal elérhető lengyel, angol, finn, német, magyar, norvég, olasz, spanyol, cseh és portugál nyelven. Az ügyfélszolgálati munkatársak általában angolul tudnak segíteni, és elérhetőségtől függően más felsorolt nyelveken is képesek lehetnek segítségnyújtásra.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Milyen gyorsan válaszol az élő chat?</summary>
        <div class="faq-answer">
          <p>Normál körülmények között az élő chat válaszok 1-2 percen belül érkeznek. Csúcsidőben vagy nagy forgalmú időszakokban a várakozási idő kissé hosszabb lehet, de a csapat igyekszik minimálisra csökkenteni a késéseket.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Segíthet az ügyfélszolgálat bónusz törlésében?</summary>
        <div class="faq-answer">
          <p>Igen. Ha törölni szeretnéd az aktív bónuszodat, megteheted magad a fiókod Profil szekciójából, vagy felveheted a kapcsolatot az ügyfélszolgálattal élő chaten vagy emailen. Ne feledd, hogy a bónusz törlése eltávolítja a bónusz összegét és az abból származó nyereményeket is.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mi van, ha a problémám nem oldódik meg?</summary>
        <div class="faq-answer">
          <p>Ha nem vagy elégedett az első válasszal, kérd az ügyed továbbítását egy vezető ügynökhöz vagy feletteshez. Megoldatlan viták esetén a kaszinó panaszkezelési eljárásaira is hivatkozhatsz, amelyeket az Általános Szerződési Feltételek tartalmaznak.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kérhetek befizetési vagy veszteségi limitet?</summary>
        <div class="faq-answer">
          <p>Igen. Vedd fel a kapcsolatot az ügyfélszolgálattal napi, heti vagy havi befizetési limitek beállításához. Kérhetsz veszteségi limiteket vagy játékidő-emlékeztetőket is, amelyek segítenek a szerencsejáték-tevékenységed kezelésében.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
