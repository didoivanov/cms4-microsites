<?php
/**
 * Homepage – German
 */
$page_title = SITE_NAME . ' Casino - Online Casino, Sportwetten & 8.000+ Spiele';
$page_description = SITE_NAME . ' Casino bietet 8.000+ Spiele von 103+ Anbietern, Live-Dealer-Tische, Sportwetten auf 30+ Sportarten und einen Willkommensbonus bis zu EUR 2.000 plus 300 Freispiele über drei Einzahlungen. Jetzt mitmachen und spielen.';
$current_page = 'home';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__badge">Jetzt geöffnet - Spieler weltweit willkommen</div>
    <h1>
      <span class="brand-name"><?php echo SITE_NAME; ?></span><br>
      <span class="brand-type">Casino</span>
    </h1>
    <p class="hero__subtitle">Über 8.000 Spiele von 103+ Anbietern, ein komplettes Sportwetten-Angebot mit 30+ Sportarten, Live-Dealer-Tische und ein mehrstufiges Willkommenspaket für Ihre ersten drei Einzahlungen.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Willkommenspaket</div>
      <div class="hero__bonus-value"><?php echo WELCOME_BONUS; ?></div>
      <div class="hero__bonus-extra">Sportbonus: 100% bis zu &euro;500 &middot; Mindesteinzahlung &euro;20</div>
    </div>
    <div class="hero__ctas">
      <a href="/play" class="btn btn--primary btn--lg" rel="nofollow"><?php echo __('cta_play', 'Jetzt spielen'); ?></a>
      <a href="/de/bonuses" class="btn btn--outline btn--lg">Boni ansehen</a>
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
      <p><?php echo SITE_NAME; ?> ist ein Online-Casino und Sportwetten-Anbieter, der 2025 unter der Curacao-Lizenz OGL/2024/129/0131 gestartet wurde und von 130 group N.V. betrieben wird. Die Plattform vereint über 8.000 Spiele von 103+ Anbietern -- darunter Spielautomaten, Live-Dealer-Lobbys, Tischspiele, Sofortgewinn-Titel und ein komplettes Sportwetten-Angebot mit Pre-Match- und Live-Wetten auf 30+ Sportarten. Neue Spieler erhalten ein Willkommenspaket über drei Einzahlungen im Wert von bis zu EUR 2.000 plus 300 Freispiele im Casino, oder bis zu EUR 500 über drei Sporteinzahlungen.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Start</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Lizenz</th><td>Curacao OGL/2024/129/0131</td></tr>
        <tr><th>Spiele</th><td>8.000+ (Spielautomaten, Tischspiele, Live-Casino, Sofortspiele)</td></tr>
        <tr><th>Anbieter</th><td>103+ (Play'n GO, Playtech, Pragmatic Play, BGaming, Hacksaw Gaming u.v.m.)</td></tr>
        <tr><th>Sport</th><td>30+ Sportarten, Esports, virtuelle Sportarten</td></tr>
        <tr><th>Willkommensbonus</th><td><?php echo WELCOME_BONUS_TEXT; ?></td></tr>
        <tr><th>Mindesteinzahlung</th><td>EUR 10 (EUR 20 für die meisten Boni)</td></tr>
        <tr><th>Währungen</th><td>EUR, CHF, USD, CAD, AUD, NZD, PLN, BRL, NOK, ZAR, CZK, HUF, CLP</td></tr>
        <tr><th>Support</th><td>24/7 Live-Chat, E-Mail und Telegram</td></tr>
        <tr><th>Mobil</th><td>Vollständig responsiv, keine App erforderlich</td></tr>
      </table>

      <h3>Warum Spieler sich für <?php echo SITE_NAME; ?> entscheiden</h3>
      <ul class="check-list">
        <li>Über 8.000 Spiele von 103+ lizenzierten Anbietern</li>
        <li>Willkommenspaket über drei Einzahlungen bis zu EUR 2.000 + 300 Freispiele</li>
        <li>Komplettes Sportwetten-Angebot mit Pre-Match- und Live-Wetten auf 30+ Sportarten</li>
        <li>Sport-Willkommensbonus bis zu EUR 500 über drei Einzahlungen</li>
        <li>Wöchentliche Reload-Boni, Cashback-Programme und Turniere</li>
        <li>5-stufiges VIP-Programm mit persönlichem Account-Manager und höheren Limits</li>
        <li>20+ Zahlungsmethoden inklusive Visa, Mastercard, Skrill, Krypto und E-Wallets</li>
        <li>24/7 Support per Live-Chat, E-Mail und Telegram</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Casino-Spiele</h4>
          <p>Tausende Spielautomaten, Blackjack- und Roulette-Varianten, Poker, Baccarat, Game Shows, Crash-Spiele und Live-Dealer-Tische von Studios wie Play'n GO, Pragmatic Play und Hacksaw Gaming.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Sportwetten</h4>
          <p>Pre-Match- und Live-Wetten auf grosse Ligen wie UEFA Champions League, NBA, NHL und Grand-Slam-Turniere. Esports mit Dota 2, CS2 und League of Legends. Virtuelle Sportarten rund um die Uhr verfügbar.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127873;</div>
          <h4>Aktionen</h4>
          <p>Drei-Einzahlungs-Willkommenspakete für Casino und Sport, wöchentliche Reload-Boni, 15% Sport-Cashback, Turniere und ein 5-stufiges VIP-Programm mit exklusiven Belohnungen.</p>
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
      <div class="jackpot-amount" id="jackpotCounter">&euro;2,847,391</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Beliebte Spiele bei <?php echo SITE_NAME; ?></h2>
      <p>Hier finden Sie einige der meistgespielten Titel im Casino. Von hochvolatilen Spielautomaten über klassische Tischspiele bis hin zu Live-Dealer-Räumen -- für jeden Spielertyp ist etwas dabei.</p>

      <div class="game-tabs">
        <button class="game-tab active">Alle Spiele</button>
        <button class="game-tab">Spielautomaten</button>
        <button class="game-tab">Live-Casino</button>
        <button class="game-tab">Tischspiele</button>
        <button class="game-tab">Game Shows</button>
        <button class="game-tab">Crash-Spiele</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Top-Spieleanbieter</h3>
          <p>Der Katalog wird von einer breiten Mischung aus Studios betrieben -- von Branchenführern bis zu vielversprechenden unabhängigen Entwicklern:</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">103+ insgesamt</span>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-games-screen.png" alt="<?php echo SITE_NAME; ?> Casino game lobby showing top slots from providers like Novomatic, Play'n GO and Hacksaw Gaming" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>
    </div>
  </section>

  <!-- Sportsbook -->
  <section class="content-section" id="sports">
    <div class="container">
      <h2>Sportwetten</h2>
      <div class="two-col" style="align-items:flex-start;gap:var(--space-8)">
        <div>
          <p>Das Sportwetten-Angebot von <?php echo SITE_NAME; ?> umfasst Pre-Match- und Live-Wetten auf Events grosser und kleinerer Wettbewerbe. Fussballfans können auf alles wetten -- von der UEFA Champions League bis zu den unteren Ligen. Basketball, Tennis, Eishockey und ein Dutzend weiterer Sportarten ergänzen das Programm.</p>
          <p>Virtuelle Sportarten wie Fussball, Basketball und Windhundrennen laufen rund um die Uhr. Esports-Wetten decken Dota 2, Counter-Strike 2, League of Legends, Call of Duty und weitere kompetitive Titel ab.</p>

          <h3>Verfügbare Sportarten</h3>
          <ul class="check-list">
            <li>Fussball (UEFA Champions League, Premier League, Bundesliga, Serie A, La Liga)</li>
            <li>Basketball (NBA, EuroLeague, nationale Ligen)</li>
            <li>Tennis (Grand Slam, ATP, WTA)</li>
            <li>Eishockey (NHL, KHL, SHL)</li>
            <li>Esports (Dota 2, CS2, League of Legends, Call of Duty)</li>
            <li>Virtuelle Sportarten, Pferderennen und 25+ weitere</li>
          </ul>
        </div>
        <div>
          <div style="text-align:center;margin-bottom:var(--space-6)">
            <img src="/assets/img/vipluck-sports.png" alt="<?php echo SITE_NAME; ?> sportsbook showing live Champions League odds and sports betting interface" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
          </div>
          <div class="highlight-box">
            <h4>Sport-Willkommensbonus</h4>
            <p>Neue Spieler können bis zu EUR 500 an Sportboni über ihre ersten drei Einzahlungen erhalten: 100% bis zu EUR 200 auf die erste, 100% bis zu EUR 150 auf die zweite und 100% bis zu EUR 150 auf die dritte. Mindesteinzahlung ist EUR 20. Umsatzanforderung: 6x bei einer Mindestquote von 1,60.</p>
          </div>
          <table class="quick-table" style="margin-top: var(--space-6);">
            <tr><th>Wettarten</th><td>Pre-Match, Live, Langzeitwetten, Kombiwetten</td></tr>
            <tr><th>Sport</th><td>30+ inklusive Esports und virtuelle Sportarten</td></tr>
            <tr><th>Features</th><td>Kombiboost, vorzeitige Auszahlung, erhöhte Quoten</td></tr>
            <tr><th>Cashback</th><td>15% wöchentlich bis zu EUR 500</td></tr>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section content-section--alt" id="payments">
    <div class="container">
      <h2>Zahlungsmethoden</h2>
      <p><?php echo SITE_NAME; ?> unterstützt über 20 Zahlungsmethoden, darunter Kreditkarten, E-Wallets, Prepaid-Karten und 10 Kryptowährungen. Die Verfügbarkeit hängt von Ihrem Land ab. Einzahlungen starten ab EUR 10.</p>

      <table class="quick-table">
        <tr><th>Einzahlungsmethoden</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Mindesteinzahlung</th><td>EUR 10 (EUR 20 für die meisten Boni)</td></tr>
        <tr><th>Mindestauszahlung</th><td>EUR 20</td></tr>
        <tr><th>Max. Auszahlung (täglich)</th><td>EUR 700 (VIP: EUR 1.500)</td></tr>
        <tr><th>Max. Auszahlung (wöchentlich)</th><td>EUR 2.250 (VIP: EUR 7.000)</td></tr>
        <tr><th>Max. Auszahlung (monatlich)</th><td>EUR 9.000 (VIP: EUR 28.000)</td></tr>
        <tr><th>Bearbeitungszeit</th><td>Bis zu 72 Stunden, keine Bearbeitung am Wochenende (bis zu 7 Werktage insgesamt)</td></tr>
        <tr><th>Währungen</th><td>EUR, CHF, USD, CAD, AUD, NZD, PLN, BRL, NOK, ZAR, CZK, HUF, CLP</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">Für eine ausführliche Aufstellung der Auszahlungsmethoden, Limits, Gebühren und Tipps zur schnelleren Auszahlung besuchen Sie die <a href="/de/withdrawal">Auszahlungsseite</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section" id="mobile">
    <div class="container">
      <h2>Mobiles Casino</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p><?php echo SITE_NAME; ?> hat keine eigene mobile App, aber die Website ist vollständig mit allen Smartphones und Tablets kompatibel. Die browserbasierte Plattform bietet die gleichen Funktionen, Spiele und Kontoverwaltungs-Tools wie die Desktop-Version. Kein Download nötig -- öffnen Sie einfach Ihren mobilen Browser, melden Sie sich an und spielen Sie los.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/vipluck-lobby.png" alt="<?php echo SITE_NAME; ?> Casino mobile lobby with welcome bonus and game navigation" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>
      <ul class="check-list">
        <li>Komplette Spielbibliothek über mobile Browser zugänglich</li>
        <li>Sportwetten mit Live-Märkten</li>
        <li>Ein- und Auszahlungen direkt vom Handy</li>
        <li>Live-Chat und Telegram-Support auf dem Handy verfügbar</li>
        <li>Kein App-Download nötig -- funktioniert auf iOS und Android</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section content-section--alt" id="faq">
    <div class="container container--narrow">
      <h2>Häufig gestellte Fragen</h2>

      <details class="faq-item">
        <summary>Welche Spiele gibt es bei <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> arbeitet mit 103+ Anbietern zusammen, darunter Play'n GO, Playtech, Pragmatic Play, BGaming und Hacksaw Gaming. Sie können Video-Slots, Jackpot-Slots, Megaways-Titel, Blackjack, Roulette, Baccarat, Poker, Game Shows, Crash-Spiele und vieles mehr spielen. Die Sportwetten decken 30+ Sportarten mit Pre-Match- und Live-Optionen ab.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wie sieht der Willkommensbonus bei <?php echo SITE_NAME; ?> Casino aus?</summary>
        <div class="faq-answer">
          <p>Neue Casino-Spieler erhalten ein Willkommenspaket über drei Einzahlungen: 100% bis zu EUR 500 + 100 Freispiele auf die erste Einzahlung, 100% bis zu EUR 750 + 75 Freispiele auf die zweite und 100% bis zu EUR 750 + 125 Freispiele auf die dritte. Gesamtwert: bis zu EUR 2.000 + 300 Freispiele. Sportwetter können bis zu EUR 500 über drei Einzahlungen erhalten. Mindesteinzahlung ist EUR 20.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wie hoch ist die maximale Auszahlung bei <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>Standardspieler können bis zu EUR 700 pro Tag, EUR 2.250 pro Woche und EUR 9.000 pro Monat auszahlen. VIP-Mitglieder haben höhere Limits: EUR 1.500 täglich, EUR 7.000 wöchentlich und EUR 28.000 monatlich. Die Mindestauszahlung beträgt EUR 20. Auszahlungen werden innerhalb von 72 Stunden an Werktagen bearbeitet.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Gibt es ein VIP-Programm bei <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Ja. <?php echo SITE_NAME; ?> betreibt ein 5-stufiges VIP-Programm mit Aufstieg nur auf Einladung. Zu den Vorteilen gehören ein persönlicher Account-Manager, höhere Auszahlungslimits, exklusive Boni und bevorzugte Auszahlungsbearbeitung. Je höher Ihre Stufe, desto besser die Belohnungen und Cashback-Prozentsätze.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kann ich auf meinem Handy spielen?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> hat keine mobile App, aber die Website ist vollständig mobiloptimiert. Sie können alle Spiele, Sportwetten und Kontofunktionen über jeden modernen Smartphone- oder Tablet-Browser nutzen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wie erreiche ich den Kundenservice?</summary>
        <div class="faq-answer">
          <p>Sie erreichen das Support-Team per Live-Chat, per E-Mail an support@vipluck.com oder über Telegram -- rund um die Uhr. Der Live-Chat ist direkt auf der Website für schnelle Antworten verfügbar. Weitere Informationen finden Sie auf der <a href="/de/support">Support-Seite</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
