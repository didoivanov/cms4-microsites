<?php
/**
 * Cookie-Richtlinie - WestAce DE
 */
$lang_prefix = '/de';
$page_title = 'Cookie-Richtlinie - ' . SITE_NAME_SHORT;
$page_description = 'Cookie-Richtlinie für ' . DOMAIN . '. Erfahren Sie, welche Cookies wir verwenden und wie Sie diese verwalten können.';
$current_page = 'cookies';

require_once __DIR__ . '/../../includes/header.php';
?>

<main>
  <section class="content-section legal-page">
    <div class="container container--narrow">
      <h1>Cookie-Richtlinie</h1>
      <p class="legal-updated">Zuletzt aktualisiert: 18. März 2026</p>

      <h2>Was sind Cookies?</h2>
      <p>Cookies sind kleine Textdateien, die auf Ihrem Gerät gespeichert werden, wenn Sie eine Website besuchen. Sie werden häufig eingesetzt, damit Websites ordnungsgemäß funktionieren, Ihre Einstellungen speichern und anonymisierte Nutzungsdaten an Website-Betreiber übermitteln.</p>

      <h2>Wie wir Cookies verwenden</h2>
      <p><?php echo DOMAIN; ?> ist eine schlanke Affiliate-Bewertungswebsite. Wir nutzen Cookies nicht für Werbung, Personalisierung oder websiteübergreifendes Tracking. Die auf dieser Website verwendeten Cookies fallen in drei Kategorien:</p>

      <h3>Notwendige Cookies</h3>
      <p>Diese Cookies sind für den ordnungsgemäßen Betrieb der Website erforderlich. Dazu gehören Cookies unseres Hosting-Anbieters Cloudflare für Sicherheit und Performance, wie zum Beispiel Bot-Erkennung und DDoS-Schutz. Sie können nicht deaktiviert werden, ohne die Website-Funktionalität zu beeinträchtigen.</p>
      <table class="data-table">
        <thead>
          <tr><th>Cookie</th><th>Anbieter</th><th>Zweck</th><th>Speicherdauer</th></tr>
        </thead>
        <tbody>
          <tr><td>__cf_bm</td><td>Cloudflare</td><td>Bot-Management und Sicherheit</td><td>30 Minuten</td></tr>
          <tr><td>cf_clearance</td><td>Cloudflare</td><td>Sicherheitsüberprüfung</td><td>Bis zu 1 Jahr</td></tr>
        </tbody>
      </table>

      <h3>Analyse-Cookies</h3>
      <p>Wir verwenden möglicherweise Google Analytics, um zu verstehen, wie Besucher mit der Website interagieren - zum Beispiel welche Seiten besonders beliebt sind und wie Besucher auf die Website gelangen. Diese Daten sind anonymisiert und aggregiert. Es werden keine personenbezogenen Daten erhoben.</p>
      <table class="data-table">
        <thead>
          <tr><th>Cookie</th><th>Anbieter</th><th>Zweck</th><th>Speicherdauer</th></tr>
        </thead>
        <tbody>
          <tr><td>_ga</td><td>Google Analytics</td><td>Unterscheidung eindeutiger Besucher</td><td>2 Jahre</td></tr>
          <tr><td>_ga_*</td><td>Google Analytics</td><td>Aufrechterhaltung des Sitzungsstatus</td><td>2 Jahre</td></tr>
        </tbody>
      </table>

      <h3>Marketing- und Affiliate-Cookies</h3>
      <p>Wir setzen selbst keine Marketing-Cookies. Wenn Sie jedoch einen Affiliate-Link auf unserer Website anklicken, kann die Zielplattform Cookies setzen, um die Weiterleitung zu verfolgen. Diese Cookies werden vom jeweiligen Drittanbieter gesetzt und unterliegen dessen Cookie-Richtlinie, nicht unserer.</p>

      <h2>Drittanbieter-Cookies</h2>
      <p>Wenn Sie einen Affiliate-Link anklicken und unsere Website verlassen, kann die Zielwebsite eigene Cookies setzen. Darauf haben wir keinen Einfluss. Bitte lesen Sie die Cookie-Richtlinie des jeweiligen Casino-Betreibers für weitere Informationen.</p>

      <h2>Cookie-Einwilligung</h2>
      <p>Gemäß der EU-ePrivacy-Richtlinie und der DSGVO sind wir verpflichtet, Ihre Einwilligung einzuholen, bevor wir nicht notwendige Cookies auf Ihrem Gerät platzieren. Notwendige Cookies, die für den Betrieb der Website unbedingt erforderlich sind, benötigen keine Einwilligung. Durch die weitere Nutzung dieser Website willigen Sie in die Verwendung von Analyse-Cookies wie oben beschrieben ein. Sie können Ihre Einwilligung jederzeit durch Änderung Ihrer Browser-Einstellungen widerrufen.</p>

      <h2>Cookie-Verwaltung</h2>
      <p>Sie können Cookies über Ihre Browser-Einstellungen steuern und löschen. Die meisten Browser ermöglichen Ihnen:</p>
      <ul>
        <li>Gespeicherte Cookies anzuzeigen und einzeln zu löschen</li>
        <li>Drittanbieter-Cookies zu blockieren</li>
        <li>Alle Cookies von bestimmten Websites zu blockieren</li>
        <li>Alle Cookies vollständig zu blockieren</li>
        <li>Alle Cookies beim Schließen des Browsers zu löschen</li>
      </ul>
      <p>Das Deaktivieren von Cookies kann die Website-Funktionalität beeinträchtigen, insbesondere die von Cloudflare bereitgestellten Sicherheitsfunktionen.</p>
      <p>Anleitungen zur Cookie-Verwaltung in Ihrem Browser finden Sie hier:</p>
      <ul>
        <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener noreferrer">Google Chrome</a></li>
        <li><a href="https://support.mozilla.org/de/kb/cookies-informationen-websites-speichern" target="_blank" rel="noopener noreferrer">Mozilla Firefox</a></li>
        <li><a href="https://support.apple.com/de-de/guide/safari/sfri11471/mac" target="_blank" rel="noopener noreferrer">Safari</a></li>
        <li><a href="https://support.microsoft.com/de-de/microsoft-edge/cookies-in-microsoft-edge-l%C3%B6schen-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank" rel="noopener noreferrer">Microsoft Edge</a></li>
      </ul>

      <h2>Änderungen dieser Richtlinie</h2>
      <p>Wir können diese Cookie-Richtlinie von Zeit zu Zeit aktualisieren. Änderungen werden auf dieser Seite mit einem aktualisierten Datum veröffentlicht.</p>

      <h2>Kontakt</h2>
      <p>Bei Fragen zu unserer Verwendung von Cookies kontaktieren Sie uns bitte unter <a href="mailto:info@westace.site">info@westace.site</a> oder besuchen Sie unsere <a href="<?php echo $lang_prefix; ?>/support">Hilfe</a>-Seite.</p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
