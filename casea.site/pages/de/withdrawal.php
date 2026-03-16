<?php
/**
 * Withdrawal Page - German
 */
$page_title = SITE_NAME . ' Auszahlung - Methoden, Limits & Bearbeitungszeit';
$page_description = 'Alles über Auszahlungen bei ' . SITE_NAME . ' Casino: Auszahlungsmethoden, Bearbeitungszeit bis zu 72 Stunden, tägliche und monatliche Limits, KYC-Verifizierung und Tipps für schnellere Auszahlungen.';
$current_page = 'withdrawal';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Auszahlung &amp; Gewinnauszahlung';
$hero_description = 'So zahlst du deine Gewinne aus: verfügbare Methoden, Bearbeitungszeiten, Limits und was dich beim Verifizierungsprozess erwartet.';
$hero_cta = 'Jetzt spielen';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Auszahlung im Überblick</h2>
      <p>Deine Gewinne bei <?php echo SITE_NAME; ?> auszahlen zu lassen ist unkompliziert, sobald du die Regeln kennst. Auszahlungen werden in der Regel innerhalb von 72 Stunden bearbeitet, und wenn möglich sendet das Casino die Gelder an dieselbe Methode zurück, die du für deine Einzahlung verwendet hast. Falls diese Methode keine eingehenden Transaktionen unterstützt, wird der Betrag stattdessen auf dein Bankkonto überwiesen.</p>
      <p>Vor deiner ersten Auszahlung musst du eine KYC-Verifizierung (Know Your Customer) abschließen und sicherstellen, dass du die Mindest-Einzahlungsumsatzanforderung erfüllt hast.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Mindestauszahlung</h4>
          <p>EUR 10 bei allen Zahlungsmethoden. Beträge unter diesem Wert können nicht bearbeitet werden.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Tageslimit</h4>
          <p>EUR 500 für Standardkonten. VIP-Mitglieder können bis zu EUR 1.500 pro Tag auszahlen.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Monatslimit</h4>
          <p>EUR 7.000 für neue Spieler. VIP-Mitglieder haben ein Maximum von EUR 20.000 pro Monat.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Payment Methods Table -->
  <section class="content-section content-section--alt" id="methods">
    <div class="container">
      <h2>Auszahlungsmethoden</h2>
      <p>Die verfügbaren Auszahlungsmethoden hängen von deinem Land und deiner Einzahlungsmethode ab. Generell bearbeitet <?php echo SITE_NAME; ?> Auszahlungen nach Möglichkeit über die ursprüngliche Einzahlungsmethode.</p>

      <table class="data-table">
        <thead>
          <tr>
            <th>Methode</th>
            <th>Mindestauszahlung</th>
            <th>Bearbeitungszeit</th>
            <th>Hinweise</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Visa / Mastercard</td>
            <td>&euro;10</td>
            <td>1-3 Werktage</td>
            <td>Rücküberweisung auf die für die Einzahlung verwendete Karte</td>
          </tr>
          <tr>
            <td>Skrill</td>
            <td>&euro;10</td>
            <td>Bis zu 24 Stunden</td>
            <td>Schnelle Bearbeitung, weitgehend verfügbar</td>
          </tr>
          <tr>
            <td>Neteller</td>
            <td>&euro;10</td>
            <td>Bis zu 24 Stunden</td>
            <td>In den meisten Regionen verfügbar</td>
          </tr>
          <tr>
            <td>Banküberweisung</td>
            <td>&euro;20</td>
            <td>2-5 Werktage</td>
            <td>Wird als Alternative genutzt, wenn die ursprüngliche Methode nicht verfügbar ist</td>
          </tr>
          <tr>
            <td>Bitcoin</td>
            <td>&euro;10</td>
            <td>Bis zu 24 Stunden</td>
            <td>Erfordert Blockchain-Bestätigungen nach der Casino-Bearbeitung</td>
          </tr>
          <tr>
            <td>Ethereum</td>
            <td>&euro;10</td>
            <td>Bis zu 24 Stunden</td>
            <td>Krypto-Auszahlungen gehören zu den schnellsten</td>
          </tr>
          <tr>
            <td>Litecoin / Tether / Ripple</td>
            <td>&euro;10</td>
            <td>Bis zu 24 Stunden</td>
            <td>Verfügbarkeit für deine Region prüfen</td>
          </tr>
        </tbody>
      </table>

      <p>Akzeptierte Währungen für Transaktionen: EUR, USD, CAD, AUD, CHF, HUF, NOK, PLN, NZD, CZK, BRL, CLP und PEN.</p>
    </div>
  </section>

  <!-- How to Withdraw -->
  <section class="content-section" id="how-to">
    <div class="container">
      <h2>So tätigst du eine Auszahlung</h2>
      <p>Befolge diese Schritte, um eine Auszahlung von deinem <?php echo SITE_NAME; ?> Konto anzufordern:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Erfülle die Umsatzanforderung.</strong> Vor deiner ersten Auszahlung muss deine Einzahlung mindestens 1x umgesetzt werden. Wenn du einen Bonus beansprucht hast, erfülle zuerst die vollständige Umsatzanforderung. Andernfalls kann eine Auszahlungsgebühr von 10% anfallen.
          </div>
        </li>
        <li>
          <div>
            <strong>Öffne die Kasse.</strong> Navigiere zum Auszahlungsbereich in deinem Konto. Du findest ihn im Hauptmenü oder in den Kontoeinstellungen.
          </div>
        </li>
        <li>
          <div>
            <strong>Wähle deine Zahlungsmethode und den Betrag.</strong> Wähle aus den verfügbaren Optionen und gib den gewünschten Auszahlungsbetrag ein. Stelle sicher, dass er innerhalb der erlaubten Limits liegt.
          </div>
        </li>
        <li>
          <div>
            <strong>Warte auf die Bearbeitung.</strong> Das Casino prüft jede Anfrage und bearbeitet Auszahlungen in der Regel innerhalb von 3 Werktagen. Du wirst kontaktiert, falls zusätzliche Dokumente benötigt werden.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- KYC Verification -->
  <section class="content-section content-section--alt" id="verification">
    <div class="container">
      <h2>Kontoverifizierung (KYC)</h2>
      <p><?php echo SITE_NAME; ?> verlangt eine Identitätsprüfung, bevor Auszahlungsanfragen genehmigt werden. Dies ist ein branchenübliches Verfahren zur Betrugsprävention und Einhaltung der Anti-Geldwäsche-Vorschriften.</p>

      <div class="two-col">
        <div>
          <h3>Erforderliche Dokumente</h3>
          <ul>
            <li>Ein amtlicher Lichtbildausweis (Reisepass, Führerschein oder Personalausweis)</li>
            <li>Adressnachweis (Versorgungsrechnung oder Kontoauszug, nicht älter als 3 Monate)</li>
            <li>Nachweis der Zahlungsmethode (Foto der Kredit-/Debitkarte, E-Wallet-Screenshot oder Krypto-Wallet-Bestätigung)</li>
          </ul>
          <p>Du hast 30 Tage ab der ersten Dokumentenanforderung Zeit, deine Unterlagen einzureichen. Wenn du sie innerhalb dieser Frist nicht bereitstellst, kann dein Konto geschlossen werden.</p>
        </div>
        <div>
          <h3>Verifizierungszeitraum</h3>
          <p>Die standardmäßige Bearbeitungszeit für die Dokumentenprüfung beträgt bis zu 10 Werktage, kann in Ausnahmefällen aber auch länger dauern. Das Casino kann Verifizierungsdienste von Drittanbietern nutzen oder zusätzliche Überprüfungen wie einen Videoanruf oder eine telefonische Verifizierung anfordern.</p>
          <p>Du kannst Dokumente im Bereich „Einstellungen - Kontoverifizierung" deines Profils hochladen. Mache klare, gut beleuchtete Fotos, um Verzögerungen durch unleserliche Dokumente zu vermeiden.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Faster Payouts -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Tipps für schnellere Auszahlungen</h2>

      <div class="highlight-box">
        <h4>Beschleunige deine <?php echo SITE_NAME; ?> Auszahlung</h4>
        <p>Befolge diese Tipps, um Verzögerungen bei der Auszahlung zu minimieren und deine Gewinne schneller zu erhalten.</p>
      </div>

      <h3>1. Wähle E-Wallets oder Kryptowährung</h3>
      <p>Skrill, Neteller und Krypto-Optionen wie Bitcoin oder Ethereum werden in der Regel schneller bearbeitet als Karten- oder Banküberweisungen. Wenn Geschwindigkeit Priorität hat, zahle mit einer dieser Methoden ein, damit deine Auszahlung über denselben Kanal zurückgesendet werden kann.</p>

      <h3>2. Verifiziere dein Konto frühzeitig</h3>
      <p>Warte nicht bis zu deiner ersten Auszahlung, um deine Dokumente einzureichen. Lade deinen Ausweis, Adressnachweis und die Zahlungsmethoden-Verifizierung direkt nach der Registrierung hoch. So gibt es keine Verzögerungen durch eine ausstehende Verifizierung, wenn du auszahlen möchtest.</p>

      <h3>3. Erfülle den Umsatz vor der Anfrage</h3>
      <p>Wenn du einen aktiven Bonus hast, stelle sicher, dass alle Umsatzanforderungen vollständig erfüllt sind. Eine Auszahlungsanfrage bei noch aktivem Bonus macht den Bonus und alle damit verbundenen Gewinne ungültig. Wenn du nur mit eingezahlten Geldern gespielt hast, denke an den 1x Umsatz, der erfüllt werden muss, um die zusätzliche Gebühr zu vermeiden.</p>

      <h3>4. Bleibe innerhalb der Limits</h3>
      <p>Auszahlungsanfragen, die das Tages- oder Monatslimit überschreiten, werden abgelehnt. Plane deine Auszahlungen entsprechend: EUR 500 pro Tag für Standardkonten, EUR 1.500 pro Tag für VIP-Mitglieder.</p>

      <h3>5. Nutze deine ursprüngliche Einzahlungsmethode</h3>
      <p><?php echo SITE_NAME; ?> bevorzugt die Rücküberweisung an dieselbe Methode, die du für deine Einzahlung verwendet hast. Die Nutzung einer anderen Methode kann zusätzliche Prüfungen auslösen und den Prozess verlangsamen.</p>
    </div>
  </section>

  <!-- Withdrawal FAQ -->
  <section class="content-section content-section--alt" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>Auszahlungs-FAQ</h2>

      <details class="faq-item">
        <summary>Wie lange dauert eine Auszahlung bei <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Auszahlungen werden innerhalb von 72 Stunden (3 Werktagen) bearbeitet. E-Wallets und Kryptowährungen sind in der Regel am schnellsten und werden oft innerhalb von 24 Stunden nach der Casino-Bearbeitung abgeschlossen. Banküberweisungen und Kartenzahlungen können auf Anbieterseite weitere 1-5 Werktage in Anspruch nehmen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wie hoch ist die Mindestauszahlung bei <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Die Mindestauszahlung beträgt EUR 10 für alle Zahlungsmethoden. Beträge darunter können nicht angefordert werden.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wie viel kann ich pro Monat maximal auszahlen?</summary>
        <div class="faq-answer">
          <p>Standardspieler können bis zu EUR 7.000 pro Monat auszahlen. VIP-Mitglieder haben Zugang zu einem erhöhten Limit von EUR 20.000 monatlich. Tägliche Limits gelten ebenfalls: EUR 500 für Standardkonten, EUR 1.500 für VIP.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Warum wurde meine Auszahlung abgelehnt?</summary>
        <div class="faq-answer">
          <p>Häufige Gründe sind: unvollständige Umsatzanforderungen, nicht verifiziertes Konto, Überschreitung der Tages- oder Monatslimits oder eine Auszahlungsanfrage an eine Methode, die nicht mit deiner Einzahlung übereinstimmt. Kontaktiere den Support für Details zu deinem Fall.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Gibt es eine Gebühr für Auszahlungen?</summary>
        <div class="faq-answer">
          <p>Es gibt keine standardmäßige Auszahlungsgebühr. Wenn du jedoch den 1x Einzahlungsumsatz vor der Auszahlung nicht erfüllst, kann eine Gebühr von 10% erhoben werden. Erfülle immer zuerst den Mindestumsatz, um diese Gebühr zu vermeiden.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kann ich eine ausstehende Auszahlung stornieren?</summary>
        <div class="faq-answer">
          <p>Je nach Bearbeitungsstatus kannst du eine ausstehende Auszahlungsanfrage möglicherweise stornieren. Kontaktiere den Kundenservice per Live-Chat für Unterstützung bei der Stornierung.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
