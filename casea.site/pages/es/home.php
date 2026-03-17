<?php
/**
 * Homepage – Spanish
 */
$page_title = SITE_NAME . ' Casino - ' . SITE_TAGLINE;
$page_description = SITE_NAME . ' Casino ofrece más de 10.000 juegos de casino, crupieres en vivo, apuestas deportivas con más de 30 deportes y un bono de bienvenida de hasta EUR 500 más 200 giros gratis. Únete ahora y juega.';
$current_page = 'home';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__badge">Abierto ahora - aceptamos jugadores de todo el mundo</div>
    <h1>
      <span class="brand-name"><?php echo SITE_NAME; ?></span><br>
      <span class="brand-type">Casino</span>
    </h1>
    <p class="hero__subtitle">Más de 10.000 juegos de más de 90 proveedores, una casa de apuestas deportivas completa con más de 30 deportes, mesas con crupieres en vivo y recompensas que realmente valen la pena.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Pack de Bienvenida</div>
      <div class="hero__bonus-value"><?php echo WELCOME_BONUS; ?></div>
      <div class="hero__bonus-extra">Bono Deportivo: 100% hasta &euro;100 &middot; Depósito mín. &euro;20</div>
    </div>
    <div class="hero__ctas">
      <a href="/play" class="btn btn--primary btn--lg" rel="nofollow"><?php echo __('cta_play', 'Play Now'); ?></a>
      <a href="/bonuses" class="btn btn--outline btn--lg">Ver Bonos</a>
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
      <p><?php echo SITE_NAME; ?> es una plataforma de juego online donde los jugadores pueden explorar miles de opciones de apuestas en un solo lugar. Con un catálogo de más de 10.000 productos que incluyen tragamonedas, minijuegos, juegos de cartas y mesa virtuales, y una selección de salas de crupieres en vivo, nunca hay un momento aburrido. En la sección de apuestas deportivas, las cuotas favorables en más de 30 deportes mantienen el interés tanto para los aficionados al fútbol, baloncesto, tenis como a los esports.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Lanzamiento</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Juegos</th><td>10.000+ (tragamonedas, juegos de mesa, casino en vivo, juegos instantáneos)</td></tr>
        <tr><th>Proveedores</th><td>90+ (Pragmatic Play, Evolution, Microgaming, NetEnt, Playtech y más)</td></tr>
        <tr><th>Deportes</th><td>30+ deportes, esports, deportes virtuales</td></tr>
        <tr><th>Bono de Bienvenida</th><td><?php echo WELCOME_BONUS_TEXT; ?></td></tr>
        <tr><th>Depósito Mín.</th><td>EUR 10 (EUR 20 para la mayoría de bonos)</td></tr>
        <tr><th>Divisas</th><td>EUR, USD, CAD, AUD, CHF, HUF, NOK, PLN, NZD, CZK, BRL, CLP, PEN</td></tr>
        <tr><th>Soporte</th><td>Chat en vivo y email 24/7</td></tr>
        <tr><th>Móvil</th><td>Totalmente responsive, no requiere app</td></tr>
      </table>

      <h3>Por qué los Jugadores Eligen <?php echo SITE_NAME; ?></h3>
      <ul class="check-list">
        <li>Más de 10.000 juegos de más de 90 proveedores de confianza</li>
        <li>Casa de apuestas deportivas completa con apuestas pre-partido y en vivo en más de 30 deportes</li>
        <li>Múltiples opciones de bono de bienvenida para casino y deportes</li>
        <li>Bonos de recarga semanales, ofertas de cashback y tienda de fidelidad</li>
        <li>Programa VIP con gestor de cuenta personal y límites de retiro más altos</li>
        <li>Pagos con Visa, Mastercard, Skrill, criptomonedas y más</li>
        <li>Atención al cliente 24/7 por chat en vivo y email</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Juegos de Casino</h4>
          <p>Miles de tragamonedas, variaciones de blackjack y ruleta, póker, baccarat, game shows, juegos instantáneos y mesas con crupieres en vivo de los mejores estudios.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Apuestas Deportivas</h4>
          <p>Apuestas pre-partido y en vivo en las principales ligas como UEFA Champions League, NBA, NHL y torneos de Grand Slam. También disponibles deportes virtuales y esports.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127873;</div>
          <h4>Promociones</h4>
          <p>Bonos de bienvenida, ofertas de recarga semanales, múltiples programas de cashback, tienda de fidelidad, desafíos y ofertas especiales durante toda la semana.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Social Proof / Recent Winners -->
  <section class="content-section winners-section" id="winners">
    <div class="container">
      <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--space-4);margin-bottom:var(--space-2)">
        <h2 style="margin-bottom:0">Ganadores Recientes</h2>
        <span class="live-dot">Live</span>
      </div>
      <div class="jackpot-label">Bote Acumulado Actual</div>
      <div class="jackpot-amount" id="jackpotCounter">&euro;2,847,391</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Juegos Populares en <?php echo SITE_NAME; ?></h2>
      <p>Explora algunos de los títulos más jugados del casino. Desde tragamonedas de alta volatilidad hasta juegos de mesa clásicos y experiencias con crupieres en vivo, hay algo para cada tipo de jugador.</p>

      <div class="game-tabs">
        <button class="game-tab active">Todos los Juegos</button>
        <button class="game-tab">Tragamonedas</button>
        <button class="game-tab">Casino en Vivo</button>
        <button class="game-tab">Juegos de Mesa</button>
        <button class="game-tab">Game Shows</button>
        <button class="game-tab">Crash Games</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Principales Proveedores de Juegos</h3>
          <p>El catálogo está impulsado por una amplia variedad de estudios, desde líderes de la industria hasta desarrolladores independientes prometedores:</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">90+ más</span>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/casea-games.png" alt="<?php echo SITE_NAME; ?> Casino lobby de juegos con las mejores tragamonedas y proveedores" style="max-width:300px;width:100%;">
        </div>
      </div>
    </div>
  </section>

  <!-- Sportsbook -->
  <section class="content-section" id="sports">
    <div class="container">
      <h2>Apuestas Deportivas</h2>
      <div class="two-col">
        <div>
          <p>La sección de apuestas deportivas de <?php echo SITE_NAME; ?> cubre apuestas pre-partido y en vivo en eventos tanto de grandes como de pequeñas competiciones. Los aficionados al fútbol pueden apostar en todo, desde la UEFA Champions League hasta ligas de divisiones inferiores, mientras que baloncesto, tenis, hockey y una docena de deportes más completan el calendario.</p>
          <p>Los deportes virtuales como fútbol, baloncesto y carreras de galgos están disponibles las 24 horas. Las apuestas de esports cubren Dota 2, Counter-Strike, League of Legends, Call of Duty y otros títulos populares.</p>

          <h3>Deportes Disponibles</h3>
          <ul class="check-list">
            <li>Fútbol (UEFA Champions League, Premier League, Bundesliga, Serie A, La Liga)</li>
            <li>Baloncesto (NBA, EuroLeague, ligas nacionales)</li>
            <li>Tenis (Grand Slam, ATP, WTA)</li>
            <li>Hockey sobre Hielo (NHL, KHL, SHL)</li>
            <li>Esports (Dota 2, CS2, League of Legends, Call of Duty)</li>
            <li>Deportes virtuales, carreras de caballos y 25+ más</li>
          </ul>
        </div>
        <div>
          <div class="highlight-box">
            <h4>Bono de Bienvenida Deportivo</h4>
            <p>Los nuevos jugadores pueden reclamar un 100% de igualación en su primer depósito deportivo, por un valor de hasta EUR 100. Los jugadores de Finlandia, Alemania, Noruega, Suiza y Austria pueden optar a hasta EUR 200. El bono requiere un depósito mínimo de EUR 20 y un requisito de apuesta de 5x o 6x según tu país.</p>
          </div>
          <table class="quick-table" style="margin-top: var(--space-6);">
            <tr><th>Tipos de Apuesta</th><td>Pre-partido, en vivo, outright, acumuladas</td></tr>
            <tr><th>Deportes</th><td>30+ incluyendo esports y virtuales</td></tr>
            <tr><th>Características</th><td>Acumulador boost, pago anticipado, cuotas mejoradas</td></tr>
            <tr><th>Cashback</th><td>10% semanal hasta EUR 500</td></tr>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section content-section--alt" id="payments">
    <div class="container">
      <h2>Métodos de Pago</h2>
      <p><?php echo SITE_NAME; ?> admite varias opciones de pago populares. La disponibilidad depende de tu país, y los depósitos empiezan desde solo EUR 10.</p>

      <table class="quick-table">
        <tr><th>Métodos de Depósito</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Depósito Mín.</th><td>EUR 10 (EUR 20 para la mayoría de bonos)</td></tr>
        <tr><th>Retiro Mín.</th><td>EUR 10</td></tr>
        <tr><th>Retiro Máx. (Diario)</th><td>EUR 500 (VIP: EUR 1.500)</td></tr>
        <tr><th>Retiro Máx. (Mensual)</th><td>EUR 7.000 (VIP: EUR 20.000)</td></tr>
        <tr><th>Tiempo de Procesamiento</th><td>Hasta 72 horas (monederos electrónicos y cripto son los más rápidos)</td></tr>
        <tr><th>Divisas</th><td>EUR, USD, CAD, AUD, CHF, HUF, NOK, PLN, NZD, CZK, BRL, CLP, PEN</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">Para un desglose detallado de los métodos de retiro, límites, comisiones y consejos para acelerar tu pago, visita la <a href="/withdrawal">página de Retiros</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section" id="mobile">
    <div class="container">
      <h2>Casino Móvil</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p><?php echo SITE_NAME; ?> no tiene una aplicación móvil dedicada, pero el sitio web es totalmente compatible con todos los smartphones y tablets. La plataforma basada en navegador ofrece las mismas funciones, juegos y herramientas de gestión de cuenta que encontrarás en la versión de escritorio. No se necesitan descargas -- simplemente abre tu navegador móvil, inicia sesión y juega.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/casea-mobile.png" alt="<?php echo SITE_NAME; ?> Casino en el móvil" style="max-width:320px;width:100%;">
        </div>
      </div>
      <ul class="check-list">
        <li>Biblioteca completa de juegos accesible desde navegadores móviles</li>
        <li>Apuestas deportivas con mercados en vivo</li>
        <li>Deposita y retira directamente desde tu teléfono</li>
        <li>Chat en vivo disponible en móvil</li>
        <li>No necesitas descargar una app -- funciona en iOS y Android</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section content-section--alt" id="faq">
    <div class="container container--narrow">
      <h2>Preguntas Frecuentes</h2>

      <details class="faq-item">
        <summary>¿Qué tipo de juegos puedo jugar en <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> trabaja con más de 90 proveedores incluyendo Pragmatic Play, Evolution, Microgaming y Red Tiger. Puedes jugar a tragamonedas de vídeo, tragamonedas con bote, títulos Megaways, variaciones de blackjack, ruleta, baccarat, póker, game shows, crash games y mucho más. La sección deportiva cubre más de 30 deportes con opciones de apuestas pre-partido y en vivo.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Cuál es el bono de bienvenida de <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>Los nuevos jugadores de casino pueden reclamar un bono de bienvenida del 100% de hasta EUR 500 más 200 giros gratis en su primer depósito. Los jugadores de apuestas deportivas pueden optar a una igualación del 100% de hasta EUR 100 (o EUR 200 según tu país). El depósito mínimo es de EUR 20.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Cuál es el retiro máximo en <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>Los jugadores estándar pueden retirar hasta EUR 500 al día y EUR 7.000 al mes. Los miembros VIP tienen acceso a límites más altos -- hasta EUR 1.500 diarios y EUR 20.000 mensuales. El retiro mínimo es de EUR 10.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Tiene <?php echo SITE_NAME; ?> un programa VIP?</summary>
        <div class="faq-answer">
          <p>Sí. <?php echo SITE_NAME; ?> cuenta con un programa VIP basado en fidelidad donde tu rango aumenta a medida que juegas. Los beneficios incluyen un gestor de cuenta personal, límites de retiro más altos, promociones exclusivas y ofertas de cashback semanal que escalan con tu nivel.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Puedo jugar desde mi teléfono?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> no tiene una aplicación móvil, pero el sitio web es totalmente compatible con dispositivos móviles. Puedes acceder a todos los juegos, apuestas deportivas y funciones de cuenta a través de cualquier navegador moderno en tu smartphone o tablet.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Cómo puedo contactar con el servicio de atención al cliente?</summary>
        <div class="faq-answer">
          <p>Puedes contactar con el equipo de soporte a través de chat en vivo o email las 24 horas. El chat en vivo está disponible directamente en el sitio web para respuestas rápidas. Para más detalles, visita la <a href="/support">página de Soporte</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
