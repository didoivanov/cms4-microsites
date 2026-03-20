<?php
/**
 * Sports Betting Page - WestAce (Spanish / ES)
 */
$page_title = 'WestAce Apuestas Deportivas - Fútbol, Tenis, Baloncesto y Apuestas en Vivo';
$page_description = 'Apuesta en La Liga, Champions League, Copa del Rey, tenis, ACB y MotoGP en ' . SITE_NAME . '. Cuotas en tiempo real, apuestas en vivo y deportes virtuales disponibles las 24 horas.';
$current_page = 'sports';
$lang_prefix = '/es';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Apuestas Deportivas';
$hero_description = 'Cuotas prematch, apuestas en vivo, deportes virtuales y carreras de caballos, todo en un mismo lugar junto a nuestro casino completo.';
$hero_cta = 'Apostar Ahora';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Sportsbook Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Nuestras Apuestas Deportivas</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p><?php echo SITE_NAME; ?> es mucho más que un casino. Ofrecemos una plataforma de apuestas deportivas completa con mercados prematch, apuestas en vivo, deportes virtuales y carreras de caballos. Tanto si sigues La Liga, la Champions League o los torneos de tenis del Grand Slam, encontrarás cuotas competitivas y una amplia variedad de mercados en cada gran evento.</p>
          <p>Nuestras apuestas deportivas funcionan junto al casino, por lo que puedes alternar entre tragaperras, mesas con crupier en vivo y apuestas deportivas desde una sola cuenta con un único saldo. Sin necesidad de monederos separados ni transferencias internas.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-sports-screen.png" alt="<?php echo SITE_NAME; ?> apuestas deportivas mostrando cuotas en vivo de La Liga y mercados de fútbol" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Apuestas Prematch</h4>
          <p>Apuesta en partidos de más de 30 deportes antes de que comiencen. Fútbol, tenis, baloncesto, MotoGP y mucho más, con apuestas simples, combinadas y sistemas disponibles.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9889;</div>
          <h4>Apuestas en Vivo</h4>
          <p>Apuesta durante el partido con cuotas en tiempo real que se actualizan cada pocos segundos. Sigue la acción con estadísticas en directo, marcadores y mercados en vivo en todos los deportes principales.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127918;</div>
          <h4>Deportes Virtuales</h4>
          <p>Eventos simulados que se celebran las 24 horas del día: fútbol virtual, baloncesto, tenis, carreras de caballos y galgos. Resultados cada pocos minutos, sin esperar a los partidos reales.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Football - Spain Focus -->
  <section class="content-section content-section--alt" id="football">
    <div class="container">
      <h2>Fútbol: La Pasión Española</h2>
      <p>El fútbol es el rey de las apuestas en España y en <?php echo SITE_NAME; ?> lo sabemos bien. Cubrimos todas las competiciones que importan a los aficionados españoles, con mercados detallados y cuotas actualizadas en tiempo real.</p>

      <div class="two-col">
        <div>
          <h3>Competiciones Principales</h3>
          <ul class="check-list">
            <li><strong>La Liga</strong> - los partidos del Real Madrid, FC Barcelona y Atlético de Madrid entre decenas de mercados por jornada</li>
            <li><strong>Champions League</strong> - desde la fase de grupos hasta la gran final, con mercados prematch y en vivo en todos los partidos</li>
            <li><strong>Copa del Rey</strong> - la competición copera nacional con sorpresas de equipos de todas las categorías</li>
            <li><strong>Liga de Naciones y selecciones</strong> - apuesta en los partidos de la Roja en todo tipo de competiciones internacionales</li>
          </ul>
        </div>
        <div>
          <h3>Mercados de Fútbol</h3>
          <ul class="check-list">
            <li>Resultado del partido (1X2)</li>
            <li>Ambos equipos marcan</li>
            <li>Goles totales (más/menos)</li>
            <li>Handicap asiático y europeo</li>
            <li>Primer goleador y goleador en cualquier momento</li>
            <li>Resultado en el descanso y resultado final</li>
            <li>Córners y tarjetas totales</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Available Sports -->
  <section class="content-section" id="sports">
    <div class="container">
      <h2>Deportes Disponibles</h2>
      <p>Nuestra plataforma cubre una amplia variedad de deportes con ligas y torneos de todo el mundo. Con especial atención al deporte español:</p>

      <div class="two-col">
        <div>
          <h3>Deportes Más Populares</h3>
          <ul class="check-list">
            <li><strong>Fútbol</strong> - La Liga, Champions League, Copa del Rey, Bundesliga, Serie A, Premier League y más de 100 ligas adicionales</li>
            <li><strong>Tenis</strong> - Grand Slams, ATP, WTA y Challenger; legado de Rafa Nadal con especial cobertura del Abierto de España y Roland Garros</li>
            <li><strong>Baloncesto</strong> - ACB (liga española), Euroliga, NBA y competiciones internacionales FIBA</li>
            <li><strong>MotoGP</strong> - GP de España, Cataluña, Aragón y el resto del campeonato del mundo</li>
            <li><strong>Ciclismo</strong> - La Vuelta a España, Tour de Francia y Giro de Italia con mercados por etapa y clasificación general</li>
            <li><strong>Fútbol americano</strong> - NFL y college football</li>
            <li><strong>Esports</strong> - CS2, Dota 2, League of Legends, Valorant</li>
          </ul>
        </div>
        <div>
          <h3>Más Deportes</h3>
          <ul class="check-list">
            <li>Hockey sobre hielo - NHL, KHL y ligas europeas</li>
            <li>Béisbol - MLB, NPB y KBO</li>
            <li>Boxeo y MMA - UFC, Bellator y grandes veladas internacionales</li>
            <li>Balonmano - liga ASOBAL, EHF Champions League</li>
            <li>Voleibol - ligas nacionales e internacionales</li>
            <li>Tenis de mesa - eventos profesionales y mundiales</li>
            <li>Dardos, snooker y Fórmula 1</li>
          </ul>
        </div>
      </div>

      <p style="margin-top: var(--space-6);">Las apuestas en vivo están disponibles en la mayoría de los deportes listados. Las cuotas se actualizan en tiempo real según el desarrollo del partido, lo que te permite reaccionar a goles, breaks y cambios de ritmo a medida que ocurren.</p>
    </div>
  </section>

  <!-- Horse Racing -->
  <section class="content-section content-section--alt" id="horse-racing">
    <div class="container container--narrow">
      <h2>Carreras de Caballos</h2>
      <p><?php echo SITE_NAME; ?> ofrece cobertura de carreras de caballos en hipódromos del Reino Unido, Irlanda, Francia, Australia y otras grandes naciones del turf. Encontrarás mercados ante-post para los grandes festivales, además de cuotas el mismo día de la carrera con opciones a ganador, colocado y cada-way.</p>
      <p>Las grandes citas del calendario, como Cheltenham, Royal Ascot, el Grand National y la Melbourne Cup, tienen cobertura completa con una amplia gama de mercados. Para las carreras de temporada, ofrecemos apuestas estándar a ganador y colocado en la mayoría de pruebas del Reino Unido e Irlanda.</p>
    </div>
  </section>

  <!-- Virtual Sports -->
  <section class="content-section" id="virtual">
    <div class="container container--narrow">
      <h2>Deportes Virtuales</h2>
      <p>Cuando no hay partidos reales en los que apostar, nuestra sección de deportes virtuales mantiene la acción las 24 horas del día. Los eventos están simulados por generadores de números aleatorios certificados, por lo que los resultados son justos e impredecibles.</p>

      <h3>Deportes Virtuales Disponibles</h3>
      <ul>
        <li><strong>Fútbol virtual</strong> - simulaciones de partidos completos con tablas de clasificación y formatos de copa</li>
        <li><strong>Baloncesto virtual</strong> - simulaciones cuarto a cuarto con los mercados estándar del baloncesto</li>
        <li><strong>Tenis virtual</strong> - partidos set a set con opciones de ganador del partido y resultado exacto</li>
        <li><strong>Carreras de caballos virtuales</strong> - pruebas en llano y con obstáculos con apuestas a ganador, colocado y forecast</li>
        <li><strong>Galgos virtuales</strong> - carreras cortas con mercados a ganador y forecast</li>
      </ul>
      <p>Nuevos eventos virtuales comienzan cada 2-3 minutos, así que siempre hay algo en lo que apostar.</p>
    </div>
  </section>

  <!-- Sports Betting Tips -->
  <section class="content-section content-section--alt" id="tips">
    <div class="container container--narrow">
      <h2>Consejos para Apostar</h2>
      <p>Unas pautas sencillas para mantener las apuestas deportivas como un entretenimiento divertido y sostenible:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Establece un presupuesto antes de empezar.</strong> Decide cuánto estás dispuesto a apostar a la semana o al mes y no lo superes. Trátalo como un gasto de ocio, no como una inversión.
          </div>
        </li>
        <li>
          <div>
            <strong>Apuesta en deportes que conoces.</strong> Limítate a las ligas y deportes en los que tienes conocimiento real. La familiaridad con los equipos, jugadores y condiciones te da mejor criterio que perseguir mercados al azar.
          </div>
        </li>
        <li>
          <div>
            <strong>No persigas las pérdidas.</strong> Si has tenido una racha mala, no aumentes tus apuestas para intentar recuperarlo. Tómate un descanso y vuelve con la cabeza despejada.
          </div>
        </li>
        <li>
          <div>
            <strong>Lleva un registro.</strong> Apunta tus apuestas para saber qué funciona y qué no. Con el tiempo, esto te ayuda a detectar patrones y tomar mejores decisiones.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Sports FAQ -->
  <section class="content-section" id="sports-faq">
    <div class="container container--narrow">
      <h2>Preguntas Frecuentes sobre Apuestas</h2>

      <details class="faq-item">
        <summary>¿Tiene <?php echo SITE_NAME; ?> apuestas deportivas?</summary>
        <div class="faq-answer">
          <p>Sí. Ofrecemos una plataforma de apuestas completa con mercados prematch, apuestas en vivo, deportes virtuales y carreras de caballos, todo junto a nuestro casino. Puedes alternar entre casino y deportes desde la misma cuenta.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿En qué deportes puedo apostar?</summary>
        <div class="faq-answer">
          <p>Cubrimos más de 30 deportes, incluyendo fútbol (La Liga, Champions League, Copa del Rey), tenis, baloncesto (ACB, NBA), MotoGP, ciclismo (Vuelta a España), hockey sobre hielo, MMA, boxeo, esports, carreras de caballos y muchos más.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Están disponibles las apuestas en vivo?</summary>
        <div class="faq-answer">
          <p>Sí. Las apuestas en vivo están disponibles en la mayoría de deportes. Las cuotas se actualizan en tiempo real a medida que avanza el partido, y puedes apostar durante todo el evento.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Qué son los deportes virtuales?</summary>
        <div class="faq-answer">
          <p>Los deportes virtuales son eventos simulados basados en generadores de números aleatorios. Funcionan las 24 horas con nuevos eventos cada pocos minutos. Ofrecemos fútbol, baloncesto, tenis, carreras de caballos y galgos virtuales.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Puedo usar el saldo del casino para apuestas deportivas?</summary>
        <div class="faq-answer">
          <p>Sí. <?php echo SITE_NAME; ?> utiliza un saldo único para el casino y las apuestas deportivas. Los depósitos van a una sola cuenta y puedes usar los mismos fondos para tragaperras, casino en vivo o deportes sin necesidad de transferencias.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Cuál es la apuesta mínima en deportes?</summary>
        <div class="faq-answer">
          <p>Las apuestas mínimas varían según el deporte y el mercado, pero suelen ser muy bajas, desde 0,50 &euro; en la mayoría de eventos. Consulta el boletín de apuestas para conocer el mínimo exacto de cada mercado.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
