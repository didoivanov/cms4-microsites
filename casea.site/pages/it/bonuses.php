<?php
/**
 * Bonuses Page - Italian
 */
$page_title = SITE_NAME . ' Bonus - Bonus di Benvenuto, Giri Gratis, Codici Promo & Offerte Senza Deposito';
$page_description = 'Tutti i bonus di ' . SITE_NAME . ' Casino in un unico posto. Bonus di benvenuto fino a EUR 500 + 200 giri gratis, codici promo senza deposito, offerte settimanali di ricarica, cashback e premi VIP.';
$current_page = 'bonuses';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Bonus Casinò';
$hero_description = 'Tutte le promozioni attive, le offerte di benvenuto e i premi fedeltà attualmente disponibili. Assicurati di leggere i termini prima di richiedere qualsiasi offerta.';
$hero_cta = 'Richiedi il Tuo Bonus';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Welcome Bonuses -->
  <section class="content-section" id="welcome">
    <div class="container">
      <h2>Bonus di Benvenuto per Nuovi Giocatori</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <p style="margin-top:0">Chi effettua il primo deposito su <?php echo SITE_NAME; ?> può scegliere tra diverse offerte di benvenuto a seconda che preferisca i giochi da casinò o le scommesse sportive. Ogni opzione è disponibile sul tuo primo deposito e non può essere combinata con altre promozioni.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/casea-bonuses.png" alt="<?php echo SITE_NAME; ?> Casino promozioni e offerte bonus di benvenuto" style="max-width:300px;width:100%;">
        </div>
      </div>

      <!-- Casino Welcome -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">100% fino a &euro;500 + 200 Giri Gratis</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Deposita un minimo di EUR 20 per ricevere un bonus del 100% sul tuo primo deposito, fino a EUR 500. In aggiunta, 200 giri gratis vengono distribuiti in lotti di 20 al giorno per 10 giorni consecutivi. Il primo lotto diventa disponibile subito dopo il deposito. Devi riscattare ogni serie entro 24 ore altrimenti scade. Un deposito di almeno EUR 10 ti dà anche 1 credito Bonus Crab per una prova alla Claw Machine, dove i premi includono monete, giri gratis, bonus o premi in denaro.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Deposito Min.</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Requisito di Scommessa</div>
            <div class="bonus-detail__value">35x (bonus + deposito)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Req. Scommessa Giri Gratis</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validità</div>
            <div class="bonus-detail__value">10 giorni</div>
          </div>
          <div>
            <div class="bonus-detail__label">Puntata Max.</div>
            <div class="bonus-detail__value">&euro;5</div>
          </div>
        </div>
      </div>

      <!-- Multi-Deposit Welcome -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">250% fino a &euro;3.000 + 350 Giri Gratis</div>
          <span class="bonus-card__tag">Pacchetto 4 Depositi</span>
        </div>
        <p>Un pacchetto di benvenuto multi-deposito distribuito sui tuoi primi quattro depositi. Il primo deposito ti dà il 100% fino a EUR 1.000 più 200 giri gratis. Il secondo offre un bonus del 75% fino a EUR 500. Il terzo aggiunge il 50% fino a EUR 500 più 50 giri gratis, e il quarto completa il tutto con il 25% fino a EUR 1.000 più 100 giri gratis.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Deposito Min.</div>
            <div class="bonus-detail__value">&euro;20 per deposito</div>
          </div>
          <div>
            <div class="bonus-detail__label">Requisito di Scommessa</div>
            <div class="bonus-detail__value">35x per bonus</div>
          </div>
          <div>
            <div class="bonus-detail__label">Prelievo Max.</div>
            <div class="bonus-detail__value">10x l'importo del bonus</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validità</div>
            <div class="bonus-detail__value">10 giorni per bonus</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Bonus Sport 100% fino a &euro;100</div>
          <span class="bonus-card__tag">Sport</span>
        </div>
        <p>Gli scommettitori sportivi possono ottenere un bonus del 100% sul primo deposito. Il bonus massimo varia in base alla regione: i giocatori da Finlandia, Germania, Norvegia, Svizzera e Austria possono ricevere fino a EUR 200. I giocatori italiani ricevono fino a EUR 150. I giocatori da Kazakistan, Uzbekistan, Kirghizistan, Tagikistan, Georgia e Azerbaigian possono ottenere fino a EUR 50. Per attivare il bonus, l'intero importo del deposito deve essere scommesso su scommesse sportive con quote di almeno 1,50.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Deposito Min.</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Requisito di Scommessa</div>
            <div class="bonus-detail__value">5x o 6x (per paese)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Quota Min.</div>
            <div class="bonus-detail__value">2.0 singole / 1.5 multiple</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validità</div>
            <div class="bonus-detail__value">30 giorni</div>
          </div>
        </div>
      </div>

      <div class="highlight-box">
        <h4>Codice Promo <?php echo SITE_NAME; ?></h4>
        <p>Se hai un codice promo, puoi inserirlo durante la registrazione. Il campo codice appare nel modulo di iscrizione subito dopo aver selezionato il tuo bonus di benvenuto preferito. I codici promo possono sbloccare offerte speciali o termini bonus modificati, quindi vale la pena controllare prima di depositare.</p>
      </div>
    </div>
  </section>

  <!-- Reload & Weekly -->
  <section class="content-section content-section--alt" id="reload">
    <div class="container">
      <h2>Bonus Settimanali di Ricarica</h2>
      <p><?php echo SITE_NAME; ?> continua con le promozioni anche dopo la fase di benvenuto. Queste offerte ricorrenti si rinnovano ogni settimana, quindi i giocatori attivi hanno sempre qualcosa da riscattare.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">66 Giri Gratis Settimanali</div>
          <span class="bonus-card__tag">Lunedì - Giovedì</span>
        </div>
        <p>Effettua un deposito di EUR 20 o più tra lunedì e giovedì per ricevere 66 giri gratis su una slot in evidenza. Devi aderire all'offerta ogni settimana prima di depositare. I giri devono essere utilizzati entro 7 giorni e le vincite hanno un requisito di scommessa 40x con una finestra di completamento di 10 giorni. Puntata massima durante il bonus attivo: EUR 5.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Ricarica Weekend: 50% fino a &euro;777 + 77 Giri Gratis</div>
          <span class="bonus-card__tag">Venerdì - Domenica</span>
        </div>
        <p>Deposita almeno EUR 20 nel weekend per ottenere un bonus del 50% fino a EUR 777. Se il tuo deposito è di EUR 50 o più, ricevi anche 77 giri gratis su una slot selezionata. L'adesione è richiesta prima del deposito. Il requisito di scommessa è 35x su deposito più bonus e 40x sulle vincite dei giri gratis. Hai 10 giorni per completare i requisiti.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Ricarica Sport Settimanale: 55% fino a &euro;750</div>
          <span class="bonus-card__tag">Sport</span>
        </div>
        <p>Una volta alla settimana, il tuo deposito più grande si qualifica per un bonus sportivo del 55% fino a EUR 750. Il deposito deve essere giocato una volta su scommesse sportive con quote di 1,50 o superiori prima che il bonus venga accreditato. Puoi quindi richiederlo tramite live chat o email. I requisiti di scommessa devono essere completati entro 30 giorni e il prelievo massimo da questo bonus è 10x il suo valore.</p>
      </div>
    </div>
  </section>

  <!-- Cashback -->
  <section class="content-section" id="cashback">
    <div class="container">
      <h2>Programmi Cashback</h2>
      <p><?php echo SITE_NAME; ?> offre tre programmi cashback separati: cashback giornaliero per i giochi da casinò, cashback settimanale per il casinò dal vivo e cashback settimanale per le scommesse sportive. Ogni programma ha i propri termini e processo di richiesta.</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Cashback Giornaliero Casinò</h4>
          <p>Disponibile dal livello VIP 2 in su. VIP 2 riceve il 3% fino a EUR 100 al giorno. VIP 3 riceve il 5% fino a EUR 200. VIP 4 riceve il 10% fino a EUR 300. VIP 5 riceve il 15% fino a EUR 400. Il cashback viene accreditato automaticamente alle 04:00 UTC e richiede un requisito di scommessa 1x. Devi aderire ogni 4 settimane.</p>
        </div>
        <div class="info-card">
          <h4>Cashback Casinò dal Vivo: 25% fino a &euro;350</h4>
          <p>Cashback settimanale sulle perdite nette dai giochi del casinò dal vivo. La perdita minima per qualificarsi è EUR 5. Contatta il supporto clienti il lunedì dopo le 06:00 UTC (prima delle 23:59 UTC) per riscattarlo. Una volta accreditato, il cashback richiede una scommessa 1x prima del prelievo.</p>
        </div>
        <div class="info-card">
          <h4>Cashback Sport: 10% fino a &euro;500</h4>
          <p>Copre le perdite nette sulle scommesse sportive da lunedì a domenica. Perdita minima di EUR 20 per qualificarsi. Contatta il supporto il lunedì per riscattarlo. Il cashback ha un requisito di scommessa 3x e può essere utilizzato solo nella sezione Sport.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sports Promos -->
  <section class="content-section content-section--alt" id="sports-promos">
    <div class="container">
      <h2>Promozioni Scommesse Sportive</h2>
      <p>Oltre al bonus di benvenuto e al cashback, le scommesse sportive offrono diversi strumenti pensati per aggiungere valore alle tue scommesse.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Boost Accumulator: fino al 100%</div>
        </div>
        <p>Piazza una scommessa multipla con 3 o più selezioni a quote di 1,40+ ciascuna e le tue vincite riceveranno un boost. Il moltiplicatore parte dal 3% per 3 selezioni e sale fino al 100% per 21 o più. Solo le scommesse con denaro reale contano. Richiedere un prelievo prima che il bonus venga accreditato lo annullerà.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Pagamento Anticipato con 2 Gol di Vantaggio</div>
        </div>
        <p>Se la tua squadra porta un vantaggio di 2 gol, la tua scommessa pre-match 1X2 viene pagata per intero -- senza bisogno di aspettare il fischio finale. Questa offerta si applica solo alle scommesse su vittoria casa o trasferta. Le scommesse live e quelle sul pareggio sono escluse, e il cash out annullerà il pagamento anticipato.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Bet Builder: 50% Senza Rischio fino a &euro;50</div>
        </div>
        <p>Piazza un Bet Builder con quote di 1,70 o superiori utilizzando almeno EUR 20 in denaro reale. Se perdi, ricevi una scommessa gratuita del 50% della tua puntata (fino a EUR 50). Disponibile una volta alla settimana. La scommessa gratuita deve essere utilizzata entro 3 giorni e ha un requisito di scommessa 3x a quote di 1,50+.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Quote Maggiorate</div>
        </div>
        <p>Alcuni mercati pre-match 1X2 selezionati offrono occasionalmente quote potenziate. Cerca l'indicatore "Enhanced Prices" nella descrizione del mercato. Le vincite dalle scommesse a quote maggiorate vengono pagate come denaro reale senza requisiti di scommessa aggiuntivi.</p>
      </div>
    </div>
  </section>

  <!-- VIP, Shop, Crab -->
  <section class="content-section" id="vip">
    <div class="container">
      <h2>Programma VIP &amp; Extra</h2>
      <div class="two-col">
        <div>
          <h3>Programma VIP</h3>
          <p><?php echo SITE_NAME; ?> ha un programma fedeltà multilivello in cui avanzi in base alla tua attività di gioco. Man mano che sali di livello, sblocchi vantaggi come un account manager personale, limiti di prelievo più alti, offerte bonus esclusive e percentuali cashback superiori. I livelli VIP più alti danno accesso ai migliori cashback settimanali e a tempi di elaborazione più rapidi sui pagamenti.</p>

          <h3>Bonus Crab</h3>
          <p>Ogni deposito di EUR 20 o più ti regala 1 credito Bonus Crab. Usalo per "catturare" un premio casuale dalla Claw Machine -- i possibili premi includono bonus in denaro, giri gratis o monete. È un piccolo vantaggio quotidiano che aggiunge un po' di varietà alle tue sessioni.</p>
        </div>
        <div>
          <h3>Negozio Esclusivo</h3>
          <p>Le monete guadagnate attraverso il gioco, le sfide e le promozioni possono essere spese nel negozio. I premi variano dai giri gratis su slot selezionate (es. 5 giri su Sweet Bonanza per 30 monete) al bonus in denaro (EUR 5 per 50 monete, fino a EUR 250 per 1.200 monete). È un ottimo modo per convertire la tua fedeltà in premi concreti al tuo ritmo.</p>

          <h3>Sfide</h3>
          <p>Le sfide settimanali ti premiano per il raggiungimento di semplici obiettivi. Le sfide del casinò possono chiederti di piazzare scommesse da EUR 0,30 su slot specifiche, mentre quelle sportive possono richiedere scommesse da EUR 15 su partite con quote minime di 2,0. Ogni sfida completata fa guadagnare monete, e completarne 20 in una settimana porta un bonus di 50 monete.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- No-Deposit Info -->
  <section class="content-section content-section--alt" id="no-deposit">
    <div class="container container--narrow">
      <h2>Bonus Senza Deposito <?php echo SITE_NAME; ?></h2>
      <p>Al momento, <?php echo SITE_NAME; ?> non offre un classico bonus senza deposito. Tuttavia, la funzione Bonus Crab premia ogni deposito di EUR 10 o più con una prova gratuita alla Claw Machine, dove puoi vincere giri, bonus in denaro, monete o premi in contanti senza alcun requisito di scommessa aggiuntivo sul premio iniziale. Funziona come l'equivalente più vicino a un bonus senza deposito attualmente disponibile sulla piattaforma.</p>
      <p>Tieni d'occhio la sezione Promozioni e controlla regolarmente, poiché il casinò ruota frequentemente le sue offerte e potrebbe introdurre offerte senza deposito o codici bonus gratuiti in futuro.</p>
    </div>
  </section>

  <!-- Bonus FAQ -->
  <section class="content-section" id="bonus-faq">
    <div class="container container--narrow">
      <h2>FAQ Bonus</h2>

      <details class="faq-item">
        <summary>Posso usare un codice promo su <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Sì. Durante la registrazione, vedrai un'opzione per inserire un codice promo dopo aver selezionato il tuo bonus di benvenuto preferito. Se hai un codice valido, inseriscilo lì per attivare i vantaggi associati.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso combinare più bonus?</summary>
        <div class="faq-answer">
          <p>No. I bonus di benvenuto e le promozioni di ricarica non possono essere cumulati. Devi completare o annullare qualsiasi bonus attivo prima di richiederne uno nuovo. Alcuni bonus possono essere annullati dalla sezione Profilo o contattando il supporto.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Cosa succede se richiedo un prelievo prima di completare il requisito di scommessa?</summary>
        <div class="faq-answer">
          <p>Richiedere un prelievo prima di completare i requisiti di scommessa annullerà il bonus e tutte le vincite associate. Assicurati di aver completato completamente il rollover prima di richiedere un pagamento.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Tutti i giochi contribuiscono allo stesso modo al requisito di scommessa?</summary>
        <div class="faq-answer">
          <p>No. Diversi tipi di giochi contribuiscono con percentuali diverse. Le slot generalmente contribuiscono al 100%, mentre i giochi da tavolo e i titoli del casinò dal vivo possono contribuire meno. Controlla i termini del bonus per la tabella di contribuzione esatta.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>I depositi tramite Skrill e Neteller sono idonei per i bonus?</summary>
        <div class="faq-answer">
          <p>Nella maggior parte dei casi, i depositi effettuati tramite Skrill o Neteller non si qualificano per i bonus di benvenuto. Controlla i termini della promozione specifica per eventuali eccezioni.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
