<?php
/**
 * Support Page - Italian
 */
$page_title = SITE_NAME . ' Assistenza Clienti - Live Chat, Email & Centro Assistenza';
$page_description = 'Contatta l\'assistenza clienti di ' . SITE_NAME . ' Casino tramite live chat 24/7 o email. Ricevi aiuto con depositi, prelievi, bonus, problemi dell\'account e domande tecniche.';
$current_page = 'support';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Assistenza Clienti';
$hero_description = 'Siamo qui per aiutarti con qualsiasi domanda sul tuo account, depositi, prelievi, bonus o problemi tecnici. Contattaci in qualsiasi momento.';
$hero_cta = 'Apri la Live Chat';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Contact Options -->
  <section class="content-section" id="contact">
    <div class="container">
      <h2>Come Contattarci</h2>
      <p><?php echo SITE_NAME; ?> offre due canali di supporto principali, entrambi disponibili 24 ore su 24. Che tu abbia una domanda rapida su una promozione o abbia bisogno di aiuto per risolvere un problema di pagamento, il team è pronto ad assisterti.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128172;</div>
          <h4>Live Chat</h4>
          <p>Il modo più veloce per ottenere aiuto. Clicca l'icona della chat su qualsiasi pagina del sito per avviare una conversazione con un agente di supporto. Il tempo medio di risposta è inferiore a 2 minuti durante gli orari regolari. Disponibile 24 ore al giorno, 7 giorni su 7.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9993;</div>
          <h4>Supporto Email</h4>
          <p>Per domande dettagliate o invio di documenti, l'email è l'opzione migliore. Invia la tua richiesta e aspettati una risposta entro 24 ore. Assicurati di includere i dettagli del tuo account e una descrizione chiara del problema.</p>
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
            <td>Live Chat</td>
            <td>24/7</td>
            <td>Meno di 2 minuti</td>
            <td>Domande rapide, aiuto bonus, problemi depositi</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>24/7</td>
            <td>Fino a 24 ore</td>
            <td>Caricamento documenti, casi dettagliati, reclami</td>
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
      <h2>In Cosa Può Aiutarti il Supporto?</h2>
      <p>Il team di assistenza clienti gestisce un'ampia gamma di argomenti. Ecco le aree più comuni in cui i giocatori richiedono assistenza:</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Account &amp; Registrazione</h4>
          <p>Aiuto con la creazione dell'account, aggiornamento delle informazioni personali, reset della password e risoluzione dei problemi di accesso. Se il tuo account è bloccato o limitato, il supporto può verificare il tuo stato.</p>
        </div>
        <div class="info-card">
          <h4>Depositi &amp; Pagamenti</h4>
          <p>Assistenza con depositi falliti, domande sui metodi di pagamento, opzioni valuta e controllo dello stato delle transazioni. Il supporto può anche aiutarti se un deposito non appare nel tuo saldo.</p>
        </div>
        <div class="info-card">
          <h4>Prelievi &amp; Pagamenti</h4>
          <p>Domande sui tempi di elaborazione dei prelievi, richieste in sospeso, pagamenti rifiutati e adeguamenti dei limiti. Per informazioni dettagliate sui prelievi, visita la <a href="<?php echo $lang_prefix; ?>/withdrawal">pagina Prelievi</a>.</p>
        </div>
        <div class="info-card">
          <h4>Bonus &amp; Promozioni</h4>
          <p>Chiarimenti sui termini dei bonus, requisiti di scommessa, attivazione delle offerte e annullamento dei bonus attivi. Il supporto può spiegare i dettagli specifici delle promozioni e le condizioni di idoneità.</p>
        </div>
        <div class="info-card">
          <h4>Verifica &amp; KYC</h4>
          <p>Guida sull'invio dei documenti, stato della verifica, tipi di documenti accettati e stime dei tempi. Puoi caricare i documenti nelle impostazioni del tuo account, ma il supporto può assisterti in caso di problemi.</p>
        </div>
        <div class="info-card">
          <h4>Problemi Tecnici</h4>
          <p>Aiuto con giochi che non si caricano, errori del sito, problemi di compatibilità mobile e problemi legati al browser. Il supporto può risolvere i problemi e segnalare bug tecnici al team di sviluppo.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Contacting Support -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Come Ottenere il Massimo dalla Tua Richiesta di Supporto</h2>
      <p>Alcuni semplici passaggi possono aiutare il team di supporto a risolvere il tuo problema più velocemente:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Tieni pronti i dettagli del tuo account.</strong> Il tuo indirizzo email o nome utente aiuta il supporto a localizzare rapidamente il tuo account. Se il problema riguarda una transazione specifica, tieni a portata di mano il numero di riferimento.
          </div>
        </li>
        <li>
          <div>
            <strong>Descrivi il problema chiaramente.</strong> Spiega cosa è successo, quando è successo e cosa ti aspettavi che succedesse. Gli screenshot sono utili per problemi tecnici o transazioni contestate.
          </div>
        </li>
        <li>
          <div>
            <strong>Usa il canale giusto.</strong> Per problemi urgenti (account bloccato, deposito fallito), la live chat è la scelta migliore. Per l'invio di documenti o casi complessi che richiedono indagini, l'email offre al team più margine di lavoro.
          </div>
        </li>
        <li>
          <div>
            <strong>Controlla prima le FAQ.</strong> Molte domande comuni su bonus, prelievi e gestione dell'account sono trattate nelle sezioni FAQ di questo sito. Un rapido controllo potrebbe risparmiarti l'attesa.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Responsible Gambling -->
  <section class="content-section content-section--alt" id="responsible">
    <div class="container container--narrow">
      <h2>Gioco Responsabile &amp; Autoesclusione</h2>
      <p><?php echo SITE_NAME; ?> prende il gioco responsabile molto seriamente. Se senti che le tue abitudini di gioco stanno diventando un problema, il team di supporto può aiutarti a impostare limiti di deposito, periodi di raffreddamento o organizzare un'autoesclusione dalla piattaforma.</p>
      <p>Le opzioni di autoesclusione vanno da pause temporanee alla chiusura permanente dell'account. Una volta attivata, l'autoesclusione non può essere revocata fino alla scadenza del periodo impostato. Contatta il supporto tramite live chat o email per discutere le opzioni disponibili.</p>
      <p>Per supporto esterno, puoi rivolgerti a organizzazioni come GamCare o Gamblers Anonymous per consulenza e supporto gratuiti e confidenziali.</p>
    </div>
  </section>

  <!-- Support FAQ -->
  <section class="content-section" id="support-faq">
    <div class="container container--narrow">
      <h2>FAQ Supporto</h2>

      <details class="faq-item">
        <summary>Il supporto di <?php echo SITE_NAME; ?> è disponibile in più lingue?</summary>
        <div class="faq-answer">
          <p>Il sito supporta polacco, inglese, finlandese, tedesco, ungherese, norvegese, italiano, spagnolo, ceco e portoghese. Gli agenti di supporto possono generalmente assistere in inglese e potrebbero essere in grado di aiutare in altre lingue elencate in base alla disponibilità.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quanto velocemente risponde la live chat?</summary>
        <div class="faq-answer">
          <p>In condizioni normali, le risposte della live chat arrivano entro 1-2 minuti. Durante le ore di punta o i periodi di alto traffico, i tempi di attesa possono essere leggermente più lunghi, ma il team lavora per mantenere i ritardi al minimo.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Il supporto può aiutarmi ad annullare un bonus?</summary>
        <div class="faq-answer">
          <p>Sì. Se vuoi annullare un bonus attivo, puoi farlo autonomamente dalla sezione Profilo del tuo account, oppure contattare il supporto tramite live chat o email. Tieni presente che annullare un bonus rimuove l'importo del bonus e tutte le vincite generate da esso.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>E se il mio problema non viene risolto?</summary>
        <div class="faq-answer">
          <p>Se non sei soddisfatto della risposta iniziale, chiedi che il tuo caso venga inoltrato a un agente senior o un supervisore. Per controversie irrisolte, puoi anche fare riferimento alle procedure di reclamo del casinò indicate nei Termini e Condizioni.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso richiedere limiti di deposito o di perdita?</summary>
        <div class="faq-answer">
          <p>Sì. Contatta il supporto per impostare limiti di deposito giornalieri, settimanali o mensili. Puoi anche richiedere limiti di perdita o promemoria sulla durata della sessione per aiutarti a gestire la tua attività di gioco.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
