<?php
/**
 * Bonuses Page - French
 */
$page_title = SITE_NAME . ' Bonus - Bonus de Bienvenue, Tours Gratuits, Codes Promo & Offres Sans Dépôt';
$page_description = 'Tous les bonus de ' . SITE_NAME . ' Casino en un seul endroit. Bonus de bienvenue jusqu\'à EUR 500 + 200 tours gratuits, codes promo sans dépôt, offres de recharge hebdomadaires, cashback et récompenses VIP.';
$current_page = 'bonuses';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Bonus Casino';
$hero_description = 'Toutes les promotions actives, offres de bienvenue et récompenses de fidélité actuellement disponibles. Assure-toi de lire les conditions avant de réclamer une offre.';
$hero_cta = 'Réclame Ton Bonus';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Welcome Bonuses -->
  <section class="content-section" id="welcome">
    <div class="container">
      <h2>Bonus de Bienvenue pour les Nouveaux Joueurs</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <p style="margin-top:0">Les nouveaux déposants sur <?php echo SITE_NAME; ?> peuvent choisir parmi plusieurs offres de bienvenue selon qu'ils préfèrent les jeux de casino ou les paris sportifs. Chaque option est disponible sur ton tout premier dépôt et ne peut pas être combinée avec d'autres promotions.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/casea-bonuses.png" alt="<?php echo SITE_NAME; ?> Casino promotions et offres de bonus de bienvenue" style="max-width:300px;width:100%;">
        </div>
      </div>

      <!-- Casino Welcome -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">100% jusqu'à &euro;500 + 200 Tours Gratuits</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Dépose un minimum de EUR 20 pour recevoir un bonus de 100% sur ton premier dépôt, plafonné à EUR 500. En plus, 200 tours gratuits sont distribués par lots de 20 par jour pendant 10 jours consécutifs. Le premier lot est disponible juste après ton dépôt. Tu dois réclamer chaque série dans les 24 heures, sinon elle expire. Un dépôt d'au moins EUR 10 te donne également 1 crédit Bonus Crab pour un essai à la Claw Machine, où les prix incluent des pièces, des tours gratuits, des bonus ou des récompenses en espèces.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Dépôt Min.</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Exigence de Mise</div>
            <div class="bonus-detail__value">35x (bonus + dépôt)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Mise Tours Gratuits</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validité</div>
            <div class="bonus-detail__value">10 jours</div>
          </div>
          <div>
            <div class="bonus-detail__label">Mise Max.</div>
            <div class="bonus-detail__value">&euro;5</div>
          </div>
        </div>
      </div>

      <!-- Multi-Deposit Welcome -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">250% jusqu'à &euro;3 000 + 350 Tours Gratuits</div>
          <span class="bonus-card__tag">Pack 4 Dépôts</span>
        </div>
        <p>Un pack de bienvenue multi-dépôts réparti sur tes quatre premiers dépôts. Le premier dépôt te donne 100% jusqu'à EUR 1 000 + 200 tours gratuits. Le deuxième offre un bonus de 75% jusqu'à EUR 500. Le troisième ajoute 50% jusqu'à EUR 500 + 50 tours gratuits, et le quatrième complète le tout avec 25% jusqu'à EUR 1 000 + 100 tours gratuits.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Dépôt Min.</div>
            <div class="bonus-detail__value">&euro;20 par dépôt</div>
          </div>
          <div>
            <div class="bonus-detail__label">Exigence de Mise</div>
            <div class="bonus-detail__value">35x par bonus</div>
          </div>
          <div>
            <div class="bonus-detail__label">Retrait Max.</div>
            <div class="bonus-detail__value">10x le montant du bonus</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validité</div>
            <div class="bonus-detail__value">10 jours par bonus</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Bonus Sport 100% jusqu'à &euro;100</div>
          <span class="bonus-card__tag">Sport</span>
        </div>
        <p>Les parieurs sportifs peuvent obtenir un bonus de 100% sur leur premier dépôt. Le bonus maximum varie selon la région : les joueurs de Finlande, d'Allemagne, de Norvège, de Suisse et d'Autriche peuvent recevoir jusqu'à EUR 200. Les joueurs italiens reçoivent jusqu'à EUR 150. Les joueurs du Kazakhstan, d'Ouzbékistan, du Kirghizistan, du Tadjikistan, de Géorgie et d'Azerbaïdjan peuvent obtenir jusqu'à EUR 50. Pour activer le bonus, le montant total du dépôt doit être misé sur des paris sportifs avec des cotes d'au moins 1,50.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Dépôt Min.</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Exigence de Mise</div>
            <div class="bonus-detail__value">5x ou 6x (par pays)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Cote Min.</div>
            <div class="bonus-detail__value">2.0 simples / 1.5 combinés</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validité</div>
            <div class="bonus-detail__value">30 jours</div>
          </div>
        </div>
      </div>

      <div class="highlight-box">
        <h4>Code Promo <?php echo SITE_NAME; ?></h4>
        <p>Si tu as un code promo, tu peux le saisir pendant l'inscription. Le champ du code apparaît sur le formulaire d'inscription juste après avoir sélectionné ton bonus de bienvenue préféré. Les codes promo peuvent débloquer des offres spéciales ou des conditions de bonus modifiées, donc ça vaut la peine de vérifier avant de déposer.</p>
      </div>
    </div>
  </section>

  <!-- Reload & Weekly -->
  <section class="content-section content-section--alt" id="reload">
    <div class="container">
      <h2>Bonus de Recharge Hebdomadaires</h2>
      <p><?php echo SITE_NAME; ?> continue avec les promotions après la phase de bienvenue. Ces offres récurrentes se renouvellent chaque semaine, donc les joueurs actifs ont toujours quelque chose à réclamer.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">66 Tours Gratuits Hebdomadaires</div>
          <span class="bonus-card__tag">Lundi - Jeudi</span>
        </div>
        <p>Effectue un dépôt de EUR 20 ou plus entre lundi et jeudi pour recevoir 66 tours gratuits sur une machine à sous en vedette. Tu dois adhérer à l'offre chaque semaine avant de déposer. Les tours doivent être utilisés dans les 7 jours et les gains ont une exigence de mise de 40x avec une fenêtre de 10 jours pour la compléter. Mise maximale pendant le bonus actif : EUR 5.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Recharge Weekend : 50% jusqu'à &euro;777 + 77 Tours Gratuits</div>
          <span class="bonus-card__tag">Vendredi - Dimanche</span>
        </div>
        <p>Dépose au moins EUR 20 le weekend pour obtenir un bonus de 50% jusqu'à EUR 777. Si ton dépôt est de EUR 50 ou plus, tu reçois aussi 77 tours gratuits sur une machine à sous sélectionnée. L'adhésion est requise avant le dépôt. L'exigence de mise est de 35x sur le dépôt plus le bonus et de 40x sur les gains des tours gratuits. Tu as 10 jours pour compléter les exigences.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Recharge Sport Hebdomadaire : 55% jusqu'à &euro;750</div>
          <span class="bonus-card__tag">Sport</span>
        </div>
        <p>Une fois par semaine, ton plus gros dépôt se qualifie pour un bonus sportif de 55% jusqu'à EUR 750. Le dépôt doit être joué une fois sur des paris sportifs avec des cotes de 1,50 ou plus avant que le bonus ne soit crédité. Tu peux ensuite le réclamer via live chat ou email. Les exigences de mise doivent être complétées dans les 30 jours et le retrait maximum de ce bonus est de 10x sa valeur.</p>
      </div>
    </div>
  </section>

  <!-- Cashback -->
  <section class="content-section" id="cashback">
    <div class="container">
      <h2>Programmes Cashback</h2>
      <p><?php echo SITE_NAME; ?> propose trois programmes cashback distincts : cashback quotidien pour les jeux de casino, cashback hebdomadaire pour le casino en direct et cashback hebdomadaire pour les paris sportifs. Chaque programme a ses propres conditions et processus de réclamation.</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Cashback Casino Quotidien</h4>
          <p>Disponible à partir du niveau VIP 2. VIP 2 reçoit 3% jusqu'à EUR 100 par jour. VIP 3 reçoit 5% jusqu'à EUR 200. VIP 4 reçoit 10% jusqu'à EUR 300. VIP 5 reçoit 15% jusqu'à EUR 400. Le cashback est crédité automatiquement à 04h00 UTC et nécessite une mise de 1x. Tu dois adhérer toutes les 4 semaines.</p>
        </div>
        <div class="info-card">
          <h4>Cashback Casino en Direct : 25% jusqu'à &euro;350</h4>
          <p>Cashback hebdomadaire sur les pertes nettes des jeux du casino en direct. La perte minimale pour se qualifier est de EUR 5. Contacte le support client le lundi après 06h00 UTC (avant 23h59 UTC) pour le réclamer. Une fois crédité, le cashback nécessite une mise de 1x avant retrait.</p>
        </div>
        <div class="info-card">
          <h4>Cashback Sport : 10% jusqu'à &euro;500</h4>
          <p>Couvre les pertes nettes sur les paris sportifs du lundi au dimanche. Perte minimale de EUR 20 pour se qualifier. Contacte le support le lundi pour le réclamer. Le cashback a une exigence de mise de 3x et ne peut être utilisé que dans la section Sport.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sports Promos -->
  <section class="content-section content-section--alt" id="sports-promos">
    <div class="container">
      <h2>Promotions Paris Sportifs</h2>
      <p>Au-delà du bonus de bienvenue et du cashback, les paris sportifs proposent plusieurs outils conçus pour ajouter de la valeur à tes mises.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Boost Accumulateur : jusqu'à 100%</div>
        </div>
        <p>Place un pari combiné avec 3 sélections ou plus à des cotes de 1,40+ chacune et tes gains reçoivent un boost. Le multiplicateur commence à 3% pour 3 sélections et monte jusqu'à 100% pour 21 ou plus. Seules les mises en argent réel comptent. Demander un retrait avant que le bonus ne soit crédité l'annulera.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Paiement Anticipé avec 2 Buts d'Avance</div>
        </div>
        <p>Si ton équipe prend une avance de 2 buts, ton pari pré-match 1X2 est payé intégralement -- pas besoin d'attendre le coup de sifflet final. Cette offre s'applique uniquement aux paris sur la victoire à domicile ou à l'extérieur. Les paris en direct et les paris sur le nul sont exclus, et le cash out annulera le paiement anticipé.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Bet Builder : 50% Sans Risque jusqu'à &euro;50</div>
        </div>
        <p>Place un Bet Builder avec des cotes de 1,70 ou plus en utilisant au moins EUR 20 en argent réel. Si tu perds, tu reçois un pari gratuit de 50% de ta mise (jusqu'à EUR 50). Disponible une fois par semaine. Le pari gratuit doit être utilisé dans les 3 jours et a une exigence de mise de 3x à des cotes de 1,50+.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Cotes Améliorées</div>
        </div>
        <p>Certains marchés pré-match 1X2 sélectionnés proposent occasionnellement des cotes améliorées. Cherche l'indicateur « Enhanced Prices » dans la description du marché. Les gains des paris à cotes améliorées sont payés en argent réel sans exigence de mise supplémentaire.</p>
      </div>
    </div>
  </section>

  <!-- VIP, Shop, Crab -->
  <section class="content-section" id="vip">
    <div class="container">
      <h2>Programme VIP &amp; Extras</h2>
      <div class="two-col">
        <div>
          <h3>Programme VIP</h3>
          <p><?php echo SITE_NAME; ?> propose un programme de fidélité multi-niveaux dans lequel tu progresses en fonction de ton activité de jeu. Au fur et à mesure que tu montes en grade, tu débloques des avantages comme un gestionnaire de compte personnel, des limites de retrait accrues, des offres de bonus exclusives et des pourcentages de cashback plus élevés. Les niveaux VIP les plus élevés donnent accès aux meilleurs cashbacks hebdomadaires et à un traitement plus rapide des paiements.</p>

          <h3>Bonus Crab</h3>
          <p>Chaque dépôt de EUR 20 ou plus te donne 1 crédit Bonus Crab. Utilise-le pour « attraper » un prix aléatoire à la Claw Machine -- les récompenses possibles incluent de l'argent bonus, des tours gratuits ou des pièces. C'est un petit bonus quotidien qui ajoute un peu de variété à tes sessions.</p>
        </div>
        <div>
          <h3>Boutique Exclusive</h3>
          <p>Les pièces gagnées grâce au jeu, aux défis et aux promotions peuvent être dépensées dans la boutique. Les récompenses vont des tours gratuits sur des machines à sous sélectionnées (ex. 5 tours sur Sweet Bonanza pour 30 pièces) à de l'argent bonus (EUR 5 pour 50 pièces, jusqu'à EUR 250 pour 1 200 pièces). C'est un excellent moyen de convertir ta fidélité en récompenses concrètes à ton rythme.</p>

          <h3>Défis</h3>
          <p>Les défis hebdomadaires te récompensent pour l'atteinte d'objectifs simples. Les défis casino peuvent te demander de placer des mises de EUR 0,30 sur des machines à sous spécifiques, tandis que les défis sportifs peuvent exiger des mises de EUR 15 sur des matchs avec des cotes minimales de 2,0. Chaque défi complété rapporte des pièces, et en terminer 20 dans une semaine donne un bonus de 50 pièces.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- No-Deposit Info -->
  <section class="content-section content-section--alt" id="no-deposit">
    <div class="container container--narrow">
      <h2>Bonus Sans Dépôt <?php echo SITE_NAME; ?></h2>
      <p>Pour le moment, <?php echo SITE_NAME; ?> ne propose pas de bonus sans dépôt classique. Cependant, la fonctionnalité Bonus Crab récompense chaque dépôt de EUR 10 ou plus avec un essai gratuit à la Claw Machine, où tu peux gagner des tours, de l'argent bonus, des pièces ou des récompenses en espèces sans aucune exigence de mise supplémentaire sur le prix initial. C'est ce qui se rapproche le plus d'un bonus sans dépôt actuellement disponible sur la plateforme.</p>
      <p>Garde un œil sur la section Promotions et reviens régulièrement, car le casino renouvelle fréquemment ses offres et pourrait introduire des offres sans dépôt ou des codes bonus gratuits à l'avenir.</p>
    </div>
  </section>

  <!-- Bonus FAQ -->
  <section class="content-section" id="bonus-faq">
    <div class="container container--narrow">
      <h2>FAQ Bonus</h2>

      <details class="faq-item">
        <summary>Puis-je utiliser un code promo sur <?php echo SITE_NAME; ?> ?</summary>
        <div class="faq-answer">
          <p>Oui. Lors de l'inscription, tu verras une option pour saisir un code promo après avoir sélectionné ton bonus de bienvenue préféré. Si tu as un code valide, entre-le à cet endroit pour activer les avantages associés.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Puis-je combiner plusieurs bonus ?</summary>
        <div class="faq-answer">
          <p>Non. Les bonus de bienvenue et les promotions de recharge ne peuvent pas être cumulés. Tu dois compléter ou annuler tout bonus actif avant d'en réclamer un nouveau. Certains bonus peuvent être annulés depuis la section Profil ou en contactant le support.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Que se passe-t-il si je demande un retrait avant d'avoir complété l'exigence de mise ?</summary>
        <div class="faq-answer">
          <p>Demander un retrait avant d'avoir complété les exigences de mise annulera le bonus et tous les gains associés. Assure-toi d'avoir entièrement satisfait le rollover avant de demander un paiement.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Tous les jeux contribuent-ils de la même façon aux exigences de mise ?</summary>
        <div class="faq-answer">
          <p>Non. Les différents types de jeux contribuent à des taux différents. Les machines à sous contribuent généralement à 100%, tandis que les jeux de table et les titres du casino en direct peuvent contribuer moins. Consulte les conditions du bonus pour le tableau de contribution exact.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Les dépôts via Skrill et Neteller sont-ils éligibles aux bonus ?</summary>
        <div class="faq-answer">
          <p>Dans la plupart des cas, les dépôts effectués via Skrill ou Neteller ne sont pas éligibles aux bonus de bienvenue. Vérifie les conditions de la promotion spécifique pour d'éventuelles exceptions.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
