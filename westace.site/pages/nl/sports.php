<?php
/**
 * Sports Betting Page - WestAce (Dutch / NL)
 */
$page_title = 'WestAce Sportsbook - Sportweddenschappen, Live Betting & Virtuele Sport';
$page_description = 'Wed op voetbal, tennis, basketbal, paardenrennen en meer bij ' . SITE_NAME . '. Live in-play wedden, virtuele sporten en scherpe odds op 30+ sporten.';
$current_page = 'sports';
$lang_prefix = '/nl';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Sportsbook';
$hero_description = 'Pre-match odds, live in-play wedden, virtuele sporten en paardenrennen - alles op een plek naast ons volledige casino.';
$hero_cta = 'Begin met Wedden';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Sportsbook Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Sportsbook Overzicht</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p><?php echo SITE_NAME; ?> is meer dan alleen een casino. Wij bieden een volledige sportsbook met pre-match wedden, live in-play markten, virtuele sporten en paardenrennen. Of je nu de Eredivisie, de NBA of Grand Slam tennis volgt, je vindt bij ons scherpe odds en een breed scala aan markten voor elk groot evenement.</p>
          <p>Onze sportsbook draait naast het casino, dus je kunt moeiteloos schakelen tussen slots, live dealer tafels en sportweddenschappen vanuit een enkel account met een enkel saldo. Geen aparte wallets of overboekingen nodig.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-sports-screen.png" alt="<?php echo SITE_NAME; ?> sportsbook met live Champions League odds en voetbalmarkten" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Pre-Match Wedden</h4>
          <p>Plaats weddenschappen op aankomende wedstrijden in 30+ sporten. Voetbal, tennis, basketbal, cricket, ijshockey, MMA en meer - met enkele inzetten, accumulators en systeemweddenschappen.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9889;</div>
          <h4>Live Wedden</h4>
          <p>Wed op wedstrijden terwijl ze plaatsvinden met realtime odds die elke paar seconden worden bijgewerkt. Volg de actie met live statistieken, scoreborden en in-play markten bij alle grote sporten.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127918;</div>
          <h4>Virtuele Sporten</h4>
          <p>Gesimuleerde evenementen die de klok rond draaien - virtueel voetbal, basketbal, tennis, paardenrennen en hondrennen. Uitslagen elke paar minuten, geen wachten op echte wedstrijden.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Available Sports -->
  <section class="content-section content-section--alt" id="sports">
    <div class="container">
      <h2>Beschikbare Sporten</h2>
      <p>Onze sportsbook bestrijkt een breed scala aan sporten uit competities en toernooien wereldwijd. Hier zijn enkele van de populairste markten:</p>

      <div class="two-col">
        <div>
          <h3>Populaire Sporten</h3>
          <ul class="check-list">
            <li>Voetbal - Eredivisie, Premier League, La Liga, Bundesliga, Serie A, Champions League, WK-kwalificaties en honderden lagere divisies</li>
            <li>Tennis - Grand Slams, ATP, WTA en Challenger-toernooien</li>
            <li>Basketbal - NBA, EuroLeague, nationale competities</li>
            <li>IJshockey - NHL, KHL, SHL en Europese competities</li>
            <li>Cricket - IPL, internationale testwedstrijden, T20 World Cup</li>
            <li>MMA / Boksen - UFC, Bellator en grote boksavonden</li>
            <li>Esports - CS2, Dota 2, League of Legends, Valorant</li>
          </ul>
        </div>
        <div>
          <h3>Meer Sporten</h3>
          <ul class="check-list">
            <li>Rugby Union en Rugby League</li>
            <li>American Football - NFL, college football</li>
            <li>Honkbal - MLB, NPB, KBO</li>
            <li>Handbal - Europese en internationale evenementen</li>
            <li>Volleybal - nationale competities en internationaal</li>
            <li>Tafeltennis - professionele en wereldevenementen</li>
            <li>Darts, Snooker, Wielrennen, Formule 1</li>
          </ul>
        </div>
      </div>

      <p style="margin-top: var(--space-6);">Live wedden is beschikbaar bij de meeste hierboven genoemde sporten. Odds worden in realtime bijgewerkt op basis van de actuele wedstrijdsituatie, zodat je kunt reageren op doelpunten, breaks en verschuivingen in momentum terwijl ze gebeuren.</p>
    </div>
  </section>

  <!-- Horse Racing -->
  <section class="content-section" id="horse-racing">
    <div class="container container--narrow">
      <h2>Paardenrennen</h2>
      <p><?php echo SITE_NAME; ?> bestrijkt paardenrennen van banen in het Verenigd Koninkrijk, Ierland, Frankrijk, Australie en andere grote rennaties. Je vindt ante-post markten voor grote festivals en wedstrijddag-odds met win-, plaats- en each-way-opties.</p>
      <p>Belangrijke bijeenkomsten zoals Cheltenham, Royal Ascot, de Grand National en de Melbourne Cup worden gedekt met een volledig aanbod aan markten. Voor dagelijkse races bieden wij standaard win- en plaatsweddenschappen op de meeste Britse en Ierse programma's.</p>
    </div>
  </section>

  <!-- Virtual Sports -->
  <section class="content-section content-section--alt" id="virtual">
    <div class="container container--narrow">
      <h2>Virtuele Sporten</h2>
      <p>Als er geen live wedstrijden zijn om op te wedden, houdt onze virtuele sportafdeling de actie 24/7 gaande. Evenementen worden gesimuleerd door gecertificeerde willekeurige nummergeneratoren, zodat de uitslagen eerlijk en onvoorspelbaar zijn.</p>

      <h3>Beschikbare Virtuele Sporten</h3>
      <ul>
        <li><strong>Virtueel Voetbal</strong> - volledige wedstrijdsimulaties met competitietabellen en bekerformats</li>
        <li><strong>Virtueel Basketbal</strong> - kwart-voor-kwart simulaties met standaard basketbalmarkten</li>
        <li><strong>Virtueel Tennis</strong> - set-voor-set wedstrijden met wedstrijdwinnaar en correcte score-opties</li>
        <li><strong>Virtueel Paardenrennen</strong> - vlakke en springraces met win-, plaats- en forecastweddenschappen</li>
        <li><strong>Virtueel Hondrennen</strong> - korte races met win- en forecastmarkten</li>
      </ul>
      <p>Nieuwe virtuele evenementen starten elke 2-3 minuten, dus er is altijd iets om op te wedden.</p>
    </div>
  </section>

  <!-- Sports Betting Tips -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Tips voor Sportweddenschappen</h2>
      <p>Een paar eenvoudige richtlijnen om je sportweddenschappen leuk en verantwoord te houden:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Stel een budget in voordat je begint.</strong> Beslis hoeveel je bereid bent te wedden per week of maand, en ga daar niet overheen. Beschouw het als vermaakuitgave, niet als een investering.
          </div>
        </li>
        <li>
          <div>
            <strong>Wed op sporten die je begrijpt.</strong> Blijf bij competities en sporten waar je echte kennis van hebt. Vertrouwdheid met teams, spelers en omstandigheden geeft je beter inzicht dan willekeurige markten achternajagen.
          </div>
        </li>
        <li>
          <div>
            <strong>Jaag verliezen niet na.</strong> Als je een slechte reeks hebt gehad, verhoog je inzet dan niet om het terug te winnen. Neem een pauze en kom terug met een helder hoofd.
          </div>
        </li>
        <li>
          <div>
            <strong>Houd je weddenschappen bij.</strong> Volg je inzetten zodat je weet wat werkt en wat niet. Na verloop van tijd helpt dit je patronen te herkennen en betere beslissingen te nemen.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Sports FAQ -->
  <section class="content-section content-section--alt" id="sports-faq">
    <div class="container container--narrow">
      <h2>Sportsbook FAQ</h2>

      <details class="faq-item">
        <summary>Heeft <?php echo SITE_NAME; ?> een sportsbook?</summary>
        <div class="faq-answer">
          <p>Ja. Wij bieden een volledige sportsbook met pre-match wedden, live in-play markten, virtuele sporten en paardenrennen naast ons casino. Je kunt vanuit hetzelfde account schakelen tussen casino en sport.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Op welke sporten kan ik wedden?</summary>
        <div class="faq-answer">
          <p>Wij bestrijken 30+ sporten waaronder voetbal, tennis, basketbal, cricket, ijshockey, MMA, boksen, esports, paardenrennen, rugby, American football, honkbal en nog veel meer. Zowel grote competities als kleinere toernooien zijn beschikbaar.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Is live wedden beschikbaar?</summary>
        <div class="faq-answer">
          <p>Ja. Live in-play wedden is beschikbaar bij de meeste sporten. Odds worden in realtime bijgewerkt naarmate wedstrijden vorderen en je kunt gedurende het hele evenement weddenschappen plaatsen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wat zijn virtuele sporten?</summary>
        <div class="faq-answer">
          <p>Virtuele sporten zijn gesimuleerde evenementen aangedreven door willekeurige nummergeneratoren. Ze draaien 24/7 met elke paar minuten nieuwe evenementen. Wij bieden virtueel voetbal, basketbal, tennis, paardenrennen en hondrennen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kan ik mijn casinosaldo gebruiken voor sportweddenschappen?</summary>
        <div class="faq-answer">
          <p>Ja. <?php echo SITE_NAME; ?> gebruikt een enkel saldo voor zowel casino als sportsbook. Stortingen gaan naar een account en je kunt dezelfde fondsen gebruiken voor slots, live casino of sportweddenschappen zonder overboekingen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wat is de minimale inzet bij sport?</summary>
        <div class="faq-answer">
          <p>Minimale inzetten varieren per sport en markt, maar zijn doorgaans laag en beginnen vanaf &euro;0,50 bij de meeste evenementen. Controleer het wedformulier voor het exacte minimum per markt.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
