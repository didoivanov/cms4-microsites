<?php
/**
 * Support Page – Italian
 */
$page_title = SITE_NAME . ' Assistenza Clienti - Live Chat, Email, Telegram e Centro Aiuto';
$page_description = 'Contatta l\'assistenza clienti di ' . SITE_NAME . ' Casino tramite live chat 24/7, email a support@vipluck.com o Telegram. Ricevi aiuto per depositi, prelievi, bonus, problemi dell\'account e domande tecniche.';
$current_page = 'support';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = 'Assistenza clienti ' . SITE_NAME;
$hero_description = 'Siamo qui per aiutarti con qualsiasi domanda sul tuo account, depositi, prelievi, bonus o problemi tecnici. Contattaci in qualsiasi momento.';
$hero_cta = 'Apri la live chat';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Contact Options -->
  <section class="content-section" id="contact">
    <div class="container">
      <h2>Come contattarci</h2>
      <p><?php echo SITE_NAME; ?> offre tre canali di assistenza per assicurarti di poter sempre ricevere aiuto quando ne hai bisogno. Che tu abbia una domanda veloce su una promozione, necessiti di aiuto per risolvere un problema di pagamento o preferisca comunicare tramite un'app di messaggistica, il team &egrave; pronto ad assisterti.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128172;</div>
          <h4>Live Chat</h4>
          <p>Il modo pi&ugrave; veloce per ricevere aiuto. Clicca sull'icona della chat su qualsiasi pagina del sito per avviare una conversazione con un agente dell'assistenza. Il tempo medio di risposta &egrave; inferiore a 2 minuti durante gli orari normali. Disponibile 24 ore su 24, 7 giorni su 7.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9993;</div>
          <h4>Assistenza email</h4>
          <p>Per domande dettagliate o invio di documenti, l'email &egrave; l'opzione migliore. Invia la tua richiesta a <strong>support@vipluck.com</strong> e riceverai una risposta entro 24 ore. Assicurati di includere i dettagli del tuo account e una descrizione chiara del problema.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9992;</div>
          <h4>Telegram</h4>
          <p><?php echo SITE_NAME; ?> gestisce un canale Telegram ufficiale per assistenza e comunicazioni. Puoi contattare il team per domande rapide, aggiornamenti sulle promozioni e assistenza generale. Cerca il link Telegram sul sito del casin&ograve;.</p>
        </div>
      </div>

      <table class="data-table" style="margin-top: var(--space-8);">
        <thead>
          <tr>
            <th>Canale</th>
            <th>Disponibilit&agrave;</th>
            <th>Tempo di risposta</th>
            <th>Ideale per</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Live Chat</td>
            <td>24/7</td>
            <td>Meno di 2 minuti</td>
            <td>Domande rapide, aiuto bonus, problemi con depositi</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>24/7</td>
            <td>Fino a 24 ore</td>
            <td>Caricamento documenti, casi dettagliati, reclami</td>
          </tr>
          <tr>
            <td>Telegram</td>
            <td>24/7</td>
            <td>Variabile</td>
            <td>Domande rapide, promozioni, comunicazioni</td>
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
      <h2>Per cosa pu&ograve; aiutarti l'assistenza?</h2>
      <p>Il team di assistenza clienti gestisce una vasta gamma di argomenti. Ecco le aree pi&ugrave; comuni in cui i giocatori chiedono aiuto:</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Account &amp; Registrazione</h4>
          <p>Aiuto per la creazione dell'account, aggiornamento dei dati personali, reimpostazione della password, recupero del nome utente e risoluzione dei problemi di accesso. Se il tuo account &egrave; bloccato o limitato, l'assistenza pu&ograve; verificare il tuo stato.</p>
        </div>
        <div class="info-card">
          <h4>Depositi &amp; Pagamenti</h4>
          <p>Assistenza per depositi falliti, domande sui metodi di pagamento, opzioni valutarie e controllo dello stato delle transazioni. L'assistenza pu&ograve; anche aiutarti se un deposito non compare nel tuo saldo.</p>
        </div>
        <div class="info-card">
          <h4>Prelievi &amp; Pagamenti</h4>
          <p>Domande sui tempi di elaborazione dei prelievi, richieste in sospeso, pagamenti rifiutati e adeguamenti dei limiti. Nota che <?php echo SITE_NAME; ?> non elabora prelievi nei weekend. Per informazioni dettagliate sui prelievi, visita la <a href="/it/withdrawal">pagina Prelievi</a>.</p>
        </div>
        <div class="info-card">
          <h4>Bonus &amp; Promozioni</h4>
          <p>Chiarimenti sui termini dei bonus, requisiti di puntata, attivazione delle offerte e annullamento dei bonus attivi. L'assistenza pu&ograve; spiegare i dettagli specifici delle promozioni e le condizioni di idoneit&agrave;.</p>
        </div>
        <div class="info-card">
          <h4>Verifica &amp; KYC</h4>
          <p>Guida sull'invio dei documenti, stato della verifica, tipi di documenti accettati e stime dei tempi. Puoi caricare i documenti nelle impostazioni del tuo account, ma l'assistenza pu&ograve; aiutarti in caso di problemi.</p>
        </div>
        <div class="info-card">
          <h4>Problemi tecnici</h4>
          <p>Aiuto con giochi che non si caricano, errori del sito, problemi di compatibilit&agrave; mobile e problemi legati al browser. L'assistenza pu&ograve; risolvere i problemi ed escalare i bug tecnici al team di sviluppo.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Site Languages -->
  <section class="content-section" id="languages">
    <div class="container container--narrow">
      <h2>Lingue supportate</h2>
      <p>Il sito di <?php echo SITE_NAME; ?> &egrave; disponibile in 13 lingue per servire i giocatori di diverse regioni:</p>
      <div class="info-grid">
        <div class="info-card">
          <h4>Lingue europee</h4>
          <ul>
            <li>English</li>
            <li>Deutsch (Tedesco)</li>
            <li>Norsk (Norvegese)</li>
            <li>Fran&ccedil;ais (Francese)</li>
            <li>Italiano</li>
            <li>Espa&ntilde;ol (Spagnolo)</li>
            <li>Portugu&ecirc;s (Portoghese)</li>
            <li>Suomi (Finlandese)</li>
            <li>&Ccaron;e&scaron;tina (Ceco)</li>
          </ul>
        </div>
        <div class="info-card">
          <h4>Altre lingue</h4>
          <ul>
            <li>&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940; (Greco)</li>
            <li>&#1575;&#1604;&#1593;&#1585;&#1576;&#1610;&#1577; (Arabo)</li>
            <li>Polski (Polacco)</li>
            <li>Magyar (Ungherese)</li>
          </ul>
        </div>
      </div>
      <p>Gli agenti dell'assistenza possono generalmente assistere in inglese e potrebbero essere in grado di aiutare nelle altre lingue elencate in base alla disponibilit&agrave;.</p>
    </div>
  </section>

  <!-- Tips for Contacting Support -->
  <section class="content-section content-section--alt" id="tips">
    <div class="container container--narrow">
      <h2>Come ottenere il massimo dalla tua richiesta di assistenza</h2>
      <p>Alcuni semplici passaggi possono aiutare il team di assistenza a risolvere il tuo problema pi&ugrave; velocemente:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Tieni pronti i dettagli del tuo account.</strong> Il tuo nome utente o indirizzo email aiuta l'assistenza a trovare il tuo account rapidamente. Se il problema riguarda una transazione specifica, tieni a portata di mano il numero di riferimento.
          </div>
        </li>
        <li>
          <div>
            <strong>Descrivi il problema con chiarezza.</strong> Spiega cosa &egrave; successo, quando &egrave; successo e cosa ti aspettavi che accadesse. Gli screenshot sono utili per problemi tecnici o transazioni contestate.
          </div>
        </li>
        <li>
          <div>
            <strong>Usa il canale giusto.</strong> Per problemi urgenti (account bloccato, deposito fallito), la live chat &egrave; la scelta migliore. Per l'invio di documenti o casi complessi che richiedono indagini, l'email a support@vipluck.com d&agrave; al team pi&ugrave; spazio per lavorare. Per domande rapide o aggiornamenti sulle promozioni, prova il canale Telegram.
          </div>
        </li>
        <li>
          <div>
            <strong>Consulta prima le FAQ.</strong> Molte domande comuni su bonus, prelievi e gestione dell'account sono trattate nelle sezioni FAQ di questo sito. Un rapido controllo potrebbe risparmiarti l'attesa.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Responsible Gambling -->
  <section class="content-section" id="responsible">
    <div class="container container--narrow">
      <h2>Gioco responsabile &amp; Autoesclusione</h2>
      <p><?php echo SITE_NAME; ?> prende sul serio il gioco responsabile. Se ritieni che le tue abitudini di gioco stiano diventando un problema, il team di assistenza pu&ograve; aiutarti a impostare limiti di deposito, periodi di pausa o organizzare un'autoesclusione dalla piattaforma.</p>
      <p>Le opzioni di autoesclusione vanno da pause temporanee alla chiusura permanente dell'account. Una volta attivata, l'autoesclusione non pu&ograve; essere annullata fino alla scadenza del periodo stabilito. Contatta l'assistenza tramite live chat, email a support@vipluck.com o Telegram per discutere le opzioni disponibili.</p>
      <p>Per supporto esterno, puoi rivolgerti a organizzazioni come GamCare o Gamblers Anonymous per consulenza e assistenza gratuite e riservate.</p>
    </div>
  </section>

  <!-- Support FAQ -->
  <section class="content-section content-section--alt" id="support-faq">
    <div class="container container--narrow">
      <h2>FAQ assistenza</h2>

      <details class="faq-item">
        <summary>L'assistenza di <?php echo SITE_NAME; ?> &egrave; disponibile in pi&ugrave; lingue?</summary>
        <div class="faq-answer">
          <p>Il sito &egrave; disponibile in 13 lingue: inglese, tedesco, norvegese, francese, italiano, spagnolo, portoghese, greco, arabo, polacco, ungherese, finlandese e ceco. Gli agenti dell'assistenza possono generalmente assistere in inglese e potrebbero essere in grado di aiutare nelle altre lingue elencate in base alla disponibilit&agrave;.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quanto velocemente risponde la live chat?</summary>
        <div class="faq-answer">
          <p>In condizioni normali, le risposte della live chat arrivano entro 1-2 minuti. Durante le ore di punta o i periodi di traffico elevato, i tempi di attesa possono essere leggermente pi&ugrave; lunghi, ma il team lavora per ridurre al minimo i ritardi.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Qual &egrave; l'indirizzo email dell'assistenza?</summary>
        <div class="faq-answer">
          <p>Puoi contattare l'assistenza di <?php echo SITE_NAME; ?> via email a <strong>support@vipluck.com</strong>. Includi il tuo nome utente o email registrata, una descrizione del problema e qualsiasi screenshot o riferimento di transazione pertinente. Aspettati una risposta entro 24 ore.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso contattare l'assistenza tramite Telegram?</summary>
        <div class="faq-answer">
          <p>S&igrave;. <?php echo SITE_NAME; ?> ha un canale Telegram ufficiale dove puoi ricevere assistenza, vedere le promozioni e ricevere aggiornamenti. Cerca il link Telegram sul sito del casin&ograve; per il canale ufficiale.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>L'assistenza pu&ograve; aiutarmi ad annullare un bonus?</summary>
        <div class="faq-answer">
          <p>S&igrave;. Se desideri annullare un bonus attivo, puoi farlo autonomamente dalla sezione Profilo del tuo account, oppure contattare l'assistenza tramite live chat o email. Tieni presente che l'annullamento di un bonus rimuove l'importo del bonus e tutte le vincite generate da esso.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>E se il mio problema non viene risolto?</summary>
        <div class="faq-answer">
          <p>Se non sei soddisfatto della risposta iniziale, chiedi che il tuo caso venga escalato a un agente senior o supervisore. Per controversie non risolte, puoi anche fare riferimento alle procedure di reclamo del casin&ograve; descritte nei Termini e condizioni.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso richiedere limiti di deposito o di perdita?</summary>
        <div class="faq-answer">
          <p>S&igrave;. Contatta l'assistenza per impostare limiti di deposito giornalieri, settimanali o mensili. Puoi anche richiedere limiti di perdita o promemoria sulla durata delle sessioni per aiutarti a gestire la tua attivit&agrave; di gioco.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>