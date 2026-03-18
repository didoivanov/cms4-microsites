<?php
/**
 * Login Page - WestAce (Dutch / NL)
 */
$page_title = 'WestAce Inloggen - Toegang tot Je Casino Account';
$page_description = 'Log in op je ' . SITE_NAME . ' Casino account. Toegang tot je spellen, bonussen en saldo. Problemen met inloggen? Herstel je wachtwoord of neem contact op met de klantenservice.';
$current_page = 'login';
$lang_prefix = '/nl';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Inloggen';
$hero_description = 'Log in om toegang te krijgen tot je account, spellen en bonussen.';
$hero_cta = 'Nu Registreren';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Login Help -->
  <section class="content-section content-section--alt" id="login-help">
    <div class="container container--narrow">
      <h2>Hoe Log Je In bij <?php echo SITE_NAME; ?> Casino</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Inloggen op je <?php echo SITE_NAME; ?>-account kost slechts een paar seconden. Gebruik het e-mailadres en wachtwoord dat je tijdens registratie hebt aangemaakt.</p>
          <h3>Inloggen op Desktop</h3>
          <p>Ga naar de <?php echo SITE_NAME; ?>-website en klik op de knop "Log In" rechtsboven op de pagina. Voer je e-mailadres en wachtwoord in en klik op "Log In" om toegang te krijgen tot je account. Als je je wachtwoord bent vergeten, klik dan op de resetlink onder het inlogformulier.</p>
          <h3>Inloggen op Mobiel</h3>
          <p>Open op je telefoon of tablet de <?php echo SITE_NAME; ?>-website in je mobiele browser. Tik op de knop "Log In", voer je e-mailadres en wachtwoord in en tik op "Log In." De mobiele versie biedt dezelfde functies als de desktopsite -- geen app-download nodig.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-login-screen.png" alt="<?php echo SITE_NAME; ?> Casino inlogscherm met e-mail- en wachtwoordvelden" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div style="text-align:center;margin:var(--space-8) 0">
        <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Inloggen bij <?php echo SITE_NAME; ?></a>
        <p style="margin-top:var(--space-4)">Nog geen account? <a href="/play" rel="nofollow">Registreer hier</a> en claim je welkomstbonus.</p>
      </div>

      <h3>Problemen met Inloggen?</h3>
      <p>Als je moeite hebt om in te loggen op je account, zijn hier een paar dingen om te controleren:</p>
      <ul>
        <li>Zorg dat je het juiste e-mailadres en wachtwoord invoert. Wachtwoorden zijn hoofdlettergevoelig.</li>
        <li>Wis je browsercache en cookies en probeer het opnieuw.</li>
        <li>Controleer of je internetverbinding stabiel is.</li>
        <li>Als je je wachtwoord bent vergeten, gebruik dan de link "Wachtwoord vergeten?" om een reset-e-mail aan te vragen.</li>
      </ul>
      <p>Als geen van bovenstaande het probleem oplost, neem dan contact op met de <a href="<?php echo $lang_prefix; ?>/support">klantenservice</a> via live chat of e-mail op support@westace.com.</p>
    </div>
  </section>

  <!-- Registration Overview -->
  <section class="content-section" id="register">
    <div class="container container--narrow">
      <h2>Een Nieuw Account Aanmaken</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Als je nog geen <?php echo SITE_NAME; ?>-account hebt, is de registratie snel en duurt het ongeveer twee minuten. Vul je e-mailadres in, maak een wachtwoord aan, kies je gewenste valuta en je bent klaar om te spelen. De welkomstbonus wordt bovenaan het registratieformulier weergegeven zodat je precies weet wat je krijgt.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-signup-screen.png" alt="<?php echo SITE_NAME; ?> Casino registratieformulier met welkomstpakket en registratievelden" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Klik op "Sign Up" op de website.</strong> De registratieknop bevindt zich rechtsboven op de pagina.
          </div>
        </li>
        <li>
          <div>
            <strong>Kies je welkomstbonus.</strong> Selecteer de bonus die je wilt activeren bij je eerste storting, of sla dit over als je liever zonder bonus speelt.
          </div>
        </li>
        <li>
          <div>
            <strong>Vul je e-mailadres in en maak een wachtwoord aan.</strong> Kies een sterk wachtwoord om je account veilig te houden.
          </div>
        </li>
        <li>
          <div>
            <strong>Vul je persoonlijke gegevens in.</strong> Je moet je volledige naam, geboortedatum, telefoonnummer, adres, land en gewenste valuta opgeven. Deze informatie is nodig voor accountverificatie wanneer je je eerste opname aanvraagt.
          </div>
        </li>
        <li>
          <div>
            <strong>Voltooi de registratie.</strong> Rond je account af en doe je eerste storting om de welkomstbonus te claimen. De minimale kwalificerende storting is &euro;20.
          </div>
        </li>
      </ol>

      <div style="text-align:center;margin:var(--space-8) 0">
        <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Maak Je Account Aan</a>
      </div>
    </div>
  </section>

  <!-- Account Recovery -->
  <section class="content-section content-section--alt" id="recovery">
    <div class="container container--narrow">
      <h2>Accountherstel</h2>

      <h3>Wachtwoord Vergeten?</h3>
      <p>Klik op de link "Wachtwoord vergeten?" op het inlogformulier. Voer je geregistreerde e-mailadres in en er wordt een resetlink naar je inbox gestuurd. Klik op de link in de e-mail om een nieuw wachtwoord aan te maken. De resetlink is beperkt geldig, dus gebruik hem snel.</p>
      <p>Als je de e-mail niet binnen een paar minuten ontvangt, controleer dan je spam- of ongewenste-mailmap. Als de e-mail nog steeds niet aankomt, neem dan contact op met de <a href="<?php echo $lang_prefix; ?>/support">klantenservice</a> voor handmatige hulp.</p>

      <h3>Account Vergrendeld?</h3>
      <p>Accountvergrendelingen kunnen plaatsvinden om beveiligingsredenen, zoals meerdere mislukte inlogpogingen of verdachte activiteit. Neem contact op met de klantenservice via live chat of e-mail op support@westace.com om je account te laten beoordelen.</p>
    </div>
  </section>

  <!-- Login FAQ -->
  <section class="content-section" id="login-faq">
    <div class="container container--narrow">
      <h2>Inlog-FAQ</h2>

      <details class="faq-item">
        <summary>Wat heb ik nodig om in te loggen?</summary>
        <div class="faq-answer">
          <p>Je hebt het e-mailadres en wachtwoord nodig dat je tijdens registratie hebt aangemaakt. Als je je wachtwoord bent vergeten, klik dan op "Wachtwoord vergeten?" op het inlogformulier om een resetlink per e-mail te ontvangen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Onthoudt de site mij bij mijn volgende bezoek?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> gebruikt cookies om terugkerende spelers te onthouden. Als je eerder op hetzelfde apparaat en dezelfde browser bent ingelogd, kan je e-mailadres vooraf zijn ingevuld. Je moet nog steeds je wachtwoord invoeren voor de beveiliging. Het wissen van je browsercookies of het gebruik van prive-navigatie vereist dat je je volledige gegevens opnieuw invoert.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mijn account is vergrendeld. Wat moet ik doen?</summary>
        <div class="faq-answer">
          <p>Accountvergrendelingen kunnen optreden na meerdere mislukte inlogpogingen of door verdachte activiteit. Neem contact op met de klantenservice via live chat of e-mail op support@westace.com om je account te laten beoordelen en ontgrendelen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Hoe wijzig ik mijn wachtwoord?</summary>
        <div class="faq-answer">
          <p>Ga na het inloggen naar je accountinstellingen om je wachtwoord bij te werken. Als je niet kunt inloggen, gebruik dan de wachtwoordherstelfunctie op de inlogpagina.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Welke informatie is nodig voor registratie?</summary>
        <div class="faq-answer">
          <p>Voor registratie heb je een e-mailadres, wachtwoord, volledige naam, geboortedatum, telefoonnummer, adres, land en gewenste valuta nodig. Deze gegevens worden gebruikt voor identiteitsverificatie en naleving van regelgeving.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Is er een mobiele app voor <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Er is geen speciale app beschikbaar, maar de website is volledig geoptimaliseerd voor mobiele apparaten. Open <?php echo SITE_NAME; ?> in je mobiele browser en log normaal in. Alle spellen, sportweddenschappen en functies zijn op mobiel toegankelijk.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
