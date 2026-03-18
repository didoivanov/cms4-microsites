<?php
/**
 * Cookie Policy - WestAce (French / FR)
 */
$page_title = 'WestAce Politique de Cookies - Utilisation des Cookies';
$page_description = 'Politique de cookies de ' . DOMAIN . '. Quels cookies nous utilisons et comment les gerer.';
$current_page = 'cookies';
$lang_prefix = '/fr';

require_once __DIR__ . '/../../includes/header.php';
?>

<main>
  <section class="content-section legal-page">
    <div class="container container--narrow">
      <h1>Politique de Cookies</h1>
      <p class="legal-updated">Derniere mise a jour : 18 mars 2026</p>

      <h2>Qu'est-ce Qu'un Cookie</h2>
      <p>Les cookies sont de petits fichiers texte places sur votre appareil lorsque vous visitez un site web. Ils sont largement utilises pour faire fonctionner les sites correctement, memoriser vos preferences et fournir des donnees d'utilisation anonymisees aux proprietaires de sites.</p>

      <h2>Comment Nous Utilisons les Cookies</h2>
      <p><?php echo DOMAIN; ?> est un site affilie leger. Nous n'utilisons pas de cookies a des fins publicitaires, de personnalisation ou de suivi sur d'autres sites. Les cookies de ce site se repartissent en trois categories :</p>

      <h3>Cookies Essentiels</h3>
      <p>Ces cookies sont necessaires au bon fonctionnement du site. Ils comprennent les cookies places par notre hebergeur (Cloudflare) pour la securite et les performances, tels que la detection de bots et la protection contre les attaques DDoS. Ils ne peuvent pas etre desactives sans affecter le fonctionnement du site.</p>
      <table class="data-table">
        <thead>
          <tr><th>Cookie</th><th>Fournisseur</th><th>Finalite</th><th>Duree</th></tr>
        </thead>
        <tbody>
          <tr><td>__cf_bm</td><td>Cloudflare</td><td>Gestion des bots et securite</td><td>30 minutes</td></tr>
          <tr><td>cf_clearance</td><td>Cloudflare</td><td>Verification de controle de securite</td><td>Jusqu'a 1 an</td></tr>
        </tbody>
      </table>

      <h3>Cookies Analytiques</h3>
      <p>Nous pouvons utiliser Google Analytics pour comprendre comment les visiteurs interagissent avec le site, par exemple quelles pages sont les plus populaires et comment les visiteurs arrivent. Ces donnees sont anonymisees et agregees. Aucune information personnelle identifiable n'est collectee.</p>
      <table class="data-table">
        <thead>
          <tr><th>Cookie</th><th>Fournisseur</th><th>Finalite</th><th>Duree</th></tr>
        </thead>
        <tbody>
          <tr><td>_ga</td><td>Google Analytics</td><td>Distingue les visiteurs uniques</td><td>2 ans</td></tr>
          <tr><td>_ga_*</td><td>Google Analytics</td><td>Maintient l'etat de la session</td><td>2 ans</td></tr>
        </tbody>
      </table>

      <h3>Cookies Marketing / Affiliation</h3>
      <p>Nous ne placons pas de cookies marketing nous-memes. Cependant, lorsque vous cliquez sur un lien affilie de notre site, la plateforme de destination peut placer des cookies pour suivre la reference. Ces cookies sont places par le tiers et sont regis par sa propre politique de cookies, pas la notre.</p>

      <h2>Cookies Tiers</h2>
      <p>Lorsque vous cliquez sur un lien affilie et quittez notre site, le site de destination peut placer ses propres cookies. Nous n'avons aucun controle sur ceux-ci. Veuillez consulter la politique de cookies de l'operateur du casino pour plus de details.</p>

      <h2>Consentement aux Cookies</h2>
      <p>En vertu de la directive ePrivacy de l'UE et du RGPD, nous sommes tenus d'obtenir votre consentement avant de placer des cookies non essentiels sur votre appareil. Les cookies essentiels strictement necessaires au fonctionnement du site ne necessitent pas de consentement. En continuant a utiliser ce site, vous consentez a l'utilisation des cookies analytiques decrits ci-dessus. Vous pouvez retirer votre consentement a tout moment en ajustant les parametres de votre navigateur.</p>

      <h2>Gestion des Cookies</h2>
      <p>Vous pouvez controler et supprimer les cookies via les parametres de votre navigateur. La plupart des navigateurs vous permettent de :</p>
      <ul>
        <li>Voir quels cookies sont stockes et les supprimer individuellement</li>
        <li>Bloquer les cookies tiers</li>
        <li>Bloquer tous les cookies de sites specifiques</li>
        <li>Bloquer tous les cookies</li>
        <li>Supprimer tous les cookies a la fermeture du navigateur</li>
      </ul>
      <p>La desactivation des cookies peut affecter le fonctionnement du site, en particulier les fonctionnalites de securite fournies par Cloudflare.</p>
      <p>Pour les instructions de gestion des cookies dans votre navigateur :</p>
      <ul>
        <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener noreferrer">Google Chrome</a></li>
        <li><a href="https://support.mozilla.org/en-US/kb/cookies-information-websites-store-on-your-computer" target="_blank" rel="noopener noreferrer">Mozilla Firefox</a></li>
        <li><a href="https://support.apple.com/en-gb/guide/safari/sfri11471/mac" target="_blank" rel="noopener noreferrer">Safari</a></li>
        <li><a href="https://support.microsoft.com/en-gb/microsoft-edge/delete-cookies-in-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank" rel="noopener noreferrer">Microsoft Edge</a></li>
      </ul>

      <h2>Modifications de Cette Politique</h2>
      <p>Nous pouvons mettre a jour cette politique de cookies de temps a autre. Toute modification sera publiee sur cette page avec une date de revision actualisee.</p>

      <h2>Contact</h2>
      <p>Si vous avez des questions sur notre utilisation des cookies, veuillez nous contacter a <a href="mailto:info@westace.site">info@westace.site</a> ou visiter notre page <a href="<?php echo $lang_prefix; ?>/support">Support</a>.</p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
