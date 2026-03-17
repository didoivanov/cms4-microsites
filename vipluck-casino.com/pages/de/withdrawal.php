<?php
/**
 * Withdrawal Page – German
 */
$page_title = SITE_NAME . ' Auszahlung - Methoden, Limits & Bearbeitungszeit';
$page_description = 'Alles über Auszahlungen bei ' . SITE_NAME . ' Casino: Auszahlungsmethoden, bis zu 7 Werktage Bearbeitungszeit, tägliche und monatliche Limits, KYC-Verifizierung und Tipps für schnellere Auszahlungen.';
$current_page = 'withdrawal';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Auszahlung &amp; Gewinnauszahlung';
$hero_description = 'So lassen Sie sich Ihre Gewinne auszahlen: verfügbare Methoden, Bearbeitungszeiten, Limits und was Sie bei der Verifizierung erwartet.';
$hero_cta = 'Jetzt spielen';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Auszahlung im Überblick</h2>
      <p>Gewinne bei <?php echo SITE_NAME; ?> auszahlen ist unkompliziert, wenn Sie die Regeln kennen. Wir bearbeiten Auszahlungsanträge innerhalb von 72 Stunden an Werktagen. Bitte beachten Sie: <?php echo SITE_NAME; ?> bearbeitet keine Auszahlungen am Wochenende. Anträge, die Freitagabend bis Sonntag eingehen, werden ab dem folgenden Montag bearbeitet.</p>
      <p>Wann immer möglich, überweisen wir das Geld auf dieselbe Zahlungsmethode, die Sie für Ihre Einzahlung verwendet haben. Falls diese Methode keine eingehenden Transaktionen unterstützt, wird der Betrag auf Ihr Bankkonto überwiesen. Vor Ihrer ersten Auszahlung müssen Sie die KYC-Verifizierung abschliessen und die Mindest-Umsatzanforderung für Einzahlungen erfüllen.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Mindestauszahlung</h4>
          <p>&euro;20 bei allen Zahlungsmethoden. Beträge unter diesem Schwellenwert können nicht bearbeitet werden.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Tageslimit</h4>
          <p>&euro;700 für Standardkonten. VIP-Mitglieder können bis zu &euro;1.500 pro Tag auszahlen.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Monatslimit</h4>
          <p>&euro;9.000 für Standardspieler. VIP-Mitglieder haben Wochenlimits von &euro;7.000 und Monatslimits von &euro;28.000.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Payment Methods Table -->
  <section class="content-section content-section--alt" id="methods">
    <div class="container">
      <h2>Auszahlungsmethoden</h2>
      <div class="two-col" style="align-items:flex-start;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p style="margin-top:0">Die verfügbaren Auszahlungsmethoden hängen von Ihrem Land und Ihrer Einzahlungsmethode ab. Grundsätzlich zahlt <?php echo SITE_NAME; ?> nach Möglichkeit auf die ursprüngliche Einzahlungsmethode aus.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-payments.png" alt="<?php echo SITE_NAME; ?> Casino Zahlungsmethoden: Jeton, MiFinity, eZeeWallet, Bitcoin, Ethereum, Tether, Ripple und mehr" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>

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
            <td>&euro;20</td>
            <td>1-5 Werktage</td>
            <td>Rücküberweisung auf die für die Einzahlung genutzte Karte</td>
          </tr>
          <tr>
            <td>Skrill</td>
            <td>&euro;20</td>
            <td>Bis zu 24 Stunden</td>
            <td>Schnelle Bearbeitung, weit verbreitet</td>
          </tr>
          <tr>
            <td>Neteller</td>
            <td>&euro;20</td>
            <td>Bis zu 24 Stunden</td>
            <td>In den meisten Regionen verfügbar</td>
          </tr>
          <tr>
            <td>Jeton</td>
            <td>&euro;20</td>
            <td>Bis zu 24 Stunden</td>
            <td>E-Wallet mit breiter Abdeckung</td>
          </tr>
          <tr>
            <td>MiFinity</td>
            <td>&euro;20</td>
            <td>Bis zu 24 Stunden</td>
            <td>Digitale Wallet für schnelle Auszahlungen</td>
          </tr>
          <tr>
            <td>eZeeWallet</td>
            <td>&euro;20</td>
            <td>Bis zu 24 Stunden</td>
            <td>Verfügbarkeit je nach Region prüfen</td>
          </tr>
          <tr>
            <td>Banküberweisung</td>
            <td>&euro;20</td>
            <td>3-7 Werktage</td>
            <td>Ersatzmethode, wenn die ursprüngliche Methode nicht verfügbar ist</td>
          </tr>
          <tr>
            <td>Bitcoin</td>
            <td>&euro;20</td>
            <td>Bis zu 24 Stunden</td>
            <td>Nach der Casino-Bearbeitung sind Blockchain-Bestätigungen erforderlich</td>
          </tr>
          <tr>
            <td>Ethereum</td>
            <td>&euro;20</td>
            <td>Bis zu 24 Stunden</td>
            <td>Gehört zu den schnellsten Auszahlungsoptionen</td>
          </tr>
          <tr>
            <td>Tether (USDT)</td>
            <td>&euro;20</td>
            <td>Bis zu 24 Stunden</td>
            <td>Stablecoin-Option mit minimalen Kursschwankungen</td>
          </tr>
          <tr>
            <td>Ripple (XRP)</td>
            <td>&euro;20</td>
            <td>Bis zu 24 Stunden</td>
            <td>Schnelle Blockchain-Abwicklung</td>
          </tr>
          <tr>
            <td>USD Coin (USDC)</td>
            <td>&euro;20</td>
            <td>Bis zu 24 Stunden</td>
            <td>Stablecoin-Alternative zu USDT</td>
          </tr>
          <tr>
            <td>Cardano (ADA)</td>
            <td>&euro;20</td>
            <td>Bis zu 24 Stunden</td>
            <td>Verfügbarkeit je nach Region prüfen</td>
          </tr>
          <tr>
            <td>Dogecoin</td>
            <td>&euro;20</td>
            <td>Bis zu 24 Stunden</td>
            <td>Krypto-Auszahlungen mit niedrigen Gebühren</td>
          </tr>
          <tr>
            <td>Litecoin</td>
            <td>&euro;20</td>
            <td>Bis zu 24 Stunden</td>
            <td>Schnellere Blockzeiten als Bitcoin</td>
          </tr>
          <tr>
            <td>Bitcoin Cash</td>
            <td>&euro;20</td>
            <td>Bis zu 24 Stunden</td>
            <td>Niedrigere Gebühren als Standard-Bitcoin</td>
          </tr>
          <tr>
            <td>Solana (SOL)</td>
            <td>&euro;20</td>
            <td>Bis zu 24 Stunden</td>
            <td>Schnelle Blockchain mit sehr niedrigen Gebühren</td>
          </tr>
        </tbody>
      </table>

      <p>Akzeptierte Währungen für Transaktionen: EUR, CHF, USD, CAD, AUD, NZD, PLN, BRL, NOK, ZAR, CZK, HUF und CLP.</p>
    </div>
  </section>

  <!-- How to Withdraw -->
  <section class="content-section" id="how-to">
    <div class="container">
      <h2>So funktioniert die Auszahlung</h2>
      <p>Folgen Sie diesen Schritten, um eine Auszahlung von Ihrem <?php echo SITE_NAME; ?>-Konto anzufordern:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Umsatzanforderung erfüllen.</strong> Vor Ihrer ersten Auszahlung muss Ihre Einzahlung mindestens 1x umgesetzt werden. Falls Sie einen Bonus beansprucht haben, erfüllen Sie zuerst die vollständige Umsatzanforderung. Andernfalls kann eine Bearbeitungsgebühr anfallen.
          </div>
        </li>
        <li>
          <div>
            <strong>Kasse öffnen.</strong> Navigieren Sie zum Auszahlungsbereich in Ihrem Konto. Sie finden ihn im Hauptmenü oder in den Kontoeinstellungen.
          </div>
        </li>
        <li>
          <div>
            <strong>Zahlungsmethode und Betrag wählen.</strong> Wählen Sie aus den verfügbaren Optionen und geben Sie den gewünschten Auszahlungsbetrag ein. Achten Sie darauf, dass er innerhalb der zulässigen Limits liegt.
          </div>
        </li>
        <li>
          <div>
            <strong>Bearbeitung abwarten.</strong> <?php echo SITE_NAME; ?> bearbeitet Auszahlungen nur an Werktagen (Montag bis Freitag). Rechnen Sie mit bis zu 72 Stunden für die Standardbearbeitung. Am Wochenende eingereichte Anträge werden ab Montag bearbeitet. Falls zusätzliche Dokumente benötigt werden, kontaktieren wir Sie.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- KYC Verification -->
  <section class="content-section content-section--alt" id="verification">
    <div class="container">
      <h2>Kontoverifizierung (KYC)</h2>
      <p><?php echo SITE_NAME; ?> verlangt eine Identitätsprüfung, bevor Auszahlungsanträge genehmigt werden. Das ist ein branchenübliches Verfahren zur Betrugsprävention und zur Einhaltung der Geldwäschevorschriften.</p>

      <div class="two-col">
        <div>
          <h3>Erforderliche Dokumente</h3>
          <ul>
            <li>Ein amtlicher Lichtbildausweis (Reisepass, Führerschein oder Personalausweis)</li>
            <li>Adressnachweis (Versorgerrechnung oder Kontoauszug, nicht älter als 3 Monate)</li>
            <li>Verifizierung der Zahlungsmethode (Foto der Kredit-/Debitkarte, E-Wallet-Screenshot oder Krypto-Wallet-Bestätigung)</li>
          </ul>
          <p>Sie haben 30 Tage ab der ersten Dokumentenanforderung Zeit, Ihre Unterlagen einzureichen. Falls Sie diese Frist nicht einhalten, kann Ihr Konto geschlossen werden.</p>
        </div>
        <div>
          <h3>Verifizierungs-Zeitrahmen</h3>
          <p>Die Standardbearbeitungszeit für die Dokumentenprüfung beträgt bis zu 10 Werktage, in Ausnahmefällen auch länger. Das Casino kann Drittanbieter-Verifizierungsdienste nutzen oder zusätzliche Prüfungen wie einen Videoanruf oder eine Telefonverifizierung anfordern.</p>
          <p>Dokumente können Sie im Bereich "Einstellungen - Kontoverifizierung" Ihres Profils hochladen. Machen Sie deutliche, gut beleuchtete Fotos, um Verzögerungen durch unleserliche Dokumente zu vermeiden.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Large Wins -->
  <section class="content-section" id="large-wins">
    <div class="container container--narrow">
      <h2>Hohe Gewinne &amp; verlängerte Bearbeitung</h2>
      <div class="highlight-box">
        <h4>Auszahlungen über &euro;5.000</h4>
        <p>Gewinne über &euro;5.000 können eine zusätzliche Prüfung erfordern und länger als die Standardbearbeitungszeit dauern. Das Casino behält sich vor, grosse Auszahlungen auf Basis der geltenden Tages- und Wochenlimits in mehreren Raten auszuzahlen. VIP-Mitglieder mit höheren Limits erhalten möglicherweise eine schnellere Bearbeitung bei grossen Beträgen.</p>
      </div>
      <p>Falls Ihre Auszahlung &euro;5.000 übersteigt, kann das <?php echo SITE_NAME; ?>-Team zusätzliche Verifizierungsdokumente anfordern oder eine erweiterte Prüfung durchführen. Das ist gängige Praxis bei grossen Transaktionen und dient dem Schutz sowohl des Spielers als auch des Casinos.</p>
    </div>
  </section>

  <!-- Tips for Faster Payouts -->
  <section class="content-section content-section--alt" id="tips">
    <div class="container container--narrow">
      <h2>Tipps für schnellere Auszahlungen</h2>

      <h3>1. E-Wallets oder Kryptowährungen wählen</h3>
      <p>Skrill, Neteller, Jeton, MiFinity und Krypto-Optionen wie Bitcoin, Ethereum oder Solana werden in der Regel schneller bearbeitet als Karten- oder Banküberweisungen. Mit 10 verschiedenen Kryptowährungen bietet <?php echo SITE_NAME; ?> eine der breitesten Krypto-Auszahlungsoptionen. Wenn Ihnen Geschwindigkeit wichtig ist, zahlen Sie mit einer dieser Methoden ein, damit Ihre Auszahlung über denselben Kanal erfolgen kann.</p>

      <h3>2. Konto frühzeitig verifizieren</h3>
      <p>Warten Sie nicht bis zur ersten Auszahlung, um Ihre Dokumente einzureichen. Laden Sie Ihren Ausweis, Adressnachweis und die Zahlungsmethoden-Verifizierung direkt nach der Registrierung hoch. So gibt es bei der Auszahlung keine Verzögerungen durch ausstehende Prüfungen.</p>

      <h3>3. Umsatzanforderungen vor der Anfrage erfüllen</h3>
      <p>Falls Sie einen aktiven Bonus haben, stellen Sie sicher, dass alle Umsatzanforderungen vollständig erfüllt sind. Eine Auszahlungsanfrage bei aktivem Bonus führt zum Verfall des Bonus und aller zugehörigen Gewinne. Wenn Sie nur mit eingezahltem Guthaben gespielt haben, denken Sie an den 1x-Umsatz, der erfüllt sein muss, um zusätzliche Gebühren zu vermeiden.</p>

      <h3>4. Innerhalb der Limits bleiben</h3>
      <p>Auszahlungsanträge, die das Tages- oder Monatslimit überschreiten, werden abgelehnt. Planen Sie Ihre Auszahlungen entsprechend: &euro;700 pro Tag für Standardkonten, &euro;1.500 pro Tag für VIP-Mitglieder. Wochenlimits liegen bei &euro;2.250 (Standard) und &euro;7.000 (VIP).</p>

      <h3>5. Anträge an Werktagen einreichen</h3>
      <p><?php echo SITE_NAME; ?> bearbeitet keine Auszahlungen am Wochenende. Wenn Sie Ihren Antrag früh in der Woche einreichen, hat das Team die meiste Zeit für die Bearbeitung vor dem Wochenende. Anträge von Freitagabend oder vom Wochenende werden erst ab Montag bearbeitet.</p>

      <h3>6. Ursprüngliche Einzahlungsmethode verwenden</h3>
      <p><?php echo SITE_NAME; ?> zahlt bevorzugt auf dieselbe Methode aus, die für die Einzahlung verwendet wurde. Eine andere Methode kann zusätzliche Prüfungen auslösen und den Vorgang verlangsamen.</p>
    </div>
  </section>

  <!-- Fees -->
  <section class="content-section" id="fees">
    <div class="container container--narrow">
      <h2>Auszahlungsgebühren</h2>
      <p><?php echo SITE_NAME; ?> erhebt keine Gebühren für Auszahlungen. Ihr Zahlungsanbieter oder Ihre Bank kann jedoch eigene Transaktionsgebühren, Währungsumrechnungskosten oder Vermittlergebühren berechnen. Erkundigen Sie sich bei Ihrem Zahlungsanbieter nach möglichen Drittanbieter-Gebühren für eingehende Überweisungen.</p>
      <p>Falls Sie die 1x-Umsatzanforderung für Einzahlungen nicht erfüllen, bevor Sie eine Auszahlung beantragen, kann eine Bearbeitungsgebühr anfallen. Erfüllen Sie immer zuerst den Mindestumsatz, um diese Gebühr zu vermeiden.</p>
    </div>
  </section>

  <!-- Withdrawal FAQ -->
  <section class="content-section content-section--alt" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>FAQ zur Auszahlung</h2>

      <details class="faq-item">
        <summary>Wie lange dauert eine Auszahlung bei <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Auszahlungen werden innerhalb von 72 Stunden an Werktagen bearbeitet. <?php echo SITE_NAME; ?> bearbeitet keine Auszahlungen am Wochenende -- im ungünstigsten Fall kann es daher bis zu 7 Werktage von der Einreichung bis zum Erhalt dauern. E-Wallets und Kryptowährungen sind in der Regel am schnellsten und oft innerhalb von 24 Stunden nach der Casino-Bearbeitung abgeschlossen. Banküberweisungen und Kartenzahlungen können auf Anbieterseite weitere 1-5 Werktage dauern.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wie hoch ist die Mindestauszahlung bei <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Die Mindestauszahlung beträgt &euro;20 bei allen Zahlungsmethoden. Niedrigere Beträge können nicht angefordert werden.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wie viel kann ich pro Monat maximal auszahlen?</summary>
        <div class="faq-answer">
          <p>Standardspieler können bis zu &euro;9.000 pro Monat auszahlen (&euro;700 täglich, &euro;2.250 wöchentlich). VIP-Mitglieder haben höhere Limits: &euro;1.500 täglich, &euro;7.000 wöchentlich und &euro;28.000 monatlich.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Bearbeitet <?php echo SITE_NAME; ?> Auszahlungen am Wochenende?</summary>
        <div class="faq-answer">
          <p>Nein. Die Auszahlungsbearbeitung erfolgt nur an Werktagen (Montag bis Freitag). Am Wochenende eingereichte Anträge werden ab dem folgenden Montag bearbeitet.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Warum wurde meine Auszahlung abgelehnt?</summary>
        <div class="faq-answer">
          <p>Häufige Gründe sind: nicht erfüllte Umsatzanforderungen, nicht verifiziertes Konto, Überschreitung der Tages-, Wochen- oder Monatslimits oder Auszahlung auf eine Methode, die nicht mit Ihrer Einzahlung übereinstimmt. Kontaktieren Sie den Support für Details zu Ihrem Fall.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Gibt es Auszahlungsgebühren?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> erhebt keine Auszahlungsgebühren. Ihr Zahlungsanbieter kann eigene Gebühren für den Empfang von Geldern berechnen. Falls Sie den 1x-Einzahlungsumsatz nicht erfüllt haben, bevor Sie eine Auszahlung beantragen, kann eine Bearbeitungsgebühr anfallen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Was passiert bei hohen Gewinnen über &euro;5.000?</summary>
        <div class="faq-answer">
          <p>Auszahlungen über &euro;5.000 können eine zusätzliche Verifizierung erfordern und länger dauern. Das Casino kann grosse Auszahlungen auf Basis der Tages- und Wochenlimits in Raten aufteilen. VIP-Mitglieder erhalten in der Regel eine schnellere Bearbeitung bei grossen Beträgen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kann ich eine ausstehende Auszahlung stornieren?</summary>
        <div class="faq-answer">
          <p>Abhängig vom Bearbeitungsstatus kann eine ausstehende Auszahlung möglicherweise storniert werden. Kontaktieren Sie den Kundensupport per Live-Chat, um Hilfe bei der Stornierung zu erhalten.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
