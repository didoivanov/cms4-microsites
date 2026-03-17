<?php
/**
 * Homepage – Italian
 */
$page_title = SITE_NAME . ' Casino - Casin&ograve; Online, Scommesse Sportive e oltre 8.000 Giochi';
$page_description = SITE_NAME . ' Casino offre oltre 8.000 giochi da 103+ provider, tavoli con croupier dal vivo, scommesse sportive su 30+ discipline e un bonus di benvenuto fino a 2.000 EUR pi&ugrave; 300 giri gratuiti su tre depositi. Registrati e gioca subito.';
$current_page = 'home';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__badge">Aperto ora -- giocatori accettati da tutto il mondo</div>
    <h1>
      <span class="brand-name"><?php echo SITE_NAME; ?></span><br>
      <span class="brand-type">Casino</span>
    </h1>
    <p class="hero__subtitle">Oltre 8.000 giochi da 103+ provider, scommesse sportive complete su 30+ discipline, tavoli con croupier dal vivo e un pacchetto di benvenuto multi-deposito che premia i tuoi primi tre versamenti.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Pacchetto di benvenuto</div>
      <div class="hero__bonus-value"><?php echo WELCOME_BONUS; ?></div>
      <div class="hero__bonus-extra">Bonus Sport: 100% fino a &euro;500 &middot; Deposito min. &euro;20</div>
    </div>
    <div class="hero__ctas">
      <a href="/play" class="btn btn--primary btn--lg" rel="nofollow"><?php echo __('cta_play', 'Gioca ora'); ?></a>
      <a href="/it/bonuses" class="btn btn--outline btn--lg">Vedi i bonus</a>
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
      <h2>Benvenuto su <?php echo SITE_NAME; ?> Casino</h2>
      <p><?php echo SITE_NAME; ?> &egrave; un casin&ograve; online e scommesse sportive lanciato nel 2025 con licenza Cura&ccedil;ao OGL/2024/129/0131, gestito da 130 group N.V. La piattaforma riunisce oltre 8.000 giochi da 103+ provider, tra cui slot, sale con croupier dal vivo, giochi da tavolo, giochi istantanei e scommesse sportive complete con puntate pre-match e live su 30+ discipline. I nuovi giocatori ricevono un pacchetto di benvenuto su tre depositi del valore massimo di 2.000 EUR pi&ugrave; 300 giri gratuiti lato casin&ograve;, oppure fino a 500 EUR su tre depositi sportivi.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Lancio</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Licenza</th><td>Curacao OGL/2024/129/0131</td></tr>
        <tr><th>Giochi</th><td>8.000+ (slot, giochi da tavolo, casin&ograve; live, giochi istantanei)</td></tr>
        <tr><th>Provider</th><td>103+ (Play'n GO, Playtech, Pragmatic Play, BGaming, Hacksaw Gaming e altri)</td></tr>
        <tr><th>Sport</th><td>30+ discipline, esports, sport virtuali</td></tr>
        <tr><th>Bonus di benvenuto</th><td><?php echo WELCOME_BONUS_TEXT; ?></td></tr>
        <tr><th>Deposito min.</th><td>EUR 10 (EUR 20 per la maggior parte dei bonus)</td></tr>
        <tr><th>Valute</th><td>EUR, CHF, USD, CAD, AUD, NZD, PLN, BRL, NOK, ZAR, CZK, HUF, CLP</td></tr>
        <tr><th>Assistenza</th><td>Live chat 24/7, email e Telegram</td></tr>
        <tr><th>Mobile</th><td>Completamente responsive, nessuna app necessaria</td></tr>
      </table>

      <h3>Perch&eacute; i giocatori scelgono <?php echo SITE_NAME; ?></h3>
      <ul class="check-list">
        <li>Oltre 8.000 giochi da 103+ provider con licenza</li>
        <li>Pacchetto di benvenuto su tre depositi fino a 2.000 EUR + 300 giri gratuiti</li>
        <li>Scommesse sportive complete con puntate pre-match e live su 30+ discipline</li>
        <li>Bonus di benvenuto sport fino a 500 EUR su tre depositi</li>
        <li>Bonus ricarica settimanali, programmi cashback e tornei</li>
        <li>Programma VIP a 5 livelli con account manager personale e limiti pi&ugrave; alti</li>
        <li>20+ metodi di pagamento tra cui Visa, Mastercard, Skrill, crypto e portafogli elettronici</li>
        <li>Assistenza 24/7 via live chat, email e Telegram</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Giochi del casin&ograve;</h4>
          <p>Migliaia di slot, varianti di blackjack e roulette, poker, baccarat, game show, crash game e tavoli con croupier dal vivo da studi come Play'n GO, Pragmatic Play e Hacksaw Gaming.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Scommesse sportive</h4>
          <p>Puntate pre-match e live sui principali campionati come UEFA Champions League, NBA, NHL e tornei del Grande Slam. Esports con Dota 2, CS2 e League of Legends. Sport virtuali disponibili 24 ore su 24.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127873;</div>
          <h4>Promozioni</h4>
          <p>Pacchetti di benvenuto su tre depositi per casin&ograve; e sport, bonus ricarica settimanali, cashback sport del 15%, tornei e un programma VIP a 5 livelli con ricompense esclusive.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Social Proof / Recent Winners -->
  <section class="content-section winners-section" id="winners">
    <div class="container">
      <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--space-4);margin-bottom:var(--space-2)">
        <h2 style="margin-bottom:0">Vincitori recenti</h2>
        <span class="live-dot">Live</span>
      </div>
      <div class="jackpot-label">Montepremi jackpot attuale</div>
      <div class="jackpot-amount" id="jackpotCounter">&euro;2,847,391</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Giochi popolari su <?php echo SITE_NAME; ?></h2>
      <p>Dai un'occhiata ai titoli pi&ugrave; giocati del casin&ograve;. Dalle slot ad alta volatilit&agrave; ai classici giochi da tavolo e alle sale con croupier dal vivo, c'&egrave; qualcosa per ogni tipo di giocatore.</p>

      <div class="game-tabs">
        <button class="game-tab active">Tutti i giochi</button>
        <button class="game-tab">Slot</button>
        <button class="game-tab">Casin&ograve; live</button>
        <button class="game-tab">Giochi da tavolo</button>
        <button class="game-tab">Game show</button>
        <button class="game-tab">Crash game</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Principali provider di giochi</h3>
          <p>Il catalogo &egrave; alimentato da un ampio mix di studi, dai leader del settore ai promettenti sviluppatori indipendenti:</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">103+ in totale</span>
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
      <h2>Scommesse sportive</h2>
      <div class="two-col" style="align-items:flex-start;gap:var(--space-8)">
        <div>
          <p>Le scommesse sportive di <?php echo SITE_NAME; ?> coprono puntate pre-match e live su eventi sia delle grandi competizioni che di quelle minori. Gli appassionati di calcio possono scommettere su tutto, dalla UEFA Champions League fino alle leghe di divisioni inferiori, mentre basket, tennis, hockey su ghiaccio e una dozzina di altri sport completano il programma.</p>
          <p>Gli sport virtuali come calcio, basket e corse di levrieri sono disponibili 24 ore su 24. Le scommesse esports coprono Dota 2, Counter-Strike 2, League of Legends, Call of Duty e altri titoli competitivi.</p>

          <h3>Sport disponibili</h3>
          <ul class="check-list">
            <li>Calcio (UEFA Champions League, Premier League, Bundesliga, Serie A, La Liga)</li>
            <li>Basket (NBA, EuroLeague, campionati nazionali)</li>
            <li>Tennis (Grande Slam, ATP, WTA)</li>
            <li>Hockey su ghiaccio (NHL, KHL, SHL)</li>
            <li>Esports (Dota 2, CS2, League of Legends, Call of Duty)</li>
            <li>Sport virtuali, ippica e altri 25+</li>
          </ul>
        </div>
        <div>
          <div style="text-align:center;margin-bottom:var(--space-6)">
            <img src="/assets/img/vipluck-sports.png" alt="<?php echo SITE_NAME; ?> sportsbook showing live Champions League odds and sports betting interface" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
          </div>
          <div class="highlight-box">
            <h4>Bonus di benvenuto sport</h4>
            <p>I nuovi giocatori possono ottenere fino a 500 EUR in bonus sportivi sui primi tre depositi: 100% fino a 200 EUR sul primo, 100% fino a 150 EUR sul secondo e 100% fino a 150 EUR sul terzo. Deposito minimo 20 EUR. Requisito di scommessa: 6x con quota minima di 1,60.</p>
          </div>
          <table class="quick-table" style="margin-top: var(--space-6);">
            <tr><th>Tipi di scommessa</th><td>Pre-match, live, lungo termine, multiple</td></tr>
            <tr><th>Sport</th><td>30+ inclusi esports e virtuali</td></tr>
            <tr><th>Funzionalit&agrave;</th><td>Boost multipla, pagamento anticipato, quote maggiorate</td></tr>
            <tr><th>Cashback</th><td>15% settimanale fino a 500 EUR</td></tr>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section content-section--alt" id="payments">
    <div class="container">
      <h2>Metodi di pagamento</h2>
      <p><?php echo SITE_NAME; ?> accetta oltre 20 metodi di pagamento tra cui carte di credito, portafogli elettronici, carte prepagate e 10 criptovalute. La disponibilit&agrave; dipende dal tuo paese e i depositi partono da 10 EUR.</p>

      <table class="quick-table">
        <tr><th>Metodi di deposito</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Deposito min.</th><td>EUR 10 (EUR 20 per la maggior parte dei bonus)</td></tr>
        <tr><th>Prelievo min.</th><td>EUR 20</td></tr>
        <tr><th>Prelievo max. (giornaliero)</th><td>EUR 700 (VIP: EUR 1.500)</td></tr>
        <tr><th>Prelievo max. (settimanale)</th><td>EUR 2.250 (VIP: EUR 7.000)</td></tr>
        <tr><th>Prelievo max. (mensile)</th><td>EUR 9.000 (VIP: EUR 28.000)</td></tr>
        <tr><th>Tempi di elaborazione</th><td>Fino a 72 ore, nessuna elaborazione nei weekend (fino a 7 giorni lavorativi in totale)</td></tr>
        <tr><th>Valute</th><td>EUR, CHF, USD, CAD, AUD, NZD, PLN, BRL, NOK, ZAR, CZK, HUF, CLP</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">Per un riepilogo dettagliato dei metodi di prelievo, limiti, commissioni e consigli per velocizzare i pagamenti, visita la <a href="/it/withdrawal">pagina Prelievi</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section" id="mobile">
    <div class="container">
      <h2>Casin&ograve; mobile</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p><?php echo SITE_NAME; ?> non ha un'app mobile dedicata, ma il sito &egrave; completamente compatibile con tutti gli smartphone e tablet. La piattaforma tramite browser offre le stesse funzionalit&agrave;, giochi e strumenti di gestione account della versione desktop. Nessun download necessario -- apri il browser del tuo telefono, accedi e gioca.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/vipluck-lobby.png" alt="<?php echo SITE_NAME; ?> Casino mobile lobby with welcome bonus and game navigation" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>
      <ul class="check-list">
        <li>Libreria giochi completa accessibile da browser mobile</li>
        <li>Scommesse sportive con mercati live in-play</li>
        <li>Depositi e prelievi direttamente dal telefono</li>
        <li>Live chat e assistenza Telegram disponibili da mobile</li>
        <li>Nessuna app da scaricare -- funziona su iOS e Android</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section content-section--alt" id="faq">
    <div class="container container--narrow">
      <h2>Domande frequenti</h2>

      <details class="faq-item">
        <summary>A quali giochi posso giocare su <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> collabora con 103+ provider tra cui Play'n GO, Playtech, Pragmatic Play, BGaming e Hacksaw Gaming. Puoi giocare a video slot, slot con jackpot, titoli Megaways, blackjack, roulette, baccarat, poker, game show, crash game e molto altro. Le scommesse sportive coprono 30+ discipline con opzioni pre-match e live.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Qual &egrave; il bonus di benvenuto di <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>I nuovi giocatori del casin&ograve; ricevono un pacchetto di benvenuto su tre depositi: 100% fino a 500 EUR + 100 giri gratuiti sul primo deposito, 100% fino a 750 EUR + 75 giri gratuiti sul secondo e 100% fino a 750 EUR + 125 giri gratuiti sul terzo. Valore totale: fino a 2.000 EUR + 300 giri gratuiti. Gli scommettitori sportivi possono ottenere fino a 500 EUR su tre depositi. Deposito minimo 20 EUR.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Qual &egrave; il prelievo massimo su <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>I giocatori standard possono prelevare fino a 700 EUR al giorno, 2.250 EUR a settimana e 9.000 EUR al mese. I membri VIP hanno limiti pi&ugrave; alti: 1.500 EUR giornalieri, 7.000 EUR settimanali e 28.000 EUR mensili. Il prelievo minimo &egrave; di 20 EUR. I pagamenti vengono elaborati entro 72 ore nei giorni lavorativi.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary><?php echo SITE_NAME; ?> ha un programma VIP?</summary>
        <div class="faq-answer">
          <p>S&igrave;. <?php echo SITE_NAME; ?> ha un programma VIP a 5 livelli con progressione solo su invito. I vantaggi includono un account manager personale, limiti di prelievo pi&ugrave; alti, bonus esclusivi e priorit&agrave; nell'elaborazione dei pagamenti. Pi&ugrave; alto &egrave; il tuo livello, migliori sono le ricompense e le percentuali di cashback.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso giocare dal telefono?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> non ha un'app mobile, ma il sito &egrave; completamente ottimizzato per dispositivi mobili. Puoi accedere a tutti i giochi, alle scommesse sportive e alle funzionalit&agrave; del tuo account tramite qualsiasi browser moderno su smartphone o tablet.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Come posso contattare l'assistenza clienti?</summary>
        <div class="faq-answer">
          <p>Puoi contattare il team di assistenza tramite live chat, email a support@vipluck.com o Telegram, 24 ore su 24. La live chat &egrave; disponibile direttamente sul sito per risposte rapide. Per maggiori dettagli, visita la <a href="/it/support">pagina Assistenza</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
