<?php
/**
 * Support Page - WestAce (Italian / IT)
 */
$page_title = 'WestAce Assistenza Clienti - Live Chat 24/7 & Email';
$page_description = 'Contatta l\'assistenza clienti di ' . SITE_NAME . ' Casino tramite chat dal vivo 24/7 o email a support@westace.com. Aiuto per depositi, prelievi, bonus, problemi dell\'account e domande tecniche.';
$current_page = 'support';
$lang_prefix = '/it';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Assistenza Clienti';
$hero_description = 'Siamo qui per aiutarti con qualsiasi domanda riguardante il tuo account, depositi, prelievi, bonus o problemi tecnici. Contattaci in qualsiasi momento.';
$hero_cta = 'Apri la Chat dal Vivo';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Contact Options -->
  <section class="content-section" id="contact">
    <div class="container">
      <h2>Come Contattarci</h2>
      <p><?php echo SITE_NAME; ?> offre due canali di assistenza per garantirti aiuto ogni volta che ne hai bisogno. Che tu abbia una domanda veloce su una promozione o necessiti di aiuto per risolvere un problema di pagamento, il nostro team è disponibile 24 ore su 24.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128172;</div>
          <h4>Chat dal Vivo</h4>
          <p>Il modo più rapido per ottenere assistenza. Clicca sull'icona della chat su qualsiasi pagina per avviare una conversazione con un operatore. I nostri agenti rispondono generalmente entro 5 minuti. Disponibile 24 ore su 24, 7 giorni su 7.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9993;</div>
          <h4>Assistenza via Email</h4>
          <p>Per domande dettagliate o l'invio di documenti, l'email è l'opzione migliore. Invia la tua richiesta a <strong>support@westace.com</strong> e attendi una risposta entro 24 ore. Includi i dettagli del tuo account e una descrizione chiara del problema.</p>
        </div>
      </div>

      <table class="data-table" style="margin-top: var(--space-8);">
        <thead>
          <tr>
            <th>Canale</th>
            <th>Disponibilità</th>
            <th>Tempo di Risposta</th>
            <th>Ideale Per</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Chat dal Vivo</td>
            <td>24/7</td>
            <td>Entro 5 minuti</td>
            <td>Domande rapide, aiuto bonus, problemi di deposito</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>24/7</td>
            <td>Fino a 24 ore</td>
            <td>Invio documenti, pratiche dettagliate, reclami</td>
          </tr>
          <tr>
            <td>Telefono</td>
            <td>Non disponibile</td>
            <td>-</td>
            <td>-</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- What Support Can Help With -->
  <section class="content-section content-section--alt" id="topics">
    <div class="container">
      <h2>Con Cosa Può Aiutarti l'Assistenza?</h2>
      <p>Il nostro team di assistenza clienti gestisce un'ampia gamma di argomenti. Ecco le aree più comuni per cui i giocatori ci contattano:</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Account &amp; Registrazione</h4>
          <p>Aiuto per la creazione dell'account, l'aggiornamento dei dati personali, il ripristino della password e la risoluzione dei problemi di accesso. Se il tuo account è bloccato o limitato, l'assistenza può verificare la tua situazione.</p>
        </div>
        <div class="info-card">
          <h4>Depositi &amp; Pagamenti</h4>
          <p>Assistenza per depositi non riusciti, domande sui metodi di pagamento e verifica dello stato delle transazioni. L'assistenza può aiutarti anche se un deposito non appare nel tuo saldo.</p>
        </div>
        <div class="info-card">
          <h4>Prelievi &amp; Pagamenti</h4>
          <p>Domande sui tempi di elaborazione dei prelievi, richieste in sospeso e prelievi rifiutati. Per informazioni dettagliate sui prelievi, visita la pagina <a href="<?php echo $lang_prefix; ?>/withdrawal">Prelievi</a>.</p>
        </div>
        <div class="info-card">
          <h4>Bonus &amp; Promozioni</h4>
          <p>Chiarimenti sui termini dei bonus, requisiti di scommessa, attivazione delle offerte e cancellazione dei bonus attivi. L'assistenza può spiegare i dettagli specifici delle promozioni e le condizioni di idoneità.</p>
        </div>
        <div class="info-card">
          <h4>Verifica &amp; KYC</h4>
          <p>Indicazioni sull'invio dei documenti, stato della verifica, tipi di documenti accettati e tempistiche previste. L'assistenza può aiutarti in caso di problemi durante il processo di verifica.</p>
        </div>
        <div class="info-card">
          <h4>Problemi Tecnici</h4>
          <p>Aiuto per giochi che non si caricano, errori del sito, problemi di compatibilità mobile e problemi legati al browser. L'assistenza può diagnosticare e inoltrare i bug tecnici al team di sviluppo.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Contacting Support -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Come Ottenere il Massimo dalla Tua Richiesta</h2>
      <p>Alcuni semplici accorgimenti possono aiutare il nostro team a risolvere il tuo problema più velocemente:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Tieni a portata di mano i dati del tuo account.</strong> Il tuo nome utente o indirizzo email aiuta l'assistenza a localizzare il tuo account rapidamente. Se il problema riguarda una transazione specifica, tieni pronto il numero di riferimento.
          </div>
        </li>
        <li>
          <div>
            <strong>Descrivi il problema in modo chiaro.</strong> Spiega cosa è successo, quando è successo e cosa ti aspettavi che accadesse. Gli screenshot sono utili per problemi tecnici o transazioni contestate.
          </div>
        </li>
        <li>
          <div>
            <strong>Usa il canale giusto.</strong> Per problemi urgenti (account bloccato, deposito non riuscito), la chat dal vivo è la scelta migliore. Per l'invio di documenti o pratiche complesse che richiedono un'indagine, l'email a support@westace.com dà al team più spazio per lavorare.
          </div>
        </li>
        <li>
          <div>
            <strong>Consulta prima le FAQ.</strong> Molte domande frequenti su bonus, prelievi e gestione dell'account sono trattate nelle sezioni FAQ di questo sito.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Responsible Gambling -->
  <section class="content-section content-section--alt" id="responsible">
    <div class="container container--narrow">
      <h2>Gioco Responsabile &amp; Autoesclusione</h2>
      <p><?php echo SITE_NAME; ?> prende sul serio il gioco responsabile. Se ritieni che le tue abitudini di gioco stiano diventando un problema, il nostro team di assistenza può aiutarti ad organizzare un'autoesclusione dalla piattaforma.</p>
      <p>L'autoesclusione è disponibile per un periodo definito o in modo permanente. Una volta attivata, l'autoesclusione non può essere revocata fino alla scadenza del periodo stabilito. Durante il periodo di autoesclusione, non potrai accedere al tuo account né piazzare scommesse. Contatta l'assistenza tramite la chat dal vivo o via email a support@westace.com per richiedere l'autoesclusione.</p>

      <h3>Autovalutazione</h3>
      <p>Poniti le seguenti domande per valutare se il gioco d'azzardo sta influenzando la tua vita:</p>
      <ul>
        <li>Le tue spese per il gioco stanno sfuggendo al controllo?</li>
        <li>Prendi in prestito denaro per continuare a giocare?</li>
        <li>Stai trascorrendo meno tempo con la famiglia e gli amici?</li>
        <li>Le opinioni degli altri sulle tue abitudini di gioco hanno iniziato a infastidirti?</li>
        <li>Hai perso interesse per i tuoi hobby o attività abituali?</li>
        <li>Ti senti giù o ansioso a causa delle perdite al gioco?</li>
        <li>Hai mai mentito su quanto tempo o denaro dedichi al gioco d'azzardo?</li>
      </ul>
      <p>Se hai risposto sì a diverse di queste domande, ti consigliamo di contattare un servizio di aiuto:</p>
      <ul>
        <li><strong>Telefono Verde contro il Gioco d'Azzardo Patologico</strong> -- linea gratuita di assistenza -- 800 558822</li>
        <li><strong>ADM (Agenzia delle Dogane e dei Monopoli)</strong> -- autorità regolatrice del gioco in Italia -- <a href="https://www.adm.gov.it" target="_blank" rel="noopener noreferrer">adm.gov.it</a></li>
        <li><strong>Gioca Responsabile</strong> -- informazioni e risorse per il gioco responsabile -- <a href="https://www.giocaresponsabile.it" target="_blank" rel="noopener noreferrer">giocaresponsabile.it</a></li>
        <li><strong>Giocatori Anonimi</strong> -- supporto tra pari e incontri di recupero</li>
        <li><strong>Gambling Therapy</strong> -- supporto gratuito e confidenziale online</li>
      </ul>

      <h3>Consigli Pratici</h3>
      <ul>
        <li>Non considerare il gioco d'azzardo come una fonte di reddito</li>
        <li>Fissa un budget di tempo e denaro, e rispettalo</li>
        <li>Gioca solo con soldi che puoi permetterti di perdere</li>
        <li>Evita di giocare quando sei stressato, turbato o sotto l'effetto dell'alcol</li>
      </ul>
    </div>
  </section>

  <!-- Support FAQ -->
  <section class="content-section" id="support-faq">
    <div class="container container--narrow">
      <h2>FAQ Assistenza</h2>

      <details class="faq-item">
        <summary>L'assistenza <?php echo SITE_NAME; ?> è disponibile 24/7?</summary>
        <div class="faq-answer">
          <p>Si. Sia la chat dal vivo che l'assistenza via email sono disponibili 24 ore su 24, 7 giorni su 7.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>In quanto tempo risponde la chat dal vivo?</summary>
        <div class="faq-answer">
          <p>Gli operatori della chat dal vivo rispondono generalmente entro 5 minuti. Durante le ore di punta, i tempi di attesa possono essere leggermente più lunghi.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Qual è l'indirizzo email dell'assistenza?</summary>
        <div class="faq-answer">
          <p>Puoi contattare l'assistenza <?php echo SITE_NAME; ?> via email a <strong>support@westace.com</strong>. Includi il tuo nome utente o l'email di registrazione, una descrizione del problema e qualsiasi screenshot pertinente. Attendi una risposta entro 24 ore.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>L'assistenza può aiutarmi a cancellare un bonus?</summary>
        <div class="faq-answer">
          <p>Si. Se desideri cancellare un bonus attivo, contatta l'assistenza tramite la chat dal vivo o via email. Tieni presente che la cancellazione di un bonus rimuove l'importo del bonus e tutte le vincite generate da esso.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Cosa fare se il mio problema non viene risolto?</summary>
        <div class="faq-answer">
          <p>Se non sei soddisfatto della risposta iniziale, chiedi che il tuo caso venga inoltrato a un agente senior. Fornisci quanti più dettagli possibile per aiutare il team a esaminare il tuo caso in modo approfondito.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso richiedere l'autoesclusione?</summary>
        <div class="faq-answer">
          <p>Si. Contatta l'assistenza tramite la chat dal vivo o via email per organizzare l'autoesclusione per un periodo definito o in modo permanente. Durante l'autoesclusione, non puoi accedere al tuo account né piazzare scommesse.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
