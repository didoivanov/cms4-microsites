<?php
/**
 * Auszahlungsseite - WestAce (Deutsch / DE)
 */
$page_title = 'WestAce Auszahlung - Zahlungsmethoden, Limits &amp; Bearbeitungszeiten';
$page_description = 'Alles über Auszahlungen bei ' . SITE_NAME . ' Casino: Zahlungsmethoden, Bearbeitungszeiten, tägliche und monatliche Limits, KYC-Verifizierung und Tipps für schnellere Auszahlungen.';
$current_page = 'withdrawal';
$lang_prefix = '/de';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Auszahlung &amp; Gewinnauszahlung';
$hero_description = 'Wie du deine Gewinne auszahlst, welche Methoden verfügbar sind, Bearbeitungszeiten, Limits und was du beim Verifizierungsprozess erwartest kannst.';
$hero_cta = 'Jetzt Spielen';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Überblick -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Auszahlungen im Überblick</h2>
      <p>Auszahlungen bei <?php echo SITE_NAME; ?> sind unkompliziert und gebührenfrei. Alle Auszahlungsanfragen werden je nach Zahlungsmethode innerhalb von 24 bis 72 Stunden bearbeitet. Die Gelder werden wenn möglich auf dieselbe Methode zurückgebucht, die du für deine Einzahlung genutzt hast. Vor der ersten Auszahlung muss die KYC-Verifizierung abgeschlossen sein.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Mindestbetrag</h4>
          <p>10 &euro; für alle Zahlungsmethoden. Beträge unterhalb dieser Grenze können nicht verarbeitet werden.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Bearbeitungszeit</h4>
          <p>24-72 Stunden für die meisten Methoden. Banküberweisungen können 1-3 Werktage dauern.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Auszahlungslimits</h4>
          <p>500 &euro; pro Tag, 7.000 &euro; pro Monat. VIP-Mitglieder können höhere Limits beantragen.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Zahlungsmethoden -->
  <section class="content-section content-section--alt" id="methods">
    <div class="container">
      <h2>Zahlungsmethoden</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Die folgende Tabelle zeigt alle Ein- und Auszahlungsoptionen bei <?php echo SITE_NAME; ?>. Auszahlungen werden wenn möglich auf die ursprüngliche Einzahlungsmethode vorgenommen. Alle Ein- und Auszahlungen sind von unserer Seite gebührenfrei.</p>
          <p>Für deutsche Spieler stehen neben den internationalen Methoden auch Sofort (Klarna), Giropay sowie Visa und Mastercard zur Verfügung.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-payments-screen.png" alt="<?php echo SITE_NAME; ?> Casino Einzahlungs- und Auszahlungsmethoden einschließlich Visa, Mastercard, Sofort, Skrill und Krypto" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div class="data-table-wrap">
        <table class="data-table">
          <thead>
            <tr>
              <th>Methode</th>
              <th>Min. Einzahlung</th>
              <th>Max. Einzahlung</th>
              <th>Min. Auszahlung</th>
              <th>Max. Auszahlung</th>
              <th>Bearbeitungszeit</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Sofort / Klarna</td>
              <td>10 &euro;</td>
              <td>2.000 &euro;</td>
              <td>10 &euro;</td>
              <td>3.000 &euro;</td>
              <td>24-72 Stunden</td>
            </tr>
            <tr>
              <td>Giropay</td>
              <td>10 &euro;</td>
              <td>2.000 &euro;</td>
              <td colspan="2">Nur Einzahlung</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Mastercard</td>
              <td>10 &euro;</td>
              <td>2.000 &euro;</td>
              <td>10 &euro;</td>
              <td>3.000 &euro;</td>
              <td>24-72 Stunden</td>
            </tr>
            <tr>
              <td>Visa</td>
              <td colspan="2">Nur Auszahlung</td>
              <td>10 &euro;</td>
              <td>3.000 &euro;</td>
              <td>24-72 Stunden</td>
            </tr>
            <tr>
              <td>Banküberweisung</td>
              <td colspan="2">Nur Auszahlung</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>1-3 Werktage</td>
            </tr>
            <tr>
              <td>Skrill</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 Stunden</td>
            </tr>
            <tr>
              <td>Neteller</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td colspan="2">Nur Einzahlung</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Paysafecard</td>
              <td>10 &euro;</td>
              <td>1.000 &euro;</td>
              <td colspan="2">Nur Einzahlung</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Bitcoin (BTC)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 Stunden</td>
            </tr>
            <tr>
              <td>Ethereum (ETH)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 Stunden</td>
            </tr>
            <tr>
              <td>Tether (USDT)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 Stunden</td>
            </tr>
            <tr>
              <td>Litecoin (LTC)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 Stunden</td>
            </tr>
            <tr>
              <td>Ripple (XRP)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 Stunden</td>
            </tr>
            <tr>
              <td>USD Coin (USDC)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 Stunden</td>
            </tr>
            <tr>
              <td>Bitcoin Cash (BCH)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 Stunden</td>
            </tr>
            <tr>
              <td>Dogecoin (DOGE)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 Stunden</td>
            </tr>
            <tr>
              <td>Cardano (ADA)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 Stunden</td>
            </tr>
          </tbody>
        </table>
      </div>

      <p style="margin-top: var(--space-4);">Das genaue Angebot an Zahlungsmethoden kann je nach Region variieren. Krypto-Transaktionen benötigen nach der Casino-Verarbeitung zusätzlich Blockchain-Bestätigungen.</p>
    </div>
  </section>

  <!-- Umsatzbedingung für Einzahlungen -->
  <section class="content-section" id="rollover">
    <div class="container container--narrow">
      <h2>Einzahlungs-Umsatzbedingung</h2>
      <p><?php echo SITE_NAME; ?> verlangt eine einfache Umsatzbedingung (1x) auf alle Einzahlungen. Das bedeutet, du musst deine eingezahlten Mittel mindestens einmal umsetzen, bevor du eine Auszahlung beantragen kannst. Dies ist unabhängig von etwaigen Bonus-Umsatzbedingungen.</p>
      <p>Wird eine Auszahlung beantragt, ohne dass die 1x-Umsatzbedingung erfüllt ist, wird eine Gebühr abgezogen:</p>
      <ul>
        <li><strong>10 % Gebühr</strong> auf den Einzahlungsbetrag bei Auszahlungen per E-Wallet und Krypto</li>
        <li><strong>15 % Gebühr</strong> auf den Einzahlungsbetrag bei Auszahlungen per Bankkarte und Überweisung</li>
      </ul>
      <p>Um diese Kosten zu vermeiden, setze deine Einzahlung einfach einmal um, bevor du eine Auszahlung anforderst. Eine einzige Wettrunde in beliebiger Höhe reicht aus, um die Bedingung zu erfüllen.</p>
    </div>
  </section>

  <!-- Auszahlung beantragen -->
  <section class="content-section content-section--alt" id="how-to">
    <div class="container">
      <h2>So beantragst du eine Auszahlung</h2>
      <p>Folge diesen Schritten, um eine Auszahlung von deinem <?php echo SITE_NAME; ?>-Konto zu beantragen:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Aktive Umsatzbedingungen erfüllen.</strong> Wenn du einen Bonus beansprucht hast, müssen die vollständigen Umsatzbedingungen erfüllt sein, bevor du auszahlen kannst. Stelle außerdem sicher, dass die 1x-Einzahlungsumsatzbedingung erfüllt ist.
          </div>
        </li>
        <li>
          <div>
            <strong>Kasse öffnen.</strong> Navigiere in deinem Konto zum Auszahlungsbereich. Diesen findest du im Hauptmenü oder in den Kontoeinstellungen.
          </div>
        </li>
        <li>
          <div>
            <strong>Zahlungsmethode und Betrag auswählen.</strong> Wähle aus den verfügbaren Optionen und gib den gewünschten Auszahlungsbetrag ein. Der Mindestbetrag beträgt 10 &euro; für alle Methoden. Das Tageslimit beträgt 500 &euro;, das Monatslimit 7.000 &euro;.
          </div>
        </li>
        <li>
          <div>
            <strong>Auf Bearbeitung warten.</strong> <?php echo SITE_NAME; ?> bearbeitet Auszahlungen innerhalb von 24 bis 72 Stunden. Banküberweisungen können 1-3 Werktage dauern. Du wirst kontaktiert, falls zusätzliche Dokumente zur Verifizierung benötigt werden.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Kontoverifizierung (KYC) -->
  <section class="content-section" id="verification">
    <div class="container">
      <h2>Kontoverifizierung (KYC)</h2>
      <p><?php echo SITE_NAME; ?> verlangt eine Identitätsprüfung, bevor Auszahlungsanfragen genehmigt werden. Dies ist ein Standardverfahren zur Betrugsvorbeugung und zur Einhaltung von Geldwäschevorschriften. Dokumente werden innerhalb von 30 Tagen geprüft; der Verifizierungsprozess dauert nach der Einreichung bis zu 10 Tage.</p>

      <div class="two-col">
        <div>
          <h3>Erforderliche Dokumente</h3>
          <ul>
            <li><strong>Ausweisdokument</strong> - Reisepass, Führerschein oder Personalausweis</li>
            <li><strong>Selfie mit Ausweisdokument</strong> - ein Foto von dir mit dem Ausweisdokument in der Hand</li>
            <li><strong>Adressnachweis</strong> - eine Versorgungs- oder Kontoauszugsrechnung der letzten 3 Monate</li>
            <li><strong>Herkunftsnachweis der Gelder</strong> - Dokument, das zeigt, woher deine Spielgelder stammen (Anti-Geldwäsche-Anforderung)</li>
          </ul>
          <p>Du hast 30 Tage Zeit, die angeforderten Dokumente einzureichen. Dein Konto kann eingeschränkt sein, bis die Verifizierung abgeschlossen ist.</p>
        </div>
        <div>
          <h3>Tipps für eine schnellere Verifizierung</h3>
          <ul>
            <li>Lade deine Dokumente direkt bei der Registrierung hoch, anstatt auf deine erste Auszahlung zu warten</li>
            <li>Stelle sicher, dass alle vier Ecken deines Ausweises auf dem Foto sichtbar sind</li>
            <li>Beim Selfie müssen sowohl dein Gesicht als auch der Text des Ausweises gut lesbar sein</li>
            <li>Verwende eine aktuelle Strom- oder Gasrechnung oder einen Kontoauszug als Adressnachweis</li>
            <li>Falls Dokumente abgelehnt werden, prüfe, ob die Bilder unscharf sind oder die Dokumente abgelaufen sind</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Tipps für schnellere Auszahlungen -->
  <section class="content-section content-section--alt" id="tips">
    <div class="container container--narrow">
      <h2>Tipps für schnellere Auszahlungen</h2>

      <h3>1. E-Wallets oder Kryptowährungen wählen</h3>
      <p>Skrill und Krypto-Optionen wie Bitcoin, Ethereum und Tether werden in der Regel am schnellsten bearbeitet. Wer Wert auf Schnelligkeit legt, sollte die Einzahlung mit einer dieser Methoden vornehmen, damit die Auszahlung über denselben Weg zurückgezahlt werden kann.</p>

      <h3>2. Konto frühzeitig verifizieren</h3>
      <p>Warte nicht bis zur ersten Auszahlung mit der Einreichung deiner Dokumente. Lade Ausweis, Selfie, Adressnachweis und Herkunftsnachweis der Gelder direkt bei der Registrierung hoch. So entstehen beim Auszahlen keine Verzögerungen durch ausstehende Verifizierungen.</p>

      <h3>3. Einzahlungsumsatz erfüllen</h3>
      <p>Stelle sicher, dass du deine Einzahlung mindestens einmal umgesetzt hast, bevor du eine Auszahlung beantragst. Wenn diese Bedingung nicht erfüllt ist, wird eine Gebühr von 10-15 % auf den Einzahlungsbetrag fällig.</p>

      <h3>4. Ursprüngliche Einzahlungsmethode verwenden</h3>
      <p><?php echo SITE_NAME; ?> zahlt Gelder bevorzugt auf dieselbe Methode zurück, die für die Einzahlung verwendet wurde. Die Nutzung einer anderen Methode kann zusätzliche Prüfungen auslösen und den Prozess verlangsamen.</p>
    </div>
  </section>

  <!-- Gebühren -->
  <section class="content-section" id="fees">
    <div class="container container--narrow">
      <h2>Auszahlungsgebühren</h2>
      <p><?php echo SITE_NAME; ?> erhebt keine Gebühren für Ein- oder Auszahlungen. Dein Zahlungsanbieter oder deine Bank kann jedoch eigene Transaktionsgebühren, Währungsumrechnungskosten oder Zwischenbankgebühren erheben. Erkundige dich bei deinem Zahlungsanbieter nach möglichen Drittanbietergebühren.</p>
      <p>Hinweis: Wird eine Auszahlung ohne Erfüllung der 1x-Einzahlungsumsatzbedingung beantragt, wird eine Gebühr von 10 % (15 % bei Bankkarte/Überweisung) auf den Einzahlungsbetrag berechnet. Dabei handelt es sich nicht um eine Auszahlungsgebühr, sondern um eine Umsatzstrafe.</p>
    </div>
  </section>

  <!-- Häufige Fragen zur Auszahlung -->
  <section class="content-section content-section--alt" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>Häufige Fragen zur Auszahlung</h2>

      <details class="faq-item">
        <summary>Wie lange dauert eine Auszahlung bei <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Die meisten Auszahlungen werden innerhalb von 24 bis 72 Stunden bearbeitet. E-Wallets und Kryptowährungen sind in der Regel am schnellsten. Banküberweisungen können auf Anbieterseite zusätzlich 1-3 Werktage dauern.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Was ist der Mindestbetrag für Auszahlungen bei <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Der Mindestauszahlungsbetrag beträgt 10 &euro; für alle Zahlungsmethoden.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Welche Auszahlungslimits gelten?</summary>
        <div class="faq-answer">
          <p>Die Standardlimits betragen 500 &euro; pro Tag und 7.000 &euro; pro Monat. Die Limits pro Transaktion hängen von der Methode ab: Visa und Mastercard sind auf 3.000 &euro; pro Transaktion begrenzt, während Skrill, Banküberweisungen und alle Kryptowährungen bis zu 5.000 &euro; erlauben. VIP-Spieler können höhere Limits beantragen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Warum wurde meine Auszahlung abgelehnt?</summary>
        <div class="faq-answer">
          <p>Häufige Gründe sind: unerfüllte Umsatzbedingungen, nicht erfüllte Einzahlungsumsatzbedingung, unverifiziertes Konto, Überschreitung der Tages- oder Monatslimits oder Auszahlungsanfrage auf eine Methode, die nicht der Einzahlungsmethode entspricht. Kontaktiere den Support für Informationen zu deinem konkreten Fall.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Fallen Auszahlungsgebühren an?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> erhebt keine Auszahlungsgebühren. Dein Zahlungsanbieter kann eigene Gebühren erheben. Wird eine Auszahlung ohne Erfüllung der 1x-Einzahlungsumsatzbedingung beantragt, gilt eine Gebühr von 10 % (15 % bei Bankkarte/Überweisung) auf den Einzahlungsbetrag.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kann ich eine ausstehende Auszahlung stornieren?</summary>
        <div class="faq-answer">
          <p>Je nach Bearbeitungsstand kann eine ausstehende Auszahlungsanfrage möglicherweise storniert werden. Kontaktiere den Kundensupport über den Live-Chat, um Hilfe zu erhalten.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
