<?php
/**
 * Homepage - Italian
 */
$page_title = SITE_NAME . ' Casino - ' . SITE_TAGLINE;
$page_description = SITE_NAME . ' Casino offre oltre 10.000 giochi da casinò, dealer dal vivo, scommesse sportive su 30+ sport e un bonus di benvenuto fino a EUR 500 più 200 giri gratis. Iscriviti ora e gioca.';
$current_page = 'home';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__badge">Ora aperto - accettiamo giocatori da tutto il mondo</div>
    <h1>
      <span class="brand-name"><?php echo SITE_NAME; ?></span><br>
      <span class="brand-type">Casino</span>
    </h1>
    <p class="hero__subtitle">Oltre 10.000 giochi da 90+ provider, scommesse sportive complete su 30+ sport, tavoli con dealer dal vivo e ricompense che pagano davvero.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Pacchetto di Benvenuto</div>
      <div class="hero__bonus-value"><?php echo WELCOME_BONUS; ?></div>
      <div class="hero__bonus-extra">Bonus Sport: 100% fino a &euro;100 &middot; Deposito min. &euro;20</div>
    </div>
    <div class="hero__ctas">
      <a href="/play" class="btn btn--primary btn--lg" rel="nofollow"><?php echo __('cta_play', 'Play Now'); ?></a>
      <a href="<?php echo $lang_prefix; ?>/bonuses" class="btn btn--outline btn--lg">Vedi i Bonus</a>
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
      <p><?php echo SITE_NAME; ?> è una nuova piattaforma di gioco d'azzardo online dove i giocatori possono esplorare migliaia di opzioni di scommessa in un unico posto. Con un catalogo di oltre 10.000 prodotti tra slot, mini-giochi, giochi di carte e da tavolo virtuali e una selezione di lobby con dealer dal vivo, non c'è mai un momento di noia. Sul fronte scommesse sportive, quote competitive su oltre 30 sport rendono le cose interessanti per gli appassionati di calcio, basket, tennis ed esports.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Lancio</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Giochi</th><td>10.000+ (slot, giochi da tavolo, casinò dal vivo, giochi istantanei)</td></tr>
        <tr><th>Provider</th><td>90+ (Pragmatic Play, Evolution, Microgaming, NetEnt, Playtech e altri)</td></tr>
        <tr><th>Sport</th><td>30+ sport, esports, sport virtuali</td></tr>
        <tr><th>Bonus di Benvenuto</th><td><?php echo WELCOME_BONUS_TEXT; ?></td></tr>
        <tr><th>Deposito Min.</th><td>EUR 10 (EUR 20 per la maggior parte dei bonus)</td></tr>
        <tr><th>Valute</th><td>EUR, USD, CAD, AUD, CHF, HUF, NOK, PLN, NZD, CZK, BRL, CLP, PEN</td></tr>
        <tr><th>Supporto</th><td>Live chat ed email 24/7</td></tr>
        <tr><th>Mobile</th><td>Completamente responsive, nessuna app necessaria</td></tr>
      </table>

      <h3>Perché i Giocatori Scelgono <?php echo SITE_NAME; ?></h3>
      <ul class="check-list">
        <li>Oltre 10.000 giochi da 90+ provider affidabili</li>
        <li>Scommesse sportive complete con pre-match e live su 30+ sport</li>
        <li>Diverse opzioni di bonus di benvenuto per casinò e sport</li>
        <li>Bonus settimanali di ricarica, offerte cashback e negozio fedeltà</li>
        <li>Programma VIP con account manager personale e limiti di prelievo più alti</li>
        <li>Pagamenti tramite Visa, Mastercard, Skrill, crypto e altro</li>
        <li>Supporto clienti 24/7 tramite live chat ed email</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Giochi da Casinò</h4>
          <p>Migliaia di slot, varianti di blackjack e roulette, poker, baccarat, game show, giochi istantanei e tavoli con dealer dal vivo dai migliori studi di sviluppo.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Scommesse Sportive</h4>
          <p>Scommesse pre-match e in-play sui principali campionati come UEFA Champions League, NBA, NHL e tornei del Grand Slam. Disponibili anche sport virtuali ed esports.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127873;</div>
          <h4>Promozioni</h4>
          <p>Bonus di benvenuto, offerte settimanali di ricarica, programmi cashback multipli, negozio fedeltà, sfide e offerte speciali durante tutta la settimana.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Social Proof / Recent Winners -->
  <section class="content-section winners-section" id="winners">
    <div class="container">
      <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--space-4);margin-bottom:var(--space-2)">
        <h2 style="margin-bottom:0">Vincitori Recenti</h2>
        <span class="live-dot">Live</span>
      </div>
      <div class="jackpot-label">Montepremi Jackpot Attuale</div>
      <div class="jackpot-amount" id="jackpotCounter">&euro;2,847,391</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Giochi Popolari su <?php echo SITE_NAME; ?></h2>
      <p>Sfoglia alcuni dei titoli più giocati nel casinò. Dalle slot ad alta volatilità ai classici giochi da tavolo e alle esperienze con dealer dal vivo, c'è qualcosa per ogni tipo di giocatore.</p>

      <div class="game-tabs">
        <button class="game-tab active">Tutti i Giochi</button>
        <button class="game-tab">Slot</button>
        <button class="game-tab">Casinò dal Vivo</button>
        <button class="game-tab">Giochi da Tavolo</button>
        <button class="game-tab">Game Show</button>
        <button class="game-tab">Crash Games</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Principali Provider di Giochi</h3>
          <p>Il catalogo è alimentato da un'ampia varietà di studi, dai leader del settore a promettenti sviluppatori indipendenti:</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">90+ altri</span>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/casea-games.png" alt="<?php echo SITE_NAME; ?> Casino lobby giochi con le migliori slot e provider" style="max-width:300px;width:100%;">
        </div>
      </div>
    </div>
  </section>

  <!-- Sportsbook -->
  <section class="content-section" id="sports">
    <div class="container">
      <h2>Scommesse Sportive</h2>
      <div class="two-col">
        <div>
          <p>La sezione scommesse sportive di <?php echo SITE_NAME; ?> copre scommesse pre-match e live su eventi delle competizioni più importanti e meno conosciute. Gli appassionati di calcio possono scommettere su tutto, dalla UEFA Champions League fino ai campionati di serie inferiore, mentre basket, tennis, hockey e una dozzina di altri sport completano il programma.</p>
          <p>Gli sport virtuali come calcio, basket e corse di cani sono disponibili 24 ore su 24. Le scommesse sugli esports coprono Dota 2, Counter-Strike, League of Legends, Call of Duty e altri titoli popolari.</p>

          <h3>Sport Disponibili</h3>
          <ul class="check-list">
            <li>Calcio (UEFA Champions League, Premier League, Bundesliga, Serie A, La Liga)</li>
            <li>Basket (NBA, EuroLeague, campionati nazionali)</li>
            <li>Tennis (Grand Slam, ATP, WTA)</li>
            <li>Hockey su Ghiaccio (NHL, KHL, SHL)</li>
            <li>Esports (Dota 2, CS2, League of Legends, Call of Duty)</li>
            <li>Sport virtuali, corse di cavalli e 25+ altri</li>
          </ul>
        </div>
        <div>
          <div class="highlight-box">
            <h4>Bonus di Benvenuto Sport</h4>
            <p>I nuovi giocatori possono ottenere un bonus del 100% sul primo deposito sportivo, fino a EUR 100. I giocatori finlandesi, tedeschi, norvegesi, svizzeri e austriaci possono ricevere fino a EUR 200. Il bonus richiede un deposito minimo di EUR 20 e un requisito di scommessa 5x o 6x a seconda del tuo paese.</p>
          </div>
          <table class="quick-table" style="margin-top: var(--space-6);">
            <tr><th>Tipi di Scommessa</th><td>Pre-match, in-play, futures, accumulator</td></tr>
            <tr><th>Sport</th><td>30+ inclusi esports e virtuali</td></tr>
            <tr><th>Funzionalità</th><td>Boost accumulator, pagamento anticipato, quote maggiorate</td></tr>
            <tr><th>Cashback</th><td>10% settimanale fino a EUR 500</td></tr>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section content-section--alt" id="payments">
    <div class="container">
      <h2>Metodi di Pagamento</h2>
      <p><?php echo SITE_NAME; ?> supporta diversi metodi di pagamento popolari. La disponibilità dipende dal tuo paese e i depositi partono da soli EUR 10.</p>

      <table class="quick-table">
        <tr><th>Metodi di Deposito</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Deposito Min.</th><td>EUR 10 (EUR 20 per la maggior parte dei bonus)</td></tr>
        <tr><th>Prelievo Min.</th><td>EUR 10</td></tr>
        <tr><th>Prelievo Max. (Giornaliero)</th><td>EUR 500 (VIP: EUR 1.500)</td></tr>
        <tr><th>Prelievo Max. (Mensile)</th><td>EUR 7.000 (VIP: EUR 20.000)</td></tr>
        <tr><th>Tempo di Elaborazione</th><td>Fino a 72 ore (e-wallet e crypto sono i più veloci)</td></tr>
        <tr><th>Valute</th><td>EUR, USD, CAD, AUD, CHF, HUF, NOK, PLN, NZD, CZK, BRL, CLP, PEN</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">Per una panoramica dettagliata dei metodi di prelievo, limiti, commissioni e consigli per velocizzare il tuo pagamento, visita la <a href="<?php echo $lang_prefix; ?>/withdrawal">pagina Prelievi</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section" id="mobile">
    <div class="container">
      <h2>Casinò Mobile</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p><?php echo SITE_NAME; ?> non ha un'app mobile dedicata, ma il sito web è completamente compatibile con tutti gli smartphone e tablet. La piattaforma basata su browser offre le stesse funzionalità, giochi e strumenti di gestione dell'account che trovi nella versione desktop. Nessun download necessario -- basta aprire il browser del tuo telefono, accedere e giocare.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/casea-mobile.png" alt="<?php echo SITE_NAME; ?> Casino su mobile" style="max-width:320px;width:100%;">
        </div>
      </div>
      <ul class="check-list">
        <li>Libreria completa di giochi accessibile dai browser mobile</li>
        <li>Scommesse sportive con mercati live in-play</li>
        <li>Deposita e preleva direttamente dal tuo telefono</li>
        <li>Supporto via live chat disponibile su mobile</li>
        <li>Nessun download di app necessario -- funziona su iOS e Android</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section content-section--alt" id="faq">
    <div class="container container--narrow">
      <h2>Domande Frequenti</h2>

      <details class="faq-item">
        <summary>Che tipo di giochi posso trovare su <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> collabora con oltre 90 provider tra cui Pragmatic Play, Evolution, Microgaming e Red Tiger. Puoi giocare a video slot, slot con jackpot, titoli Megaways, varianti di blackjack, roulette, baccarat, poker, game show, crash games e molto altro. Le scommesse sportive coprono 30+ sport con opzioni pre-match e live.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Qual è il bonus di benvenuto di <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>I nuovi giocatori del casinò possono ottenere un bonus di benvenuto del 100% fino a EUR 500 più 200 giri gratis sul primo deposito. I giocatori delle scommesse sportive possono ricevere un bonus del 100% fino a EUR 100 (o EUR 200 a seconda del paese). Il deposito minimo è EUR 20.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Qual è il prelievo massimo su <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>I giocatori standard possono prelevare fino a EUR 500 al giorno e EUR 7.000 al mese. I membri VIP hanno accesso a limiti più alti -- fino a EUR 1.500 al giorno e EUR 20.000 al mese. Il prelievo minimo è EUR 10.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary><?php echo SITE_NAME; ?> ha un programma VIP?</summary>
        <div class="faq-answer">
          <p>Sì. <?php echo SITE_NAME; ?> ha un programma VIP basato sulla fedeltà in cui il tuo livello aumenta man mano che giochi. I vantaggi includono un account manager personale, limiti di prelievo più alti, promozioni esclusive e offerte cashback settimanali che crescono con il tuo livello.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso giocare dal mio telefono?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> non ha un'app mobile, ma il sito è completamente ottimizzato per i dispositivi mobili. Puoi accedere a tutti i giochi, scommesse sportive e funzionalità dell'account attraverso qualsiasi browser moderno su smartphone o tablet.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Come posso contattare il supporto clienti?</summary>
        <div class="faq-answer">
          <p>Puoi contattare il team di supporto tramite live chat o email 24 ore su 24, 7 giorni su 7. La live chat è disponibile direttamente sul sito per risposte rapide. Per maggiori dettagli, visita la <a href="<?php echo $lang_prefix; ?>/support">pagina Supporto</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
