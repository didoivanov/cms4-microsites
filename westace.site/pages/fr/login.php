<?php
/**
 * Login Page - WestAce (French / FR)
 */
$page_title = 'WestAce Connexion - Accès à Votre Compte Casino';
$page_description = 'Connectez-vous à votre compte ' . SITE_NAME . ' Casino. Accédez à vos jeux, bonus et solde. Problème de connexion ? Réinitialisez votre mot de passe ou contactez le support.';
$current_page = 'login';
$lang_prefix = '/fr';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Connexion';
$hero_description = 'Connectez-vous pour accéder à votre compte, vos jeux et vos bonus.';
$hero_cta = 'Inscrivez-vous';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Login Help -->
  <section class="content-section content-section--alt" id="login-help">
    <div class="container container--narrow">
      <h2>Comment Se Connecter à <?php echo SITE_NAME; ?> Casino</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Se connecter à votre compte <?php echo SITE_NAME; ?> ne prend que quelques secondes. Utilisez l'adresse email et le mot de passe que vous avez créés lors de votre inscription.</p>
          <h3>Connexion sur Ordinateur</h3>
          <p>Rendez-vous sur le site <?php echo SITE_NAME; ?> et cliquez sur le bouton « Connexion » en haut à droite de la page. Saisissez votre adresse email et votre mot de passe, puis cliquez sur « Connexion » pour accéder à votre compte. Si vous avez oublié votre mot de passe, cliquez sur le lien de réinitialisation sous le formulaire de connexion.</p>
          <h3>Connexion sur Mobile</h3>
          <p>Sur votre téléphone ou tablette, ouvrez le site <?php echo SITE_NAME; ?> dans votre navigateur mobile. Appuyez sur le bouton « Connexion », saisissez votre email et votre mot de passe, puis appuyez sur « Connexion ». La version mobile offre les mêmes fonctionnalités que le site desktop -- aucun téléchargement d'application n'est nécessaire.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-login-screen.png" alt="Formulaire de connexion <?php echo SITE_NAME; ?> Casino avec champs email et mot de passe" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div style="text-align:center;margin:var(--space-8) 0">
        <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Se Connecter à <?php echo SITE_NAME; ?></a>
        <p style="margin-top:var(--space-4)">Pas encore de compte ? <a href="/play" rel="nofollow">Inscrivez-vous ici</a> et réclamez votre bonus de bienvenue.</p>
      </div>

      <h3>Problème de Connexion ?</h3>
      <p>Si vous rencontrez des difficultés pour vous connecter, voici quelques points à vérifier :</p>
      <ul>
        <li>Assurez-vous de saisir le bon email et le bon mot de passe. Les mots de passe sont sensibles à la casse.</li>
        <li>Videz le cache et les cookies de votre navigateur, puis réessayez.</li>
        <li>Vérifiez que votre connexion internet est stable.</li>
        <li>Si vous avez oublié votre mot de passe, utilisez le lien « Mot de passe oublié ? » pour recevoir un email de réinitialisation.</li>
      </ul>
      <p>Si aucune de ces solutions ne fonctionne, contactez le <a href="<?php echo $lang_prefix; ?>/support">support client</a> via le chat en direct ou par email à support@westace.com pour obtenir de l'aide.</p>
    </div>
  </section>

  <!-- Registration Overview -->
  <section class="content-section" id="register">
    <div class="container container--narrow">
      <h2>Créer un Nouveau Compte</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Si vous n'avez pas encore de compte <?php echo SITE_NAME; ?>, l'inscription est rapide et prend environ deux minutes. Saisissez votre email, créez un mot de passe, choisissez votre devise préférée et vous êtes prêt à jouer. Le bonus de bienvenue est affiché en haut du formulaire d'inscription pour que vous sachiez exactement ce que vous obtenez.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-signup-screen.png" alt="Formulaire d'inscription <?php echo SITE_NAME; ?> Casino affichant le pack de bienvenue et les champs d'inscription" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Cliquez sur « Inscription » sur le site.</strong> Le bouton d'inscription se trouve en haut à droite de la page.
          </div>
        </li>
        <li>
          <div>
            <strong>Choisissez votre bonus de bienvenue.</strong> Sélectionnez le bonus que vous souhaitez activer avec votre premier dépôt, ou passez cette étape si vous préférez jouer sans bonus.
          </div>
        </li>
        <li>
          <div>
            <strong>Saisissez votre email et créez un mot de passe.</strong> Choisissez un mot de passe solide pour sécuriser votre compte.
          </div>
        </li>
        <li>
          <div>
            <strong>Renseignez vos informations personnelles.</strong> Vous devrez fournir votre nom complet, date de naissance, numéro de téléphone, adresse, pays et devise préférée. Ces informations sont nécessaires pour la vérification de compte lors de votre première demande de retrait.
          </div>
        </li>
        <li>
          <div>
            <strong>Finalisez votre inscription.</strong> Terminez la création de votre compte et effectuez votre premier dépôt pour réclamer le bonus de bienvenue. Le dépôt minimum requis est de 20 &euro;.
          </div>
        </li>
      </ol>

      <div style="text-align:center;margin:var(--space-8) 0">
        <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Créer Votre Compte</a>
      </div>
    </div>
  </section>

  <!-- Account Recovery -->
  <section class="content-section content-section--alt" id="recovery">
    <div class="container container--narrow">
      <h2>Récupération de Compte</h2>

      <h3>Mot de Passe Oublié ?</h3>
      <p>Cliquez sur le lien « Mot de passe oublié ? » sur le formulaire de connexion. Saisissez votre adresse email d'inscription et un lien de réinitialisation sera envoyé à votre boîte de réception. Cliquez sur le lien dans l'email pour créer un nouveau mot de passe. Le lien de réinitialisation est valable pour une durée limitée, utilisez-le rapidement.</p>
      <p>Si vous ne recevez pas l'email dans les minutes qui suivent, vérifiez votre dossier spam ou courriers indésirables. Si l'email n'arrive toujours pas, contactez le <a href="<?php echo $lang_prefix; ?>/support">support client</a> pour une assistance manuelle.</p>

      <h3>Compte Verrouillé ?</h3>
      <p>Le verrouillage de compte peut survenir pour des raisons de sécurité, comme plusieurs tentatives de connexion échouées ou une activité suspecte. Contactez le support client via le chat en direct ou par email à support@westace.com pour faire examiner votre compte.</p>
    </div>
  </section>

  <!-- Login FAQ -->
  <section class="content-section" id="login-faq">
    <div class="container container--narrow">
      <h2>FAQ Connexion</h2>

      <details class="faq-item">
        <summary>De quoi ai-je besoin pour me connecter ?</summary>
        <div class="faq-answer">
          <p>Vous avez besoin de l'adresse email et du mot de passe que vous avez créés lors de votre inscription. Si vous avez oublié votre mot de passe, cliquez sur « Mot de passe oublié ? » sur le formulaire de connexion pour recevoir un lien de réinitialisation par email.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Le site se souviendra-t-il de moi lors de ma prochaine visite ?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> utilise des cookies pour reconnaître les joueurs qui reviennent. Si vous vous êtes déjà connecté sur le même appareil et navigateur, votre email peut être pré-rempli. Vous devrez toujours saisir votre mot de passe par mesure de sécurité. Vider les cookies de votre navigateur ou utiliser la navigation privée vous obligera à saisir vos identifiants complets.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mon compte est verrouillé. Que dois-je faire ?</summary>
        <div class="faq-answer">
          <p>Le verrouillage de compte peut survenir après plusieurs tentatives de connexion échouées ou en raison d'une activité suspecte. Contactez le support client via le chat en direct ou par email à support@westace.com pour faire examiner et déverrouiller votre compte.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Comment modifier mon mot de passe ?</summary>
        <div class="faq-answer">
          <p>Une fois connecté, rendez-vous dans les paramètres de votre compte pour modifier votre mot de passe. Si vous ne parvenez pas à vous connecter, utilisez la fonction de réinitialisation du mot de passe sur la page de connexion.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quelles informations sont nécessaires pour s'inscrire ?</summary>
        <div class="faq-answer">
          <p>L'inscription nécessite une adresse email, un mot de passe, votre nom complet, date de naissance, numéro de téléphone, adresse, pays et devise préférée. Ces informations sont utilisées pour la vérification d'identité et la conformité réglementaire.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Existe-t-il une application mobile pour <?php echo SITE_NAME; ?> ?</summary>
        <div class="faq-answer">
          <p>Aucune application dédiée n'est disponible, mais le site est entièrement optimisé pour les appareils mobiles. Ouvrez simplement <?php echo SITE_NAME; ?> dans votre navigateur mobile et connectez-vous normalement. Tous les jeux, paris sportifs et fonctionnalités sont accessibles sur mobile.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
