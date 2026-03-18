<?php
/**
 * Bonuses Page - WestAce (Dutch / NL)
 */
$page_title = 'WestAce Bonussen - Welkomstpakket tot €2.000 + 150 Gratis Spins';
$page_description = 'Alle ' . SITE_NAME . ' Casino bonussen op een rij. Welkomstpakket tot €2.000 + 150 Gratis Spins over 3 stortingen, crypto welkomstbonus, wekelijkse reloads, dagelijkse cashback, live cashback, VIP-programma en meer.';
$current_page = 'bonuses';
$lang_prefix = '/nl';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Casino Bonussen';
$hero_description = 'Alle actieve promoties, welkomstaanbiedingen en loyaliteitsbeloningen die momenteel beschikbaar zijn. Lees de voorwaarden voordat je een aanbieding claimt.';
$hero_cta = 'Claim Je Bonus';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Welcome Casino Package -->
  <section class="content-section" id="welcome">
    <div class="container">
      <h2>Welkomstpakket voor Nieuwe Spelers</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Nieuwe spelers bij <?php echo SITE_NAME; ?> kunnen een welkomstpakket claimen over drie stortingen met een totale waarde van tot &euro;2.000 + 150 Gratis Spins. Elke storting wordt verdubbeld met een 100% matchbonus en 50 Gratis Spins. De minimale kwalificerende storting is &euro;20 per niveau. Geen promotiecode nodig - ga naar de kassa, selecteer de aanbieding en doe je kwalificerende storting.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-bonuses-screen.png" alt="<?php echo SITE_NAME; ?> Casino promotiepagina met welkomstbonus en actieve acties" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <!-- Casino Welcome - Deposit 1 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">1e Storting: 100% tot &euro;1.000 + 50 Gratis Spins</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Doe een eerste storting van minimaal &euro;20 en ontvang een 100% matchbonus tot &euro;1.000. Daarbovenop worden 50 Gratis Spins bijgeschreven op een uitgelichte slot. De inzetvereiste is 35x over het bonusbedrag + stortingsbedrag. Winsten uit Gratis Spins hebben een aparte inzetvereiste van 40x.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Storting</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Inzetvereiste</div>
            <div class="bonus-detail__value">35x (B+S)</div>
          </div>
          <div>
            <div class="bonus-detail__label">GS Inzetvereiste</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Gratis Spins</div>
            <div class="bonus-detail__value">50 GS</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome - Deposit 2 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2e Storting: 100% tot &euro;500 + 50 Gratis Spins</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Je tweede storting komt in aanmerking voor een 100% matchbonus tot &euro;500, plus nog eens 50 Gratis Spins. Dezelfde inzetvereisten als bij de eerste stortingsbonus zijn van toepassing.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Storting</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Inzetvereiste</div>
            <div class="bonus-detail__value">35x (B+S)</div>
          </div>
          <div>
            <div class="bonus-detail__label">GS Inzetvereiste</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Gratis Spins</div>
            <div class="bonus-detail__value">50 GS</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome - Deposit 3 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">3e Storting: 100% tot &euro;500 + 50 Gratis Spins</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>De derde storting levert een 100% matchbonus tot &euro;500 en 50 Gratis Spins op. Hiermee komt het totale welkomstpakket op &euro;2.000 aan bonusgeld en 150 Gratis Spins over je eerste drie stortingen.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Storting</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Inzetvereiste</div>
            <div class="bonus-detail__value">35x (B+S)</div>
          </div>
          <div>
            <div class="bonus-detail__label">GS Inzetvereiste</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Gratis Spins</div>
            <div class="bonus-detail__value">50 GS</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Crypto Welcome -->
  <section class="content-section content-section--alt" id="crypto-welcome">
    <div class="container">
      <h2>Crypto Welkomstbonus</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Crypto: 200% tot 3.000 USDT</div>
          <span class="bonus-card__tag">Crypto</span>
        </div>
        <p>Stort je liever met cryptovaluta? Dan hebben wij een apart welkomsaanbod voor je. Doe een eerste cryptostorting van minimaal 100 USDT en ontvang een 200% matchbonus tot 3.000 USDT. De inzetvereiste bedraagt 40x over het bonusbedrag.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Storting</div>
            <div class="bonus-detail__value">100 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Inzetvereiste</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max Bonus</div>
            <div class="bonus-detail__value">3.000 USDT</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Weekly Reload -->
  <section class="content-section" id="weekly-reload">
    <div class="container">
      <h2>Wekelijkse Herlaadbonus</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Wekelijks Herladen: 70 Gratis Spins</div>
          <span class="bonus-card__tag">Ma-Do</span>
        </div>
        <p>Elke week van maandag tot en met donderdag ontvang je 70 Gratis Spins op een door het casino gekozen slot bij een storting van minimaal &euro;20. Winsten uit de Gratis Spins hebben een inzetvereiste van 40x en moeten binnen 10 dagen worden gebruikt.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Storting</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Gratis Spins</div>
            <div class="bonus-detail__value">70 GS</div>
          </div>
          <div>
            <div class="bonus-detail__label">Inzetvereiste</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Geldigheid</div>
            <div class="bonus-detail__value">10 dagen</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Weekend Reload -->
  <section class="content-section content-section--alt" id="weekend-reload">
    <div class="container">
      <h2>Weekend Herlaadbonus</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Weekend: 50% tot &euro;500 + 70 Gratis Spins</div>
          <span class="bonus-card__tag">Weekend</span>
        </div>
        <p>Begin het weekend met een 50% bonusmatch tot &euro;500. Als je storting &euro;50 of meer bedraagt, ontvang je ook 70 Gratis Spins. Stortingen onder &euro;50 komen nog steeds in aanmerking voor de 50% match, maar de Gratis Spins worden dan niet toegekend. De inzetvereiste bedraagt 35x over het bonusbedrag.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Storting</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">GS Min. Storting</div>
            <div class="bonus-detail__value">&euro;50</div>
          </div>
          <div>
            <div class="bonus-detail__label">Inzetvereiste</div>
            <div class="bonus-detail__value">35x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Gratis Spins</div>
            <div class="bonus-detail__value">70 GS</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Crypto Reloads -->
  <section class="content-section" id="crypto-reloads">
    <div class="container">
      <h2>Crypto Herlaadbonussen</h2>
      <p>Spelers die storten met cryptovaluta hebben toegang tot exclusieve wekelijkse en weekendaanbiedingen met hogere matchpercentages.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Crypto Wekelijks: 60% tot 1.000 USDT</div>
          <span class="bonus-card__tag">Crypto</span>
        </div>
        <p>Stort minimaal 50 USDT doordeweeks en ontvang een 60% matchbonus tot 1.000 USDT. De inzetvereiste is 30x over de bonus. De maximale winst uit deze bonus is beperkt tot 5x het bonusbedrag.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Storting</div>
            <div class="bonus-detail__value">50 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Inzetvereiste</div>
            <div class="bonus-detail__value">30x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max Winstlimiet</div>
            <div class="bonus-detail__value">5x bonus</div>
          </div>
        </div>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Crypto Weekend: 75% tot 750 USDT + 100 GS</div>
          <span class="bonus-card__tag">Crypto</span>
        </div>
        <p>In het weekend komen cryptostortingen van 75 USDT of meer in aanmerking voor een 75% matchbonus tot 750 USDT plus 100 Gratis Spins. De maximale winst uit deze bonus is beperkt tot 5x het bonusbedrag.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Storting</div>
            <div class="bonus-detail__value">75 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Gratis Spins</div>
            <div class="bonus-detail__value">100 GS</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max Winstlimiet</div>
            <div class="bonus-detail__value">5x bonus</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Daily Cashback -->
  <section class="content-section content-section--alt" id="cashback">
    <div class="container">
      <h2>Dagelijkse Cashback</h2>
      <p>Spelers op VIP-niveau 2 tot en met 5 ontvangen dagelijks cashback op basis van nettoverliezen bij casinospellen met echt geld. Het percentage stijgt met je VIP-niveau en de inzetvereiste is slechts 1x - speel het een keer door en de cashback is van jou.</p>

      <div class="data-table-wrap">
        <table class="data-table">
          <thead>
            <tr>
              <th>VIP-niveau</th>
              <th>Cashback %</th>
              <th>Min Cashback</th>
              <th>Max Cashback</th>
              <th>Inzetvereiste</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Niveau 2</td>
              <td>3%</td>
              <td>&euro;1</td>
              <td>&euro;100</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Niveau 3</td>
              <td>5%</td>
              <td>&euro;1</td>
              <td>&euro;200</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Niveau 4</td>
              <td>10%</td>
              <td>&euro;1</td>
              <td>&euro;300</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Niveau 5</td>
              <td>15%</td>
              <td>&euro;1</td>
              <td>&euro;400</td>
              <td>1x</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Live Cashback -->
  <section class="content-section" id="live-cashback">
    <div class="container">
      <h2>Live Casino Cashback</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Live Cashback: tot 25%</div>
          <span class="bonus-card__tag">Live Casino</span>
        </div>
        <p>Alle spelers kunnen tot 25% cashback claimen op nettoverliezen bij live casinospellen, met een maximale uitbetaling van &euro;300. De inzetvereiste is slechts 1x. Let op: deze cashback moet handmatig worden aangevraagd via live chat of e-mail, elke maandag tussen 06:00 en 23:59 UTC. Als je het claimvenster mist, vervalt de cashback voor die week.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Max Cashback</div>
            <div class="bonus-detail__value">&euro;300</div>
          </div>
          <div>
            <div class="bonus-detail__label">Inzetvereiste</div>
            <div class="bonus-detail__value">1x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Claimdag</div>
            <div class="bonus-detail__value">Maandag</div>
          </div>
          <div>
            <div class="bonus-detail__label">Claimvenster</div>
            <div class="bonus-detail__value">06:00-23:59 UTC</div>
          </div>
        </div>
      </div>

      <div class="highlight-box" style="margin-top: var(--space-4);">
        <h4>Hoe Claim Je Live Cashback</h4>
        <p>Neem contact op met ons ondersteuningsteam via live chat of e-mail (support@westace.com) op maandag tussen 06:00 en 23:59 UTC om je live casino cashback aan te vragen. De cashback wordt berekend over je nettoverliezen van de vorige week en na verwerking op je account bijgeschreven.</p>
      </div>
    </div>
  </section>

  <!-- VIP -->
  <section class="content-section content-section--alt" id="vip">
    <div class="container">
      <h2>VIP-programma</h2>
      <p>Het <?php echo SITE_NAME; ?> VIP-programma beloont trouwe spelers via vijf niveaus. Naarmate je hoger komt, krijg je toegang tot betere cashbackpercentages, hogere opnamelimieten, persoonlijke aanbiedingen en een toegewijde VIP-manager. Het programma staat open voor alle geregistreerde spelers.</p>

      <h3>VIP-voordelen</h3>
      <ul class="check-list">
        <li>Dagelijkse cashback oplopend van 3% tot 15% op basis van VIP-niveau</li>
        <li>Hogere stortings- en opnamelimieten op de bovenste niveaus</li>
        <li>Persoonlijke VIP-manager voor topspelers</li>
        <li>Op maat gemaakte bonusaanbiedingen en promoties</li>
        <li>Prioriteitsondersteuning en snellere opnameverwerking</li>
      </ul>

      <h3>Niveauvoortgang</h3>
      <p>De exacte criteria om tussen VIP-niveaus door te stromen worden niet openbaar gemaakt. Voortgang is gebaseerd op je totale activiteit bij het casino. Neem contact op met ons ondersteuningsteam voor meer informatie over je huidige VIP-status en wat nodig is om het volgende niveau te bereiken.</p>

      <table class="quick-table">
        <tr><th>Kenmerk</th><th>Details</th></tr>
        <tr><td>VIP-niveaus</td><td>5 niveaus</td></tr>
        <tr><td>Cashback Bereik</td><td>3% (Niveau 2) tot 15% (Niveau 5)</td></tr>
        <tr><td>Cashback Inzetvereiste</td><td>1x</td></tr>
        <tr><td>Persoonlijke Manager</td><td>Beschikbaar op hogere niveaus</td></tr>
        <tr><td>Doorstroming</td><td>Op basis van totale activiteit (criteria niet openbaar)</td></tr>
      </table>
    </div>
  </section>

  <!-- No-Deposit Info -->
  <section class="content-section" id="no-deposit">
    <div class="container container--narrow">
      <h2><?php echo SITE_NAME; ?> Geen-Stortingsbonus</h2>
      <p>Op dit moment biedt <?php echo SITE_NAME; ?> geen bonus zonder storting aan. Het welkomstpakket vereist een minimale eerste storting van &euro;20 om te activeren. Houd de Promoties-sectie in de gaten en kijk regelmatig terug, want wij wisselen onze aanbiedingen regelmatig en kunnen in de toekomst aanbiedingen zonder storting introduceren.</p>
    </div>
  </section>

  <!-- Bonus FAQ -->
  <section class="content-section content-section--alt" id="bonus-faq">
    <div class="container container--narrow">
      <h2>Bonus FAQ</h2>

      <details class="faq-item">
        <summary>Heb ik een promotiecode nodig om een bonus te claimen?</summary>
        <div class="faq-answer">
          <p>Nee. Alle bonussen bij <?php echo SITE_NAME; ?> kunnen zonder promotiecode worden geclaimd. Ga naar de kassa, selecteer de aanbieding en doe de kwalificerende storting. Sommige bonussen moeten mogelijk worden geactiveerd in het Mijn Bonus-gedeelte van je account.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wat is de totale waarde van het welkomstpakket?</summary>
        <div class="faq-answer">
          <p>Het volledige welkomstpakket is tot &euro;2.000 aan bonusgeld waard plus 150 Gratis Spins over drie stortingen. Elke storting ontvangt een 100% match: tot &euro;1.000 op de eerste en tot &euro;500 op zowel de tweede als derde storting.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kan ik meerdere bonussen combineren?</summary>
        <div class="faq-answer">
          <p>Nee. Je moet een actieve bonus voltooien of opgeven voordat je een nieuwe kunt claimen. Bonussen kunnen niet worden gestapeld.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wat gebeurt er als ik opneem voordat de inzetvereiste is voltooid?</summary>
        <div class="faq-answer">
          <p>Een opname aanvragen voordat de inzetvereiste is bereikt, maakt de bonus en alle bijbehorende winsten ongeldig. Voltooi de volledige rollover voordat je een uitbetaling aanvraagt.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Hoe werkt de dagelijkse cashback?</summary>
        <div class="faq-answer">
          <p>Dagelijkse cashback is beschikbaar voor VIP-niveaus 2 tot en met 5. Het wordt berekend op basis van je nettoverliezen bij casinospellen met echt geld. Het percentage loopt op van 3% tot 15% afhankelijk van je VIP-niveau. De inzetvereiste is slechts 1x, wat betekent dat je het cashbackbedrag slechts een keer hoeft door te spelen voordat je kunt opnemen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Dragen alle spellen gelijk bij aan de inzetvereiste?</summary>
        <div class="faq-answer">
          <p>Nee. Verschillende speltypen dragen in verschillende mate bij. Slots tellen doorgaans voor 100% mee, terwijl tafelspellen en live casino titels minder bijdragen. Raadpleeg de bonusvoorwaarden voor de exacte bijdragetabel.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Is er een aparte bonus voor cryptostortingen?</summary>
        <div class="faq-answer">
          <p>Ja. Cryptostorters kunnen een 200% matchbonus claimen tot 3.000 USDT als welkomstbonus, plus wekelijkse en weekend crypto-herlaadaanbiedingen. Deze staan los van de standaard EUR-bonussen en hebben hun eigen inzetvereisten.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
