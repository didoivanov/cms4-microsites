<?php
/**
 * Login Page - French
 */
$page_title = SITE_NAME . ' Connexion - Accède à Ton Compte Casino';
$page_description = 'Connecte-toi à ton compte ' . SITE_NAME . ' Casino. Accède à tes jeux, bonus et solde. Des difficultés à te connecter ? Réinitialise ton mot de passe ou contacte le support pour de l\'aide.';
$current_page = 'login';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Connexion';
$hero_description = 'Connecte-toi pour accéder à ton compte, tes jeux et tes bonus.';
$hero_cta = 'Inscris-toi Maintenant';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Login Help -->
  <section class="content-section content-section--alt" id="login-help">
    <div class="container container--narrow">
      <h2>Comment Se Connecter à <?php echo SITE_NAME; ?> Casino</h2>
      <p>Se connecter à ton compte <?php echo SITE_NAME; ?> ne prend que quelques secondes. Voici comment faire sur ordinateur et sur mobile :</p>

      <h3>Connexion sur Ordinateur</h3>
      <p>Rends-toi sur le site <?php echo SITE_NAME; ?> et clique sur le bouton « Connexion » situé dans le coin supérieur droit de la page, à côté du bouton « Inscription ». Saisis ton adresse email et ton mot de passe enregistrés, puis clique sur « Connexion » pour accéder à ton compte. Le lien « Mot de passe oublié ? » se trouve juste en dessous du formulaire si tu as besoin de réinitialiser tes identifiants.</p>

      <h3>Connexion sur Mobile</h3>
      <p>Sur ton téléphone ou ta tablette, ouvre le site <?php echo SITE_NAME; ?> dans ton navigateur mobile. Le bouton « Connexion » est visible dans la zone d'en-tête. Appuie dessus, saisis ton email et ton mot de passe, puis appuie sur « Connexion ». La version mobile offre les mêmes fonctionnalités que le site bureau, y compris la récupération du mot de passe et l'inscription au compte.</p>

      <h3>Problèmes de Connexion ?</h3>
      <p>Si tu as des difficultés à te connecter à ton compte, voici quelques points à vérifier :</p>
      <ul>
        <li>Assure-toi de saisir la bonne adresse email et le bon mot de passe. Les mots de passe sont sensibles à la casse.</li>
        <li>Vide le cache et les cookies de ton navigateur, puis réessaie.</li>
        <li>Vérifie que ta connexion internet est stable.</li>
        <li>Si tu as oublié ton mot de passe, utilise le lien « Mot de passe oublié ? » pour demander un email de réinitialisation.</li>
        <li>Évite d'utiliser un VPN, car <?php echo SITE_NAME; ?> n'autorise pas l'accès via VPN. Tenter de se connecter via un VPN pourrait entraîner des restrictions sur ton compte.</li>
      </ul>
      <p>Si aucune de ces solutions ne résout le problème, contacte le <a href="/support">support client</a> via live chat pour une assistance en temps réel.</p>
    </div>
  </section>

  <!-- Registration Overview -->
  <section class="content-section" id="register">
    <div class="container container--narrow">
      <h2>Créer un Nouveau Compte</h2>
      <p>Si tu n'as pas encore de compte <?php echo SITE_NAME; ?>, l'inscription est rapide et prend environ une minute. Voici un aperçu du processus :</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Clique sur « Inscription » sur le site.</strong> Le bouton d'inscription se trouve en haut à droite de la page. Un popup apparaîtra où tu pourras choisir ton bonus de bienvenue préféré (casino, multi-dépôts ou sport) ou renoncer aux bonus.
          </div>
        </li>
        <li>
          <div>
            <strong>Saisis ton email et crée un mot de passe.</strong> Ce seront tes identifiants de connexion. Si tu as un code promo, tu peux le saisir à cette étape.
          </div>
        </li>
        <li>
          <div>
            <strong>Remplis tes informations personnelles.</strong> Tu devras fournir ton nom complet, ta date de naissance, ton genre, ton numéro de téléphone et ton adresse physique. Ces informations sont nécessaires pour la vérification du compte.
          </div>
        </li>
        <li>
          <div>
            <strong>Finalise l'inscription.</strong> Clique sur « Créer un Profil » pour terminer ton compte. Une fois fait, tu peux effectuer ton premier dépôt et commencer à jouer.
          </div>
        </li>
      </ol>

      <p>Après l'inscription, pense à télécharger tes documents de vérification tout de suite. Cela accélère le processus quand tu demanderas ton premier retrait. Tu trouveras la section de téléchargement des documents dans « Paramètres - Vérification du Compte » de ton profil.</p>
    </div>
  </section>

  <!-- Login FAQ -->
  <section class="content-section content-section--alt" id="login-faq">
    <div class="container container--narrow">
      <h2>FAQ Connexion</h2>

      <details class="faq-item">
        <summary>De quoi ai-je besoin pour me connecter ?</summary>
        <div class="faq-answer">
          <p>Tu as besoin de l'adresse email et du mot de passe utilisés lors de l'inscription. Si tu as oublié ton mot de passe, clique sur « Mot de passe oublié ? » dans le formulaire de connexion pour recevoir un lien de réinitialisation par email.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Puis-je utiliser un VPN pour accéder à <?php echo SITE_NAME; ?> ?</summary>
        <div class="faq-answer">
          <p>Non. <?php echo SITE_NAME; ?> interdit strictement l'utilisation de VPN. Se connecter via un VPN pourrait entraîner la suspension de ton compte et la confiscation de tous les gains associés. Le casino offre une expérience spécifique à chaque pays adaptée à chaque région.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mon compte est verrouillé. Que dois-je faire ?</summary>
        <div class="faq-answer">
          <p>Les verrouillages de compte peuvent survenir pour des raisons de sécurité, comme de multiples tentatives de connexion échouées ou une activité suspecte. Contacte le support client par live chat ou email pour faire examiner et potentiellement déverrouiller ton compte.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Comment changer mon mot de passe ?</summary>
        <div class="faq-answer">
          <p>Une fois connecté, rends-toi dans les paramètres de ton compte pour mettre à jour ton mot de passe. Si tu ne peux pas te connecter, utilise la fonction de réinitialisation du mot de passe sur la page de connexion. Un lien de réinitialisation sera envoyé à ton adresse email enregistrée.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quelles informations sont nécessaires pour s'inscrire ?</summary>
        <div class="faq-answer">
          <p>L'inscription nécessite ton email, un mot de passe, ton nom complet, ta date de naissance, ton genre, ton numéro de téléphone, ton pays, ta ville et ton code postal. Ces informations sont utilisées pour la vérification d'identité et le respect des exigences réglementaires.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
