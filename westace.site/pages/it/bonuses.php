<?php
/**
 * Bonuses Page - WestAce (Italian / IT)
 */
$page_title = 'WestAce Bonus - Pacchetto di Benvenuto fino a 2.000 € + 150 Giri Gratuiti';
$page_description = 'Tutti i bonus del casino ' . SITE_NAME . ' in un\'unica pagina. Pacchetto di benvenuto fino a 2.000 € + 150 Giri Gratuiti su 3 depositi, bonus crypto, ricariche settimanali, cashback giornaliero, cashback casino dal vivo, programma VIP e altro.';
$current_page = 'bonuses';
$lang_prefix = '/it';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Bonus Casino';
$hero_description = 'Tutte le promozioni attive, offerte di benvenuto e premi fedelta attualmente disponibili. Leggi i termini prima di richiedere qualsiasi offerta.';
$hero_cta = 'Richiedi il Tuo Bonus';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Welcome Casino Package -->
  <section class="content-section" id="welcome">
    <div class="container">
      <h2>Pacchetto di Benvenuto per Nuovi Giocatori</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>I nuovi giocatori su <?php echo SITE_NAME; ?> possono richiedere un pacchetto di benvenuto su tre depositi con un valore complessivo fino a 2.000 &euro; + 150 Giri Gratuiti. Ogni deposito prevede un bonus match del 100% e 50 Giri Gratuiti. Il deposito minimo qualificante e di 20 &euro; per ogni livello. Non serve alcun codice promozionale - vai alla cassa, seleziona l'offerta ed effettua il tuo deposito qualificante.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-bonuses-screen.png" alt="Pagina promozioni <?php echo SITE_NAME; ?> Casino con bonus di benvenuto e promozioni attive" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <!-- Casino Welcome - Deposit 1 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">1&deg; Deposito: 100% fino a 1.000 &euro; + 50 Giri Gratuiti</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Effettua il tuo primo deposito di almeno 20 &euro; e ricevi un bonus match del 100% fino a 1.000 &euro;. In aggiunta, 50 Giri Gratuiti vengono accreditati su una slot selezionata. Il requisito di scommessa e 35x sull'importo del bonus + deposito. Le vincite dei Giri Gratuiti hanno un requisito di scommessa separato di 40x.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Deposito Min</div>
            <div class="bonus-detail__value">20 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Scommessa</div>
            <div class="bonus-detail__value">35x (B+D)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Scommessa GG</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Giri Gratuiti</div>
            <div class="bonus-detail__value">50 GG</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome - Deposit 2 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2&deg; Deposito: 100% fino a 500 &euro; + 50 Giri Gratuiti</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Il tuo secondo deposito da diritto a un bonus match del 100% fino a 500 &euro;, piu altri 50 Giri Gratuiti. Si applicano gli stessi requisiti di scommessa del bonus sul primo deposito.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Deposito Min</div>
            <div class="bonus-detail__value">20 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Scommessa</div>
            <div class="bonus-detail__value">35x (B+D)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Scommessa GG</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Giri Gratuiti</div>
            <div class="bonus-detail__value">50 GG</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome - Deposit 3 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">3&deg; Deposito: 100% fino a 500 &euro; + 50 Giri Gratuiti</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Il terzo deposito ottiene un bonus match del 100% fino a 500 &euro; e 50 Giri Gratuiti. Questo porta il pacchetto di benvenuto totale a 2.000 &euro; in fondi bonus e 150 Giri Gratuiti distribuiti sui tuoi primi tre depositi.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Deposito Min</div>
            <div class="bonus-detail__value">20 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Scommessa</div>
            <div class="bonus-detail__value">35x (B+D)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Scommessa GG</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Giri Gratuiti</div>
            <div class="bonus-detail__value">50 GG</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Crypto Welcome -->
  <section class="content-section content-section--alt" id="crypto-welcome">
    <div class="container">
      <h2>Bonus di Benvenuto Crypto</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Crypto: 200% fino a 3.000 USDT</div>
          <span class="bonus-card__tag">Crypto</span>
        </div>
        <p>Se preferisci depositare in criptovaluta, abbiamo un'offerta di benvenuto dedicata. Effettua un primo deposito crypto di almeno 100 USDT e ricevi un bonus match del 200% fino a 3.000 USDT. Il requisito di scommessa e 40x sull'importo del bonus.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Deposito Min</div>
            <div class="bonus-detail__value">100 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Scommessa</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Bonus Max</div>
            <div class="bonus-detail__value">3.000 USDT</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Weekly Reload -->
  <section class="content-section" id="weekly-reload">
    <div class="container">
      <h2>Ricarica Settimanale</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Ricarica Settimanale: 70 Giri Gratuiti</div>
          <span class="bonus-card__tag">Lun-Gio</span>
        </div>
        <p>Ogni settimana, da lunedi a giovedi, effettua un deposito di almeno 20 &euro; e ricevi 70 Giri Gratuiti su una slot selezionata dal casino. Le vincite dei Giri Gratuiti hanno un requisito di scommessa di 40x e devono essere utilizzate entro 10 giorni.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Deposito Min</div>
            <div class="bonus-detail__value">20 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Giri Gratuiti</div>
            <div class="bonus-detail__value">70 GG</div>
          </div>
          <div>
            <div class="bonus-detail__label">Scommessa</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Scadenza</div>
            <div class="bonus-detail__value">10 giorni</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Weekend Reload -->
  <section class="content-section content-section--alt" id="weekend-reload">
    <div class="container">
      <h2>Bonus Ricarica Weekend</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Weekend: 50% fino a 500 &euro; + 70 Giri Gratuiti</div>
          <span class="bonus-card__tag">Weekend</span>
        </div>
        <p>Inizia il weekend con un bonus match del 50% fino a 500 &euro;. Se il tuo deposito e di 50 &euro; o piu, ricevi anche 70 Giri Gratuiti. I depositi inferiori a 50 &euro; danno comunque diritto al match del 50%, ma i Giri Gratuiti non sono inclusi. Il requisito di scommessa e 35x sull'importo del bonus.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Deposito Min</div>
            <div class="bonus-detail__value">20 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Deposito Min GG</div>
            <div class="bonus-detail__value">50 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Scommessa</div>
            <div class="bonus-detail__value">35x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Giri Gratuiti</div>
            <div class="bonus-detail__value">70 GG</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Crypto Reloads -->
  <section class="content-section" id="crypto-reloads">
    <div class="container">
      <h2>Bonus Ricarica Crypto</h2>
      <p>I giocatori che depositano in criptovaluta hanno accesso a offerte esclusive di ricarica settimanali e weekend con percentuali di match piu elevate.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Crypto Settimanale: 60% fino a 1.000 USDT</div>
          <span class="bonus-card__tag">Crypto</span>
        </div>
        <p>Deposita almeno 50 USDT durante la settimana e ricevi un bonus match del 60% fino a 1.000 USDT. Il requisito di scommessa e 30x sul bonus. La vincita massima da questo bonus e limitata a 5x l'importo del bonus.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Deposito Min</div>
            <div class="bonus-detail__value">50 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Scommessa</div>
            <div class="bonus-detail__value">30x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Vincita Max</div>
            <div class="bonus-detail__value">5x bonus</div>
          </div>
        </div>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Crypto Weekend: 75% fino a 750 USDT + 100 GG</div>
          <span class="bonus-card__tag">Crypto</span>
        </div>
        <p>Nei weekend, i depositi crypto di 75 USDT o piu danno diritto a un bonus match del 75% fino a 750 USDT piu 100 Giri Gratuiti. La vincita massima da questo bonus e limitata a 5x l'importo del bonus.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Deposito Min</div>
            <div class="bonus-detail__value">75 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Giri Gratuiti</div>
            <div class="bonus-detail__value">100 GG</div>
          </div>
          <div>
            <div class="bonus-detail__label">Vincita Max</div>
            <div class="bonus-detail__value">5x bonus</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Daily Cashback -->
  <section class="content-section content-section--alt" id="cashback">
    <div class="container">
      <h2>Cashback Giornaliero</h2>
      <p>I giocatori con livello VIP da 2 a 5 ricevono un cashback giornaliero basato sulle perdite nette dalle scommesse casino con denaro reale. La percentuale aumenta con il livello VIP e il requisito di scommessa e di solo 1x - giocalo una volta e il cashback e tuo.</p>

      <div class="data-table-wrap">
        <table class="data-table">
          <thead>
            <tr>
              <th>Livello VIP</th>
              <th>Cashback %</th>
              <th>Cashback Min</th>
              <th>Cashback Max</th>
              <th>Scommessa</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Livello 2</td>
              <td>3%</td>
              <td>1 &euro;</td>
              <td>100 &euro;</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Livello 3</td>
              <td>5%</td>
              <td>1 &euro;</td>
              <td>200 &euro;</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Livello 4</td>
              <td>10%</td>
              <td>1 &euro;</td>
              <td>300 &euro;</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Livello 5</td>
              <td>15%</td>
              <td>1 &euro;</td>
              <td>400 &euro;</td>
              <td>1x</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Live Cashback -->
  <section class="content-section" id="live-cashback">
    <div class="container">
      <h2>Cashback Casino dal Vivo</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Cashback Live: fino al 25%</div>
          <span class="bonus-card__tag">Casino dal Vivo</span>
        </div>
        <p>Tutti i giocatori possono richiedere fino al 25% di cashback sulle perdite nette dai giochi del casino dal vivo, con un pagamento massimo di 300 &euro;. Il requisito di scommessa e di solo 1x. Questo cashback deve essere richiesto manualmente tramite live chat o email ogni lunedi tra le 06:00 e le 23:59 UTC. Se non effettui la richiesta entro la finestra indicata, il cashback di quella settimana viene perso.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Cashback Max</div>
            <div class="bonus-detail__value">300 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Scommessa</div>
            <div class="bonus-detail__value">1x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Giorno Richiesta</div>
            <div class="bonus-detail__value">Lunedi</div>
          </div>
          <div>
            <div class="bonus-detail__label">Finestra Richiesta</div>
            <div class="bonus-detail__value">06:00-23:59 UTC</div>
          </div>
        </div>
      </div>

      <div class="highlight-box" style="margin-top: var(--space-4);">
        <h4>Come Richiedere il Cashback Live</h4>
        <p>Contatta il nostro team di assistenza tramite live chat o email (support@westace.com) il lunedi tra le 06:00 e le 23:59 UTC per richiedere il tuo cashback casino dal vivo. Il cashback viene calcolato sulle tue perdite nette della settimana precedente e accreditato sul tuo conto dopo l'elaborazione della richiesta.</p>
      </div>
    </div>
  </section>

  <!-- VIP -->
  <section class="content-section content-section--alt" id="vip">
    <div class="container">
      <h2>Programma VIP</h2>
      <p>Il Programma VIP di <?php echo SITE_NAME; ?> premia i giocatori fedeli attraverso cinque livelli. Man mano che avanzi nei livelli, sblocchi percentuali di cashback migliori, limiti di prelievo piu alti, offerte personalizzate e un manager VIP dedicato. Il programma e aperto a tutti i giocatori registrati.</p>

      <h3>Vantaggi VIP</h3>
      <ul class="check-list">
        <li>Cashback giornaliero crescente dal 3% al 15% in base al livello VIP</li>
        <li>Limiti di deposito e prelievo piu alti ai livelli superiori</li>
        <li>Manager VIP personale per i giocatori di livello piu alto</li>
        <li>Offerte bonus e promozioni personalizzate</li>
        <li>Assistenza prioritaria e prelievi piu rapidi</li>
      </ul>

      <h3>Progressione di Livello</h3>
      <p>I criteri esatti per avanzare tra i livelli VIP non sono resi pubblici. La progressione si basa sulla tua attivita complessiva nel casino. Contatta il nostro team di assistenza per informazioni sul tuo attuale stato VIP e su cosa serve per raggiungere il livello successivo.</p>

      <table class="quick-table">
        <tr><th>Caratteristica</th><th>Dettagli</th></tr>
        <tr><td>Livelli VIP</td><td>5 livelli</td></tr>
        <tr><td>Range Cashback</td><td>3% (Livello 2) fino al 15% (Livello 5)</td></tr>
        <tr><td>Scommessa Cashback</td><td>1x</td></tr>
        <tr><td>Manager Personale</td><td>Disponibile ai livelli superiori</td></tr>
        <tr><td>Progressione</td><td>Basata sull'attivita complessiva (criteri non pubblici)</td></tr>
      </table>
    </div>
  </section>

  <!-- No-Deposit Info -->
  <section class="content-section" id="no-deposit">
    <div class="container container--narrow">
      <h2>Bonus Senza Deposito <?php echo SITE_NAME; ?></h2>
      <p>Al momento, <?php echo SITE_NAME; ?> non offre un bonus senza deposito. Il pacchetto di benvenuto richiede un primo deposito minimo di 20 &euro; per essere attivato. Tieni d'occhio la sezione Promozioni e controlla regolarmente, poiche ruotiamo frequentemente le nostre offerte e potremmo introdurre bonus senza deposito in futuro.</p>
    </div>
  </section>

  <!-- Bonus FAQ -->
  <section class="content-section content-section--alt" id="bonus-faq">
    <div class="container container--narrow">
      <h2>FAQ Bonus</h2>

      <details class="faq-item">
        <summary>Serve un codice promozionale per richiedere un bonus?</summary>
        <div class="faq-answer">
          <p>No. Tutti i bonus su <?php echo SITE_NAME; ?> possono essere richiesti senza codice promozionale. Vai alla cassa, seleziona l'offerta ed effettua il deposito qualificante. Alcuni bonus potrebbero dover essere attivati nella sezione I Miei Bonus del tuo account.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Qual e il valore totale del pacchetto di benvenuto?</summary>
        <div class="faq-answer">
          <p>Il pacchetto di benvenuto completo vale fino a 2.000 &euro; in fondi bonus piu 150 Giri Gratuiti distribuiti su tre depositi. Ogni deposito riceve un match del 100%: fino a 1.000 &euro; sul primo e fino a 500 &euro; su ciascuno del secondo e terzo.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso combinare piu bonus?</summary>
        <div class="faq-answer">
          <p>No. Devi completare o rinunciare a qualsiasi bonus attivo prima di richiederne uno nuovo. I bonus non possono essere cumulati.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Cosa succede se prelevo prima di completare i requisiti di scommessa?</summary>
        <div class="faq-answer">
          <p>Richiedere un prelievo prima che il requisito di scommessa sia soddisfatto annulla il bonus e tutte le vincite associate. Completa il rollover completo prima di richiedere un prelievo.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Come funziona il cashback giornaliero?</summary>
        <div class="faq-answer">
          <p>Il cashback giornaliero e disponibile per i livelli VIP da 2 a 5. Viene calcolato sulle perdite nette dalle scommesse casino con denaro reale. La percentuale varia dal 3% al 15% in base al livello VIP. Il requisito di scommessa e di solo 1x, il che significa che devi giocare l'importo del cashback una sola volta prima di poter prelevare.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Tutti i giochi contribuiscono allo stesso modo ai requisiti di scommessa?</summary>
        <div class="faq-answer">
          <p>No. Diversi tipi di gioco contribuiscono con percentuali diverse. Le slot contribuiscono generalmente al 100%, mentre i giochi da tavolo e i giochi del casino dal vivo contribuiscono in misura inferiore. Controlla i termini del bonus per la tabella esatta di contribuzione.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>C'e un bonus separato per i depositi crypto?</summary>
        <div class="faq-answer">
          <p>Si. Chi deposita in criptovaluta puo richiedere un bonus match del 200% fino a 3.000 USDT come bonus di benvenuto, piu offerte di ricarica settimanali e weekend crypto. Queste offerte sono separate dai bonus standard in EUR e hanno requisiti di scommessa propri.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
