<?php
/**
 * Login Page – Hungarian
 */
$page_title = SITE_NAME . ' Bejelentkezés - Belépés a kaszinó fiókodba';
$page_description = 'Jelentkezz be a ' . SITE_NAME . ' Casino fiókodba. Hozzáférés a játékokhoz, bónuszokhoz és az egyenlegedhez. Gondod van a bejelentkezéssel? Állítsd vissza a jelszavadat, kérd vissza a felhasználónevedet, vagy vedd fel a kapcsolatot az ügyfélszolgálattal.';
$current_page = 'login';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Bejelentkezés';
$hero_description = 'Jelentkezz be, hogy hozzáférj a fiókodhoz, a játékokhoz és a bónuszokhoz.';
$hero_cta = 'Regisztrálj most';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Login Help -->
  <section class="content-section content-section--alt" id="login-help">
    <div class="container container--narrow">
      <h2>Így léphetsz be a <?php echo SITE_NAME; ?> Casino fiókodba</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <p style="margin-top:0">A <?php echo SITE_NAME; ?>-fiókodba való bejelentkezés mindössze néhány másodpercet vesz igénybe. Így működik asztali számítógépen és mobilon egyaránt:</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-login.png" alt="<?php echo SITE_NAME; ?> Casino bejelentkezési képernyő felhasználónévvel és jelszóval" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>

      <h3>Bejelentkezés asztali gépen</h3>
      <p>Látogasd meg a <?php echo SITE_NAME; ?> weboldalt, és kattints a jobb felső sarokban lévő "Bejelentkezés" gombra, a "Regisztráció" gomb mellett. Add meg a felhasználónevedet vagy e-mail-címedet és a jelszavadat, majd kattints a "Bejelentkezés" gombra a fiókod eléréséhez. A "Elfelejtett jelszó?" és "Elfelejtett felhasználónév?" linkek közvetlenül az űrlap alatt találhatók, ha vissza kell szerezni a bejelentkezési adataidat.</p>

      <h3>Bejelentkezés mobilon</h3>
      <p>Okostelefonon vagy tableten nyisd meg a <?php echo SITE_NAME; ?> weboldalt a mobilböngésződben. A "Bejelentkezés" gomb a felső részben látható. Koppints rá, add meg a felhasználónevedet vagy e-mail-címedet és a jelszavadat, majd koppints a "Bejelentkezés" gombra. A mobilos verzió ugyanolyan funkciókat kínál, mint az asztali oldal, beleértve a jelszó-visszaállítást, a felhasználónév-visszaszerzést és a fiókregisztrációt.</p>

      <h3>Visszatérő játékosoknak</h3>
      <p><?php echo SITE_NAME; ?> sütiket használ a visszatérő játékosok felismerésére. Ha korábban ugyanazon az eszközön és böngészőben jelentkeztél be, a felhasználóneved vagy e-mail-cím előre kitöltve jelenhet meg a bejelentkezési űrlapon. Csak add meg a jelszavadat és kattints a "Bejelentkezés" gombra. A böngésző sütijének törlése vagy inkognito mód használata esetén újra meg kell adni a teljes bejelentkezési adatokat.</p>

      <h3>Bejelentkezési problémák?</h3>
      <p>Ha nehézséged van a bejelentkezéssel, ellenőrizd az alábbiakat:</p>
      <ul>
        <li>Győződj meg arról, hogy a helyes felhasználónevet (vagy e-mail-t) és jelszót adod meg. A jelszavak kis- és nagybetű-érzékenyek.</li>
        <li>Töröld a böngésző gyorsítótárát és a sütiket, majd próbáld újra.</li>
        <li>Ellenőrizd, hogy az internetkapcsolatod stabil-e.</li>
        <li>Ha elfelejtettél a jelszavad, az "Elfelejtett jelszó?" linkkel kérhetsz visszaállítási e-mailt.</li>
        <li>Ha elfelejtettél a felhasználóneveddel, az "Elfelejtett felhasználónév?" linkkel kérheted azt vissza a regisztrált e-mail-címre.</li>
      </ul>
      <p>Ha semmi sem segít, vedd fel a kapcsolatot az <a href="/hu/support">ügyfélszolgálattal</a> élő chaten, e-mailben a support@vipluck.com címen vagy Telegramon.</p>
    </div>
  </section>

  <!-- Registration Overview -->
  <section class="content-section" id="register">
    <div class="container container--narrow">
      <h2>Új fiók létrehozása</h2>
      <p>Ha még nincs <?php echo SITE_NAME; ?>-fiókod, a regisztráció gyorsan elvégezhető és körülbelül egy percet vesz igénybe. Nincs szükség e-mail vagy telefonos megerősítésre. A folyamat a következőképpen zajlik:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Kattints a "Regisztráció" gombra a weboldalon.</strong> A regisztrációs gomb a jobb felső sarokban található. Megnyílik egy ablak, ahol kiválaszthatod a kívánt üdvözlő bónuszt (kaszinó, többszörös befizetés vagy sport), vagy teljesen lemondasz a bónuszokról.
          </div>
        </li>
        <li>
          <div>
            <strong>Válassz felhasználónevet, add meg az e-mail-címedet és hozz létre egy jelszót.</strong> A felhasználónevedet az e-mail-címeddel együtt fogod használni a bejelentkezéshez. Ha van promóciós kódod, itt adhatod meg.
          </div>
        </li>
        <li>
          <div>
            <strong>Töltsd ki a személyes adatokat.</strong> Meg kell adnod a teljes nevedet, születési dátumodat, nemedet, telefonszámodat és cimedet. Ezeket az adatokat az első kifizetéskor szükséges fiók-ellenőrzéshez kérik.
          </div>
        </li>
        <li>
          <div>
            <strong>Fejezd be a regisztrációt.</strong> Kattints a "Profil létrehozása" gombra a fiókod aktiválásához. Nincs szükség e-mail vagy telefonos megerősítésre - a fiókod azonnal aktív. Közvetlenül megteheted az első befizetésedet és elkezdhetsz játszani.
          </div>
        </li>
      </ol>

      <p>A regisztráció után érdemes azonnal feltölteni az ellenőrző dokumentumokat. Ez meggyorsítja a folyamatot az első kifizetésednél. A feltöltési területet a profilodban a "Beállítások - Fiók-ellenőrzés" alatt találod.</p>
    </div>
  </section>

  <!-- Account Recovery -->
  <section class="content-section content-section--alt" id="recovery">
    <div class="container container--narrow">
      <h2>Fiók visszaszerzése</h2>

      <div class="two-col">
        <div>
          <h3>Elfelejtett jelszó?</h3>
          <p>Kattints az "Elfelejtett jelszó?" linkre a bejelentkezési űrlapon. Add meg a regisztrált e-mail-címedet, és a visszaállítási link elküldésre kerül a postaládádba. Kattints az e-mailben található linkre egy új jelszó létrehozásához. A link csak korlátozott ideig érvényes - tehát ne halogasd a használatát.</p>
          <p>Ha néhány percen belül nem kapod meg az e-mailt, ellenőrizd a spam vagy levélszemét mappádat. Ha az e-mail mégse érkezik meg, vedd fel a kapcsolatot az <a href="/hu/support">ügyfélszolgálattal</a>.</p>
        </div>
        <div>
          <h3>Elfelejtett felhasználónév?</h3>
          <p>Kattints az "Elfelejtett felhasználónév?" linkre a bejelentkezési űrlapon. Add meg a fiókodhoz tartozó e-mail-címedet, és a felhasználóneved elküldésre kerül erre az e-mail-címre. Ez hasznos, ha valamikor régebben regisztráltál és már nem emlékszel a választott felhasználónevedre.</p>
          <p>Ha már nincs hozzáférésed a regisztrált e-mail-címéhez, vedd fel a kapcsolatot az ügyfélszolgálattal élő chaten vagy e-mailben a support@vipluck.com címre, hogy igazolhasd a személyazonosságodat és visszaszerezhessed a fiókodat.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Account Security -->
  <section class="content-section" id="security">
    <div class="container container--narrow">
      <h2>Fiókbiztonság</h2>
      <p>Néhány egyszerű lépéssel megvédheted a <?php echo SITE_NAME; ?>-fiókodat az illetéktelen hozzáféréstől:</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Erős jelszó használata</h4>
          <p>Válassz legalább 8 karakter hosszú jelszót, amely tartalmaz nagybetűket, kisbetűket, számokat és speciális karaktereket. Ne használd ugyanazt a jelszót más webhelyeken is. Ha bizonytalan vagy, jelszókezelő szoftver segíthet biztonságos jelszavak generálásában és tárolásában.</p>
        </div>
        <div class="info-card">
          <h4>Bejelentkezési adatok védelme</h4>
          <p>Soha ne oszd meg a felhasználónevedet és jelszavadat másokkal. A <?php echo SITE_NAME; ?> ügyfélszolgálata soha nem kéri el a jelszavadat. Ha ilyen kérést kapsz, az nem a kaszinótól érkezett - azonnal vedd fel a kapcsolatot a támogatással.</p>
        </div>
        <div class="info-card">
          <h4>Biztonságos eszköz használata</h4>
          <p>Lehetőleg csak a saját, megbízható eszközödről jelentkezz be. Nyilvános számítógépeken vagy megosztott Wi-Fi hálózatokon kerüld a bejelentkezést. Ha mégis nyilvános eszközről kell belépned, kijelentkezés után töröld a böngészési előzményeket és a sütiket.</p>
        </div>
      </div>

      <div class="highlight-box" style="margin-top: var(--space-6);">
        <h4>Gyanús tevékenység esetén</h4>
        <p>Ha gyanút fogsz, hogy valaki illetéktelenül fért hozzá a fiókodhoz, azonnal változtasd meg a jelszavadat, és vedd fel a kapcsolatot az ügyfélszolgálattal a support@vipluck.com címre vagy élő chaten. A csapatunk segít megvizsgálni a fiókod tevékenységét és megtenni a szükséges lépéseket a védelmédért.</p>
      </div>
    </div>
  </section>

  <!-- Login FAQ -->
  <section class="content-section content-section--alt" id="login-faq">
    <div class="container container--narrow">
      <h2>Bejelentkezési GYIK</h2>

      <details class="faq-item">
        <summary>Mire van szükségem a bejelentkezéshez?</summary>
        <div class="faq-answer">
          <p>Szükséged van a felhasználónevedre (vagy e-mail-címre) és a regisztrációkor létrehozott jelszóra. Ha elfelejtettél a jelszavadat, kattints a bejelentkezési űrlapon az "Elfelejtett jelszó?" linkre, hogy visszaállítási linket kapj e-mailben. Ha elfelejtettél a felhasználónevedet, kattints az "Elfelejtett felhasználónév?" linkre, hogy azt is a regisztrált e-mail-címre küldjük.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Bejelentkezhetek felhasználónévvel és e-maillel is?</summary>
        <div class="faq-answer">
          <p>Igen. <?php echo SITE_NAME; ?> elfogadja a felhasználónevedet és a regisztrált e-mail-címedet egyaránt a bejelentkezéshez. Egyszerűen azt használd, amelyikre könnyebben emlékszel.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Felismer a weboldal a következő látogatásomkor?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> sütiket használ a visszatérő játékosok felismerésére. Ha korábban ugyanazon az eszközön és böngészőben jelentkeztél be, a felhasználóneved vagy e-mail-címed előre kitöltve jelenhet meg a bejelentkezési űrlapon. Biztonsági okokból ennek ellenére meg kell adnod a jelszavadat.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>VPN-nel is beléphetek a <?php echo SITE_NAME; ?>-ra?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> technikailag nem blokkolja a VPN-kapcsolatokat. Egy korlátozott régióból VPN segítségével történő hozzáférés azonban sérti az Általános Szerződési Feltételeket. Ha olyan régióból csatlakozol, ahol a kaszinó elérhető, a VPN használata nem jelent problémát. A kaszinó fenntartja a jogot, hogy szokatlan csatlakozási mintákat mutató fiókokat felülvizsgáljon.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>A fiókom zárolva van. Mit tegyek?</summary>
        <div class="faq-answer">
          <p>A fiókzárolás biztonsági okokból történhet, például többszörös sikertelen bejelentkezési kísérlet vagy gyanús tevékenység esetén. Vedd fel a kapcsolatot az ügyfélszolgálattal élő chaten vagy e-mailben a support@vipluck.com címre, hogy ellenőrizhessék a fiókodat és szükség esetén feloldhassák a zárolást.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Hogyan változtathatom meg a jelszavamat?</summary>
        <div class="faq-answer">
          <p>Bejelentkezés után lépj be a fiókbeállításokba a jelszó megváltoztatásához. Ha nem tudsz bejelentkezni, használd a bejelentkezési oldalon a jelszó-visszaállítási funkciót. A visszaállítási link a regisztrált e-mail-címre kerül elküldésre.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Meg kell erősítenem az e-mailomat a regisztrációhoz?</summary>
        <div class="faq-answer">
          <p>Nem. <?php echo SITE_NAME; ?> nem kér e-mail vagy telefonos megerősítést a fiók létrehozásához. A fiókod azonnal aktív a regisztráció után, és azonnal elkezdhetsz játszani. Az ellenőrzési dokumentumokra csak az első kifizetésnél van szükség.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Milyen adatok kellenek a regisztrációhoz?</summary>
        <div class="faq-answer">
          <p>A regisztrációhoz felhasználónév, e-mail-cím, jelszó, teljes név, születési dátum, nem, telefonszám, ország, város és irányítószám szükséges. Ezeket az adatokat személyazonosság-ellenőrzésre és a jogi előírások betartásához kérik.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mi a teendő, ha elfelejtett jelszót kérek, de nem jön meg az e-mail?</summary>
        <div class="faq-answer">
          <p>Először ellenőrizd a spam vagy levélszemét mappádat - a visszaállítási e-mailek néha oda kerülnek. Ha ott sem találod, győződj meg arról, hogy a regisztrált e-mail-címet adtad meg. Ha a probléma továbbra is fennáll, vedd fel a kapcsolatot az <a href="/hu/support">ügyfélszolgálattal</a> élő chaten vagy a support@vipluck.com címen, és a csapat segít a fiókod visszaszerzésében.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
