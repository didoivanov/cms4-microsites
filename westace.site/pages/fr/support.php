<?php
/**
 * Support Page - WestAce (French / FR)
 */
$page_title = 'WestAce Support Client - Live Chat 24/7 & Email';
$page_description = 'Contactez le support client ' . SITE_NAME . ' Casino via le chat en direct 24/7 ou par email à support@westace.com. Aide pour les dépôts, retraits, bonus, problèmes de compte et questions techniques.';
$current_page = 'support';
$lang_prefix = '/fr';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Support Client';
$hero_description = 'Nous sommes là pour répondre à toutes vos questions concernant votre compte, vos dépôts, retraits, bonus ou problèmes techniques. Contactez-nous à tout moment.';
$hero_cta = 'Ouvrir le Chat en Direct';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Contact Options -->
  <section class="content-section" id="contact">
    <div class="container">
      <h2>Comment Nous Contacter</h2>
      <p><?php echo SITE_NAME; ?> propose deux canaux de support pour que vous puissiez toujours obtenir de l'aide quand vous en avez besoin. Que vous ayez une question rapide sur une promotion ou besoin d'aide pour résoudre un problème de paiement, notre équipe est disponible 24 heures sur 24.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128172;</div>
          <h4>Chat en Direct</h4>
          <p>Le moyen le plus rapide d'obtenir de l'aide. Cliquez sur l'icône de chat sur n'importe quelle page pour démarrer une conversation avec un agent du support. Nos agents répondent généralement en moins de 5 minutes. Disponible 24 heures sur 24, 7 jours sur 7.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9993;</div>
          <h4>Support par Email</h4>
          <p>Pour les questions détaillées ou l'envoi de documents, l'email est la meilleure option. Envoyez votre demande à <strong>support@westace.com</strong> et attendez une réponse sous 24 heures. Incluez les détails de votre compte et une description claire du problème.</p>
        </div>
      </div>

      <table class="data-table" style="margin-top: var(--space-8);">
        <thead>
          <tr>
            <th>Canal</th>
            <th>Disponibilité</th>
            <th>Délai de Réponse</th>
            <th>Idéal Pour</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Chat en Direct</td>
            <td>24/7</td>
            <td>Moins de 5 minutes</td>
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
      <h2>Sur Quoi le Support Peut-il Vous Aider ?</h2>
      <p>Notre équipe de support client traite un large éventail de sujets. Voici les domaines les plus courants pour lesquels les joueurs nous contactent :</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Compte &amp; Inscription</h4>
          <p>Aide pour la création de compte, la mise à jour des informations personnelles, la réinitialisation du mot de passe et la résolution des problèmes de connexion. Si votre compte est verrouillé ou restreint, le support peut examiner votre situation.</p>
        </div>
        <div class="info-card">
          <h4>Dépôts &amp; Paiements</h4>
          <p>Assistance en cas de dépôts échoués, questions sur les méthodes de paiement et vérification du statut des transactions. Le support peut également vous aider si un dépôt n'apparaît pas sur votre solde.</p>
        </div>
        <div class="info-card">
          <h4>Retraits &amp; Paiements</h4>
          <p>Questions sur les délais de traitement des retraits, les demandes en attente et les retraits refusés. Pour des informations détaillées sur les retraits, consultez la page <a href="<?php echo $lang_prefix; ?>/withdrawal">Retrait</a>.</p>
        </div>
        <div class="info-card">
          <h4>Bonus &amp; Promotions</h4>
          <p>Clarification sur les conditions des bonus, les exigences de mise, l'activation des offres et l'annulation des bonus actifs. Le support peut expliquer les détails spécifiques des promotions et les conditions d'éligibilité.</p>
        </div>
        <div class="info-card">
          <h4>Vérification &amp; KYC</h4>
          <p>Conseils sur la soumission de documents, le statut de vérification, les types de documents acceptés et les estimations de délais. Le support peut vous assister en cas de problème lors du processus de vérification.</p>
        </div>
        <div class="info-card">
          <h4>Problèmes Techniques</h4>
          <p>Aide pour les jeux qui ne se chargent pas, les erreurs du site, les problèmes de compatibilité mobile et les soucis liés au navigateur. Le support peut diagnostiquer et transmettre les bugs techniques à l'équipe de développement.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Contacting Support -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Optimiser Votre Demande de Support</h2>
      <p>Quelques étapes simples peuvent aider notre équipe de support à résoudre votre problème plus rapidement :</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Ayez vos identifiants de compte à portée de main.</strong> Votre nom d'utilisateur ou adresse email aide le support à localiser votre compte rapidement. Si le problème concerne une transaction spécifique, gardez le numéro de référence sous la main.
          </div>
        </li>
        <li>
          <div>
            <strong>Décrivez le problème clairement.</strong> Expliquez ce qui s'est passé, quand cela s'est produit et ce que vous attendiez. Les captures d'écran sont utiles pour les problèmes techniques ou les transactions contestées.
          </div>
        </li>
        <li>
          <div>
            <strong>Utilisez le bon canal.</strong> Pour les problèmes urgents (compte verrouillé, dépôt échoué), le chat en direct est votre meilleure option. Pour l'envoi de documents ou les dossiers complexes nécessitant une investigation, l'email à support@westace.com donne à l'équipe plus de marge pour travailler.
          </div>
        </li>
        <li>
          <div>
            <strong>Consultez d'abord la FAQ.</strong> De nombreuses questions courantes sur les bonus, les retraits et la gestion de compte sont traitées dans les sections FAQ de ce site.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Responsible Gambling -->
  <section class="content-section content-section--alt" id="responsible">
    <div class="container container--narrow">
      <h2>Jeu Responsable &amp; Auto-Exclusion</h2>
      <p><?php echo SITE_NAME; ?> prend le jeu responsable au sérieux. Si vous estimez que vos habitudes de jeu deviennent problématiques, notre équipe de support peut vous aider à organiser une auto-exclusion de la plateforme.</p>
      <p>L'auto-exclusion est disponible pour une durée déterminée ou de manière permanente. Une fois activée, l'auto-exclusion ne peut pas être annulée avant l'expiration de la période définie. Pendant la période d'auto-exclusion, vous ne pourrez ni vous connecter ni placer de paris. Contactez le support via le chat en direct ou par email à support@westace.com pour demander une auto-exclusion.</p>

      <h3>Auto-Évaluation</h3>
      <p>Posez-vous les questions suivantes pour évaluer si le jeu affecte votre vie :</p>
      <ul>
        <li>Vos dépenses de jeu commencent-elles à échapper à votre contrôle ?</li>
        <li>Empruntez-vous de l'argent pour continuer à jouer ?</li>
        <li>Passez-vous moins de temps avec votre famille et vos amis ?</li>
        <li>Les remarques de votre entourage sur vos habitudes de jeu vous dérangent-elles ?</li>
        <li>Avez-vous perdu l'intérêt pour vos loisirs ou activités habituels ?</li>
        <li>Vous sentez-vous déprimé ou anxieux à cause de pertes au jeu ?</li>
        <li>Avez-vous déjà menti sur le temps ou l'argent que vous consacrez au jeu ?</li>
      </ul>
      <p>Si vous avez répondu oui à plusieurs de ces questions, nous vous recommandons de contacter un organisme d'aide :</p>
      <ul>
        <li><strong>Joueurs Info Service</strong> -- aide et information sur les problèmes de jeu -- <a href="https://www.joueurs-info-service.fr" target="_blank" rel="noopener noreferrer">joueurs-info-service.fr</a> -- 0 974 75 13 13</li>
        <li><strong>SOS Joueurs</strong> -- accompagnement et soutien pour les joueurs en difficulté -- <a href="https://www.sosjoueurs.org" target="_blank" rel="noopener noreferrer">sosjoueurs.org</a></li>
        <li><strong>Adictel</strong> -- aide en ligne pour les problèmes d'addiction au jeu -- <a href="https://www.adictel.com" target="_blank" rel="noopener noreferrer">adictel.com</a></li>
        <li><strong>IFAC</strong> -- Institut Fédératif des Addictions Comportementales -- recherche et orientation sur les addictions comportementales</li>
        <li><strong>ANJ</strong> -- Autorité Nationale des Jeux -- <a href="https://www.anj.fr" target="_blank" rel="noopener noreferrer">anj.fr</a></li>
      </ul>

      <h3>Conseils Pratiques</h3>
      <ul>
        <li>Ne considérez pas le jeu comme une source de revenus</li>
        <li>Fixez un budget en temps et en argent, et respectez-le</li>
        <li>Ne jouez qu'avec de l'argent que vous pouvez vous permettre de perdre</li>
        <li>Évitez de jouer lorsque vous êtes stressé, contrarié ou sous l'influence de l'alcool</li>
      </ul>
    </div>
  </section>

  <!-- Support FAQ -->
  <section class="content-section" id="support-faq">
    <div class="container container--narrow">
      <h2>FAQ Support</h2>

      <details class="faq-item">
        <summary>Le support <?php echo SITE_NAME; ?> est-il disponible 24h/24 ?</summary>
        <div class="faq-answer">
          <p>Oui. Le chat en direct et le support par email sont disponibles 24 heures sur 24, 7 jours sur 7.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>En combien de temps le chat en direct répond-il ?</summary>
        <div class="faq-answer">
          <p>Les agents du chat en direct répondent généralement en moins de 5 minutes. Pendant les heures de pointe, le temps d'attente peut être légèrement plus long.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quelle est l'adresse email du support ?</summary>
        <div class="faq-answer">
          <p>Vous pouvez contacter le support <?php echo SITE_NAME; ?> par email à <strong>support@westace.com</strong>. Incluez votre nom d'utilisateur ou email d'inscription, une description du problème et toute capture d'écran pertinente. Comptez une réponse sous 24 heures.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Le support peut-il m'aider à annuler un bonus ?</summary>
        <div class="faq-answer">
          <p>Oui. Si vous souhaitez annuler un bonus actif, contactez le support via le chat en direct ou par email. Sachez que l'annulation d'un bonus supprime le montant du bonus et tous les gains générés à partir de celui-ci.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Que faire si mon problème n'est pas résolu ?</summary>
        <div class="faq-answer">
          <p>Si vous n'êtes pas satisfait de la réponse initiale, demandez que votre dossier soit transmis à un agent senior. Fournissez autant de détails que possible pour aider l'équipe à examiner votre cas en profondeur.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Puis-je demander une auto-exclusion ?</summary>
        <div class="faq-answer">
          <p>Oui. Contactez le support via le chat en direct ou par email pour organiser une auto-exclusion pour une durée déterminée ou de manière permanente. Pendant l'auto-exclusion, vous ne pouvez ni vous connecter ni placer de paris.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
