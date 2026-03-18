<?php
/**
 * Sports Betting Page - WestAce (Italian / IT)
 */
$page_title = 'WestAce Scommesse Sportive - Sport, Live Betting & Sport Virtuali';
$page_description = 'Scommetti su calcio, tennis, basket, ippica e altro su ' . SITE_NAME . '. Scommesse live, sport virtuali e quote competitive su oltre 30 sport.';
$current_page = 'sports';
$lang_prefix = '/it';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Scommesse Sportive';
$hero_description = 'Quote pre-partita, scommesse live, sport virtuali e ippica - tutto in un unico posto accanto al nostro casino completo.';
$hero_cta = 'Scommetti Ora';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Sportsbook Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Panoramica Scommesse Sportive</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p><?php echo SITE_NAME; ?> è molto più di un semplice casino. Offriamo un libro scommesse completo che copre scommesse pre-partita, mercati live, sport virtuali e ippica. Che tu segua la Serie A, la Champions League o gli Slam del tennis, troverai quote competitive e un'ampia gamma di mercati su ogni evento importante.</p>
          <p>La nostra sezione scommesse funziona in parallelo con il casino, permettendoti di passare dalle slot ai tavoli con croupier dal vivo e alle scommesse sportive da un unico account con un unico saldo. Nessun bisogno di portafogli separati o trasferimenti.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-sports-screen.png" alt="Scommesse sportive <?php echo SITE_NAME; ?> con quote live della Champions League e mercati calcio" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Scommesse Pre-Partita</h4>
          <p>Piazza scommesse sulle partite in programma in oltre 30 sport. Calcio, tennis, basket, cricket, hockey su ghiaccio, MMA e altro - con scommesse singole, multiple e di sistema disponibili.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9889;</div>
          <h4>Scommesse Live</h4>
          <p>Scommetti sulle partite in corso con quote in tempo reale che si aggiornano ogni pochi secondi. Segui l'azione con statistiche live, tabelloni e mercati in-play su tutti i principali sport.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127918;</div>
          <h4>Sport Virtuali</h4>
          <p>Eventi simulati disponibili 24 ore su 24 - calcio virtuale, basket, tennis, ippica e corse di levrieri. Risultati ogni pochi minuti, senza attendere le partite reali.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Available Sports -->
  <section class="content-section content-section--alt" id="sports">
    <div class="container">
      <h2>Sport Disponibili</h2>
      <p>Il nostro libro scommesse copre un'ampia gamma di sport da campionati e tornei di tutto il mondo. Ecco alcuni dei mercati più popolari:</p>

      <div class="two-col">
        <div>
          <h3>Sport Popolari</h3>
          <ul class="check-list">
            <li>Calcio - Serie A, Coppa Italia, Premier League, La Liga, Bundesliga, Champions League, qualificazioni Coppa del Mondo e centinaia di campionati minori</li>
            <li>Tennis - Grand Slam, ATP, WTA e tornei Challenger</li>
            <li>Basket - NBA, EuroLeague, campionati nazionali</li>
            <li>Hockey su Ghiaccio - NHL, KHL, SHL e campionati europei</li>
            <li>Cricket - IPL, test match internazionali, T20 World Cup</li>
            <li>MMA / Boxe - UFC, Bellator e grandi serate di boxe</li>
            <li>Esports - CS2, Dota 2, League of Legends, Valorant</li>
          </ul>
        </div>
        <div>
          <h3>Altri Sport</h3>
          <ul class="check-list">
            <li>Rugby a 15 e Rugby a 13</li>
            <li>Football Americano - NFL, football universitario</li>
            <li>Baseball - MLB, NPB, KBO</li>
            <li>Pallamano - competizioni europee e internazionali</li>
            <li>Pallavolo - campionati nazionali e internazionali</li>
            <li>Tennis Tavolo - eventi professionistici e mondiali</li>
            <li>Freccette, Snooker, Ciclismo, Formula 1</li>
          </ul>
        </div>
      </div>

      <p style="margin-top: var(--space-6);">Le scommesse live sono disponibili sulla maggior parte degli sport elencati sopra. Le quote si aggiornano in tempo reale in base alla situazione della partita, permettendoti di reagire a gol, break e cambi di ritmo nel momento in cui accadono.</p>
    </div>
  </section>

  <!-- Horse Racing -->
  <section class="content-section" id="horse-racing">
    <div class="container container--narrow">
      <h2>Ippica</h2>
      <p><?php echo SITE_NAME; ?> copre le corse ippiche dagli ippodromi di Italia, Regno Unito, Irlanda, Francia, Australia e altre grandi nazioni delle corse. Troverai mercati ante-post per i grandi festival oltre a quote per il giorno di corsa con opzioni vincitore, piazzato e accoppiata.</p>
      <p>I grandi appuntamenti come il Palio di Siena, il Gran Premio di Milano, Cheltenham, Royal Ascot, il Grand National e la Melbourne Cup sono coperti con una gamma completa di mercati. Per le corse quotidiane, offriamo scommesse standard vincitore e piazzato sulla maggior parte degli appuntamenti italiani e internazionali.</p>
    </div>
  </section>

  <!-- Virtual Sports -->
  <section class="content-section content-section--alt" id="virtual">
    <div class="container container--narrow">
      <h2>Sport Virtuali</h2>
      <p>Quando non ci sono partite dal vivo su cui scommettere, la nostra sezione sport virtuali mantiene l'azione attiva 24 ore su 24, 7 giorni su 7. Gli eventi sono simulati da generatori di numeri casuali certificati, garantendo risultati equi e imprevedibili.</p>

      <h3>Sport Virtuali Disponibili</h3>
      <ul>
        <li><strong>Calcio Virtuale</strong> - simulazioni di partite complete con classifiche e formati a eliminazione</li>
        <li><strong>Basket Virtuale</strong> - simulazioni quarto per quarto con i mercati standard del basket</li>
        <li><strong>Tennis Virtuale</strong> - partite set per set con opzioni vincitore del match e risultato esatto</li>
        <li><strong>Ippica Virtuale</strong> - corse in piano e ad ostacoli con scommesse vincitore, piazzato e accoppiata</li>
        <li><strong>Levrieri Virtuali</strong> - corse brevi con mercati vincitore e accoppiata</li>
      </ul>
      <p>Nuovi eventi virtuali partono ogni 2-3 minuti, quindi c'è sempre qualcosa su cui scommettere.</p>
    </div>
  </section>

  <!-- Sports Betting Tips -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Consigli per le Scommesse Sportive</h2>
      <p>Alcune linee guida semplici per mantenere le tue scommesse sportive divertenti e sostenibili:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Fissa un budget prima di iniziare.</strong> Decidi quanto sei disposto a scommettere per la settimana o il mese, e non superare quel limite. Consideralo una spesa per il divertimento, non un investimento.
          </div>
        </li>
        <li>
          <div>
            <strong>Scommetti sugli sport che conosci.</strong> Concentrati sui campionati e sugli sport in cui hai una conoscenza reale. La familiarità con squadre, giocatori e condizioni ti dà un giudizio migliore rispetto al rincorrere mercati casuali.
          </div>
        </li>
        <li>
          <div>
            <strong>Non rincorrere le perdite.</strong> Se hai avuto una serie negativa, non aumentare le puntate per cercare di recuperare. Fai una pausa e torna con la mente lucida.
          </div>
        </li>
        <li>
          <div>
            <strong>Tieni un registro.</strong> Monitora le tue scommesse per sapere cosa funziona e cosa no. Col tempo, questo ti aiuta a individuare tendenze e prendere decisioni migliori.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Sports FAQ -->
  <section class="content-section content-section--alt" id="sports-faq">
    <div class="container container--narrow">
      <h2>FAQ Scommesse Sportive</h2>

      <details class="faq-item">
        <summary><?php echo SITE_NAME; ?> offre scommesse sportive?</summary>
        <div class="faq-answer">
          <p>Si. Offriamo un libro scommesse completo con scommesse pre-partita, mercati live, sport virtuali e ippica accanto al nostro casino. Puoi passare dal casino alle scommesse sportive dallo stesso account.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Su quali sport posso scommettere?</summary>
        <div class="faq-answer">
          <p>Copriamo oltre 30 sport tra cui calcio, tennis, basket, cricket, hockey su ghiaccio, MMA, boxe, esports, ippica, rugby, football americano, baseball e molti altri. Sia i grandi campionati che le competizioni minori sono disponibili.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Le scommesse live sono disponibili?</summary>
        <div class="faq-answer">
          <p>Si. Le scommesse live sono disponibili sulla maggior parte degli sport. Le quote si aggiornano in tempo reale man mano che le partite procedono, e puoi piazzare scommesse durante l'intero evento.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Cosa sono gli sport virtuali?</summary>
        <div class="faq-answer">
          <p>Gli sport virtuali sono eventi simulati generati da generatori di numeri casuali. Funzionano 24 ore su 24, 7 giorni su 7, con nuovi eventi ogni pochi minuti. Offriamo calcio, basket, tennis, ippica e levrieri virtuali.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso usare il saldo del casino per le scommesse sportive?</summary>
        <div class="faq-answer">
          <p>Si. <?php echo SITE_NAME; ?> utilizza un saldo unico per casino e scommesse sportive. I depositi vanno su un unico account e puoi usare gli stessi fondi per slot, casino dal vivo o scommesse sportive senza alcun trasferimento.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Qual è la scommessa minima sugli sport?</summary>
        <div class="faq-answer">
          <p>Le puntate minime variano in base allo sport e al mercato, ma sono generalmente molto basse, a partire da 0,50 &euro; sulla maggior parte degli eventi. Controlla la schedina per conoscere il minimo esatto su ciascun mercato.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
