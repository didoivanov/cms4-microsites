<?php
/**
 * Homepage - WestAce (Magyar / HU)
 */
$page_title = 'WestAce Casino - 7 000+ játék, sportfogadás és üdvözlő bónusz 860 000 Ft-ig';
$page_description = 'A WestAce Casino 7 000+ játékot kínál 100+ szolgáltatótól, teljes sportfogadási kínálatot élő fogadással, élő krupié asztalokat és üdvözlő bónuszt - 100% akár 430 000 Ft-ig + 50 ingyenes pörgetés. Regisztrálj és játssz most.';
$current_page = 'home';
$lang_prefix = '/hu';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__badge"><?php echo __('hero_badge', 'Már nyitva - 7 000+ játék és élő sportfogadás'); ?></div>
    <h1>
      <span class="brand-name"><?php echo SITE_NAME; ?></span><br>
      <span class="brand-type">Casino</span>
    </h1>
    <p class="hero__subtitle">Több mint 7 000 játék 100+ szolgáltatótól, élő krupié asztalok, teljes sportfogadási platform élő fogadással - és egy hárombefizetéses üdvözlő csomag, amely az első három befizetésedet jutalmazza.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Üdvözlő csomag</div>
      <div class="hero__bonus-value"><?php echo WELCOME_BONUS; ?></div>
      <div class="hero__bonus-extra">1. befizetés: 100% akár 430 000 Ft-ig + 50 ingyenes pörgetés &middot; Min. befizetés 8 000 Ft</div>
    </div>
    <div class="hero__ctas">
      <a href="/play" class="btn btn--primary btn--lg" rel="nofollow"><?php echo __('cta_play', 'Játssz Most'); ?></a>
      <a href="<?php echo $lang_prefix; ?>/bonuses" class="btn btn--outline btn--lg">Bónuszok megtekintése</a>
    </div>
  </div>
</section>

<!-- STATS BAR -->
<section class="stats-bar">
  <div class="container">
    <div class="stats-bar__grid">
<?php foreach ($STATS as $stat): ?>
      <div class="stat">
        <div class="stat__value"><?php echo $stat['value']; ?></div>
        <div class="stat__label"><?php echo $stat['label']; ?></div>
      </div>
<?php endforeach; ?>
    </div>
  </div>
</section>

