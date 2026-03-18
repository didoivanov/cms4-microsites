<?php
/**
 * Sports Betting Page - WestAce (French / FR)
 */
$page_title = 'WestAce Paris Sportifs - Sport, Paris en Direct & Sports Virtuels';
$page_description = 'Pariez sur le football, le tennis, le basketball, les courses hippiques et bien plus chez ' . SITE_NAME . '. Paris en direct, sports virtuels et cotes compétitives sur plus de 30 sports.';
$current_page = 'sports';
$lang_prefix = '/fr';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Paris Sportifs';
$hero_description = 'Cotes avant-match, paris en direct, sports virtuels et courses hippiques -- tout en un seul endroit aux côtés de notre casino complet.';
$hero_cta = 'Parier Maintenant';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Sportsbook Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Aperçu des Paris Sportifs</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p><?php echo SITE_NAME; ?> est bien plus qu'un casino. Nous proposons un livre de paris complet couvrant les paris avant-match, les marchés en direct, les sports virtuels et les courses hippiques. Que vous suiviez la Ligue 1, la Ligue des Champions ou Roland-Garros, vous trouverez des cotes compétitives et un large éventail de marchés sur chaque événement majeur.</p>
          <p>Notre section paris sportifs fonctionne en parallèle du casino, ce qui vous permet de passer des machines à sous aux tables avec croupiers en direct et aux paris sportifs depuis un seul compte avec un seul solde. Pas besoin de portefeuilles séparés ni de transferts.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-sports-screen.png" alt="Paris sportifs <?php echo SITE_NAME; ?> affichant les cotes en direct de la Ligue des Champions et les marchés football" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Paris Avant-Match</h4>
          <p>Placez vos paris sur les matchs à venir dans plus de 30 sports. Football, tennis, basketball, cricket, hockey sur glace, MMA et bien d'autres -- avec des paris simples, combinés et systèmes disponibles.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9889;</div>
          <h4>Paris en Direct</h4>
          <p>Pariez sur les matchs en cours avec des cotes en temps réel qui se mettent à jour toutes les quelques secondes. Suivez l'action grâce aux statistiques en direct, aux tableaux de scores et aux marchés en cours sur tous les sports majeurs.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127918;</div>
          <h4>Sports Virtuels</h4>
          <p>Des événements simulés disponibles 24h/24 -- football virtuel, basketball, tennis, courses hippiques et lévriers. Des résultats toutes les quelques minutes, sans attendre les vrais matchs.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Available Sports -->
  <section class="content-section content-section--alt" id="sports">
    <div class="container">
      <h2>Sports Disponibles</h2>
      <p>Notre livre de paris couvre un large éventail de sports issus de ligues et tournois du monde entier. Voici quelques-uns des marchés les plus populaires :</p>

      <div class="two-col">
        <div>
          <h3>Sports Populaires</h3>
          <ul class="check-list">
            <li>Football -- Ligue 1, Premier League, La Liga, Bundesliga, Serie A, Ligue des Champions, qualifications Coupe du Monde et des centaines de ligues inférieures</li>
            <li>Tennis -- Grand Chelem, ATP, WTA et tournois Challenger</li>
            <li>Basketball -- NBA, EuroLeague, championnats nationaux</li>
            <li>Hockey sur Glace -- NHL, KHL, SHL et ligues européennes</li>
            <li>Cricket -- IPL, matchs test internationaux, Coupe du Monde T20</li>
            <li>MMA / Boxe -- UFC, Bellator et grandes soirées de boxe</li>
            <li>Esports -- CS2, Dota 2, League of Legends, Valorant</li>
          </ul>
        </div>
        <div>
          <h3>Autres Sports</h3>
          <ul class="check-list">
            <li>Rugby à XV et Rugby à XIII</li>
            <li>Football Américain -- NFL, football universitaire</li>
            <li>Baseball -- MLB, NPB, KBO</li>
            <li>Handball -- compétitions européennes et internationales</li>
            <li>Volleyball -- championnats nationaux et internationaux</li>
            <li>Tennis de Table -- événements professionnels et mondiaux</li>
            <li>Fléchettes, Snooker, Cyclisme, Formule 1</li>
          </ul>
        </div>
      </div>

      <p style="margin-top: var(--space-6);">Les paris en direct sont disponibles sur la plupart des sports listés ci-dessus. Les cotes se mettent à jour en temps réel en fonction de la situation du match, vous permettant de réagir aux buts, breaks et changements de momentum au fur et à mesure.</p>
    </div>
  </section>

  <!-- Horse Racing -->
  <section class="content-section" id="horse-racing">
    <div class="container container--narrow">
      <h2>Courses Hippiques</h2>
      <p><?php echo SITE_NAME; ?> couvre les courses hippiques des hippodromes de France, du Royaume-Uni, d'Irlande, d'Australie et d'autres grandes nations de courses. Vous trouverez des marchés ante-post pour les grands festivals ainsi que des cotes le jour de la course avec des options gagnant, placé et couplé.</p>
      <p>Les grands rendez-vous comme le Prix de l'Arc de Triomphe, le Grand Steeple-Chase de Paris, le Prix d'Amérique et la Melbourne Cup sont couverts avec une gamme complète de marchés. Pour les courses quotidiennes, nous proposons des paris standard gagnant et placé sur la plupart des réunions françaises et internationales.</p>
    </div>
  </section>

  <!-- Virtual Sports -->
  <section class="content-section content-section--alt" id="virtual">
    <div class="container container--narrow">
      <h2>Sports Virtuels</h2>
      <p>Lorsqu'il n'y a pas de matchs en direct sur lesquels parier, notre section sports virtuels maintient l'action 24h/24 et 7j/7. Les événements sont simulés par des générateurs de nombres aléatoires certifiés, garantissant des résultats équitables et imprévisibles.</p>

      <h3>Sports Virtuels Disponibles</h3>
      <ul>
        <li><strong>Football Virtuel</strong> -- simulations de matchs complets avec classements de ligue et formats coupe</li>
        <li><strong>Basketball Virtuel</strong> -- simulations quart par quart avec les marchés standard du basketball</li>
        <li><strong>Tennis Virtuel</strong> -- matchs set par set avec options vainqueur du match et score exact</li>
        <li><strong>Courses Hippiques Virtuelles</strong> -- courses de plat et d'obstacles avec paris gagnant, placé et couplé</li>
        <li><strong>Lévriers Virtuels</strong> -- courses courtes avec marchés gagnant et couplé</li>
      </ul>
      <p>De nouveaux événements virtuels démarrent toutes les 2-3 minutes, il y a donc toujours quelque chose sur lequel parier.</p>
    </div>
  </section>

  <!-- Sports Betting Tips -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Conseils pour les Paris Sportifs</h2>
      <p>Quelques lignes directrices simples pour que vos paris sportifs restent un divertissement durable :</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Fixez un budget avant de commencer.</strong> Décidez combien vous êtes prêt à parier par semaine ou par mois, et ne dépassez pas cette limite. Considérez cela comme une dépense de divertissement, pas un investissement.
          </div>
        </li>
        <li>
          <div>
            <strong>Pariez sur des sports que vous connaissez.</strong> Concentrez-vous sur les ligues et les sports où vous avez une véritable expertise. La connaissance des équipes, des joueurs et des conditions vous donne un meilleur jugement que de courir après des marchés au hasard.
          </div>
        </li>
        <li>
          <div>
            <strong>Ne courez pas après vos pertes.</strong> Si vous traversez une mauvaise série, n'augmentez pas vos mises pour tenter de vous refaire. Faites une pause et revenez avec les idées claires.
          </div>
        </li>
        <li>
          <div>
            <strong>Tenez un historique.</strong> Suivez vos paris pour savoir ce qui fonctionne et ce qui ne fonctionne pas. Avec le temps, cela vous aide à repérer des tendances et à prendre de meilleures décisions.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Sports FAQ -->
  <section class="content-section content-section--alt" id="sports-faq">
    <div class="container container--narrow">
      <h2>FAQ Paris Sportifs</h2>

      <details class="faq-item">
        <summary><?php echo SITE_NAME; ?> propose-t-il des paris sportifs ?</summary>
        <div class="faq-answer">
          <p>Oui. Nous proposons un livre de paris complet avec des paris avant-match, des marchés en direct, des sports virtuels et des courses hippiques en plus de notre casino. Vous pouvez passer du casino aux paris sportifs depuis le même compte.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Sur quels sports puis-je parier ?</summary>
        <div class="faq-answer">
          <p>Nous couvrons plus de 30 sports dont le football, le tennis, le basketball, le cricket, le hockey sur glace, le MMA, la boxe, l'esport, les courses hippiques, le rugby, le football américain, le baseball et bien d'autres. Les grandes ligues comme les compétitions plus modestes sont disponibles.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Les paris en direct sont-ils disponibles ?</summary>
        <div class="faq-answer">
          <p>Oui. Les paris en direct sont disponibles sur la plupart des sports. Les cotes se mettent à jour en temps réel à mesure que les matchs progressent, et vous pouvez placer des paris tout au long de l'événement.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Que sont les sports virtuels ?</summary>
        <div class="faq-answer">
          <p>Les sports virtuels sont des événements simulés générés par des générateurs de nombres aléatoires. Ils fonctionnent 24h/24 avec de nouveaux événements toutes les quelques minutes. Nous proposons du football, basketball, tennis, courses hippiques et lévriers virtuels.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Puis-je utiliser mon solde casino pour les paris sportifs ?</summary>
        <div class="faq-answer">
          <p>Oui. <?php echo SITE_NAME; ?> utilise un solde unique pour le casino et les paris sportifs. Les dépôts vont sur un seul compte, et vous pouvez utiliser les mêmes fonds pour les machines à sous, le casino en direct ou les paris sportifs sans aucun transfert.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quel est le pari minimum sur les sports ?</summary>
        <div class="faq-answer">
          <p>Les mises minimales varient selon le sport et le marché mais sont généralement très faibles, à partir de 0,50 &euro; sur la plupart des événements. Vérifiez le coupon de pari pour connaître le minimum exact sur chaque marché.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
