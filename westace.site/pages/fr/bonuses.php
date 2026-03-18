<?php
/**
 * Bonuses Page - WestAce (French / FR)
 */
$page_title = 'WestAce Bonus - Pack de Bienvenue jusqu\'a 2 000 € + 150 Tours Gratuits';
$page_description = 'Tous les bonus du casino ' . SITE_NAME . ' au meme endroit. Pack de bienvenue jusqu\'a 2 000 € + 150 Tours Gratuits sur 3 depots, bonus crypto, rechargements hebdomadaires, cashback quotidien, cashback casino en direct, programme VIP et plus.';
$current_page = 'bonuses';
$lang_prefix = '/fr';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Casino Bonus';
$hero_description = 'Toutes les promotions actives, offres de bienvenue et recompenses de fidelite actuellement disponibles. Veuillez lire les conditions avant de reclamer une offre.';
$hero_cta = 'Reclamez Votre Bonus';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Welcome Casino Package -->
  <section class="content-section" id="welcome">
    <div class="container">
      <h2>Pack de Bienvenue pour les Nouveaux Joueurs</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Les nouveaux joueurs sur <?php echo SITE_NAME; ?> peuvent reclamer un pack de bienvenue sur trois depots d'une valeur combinee allant jusqu'a 2 000 &euro; + 150 Tours Gratuits. Chaque depot s'accompagne d'un bonus de 100% et de 50 Tours Gratuits. Le depot minimum requis est de 20 &euro; par niveau. Aucun code promo n'est necessaire -- rendez-vous simplement a la caisse, selectionnez l'offre et effectuez votre depot qualifiant.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-bonuses-screen.png" alt="<?php echo SITE_NAME; ?> Casino page promotions montrant le bonus de bienvenue et les promotions actives" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <!-- Casino Welcome - Deposit 1 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">1er Depot : 100% jusqu'a 1 000 &euro; + 50 Tours Gratuits</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Effectuez un premier depot d'au moins 20 &euro; et recevez un bonus de 100% jusqu'a 1 000 &euro;. En prime, 50 Tours Gratuits sont credites sur une machine a sous mise en avant. L'exigence de mise est de 35x sur le montant du bonus + depot. Les gains des Tours Gratuits sont soumis a une exigence de mise distincte de 40x.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Depot Min</div>
            <div class="bonus-detail__value">20 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Mise</div>
            <div class="bonus-detail__value">35x (B+D)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Mise TG</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Tours Gratuits</div>
            <div class="bonus-detail__value">50 TG</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome - Deposit 2 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2e Depot : 100% jusqu'a 500 &euro; + 50 Tours Gratuits</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Votre deuxieme depot donne droit a un bonus de 100% jusqu'a 500 &euro;, ainsi que 50 Tours Gratuits supplementaires. Les memes exigences de mise s'appliquent que pour le bonus du premier depot.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Depot Min</div>
            <div class="bonus-detail__value">20 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Mise</div>
            <div class="bonus-detail__value">35x (B+D)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Mise TG</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Tours Gratuits</div>
            <div class="bonus-detail__value">50 TG</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome - Deposit 3 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">3e Depot : 100% jusqu'a 500 &euro; + 50 Tours Gratuits</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Le troisieme depot rapporte un bonus de 100% jusqu'a 500 &euro; et 50 Tours Gratuits. Cela porte le pack de bienvenue total a 2 000 &euro; en fonds bonus et 150 Tours Gratuits repartis sur vos trois premiers depots.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Depot Min</div>
            <div class="bonus-detail__value">20 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Mise</div>
            <div class="bonus-detail__value">35x (B+D)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Mise TG</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Tours Gratuits</div>
            <div class="bonus-detail__value">50 TG</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Crypto Welcome -->
  <section class="content-section content-section--alt" id="crypto-welcome">
    <div class="container">
      <h2>Bonus de Bienvenue Crypto</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Crypto : 200% jusqu'a 3 000 USDT</div>
          <span class="bonus-card__tag">Crypto</span>
        </div>
        <p>Si vous preferez deposer en cryptomonnaie, nous avons une offre de bienvenue dediee. Effectuez un premier depot crypto d'au moins 100 USDT et recevez un bonus de 200% jusqu'a 3 000 USDT. L'exigence de mise est de 40x sur le montant du bonus.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Depot Min</div>
            <div class="bonus-detail__value">100 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Mise</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Bonus Max</div>
            <div class="bonus-detail__value">3 000 USDT</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Weekly Reload -->
  <section class="content-section" id="weekly-reload">
    <div class="container">
      <h2>Rechargement Hebdomadaire</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Rechargement Hebdomadaire : 70 Tours Gratuits</div>
          <span class="bonus-card__tag">Lun-Jeu</span>
        </div>
        <p>Chaque semaine, du lundi au jeudi, effectuez un depot d'au moins 20 &euro; et recevez 70 Tours Gratuits sur une machine a sous selectionnee par le casino. Les gains des Tours Gratuits sont soumis a une exigence de mise de 40x et doivent etre utilises sous 10 jours.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Depot Min</div>
            <div class="bonus-detail__value">20 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Tours Gratuits</div>
            <div class="bonus-detail__value">70 TG</div>
          </div>
          <div>
            <div class="bonus-detail__label">Mise</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Expiration</div>
            <div class="bonus-detail__value">10 jours</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Weekend Reload -->
  <section class="content-section content-section--alt" id="weekend-reload">
    <div class="container">
      <h2>Bonus de Rechargement Weekend</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Weekend : 50% jusqu'a 500 &euro; + 70 Tours Gratuits</div>
          <span class="bonus-card__tag">Weekend</span>
        </div>
        <p>Lancez le weekend avec un bonus de rechargement de 50% jusqu'a 500 &euro;. Si votre depot est de 50 &euro; ou plus, vous recevez egalement 70 Tours Gratuits. Les depots inferieurs a 50 &euro; donnent toujours droit au bonus de 50%, mais les Tours Gratuits ne sont pas inclus. L'exigence de mise est de 35x sur le montant du bonus.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Depot Min</div>
            <div class="bonus-detail__value">20 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Depot Min TG</div>
            <div class="bonus-detail__value">50 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Mise</div>
            <div class="bonus-detail__value">35x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Tours Gratuits</div>
            <div class="bonus-detail__value">70 TG</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Crypto Reloads -->
  <section class="content-section" id="crypto-reloads">
    <div class="container">
      <h2>Bonus de Rechargement Crypto</h2>
      <p>Les joueurs qui deposent en cryptomonnaie beneficient d'offres de rechargement exclusives hebdomadaires et du weekend avec des pourcentages de bonus plus eleves.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Crypto Hebdomadaire : 60% jusqu'a 1 000 USDT</div>
          <span class="bonus-card__tag">Crypto</span>
        </div>
        <p>Deposez au moins 50 USDT en semaine et recevez un bonus de 60% jusqu'a 1 000 USDT. L'exigence de mise est de 30x sur le bonus. Le gain maximum de ce bonus est plafonne a 5x le montant du bonus.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Depot Min</div>
            <div class="bonus-detail__value">50 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Mise</div>
            <div class="bonus-detail__value">30x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Gain Max</div>
            <div class="bonus-detail__value">5x bonus</div>
          </div>
        </div>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Crypto Weekend : 75% jusqu'a 750 USDT + 100 TG</div>
          <span class="bonus-card__tag">Crypto</span>
        </div>
        <p>Le weekend, les depots crypto de 75 USDT ou plus donnent droit a un bonus de 75% jusqu'a 750 USDT plus 100 Tours Gratuits. Le gain maximum de ce bonus est plafonne a 5x le montant du bonus.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Depot Min</div>
            <div class="bonus-detail__value">75 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Tours Gratuits</div>
            <div class="bonus-detail__value">100 TG</div>
          </div>
          <div>
            <div class="bonus-detail__label">Gain Max</div>
            <div class="bonus-detail__value">5x bonus</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Daily Cashback -->
  <section class="content-section content-section--alt" id="cashback">
    <div class="container">
      <h2>Cashback Quotidien</h2>
      <p>Les joueurs aux niveaux VIP 2 a 5 recoivent un cashback quotidien base sur les pertes nettes des paris en argent reel au casino. Le pourcentage augmente avec votre niveau VIP et l'exigence de mise est de seulement 1x -- jouez-le une seule fois et le cashback est a vous.</p>

      <div class="data-table-wrap">
        <table class="data-table">
          <thead>
            <tr>
              <th>Niveau VIP</th>
              <th>Cashback %</th>
              <th>Cashback Min</th>
              <th>Cashback Max</th>
              <th>Mise</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Niveau 2</td>
              <td>3%</td>
              <td>1 &euro;</td>
              <td>100 &euro;</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Niveau 3</td>
              <td>5%</td>
              <td>1 &euro;</td>
              <td>200 &euro;</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Niveau 4</td>
              <td>10%</td>
              <td>1 &euro;</td>
              <td>300 &euro;</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Niveau 5</td>
              <td>15%</td>
              <td>1 &euro;</td>
              <td>400 &euro;</td>
              <td>1x</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Live Cashback -->
  <section class="content-section" id="live-cashback">
    <div class="container">
      <h2>Cashback Casino en Direct</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Cashback Live : jusqu'a 25%</div>
          <span class="bonus-card__tag">Casino en Direct</span>
        </div>
        <p>Tous les joueurs peuvent reclamer jusqu'a 25% de cashback sur les pertes nettes des jeux de casino en direct, avec un versement maximum de 300 &euro;. L'exigence de mise est de seulement 1x. Cependant, ce cashback doit etre reclame manuellement via le live chat ou par e-mail chaque lundi entre 06:00 et 23:59 UTC. Si vous manquez la fenetre de reclamation, le cashback de cette semaine est perdu.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Cashback Max</div>
            <div class="bonus-detail__value">300 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Mise</div>
            <div class="bonus-detail__value">1x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Jour de Reclamation</div>
            <div class="bonus-detail__value">Lundi</div>
          </div>
          <div>
            <div class="bonus-detail__label">Fenetre de Reclamation</div>
            <div class="bonus-detail__value">06:00-23:59 UTC</div>
          </div>
        </div>
      </div>

      <div class="highlight-box" style="margin-top: var(--space-4);">
        <h4>Comment Reclamer le Cashback Live</h4>
        <p>Contactez notre equipe de support via le live chat ou par e-mail (support@westace.com) le lundi entre 06:00 et 23:59 UTC pour demander votre cashback casino en direct. Le cashback est calcule sur vos pertes nettes de la semaine precedente et credite sur votre compte apres traitement de la demande.</p>
      </div>
    </div>
  </section>

  <!-- VIP -->
  <section class="content-section content-section--alt" id="vip">
    <div class="container">
      <h2>Programme VIP</h2>
      <p>Le programme VIP de <?php echo SITE_NAME; ?> recompense les joueurs fideles a travers cinq niveaux. En progressant dans les niveaux, vous debloquez de meilleurs taux de cashback, des limites de retrait plus elevees, des offres personnalisees et un manager VIP dedie. Le programme est ouvert a tous les joueurs inscrits.</p>

      <h3>Avantages VIP</h3>
      <ul class="check-list">
        <li>Cashback quotidien allant de 3% a 15% selon le niveau VIP</li>
        <li>Limites de depot et de retrait plus elevees aux niveaux superieurs</li>
        <li>Manager VIP personnel pour les joueurs de haut niveau</li>
        <li>Offres de bonus et promotions personnalisees</li>
        <li>Support prioritaire et traitement accelere des retraits</li>
      </ul>

      <h3>Progression des Niveaux</h3>
      <p>Les criteres de progression entre les niveaux VIP ne sont pas rendus publics. L'avancement est base sur votre activite globale au casino. Contactez notre equipe de support pour en savoir plus sur votre statut VIP actuel et ce qui est necessaire pour atteindre le niveau suivant.</p>

      <table class="quick-table">
        <tr><th>Caracteristique</th><th>Details</th></tr>
        <tr><td>Niveaux VIP</td><td>5 niveaux</td></tr>
        <tr><td>Plage de Cashback</td><td>3% (Niveau 2) a 15% (Niveau 5)</td></tr>
        <tr><td>Mise Cashback</td><td>1x</td></tr>
        <tr><td>Manager Personnel</td><td>Disponible aux niveaux superieurs</td></tr>
        <tr><td>Progression</td><td>Basee sur l'activite globale (criteres non publics)</td></tr>
      </table>
    </div>
  </section>

  <!-- No-Deposit Info -->
  <section class="content-section" id="no-deposit">
    <div class="container container--narrow">
      <h2>Bonus Sans Depot <?php echo SITE_NAME; ?></h2>
      <p>Actuellement, <?php echo SITE_NAME; ?> ne propose pas de bonus sans depot. Le pack de bienvenue necessite un premier depot minimum de 20 &euro; pour etre active. Gardez un oeil sur la section Promotions et revenez regulierement, car nous renouvelons frequemment nos offres et pourrions proposer des offres sans depot a l'avenir.</p>
    </div>
  </section>

  <!-- Bonus FAQ -->
  <section class="content-section content-section--alt" id="bonus-faq">
    <div class="container container--narrow">
      <h2>FAQ Bonus</h2>

      <details class="faq-item">
        <summary>Ai-je besoin d'un code promo pour reclamer un bonus ?</summary>
        <div class="faq-answer">
          <p>Non. Tous les bonus sur <?php echo SITE_NAME; ?> peuvent etre reclames sans code promo. Rendez-vous simplement a la caisse, selectionnez l'offre et effectuez le depot qualifiant. Certains bonus peuvent necessiter une activation dans la section Mon Bonus de votre compte.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quelle est la valeur totale du pack de bienvenue ?</summary>
        <div class="faq-answer">
          <p>Le pack de bienvenue complet vaut jusqu'a 2 000 &euro; en fonds bonus plus 150 Tours Gratuits sur trois depots. Chaque depot recoit un bonus de 100% : jusqu'a 1 000 &euro; sur le premier et jusqu'a 500 &euro; sur chacun des deuxieme et troisieme.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Puis-je cumuler plusieurs bonus ?</summary>
        <div class="faq-answer">
          <p>Non. Vous devez completer ou abandonner tout bonus actif avant d'en reclamer un nouveau. Les bonus ne peuvent pas etre cumules.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Que se passe-t-il si je retire avant d'avoir complete l'exigence de mise ?</summary>
        <div class="faq-answer">
          <p>Demander un retrait avant que l'exigence de mise ne soit remplie annulera le bonus et les gains associes. Completez l'integralite du rollover avant de demander un retrait.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Comment fonctionne le cashback quotidien ?</summary>
        <div class="faq-answer">
          <p>Le cashback quotidien est disponible pour les niveaux VIP 2 a 5. Il est calcule sur vos pertes nettes des paris en argent reel au casino. Le pourcentage varie de 3% a 15% selon votre niveau VIP. L'exigence de mise est de seulement 1x, ce qui signifie que vous n'avez qu'a jouer le montant du cashback une seule fois avant de pouvoir retirer.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Tous les jeux contribuent-ils de maniere egale aux exigences de mise ?</summary>
        <div class="faq-answer">
          <p>Non. Les differents types de jeux contribuent a des taux differents. Les machines a sous contribuent generalement a 100%, tandis que les jeux de table et les titres de casino en direct contribuent moins. Consultez les conditions du bonus pour le tableau de contribution exact.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Existe-t-il un bonus separe pour les depots en crypto ?</summary>
        <div class="faq-answer">
          <p>Oui. Les deposants en crypto peuvent reclamer un bonus de 200% jusqu'a 3 000 USDT comme bonus de bienvenue, ainsi que des offres de rechargement crypto hebdomadaires et du weekend. Ces offres sont distinctes des bonus EUR standard et ont leurs propres exigences de mise.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
