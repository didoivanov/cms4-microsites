<?php
/**
 * Bonuses Page – VipLuck Casino (French)
 */
$page_title = SITE_NAME . ' Bonus - Bonus de bienvenue, tours gratuits, cashback et r&eacute;compenses VIP';
$page_description = 'Tous les bonus ' . SITE_NAME . ' Casino en un seul endroit. Package de bienvenue jusqu\'&agrave; 2 000 EUR + 300 tours gratuits sur 3 d&eacute;p&ocirc;ts, bonus sports jusqu\'&agrave; 500 EUR, rechargements hebdomadaires, cashback, r&eacute;compenses VIP et plus encore.';
$current_page = 'bonuses';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = 'Bonus ' . SITE_NAME . ' Casino';
$hero_description = 'Toutes les promotions actives, offres de bienvenue et r&eacute;compenses de fid&eacute;lit&eacute; actuellement disponibles. Veuillez lire les conditions avant de r&eacute;clamer une offre.';
$hero_cta = 'R&eacute;clamer votre bonus';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Welcome Casino Package -->
  <section class="content-section" id="welcome">
    <div class="container">
      <h2>Bonus de bienvenue pour les nouveaux joueurs</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <p style="margin-top:0">Les nouveaux joueurs de <?php echo SITE_NAME; ?> peuvent choisir entre un package de bienvenue casino ou un package de bienvenue sports. L'offre casino est r&eacute;partie sur vos trois premiers d&eacute;p&ocirc;ts pour une valeur combin&eacute;e allant jusqu'&agrave; &euro;2 000 + 300 tours gratuits. Le package sports offre jusqu'&agrave; &euro;500 sur trois d&eacute;p&ocirc;ts. Chaque option est disponible d&egrave;s votre premier d&eacute;p&ocirc;t &eacute;ligible et ne peut pas &ecirc;tre combin&eacute;e avec d'autres promotions.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-promotions.png" alt="<?php echo SITE_NAME; ?> Casino promotions page showing welcome package and VIP cashback offers" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>

      <!-- Casino Welcome – Deposit 1 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">1er d&eacute;p&ocirc;t : 100% jusqu'&agrave; &euro;500 + 100 tours gratuits</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Effectuez votre premier d&eacute;p&ocirc;t d'au moins &euro;20 et recevez un bonus &eacute;quivalent &agrave; 100% jusqu'&agrave; &euro;500. En plus, 100 tours gratuits sont cr&eacute;dit&eacute;s par lots de 20 par jour pendant 5 jours cons&eacute;cutifs. Le premier lot est disponible imm&eacute;diatement apr&egrave;s la validation de votre d&eacute;p&ocirc;t. Chaque lot doit &ecirc;tre utilis&eacute; dans les 24 heures, sinon il expire. Un d&eacute;p&ocirc;t de &euro;10 ou plus vous donne &eacute;galement 1 cr&eacute;dit Bonus Crab pour tenter votre chance &agrave; la Machine &agrave; Pinces, o&ugrave; les prix incluent des pi&egrave;ces, des tours gratuits, des fonds bonus ou des gains en esp&egrave;ces.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">D&eacute;p&ocirc;t min.</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Mise requise</div>
            <div class="bonus-detail__value">35x (bonus + d&eacute;p&ocirc;t)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Mise tours gratuits</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validit&eacute;</div>
            <div class="bonus-detail__value">10 jours</div>
          </div>
          <div>
            <div class="bonus-detail__label">Mise max.</div>
            <div class="bonus-detail__value">&euro;5</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome – Deposit 2 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2e d&eacute;p&ocirc;t : 75% jusqu'&agrave; &euro;750 + 75 tours gratuits</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Votre deuxi&egrave;me d&eacute;p&ocirc;t de &euro;20 ou plus donne droit &agrave; un bonus de 75% jusqu'&agrave; &euro;750, plus 75 tours gratuits sur une machine &agrave; sous s&eacute;lectionn&eacute;e. Les tours gratuits sont cr&eacute;dit&eacute;s par lots de 25 par jour pendant 3 jours. Les m&ecirc;mes conditions de mise et p&eacute;riodes de validit&eacute; s'appliquent comme pour le bonus du premier d&eacute;p&ocirc;t.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">D&eacute;p&ocirc;t min.</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Mise requise</div>
            <div class="bonus-detail__value">35x (bonus + d&eacute;p&ocirc;t)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Mise tours gratuits</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validit&eacute;</div>
            <div class="bonus-detail__value">10 jours</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome – Deposit 3 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">3e d&eacute;p&ocirc;t : 50% jusqu'&agrave; &euro;750 + 125 tours gratuits</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Le troisi&egrave;me d&eacute;p&ocirc;t de &euro;20 ou plus donne un bonus de 50% jusqu'&agrave; &euro;750, ainsi que 125 tours gratuits distribu&eacute;s par lots de 25 par jour pendant 5 jours. Cela porte le package de bienvenue total &agrave; &euro;2 000 en fonds bonus et 300 tours gratuits sur vos trois premiers d&eacute;p&ocirc;ts.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">D&eacute;p&ocirc;t min.</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Mise requise</div>
            <div class="bonus-detail__value">35x (bonus + d&eacute;p&ocirc;t)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Mise tours gratuits</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validit&eacute;</div>
            <div class="bonus-detail__value">10 jours</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome – Deposit 1 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">1er d&eacute;p&ocirc;t sports : 100% jusqu'&agrave; &euro;200</div>
          <span class="bonus-card__tag">Sports</span>
        </div>
        <p>Les parieurs sportifs re&ccedil;oivent un bonus &eacute;quivalent &agrave; 100% sur leur premier d&eacute;p&ocirc;t jusqu'&agrave; &euro;200. Le montant maximum du bonus varie selon la r&eacute;gion : les joueurs de Finlande, d'Allemagne, de Norv&egrave;ge, de Suisse et d'Autriche peuvent recevoir jusqu'&agrave; &euro;200. Les joueurs italiens re&ccedil;oivent jusqu'&agrave; &euro;150. Les joueurs du Kazakhstan, d'Ouzb&eacute;kistan, du Kirghizistan, du Tadjikistan, de G&eacute;orgie et d'Azerba&iuml;djan re&ccedil;oivent jusqu'&agrave; &euro;50. Pour activer le bonus, le montant total du d&eacute;p&ocirc;t doit &ecirc;tre mis&eacute; sur des paris sportifs &agrave; une cote minimale de 1,50.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">D&eacute;p&ocirc;t min.</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Mise requise</div>
            <div class="bonus-detail__value">5x ou 6x (varie selon le pays)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Cote min.</div>
            <div class="bonus-detail__value">2,0 simples / 1,5 combin&eacute;s</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validit&eacute;</div>
            <div class="bonus-detail__value">30 jours</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome – Deposit 2 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2e d&eacute;p&ocirc;t sports : 75% jusqu'&agrave; &euro;150</div>
          <span class="bonus-card__tag">Sports</span>
        </div>
        <p>Le deuxi&egrave;me d&eacute;p&ocirc;t sportif de &euro;20 ou plus donne droit &agrave; un bonus de 75% jusqu'&agrave; &euro;150. Les m&ecirc;mes conditions d'activation et de mise s'appliquent que pour le premier bonus sports. Le d&eacute;p&ocirc;t doit &ecirc;tre enti&egrave;rement mis&eacute; sur des paris sportifs &agrave; une cote minimale de 1,50 avant que le bonus ne soit cr&eacute;dit&eacute;.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">D&eacute;p&ocirc;t min.</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Mise requise</div>
            <div class="bonus-detail__value">5x ou 6x (varie selon le pays)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validit&eacute;</div>
            <div class="bonus-detail__value">30 jours</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome – Deposit 3 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">3e d&eacute;p&ocirc;t sports : 50% jusqu'&agrave; &euro;150</div>
          <span class="bonus-card__tag">Sports</span>
        </div>
        <p>Le troisi&egrave;me d&eacute;p&ocirc;t sportif de &euro;20 ou plus donne droit &agrave; un bonus de 50% jusqu'&agrave; &euro;150. Cela compl&egrave;te le package de bienvenue sports pour une valeur combin&eacute;e allant jusqu'&agrave; &euro;500 sur trois d&eacute;p&ocirc;ts. Toutes les conditions de mise doivent &ecirc;tre remplies dans les 30 jours suivant chaque d&eacute;p&ocirc;t.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">D&eacute;p&ocirc;t min.</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Mise requise</div>
            <div class="bonus-detail__value">5x ou 6x (varie selon le pays)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validit&eacute;</div>
            <div class="bonus-detail__value">30 jours</div>
          </div>
        </div>
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <div class="highlight-box" style="margin:0">
            <h4>Code promo <?php echo SITE_NAME; ?></h4>
            <p>Si vous disposez d'un code promo, vous pouvez le saisir lors de l'inscription. Le champ de code appara&icirc;t sur le formulaire d'inscription, juste apr&egrave;s la s&eacute;lection de votre bonus de bienvenue pr&eacute;f&eacute;r&eacute;. Les codes promo peuvent donner acc&egrave;s &agrave; des offres sp&eacute;ciales ou &agrave; des conditions de bonus modifi&eacute;es, il vaut donc la peine de v&eacute;rifier avant de d&eacute;poser.</p>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-account.png" alt="<?php echo SITE_NAME; ?> Casino bonus selection screen showing casino and sports welcome options" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>

      <div class="highlight-box" style="margin-top: var(--space-4);">
        <h4>R&egrave;gle de gain maximum</h4>
        <p>Les joueurs r&eacute;sidant au Br&eacute;sil, au Chili, au Japon, au P&eacute;rou et en Tha&iuml;lande sont soumis &agrave; un plafond de gain maximum de 10x le montant du bonus sur toutes les mises effectu&eacute;es avec des fonds bonus. Cela s'applique aux bonus de bienvenue, aux bonus de rechargement et &agrave; toute autre offre promotionnelle. Les gains d&eacute;passant ce plafond seront ajust&eacute;s en cons&eacute;quence.</p>
      </div>
    </div>
  </section>

  <!-- Reload & Weekly -->
  <section class="content-section content-section--alt" id="reload">
    <div class="container">
      <h2>Bonus de rechargement hebdomadaires</h2>
      <p><?php echo SITE_NAME; ?> continue les promotions bien au-del&agrave; de la phase d'accueil. Ces offres r&eacute;currentes se renouvellent chaque semaine, donnant aux joueurs actifs quelque chose &agrave; r&eacute;clamer chaque semaine.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Boost hebdomadaire : 50 tours gratuits</div>
          <span class="bonus-card__tag">Lundi - Jeudi</span>
        </div>
        <p>D&eacute;posez &euro;20 ou plus entre lundi et jeudi et recevez 50 tours gratuits sur une machine &agrave; sous s&eacute;lectionn&eacute;e. Vous devez vous inscrire &agrave; l'offre chaque semaine avant de d&eacute;poser. Les tours doivent &ecirc;tre utilis&eacute;s dans les 7 jours, et les gains sont soumis &agrave; une condition de mise de 40x avec un d&eacute;lai de 10 jours. Mise maximale tant que le bonus est actif : &euro;5.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Rechargement week-end : 50% jusqu'&agrave; &euro;500 + 75 tours gratuits</div>
          <span class="bonus-card__tag">Vendredi - Dimanche</span>
        </div>
        <p>D&eacute;posez au moins &euro;20 le week-end et recevez un bonus de 50% jusqu'&agrave; &euro;500. Si votre d&eacute;p&ocirc;t est de &euro;50 ou plus, vous recevez &eacute;galement 75 tours gratuits sur une machine &agrave; sous s&eacute;lectionn&eacute;e. Vous devez vous inscrire &agrave; l'offre avant de d&eacute;poser. La condition de mise est de 35x sur le d&eacute;p&ocirc;t et le bonus, et 40x sur les gains des tours gratuits. Vous disposez de 10 jours pour remplir les conditions.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Sp&eacute;cial dimanche : 30% jusqu'&agrave; &euro;300 + 50 tours gratuits</div>
          <span class="bonus-card__tag">Dimanche uniquement</span>
        </div>
        <p>Une offre suppl&eacute;mentaire r&eacute;serv&eacute;e au dimanche pour les joueurs qui veulent un coup de pouce en d&eacute;but de semaine. D&eacute;posez &euro;20 ou plus et recevez un bonus de 30% jusqu'&agrave; &euro;300 plus 50 tours gratuits. L'inscription &agrave; l'offre est obligatoire. La condition de mise est de 35x sur le d&eacute;p&ocirc;t et le bonus, 40x sur les gains des tours gratuits, avec un d&eacute;lai de 10 jours.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Rechargement sports hebdomadaire : 55% jusqu'&agrave; &euro;300</div>
          <span class="bonus-card__tag">Sports</span>
        </div>
        <p>Une fois par semaine, votre d&eacute;p&ocirc;t le plus important donne droit &agrave; un bonus sports de 55% d'une valeur allant jusqu'&agrave; &euro;300. Le d&eacute;p&ocirc;t doit &ecirc;tre mis&eacute; une fois sur des paris sportifs &agrave; une cote minimale de 1,50 avant que le bonus ne soit cr&eacute;dit&eacute;. Vous pouvez ensuite le r&eacute;clamer via le chat en direct ou par email. Les conditions de mise doivent &ecirc;tre remplies dans les 30 jours, et le gain maximum de ce bonus est de 10x sa valeur.</p>
      </div>
    </div>
  </section>

  <!-- Cashback -->
  <section class="content-section" id="cashback">
    <div class="container">
      <h2>Programmes de cashback</h2>
      <p><?php echo SITE_NAME; ?> propose trois programmes de cashback distincts : cashback quotidien pour les jeux de casino, cashback hebdomadaire pour le casino en direct et cashback hebdomadaire pour les paris sportifs. Chaque programme a ses propres conditions et proc&eacute;dure de r&eacute;clamation.</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Cashback casino quotidien</h4>
          <p>Disponible &agrave; partir du niveau VIP 3 et au-dessus. Le VIP 3 re&ccedil;oit 5% par jour jusqu'&agrave; &euro;200. Le VIP 4 obtient 10% jusqu'&agrave; &euro;300. Le VIP 5 re&ccedil;oit 15% jusqu'&agrave; &euro;500. Le cashback est cr&eacute;dit&eacute; automatiquement &agrave; 04h00 UTC avec une condition de mise de 1x. Vous devez vous r&eacute;inscrire toutes les 4 semaines.</p>
        </div>
        <div class="info-card">
          <h4>Cashback casino en direct : 25% jusqu'&agrave; &euro;350</h4>
          <p>Cashback hebdomadaire sur les pertes nettes des jeux de casino en direct. La perte minimale &eacute;ligible est de &euro;5. Contactez le support le lundi apr&egrave;s 06h00 UTC (avant 23h59 UTC) pour r&eacute;clamer. Une fois cr&eacute;dit&eacute;, le cashback est soumis &agrave; une condition de mise de 1x avant retrait.</p>
        </div>
        <div class="info-card">
          <h4>Cashback sports : 15% jusqu'&agrave; &euro;500</h4>
          <p>Couvre les pertes nettes des paris sportifs plac&eacute;s du lundi au dimanche. Une perte minimale de &euro;20 est requise pour &ecirc;tre &eacute;ligible. Contactez le support le lundi pour r&eacute;clamer. Le cashback est soumis &agrave; une condition de mise de 3x et ne peut &ecirc;tre utilis&eacute; que dans la section Sports.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sports Promos -->
  <section class="content-section content-section--alt" id="sports-promos">
    <div class="container">
      <h2>Promotions paris sportifs</h2>
      <p>Au-del&agrave; du bonus de bienvenue et du cashback, la section paris sportifs comprend plusieurs outils qui ajoutent de la valeur &agrave; vos mises.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Boost accumulateur : jusqu'&agrave; 100%</div>
        </div>
        <p>Placez un pari combin&eacute; avec 3 s&eacute;lections ou plus, chacune &agrave; une cote de 1,40+, et vos gains re&ccedil;oivent un bonus. Le multiplicateur commence &agrave; 3% pour 3 s&eacute;lections et monte jusqu'&agrave; 100% pour 21 s&eacute;lections ou plus. Seuls les paris en argent r&eacute;el comptent. Demander un retrait avant que le boost ne soit cr&eacute;dit&eacute; annule le bonus.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Paiement anticip&eacute; 2 buts d'avance</div>
        </div>
        <p>Si votre &eacute;quipe m&egrave;ne de 2 buts, votre pari pr&eacute;-match 1X2 est r&eacute;gl&eacute; int&eacute;gralement comme gagnant -- pas besoin d'attendre le coup de sifflet final. Cette offre s'applique uniquement aux paris victoire domicile ou ext&eacute;rieur. Les paris en direct et les paris sur le nul sont exclus, et l'encaissement anticip&eacute; annule le paiement anticip&eacute;.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Boost sports : 20% jusqu'&agrave; &euro;100</div>
        </div>
        <p>Un boost sports hebdomadaire disponible pour tous les joueurs actifs. D&eacute;posez &euro;20 ou plus et recevez un bonus de 20% jusqu'&agrave; &euro;100 pour les paris sportifs. Le bonus doit &ecirc;tre mis&eacute; 5x &agrave; une cote minimale de 1,50 dans les 14 jours. L'inscription &agrave; l'offre est requise via votre profil.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Avantage vendredi : pari gratuit jusqu'&agrave; &euro;50</div>
        </div>
        <p>Chaque vendredi, placez un pari sportif &eacute;ligible de &euro;20 ou plus &agrave; une cote minimale de 1,80. Si le pari est perdant, vous recevez un pari gratuit d'une valeur de 50% de votre mise, jusqu'&agrave; &euro;50. Le pari gratuit doit &ecirc;tre utilis&eacute; dans les 3 jours et est soumis &agrave; une condition de mise de 3x &agrave; une cote minimale de 1,50.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Rechargement sports week-end : 40% jusqu'&agrave; &euro;200</div>
        </div>
        <p>D&eacute;posez &euro;20 ou plus le samedi ou le dimanche et recevez un bonus sports de 40% jusqu'&agrave; &euro;200. Le d&eacute;p&ocirc;t doit &ecirc;tre mis&eacute; une fois sur des paris sportifs &agrave; une cote minimale de 1,50 avant que le bonus ne soit activ&eacute;. Les conditions de mise doivent &ecirc;tre remplies dans les 30 jours, et le paiement maximum de ce bonus est de 10x sa valeur.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Cotes am&eacute;lior&eacute;es</div>
        </div>
        <p>Certains march&eacute;s pr&eacute;-match 1X2 proposent occasionnellement des cotes bonifi&eacute;es. Cherchez le label "Enhanced Prices" dans la description du march&eacute;. Les gains des paris &agrave; cotes am&eacute;lior&eacute;es sont pay&eacute;s en argent r&eacute;el sans condition de mise suppl&eacute;mentaire.</p>
      </div>
    </div>
  </section>

  <!-- VIP, Shop, Crab -->
  <section class="content-section" id="vip">
    <div class="container">
      <h2>Programme VIP &amp; extras</h2>
      <div class="two-col">
        <div>
          <h3>Programme VIP</h3>
          <p><?php echo SITE_NAME; ?> propose un programme de fid&eacute;lit&eacute; &agrave; cinq niveaux dans lequel vous progressez en fonction de votre activit&eacute; de mise. Les niveaux sont Bronze, Silver, Gold, Platinum et Diamond. Au fur et &agrave; mesure de votre progression, vous acc&eacute;dez &agrave; des avantages tels qu'un gestionnaire de compte personnel, des limites de retrait plus &eacute;lev&eacute;es, des offres de bonus exclusives et des pourcentages de cashback sup&eacute;rieurs. Les membres Diamond acc&egrave;dent aux meilleures offres de cashback hebdomadaires, aux retraits prioritaires et &agrave; des invitations &agrave; des &eacute;v&eacute;nements exclusifs.</p>

          <h4>Avantages par niveau VIP</h4>
          <table class="quick-table">
            <tr><th>Niveau</th><th>Avantages</th></tr>
            <tr><td>Bronze</td><td>Taux de cashback de base, acc&egrave;s aux promotions standard, r&eacute;compenses en pi&egrave;ces sur l'activit&eacute;</td></tr>
            <tr><td>Silver</td><td>Cashback am&eacute;lior&eacute; (3%), traitement des retraits plus rapide, bonus d'anniversaire</td></tr>
            <tr><td>Gold</td><td>Cashback de 5% jusqu'&agrave; &euro;200/jour, gestionnaire de compte personnel, limites de retrait plus &eacute;lev&eacute;es</td></tr>
            <tr><td>Platinum</td><td>Cashback de 10% jusqu'&agrave; &euro;300/jour, promotions exclusives, support prioritaire</td></tr>
            <tr><td>Diamond</td><td>Cashback de 15% jusqu'&agrave; &euro;500/jour, limites les plus &eacute;lev&eacute;es, &eacute;v&eacute;nements VIP, offres personnalis&eacute;es</td></tr>
          </table>

          <h3>Bonus Crab</h3>
          <p>Chaque d&eacute;p&ocirc;t de &euro;10 ou plus vous donne 1 cr&eacute;dit Bonus Crab. Utilisez-le pour "attraper" un prix al&eacute;atoire dans la Machine &agrave; Pinces -- les r&eacute;compenses possibles incluent des fonds bonus, des tours gratuits ou des pi&egrave;ces. Un petit bonus quotidien qui ajoute de la vari&eacute;t&eacute; &agrave; votre exp&eacute;rience de jeu.</p>
        </div>
        <div>
          <h3>Pi&egrave;ces &amp; boutique</h3>
          <p>Les pi&egrave;ces sont gagn&eacute;es gr&acirc;ce au jeu, aux d&eacute;fis et aux promotions. Vous pouvez les d&eacute;penser dans la boutique <?php echo SITE_NAME; ?> pour des r&eacute;compenses allant des tours gratuits sur des machines &agrave; sous s&eacute;lectionn&eacute;es (par ex. 5 tours sur Sweet Bonanza pour 30 pi&egrave;ces) aux fonds bonus (&euro;5 pour 50 pi&egrave;ces, jusqu'&agrave; &euro;250 pour 1 200 pi&egrave;ces). Un excellent moyen de convertir votre fid&eacute;lit&eacute; en r&eacute;compenses concr&egrave;tes &agrave; votre rythme.</p>

          <h3>D&eacute;fis</h3>
          <p>Des d&eacute;fis hebdomadaires vous r&eacute;compensent pour avoir accompli des objectifs simples. Les d&eacute;fis casino peuvent vous demander de placer des mises de &euro;0,50 sur des machines &agrave; sous sp&eacute;cifiques, tandis que les d&eacute;fis sports peuvent exiger des mises de &euro;15 sur des matchs avec une cote minimale de 2,0. Chaque d&eacute;fi accompli rapporte des pi&egrave;ces, et en compl&eacute;ter 20 en une semaine donne un bonus de 50 pi&egrave;ces.</p>

          <h3>Sp&eacute;cial anniversaire</h3>
          <p>&Agrave; la date anniversaire de votre inscription, <?php echo SITE_NAME; ?> vous offre un package bonus sp&eacute;cial. L'offre est adapt&eacute;e &agrave; votre niveau VIP et &agrave; votre activit&eacute;, et est livr&eacute;e automatiquement sur votre compte &agrave; la date anniversaire. V&eacute;rifiez vos notifications ou contactez le support si vous pensez que votre bonus d'anniversaire est manquant.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- No-Deposit Info -->
  <section class="content-section content-section--alt" id="no-deposit">
    <div class="container container--narrow">
      <h2>Bonus sans d&eacute;p&ocirc;t <?php echo SITE_NAME; ?></h2>
      <p>Actuellement, <?php echo SITE_NAME; ?> ne propose pas de bonus sans d&eacute;p&ocirc;t classique. Cependant, la fonctionnalit&eacute; Bonus Crab r&eacute;compense chaque d&eacute;p&ocirc;t de &euro;10 ou plus avec un essai gratuit &agrave; la Machine &agrave; Pinces, o&ugrave; vous pouvez gagner des tours, des fonds bonus, des pi&egrave;ces ou des gains en esp&egrave;ces sans mise suppl&eacute;mentaire sur le prix original. C'est ce qui se rapproche le plus d'un avantage sans d&eacute;p&ocirc;t actuellement disponible sur la plateforme.</p>
      <p>Gardez un oeil sur la section Promotions et revenez r&eacute;guli&egrave;rement, car le casino renouvelle fr&eacute;quemment ses offres et pourrait introduire des offres sans d&eacute;p&ocirc;t ou des codes bonus gratuits &agrave; l'avenir.</p>
    </div>
  </section>

  <!-- Bonus FAQ -->
  <section class="content-section" id="bonus-faq">
    <div class="container container--narrow">
      <h2>FAQ sur les bonus</h2>

      <details class="faq-item">
        <summary>Puis-je utiliser un code promo chez <?php echo SITE_NAME; ?> ?</summary>
        <div class="faq-answer">
          <p>Oui. Lors de l'inscription, vous avez la possibilit&eacute; de saisir un code promo apr&egrave;s avoir s&eacute;lectionn&eacute; votre bonus de bienvenue pr&eacute;f&eacute;r&eacute;. Si vous disposez d'un code valide, saisissez-le pour activer les avantages associ&eacute;s.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Puis-je cumuler plusieurs bonus ?</summary>
        <div class="faq-answer">
          <p>Non. Les bonus de bienvenue et les promotions de rechargement ne sont pas cumulables. Vous devez compl&eacute;ter ou annuler tout bonus actif avant d'en r&eacute;clamer un nouveau. Certains bonus peuvent &ecirc;tre annul&eacute;s depuis la section Profil de votre compte ou en contactant le support.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Que se passe-t-il si je demande un retrait avant d'avoir rempli les conditions de mise ?</summary>
        <div class="faq-answer">
          <p>Demander un retrait avant que les conditions de mise ne soient remplies annulera le bonus et tous les gains associ&eacute;s. Assurez-vous d'avoir enti&egrave;rement compl&eacute;t&eacute; les conditions de mise avant de demander un retrait.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Tous les jeux contribuent-ils de la m&ecirc;me mani&egrave;re aux conditions de mise ?</summary>
        <div class="faq-answer">
          <p>Non. Les diff&eacute;rents types de jeux contribuent &agrave; des taux diff&eacute;rents. Les machines &agrave; sous contribuent g&eacute;n&eacute;ralement &agrave; 100%, tandis que les jeux de table et les titres de casino en direct contribuent moins. Consultez les conditions du bonus pour le tableau de contribution exact.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Les d&eacute;p&ocirc;ts via Skrill et Neteller sont-ils &eacute;ligibles aux bonus ?</summary>
        <div class="faq-answer">
          <p>Dans la plupart des cas, les d&eacute;p&ocirc;ts effectu&eacute;s via Skrill ou Neteller ne sont pas &eacute;ligibles aux bonus de bienvenue. Consultez les conditions de la promotion concern&eacute;e pour d'&eacute;ventuelles exceptions.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>La r&egrave;gle de gain maximum s'applique-t-elle &agrave; moi ?</summary>
        <div class="faq-answer">
          <p>Le plafond de gain maximum de 10x s'applique aux r&eacute;sidents du Br&eacute;sil, du Chili, du Japon, du P&eacute;rou et de la Tha&iuml;lande. Si vous r&eacute;sidez dans l'un de ces pays, vos gains issus de mises avec des fonds bonus sont plafonn&eacute;s &agrave; 10 fois le montant du bonus. Les joueurs d'autres r&eacute;gions ne sont pas concern&eacute;s par cette r&egrave;gle.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Comment fonctionne le bonus d'anniversaire ?</summary>
        <div class="faq-answer">
          <p>Chaque ann&eacute;e, &agrave; la date anniversaire de votre inscription, <?php echo SITE_NAME; ?> cr&eacute;dite un bonus sp&eacute;cial sur votre compte. La taille et le type de l'offre d&eacute;pendent de votre niveau VIP et de votre activit&eacute; globale. Le bonus est cr&eacute;dit&eacute; automatiquement -- v&eacute;rifiez vos notifications ou contactez le support si vous ne le recevez pas.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
