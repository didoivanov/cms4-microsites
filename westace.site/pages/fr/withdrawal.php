<?php
/**
 * Withdrawal Page - WestAce (French / FR)
 */
$page_title = 'WestAce Retrait - Méthodes de Retrait, Limites & Délais de Traitement';
$page_description = 'Tout sur les retraits chez ' . SITE_NAME . ' Casino : méthodes de paiement, délais de traitement, limites journalières et mensuelles, vérification KYC et conseils pour des retraits rapides.';
$current_page = 'withdrawal';
$lang_prefix = '/fr';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Retrait &amp; Paiements';
$hero_description = 'Comment retirer vos gains, quelles méthodes sont disponibles, les délais de traitement, les limites et ce à quoi vous attendre lors de la vérification.';
$hero_cta = 'Jouer Maintenant';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Aperçu des Retraits</h2>
      <p>Retirer vos gains chez <?php echo SITE_NAME; ?> est simple et sans frais. Toutes les demandes de retrait sont traitées sous 24 à 72 heures selon la méthode de paiement. Les fonds sont renvoyés sur la même méthode utilisée pour votre dépôt dans la mesure du possible. Vous devez compléter la vérification KYC avant votre premier retrait.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Retrait Minimum</h4>
          <p>10 &euro; pour toutes les méthodes de paiement. Les montants inférieurs à ce seuil ne peuvent pas être traités.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Délai de Traitement</h4>
          <p>24-72 heures pour la plupart des méthodes. Les virements bancaires peuvent prendre 1 à 3 jours ouvrés.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Limites de Retrait</h4>
          <p>500 &euro; par jour, 7 000 &euro; par mois. Les membres VIP peuvent bénéficier de limites plus élevées.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Payment Methods Table -->
  <section class="content-section content-section--alt" id="methods">
    <div class="container">
      <h2>Méthodes de Paiement</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Le tableau ci-dessous présente toutes les options de dépôt et de retrait chez <?php echo SITE_NAME; ?>. Les retraits sont effectués sur la méthode de dépôt d'origine dans la mesure du possible. Tous les dépôts et retraits sont sans frais de notre côté.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-payments-screen.png" alt="Méthodes de dépôt et retrait <?php echo SITE_NAME; ?> Casino incluant Visa, Mastercard, Revolut, Skrill et crypto" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div class="data-table-wrap">
        <table class="data-table">
          <thead>
            <tr>
              <th>Méthode</th>
              <th>Dépôt Min</th>
              <th>Dépôt Max</th>
              <th>Retrait Min</th>
              <th>Retrait Max</th>
              <th>Traitement</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Mastercard</td>
              <td>10 &euro;</td>
              <td>2 000 &euro;</td>
              <td>10 &euro;</td>
              <td>3 000 &euro;</td>
              <td>24-72 heures</td>
            </tr>
            <tr>
              <td>Paysafecard</td>
              <td>10 &euro;</td>
              <td>1 000 &euro;</td>
              <td colspan="2">Dépôt uniquement</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Visa</td>
              <td colspan="2">Retrait uniquement</td>
              <td>10 &euro;</td>
              <td>3 000 &euro;</td>
              <td>24-72 heures</td>
            </tr>
            <tr>
              <td>Virement Bancaire</td>
              <td colspan="2">Retrait uniquement</td>
              <td>10 &euro;</td>
              <td>5 000 &euro;</td>
              <td>1-3 jours ouvrés</td>
            </tr>
            <tr>
              <td>Skrill</td>
              <td>10 &euro;</td>
              <td>5 000 &euro;</td>
              <td>10 &euro;</td>
              <td>5 000 &euro;</td>
              <td>24-72 heures</td>
            </tr>
            <tr>
              <td>Neteller</td>
              <td>10 &euro;</td>
              <td>5 000 &euro;</td>
              <td colspan="2">Dépôt uniquement</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Bitcoin (BTC)</td>
              <td>10 &euro;</td>
              <td>5 000 &euro;</td>
              <td>10 &euro;</td>
              <td>5 000 &euro;</td>
              <td>24-72 heures</td>
            </tr>
            <tr>
              <td>Ethereum (ETH)</td>
              <td>10 &euro;</td>
              <td>5 000 &euro;</td>
              <td>10 &euro;</td>
              <td>5 000 &euro;</td>
              <td>24-72 heures</td>
            </tr>
            <tr>
              <td>Tether (USDT)</td>
              <td>10 &euro;</td>
              <td>5 000 &euro;</td>
              <td>10 &euro;</td>
              <td>5 000 &euro;</td>
              <td>24-72 heures</td>
            </tr>
            <tr>
              <td>Litecoin (LTC)</td>
              <td>10 &euro;</td>
              <td>5 000 &euro;</td>
              <td>10 &euro;</td>
              <td>5 000 &euro;</td>
              <td>24-72 heures</td>
            </tr>
            <tr>
              <td>Ripple (XRP)</td>
              <td>10 &euro;</td>
              <td>5 000 &euro;</td>
              <td>10 &euro;</td>
              <td>5 000 &euro;</td>
              <td>24-72 heures</td>
            </tr>
            <tr>
              <td>USD Coin (USDC)</td>
              <td>10 &euro;</td>
              <td>5 000 &euro;</td>
              <td>10 &euro;</td>
              <td>5 000 &euro;</td>
              <td>24-72 heures</td>
            </tr>
            <tr>
              <td>Bitcoin Cash (BCH)</td>
              <td>10 &euro;</td>
              <td>5 000 &euro;</td>
              <td>10 &euro;</td>
              <td>5 000 &euro;</td>
              <td>24-72 heures</td>
            </tr>
            <tr>
              <td>Dogecoin (DOGE)</td>
              <td>10 &euro;</td>
              <td>5 000 &euro;</td>
              <td>10 &euro;</td>
              <td>5 000 &euro;</td>
              <td>24-72 heures</td>
            </tr>
            <tr>
              <td>Cardano (ADA)</td>
              <td>10 &euro;</td>
              <td>5 000 &euro;</td>
              <td>10 &euro;</td>
              <td>5 000 &euro;</td>
              <td>24-72 heures</td>
            </tr>
          </tbody>
        </table>
      </div>

      <p style="margin-top: var(--space-4);">La gamme exacte de méthodes de paiement peut varier selon votre région. Les transactions en cryptomonnaie nécessitent des confirmations sur la blockchain après le traitement par le casino.</p>
    </div>
  </section>

  <!-- Rollover Requirement -->
  <section class="content-section" id="rollover">
    <div class="container container--narrow">
      <h2>Exigence de Mise sur les Dépôts</h2>
      <p><?php echo SITE_NAME; ?> applique une exigence de mise de 1x sur tous les dépôts. Cela signifie que vous devez miser vos fonds déposés au moins une fois avant de demander un retrait. Cette condition est distincte des exigences de mise liées aux bonus.</p>
      <p>Si vous demandez un retrait sans avoir rempli la condition de mise 1x, une commission sera déduite :</p>
      <ul>
        <li><strong>Commission de 10 %</strong> sur le montant du dépôt pour les retraits par portefeuille électronique et crypto</li>
        <li><strong>Commission de 15 %</strong> sur le montant du dépôt pour les retraits par carte bancaire et virement</li>
      </ul>
      <p>Pour éviter ces frais, il suffit de jouer votre dépôt une fois avant de demander un retrait. Un seul tour de mise, quel que soit le montant, suffit pour remplir cette condition.</p>
    </div>
  </section>

  <!-- How to Withdraw -->
  <section class="content-section content-section--alt" id="how-to">
    <div class="container">
      <h2>Comment Effectuer un Retrait</h2>
      <p>Suivez ces étapes pour demander un retrait depuis votre compte <?php echo SITE_NAME; ?> :</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Remplissez les exigences de mise actives.</strong> Si vous avez réclamé un bonus, l'intégralité des exigences de mise doit être complétée avant de pouvoir retirer. Assurez-vous également d'avoir rempli la condition de mise 1x sur votre dépôt.
          </div>
        </li>
        <li>
          <div>
            <strong>Ouvrez la caisse.</strong> Rendez-vous dans la section retrait de votre compte. Vous la trouverez dans le menu principal ou dans les paramètres de votre compte.
          </div>
        </li>
        <li>
          <div>
            <strong>Sélectionnez votre méthode de paiement et le montant.</strong> Choisissez parmi les options disponibles et saisissez le montant que vous souhaitez retirer. Le minimum est de 10 &euro; pour toutes les méthodes. La limite journalière est de 500 &euro;, la limite mensuelle est de 7 000 &euro;.
          </div>
        </li>
        <li>
          <div>
            <strong>Attendez le traitement.</strong> <?php echo SITE_NAME; ?> traite les retraits sous 24 à 72 heures. Les virements bancaires peuvent prendre 1 à 3 jours ouvrés. Vous serez contacté si des documents supplémentaires sont nécessaires pour la vérification.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- KYC Verification -->
  <section class="content-section" id="verification">
    <div class="container">
      <h2>Vérification de Compte (KYC)</h2>
      <p><?php echo SITE_NAME; ?> exige une vérification d'identité avant d'approuver les demandes de retrait. Il s'agit d'une procédure standard destinée à prévenir la fraude et à respecter la réglementation anti-blanchiment. Les documents sont approuvés sous 30 jours, et le processus de vérification prend jusqu'à 10 jours après soumission.</p>

      <div class="two-col">
        <div>
          <h3>Documents Requis</h3>
          <ul>
            <li><strong>Pièce d'identité</strong> -- passeport, permis de conduire ou carte nationale d'identité</li>
            <li><strong>Selfie avec pièce d'identité</strong> -- une photo de vous tenant le document d'identité</li>
            <li><strong>Justificatif de domicile</strong> -- facture de services publics ou relevé bancaire datant de moins de 3 mois</li>
            <li><strong>Origine des fonds</strong> -- document attestant la provenance de vos fonds de jeu (exigence anti-blanchiment)</li>
          </ul>
          <p>Vous disposez de 30 jours pour soumettre les documents demandés. Votre compte peut être restreint tant que la vérification n'est pas terminée.</p>
        </div>
        <div>
          <h3>Conseils pour une Vérification Rapide</h3>
          <ul>
            <li>Téléchargez vos documents dès votre inscription, plutôt que d'attendre votre premier retrait</li>
            <li>Assurez-vous que les quatre coins de votre pièce d'identité sont visibles sur la photo</li>
            <li>Pour le selfie, vérifiez que votre visage et le texte de la pièce d'identité sont clairement lisibles</li>
            <li>Utilisez une facture de services publics ou un relevé bancaire récent comme justificatif de domicile</li>
            <li>Si vos documents sont refusés, vérifiez que les images ne sont pas floues et que les documents ne sont pas expirés</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Faster Payouts -->
  <section class="content-section content-section--alt" id="tips">
    <div class="container container--narrow">
      <h2>Conseils pour des Retraits Rapides</h2>

      <h3>1. Choisissez les portefeuilles électroniques ou les cryptomonnaies</h3>
      <p>Skrill et les options crypto comme Bitcoin, Ethereum et Tether sont généralement les plus rapides. Si la rapidité est votre priorité, effectuez votre dépôt avec l'une de ces méthodes pour que votre retrait puisse être renvoyé par le même canal.</p>

      <h3>2. Vérifiez votre compte rapidement</h3>
      <p>N'attendez pas votre premier retrait pour soumettre vos documents. Téléchargez votre pièce d'identité, selfie, justificatif de domicile et origine des fonds dès votre inscription. Ainsi, lorsque vous serez prêt à encaisser, aucun retard lié à la vérification ne vous freinera.</p>

      <h3>3. Remplissez la condition de mise sur le dépôt</h3>
      <p>Assurez-vous d'avoir misé votre dépôt au moins une fois avant de demander un retrait. Ne pas respecter cette condition entraîne une commission de 10 à 15 % sur le montant du dépôt.</p>

      <h3>4. Utilisez votre méthode de dépôt d'origine</h3>
      <p><?php echo SITE_NAME; ?> préfère renvoyer les fonds sur la même méthode utilisée pour le dépôt. Utiliser une méthode différente peut déclencher des vérifications supplémentaires et ralentir le processus.</p>
    </div>
  </section>

  <!-- Fees -->
  <section class="content-section" id="fees">
    <div class="container container--narrow">
      <h2>Frais de Retrait</h2>
      <p><?php echo SITE_NAME; ?> ne facture aucun frais pour les dépôts ou les retraits. Cependant, votre fournisseur de paiement ou votre banque peut appliquer ses propres frais de transaction, frais de conversion de devises ou frais intermédiaires. Vérifiez auprès de votre fournisseur de paiement pour connaître les éventuels frais tiers applicables.</p>
      <p>Remarque : si vous effectuez un retrait sans avoir rempli la condition de mise 1x sur le dépôt, une commission de 10 % (15 % pour les cartes bancaires et virements) sera appliquée sur le montant du dépôt. Il ne s'agit pas de frais de retrait mais d'une pénalité de mise.</p>
    </div>
  </section>

  <!-- Withdrawal FAQ -->
  <section class="content-section content-section--alt" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>FAQ Retraits</h2>

      <details class="faq-item">
        <summary>Combien de temps prend un retrait chez <?php echo SITE_NAME; ?> ?</summary>
        <div class="faq-answer">
          <p>La plupart des retraits sont traités sous 24 à 72 heures. Les portefeuilles électroniques et les cryptomonnaies sont généralement les plus rapides. Les virements bancaires peuvent prendre 1 à 3 jours ouvrés supplémentaires côté fournisseur.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quel est le retrait minimum chez <?php echo SITE_NAME; ?> ?</summary>
        <div class="faq-answer">
          <p>Le montant minimum de retrait est de 10 &euro; pour toutes les méthodes de paiement.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quelles sont les limites de retrait ?</summary>
        <div class="faq-answer">
          <p>Les limites standard sont de 500 &euro; par jour et 7 000 &euro; par mois. Les limites par transaction dépendent de la méthode : Visa et Mastercard sont plafonnées à 3 000 &euro; par transaction, tandis que Skrill, les virements bancaires et toutes les cryptomonnaies permettent jusqu'à 5 000 &euro;. Les joueurs VIP peuvent bénéficier de limites plus élevées.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Pourquoi mon retrait a-t-il été refusé ?</summary>
        <div class="faq-answer">
          <p>Les raisons courantes incluent : exigences de mise incomplètes, condition de mise sur le dépôt non remplie, compte non vérifié, dépassement des limites journalières ou mensuelles, ou demande de retrait vers une méthode différente de celle du dépôt. Contactez le support pour des informations sur votre situation.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Y a-t-il des frais de retrait ?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> ne facture pas de frais de retrait. Votre fournisseur de paiement peut appliquer ses propres frais. Si vous retirez sans avoir rempli la condition de mise 1x sur le dépôt, une commission de 10 % (15 % pour les cartes bancaires et virements) s'applique sur le montant du dépôt.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Puis-je annuler un retrait en attente ?</summary>
        <div class="faq-answer">
          <p>Selon l'étape de traitement, il peut être possible d'annuler une demande de retrait en attente. Contactez le support client via le chat en direct pour obtenir de l'aide.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
