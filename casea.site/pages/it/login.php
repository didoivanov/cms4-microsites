<?php
/**
 * Login Page - Italian
 */
$page_title = SITE_NAME . ' Accesso - Entra nel Tuo Account Casinò';
$page_description = 'Accedi al tuo account ' . SITE_NAME . ' Casino. Raggiungi i tuoi giochi, bonus e saldo. Problemi ad accedere? Reimposta la password o contatta il supporto per aiuto.';
$current_page = 'login';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Accesso';
$hero_description = 'Accedi per raggiungere il tuo account, i giochi e i bonus.';
$hero_cta = 'Registrati Ora';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Login Help -->
  <section class="content-section content-section--alt" id="login-help">
    <div class="container container--narrow">
      <h2>Come Accedere a <?php echo SITE_NAME; ?> Casino</h2>
      <p>Accedere al tuo account <?php echo SITE_NAME; ?> richiede solo pochi secondi. Ecco cosa fare su desktop e mobile:</p>

      <h3>Accesso da Desktop</h3>
      <p>Visita il sito <?php echo SITE_NAME; ?> e clicca il pulsante «Accedi» situato nell'angolo in alto a destra della pagina, accanto al pulsante «Registrati». Inserisci il tuo indirizzo email registrato e la password, quindi clicca «Accedi» per entrare nel tuo account. Il link «Hai dimenticato la password?» si trova proprio sotto il modulo se hai bisogno di reimpostare le credenziali.</p>

      <h3>Accesso da Mobile</h3>
      <p>Sul tuo telefono o tablet, apri il sito <?php echo SITE_NAME; ?> nel browser mobile. Il pulsante «Accedi» è visibile nell'area dell'header. Toccalo, inserisci email e password e tocca «Accedi». La versione mobile offre le stesse funzionalità del sito desktop, incluso il recupero password e la registrazione dell'account.</p>

      <h3>Problemi di Accesso?</h3>
      <p>Se hai difficoltà ad accedere al tuo account, ecco alcune cose da controllare:</p>
      <ul>
        <li>Assicurati di inserire l'indirizzo email e la password corretti. Le password distinguono tra maiuscole e minuscole.</li>
        <li>Svuota la cache e i cookie del browser, quindi riprova.</li>
        <li>Verifica che la tua connessione internet sia stabile.</li>
        <li>Se hai dimenticato la password, usa il link «Hai dimenticato la password?» per richiedere un'email di reimpostazione.</li>
        <li>Evita di usare una VPN, poiché <?php echo SITE_NAME; ?> non consente l'accesso tramite VPN. Tentare di accedere attraverso una VPN potrebbe comportare restrizioni sull'account.</li>
      </ul>
      <p>Se nessuna delle soluzioni precedenti risolve il problema, contatta l'<a href="/support">assistenza clienti</a> tramite live chat per assistenza in tempo reale.</p>
    </div>
  </section>

  <!-- Registration Overview -->
  <section class="content-section" id="register">
    <div class="container container--narrow">
      <h2>Creare un Nuovo Account</h2>
      <p>Se non hai ancora un account <?php echo SITE_NAME; ?>, la registrazione è rapida e richiede circa un minuto. Ecco una panoramica del processo:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Clicca «Registrati» sul sito.</strong> Il pulsante di registrazione si trova in alto a destra della pagina. Apparirà un popup dove potrai scegliere il tuo bonus di benvenuto preferito (casinò, multi-deposito o sport) o rinunciare ai bonus.
          </div>
        </li>
        <li>
          <div>
            <strong>Inserisci la tua email e crea una password.</strong> Queste saranno le tue credenziali di accesso. Se hai un codice promo, puoi inserirlo in questa fase.
          </div>
        </li>
        <li>
          <div>
            <strong>Compila i tuoi dati personali.</strong> Dovrai fornire nome completo, data di nascita, sesso, numero di telefono e indirizzo fisico. Queste informazioni sono necessarie per la verifica dell'account.
          </div>
        </li>
        <li>
          <div>
            <strong>Completa la registrazione.</strong> Clicca «Crea Profilo» per finalizzare il tuo account. Una volta fatto, puoi effettuare il tuo primo deposito e iniziare a giocare.
          </div>
        </li>
      </ol>

      <p>Dopo la registrazione, considera di caricare subito i tuoi documenti di verifica. Questo velocizza il processo quando richiedi il tuo primo prelievo. Puoi trovare la sezione di caricamento documenti in «Impostazioni - Verifica Account» nel tuo profilo.</p>
    </div>
  </section>

  <!-- Login FAQ -->
  <section class="content-section content-section--alt" id="login-faq">
    <div class="container container--narrow">
      <h2>FAQ Accesso</h2>

      <details class="faq-item">
        <summary>Di cosa ho bisogno per accedere?</summary>
        <div class="faq-answer">
          <p>Ti servono l'indirizzo email e la password utilizzati durante la registrazione. Se hai dimenticato la password, clicca «Hai dimenticato la password?» nel modulo di accesso per ricevere un link di reimpostazione via email.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso usare una VPN per accedere a <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>No. <?php echo SITE_NAME; ?> proibisce rigorosamente l'uso di VPN. Accedere tramite una VPN potrebbe comportare la sospensione del tuo account e la confisca di tutte le vincite associate. Il casinò offre un'esperienza specifica per paese adattata a ogni regione.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Il mio account è bloccato. Cosa devo fare?</summary>
        <div class="faq-answer">
          <p>I blocchi dell'account possono verificarsi per motivi di sicurezza, come molteplici tentativi di accesso falliti o attività sospette. Contatta l'assistenza clienti tramite live chat o email per far esaminare e potenzialmente sbloccare il tuo account.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Come cambio la mia password?</summary>
        <div class="faq-answer">
          <p>Una volta effettuato l'accesso, vai alle impostazioni del tuo account per aggiornare la password. Se non riesci ad accedere, usa la funzione di reimpostazione password nella pagina di login. Un link di reimpostazione verrà inviato al tuo indirizzo email registrato.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quali informazioni sono necessarie per registrarsi?</summary>
        <div class="faq-answer">
          <p>La registrazione richiede email, password, nome completo, data di nascita, sesso, numero di telefono, paese, città e codice postale. Queste informazioni vengono utilizzate per la verifica dell'identità e il rispetto dei requisiti normativi.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
