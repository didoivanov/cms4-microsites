<?php
/**
 * Support Page - French
 */
$page_title = SITE_NAME . ' Support Client - Live Chat, Email & Centre d\'Aide';
$page_description = 'Contacte le support client de ' . SITE_NAME . ' Casino via live chat 24/7 ou email. Obtiens de l\'aide pour les dépôts, retraits, bonus, problèmes de compte et questions techniques.';
$current_page = 'support';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Support Client';
$hero_description = 'Nous sommes là pour t\'aider avec toute question concernant ton compte, tes dépôts, retraits, bonus ou problèmes techniques. Contacte-nous à tout moment.';
$hero_cta = 'Ouvrir le Live Chat';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Contact Options -->
  <section class="content-section" id="contact">
    <div class="container">
      <h2>Comment Nous Contacter</h2>
      <p><?php echo SITE_NAME; ?> propose deux canaux de support principaux, tous deux disponibles 24 heures sur 24. Que tu aies une question rapide sur une promotion ou besoin d'aide pour résoudre un problème de paiement, l'équipe est prête à t'assister.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128172;</div>
          <h4>Live Chat</h4>
          <p>Le moyen le plus rapide d'obtenir de l'aide. Clique sur l'icône du chat sur n'importe quelle page du site pour démarrer une conversation avec un agent de support. Le temps de réponse moyen est inférieur à 2 minutes pendant les heures normales. Disponible 24 heures sur 24, 7 jours sur 7.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9993;</div>
          <h4>Support Email</h4>
          <p>Pour les questions détaillées ou l'envoi de documents, l'email est la meilleure option. Envoie ta demande et attends une réponse sous 24 heures. Assure-toi d'inclure les détails de ton compte et une description claire du problème.</p>
        </div>
      </div>

      <table class="data-table" style="margin-top: var(--space-8);">
        <thead>
          <tr>
            <th>Canal</th>
            <th>Disponibilité</th>
            <th>Temps de Réponse</th>
            <th>Idéal Pour</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Live Chat</td>
            <td>24/7</td>
            <td>Moins de 2 minutes</td>
            <td>Questions rapides, aide bonus, problèmes de dépôt</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>24/7</td>
            <td>Jusqu'à 24 heures</td>
            <td>Envoi de documents, dossiers détaillés, réclamations</td>
          </tr>
          <tr>
            <td>Téléphone</td>
            <td>Non disponible</td>
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
      <h2>En Quoi le Support Peut-il T'aider ?</h2>
      <p>L'équipe de support client gère un large éventail de sujets. Voici les domaines les plus courants pour lesquels les joueurs demandent de l'aide :</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Compte &amp; Inscription</h4>
          <p>Aide pour la création de compte, la mise à jour des informations personnelles, la réinitialisation du mot de passe et la résolution des problèmes de connexion. Si ton compte est verrouillé ou restreint, le support peut vérifier ton statut.</p>
        </div>
        <div class="info-card">
          <h4>Dépôts &amp; Paiements</h4>
          <p>Assistance pour les dépôts échoués, les questions sur les méthodes de paiement, les options de devises et la vérification du statut des transactions. Le support peut aussi t'aider si un dépôt n'apparaît pas dans ton solde.</p>
        </div>
        <div class="info-card">
          <h4>Retraits &amp; Paiements</h4>
          <p>Questions sur les délais de traitement des retraits, les demandes en attente, les paiements refusés et les ajustements de limites. Pour des informations détaillées sur les retraits, consulte la <a href="/withdrawal">page Retraits</a>.</p>
        </div>
        <div class="info-card">
          <h4>Bonus &amp; Promotions</h4>
          <p>Clarifications sur les conditions des bonus, les exigences de mise, l'activation des offres et l'annulation des bonus actifs. Le support peut expliquer les détails spécifiques des promotions et les conditions d'éligibilité.</p>
        </div>
        <div class="info-card">
          <h4>Vérification &amp; KYC</h4>
          <p>Conseils sur la soumission des documents, le statut de vérification, les types de documents acceptés et les estimations de délais. Tu peux télécharger tes documents dans les paramètres de ton compte, mais le support peut t'aider en cas de problème.</p>
        </div>
        <div class="info-card">
          <h4>Problèmes Techniques</h4>
          <p>Aide pour les jeux qui ne se chargent pas, les erreurs du site, les problèmes de compatibilité mobile et les problèmes liés au navigateur. Le support peut diagnostiquer et signaler les bugs techniques à l'équipe de développement.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Contacting Support -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Tirer le Maximum de Ta Demande de Support</h2>
      <p>Quelques étapes simples peuvent aider l'équipe de support à résoudre ton problème plus rapidement :</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Aie les détails de ton compte sous la main.</strong> Ton adresse email ou nom d'utilisateur aide le support à localiser rapidement ton compte. Si le problème concerne une transaction spécifique, garde le numéro de référence à portée de main.
          </div>
        </li>
        <li>
          <div>
            <strong>Décris le problème clairement.</strong> Explique ce qui s'est passé, quand c'est arrivé et ce que tu attendais. Les captures d'écran sont utiles pour les problèmes techniques ou les transactions contestées.
          </div>
        </li>
        <li>
          <div>
            <strong>Utilise le bon canal.</strong> Pour les problèmes urgents (compte verrouillé, dépôt échoué), le live chat est ton meilleur choix. Pour l'envoi de documents ou les cas complexes nécessitant une investigation, l'email donne plus de marge à l'équipe.
          </div>
        </li>
        <li>
          <div>
            <strong>Consulte d'abord la FAQ.</strong> De nombreuses questions courantes sur les bonus, les retraits et la gestion du compte sont traitées dans les sections FAQ de ce site. Un rapide coup d'œil pourrait t'éviter l'attente.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Responsible Gambling -->
  <section class="content-section content-section--alt" id="responsible">
    <div class="container container--narrow">
      <h2>Jeu Responsable &amp; Auto-exclusion</h2>
      <p><?php echo SITE_NAME; ?> prend le jeu responsable très au sérieux. Si tu sens que tes habitudes de jeu deviennent problématiques, l'équipe de support peut t'aider à mettre en place des limites de dépôt, des périodes de réflexion ou organiser une auto-exclusion de la plateforme.</p>
      <p>Les options d'auto-exclusion vont des pauses temporaires à la fermeture définitive du compte. Une fois activée, l'auto-exclusion ne peut pas être révoquée avant l'expiration de la période définie. Contacte le support via live chat ou email pour discuter des options disponibles.</p>
      <p>Pour un soutien externe, tu peux te tourner vers des organismes comme GamCare ou Gamblers Anonymous pour des conseils et un accompagnement gratuits et confidentiels.</p>
    </div>
  </section>

  <!-- Support FAQ -->
  <section class="content-section" id="support-faq">
    <div class="container container--narrow">
      <h2>FAQ Support</h2>

      <details class="faq-item">
        <summary>Le support de <?php echo SITE_NAME; ?> est-il disponible en plusieurs langues ?</summary>
        <div class="faq-answer">
          <p>Le site prend en charge le polonais, l'anglais, le finnois, l'allemand, le hongrois, le norvégien, l'italien, l'espagnol, le tchèque et le portugais. Les agents de support peuvent généralement assister en anglais et peuvent être en mesure d'aider dans les autres langues listées selon la disponibilité.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>À quelle vitesse le live chat répond-il ?</summary>
        <div class="faq-answer">
          <p>Dans des conditions normales, les réponses du live chat arrivent en 1 à 2 minutes. Pendant les heures de pointe ou les périodes de fort trafic, les temps d'attente peuvent être légèrement plus longs, mais l'équipe travaille à maintenir les délais au minimum.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Le support peut-il m'aider à annuler un bonus ?</summary>
        <div class="faq-answer">
          <p>Oui. Si tu souhaites annuler un bonus actif, tu peux le faire toi-même depuis la section Profil de ton compte, ou contacter le support via live chat ou email. Note qu'annuler un bonus supprime le montant du bonus et tous les gains générés à partir de celui-ci.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Et si mon problème n'est pas résolu ?</summary>
        <div class="faq-answer">
          <p>Si tu n'es pas satisfait de la réponse initiale, demande que ton dossier soit transmis à un agent senior ou un superviseur. Pour les litiges non résolus, tu peux également te référer aux procédures de réclamation du casino indiquées dans les Conditions Générales.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Puis-je demander des limites de dépôt ou de perte ?</summary>
        <div class="faq-answer">
          <p>Oui. Contacte le support pour définir des limites de dépôt quotidiennes, hebdomadaires ou mensuelles. Tu peux également demander des limites de perte ou des rappels de durée de session pour t'aider à gérer ton activité de jeu.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
