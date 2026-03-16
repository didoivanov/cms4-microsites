<?php
/**
 * Support Page - German
 */
$page_title = SITE_NAME . ' Kundenservice - Live-Chat, E-Mail & Hilfe-Center';
$page_description = 'Erreiche den ' . SITE_NAME . ' Casino Kundenservice per 24/7 Live-Chat oder E-Mail. Hilfe bei Einzahlungen, Auszahlungen, Boni, Kontoproblemen und technischen Fragen.';
$current_page = 'support';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Kundenservice';
$hero_description = 'Wir helfen dir bei allen Fragen rund um dein Konto, Einzahlungen, Auszahlungen, Boni oder technische Probleme. Melde dich jederzeit.';
$hero_cta = 'Live-Chat öffnen';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Contact Options -->
  <section class="content-section" id="contact">
    <div class="container">
      <h2>So erreichst du uns</h2>
      <p><?php echo SITE_NAME; ?> bietet zwei Hauptsupportkanäle, beide rund um die Uhr verfügbar. Egal ob du eine kurze Frage zu einer Aktion hast oder Hilfe bei einem Zahlungsproblem brauchst – das Team steht bereit.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128172;</div>
          <h4>Live-Chat</h4>
          <p>Der schnellste Weg, Hilfe zu bekommen. Klicke auf das Chat-Symbol auf jeder Seite der Website, um ein Gespräch mit einem Support-Mitarbeiter zu starten. Die durchschnittliche Antwortzeit liegt während der regulären Zeiten bei unter 2 Minuten. Verfügbar 24 Stunden am Tag, 7 Tage die Woche.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9993;</div>
          <h4>E-Mail-Support</h4>
          <p>Für ausführliche Fragen oder das Einreichen von Dokumenten ist E-Mail die beste Option. Sende deine Anfrage und rechne mit einer Antwort innerhalb von 24 Stunden. Vergiss nicht, deine Kontodaten und eine klare Beschreibung des Problems anzugeben.</p>
        </div>
      </div>

      <table class="data-table" style="margin-top: var(--space-8);">
        <thead>
          <tr>
            <th>Kanal</th>
            <th>Verfügbarkeit</th>
            <th>Antwortzeit</th>
            <th>Am besten geeignet für</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Live-Chat</td>
            <td>24/7</td>
            <td>Unter 2 Minuten</td>
            <td>Kurze Fragen, Bonus-Hilfe, Einzahlungsprobleme</td>
          </tr>
          <tr>
            <td>E-Mail</td>
            <td>24/7</td>
            <td>Bis zu 24 Stunden</td>
            <td>Dokumenten-Upload, ausführliche Fälle, Beschwerden</td>
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

  <!-- What Support Can Help With -->
  <section class="content-section content-section--alt" id="topics">
    <div class="container">
      <h2>Wobei kann der Support helfen?</h2>
      <p>Das Kundenservice-Team kümmert sich um eine Vielzahl von Themen. Hier sind die häufigsten Bereiche, in denen Spieler Unterstützung suchen:</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Konto &amp; Registrierung</h4>
          <p>Hilfe beim Erstellen eines Kontos, Aktualisieren persönlicher Daten, Zurücksetzen von Passwörtern und Lösen von Login-Problemen. Wenn dein Konto gesperrt oder eingeschränkt ist, kann der Support deinen Status überprüfen.</p>
        </div>
        <div class="info-card">
          <h4>Einzahlungen &amp; Zahlungen</h4>
          <p>Unterstützung bei fehlgeschlagenen Einzahlungen, Fragen zu Zahlungsmethoden, Währungsoptionen und Überprüfung des Transaktionsstatus. Der Support kann auch helfen, wenn eine Einzahlung nicht in deinem Guthaben erscheint.</p>
        </div>
        <div class="info-card">
          <h4>Auszahlungen &amp; Gewinnauszahlung</h4>
          <p>Fragen zu Auszahlungsbearbeitungszeiten, ausstehenden Anfragen, abgelehnten Auszahlungen und Limitanpassungen. Ausführliche Informationen zu Auszahlungen findest du auf der <a href="/withdrawal">Auszahlungsseite</a>.</p>
        </div>
        <div class="info-card">
          <h4>Boni &amp; Aktionen</h4>
          <p>Klärung von Bonusbedingungen, Umsatzanforderungen, Aktivierung von Angeboten und Stornierung aktiver Boni. Der Support kann dir die Details und Teilnahmebedingungen einzelner Aktionen erklären.</p>
        </div>
        <div class="info-card">
          <h4>Verifizierung &amp; KYC</h4>
          <p>Hilfestellung zur Dokumenteneinreichung, Verifizierungsstatus, akzeptierten Dokumenttypen und Zeitrahmen. Du kannst Dokumente in deinen Kontoeinstellungen hochladen, aber der Support hilft dir, wenn Probleme auftreten.</p>
        </div>
        <div class="info-card">
          <h4>Technische Probleme</h4>
          <p>Hilfe bei Spielen, die nicht laden, Website-Fehlern, mobilen Kompatibilitätsproblemen und browserbezogenen Problemen. Der Support kann Fehler beheben und technische Bugs an das Entwicklungsteam weiterleiten.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Contacting Support -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>So holst du das Beste aus deiner Support-Anfrage</h2>
      <p>Ein paar einfache Schritte können dem Support-Team helfen, dein Problem schneller zu lösen:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Halte deine Kontodaten bereit.</strong> Deine E-Mail-Adresse oder dein Benutzername hilft dem Support, dein Konto schnell zu finden. Wenn das Problem eine bestimmte Transaktion betrifft, halte die Referenznummer bereit.
          </div>
        </li>
        <li>
          <div>
            <strong>Beschreibe das Problem klar.</strong> Erkläre, was passiert ist, wann es passiert ist und was du erwartet hast. Screenshots sind bei technischen Problemen oder strittigen Transaktionen hilfreich.
          </div>
        </li>
        <li>
          <div>
            <strong>Nutze den richtigen Kanal.</strong> Bei dringenden Problemen (gesperrtes Konto, fehlgeschlagene Einzahlung) ist der Live-Chat die beste Wahl. Für Dokumenteneinreichungen oder komplexe Fälle, die eine Untersuchung erfordern, bietet E-Mail dem Team mehr Spielraum.
          </div>
        </li>
        <li>
          <div>
            <strong>Schau zuerst in die FAQ.</strong> Viele häufige Fragen zu Boni, Auszahlungen und Kontoverwaltung werden in den FAQ-Bereichen auf dieser Website beantwortet. Ein kurzer Blick kann dir die Wartezeit ersparen.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Responsible Gambling -->
  <section class="content-section content-section--alt" id="responsible">
    <div class="container container--narrow">
      <h2>Verantwortungsvolles Spielen &amp; Selbstausschluss</h2>
      <p><?php echo SITE_NAME; ?> nimmt verantwortungsvolles Spielen ernst. Wenn du das Gefühl hast, dass dein Spielverhalten problematisch wird, kann dir das Support-Team helfen, Einzahlungslimits, Abkühlungsphasen oder einen Selbstausschluss von der Plattform einzurichten.</p>
      <p>Die Selbstausschluss-Optionen reichen von vorübergehenden Pausen bis hin zur dauerhaften Kontoschließung. Einmal aktiviert, kann der Selbstausschluss nicht vor Ablauf der festgelegten Frist rückgängig gemacht werden. Kontaktiere den Support per Live-Chat oder E-Mail, um die verfügbaren Optionen zu besprechen.</p>
      <p>Für externe Unterstützung kannst du dich an Organisationen wie GamCare oder Gamblers Anonymous wenden, die kostenlose, vertrauliche Beratung anbieten.</p>
    </div>
  </section>

  <!-- Support FAQ -->
  <section class="content-section" id="support-faq">
    <div class="container container--narrow">
      <h2>Support-FAQ</h2>

      <details class="faq-item">
        <summary>Ist der <?php echo SITE_NAME; ?> Support in mehreren Sprachen verfügbar?</summary>
        <div class="faq-answer">
          <p>Die Website unterstützt Polnisch, Englisch, Finnisch, Deutsch, Ungarisch, Norwegisch, Italienisch, Spanisch, Tschechisch und Portugiesisch. Support-Mitarbeiter können in der Regel auf Englisch helfen und sind je nach Verfügbarkeit möglicherweise auch in anderen aufgeführten Sprachen verfügbar.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wie schnell antwortet der Live-Chat?</summary>
        <div class="faq-answer">
          <p>Unter normalen Bedingungen erfolgen Live-Chat-Antworten innerhalb von 1-2 Minuten. Zu Stoßzeiten oder bei hohem Aufkommen können die Wartezeiten etwas länger sein, aber das Team arbeitet daran, Verzögerungen minimal zu halten.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kann mir der Support helfen, einen Bonus zu stornieren?</summary>
        <div class="faq-answer">
          <p>Ja. Wenn du einen aktiven Bonus stornieren möchtest, kannst du das selbst im Profilbereich deines Kontos tun oder den Support per Live-Chat oder E-Mail kontaktieren. Beachte, dass die Stornierung eines Bonus den Bonusbetrag und alle damit erzielten Gewinne entfernt.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Was, wenn mein Problem nicht gelöst wird?</summary>
        <div class="faq-answer">
          <p>Wenn du mit der ersten Antwort nicht zufrieden bist, bitte darum, dass dein Fall an einen Senior-Mitarbeiter oder Vorgesetzten weitergeleitet wird. Bei ungelösten Streitigkeiten kannst du dich auch auf das Beschwerdeverfahren des Casinos berufen, das in den Allgemeinen Geschäftsbedingungen beschrieben ist.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kann ich Einzahlungs- oder Verlustlimits anfordern?</summary>
        <div class="faq-answer">
          <p>Ja. Kontaktiere den Support, um tägliche, wöchentliche oder monatliche Einzahlungslimits festzulegen. Du kannst auch Verlustlimits oder Sitzungserinnerungen anfordern, um dein Spielverhalten zu kontrollieren.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
