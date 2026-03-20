<?php
/**
 * Bejelentkezés oldal - WestAce (Magyar / HU)
 */
$page_title = SITE_NAME . ' Bejelentkezés - Lépj be a kaszinó fiókodba';
$page_description = 'Jelentkezz be a ' . SITE_NAME . ' Casino fiókodba. Játékok, bónuszok és egyenleg egy helyen. Bejelentkezési probléma esetén fordulj az ügyfélszolgálathoz.';
$current_page = 'login';
$lang_prefix = '/hu';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Bejelentkezés';
$hero_description = 'A fiókodba való belépéshez és a játékhoz kattints az alábbi gombra - a bejelentkezés közvetlenül a kaszinó weboldalán történik.';
$hero_cta = 'Játssz Most';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Bejelentkezés -->
  <section class="content-section content-section--alt" id="login-help">
    <div class="container container--narrow">
      <h2>Hogyan lépj be a <?php echo SITE_NAME; ?> fiókodba</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>A <?php echo SITE_NAME; ?> kaszinóba való belépés néhány másodpercet vesz igénybe. Kattints az alábbi gombra, és a kaszinó weboldalán add meg a regisztráció során megadott e-mail-cimedet és jelszavadat.</p>
          <h3>Bejelentkezés asztali gépen</h3>
          <p>Kattints a "Játssz Most" gombra, ami a <?php echo SITE_NAME; ?> kaszinó weboldalára irányít. Az oldal jobb felső sarkában kattints a "Belépés" gombra, add meg az e-mail-cimedet és jelszavadat, majd kattints a "Belépés" gombra a fiók eléréséhez. Ha elfelejtettél a jelszót, a belépési form alatti visszaállítás linkre kattintva kérhetsz új jelszót.</p>
          <h3>Bejelentkezés mobilon</h3>
          <p>Telefonon vagy tableten nyisd meg a <?php echo SITE_NAME; ?> weboldalát a mobilböngésződben. Nyomd meg a "Belépés" gombot, add meg az e-mail-cimedet és jelszavadat, majd nyomd meg a "Belépés" gombot. A mobilos verzió ugyanolyan funkciókat kínál, mint az asztali oldal - alkalmazás letöltése nem szükséges.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-login-screen.png" alt="<?php echo SITE_NAME; ?> Casino bejelentkezési oldal e-mail és jelszó mezőkkel" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div style="text-align:center;margin:var(--space-8) 0">
        <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Belépés a <?php echo SITE_NAME; ?> kaszinóba</a>
        <p style="margin-top:var(--space-4)">Még nincs fiókod? <a href="/play" rel="nofollow">Regisztrálj itt</a>, és igényeld az üdvözlő bónuszodat.</p>
      </div>

      <h3>Bejelentkezési probléma?</h3>
      <p>Ha nehézségeid vannak a belépéssel, az alábbiakat érdemes ellenőrizni:</p>
      <ul>
        <li>Győződj meg arról, hogy a megfelelő e-mail-cimedet és jelszavadat adod meg. A jelszó megkülönbözteti a kis- és nagybetűket.</li>
        <li>Töröld a böngésző gyorsítótárát és a cookie-kat, majd próbáld újra.</li>
        <li>Ellenőrizd, hogy az internetkapcsolatod stabil.</li>
        <li>Ha elfelejtettél a jelszót, a bejelentkezési oldalon lévő "Elfelejtett jelszó?" linkre kattintva kérhetsz visszaállítási e-mailt.</li>
      </ul>
      <p>Ha a fentiek egyike sem oldja meg a problémát, fordulj az <a href="/hu/support">ügyfélszolgálathoz</a> élő chaten vagy a support@westace.com e-mail-címen.</p>
    </div>
  </section>

  <!-- Regisztráció -->
  <section class="content-section" id="register">
    <div class="container container--narrow">
      <h2>Új fiók létrehozása</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Ha még nincs <?php echo SITE_NAME; ?> fiókod, a regisztráció gyors és körülbelül két percet vesz igénybe. Add meg az e-mail-cimedet, hozz létre egy jelszót, válaszd ki a forintot (HUF) pénznemként, és máris játszhatsz. A regisztrációs adatlapnál azonnal látod az üdvözlő bónuszt, amelyre jogosult leszel.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-signup-screen.png" alt="<?php echo SITE_NAME; ?> Casino regisztrációs oldal az üdvözlő csomaggal és a regisztrációs mezőkkel" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Kattints a "Regisztráció" gombra a weboldalon.</strong> A regisztrációs gomb az oldal jobb felső sarkában található.
          </div>
        </li>
        <li>
          <div>
            <strong>Válaszd ki az üdvözlő bónuszodat.</strong> Válaszd ki, melyik bónuszt szeretnéd aktiválni az első befizetéssel, vagy játssz bónusz nélkül, ha azt részesíted előnyben.
          </div>
        </li>
        <li>
          <div>
            <strong>Add meg az e-mail-cimedet és hozz létre egy jelszót.</strong> Válassz erős jelszót a fiókod biztonságának megőrzése érdekében.
          </div>
        </li>
        <li>
          <div>
            <strong>Add meg a személyes adataidat.</strong> Szükséges a teljes neved, születési dátum, telefonszám, cím, ország és a preferált pénznem (HUF). Ezekre az adatokra az első kifizetésnél szükséges személyazonosság-ellenőrzéshez lesz szükség.
          </div>
        </li>
        <li>
          <div>
            <strong>Fejezd be a regisztrációt.</strong> Véglegesítsd a fiókodat és végezd el az első befizetést az üdvözlő bónusz igényléséhez. A minimum befizetési összeg 8 000 Ft.
          </div>
        </li>
      </ol>

      <div style="text-align:center;margin:var(--space-8) 0">
        <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Fiók létrehozása</a>
      </div>
    </div>
  </section>

  <!-- Fiók-visszaállítás -->
  <section class="content-section content-section--alt" id="recovery">
    <div class="container container--narrow">
      <h2>Fiók-visszaállítás</h2>

      <h3>Elfelejtette a jelszavát?</h3>
      <p>Kattints az "Elfelejtett jelszó?" linkre a bejelentkezési formon. Add meg a regisztrált e-mail-cimedet, és egy visszaállítási link érkezik a postaládádba. Kattints az e-mailben lévő linkre az új jelszó beállításához. A visszaállítási link csak korlátozott ideig érvényes, ezért használd mielőbb.</p>
      <p>Ha az e-mail nem érkezik meg néhány percen belül, ellenőrizd a spam vagy levélszemét mappát. Ha az e-mail továbbra sem érkezik meg, fordulj az <a href="/hu/support">ügyfélszolgálathoz</a> manuális segítségért.</p>

      <h3>Zárolt fiók?</h3>
      <p>A fiók zárolása biztonsági okokból fordulhat elő, például többszöri sikertelen bejelentkezési kísérlet vagy gyanús tevékenység esetén. Vedd fel a kapcsolatot az ügyfélszolgálattal élő chaten vagy a support@westace.com e-mail-címen a fiók felülvizsgálatáért.</p>
    </div>
  </section>

  <!-- Bejelentkezés GYIK -->
  <section class="content-section" id="login-faq">
    <div class="container container--narrow">
      <h2>Bejelentkezési GYIK</h2>

      <details class="faq-item">
        <summary>Mire van szükség a bejelentkezéshez?</summary>
        <div class="faq-answer">
          <p>A regisztráció során megadott e-mail-cimre és jelszóra van szükséged. Ha elfelejtettél a jelszót, kattints az "Elfelejtett jelszó?" linkre a bejelentkezési formon, hogy visszaállítási linket kapj e-mailben.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Megjegyzi az oldal a következő látogatásomra?</summary>
        <div class="faq-answer">
          <p>A <?php echo SITE_NAME; ?> cookie-kat használ a visszatérő játékosok felismerésére. Ha korábban ugyanazon az eszközön és böngészőn jelentkeztél be, az e-mail-cimed előre kitöltött lehet. Biztonság okokból a jelszót mindig meg kell adni. A böngésző cookie-k törlése vagy privát böngészés használata esetén a teljes belépési adatokat újra be kell írni.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>A fiókom zárolt. Mit tegyek?</summary>
        <div class="faq-answer">
          <p>A fiók zárolása többszöri sikertelen bejelentkezési kísérlet vagy gyanús tevékenység következtében fordulhat elő. Vedd fel a kapcsolatot az ügyfélszolgálattal élő chaten vagy a support@westace.com e-mail-címen a fiók felülvizsgálatáért és feloldásáért.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Hogyan változtathatom meg a jelszavam?</summary>
        <div class="faq-answer">
          <p>Bejelentkezés után a fiókbeállításokban módosíthatod a jelszavadat. Ha nem tudsz bejelentkezni, használd a bejelentkezési oldalon lévő jelszó-visszaállítás funkciót.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Milyen adatokra van szükség a regisztrációhoz?</summary>
        <div class="faq-answer">
          <p>A regisztrációhoz e-mail-cim, jelszó, teljes név, születési dátum, telefonszám, cim, ország és preferált pénznem szükséges. Ezek az adatok a személyazonosság-ellenőrzéshez és a szabályozói megfeleléshez szükségesek.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Van mobilalkalmazás a <?php echo SITE_NAME; ?> kaszinóhoz?</summary>
        <div class="faq-answer">
          <p>Külön alkalmazás nem érhető el, de a webhely teljes mértékben optimalizált mobileszközökre. Egyszerűen nyisd meg a <?php echo SITE_NAME; ?> oldalt a mobilböngésződben, és lépj be a szokásos módon. Minden játék, sportfogadás és funkció elérhető mobilon is.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
