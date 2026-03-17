<?php
/**
 * Login Page - French
 */
$page_title = SITE_NAME . ' Connexion - Acc&eacute;dez &agrave; votre compte casino';
$page_description = 'Connectez-vous &agrave; votre compte ' . SITE_NAME . ' Casino. Acc&eacute;dez &agrave; vos jeux, bonus et solde. Des difficult&eacute;s &agrave; vous connecter ? R&eacute;initialisez votre mot de passe, r&eacute;cup&eacute;rez votre nom d\'utilisateur ou contactez le support.';
$current_page = 'login';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Connexion';
$hero_description = 'Connectez-vous pour acc&eacute;der &agrave; votre compte, vos jeux et vos bonus.';
$hero_cta = 'Cr&eacute;er un compte';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Login Help -->
  <section class="content-section content-section--alt" id="login-help">
    <div class="container container--narrow">
      <h2>Comment se connecter &agrave; <?php echo SITE_NAME; ?> Casino</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <p style="margin-top:0">Se connecter &agrave; votre compte <?php echo SITE_NAME; ?> ne prend que quelques secondes. Voici comment faire sur ordinateur et sur mobile :</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-login.png" alt="<?php echo SITE_NAME; ?> Casino login screen with username and password fields" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>

      <h3>Connexion sur ordinateur</h3>
      <p>Rendez-vous sur le site <?php echo SITE_NAME; ?> et cliquez sur le bouton "Log In" situ&eacute; en haut &agrave; droite de la page, &agrave; c&ocirc;t&eacute; du bouton "Sign Up". Saisissez votre nom d'utilisateur ou adresse email et votre mot de passe, puis cliquez sur "Log In" pour acc&eacute;der &agrave; votre compte. Les liens "Forgot your password?" et "Forgot your username?" se trouvent juste en dessous du formulaire si vous avez besoin de r&eacute;cup&eacute;rer vos identifiants.</p>

      <h3>Connexion sur mobile</h3>
      <p>Sur votre t&eacute;l&eacute;phone ou tablette, ouvrez le site <?php echo SITE_NAME; ?> dans votre navigateur mobile. Le bouton "Log In" est visible dans l'en-t&ecirc;te de la page. Appuyez dessus, saisissez votre nom d'utilisateur ou email et votre mot de passe, puis appuyez sur "Log In". La version mobile offre les m&ecirc;mes fonctionnalit&eacute;s que le site bureau, y compris la r&eacute;cup&eacute;ration de mot de passe, la r&eacute;cup&eacute;ration de nom d'utilisateur et l'inscription.</p>

      <h3>Joueurs r&eacute;guliers</h3>
      <p><?php echo SITE_NAME; ?> utilise des cookies pour se souvenir des joueurs r&eacute;guliers. Si vous vous &ecirc;tes d&eacute;j&agrave; connect&eacute; sur le m&ecirc;me appareil et navigateur, votre nom d'utilisateur ou email peut &ecirc;tre pr&eacute;-rempli dans le formulaire de connexion. Il vous suffit de saisir votre mot de passe et de cliquer sur "Log In" pour continuer. Effacer les cookies de votre navigateur ou utiliser le mode priv&eacute;/incognito vous demandera de saisir &agrave; nouveau vos identifiants complets.</p>

      <h3>Probl&egrave;mes de connexion ?</h3>
      <p>Si vous avez des difficult&eacute;s &agrave; vous connecter &agrave; votre compte, voici quelques &eacute;l&eacute;ments &agrave; v&eacute;rifier :</p>
      <ul>
        <li>Assurez-vous de saisir le bon nom d'utilisateur (ou email) et le bon mot de passe. Les mots de passe sont sensibles &agrave; la casse.</li>
        <li>Videz le cache et les cookies de votre navigateur, puis r&eacute;essayez.</li>
        <li>V&eacute;rifiez que votre connexion internet est stable.</li>
        <li>Si vous avez oubli&eacute; votre mot de passe, utilisez le lien "Forgot your password?" pour recevoir un email de r&eacute;initialisation.</li>
        <li>Si vous avez oubli&eacute; votre nom d'utilisateur, utilisez le lien "Forgot your username?" pour le r&eacute;cup&eacute;rer via votre adresse email enregistr&eacute;e.</li>
      </ul>
      <p>Si aucune de ces solutions ne fonctionne, contactez le <a href="/fr/support">service client</a> par live chat, email &agrave; support@vipluck.com ou Telegram pour une assistance en temps r&eacute;el.</p>
    </div>
  </section>

  <!-- Registration Overview -->
  <section class="content-section" id="register">
    <div class="container container--narrow">
      <h2>Cr&eacute;er un nouveau compte</h2>
      <p>Si vous n'avez pas encore de compte <?php echo SITE_NAME; ?>, l'inscription est rapide et prend environ une minute. Aucune v&eacute;rification par email ou t&eacute;l&eacute;phone n'est requise pour commencer. Voici un aper&ccedil;u du processus :</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Cliquez sur "Sign Up" sur le site.</strong> Le bouton d'inscription se trouve en haut &agrave; droite de la page. Une fen&ecirc;tre s'affichera o&ugrave; vous pouvez choisir votre bonus de bienvenue pr&eacute;f&eacute;r&eacute; (casino, multi-d&eacute;p&ocirc;t ou sports) ou refuser les bonus.
          </div>
        </li>
        <li>
          <div>
            <strong>Choisissez un nom d'utilisateur, saisissez votre email et cr&eacute;ez un mot de passe.</strong> Votre nom d'utilisateur sera utilis&eacute; pour la connexion en plus de votre email. Si vous avez un code promo, vous pouvez le saisir &agrave; cette &eacute;tape.
          </div>
        </li>
        <li>
          <div>
            <strong>Renseignez vos informations personnelles.</strong> Vous devrez fournir votre nom complet, date de naissance, genre, num&eacute;ro de t&eacute;l&eacute;phone et adresse postale. Ces informations sont n&eacute;cessaires pour la v&eacute;rification du compte lors de votre premier retrait.
          </div>
        </li>
        <li>
          <div>
            <strong>Finalisez l'inscription.</strong> Cliquez sur "Create Profile" pour cr&eacute;er votre compte. Aucune v&eacute;rification par email ou t&eacute;l&eacute;phone n'est n&eacute;cessaire -- votre compte est actif imm&eacute;diatement. Vous pouvez effectuer votre premier d&eacute;p&ocirc;t et commencer &agrave; jouer tout de suite.
          </div>
        </li>
      </ol>

      <p>Apr&egrave;s l'inscription, pensez &agrave; t&eacute;l&eacute;charger vos documents de v&eacute;rification sans attendre. Cela acc&eacute;l&egrave;re le processus lorsque vous demandez votre premier retrait. La section de t&eacute;l&eacute;chargement de documents se trouve dans "Settings - Account Verification" de votre profil.</p>
    </div>
  </section>

  <!-- Account Recovery -->
  <section class="content-section content-section--alt" id="recovery">
    <div class="container container--narrow">
      <h2>R&eacute;cup&eacute;ration de compte</h2>

      <div class="two-col">
        <div>
          <h3>Mot de passe oubli&eacute; ?</h3>
          <p>Cliquez sur le lien "Forgot your password?" sur le formulaire de connexion. Saisissez votre adresse email enregistr&eacute;e et un lien de r&eacute;initialisation sera envoy&eacute; dans votre bo&icirc;te de r&eacute;ception. Cliquez sur le lien dans l'email pour cr&eacute;er un nouveau mot de passe. Le lien de r&eacute;initialisation est valide pour une dur&eacute;e limit&eacute;e, alors utilisez-le rapidement.</p>
          <p>Si vous ne recevez pas l'email dans les minutes qui suivent, v&eacute;rifiez votre dossier spam ou courrier ind&eacute;sirable. Si l'email n'arrive toujours pas, contactez le <a href="/fr/support">service client</a> pour une assistance manuelle.</p>
        </div>
        <div>
          <h3>Nom d'utilisateur oubli&eacute; ?</h3>
          <p>Cliquez sur le lien "Forgot your username?" sur le formulaire de connexion. Saisissez l'adresse email associ&eacute;e &agrave; votre compte, et votre nom d'utilisateur sera envoy&eacute; &agrave; cet email. C'est utile si vous vous &ecirc;tes inscrit il y a un certain temps et ne vous souvenez plus du nom d'utilisateur choisi.</p>
          <p>Si vous n'avez plus acc&egrave;s &agrave; votre adresse email enregistr&eacute;e, contactez le support par live chat ou email &agrave; support@vipluck.com pour v&eacute;rifier votre identit&eacute; et r&eacute;cup&eacute;rer votre compte.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Login FAQ -->
  <section class="content-section" id="login-faq">
    <div class="container container--narrow">
      <h2>FAQ Connexion</h2>

      <details class="faq-item">
        <summary>De quoi ai-je besoin pour me connecter ?</summary>
        <div class="faq-answer">
          <p>Vous avez besoin de votre nom d'utilisateur (ou adresse email) et du mot de passe cr&eacute;&eacute; lors de l'inscription. Si vous avez oubli&eacute; votre mot de passe, cliquez sur "Forgot your password?" sur le formulaire de connexion pour recevoir un lien de r&eacute;initialisation par email. Si vous avez oubli&eacute; votre nom d'utilisateur, cliquez sur "Forgot your username?" pour le recevoir sur votre email enregistr&eacute;.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Puis-je me connecter avec mon nom d'utilisateur ou mon email ?</summary>
        <div class="faq-answer">
          <p>Oui. <?php echo SITE_NAME; ?> accepte votre nom d'utilisateur et votre adresse email enregistr&eacute;e pour la connexion. Utilisez celui que vous retenez le plus facilement.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Le site se souviendra-t-il de moi lors de ma prochaine visite ?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> utilise des cookies pour se souvenir des joueurs r&eacute;guliers. Si vous vous &ecirc;tes d&eacute;j&agrave; connect&eacute; sur le m&ecirc;me appareil et navigateur, votre nom d'utilisateur ou email peut &ecirc;tre pr&eacute;-rempli dans le formulaire de connexion. Vous devrez toujours saisir votre mot de passe pour des raisons de s&eacute;curit&eacute;.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Puis-je utiliser un VPN pour acc&eacute;der &agrave; <?php echo SITE_NAME; ?> ?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> ne bloque pas techniquement les connexions VPN. Cependant, utiliser un VPN pour acc&eacute;der &agrave; la plateforme depuis une juridiction restreinte est contraire aux Conditions G&eacute;n&eacute;rales. Si vous vous connectez depuis une r&eacute;gion o&ugrave; le casino est disponible, l'utilisation d'un VPN ne devrait pas poser de probl&egrave;me, mais le casino se r&eacute;serve le droit d'examiner les comptes qui pr&eacute;sentent des sch&eacute;mas de connexion inhabituels.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mon compte est verrouill&eacute;. Que faire ?</summary>
        <div class="faq-answer">
          <p>Les verrouillages de compte peuvent survenir pour des raisons de s&eacute;curit&eacute;, comme plusieurs tentatives de connexion &eacute;chou&eacute;es ou une activit&eacute; suspecte. Contactez le service client par live chat ou email &agrave; support@vipluck.com pour faire examiner et &eacute;ventuellement d&eacute;verrouiller votre compte.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Comment changer mon mot de passe ?</summary>
        <div class="faq-answer">
          <p>Une fois connect&eacute;, rendez-vous dans les param&egrave;tres de votre compte pour mettre &agrave; jour votre mot de passe. Si vous ne pouvez pas vous connecter, utilisez la fonction de r&eacute;initialisation de mot de passe sur la page de connexion. Un lien de r&eacute;initialisation sera envoy&eacute; &agrave; votre adresse email enregistr&eacute;e.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Dois-je v&eacute;rifier mon email pour m'inscrire ?</summary>
        <div class="faq-answer">
          <p>Non. <?php echo SITE_NAME; ?> n'exige pas de v&eacute;rification par email ou t&eacute;l&eacute;phone pour cr&eacute;er un compte. Votre compte est actif imm&eacute;diatement apr&egrave;s l'inscription et vous pouvez commencer &agrave; jouer tout de suite. Les documents de v&eacute;rification seront demand&eacute;s plus tard, lors de votre premier retrait.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quelles informations sont n&eacute;cessaires pour s'inscrire ?</summary>
        <div class="faq-answer">
          <p>L'inscription n&eacute;cessite un nom d'utilisateur, une adresse email, un mot de passe, votre nom complet, date de naissance, genre, num&eacute;ro de t&eacute;l&eacute;phone, pays, ville et code postal. Ces informations sont utilis&eacute;es pour la v&eacute;rification d'identit&eacute; et le respect des exigences r&eacute;glementaires.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
