<?php
/**
 * Login Page – German
 */
$page_title = SITE_NAME . ' Login - Anmelden bei Ihrem Casino-Konto';
$page_description = 'Melden Sie sich bei Ihrem ' . SITE_NAME . ' Casino-Konto an. Zugang zu Ihren Spielen, Boni und Ihrem Guthaben. Probleme beim Anmelden? Setzen Sie Ihr Passwort zurück, stellen Sie Ihren Benutzernamen wieder her oder kontaktieren Sie den Support.';
$current_page = 'login';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Login';
$hero_description = 'Melden Sie sich an, um auf Ihr Konto, Ihre Spiele und Boni zuzugreifen.';
$hero_cta = 'Jetzt registrieren';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Login Help -->
  <section class="content-section content-section--alt" id="login-help">
    <div class="container container--narrow">
      <h2>So melden Sie sich bei <?php echo SITE_NAME; ?> Casino an</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <p style="margin-top:0">Die Anmeldung bei Ihrem <?php echo SITE_NAME; ?>-Konto dauert nur wenige Sekunden. So funktioniert es auf Desktop und Mobilgeräten:</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-login.png" alt="<?php echo SITE_NAME; ?> Casino Anmeldebildschirm mit Benutzername und Passwort" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>

      <h3>Desktop-Anmeldung</h3>
      <p>Besuchen Sie die <?php echo SITE_NAME; ?>-Website und klicken Sie auf den Button "Anmelden" oben rechts auf der Seite, neben dem Button "Registrieren". Geben Sie Ihren Benutzernamen oder Ihre E-Mail-Adresse und Ihr Passwort ein und klicken Sie auf "Anmelden", um auf Ihr Konto zuzugreifen. Die Links "Passwort vergessen?" und "Benutzername vergessen?" finden Sie direkt unter dem Formular, falls Sie Ihre Zugangsdaten wiederherstellen müssen.</p>

      <h3>Mobile Anmeldung</h3>
      <p>Öffnen Sie auf Ihrem Smartphone oder Tablet die <?php echo SITE_NAME; ?>-Website in Ihrem mobilen Browser. Der Button "Anmelden" ist im oberen Bereich sichtbar. Tippen Sie darauf, geben Sie Ihren Benutzernamen oder Ihre E-Mail und Ihr Passwort ein und tippen Sie auf "Anmelden". Die mobile Version bietet die gleichen Funktionen wie die Desktop-Seite, inklusive Passwort-Wiederherstellung, Benutzernamen-Wiederherstellung und Kontoregistrierung.</p>

      <h3>Wiederkehrende Spieler</h3>
      <p><?php echo SITE_NAME; ?> verwendet Cookies, um wiederkehrende Spieler zu erkennen. Wenn Sie sich zuvor auf demselben Gerät und Browser angemeldet haben, kann Ihr Benutzername oder Ihre E-Mail im Anmeldeformular vorausgefüllt sein. Geben Sie einfach Ihr Passwort ein und klicken Sie auf "Anmelden". Das Löschen Ihrer Browser-Cookies oder die Verwendung des Inkognito-Modus erfordert die erneute Eingabe Ihrer vollständigen Zugangsdaten.</p>

      <h3>Probleme beim Anmelden?</h3>
      <p>Falls Sie Schwierigkeiten haben, sich in Ihr Konto einzuloggen, prüfen Sie folgende Punkte:</p>
      <ul>
        <li>Stellen Sie sicher, dass Sie den richtigen Benutzernamen (oder die E-Mail) und das richtige Passwort eingeben. Passwörter sind gross-/kleinschreibungsabhängig.</li>
        <li>Löschen Sie den Browser-Cache und die Cookies und versuchen Sie es erneut.</li>
        <li>Prüfen Sie, ob Ihre Internetverbindung stabil ist.</li>
        <li>Falls Sie Ihr Passwort vergessen haben, nutzen Sie den Link "Passwort vergessen?", um eine Zurücksetzungs-E-Mail anzufordern.</li>
        <li>Falls Sie Ihren Benutzernamen vergessen haben, nutzen Sie den Link "Benutzername vergessen?", um ihn über Ihre registrierte E-Mail-Adresse abzurufen.</li>
      </ul>
      <p>Falls nichts davon hilft, wenden Sie sich an den <a href="/de/support">Kundenservice</a> per Live-Chat, E-Mail an support@vipluck.com oder Telegram.</p>
    </div>
  </section>

  <!-- Registration Overview -->
  <section class="content-section" id="register">
    <div class="container container--narrow">
      <h2>Neues Konto erstellen</h2>
      <p>Wenn Sie noch kein <?php echo SITE_NAME; ?>-Konto haben, ist die Registrierung schnell erledigt und dauert etwa eine Minute. Keine E-Mail- oder Telefonverifizierung nötig. So läuft der Prozess ab:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Klicken Sie auf "Registrieren" auf der Website.</strong> Der Registrierungsbutton befindet sich oben rechts auf der Seite. Es öffnet sich ein Fenster, in dem Sie Ihren bevorzugten Willkommensbonus wählen können (Casino, Mehrfacheinzahlung oder Sport) oder ganz auf Boni verzichten.
          </div>
        </li>
        <li>
          <div>
            <strong>Benutzernamen wählen, E-Mail eingeben und Passwort erstellen.</strong> Ihr Benutzername wird zusammen mit Ihrer E-Mail für die Anmeldung verwendet. Falls Sie einen Promo-Code haben, können Sie ihn hier eingeben.
          </div>
        </li>
        <li>
          <div>
            <strong>Persönliche Daten ausfüllen.</strong> Sie müssen Ihren vollständigen Namen, Geburtsdatum, Geschlecht, Telefonnummer und Adresse angeben. Diese Informationen werden für die Kontoverifizierung bei Ihrer ersten Auszahlung benötigt.
          </div>
        </li>
        <li>
          <div>
            <strong>Registrierung abschliessen.</strong> Klicken Sie auf "Profil erstellen", um Ihr Konto zu aktivieren. Keine E-Mail- oder Telefonverifizierung nötig -- Ihr Konto ist sofort aktiv. Sie können direkt Ihre erste Einzahlung machen und losspielen.
          </div>
        </li>
      </ol>

      <p>Laden Sie nach der Registrierung am besten gleich Ihre Verifizierungsdokumente hoch. Das beschleunigt den Vorgang bei Ihrer ersten Auszahlung. Den Upload-Bereich finden Sie unter "Einstellungen - Kontoverifizierung" in Ihrem Profil.</p>
    </div>
  </section>

  <!-- Account Recovery -->
  <section class="content-section content-section--alt" id="recovery">
    <div class="container container--narrow">
      <h2>Kontowiederherstellung</h2>

      <div class="two-col">
        <div>
          <h3>Passwort vergessen?</h3>
          <p>Klicken Sie auf den Link "Passwort vergessen?" im Anmeldeformular. Geben Sie Ihre registrierte E-Mail-Adresse ein, und ein Zurücksetzungslink wird an Ihren Posteingang gesendet. Klicken Sie auf den Link in der E-Mail, um ein neues Passwort zu erstellen. Der Link ist nur für begrenzte Zeit gültig -- nutzen Sie ihn also zeitnah.</p>
          <p>Falls Sie die E-Mail nicht innerhalb weniger Minuten erhalten, prüfen Sie Ihren Spam- oder Junk-Ordner. Falls die E-Mail trotzdem nicht ankommt, wenden Sie sich an den <a href="/de/support">Kundenservice</a>.</p>
        </div>
        <div>
          <h3>Benutzername vergessen?</h3>
          <p>Klicken Sie auf den Link "Benutzername vergessen?" im Anmeldeformular. Geben Sie die mit Ihrem Konto verknüpfte E-Mail-Adresse ein, und Ihr Benutzername wird an diese E-Mail gesendet. Das ist hilfreich, wenn Sie sich vor einiger Zeit registriert haben und sich nicht mehr an den gewählten Benutzernamen erinnern.</p>
          <p>Falls Sie keinen Zugang mehr zu Ihrer registrierten E-Mail-Adresse haben, kontaktieren Sie den Support per Live-Chat oder E-Mail an support@vipluck.com, um Ihre Identität zu bestätigen und Ihr Konto wiederherzustellen.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Login FAQ -->
  <section class="content-section" id="login-faq">
    <div class="container container--narrow">
      <h2>Login-FAQ</h2>

      <details class="faq-item">
        <summary>Was brauche ich zum Anmelden?</summary>
        <div class="faq-answer">
          <p>Sie benötigen Ihren Benutzernamen (oder Ihre E-Mail-Adresse) und das Passwort, das Sie bei der Registrierung erstellt haben. Falls Sie Ihr Passwort vergessen haben, klicken Sie im Anmeldeformular auf "Passwort vergessen?", um einen Zurücksetzungslink per E-Mail zu erhalten. Falls Sie Ihren Benutzernamen vergessen haben, klicken Sie auf "Benutzername vergessen?", um ihn an Ihre registrierte E-Mail senden zu lassen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kann ich mich mit Benutzername oder E-Mail anmelden?</summary>
        <div class="faq-answer">
          <p>Ja. <?php echo SITE_NAME; ?> akzeptiert sowohl Ihren Benutzernamen als auch Ihre registrierte E-Mail-Adresse für die Anmeldung. Verwenden Sie einfach das, was Sie sich leichter merken können.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Erkennt die Website mich beim nächsten Besuch wieder?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> verwendet Cookies, um wiederkehrende Spieler zu erkennen. Wenn Sie sich zuvor auf demselben Gerät und Browser angemeldet haben, kann Ihr Benutzername oder Ihre E-Mail im Anmeldeformular vorausgefüllt sein. Aus Sicherheitsgründen müssen Sie trotzdem Ihr Passwort eingeben.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kann ich mit VPN auf <?php echo SITE_NAME; ?> zugreifen?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> blockiert VPN-Verbindungen technisch nicht. Die Nutzung eines VPN, um von einer eingeschränkten Region auf die Plattform zuzugreifen, verstösst jedoch gegen die Allgemeinen Geschäftsbedingungen. Wenn Sie sich aus einer Region verbinden, in der das Casino verfügbar ist, sollte die VPN-Nutzung kein Problem darstellen. Das Casino behält sich allerdings vor, Konten mit ungewöhnlichen Verbindungsmustern zu überprüfen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mein Konto ist gesperrt. Was soll ich tun?</summary>
        <div class="faq-answer">
          <p>Kontosperrungen können aus Sicherheitsgründen auftreten, etwa bei mehrfach fehlgeschlagenen Anmeldeversuchen oder verdächtigen Aktivitäten. Kontaktieren Sie den Kundensupport per Live-Chat oder E-Mail an support@vipluck.com, um Ihr Konto prüfen und gegebenenfalls entsperren zu lassen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wie ändere ich mein Passwort?</summary>
        <div class="faq-answer">
          <p>Gehen Sie nach der Anmeldung in Ihre Kontoeinstellungen, um Ihr Passwort zu ändern. Falls Sie sich nicht anmelden können, nutzen Sie die Passwort-Zurücksetzungsfunktion auf der Anmeldeseite. Ein Zurücksetzungslink wird an Ihre registrierte E-Mail-Adresse gesendet.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Muss ich meine E-Mail bestätigen, um mich zu registrieren?</summary>
        <div class="faq-answer">
          <p>Nein. <?php echo SITE_NAME; ?> verlangt keine E-Mail- oder Telefonbestätigung für die Kontoerstellung. Ihr Konto ist sofort nach der Registrierung aktiv, und Sie können direkt losspielen. Verifizierungsdokumente werden später bei der ersten Auszahlung benötigt.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Welche Angaben sind für die Registrierung nötig?</summary>
        <div class="faq-answer">
          <p>Für die Registrierung werden Benutzername, E-Mail-Adresse, Passwort, vollständiger Name, Geburtsdatum, Geschlecht, Telefonnummer, Land, Stadt und Postleitzahl benötigt. Diese Informationen dienen der Identitätsprüfung und der Einhaltung gesetzlicher Vorschriften.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
