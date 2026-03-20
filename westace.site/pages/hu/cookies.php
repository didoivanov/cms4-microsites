<?php
/**
 * Süti-szabályzat - WestAce HU
 */
$lang_prefix = '/hu';
$page_title = 'Süti-szabályzat - ' . SITE_NAME_SHORT;
$page_description = 'Süti-szabályzat a ' . DOMAIN . ' weboldalhoz. Ismerje meg, milyen sütiket használunk és hogyan kezelheti azokat.';
$current_page = 'cookies';

require_once __DIR__ . '/../../includes/header.php';
?>

<main>
  <section class="content-section legal-page">
    <div class="container container--narrow">
      <h1>Süti-szabályzat</h1>
      <p class="legal-updated">Utolsó frissítés: 2026. március 18.</p>

      <h2>Mik azok a sütik</h2>
      <p>A sütik kis szövegfájlok, amelyek az eszközére kerülnek, amikor meglátogat egy webhelyet. Széles körben alkalmazzák őket a weboldalak megfelelő működéséhez, a felhasználói beállítások megjegyzéséhez, valamint a webhelytulajdonosok számára anonimizált használati adatok biztosításához.</p>

      <h2>Hogyan használjuk a sütiket</h2>
      <p><?php echo DOMAIN; ?> egy egyszerű affiliate értékelő webhely. Nem alkalmazunk sütiket hirdetési, személyre szabási vagy más webhelyeken történő nyomon követési célokra. Az oldalon használt sütik három kategóriába sorolhatók:</p>

      <h3>Elengedhetetlen sütik</h3>
      <p>Ezek a webhely megfelelő működéséhez szükségesek. Ide tartoznak a tárhelyszolgáltatónk (Cloudflare) által biztonsági és teljesítményi célokból beállított sütik, például a botészlelés és a DDoS-védelem. Ezek letiltása az oldal működését befolyásolja.</p>
      <table class="data-table">
        <thead>
          <tr><th>Süti</th><th>Szolgáltató</th><th>Cél</th><th>Érvényesség</th></tr>
        </thead>
        <tbody>
          <tr><td>__cf_bm</td><td>Cloudflare</td><td>Botkezelés és biztonság</td><td>30 perc</td></tr>
          <tr><td>cf_clearance</td><td>Cloudflare</td><td>Biztonsági ellenőrzés hitelesítése</td><td>Legfeljebb 1 év</td></tr>
        </tbody>
      </table>

      <h3>Analitikai sütik</h3>
      <p>Igénybe vehetjük a Google Analytics szolgáltatást annak megértéséhez, hogyan használják a látogatók az oldalt - például mely oldalak a legnépszerűbbek és milyen forrásból érkeznek a látogatók. Ezek az adatok anonimizáltak és összesítve kerülnek feldolgozásra. Személyazonosításra alkalmas adatokat nem gyűjtünk.</p>
      <table class="data-table">
        <thead>
          <tr><th>Süti</th><th>Szolgáltató</th><th>Cél</th><th>Érvényesség</th></tr>
        </thead>
        <tbody>
          <tr><td>_ga</td><td>Google Analytics</td><td>Egyedi látogatók azonosítása</td><td>2 év</td></tr>
          <tr><td>_ga_*</td><td>Google Analytics</td><td>Munkamenet-állapot fenntartása</td><td>2 év</td></tr>
        </tbody>
      </table>

      <h3>Marketing- és affiliate sütik</h3>
      <p>Mi magunk nem állítunk be marketingsütiket. Ha azonban az oldalunkon lévő affiliate hivatkozásra kattint, a célplatform sütiket helyezhet el a hivatkozás nyomon követéséhez. Ezeket a sütiket a harmadik fél állítja be, és saját süti-szabályzatuk vonatkozik rájuk, nem a miénk.</p>

      <h2>Harmadik felek sütijei</h2>
      <p>Ha affiliate hivatkozásra kattint és elhagyja oldalunkat, a célwebhely saját sütiket helyezhet el. Ezekre nincs ráhatásunk. A részletekért kérjük, olvassa el a kaszinó üzemeltetőjének süti-szabályzatát.</p>

      <h2>Hozzájárulás a sütik használatához</h2>
      <p>Az EU ePrivacy-irányelv és az Általános Adatvédelmi Rendelet (GDPR) értelmében kötelezettsége vagyunk az Ön hozzájárulását kérni a nem elengedhetetlen sütik elhelyezése előtt. Az oldal működéséhez feltétlenül szükséges elengedhetetlen sütikhez nem szükséges hozzájárulás. Az oldal folyamatos böngészésével Ön hozzájárul a fent ismertetett analitikai sütik használatához. Hozzájárulását bármikor visszavonhatja a böngésző beállításaiban.</p>

      <h2>Sütik kezelése</h2>
      <p>A sütiket a böngésző beállításaiban ellenőrizheti és törölheti. A legtöbb böngésző lehetővé teszi, hogy:</p>
      <ul>
        <li>Megtekintse a tárolt sütiket, és egyenként törölje őket</li>
        <li>Blokkolja a harmadik felek sütikeit</li>
        <li>Blokkolja az adott webhelyek összes sütijet</li>
        <li>Blokkolja az összes sütiket</li>
        <li>A böngésző bezárásakor minden sütiket töröljön</li>
      </ul>
      <p>A sütik letiltása befolyásolhatja az oldal funkcionalitását, különösen a Cloudflare által biztosított biztonsági funkciókat.</p>
      <p>A böngészőjében a sütik kezeléséhez szükséges útmutatásért látogasson el az alábbi oldalakra:</p>
      <ul>
        <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener noreferrer">Google Chrome</a></li>
        <li><a href="https://support.mozilla.org/en-US/kb/cookies-information-websites-store-on-your-computer" target="_blank" rel="noopener noreferrer">Mozilla Firefox</a></li>
        <li><a href="https://support.apple.com/en-gb/guide/safari/sfri11471/mac" target="_blank" rel="noopener noreferrer">Safari</a></li>
        <li><a href="https://support.microsoft.com/en-gb/microsoft-edge/delete-cookies-in-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank" rel="noopener noreferrer">Microsoft Edge</a></li>
      </ul>

      <h2>A szabályzat módosítása</h2>
      <p>Ezt a süti-szabályzatot időről időre frissíthetjük. A változások ezen az oldalon kerülnek közzétételre, a módosítás dátumával együtt.</p>

      <h2>Kapcsolat</h2>
      <p>Ha kérdése van a sütik használatával kapcsolatban, elérhet minket a <a href="mailto:info@westace.site">info@westace.site</a> e-mail-címen, vagy látogasson el az <a href="<?php echo $lang_prefix; ?>/support">Ügyfélszolgálat</a> oldalunkra.</p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
