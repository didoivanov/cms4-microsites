<?php
/**
 * Homepage - WestAce (French / FR)
 */
$page_title = 'WestAce Casino - 7 000+ Jeux, Paris Sportifs & Bonus de Bienvenue jusqu\'a 2 000 €';
$page_description = SITE_NAME . ' Casino propose plus de 7 000 jeux de 100+ fournisseurs, un sportsbook complet avec paris en direct, des tables de croupiers en direct et un bonus de bienvenue de 100% jusqu\'a 1 000 € + 50 Tours Gratuits. Rejoignez-nous et jouez.';
$current_page = 'home';
$lang_prefix = '/fr';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__badge">Ouvert -- 7 000+ jeux et paris sportifs en direct</div>
    <h1>
      <span class="brand-name"><?php echo SITE_NAME; ?></span><br>
      <span class="brand-type">Casino</span>
    </h1>
    <p class="hero__subtitle">Plus de 7 000 jeux de 100+ fournisseurs, des tables de croupiers en direct, un sportsbook complet avec paris en direct et un pack de bienvenue qui recompense vos trois premiers depots.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Pack de Bienvenue</div>
      <div class="hero__bonus-value"><?php echo WELCOME_BONUS; ?></div>
      <div class="hero__bonus-extra">1er Depot : 100% jusqu'a 1 000 &euro; + 50 Tours Gratuits &middot; Depot min 20 &euro;</div>
    </div>
    <div class="hero__ctas">
      <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Jouer Maintenant</a>
      <a href="<?php echo $lang_prefix; ?>/bonuses" class="btn btn--outline btn--lg">Voir les Bonus</a>
    </div>
  </div>
</section>

<!-- STATS BAR -->
<section class="stats-bar">
  <div class="container">
    <div class="stats-bar__grid">
<?php foreach ($STATS as $stat): ?>
      <div class="stat">
        <div class="stat__value"><?php echo $stat['value']; ?></div>
        <div class="stat__label"><?php echo $stat['label']; ?></div>
      </div>
<?php endforeach; ?>
    </div>
  </div>
</section>

