<?php
/**
 * Homepage - WestAce (Spanish / ES)
 */
$page_title = 'WestAce Casino - 7.000+ Juegos, Apuestas Deportivas y Bono de Bienvenida hasta 2.000 &euro;';
$page_description = SITE_NAME . ' Casino ofrece más de 7.000 juegos de más de 100 proveedores, apuestas deportivas con apuestas en vivo, mesas con crupieres en directo y un bono de bienvenida del 100% hasta 1.000 € + 50 giros gratis. Regístrate y juega.';
$current_page = 'home';
$lang_prefix = '/es';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__badge"><?php echo __('hero_badge', 'Ya disponible - 7.000+ juegos y apuestas deportivas en vivo'); ?></div>
    <h1>
      <span class="brand-name"><?php echo SITE_NAME; ?></span><br>
      <span class="brand-type">Casino</span>
    </h1>
    <p class="hero__subtitle">Más de 7.000 juegos de 100+ proveedores, mesas con crupieres en directo, apuestas deportivas completas con apuestas en vivo y un paquete de bienvenida que premia tus tres primeros depósitos.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Paquete de Bienvenida</div>
      <div class="hero__bonus-value"><?php echo WELCOME_BONUS; ?></div>
      <div class="hero__bonus-extra">1.er Depósito: 100% hasta 1.000 &euro; + 50 Giros Gratis &middot; Depósito mín. 20 &euro;</div>
    </div>
    <div class="hero__ctas">
      <a href="/play" class="btn btn--primary btn--lg" rel="nofollow"><?php echo __('cta_play', 'Jugar Ahora'); ?></a>
      <a href="<?php echo $lang_prefix; ?>/bonuses" class="btn btn--outline btn--lg">Ver Bonos</a>
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
      <h2>Bienvenido a <?php echo SITE_NAME; ?> Casino</h2>
      <p><?php echo SITE_NAME; ?> es un casino online y plataforma de apuestas deportivas lanzado en 2026. La plataforma reúne más de 7.000 juegos de 100+ proveedores, con tragaperras, salas de casino en vivo, juegos de mesa, juegos crash, jackpots y programas de juego. Además del casino, ofrecemos apuestas deportivas completas con mercados pre-partido y en vivo, deportes virtuales y carreras de caballos. Los nuevos jugadores pueden reclamar un paquete de bienvenida en tres depósitos con un valor total de hasta 2.000 &euro; más 150 giros gratis.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Lanzamiento</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Juegos</th><td>7.000+ (tragaperras, juegos de mesa, casino en vivo, juegos crash, jackpots, programas de juego)</td></tr>
        <tr><th>Proveedores</th><td>100+ (Pragmatic Play, Playtech, Novomatic, Red Tiger, Yggdrasil, BGaming, Hacksaw Gaming y más)</td></tr>
        <tr><th>Bono de Bienvenida</th><td><?php echo WELCOME_BONUS_TEXT; ?></td></tr>
        <tr><th>Depósito mín.</th><td>10 &euro;</td></tr>
        <tr><th>Moneda</th><td>EUR</td></tr>
        <tr><th>Atención al cliente</th><td>Chat en vivo 24/7 + email</td></tr>
        <tr><th>Apuestas deportivas</th><td>Sí (deportes, apuestas en vivo, deportes virtuales, carreras de caballos)</td></tr>
        <tr><th>Móvil</th><td>Totalmente responsive, sin necesidad de app</td></tr>
      </table>

      <h3>Por qué los jugadores eligen <?php echo SITE_NAME; ?></h3>
      <ul class="check-list">
        <li>Más de 7.000 juegos de 100+ proveedores con licencia</li>
        <li>Paquete de bienvenida en tres depósitos de hasta 2.000 &euro; + 150 giros gratis</li>
        <li>Apuestas deportivas completas con live betting, deportes virtuales y carreras de caballos</li>
        <li>Casino en vivo con ruleta, blackjack, baccarat, dados y póker</li>
        <li>Reembolso diario de hasta el 15% con un requisito de apuesta de solo 1x</li>
        <li>Programa VIP de 5 niveles con gestor personal y límites más altos</li>
        <li>Compatible con criptomonedas, con bono de bienvenida y ofertas de recarga exclusivas</li>
        <li>Atención 24/7 por chat en vivo y email</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Juegos de Casino</h4>
          <p>Miles de tragaperras, variantes de blackjack y ruleta, póker, baccarat, juegos crash y mesas de casino en vivo de estudios como Pragmatic Play, Playtech, Novomatic, Red Tiger y Yggdrasil.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127183;</div>
          <h4>Casino en Vivo</h4>
          <p>Juegos con crupieres reales en directo, incluyendo ruleta, blackjack, baccarat, dados y póker. Transmisión en HD desde estudios profesionales las 24 horas del día.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Apuestas Deportivas</h4>
          <p>Plataforma completa de apuestas deportivas con mercados pre-partido y en vivo. Sigue La Liga, la Champions League, los partidos del Real Madrid y el Barça, además de deportes virtuales y carreras de caballos.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Social Proof / Recent Winners -->
  <section class="content-section winners-section" id="winners">
    <div class="container">
      <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--space-4);margin-bottom:var(--space-2)">
        <h2 style="margin-bottom:0">Últimos Ganadores</h2>
        <span class="live-dot">En vivo</span>
      </div>
      <div class="jackpot-label">Bote de Jackpot Actual</div>
      <div class="jackpot-amount" id="jackpotCounter">&euro;2.847.391</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Juegos Populares en <?php echo SITE_NAME; ?></h2>
      <p>Explora algunos de los títulos más jugados del casino. Desde tragaperras de alta volatilidad hasta los clásicos juegos de mesa, salas de casino en vivo y mercados deportivos: hay algo para cada tipo de jugador.</p>

      <div class="game-tabs">
        <button class="game-tab active">Todos los Juegos</button>
        <button class="game-tab">Tragaperras</button>
        <button class="game-tab">Casino en Vivo</button>
        <button class="game-tab">Juegos de Mesa</button>
        <button class="game-tab">Juegos Crash</button>
        <button class="game-tab">Jackpots</button>
        <button class="game-tab">Deportes</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Principales Proveedores de Juegos</h3>
          <p>Nuestro catálogo de juegos está impulsado por una amplia selección de estudios, desde los líderes del sector hasta prometedores desarrolladores independientes:</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">100+ en total</span>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-games-screen.png" alt="<?php echo SITE_NAME; ?> Casino lobby de juegos con los mejores slots de Pragmatic Play, Playtech y Novomatic" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section" id="payments">
    <div class="container">
      <h2>Métodos de Pago</h2>
      <p><?php echo SITE_NAME; ?> admite una amplia variedad de métodos de pago, incluyendo tarjetas de crédito, tarjetas prepago, monederos electrónicos como Bizum o Skrill, y criptomonedas. Los depósitos comienzan desde 10 &euro; y todos los depósitos y retiros son sin comisiones.</p>

      <table class="quick-table">
        <tr><th>Métodos de Depósito</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Depósito mín.</th><td>10 &euro;</td></tr>
        <tr><th>Retiro mín.</th><td>10 &euro;</td></tr>
        <tr><th>Retiro máx.</th><td>500 &euro;/día, 7.000 &euro;/mes</td></tr>
        <tr><th>Plazo de pago</th><td>24-72 horas</td></tr>
        <tr><th>Moneda</th><td>EUR</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">Para un desglose detallado de los métodos de retiro, límites, comisiones y consejos para agilizar tu pago, visita la <a href="<?php echo $lang_prefix; ?>/withdrawal">página de Retiros</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section content-section--alt" id="mobile">
    <div class="container">
      <h2>Casino Móvil</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p><?php echo SITE_NAME; ?> no tiene una app móvil dedicada, pero el sitio web es totalmente compatible con todos los smartphones y tablets. La plataforma en navegador ofrece las mismas funciones, juegos y herramientas de gestión de cuenta que encontrarás en la versión de escritorio. Sin descargas, solo abre tu navegador móvil, inicia sesión y juega.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/westace-mobile.png" alt="<?php echo SITE_NAME; ?> Casino lobby móvil con bono de bienvenida y navegación de juegos" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>
      <ul class="check-list">
        <li>Biblioteca completa de juegos accesible desde el navegador móvil</li>
        <li>Mesas de casino en vivo y apuestas deportivas desde cualquier lugar</li>
        <li>Deposita y retira directamente desde tu teléfono</li>
        <li>Atención al cliente por chat en vivo disponible en móvil</li>
        <li>Sin necesidad de descarga - funciona en iOS y Android</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section" id="faq">
    <div class="container container--narrow">
      <h2>Preguntas Frecuentes</h2>

      <details class="faq-item">
        <summary>¿Qué tipo de juegos puedo encontrar en <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> trabaja con 100+ proveedores, entre ellos Pragmatic Play, Playtech, Novomatic, Red Tiger, Yggdrasil, BGaming, Hacksaw Gaming y Quickspin. Puedes jugar a video slots, slots de jackpot, blackjack, ruleta, baccarat, póker, juegos crash, programas de juego y títulos de casino en vivo. También hay una sección completa de apuestas deportivas con live betting, deportes virtuales y carreras de caballos.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Cuál es el bono de bienvenida en <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>Los nuevos jugadores reciben un paquete de bienvenida en tres depósitos: 100% hasta 1.000 &euro; + 50 giros gratis en el primer depósito, 100% hasta 500 &euro; + 50 giros gratis en el segundo y 100% hasta 500 &euro; + 50 giros gratis en el tercero. Valor total: hasta 2.000 &euro; + 150 giros gratis. El depósito mínimo es de 20 &euro; por tramo. El requisito de apuesta es 35x (bono + depósito).</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Cuánto tardan los retiros?</summary>
        <div class="faq-answer">
          <p>Los retiros se procesan en un plazo de 24 a 72 horas. El retiro mínimo es de 10 &euro; para todos los métodos de pago. El límite diario de retiro es de 500 &euro; y el límite mensual es de 7.000 &euro;. No se aplican comisiones en los retiros.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Tiene <?php echo SITE_NAME; ?> un programa VIP?</summary>
        <div class="faq-answer">
          <p>Sí. <?php echo SITE_NAME; ?> ofrece un programa VIP de 5 niveles. Los beneficios incluyen porcentajes de reembolso más altos (hasta el 15%), mayores límites de retiro, procesamiento prioritario, ofertas personalizadas y un gestor VIP personal en los niveles más altos. Los criterios para avanzar entre niveles no se publican.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Puedo jugar desde mi teléfono?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> no tiene una app móvil, pero el sitio está completamente optimizado para dispositivos móviles. Puedes acceder a todos los juegos, las apuestas deportivas y las funciones de tu cuenta desde cualquier navegador moderno en smartphone o tablet.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Cómo puedo contactar con el servicio de atención al cliente?</summary>
        <div class="faq-answer">
          <p>Puedes contactar con el equipo de soporte a través del chat en vivo 24/7 directamente en el sitio web, o por email en support@westace.com. Para más detalles, visita la <a href="<?php echo $lang_prefix; ?>/support">página de Ayuda</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
