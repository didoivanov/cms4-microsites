<?php
/**
 * Support Page - WestAce (Dutch / NL)
 */
$page_title = 'WestAce Klantenservice - 24/7 Live Chat & E-mail';
$page_description = 'Bereik ' . SITE_NAME . ' Casino klantenservice via 24/7 live chat of e-mail op support@westace.com. Hulp bij stortingen, opnames, bonussen, accountproblemen en technische vragen.';
$current_page = 'support';
$lang_prefix = '/nl';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Klantenservice';
$hero_description = 'Wij helpen je met alle vragen over je account, stortingen, opnames, bonussen of technische problemen. Neem op elk moment contact op.';
$hero_cta = 'Open Live Chat';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Contact Options -->
  <section class="content-section" id="contact">
    <div class="container">
      <h2>Hoe Bereik Je Ons</h2>
      <p><?php echo SITE_NAME; ?> biedt twee supportkanalen zodat je altijd hulp kunt krijgen wanneer je die nodig hebt. Of je nu een snelle vraag hebt over een promotie of hulp nodig hebt bij een betalingsprobleem, ons team staat de klok rond voor je klaar.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128172;</div>
          <h4>Live Chat</h4>
          <p>De snelste manier om hulp te krijgen. Klik op het chatpictogram op elke pagina om een gesprek te starten met een medewerker. Onze live agents reageren doorgaans binnen 5 minuten. 24 uur per dag, 7 dagen per week beschikbaar.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9993;</div>
          <h4>E-mail Ondersteuning</h4>
          <p>Voor gedetailleerde vragen of het indienen van documenten is e-mail de beste optie. Stuur je vraag naar <strong>support@westace.com</strong> en verwacht een reactie binnen 24 uur. Vermeld je accountgegevens en een duidelijke beschrijving van het probleem.</p>
        </div>
      </div>

      <table class="data-table" style="margin-top: var(--space-8);">
        <thead>
          <tr>
            <th>Kanaal</th>
            <th>Beschikbaarheid</th>
            <th>Reactietijd</th>
            <th>Geschikt Voor</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Live Chat</td>
            <td>24/7</td>
            <td>Binnen 5 minuten</td>
            <td>Snelle vragen, bonushulp, stortingsproblemen</td>
          </tr>
          <tr>
            <td>E-mail</td>
            <td>24/7</td>
            <td>Maximaal 24 uur</td>
            <td>Documenten uploaden, uitgebreide zaken, klachten</td>
          </tr>
          <tr>
            <td>Telefoon</td>
            <td>Niet beschikbaar</td>
            <td>-</td>
            <td>-</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- What Support Can Help With -->
  <section class="content-section content-section--alt" id="topics">
    <div class="container">
      <h2>Waar Kan de Klantenservice Mee Helpen?</h2>
      <p>Ons klantenserviceteam behandelt een breed scala aan onderwerpen. Hier zijn de meest voorkomende gebieden waarvoor spelers contact opnemen:</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Account &amp; Registratie</h4>
          <p>Hulp bij het aanmaken van een account, het bijwerken van persoonlijke gegevens, het resetten van wachtwoorden en het oplossen van inlogproblemen. Als je account is vergrendeld of beperkt, kan de klantenservice je status bekijken.</p>
        </div>
        <div class="info-card">
          <h4>Stortingen &amp; Betalingen</h4>
          <p>Hulp bij mislukte stortingen, vragen over betaalmethoden en controles van transactiestatus. De klantenservice kan ook helpen als een storting niet op je saldo verschijnt.</p>
        </div>
        <div class="info-card">
          <h4>Opnames &amp; Uitbetalingen</h4>
          <p>Vragen over verwerkingstijden van opnames, lopende verzoeken en geweigerde uitbetalingen. Bezoek voor gedetailleerde informatie de <a href="<?php echo $lang_prefix; ?>/withdrawal">Uitbetalingspagina</a>.</p>
        </div>
        <div class="info-card">
          <h4>Bonussen &amp; Promoties</h4>
          <p>Verduidelijking van bonusvoorwaarden, inzetvereisten, activering van aanbiedingen en annulering van actieve bonussen. De klantenservice kan specifieke promotiedetails en deelnamecriteria toelichten.</p>
        </div>
        <div class="info-card">
          <h4>Verificatie &amp; KYC</h4>
          <p>Begeleiding bij het indienen van documenten, verificatiestatus, geaccepteerde documenttypen en tijdschattingen. De klantenservice kan helpen als er problemen optreden tijdens het verificatieproces.</p>
        </div>
        <div class="info-card">
          <h4>Technische Problemen</h4>
          <p>Hulp bij spellen die niet laden, websitefouten, mobiele compatibiliteitsproblemen en browsergerelateerde problemen. De klantenservice kan problemen oplossen en technische bugs doorsturen naar het ontwikkelteam.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Contacting Support -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Haal het Meeste uit Je Supportverzoek</h2>
      <p>Een paar eenvoudige stappen kunnen ons ondersteuningsteam helpen je probleem sneller op te lossen:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Heb je accountgegevens bij de hand.</strong> Je gebruikersnaam of e-mailadres helpt de klantenservice je account snel te vinden. Als het probleem een specifieke transactie betreft, houd dan het referentienummer klaar.
          </div>
        </li>
        <li>
          <div>
            <strong>Beschrijf het probleem duidelijk.</strong> Leg uit wat er is gebeurd, wanneer het gebeurde en wat je verwachtte. Screenshots zijn nuttig bij technische problemen of betwiste transacties.
          </div>
        </li>
        <li>
          <div>
            <strong>Gebruik het juiste kanaal.</strong> Voor urgente zaken (vergrendeld account, mislukte storting) is live chat je beste optie. Voor het indienen van documenten of complexe zaken die onderzoek vereisen, geeft e-mail op support@westace.com het team meer ruimte om te werken.
          </div>
        </li>
        <li>
          <div>
            <strong>Bekijk eerst de FAQ.</strong> Veel veelgestelde vragen over bonussen, opnames en accountbeheer worden behandeld in de FAQ-secties op deze site.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Responsible Gambling -->
  <section class="content-section content-section--alt" id="responsible">
    <div class="container container--narrow">
      <h2>Verantwoord Gokken &amp; Zelfuitsluiting</h2>
      <p><?php echo SITE_NAME; ?> neemt verantwoord gokken serieus. Als je het gevoel hebt dat je gokgedrag problematisch wordt, kan ons ondersteuningsteam je helpen een zelfuitsluiting van het platform te regelen.</p>
      <p>Zelfuitsluiting is beschikbaar voor een bepaalde periode of permanent. Eenmaal geactiveerd kan de zelfuitsluiting niet worden teruggedraaid totdat de ingestelde periode is verstreken. Tijdens de zelfuitsluitingsperiode kun je niet inloggen en geen weddenschappen plaatsen. Neem contact op met de klantenservice via live chat of e-mail op support@westace.com om zelfuitsluiting aan te vragen.</p>

      <h3>Zelfbeoordeling</h3>
      <p>Stel jezelf de volgende vragen om te beoordelen of gokken je leven beinvloedt:</p>
      <ul>
        <li>Raken je uitgaven buiten controle?</li>
        <li>Leen je geld om te blijven gokken?</li>
        <li>Besteed je minder tijd aan familie en vrienden?</li>
        <li>Beginnen de meningen van anderen over je gokgedrag je te storen?</li>
        <li>Ben je de interesse in je gebruikelijke hobby's of activiteiten verloren?</li>
        <li>Voel je je neerslachtig of angstig door gokverliezen?</li>
        <li>Heb je ooit gelogen over hoeveel tijd of geld je aan gokken besteedt?</li>
      </ul>
      <p>Als je op meerdere van deze vragen ja hebt geantwoord, raden wij aan contact op te nemen met een hulporganisatie:</p>
      <ul>
        <li><strong>AGOG</strong> (Anonieme Gokkers) - hulp en ondersteuning bij gokgerelateerde problemen via agog.nl</li>
        <li><strong>Jellinek</strong> - professionele verslavingszorg en behandeling via jellinek.nl</li>
        <li><strong>LOKET Kansspel</strong> - informatie en advies over kansspelverslaving via loketkansspel.nl</li>
        <li><strong>Verslavingszorg Nederland</strong> - landelijk netwerk voor verslavingszorg en begeleiding</li>
      </ul>

      <h3>Praktische Tips</h3>
      <ul>
        <li>Beschouw gokken niet als een bron van inkomsten</li>
        <li>Stel een budget in voor tijd en geld, en houd je eraan</li>
        <li>Gok alleen met geld dat je kunt missen</li>
        <li>Vermijd gokken wanneer je gestrest, van slag of onder invloed van alcohol bent</li>
      </ul>
    </div>
  </section>

  <!-- Support FAQ -->
  <section class="content-section" id="support-faq">
    <div class="container container--narrow">
      <h2>Ondersteuning FAQ</h2>

      <details class="faq-item">
        <summary>Is de klantenservice van <?php echo SITE_NAME; ?> 24/7 bereikbaar?</summary>
        <div class="faq-answer">
          <p>Ja. Zowel live chat als e-mailondersteuning zijn de klok rond beschikbaar, 24 uur per dag, 7 dagen per week.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Hoe snel reageert de live chat?</summary>
        <div class="faq-answer">
          <p>Live chat medewerkers reageren doorgaans binnen 5 minuten. Tijdens piekuren kunnen wachttijden iets langer zijn.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wat is het e-mailadres van de klantenservice?</summary>
        <div class="faq-answer">
          <p>Je kunt <?php echo SITE_NAME; ?> bereiken via e-mail op <strong>support@westace.com</strong>. Vermeld je gebruikersnaam of geregistreerd e-mailadres, een beschrijving van het probleem en eventuele relevante screenshots. Verwacht een reactie binnen 24 uur.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kan de klantenservice mij helpen een bonus te annuleren?</summary>
        <div class="faq-answer">
          <p>Ja. Als je een actieve bonus wilt annuleren, neem dan contact op via live chat of e-mail. Houd er rekening mee dat het annuleren van een bonus het bonusbedrag en eventuele winsten daaruit verwijdert.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wat als mijn probleem niet wordt opgelost?</summary>
        <div class="faq-answer">
          <p>Als je niet tevreden bent met de eerste reactie, vraag dan om je zaak te escaleren naar een senior medewerker. Verstrek zo veel mogelijk details om het team te helpen je zaak grondig te onderzoeken.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kan ik zelfuitsluiting aanvragen?</summary>
        <div class="faq-answer">
          <p>Ja. Neem contact op met de klantenservice via live chat of e-mail om zelfuitsluiting te regelen voor een bepaalde periode of permanent. Tijdens de zelfuitsluiting kun je niet inloggen en geen weddenschappen plaatsen.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
