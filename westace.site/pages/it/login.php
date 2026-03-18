<?php
/**
 * Login Page - WestAce (Italian / IT)
 */
$page_title = 'WestAce Accesso - Entra nel Tuo Account Casino';
$page_description = 'Accedi al tuo account ' . SITE_NAME . ' Casino. Raggiungi i tuoi giochi, bonus e saldo. Problemi di accesso? Reimposta la password o contatta l\'assistenza.';
$current_page = 'login';
$lang_prefix = '/it';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Accesso';
$hero_description = 'Accedi per raggiungere il tuo account, i tuoi giochi e i tuoi bonus.';
$hero_cta = 'Registrati Ora';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Login Help -->
  <section class="content-section content-section--alt" id="login-help">
    <div class="container container--narrow">
      <h2>Come Accedere a <?php echo SITE_NAME; ?> Casino</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Accedere al tuo account <?php echo SITE_NAME; ?> richiede solo pochi secondi. Usa l'email e la password che hai creato durante la registrazione.</p>
          <h3>Accesso da Desktop</h3>
          <p>Visita il sito <?php echo SITE_NAME; ?> e clicca sul pulsante "Accesso" nell'angolo in alto a destra della pagina. Inserisci il tuo indirizzo email e la password, quindi clicca su "Accesso" per entrare nel tuo account. Se hai dimenticato la password, clicca sul link di reimpostazione sotto il modulo di accesso.</p>
          <h3>Accesso da Mobile</h3>
          <p>Dal tuo telefono o tablet, apri il sito <?php echo SITE_NAME; ?> nel tuo browser mobile. Tocca il pulsante "Accesso", inserisci email e password, e tocca "Accesso". La versione mobile offre le stesse funzionalità del sito desktop - nessun download di app necessario.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-login-screen.png" alt="Modulo di accesso <?php echo SITE_NAME; ?> Casino con campi email e password" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div style="text-align:center;margin:var(--space-8) 0">
        <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Accedi a <?php echo SITE_NAME; ?></a>
        <p style="margin-top:var(--space-4)">Non hai ancora un account? <a href="/play" rel="nofollow">Registrati qui</a> e riscatta il tuo bonus di benvenuto.</p>
      </div>

      <h3>Problemi di Accesso?</h3>
      <p>Se hai difficoltà ad accedere al tuo account, ecco alcuni punti da verificare:</p>
      <ul>
        <li>Assicurati di inserire l'email e la password corrette. Le password distinguono tra maiuscole e minuscole.</li>
        <li>Cancella la cache e i cookie del browser, quindi riprova.</li>
        <li>Verifica che la tua connessione internet sia stabile.</li>
        <li>Se hai dimenticato la password, usa il link "Hai dimenticato la password?" per ricevere un'email di reimpostazione.</li>
      </ul>
      <p>Se nessuna di queste soluzioni funziona, contatta l'<a href="<?php echo $lang_prefix; ?>/support">assistenza clienti</a> tramite la chat dal vivo o via email a support@westace.com per ricevere aiuto.</p>
    </div>
  </section>

  <!-- Registration Overview -->
  <section class="content-section" id="register">
    <div class="container container--narrow">
      <h2>Creare un Nuovo Account</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Se non hai ancora un account <?php echo SITE_NAME; ?>, la registrazione è rapida e richiede circa due minuti. Inserisci la tua email, crea una password, scegli la tua valuta preferita e sei pronto per giocare. Il bonus di benvenuto è mostrato nella parte superiore del modulo di registrazione, così sai esattamente cosa ricevi.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-signup-screen.png" alt="Modulo di registrazione <?php echo SITE_NAME; ?> Casino con il pacchetto di benvenuto e i campi di registrazione" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Clicca su "Registrati" sul sito.</strong> Il pulsante di registrazione si trova nell'angolo in alto a destra della pagina.
          </div>
        </li>
        <li>
          <div>
            <strong>Scegli il tuo bonus di benvenuto.</strong> Seleziona il bonus che desideri attivare con il tuo primo deposito, oppure salta questo passaggio se preferisci giocare senza bonus.
          </div>
        </li>
        <li>
          <div>
            <strong>Inserisci la tua email e crea una password.</strong> Scegli una password robusta per mantenere il tuo account al sicuro.
          </div>
        </li>
        <li>
          <div>
            <strong>Compila i tuoi dati personali.</strong> Dovrai fornire nome completo, data di nascita, numero di telefono, indirizzo, paese e valuta preferita. Queste informazioni sono necessarie per la verifica dell'account quando richiederai il tuo primo prelievo.
          </div>
        </li>
        <li>
          <div>
            <strong>Completa la registrazione.</strong> Finalizza il tuo account ed effettua il primo deposito per riscattare il bonus di benvenuto. Il deposito minimo richiesto è di 20 &euro;.
          </div>
        </li>
      </ol>

      <div style="text-align:center;margin:var(--space-8) 0">
        <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Crea il Tuo Account</a>
      </div>
    </div>
  </section>

  <!-- Account Recovery -->
  <section class="content-section content-section--alt" id="recovery">
    <div class="container container--narrow">
      <h2>Recupero Account</h2>

      <h3>Hai Dimenticato la Password?</h3>
      <p>Clicca sul link "Hai dimenticato la password?" nel modulo di accesso. Inserisci il tuo indirizzo email di registrazione e un link di reimpostazione verrà inviato alla tua casella di posta. Clicca sul link nell'email per creare una nuova password. Il link di reimpostazione è valido per un tempo limitato, quindi usalo tempestivamente.</p>
      <p>Se non ricevi l'email entro pochi minuti, controlla la cartella spam o posta indesiderata. Se l'email non arriva comunque, contatta l'<a href="<?php echo $lang_prefix; ?>/support">assistenza clienti</a> per un'assistenza manuale.</p>

      <h3>Account Bloccato?</h3>
      <p>Il blocco dell'account può verificarsi per motivi di sicurezza, come tentativi di accesso falliti multipli o attività sospette. Contatta l'assistenza clienti tramite la chat dal vivo o via email a support@westace.com per far esaminare il tuo account.</p>
    </div>
  </section>

  <!-- Login FAQ -->
  <section class="content-section" id="login-faq">
    <div class="container container--narrow">
      <h2>FAQ Accesso</h2>

      <details class="faq-item">
        <summary>Di cosa ho bisogno per accedere?</summary>
        <div class="faq-answer">
          <p>Hai bisogno dell'indirizzo email e della password che hai creato durante la registrazione. Se hai dimenticato la password, clicca su "Hai dimenticato la password?" nel modulo di accesso per ricevere un link di reimpostazione via email.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Il sito mi ricorderà alla prossima visita?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> utilizza i cookie per riconoscere i giocatori che ritornano. Se hai già effettuato l'accesso sullo stesso dispositivo e browser, la tua email potrebbe essere precompilata. Per sicurezza, dovrai comunque inserire la password. Cancellare i cookie del browser o utilizzare la navigazione privata richiederà l'inserimento completo delle credenziali.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Il mio account è bloccato. Cosa devo fare?</summary>
        <div class="faq-answer">
          <p>Il blocco dell'account può verificarsi dopo tentativi di accesso falliti multipli o a causa di attività sospette. Contatta l'assistenza clienti tramite la chat dal vivo o via email a support@westace.com per far esaminare e sbloccare il tuo account.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Come posso cambiare la mia password?</summary>
        <div class="faq-answer">
          <p>Una volta effettuato l'accesso, vai nelle impostazioni del tuo account per aggiornare la password. Se non riesci ad accedere, usa la funzione di reimpostazione della password nella pagina di accesso.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quali informazioni sono necessarie per registrarsi?</summary>
        <div class="faq-answer">
          <p>La registrazione richiede un indirizzo email, una password, nome completo, data di nascita, numero di telefono, indirizzo, paese e valuta preferita. Queste informazioni vengono utilizzate per la verifica dell'identità e la conformità normativa.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Esiste un'app mobile per <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Non è disponibile un'app dedicata, ma il sito è completamente ottimizzato per i dispositivi mobili. Apri semplicemente <?php echo SITE_NAME; ?> nel tuo browser mobile e accedi normalmente. Tutti i giochi, le scommesse sportive e le funzionalità sono accessibili da mobile.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
