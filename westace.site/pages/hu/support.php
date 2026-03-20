<?php
/**
 * Ügyfélszolgálat oldal - WestAce (Magyar / HU)
 */
$page_title = SITE_NAME . ' Ügyfélszolgálat - Élő chat, e-mail és felelős játék';
$page_description = 'Vedd fel a kapcsolatot a ' . SITE_NAME . ' Casino ügyfélszolgálatával 24/7 élő chaten vagy e-mailben a support@westace.com címen. Segítséget kapsz befizetésekkel, kifizetésekkel, bónuszokkal, fiókkérdésekkel és a felelős játékkal kapcsolatban.';
$current_page = 'support';
$lang_prefix = '/hu';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Ügyfélszolgálat';
$hero_description = 'Bármikor segítünk a fiókoddal, befizetésekkel, kifizetésekkel, bónuszokkal vagy technikai kérdésekkel kapcsolatban. Keress meg minket bármikor.';
$hero_cta = 'Élő chat indítása';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Kapcsolatfelvétel -->
  <section class="content-section" id="contact">
    <div class="container">
      <h2>Hogyan érhetsz el minket</h2>
      <p>A <?php echo SITE_NAME; ?> két támogatási csatornát kínál, hogy mindig segítséget kaphass, amikor szükséged van rá. Legyen szó gyors promóciós kérdésről vagy fizetési probléma megoldásáról, csapatunk éjjel-nappal elérhető.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128172;</div>
          <h4>Élő chat</h4>
          <p>A leggyorsabb módja a segítségkérésnek. Kattints a chat ikonra bármelyik oldalon, hogy ügynökkel kezdj csevegést. Az élő ügynökök általában 5 percen belül válaszolnak. Elérhető heti 7 napon, napi 24 órában.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9993;</div>
          <h4>E-mail támogatás</h4>
          <p>Részletes kérdésekhez vagy dokumentumok beküldéséhez az e-mail a legjobb megoldás. Írd meg kérdésedet a <strong>support@westace.com</strong> címre, és 24 órán belül választ kapsz. Tüntesd fel a fiókadataidat és a probléma egyértelmű leírását.</p>
        </div>
      </div>

      <table class="data-table" style="margin-top: var(--space-8);">
        <thead>
          <tr>
            <th>Csatorna</th>
            <th>Elérhetőség</th>
            <th>Válaszidő</th>
            <th>Mire a legjobb</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Élő chat</td>
            <td>24/7</td>
            <td>5 percen belül</td>
            <td>Gyors kérdések, bónuszok, befizetési problémák</td>
          </tr>
          <tr>
            <td>E-mail</td>
            <td>24/7</td>
            <td>Legfeljebb 24 óra</td>
            <td>Dokumentumok feltöltése, összetett ügyek, panaszok</td>
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

  <!-- Mivel segíthet az ügyfélszolgálat -->
  <section class="content-section content-section--alt" id="topics">
    <div class="container">
      <h2>Mivel tud segíteni az ügyfélszolgálat?</h2>
      <p>Ügyfélszolgálatunk széles témakörben nyújt segítséget. Az alábbiakban a leggyakoribb területek találhatók, amelyekkel a játékosok megkeresnek minket:</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Fiók és regisztráció</h4>
          <p>Segítség a fiók létrehozásában, személyes adatok frissítésében, jelszó visszaállításában és bejelentkezési problémák megoldásában. Ha a fiókod zárolt vagy korlátozott, az ügyfélszolgálat felülvizsgálhatja az állapotát.</p>
        </div>
        <div class="info-card">
          <h4>Befizetések és fizetések</h4>
          <p>Segítség sikertelen befizetések, fizetési módokkal kapcsolatos kérdések és tranzakciós státusz ellenőrzése esetén. Az ügyfélszolgálat akkor is tud segíteni, ha egy befizetés nem jelenik meg az egyenlegen.</p>
        </div>
        <div class="info-card">
          <h4>Kifizetések</h4>
          <p>Kérdések a kifizetések feldolgozási idejéről, függőben lévő kérelmekről és visszautasított kifizetésekről. A részletes kifizetési információkért látogasd meg a <a href="/hu/withdrawal">Kifizetés oldalt</a>.</p>
        </div>
        <div class="info-card">
          <h4>Bónuszok és promóciók</h4>
          <p>Felvilágosítás a bónusz feltételeiről, megforgatási követelményekről, ajánlatok aktiválásáról és aktív bónuszok lemondásáról. Az ügyfélszolgálat elmagyarázza a konkrét promóciók részleteit és a jogosultsági feltételeket.</p>
        </div>
        <div class="info-card">
          <h4>Ellenőrzés és KYC</h4>
          <p>Útmutatás a dokumentumok beküldéséhez, az ellenőrzési állapot figyelemmel kíséréséhez, az elfogadott dokumentumtípusokhoz és az időbecslésekhez. Az ügyfélszolgálat az ellenőrzési folyamat során felmerülő problémáknál is tud segíteni.</p>
        </div>
        <div class="info-card">
          <h4>Technikai problémák</h4>
          <p>Segítség nem töltődő játékokkal, webhelyes hibákkal, mobilkompatibilitási gondokkal és böngészővel kapcsolatos problémákkal. Az ügyfélszolgálat elhárítja a hibákat, és szükség esetén a fejlesztői csapathoz továbbítja a problémát.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tippek a kapcsolatfelvételhez -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Hogyan kapj gyors és hatékony segítséget</h2>
      <p>Néhány egyszerű lépéssel sokat segíthetsz az ügyfélszolgálatnak, hogy gyorsabban megoldják az ügyed:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Tartsd kéznél a fiókadataidat.</strong> A felhasználóneved vagy e-mail-cimed segít az ügyfélszolgálatnak gyorsan megtalálni a fiókodat. Ha a probléma egy konkrét tranzakcióhoz kapcsolódik, legyen nálad a referenciaszám.
          </div>
        </li>
        <li>
          <div>
            <strong>Írd le a problémát egyértelműen.</strong> Magyarázd el, mi történt, mikor történt, és mit vártál. A képernyőképek hasznosak technikai problémáknál vagy vitatott tranzakcióknál.
          </div>
        </li>
        <li>
          <div>
            <strong>Válaszd a megfelelő csatornát.</strong> Sürgős esetekben (zárolt fiók, sikertelen befizetés) az élő chat a legjobb választás. Dokumentumok beküldéséhez vagy összetett, vizsgálatot igénylő ügyeknél a support@westace.com e-mail-cím ad több lehetőséget a csapatnak.
          </div>
        </li>
        <li>
          <div>
            <strong>Nézd meg a GYIK-et előbb.</strong> Sok bónuszokkal, kifizetésekkel és fiókkezeléssel kapcsolatos kérdés megválaszolható az oldalon elhelyezett GYIK szekciókból.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Felelős játék -->
  <section class="content-section content-section--alt" id="responsible">
    <div class="container container--narrow">
      <h2>Felelős játék és önsegítés</h2>
      <p>A <?php echo SITE_NAME; ?> komolyan veszi a felelős szerencsejátékot. Ha úgy érzed, hogy a játékszokásaid problémát okoznak, ügyfélszolgálatunk segíthet öntiltást kérelmezni a platformon.</p>
      <p>Az öntiltás meghatározott időre vagy véglegesen kérhető. Az öntiltás aktiválása után nem vonható vissza a megadott időszak lejártáig. Az öntiltás ideje alatt nem tudsz belépni a fiókodba, és nem tehetsz fogadásokat. Az öntiltás kérvényezéséhez vedd fel a kapcsolatot az ügyfélszolgálattal élő chaten vagy a support@westace.com e-mail-címen.</p>

      <h3>Önértékelés</h3>
      <p>Tedd fel magadnak az alábbi kérdéseket őszintén, hogy megítéld, befolyásolja-e a szerencsejáték az életed:</p>
      <ul>
        <li>Elveszíti a kiadásaid a szerencsejátékra az irányítását?</li>
        <li>Kölcsönt veszel fel a játék folytatásához?</li>
        <li>Kevesebb időt töltesz a családdal és a barátaiddal?</li>
        <li>Zavar mások véleménye a szerencsejátékodról?</li>
        <li>Elvesztetted az érdeklődésedet a megszokott hobbijaid és tevékenységeid iránt?</li>
        <li>Rosszul érzed magad vagy szorongsz a veszteségek miatt?</li>
        <li>Hazudtál már arról, mennyi időt vagy pénzt fordítasz a szerencsejátékra?</li>
      </ul>
      <p>Ha több kérdésre igennel válaszoltál, javasoljuk, hogy fordulj segítségért:</p>

      <h3>Magyar segélyvonalak és szervezetek</h3>
      <ul>
        <li><strong>Játékszenvedély segélyvonal</strong> - ingyenes telefonos segítségnyújtás szerencsejáték-problémával küzdők számára Magyarországon. Telefonszám: 06-80-20-20-36 (ingyenes)</li>
        <li><strong>SZTFH (Szerencsejáték Felügyelet - Szabályozói Hatóság)</strong> - a magyarországi szerencsejáték-szabályozásért felelős hatóság, amelyhez panaszt nyújthatsz be: <a href="https://www.sztfh.hu" target="_blank" rel="noopener noreferrer">www.sztfh.hu</a></li>
        <li><strong>Gambling Therapy</strong> - ingyenes, bizalmas online támogatás és tanácsadás problémás szerencsejátékosoknak világszerte: <a href="https://www.gamblingtherapy.org" target="_blank" rel="noopener noreferrer">www.gamblingtherapy.org</a></li>
        <li><strong>Gamblers Anonymous</strong> - önsegítő közösség szerencsejáték-függőségen áteső személyek számára, rendszeres csoportülésekkel: <a href="https://www.gamblersanonymous.org" target="_blank" rel="noopener noreferrer">www.gamblersanonymous.org</a></li>
      </ul>

      <h3>Hasznos tanácsok</h3>
      <ul>
        <li>Ne tekintsd a szerencsejátékot bevételi forrásnak</li>
        <li>Határozz meg időre és pénzre vonatkozó keretet, és tartsd be</li>
        <li>Csak olyan összeggel játssz, amelynek elvesztését megengedheted magadnak</li>
        <li>Kerüld a szerencsejátékot, ha stresszes vagy, ideges vagy, vagy alkohol hatása alatt állsz</li>
      </ul>
    </div>
  </section>

  <!-- Ügyfélszolgálat GYIK -->
  <section class="content-section" id="support-faq">
    <div class="container container--narrow">
      <h2>Ügyfélszolgálat GYIK</h2>

      <details class="faq-item">
        <summary>A <?php echo SITE_NAME; ?> ügyfélszolgálata 24/7 elérhető?</summary>
        <div class="faq-answer">
          <p>Igen. Az élő chat és az e-mail-támogatás egyaránt éjjel-nappal elérhető, heti 7 napon 24 órában.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Milyen gyorsan válaszol az élő chat?</summary>
        <div class="faq-answer">
          <p>Az élő chat ügynökök általában 5 percen belül válaszolnak. Csúcsidőszakokban a várakozási idő kissé hosszabb lehet.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mi az ügyfélszolgálat e-mail-címe?</summary>
        <div class="faq-answer">
          <p>A <?php echo SITE_NAME; ?> ügyfélszolgálatát a <strong>support@westace.com</strong> címen érheted el. Tüntesd fel a felhasználónevedet vagy a regisztrált e-mail-cimedet, a probléma leírását és a releváns képernyőképeket. Válasz 24 órán belül érkezik.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Segíthet az ügyfélszolgálat bónusz lemondásában?</summary>
        <div class="faq-answer">
          <p>Igen. Ha le szeretnél mondani egy aktív bónuszról, vedd fel a kapcsolatot az ügyfélszolgálattal élő chaten vagy e-mailben. Ne feledd, hogy a bónusz lemondásával a bónuszösszeg és az abból keletkezett nyeremények elvesznek.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mi a teendő, ha a probléma nem oldódik meg?</summary>
        <div class="faq-answer">
          <p>Ha nem vagy elégedett az első válasszal, kérj eszkálálást egy vezető ügynökhöz. Adj meg minél több részletet, hogy a csapat alaposan meg tudja vizsgálni az ügyedet.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kérhetek öntiltást?</summary>
        <div class="faq-answer">
          <p>Igen. Öntiltást kérhetsz meghatározott időre vagy véglegesen élő chaten vagy e-mailben az ügyfélszolgálaton keresztül. Az öntiltás ideje alatt nem tudsz belépni a fiókodba, és nem tehetsz fogadásokat.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
