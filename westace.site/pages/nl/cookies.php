<?php
/**
 * Cookie Policy - WestAce (Dutch / NL)
 */
$page_title = 'WestAce Cookiebeleid - Hoe Wij Cookies Gebruiken';
$page_description = 'Cookiebeleid voor ' . DOMAIN . '. Lees welke cookies wij gebruiken en hoe je ze kunt beheren.';
$current_page = 'cookies';
$lang_prefix = '/nl';

require_once __DIR__ . '/../../includes/header.php';
?>

<main>
  <section class="content-section legal-page">
    <div class="container container--narrow">
      <h1>Cookiebeleid</h1>
      <p class="legal-updated">Laatst bijgewerkt: 18 maart 2026</p>

      <h2>Wat Zijn Cookies</h2>
      <p>Cookies zijn kleine tekstbestanden die op je apparaat worden geplaatst wanneer je een website bezoekt. Ze worden breed ingezet om sites goed te laten werken, je voorkeuren te onthouden en geanonimiseerde gebruiksgegevens aan site-eigenaren te verstrekken.</p>

      <h2>Hoe Wij Cookies Gebruiken</h2>
      <p><?php echo DOMAIN; ?> is een lichtgewicht affiliate reviewsite. Wij gebruiken geen cookies voor advertenties, personalisatie of tracking over andere websites. De cookies op deze site vallen in drie categorieen:</p>

      <h3>Essentiele Cookies</h3>
      <p>Deze zijn noodzakelijk voor de correcte werking van de site. Ze omvatten cookies die door onze hostingprovider (Cloudflare) worden geplaatst voor beveiliging en prestaties, zoals botdetectie en DDoS-bescherming. Deze kunnen niet worden uitgeschakeld zonder de sitefunctionaliteit te beinvloeden.</p>
      <table class="data-table">
        <thead>
          <tr><th>Cookie</th><th>Aanbieder</th><th>Doel</th><th>Duur</th></tr>
        </thead>
        <tbody>
          <tr><td>__cf_bm</td><td>Cloudflare</td><td>Botbeheer en beveiliging</td><td>30 minuten</td></tr>
          <tr><td>cf_clearance</td><td>Cloudflare</td><td>Beveiligingscontrole verificatie</td><td>Tot 1 jaar</td></tr>
        </tbody>
      </table>

      <h3>Analytische Cookies</h3>
      <p>Wij maken mogelijk gebruik van Google Analytics om te begrijpen hoe bezoekers de site gebruiken, zoals welke pagina's het populairst zijn en hoe bezoekers binnenkomen. Deze gegevens zijn geanonimiseerd en geaggregeerd. Er worden geen persoonsgegevens verzameld.</p>
      <table class="data-table">
        <thead>
          <tr><th>Cookie</th><th>Aanbieder</th><th>Doel</th><th>Duur</th></tr>
        </thead>
        <tbody>
          <tr><td>_ga</td><td>Google Analytics</td><td>Onderscheidt unieke bezoekers</td><td>2 jaar</td></tr>
          <tr><td>_ga_*</td><td>Google Analytics</td><td>Behoudt sessiestatus</td><td>2 jaar</td></tr>
        </tbody>
      </table>

      <h3>Marketing / Affiliate Cookies</h3>
      <p>Wij plaatsen zelf geen marketingcookies. Wanneer je echter op een affiliate link op onze site klikt, kan het doelplatform cookies plaatsen om de verwijzing te volgen. Deze cookies worden door de derde partij geplaatst en vallen onder hun cookiebeleid, niet het onze.</p>

      <h2>Cookies van Derden</h2>
      <p>Wanneer je op een affiliate link klikt en onze site verlaat, kan de doelwebsite eigen cookies plaatsen. Wij hebben hier geen controle over. Raadpleeg het cookiebeleid van de casino-exploitant voor details.</p>

      <h2>Cookietoestemming</h2>
      <p>Op grond van de EU ePrivacy-richtlijn en de AVG zijn wij verplicht je toestemming te vragen voordat niet-essentiele cookies op je apparaat worden geplaatst. Essentiele cookies die strikt noodzakelijk zijn voor de werking van de site vereisen geen toestemming. Door deze site te blijven gebruiken, stem je in met het gebruik van analytische cookies zoals hierboven beschreven. Je kunt je toestemming op elk moment intrekken door je browserinstellingen aan te passen.</p>

      <h2>Cookies Beheren</h2>
      <p>Je kunt cookies beheren en verwijderen via je browserinstellingen. De meeste browsers bieden de mogelijkheid om:</p>
      <ul>
        <li>Te bekijken welke cookies zijn opgeslagen en ze afzonderlijk te verwijderen</li>
        <li>Cookies van derden te blokkeren</li>
        <li>Alle cookies van specifieke sites te blokkeren</li>
        <li>Alle cookies volledig te blokkeren</li>
        <li>Alle cookies te verwijderen bij het sluiten van de browser</li>
      </ul>
      <p>Het uitschakelen van cookies kan de sitefunctionaliteit beinvloeden, met name beveiligingsfuncties van Cloudflare.</p>
      <p>Voor instructies over het beheren van cookies in je browser:</p>
      <ul>
        <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener noreferrer">Google Chrome</a></li>
        <li><a href="https://support.mozilla.org/en-US/kb/cookies-information-websites-store-on-your-computer" target="_blank" rel="noopener noreferrer">Mozilla Firefox</a></li>
        <li><a href="https://support.apple.com/en-gb/guide/safari/sfri11471/mac" target="_blank" rel="noopener noreferrer">Safari</a></li>
        <li><a href="https://support.microsoft.com/en-gb/microsoft-edge/delete-cookies-in-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank" rel="noopener noreferrer">Microsoft Edge</a></li>
      </ul>

      <h2>Wijzigingen in Dit Beleid</h2>
      <p>Wij kunnen dit cookiebeleid van tijd tot tijd bijwerken. Eventuele wijzigingen worden op deze pagina gepubliceerd met een bijgewerkte herzieningsdatum.</p>

      <h2>Contact</h2>
      <p>Als je vragen hebt over ons gebruik van cookies, neem dan contact met ons op via <a href="mailto:info@westace.site">info@westace.site</a> of bezoek onze <a href="<?php echo $lang_prefix; ?>/support">Ondersteuningspagina</a>.</p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