<!-- MAIN CONTENT -->
<main>
  <!-- About -->
  <section class="content-section" id="about">
    <div class="container">
      <h2>Bienvenue sur <?php echo SITE_NAME; ?> Casino</h2>
      <p><?php echo SITE_NAME; ?> est un casino en ligne et sportsbook lance en 2026. La plateforme rassemble plus de 7 000 jeux de 100+ fournisseurs, couvrant les machines a sous, les tables de croupiers en direct, les jeux de table, les jeux crash, les jackpots et les jeux TV. En complement du casino, nous proposons un sportsbook complet avec paris pre-match et en direct, sports virtuels et courses hippiques. Les nouveaux joueurs peuvent reclamer un pack de bienvenue sur trois depots d'une valeur maximale de 2 000 &euro; + 150 Tours Gratuits.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Lancement</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Jeux</th><td>7 000+ (machines a sous, jeux de table, casino en direct, jeux crash, jackpots, jeux TV)</td></tr>
        <tr><th>Fournisseurs</th><td>100+ (Pragmatic Play, Playtech, Novomatic, Red Tiger, Yggdrasil, BGaming, Hacksaw Gaming et plus)</td></tr>
        <tr><th>Bonus de Bienvenue</th><td><?php echo WELCOME_BONUS_TEXT; ?></td></tr>
        <tr><th>Depot Min</th><td>10 &euro;</td></tr>
        <tr><th>Devise</th><td>EUR</td></tr>
        <tr><th>Support</th><td>Live chat 24/7 + e-mail</td></tr>
        <tr><th>Sportsbook</th><td>Oui (sport, paris en direct, sports virtuels, courses hippiques)</td></tr>
        <tr><th>Mobile</th><td>Entierement responsive, aucune application requise</td></tr>
      </table>

      <h3>Pourquoi les joueurs choisissent <?php echo SITE_NAME; ?></h3>
      <ul class="check-list">
        <li>Plus de 7 000 jeux de 100+ fournisseurs sous licence</li>
        <li>Pack de bienvenue sur trois depots jusqu'a 2 000 &euro; + 150 Tours Gratuits</li>
        <li>Sportsbook complet avec paris en direct, sports virtuels et courses hippiques</li>
        <li>Casino en direct avec roulette, blackjack, baccarat, des et poker</li>
        <li>Cashback quotidien jusqu'a 15% avec une exigence de mise de seulement 1x</li>
        <li>Programme VIP a 5 niveaux avec manager personnel et limites plus elevees</li>
        <li>Compatible crypto avec bonus de bienvenue et offres de rechargement separes</li>
        <li>Support 24/7 via live chat et e-mail</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Jeux de Casino</h4>
          <p>Des milliers de machines a sous, des variantes de blackjack et roulette, du poker, baccarat, des jeux crash et des tables de croupiers en direct proposes par des studios comme Pragmatic Play, Playtech, Novomatic, Red Tiger et Yggdrasil.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127183;</div>
          <h4>Casino en Direct</h4>
          <p>Jeux avec croupiers en direct incluant roulette, blackjack, baccarat, des et poker. De vrais croupiers diffuses en HD depuis des studios professionnels, 24 heures sur 24.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Paris Sportifs</h4>
          <p>Plateforme de paris sportifs complete avec des marches pre-match et en direct. Les sports virtuels et les courses hippiques completent l'offre pour les amateurs de sport.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Social Proof / Recent Winners -->
  <section class="content-section winners-section" id="winners">
    <div class="container">
      <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--space-4);margin-bottom:var(--space-2)">
        <h2 style="margin-bottom:0">Gagnants Recents</h2>
        <span class="live-dot">Live</span>
      </div>
      <div class="jackpot-label">Cagnotte Jackpot Actuelle</div>
      <div class="jackpot-amount" id="jackpotCounter">2 847 391 &euro;</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Jeux Populaires sur <?php echo SITE_NAME; ?></h2>
      <p>Parcourez une selection des titres les plus joues du casino. Des machines a sous a forte volatilite aux jeux de table classiques, en passant par les salles de croupiers en direct et les marches sportifs -- il y en a pour tous les gouts.</p>

      <div class="game-tabs">
        <button class="game-tab active">Tous les Jeux</button>
        <button class="game-tab">Machines a Sous</button>
        <button class="game-tab">Casino en Direct</button>
        <button class="game-tab">Jeux de Table</button>
        <button class="game-tab">Jeux Crash</button>
        <button class="game-tab">Jackpots</button>
        <button class="game-tab">Sport</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Principaux Fournisseurs de Jeux</h3>
          <p>Notre catalogue de jeux est alimente par un large eventail de studios, des leaders du secteur aux developpeurs independants prometteurs :</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">100+ au total</span>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-games-screen.png" alt="<?php echo SITE_NAME; ?> Casino lobby de jeux montrant les meilleures machines a sous de fournisseurs comme Pragmatic Play, Playtech et Novomatic" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section" id="payments">
    <div class="container">
      <h2>Methodes de Paiement</h2>
      <p><?php echo SITE_NAME; ?> prend en charge un large choix de methodes de paiement, notamment les cartes bancaires, les cartes prepayees, les portefeuilles electroniques et les cryptomonnaies. Les depots commencent a partir de 10 &euro; et tous les depots et retraits sont sans frais.</p>

      <table class="quick-table">
        <tr><th>Methodes de Depot</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Depot Min</th><td>10 &euro;</td></tr>
        <tr><th>Retrait Min</th><td>10 &euro;</td></tr>
        <tr><th>Retrait Max</th><td>500 &euro;/jour, 7 000 &euro;/mois</td></tr>
        <tr><th>Delai de Paiement</th><td>24-72 heures</td></tr>
        <tr><th>Devise</th><td>EUR</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">Pour un apercu detaille des methodes de retrait, des limites, des frais et des conseils pour accelerer votre paiement, consultez la <a href="<?php echo $lang_prefix; ?>/withdrawal">page Retrait</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section content-section--alt" id="mobile">
    <div class="container">
      <h2>Casino Mobile</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p><?php echo SITE_NAME; ?> ne dispose pas d'une application mobile dediee, mais le site est entierement compatible avec tous les smartphones et tablettes. La plateforme basee sur navigateur offre les memes fonctionnalites, jeux et outils de gestion de compte que la version de bureau. Aucun telechargement necessaire -- ouvrez votre navigateur mobile, connectez-vous et jouez.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/westace-mobile.png" alt="<?php echo SITE_NAME; ?> Casino lobby mobile avec bonus de bienvenue et navigation dans les jeux" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>
      <ul class="check-list">
        <li>Bibliotheque complete de jeux accessible sur navigateurs mobiles</li>
        <li>Tables de croupiers en direct et sportsbook en deplacement</li>
        <li>Deposez et retirez directement depuis votre telephone</li>
        <li>Support par live chat disponible sur mobile</li>
        <li>Aucun telechargement d'application necessaire -- fonctionne sur iOS et Android</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section" id="faq">
    <div class="container container--narrow">
      <h2>Questions Frequentes</h2>

      <details class="faq-item">
        <summary>Quels types de jeux puis-je trouver sur <?php echo SITE_NAME; ?> Casino ?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> collabore avec 100+ fournisseurs dont Pragmatic Play, Playtech, Novomatic, Red Tiger, Yggdrasil, BGaming, Hacksaw Gaming et Quickspin. Vous pouvez jouer aux machines a sous video, aux jackpots, au blackjack, a la roulette, au baccarat, au poker, aux jeux crash, aux jeux TV et aux tables de croupiers en direct. Un sportsbook complet avec paris en direct, sports virtuels et courses hippiques est egalement disponible.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quel est le bonus de bienvenue sur <?php echo SITE_NAME; ?> Casino ?</summary>
        <div class="faq-answer">
          <p>Les nouveaux joueurs recoivent un pack de bienvenue sur trois depots : 100% jusqu'a 1 000 &euro; + 50 Tours Gratuits sur le premier depot, 100% jusqu'a 500 &euro; + 50 Tours Gratuits sur le deuxieme et 100% jusqu'a 500 &euro; + 50 Tours Gratuits sur le troisieme. Valeur totale : jusqu'a 2 000 &euro; + 150 Tours Gratuits. Le depot minimum est de 20 &euro; par niveau. L'exigence de mise est de 35x (bonus + depot).</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>En combien de temps les retraits sont-ils traites ?</summary>
        <div class="faq-answer">
          <p>Les retraits sont traites sous 24 a 72 heures. Le retrait minimum est de 10 &euro; pour toutes les methodes de paiement. La limite quotidienne de retrait est de 500 &euro; et la limite mensuelle de 7 000 &euro;. Aucun frais n'est facture sur les retraits.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary><?php echo SITE_NAME; ?> propose-t-il un programme VIP ?</summary>
        <div class="faq-answer">
          <p>Oui. <?php echo SITE_NAME; ?> dispose d'un programme VIP a 5 niveaux. Les avantages comprennent des pourcentages de cashback plus eleves (jusqu'a 15%), des limites de retrait augmentees, un traitement prioritaire, des offres personnalisees et un manager VIP dedie aux niveaux superieurs. Les criteres de progression entre les niveaux ne sont pas rendus publics.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Puis-je jouer sur mon telephone ?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> ne dispose pas d'application mobile, mais le site est entierement adapte aux mobiles. Vous pouvez acceder a tous les jeux, au sportsbook et aux fonctionnalites de votre compte depuis n'importe quel smartphone ou tablette moderne.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Comment contacter le support client ?</summary>
        <div class="faq-answer">
          <p>Vous pouvez joindre l'equipe de support via le live chat 24/7 directement sur le site, ou par e-mail a support@westace.com. Pour plus de details, consultez la <a href="<?php echo $lang_prefix; ?>/support">page Support</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
