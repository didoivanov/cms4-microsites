<?php
/**
 * Login Page – Hungarian
 */
$page_title = SITE_NAME . ' Bejelentkezés - Lépj Be a Casino Fiókodba';
$page_description = 'Jelentkezz be a ' . SITE_NAME . ' Casino fiókodba. Érd el a játékaidat, bónuszaidat és egyenlegedet. Problémád van a bejelentkezéssel? Állítsd vissza a jelszavadat, vagy keresd az ügyfélszolgálatot segítségért.';
$current_page = 'login';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Bejelentkezés';
$hero_description = 'Jelentkezz be a fiókod, játékaid és bónuszaid eléréséhez.';
$hero_cta = 'Regisztrálj Most';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Login Help -->
  <section class="content-section content-section--alt" id="login-help">
    <div class="container container--narrow">
      <h2>Hogyan Jelentkezz Be a <?php echo SITE_NAME; ?> Casinóba</h2>
      <p>A <?php echo SITE_NAME; ?> fiókodba való bejelentkezés mindössze néhány másodpercet vesz igénybe. Íme, mit kell tenned asztali gépen és mobilon:</p>

      <h3>Bejelentkezés Asztali Gépen</h3>
      <p>Látogass el a <?php echo SITE_NAME; ?> weboldalára, és kattints a "Log In" gombra az oldal jobb felső sarkában, a "Register" gomb mellett. Add meg a regisztrált email címedet és jelszavadat, majd kattints a "Log In" gombra a fiókod eléréséhez. A "Forgot your password?" link közvetlenül az űrlap alatt található, ha vissza kell állítanod a bejelentkezési adataidat.</p>

      <h3>Bejelentkezés Mobilon</h3>
      <p>Telefonodon vagy tableteden nyisd meg a <?php echo SITE_NAME; ?> weboldalát a mobilböngésződben. A "Log In" gomb a fejléc területén látható. Koppints rá, add meg az email címedet és jelszavadat, majd koppints a "Log In" gombra. A mobil verzió ugyanazokat a funkciókat kínálja, mint az asztali oldal, beleértve a jelszó-visszaállítást és a fiókregisztrációt.</p>

      <h3>Problémád Van a Bejelentkezéssel?</h3>
      <p>Ha nehézségeid vannak a fiókodba való bejelentkezéssel, íme néhány dolog, amit érdemes ellenőrizni:</p>
      <ul>
        <li>Győződj meg róla, hogy a helyes email címet és jelszót adod meg. A jelszavak kis- és nagybetű-érzékenyek.</li>
        <li>Töröld a böngésződ gyorsítótárát és a cookie-kat, majd próbáld újra.</li>
        <li>Ellenőrizd, hogy az internetkapcsolatod stabil-e.</li>
        <li>Ha elfelejtetted a jelszavadat, használd a "Forgot your password?" linket a visszaállító email kéréséhez.</li>
        <li>Kerüld a VPN használatát, mivel a <?php echo SITE_NAME; ?> nem engedélyezi a VPN hozzáférést. A VPN-en keresztüli bejelentkezési kísérlet fiókkorlátozásokat eredményezhet.</li>
      </ul>
      <p>Ha a fentiek egyike sem oldja meg a problémát, keresd az <a href="/support">ügyfélszolgálatot</a> élő chaten valós idejű segítségért.</p>
    </div>
  </section>

  <!-- Registration Overview -->
  <section class="content-section" id="register">
    <div class="container container--narrow">
      <h2>Új Fiók Létrehozása</h2>
      <p>Ha még nincs <?php echo SITE_NAME; ?> fiókod, a regisztráció gyors, és körülbelül egy percet vesz igénybe. Íme a folyamat áttekintése:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Kattints a "Register" gombra a weboldalon.</strong> A regisztrációs gomb az oldal jobb felső sarkában található. Megjelenik egy felugró ablak, ahol kiválaszthatod az előnyben részesített üdvözlő bónuszodat (kaszinó, többszörös befizetés vagy sport), vagy lemondasz a bónuszokról.
          </div>
        </li>
        <li>
          <div>
            <strong>Add meg az email címedet és hozz létre egy jelszót.</strong> Ezek lesznek a bejelentkezési adataid a továbbiakban. Ha van promókódod, ebben a lépésben adhatod meg.
          </div>
        </li>
        <li>
          <div>
            <strong>Töltsd ki a személyes adataidat.</strong> Meg kell adnod a teljes nevedet, születési dátumodat, nemedet, telefonszámodat és lakcímedet. Ezek az információk a fiókellenőrzéshez szükségesek.
          </div>
        </li>
        <li>
          <div>
            <strong>Fejezd be a regisztrációt.</strong> Kattints a "Create Profile" gombra a fiókod véglegesítéséhez. Ha kész, elvégezheted az első befizetésedet és elkezdhetsz játszani.
          </div>
        </li>
      </ol>

      <p>A regisztráció után érdemes azonnal feltöltened az ellenőrzési dokumentumaidat. Ez felgyorsítja a folyamatot, amikor igényled az első kifizetésedet. A dokumentumfeltöltési szekciót a profilod «Beállítások - Fiók Ellenőrzés» részében találod.</p>
    </div>
  </section>

  <!-- Login FAQ -->
  <section class="content-section content-section--alt" id="login-faq">
    <div class="container container--narrow">
      <h2>Bejelentkezés GYIK</h2>

      <details class="faq-item">
        <summary>Mi kell a bejelentkezéshez?</summary>
        <div class="faq-answer">
          <p>Szükséged van a regisztráció során megadott email címedre és jelszavadra. Ha elfelejtetted a jelszavadat, kattints a "Forgot your password?" linkre a bejelentkezési űrlapon, hogy visszaállító linket kapj emailben.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Használhatok VPN-t a <?php echo SITE_NAME; ?> eléréséhez?</summary>
        <div class="faq-answer">
          <p>Nem. A <?php echo SITE_NAME; ?> szigorúan tiltja a VPN használatát. A VPN-en keresztüli bejelentkezés a fiókod felfüggesztését és a kapcsolódó nyeremények elvesztését eredményezheti. A kaszinó régiónként személyre szabott élményt nyújt.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>A fiókom zárolva van. Mit tegyek?</summary>
        <div class="faq-answer">
          <p>A fiókzárolás biztonsági okokból történhet, például több sikertelen bejelentkezési kísérlet vagy gyanús tevékenység miatt. Vedd fel a kapcsolatot az ügyfélszolgálattal élő chaten vagy emailen, hogy felülvizsgálják és esetlegesen feloldják a fiókodat.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Hogyan változtathatom meg a jelszavamat?</summary>
        <div class="faq-answer">
          <p>Bejelentkezés után navigálj a fiókbeállításokhoz a jelszavad frissítéséhez. Ha nem tudsz bejelentkezni, használd a jelszó-visszaállítási funkciót a bejelentkezési oldalon. A visszaállító link a regisztrált email címedre érkezik.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Milyen információ szükséges a regisztrációhoz?</summary>
        <div class="faq-answer">
          <p>A regisztrációhoz szükséges az email címed, egy jelszó, teljes neved, születési dátumod, nemed, telefonszámod, országod, városod és irányítószámod. Ezeket az adatokat személyazonosság-ellenőrzésre és a szabályozási követelmények teljesítésére használjuk.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
