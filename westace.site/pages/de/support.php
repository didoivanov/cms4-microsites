<?php
/**
 * Support-Seite - WestAce (Deutsch / DE)
 */
$page_title = SITE_NAME . ' Kundensupport - Live-Chat, E-Mail &amp; Hilfecenter';
$page_description = 'Kontaktiere den ' . SITE_NAME . ' Casino-Support rund um die Uhr per Live-Chat oder per E-Mail an support@westace.com. Hilfe bei Einzahlungen, Auszahlungen, Boni, Kontofragen und technischen Problemen.';
$current_page = 'support';
$lang_prefix = '/de';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Kundensupport';
$hero_description = 'Wir sind bei allen Fragen rund um dein Konto, Einzahlungen, Auszahlungen, Boni und technische Probleme für dich da - jederzeit.';
$hero_cta = 'Live-Chat öffnen';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Kontaktmöglichkeiten -->
  <section class="content-section" id="contact">
    <div class="container">
      <h2>So erreichst du uns</h2>
      <p><?php echo SITE_NAME; ?> bietet zwei Support-Kanäle, damit du immer Hilfe bekommst, wenn du sie brauchst. Egal, ob du eine kurze Frage zu einer Promotion hast oder Hilfe bei einem Zahlungsproblem benötigst - unser Team ist rund um die Uhr erreichbar.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128172;</div>
          <h4>Live-Chat</h4>
          <p>Der schnellste Weg zur Hilfe. Klicke auf das Chat-Symbol auf einer beliebigen Seite, um ein Gespräch mit einem Support-Mitarbeiter zu starten. Unsere Live-Agents antworten in der Regel innerhalb von 5 Minuten. Verfügbar 24 Stunden am Tag, 7 Tage die Woche.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9993;</div>
          <h4>E-Mail-Support</h4>
          <p>Für detaillierte Anfragen oder Dokument-Einreichungen ist E-Mail die beste Option. Sende deine Anfrage an <strong>support@westace.com</strong> und erwarte eine Antwort innerhalb von 24 Stunden. Bitte gib deine Kontodaten und eine klare Beschreibung des Problems an.</p>
        </div>
      </div>

      <table class="data-table" style="margin-top: var(--space-8);">
        <thead>
          <tr>
            <th>Kanal</th>
            <th>Verfügbarkeit</th>
            <th>Antwortzeit</th>
            <th>Geeignet für</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Live-Chat</td>
            <td>24/7</td>
            <td>Innerhalb von 5 Minuten</td>
            <td>Schnelle Fragen, Bonus-Hilfe, Einzahlungsprobleme</td>
          </tr>
          <tr>
            <td>E-Mail</td>
            <td>24/7</td>
            <td>Bis zu 24 Stunden</td>
            <td>Dokument-Uploads, detaillierte Fälle, Beschwerden</td>
          </tr>
          <tr>
            <td>Telefon</td>
            <td>Nicht verfügbar</td>
            <td>-</td>
            <td>-</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- Womit kann der Support helfen? -->
  <section class="content-section content-section--alt" id="topics">
    <div class="container">
      <h2>Wobei kann der Support helfen?</h2>
      <p>Unser Kundensupport-Team bearbeitet ein breites Themenspektrum. Hier sind die häufigsten Bereiche, bei denen Spieler um Hilfe bitten:</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Konto &amp; Registrierung</h4>
          <p>Hilfe beim Erstellen eines Kontos, Aktualisieren persönlicher Daten, Zurücksetzen von Passwörtern und Beheben von Anmeldeproblemen. Falls dein Konto gesperrt oder eingeschränkt ist, kann der Support deinen Status prüfen.</p>
        </div>
        <div class="info-card">
          <h4>Einzahlungen &amp; Zahlungen</h4>
          <p>Unterstützung bei fehlgeschlagenen Einzahlungen, Fragen zu Zahlungsmethoden und Transaktionsstatus-Abfragen. Der Support kann auch helfen, wenn eine Einzahlung nicht in deinem Guthaben erscheint.</p>
        </div>
        <div class="info-card">
          <h4>Auszahlungen &amp; Gewinne</h4>
          <p>Fragen zu Auszahlungsbearbeitungszeiten, ausstehenden Anfragen und abgelehnten Auszahlungen. Für detaillierte Auszahlungsinformationen besuche die <a href="<?php echo $lang_prefix; ?>/withdrawal">Auszahlungsseite</a>.</p>
        </div>
        <div class="info-card">
          <h4>Boni &amp; Aktionen</h4>
          <p>Erläuterungen zu Bonusbedingungen, Umsatzanforderungen, Aktivierung von Angeboten und Stornierung aktiver Boni. Der Support kann spezifische Promotionsdetails und Teilnahmebedingungen erklären.</p>
        </div>
        <div class="info-card">
          <h4>Verifizierung &amp; KYC</h4>
          <p>Anleitung zur Dokumenteneinreichung, Verifizierungsstatus, akzeptierte Dokumentenarten und Zeitschätzungen. Der Support kann bei Problemen während des Verifizierungsprozesses helfen.</p>
        </div>
        <div class="info-card">
          <h4>Technische Probleme</h4>
          <p>Hilfe bei nicht ladenden Spielen, Website-Fehlern, Problemen mit der mobilen Kompatibilität und Browser-Problemen. Der Support kann technische Fehler troubleshooten und an das Entwicklungsteam weiterleiten.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tipps für eine schnelle Lösung -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>So löst du dein Anliegen schneller</h2>
      <p>Ein paar einfache Schritte helfen unserem Support-Team, dein Problem schneller zu lösen:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Kontodaten bereithalten.</strong> Dein Benutzername oder deine E-Mail-Adresse hilft dem Support, dein Konto schnell zu finden. Falls es um eine bestimmte Transaktion geht, halte die Referenznummer parat.
          </div>
        </li>
        <li>
          <div>
            <strong>Problem klar beschreiben.</strong> Erkläre, was passiert ist, wann es passiert ist und was du erwartet hättest. Screenshots sind bei technischen Problemen oder bestrittenen Transaktionen hilfreich.
          </div>
        </li>
        <li>
          <div>
            <strong>Den richtigen Kanal wählen.</strong> Bei dringenden Problemen (gesperrtes Konto, fehlgeschlagene Einzahlung) ist der Live-Chat die beste Wahl. Für Dokument-Einreichungen oder komplexe Fälle, die eine Untersuchung erfordern, bietet E-Mail an support@westace.com mehr Raum für Details.
          </div>
        </li>
        <li>
          <div>
            <strong>Zuerst die FAQ prüfen.</strong> Viele häufige Fragen zu Boni, Auszahlungen und Kontoverwaltung sind in den FAQ-Bereichen dieser Seite beantwortet.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Verantwortungsvolles Spielen -->
  <section class="content-section content-section--alt" id="responsible">
    <div class="container container--narrow">
      <h2>Verantwortungsvolles Spielen &amp; Selbstausschluss</h2>
      <p><?php echo SITE_NAME; ?> nimmt verantwortungsvolles Spielen ernst. Wenn du das Gefühl hast, dass dein Spielverhalten zum Problem wird, kann unser Support-Team dir helfen, einen Selbstausschluss von der Plattform einzurichten.</p>
      <p>Ein Selbstausschluss ist für einen festgelegten Zeitraum oder dauerhaft möglich. Nach der Aktivierung kann der Selbstausschluss bis zum Ablauf des festgelegten Zeitraums nicht rückgängig gemacht werden. Während des Selbstausschlusses ist es nicht möglich, sich anzumelden oder Wetten zu platzieren. Kontaktiere den Support per Live-Chat oder E-Mail an support@westace.com, um einen Selbstausschluss zu beantragen.</p>

      <h3>Selbsteinschätzung</h3>
      <p>Stelle dir die folgenden Fragen, um zu prüfen, ob das Spielen dein Leben beeinträchtigt:</p>
      <ul>
        <li>Gerät dein Ausgabeverhalten außer Kontrolle?</li>
        <li>Leihst du dir Geld, um weiterspielen zu können?</li>
        <li>Verbringst du weniger Zeit mit Familie und Freunden wegen des Spielens?</li>
        <li>Stört es dich, was andere über dein Spielverhalten denken?</li>
        <li>Hast du das Interesse an deinen früheren Hobbys oder Aktivitäten verloren?</li>
        <li>Bist du wegen Spielverlusten niedergeschlagen oder ängstlich?</li>
        <li>Hast du schon einmal gelogen, wie viel Zeit oder Geld du beim Spielen ausgibst?</li>
      </ul>
      <p>Wenn du mehrere dieser Fragen mit Ja beantwortet hast, empfehlen wir, eine Hilfsorganisation zu kontaktieren:</p>
      <ul>
        <li><strong>BZgA (Bundeszentrale für gesundheitliche Aufklärung)</strong> - kostenlose Beratung und Informationen zur Spielsucht: <a href="https://www.bzga.de" target="_blank" rel="noopener noreferrer">www.bzga.de</a></li>
        <li><strong>Spielsucht-Hotline</strong> - bundesweite Telefonberatung, kostenlos und anonym: 0800 1 37 27 00 (täglich 0-24 Uhr)</li>
        <li><strong>Gamblers Anonymous Deutschland</strong> - Selbsthilfegruppen und anonyme Unterstützung für Betroffene</li>
        <li><strong>Gambling Therapy</strong> - kostenlose, vertrauliche Unterstützung und Beratung online</li>
      </ul>

      <h3>Hilfreiche Hinweise</h3>
      <ul>
        <li>Betrachte das Spielen nicht als Einnahmequelle</li>
        <li>Setze ein Zeit- und Geldbudget und halte dich daran</li>
        <li>Spiele nur mit Geld, das du dir leisten kannst zu verlieren</li>
        <li>Vermeide das Spielen, wenn du gestresst, aufgewühlt oder unter Alkoholeinfluss bist</li>
      </ul>
    </div>
  </section>

  <!-- Support FAQ -->
  <section class="content-section" id="support-faq">
    <div class="container container--narrow">
      <h2>Support FAQ</h2>

      <details class="faq-item">
        <summary>Ist der <?php echo SITE_NAME; ?>-Support rund um die Uhr erreichbar?</summary>
        <div class="faq-answer">
          <p>Ja. Sowohl der Live-Chat als auch der E-Mail-Support sind rund um die Uhr verfügbar - 24 Stunden am Tag, 7 Tage die Woche.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wie schnell antwortet der Live-Chat?</summary>
        <div class="faq-answer">
          <p>Live-Chat-Agents antworten in der Regel innerhalb von 5 Minuten. Zu Stoßzeiten kann die Wartezeit etwas länger sein.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wie lautet die E-Mail-Adresse des Supports?</summary>
        <div class="faq-answer">
          <p>Du erreichst den <?php echo SITE_NAME; ?>-Support per E-Mail unter <strong>support@westace.com</strong>. Bitte gib deinen Benutzernamen oder deine registrierte E-Mail-Adresse, eine Problembeschreibung und gegebenenfalls relevante Screenshots an. Erwarte eine Antwort innerhalb von 24 Stunden.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kann der Support mir helfen, einen Bonus zu stornieren?</summary>
        <div class="faq-answer">
          <p>Ja. Wenn du einen aktiven Bonus stornieren möchtest, kontaktiere den Support per Live-Chat oder E-Mail. Beachte, dass die Stornierung eines Bonus den Bonusbetrag und alle daraus erzielten Gewinne entfernt.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Was tun, wenn mein Problem nicht gelöst wird?</summary>
        <div class="faq-answer">
          <p>Wenn du mit der ursprünglichen Antwort nicht zufrieden bist, bitte darum, dass dein Fall an einen leitenden Mitarbeiter weitergeleitet wird. Liefere so viele Details wie möglich, damit das Team deinen Fall gründlich prüfen kann.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kann ich einen Selbstausschluss beantragen?</summary>
        <div class="faq-answer">
          <p>Ja. Kontaktiere den Support per Live-Chat oder E-Mail, um einen Selbstausschluss für einen festgelegten Zeitraum oder dauerhaft zu beantragen. Während des Selbstausschlusses kannst du dich nicht einloggen oder Wetten platzieren.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
