<?php
/**
 * Sportfogadás oldal - WestAce (Magyar / HU)
 */
$page_title = SITE_NAME . ' Sportfogadás - NB I, Bajnokok Ligája, vízilabda és élő fogadás';
$page_description = 'Fogadj a Ferencvárosra, az NB I meccseire, a Bajnokok Ligájára, a vízilabdára, a kézilabdára és 30+ sportra a ' . SITE_NAME . ' kaszinónál. Élő fogadás, versenyképes oddsok és virtuális sportok.';
$current_page = 'sports';
$lang_prefix = '/hu';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Sportfogadás';
$hero_description = 'Mérkőzés előtti oddsok, élő fogadás, virtuális sportok és a hazai bajnokság - mind egy helyen a teljes kaszinó mellett.';
$hero_cta = 'Fogadj Most';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Sportfogadás áttekintése -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Sportfogadás áttekintése</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>A <?php echo SITE_NAME; ?> több mint kaszinó. Teljes körű sportfogadást kínálunk mérkőzés előtti fogadással, élő in-play piacokkal, virtuális sportokkal és lóverseny-fogadással. Akár az NB I küzdelmeire, a Bajnokok Ligájára, a magyar válogatott mérkőzéseire vagy a Ferencváros európai szereplésére fogadsz - versenyképes oddsokat és széleskörű piacokat találsz.</p>
          <p>A sportfogadás a kaszinóval párhuzamosan fut, így egyetlen fiókból, egyetlen egyenlegből válthatsz nyerőgépek, élő dealer asztalok és sportfogadás között. Nem kell külön tárcákat kezelni vagy átutalni összegeket.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-sports-screen.png" alt="<?php echo SITE_NAME; ?> sportfogadás - élő Bajnokok Ligája oddsok és labdarúgó piacok" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Mérkőzés előtti fogadás</h4>
          <p>Fogadj közelgő meccsekre 30+ sporton. Labdarúgás, tenisz, kosárlabda, jégkorong, MMA és még sok más - szimpla fogadástól a rendszer fogadásokig minden elérhető.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9889;</div>
          <h4>Élő fogadás</h4>
          <p>Fogadj meccsen közben, valós idejű oddsokkal, amelyek másodpercenként frissülnek. Kísérsd figyelemmel az eseményeket élő statisztikákkal, eredményjelzőkkel és in-play piacokkal.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127918;</div>
          <h4>Virtuális sportok</h4>
          <p>Szimulált események nonstop üzemben - virtuális labdarúgás, kosárlabda, tenisz, lóverseny és agárverseny. Néhány percenként új eredmény, nem kell valós meccsre várni.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Magyar sportok -->
  <section class="content-section content-section--alt" id="hungarian-sports">
    <div class="container">
      <h2>Magyar sport - helyi piacok</h2>
      <p>A <?php echo SITE_NAME; ?> kiemelten lefedi a magyar sportot. A Puskás Arénában rendezett hazai meccsektől a nemzetközi porondig minden megtalálható, amire egy magyar szurkoló fogadni szeretne.</p>

      <div class="two-col">
        <div>
          <h3>Labdarúgás</h3>
          <ul class="check-list">
            <li><strong>NB I (Nemzeti Bajnokság)</strong> - a magyar élvonal összes fordulójára fogadhatsz, beleértve a Ferencváros, a Paks, a Fehérvár FC és a többi klub meccseit</li>
            <li><strong>Ferencváros</strong> - a Fradi hazai és nemzetközi szereplésére külön piacok érhetők el, ideértve az európai kupaszereplést is</li>
            <li><strong>Bajnokok Ligája</strong> - a Puskás Arénában rendezett mérkőzésekre és az összes BL-csoport és kieséses szakasz piacaira egyaránt fogadhatsz</li>
            <li><strong>Magyar válogatott</strong> - Eb- és vb-selejtezők, Nations League mérkőzések</li>
            <li><strong>Európai élligák</strong> - Premier League, La Liga, Bundesliga, Serie A, Ligue 1</li>
          </ul>
        </div>
        <div>
          <h3>Hazai sportágak</h3>
          <ul class="check-list">
            <li><strong>Vízilabda</strong> - Magyarország a vízilabda világhatalom. Az OB I mérkőzésekre, a válogatott tornákra és a nemzetközi kupákra egyaránt elérhető fogadás</li>
            <li><strong>Kézilabda</strong> - a Nemzeti Bajnokság és a Bajnokok Ligája kézilabda-meccsek széles pinatokkal</li>
            <li><strong>Kosárlabda</strong> - Nemzeti Bajnokság és Euroliga</li>
            <li><strong>Tenisz</strong> - Grand Slam tornák, ATP és WTA versenyei</li>
            <li><strong>Jégkorong</strong> - NHL, EBEL és a hazai bajnokság</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Elérhető sportok -->
  <section class="content-section" id="sports">
    <div class="container">
      <h2>Összes elérhető sport</h2>
      <p>A sportfogadásunk a világ minden tájáról lefed ligákat és tornákat. Az alábbiakban a legkedveltebb piacok találhatók:</p>

      <div class="two-col">
        <div>
          <h3>Népszerű sportok</h3>
          <ul class="check-list">
            <li>Labdarúgás - NB I, Premier League, La Liga, Bundesliga, Serie A, Bajnokok Ligája, vb-selejtezők és számos alsóbb liga</li>
            <li>Tenisz - Grand Slam tornák, ATP, WTA és Challenger versenyek</li>
            <li>Kosárlabda - NBA, Euroliga, nemzeti bajnokságok</li>
            <li>Jégkorong - NHL, KHL, SHL és európai ligák</li>
            <li>Krikett - IPL, nemzetközi tesztmeccsek, T20 világbajnokság</li>
            <li>MMA / Ökölvívás - UFC, Bellator és nagy bokszgálák</li>
            <li>Esport - CS2, Dota 2, League of Legends, Valorant</li>
          </ul>
        </div>
        <div>
          <h3>Egyéb sportok</h3>
          <ul class="check-list">
            <li>Rögbi Union és Rögbi League</li>
            <li>Amerikai futball - NFL, college football</li>
            <li>Baseball - MLB, NPB, KBO</li>
            <li>Kézilabda - európai és nemzetközi versenyek</li>
            <li>Röplabda - nemzeti bajnokságok és nemzetközi tornák</li>
            <li>Asztalitenisz - profi és világi versenyek</li>
            <li>Darts, snooker, kerékpározás, Formula-1</li>
          </ul>
        </div>
      </div>

      <p style="margin-top: var(--space-6);">A fent felsorolt sportok többségénél élő fogadás is elérhető. Az oddsok valós időben frissülnek a mérkőzés alakulásának megfelelően, így a gólokra, szettváltásokra és lendületváltásokra azonnal reagálhatsz.</p>
    </div>
  </section>

  <!-- Lóverseny -->
  <section class="content-section content-section--alt" id="horse-racing">
    <div class="container container--narrow">
      <h2>Lóverseny</h2>
      <p>A <?php echo SITE_NAME; ?> lefedi a brit, ír, francia, ausztrál és más nagy versenytálcák lóversenyeit. Nagy fesztiválokra előzetes piacok is elérhetők, a versenynapon pedig nyerési, helyezési és mindkettős (each-way) fogadások tehetők.</p>
      <p>A Cheltenham, a Royal Ascot, a Grand National és a Melbourne Cup teljes pinatokkal szerepel. A mindennapi versenyeken standard nyerési és helyezési fogadás áll rendelkezésre a brit és ír versenyeken.</p>
    </div>
  </section>

  <!-- Virtuális sportok -->
  <section class="content-section" id="virtual">
    <div class="container container--narrow">
      <h2>Virtuális sportok</h2>
      <p>Ha éppen nincs élő mérkőzés, amelyre fogadni lehetne, a virtuális sportok szekciónk 24 órás akciót biztosít. Az eseményeket tanúsított véletlenszám-generátorok szimulálják, így az eredmények tisztességesek és kiszámíthatatlanok.</p>

      <h3>Elérhető virtuális sportok</h3>
      <ul>
        <li><strong>Virtuális labdarúgás</strong> - teljes mérkőzés-szimulációk bajnoki tabellákkal és kupa-formátummal</li>
        <li><strong>Virtuális kosárlabda</strong> - negyedenkénti szimulációk standard kosárlabda-piacokkal</li>
        <li><strong>Virtuális tenisz</strong> - szettenkénti meccsek meccsgyőztes és pontos szett-fogadással</li>
        <li><strong>Virtuális lóverseny</strong> - síkfutás és akadályverseny nyerési, helyezési és előrejelzési fogadásokkal</li>
        <li><strong>Virtuális agárverseny</strong> - rövid futamok nyerési és előrejelzési piacokkal</li>
      </ul>
      <p>2-3 percenként indul új virtuális esemény, így mindig van mire fogadni.</p>
    </div>
  </section>

  <!-- Sportfogadási tippek -->
  <section class="content-section content-section--alt" id="tips">
    <div class="container container--narrow">
      <h2>Sportfogadási tippek</h2>
      <p>Néhány egyszerű irányelv, hogy a sportfogadás szórakoztató és fenntartható maradjon:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Határozz meg egy keretet előre.</strong> Döntsd el, mennyit vagy hajlandó fogadni a héten vagy a hónapban, és ne lépd túl. Tekintsd szórakozási kiadásnak, nem befektetésnek.
          </div>
        </li>
        <li>
          <div>
            <strong>Fogadj olyan sportra, amelyet ismersz.</strong> Maradj azoknál a ligáknál és sportoknál, amelyeket jól ismersz. Az NB I csapatainak, a Fradi formájának vagy a vízilabda-válogatott játékosállományának ismerete jobb döntéshozatalt tesz lehetővé, mint ismeretlen piacok hajszolása.
          </div>
        </li>
        <li>
          <div>
            <strong>Ne hajszold a veszteséget.</strong> Ha rossz menetben vagy, ne emeld a téteket a visszanyerés érdekében. Tarts szünetet, és tiszta fejjel térj vissza.
          </div>
        </li>
        <li>
          <div>
            <strong>Vezess nyilvántartást.</strong> Kövesd a fogadásaidat, hogy lásd, mi megy és mi nem. Idővel felismerheted a mintákat, és jobb döntéseket hozol.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Sportfogadás GYIK -->
  <section class="content-section" id="sports-faq">
    <div class="container container--narrow">
      <h2>Sportfogadás GYIK</h2>

      <details class="faq-item">
        <summary>Van sportfogadás a <?php echo SITE_NAME; ?> kaszinónál?</summary>
        <div class="faq-answer">
          <p>Igen. Teljes körű sportfogadást kínálunk mérkőzés előtti fogadással, élő in-play piacokkal, virtuális sportokkal és lóverseny-fogadással a kaszinó mellett. Ugyanabból a fiókból váltogathatsz a kaszinó és a sportfogadás között.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Fogadhatok az NB I meccsekre és a Ferencvárosra?</summary>
        <div class="faq-answer">
          <p>Igen. Az NB I összes fordulójára és a Ferencváros hazai, illetve európai kupameccseire egyaránt fogadhatsz. Magyar labdarúgáson kívül a Bajnokok Ligájára, az Európa Ligára és a hazai válogatott mérkőzésekre is elérhető fogadás.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Fogadhatok vízilabdára és kézilabdára?</summary>
        <div class="faq-answer">
          <p>Igen. A vízilabda és a kézilabda egyaránt elérhető a sportfogadásunkban. A vízilabda terén Magyarország a világ egyik legerősebb nemzete, ezért a hazai bajnokság meccseit és a nagy nemzetközi tornákat kiemelten kezeljük.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Elérhető-e az élő fogadás?</summary>
        <div class="faq-answer">
          <p>Igen. Az élő in-play fogadás a legtöbb sportnál elérhető. Az oddsok valós időben frissülnek a mérkőzés alakulásának megfelelően, és a teljes esemény alatt fogadhatsz.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Felhasználhatom a kaszinós egyenlegemet sportfogadáshoz?</summary>
        <div class="faq-answer">
          <p>Igen. A <?php echo SITE_NAME; ?> egyetlen egyenleget használ a kaszinóhoz és a sportfogadáshoz egyaránt. A befizetések egy közös fiókba kerülnek, és ugyanazokat az összegeket használhatod nyerőgépekre, élő kaszinóra és sportfogadásra is, átvezetés nélkül.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mi a minimális tét a sportfogadásnál?</summary>
        <div class="faq-answer">
          <p>A minimális tét sporttól és piactól függ, de általában nagyon alacsony - a legtöbb eseménynél 200 Ft-tól kezdve fogadhatsz. Az adott piacon érvényes minimumot a fogadószelvényen ellenőrizheted.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
