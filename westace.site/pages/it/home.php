<?php
/**
 * Homepage - WestAce (Italian / IT)
 */
$page_title = 'WestAce Casino - 7.000+ Giochi, Scommesse Sportive & Bonus di Benvenuto fino a 2.000 €';
$page_description = SITE_NAME . ' Casino offre oltre 7.000 giochi da 100+ fornitori, scommesse sportive con live betting, tavoli con croupier dal vivo e un bonus di benvenuto del 100% fino a 1.000 € + 50 Giri Gratuiti. Registrati e gioca.';
$current_page = 'home';
$lang_prefix = '/it';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__badge">Aperto -- 7.000+ giochi e scommesse sportive live</div>
    <h1>
      <span class="brand-name"><?php echo SITE_NAME; ?></span><br>
      <span class="brand-type">Casino</span>
    </h1>
    <p class="hero__subtitle">Oltre 7.000 giochi da 100+ fornitori, tavoli con croupier dal vivo, scommesse sportive complete con live betting e un pacchetto di benvenuto che premia i tuoi primi tre depositi.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Pacchetto di Benvenuto</div>
      <div class="hero__bonus-value"><?php echo WELCOME_BONUS; ?></div>
      <div class="hero__bonus-extra">1&deg; Deposito: 100% fino a 1.000 &euro; + 50 Giri Gratuiti &middot; Deposito min 20 &euro;</div>
    </div>
    <div class="hero__ctas">
      <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Gioca Ora</a>
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
      <p><?php echo SITE_NAME; ?> e un casino online e sportsbook lanciato nel 2026. La piattaforma riunisce oltre 7.000 giochi da 100+ fornitori, tra cui slot, tavoli con croupier dal vivo, giochi da tavolo, crash game, jackpot e game show. Oltre al casino, offriamo scommesse sportive complete con mercati pre-match e live, sport virtuali e ippica. I nuovi giocatori possono richiedere un pacchetto di benvenuto su tre depositi del valore massimo di 2.000 &euro; + 150 Giri Gratuiti.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Lancio</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Giochi</th><td>7.000+ (slot, giochi da tavolo, casino dal vivo, crash game, jackpot, game show)</td></tr>
        <tr><th>Fornitori</th><td>100+ (Pragmatic Play, Playtech, Novomatic, Red Tiger, Yggdrasil, BGaming, Hacksaw Gaming e altri)</td></tr>
        <tr><th>Bonus di Benvenuto</th><td><?php echo WELCOME_BONUS_TEXT; ?></td></tr>
        <tr><th>Deposito Min</th><td>10 &euro;</td></tr>
        <tr><th>Valuta</th><td>EUR</td></tr>
        <tr><th>Assistenza</th><td>Live chat 24/7 + email</td></tr>
        <tr><th>Scommesse Sportive</th><td>Si (sport, live betting, sport virtuali, ippica)</td></tr>
        <tr><th>Mobile</th><td>Completamente responsive, nessuna app necessaria</td></tr>
      </table>

      <h3>Perche i Giocatori Scelgono <?php echo SITE_NAME; ?></h3>
      <ul class="check-list">
        <li>Oltre 7.000 giochi da 100+ fornitori con licenza</li>
        <li>Pacchetto di benvenuto su tre depositi fino a 2.000 &euro; + 150 Giri Gratuiti</li>
        <li>Scommesse sportive complete con live betting, sport virtuali e ippica</li>
        <li>Casino dal vivo con roulette, blackjack, baccarat, dadi e poker</li>
        <li>Cashback giornaliero fino al 15% con requisito di scommessa di solo 1x</li>
        <li>Programma VIP a 5 livelli con manager personale e limiti piu alti</li>
        <li>Crypto-friendly con bonus di benvenuto e offerte di ricarica dedicate</li>
        <li>Assistenza 24/7 tramite live chat e email</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Giochi da Casino</h4>
          <p>Migliaia di slot, varianti di blackjack e roulette, poker, baccarat, crash game e tavoli con croupier dal vivo da studi come Pragmatic Play, Playtech, Novomatic, Red Tiger e Yggdrasil.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127183;</div>
          <h4>Casino dal Vivo</h4>
          <p>Giochi con croupier dal vivo tra cui roulette, blackjack, baccarat, dadi e poker. Croupier reali in streaming HD da studi professionali, disponibili 24 ore su 24.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Scommesse Sportive</h4>
          <p>Piattaforma completa di scommesse sportive con mercati pre-match e live in-play. Sport virtuali e ippica completano l'offerta per gli appassionati di sport.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Social Proof / Recent Winners -->
  <section class="content-section winners-section" id="winners">
    <div class="container">
      <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--space-4);margin-bottom:var(--space-2)">
        <h2 style="margin-bottom:0">Vincite Recenti</h2>
        <span class="live-dot">Live</span>
      </div>
      <div class="jackpot-label">Montepremi Jackpot Attuale</div>
      <div class="jackpot-amount" id="jackpotCounter">&euro;2.847.391</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Giochi Popolari su <?php echo SITE_NAME; ?></h2>
      <p>Sfoglia alcuni dei titoli piu giocati nel casino. Dalle slot ad alta volatilita ai classici giochi da tavolo, dalle sale con croupier dal vivo ai mercati sportivi -- c'e qualcosa per ogni tipo di giocatore.</p>

      <div class="game-tabs">
        <button class="game-tab active">Tutti i Giochi</button>
        <button class="game-tab">Slot</button>
        <button class="game-tab">Casino dal Vivo</button>
        <button class="game-tab">Giochi da Tavolo</button>
        <button class="game-tab">Crash Game</button>
        <button class="game-tab">Jackpot</button>
        <button class="game-tab">Sport</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Principali Fornitori di Giochi</h3>
          <p>Il nostro catalogo di giochi e alimentato da un ampio mix di studi, dai leader del settore ai promettenti sviluppatori indipendenti:</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">100+ in totale</span>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-games-screen.png" alt="<?php echo SITE_NAME; ?> Casino lobby dei giochi con le migliori slot di Pragmatic Play, Playtech e Novomatic" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section" id="payments">
    <div class="container">
      <h2>Metodi di Pagamento</h2>
      <p><?php echo SITE_NAME; ?> supporta diversi metodi di pagamento tra cui carte di credito, carte prepagate, e-wallet e criptovalute. I depositi partono da 10 &euro; e tutti i depositi e prelievi sono senza commissioni.</p>

      <table class="quick-table">
        <tr><th>Metodi di Deposito</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Deposito Min</th><td>10 &euro;</td></tr>
        <tr><th>Prelievo Min</th><td>10 &euro;</td></tr>
        <tr><th>Prelievo Max</th><td>500 &euro;/giorno, 7.000 &euro;/mese</td></tr>
        <tr><th>Tempi di Pagamento</th><td>24-72 ore</td></tr>
        <tr><th>Valuta</th><td>EUR</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">Per una panoramica dettagliata sui metodi di prelievo, limiti, commissioni e consigli per velocizzare il pagamento, visita la pagina <a href="<?php echo $lang_prefix; ?>/withdrawal">Prelievi</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section content-section--alt" id="mobile">
    <div class="container">
      <h2>Casino Mobile</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p><?php echo SITE_NAME; ?> non ha un'app mobile dedicata, ma il sito web e completamente compatibile con tutti gli smartphone e tablet. La piattaforma browser offre le stesse funzionalita, giochi e strumenti di gestione dell'account che trovi nella versione desktop. Nessun download necessario -- apri il tuo browser mobile, accedi e gioca.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/westace-mobile.png" alt="<?php echo SITE_NAME; ?> Casino lobby mobile con bonus di benvenuto e navigazione giochi" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>
      <ul class="check-list">
        <li>Libreria completa di giochi accessibile da browser mobile</li>
        <li>Tavoli con croupier dal vivo e scommesse sportive in mobilita</li>
        <li>Deposita e preleva direttamente dal tuo telefono</li>
        <li>Assistenza via live chat disponibile su mobile</li>
        <li>Nessuna app da scaricare -- funziona su iOS e Android</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section" id="faq">
    <div class="container container--narrow">
      <h2>Domande Frequenti</h2>

      <details class="faq-item">
        <summary>Che tipo di giochi posso trovare su <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> collabora con 100+ fornitori tra cui Pragmatic Play, Playtech, Novomatic, Red Tiger, Yggdrasil, BGaming, Hacksaw Gaming e Quickspin. Puoi giocare a video slot, slot con jackpot, blackjack, roulette, baccarat, poker, crash game, game show e giochi con croupier dal vivo. C'e anche una sezione scommesse sportive completa con live betting, sport virtuali e ippica.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Qual e il bonus di benvenuto su <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>I nuovi giocatori ricevono un pacchetto di benvenuto su tre depositi: 100% fino a 1.000 &euro; + 50 Giri Gratuiti sul primo deposito, 100% fino a 500 &euro; + 50 Giri Gratuiti sul secondo e 100% fino a 500 &euro; + 50 Giri Gratuiti sul terzo. Valore totale: fino a 2.000 &euro; + 150 Giri Gratuiti. Il deposito minimo e di 20 &euro; per ogni livello. Il requisito di scommessa e 35x (bonus + deposito).</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quanto tempo richiedono i prelievi?</summary>
        <div class="faq-answer">
          <p>I prelievi vengono elaborati entro 24-72 ore. Il prelievo minimo e di 10 &euro; per tutti i metodi di pagamento. Il limite giornaliero di prelievo e di 500 &euro; e il limite mensile e di 7.000 &euro;. Non vengono applicate commissioni sui prelievi.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary><?php echo SITE_NAME; ?> ha un programma VIP?</summary>
        <div class="faq-answer">
          <p>Si. <?php echo SITE_NAME; ?> offre un programma VIP a 5 livelli. I vantaggi includono percentuali di cashback piu elevate (fino al 15%), limiti di prelievo maggiori, elaborazione prioritaria, offerte personalizzate e un manager VIP dedicato ai livelli piu alti. I criteri per avanzare tra i livelli non sono resi pubblici.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso giocare dal mio telefono?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> non dispone di un'app mobile, ma il sito e completamente ottimizzato per dispositivi mobili. Puoi accedere a tutti i giochi, alle scommesse sportive e alle funzionalita del tuo account tramite qualsiasi browser moderno su smartphone o tablet.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Come posso contattare l'assistenza clienti?</summary>
        <div class="faq-answer">
          <p>Puoi contattare il team di assistenza tramite la live chat 24/7 direttamente sul sito, oppure via email a support@westace.com. Per maggiori dettagli, visita la pagina <a href="<?php echo $lang_prefix; ?>/support">Assistenza</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
