<?php
/**
 * Kezdőlap – Magyar
 */
$page_title = SITE_NAME . ' Casino - Online Casino, Sportfogadás & 8 000+ Játék';
$page_description = SITE_NAME . ' Casino 8 000+ játékot kínál 103+ szolgáltatótól, élő osztós asztalokat, sportfogadást 30+ sportra és üdvözlő bónuszcsomagot 780 000 Ft értékig + 300 ingyenes pörgetés három befizetésen át. Regisztrálj és játssz most.';
$current_page = 'home';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__badge">Nyitva - Játékosokat fogadunk szerte a világból</div>
    <h1>
      <span class="brand-name"><?php echo SITE_NAME; ?></span><br>
      <span class="brand-type">Casino</span>
    </h1>
    <p class="hero__subtitle">Több mint 8 000 játék 103+ szolgáltatótól, teljes körű sportfogadási kínálat 30+ sporttal, élő osztós asztalok és többlépéses üdvözlő bónuszcsomag az első három befizetésedre.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Üdvözlő bónuszcsomag</div>
      <div class="hero__bonus-value"><?php echo WELCOME_BONUS; ?></div>
      <div class="hero__bonus-extra">Sport bónusz: 100% 195 000 Ft-ig &middot; Minimum befizetés 7 800 Ft</div>
    </div>
    <div class="hero__ctas">
      <a href="/play" class="btn btn--primary btn--lg" rel="nofollow"><?php echo __('cta_play', 'Játék most'); ?></a>
      <a href="/hu/bonuses" class="btn btn--outline btn--lg">Bónuszok megtekintése</a>
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
      <p>A <?php echo SITE_NAME; ?> egy online casino és sportfogadó platform, amely 2025-ben indult a Curacao OGL/2024/129/0131 licenc alatt, a 130 group N.V. üzemeltetésében. A platform több mint 8 000 játékot egyesít 103+ szolgáltatótól - köztük nyerőgépeket, élő osztós lobbikat, asztali játékokat, azonnali nyeremenyes címeket és teljes körű sportfogadási kínálatot meccs előtti és élő fogadásokkal 30+ sportra. Új játékosok három befizetésen át 780 000 Ft bónuszig és 300 ingyenes pörgetésig juthatnak, sportfogadóknak pedig 195 000 Ft áll rendelkezésre három befizetés során.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Indulás</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Licenc</th><td>Curacao OGL/2024/129/0131</td></tr>
        <tr><th>Játékok</th><td>8 000+ (nyerőgépek, asztali játékok, élő casino, azonnali játékok)</td></tr>
        <tr><th>Szolgáltatók</th><td>103+ (Play'n GO, Playtech, Pragmatic Play, BGaming, Hacksaw Gaming és még sok más)</td></tr>
        <tr><th>Sport</th><td>30+ sportág, esport, virtuális sportok</td></tr>
        <tr><th>Üdvözlő bónusz</th><td><?php echo WELCOME_BONUS_TEXT; ?></td></tr>
        <tr><th>Minimum befizetés</th><td>3 900 Ft (7 800 Ft a legtöbb bónuszhoz)</td></tr>
        <tr><th>Pénznemek</th><td>HUF, EUR, CHF, USD, CAD, AUD, NZD, PLN, BRL, NOK, ZAR, CZK, CLP</td></tr>
        <tr><th>Támogatás</th><td>24/7 élő chat, e-mail és Telegram</td></tr>
        <tr><th>Mobil</th><td>Teljesen reszponzív, nincs szükség alkalmazásra</td></tr>
      </table>

      <h3>Miért választják a játékosok a <?php echo SITE_NAME; ?>-t</h3>
      <ul class="check-list">
        <li>Több mint 8 000 játék 103+ licencelt szolgáltatótól</li>
        <li>Üdvözlő bónuszcsomag három befizetésen át - 780 000 Ft + 300 ingyenes pörgetés</li>
        <li>Teljes körű sportfogadás meccs előtti és élő fogadásokkal 30+ sportra</li>
        <li>Sport üdvözlő bónusz 195 000 Ft-ig három befizetésen át</li>
        <li>Heti reload bónuszok, visszatérítési programok és versenyek</li>
        <li>5 szintű VIP program személyes account managerrel és magasabb limitekkel</li>
        <li>20+ fizetési mód, köztük Visa, Mastercard, Skrill, kriptovaluta és e-pénztárcák</li>
        <li>24/7 támogatás élő chaten, e-mailen és Telegramon keresztül</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Casino játékok</h4>
          <p>Ezer nyerőgép, Blackjack és Rulett variánsok, Póker, Baccarat, Game Show-k, Crash játékok és élő osztós asztalok olyan stúdióktól, mint a Play'n GO, a Pragmatic Play és a Hacksaw Gaming.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Sportfogadás</h4>
          <p>Meccs előtti és élő fogadások nagy ligákra, mint az UEFA Bajnokok Ligája, NBA, NHL és Grand Slam tornák. Esport fogadások Dota 2, CS2 és League of Legends mérkőzésekre. Virtuális sportok nonstop elérhetők.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127873;</div>
          <h4>Akciók</h4>
          <p>Hárombefizetéses üdvözlő csomagok casinóhoz és sporthoz, heti reload bónuszok, 15% sport visszatérítés, versenyek és 5 szintű VIP program exkluzív jutalmakkal.</p>
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
      <div class="jackpot-label">Aktuális jackpot alap</div>
      <div class="jackpot-amount" id="jackpotCounter">1 109 282 490 Ft</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Népszerű játékok a <?php echo SITE_NAME; ?>-nál</h2>
      <p>Íme néhány a legjátszottabb cím közül a casinóban. A magas volatilitású nyerőgépektől a klasszikus asztali játékokon át az élő osztós termekig - minden játékostípusnak van megfelelő.</p>

      <div class="game-tabs">
        <button class="game-tab active">Összes játék</button>
        <button class="game-tab">Nyerőgépek</button>
        <button class="game-tab">Élő casino</button>
        <button class="game-tab">Asztali játékok</button>
        <button class="game-tab">Game Show-k</button>
        <button class="game-tab">Crash játékok</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Vezető játékszolgáltatók</h3>
          <p>A katalógust stúdiók széles kínálata hajtja - iparági vezetőktől ígéretes független fejlesztőkig:</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">103+ összesen</span>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-games-screen.png" alt="<?php echo SITE_NAME; ?> Casino játéklobby a legjobb nyerőgépekkel Play'n GO, Novomatic és Hacksaw Gaming szolgáltatóktól" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>
    </div>
  </section>

  <!-- Sportsbook -->
  <section class="content-section" id="sports">
    <div class="container">
      <h2>Sportfogadás</h2>
      <div class="two-col" style="align-items:flex-start;gap:var(--space-8)">
        <div>
          <p>A <?php echo SITE_NAME; ?> sportfogadási kínálata meccs előtti és élő fogadásokat tartalmaz nagy és kis versenyek eseményeire. A futballkedvelők mindenre fogadhatnak - az UEFA Bajnokok Ligájától az alsóbb osztályokig. Kosárlabda, tenisz, jégkorong és tucatnyi további sportág egészíti ki a kínálatot.</p>
          <p>Virtuális sportok, mint a futball, kosárlabda és agárverseny nonstop futnak. Az esport fogadások kiterjednek a Dota 2-re, Counter-Strike 2-re, League of Legends-re, Call of Duty-ra és további kompetitív címekre.</p>

          <h3>Elérhető sportágak</h3>
          <ul class="check-list">
            <li>Futball (UEFA Bajnokok Ligája, Premier League, Bundesliga, Serie A, La Liga)</li>
            <li>Kosárlabda (NBA, EuroLeague, nemzeti ligák)</li>
            <li>Tenisz (Grand Slam, ATP, WTA)</li>
            <li>Jégkorong (NHL, KHL, SHL)</li>
            <li>Esport (Dota 2, CS2, League of Legends, Call of Duty)</li>
            <li>Virtuális sportok, lóverseny és 25+ egyéb sportág</li>
          </ul>
        </div>
        <div>
          <div style="text-align:center;margin-bottom:var(--space-6)">
            <img src="/assets/img/vipluck-sports.png" alt="<?php echo SITE_NAME; ?> sportfogadás élő Bajnokok Ligája odds-okkal és fogadási felülettel" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
          </div>
          <div class="highlight-box">
            <h4>Sport üdvözlő bónusz</h4>
            <p>Új játékosok az első három befizetésükre összesen 195 000 Ft sportbónuszt kaphatnak: 100% az első befizetés 78 000 Ft-ig, 100% a második befizetés 58 500 Ft-ig és 100% a harmadik befizetés 58 500 Ft-ig. Minimum befizetés 7 800 Ft. Tét követelmény: 6x, legalább 1,60-as oddsú fogadásokon.</p>
          </div>
          <table class="quick-table" style="margin-top: var(--space-6);">
            <tr><th>Fogadástípusok</th><td>Meccs előtti, élő, hosszú távú, kombifogadás</td></tr>
            <tr><th>Sportok</th><td>30+, köztük esport és virtuális sportok</td></tr>
            <tr><th>Funkciók</th><td>Kombi boost, korai kifizetés, emelt oddsok</td></tr>
            <tr><th>Visszatérítés</th><td>15% hetente 195 000 Ft-ig</td></tr>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section content-section--alt" id="payments">
    <div class="container">
      <h2>Fizetési módok</h2>
      <p>A <?php echo SITE_NAME; ?> több mint 20 fizetési módot támogat, köztük hitelkártyákat, e-pénztárcákat, előre fizetett kártyákat és 10 kriptovalutát. Az elérhetőség az országodtól függ. A befizetések 3 900 Ft-tól kezdődnek.</p>

      <table class="quick-table">
        <tr><th>Befizetési módok</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Minimum befizetés</th><td>3 900 Ft (7 800 Ft a legtöbb bónuszhoz)</td></tr>
        <tr><th>Minimum kifizetés</th><td>7 800 Ft</td></tr>
        <tr><th>Max. kifizetés (naponta)</th><td>273 000 Ft (VIP: 585 000 Ft)</td></tr>
        <tr><th>Max. kifizetés (hetente)</th><td>877 500 Ft (VIP: 2 730 000 Ft)</td></tr>
        <tr><th>Max. kifizetés (havonta)</th><td>3 510 000 Ft (VIP: 10 920 000 Ft)</td></tr>
        <tr><th>Feldolgozási idő</th><td>Legfeljebb 72 óra, hétvégén nincs feldolgozás (összesen legfeljebb 7 munkanap)</td></tr>
        <tr><th>Pénznemek</th><td>HUF, EUR, CHF, USD, CAD, AUD, NZD, PLN, BRL, NOK, ZAR, CZK, CLP</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">A kifizetési módok, limitek, díjak és a gyorsabb kifizetési tippek részletes áttekintéséhez látogasd meg a <a href="/hu/withdrawal">Kifizetések oldalt</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section" id="mobile">
    <div class="container">
      <h2>Mobil casino</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p>A <?php echo SITE_NAME; ?>-nak nincs saját mobilalkalmazása, de a weboldal teljesen kompatibilis minden okostelefonnal és tablettel. A böngésző alapú platform ugyanazokat a funkciókat, játékokat és fiókkezelési eszközöket kínálja, mint az asztali verzió. Nincs szükség letöltésre - nyisd meg a mobilböngészőt, jelentkezz be és játssz.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/vipluck-lobby.png" alt="<?php echo SITE_NAME; ?> Casino mobil lobby üdvözlő bónusszal és játéknavigációval" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>
      <ul class="check-list">
        <li>A teljes játékkönyvtár elérhető mobilböngészőkön keresztül</li>
        <li>Sportfogadás élő piacokkal</li>
        <li>Befizetés és kifizetés közvetlenül a telefonról</li>
        <li>Élő chat és Telegram támogatás mobilon is elérhető</li>
        <li>Nincs szükség alkalmazásra - iOS és Android eszközökön egyaránt működik</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section content-section--alt" id="faq">
    <div class="container container--narrow">
      <h2>Gyakran ismételt kérdések</h2>

      <details class="faq-item">
        <summary>Milyen játékok találhatók a <?php echo SITE_NAME; ?> Casinóban?</summary>
        <div class="faq-answer">
          <p>A <?php echo SITE_NAME; ?> 103+ szolgáltatóval működik együtt, köztük a Play'n GO-val, a Playtechkel, a Pragmatic Playvel, a BGaminggel és a Hacksaw Gaminggel. Videónyerőgépeket, jackpot nyerőgépeket, Megaways-címeket, Blackjacket, Rulettot, Baccaratot, Pókert, Game Show-kat, Crash játékokat és sok mást játszhatsz. A sportfogadás 30+ sportágat fed le meccs előtti és élő lehetőségekkel.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Milyen üdvözlő bónuszt kínál a <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>Új casino játékosok hárombefizetéses üdvözlő csomagot kapnak: 100% 195 000 Ft + 100 ingyenes pörgetés az első befizetésre, 75% 292 500 Ft + 75 ingyenes pörgetés a másodikra, és 50% 292 500 Ft + 125 ingyenes pörgetés a harmadikra. Összértéke: 780 000 Ft + 300 ingyenes pörgetés. A sportfogadók az első három befizetésükre összesen 195 000 Ft-ot kaphatnak. Minimum befizetés 7 800 Ft.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mennyi a maximum kifizetés a <?php echo SITE_NAME; ?> Casinóban?</summary>
        <div class="faq-answer">
          <p>Standard játékosok naponta 273 000 Ft-ot, hetente 877 500 Ft-ot, havonta 3 510 000 Ft-ot fizethetnek ki. A VIP tagoknak magasabb limitek járnak: naponta 585 000 Ft, hetente 2 730 000 Ft, havonta 10 920 000 Ft. A minimum kifizetés 7 800 Ft. A kifizetések feldolgozása munkanapokon belül 72 órán belül történik.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Van VIP program a <?php echo SITE_NAME; ?>-nál?</summary>
        <div class="faq-answer">
          <p>Igen. A <?php echo SITE_NAME; ?> 5 szintű VIP programot üzemeltet, ahol az előrelépés csak meghívással lehetséges. Az előnyök közé tartozik a személyes account manager, magasabb kifizetési limitek, exkluzív bónuszajánlatok és jobb visszatérítési százalékok. Minél magasabb a szinted, annál jobb a jutalom és a visszatérítési arány.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Játszhatok mobilon?</summary>
        <div class="faq-answer">
          <p>A <?php echo SITE_NAME; ?>-nak nincs mobilalkalmazása, de a weboldal teljesen mobilra optimalizált. Minden játékot, sportfogadást és fiókfunkciót bármely modern okostelefon- vagy tabletböngészőn elérhetsz.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Hogyan érhetem el az ügyfélszolgálatot?</summary>
        <div class="faq-answer">
          <p>Az ügyfélszolgálati csapatot élő chaten, e-mailen a support@vipluck.com címen vagy Telegramon érheted el - napi 24 órában, heti 7 napban. Az élő chat közvetlenül a weboldalon érhető el a gyors válaszokért. További információért látogasd meg a <a href="/hu/support">Támogatás oldalt</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
