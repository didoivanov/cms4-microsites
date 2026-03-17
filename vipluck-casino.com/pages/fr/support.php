<?php
/**
 * Support Page - French
 */
$page_title = SITE_NAME . ' Service client - Live Chat, Email, Telegram & Centre d\'aide';
$page_description = 'Contactez le service client ' . SITE_NAME . ' Casino par live chat 24/7, email &agrave; support@vipluck.com ou Telegram. Aide pour les d&eacute;p&ocirc;ts, retraits, bonus, probl&egrave;mes de compte et questions techniques.';
$current_page = 'support';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Service client';
$hero_description = 'Nous sommes l&agrave; pour r&eacute;pondre &agrave; toutes vos questions sur votre compte, d&eacute;p&ocirc;ts, retraits, bonus ou probl&egrave;mes techniques. Contactez-nous &agrave; tout moment.';
$hero_cta = 'Ouvrir le Live Chat';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Contact Options -->
  <section class="content-section" id="contact">
    <div class="container">
      <h2>Comment nous contacter</h2>
      <p><?php echo SITE_NAME; ?> propose trois canaux de support pour vous permettre d'obtenir de l'aide quand vous en avez besoin. Que vous ayez une question rapide sur une promotion, besoin d'aide pour r&eacute;soudre un probl&egrave;me de paiement ou que vous pr&eacute;f&eacute;riez communiquer via une application de messagerie, l'&eacute;quipe est pr&ecirc;te &agrave; vous aider.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128172;</div>
          <h4>Live Chat</h4>
          <p>Le moyen le plus rapide d'obtenir de l'aide. Cliquez sur l'ic&ocirc;ne de chat sur n'importe quelle page du site pour d&eacute;marrer une conversation avec un agent du support. Le temps de r&eacute;ponse moyen est inf&eacute;rieur &agrave; 2 minutes pendant les heures normales. Disponible 24 heures sur 24, 7 jours sur 7.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9993;</div>
          <h4>Support par email</h4>
          <p>Pour les questions d&eacute;taill&eacute;es ou l'envoi de documents, l'email est la meilleure option. Envoyez votre demande &agrave; <strong>support@vipluck.com</strong> et attendez une r&eacute;ponse sous 24 heures. N'oubliez pas d'inclure les d&eacute;tails de votre compte et une description claire du probl&egrave;me.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9992;</div>
          <h4>Telegram</h4>
          <p><?php echo SITE_NAME; ?> dispose d'un canal Telegram officiel pour le support et les annonces. Vous pouvez y contacter l'&eacute;quipe pour des questions rapides, des mises &agrave; jour sur les promotions et une assistance g&eacute;n&eacute;rale. Le lien Telegram est disponible sur le site du casino.</p>
        </div>
      </div>

      <table class="data-table" style="margin-top: var(--space-8);">
        <thead>
          <tr>
            <th>Canal</th>
            <th>Disponibilit&eacute;</th>
            <th>Temps de r&eacute;ponse</th>
            <th>Id&eacute;al pour</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Live Chat</td>
            <td>24/7</td>
            <td>Moins de 2 minutes</td>
            <td>Questions rapides, aide bonus, probl&egrave;mes de d&eacute;p&ocirc;t</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>24/7</td>
            <td>Jusqu'&agrave; 24 heures</td>
            <td>Envoi de documents, cas d&eacute;taill&eacute;s, r&eacute;clamations</td>
          </tr>
          <tr>
            <td>Telegram</td>
            <td>24/7</td>
            <td>Variable</td>
            <td>Questions rapides, promotions, annonces</td>
          </tr>
          <tr>
            <td>T&eacute;l&eacute;phone</td>
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
      <h2>Comment le support peut vous aider</h2>
      <p>L'&eacute;quipe du service client g&egrave;re un large &eacute;ventail de sujets. Voici les domaines les plus fr&eacute;quents pour lesquels les joueurs font appel &agrave; l'assistance :</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Compte &amp; inscription</h4>
          <p>Aide pour la cr&eacute;ation de compte, la mise &agrave; jour des informations personnelles, la r&eacute;initialisation de mot de passe, la r&eacute;cup&eacute;ration de nom d'utilisateur et la r&eacute;solution des probl&egrave;mes de connexion. Si votre compte est verrouill&eacute; ou restreint, le support peut examiner votre situation.</p>
        </div>
        <div class="info-card">
          <h4>D&eacute;p&ocirc;ts &amp; paiements</h4>
          <p>Assistance pour les d&eacute;p&ocirc;ts &eacute;chou&eacute;s, les questions sur les m&eacute;thodes de paiement, les options de devise et la v&eacute;rification du statut des transactions. Le support peut aussi vous aider si un d&eacute;p&ocirc;t n'appara&icirc;t pas dans votre solde.</p>
        </div>
        <div class="info-card">
          <h4>Retraits &amp; paiements</h4>
          <p>Questions sur les d&eacute;lais de traitement des retraits, les demandes en attente, les paiements refus&eacute;s et les ajustements de limites. Notez que <?php echo SITE_NAME; ?> ne traite pas les retraits le week-end. Pour des informations d&eacute;taill&eacute;es sur les retraits, consultez la <a href="/fr/withdrawal">page Retrait</a>.</p>
        </div>
        <div class="info-card">
          <h4>Bonus &amp; promotions</h4>
          <p>Pr&eacute;cisions sur les conditions des bonus, les exigences de mise, l'activation des offres et l'annulation des bonus actifs. Le support peut vous expliquer les d&eacute;tails sp&eacute;cifiques des promotions et les conditions d'&eacute;ligibilit&eacute;.</p>
        </div>
        <div class="info-card">
          <h4>V&eacute;rification &amp; KYC</h4>
          <p>Aide pour la soumission de documents, le statut de v&eacute;rification, les types de documents accept&eacute;s et les estimations de d&eacute;lais. Vous pouvez t&eacute;l&eacute;charger vos documents dans les param&egrave;tres de votre compte, mais le support peut intervenir en cas de probl&egrave;me.</p>
        </div>
        <div class="info-card">
          <h4>Probl&egrave;mes techniques</h4>
          <p>Aide pour les jeux qui ne se chargent pas, les erreurs du site, les probl&egrave;mes de compatibilit&eacute; mobile et les soucis li&eacute;s au navigateur. Le support peut diagnostiquer et transmettre les bugs techniques &agrave; l'&eacute;quipe de d&eacute;veloppement.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Site Languages -->
  <section class="content-section" id="languages">
    <div class="container container--narrow">
      <h2>Langues disponibles</h2>
      <p>Le site <?php echo SITE_NAME; ?> est disponible en 13 langues pour servir les joueurs de plusieurs r&eacute;gions :</p>
      <div class="info-grid">
        <div class="info-card">
          <h4>Langues europ&eacute;ennes</h4>
          <ul>
            <li>English</li>
            <li>Deutsch (German)</li>
            <li>Norsk (Norwegian)</li>
            <li>Fran&ccedil;ais (French)</li>
            <li>Italiano (Italian)</li>
            <li>Espa&ntilde;ol (Spanish)</li>
            <li>Portugu&ecirc;s (Portuguese)</li>
            <li>Suomi (Finnish)</li>
            <li>&Ccaron;e&scaron;tina (Czech)</li>
          </ul>
        </div>
        <div class="info-card">
          <h4>Autres langues</h4>
          <ul>
            <li>&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940; (Greek)</li>
            <li>&#1575;&#1604;&#1593;&#1585;&#1576;&#1610;&#1577; (Arabic)</li>
            <li>Polski (Polish)</li>
            <li>Magyar (Hungarian)</li>
          </ul>
        </div>
      </div>
      <p>Les agents du support peuvent g&eacute;n&eacute;ralement assister en anglais et peuvent &ecirc;tre en mesure d'aider dans d'autres langues list&eacute;es selon la disponibilit&eacute;.</p>
    </div>
  </section>

  <!-- Tips for Contacting Support -->
  <section class="content-section content-section--alt" id="tips">
    <div class="container container--narrow">
      <h2>Tirer le meilleur parti de votre demande</h2>
      <p>Quelques gestes simples peuvent aider l'&eacute;quipe du support &agrave; r&eacute;soudre votre probl&egrave;me plus rapidement :</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Pr&eacute;parez les d&eacute;tails de votre compte.</strong> Votre nom d'utilisateur ou adresse email permet au support de localiser votre compte rapidement. Si le probl&egrave;me concerne une transaction sp&eacute;cifique, ayez le num&eacute;ro de r&eacute;f&eacute;rence sous la main.
          </div>
        </li>
        <li>
          <div>
            <strong>D&eacute;crivez le probl&egrave;me clairement.</strong> Expliquez ce qui s'est pass&eacute;, quand cela s'est produit et ce que vous attendiez. Les captures d'&eacute;cran sont utiles pour les probl&egrave;mes techniques ou les transactions contest&eacute;es.
          </div>
        </li>
        <li>
          <div>
            <strong>Utilisez le bon canal.</strong> Pour les probl&egrave;mes urgents (compte verrouill&eacute;, d&eacute;p&ocirc;t &eacute;chou&eacute;), le live chat est votre meilleure option. Pour l'envoi de documents ou les cas complexes n&eacute;cessitant une enqu&ecirc;te, l'email &agrave; support@vipluck.com donne &agrave; l'&eacute;quipe plus de marge. Pour les questions rapides ou les mises &agrave; jour promo, essayez le canal Telegram.
          </div>
        </li>
        <li>
          <div>
            <strong>Consultez d'abord la FAQ.</strong> De nombreuses questions courantes sur les bonus, les retraits et la gestion de compte sont couvertes dans les sections FAQ de ce site. Une v&eacute;rification rapide peut vous &eacute;viter l'attente.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Responsible Gambling -->
  <section class="content-section" id="responsible">
    <div class="container container--narrow">
      <h2>Jeu responsable &amp; auto-exclusion</h2>
      <p><?php echo SITE_NAME; ?> prend le jeu responsable au s&eacute;rieux. Si vous estimez que vos habitudes de jeu deviennent probl&eacute;matiques, l'&eacute;quipe du support peut vous aider &agrave; d&eacute;finir des limites de d&eacute;p&ocirc;t, des p&eacute;riodes de r&eacute;flexion ou &agrave; mettre en place une auto-exclusion de la plateforme.</p>
      <p>Les options d'auto-exclusion vont de pauses temporaires &agrave; la fermeture d&eacute;finitive du compte. Une fois activ&eacute;e, l'auto-exclusion ne peut pas &ecirc;tre annul&eacute;e avant l'expiration de la p&eacute;riode d&eacute;finie. Contactez le support via live chat, email &agrave; support@vipluck.com ou Telegram pour discuter des options disponibles.</p>
      <p>Pour un soutien externe, vous pouvez contacter des organismes comme GamCare ou Joueurs Anonymes pour des conseils gratuits et confidentiels.</p>
    </div>
  </section>

  <!-- Support FAQ -->
  <section class="content-section content-section--alt" id="support-faq">
    <div class="container container--narrow">
      <h2>FAQ Support</h2>

      <details class="faq-item">
        <summary>Le support <?php echo SITE_NAME; ?> est-il disponible en plusieurs langues ?</summary>
        <div class="faq-answer">
          <p>Le site est disponible en 13 langues : anglais, allemand, norv&eacute;gien, fran&ccedil;ais, italien, espagnol, portugais, grec, arabe, polonais, hongrois, finnois et tch&egrave;que. Les agents du support peuvent g&eacute;n&eacute;ralement assister en anglais et peuvent aider dans d'autres langues list&eacute;es selon la disponibilit&eacute;.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quel est le temps de r&eacute;ponse du live chat ?</summary>
        <div class="faq-answer">
          <p>En conditions normales, les r&eacute;ponses par live chat arrivent en 1 &agrave; 2 minutes. Pendant les heures de pointe ou les p&eacute;riodes de forte affluence, le temps d'attente peut &ecirc;tre l&eacute;g&egrave;rement plus long, mais l'&eacute;quipe s'efforce de r&eacute;duire les d&eacute;lais au minimum.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quelle est l'adresse email du support ?</summary>
        <div class="faq-answer">
          <p>Vous pouvez contacter le support <?php echo SITE_NAME; ?> par email &agrave; <strong>support@vipluck.com</strong>. Incluez votre nom d'utilisateur ou email d'inscription, une description du probl&egrave;me et toute capture d'&eacute;cran ou r&eacute;f&eacute;rence de transaction pertinente. Comptez un d&eacute;lai de r&eacute;ponse de 24 heures.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Puis-je contacter le support par Telegram ?</summary>
        <div class="faq-answer">
          <p>Oui. <?php echo SITE_NAME; ?> dispose d'un canal Telegram officiel o&ugrave; vous pouvez obtenir de l'aide, voir les promotions et recevoir des mises &agrave; jour. Le lien vers le canal officiel Telegram est disponible sur le site du casino.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Le support peut-il m'aider &agrave; annuler un bonus ?</summary>
        <div class="faq-answer">
          <p>Oui. Si vous souhaitez annuler un bonus actif, vous pouvez le faire vous-m&ecirc;me depuis la section Profil de votre compte, ou contacter le support par live chat ou email. Gardez &agrave; l'esprit que l'annulation d'un bonus supprime le montant du bonus et tous les gains g&eacute;n&eacute;r&eacute;s &agrave; partir de celui-ci.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Que faire si mon probl&egrave;me n'est pas r&eacute;solu ?</summary>
        <div class="faq-answer">
          <p>Si vous n'&ecirc;tes pas satisfait de la r&eacute;ponse initiale, demandez que votre dossier soit transmis &agrave; un agent senior ou un superviseur. Pour les litiges non r&eacute;solus, vous pouvez &eacute;galement vous r&eacute;f&eacute;rer aux proc&eacute;dures de r&eacute;clamation du casino d&eacute;crites dans les Conditions G&eacute;n&eacute;rales.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Puis-je demander des limites de d&eacute;p&ocirc;t ou de pertes ?</summary>
        <div class="faq-answer">
          <p>Oui. Contactez le support pour d&eacute;finir des limites de d&eacute;p&ocirc;t journali&egrave;res, hebdomadaires ou mensuelles. Vous pouvez aussi demander des limites de pertes ou des rappels de dur&eacute;e de session pour vous aider &agrave; g&eacute;rer votre activit&eacute; de jeu.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
