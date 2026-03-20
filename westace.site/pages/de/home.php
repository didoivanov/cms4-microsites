<?php
/**
 * Homepage - WestAce (Deutsch / DE)
 */
$page_title = 'WestAce Casino - 7.000+ Spiele, Sportwetten &amp; Willkommensbonus bis zu 2.000 &euro;';
$page_description = SITE_NAME . ' Casino bietet über 7.000 Spiele von 100+ Anbietern, ein vollständiges Sportwetten-Angebot mit Live-Wetten, Live-Dealer-Tische und einen Willkommensbonus von 100% bis zu 1.000 € plus 50 Freispiele. Jetzt registrieren und spielen.';
$current_page = 'home';
$lang_prefix = '/de';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__badge">Jetzt geöffnet - 7.000+ Spiele und Live-Sportwetten</div>
    <h1>
      <span class="brand-name"><?php echo SITE_NAME; ?></span><br>
      <span class="brand-type">Casino</span>
    </h1>
    <p class="hero__subtitle">Über 7.000 Spiele von 100+ Anbietern, Live-Dealer-Tische, ein vollständiges Sportwetten-Angebot mit Live-Wetten und ein Willkommenspaket, das deine ersten drei Einzahlungen belohnt.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Willkommenspaket</div>
      <div class="hero__bonus-value"><?php echo WELCOME_BONUS; ?></div>
      <div class="hero__bonus-extra">1. Einzahlung: 100% bis zu 1.000 &euro; + 50 Freispiele &middot; Mindesteinzahlung 20 &euro;</div>
    </div>
    <div class="hero__ctas">
      <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Jetzt Spielen</a>
      <a href="<?php echo $lang_prefix; ?>/bonuses" class="btn btn--outline btn--lg">Boni ansehen</a>
    </div>
  </div>
</section>

<!-- STATS BAR -->
<section class="stats-bar">
  <div class="container">
    <div class="stats-bar__grid">
<?php foreach ($STATS as $stat): ?>
      <div class="stat">
        <div class="stat__value"><?php echo $stat['value']; ?></div>
        <div class="stat__label"><?php echo $stat['label']; ?></div>
      </div>
<?php endforeach; ?>
    </div>
  </div>
</section>

