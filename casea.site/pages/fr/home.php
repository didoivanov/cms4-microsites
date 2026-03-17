<?php
/**
 * Homepage - French
 */
$page_title = SITE_NAME . ' Casino - ' . SITE_TAGLINE;
$page_description = SITE_NAME . ' Casino propose plus de 10 000 jeux de casino, des croupiers en direct, un espace paris sportifs couvrant 30+ sports, et un bonus de bienvenue jusqu\'à 500 EUR + 200 tours gratuits. Inscris-toi et joue maintenant.';
$current_page = 'home';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__badge">Ouvert maintenant - joueurs acceptés dans le monde entier</div>
    <h1>
      <span class="brand-name"><?php echo SITE_NAME; ?></span><br>
      <span class="brand-type">Casino</span>
    </h1>
    <p class="hero__subtitle">Plus de 10 000 jeux de 90+ fournisseurs, un espace paris sportifs complet couvrant 30+ sports, des tables avec croupiers en direct, et des récompenses qui valent vraiment le coup.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Pack de Bienvenue</div>
      <div class="hero__bonus-value"><?php echo WELCOME_BONUS; ?></div>
      <div class="hero__bonus-extra">Bonus Sport : 100% jusqu'à &euro;100 &middot; Dépôt min. &euro;20</div>
    </div>
    <div class="hero__ctas">
      <a href="/play" class="btn btn--primary btn--lg" rel="nofollow"><?php echo __('cta_play', 'Play Now'); ?></a>
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
      <p><?php echo SITE_NAME; ?> est une plateforme de jeux en ligne où les joueurs peuvent explorer des milliers d'options de paris en un seul endroit. Avec un catalogue de plus de 10 000 produits couvrant les machines à sous, mini-jeux, jeux de cartes et de table virtuels, ainsi qu'une sélection de salons avec croupiers en direct, il y a toujours de quoi s'amuser. Côté paris sportifs, des cotes avantageuses sur plus de 30 sports raviront les amateurs de football, basketball, tennis et esports.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Lancement</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Jeux</th><td>10 000+ (machines à sous, jeux de table, casino en direct, jeux instantanés)</td></tr>
        <tr><th>Fournisseurs</th><td>90+ (Pragmatic Play, Evolution, Microgaming, NetEnt, Playtech, et plus)</td></tr>
        <tr><th>Sports</th><td>30+ sports, esports, sports virtuels</td></tr>
        <tr><th>Bonus de Bienvenue</th><td><?php echo WELCOME_BONUS_TEXT; ?></td></tr>
        <tr><th>Dépôt Min.</th><td>EUR 10 (EUR 20 pour la plupart des bonus)</td></tr>
        <tr><th>Devises</th><td>EUR, USD, CAD, AUD, CHF, HUF, NOK, PLN, NZD, CZK, BRL, CLP, PEN</td></tr>
        <tr><th>Support</th><td>Live chat et email 24h/24, 7j/7</td></tr>
        <tr><th>Mobile</th><td>Entièrement responsive, aucune application requise</td></tr>
      </table>

      <h3>Pourquoi les Joueurs Choisissent <?php echo SITE_NAME; ?></h3>
      <ul class="check-list">
        <li>Plus de 10 000 jeux de 90+ fournisseurs de confiance</li>
        <li>Paris sportifs complets avec paris pré-match et en direct sur 30+ sports</li>
        <li>Plusieurs options de bonus de bienvenue pour le casino et les sports</li>
        <li>Bonus de recharge hebdomadaires, offres cashback et boutique de fidélité</li>
        <li>Programme VIP avec gestionnaire de compte personnel et limites de retrait plus élevées</li>
        <li>Paiements via Visa, Mastercard, Skrill, crypto, et plus</li>
        <li>Support client 24h/24, 7j/7 par live chat et email</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Jeux de Casino</h4>
          <p>Des milliers de machines à sous, variantes de blackjack et roulette, poker, baccarat, game shows, jeux instantanés et tables avec croupiers en direct des meilleurs studios.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Paris Sportifs</h4>
          <p>Paris pré-match et en direct sur les grandes compétitions comme la UEFA Champions League, la NBA, la NHL et les tournois du Grand Chelem. Sports virtuels et esports également disponibles.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127873;</div>
          <h4>Promotions</h4>
          <p>Bonus de bienvenue, offres de recharge hebdomadaires, programmes cashback multiples, boutique de fidélité, défis et offres spéciales tout au long de la semaine.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Social Proof / Recent Winners -->
  <section class="content-section winners-section" id="winners">
    <div class="container">
      <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--space-4);margin-bottom:var(--space-2)">
        <h2 style="margin-bottom:0">Gagnants Récents</h2>
        <span class="live-dot">Live</span>
      </div>
      <div class="jackpot-label">Cagnotte Jackpot Actuelle</div>
      <div class="jackpot-amount" id="jackpotCounter">&euro;2,847,391</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Jeux Populaires sur <?php echo SITE_NAME; ?></h2>
      <p>Découvre quelques-uns des titres les plus joués du casino. Des machines à sous à forte volatilité aux jeux de table classiques et aux expériences avec croupiers en direct, il y en a pour tous les types de joueurs.</p>

      <div class="game-tabs">
        <button class="game-tab active">Tous les Jeux</button>
        <button class="game-tab">Machines à Sous</button>
        <button class="game-tab">Casino en Direct</button>
        <button class="game-tab">Jeux de Table</button>
        <button class="game-tab">Game Shows</button>
        <button class="game-tab">Crash Games</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Principaux Fournisseurs de Jeux</h3>
          <p>Le catalogue est alimenté par un large éventail de studios, des leaders du secteur aux développeurs indépendants prometteurs :</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">90+ autres</span>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/casea-games.png" alt="<?php echo SITE_NAME; ?> Casino lobby de jeux avec les meilleures machines à sous et fournisseurs" style="max-width:300px;width:100%;">
        </div>
      </div>
    </div>
  </section>

  <!-- Sportsbook -->
  <section class="content-section" id="sports">
    <div class="container">
      <h2>Paris Sportifs</h2>
      <div class="two-col">
        <div>
          <p>La section paris sportifs de <?php echo SITE_NAME; ?> couvre les paris pré-match et en direct sur des événements de compétitions majeures et de ligues plus modestes. Les amateurs de football peuvent parier sur tout, de la UEFA Champions League aux ligues de divisions inférieures, tandis que le basketball, le tennis, le hockey et une douzaine d'autres sports complètent le programme.</p>
          <p>Les sports virtuels comme le football, le basketball et les courses de lévriers sont disponibles 24h/24. Les paris esports couvrent Dota 2, Counter-Strike, League of Legends, Call of Duty et d'autres titres populaires.</p>

          <h3>Sports Disponibles</h3>
          <ul class="check-list">
            <li>Football (UEFA Champions League, Premier League, Bundesliga, Serie A, La Liga)</li>
            <li>Basketball (NBA, EuroLeague, ligues nationales)</li>
            <li>Tennis (Grand Chelem, ATP, WTA)</li>
            <li>Hockey sur Glace (NHL, KHL, SHL)</li>
            <li>Esports (Dota 2, CS2, League of Legends, Call of Duty)</li>
            <li>Sports virtuels, courses hippiques, et 25+ autres</li>
          </ul>
        </div>
        <div>
          <div class="highlight-box">
            <h4>Bonus de Bienvenue Sport</h4>
            <p>Les nouveaux joueurs peuvent réclamer un bonus de 100% sur leur premier dépôt sportif, d'une valeur maximale de EUR 100. Les joueurs de Finlande, d'Allemagne, de Norvège, de Suisse et d'Autriche peuvent obtenir jusqu'à EUR 200. Le bonus nécessite un dépôt minimum de EUR 20 et une exigence de mise de 5x ou 6x selon ton pays.</p>
          </div>
          <table class="quick-table" style="margin-top: var(--space-6);">
            <tr><th>Types de Paris</th><td>Pré-match, en direct, long terme, accumulateurs</td></tr>
            <tr><th>Sports</th><td>30+ incluant esports et virtuels</td></tr>
            <tr><th>Fonctionnalités</th><td>Boost accumulateur, paiement anticipé, cotes améliorées</td></tr>
            <tr><th>Cashback</th><td>10% hebdomadaire jusqu'à EUR 500</td></tr>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section content-section--alt" id="payments">
    <div class="container">
      <h2>Méthodes de Paiement</h2>
      <p><?php echo SITE_NAME; ?> prend en charge plusieurs options de paiement populaires. La disponibilité dépend de ton pays, et les dépôts commencent à partir de seulement EUR 10.</p>

      <table class="quick-table">
        <tr><th>Méthodes de Dépôt</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Dépôt Min.</th><td>EUR 10 (EUR 20 pour la plupart des bonus)</td></tr>
        <tr><th>Retrait Min.</th><td>EUR 10</td></tr>
        <tr><th>Retrait Max. (Quotidien)</th><td>EUR 500 (VIP : EUR 1 500)</td></tr>
        <tr><th>Retrait Max. (Mensuel)</th><td>EUR 7 000 (VIP : EUR 20 000)</td></tr>
        <tr><th>Délai de Traitement</th><td>Jusqu'à 72 heures (e-wallets et crypto sont les plus rapides)</td></tr>
        <tr><th>Devises</th><td>EUR, USD, CAD, AUD, CHF, HUF, NOK, PLN, NZD, CZK, BRL, CLP, PEN</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">Pour un aperçu détaillé des méthodes de retrait, limites, frais et astuces pour accélérer ton paiement, consulte la <a href="<?php echo $lang_prefix; ?>/withdrawal">page Retraits</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section" id="mobile">
    <div class="container">
      <h2>Casino Mobile</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p><?php echo SITE_NAME; ?> ne dispose pas d'une application mobile dédiée, mais le site est entièrement compatible avec tous les smartphones et tablettes. La plateforme accessible via navigateur offre les mêmes fonctionnalités, jeux et outils de gestion de compte que la version bureau. Aucun téléchargement nécessaire -- ouvre simplement ton navigateur mobile, connecte-toi et joue.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/casea-mobile.png" alt="<?php echo SITE_NAME; ?> Casino sur mobile" style="max-width:320px;width:100%;">
        </div>
      </div>
      <ul class="check-list">
        <li>Bibliothèque complète de jeux accessible sur navigateur mobile</li>
        <li>Paris sportifs avec marchés en direct</li>
        <li>Dépôts et retraits directement depuis ton téléphone</li>
        <li>Support par live chat disponible sur mobile</li>
        <li>Aucune application à télécharger -- fonctionne sur iOS et Android</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section content-section--alt" id="faq">
    <div class="container container--narrow">
      <h2>Questions Fréquentes</h2>

      <details class="faq-item">
        <summary>Quels types de jeux puis-je trouver sur <?php echo SITE_NAME; ?> Casino ?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> collabore avec plus de 90 fournisseurs dont Pragmatic Play, Evolution, Microgaming et Red Tiger. Tu peux jouer aux machines à sous vidéo, machines à sous à jackpot, titres Megaways, variantes de blackjack, roulette, baccarat, poker, game shows, crash games et plus encore. L'espace paris sportifs couvre 30+ sports avec des options de paris pré-match et en direct.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quel est le bonus de bienvenue de <?php echo SITE_NAME; ?> Casino ?</summary>
        <div class="faq-answer">
          <p>Les nouveaux joueurs casino peuvent réclamer un bonus de bienvenue de 100% jusqu'à EUR 500 + 200 tours gratuits sur leur premier dépôt. Les parieurs sportifs sont éligibles à un bonus de 100% jusqu'à EUR 100 (ou EUR 200 selon ton pays). Le dépôt minimum est de EUR 20.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quel est le retrait maximum sur <?php echo SITE_NAME; ?> Casino ?</summary>
        <div class="faq-answer">
          <p>Les joueurs standards peuvent retirer jusqu'à EUR 500 par jour et EUR 7 000 par mois. Les membres VIP ont accès à des limites plus élevées -- jusqu'à EUR 1 500 par jour et EUR 20 000 par mois. Le retrait minimum est de EUR 10.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary><?php echo SITE_NAME; ?> a-t-il un programme VIP ?</summary>
        <div class="faq-answer">
          <p>Oui. <?php echo SITE_NAME; ?> propose un programme VIP basé sur la fidélité où ton rang augmente en fonction de ton activité de jeu. Les avantages incluent un gestionnaire de compte personnel, des limites de retrait plus élevées, des promotions exclusives et des offres cashback hebdomadaires qui évoluent avec ton niveau.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Puis-je jouer sur mon téléphone ?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> ne dispose pas d'une application mobile, mais le site est entièrement optimisé pour mobile. Tu peux accéder à tous les jeux, aux paris sportifs et aux fonctionnalités de ton compte depuis n'importe quel navigateur de smartphone ou tablette moderne.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Comment contacter le support client ?</summary>
        <div class="faq-answer">
          <p>Tu peux joindre l'équipe de support par live chat ou email 24h/24. Le live chat est disponible directement sur le site pour des réponses rapides. Pour plus de détails, consulte la <a href="<?php echo $lang_prefix; ?>/support">page Support</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
