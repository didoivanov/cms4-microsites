<?php
/**
 * Withdrawal Page - Italian
 */
$page_title = SITE_NAME . ' Prelievo - Metodi di Pagamento, Limiti & Tempi di Elaborazione';
$page_description = 'Tutto sui prelievi di ' . SITE_NAME . ' Casino: metodi di pagamento, tempi di elaborazione fino a 72 ore, limiti giornalieri e mensili, verifica KYC e consigli per velocizzare il tuo prelievo.';
$current_page = 'withdrawal';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Prelievi &amp; Pagamenti';
$hero_description = 'Come prelevare le tue vincite, quali metodi sono disponibili, tempi di elaborazione, limiti e cosa aspettarti durante il processo di verifica.';
$hero_cta = 'Inizia a Giocare';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Panoramica Prelievi</h2>
      <p>Ottenere le tue vincite da <?php echo SITE_NAME; ?> è semplice una volta che conosci le regole. I pagamenti vengono generalmente elaborati entro 72 ore e, dove possibile, il casinò invia i fondi allo stesso metodo utilizzato per il deposito. Se quel metodo non supporta le transazioni in entrata, i fondi verranno inviati al tuo conto bancario.</p>
      <p>Prima di richiedere il tuo primo prelievo, dovrai completare una verifica KYC (Know Your Customer) e assicurarti di aver soddisfatto il requisito minimo di rollover del deposito.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Prelievo Min.</h4>
          <p>EUR 10 su tutti i metodi di pagamento. Gli importi inferiori a questa soglia non possono essere elaborati.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Limite Giornaliero</h4>
          <p>EUR 500 per gli account standard. I membri VIP possono prelevare fino a EUR 1.500 al giorno.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Limite Mensile</h4>
          <p>EUR 7.000 per i nuovi giocatori. I membri VIP godono di un massimo di EUR 20.000 al mese.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Payment Methods Table -->
  <section class="content-section content-section--alt" id="methods">
    <div class="container">
      <h2>Metodi di Pagamento</h2>
      <p>I metodi disponibili per il prelievo dipendono dal tuo paese e da come hai depositato. In generale, <?php echo SITE_NAME; ?> elabora i pagamenti verso il metodo di deposito originale quando possibile.</p>

      <table class="data-table">
        <thead>
          <tr>
            <th>Metodo</th>
            <th>Prelievo Min.</th>
            <th>Tempo di Elaborazione</th>
            <th>Note</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Visa / Mastercard</td>
            <td>&euro;10</td>
            <td>1-3 giorni lavorativi</td>
            <td>Restituito sulla carta usata per il deposito</td>
          </tr>
          <tr>
            <td>Skrill</td>
            <td>&euro;10</td>
            <td>Fino a 24 ore</td>
            <td>Elaborazione rapida, ampiamente disponibile</td>
          </tr>
          <tr>
            <td>Neteller</td>
            <td>&euro;10</td>
            <td>Fino a 24 ore</td>
            <td>Disponibile nella maggior parte delle regioni</td>
          </tr>
          <tr>
            <td>Bonifico Bancario</td>
            <td>&euro;20</td>
            <td>2-5 giorni lavorativi</td>
            <td>Utilizzato come alternativa quando il metodo originale non è disponibile</td>
          </tr>
          <tr>
            <td>Bitcoin</td>
            <td>&euro;10</td>
            <td>Fino a 24 ore</td>
            <td>Richiede conferme blockchain dopo l'elaborazione del casinò</td>
          </tr>
          <tr>
            <td>Ethereum</td>
            <td>&euro;10</td>
            <td>Fino a 24 ore</td>
            <td>I pagamenti crypto tendono ad essere tra i più veloci</td>
          </tr>
          <tr>
            <td>Litecoin / Tether / Ripple</td>
            <td>&euro;10</td>
            <td>Fino a 24 ore</td>
            <td>Verifica la disponibilità per la tua regione</td>
          </tr>
        </tbody>
      </table>

      <p>Valute accettate per le transazioni: EUR, USD, CAD, AUD, CHF, HUF, NOK, PLN, NZD, CZK, BRL, CLP e PEN.</p>
    </div>
  </section>

  <!-- How to Withdraw -->
  <section class="content-section" id="how-to">
    <div class="container">
      <h2>Come Effettuare un Prelievo</h2>
      <p>Segui questi passaggi per richiedere un pagamento dal tuo account <?php echo SITE_NAME; ?>:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Completa il requisito di rollover.</strong> Prima del tuo primo prelievo, il tuo deposito deve essere scommesso almeno 1x. Se hai richiesto un bonus, completa prima l'intero requisito di scommessa. Non farlo potrebbe comportare una commissione del 10% sul prelievo.
          </div>
        </li>
        <li>
          <div>
            <strong>Apri la cassa.</strong> Naviga alla sezione prelievi nel tuo account. La trovi nel menu principale o nell'area impostazioni dell'account.
          </div>
        </li>
        <li>
          <div>
            <strong>Seleziona il metodo di pagamento e l'importo.</strong> Scegli tra le opzioni disponibili e inserisci l'importo che desideri prelevare. Assicurati che rientri nei limiti consentiti.
          </div>
        </li>
        <li>
          <div>
            <strong>Attendi l'elaborazione.</strong> Il casinò esamina ogni richiesta e generalmente elabora i pagamenti entro 3 giorni lavorativi. Verrai contattato se sono necessari documenti aggiuntivi.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- KYC Verification -->
  <section class="content-section content-section--alt" id="verification">
    <div class="container">
      <h2>Verifica dell'Account (KYC)</h2>
      <p><?php echo SITE_NAME; ?> richiede la verifica dell'identità prima di approvare le richieste di prelievo. Si tratta di una procedura standard nel settore, pensata per prevenire le frodi e rispettare le normative antiriciclaggio.</p>

      <div class="two-col">
        <div>
          <h3>Documenti Richiesti</h3>
          <ul>
            <li>Un documento d'identità rilasciato dal governo (passaporto, patente di guida o carta d'identità nazionale)</li>
            <li>Prova di residenza (bolletta utenze o estratto conto bancario, datato negli ultimi 3 mesi)</li>
            <li>Verifica del metodo di pagamento (foto carta di credito/debito, screenshot e-wallet o conferma crypto wallet)</li>
          </ul>
          <p>Hai 30 giorni dalla richiesta iniziale dei documenti per inviarli. Se non li fornisci entro questo periodo, il tuo account potrebbe essere chiuso.</p>
        </div>
        <div>
          <h3>Tempi di Verifica</h3>
          <p>Il tempo standard di elaborazione per la revisione dei documenti è fino a 10 giorni lavorativi, anche se in casi eccezionali potrebbe richiedere più tempo. Il casinò può utilizzare servizi di verifica di terze parti o richiedere controlli aggiuntivi come una videochiamata o verifica telefonica.</p>
          <p>Puoi caricare i documenti nella sezione «Impostazioni - Verifica Account» del tuo profilo. Scatta foto chiare e ben illuminate per evitare ritardi causati da documenti illeggibili.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Faster Payouts -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Consigli per Prelievi più Veloci</h2>

      <div class="highlight-box">
        <h4>Velocizza il Tuo Prelievo su <?php echo SITE_NAME; ?></h4>
        <p>Segui queste pratiche per ridurre al minimo i ritardi nei pagamenti e ottenere le tue vincite prima.</p>
      </div>

      <h3>1. Scegli e-wallet o criptovalute</h3>
      <p>Skrill, Neteller e le opzioni crypto come Bitcoin o Ethereum vengono generalmente elaborate più velocemente dei trasferimenti tramite carta o banca. Se la velocità è la tua priorità, deposita usando uno di questi metodi così il tuo prelievo può essere restituito allo stesso canale.</p>

      <h3>2. Verifica il tuo account in anticipo</h3>
      <p>Non aspettare il tuo primo prelievo per inviare i documenti. Carica il tuo documento d'identità, la prova di residenza e la verifica del metodo di pagamento appena ti registri. In questo modo, quando sei pronto per prelevare, non ci saranno ritardi per la verifica in sospeso.</p>

      <h3>3. Completa il requisito di scommessa prima di richiedere</h3>
      <p>Se hai un bonus attivo, assicurati che ogni requisito di scommessa sia completamente soddisfatto. Richiedere un prelievo mentre un bonus è ancora attivo annullerà il bonus e tutte le vincite correlate. Se hai giocato solo con i fondi depositati, ricorda il rollover 1x che deve essere completato per evitare la commissione extra.</p>

      <h3>4. Resta entro i limiti</h3>
      <p>Le richieste di prelievo che superano il limite giornaliero o mensile verranno rifiutate. Pianifica i tuoi prelievi di conseguenza: EUR 500 al giorno per gli account standard, EUR 1.500 al giorno per i membri VIP.</p>

      <h3>5. Usa il tuo metodo di deposito originale</h3>
      <p><?php echo SITE_NAME; ?> preferisce restituire i fondi allo stesso metodo utilizzato per il deposito. Usare un metodo diverso potrebbe attivare controlli aggiuntivi e rallentare il processo.</p>
    </div>
  </section>

  <!-- Withdrawal FAQ -->
  <section class="content-section content-section--alt" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>FAQ Prelievi</h2>

      <details class="faq-item">
        <summary>Quanto tempo ci vuole per un prelievo su <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>I prelievi vengono elaborati entro 72 ore (3 giorni lavorativi). Gli e-wallet e le criptovalute tendono ad essere i più veloci, spesso completandosi entro 24 ore dall'elaborazione del casinò. I bonifici bancari e i pagamenti con carta possono richiedere ulteriori 1-5 giorni lavorativi da parte del provider.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Qual è il prelievo minimo su <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>L'importo minimo di prelievo è EUR 10 per tutti i metodi di pagamento. Importi inferiori non possono essere richiesti.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Qual è il massimo che posso prelevare al mese?</summary>
        <div class="faq-answer">
          <p>I giocatori standard possono prelevare fino a EUR 7.000 al mese. I membri VIP hanno accesso a un limite maggiore di EUR 20.000 mensili. Si applicano anche limiti giornalieri: EUR 500 per gli account standard, EUR 1.500 per i VIP.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Perché il mio prelievo è stato rifiutato?</summary>
        <div class="faq-answer">
          <p>I motivi più comuni includono: requisiti di scommessa incompleti, account non verificato, superamento dei limiti giornalieri o mensili, o richiesta di pagamento su un metodo diverso da quello del deposito. Contatta il supporto per informazioni specifiche sul tuo caso.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>C'è una commissione sui prelievi?</summary>
        <div class="faq-answer">
          <p>Non c'è una commissione standard sui prelievi. Tuttavia, se non soddisfi il requisito di rollover 1x del deposito prima del prelievo, potrebbe essere applicata una commissione del 10%. Completa sempre il rollover minimo per evitare questa commissione.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso annullare un prelievo in sospeso?</summary>
        <div class="faq-answer">
          <p>A seconda della fase di elaborazione, potresti essere in grado di annullare una richiesta di prelievo in sospeso. Contatta il supporto clienti tramite live chat per assistenza con l'annullamento.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
