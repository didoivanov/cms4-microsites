<?php
/**
 * Withdrawal Page - WestAce (Dutch / NL)
 */
$page_title = 'WestAce Uitbetaling - Opnamemethoden, Limieten & Verwerkingstijd';
$page_description = 'Alles over ' . SITE_NAME . ' Casino uitbetalingen: opnamemethoden, verwerkingstijden, dagelijkse en maandelijkse limieten, KYC-verificatie en tips voor snellere opnames.';
$current_page = 'withdrawal';
$lang_prefix = '/nl';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Uitbetalingen &amp; Opnames';
$hero_description = 'Hoe je je winsten kunt opnemen, welke methoden beschikbaar zijn, verwerkingstijden, limieten en wat je kunt verwachten tijdens het verificatieproces.';
$hero_cta = 'Nu Spelen';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Overzicht Uitbetalingen</h2>
      <p>Opnemen bij <?php echo SITE_NAME; ?> is eenvoudig en kosteloos. Wij verwerken alle opnameverzoeken binnen 24 tot 72 uur, afhankelijk van de betaalmethode. Geld wordt waar mogelijk teruggestort naar dezelfde methode die je voor je storting hebt gebruikt. Je moet KYC-verificatie voltooien voordat je je eerste opname kunt doen.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Min Opname</h4>
          <p>&euro;10 voor alle betaalmethoden. Bedragen onder deze drempel kunnen niet worden verwerkt.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Verwerkingstijd</h4>
          <p>24-72 uur voor de meeste methoden. Bankoverschrijvingen kunnen 1-3 werkdagen duren.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Opnamelimieten</h4>
          <p>&euro;500 per dag, &euro;7.000 per maand. VIP-leden kunnen in aanmerking komen voor hogere limieten.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Payment Methods Table -->
  <section class="content-section content-section--alt" id="methods">
    <div class="container">
      <h2>Betaalmethoden</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>De onderstaande tabel toont alle stortings- en opnamemogelijkheden bij <?php echo SITE_NAME; ?>. Wij verwerken uitbetalingen naar de oorspronkelijke stortingsmethode wanneer mogelijk. Alle stortingen en opnames zijn aan onze kant kosteloos.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-payments-screen.png" alt="<?php echo SITE_NAME; ?> Casino stortings- en opnamemethoden waaronder Visa, Mastercard, Revolut, Skrill en crypto" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div class="data-table-wrap">
        <table class="data-table">
          <thead>
            <tr>
              <th>Methode</th>
              <th>Min Storting</th>
              <th>Max Storting</th>
              <th>Min Opname</th>
              <th>Max Opname</th>
              <th>Verwerking</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Mastercard</td>
              <td>&euro;10</td>
              <td>&euro;2.000</td>
              <td>&euro;10</td>
              <td>&euro;3.000</td>
              <td>24-72 uur</td>
            </tr>
            <tr>
              <td>Paysafecard</td>
              <td>&euro;10</td>
              <td>&euro;1.000</td>
              <td colspan="2">Alleen storten</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Visa</td>
              <td colspan="2">Alleen opnemen</td>
              <td>&euro;10</td>
              <td>&euro;3.000</td>
              <td>24-72 uur</td>
            </tr>
            <tr>
              <td>Bankoverschrijving</td>
              <td colspan="2">Alleen opnemen</td>
              <td>&euro;10</td>
              <td>&euro;5.000</td>
              <td>1-3 werkdagen</td>
            </tr>
            <tr>
              <td>Skrill</td>
              <td>&euro;10</td>
              <td>&euro;5.000</td>
              <td>&euro;10</td>
              <td>&euro;5.000</td>
              <td>24-72 uur</td>
            </tr>
            <tr>
              <td>Neteller</td>
              <td>&euro;10</td>
              <td>&euro;5.000</td>
              <td colspan="2">Alleen storten</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Bitcoin (BTC)</td>
              <td>&euro;10</td>
              <td>&euro;5.000</td>
              <td>&euro;10</td>
              <td>&euro;5.000</td>
              <td>24-72 uur</td>
            </tr>
            <tr>
              <td>Ethereum (ETH)</td>
              <td>&euro;10</td>
              <td>&euro;5.000</td>
              <td>&euro;10</td>
              <td>&euro;5.000</td>
              <td>24-72 uur</td>
            </tr>
            <tr>
              <td>Tether (USDT)</td>
              <td>&euro;10</td>
              <td>&euro;5.000</td>
              <td>&euro;10</td>
              <td>&euro;5.000</td>
              <td>24-72 uur</td>
            </tr>
            <tr>
              <td>Litecoin (LTC)</td>
              <td>&euro;10</td>
              <td>&euro;5.000</td>
              <td>&euro;10</td>
              <td>&euro;5.000</td>
              <td>24-72 uur</td>
            </tr>
            <tr>
              <td>Ripple (XRP)</td>
              <td>&euro;10</td>
              <td>&euro;5.000</td>
              <td>&euro;10</td>
              <td>&euro;5.000</td>
              <td>24-72 uur</td>
            </tr>
            <tr>
              <td>USD Coin (USDC)</td>
              <td>&euro;10</td>
              <td>&euro;5.000</td>
              <td>&euro;10</td>
              <td>&euro;5.000</td>
              <td>24-72 uur</td>
            </tr>
            <tr>
              <td>Bitcoin Cash (BCH)</td>
              <td>&euro;10</td>
              <td>&euro;5.000</td>
              <td>&euro;10</td>
              <td>&euro;5.000</td>
              <td>24-72 uur</td>
            </tr>
            <tr>
              <td>Dogecoin (DOGE)</td>
              <td>&euro;10</td>
              <td>&euro;5.000</td>
              <td>&euro;10</td>
              <td>&euro;5.000</td>
              <td>24-72 uur</td>
            </tr>
            <tr>
              <td>Cardano (ADA)</td>
              <td>&euro;10</td>
              <td>&euro;5.000</td>
              <td>&euro;10</td>
              <td>&euro;5.000</td>
              <td>24-72 uur</td>
            </tr>
          </tbody>
        </table>
      </div>

      <p style="margin-top: var(--space-4);">Het exacte aanbod van betaalmethoden kan per regio verschillen. Cryptovalutatransacties vereisen blockchainbevestigingen na casinoverwerking.</p>
    </div>
  </section>

  <!-- Rollover Requirement -->
  <section class="content-section" id="rollover">
    <div class="container container--narrow">
      <h2>Stortings-Rolloververeiste</h2>
      <p><?php echo SITE_NAME; ?> hanteert een 1x rolloververeiste op alle stortingen. Dit betekent dat je je gestorte geld minimaal een keer moet inzetten voordat je een opname kunt aanvragen. Dit staat los van eventuele bonusinzetvereisten.</p>
      <p>Als je een opname aanvraagt zonder aan de 1x rollover te voldoen, wordt er een commissie ingehouden:</p>
      <ul>
        <li><strong>10% commissie</strong> over het stortingsbedrag bij e-wallet- en crypto-opnames</li>
        <li><strong>15% commissie</strong> over het stortingsbedrag bij bankkaart- en bankoverschrijvingsopnames</li>
      </ul>
      <p>Om deze kosten te vermijden, speel je storting eenvoudig een keer door voordat je een uitbetaling aanvraagt. Een enkele inzetronde op elk bedrag is voldoende om aan de vereiste te voldoen.</p>
    </div>
  </section>

  <!-- How to Withdraw -->
  <section class="content-section content-section--alt" id="how-to">
    <div class="container">
      <h2>Hoe Doe Je een Opname</h2>
      <p>Volg deze stappen om een uitbetaling aan te vragen vanuit je <?php echo SITE_NAME; ?>-account:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Voltooi eventuele actieve inzetvereisten.</strong> Als je een bonus hebt geclaimd, moet de volledige inzetvereiste zijn afgerond voordat je kunt opnemen. Zorg er ook voor dat je aan de 1x stortingsrollover hebt voldaan.
          </div>
        </li>
        <li>
          <div>
            <strong>Open de kassa.</strong> Navigeer naar het opnamegedeelte in je account. Dit vind je in het hoofdmenu of bij de accountinstellingen.
          </div>
        </li>
        <li>
          <div>
            <strong>Kies je betaalmethode en bedrag.</strong> Selecteer een van de beschikbare opties en voer het bedrag in dat je wilt opnemen. Het minimum is &euro;10 voor alle methoden. Het dagelijks limiet is &euro;500, het maandelijks limiet &euro;7.000.
          </div>
        </li>
        <li>
          <div>
            <strong>Wacht op verwerking.</strong> <?php echo SITE_NAME; ?> verwerkt opnames binnen 24 tot 72 uur. Bankoverschrijvingen kunnen 1-3 werkdagen duren. Er wordt contact met je opgenomen als aanvullende documenten nodig zijn voor verificatie.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- KYC Verification -->
  <section class="content-section" id="verification">
    <div class="container">
      <h2>Accountverificatie (KYC)</h2>
      <p><?php echo SITE_NAME; ?> vereist identiteitsverificatie voordat opnameverzoeken worden goedgekeurd. Dit is een standaardprocedure om fraude te voorkomen en te voldoen aan antiwitwasregelgeving. Documenten worden binnen 30 dagen beoordeeld en het verificatieproces duurt maximaal 10 dagen na indiening.</p>

      <div class="two-col">
        <div>
          <h3>Vereiste Documenten</h3>
          <ul>
            <li><strong>Identiteitsbewijs</strong> -- een paspoort, rijbewijs of nationale identiteitskaart</li>
            <li><strong>Selfie met ID</strong> -- een foto van jou terwijl je het identiteitsdocument vasthoudt</li>
            <li><strong>Adresbewijs</strong> -- een energierekening of bankafschrift van maximaal 3 maanden oud</li>
            <li><strong>Bron van inkomen</strong> -- documentatie die aantoont waar je gokgeld vandaan komt (antiwitwasregelgeving)</li>
          </ul>
          <p>Je hebt 30 dagen om de gevraagde documenten in te dienen. Je account kan beperkt worden totdat de verificatie is voltooid.</p>
        </div>
        <div>
          <h3>Tips voor Snellere Verificatie</h3>
          <ul>
            <li>Upload je documenten zodra je je registreert, in plaats van te wachten op je eerste opname</li>
            <li>Zorg dat alle vier de hoeken van je ID zichtbaar zijn op de foto</li>
            <li>Zorg bij de selfie dat zowel je gezicht als de tekst op het ID duidelijk leesbaar zijn</li>
            <li>Gebruik een recent bankafschrift of energierekening als adresbewijs</li>
            <li>Als documenten worden afgewezen, controleer dan of de afbeeldingen niet wazig zijn en de documenten niet verlopen</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Faster Payouts -->
  <section class="content-section content-section--alt" id="tips">
    <div class="container container--narrow">
      <h2>Tips voor Snellere Uitbetalingen</h2>

      <h3>1. Kies e-wallets of cryptovaluta</h3>
      <p>Skrill en crypto-opties zoals Bitcoin, Ethereum en Tether worden over het algemeen het snelst verwerkt. Als snelheid je prioriteit is, stort dan met een van deze methoden zodat je opname via hetzelfde kanaal kan worden teruggestort.</p>

      <h3>2. Verifieer je account vroegtijdig</h3>
      <p>Wacht niet tot je eerste opname om je documenten in te dienen. Upload je ID, selfie, adresbewijs en bron van inkomen zodra je je registreert. Zo zijn er geen vertragingen door openstaande verificatie wanneer je klaar bent om op te nemen.</p>

      <h3>3. Voldoe aan de stortingsrollover</h3>
      <p>Zorg dat je je storting minimaal een keer hebt ingezet voordat je een uitbetaling aanvraagt. Als je dit niet doet, wordt er een commissie van 10-15% op het stortingsbedrag ingehouden.</p>

      <h3>4. Gebruik je oorspronkelijke stortingsmethode</h3>
      <p><?php echo SITE_NAME; ?> geeft er de voorkeur aan geld terug te storten naar dezelfde methode die je voor je storting hebt gebruikt. Het gebruik van een andere methode kan extra controles veroorzaken en het proces vertragen.</p>
    </div>
  </section>

  <!-- Fees -->
  <section class="content-section" id="fees">
    <div class="container container--narrow">
      <h2>Opnamekosten</h2>
      <p><?php echo SITE_NAME; ?> brengt geen kosten in rekening voor stortingen of opnames. Je betaalprovider of bank kan echter eigen transactiekosten, valutaconversiekosten of tussenliggende kosten hanteren. Neem contact op met je betaalprovider voor informatie over eventuele kosten van derden.</p>
      <p>Let op: als je opneemt zonder aan de 1x stortingsrollover te voldoen, wordt er een commissie van 10% (15% voor bankkaart/overschrijving) berekend over het stortingsbedrag. Dit is geen opnamekosten maar een rolloverboete.</p>
    </div>
  </section>

  <!-- Withdrawal FAQ -->
  <section class="content-section content-section--alt" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>Uitbetalingen FAQ</h2>

      <details class="faq-item">
        <summary>Hoe lang duurt een opname bij <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>De meeste opnames worden binnen 24 tot 72 uur verwerkt. E-wallets en cryptovaluta komen over het algemeen het snelst aan. Bankoverschrijvingen kunnen aan de kant van de provider nog 1-3 werkdagen extra duren.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wat is de minimale opname bij <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Het minimale opnamebedrag is &euro;10 voor alle betaalmethoden.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wat zijn de opnamelimieten?</summary>
        <div class="faq-answer">
          <p>Standaardlimieten zijn &euro;500 per dag en &euro;7.000 per maand. Limieten per transactie hangen af van de methode: Visa en Mastercard beperken tot &euro;3.000 per transactie, terwijl Skrill, bankoverschrijvingen en alle cryptovaluta tot &euro;5.000 toestaan. VIP-spelers kunnen in aanmerking komen voor hogere limieten.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Waarom is mijn opname geweigerd?</summary>
        <div class="faq-answer">
          <p>Veelvoorkomende redenen zijn: onvoltooide inzetvereisten, niet-voldane stortingsrollover, niet-geverifieerd account, overschrijding van dagelijkse of maandelijkse limieten, of een opname naar een methode die niet overeenkomt met je storting. Neem contact op met de klantenservice voor specifieke informatie over je situatie.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Worden er opnamekosten berekend?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> brengt geen opnamekosten in rekening. Je betaalprovider kan eigen kosten hanteren. Als je opneemt zonder aan de 1x stortingsrollover te voldoen, wordt er een commissie van 10% (15% voor bankkaart/overschrijving) berekend over het stortingsbedrag.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kan ik een lopende opname annuleren?</summary>
        <div class="faq-answer">
          <p>Afhankelijk van de verwerkingsfase kun je mogelijk een lopend opnameverzoek annuleren. Neem contact op met de klantenservice via live chat voor hulp.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