<!-- MAIN CONTENT -->
<main>
  <!-- About -->
  <section class="content-section" id="about">
    <div class="container">
      <h2>Üdvözlünk a <?php echo SITE_NAME; ?> Casinóban</h2>
      <p>A <?php echo SITE_NAME; ?> egy 2026-ban indult online kaszinó és sportfogadási platform. A weboldal több mint 7 000 játékot gyűjt össze 100+ szolgáltatótól: nyerőgépek, élő krupié lobbyk, asztali játékok, crash játékok, jackpot-címek és játékshow-k egyaránt megtalálhatók. A kaszinó mellett teljes sportfogadási kínálatot biztosítunk meccs előtti és élő fogadással, virtuális sporttal és lóversennyel. Az új játékosok hárombefizetéses üdvözlő csomagot igényelhetnek, amelynek összértéke akár 860 000 Ft + 150 ingyenes pörgetés.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Indulás éve</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Játékok</th><td>7 000+ (nyerőgépek, asztali játékok, élő kaszinó, crash játékok, jackpotok, játékshow-k)</td></tr>
        <tr><th>Szolgáltatók</th><td>100+ (Pragmatic Play, Playtech, Novomatic, Red Tiger, Yggdrasil, BGaming, Hacksaw Gaming és még sokan mások)</td></tr>
        <tr><th>Üdvözlő bónusz</th><td><?php echo WELCOME_BONUS_TEXT; ?></td></tr>
        <tr><th>Min. befizetés</th><td>4 000 Ft</td></tr>
        <tr><th>Pénznem</th><td>HUF</td></tr>
        <tr><th>Ügyfélszolgálat</th><td>24/7 élő chat + e-mail</td></tr>
        <tr><th>Sportfogadás</th><td>Igen (sport, élő fogadás, virtuális sport, lóverseny)</td></tr>
        <tr><th>Mobilos</th><td>Teljesen reszponzív, app letöltése nem szükséges</td></tr>
      </table>

      <h3>Miért választják a játékosok a <?php echo SITE_NAME; ?>-t?</h3>
      <ul class="check-list">
        <li>Több mint 7 000 játék 100+ engedélyezett szolgáltatótól</li>
        <li>Hárombefizetéses üdvözlő csomag akár 860 000 Ft-ig + 150 ingyenes pörgetés</li>
        <li>Teljes sportfogadási platform élő fogadással, virtuális sporttal és lóversennyel</li>
        <li>Élő kaszinó rulettel, blackjackkel, baccarattal, kockajátékokkal és pókerrel</li>
        <li>Napi visszatérítés (cashback) akár 15%, mindössze 1-szeres megforgatással</li>
        <li>5 szintű VIP-program személyes menedzserrel és magasabb limitekkel</li>
        <li>Kriptóbarát platform - külön üdvözlő bónusszal és újratöltési ajánlatokkal</li>
        <li>24/7 ügyfélszolgálat élő chaten és e-mailen keresztül</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Kaszinójátékok</h4>
          <p>Több ezer nyerőgép, blackjack- és rulett-variáns, póker, baccarat, crash játékok és élő krupié asztalok olyan stúdióktól, mint a Pragmatic Play, Playtech, Novomatic, Red Tiger és Yggdrasil.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127183;</div>
          <h4>Élő kaszinó</h4>
          <p>Élő krupié játékok - rulett, blackjack, baccarat, kockajátékok és póker. Valódi osztók közvetítenek HD minőségben professzionális stúdiókból nonstop, éjjel-nappal.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Sportfogadás</h4>
          <p>Teljes körű sportfogadási felület meccs előtti és élő in-play piacokkal. A Ferencváros, az NB I és a Bajnokok Ligája meccsein túl virtuális sport és lóverseny is elérhető.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Social Proof / Recent Winners -->
  <section class="content-section winners-section" id="winners">
    <div class="container">
      <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--space-4);margin-bottom:var(--space-2)">
        <h2 style="margin-bottom:0">Legutóbbi nyertesek</h2>
        <span class="live-dot">Élő</span>
      </div>
      <div class="jackpot-label">Aktuális jackpot-alap</div>
      <div class="jackpot-amount" id="jackpotCounter">1 167 830 255 Ft</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Népszerű játékok a <?php echo SITE_NAME; ?>-nél</h2>
      <p>Böngéssz a kaszinó legtöbbet játszott címei között. A magas volatilitású nyerőgépektől a klasszikus asztali játékokon és élő krupié termeiken át a sportpiacokig mindenkinek megvan a maga kedvence.</p>

      <div class="game-tabs">
        <button class="game-tab active">Összes játék</button>
        <button class="game-tab">Nyerőgépek</button>
        <button class="game-tab">Élő kaszinó</button>
        <button class="game-tab">Asztali játékok</button>
        <button class="game-tab">Crash játékok</button>
        <button class="game-tab">Jackpotok</button>
        <button class="game-tab">Sport</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Vezető játékszolgáltatók</h3>
          <p>Játékkatalógusunk iparágvezető stúdióktól és ígéretes független fejlesztőktől egyaránt tartalmaz címeket:</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">100+ összesen</span>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-games-screen.png" alt="<?php echo SITE_NAME; ?> Casino játéklobbija a Pragmatic Play, Playtech és Novomatic nyerőgépeivel" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section" id="payments">
    <div class="container">
      <h2>Fizetési módok</h2>
      <p>A <?php echo SITE_NAME; ?> számos fizetési módot támogat, köztük bankkártyát, előre fizetett kártyát, e-pénztárcát és kriptovalutákat. A befizetések minimuma 4 000 Ft, és minden be- és kifizetés díjmentes.</p>

      <table class="quick-table">
        <tr><th>Befizetési módok</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Min. befizetés</th><td>4 000 Ft</td></tr>
        <tr><th>Min. kifizetés</th><td>4 000 Ft</td></tr>
        <tr><th>Max. kifizetés</th><td>205 000 Ft/nap, 2 870 000 Ft/hónap</td></tr>
        <tr><th>Kifizetési idő</th><td>24-72 óra</td></tr>
        <tr><th>Pénznem</th><td>HUF</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">A kifizetési módok, limitek, díjak és a gyorsabb kifizetéshez szükséges tippek részletes leírásáért látogass el a <a href="<?php echo $lang_prefix; ?>/withdrawal">Kifizetés oldalra</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section content-section--alt" id="mobile">
    <div class="container">
      <h2>Mobil kaszinó</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p>A <?php echo SITE_NAME; ?>-nek nincs dedikált mobilalkalmazása, de a weboldal teljesen kompatibilis minden okostelefonnal és tablettel. A böngészőalapú platform ugyanazokat a funkciókat, játékokat és fiókkezelési eszközöket kínálja, mint az asztali verzió. Nem szükséges letöltés - csak nyisd meg a mobilböngésződet, jelentkezz be, és játssz.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/westace-mobile.png" alt="<?php echo SITE_NAME; ?> Casino mobilos lobby az üdvözlő bónusszal és játéknavigációval" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>
      <ul class="check-list">
        <li>A teljes játékkönyvtár elérhető mobilböngészőben</li>
        <li>Élő krupié asztalok és sportfogadás útközben is</li>
        <li>Befizetés és kifizetés közvetlenül a telefonodról</li>
        <li>Élő chat ügyfélszolgálat mobilon is elérhető</li>
        <li>App letöltése nem szükséges - iOS és Android egyaránt támogatott</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section" id="faq">
    <div class="container container--narrow">
      <h2>Gyakran ismételt kérdések</h2>

      <details class="faq-item">
        <summary>Milyen játékokat találok a <?php echo SITE_NAME; ?> Casinóban?</summary>
        <div class="faq-answer">
          <p>A <?php echo SITE_NAME; ?> több mint 100 szolgáltatóval dolgozik együtt, köztük a Pragmatic Play, Playtech, Novomatic, Red Tiger, Yggdrasil, BGaming, Hacksaw Gaming és Quickspin stúdiókkal. Játszhatsz videónyerőgépeken, jackpot-nyerőgépeken, blackjacken, ruletton, baccaraton, pókeren, crash játékokon, játékshow-kban és élő krupié asztaloknál. Emellett teljes sportfogadási platform is elérhető élő fogadással, virtuális sporttal és lóversennyel.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mekkora az üdvözlő bónusz a <?php echo SITE_NAME; ?> Casinóban?</summary>
        <div class="faq-answer">
          <p>Az új játékosok hárombefizetéses üdvözlő csomagot kapnak: az első befizetésre 100% akár 430 000 Ft-ig + 50 ingyenes pörgetés, a másodikra 100% akár 205 000 Ft-ig + 50 ingyenes pörgetés, a harmadikra szintén 100% akár 205 000 Ft-ig + 50 ingyenes pörgetés. Teljes érték: akár 860 000 Ft + 150 ingyenes pörgetés. A minimum befizetés szintenként 8 000 Ft. A megforgatási követelmény 35-szörös (bónusz + befizetés).</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mennyi idő alatt dolgozzák fel a kifizetéseket?</summary>
        <div class="faq-answer">
          <p>A kifizetéseket 24-72 órán belül dolgozzák fel. A minimális kifizetési összeg minden fizetési módnál 4 000 Ft. A napi kifizetési limit 205 000 Ft, a havi limit 2 870 000 Ft. A kifizetésekre nem számítanak fel díjat.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Van VIP-program a <?php echo SITE_NAME; ?>-nél?</summary>
        <div class="faq-answer">
          <p>Igen. A <?php echo SITE_NAME; ?> 5 szintű VIP-programot működtet. Az előnyök közé tartozik a magasabb cashback-százalék (akár 15%), emelt kifizetési limitek, elsőbbségi ügyintézés, személyre szabott ajánlatok és személyes VIP-menedzser a legfelső szinteken. A szintek közötti előrelépés feltételeit nem hozzák nyilvánosságra.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Játszhatok okostelefonon?</summary>
        <div class="faq-answer">
          <p>A <?php echo SITE_NAME; ?>-nek nincs mobilalkalmazása, de a weboldal teljesen mobilbarát. Minden játékot, a sportfogadást és a fiókfunkciókat elérheted bármilyen modern okostelefon- vagy tablet-böngészőből.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Hogyan érhetem el az ügyfélszolgálatot?</summary>
        <div class="faq-answer">
          <p>A támogatási csapatot elérheted a weboldalon található 24/7 élő chaten, vagy e-mailben a support@westace.com címen. További részletekért látogass el az <a href="<?php echo $lang_prefix; ?>/support">Ügyfélszolgálat oldalra</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
