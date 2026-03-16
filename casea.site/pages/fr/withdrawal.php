<?php
/**
 * Withdrawal Page - French
 */
$page_title = SITE_NAME . ' Retrait - Méthodes de Paiement, Limites & Délais de Traitement';
$page_description = 'Tout sur les retraits de ' . SITE_NAME . ' Casino : méthodes de paiement, délai de traitement jusqu\'à 72 heures, limites quotidiennes et mensuelles, vérification KYC et astuces pour accélérer ton retrait.';
$current_page = 'withdrawal';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Retraits &amp; Paiements';
$hero_description = 'Comment retirer tes gains, quelles méthodes sont disponibles, délais de traitement, limites et ce à quoi t\'attendre pendant le processus de vérification.';
$hero_cta = 'Commence à Jouer';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Aperçu des Retraits</h2>
      <p>Récupérer tes gains sur <?php echo SITE_NAME; ?> est simple une fois que tu connais les règles. Les paiements sont généralement traités dans les 72 heures et, dans la mesure du possible, le casino envoie les fonds vers la même méthode utilisée pour le dépôt. Si cette méthode ne prend pas en charge les transactions entrantes, les fonds seront envoyés sur ton compte bancaire.</p>
      <p>Avant de demander ton premier retrait, tu devras compléter une vérification KYC (Know Your Customer) et t'assurer d'avoir satisfait l'exigence minimale de rollover du dépôt.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Retrait Min.</h4>
          <p>EUR 10 sur toutes les méthodes de paiement. Les montants inférieurs à ce seuil ne peuvent pas être traités.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Limite Quotidienne</h4>
          <p>EUR 500 pour les comptes standards. Les membres VIP peuvent retirer jusqu'à EUR 1 500 par jour.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Limite Mensuelle</h4>
          <p>EUR 7 000 pour les nouveaux joueurs. Les membres VIP bénéficient d'un maximum de EUR 20 000 par mois.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Payment Methods Table -->
  <section class="content-section content-section--alt" id="methods">
    <div class="container">
      <h2>Méthodes de Paiement</h2>
      <p>Les méthodes disponibles pour le retrait dépendent de ton pays et de la façon dont tu as déposé. En général, <?php echo SITE_NAME; ?> traite les paiements vers la méthode de dépôt d'origine lorsque c'est possible.</p>

      <table class="data-table">
        <thead>
          <tr>
            <th>Méthode</th>
            <th>Retrait Min.</th>
            <th>Délai de Traitement</th>
            <th>Notes</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Visa / Mastercard</td>
            <td>&euro;10</td>
            <td>1-3 jours ouvrables</td>
            <td>Restitué sur la carte utilisée pour le dépôt</td>
          </tr>
          <tr>
            <td>Skrill</td>
            <td>&euro;10</td>
            <td>Jusqu'à 24 heures</td>
            <td>Traitement rapide, largement disponible</td>
          </tr>
          <tr>
            <td>Neteller</td>
            <td>&euro;10</td>
            <td>Jusqu'à 24 heures</td>
            <td>Disponible dans la plupart des régions</td>
          </tr>
          <tr>
            <td>Virement Bancaire</td>
            <td>&euro;20</td>
            <td>2-5 jours ouvrables</td>
            <td>Utilisé comme alternative lorsque la méthode d'origine n'est pas disponible</td>
          </tr>
          <tr>
            <td>Bitcoin</td>
            <td>&euro;10</td>
            <td>Jusqu'à 24 heures</td>
            <td>Nécessite des confirmations blockchain après le traitement du casino</td>
          </tr>
          <tr>
            <td>Ethereum</td>
            <td>&euro;10</td>
            <td>Jusqu'à 24 heures</td>
            <td>Les paiements crypto sont généralement parmi les plus rapides</td>
          </tr>
          <tr>
            <td>Litecoin / Tether / Ripple</td>
            <td>&euro;10</td>
            <td>Jusqu'à 24 heures</td>
            <td>Vérifie la disponibilité pour ta région</td>
          </tr>
        </tbody>
      </table>

      <p>Devises acceptées pour les transactions : EUR, USD, CAD, AUD, CHF, HUF, NOK, PLN, NZD, CZK, BRL, CLP et PEN.</p>
    </div>
  </section>

  <!-- How to Withdraw -->
  <section class="content-section" id="how-to">
    <div class="container">
      <h2>Comment Effectuer un Retrait</h2>
      <p>Suis ces étapes pour demander un paiement depuis ton compte <?php echo SITE_NAME; ?> :</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Complète l'exigence de rollover.</strong> Avant ton premier retrait, ton dépôt doit être misé au moins 1x. Si tu as réclamé un bonus, complète d'abord l'intégralité de l'exigence de mise. Ne pas le faire pourrait entraîner une commission de 10% sur le retrait.
          </div>
        </li>
        <li>
          <div>
            <strong>Ouvre la caisse.</strong> Navigue vers la section retraits de ton compte. Tu la trouveras dans le menu principal ou dans la zone des paramètres du compte.
          </div>
        </li>
        <li>
          <div>
            <strong>Sélectionne ta méthode de paiement et le montant.</strong> Choisis parmi les options disponibles et saisis le montant que tu souhaites retirer. Assure-toi qu'il respecte les limites autorisées.
          </div>
        </li>
        <li>
          <div>
            <strong>Attends le traitement.</strong> Le casino examine chaque demande et traite généralement les paiements dans les 3 jours ouvrables. Tu seras contacté si des documents supplémentaires sont nécessaires.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- KYC Verification -->
  <section class="content-section content-section--alt" id="verification">
    <div class="container">
      <h2>Vérification du Compte (KYC)</h2>
      <p><?php echo SITE_NAME; ?> exige une vérification d'identité avant d'approuver les demandes de retrait. Il s'agit d'une procédure standard dans le secteur, conçue pour prévenir la fraude et respecter les réglementations anti-blanchiment d'argent.</p>

      <div class="two-col">
        <div>
          <h3>Documents Requis</h3>
          <ul>
            <li>Une pièce d'identité délivrée par le gouvernement (passeport, permis de conduire ou carte d'identité nationale)</li>
            <li>Justificatif de domicile (facture de services ou relevé bancaire, daté de moins de 3 mois)</li>
            <li>Vérification du moyen de paiement (photo carte de crédit/débit, capture d'écran e-wallet ou confirmation de portefeuille crypto)</li>
          </ul>
          <p>Tu disposes de 30 jours à compter de la demande initiale de documents pour les soumettre. Si tu ne les fournis pas dans ce délai, ton compte pourrait être fermé.</p>
        </div>
        <div>
          <h3>Délai de Vérification</h3>
          <p>Le délai standard de traitement pour la vérification des documents est de 10 jours ouvrables maximum, bien que cela puisse prendre plus de temps dans des cas exceptionnels. Le casino peut utiliser des services de vérification tiers ou demander des contrôles supplémentaires comme un appel vidéo ou une vérification téléphonique.</p>
          <p>Tu peux télécharger tes documents dans la section « Paramètres - Vérification du Compte » de ton profil. Prends des photos claires et bien éclairées pour éviter les retards causés par des documents illisibles.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Faster Payouts -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Astuces pour des Retraits plus Rapides</h2>

      <div class="highlight-box">
        <h4>Accélère Ton Retrait sur <?php echo SITE_NAME; ?></h4>
        <p>Suis ces bonnes pratiques pour minimiser les délais de paiement et récupérer tes gains plus vite.</p>
      </div>

      <h3>1. Choisis les e-wallets ou les cryptomonnaies</h3>
      <p>Skrill, Neteller et les options crypto comme Bitcoin ou Ethereum sont généralement traités plus rapidement que les transferts par carte ou virement bancaire. Si la rapidité est ta priorité, dépose avec l'une de ces méthodes pour que ton retrait puisse être renvoyé par le même canal.</p>

      <h3>2. Vérifie ton compte en avance</h3>
      <p>N'attends pas ton premier retrait pour soumettre tes documents. Télécharge ta pièce d'identité, ton justificatif de domicile et la vérification de ton moyen de paiement dès ton inscription. Ainsi, quand tu seras prêt à retirer, il n'y aura aucun délai lié à une vérification en attente.</p>

      <h3>3. Complète l'exigence de mise avant de demander</h3>
      <p>Si tu as un bonus actif, assure-toi que toutes les exigences de mise sont entièrement remplies. Demander un retrait alors qu'un bonus est encore actif annulera le bonus et tous les gains associés. Si tu n'as joué qu'avec les fonds déposés, rappelle-toi le rollover 1x qui doit être complété pour éviter la commission supplémentaire.</p>

      <h3>4. Reste dans les limites</h3>
      <p>Les demandes de retrait qui dépassent la limite quotidienne ou mensuelle seront refusées. Planifie tes retraits en conséquence : EUR 500 par jour pour les comptes standards, EUR 1 500 par jour pour les membres VIP.</p>

      <h3>5. Utilise ta méthode de dépôt d'origine</h3>
      <p><?php echo SITE_NAME; ?> préfère renvoyer les fonds vers la même méthode utilisée pour le dépôt. Utiliser une méthode différente pourrait déclencher des vérifications supplémentaires et ralentir le processus.</p>
    </div>
  </section>

  <!-- Withdrawal FAQ -->
  <section class="content-section content-section--alt" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>FAQ Retraits</h2>

      <details class="faq-item">
        <summary>Combien de temps prend un retrait sur <?php echo SITE_NAME; ?> ?</summary>
        <div class="faq-answer">
          <p>Les retraits sont traités dans les 72 heures (3 jours ouvrables). Les e-wallets et les cryptomonnaies sont généralement les plus rapides, souvent finalisés dans les 24 heures suivant le traitement par le casino. Les virements bancaires et les paiements par carte peuvent prendre 1 à 5 jours ouvrables supplémentaires du côté du prestataire.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quel est le retrait minimum sur <?php echo SITE_NAME; ?> ?</summary>
        <div class="faq-answer">
          <p>Le montant minimum de retrait est de EUR 10 pour toutes les méthodes de paiement. Les montants inférieurs ne peuvent pas être demandés.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quel est le maximum que je peux retirer par mois ?</summary>
        <div class="faq-answer">
          <p>Les joueurs standards peuvent retirer jusqu'à EUR 7 000 par mois. Les membres VIP ont accès à une limite augmentée de EUR 20 000 mensuels. Des limites quotidiennes s'appliquent également : EUR 500 pour les comptes standards, EUR 1 500 pour les VIP.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Pourquoi mon retrait a-t-il été refusé ?</summary>
        <div class="faq-answer">
          <p>Les raisons courantes incluent : exigences de mise incomplètes, compte non vérifié, dépassement des limites quotidiennes ou mensuelles, ou demande de paiement vers une méthode différente de celle du dépôt. Contacte le support pour des informations spécifiques sur ton cas.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Y a-t-il des frais sur les retraits ?</summary>
        <div class="faq-answer">
          <p>Il n'y a pas de frais standard sur les retraits. Cependant, si tu ne satisfais pas l'exigence de rollover 1x du dépôt avant de retirer, une commission de 10% pourrait être appliquée. Complète toujours le rollover minimum pour éviter cette commission.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Puis-je annuler un retrait en attente ?</summary>
        <div class="faq-answer">
          <p>Selon l'étape de traitement, tu pourrais être en mesure d'annuler une demande de retrait en attente. Contacte le support client via live chat pour obtenir de l'aide pour l'annulation.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
