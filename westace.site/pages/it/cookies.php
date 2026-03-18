<?php
/**
 * Cookie Policy - WestAce (Italian / IT)
 */
$page_title = 'WestAce Politica sui Cookie - Come Utilizziamo i Cookie';
$page_description = 'Politica sui cookie di ' . DOMAIN . '. Quali cookie utilizziamo e come gestirli.';
$current_page = 'cookies';
$lang_prefix = '/it';

require_once __DIR__ . '/../../includes/header.php';
?>

<main>
  <section class="content-section legal-page">
    <div class="container container--narrow">
      <h1>Politica sui Cookie</h1>
      <p class="legal-updated">Ultimo aggiornamento: 18 marzo 2026</p>

      <h2>Cosa Sono i Cookie</h2>
      <p>I cookie sono piccoli file di testo che vengono memorizzati sul tuo dispositivo quando visiti un sito web. Sono ampiamente utilizzati per far funzionare correttamente i siti, ricordare le tue preferenze e fornire dati di utilizzo anonimi ai gestori del sito.</p>

      <h2>Come Utilizziamo i Cookie</h2>
      <p><?php echo DOMAIN; ?> e un sito affiliato leggero. Non utilizziamo cookie per pubblicita, personalizzazione o tracciamento su altri siti web. I cookie presenti su questo sito rientrano in tre categorie:</p>

      <h3>Cookie Essenziali</h3>
      <p>Sono necessari per il corretto funzionamento del sito. Includono i cookie impostati dal nostro provider di hosting (Cloudflare) per la sicurezza e le prestazioni, come il rilevamento dei bot e la protezione DDoS. Non possono essere disattivati senza compromettere la funzionalita del sito.</p>
      <table class="data-table">
        <thead>
          <tr><th>Cookie</th><th>Fornitore</th><th>Finalita</th><th>Durata</th></tr>
        </thead>
        <tbody>
          <tr><td>__cf_bm</td><td>Cloudflare</td><td>Gestione bot e sicurezza</td><td>30 minuti</td></tr>
          <tr><td>cf_clearance</td><td>Cloudflare</td><td>Verifica della sfida di sicurezza</td><td>Fino a 1 anno</td></tr>
        </tbody>
      </table>

      <h3>Cookie Analitici</h3>
      <p>Potremmo utilizzare Google Analytics per capire come i visitatori interagiscono con il sito, ad esempio quali pagine sono piu popolari e come i visitatori arrivano al sito. Questi dati sono anonimizzati e aggregati. Non vengono raccolte informazioni personali identificabili.</p>
      <table class="data-table">
        <thead>
          <tr><th>Cookie</th><th>Fornitore</th><th>Finalita</th><th>Durata</th></tr>
        </thead>
        <tbody>
          <tr><td>_ga</td><td>Google Analytics</td><td>Distingue i visitatori unici</td><td>2 anni</td></tr>
          <tr><td>_ga_*</td><td>Google Analytics</td><td>Mantiene lo stato della sessione</td><td>2 anni</td></tr>
        </tbody>
      </table>

      <h3>Cookie di Marketing / Affiliazione</h3>
      <p>Non impostiamo cookie di marketing. Tuttavia, quando clicchi su un link affiliato presente sul nostro sito, la piattaforma di destinazione potrebbe impostare dei cookie per tracciare la segnalazione. Questi cookie sono impostati dalla terza parte e sono regolati dalla sua politica sui cookie, non dalla nostra.</p>

      <h2>Cookie di Terze Parti</h2>
      <p>Quando clicchi su un link affiliato e lasci il nostro sito, il sito di destinazione potrebbe impostare i propri cookie. Non abbiamo alcun controllo su di essi. Per i dettagli, consulta la politica sui cookie dell'operatore del casino.</p>

      <h2>Consenso ai Cookie</h2>
      <p>Ai sensi della Direttiva ePrivacy dell'UE e del GDPR, siamo tenuti a ottenere il tuo consenso prima di installare cookie non essenziali sul tuo dispositivo. I cookie essenziali strettamente necessari al funzionamento del sito non richiedono consenso. Continuando a utilizzare questo sito, acconsenti all'uso dei cookie analitici sopra descritti. Puoi revocare il consenso in qualsiasi momento modificando le impostazioni del tuo browser.</p>

      <h2>Gestione dei Cookie</h2>
      <p>Puoi controllare e cancellare i cookie tramite le impostazioni del tuo browser. La maggior parte dei browser consente di:</p>
      <ul>
        <li>Visualizzare i cookie memorizzati e cancellarli singolarmente</li>
        <li>Bloccare i cookie di terze parti</li>
        <li>Bloccare tutti i cookie provenienti da siti specifici</li>
        <li>Bloccare tutti i cookie</li>
        <li>Cancellare tutti i cookie alla chiusura del browser</li>
      </ul>
      <p>Disattivare i cookie potrebbe influire sulla funzionalita del sito, in particolare sulle funzioni di sicurezza fornite da Cloudflare.</p>
      <p>Per istruzioni sulla gestione dei cookie nel tuo browser:</p>
      <ul>
        <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener noreferrer">Google Chrome</a></li>
        <li><a href="https://support.mozilla.org/en-US/kb/cookies-information-websites-store-on-your-computer" target="_blank" rel="noopener noreferrer">Mozilla Firefox</a></li>
        <li><a href="https://support.apple.com/en-gb/guide/safari/sfri11471/mac" target="_blank" rel="noopener noreferrer">Safari</a></li>
        <li><a href="https://support.microsoft.com/en-gb/microsoft-edge/delete-cookies-in-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank" rel="noopener noreferrer">Microsoft Edge</a></li>
      </ul>

      <h2>Modifiche a Questa Politica</h2>
      <p>Potremmo aggiornare questa politica sui cookie di tanto in tanto. Qualsiasi modifica verra pubblicata su questa pagina con una data di revisione aggiornata.</p>

      <h2>Contatti</h2>
      <p>Per qualsiasi domanda sull'utilizzo dei cookie, contattaci all'indirizzo <a href="mailto:info@westace.site">info@westace.site</a> oppure visita la nostra pagina <a href="<?php echo $lang_prefix; ?>/support">Assistenza</a>.</p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
