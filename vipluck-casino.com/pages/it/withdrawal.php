<?php
/**
 * Withdrawal Page – Italian
 */
$page_title = SITE_NAME . ' Prelievi - Metodi di Pagamento, Limiti e Tempi di Elaborazione';
$page_description = 'Tutto sui prelievi di ' . SITE_NAME . ' Casino: metodi di pagamento, elaborazione fino a 7 giorni lavorativi, limiti giornalieri e mensili, verifica KYC e consigli per prelievi pi&ugrave; veloci.';
$current_page = 'withdrawal';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Prelievi &amp; Pagamenti';
$hero_description = 'Come prelevare le tue vincite, quali metodi sono disponibili, tempi di elaborazione, limiti e cosa aspettarsi durante il processo di verifica.';
$hero_cta = 'Inizia a giocare';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Panoramica prelievi</h2>
      <p>Prelevare le tue vincite su <?php echo SITE_NAME; ?> &egrave; un processo semplice una volta comprese le regole. Il casin&ograve; mira a elaborare le richieste di prelievo entro 72 ore nei giorni lavorativi. Nota che <?php echo SITE_NAME; ?> non elabora prelievi nei weekend, quindi le richieste inviate dal venerd&igrave; sera alla domenica inizieranno a essere elaborate il luned&igrave; successivo.</p>
      <p>Quando possibile, i fondi vengono restituiti allo stesso metodo utilizzato per il deposito. Se quel metodo non supporta le transazioni in entrata, l'importo verr&agrave; trasferito sul tuo conto bancario. Prima del primo prelievo, devi completare la verifica KYC e soddisfare il requisito minimo di rollover sul deposito.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Prelievo min.</h4>
          <p>&euro;20 per tutti i metodi di pagamento. Gli importi inferiori a questa soglia non possono essere elaborati.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Limite giornaliero</h4>
          <p>&euro;700 per gli account standard. I membri VIP possono prelevare fino a &euro;1.500 al giorno.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Limite mensile</h4>
          <p>&euro;9.000 per i giocatori standard. I membri VIP hanno limiti settimanali di &euro;7.000 e mensili di &euro;28.000.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Payment Methods Table -->
  <section class="content-section content-section--alt" id="methods">
    <div class="container">
      <h2>Metodi di pagamento</h2>
      <div class="two-col" style="align-items:flex-start;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p style="margin-top:0">I metodi disponibili per il prelievo dipendono dal tuo paese e da come hai depositato. In generale, <?php echo SITE_NAME; ?> elabora i pagamenti verso il metodo di deposito originale quando possibile.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-payments.png" alt="<?php echo SITE_NAME; ?> Casino payment methods including Jeton, MiFinity, eZeeWallet, Bitcoin, Ethereum, Tether, Ripple and more" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>

      <table class="data-table">
        <thead>
          <tr>
            <th>Metodo</th>
            <th>Prelievo min.</th>
            <th>Tempi di elaborazione</th>
            <th>Note</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Visa / Mastercard</td>
            <td>&euro;20</td>
            <td>1-5 giorni lavorativi</td>
            <td>Restituito alla carta usata per il deposito</td>
          </tr>
          <tr>
            <td>Skrill</td>
            <td>&euro;20</td>
            <td>Fino a 24 ore</td>
            <td>Elaborazione rapida, ampiamente disponibile</td>
          </tr>
          <tr>
            <td>Neteller</td>
            <td>&euro;20</td>
            <td>Fino a 24 ore</td>
            <td>Disponibile nella maggior parte delle regioni</td>
          </tr>
          <tr>
            <td>Jeton</td>
            <td>&euro;20</td>
            <td>Fino a 24 ore</td>
            <td>Portafoglio elettronico con ampia copertura</td>
          </tr>
          <tr>
            <td>MiFinity</td>
            <td>&euro;20</td>
            <td>Fino a 24 ore</td>
            <td>Portafoglio digitale per pagamenti rapidi</td>
          </tr>
          <tr>
            <td>eZeeWallet</td>
            <td>&euro;20</td>
            <td>Fino a 24 ore</td>
            <td>Verifica la disponibilit&agrave; per la tua regione</td>
          </tr>
          <tr>
            <td>Bonifico bancario</td>
            <td>&euro;20</td>
            <td>3-7 giorni lavorativi</td>
            <td>Alternativa quando il metodo originale non &egrave; disponibile</td>
          </tr>
          <tr>
            <td>Bitcoin</td>
            <td>&euro;20</td>
            <td>Fino a 24 ore</td>
            <td>Richiede conferme blockchain dopo l'elaborazione del casin&ograve;</td>
          </tr>
          <tr>
            <td>Ethereum</td>
            <td>&euro;20</td>
            <td>Fino a 24 ore</td>
            <td>Tra le opzioni di pagamento pi&ugrave; veloci</td>
          </tr>
          <tr>
            <td>Tether (USDT)</td>
            <td>&euro;20</td>
            <td>Fino a 24 ore</td>
            <td>Stablecoin per minime fluttuazioni di prezzo</td>
          </tr>
          <tr>
            <td>Ripple (XRP)</td>
            <td>&euro;20</td>
            <td>Fino a 24 ore</td>
            <td>Regolamento blockchain rapido</td>
          </tr>
          <tr>
            <td>USD Coin (USDC)</td>
            <td>&euro;20</td>
            <td>Fino a 24 ore</td>
            <td>Alternativa stablecoin a USDT</td>
          </tr>
          <tr>
            <td>Cardano (ADA)</td>
            <td>&euro;20</td>
            <td>Fino a 24 ore</td>
            <td>Verifica la disponibilit&agrave; nella tua regione</td>
          </tr>
          <tr>
            <td>Dogecoin</td>
            <td>&euro;20</td>
            <td>Fino a 24 ore</td>
            <td>Prelievi crypto a basse commissioni</td>
          </tr>
          <tr>
            <td>Litecoin</td>
            <td>&euro;20</td>
            <td>Fino a 24 ore</td>
            <td>Tempi di blocco pi&ugrave; rapidi rispetto a Bitcoin</td>
          </tr>
          <tr>
            <td>Bitcoin Cash</td>
            <td>&euro;20</td>
            <td>Fino a 24 ore</td>
            <td>Commissioni pi&ugrave; basse rispetto a Bitcoin standard</td>
          </tr>
          <tr>
            <td>Solana (SOL)</td>
            <td>&euro;20</td>
            <td>Fino a 24 ore</td>
            <td>Blockchain ad alta velocit&agrave; con commissioni molto basse</td>
          </tr>
        </tbody>
      </table>

      <p>Valute accettate per le transazioni: EUR, CHF, USD, CAD, AUD, NZD, PLN, BRL, NOK, ZAR, CZK, HUF e CLP.</p>
    </div>
  </section>

  <!-- How to Withdraw -->
  <section class="content-section" id="how-to">
    <div class="container">
      <h2>Come effettuare un prelievo</h2>
      <p>Segui questi passaggi per richiedere un pagamento dal tuo account <?php echo SITE_NAME; ?>:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Completa il requisito di rollover.</strong> Prima del primo prelievo, il tuo deposito deve essere scommesso almeno 1x. Se hai richiesto un bonus, completa prima l'intero requisito di puntata. Non farlo potrebbe comportare una commissione sul prelievo.
          </div>
        </li>
        <li>
          <div>
            <strong>Apri la cassa.</strong> Vai alla sezione prelievi del tuo account. La trovi nel menu principale o nell'area impostazioni dell'account.
          </div>
        </li>
        <li>
          <div>
            <strong>Seleziona il metodo di pagamento e l'importo.</strong> Scegli tra le opzioni disponibili e inserisci l'importo che desideri prelevare. Assicurati che rientri nei limiti consentiti.
          </div>
        </li>
        <li>
          <div>
            <strong>Attendi l'elaborazione.</strong> <?php echo SITE_NAME; ?> elabora i prelievi solo nei giorni lavorativi (da luned&igrave; a venerd&igrave;). L'elaborazione standard richiede fino a 72 ore. Le richieste inviate nel weekend iniziano a essere elaborate il luned&igrave;. Verrai contattato se sono necessari documenti aggiuntivi.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- KYC Verification -->
  <section class="content-section content-section--alt" id="verification">
    <div class="container">
      <h2>Verifica dell'account (KYC)</h2>
      <p><?php echo SITE_NAME; ?> richiede la verifica dell'identit&agrave; prima di approvare le richieste di prelievo. Si tratta di una procedura standard nel settore, progettata per prevenire le frodi e rispettare le normative antiriciclaggio.</p>

      <div class="two-col">
        <div>
          <h3>Documenti richiesti</h3>
          <ul>
            <li>Un documento d'identit&agrave; rilasciato dal governo (passaporto, patente di guida o carta d'identit&agrave; nazionale)</li>
            <li>Prova di residenza (bolletta o estratto conto bancario, datato non oltre 3 mesi)</li>
            <li>Verifica del metodo di pagamento (foto della carta di credito/debito, screenshot del portafoglio elettronico o conferma del wallet crypto)</li>
          </ul>
          <p>Hai 30 giorni dalla richiesta iniziale dei documenti per inviarli. Se non li fornisci entro questo periodo, il tuo account potrebbe essere chiuso.</p>
        </div>
        <div>
          <h3>Tempistiche della verifica</h3>
          <p>Il tempo di elaborazione standard per la revisione dei documenti &egrave; fino a 10 giorni lavorativi, anche se in casi eccezionali potrebbe essere necessario pi&ugrave; tempo. Il casin&ograve; potrebbe utilizzare servizi di verifica di terze parti o richiedere controlli aggiuntivi come una videochiamata o una verifica telefonica.</p>
          <p>Puoi caricare i documenti nella sezione "Impostazioni - Verifica account" del tuo profilo. Scatta foto chiare e ben illuminate per evitare ritardi causati da documenti illeggibili.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Large Wins -->
  <section class="content-section" id="large-wins">
    <div class="container container--narrow">
      <h2>Grandi vincite &amp; Elaborazione estesa</h2>
      <div class="highlight-box">
        <h4>Prelievi superiori a &euro;5.000</h4>
        <p>Le vincite superiori a &euro;5.000 possono richiedere una revisione aggiuntiva e tempi di elaborazione pi&ugrave; lunghi rispetto allo standard. Il casin&ograve; si riserva il diritto di suddividere i pagamenti importanti in pi&ugrave; rate in base ai limiti giornalieri e settimanali applicabili. I membri VIP con limiti pi&ugrave; alti possono ricevere un'elaborazione pi&ugrave; rapida per importi elevati.</p>
      </div>
      <p>Se il tuo prelievo supera &euro;5.000, il team di <?php echo SITE_NAME; ?> potrebbe richiedere documenti di verifica aggiuntivi o condurre una revisione approfondita. Si tratta di una pratica standard per le transazioni di grandi dimensioni, progettata per proteggere sia il giocatore che il casin&ograve;.</p>
    </div>
  </section>

  <!-- Tips for Faster Payouts -->
  <section class="content-section content-section--alt" id="tips">
    <div class="container container--narrow">
      <h2>Consigli per pagamenti pi&ugrave; veloci</h2>

      <h3>1. Scegli portafogli elettronici o criptovalute</h3>
      <p>Skrill, Neteller, Jeton, MiFinity e le opzioni crypto come Bitcoin, Ethereum o Solana vengono generalmente elaborate pi&ugrave; velocemente rispetto alle carte o ai bonifici bancari. Con 10 criptovalute diverse supportate, <?php echo SITE_NAME; ?> offre una delle selezioni di pagamento crypto pi&ugrave; ampie disponibili. Se la velocit&agrave; &egrave; la tua priorit&agrave;, deposita con uno di questi metodi cos&igrave; il prelievo pu&ograve; essere restituito attraverso lo stesso canale.</p>

      <h3>2. Verifica il tuo account in anticipo</h3>
      <p>Non aspettare il primo prelievo per inviare i tuoi documenti. Carica il tuo documento d'identit&agrave;, la prova di residenza e la verifica del metodo di pagamento non appena ti registri. In questo modo, quando sarai pronto per prelevare, non ci saranno ritardi per la verifica in sospeso.</p>

      <h3>3. Completa i requisiti di puntata prima della richiesta</h3>
      <p>Se hai un bonus attivo, assicurati che ogni requisito di puntata sia completamente soddisfatto. Richiedere un prelievo mentre un bonus &egrave; ancora attivo annuller&agrave; il bonus e le vincite correlate. Se hai giocato solo con fondi depositati, ricorda il rollover di 1x che deve essere completato per evitare commissioni aggiuntive.</p>

      <h3>4. Resta entro i limiti</h3>
      <p>Le richieste di prelievo che superano il tetto giornaliero o mensile verranno rifiutate. Pianifica i tuoi prelievi di conseguenza: &euro;700 al giorno per gli account standard, &euro;1.500 al giorno per i membri VIP. I limiti settimanali sono &euro;2.250 (standard) e &euro;7.000 (VIP).</p>

      <h3>5. Invia le richieste nei giorni lavorativi</h3>
      <p><?php echo SITE_NAME; ?> non elabora prelievi nei weekend. Inviare la richiesta all'inizio della settimana d&agrave; al team il massimo tempo per elaborarla prima del weekend. Le richieste fatte il venerd&igrave; sera o nel weekend non inizieranno a essere elaborate fino a luned&igrave;.</p>

      <h3>6. Usa il metodo di deposito originale</h3>
      <p><?php echo SITE_NAME; ?> preferisce restituire i fondi allo stesso metodo utilizzato per il deposito. Usare un metodo diverso potrebbe attivare controlli aggiuntivi e rallentare il processo.</p>
    </div>
  </section>

  <!-- Fees -->
  <section class="content-section" id="fees">
    <div class="container container--narrow">
      <h2>Commissioni di prelievo</h2>
      <p><?php echo SITE_NAME; ?> non applica commissioni sui prelievi. Tuttavia, il tuo fornitore di pagamento o la tua banca potrebbero applicare le proprie commissioni sulle transazioni, costi di conversione valutaria o spese intermediarie. Verifica con il tuo fornitore di pagamento per dettagli su eventuali commissioni di terze parti che potrebbero applicarsi ai trasferimenti in entrata.</p>
      <p>Se non soddisfi il requisito di rollover di 1x sul deposito prima del prelievo, potrebbe essere applicata una commissione di elaborazione. Completa sempre il rollover minimo per evitare questo addebito.</p>
    </div>
  </section>

  <!-- Withdrawal FAQ -->
  <section class="content-section content-section--alt" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>FAQ prelievi</h2>

      <details class="faq-item">
        <summary>Quanto tempo richiede un prelievo su <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>I prelievi vengono elaborati entro 72 ore nei giorni lavorativi. <?php echo SITE_NAME; ?> non elabora prelievi nei weekend, quindi nel caso peggiore un pagamento potrebbe richiedere fino a 7 giorni lavorativi dall'invio alla ricezione. I portafogli elettronici e le criptovalute tendono a essere i pi&ugrave; veloci, spesso completandosi entro 24 ore dall'elaborazione del casin&ograve;. Bonifici bancari e pagamenti con carta possono richiedere da 1 a 5 giorni lavorativi aggiuntivi da parte del fornitore.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Qual &egrave; il prelievo minimo su <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>L'importo minimo di prelievo &egrave; di &euro;20 per tutti i metodi di pagamento. Importi inferiori non possono essere richiesti.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quanto posso prelevare al massimo al mese?</summary>
        <div class="faq-answer">
          <p>I giocatori standard possono prelevare fino a &euro;9.000 al mese (&euro;700 giornalieri, &euro;2.250 settimanali). I membri VIP hanno accesso a limiti pi&ugrave; alti: &euro;1.500 giornalieri, &euro;7.000 settimanali e &euro;28.000 mensili.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary><?php echo SITE_NAME; ?> elabora prelievi nei weekend?</summary>
        <div class="faq-answer">
          <p>No. L'elaborazione dei prelievi avviene solo nei giorni lavorativi (da luned&igrave; a venerd&igrave;). Le richieste inviate nei weekend inizieranno a essere elaborate il luned&igrave; successivo.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Perch&eacute; il mio prelievo &egrave; stato rifiutato?</summary>
        <div class="faq-answer">
          <p>I motivi pi&ugrave; comuni includono: requisiti di puntata non completati, account non verificato, superamento dei limiti giornalieri, settimanali o mensili, o richiesta di pagamento verso un metodo che non corrisponde al deposito. Contatta l'assistenza per informazioni specifiche sul tuo caso.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Ci sono commissioni sui prelievi?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> non applica commissioni sui prelievi. Il tuo fornitore di pagamento potrebbe applicare le proprie commissioni per la ricezione dei fondi. Se non hai soddisfatto il rollover di 1x sul deposito prima di richiedere un prelievo, potrebbe essere applicata una commissione di elaborazione.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Cosa succede con le grandi vincite superiori a &euro;5.000?</summary>
        <div class="faq-answer">
          <p>I prelievi superiori a &euro;5.000 possono richiedere una verifica aggiuntiva e tempi di elaborazione pi&ugrave; lunghi. Il casin&ograve; potrebbe suddividere i pagamenti importanti in rate in base ai limiti giornalieri e settimanali. I membri VIP ricevono generalmente un'elaborazione pi&ugrave; rapida per importi elevati.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso annullare un prelievo in sospeso?</summary>
        <div class="faq-answer">
          <p>A seconda della fase di elaborazione, potresti essere in grado di annullare una richiesta di prelievo in sospeso. Contatta l'assistenza clienti tramite live chat per ricevere aiuto con l'annullamento.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>