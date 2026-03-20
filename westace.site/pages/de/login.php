<?php
/**
 * Anmeldeseite - WestAce (Deutsch / DE)
 */
$page_title = SITE_NAME . ' Anmelden - Zugang zu deinem Casino-Konto';
$page_description = 'Melde dich bei ' . SITE_NAME . ' Casino an. Zugriff auf deine Spiele, Boni und dein Guthaben. Zur Anmeldung wirst du direkt auf die Casino-Website weitergeleitet.';
$current_page = 'login';
$lang_prefix = '/de';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Anmelden';
$hero_description = 'Melde dich an, um auf dein Konto, deine Spiele und deine Boni zuzugreifen.';
$hero_cta = 'Jetzt Registrieren';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Anmelde-Info -->
  <section class="content-section content-section--alt" id="login-info">
    <div class="container container--narrow">
      <h2>So meldest du dich bei <?php echo SITE_NAME; ?> an</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Die Anmeldung bei deinem <?php echo SITE_NAME; ?>-Konto dauert nur wenige Sekunden. Nutze die E-Mail-Adresse und das Passwort, die du bei der Registrierung erstellt hast.</p>

          <h3>Desktop-Anmeldung</h3>
          <p>Besuche die offizielle <?php echo SITE_NAME; ?>-Website und klicke auf die Schaltfläche "Anmelden" in der oberen rechten Ecke der Seite. Gib deine E-Mail-Adresse und dein Passwort ein und klicke auf "Anmelden", um auf dein Konto zuzugreifen. Falls du dein Passwort vergessen hast, nutze den Reset-Link unterhalb des Anmeldeformulars.</p>

          <h3>Mobile Anmeldung</h3>
          <p>Öffne die <?php echo SITE_NAME; ?>-Website auf deinem Smartphone oder Tablet in einem mobilen Browser. Tippe auf "Anmelden", gib deine E-Mail-Adresse und dein Passwort ein und tippe auf "Anmelden". Die mobile Version bietet dieselben Funktionen wie die Desktop-Seite - kein App-Download nötig.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-login-screen.png" alt="<?php echo SITE_NAME; ?> Casino Anmeldeformular" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div style="text-align:center;margin:var(--space-8) 0">
        <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Bei <?php echo SITE_NAME; ?> anmelden</a>
        <p style="margin-top:var(--space-4)">Noch kein Konto? <a href="/play" rel="nofollow">Hier registrieren</a> und Willkommensbonus sichern.</p>
      </div>

      <h3>Probleme bei der Anmeldung?</h3>
      <p>Falls du Schwierigkeiten bei der Anmeldung hast, prüfe folgendes:</p>
      <ul>
        <li>Stelle sicher, dass du die richtige E-Mail-Adresse und das richtige Passwort eingibst. Passwörter sind Groß-/Kleinschreibung-sensitiv.</li>
        <li>Lösche den Browser-Cache und die Cookies und versuche es erneut.</li>
        <li>Überprüfe, ob deine Internetverbindung stabil ist.</li>
        <li>Falls du dein Passwort vergessen hast, nutze den Link "Passwort vergessen?", um einen Reset-Link anzufordern.</li>
      </ul>
      <p>Wenn keiner der oben genannten Schritte das Problem löst, wende dich an den <a href="<?php echo $lang_prefix; ?>/support">Kundensupport</a> per Live-Chat oder per E-Mail an support@westace.com.</p>
    </div>
  </section>

  <!-- Neues Konto erstellen -->
  <section class="content-section" id="register">
    <div class="container container--narrow">
      <h2>Neues Konto erstellen</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Wenn du noch kein <?php echo SITE_NAME; ?>-Konto hast, geht die Registrierung schnell und dauert etwa zwei Minuten. Gib deine E-Mail-Adresse ein, erstelle ein Passwort, wähle deine bevorzugte Währung - und schon bist du startklar. Der Willkommensbonus wird oben im Registrierungsformular angezeigt, damit du genau weißt, was dich erwartet.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-signup-screen.png" alt="<?php echo SITE_NAME; ?> Casino Registrierungsformular mit Willkommenspaket" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Auf "Registrieren" klicken.</strong> Die Registrierungsschaltfläche befindet sich oben rechts auf der Seite.
          </div>
        </li>
        <li>
          <div>
            <strong>Willkommensbonus auswählen.</strong> Wähle den Bonus, den du mit deiner ersten Einzahlung aktivieren möchtest, oder überspringe diesen Schritt, wenn du lieber ohne Bonus spielen möchtest.
          </div>
        </li>
        <li>
          <div>
            <strong>E-Mail eingeben und Passwort erstellen.</strong> Wähle ein sicheres Passwort, um dein Konto zu schützen.
          </div>
        </li>
        <li>
          <div>
            <strong>Persönliche Daten eingeben.</strong> Du musst deinen vollständigen Namen, Geburtsdatum, Telefonnummer, Adresse, Land und bevorzugte Währung angeben. Diese Daten werden für die Kontoverifizierung bei der ersten Auszahlung benötigt.
          </div>
        </li>
        <li>
          <div>
            <strong>Registrierung abschließen.</strong> Schließe dein Konto ab und tätige deine erste Einzahlung, um den Willkommensbonus zu beanspruchen. Die Mindestqualifikationseinzahlung beträgt 20 &euro;.
          </div>
        </li>
      </ol>

      <div style="text-align:center;margin:var(--space-8) 0">
        <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Konto erstellen</a>
      </div>
    </div>
  </section>

  <!-- Kontowiederherstellung -->
  <section class="content-section content-section--alt" id="recovery">
    <div class="container container--narrow">
      <h2>Kontowiederherstellung</h2>

      <h3>Passwort vergessen?</h3>
      <p>Klicke auf den Link "Passwort vergessen?" im Anmeldeformular. Gib deine registrierte E-Mail-Adresse ein, und ein Reset-Link wird an dein Postfach gesendet. Klicke auf den Link in der E-Mail, um ein neues Passwort zu erstellen. Der Reset-Link ist nur für eine begrenzte Zeit gültig, also nutze ihn zeitnah.</p>
      <p>Falls du die E-Mail nicht innerhalb weniger Minuten erhältst, prüfe deinen Spam- oder Junk-Ordner. Wenn die E-Mail weiterhin nicht ankommt, wende dich an den <a href="<?php echo $lang_prefix; ?>/support">Kundensupport</a> für manuelle Hilfe.</p>

      <h3>Konto gesperrt?</h3>
      <p>Kontosperrungen können aus Sicherheitsgründen auftreten, beispielsweise nach mehreren fehlgeschlagenen Anmeldeversuchen oder bei verdächtigen Aktivitäten. Kontaktiere den Kundensupport per Live-Chat oder E-Mail an support@westace.com, um dein Konto prüfen zu lassen.</p>
    </div>
  </section>

  <!-- Anmelde-FAQ -->
  <section class="content-section" id="login-faq">
    <div class="container container--narrow">
      <h2>Anmelde-FAQ</h2>

      <details class="faq-item">
        <summary>Was benötige ich zur Anmeldung?</summary>
        <div class="faq-answer">
          <p>Du benötigst die E-Mail-Adresse und das Passwort, die du bei der Registrierung erstellt hast. Falls du dein Passwort vergessen hast, klicke auf "Passwort vergessen?" im Anmeldeformular, um einen Reset-Link per E-Mail zu erhalten.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wird die Seite mich beim nächsten Besuch wiedererkennen?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> nutzt Cookies, um wiederkehrende Spieler zu erkennen. Falls du dich zuvor auf demselben Gerät und Browser angemeldet hast, wird deine E-Mail-Adresse möglicherweise vorausgefüllt. Aus Sicherheitsgründen musst du jedoch weiterhin dein Passwort eingeben. Das Löschen von Browser-Cookies oder die Nutzung des privaten Browsermodus erfordert die erneute Eingabe deiner vollständigen Anmeldedaten.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mein Konto ist gesperrt. Was soll ich tun?</summary>
        <div class="faq-answer">
          <p>Kontosperrungen können nach mehreren fehlgeschlagenen Anmeldeversuchen oder aufgrund verdächtiger Aktivitäten auftreten. Kontaktiere den Kundensupport per Live-Chat oder E-Mail an support@westace.com, damit dein Konto überprüft und entsperrt werden kann.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wie ändere ich mein Passwort?</summary>
        <div class="faq-answer">
          <p>Nach der Anmeldung gehe in die Kontoeinstellungen, um dein Passwort zu aktualisieren. Falls du dich nicht einloggen kannst, nutze die Passwort-Reset-Funktion auf der Anmeldeseite.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Welche Angaben sind für die Registrierung erforderlich?</summary>
        <div class="faq-answer">
          <p>Die Registrierung erfordert eine E-Mail-Adresse, ein Passwort, vollständigen Namen, Geburtsdatum, Telefonnummer, Adresse, Land und bevorzugte Währung. Diese Angaben werden für die Identitätsverifizierung und die Einhaltung gesetzlicher Vorschriften benötigt.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Gibt es eine mobile App für <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Es ist keine dedizierte App verfügbar, aber die Website ist vollständig für mobile Geräte optimiert. Öffne einfach <?php echo SITE_NAME; ?> in deinem mobilen Browser und melde dich wie gewohnt an. Alle Spiele, Sportwetten und Funktionen sind auf dem Mobilgerät zugänglich.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
