<?php
/**
 * Login Page - German
 */
$page_title = SITE_NAME . ' Login - Melde dich in deinem Casino-Konto an';
$page_description = 'Logge dich in dein ' . SITE_NAME . ' Casino Konto ein. Greife auf deine Spiele, Boni und dein Guthaben zu. Probleme beim Einloggen? Setze dein Passwort zurück oder kontaktiere den Support.';
$current_page = 'login';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Login';
$hero_description = 'Melde dich an, um auf dein Konto, deine Spiele und Boni zuzugreifen.';
$hero_cta = 'Jetzt registrieren';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Login Help -->
  <section class="content-section content-section--alt" id="login-help">
    <div class="container container--narrow">
      <h2>So loggst du dich bei <?php echo SITE_NAME; ?> Casino ein</h2>
      <p>Die Anmeldung bei deinem <?php echo SITE_NAME; ?> Konto dauert nur wenige Sekunden. So funktioniert es auf Desktop und Mobilgerät:</p>

      <h3>Desktop-Login</h3>
      <p>Besuche die <?php echo SITE_NAME; ?> Website und klicke auf den „Anmelden"-Button oben rechts auf der Seite, neben dem „Registrieren"-Button. Gib deine registrierte E-Mail-Adresse und dein Passwort ein und klicke dann auf „Anmelden", um auf dein Konto zuzugreifen. Der Link „Passwort vergessen?" befindet sich direkt unter dem Formular, falls du deine Zugangsdaten zurücksetzen musst.</p>

      <h3>Mobiler Login</h3>
      <p>Öffne auf deinem Handy oder Tablet die <?php echo SITE_NAME; ?> Website in deinem mobilen Browser. Der „Anmelden"-Button ist im Header-Bereich sichtbar. Tippe darauf, gib deine E-Mail und dein Passwort ein und tippe auf „Anmelden". Die mobile Version bietet die gleichen Funktionen wie die Desktop-Seite, einschließlich Passwort-Wiederherstellung und Kontoregistrierung.</p>

      <h3>Probleme beim Einloggen?</h3>
      <p>Wenn du Schwierigkeiten hast, dich in dein Konto einzuloggen, überprüfe Folgendes:</p>
      <ul>
        <li>Stelle sicher, dass du die richtige E-Mail-Adresse und das richtige Passwort eingibst. Passwörter unterscheiden zwischen Groß- und Kleinschreibung.</li>
        <li>Lösche den Browser-Cache und die Cookies und versuche es erneut.</li>
        <li>Überprüfe, ob deine Internetverbindung stabil ist.</li>
        <li>Wenn du dein Passwort vergessen hast, nutze den Link „Passwort vergessen?", um eine Zurücksetzungs-E-Mail anzufordern.</li>
        <li>Vermeide die Nutzung eines VPN, da <?php echo SITE_NAME; ?> keinen VPN-Zugang erlaubt. Ein Login-Versuch über ein VPN kann zu Kontobeschränkungen führen.</li>
      </ul>
      <p>Wenn keine der oben genannten Maßnahmen hilft, wende dich an den <a href="<?php echo $lang_prefix; ?>/support">Kundenservice</a> per Live-Chat für Echtzeit-Hilfe.</p>
    </div>
  </section>

  <!-- Registration Overview -->
  <section class="content-section" id="register">
    <div class="container container--narrow">
      <h2>Ein neues Konto erstellen</h2>
      <p>Wenn du noch kein <?php echo SITE_NAME; ?> Konto hast, ist die Registrierung schnell und dauert etwa eine Minute. Hier ist ein Überblick über den Ablauf:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Klicke auf „Registrieren" auf der Website.</strong> Der Registrierungsbutton befindet sich oben rechts auf der Seite. Es erscheint ein Popup, in dem du deinen bevorzugten Willkommensbonus (Casino, Mehrfacheinzahlung oder Sport) auswählen oder auf Boni ganz verzichten kannst.
          </div>
        </li>
        <li>
          <div>
            <strong>Gib deine E-Mail ein und erstelle ein Passwort.</strong> Diese werden ab jetzt deine Login-Daten sein. Wenn du einen Promo-Code hast, kannst du ihn in diesem Schritt eingeben.
          </div>
        </li>
        <li>
          <div>
            <strong>Gib deine persönlichen Daten ein.</strong> Du musst deinen vollständigen Namen, Geburtsdatum, Geschlecht, Telefonnummer und Anschrift angeben. Diese Informationen werden für die Kontoverifizierung benötigt.
          </div>
        </li>
        <li>
          <div>
            <strong>Registrierung abschließen.</strong> Klicke auf „Profil erstellen", um dein Konto zu finalisieren. Danach kannst du deine erste Einzahlung vornehmen und sofort losspielen.
          </div>
        </li>
      </ol>

      <p>Lade nach der Registrierung am besten gleich deine Verifizierungsdokumente hoch. Das beschleunigt den Prozess, wenn du deine erste Auszahlung anforderst. Den Dokumenten-Upload findest du unter „Einstellungen - Kontoverifizierung" in deinem Profil.</p>
    </div>
  </section>

  <!-- Login FAQ -->
  <section class="content-section content-section--alt" id="login-faq">
    <div class="container container--narrow">
      <h2>Login-FAQ</h2>

      <details class="faq-item">
        <summary>Was brauche ich, um mich einzuloggen?</summary>
        <div class="faq-answer">
          <p>Du brauchst die E-Mail-Adresse und das Passwort, die du bei der Registrierung verwendet hast. Wenn du dein Passwort vergessen hast, klicke im Anmeldeformular auf „Passwort vergessen?", um einen Zurücksetzungslink per E-Mail zu erhalten.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kann ich ein VPN verwenden, um auf <?php echo SITE_NAME; ?> zuzugreifen?</summary>
        <div class="faq-answer">
          <p>Nein. <?php echo SITE_NAME; ?> verbietet die Nutzung von VPNs strikt. Das Einloggen über ein VPN kann zur Sperrung deines Kontos und zum Verlust aller damit verbundenen Gewinne führen. Das Casino bietet ein länderspezifisches Erlebnis, das auf jede Region zugeschnitten ist.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mein Konto ist gesperrt. Was soll ich tun?</summary>
        <div class="faq-answer">
          <p>Kontosperrungen können aus Sicherheitsgründen auftreten, zum Beispiel nach mehreren fehlgeschlagenen Login-Versuchen oder verdächtigen Aktivitäten. Kontaktiere den Kundenservice per Live-Chat oder E-Mail, um dein Konto überprüfen und gegebenenfalls entsperren zu lassen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wie ändere ich mein Passwort?</summary>
        <div class="faq-answer">
          <p>Wenn du eingeloggt bist, gehe zu deinen Kontoeinstellungen, um dein Passwort zu ändern. Wenn du dich nicht einloggen kannst, nutze die Passwort-zurücksetzen-Funktion auf der Anmeldeseite. Ein Zurücksetzungslink wird an deine registrierte E-Mail-Adresse gesendet.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Welche Informationen werden für die Registrierung benötigt?</summary>
        <div class="faq-answer">
          <p>Für die Registrierung brauchst du deine E-Mail, ein Passwort, vollständigen Namen, Geburtsdatum, Geschlecht, Telefonnummer, Land, Stadt und Postleitzahl. Diese Informationen werden für die Identitätsverifizierung und die Einhaltung regulatorischer Anforderungen benötigt.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
