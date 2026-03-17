<?php
/**
 * Bonuses Page - Slovenian
 */
$page_title = SITE_NAME . ' Bonusi - Dobrodošlični bonus, brezplačni vrtljaji, promocijske kode in ponudbe brez pologa';
$page_description = 'Vsi bonusi ' . SITE_NAME . ' Casino na enem mestu. Dobrodošlični bonus do 500 EUR + 200 brezplačnih vrtljajev, promocijske kode brez pologa, tedenski bonusi za dopolnitev, cashback ponudbe in VIP nagrade.';
$current_page = 'bonuses';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Casino bonusi';
$hero_description = 'Vse aktivne promocije, dobrodošlične ponudbe in nagrade zvestobe, ki so trenutno na voljo. Pred uveljavljanjem katere koli ponudbe preberi pogoje.';
$hero_cta = 'Prevzemi bonus';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Welcome Bonuses -->
  <section class="content-section" id="welcome">
    <div class="container">
      <h2>Dobrodošlični bonusi za nove igralce</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <p style="margin-top:0">Novi vplačniki pri <?php echo SITE_NAME; ?> lahko izbirajo med več dobrodošličnimi ponudbami, odvisno od tega, ali imajo raje casino igre ali športne stave. Vsaka možnost je na voljo ob prvem pologu in je ni mogoče kombinirati z drugimi promocijami.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/casea-bonuses.png" alt="<?php echo SITE_NAME; ?> Casino promocije in dobrodošlične bonus ponudbe" style="max-width:300px;width:100%;">
        </div>
      </div>

      <!-- Casino Welcome -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">100% do &euro;500 + 200 brezplačnih vrtljajev</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Vplačaj najmanj EUR 20 in prejmi polno 100% ujemanje na svoj prvi polog, največ do EUR 500. Poleg tega je 200 brezplačnih vrtljajev razdeljenih v skupinah po 20 na dan v 10 zaporednih dneh. Prva skupina je na voljo takoj po pologu. Vsako skupino moraš prevzeti v 24 urah, sicer poteče. Polog vsaj EUR 10 ti prinese tudi 1 kredit za Bonus Crab, s katerim lahko poskusiš srečo na avtomatu Claw Machine, kjer nagrade vključujejo kovance, brezplačne vrtljaje, bonuse ali denarne nagrade.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. polog</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obračanje</div>
            <div class="bonus-detail__value">35x (bonus + polog)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obračanje brezpl. vrtljajev</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Veljavnost</div>
            <div class="bonus-detail__value">10 dni</div>
          </div>
          <div>
            <div class="bonus-detail__label">Maks. stava</div>
            <div class="bonus-detail__value">&euro;5</div>
          </div>
        </div>
      </div>

      <!-- Multi-Deposit Welcome -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">250% do &euro;3.000 + 350 brezplačnih vrtljajev</div>
          <span class="bonus-card__tag">Paket 4 pologov</span>
        </div>
        <p>Dobrodošlični paket z več pologe, razporejen na tvoje prve štiri pologe. Prvi polog ti prinese 100% do EUR 1.000 plus 200 brezplačnih vrtljajev. Drugi ponuja 75% ujemanje do EUR 500. Tretji doda 50% do EUR 500 plus 50 brezplačnih vrtljajev, četrti pa zaokroži paket s 25% do EUR 1.000 plus 100 brezplačnih vrtljajev.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. polog</div>
            <div class="bonus-detail__value">&euro;20 na polog</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obračanje</div>
            <div class="bonus-detail__value">35x na bonus</div>
          </div>
          <div>
            <div class="bonus-detail__label">Maks. izplačilo</div>
            <div class="bonus-detail__value">10x znesek bonusa</div>
          </div>
          <div>
            <div class="bonus-detail__label">Veljavnost</div>
            <div class="bonus-detail__value">10 dni na bonus</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">100% športni bonus do &euro;100</div>
          <span class="bonus-card__tag">Šport</span>
        </div>
        <p>Športni stavitelji lahko prevzamejo 100% ujemanje na svoj prvi polog. Najvišji bonus se razlikuje glede na regijo: igralci iz Finske, Nemčije, Norveške, Švice in Avstrije lahko prejmejo do EUR 200. Italijanski igralci dobijo do EUR 150. Igralci iz Kazahstana, Uzbekistana, Kirgizistana, Tadžikistana, Gruzije in Azerbajdžana lahko dobijo do EUR 50. Za aktivacijo bonusa mora biti celoten znesek pologa obstavljen na športnih stavah s kvotami najmanj 1,50.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. polog</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obračanje</div>
            <div class="bonus-detail__value">5x ali 6x (odvisno od države)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Min. kvota</div>
            <div class="bonus-detail__value">2,0 posamezne / 1,5 kombinacije</div>
          </div>
          <div>
            <div class="bonus-detail__label">Veljavnost</div>
            <div class="bonus-detail__value">30 dni</div>
          </div>
        </div>
      </div>

      <div class="highlight-box">
        <h4><?php echo SITE_NAME; ?> promocijska koda</h4>
        <p>Če imaš promocijsko kodo, jo lahko vneseš med postopkom registracije. Polje za kodo se prikaže na registracijskem obrazcu takoj po tem, ko izbereš želeni dobrodošlični bonus. Promocijske kode lahko odklenejo posebne ponudbe ali prilagojene bonusne pogoje, zato se splača preveriti pred pologom.</p>
      </div>
    </div>
  </section>

  <!-- Reload & Weekly -->
  <section class="content-section content-section--alt" id="reload">
    <div class="container">
      <h2>Tedenski bonusi za dopolnitev</h2>
      <p><?php echo SITE_NAME; ?> nadaljuje s promocijami tudi po dobrodošlični fazi. Te ponavljajoče se ponudbe se osvežijo vsak teden, zato imajo aktivni igralci vedno kaj za prevzeti.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">66 tedenskih brezplačnih vrtljajev</div>
          <span class="bonus-card__tag">Ponedeljek - četrtek</span>
        </div>
        <p>Opravi polog EUR 20 ali več med ponedeljkom in četrtkom in prejmi 66 brezplačnih vrtljajev na izbranem igralnem avtomatu. Vsak teden se moraš prijaviti pred pologom. Vrtljaje moraš uporabiti v 7 dneh, dobički pa imajo 40x zahtevo za obračanje z 10-dnevnim rokom. Maks. stava med aktivnim bonusom: EUR 5.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Vikend dopolnitev: 50% do &euro;777 + 77 brezplačnih vrtljajev</div>
          <span class="bonus-card__tag">Petek - nedelja</span>
        </div>
        <p>Vplačaj najmanj EUR 20 ob koncu tedna in prejmi 50% ujemanje do EUR 777. Če je tvoj polog EUR 50 ali več, prejmeš tudi 77 brezplačnih vrtljajev na izbranem avtomatu. Pred pologom se je treba prijaviti. Obračanje je 35x na polog in bonus ter 40x na dobitke iz brezplačnih vrtljajev. Za izpolnitev zahtev imaš 10 dni.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Tedenska športna dopolnitev: 55% do &euro;750</div>
          <span class="bonus-card__tag">Šport</span>
        </div>
        <p>Enkrat na teden se tvoj največji polog kvalificira za 55% športni bonus do EUR 750. Polog mora biti enkrat obstavljen na športnih stavah s kvotami 1,50 ali več, preden se bonus pripiše. Nato ga lahko zahtevaš prek klepeta v živo ali e-pošte. Zahteve za obračanje morajo biti izpolnjene v 30 dneh, največje izplačilo iz tega bonusa pa je 10x njegova vrednost.</p>
      </div>
    </div>
  </section>

  <!-- Cashback -->
  <section class="content-section" id="cashback">
    <div class="container">
      <h2>Programi cashback</h2>
      <p><?php echo SITE_NAME; ?> izvaja tri ločene programe cashback: dnevni cashback za casino igre, tedenski cashback za casino v živo in tedenski cashback za športne stave. Vsak program ima svoje pogoje in postopek za prevzem.</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Dnevni casino cashback</h4>
          <p>Na voljo od VIP stopnje 2 naprej. VIP 2 dobi 3% do EUR 100 dnevno. VIP 3 dobi 5% do EUR 200. VIP 4 dobi 10% do EUR 300. VIP 5 dobi 15% do EUR 400. Cashback se samodejno pripiše ob 04:00 UTC in zahteva 1x obračanje. Prijaviti se moraš vsake 4 tedne.</p>
        </div>
        <div class="info-card">
          <h4>Cashback za casino v živo: 25% do &euro;350</h4>
          <p>Tedenski cashback na neto izgube iz iger v casinu v živo. Minimalna kvalifikacijska izguba je EUR 5. Kontaktiraj podporo strankam v ponedeljek po 06:00 UTC (pred 23:59 UTC) za prevzem. Ko je pripisan, cashback zahteva 1x obračanje pred izplačilom.</p>
        </div>
        <div class="info-card">
          <h4>Športni cashback: 10% do &euro;500</h4>
          <p>Pokriva neto izgube na športnih stavah od ponedeljka do nedelje. Za kvalifikacijo je potrebna minimalna izguba EUR 20. Kontaktiraj podporo v ponedeljek za prevzem. Cashback ima 3x zahtevo za obračanje in ga je mogoče uporabiti samo v sekciji Šport.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sports Promos -->
  <section class="content-section content-section--alt" id="sports-promos">
    <div class="container">
      <h2>Promocije športnih stav</h2>
      <p>Poleg dobrodošličnega bonusa in cashbacka športna stavnica ponuja več orodij, zasnovanih za dodano vrednost tvojih stav.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Boost za kombinacije: do 100%</div>
        </div>
        <p>Oddaj kombinacijsko stavo s 3 ali več izbirami s kvotami 1,40+ za vsako in tvoj dobitek prejme dodatek. Množitelj se začne pri 3% za 3 izbire in naraste do 100% za 21 ali več. Štejejo samo stave s pravim denarjem. Zahtevek za izplačilo pred pripisom bonusa ga razveljavi.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Zgodnje izplačilo pri 2 golih prednosti</div>
        </div>
        <p>Če tvoja ekipa vodi z 2 goloma, se tvoja stava 1X2 pred tekmo izplača v celoti -- ni treba čakati na končni sodniški žvižg. Ta ponudba velja samo za stave na zmago domačih ali gostov. Stave v živo in stave na neodločen izid so izključene, izplačilo pred koncem pa razveljavi zgodnje izplačilo.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Bet Builder: 50% brez tveganja do &euro;50</div>
        </div>
        <p>Oddaj Bet Builder stavo s kvoto 1,70 ali več z vsaj EUR 20 pravega denarja. Če izgubi, prejmeš brezplačno stavo v vrednosti 50% tvojega vložka (do EUR 50). Na voljo enkrat na teden. Brezplačno stavo moraš uporabiti v 3 dneh in ima 3x zahtevo za obračanje pri kvotah 1,50+.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Izboljšane kvote</div>
        </div>
        <p>Izbrani trgi 1X2 pred tekmo občasno ponujajo povišane kvote. Poišči oznako "Enhanced Prices" v opisu trga. Dobitki iz stav z izboljšanimi kvotami se izplačajo kot pravi denar brez dodatnega obračanja.</p>
      </div>
    </div>
  </section>

  <!-- VIP, Shop, Crab -->
  <section class="content-section" id="vip">
    <div class="container">
      <h2>VIP program &amp; dodatki</h2>
      <div class="two-col">
        <div>
          <h3>VIP program</h3>
          <p><?php echo SITE_NAME; ?> ima večstopenjski program zvestobe, v katerem napreduješ na podlagi svojega obračanja. Ko se vzpenjaš po stopnjah, odklepaš ugodnosti, kot so osebni upravljavec računa, višji limiti izplačil, ekskluzivne bonusne ponudbe in višji odstotki cashbacka. Najvišje VIP stopnje omogočajo dostop do najboljših tedenskih cashback ponudb in hitrejše obdelave izplačil.</p>

          <h3>Bonus Crab</h3>
          <p>Vsak polog EUR 20 ali več ti prinese 1 kredit za Bonus Crab. Uporabi ga za "ulov" naključne nagrade na avtomatu Claw Machine -- možne nagrade vključujejo bonus denar, brezplačne vrtljaje ali kovance. Je majhen dnevni dodatek, ki prinese nekaj raznolikosti v tvoje seje.</p>
        </div>
        <div>
          <h3>Ekskluzivna trgovina</h3>
          <p>Kovance, ki jih zaslužiš z igranjem, izzivi in promocijami, lahko porabiš v trgovini. Nagrade segajo od brezplačnih vrtljajev na izbranih avtomatih (npr. 5 vrtljajev na Sweet Bonanza za 30 kovancev) do bonus denarja (EUR 5 za 50 kovancev, do EUR 250 za 1.200 kovancev). Je lep način, da svojo zvestobo pretvoriš v otipljive nagrade po svojem tempu.</p>

          <h3>Izzivi</h3>
          <p>Tedenski izzivi te nagradijo za doseganje preprostih ciljev. Casino izzivi od tebe morda zahtevajo stave EUR 0,30 na določenih avtomatih, medtem ko športni izzivi lahko zahtevajo stave EUR 15 na tekmah z minimalnimi kvotami 2,0. Vsak dokončan izziv prinese kovance, dokončanje 20 izzivov v tednu pa bonus 50 kovancev.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- No-Deposit Info -->
  <section class="content-section content-section--alt" id="no-deposit">
    <div class="container container--narrow">
      <h2><?php echo SITE_NAME; ?> bonus brez pologa</h2>
      <p>Trenutno <?php echo SITE_NAME; ?> ne ponuja klasičnega bonusa brez pologa. Vendar pa funkcija Bonus Crab nagradi vsak polog EUR 10 ali več z brezplačnim poskusom na avtomatu Claw Machine, kjer lahko osvojiš vrtljaje, bonus denar, kovance ali denarne nagrade brez kakršnega koli dodatnega obračanja na začetno nagrado. To je najbližje, kar se lahko pridobiš brez pologa na tej platformi.</p>
      <p>Spremljaj sekcijo Promocije in redno preverjaj, saj casino pogosto menjava ponudbe in bo morda v prihodnosti uvedel ponudbe brez pologa ali brezplačne bonusne kode.</p>
    </div>
  </section>

  <!-- Bonus FAQ -->
  <section class="content-section" id="bonus-faq">
    <div class="container container--narrow">
      <h2>Pogosta vprašanja o bonusih</h2>

      <details class="faq-item">
        <summary>Ali lahko uporabim promocijsko kodo pri <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Da. Med registracijo boš videl možnost za vnos promocijske kode, ko izbereš želeni dobrodošlični bonus. Če imaš veljavno kodo, jo vnesi tam za aktivacijo morebitnih povezanih ugodnosti.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Ali lahko kombiniram več bonusov?</summary>
        <div class="faq-answer">
          <p>Ne. Dobrodošličnih bonusov in bonusov za dopolnitev ni mogoče združevati. Pred uveljavljanjem novega bonusa moraš dokončati ali preklicati katerega koli aktivnega. Nekatere bonuse je mogoče preklicati v sekciji Profil ali s kontaktiranjem podpore.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kaj se zgodi, če zahtevam izplačilo pred izpolnitvijo zahtev za obračanje?</summary>
        <div class="faq-answer">
          <p>Zahtevek za izplačilo pred dokončanjem zahtev za obračanje razveljavi bonus in vse povezane dobitke. Prepričaj se, da si v celoti izpolnil pogoje obračanja, preden zahtеvaš izplačilo.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Ali vse igre prispevajo enako k obračanju?</summary>
        <div class="faq-answer">
          <p>Ne. Različne vrste iger prispevajo z različnimi stopnjami. Igralni avtomati običajno prispevajo 100%, medtem ko namizne igre in igre v casinu v živo prispevajo manj. Preveri bonusne pogoje za natančno tabelo prispevkov.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Ali so pologe prek Skrill in Neteller upravičeni do bonusov?</summary>
        <div class="faq-answer">
          <p>V večini primerov pologe prek Skrill ali Neteller ne izpolnjujejo pogojev za dobrodošlične bonuse. Preveri pogoje posamezne promocije za morebitne izjeme.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
