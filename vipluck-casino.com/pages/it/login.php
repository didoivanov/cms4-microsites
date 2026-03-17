<?php
/**
 * Login Page – Italian
 */
$page_title = SITE_NAME . ' Accesso - Entra nel Tuo Account del Casin&ograve;';
$page_description = 'Accedi al tuo account ' . SITE_NAME . ' Casino. Raggiungi i tuoi giochi, bonus e saldo. Problemi ad accedere? Reimposta la password, recupera il nome utente o contatta l\'assistenza per ricevere aiuto.';
$current_page = 'login';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = 'Accesso a ' . SITE_NAME;
$hero_description = 'Accedi per raggiungere il tuo account, i giochi e i bonus.';
$hero_cta = 'Registrati ora';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Login Help -->
  <section class="content-section content-section--alt" id="login-help">
    <div class="container container--narrow">
      <h2>Come accedere a <?php echo SITE_NAME; ?> Casino</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <p style="margin-top:0">Accedere al tuo account <?php echo SITE_NAME; ?> richiede solo pochi secondi. Ecco come fare su desktop e mobile:</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-login.png" alt="<?php echo SITE_NAME; ?> Casino login screen with username and password fields" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>

      <h3>Accesso da desktop</h3>
      <p>Visita il sito di <?php echo SITE_NAME; ?> e clicca il pulsante "Accedi" situato nell'angolo in alto a destra della pagina, accanto al pulsante "Registrati". Inserisci il tuo nome utente o indirizzo email e la password, poi clicca "Accedi" per raggiungere il tuo account. I link "Password dimenticata?" e "Nome utente dimenticato?" si trovano subito sotto il modulo nel caso dovessi recuperare le tue credenziali.</p>

      <h3>Accesso da mobile</h3>
      <p>Dal tuo telefono o tablet, apri il sito di <?php echo SITE_NAME; ?> nel browser mobile. Il pulsante "Accedi" &egrave; visibile nell'area dell'intestazione. Toccalo, inserisci il tuo nome utente o email e la password, e tocca "Accedi". La versione mobile offre le stesse funzionalit&agrave; del sito desktop, inclusi il recupero della password, il recupero del nome utente e la registrazione dell'account.</p>

      <h3>Giocatori di ritorno</h3>
      <p><?php echo SITE_NAME; ?> utilizza i cookie per ricordare i giocatori di ritorno. Se hai gi&agrave; effettuato l'accesso sullo stesso dispositivo e browser, il tuo nome utente o email potrebbe essere precompilato nel modulo di accesso. Inserisci semplicemente la password e clicca "Accedi" per continuare. Cancellare i cookie del browser o usare la modalit&agrave; privata/incognito richieder&agrave; di inserire nuovamente le credenziali complete.</p>

      <h3>Problemi di accesso?</h3>
      <p>Se hai difficolt&agrave; ad accedere al tuo account, ecco alcune cose da verificare:</p>
      <ul>
        <li>Assicurati di inserire il nome utente (o email) e la password corretti. Le password distinguono tra maiuscole e minuscole.</li>
        <li>Cancella la cache e i cookie del browser, poi riprova.</li>
        <li>Verifica che la tua connessione internet sia stabile.</li>
        <li>Se hai dimenticato la password, usa il link "Password dimenticata?" per richiedere un'email di reimpostazione.</li>
        <li>Se hai dimenticato il nome utente, usa il link "Nome utente dimenticato?" per recuperarlo tramite il tuo indirizzo email registrato.</li>
      </ul>
      <p>Se nessuna delle soluzioni sopra risolve il problema, contatta l'<a href="/it/support">assistenza clienti</a> tramite live chat, email a support@vipluck.com o Telegram per ricevere assistenza in tempo reale.</p>
    </div>
  </section>

  <!-- Registration Overview -->
  <section class="content-section" id="register">
    <div class="container container--narrow">
      <h2>Creare un nuovo account</h2>
      <p>Se non hai ancora un account <?php echo SITE_NAME; ?>, la registrazione &egrave; rapida e richiede circa un minuto. Non &egrave; necessaria alcuna verifica email o telefonica per iniziare. Ecco una panoramica del processo:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Clicca "Registrati" sul sito.</strong> Il pulsante di registrazione si trova in alto a destra della pagina. Apparir&agrave; una finestra popup dove potrai scegliere il tuo bonus di benvenuto preferito (casin&ograve;, multi-deposito o sport) oppure rinunciare ai bonus.
          </div>
        </li>
        <li>
          <div>
            <strong>Scegli un nome utente, inserisci la tua email e crea una password.</strong> Il tuo nome utente verr&agrave; utilizzato per l'accesso insieme all'email. Se hai un codice promozionale, puoi inserirlo in questa fase.
          </div>
        </li>
        <li>
          <div>
            <strong>Compila i tuoi dati personali.</strong> Dovrai fornire nome e cognome, data di nascita, sesso, numero di telefono e indirizzo fisico. Queste informazioni sono necessarie per la verifica dell'account quando richiederai il primo prelievo.
          </div>
        </li>
        <li>
          <div>
            <strong>Completa la registrazione.</strong> Clicca "Crea profilo" per finalizzare il tuo account. Non &egrave; necessaria alcuna verifica email o telefonica -- il tuo account &egrave; attivo immediatamente. Puoi effettuare il primo deposito e iniziare a giocare subito.
          </div>
        </li>
      </ol>

      <p>Dopo la registrazione, valuta di caricare subito i tuoi documenti di verifica. Questo velocizza il processo quando richiederai il primo prelievo. Puoi trovare la sezione per il caricamento dei documenti in "Impostazioni - Verifica account" nel tuo profilo.</p>
    </div>
  </section>

  <!-- Account Recovery -->
  <section class="content-section content-section--alt" id="recovery">
    <div class="container container--narrow">
      <h2>Recupero dell'account</h2>

      <div class="two-col">
        <div>
          <h3>Password dimenticata?</h3>
          <p>Clicca il link "Password dimenticata?" nel modulo di accesso. Inserisci il tuo indirizzo email registrato e un link di reimpostazione verr&agrave; inviato alla tua casella di posta. Clicca il link nell'email per creare una nuova password. Il link di reimpostazione ha una validit&agrave; limitata, quindi usalo tempestivamente.</p>
          <p>Se non ricevi l'email entro pochi minuti, controlla la cartella spam o posta indesiderata. Se l'email non arriva comunque, contatta l'<a href="/it/support">assistenza clienti</a> per assistenza manuale.</p>
        </div>
        <div>
          <h3>Nome utente dimenticato?</h3>
          <p>Clicca il link "Nome utente dimenticato?" nel modulo di accesso. Inserisci l'indirizzo email associato al tuo account e il tuo nome utente verr&agrave; inviato a quell'email. Questo &egrave; utile se ti sei registrato tempo fa e non ricordi il nome utente che hai scelto.</p>
          <p>Se non hai pi&ugrave; accesso al tuo indirizzo email registrato, contatta l'assistenza tramite live chat o email a support@vipluck.com per verificare la tua identit&agrave; e recuperare il tuo account.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Login FAQ -->
  <section class="content-section" id="login-faq">
    <div class="container container--narrow">
      <h2>FAQ accesso</h2>

      <details class="faq-item">
        <summary>Cosa mi serve per accedere?</summary>
        <div class="faq-answer">
          <p>Hai bisogno del tuo nome utente (o indirizzo email) e della password che hai creato durante la registrazione. Se hai dimenticato la password, clicca "Password dimenticata?" nel modulo di accesso per ricevere un link di reimpostazione via email. Se hai dimenticato il nome utente, clicca "Nome utente dimenticato?" per riceverlo all'email registrata.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso accedere con il nome utente o con l'email?</summary>
        <div class="faq-answer">
          <p>S&igrave;. <?php echo SITE_NAME; ?> accetta sia il tuo nome utente che il tuo indirizzo email registrato per l'accesso. Puoi usare quello che ti &egrave; pi&ugrave; facile da ricordare.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Il sito mi ricorder&agrave; alla prossima visita?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> utilizza i cookie per ricordare i giocatori di ritorno. Se hai gi&agrave; effettuato l'accesso sullo stesso dispositivo e browser, il tuo nome utente o email potrebbe essere precompilato nel modulo di accesso. Dovrai comunque inserire la password per motivi di sicurezza.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso usare una VPN per accedere a <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> non blocca tecnicamente le connessioni VPN. Tuttavia, usare una VPN per accedere alla piattaforma da una giurisdizione con restrizioni &egrave; contrario ai Termini e condizioni. Se ti connetti da una regione in cui il casin&ograve; &egrave; disponibile, l'uso della VPN non dovrebbe causare problemi, ma il casin&ograve; si riserva il diritto di verificare gli account che mostrano schemi di connessione insoliti.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Il mio account &egrave; bloccato. Cosa devo fare?</summary>
        <div class="faq-answer">
          <p>I blocchi dell'account possono verificarsi per motivi di sicurezza, come tentativi di accesso falliti multipli o attivit&agrave; sospette. Contatta l'assistenza clienti tramite live chat o email a support@vipluck.com per far verificare e potenzialmente sbloccare il tuo account.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Come cambio la password?</summary>
        <div class="faq-answer">
          <p>Una volta effettuato l'accesso, vai alle impostazioni del tuo account per aggiornare la password. Se non riesci ad accedere, usa la funzione di reimpostazione password nella pagina di accesso. Un link di reimpostazione verr&agrave; inviato al tuo indirizzo email registrato.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Devo verificare la mia email per registrarmi?</summary>
        <div class="faq-answer">
          <p>No. <?php echo SITE_NAME; ?> non richiede la verifica email o telefonica per creare un account. Il tuo account &egrave; attivo immediatamente dopo la registrazione e puoi iniziare a giocare subito. I documenti di verifica saranno richiesti successivamente quando effettuerai il primo prelievo.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quali informazioni sono necessarie per registrarsi?</summary>
        <div class="faq-answer">
          <p>La registrazione richiede un nome utente, un indirizzo email, una password, nome e cognome, data di nascita, sesso, numero di telefono, paese, citt&agrave; e codice postale. Queste informazioni vengono utilizzate per la verifica dell'identit&agrave; e per il rispetto dei requisiti normativi.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>