<!-- MAIN CONTENT -->
<main>
  <!-- About -->
  <section class="content-section" id="about">
    <div class="container">
      <h2>Willkommen bei <?php echo SITE_NAME; ?> Casino</h2>
      <p><?php echo SITE_NAME; ?> ist ein Online Casino und Sportwetten-Anbieter, der 2026 gestartet ist. Die Plattform vereint mehr als 7.000 Spiele von 100+ Anbietern - darunter Spielautomaten, Live-Dealer-Lobbys, Tischspiele, Crash-Spiele, Jackpot-Titel und Gameshows. Neben dem Casino bieten wir ein vollständiges Sportwetten-Angebot mit Pre-Match- und Live-Wetten, virtuellem Sport und Pferderennen. Neue Spieler können ein Willkommenspaket über drei Einzahlungen mit einem Gesamtwert von bis zu 2.000 &euro; plus 150 Freispielen beanspruchen.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Gestartet</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Spiele</th><td>7.000+ (Spielautomaten, Tischspiele, Live Casino, Crash-Spiele, Jackpots, Gameshows)</td></tr>
        <tr><th>Anbieter</th><td>100+ (Pragmatic Play, Playtech, Novomatic, Red Tiger, Yggdrasil, BGaming, Hacksaw Gaming und weitere)</td></tr>
        <tr><th>Willkommensbonus</th><td><?php echo WELCOME_BONUS_TEXT; ?></td></tr>
        <tr><th>Mindesteinzahlung</th><td>10 &euro;</td></tr>
        <tr><th>Währung</th><td>EUR</td></tr>
        <tr><th>Support</th><td>24/7 Live-Chat + E-Mail</td></tr>
        <tr><th>Sportwetten</th><td>Ja (Sport, Live-Wetten, virtueller Sport, Pferderennen)</td></tr>
        <tr><th>Mobil</th><td>Vollständig responsiv, keine App erforderlich</td></tr>
      </table>

      <h3>Warum Spieler <?php echo SITE_NAME; ?> wählen</h3>
      <ul class="check-list">
        <li>Über 7.000 Spiele von 100+ lizenzierten Anbietern</li>
        <li>Willkommenspaket über drei Einzahlungen bis zu 2.000 &euro; + 150 Freispiele</li>
        <li>Vollständiges Sportwetten-Angebot mit Live-Wetten, virtuellem Sport und Pferderennen</li>
        <li>Live Casino mit Roulette, Blackjack, Baccarat, Würfelspiele und Poker</li>
        <li>Täglicher Cashback bis zu 15% mit nur 1-facher Umsatzbedingung</li>
        <li>5-stufiges VIP-Programm mit persönlichem Manager und höheren Limits</li>
        <li>Krypto-freundlich mit separatem Willkommensbonus und Reload-Angeboten</li>
        <li>24/7 Support via Live-Chat und E-Mail</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Casino-Spiele</h4>
          <p>Tausende Spielautomaten, Blackjack- und Roulette-Varianten, Poker, Baccarat, Crash-Spiele und Live-Dealer-Tische von Studios wie Pragmatic Play, Playtech, Novomatic, Red Tiger und Yggdrasil.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127183;</div>
          <h4>Live Casino</h4>
          <p>Live-Dealer-Spiele mit echten Croupiers - Roulette, Blackjack, Baccarat, Würfelspiele und Poker. HD-Streaming aus professionellen Studios rund um die Uhr.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Sportwetten</h4>
          <p>Umfassendes Sportwetten-Angebot mit Pre-Match- und Live-In-Play-Märkten. Bundesliga, Champions League und alle großen Sportarten - dazu virtueller Sport und Pferderennen.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Social Proof / Recent Winners -->
  <section class="content-section winners-section" id="winners">
    <div class="container">
      <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--space-4);margin-bottom:var(--space-2)">
        <h2 style="margin-bottom:0">Aktuelle Gewinner</h2>
        <span class="live-dot">Live</span>
      </div>
      <div class="jackpot-label">Aktueller Jackpot-Pool</div>
      <div class="jackpot-amount" id="jackpotCounter">2.847.391 &euro;</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Beliebte Spiele bei <?php echo SITE_NAME; ?></h2>
      <p>Entdecke die meistgespielten Titel im Casino. Von hochvolatilen Spielautomaten über klassische Tischspiele bis hin zu Live-Dealer-Räumen und Sportmärkten - für jeden Spielertyp ist etwas dabei.</p>

      <div class="game-tabs">
        <button class="game-tab active">Alle Spiele</button>
        <button class="game-tab">Spielautomaten</button>
        <button class="game-tab">Live Casino</button>
        <button class="game-tab">Tischspiele</button>
        <button class="game-tab">Crash-Spiele</button>
        <button class="game-tab">Jackpots</button>
        <button class="game-tab">Sport</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Top Spieleanbieter</h3>
          <p>Unser Spielekatalog wird von einem breiten Mix aus Studios betrieben - von Branchenführern bis hin zu aufstrebenden unabhängigen Entwicklern:</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">100+ gesamt</span>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-games-screen.png" alt="<?php echo SITE_NAME; ?> Casino Spiellobby mit Top-Spielautomaten von Anbietern wie Pragmatic Play, Playtech und Novomatic" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section" id="payments">
    <div class="container">
      <h2>Zahlungsmethoden</h2>
      <p><?php echo SITE_NAME; ?> unterstützt eine Vielzahl von Zahlungsmethoden - darunter Kreditkarten, Prepaid-Karten, E-Wallets und Kryptowährungen. Einzahlungen starten ab 10 &euro;, und alle Einzahlungen sowie Auszahlungen sind gebührenfrei.</p>

      <table class="quick-table">
        <tr><th>Einzahlungsmethoden</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Mindesteinzahlung</th><td>10 &euro;</td></tr>
        <tr><th>Mindest-Auszahlung</th><td>10 &euro;</td></tr>
        <tr><th>Max. Auszahlung</th><td>500 &euro;/Tag, 7.000 &euro;/Monat</td></tr>
        <tr><th>Auszahlungszeit</th><td>24-72 Stunden</td></tr>
        <tr><th>Währung</th><td>EUR</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">Eine detaillierte Übersicht über Auszahlungsmethoden, Limits, Gebühren und Tipps zur schnelleren Auszahlung findest du auf der <a href="<?php echo $lang_prefix; ?>/withdrawal">Auszahlungsseite</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section content-section--alt" id="mobile">
    <div class="container">
      <h2>Mobiles Casino</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p><?php echo SITE_NAME; ?> hat keine eigenständige mobile App, aber die Website ist vollständig mit allen Smartphones und Tablets kompatibel. Die browserbasierte Plattform bietet dieselben Funktionen, Spiele und Kontoverwaltungstools wie die Desktop-Version. Kein Download erforderlich - einfach den mobilen Browser öffnen, einloggen und spielen.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/westace-mobile.png" alt="<?php echo SITE_NAME; ?> Casino Mobile-Lobby mit Willkommensbonus und Spielnavigation" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>
      <ul class="check-list">
        <li>Vollständige Spielbibliothek im mobilen Browser zugänglich</li>
        <li>Live-Dealer-Tische und Sportwetten unterwegs</li>
        <li>Einzahlungen und Auszahlungen direkt vom Smartphone</li>
        <li>Live-Chat-Support auf dem Handy verfügbar</li>
        <li>Kein App-Download nötig - funktioniert auf iOS und Android</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section" id="faq">
    <div class="container container--narrow">
      <h2>Häufig gestellte Fragen</h2>

      <details class="faq-item">
        <summary>Welche Spiele kann ich bei <?php echo SITE_NAME; ?> Casino spielen?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> arbeitet mit 100+ Anbietern zusammen, darunter Pragmatic Play, Playtech, Novomatic, Red Tiger, Yggdrasil, BGaming, Hacksaw Gaming und Quickspin. Du kannst Video-Spielautomaten, Jackpot-Slots, Blackjack, Roulette, Baccarat, Poker, Crash-Spiele, Gameshows und Live-Dealer-Titel spielen. Dazu gibt es ein vollständiges Sportwetten-Angebot mit Live-Wetten, virtuellem Sport und Pferderennen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wie hoch ist der Willkommensbonus bei <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>Neue Spieler erhalten ein Willkommenspaket über drei Einzahlungen: 100% bis zu 1.000 &euro; + 50 Freispiele auf die erste Einzahlung, 100% bis zu 500 &euro; + 50 Freispiele auf die zweite und 100% bis zu 500 &euro; + 50 Freispiele auf die dritte. Gesamtwert: bis zu 2.000 &euro; + 150 Freispiele. Die Mindesteinzahlung beträgt 20 &euro; pro Stufe. Die Umsatzbedingungen betragen 35-fach (Bonus + Einzahlung).</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wie schnell werden Auszahlungen bearbeitet?</summary>
        <div class="faq-answer">
          <p>Auszahlungen werden innerhalb von 24 bis 72 Stunden bearbeitet. Der Mindestbetrag für eine Auszahlung liegt bei 10 &euro; für alle Zahlungsmethoden. Das tägliche Auszahlungslimit beträgt 500 &euro;, das monatliche Limit 7.000 &euro;. Für Auszahlungen fallen keine Gebühren an.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Hat <?php echo SITE_NAME; ?> ein VIP-Programm?</summary>
        <div class="faq-answer">
          <p>Ja. <?php echo SITE_NAME; ?> betreibt ein 5-stufiges VIP-Programm. Zu den Vorteilen gehören höhere Cashback-Prozentsätze (bis zu 15%), erhöhte Auszahlungslimits, bevorzugte Bearbeitung, personalisierte Angebote und ein persönlicher VIP-Manager auf den obersten Stufen. Die Kriterien für den Aufstieg zwischen den Stufen werden nicht öffentlich bekannt gegeben.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kann ich auf dem Smartphone spielen?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> hat keine mobile App, aber die Website ist vollständig mobilfreundlich. Du kannst über jeden modernen Smartphone- oder Tablet-Browser auf alle Spiele, die Sportwetten und alle Kontofunktionen zugreifen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wie erreiche ich den Kundensupport?</summary>
        <div class="faq-answer">
          <p>Das Support-Team ist über den 24/7 Live-Chat direkt auf der Website oder per E-Mail an support@westace.com erreichbar. Weitere Details findest du auf der <a href="<?php echo $lang_prefix; ?>/support">Hilfeseite</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
