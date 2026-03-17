<?php
/**
 * Withdrawal Page - French
 */
$page_title = SITE_NAME . ' Retrait - M&eacute;thodes de paiement, limites et d&eacute;lais de traitement';
$page_description = 'Tout savoir sur les retraits ' . SITE_NAME . ' Casino : m&eacute;thodes de paiement, traitement sous 7 jours ouvrables, limites journali&egrave;res et mensuelles, v&eacute;rification KYC et conseils pour retirer plus vite.';
$current_page = 'withdrawal';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Retrait &amp; Paiements';
$hero_description = 'Comment retirer vos gains, quelles m&eacute;thodes sont disponibles, d&eacute;lais de traitement, limites et ce &agrave; quoi vous attendre lors de la v&eacute;rification.';
$hero_cta = 'Jouer maintenant';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Aper&ccedil;u des retraits</h2>
      <p>Retirer vos gains sur <?php echo SITE_NAME; ?> est un processus simple une fois que vous connaissez les r&egrave;gles. Le casino traite les demandes de retrait sous 72 heures les jours ouvrables. Notez que <?php echo SITE_NAME; ?> ne traite pas les retraits le week-end -- les demandes soumises du vendredi soir au dimanche seront trait&eacute;es &agrave; partir du lundi suivant.</p>
      <p>Dans la mesure du possible, les fonds sont renvoy&eacute;s vers la m&eacute;thode utilis&eacute;e pour votre d&eacute;p&ocirc;t. Si cette m&eacute;thode ne prend pas en charge les transactions entrantes, le montant sera transf&eacute;r&eacute; sur votre compte bancaire. Avant votre premier retrait, vous devez compl&eacute;ter la v&eacute;rification KYC et remplir l'exigence minimale de mise du d&eacute;p&ocirc;t.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Retrait minimum</h4>
          <p>&euro;20 pour toutes les m&eacute;thodes de paiement. Les montants inf&eacute;rieurs &agrave; ce seuil ne peuvent pas &ecirc;tre trait&eacute;s.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Limite journali&egrave;re</h4>
          <p>&euro;700 pour les comptes standard. Les membres VIP peuvent retirer jusqu'&agrave; &euro;1 500 par jour.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Limite mensuelle</h4>
          <p>&euro;9 000 pour les joueurs standard. Les membres VIP profitent de limites hebdomadaires de &euro;7 000 et mensuelles de &euro;28 000.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Payment Methods Table -->
  <section class="content-section content-section--alt" id="methods">
    <div class="container">
      <h2>M&eacute;thodes de retrait</h2>
      <div class="two-col" style="align-items:flex-start;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p style="margin-top:0">Les m&eacute;thodes disponibles pour le retrait d&eacute;pendent de votre pays et de la fa&ccedil;on dont vous avez effectu&eacute; votre d&eacute;p&ocirc;t. En g&eacute;n&eacute;ral, <?php echo SITE_NAME; ?> traite les paiements vers la m&eacute;thode de d&eacute;p&ocirc;t d'origine lorsque c'est possible.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-payments.png" alt="<?php echo SITE_NAME; ?> Casino payment methods including Jeton, MiFinity, eZeeWallet, Bitcoin, Ethereum, Tether, Ripple and more" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>

      <table class="data-table">
        <thead>
          <tr>
            <th>M&eacute;thode</th>
            <th>Retrait min.</th>
            <th>D&eacute;lai de traitement</th>
            <th>Notes</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Visa / Mastercard</td>
            <td>&euro;20</td>
            <td>1-5 jours ouvrables</td>
            <td>Renvoy&eacute; sur la carte utilis&eacute;e pour le d&eacute;p&ocirc;t</td>
          </tr>
          <tr>
            <td>Skrill</td>
            <td>&euro;20</td>
            <td>Jusqu'&agrave; 24 heures</td>
            <td>Traitement rapide, largement disponible</td>
          </tr>
          <tr>
            <td>Neteller</td>
            <td>&euro;20</td>
            <td>Jusqu'&agrave; 24 heures</td>
            <td>Disponible dans la plupart des r&eacute;gions</td>
          </tr>
          <tr>
            <td>Jeton</td>
            <td>&euro;20</td>
            <td>Jusqu'&agrave; 24 heures</td>
            <td>Portefeuille &eacute;lectronique avec une large couverture</td>
          </tr>
          <tr>
            <td>MiFinity</td>
            <td>&euro;20</td>
            <td>Jusqu'&agrave; 24 heures</td>
            <td>Portefeuille num&eacute;rique pour des paiements rapides</td>
          </tr>
          <tr>
            <td>eZeeWallet</td>
            <td>&euro;20</td>
            <td>Jusqu'&agrave; 24 heures</td>
            <td>V&eacute;rifiez la disponibilit&eacute; dans votre r&eacute;gion</td>
          </tr>
          <tr>
            <td>Bank Transfer</td>
            <td>&euro;20</td>
            <td>3-7 jours ouvrables</td>
            <td>Solution de repli lorsque la m&eacute;thode d'origine n'est pas disponible</td>
          </tr>
          <tr>
            <td>Bitcoin</td>
            <td>&euro;20</td>
            <td>Jusqu'&agrave; 24 heures</td>
            <td>N&eacute;cessite des confirmations blockchain apr&egrave;s le traitement du casino</td>
          </tr>
          <tr>
            <td>Ethereum</td>
            <td>&euro;20</td>
            <td>Jusqu'&agrave; 24 heures</td>
            <td>Parmi les options de retrait les plus rapides</td>
          </tr>
          <tr>
            <td>Tether (USDT)</td>
            <td>&euro;20</td>
            <td>Jusqu'&agrave; 24 heures</td>
            <td>Stablecoin pour une fluctuation de prix minimale</td>
          </tr>
          <tr>
            <td>Ripple (XRP)</td>
            <td>&euro;20</td>
            <td>Jusqu'&agrave; 24 heures</td>
            <td>R&egrave;glement blockchain rapide</td>
          </tr>
          <tr>
            <td>USD Coin (USDC)</td>
            <td>&euro;20</td>
            <td>Jusqu'&agrave; 24 heures</td>
            <td>Alternative stablecoin au USDT</td>
          </tr>
          <tr>
            <td>Cardano (ADA)</td>
            <td>&euro;20</td>
            <td>Jusqu'&agrave; 24 heures</td>
            <td>V&eacute;rifiez la disponibilit&eacute; dans votre r&eacute;gion</td>
          </tr>
          <tr>
            <td>Dogecoin</td>
            <td>&euro;20</td>
            <td>Jusqu'&agrave; 24 heures</td>
            <td>Retraits crypto &agrave; frais r&eacute;duits</td>
          </tr>
          <tr>
            <td>Litecoin</td>
            <td>&euro;20</td>
            <td>Jusqu'&agrave; 24 heures</td>
            <td>Temps de bloc plus rapide que Bitcoin</td>
          </tr>
          <tr>
            <td>Bitcoin Cash</td>
            <td>&euro;20</td>
            <td>Jusqu'&agrave; 24 heures</td>
            <td>Frais r&eacute;duits par rapport au Bitcoin standard</td>
          </tr>
          <tr>
            <td>Solana (SOL)</td>
            <td>&euro;20</td>
            <td>Jusqu'&agrave; 24 heures</td>
            <td>Blockchain haute vitesse avec des frais tr&egrave;s bas</td>
          </tr>
        </tbody>
      </table>

      <p>Devises accept&eacute;es pour les transactions : EUR, CHF, USD, CAD, AUD, NZD, PLN, BRL, NOK, ZAR, CZK, HUF et CLP.</p>
    </div>
  </section>

  <!-- How to Withdraw -->
  <section class="content-section" id="how-to">
    <div class="container">
      <h2>Comment effectuer un retrait</h2>
      <p>Suivez ces &eacute;tapes pour demander un retrait depuis votre compte <?php echo SITE_NAME; ?> :</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Remplissez l'exigence de mise.</strong> Avant votre premier retrait, votre d&eacute;p&ocirc;t doit avoir &eacute;t&eacute; mis&eacute; au moins 1x. Si vous avez r&eacute;clam&eacute; un bonus, compl&eacute;tez d'abord l'int&eacute;gralit&eacute; des conditions de mise. Ne pas le faire peut entra&icirc;ner des frais de retrait.
          </div>
        </li>
        <li>
          <div>
            <strong>Ouvrez la caisse.</strong> Rendez-vous dans la section retrait de votre compte. Vous la trouverez dans le menu principal ou dans les param&egrave;tres de votre compte.
          </div>
        </li>
        <li>
          <div>
            <strong>Choisissez votre m&eacute;thode de paiement et le montant.</strong> S&eacute;lectionnez parmi les options disponibles et saisissez le montant que vous souhaitez retirer. Assurez-vous qu'il respecte les limites autoris&eacute;es.
          </div>
        </li>
        <li>
          <div>
            <strong>Attendez le traitement.</strong> <?php echo SITE_NAME; ?> traite les retraits uniquement les jours ouvrables (du lundi au vendredi). Comptez jusqu'&agrave; 72 heures pour le traitement standard. Les demandes soumises le week-end seront trait&eacute;es &agrave; partir du lundi. Vous serez contact&eacute; si des documents suppl&eacute;mentaires sont n&eacute;cessaires.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- KYC Verification -->
  <section class="content-section content-section--alt" id="verification">
    <div class="container">
      <h2>V&eacute;rification du compte (KYC)</h2>
      <p><?php echo SITE_NAME; ?> exige une v&eacute;rification d'identit&eacute; avant d'approuver les demandes de retrait. Il s'agit d'une proc&eacute;dure standard dans le secteur, con&ccedil;ue pour pr&eacute;venir la fraude et respecter les r&eacute;glementations anti-blanchiment.</p>

      <div class="two-col">
        <div>
          <h3>Documents requis</h3>
          <ul>
            <li>Une pi&egrave;ce d'identit&eacute; officielle (passeport, permis de conduire ou carte nationale d'identit&eacute;)</li>
            <li>Un justificatif de domicile (facture de services publics ou relev&eacute; bancaire, dat&eacute; de moins de 3 mois)</li>
            <li>Une v&eacute;rification de la m&eacute;thode de paiement (photo de carte bancaire, capture d'&eacute;cran du portefeuille &eacute;lectronique ou confirmation du portefeuille crypto)</li>
          </ul>
          <p>Vous disposez de 30 jours &agrave; compter de la demande initiale de documents pour soumettre vos pi&egrave;ces. Si vous ne les fournissez pas dans ce d&eacute;lai, votre compte pourra &ecirc;tre ferm&eacute;.</p>
        </div>
        <div>
          <h3>D&eacute;lai de v&eacute;rification</h3>
          <p>Le d&eacute;lai standard de traitement des documents est de 10 jours ouvrables maximum, bien qu'il puisse &ecirc;tre plus long dans des cas exceptionnels. Le casino peut utiliser des services de v&eacute;rification tiers ou demander des contr&ocirc;les suppl&eacute;mentaires comme un appel vid&eacute;o ou une v&eacute;rification t&eacute;l&eacute;phonique.</p>
          <p>Vous pouvez t&eacute;l&eacute;charger vos documents dans la section "Settings - Account Verification" de votre profil. Prenez des photos nettes et bien &eacute;clair&eacute;es pour &eacute;viter les retards caus&eacute;s par des documents illisibles.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Large Wins -->
  <section class="content-section" id="large-wins">
    <div class="container container--narrow">
      <h2>Gros gains &amp; traitement prolong&eacute;</h2>
      <div class="highlight-box">
        <h4>Retraits sup&eacute;rieurs &agrave; &euro;5 000</h4>
        <p>Les gains sup&eacute;rieurs &agrave; &euro;5 000 peuvent n&eacute;cessiter un examen suppl&eacute;mentaire et prendre plus de temps que le d&eacute;lai de traitement standard. Le casino se r&eacute;serve le droit de fractionner les gros paiements en plusieurs versements en fonction des limites journali&egrave;res et hebdomadaires applicables. Les membres VIP avec des limites plus &eacute;lev&eacute;es peuvent b&eacute;n&eacute;ficier d'un traitement acc&eacute;l&eacute;r&eacute; pour les montants importants.</p>
      </div>
      <p>Si votre retrait d&eacute;passe &euro;5 000, l'&eacute;quipe <?php echo SITE_NAME; ?> peut demander des documents de v&eacute;rification suppl&eacute;mentaires ou effectuer un examen renforc&eacute;. C'est une pratique courante pour les transactions importantes, con&ccedil;ue pour prot&eacute;ger le joueur et le casino.</p>
    </div>
  </section>

  <!-- Tips for Faster Payouts -->
  <section class="content-section content-section--alt" id="tips">
    <div class="container container--narrow">
      <h2>Conseils pour des retraits plus rapides</h2>

      <h3>1. Choisissez les portefeuilles &eacute;lectroniques ou les cryptomonnaies</h3>
      <p>Skrill, Neteller, Jeton, MiFinity et les options crypto comme Bitcoin, Ethereum ou Solana sont g&eacute;n&eacute;ralement trait&eacute;es plus rapidement que les virements bancaires ou par carte. Avec 10 cryptomonnaies accept&eacute;es, <?php echo SITE_NAME; ?> offre l'une des plus larges s&eacute;lections de paiements crypto disponibles. Si la rapidit&eacute; est votre priorit&eacute;, effectuez votre d&eacute;p&ocirc;t via l'une de ces m&eacute;thodes pour que le retrait puisse &ecirc;tre renvoy&eacute; par le m&ecirc;me canal.</p>

      <h3>2. V&eacute;rifiez votre compte rapidement</h3>
      <p>N'attendez pas votre premier retrait pour soumettre vos documents. T&eacute;l&eacute;chargez votre pi&egrave;ce d'identit&eacute;, votre justificatif de domicile et la v&eacute;rification de votre moyen de paiement d&egrave;s votre inscription. Ainsi, lorsque vous serez pr&ecirc;t &agrave; retirer vos gains, il n'y aura pas de retard li&eacute; &agrave; une v&eacute;rification en cours.</p>

      <h3>3. Compl&eacute;tez les conditions de mise avant de demander un retrait</h3>
      <p>Si vous avez un bonus actif, assurez-vous que toutes les conditions de mise sont enti&egrave;rement remplies. Demander un retrait alors qu'un bonus est encore actif annulera le bonus et tous les gains associ&eacute;s. Si vous avez jou&eacute; uniquement avec des fonds d&eacute;pos&eacute;s, n'oubliez pas la mise 1x qui doit &ecirc;tre compl&eacute;t&eacute;e pour &eacute;viter des frais suppl&eacute;mentaires.</p>

      <h3>4. Respectez les limites</h3>
      <p>Les demandes de retrait qui d&eacute;passent le plafond journalier ou mensuel seront refus&eacute;es. Planifiez vos retraits en cons&eacute;quence : &euro;700 par jour pour les comptes standard, &euro;1 500 par jour pour les membres VIP. Les limites hebdomadaires sont de &euro;2 250 (standard) et &euro;7 000 (VIP).</p>

      <h3>5. Soumettez vos demandes en semaine</h3>
      <p><?php echo SITE_NAME; ?> ne traite pas les retraits le week-end. Soumettre votre demande en d&eacute;but de semaine donne &agrave; l'&eacute;quipe le plus de temps pour la traiter avant le week-end. Les demandes faites le vendredi soir ou pendant le week-end ne seront pas trait&eacute;es avant le lundi.</p>

      <h3>6. Utilisez votre m&eacute;thode de d&eacute;p&ocirc;t d'origine</h3>
      <p><?php echo SITE_NAME; ?> pr&eacute;f&egrave;re renvoyer les fonds vers la m&eacute;thode utilis&eacute;e pour votre d&eacute;p&ocirc;t. Utiliser une m&eacute;thode diff&eacute;rente peut d&eacute;clencher des v&eacute;rifications suppl&eacute;mentaires et ralentir le processus.</p>
    </div>
  </section>

  <!-- Fees -->
  <section class="content-section" id="fees">
    <div class="container container--narrow">
      <h2>Frais de retrait</h2>
      <p><?php echo SITE_NAME; ?> ne facture aucun frais de retrait. Toutefois, votre prestataire de paiement ou votre banque peut appliquer ses propres frais de transaction, de conversion de devise ou de frais interm&eacute;diaires. V&eacute;rifiez aupr&egrave;s de votre prestataire de paiement les &eacute;ventuels frais tiers applicables aux virements entrants.</p>
      <p>Si vous ne remplissez pas l'exigence de mise 1x du d&eacute;p&ocirc;t avant de retirer, des frais de traitement peuvent &ecirc;tre appliqu&eacute;s. Compl&eacute;tez toujours la mise minimale d'abord pour &eacute;viter ces frais.</p>
    </div>
  </section>

  <!-- Withdrawal FAQ -->
  <section class="content-section content-section--alt" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>FAQ Retraits</h2>

      <details class="faq-item">
        <summary>Combien de temps prend un retrait <?php echo SITE_NAME; ?> ?</summary>
        <div class="faq-answer">
          <p>Les retraits sont trait&eacute;s sous 72 heures les jours ouvrables. <?php echo SITE_NAME; ?> ne traite pas les retraits le week-end, donc dans le pire des cas, un paiement peut prendre jusqu'&agrave; 7 jours ouvrables entre la soumission et la r&eacute;ception. Les portefeuilles &eacute;lectroniques et les cryptomonnaies sont g&eacute;n&eacute;ralement les plus rapides, souvent finalis&eacute;s dans les 24 heures suivant le traitement du casino. Les virements bancaires et les paiements par carte peuvent prendre 1 &agrave; 5 jours ouvrables suppl&eacute;mentaires du c&ocirc;t&eacute; du prestataire.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quel est le retrait minimum chez <?php echo SITE_NAME; ?> ?</summary>
        <div class="faq-answer">
          <p>Le montant minimum de retrait est de &euro;20 pour toutes les m&eacute;thodes de paiement. Les montants inf&eacute;rieurs ne peuvent pas &ecirc;tre demand&eacute;s.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quel est le montant maximum que je peux retirer par mois ?</summary>
        <div class="faq-answer">
          <p>Les joueurs standard peuvent retirer jusqu'&agrave; &euro;9 000 par mois (&euro;700 par jour, &euro;2 250 par semaine). Les membres VIP ont acc&egrave;s &agrave; des limites plus &eacute;lev&eacute;es : &euro;1 500 par jour, &euro;7 000 par semaine et &euro;28 000 par mois.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary><?php echo SITE_NAME; ?> traite-t-il les retraits le week-end ?</summary>
        <div class="faq-answer">
          <p>Non. Le traitement des retraits a lieu uniquement les jours ouvrables (du lundi au vendredi). Les demandes soumises le week-end seront trait&eacute;es &agrave; partir du lundi suivant.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Pourquoi mon retrait a-t-il &eacute;t&eacute; refus&eacute; ?</summary>
        <div class="faq-answer">
          <p>Les raisons courantes incluent : des conditions de mise incompl&egrave;tes, un compte non v&eacute;rifi&eacute;, un d&eacute;passement des limites journali&egrave;res, hebdomadaires ou mensuelles, ou une demande de retrait vers une m&eacute;thode diff&eacute;rente de celle du d&eacute;p&ocirc;t. Contactez le support pour des informations sp&eacute;cifiques &agrave; votre cas.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Y a-t-il des frais de retrait ?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> ne facture pas de frais de retrait. Votre prestataire de paiement peut appliquer ses propres frais pour la r&eacute;ception des fonds. Si vous n'avez pas rempli la condition de mise 1x du d&eacute;p&ocirc;t avant de demander un retrait, des frais de traitement peuvent &ecirc;tre appliqu&eacute;s.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Que se passe-t-il pour les gros gains sup&eacute;rieurs &agrave; &euro;5 000 ?</summary>
        <div class="faq-answer">
          <p>Les retraits sup&eacute;rieurs &agrave; &euro;5 000 peuvent n&eacute;cessiter une v&eacute;rification suppl&eacute;mentaire et prendre plus de temps &agrave; traiter. Le casino peut fractionner les gros paiements en versements selon vos limites journali&egrave;res et hebdomadaires. Les membres VIP b&eacute;n&eacute;ficient g&eacute;n&eacute;ralement d'un traitement plus rapide pour les montants importants.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Puis-je annuler un retrait en attente ?</summary>
        <div class="faq-answer">
          <p>Selon le stade de traitement, vous pourrez peut-&ecirc;tre annuler une demande de retrait en cours. Contactez le service client par live chat pour obtenir de l'aide avec l'annulation.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
