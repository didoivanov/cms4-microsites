<?php
/**
 * Homepage – French
 */
$page_title = SITE_NAME . ' Casino - Casino en Ligne, Paris Sportifs et 8 000+ Jeux';
$page_description = SITE_NAME . ' Casino propose plus de 8 000 jeux de 103+ fournisseurs, des tables avec croupiers en direct, un paris sportifs couvrant 30+ disciplines et un bonus de bienvenue jusqu\'&agrave; 2 000 EUR plus 300 tours gratuits sur trois d&eacute;p&ocirc;ts. Inscrivez-vous et jouez.';
$current_page = 'home';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__badge">Ouvert -- joueurs accept&eacute;s du monde entier</div>
    <h1>
      <span class="brand-name"><?php echo SITE_NAME; ?></span><br>
      <span class="brand-type">Casino</span>
    </h1>
    <p class="hero__subtitle">Plus de 8 000 jeux de 103+ fournisseurs, un paris sportifs complet couvrant 30+ disciplines, des tables avec croupiers en direct et un package de bienvenue multi-d&eacute;p&ocirc;ts qui r&eacute;compense vos trois premiers versements.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Package de bienvenue</div>
      <div class="hero__bonus-value"><?php echo WELCOME_BONUS; ?></div>
      <div class="hero__bonus-extra">Bonus Sports : 100% jusqu'&agrave; &euro;500 &middot; D&eacute;p&ocirc;t min. &euro;20</div>
    </div>
    <div class="hero__ctas">
      <a href="/play" class="btn btn--primary btn--lg" rel="nofollow"><?php echo __('cta_play', 'Jouer maintenant'); ?></a>
      <a href="/fr/bonuses" class="btn btn--outline btn--lg">Voir les bonus</a>
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
      <p><?php echo SITE_NAME; ?> est un casino en ligne et paris sportifs lanc&eacute; en 2025 sous licence Cura&ccedil;ao OGL/2024/129/0131, exploit&eacute; par 130 group N.V. La plateforme rassemble plus de 8 000 jeux de 103+ fournisseurs, couvrant les machines &agrave; sous, les tables avec croupiers en direct, les jeux de table, les jeux instantan&eacute;s et un paris sportifs complet avec mises en pr&eacute;-match et en direct sur 30+ disciplines. Les nouveaux joueurs re&ccedil;oivent un package de bienvenue sur trois d&eacute;p&ocirc;ts d'une valeur allant jusqu'&agrave; 2 000 EUR plus 300 tours gratuits c&ocirc;t&eacute; casino, ou jusqu'&agrave; 500 EUR sur trois d&eacute;p&ocirc;ts sportifs.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Lancement</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Licence</th><td>Curacao OGL/2024/129/0131</td></tr>
        <tr><th>Jeux</th><td>8 000+ (machines &agrave; sous, jeux de table, casino en direct, jeux instantan&eacute;s)</td></tr>
        <tr><th>Fournisseurs</th><td>103+ (Play'n GO, Playtech, Pragmatic Play, BGaming, Hacksaw Gaming, et plus)</td></tr>
        <tr><th>Sports</th><td>30+ disciplines, esports, sports virtuels</td></tr>
        <tr><th>Bonus de bienvenue</th><td><?php echo WELCOME_BONUS_TEXT; ?></td></tr>
        <tr><th>D&eacute;p&ocirc;t min.</th><td>10 EUR (20 EUR pour la plupart des bonus)</td></tr>
        <tr><th>Devises</th><td>EUR, CHF, USD, CAD, AUD, NZD, PLN, BRL, NOK, ZAR, CZK, HUF, CLP</td></tr>
        <tr><th>Support</th><td>Chat en direct 24h/24, email et Telegram</td></tr>
        <tr><th>Mobile</th><td>Enti&egrave;rement responsive, aucune application requise</td></tr>
      </table>

      <h3>Pourquoi les joueurs choisissent <?php echo SITE_NAME; ?></h3>
      <ul class="check-list">
        <li>Plus de 8 000 jeux de 103+ fournisseurs licenci&eacute;s</li>
        <li>Package de bienvenue sur trois d&eacute;p&ocirc;ts jusqu'&agrave; 2 000 EUR + 300 tours gratuits</li>
        <li>Paris sportifs complet avec mises en pr&eacute;-match et en direct sur 30+ disciplines</li>
        <li>Bonus de bienvenue sports jusqu'&agrave; 500 EUR sur trois d&eacute;p&ocirc;ts</li>
        <li>Bonus de rechargement hebdomadaires, programmes de cashback et tournois</li>
        <li>Programme VIP &agrave; 5 niveaux avec gestionnaire de compte personnel et limites plus &eacute;lev&eacute;es</li>
        <li>20+ m&eacute;thodes de paiement incluant Visa, Mastercard, Skrill, crypto et portefeuilles &eacute;lectroniques</li>
        <li>Support 24h/24 et 7j/7 par chat en direct, email et Telegram</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Jeux de casino</h4>
          <p>Des milliers de machines &agrave; sous, des variantes de blackjack et de roulette, du poker, du baccarat, des jeux t&eacute;l&eacute;vis&eacute;s, des jeux crash et des tables avec croupiers en direct provenant de studios comme Play'n GO, Pragmatic Play et Hacksaw Gaming.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Paris sportifs</h4>
          <p>Paris en pr&eacute;-match et en direct sur les grandes comp&eacute;titions comme la Ligue des Champions UEFA, la NBA, la NHL et les tournois du Grand Chelem. Esports couvrant Dota 2, CS2 et League of Legends. Sports virtuels disponibles en continu.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127873;</div>
          <h4>Promotions</h4>
          <p>Packages de bienvenue sur trois d&eacute;p&ocirc;ts pour le casino et les sports, bonus de rechargement hebdomadaires, cashback sports de 15%, tournois et programme VIP &agrave; 5 niveaux avec des r&eacute;compenses exclusives.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Social Proof / Recent Winners -->
  <section class="content-section winners-section" id="winners">
    <div class="container">
      <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--space-4);margin-bottom:var(--space-2)">
        <h2 style="margin-bottom:0">Gagnants r&eacute;cents</h2>
        <span class="live-dot">Live</span>
      </div>
      <div class="jackpot-label">Cagnotte jackpot en cours</div>
      <div class="jackpot-amount" id="jackpotCounter">&euro;2,847,391</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Jeux populaires sur <?php echo SITE_NAME; ?></h2>
      <p>Parcourez les titres les plus jou&eacute;s du casino. Des machines &agrave; sous &agrave; haute volatilit&eacute; aux jeux de table classiques et aux salles avec croupiers en direct, il y en a pour tous les types de joueurs.</p>

      <div class="game-tabs">
        <button class="game-tab active">Tous les jeux</button>
        <button class="game-tab">Machines &agrave; sous</button>
        <button class="game-tab">Casino en direct</button>
        <button class="game-tab">Jeux de table</button>
        <button class="game-tab">Jeux t&eacute;l&eacute;vis&eacute;s</button>
        <button class="game-tab">Jeux crash</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Principaux fournisseurs de jeux</h3>
          <p>Le catalogue est aliment&eacute; par un large &eacute;ventail de studios, des leaders du secteur aux d&eacute;veloppeurs ind&eacute;pendants prometteurs :</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">103+ au total</span>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-games-screen.png" alt="<?php echo SITE_NAME; ?> Casino game lobby showing top slots from providers like Novomatic, Play'n GO and Hacksaw Gaming" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>
    </div>
  </section>

  <!-- Sportsbook -->
  <section class="content-section" id="sports">
    <div class="container">
      <h2>Paris sportifs</h2>
      <div class="two-col" style="align-items:flex-start;gap:var(--space-8)">
        <div>
          <p>Le paris sportifs de <?php echo SITE_NAME; ?> couvre les mises en pr&eacute;-match et en direct sur des &eacute;v&eacute;nements majeurs comme les comp&eacute;titions de moindre envergure. Les amateurs de football peuvent parier sur tout, de la Ligue des Champions UEFA aux ligues de divisions inf&eacute;rieures, tandis que le basketball, le tennis, le hockey sur glace et une douzaine d'autres sports compl&egrave;tent le programme.</p>
          <p>Les sports virtuels comme le football, le basketball et les courses de l&eacute;vriers sont disponibles en continu. Les paris esports couvrent Dota 2, Counter-Strike 2, League of Legends, Call of Duty et d'autres titres comp&eacute;titifs.</p>

          <h3>Sports disponibles</h3>
          <ul class="check-list">
            <li>Football (Ligue des Champions UEFA, Premier League, Bundesliga, Serie A, La Liga)</li>
            <li>Basketball (NBA, EuroLeague, ligues nationales)</li>
            <li>Tennis (Grand Chelem, ATP, WTA)</li>
            <li>Hockey sur glace (NHL, KHL, SHL)</li>
            <li>Esports (Dota 2, CS2, League of Legends, Call of Duty)</li>
            <li>Sports virtuels, courses hippiques et 25+ autres</li>
          </ul>
        </div>
        <div>
          <div style="text-align:center;margin-bottom:var(--space-6)">
            <img src="/assets/img/vipluck-sports.png" alt="<?php echo SITE_NAME; ?> sportsbook showing live Champions League odds and sports betting interface" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
          </div>
          <div class="highlight-box">
            <h4>Bonus de bienvenue sports</h4>
            <p>Les nouveaux joueurs peuvent obtenir jusqu'&agrave; 500 EUR de bonus sportifs sur leurs trois premiers d&eacute;p&ocirc;ts : 100% jusqu'&agrave; 200 EUR sur le premier, 100% jusqu'&agrave; 150 EUR sur le deuxi&egrave;me et 100% jusqu'&agrave; 150 EUR sur le troisi&egrave;me. D&eacute;p&ocirc;t minimum de 20 EUR. Conditions de mise : 6x avec une cote minimale de 1,60.</p>
          </div>
          <table class="quick-table" style="margin-top: var(--space-6);">
            <tr><th>Types de paris</th><td>Pr&eacute;-match, en direct, long terme, accumulateurs</td></tr>
            <tr><th>Sports</th><td>30+ dont esports et virtuels</td></tr>
            <tr><th>Fonctionnalit&eacute;s</th><td>Boost accumulateur, paiement anticip&eacute;, cotes am&eacute;lior&eacute;es</td></tr>
            <tr><th>Cashback</th><td>15% hebdomadaire jusqu'&agrave; 500 EUR</td></tr>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section content-section--alt" id="payments">
    <div class="container">
      <h2>M&eacute;thodes de paiement</h2>
      <p><?php echo SITE_NAME; ?> accepte plus de 20 m&eacute;thodes de paiement incluant les cartes bancaires, les portefeuilles &eacute;lectroniques, les cartes pr&eacute;pay&eacute;es et 10 cryptomonnaies. La disponibilit&eacute; d&eacute;pend de votre pays, et les d&eacute;p&ocirc;ts commencent &agrave; partir de 10 EUR.</p>

      <table class="quick-table">
        <tr><th>M&eacute;thodes de d&eacute;p&ocirc;t</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>D&eacute;p&ocirc;t min.</th><td>10 EUR (20 EUR pour la plupart des bonus)</td></tr>
        <tr><th>Retrait min.</th><td>20 EUR</td></tr>
        <tr><th>Retrait max. (quotidien)</th><td>700 EUR (VIP : 1 500 EUR)</td></tr>
        <tr><th>Retrait max. (hebdomadaire)</th><td>2 250 EUR (VIP : 7 000 EUR)</td></tr>
        <tr><th>Retrait max. (mensuel)</th><td>9 000 EUR (VIP : 28 000 EUR)</td></tr>
        <tr><th>D&eacute;lai de traitement</th><td>Jusqu'&agrave; 72 heures, pas de traitement le week-end (jusqu'&agrave; 7 jours ouvrables au total)</td></tr>
        <tr><th>Devises</th><td>EUR, CHF, USD, CAD, AUD, NZD, PLN, BRL, NOK, ZAR, CZK, HUF, CLP</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">Pour un d&eacute;tail complet des m&eacute;thodes de retrait, limites, frais et conseils pour acc&eacute;l&eacute;rer vos paiements, consultez la <a href="/fr/withdrawal">page Retraits</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section" id="mobile">
    <div class="container">
      <h2>Casino mobile</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p><?php echo SITE_NAME; ?> ne dispose pas d'une application mobile d&eacute;di&eacute;e, mais le site est enti&egrave;rement compatible avec tous les smartphones et tablettes. La plateforme accessible via navigateur offre les m&ecirc;mes fonctionnalit&eacute;s, jeux et outils de gestion de compte que la version bureau. Aucun t&eacute;l&eacute;chargement requis -- ouvrez votre navigateur mobile, connectez-vous et jouez.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/vipluck-lobby.png" alt="<?php echo SITE_NAME; ?> Casino mobile lobby with welcome bonus and game navigation" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>
      <ul class="check-list">
        <li>Biblioth&egrave;que compl&egrave;te de jeux accessible sur navigateur mobile</li>
        <li>Paris sportifs avec march&eacute;s en direct</li>
        <li>D&eacute;p&ocirc;ts et retraits directement depuis votre t&eacute;l&eacute;phone</li>
        <li>Chat en direct et support Telegram disponibles sur mobile</li>
        <li>Aucune application &agrave; t&eacute;l&eacute;charger -- fonctionne sur iOS et Android</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section content-section--alt" id="faq">
    <div class="container container--narrow">
      <h2>Questions fr&eacute;quentes</h2>

      <details class="faq-item">
        <summary>&Agrave; quels jeux puis-je jouer sur <?php echo SITE_NAME; ?> Casino ?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> travaille avec 103+ fournisseurs dont Play'n GO, Playtech, Pragmatic Play, BGaming et Hacksaw Gaming. Vous pouvez jouer aux machines &agrave; sous vid&eacute;o, aux machines &agrave; jackpot, aux titres Megaways, au blackjack, &agrave; la roulette, au baccarat, au poker, aux jeux t&eacute;l&eacute;vis&eacute;s, aux jeux crash et bien plus. Le paris sportifs couvre 30+ disciplines avec des options de paris en pr&eacute;-match et en direct.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quel est le bonus de bienvenue de <?php echo SITE_NAME; ?> Casino ?</summary>
        <div class="faq-answer">
          <p>Les nouveaux joueurs casino re&ccedil;oivent un package de bienvenue sur trois d&eacute;p&ocirc;ts : 100% jusqu'&agrave; 500 EUR + 100 tours gratuits sur le premier d&eacute;p&ocirc;t, 100% jusqu'&agrave; 750 EUR + 75 tours gratuits sur le deuxi&egrave;me et 100% jusqu'&agrave; 750 EUR + 125 tours gratuits sur le troisi&egrave;me. Valeur totale : jusqu'&agrave; 2 000 EUR + 300 tours gratuits. Les parieurs sportifs peuvent obtenir jusqu'&agrave; 500 EUR sur trois d&eacute;p&ocirc;ts. D&eacute;p&ocirc;t minimum de 20 EUR.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quel est le retrait maximum chez <?php echo SITE_NAME; ?> Casino ?</summary>
        <div class="faq-answer">
          <p>Les joueurs standard peuvent retirer jusqu'&agrave; 700 EUR par jour, 2 250 EUR par semaine et 9 000 EUR par mois. Les membres VIP b&eacute;n&eacute;ficient de limites plus &eacute;lev&eacute;es : 1 500 EUR par jour, 7 000 EUR par semaine et 28 000 EUR par mois. Le retrait minimum est de 20 EUR. Les paiements sont trait&eacute;s sous 72 heures les jours ouvrables.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary><?php echo SITE_NAME; ?> a-t-il un programme VIP ?</summary>
        <div class="faq-answer">
          <p>Oui. <?php echo SITE_NAME; ?> propose un programme VIP &agrave; 5 niveaux avec une progression sur invitation uniquement. Les avantages comprennent un gestionnaire de compte personnel, des limites de retrait plus &eacute;lev&eacute;es, des bonus exclusifs et un traitement prioritaire des paiements. Plus votre niveau est &eacute;lev&eacute;, meilleures sont les r&eacute;compenses et les pourcentages de cashback.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Puis-je jouer sur mon t&eacute;l&eacute;phone ?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> ne dispose pas d'application mobile, mais le site est enti&egrave;rement adapt&eacute; aux mobiles. Vous pouvez acc&eacute;der &agrave; tous les jeux, aux paris sportifs et aux fonctionnalit&eacute;s de votre compte via n'importe quel navigateur moderne de smartphone ou tablette.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Comment contacter le service client ?</summary>
        <div class="faq-answer">
          <p>Vous pouvez joindre l'&eacute;quipe de support via le chat en direct, par email &agrave; support@vipluck.com ou sur Telegram, 24 heures sur 24. Le chat en direct est disponible directement sur le site pour des r&eacute;ponses rapides. Pour plus de d&eacute;tails, consultez la <a href="/fr/support">page Support</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
