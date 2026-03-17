<?php
/**
 * Support Page – German
 */
$page_title = SITE_NAME . ' Kundenservice - Live-Chat, E-Mail, Telegram & Hilfe';
$page_description = 'Erreichen Sie den ' . SITE_NAME . ' Casino Kundenservice per 24/7 Live-Chat, E-Mail an support@vipluck.com oder Telegram. Hilfe bei Einzahlungen, Auszahlungen, Boni, Kontoproblemen und technischen Fragen.';
$current_page = 'support';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Kundenservice';
$hero_description = 'Wir helfen Ihnen bei allen Fragen rund um Ihr Konto, Einzahlungen, Auszahlungen, Boni oder technische Probleme. Melden Sie sich jederzeit.';
$hero_cta = 'Live-Chat öffnen';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Contact Options -->
  <section class="content-section" id="contact">
    <div class="container">
      <h2>So erreichen Sie uns</h2>
      <p><?php echo SITE_NAME; ?> bietet drei Supportkanäle, damit Sie jederzeit Hilfe bekommen. Egal ob Sie eine kurze Frage zu einer Aktion haben, Unterstützung bei einem Zahlungsproblem brauchen oder lieber über eine Messaging-App kommunizieren -- unser Team steht bereit.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128172;</div>
          <h4>Live-Chat</h4>
          <p>Der schnellste Weg, Hilfe zu bekommen. Klicken Sie auf das Chat-Symbol auf einer beliebigen Seite der Website, um ein Gespräch mit einem Support-Mitarbeiter zu starten. Die durchschnittliche Antwortzeit liegt bei unter 2 Minuten. Verfügbar 24 Stunden am Tag, 7 Tage die Woche.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9993;</div>
          <h4>E-Mail-Support</h4>
          <p>Für ausführliche Anfragen oder das Einreichen von Dokumenten ist E-Mail die beste Wahl. Senden Sie Ihre Anfrage an <strong>support@vipluck.com</strong> und rechnen Sie mit einer Antwort innerhalb von 24 Stunden. Geben Sie unbedingt Ihre Kontodaten und eine klare Beschreibung des Problems an.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9992;</div>
          <h4>Telegram</h4>
          <p><?php echo SITE_NAME; ?> betreibt einen offiziellen Telegram-Kanal für Support und Ankündigungen. Dort können Sie schnelle Fragen stellen, Neuigkeiten zu Aktionen erhalten und allgemeine Hilfe bekommen. Den Telegram-Link finden Sie auf der Casino-Website.</p>
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
            <td>Unter 2 Minuten</td>
            <td>Schnelle Fragen, Bonushilfe, Einzahlungsprobleme</td>
          </tr>
          <tr>
            <td>E-Mail</td>
            <td>24/7</td>
            <td>Bis zu 24 Stunden</td>
            <td>Dokumenten-Upload, ausführliche Fälle, Beschwerden</td>
          </tr>
          <tr>
            <td>Telegram</td>
            <td>24/7</td>
            <td>Variiert</td>
            <td>Schnelle Fragen, Aktionen, Ankündigungen</td>
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
      <p>Unser Kundensupport-Team kümmert sich um ein breites Themenspektrum. Hier sind die häufigsten Bereiche, in denen Spieler Unterstützung anfragen:</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Konto &amp; Registrierung</h4>
          <p>Hilfe bei der Kontoerstellung, Aktualisierung persönlicher Daten, Passwort-Zurücksetzung, Benutzernamen-Wiederherstellung und Anmeldeproblemen. Falls Ihr Konto gesperrt oder eingeschränkt ist, kann der Support Ihren Status prüfen.</p>
        </div>
        <div class="info-card">
          <h4>Einzahlungen &amp; Zahlungen</h4>
          <p>Unterstützung bei fehlgeschlagenen Einzahlungen, Fragen zu Zahlungsmethoden, Währungsoptionen und Transaktionsstatus-Abfragen. Der Support hilft auch, wenn eine Einzahlung nicht in Ihrem Guthaben erscheint.</p>
        </div>
        <div class="info-card">
          <h4>Auszahlungen &amp; Gewinnauszahlung</h4>
          <p>Fragen zu Bearbeitungszeiten bei Auszahlungen, ausstehenden Anträgen, abgelehnten Auszahlungen und Limitanpassungen. Bitte beachten Sie: <?php echo SITE_NAME; ?> bearbeitet keine Auszahlungen am Wochenende. Ausführliche Infos finden Sie auf der <a href="/de/withdrawal">Auszahlungsseite</a>.</p>
        </div>
        <div class="info-card">
          <h4>Boni &amp; Aktionen</h4>
          <p>Klärung von Bonusbedingungen, Umsatzanforderungen, Aktivierung von Angeboten und Stornierung aktiver Boni. Der Support kann Ihnen Details zu spezifischen Aktionen und Teilnahmebedingungen erklären.</p>
        </div>
        <div class="info-card">
          <h4>Verifizierung &amp; KYC</h4>
          <p>Hilfe beim Einreichen von Dokumenten, Verifizierungsstatus, akzeptierten Dokumenttypen und Zeitrahmen. Sie können Dokumente in Ihren Kontoeinstellungen hochladen, aber der Support hilft bei Problemen.</p>
        </div>
        <div class="info-card">
          <h4>Technische Probleme</h4>
          <p>Hilfe, wenn Spiele nicht laden, bei Website-Fehlern, mobilen Kompatibilitätsproblemen und Browser-Problemen. Der Support kann Fehler analysieren und technische Bugs an das Entwicklerteam weiterleiten.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Site Languages -->
  <section class="content-section" id="languages">
    <div class="container container--narrow">
      <h2>Unterstützte Sprachen</h2>
      <p>Die <?php echo SITE_NAME; ?>-Website ist in 13 Sprachen verfügbar, um Spieler in verschiedenen Regionen zu bedienen:</p>
      <div class="info-grid">
        <div class="info-card">
          <h4>Europäische Sprachen</h4>
          <ul>
            <li>English</li>
            <li>Deutsch (German)</li>
            <li>Norsk (Norwegian)</li>
            <li>Fran&ccedil;ais (French)</li>
            <li>Italiano (Italian)</li>
            <li>Espa&ntilde;ol (Spanish)</li>
            <li>Portugu&ecirc;s (Portuguese)</li>
            <li>Suomi (Finnish)</li>
            <li>&Ccaron;e&scaron;tina (Czech)</li>
          </ul>
        </div>
        <div class="info-card">
          <h4>Weitere Sprachen</h4>
          <ul>
            <li>&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940; (Greek)</li>
            <li>&#1575;&#1604;&#1593;&#1585;&#1576;&#1610;&#1577; (Arabic)</li>
            <li>Polski (Polish)</li>
            <li>Magyar (Hungarian)</li>
          </ul>
        </div>
      </div>
      <p>Support-Mitarbeiter können in der Regel auf Englisch helfen und je nach Verfügbarkeit auch in anderen aufgelisteten Sprachen.</p>
    </div>
  </section>

  <!-- Tips for Contacting Support -->
  <section class="content-section content-section--alt" id="tips">
    <div class="container container--narrow">
      <h2>So holen Sie das Beste aus Ihrer Supportanfrage heraus</h2>
      <p>Ein paar einfache Schritte helfen dem Support-Team, Ihr Anliegen schneller zu lösen:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Kontodaten bereithalten.</strong> Ihr Benutzername oder Ihre E-Mail-Adresse hilft dem Support, Ihr Konto schnell zu finden. Falls es um eine bestimmte Transaktion geht, halten Sie die Referenznummer bereit.
          </div>
        </li>
        <li>
          <div>
            <strong>Problem klar beschreiben.</strong> Erklären Sie, was passiert ist, wann es passiert ist und was Sie erwartet haben. Screenshots sind bei technischen Problemen oder strittigen Transaktionen hilfreich.
          </div>
        </li>
        <li>
          <div>
            <strong>Den richtigen Kanal nutzen.</strong> Für dringende Anliegen (gesperrtes Konto, fehlgeschlagene Einzahlung) ist der Live-Chat die beste Wahl. Für das Einreichen von Dokumenten oder komplexe Fälle bietet die E-Mail an support@vipluck.com dem Team mehr Spielraum. Für schnelle Fragen oder Aktions-Updates probieren Sie den Telegram-Kanal.
          </div>
        </li>
        <li>
          <div>
            <strong>Zuerst die FAQ prüfen.</strong> Viele häufige Fragen zu Boni, Auszahlungen und Kontoverwaltung werden in den FAQ-Bereichen auf dieser Website beantwortet. Ein kurzer Blick kann Ihnen die Wartezeit ersparen.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Responsible Gambling -->
  <section class="content-section" id="responsible">
    <div class="container container--narrow">
      <h2>Verantwortungsvolles Spielen &amp; Selbstausschluss</h2>
      <p><?php echo SITE_NAME; ?> nimmt verantwortungsvolles Spielen ernst. Falls Sie das Gefühl haben, dass Ihre Spielgewohnheiten problematisch werden, kann unser Support-Team Ihnen helfen, Einzahlungslimits, Abkühlungsphasen oder einen Selbstausschluss von der Plattform einzurichten.</p>
      <p>Selbstausschluss-Optionen reichen von vorübergehenden Pausen bis zur permanenten Kontoschliessung. Einmal aktiviert, kann ein Selbstausschluss erst nach Ablauf der festgelegten Frist aufgehoben werden. Kontaktieren Sie den Support per Live-Chat, E-Mail an support@vipluck.com oder Telegram, um die verfügbaren Optionen zu besprechen.</p>
      <p>Für externe Hilfe können Sie sich an Organisationen wie GamCare oder die Anonymen Spieler wenden, die kostenlose und vertrauliche Beratung anbieten.</p>
    </div>
  </section>

  <!-- Support FAQ -->
  <section class="content-section content-section--alt" id="support-faq">
    <div class="container container--narrow">
      <h2>Support-FAQ</h2>

      <details class="faq-item">
        <summary>Ist der <?php echo SITE_NAME; ?>-Support in mehreren Sprachen verfügbar?</summary>
        <div class="faq-answer">
          <p>Die Website ist in 13 Sprachen verfügbar: Englisch, Deutsch, Norwegisch, Französisch, Italienisch, Spanisch, Portugiesisch, Griechisch, Arabisch, Polnisch, Ungarisch, Finnisch und Tschechisch. Support-Mitarbeiter können in der Regel auf Englisch helfen und je nach Verfügbarkeit auch in anderen Sprachen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wie schnell antwortet der Live-Chat?</summary>
        <div class="faq-answer">
          <p>Unter normalen Bedingungen kommen Live-Chat-Antworten innerhalb von 1-2 Minuten. Während Stosszeiten oder bei hohem Aufkommen kann die Wartezeit etwas länger sein, aber das Team arbeitet daran, Verzögerungen gering zu halten.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wie lautet die E-Mail-Adresse des Supports?</summary>
        <div class="faq-answer">
          <p>Sie erreichen den <?php echo SITE_NAME; ?>-Support per E-Mail unter <strong>support@vipluck.com</strong>. Geben Sie Ihren Benutzernamen oder Ihre registrierte E-Mail, eine Beschreibung des Problems und alle relevanten Screenshots oder Transaktionsreferenzen an. Rechnen Sie mit einer Antwort innerhalb von 24 Stunden.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kann ich den Support über Telegram erreichen?</summary>
        <div class="faq-answer">
          <p>Ja. <?php echo SITE_NAME; ?> hat einen offiziellen Telegram-Kanal, über den Sie Support erhalten, Aktionen sehen und Updates bekommen können. Den Link zum offiziellen Kanal finden Sie auf der Casino-Website.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kann der Support mir helfen, einen Bonus zu stornieren?</summary>
        <div class="faq-answer">
          <p>Ja. Wenn Sie einen aktiven Bonus stornieren möchten, können Sie das selbst im Profil-Bereich Ihres Kontos tun oder den Support per Live-Chat oder E-Mail kontaktieren. Beachten Sie, dass die Stornierung eines Bonus den Bonusbetrag und alle daraus erzielten Gewinne entfernt.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Was, wenn mein Anliegen nicht gelöst wird?</summary>
        <div class="faq-answer">
          <p>Falls Sie mit der ersten Antwort nicht zufrieden sind, bitten Sie darum, Ihren Fall an einen leitenden Mitarbeiter oder Vorgesetzten weiterzuleiten. Bei ungelösten Streitigkeiten können Sie sich auch auf die Beschwerdeverfahren in den Allgemeinen Geschäftsbedingungen berufen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kann ich Einzahlungs- oder Verlustlimits setzen lassen?</summary>
        <div class="faq-answer">
          <p>Ja. Kontaktieren Sie den Support, um tägliche, wöchentliche oder monatliche Einzahlungslimits festzulegen. Sie können auch Verlustlimits oder Erinnerungen zur Sitzungsdauer anfordern, um Ihr Spielverhalten zu steuern.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
