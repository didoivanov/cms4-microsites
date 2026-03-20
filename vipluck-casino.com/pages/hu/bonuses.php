<?php
/**
 * Bónuszok oldal - VipLuck Casino (Magyar)
 */
$page_title = SITE_NAME . ' Bónuszok - Üdvözlő bónusz, Ingyenes pörgetések, Visszatérítés & VIP jutalmak';
$page_description = 'Az összes ' . SITE_NAME . ' Casino bónusz egy helyen. Üdvözlő csomag 780 000 Ft + 300 ingyenes pörgetés 3 befizetésen át, sport üdvözlő bónusz 195 000 Ft-ig, heti reload ajánlatok, visszatérítési programok, VIP jutalmak és még sok más.';
$current_page = 'bonuses';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Casino Bónuszok';
$hero_description = 'Az összes aktív akció, üdvözlő ajánlat és hűségprogram egy helyen. Az aktiválás előtt olvasd el a feltételeket.';
$hero_cta = 'Bónusz megszerzése';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Welcome Casino Package -->
  <section class="content-section" id="welcome">
    <div class="container">
      <h2>Üdvözlő bónuszok új játékosoknak</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <p style="margin-top:0">Új játékosok a <?php echo SITE_NAME; ?>-nál választhatnak casino üdvözlő csomag vagy sport üdvözlő csomag között. A casino ajánlat az első három befizetésedre 780 000 Ft + 300 ingyenes pörgetés összértékig terjed. A sport csomag az első három befizetésen át összesen 195 000 Ft-ot kínál. Mindkét lehetőség az első jogosult befizetéstől elérhető, és más akciókkal nem kombinálható.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-promotions.png" alt="<?php echo SITE_NAME; ?> Casino promóciók oldala az üdvözlő csomaggal és VIP cashback ajánlatokkal" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>

      <!-- Casino Welcome – Deposit 1 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">1. befizetés: 100% 195 000 Ft-ig + 100 Ingyenes Pörgetés</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Fizess be legalább 7 800 Ft-ot és kapj 100%-os megfelelést 195 000 Ft-ig. Ehhez jár 100 ingyenes pörgetés is, amelyek naponta 20 pörgetéses csomagokban kerülnek jóváírásra 5 egymást követő napon. Az első csomag a befizetés után azonnal elérhető. Minden csomagot 24 órán belül kell felhasználni, különben lejár. Egy 3 900 Ft-os vagy annál nagyobb befizetés 1 Bonus Crab egyenleget is hoz a fogógéphez, ahol érmék, ingyenes pörgetések, bónusz egyenleg vagy készpénz nyerhető.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Minimum befizetés</div>
            <div class="bonus-detail__value">7 800 Ft</div>
          </div>
          <div>
            <div class="bonus-detail__label">Tét követelmény</div>
            <div class="bonus-detail__value">35x (bónusz + befizetés)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Ingyenes pörgetés tét</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Érvényesség</div>
            <div class="bonus-detail__value">10 nap</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max. tét</div>
            <div class="bonus-detail__value">1 950 Ft</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome – Deposit 2 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2. befizetés: 75% 292 500 Ft-ig + 75 Ingyenes Pörgetés</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>A második 7 800 Ft-os vagy annál nagyobb befizetés 75%-os megfelelést hoz 292 500 Ft-ig, plusz 75 ingyenes pörgetést egy kiválasztott nyerőgépen. A pörgetések napi 25-ös csomagokban kerülnek jóváírásra 3 napon át. Ugyanazok a tét követelmények és érvényességi időszakok vonatkoznak rá, mint az első befizetési bónuszra.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Minimum befizetés</div>
            <div class="bonus-detail__value">7 800 Ft</div>
          </div>
          <div>
            <div class="bonus-detail__label">Tét követelmény</div>
            <div class="bonus-detail__value">35x (bónusz + befizetés)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Ingyenes pörgetés tét</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Érvényesség</div>
            <div class="bonus-detail__value">10 nap</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome – Deposit 3 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">3. befizetés: 50% 292 500 Ft-ig + 125 Ingyenes Pörgetés</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>A harmadik 7 800 Ft-os vagy annál nagyobb befizetés 50%-os megfelelést hoz 292 500 Ft-ig, plusz 125 ingyenes pörgetést napi 25-ös csomagokban 5 napon át. Ezzel az összes üdvözlő csomag értéke 780 000 Ft bónusz egyenlegen és 300 ingyenes pörgetésen eléri a maximumát az első három befizetésen át.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Minimum befizetés</div>
            <div class="bonus-detail__value">7 800 Ft</div>
          </div>
          <div>
            <div class="bonus-detail__label">Tét követelmény</div>
            <div class="bonus-detail__value">35x (bónusz + befizetés)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Ingyenes pörgetés tét</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Érvényesség</div>
            <div class="bonus-detail__value">10 nap</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome – Deposit 1 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">1. sport befizetés: 100% 78 000 Ft-ig</div>
          <span class="bonus-card__tag">Sport</span>
        </div>
        <p>A sportfogadók az első befizetésükre 100%-os megfelelést kapnak 78 000 Ft-ig. A maximális bónusz összege régiónként eltérhet. A bónusz aktiválásához a teljes befizetési összeget legalább 1,50-es oddsú sportfogadásokon kell megforgatni.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Minimum befizetés</div>
            <div class="bonus-detail__value">7 800 Ft</div>
          </div>
          <div>
            <div class="bonus-detail__label">Tét követelmény</div>
            <div class="bonus-detail__value">5x vagy 6x (országtól függően)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Minimum odds</div>
            <div class="bonus-detail__value">2,0 egyes fogadásokra / 1,5 kombira</div>
          </div>
          <div>
            <div class="bonus-detail__label">Érvényesség</div>
            <div class="bonus-detail__value">30 nap</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome – Deposit 2 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2. sport befizetés: 75% 58 500 Ft-ig</div>
          <span class="bonus-card__tag">Sport</span>
        </div>
        <p>A második 7 800 Ft-os vagy annál nagyobb sport befizetés 75%-os megfelelést hoz 58 500 Ft-ig. Ugyanazok az aktiválási és tét követelmények vonatkoznak rá, mint az első sport bónuszra. A befizetést teljes egészében legalább 1,50-es oddsú sportfogadásokon kell megforgatni, mielőtt a bónusz jóváírásra kerül.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Minimum befizetés</div>
            <div class="bonus-detail__value">7 800 Ft</div>
          </div>
          <div>
            <div class="bonus-detail__label">Tét követelmény</div>
            <div class="bonus-detail__value">5x vagy 6x (országtól függően)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Érvényesség</div>
            <div class="bonus-detail__value">30 nap</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome – Deposit 3 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">3. sport befizetés: 50% 58 500 Ft-ig</div>
          <span class="bonus-card__tag">Sport</span>
        </div>
        <p>A harmadik 7 800 Ft-os vagy annál nagyobb sport befizetés 50%-os megfelelést hoz 58 500 Ft-ig. Ezzel a sport üdvözlő csomag összértéke eléri a 195 000 Ft-ot három befizetésen át. Az összes tét követelményt 30 napon belül kell teljesíteni minden egyes befizetéstől számítva.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Minimum befizetés</div>
            <div class="bonus-detail__value">7 800 Ft</div>
          </div>
          <div>
            <div class="bonus-detail__label">Tét követelmény</div>
            <div class="bonus-detail__value">5x vagy 6x (országtól függően)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Érvényesség</div>
            <div class="bonus-detail__value">30 nap</div>
          </div>
        </div>
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <div class="highlight-box" style="margin:0">
            <h4><?php echo SITE_NAME; ?> Promóciós kód</h4>
            <p>Ha van promóciós kódod, a regisztráció során megadhatod. A kódmező a regisztrációs űrlapon jelenik meg, közvetlenül az előnyben részesített üdvözlő bónusz kiválasztása után. A promóciós kódok különleges ajánlatokat vagy módosított bónusz feltételeket oldhatnak fel - ezért érdemes megnézni, hogy van-e ilyen kód, mielőtt befizetsz.</p>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-account.png" alt="<?php echo SITE_NAME; ?> Casino bónusz kiválasztó képernyő casino és sport üdvözlő lehetőségekkel" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>

      <div class="highlight-box" style="margin-top: var(--space-4);">
        <h4>Maximális nyeremény</h4>
        <p>A Brazíliában, Chilében, Japánban, Peruban és Thaiföldön élő játékosokra a bónuszból finanszírozott téteken a bónusz összegének 10-szereséig terjedő maximális nyeremény korlát vonatkozik. Ez vonatkozik az üdvözlő bónuszokra, reload bónuszokra és minden egyéb akciós ajánlatra. Az ezen küszöb feletti nyeremények ennek megfelelően kerülnek kiigazításra.</p>
      </div>
    </div>
  </section>

  <!-- Reload & Weekly -->
  <section class="content-section content-section--alt" id="reload">
    <div class="container">
      <h2>Heti reload bónuszok</h2>
      <p>A <?php echo SITE_NAME; ?> az üdvözlő fázison jóval túl is fenntartja az akciókat. Ezek a visszatérő ajánlatok hetente alaphelyzetbe kerülnek, és minden héten valami újat adnak az aktív játékosoknak.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Heti boost: 50 ingyenes pörgetés</div>
          <span class="bonus-card__tag">Hétfő - Csütörtök</span>
        </div>
        <p>Fizess be hétfő és csütörtök között 7 800 Ft-ot vagy többet, és kapj 50 ingyenes pörgetést egy kiválasztott nyerőgépen. Minden héten be kell iratkoznod a befizetés előtt. A pörgetéseket 7 napon belül kell felhasználni. A nyereményekre 40-szeres tét követelmény vonatkozik 10 napos határidővel. Max. tét bónusz aktivitás alatt: 1 950 Ft.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Hétvégi reload: 50% 195 000 Ft-ig + 75 ingyenes pörgetés</div>
          <span class="bonus-card__tag">Péntek - Vasárnap</span>
        </div>
        <p>Fizess be hétvégén legalább 7 800 Ft-ot, és kapj 50%-os megfelelést 195 000 Ft-ig. Egy 19 500 Ft-os vagy annál nagyobb befizetés esetén 75 ingyenes pörgetést is kapsz egy kiválasztott nyerőgépen. Be kell iratkoznod a befizetés előtt. A tét követelmény 35-szoros a befizetés és a bónusz együttesére, 40-szeres az ingyenes pörgetési nyereményekre. 10 napod van a követelmények teljesítésére.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Vasárnapi különleges: 30% 117 000 Ft-ig + 50 ingyenes pörgetés</div>
          <span class="bonus-card__tag">Csak vasárnap</span>
        </div>
        <p>Extra vasárnapi ajánlat azoknak, akik extra lendülettel szeretnék kezdeni az új hetet. Fizess be 7 800 Ft-ot vagy többet, és kapj 30%-os megfelelést 117 000 Ft-ig, plusz 50 ingyenes pörgetést. Beíratkozás szükséges. Tét követelmény: 35x a befizetésre és a bónuszra, 40x az ingyenes pörgetési nyereményekre, 10 napos határidővel.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Heti sport reload: 55% 117 000 Ft-ig</div>
          <span class="bonus-card__tag">Sport</span>
        </div>
        <p>Hetente egyszer a legnagyobb befizetésed 55%-os sport bónuszra jogosít 117 000 Ft-ig. A befizetést egyszer kell megforgatni legalább 1,50-es oddsú sportfogadásokon, mielőtt a bónusz jóváírásra kerül. Ezután élő chaten vagy e-mailen igényelheted. A tét követelményeket 30 napon belül kell teljesíteni. Az ebből a bónuszból maximálisan kivehető összeg az értékének 10-szerese.</p>
      </div>
    </div>
  </section>

  <!-- Cashback -->
  <section class="content-section" id="cashback">
    <div class="container">
      <h2>Visszatérítési programok</h2>
      <p>A <?php echo SITE_NAME; ?> három külön visszatérítési programot kínál: napi visszatérítés casino játékokra, heti visszatérítés élő casinóra és heti visszatérítés sportfogadásra. Minden programnak saját feltételei és aktiválási folyamata van.</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Napi casino visszatérítés</h4>
          <p>VIP 3. szinttől elérhető. A VIP 3 naponta 5% visszatérítést kap 78 000 Ft-ig. A VIP 4 10%-ot kap 117 000 Ft-ig. A VIP 5 15%-ot kap 195 000 Ft-ig. A visszatérítés automatikusan kerül jóváírásra 04:00 UTC-kor, és 1-szeres tét követelmény vonatkozik rá. A beíratkozást 4 hetente meg kell újítani.</p>
        </div>
        <div class="info-card">
          <h4>Élő casino visszatérítés: 25% 136 500 Ft-ig</h4>
          <p>Heti visszatérítés az élő casino játékokon elszenvedett nettó veszteségekre. A jogosult minimum veszteség 1 950 Ft. Lépj kapcsolatba a támogatással hétfőn 06:00 UTC után (23:59 UTC előtt) az aktiváláshoz. Jóváírás után 1-szeres tét követelmény vonatkozik a kifizetés előtt.</p>
        </div>
        <div class="info-card">
          <h4>Sport visszatérítés: 15% 195 000 Ft-ig</h4>
          <p>Hétfőtől vasárnapig a sportfogadáson elszenvedett nettó veszteségeket fedezi. Minimum 7 800 Ft-os veszteség szükséges. Lépj kapcsolatba a támogatással hétfőn az aktiváláshoz. A visszatérítésre 3-szoros tét követelmény vonatkozik, és csak a sportfogadási részben használható fel.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sports Promos -->
  <section class="content-section content-section--alt" id="sports-promos">
    <div class="container">
      <h2>Sportfogadási akciók</h2>
      <p>Az üdvözlő bónuszon és a visszatéríten kívül a sportfogadási részleg különféle extrákat kínál, amelyek extra értéket adnak a fogadásaidhoz.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Kombi boost: akár 100%</div>
        </div>
        <p>Helyezz el kombifogadást 3 vagy több választással, ahol minden egyes odds legalább 1,40, és a nyereményeid bónuszt kapnak. A szorzó 3%-nál indul 3 választásnál, és akár 100%-ra nőhet 21 vagy több választásnál. Csak valódi pénzes tétek számítanak. Egy kifizetési kérelem a boost jóváírása előtt érvényteleníti azt.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2 gólos előny: korai kifizetés</div>
        </div>
        <p>Ha a csapatod 2 góllal vezet, a meccs előtti 1X2 fogadásod teljes nyereményként kerül elszámolásra - nem kell megvárni a végső sípszót. Ez az ajánlat csak hazai vagy vendégcsapat győzelmére kötött fogadásokra érvényes. Az élő fogadások és a döntetlen fogadások ki vannak zárva, és a korai készpénzfelvétel érvényteleníti a korai kifizetést.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Sport boost: 20% 39 000 Ft-ig</div>
        </div>
        <p>Heti sport boost minden aktív játékosnak. Fizess be 7 800 Ft-ot vagy többet, és kapj 20%-os bónuszt 39 000 Ft-ig sportfogadásra. A bónuszt 5-ször kell megforgatni legalább 1,50-es oddsú fogadásokon 14 napon belül. Beíratkozás szükséges a fiókprofilodon keresztül.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Péntek előny: Ingyenes fogadás 19 500 Ft-ig</div>
        </div>
        <p>Minden pénteken: helyezz el egy jogosult sportfogadást 7 800 Ft-ért vagy többért, legalább 1,80-as oddsnál. Ha a fogadás veszít, a tét 50%-ának megfelelő ingyenes fogadást kapsz, legfeljebb 19 500 Ft értékig. Az ingyenes fogadást 3 napon belül kell felhasználni, és 3-szoros tét követelmény vonatkozik rá legalább 1,50-es oddsnál.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Hétvégi sport reload: 40% 78 000 Ft-ig</div>
        </div>
        <p>Fizess be szombaton vagy vasárnap 7 800 Ft-ot vagy többet, és kapj 40%-os sport bónuszt 78 000 Ft-ig. A befizetést egyszer kell megforgatni legalább 1,50-es oddsú sportfogadásokon, mielőtt a bónusz aktiválódik. A tét követelményeket 30 napon belül kell teljesíteni. Az ebből a bónuszból maximálisan kivehető összeg az értékének 10-szerese.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Emelt oddsok</div>
        </div>
        <p>Kiválasztott meccs előtti 1X2 piacok esetenként emelt oddsokat kínálnak. Figyelj az "Enhanced Prices" jelölésre a piacleírásban. Az emelt oddsú fogadásokból származó nyeremények valódi pénzként kerülnek kifizetésre, további tét követelmény nélkül.</p>
      </div>
    </div>
  </section>

  <!-- Free Spins -->
  <section class="content-section" id="free-spins">
    <div class="container">
      <h2>Ingyenes pörgetések</h2>
      <p>Az ingyenes pörgetések a <?php echo SITE_NAME; ?> több akciójának is részét képezik - az üdvözlő csomagtól a heti reload ajánlatokig. Mindig nézd meg a feltételeket, mivel az ingyenes pörgetések specifikus nyerőgépekhez vannak hozzárendelve, és meghatározott napon belül kell felhasználni őket.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Üdvözlő csomag ingyenes pörgetések: 300 összesen</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Az üdvözlő csomag 300 ingyenes pörgetést tartalmaz három befizetésen át elosztva: 100 az első befizetésen (napi 20, 5 napon át), 75 a másodikon (napi 25, 3 napon át), és 125 a harmadikon (napi 25, 5 napon át). Az ingyenes pörgetési nyereményekre 40-szeres tét követelmény vonatkozik. Az egyes csomagokhoz nem felhasznált pörgetések 24 óra után lejárnak.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Teljes pörgetés</div>
            <div class="bonus-detail__value">300</div>
          </div>
          <div>
            <div class="bonus-detail__label">Tét követelmény</div>
            <div class="bonus-detail__value">40x a nyereményekre</div>
          </div>
          <div>
            <div class="bonus-detail__label">Csomag lejárata</div>
            <div class="bonus-detail__value">24 óra/csomag</div>
          </div>
        </div>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Heti boost ingyenes pörgetések: 50 hetente</div>
          <span class="bonus-card__tag">Hétfő - Csütörtök</span>
        </div>
        <p>Aktív játékosok hétfőtől csütörtökig legalább 7 800 Ft-os befizetés esetén 50 ingyenes pörgetést kapnak hetente. A pörgetések 7 napon belül felhasználandók, a nyereményekre 40-szeres tét követelmény vonatkozik. Beíratkozás szükséges minden héten a befizetés előtt. Max. tét bónusz aktivitás alatt: 1 950 Ft.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Minimum befizetés</div>
            <div class="bonus-detail__value">7 800 Ft</div>
          </div>
          <div>
            <div class="bonus-detail__label">Tét követelmény</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Érvényesség</div>
            <div class="bonus-detail__value">7 nap</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- VIP, Shop, Crab -->
  <section class="content-section content-section--alt" id="vip">
    <div class="container">
      <h2>VIP program &amp; Extrák</h2>
      <div class="two-col">
        <div>
          <h3>VIP program</h3>
          <p>A <?php echo SITE_NAME; ?> egy ötszintű hűségprogramot kínál, amelyen a fogadási aktivitásod révén haladhatsz előre. A szintek: Bronz, Ezüst, Arany, Platina és Gyémánt. Minden szinttel olyan előnyöket nyitsz meg, mint a személyes account manager, magasabb kifizetési limitek, exkluzív bónusz ajánlatok és jobb visszatérítési százalékok. A Gyémánt tagok hozzáférnek a legjobb heti visszatérítési ajánlatokhoz, elsőbbségi kifizetési feldolgozáshoz és exkluzív eseményekre szóló meghívókhoz.</p>

          <h4>VIP szintek áttekintése</h4>
          <table class="quick-table">
            <tr><th>Szint</th><th>Előnyök</th></tr>
            <tr><td>Bronz</td><td>Alap visszatérítés, hozzáférés rendszeres akciókhoz, éremjutalmak aktivitásért</td></tr>
            <tr><td>Ezüst</td><td>Javított visszatérítés (3%), gyorsabb kifizetések, születésnapi bónusz</td></tr>
            <tr><td>Arany</td><td>5% visszatérítés naponta 78 000 Ft-ig, személyes account manager, magasabb kifizetési limitek</td></tr>
            <tr><td>Platina</td><td>10% visszatérítés naponta 117 000 Ft-ig, exkluzív akciók, elsőbbségi támogatás</td></tr>
            <tr><td>Gyémánt</td><td>15% visszatérítés naponta 195 000 Ft-ig, legmagasabb limitek, VIP események, egyedi ajánlatok</td></tr>
          </table>

          <h3>Bonus Crab</h3>
          <p>Minden 3 900 Ft-os vagy annál nagyobb befizetés 1 Bonus Crab egyenleget hoz. Használd, hogy véletlenszerű nyereményt "fogj" a fogógéppel - a lehetséges nyeremények közt van bónusz egyenleg, ingyenes pörgetés vagy érmék. Egy kis napi extra, amely változatosabbá teszi a játékélményt.</p>
        </div>
        <div>
          <h3>Érmék &amp; Bolt</h3>
          <p>Az érmék játékaktivitással, kihívásokkal és akciókkal szerezhetők. A <?php echo SITE_NAME; ?> Boltban jutalmakra válthatod őket - kiválasztott nyerőgépeken lévő ingyenes pörgetésektől (pl. 5 pörgetés a Sweet Bonanzán 30 érméért) a bónusz egyenlegig (1 950 Ft 50 érmékért, akár 97 500 Ft 1 200 érmékért). Így a hűséged kézzel fogható jutalommá válik - a saját tempódban.</p>

          <h3>Kihívások</h3>
          <p>A heti kihívások egyszerű célok elérésével jutalmaznak meg. A casino kihívások pl. 195 Ft-os téteket igényelnek adott nyerőgépeken, míg a sport kihívások 5 850 Ft-os fogadásokat kérhetnek legalább 2,0-s oddsú meccsekre. Minden befejezett kihívás érméket hoz, és 20 kihívás egy héten belül 50 érme bónuszt old fel.</p>

          <h3>Évfordulós különleges</h3>
          <p>A fiókregistrációd évfordulóján a <?php echo SITE_NAME; ?> különleges bónuszcsomagot kínál. Az ajánlat a VIP szintedtől és a fiókaktivitástól függ, és automatikusan jóváírásra kerül az évforduló napján. Ellenőrizd az értesítéseidet, vagy lépj kapcsolatba a támogatással, ha nem kaptad meg az évfordulós bónuszt.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Wagering Requirements -->
  <section class="content-section" id="wagering">
    <div class="container container--narrow">
      <h2>Tét követelmények magyarázata</h2>
      <p>A tét követelmény megmutatja, hányszor kell a bónusz összegét (és esetenként a befizetést) megforgatni, mielőtt a nyereményeket ki lehet venni. A <?php echo SITE_NAME; ?> összes bónuszára vonatkozó kulcsszabályok:</p>

      <ul class="check-list">
        <li>Casino üdvözlő bónusz: 35x (bónusz + befizetés), 10 napos határidő</li>
        <li>Ingyenes pörgetési nyeremények: 40x, 10 napos határidő</li>
        <li>Sport üdvözlő bónusz: 5x vagy 6x (régiótól függően), 30 napos határidő</li>
        <li>Reload bónuszok: 35x (bónusz + befizetés), 10 napos határidő</li>
        <li>Visszatérítési bónuszok: 1x (casino), 3x (sport)</li>
        <li>A tét követelmény teljesítése előtti kifizetési kérelem érvényteleníti a bónuszt</li>
        <li>A nyerőgépek általában 100%-ban számítanak; az asztali és élő casino játékok kisebb mértékben</li>
        <li>Max. tét bónusz aktivitás alatt: 1 950 Ft (€5 megfelelője)</li>
      </ul>

      <div class="highlight-box">
        <h4>Fontos: bónusz érvénytelenítés</h4>
        <p>Ha a tét követelmény teljesítése előtt kifizetési kérelmet nyújtasz be, az aktív bónusz és az összes kapcsolódó nyeremény elvész. Mielőtt kifizetést kérsz, mindig győződj meg arról, hogy az aktuális bónuszod tét követelményei teljesültek - ezt a fiókod bónusz részlegében ellenőrizheted.</p>
      </div>
    </div>
  </section>

  <!-- No-Deposit Info -->
  <section class="content-section content-section--alt" id="no-deposit">
    <div class="container container--narrow">
      <h2><?php echo SITE_NAME; ?> Befizetés nélküli bónusz</h2>
      <p>Jelenleg a <?php echo SITE_NAME; ?> nem kínál klasszikus befizetés nélküli bónuszt. A Bonus Crab funkció azonban minden 3 900 Ft-os vagy annál nagyobb befizetést egy ingyenes fogógép-kísérlettel jutalmaz, ahol ingyenes pörgetéseket, bónusz egyenleget, érméket vagy készpénzes nyereményeket szerezhetsz - az eredeti nyereményre vonatkozó extra tét nélkül. Ez jelenleg a platform legközelibb alternatívája a befizetés nélküli bónuszhoz.</p>
      <p>Rendszeresen nézz vissza a promóciós részbe, mivel a casino gyakran váltja az ajánlatait, és a jövőben bevezethet befizetés nélküli ajánlatokat vagy ingyenes bónuszkódokat.</p>
    </div>
  </section>

  <!-- Bonus FAQ -->
  <section class="content-section" id="bonus-faq">
    <div class="container container--narrow">
      <h2>Bónusz GYIK</h2>

      <details class="faq-item">
        <summary>Használhatok promóciós kódot a <?php echo SITE_NAME; ?>-nál?</summary>
        <div class="faq-answer">
          <p>Igen. A regisztráció során lehetőséged van promóciós kódot megadni, miután kiválasztottad a kívánt üdvözlő bónuszt. Ha érvényes kódod van, ott add meg a kapcsolódó előnyök aktiválásához.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kombinálhatok több bónuszt?</summary>
        <div class="faq-answer">
          <p>Nem. Az üdvözlő bónuszok és a reload akciók nem halmozhatók egymásra. Minden aktív bónuszt be kell fejezni vagy törölni kell, mielőtt egy újat aktiválsz. Egyes bónuszokat a profil részlegben vagy a támogatással való kapcsolatfelvétel útján törölhetsz.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mi történik, ha a tét követelmények teljesítése előtt kifizetést kérek?</summary>
        <div class="faq-answer">
          <p>A tét követelmények teljesítése előtti kifizetési kérelem érvényteleníti a bónuszt és az összes hozzá kapcsolódó nyereményt. Mielőtt kifizetést kérsz, győződj meg róla, hogy a forgalmazást teljesen befejezted.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Minden játék egyenlő mértékben járul hozzá a tét követelményekhez?</summary>
        <div class="faq-answer">
          <p>Nem. A különböző játéktípusok eltérő mértékben járulnak hozzá. A nyerőgépek általában 100%-ban számítanak, míg az asztali és élő casino játékok kisebb mértékben. A pontos hozzájárulási táblázatot a bónusz feltételeiben találod.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>A Skrill és Neteller befizetések jogosultak bónuszokra?</summary>
        <div class="faq-answer">
          <p>A legtöbb esetben a Skrillen vagy Netelleren keresztül végrehajtott befizetések nem jogosultak üdvözlő bónuszokra. Ellenőrizd az adott akció feltételeit az esetleges kivételekért.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Vonatkozik rám a maximális nyereménykorlát?</summary>
        <div class="faq-answer">
          <p>A 10-szeres nyeremény korlát a Brazíliában, Chilében, Japánban, Peruban és Thaiföldön élőkre vonatkozik. Ha ezen országok valamelyikében élsz, a bónuszból finanszírozott játékon elért nyereményeid a bónusz összegének 10-szorosára korlátozódnak. A más régiókból érkező játékosokat ez a szabály nem érinti.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Hogyan működik az évfordulós bónusz?</summary>
        <div class="faq-answer">
          <p>Minden évben a regisztráció évfordulóján a <?php echo SITE_NAME; ?> különleges bónuszt juttat a fiókodra. Az ajánlat típusa és mérete a VIP szintedtől és az összes aktivitástól függ. A bónusz automatikusan jóváírásra kerül - ellenőrizd az értesítéseidet, vagy lépj kapcsolatba a támogatással, ha nem kaptad meg.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mikor kerülnek jóváírásra az ingyenes pörgetések?</summary>
        <div class="faq-answer">
          <p>Az üdvözlő csomag ingyenes pörgetései csomagokban kerülnek jóváírásra - nem egyszerre. Az első csomag a jogosult befizetés után azonnal megjelenik, a többi csomag pedig egymást követő napokon kerül jóváírásra. Minden csomagot 24 órán belül kell felhasználni, különben lejár. Ha a pörgetéseidet nem látod, lépj kapcsolatba a chat támogatással.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
