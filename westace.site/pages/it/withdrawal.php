<?php
/**
 * Withdrawal Page - WestAce (Italian / IT)
 */
$page_title = 'WestAce Prelievi - Metodi di Prelievo, Limiti & Tempi di Elaborazione';
$page_description = 'Tutto sui prelievi di ' . SITE_NAME . ' Casino: metodi di pagamento, tempi di elaborazione, limiti giornalieri e mensili, verifica KYC e consigli per incassare più velocemente.';
$current_page = 'withdrawal';
$lang_prefix = '/it';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Prelievi &amp; Pagamenti';
$hero_description = 'Come incassare le tue vincite, quali metodi sono disponibili, tempi di elaborazione, limiti e cosa aspettarti durante il processo di verifica.';
$hero_cta = 'Gioca Ora';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Panoramica Prelievi</h2>
      <p>Incassare le vincite su <?php echo SITE_NAME; ?> è semplice e senza commissioni. Elaboriamo tutte le richieste di prelievo entro 24-72 ore a seconda del metodo di pagamento. I fondi vengono restituiti allo stesso metodo utilizzato per il deposito quando possibile. La verifica KYC deve essere completata prima del primo prelievo.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Prelievo Minimo</h4>
          <p>10 &euro; per tutti i metodi di pagamento. Gli importi inferiori a questa soglia non possono essere elaborati.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Tempi di Elaborazione</h4>
          <p>24-72 ore per la maggior parte dei metodi. I bonifici bancari possono richiedere 1-3 giorni lavorativi.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Limiti di Prelievo</h4>
          <p>500 &euro; al giorno, 7.000 &euro; al mese. I membri VIP possono accedere a limiti più elevati.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Payment Methods Table -->
  <section class="content-section content-section--alt" id="methods">
    <div class="container">
      <h2>Metodi di Pagamento</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>La tabella seguente mostra tutte le opzioni di deposito e prelievo su <?php echo SITE_NAME; ?>. Elaboriamo i pagamenti sul metodo di deposito originale quando possibile. Tutti i depositi e prelievi sono senza commissioni da parte nostra.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-payments-screen.png" alt="Metodi di deposito e prelievo <?php echo SITE_NAME; ?> Casino inclusi Visa, Mastercard, Revolut, Skrill e criptovalute" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div class="data-table-wrap">
        <table class="data-table">
          <thead>
            <tr>
              <th>Metodo</th>
              <th>Deposito Min</th>
              <th>Deposito Max</th>
              <th>Prelievo Min</th>
              <th>Prelievo Max</th>
              <th>Elaborazione</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Mastercard</td>
              <td>10 &euro;</td>
              <td>2.000 &euro;</td>
              <td>10 &euro;</td>
              <td>3.000 &euro;</td>
              <td>24-72 ore</td>
            </tr>
            <tr>
              <td>Paysafecard</td>
              <td>10 &euro;</td>
              <td>1.000 &euro;</td>
              <td colspan="2">Solo deposito</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Visa</td>
              <td colspan="2">Solo prelievo</td>
              <td>10 &euro;</td>
              <td>3.000 &euro;</td>
              <td>24-72 ore</td>
            </tr>
            <tr>
              <td>Bonifico Bancario</td>
              <td colspan="2">Solo prelievo</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>1-3 giorni lavorativi</td>
            </tr>
            <tr>
              <td>Skrill</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 ore</td>
            </tr>
            <tr>
              <td>Neteller</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td colspan="2">Solo deposito</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Bitcoin (BTC)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 ore</td>
            </tr>
            <tr>
              <td>Ethereum (ETH)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 ore</td>
            </tr>
            <tr>
              <td>Tether (USDT)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 ore</td>
            </tr>
            <tr>
              <td>Litecoin (LTC)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 ore</td>
            </tr>
            <tr>
              <td>Ripple (XRP)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 ore</td>
            </tr>
            <tr>
              <td>USD Coin (USDC)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 ore</td>
            </tr>
            <tr>
              <td>Bitcoin Cash (BCH)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 ore</td>
            </tr>
            <tr>
              <td>Dogecoin (DOGE)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 ore</td>
            </tr>
            <tr>
              <td>Cardano (ADA)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 ore</td>
            </tr>
          </tbody>
        </table>
      </div>

      <p style="margin-top: var(--space-4);">La gamma esatta dei metodi di pagamento può variare a seconda della tua regione. Le transazioni in criptovaluta richiedono conferme sulla blockchain dopo l'elaborazione da parte del casino.</p>
    </div>
  </section>

  <!-- Rollover Requirement -->
  <section class="content-section" id="rollover">
    <div class="container container--narrow">
      <h2>Requisito di Rollover sul Deposito</h2>
      <p><?php echo SITE_NAME; ?> applica un requisito di rollover 1x su tutti i depositi. Questo significa che devi scommettere i fondi depositati almeno una volta prima di richiedere un prelievo. Questo requisito è separato da qualsiasi requisito di scommessa legato ai bonus.</p>
      <p>Se richiedi un prelievo senza soddisfare il rollover 1x, verrà applicata una commissione:</p>
      <ul>
        <li><strong>Commissione del 10%</strong> sull'importo del deposito per prelievi tramite e-wallet e criptovalute</li>
        <li><strong>Commissione del 15%</strong> sull'importo del deposito per prelievi tramite carta bancaria e bonifico bancario</li>
      </ul>
      <p>Per evitare questa commissione, gioca semplicemente il tuo deposito una volta prima di richiedere un pagamento. Un singolo giro di scommesse di qualsiasi importo è sufficiente per soddisfare il requisito.</p>
    </div>
  </section>

  <!-- How to Withdraw -->
  <section class="content-section content-section--alt" id="how-to">
    <div class="container">
      <h2>Come Effettuare un Prelievo</h2>
      <p>Segui questi passaggi per richiedere un pagamento dal tuo account <?php echo SITE_NAME; ?>:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Completa tutti i requisiti di scommessa attivi.</strong> Se hai riscattato un bonus, l'intero requisito di scommessa deve essere completato prima di poter prelevare. Assicurati anche di aver soddisfatto il rollover 1x sul deposito.
          </div>
        </li>
        <li>
          <div>
            <strong>Apri la cassa.</strong> Vai alla sezione prelievi nel tuo account. La troverai nel menu principale o nell'area delle impostazioni dell'account.
          </div>
        </li>
        <li>
          <div>
            <strong>Seleziona il metodo di pagamento e l'importo.</strong> Scegli tra le opzioni disponibili e inserisci l'importo che desideri prelevare. Il minimo è 10 &euro; per tutti i metodi. Il limite giornaliero è di 500 &euro;, il limite mensile è di 7.000 &euro;.
          </div>
        </li>
        <li>
          <div>
            <strong>Attendi l'elaborazione.</strong> <?php echo SITE_NAME; ?> elabora i prelievi entro 24-72 ore. I bonifici bancari possono richiedere 1-3 giorni lavorativi. Verrai contattato se sono necessari documenti aggiuntivi per la verifica.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- KYC Verification -->
  <section class="content-section" id="verification">
    <div class="container">
      <h2>Verifica dell'Account (KYC)</h2>
      <p><?php echo SITE_NAME; ?> richiede la verifica dell'identità prima di approvare le richieste di prelievo. Si tratta di una procedura standard progettata per prevenire le frodi e rispettare le normative antiriciclaggio. I documenti vengono approvati entro 30 giorni e il processo di verifica richiede fino a 10 giorni dalla presentazione.</p>

      <div class="two-col">
        <div>
          <h3>Documenti Richiesti</h3>
          <ul>
            <li><strong>Documento d'identità</strong> -- passaporto, patente di guida o carta d'identità nazionale</li>
            <li><strong>Selfie con documento</strong> -- una foto in cui tieni in mano il documento d'identità</li>
            <li><strong>Prova di residenza</strong> -- bolletta di un'utenza o estratto conto bancario emesso negli ultimi 3 mesi</li>
            <li><strong>Provenienza dei fondi</strong> -- documentazione che dimostri la provenienza dei fondi destinati al gioco (requisito antiriciclaggio)</li>
          </ul>
          <p>Hai 30 giorni per presentare i documenti richiesti. Il tuo account potrebbe essere limitato fino al completamento della verifica.</p>
        </div>
        <div>
          <h3>Consigli per una Verifica Più Rapida</h3>
          <ul>
            <li>Carica i tuoi documenti non appena ti registri, senza aspettare il primo prelievo</li>
            <li>Assicurati che tutti e quattro gli angoli del documento siano visibili nella foto</li>
            <li>Per il selfie, verifica che sia il tuo volto che il testo del documento siano chiaramente leggibili</li>
            <li>Utilizza una bolletta o un estratto conto recente come prova di residenza</li>
            <li>Se i documenti vengono rifiutati, controlla che le immagini non siano sfocate e che i documenti non siano scaduti</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Faster Payouts -->
  <section class="content-section content-section--alt" id="tips">
    <div class="container container--narrow">
      <h2>Consigli per Pagamenti Più Veloci</h2>

      <h3>1. Scegli e-wallet o criptovalute</h3>
      <p>Skrill e le opzioni crypto come Bitcoin, Ethereum e Tether vengono generalmente elaborate più rapidamente. Se la velocità è la tua priorità, deposita con uno di questi metodi in modo che il prelievo possa essere restituito attraverso lo stesso canale.</p>

      <h3>2. Verifica il tuo account in anticipo</h3>
      <p>Non aspettare il primo prelievo per inviare i tuoi documenti. Carica il tuo documento d'identità, il selfie, la prova di residenza e la provenienza dei fondi non appena ti registri. In questo modo, quando sarai pronto per incassare, non ci saranno ritardi dovuti a verifiche in sospeso.</p>

      <h3>3. Soddisfa il rollover del deposito</h3>
      <p>Assicurati di aver scommesso il tuo deposito almeno una volta prima di richiedere un pagamento. In caso contrario, verrà applicata una commissione del 10-15% sull'importo del deposito.</p>

      <h3>4. Usa il metodo di deposito originale</h3>
      <p><?php echo SITE_NAME; ?> preferisce restituire i fondi sullo stesso metodo utilizzato per il deposito. L'utilizzo di un metodo diverso può attivare controlli aggiuntivi e rallentare il processo.</p>
    </div>
  </section>

  <!-- Fees -->
  <section class="content-section" id="fees">
    <div class="container container--narrow">
      <h2>Commissioni sui Prelievi</h2>
      <p><?php echo SITE_NAME; ?> non applica commissioni su depositi o prelievi. Tuttavia, il tuo fornitore di servizi di pagamento o la tua banca potrebbero applicare le proprie commissioni di transazione, costi di conversione valutaria o costi di intermediazione. Verifica con il tuo fornitore di servizi di pagamento per dettagli su eventuali commissioni di terze parti applicabili.</p>
      <p>Nota: se prelevi senza soddisfare il requisito di rollover 1x sul deposito, verrà addebitata una commissione del 10% (15% per carta bancaria/bonifico) sull'importo del deposito. Questa non è una commissione sul prelievo, ma una penale per il mancato rollover.</p>
    </div>
  </section>

  <!-- Withdrawal FAQ -->
  <section class="content-section content-section--alt" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>FAQ Prelievi</h2>

      <details class="faq-item">
        <summary>Quanto tempo richiede un prelievo su <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>La maggior parte dei prelievi viene elaborata entro 24-72 ore. Gli e-wallet e le criptovalute tendono ad arrivare più velocemente. I bonifici bancari possono richiedere ulteriori 1-3 giorni lavorativi da parte del fornitore.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Qual è il prelievo minimo su <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>L'importo minimo di prelievo è di 10 &euro; per tutti i metodi di pagamento.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quali sono i limiti di prelievo?</summary>
        <div class="faq-answer">
          <p>I limiti standard sono di 500 &euro; al giorno e 7.000 &euro; al mese. I limiti per singola transazione dipendono dal metodo: Visa e Mastercard hanno un tetto di 3.000 &euro; per transazione, mentre Skrill, bonifici bancari e tutte le criptovalute consentono fino a 5.000 &euro;. I giocatori VIP possono accedere a limiti più elevati.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Perché il mio prelievo è stato rifiutato?</summary>
        <div class="faq-answer">
          <p>I motivi più comuni includono: requisiti di scommessa incompleti, rollover del deposito non soddisfatto, account non verificato, superamento dei limiti giornalieri o mensili, oppure richiesta di pagamento su un metodo diverso da quello del deposito. Contatta l'assistenza per informazioni specifiche sul tuo caso.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Ci sono commissioni sui prelievi?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> non addebita commissioni sui prelievi. Il tuo fornitore di servizi di pagamento potrebbe applicare le proprie commissioni. Se prelevi senza soddisfare il rollover 1x sul deposito, viene applicata una commissione del 10% (15% per carta bancaria/bonifico) sull'importo del deposito.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso annullare un prelievo in sospeso?</summary>
        <div class="faq-answer">
          <p>A seconda della fase di elaborazione, potresti essere in grado di annullare una richiesta di prelievo in sospeso. Contatta l'assistenza clienti tramite la chat dal vivo per ricevere aiuto.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
