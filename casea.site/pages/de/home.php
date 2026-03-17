<?php
/**
 * Homepage - German
 */
$page_title = SITE_NAME . ' Casino - Online Casino, Sportwetten & Live Dealer Spiele';
$page_description = SITE_NAME . ' Casino bietet 10.000+ Casino-Spiele, Live Dealer, Sportwetten auf 30+ Sportarten und einen Willkommensbonus bis zu EUR 500 plus 200 Freispiele. Jetzt mitmachen und spielen.';
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
    <p class="hero__subtitle">Über 10.000 Spiele von 90+ Anbietern, ein komplettes Sportwetten-Angebot mit 30+ Sportarten, Live Dealer Tische und Belohnungen, die sich wirklich lohnen.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Willkommenspaket</div>
      <div class="hero__bonus-value"><?php echo WELCOME_BONUS; ?></div>
      <div class="hero__bonus-extra">Sportbonus: 100% bis zu &euro;100 &middot; Mindesteinzahlung &euro;20</div>
    </div>
    <div class="hero__ctas">
      <a href="/play" class="btn btn--primary btn--lg" rel="nofollow"><?php echo __('cta_play', 'Play Now'); ?></a>
      <a href="/bonuses" class="btn btn--outline btn--lg">Boni ansehen</a>
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
      <p><?php echo SITE_NAME; ?> ist eine moderne Online-Glücksspielplattform, auf der Spieler tausende Wettmöglichkeiten an einem Ort entdecken können. Mit einem Katalog von über 10.000 Produkten – darunter Slots, Minispiele, virtuelle Karten- und Tischspiele sowie eine Auswahl an Live Dealer Lobbys – wird es garantiert nie langweilig. Auf der Sportwetten-Seite sorgen attraktive Quoten bei mehr als 30 Sportarten für Spannung bei Fußball-, Basketball-, Tennis- und Esports-Fans gleichermaßen.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Gestartet</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Spiele</th><td>10.000+ (Slots, Tischspiele, Live Casino, Instant Games)</td></tr>
        <tr><th>Anbieter</th><td>90+ (Pragmatic Play, Evolution, Microgaming, NetEnt, Playtech und mehr)</td></tr>
        <tr><th>Sportarten</th><td>30+ Sportarten, Esports, Virtual Sports</td></tr>
        <tr><th>Willkommensbonus</th><td><?php echo WELCOME_BONUS_TEXT; ?></td></tr>
        <tr><th>Mindesteinzahlung</th><td>EUR 10 (EUR 20 für die meisten Boni)</td></tr>
        <tr><th>Währungen</th><td>EUR, USD, CAD, AUD, CHF, HUF, NOK, PLN, NZD, CZK, BRL, CLP, PEN</td></tr>
        <tr><th>Support</th><td>24/7 Live-Chat und E-Mail</td></tr>
        <tr><th>Mobil</th><td>Voll responsiv, keine App nötig</td></tr>
      </table>

      <h3>Warum Spieler sich für <?php echo SITE_NAME; ?> entscheiden</h3>
      <ul class="check-list">
        <li>Mehr als 10.000 Spiele von 90+ vertrauenswürdigen Anbietern</li>
        <li>Komplettes Sportwetten-Angebot mit Pre-Match- und Live-Wetten auf 30+ Sportarten</li>
        <li>Mehrere Willkommensboni für Casino und Sportwetten</li>
        <li>Wöchentliche Reload-Boni, Cashback-Aktionen und ein Loyalty Shop</li>
        <li>VIP-Programm mit persönlichem Account Manager und höheren Auszahlungslimits</li>
        <li>Zahlungen über Visa, Mastercard, Skrill, Krypto und mehr</li>
        <li>24/7 Kundenservice per Live-Chat und E-Mail</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Casino-Spiele</h4>
          <p>Tausende Slots, Blackjack- und Roulette-Varianten, Poker, Baccarat, Game Shows, Instant Games und Live Dealer Tische von erstklassigen Studios.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Sportwetten</h4>
          <p>Pre-Match- und Live-Wetten auf große Ligen wie die UEFA Champions League, NBA, NHL und Grand Slam Turniere. Virtual Sports und Esports sind ebenfalls verfügbar.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127873;</div>
          <h4>Aktionen</h4>
          <p>Willkommensboni, wöchentliche Reload-Aktionen, mehrere Cashback-Programme, ein Loyalty Shop, Challenges und Sonderangebote die ganze Woche über.</p>
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
      <p>Entdecke einige der meistgespielten Titel im Casino. Von hochvolatilen Slots über klassische Tischspiele bis hin zu Live Dealer Erlebnissen – hier ist für jeden Spielertyp etwas dabei.</p>

      <div class="game-tabs">
        <button class="game-tab active">Alle Spiele</button>
        <button class="game-tab">Slots</button>
        <button class="game-tab">Live Casino</button>
        <button class="game-tab">Tischspiele</button>
        <button class="game-tab">Game Shows</button>
        <button class="game-tab">Crash Games</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Top-Spieleanbieter</h3>
          <p>Der Katalog wird von einem breiten Mix aus Studios angetrieben – von Branchenführern bis hin zu vielversprechenden unabhängigen Entwicklern:</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">90+ weitere</span>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/casea-games.png" alt="<?php echo SITE_NAME; ?> Casino Spielelobby mit Top-Slots und Anbietern" style="max-width:300px;width:100%;">
        </div>
      </div>
    </div>
  </section>

  <!-- Sportsbook -->
  <section class="content-section" id="sports">
    <div class="container">
      <h2>Sportwetten</h2>
      <div class="two-col">
        <div>
          <p>Der Sportwetten-Bereich bei <?php echo SITE_NAME; ?> umfasst Pre-Match- und Live-Wetten auf Events großer und kleinerer Wettbewerbe. Fußball-Fans können auf alles setzen – von der UEFA Champions League bis hin zu unteren Ligen – während Basketball, Tennis, Eishockey und ein Dutzend weiterer Sportarten den Spielplan vervollständigen.</p>
          <p>Virtual Sports wie Fußball, Basketball und Hunderennen sind rund um die Uhr verfügbar. Esports-Wetten decken Dota 2, Counter-Strike, League of Legends, Call of Duty und weitere beliebte Titel ab.</p>

          <h3>Verfügbare Sportarten</h3>
          <ul class="check-list">
            <li>Fußball (UEFA Champions League, Premier League, Bundesliga, Serie A, La Liga)</li>
            <li>Basketball (NBA, EuroLeague, nationale Ligen)</li>
            <li>Tennis (Grand Slam, ATP, WTA)</li>
            <li>Eishockey (NHL, KHL, SHL)</li>
            <li>Esports (Dota 2, CS2, League of Legends, Call of Duty)</li>
            <li>Virtual Sports, Pferderennen und 25+ weitere</li>
          </ul>
        </div>
        <div>
          <div class="highlight-box">
            <h4>Sportwetten-Willkommensbonus</h4>
            <p>Neue Spieler können einen 100%-Match auf ihre erste Sportwetten-Einzahlung beanspruchen – bis zu EUR 100. Spieler aus Finnland, Deutschland, Norwegen, der Schweiz und Österreich qualifizieren sich für bis zu EUR 200. Der Bonus erfordert eine Mindesteinzahlung von EUR 20 und eine 5- bis 6-fache Umsatzanforderung, je nach Land.</p>
          </div>
          <table class="quick-table" style="margin-top: var(--space-6);">
            <tr><th>Wettarten</th><td>Pre-Match, Live, Langzeitwetten, Kombiwetten</td></tr>
            <tr><th>Sportarten</th><td>30+ inklusive Esports und Virtuals</td></tr>
            <tr><th>Features</th><td>Kombiwetten-Boost, Early Payout, Enhanced Odds</td></tr>
            <tr><th>Cashback</th><td>10% wöchentlich bis zu EUR 500</td></tr>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section content-section--alt" id="payments">
    <div class="container">
      <h2>Zahlungsmethoden</h2>
      <p><?php echo SITE_NAME; ?> unterstützt mehrere beliebte Zahlungsoptionen. Die Verfügbarkeit hängt von deinem Land ab, und Einzahlungen sind ab EUR 10 möglich.</p>

      <table class="quick-table">
        <tr><th>Einzahlungsmethoden</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Mindesteinzahlung</th><td>EUR 10 (EUR 20 für die meisten Boni)</td></tr>
        <tr><th>Mindestauszahlung</th><td>EUR 10</td></tr>
        <tr><th>Max. Auszahlung (täglich)</th><td>EUR 500 (VIP: EUR 1.500)</td></tr>
        <tr><th>Max. Auszahlung (monatlich)</th><td>EUR 7.000 (VIP: EUR 20.000)</td></tr>
        <tr><th>Bearbeitungszeit</th><td>Bis zu 72 Stunden (E-Wallets und Krypto sind am schnellsten)</td></tr>
        <tr><th>Währungen</th><td>EUR, USD, CAD, AUD, CHF, HUF, NOK, PLN, NZD, CZK, BRL, CLP, PEN</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">Eine ausführliche Übersicht zu Auszahlungsmethoden, Limits, Gebühren und Tipps für schnellere Auszahlungen findest du auf der <a href="/withdrawal">Auszahlungsseite</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section" id="mobile">
    <div class="container">
      <h2>Mobiles Casino</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p><?php echo SITE_NAME; ?> hat keine eigene mobile App, aber die Website ist vollständig mit allen Smartphones und Tablets kompatibel. Die browserbasierte Plattform bietet die gleichen Funktionen, Spiele und Kontoverwaltungstools wie die Desktop-Version. Kein Download nötig – einfach den mobilen Browser öffnen, einloggen und losspielen.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/casea-mobile.png" alt="<?php echo SITE_NAME; ?> Casino auf dem Handy" style="max-width:320px;width:100%;">
        </div>
      </div>
      <ul class="check-list">
        <li>Komplette Spielebibliothek im mobilen Browser verfügbar</li>
        <li>Sportwetten mit Live-Märkten</li>
        <li>Ein- und Auszahlungen direkt vom Handy</li>
        <li>Live-Chat-Support auch mobil verfügbar</li>
        <li>Kein App-Download nötig – funktioniert auf iOS und Android</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section content-section--alt" id="faq">
    <div class="container container--narrow">
      <h2>Häufig gestellte Fragen</h2>

      <details class="faq-item">
        <summary>Welche Spiele kann ich bei <?php echo SITE_NAME; ?> Casino spielen?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> arbeitet mit über 90 Anbietern zusammen, darunter Pragmatic Play, Evolution, Microgaming und Red Tiger. Du kannst Video-Slots, Jackpot-Slots, Megaways-Titel, Blackjack-Varianten, Roulette, Baccarat, Poker, Game Shows, Crash Games und vieles mehr spielen. Die Sportwetten decken 30+ Sportarten mit Pre-Match- und Live-Optionen ab.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wie sieht der Willkommensbonus bei <?php echo SITE_NAME; ?> Casino aus?</summary>
        <div class="faq-answer">
          <p>Neue Casino-Spieler können einen 100%-Willkommensbonus von bis zu EUR 500 plus 200 Freispiele auf ihre erste Einzahlung beanspruchen. Sportwetten-Spieler erhalten einen 100%-Match bis zu EUR 100 (oder EUR 200, je nach Land). Mindesteinzahlung ist EUR 20.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wie hoch ist die maximale Auszahlung bei <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>Standard-Spieler können bis zu EUR 500 pro Tag und EUR 7.000 pro Monat auszahlen. VIP-Mitglieder haben Zugang zu höheren Limits – bis zu EUR 1.500 täglich und EUR 20.000 monatlich. Die Mindestauszahlung beträgt EUR 10.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Hat <?php echo SITE_NAME; ?> ein VIP-Programm?</summary>
        <div class="faq-answer">
          <p>Ja. <?php echo SITE_NAME; ?> betreibt ein Treue-basiertes VIP-Programm, bei dem dein Rang steigt, je mehr du spielst. Zu den Vorteilen gehören ein persönlicher Account Manager, höhere Auszahlungslimits, exklusive Aktionen und wöchentliche Cashback-Angebote, die mit deinem Level skalieren.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kann ich auf meinem Handy spielen?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> hat keine mobile App, aber die Website ist vollständig mobilfreundlich. Du kannst auf alle Spiele, Sportwetten und Kontofunktionen über jeden modernen Smartphone- oder Tablet-Browser zugreifen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wie erreiche ich den Kundenservice?</summary>
        <div class="faq-answer">
          <p>Du erreichst das Support-Team rund um die Uhr per Live-Chat oder E-Mail. Der Live-Chat ist direkt auf der Website für schnelle Antworten verfügbar. Weitere Details findest du auf der <a href="/support">Support-Seite</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
