<?php
/**
 * Sportwetten-Seite - WestAce (Deutsch / DE)
 */
$page_title = 'WestAce Sportwetten - Bundesliga, Champions League &amp; Live-Wetten';
$page_description = 'Wette auf Bundesliga, Champions League, DFB-Pokal, Tennis, Handball und mehr bei ' . SITE_NAME . '. Live-Wetten, virtuelle Sportwetten und starke Quoten auf 30+ Sportarten.';
$current_page = 'sports';
$lang_prefix = '/de';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Sportwetten';
$hero_description = 'Vorausberechnung, Live-Wetten, virtueller Sport und Pferderennen - alles an einem Ort, direkt neben unserem vollständigen Casino-Angebot.';
$hero_cta = 'Jetzt Wetten';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Sportwetten-Überblick -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Sportwetten im Überblick</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p><?php echo SITE_NAME; ?> ist mehr als ein Casino. Wir bieten ein vollständiges Sportwetten-Angebot mit Vorauswetten, Live-Wetten, virtuellem Sport und Pferderennen. Ob du der Bundesliga folgst, beim DFB-Pokal mitfieberst oder die Champions League verfolgst - du findest wettbewerbsfähige Quoten auf alle wichtigen Ereignisse.</p>
          <p>Unser Sportbuch läuft parallel zum Casino, sodass du von einem einzigen Konto aus zwischen Spielautomaten, Live-Dealer-Tischen und Sportwetten wechseln kannst. Kein separates Guthaben, keine Übertragungen nötig.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-sports-screen.png" alt="<?php echo SITE_NAME; ?> Sportwetten mit Live-Bundesliga-Quoten und Fußballmärkten" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Vorauswetten</h4>
          <p>Wette auf kommende Spiele in über 30 Sportarten. Fußball, Tennis, Basketball, Handball, Motorsport und mehr - mit Einzel-, Kombi- und Systemwetten.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9889;</div>
          <h4>Live-Wetten</h4>
          <p>Wette auf laufende Spiele mit Quoten, die sich sekundengenau aktualisieren. Verfolge das Spielgeschehen mit Live-Statistiken, Anzeigetafeln und In-Play-Märkten in allen wichtigen Sportarten.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127918;</div>
          <h4>Virtueller Sport</h4>
          <p>Simulierte Ereignisse rund um die Uhr - virtueller Fußball, Basketball, Tennis, Pferderennen und Windhundrennen. Ergebnisse alle paar Minuten, ohne auf echte Begegnungen warten zu müssen.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Verfügbare Sportarten -->
  <section class="content-section content-section--alt" id="sports">
    <div class="container">
      <h2>Verfügbare Sportarten</h2>
      <p>Unser Sportbuch deckt ein breites Spektrum an Sportarten aus Ligen und Turnieren rund um die Welt ab. Hier sind die beliebtesten Wettmärkte:</p>

      <div class="two-col">
        <div>
          <h3>Beliebte Sportarten</h3>
          <ul class="check-list">
            <li>Fußball - Bundesliga (Bayern München, Borussia Dortmund), Champions League, DFB-Pokal, 2. Bundesliga, La Liga, Serie A, Premier League und hunderte weiterer Ligen</li>
            <li>Tennis - Grand Slams, ATP, WTA und Challenger-Events</li>
            <li>Basketball - NBA, EuroLeague, BBL und nationale Ligen</li>
            <li>Handball - Bundesliga, Champions League und internationale Turniere</li>
            <li>Motorsport - Formel 1, DTM, MotoGP und mehr</li>
            <li>Eishockey - DEL, NHL, KHL und europäische Ligen</li>
            <li>Boxen und MMA - UFC, Bellator und große Box-Events</li>
          </ul>
        </div>
        <div>
          <h3>Weitere Sportarten</h3>
          <ul class="check-list">
            <li>American Football - NFL und College Football</li>
            <li>Baseball - MLB und internationale Ligen</li>
            <li>Volleyball - nationale Ligen und internationale Turniere</li>
            <li>Rugby Union und Rugby League</li>
            <li>Tischtennis - Profi- und Weltevents</li>
            <li>Darts, Snooker und Radsport</li>
            <li>E-Sport - CS2, Dota 2, League of Legends, Valorant</li>
          </ul>
        </div>
      </div>

      <p style="margin-top: var(--space-6);">Live-Wetten sind für die meisten oben genannten Sportarten verfügbar. Die Quoten aktualisieren sich in Echtzeit je nach aktuellem Spielstand - so kannst du auf Tore, Breaks und Momentumwechsel direkt reagieren.</p>
    </div>
  </section>

  <!-- Bundesliga und deutsche Wettbewerbe -->
  <section class="content-section" id="bundesliga">
    <div class="container container--narrow">
      <h2>Bundesliga &amp; deutsche Wettbewerbe</h2>
      <p>Fußball ist in Deutschland die mit Abstand beliebteste Sportart für Wetten - und <?php echo SITE_NAME; ?> trägt dem Rechnung. Wir bieten eine breite Marktauswahl für alle Bundesliga-Spieltage, von der Ergebniswette über Torschützen bis hin zu Handicap-Märkten und Halbzeitergebnissen.</p>
      <p>Zu den wichtigsten deutschen Wettbewerben, die wir abdecken:</p>
      <ul>
        <li><strong>Bundesliga</strong> - sämtliche Spieltage inklusive Topspiele wie Bayern München gegen Borussia Dortmund. Hunderte von Märkten pro Spiel.</li>
        <li><strong>2. Bundesliga</strong> - vollständige Saisonabdeckung mit breiten Märkten.</li>
        <li><strong>DFB-Pokal</strong> - von der ersten Runde bis zum Finale in Berlin.</li>
        <li><strong>Champions League</strong> - Gruppenphase bis zum Finale, inklusive deutscher Clubs.</li>
        <li><strong>Europa League und Conference League</strong> - auch mit Beteiligung deutscher Teams.</li>
      </ul>
      <p>Bei Heimspielen von Bayern München oder den Borussen stehen regelmäßig Sonderquoten und erhöhte Limits zur Verfügung.</p>
    </div>
  </section>

  <!-- Pferderennen -->
  <section class="content-section content-section--alt" id="horse-racing">
    <div class="container container--narrow">
      <h2>Pferderennen</h2>
      <p><?php echo SITE_NAME; ?> deckt Pferderennen von Rennbahnen aus Deutschland, Frankreich, Großbritannien, Irland, Australien und anderen führenden Rennationen ab. Für große Veranstaltungen findest du Vorausmärkte sowie Tagesquoten mit Sieg-, Platz- und Jedes-Weg-Optionen.</p>
      <p>Wichtige Meetings wie das Hamburger Derby, Royal Ascot, das Grand National und den Melbourne Cup decken wir mit einem vollständigen Marktangebot ab. Für den regulären Rennsport bieten wir Standard-Sieg- und Platzwetten auf die meisten deutschen und internationalen Rennen.</p>
    </div>
  </section>

  <!-- Virtueller Sport -->
  <section class="content-section" id="virtual">
    <div class="container container--narrow">
      <h2>Virtueller Sport</h2>
      <p>Wenn gerade keine Live-Begegnungen zu wetten sind, sorgt unser virtueller Sportbereich rund um die Uhr für Spannung. Die Ereignisse werden von zertifizierten Zufallszahlengeneratoren simuliert, sodass die Ergebnisse fair und unvorhersehbar sind.</p>

      <h3>Verfügbare virtuelle Sportarten</h3>
      <ul>
        <li><strong>Virtueller Fußball</strong> - vollständige Spielsimulationen mit Ligatabellen und Pokalformaten</li>
        <li><strong>Virtuelles Basketball</strong> - Viertelsimulationen mit den üblichen Basketball-Märkten</li>
        <li><strong>Virtuelles Tennis</strong> - Satzsimulationen mit Spielsieger- und richtigem Ergebnis-Optionen</li>
        <li><strong>Virtuelles Pferderennen</strong> - Flach- und Hindernisrennen mit Sieg-, Platz- und Prognosewetten</li>
        <li><strong>Virtuelle Windhundrennen</strong> - Kurzrennen mit Sieg- und Prognosemärkten</li>
      </ul>
      <p>Neue virtuelle Ereignisse starten alle 2-3 Minuten, sodass immer etwas zum Wetten bereit ist.</p>
    </div>
  </section>

  <!-- Tipps zum Wetten -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Sportwetten-Tipps</h2>
      <p>Ein paar einfache Grundregeln, damit das Wetten Spaß macht und nachhaltig bleibt:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Budget festlegen, bevor es losgeht.</strong> Entscheide, wie viel du pro Woche oder Monat wetten möchtest, und halte dich daran. Behandle es als Unterhaltungsbudget, nicht als Investition.
          </div>
        </li>
        <li>
          <div>
            <strong>Auf Sportarten wetten, die du kennst.</strong> Halte dich an Ligen und Sportarten, bei denen du wirklich Ahnung hast. Kenntnisse über Mannschaften, Spieler und Bedingungen geben dir mehr Urteilsvermögen als das Jagen zufälliger Märkte.
          </div>
        </li>
        <li>
          <div>
            <strong>Verluste nicht hinterherjagen.</strong> Nach einer schlechten Serie die Einsätze erhöhen, um Verluste auszugleichen - das führt selten zum Ziel. Pause machen und mit klarem Kopf zurückkehren.
          </div>
        </li>
        <li>
          <div>
            <strong>Wetthistorie führen.</strong> Behalte deine Wetten im Blick, damit du weißt, was funktioniert und was nicht. Mit der Zeit erkennst du Muster und kannst bessere Entscheidungen treffen.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Sportwetten FAQ -->
  <section class="content-section content-section--alt" id="sports-faq">
    <div class="container container--narrow">
      <h2>Sportwetten FAQ</h2>

      <details class="faq-item">
        <summary>Bietet <?php echo SITE_NAME; ?> ein Sportwetten-Angebot an?</summary>
        <div class="faq-answer">
          <p>Ja. Wir bieten ein vollständiges Sportbuch mit Vorauswetten, Live-Märkten, virtuellem Sport und Pferderennen - alles neben unserem Casino. Du kannst von demselben Konto aus zwischen Casino und Sport wechseln.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Auf welche Sportarten kann ich wetten?</summary>
        <div class="faq-answer">
          <p>Wir decken 30+ Sportarten ab, darunter Fußball (Bundesliga, Champions League, DFB-Pokal), Tennis, Basketball, Handball, Motorsport, Eishockey, Boxen, E-Sport, Pferderennen, Rugby, American Football und viele mehr. Sowohl große Ligen als auch kleinere Wettbewerbe sind verfügbar.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Sind Live-Wetten verfügbar?</summary>
        <div class="faq-answer">
          <p>Ja. Live-Wetten sind für die meisten Sportarten verfügbar. Die Quoten aktualisieren sich in Echtzeit mit dem Spielverlauf, und du kannst während der gesamten Veranstaltung Wetten platzieren.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Was ist virtueller Sport?</summary>
        <div class="faq-answer">
          <p>Virtueller Sport sind simulierte Ereignisse, die von Zufallszahlengeneratoren betrieben werden. Sie laufen 24/7 mit neuen Ereignissen alle paar Minuten. Wir bieten virtuellen Fußball, Basketball, Tennis, Pferderennen und Windhundrennen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kann ich mein Casino-Guthaben für Sportwetten nutzen?</summary>
        <div class="faq-answer">
          <p>Ja. <?php echo SITE_NAME; ?> nutzt ein einziges Guthaben für Casino und Sportbuch. Einzahlungen gehen auf ein Konto, und du kannst dasselbe Guthaben für Spielautomaten, Live-Casino oder Sportwetten verwenden - ohne Umbuchungen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Was ist der Mindesteinsatz bei Sportwetten?</summary>
        <div class="faq-answer">
          <p>Der Mindesteinsatz variiert je nach Sportart und Markt, liegt aber in der Regel sehr niedrig - ab 0,50 &euro; auf den meisten Ereignissen. Den genauen Mindesteinsatz für jeden Markt findest du im Wettschein.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
