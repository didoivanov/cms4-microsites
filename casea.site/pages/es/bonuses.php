<?php
/**
 * Bonuses Page – Spanish
 */
$page_title = SITE_NAME . ' Bonos - Bono de Bienvenida, Giros Gratis, Códigos Promo & Ofertas Sin Depósito';
$page_description = 'Todos los bonos de ' . SITE_NAME . ' Casino en un solo lugar. Bono de bienvenida de hasta EUR 500 + 200 giros gratis, códigos promo sin depósito, ofertas de recarga semanales, cashback y recompensas VIP.';
$current_page = 'bonuses';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Bonos del Casino';
$hero_description = 'Todas las promociones activas, ofertas de bienvenida y recompensas de fidelidad disponibles actualmente. Asegúrate de leer los términos antes de reclamar cualquier oferta.';
$hero_cta = 'Reclama Tu Bono';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Welcome Bonuses -->
  <section class="content-section" id="welcome">
    <div class="container">
      <h2>Bonos de Bienvenida para Nuevos Jugadores</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <p style="margin-top:0">Los nuevos depositantes en <?php echo SITE_NAME; ?> pueden elegir entre varias ofertas de bienvenida según prefieran juegos de casino o apuestas deportivas. Cada opción está disponible en tu primer depósito y no se puede combinar con otras promociones.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/casea-bonuses.png" alt="<?php echo SITE_NAME; ?> Casino promociones y ofertas de bono de bienvenida" style="max-width:300px;width:100%;">
        </div>
      </div>

      <!-- Casino Welcome -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">100% hasta &euro;500 + 200 Giros Gratis</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Deposita un mínimo de EUR 20 para recibir una igualación completa del 100% en tu primer depósito, con un tope de EUR 500. Además, se distribuyen 200 giros gratis en lotes de 20 por día durante 10 días consecutivos. El primer lote está disponible justo después de tu depósito. Debes reclamar cada serie en un plazo de 24 horas o caducará. Un depósito de al menos EUR 10 también te da 1 crédito de Bonus Crab para probar suerte en la Máquina de Garra, donde los premios incluyen monedas, giros gratis, bonos o recompensas en efectivo.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Depósito Mín.</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Requisito de Apuesta</div>
            <div class="bonus-detail__value">35x (bono + depósito)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Apuesta Giros Gratis</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validez</div>
            <div class="bonus-detail__value">10 días</div>
          </div>
          <div>
            <div class="bonus-detail__label">Apuesta Máx.</div>
            <div class="bonus-detail__value">&euro;5</div>
          </div>
        </div>
      </div>

      <!-- Multi-Deposit Welcome -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">250% hasta &euro;3.000 + 350 Giros Gratis</div>
          <span class="bonus-card__tag">Pack de 4 Depósitos</span>
        </div>
        <p>Un paquete de bienvenida multidepósito repartido en tus cuatro primeros depósitos. El primer depósito te da un 100% hasta EUR 1.000 más 200 giros gratis. El segundo aporta un 75% hasta EUR 500. El tercero añade un 50% hasta EUR 500 más 50 giros gratis, y el cuarto lo completa con un 25% hasta EUR 1.000 más 100 giros gratis.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Depósito Mín.</div>
            <div class="bonus-detail__value">&euro;20 por depósito</div>
          </div>
          <div>
            <div class="bonus-detail__label">Requisito de Apuesta</div>
            <div class="bonus-detail__value">35x por bono</div>
          </div>
          <div>
            <div class="bonus-detail__label">Retiro Máx.</div>
            <div class="bonus-detail__value">10x el importe del bono</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validez</div>
            <div class="bonus-detail__value">10 días por bono</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">100% Bono Deportivo hasta &euro;100</div>
          <span class="bonus-card__tag">Deportes</span>
        </div>
        <p>Los apostadores deportivos pueden obtener una igualación del 100% en su primer depósito. El bono máximo varía según la región: los jugadores de Finlandia, Alemania, Noruega, Suiza y Austria pueden recibir hasta EUR 200. Los jugadores italianos obtienen hasta EUR 150. Los jugadores de Kazajistán, Uzbekistán, Kirguistán, Tayikistán, Georgia y Azerbaiyán pueden obtener hasta EUR 50. Para activar el bono, el importe total del depósito debe apostarse en apuestas deportivas con cuotas de al menos 1,50.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Depósito Mín.</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Requisito de Apuesta</div>
            <div class="bonus-detail__value">5x o 6x (según país)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Cuota Mín.</div>
            <div class="bonus-detail__value">2.0 simples / 1.5 combinadas</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validez</div>
            <div class="bonus-detail__value">30 días</div>
          </div>
        </div>
      </div>

      <div class="highlight-box">
        <h4>Código Promo de <?php echo SITE_NAME; ?></h4>
        <p>Si tienes un código promo, puedes introducirlo durante el proceso de registro. El campo del código aparece en el formulario de registro justo después de seleccionar tu bono de bienvenida preferido. Los códigos promo pueden desbloquear ofertas especiales o condiciones de bono ajustadas, así que vale la pena comprobarlo antes de depositar.</p>
      </div>
    </div>
  </section>

  <!-- Reload & Weekly -->
  <section class="content-section content-section--alt" id="reload">
    <div class="container">
      <h2>Bonos de Recarga Semanales</h2>
      <p><?php echo SITE_NAME; ?> mantiene las promociones después de la fase de bienvenida. Estas ofertas recurrentes se renuevan cada semana, por lo que los jugadores activos siempre tienen algo que reclamar.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">66 Giros Gratis Semanales</div>
          <span class="bonus-card__tag">Lunes - Jueves</span>
        </div>
        <p>Realiza un depósito de EUR 20 o más entre lunes y jueves para recibir 66 giros gratis en una tragamonedas destacada. Debes activar la oferta cada semana antes de depositar. Los giros deben usarse en un plazo de 7 días, y las ganancias tienen un requisito de apuesta de 40x con un plazo de 10 días para completarlo. Apuesta máxima mientras el bono esté activo: EUR 5.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Recarga de Fin de Semana: 50% hasta &euro;777 + 77 Giros Gratis</div>
          <span class="bonus-card__tag">Viernes - Domingo</span>
        </div>
        <p>Deposita al menos EUR 20 en fin de semana para obtener una igualación del 50% hasta EUR 777. Si tu depósito es de EUR 50 o más, también recibes 77 giros gratis en una tragamonedas seleccionada. Es necesario activar la oferta antes de depositar. El requisito de apuesta es 35x sobre depósito más bono y 40x sobre ganancias de giros gratis. Tienes 10 días para cumplir los requisitos.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Recarga Deportiva Semanal: 55% hasta &euro;750</div>
          <span class="bonus-card__tag">Deportes</span>
        </div>
        <p>Una vez por semana, tu depósito más grande cualifica para un bono deportivo del 55% hasta EUR 750. El depósito debe apostarse una vez en apuestas deportivas con cuotas de 1,50 o más antes de que se acredite el bono. Después puedes solicitarlo por chat en vivo o email. Los requisitos de apuesta deben cumplirse en un plazo de 30 días, y el retiro máximo de este bono es 10x su valor.</p>
      </div>
    </div>
  </section>

  <!-- Cashback -->
  <section class="content-section" id="cashback">
    <div class="container">
      <h2>Programas de Cashback</h2>
      <p><?php echo SITE_NAME; ?> cuenta con tres programas de cashback separados: cashback diario para juegos de casino, cashback semanal para el casino en vivo y cashback semanal para apuestas deportivas. Cada programa tiene sus propios términos y proceso de reclamación.</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Cashback Diario de Casino</h4>
          <p>Disponible desde el nivel VIP 2 en adelante. VIP 2 recibe 3% hasta EUR 100 diarios. VIP 3 recibe 5% hasta EUR 200. VIP 4 recibe 10% hasta EUR 300. VIP 5 recibe 15% hasta EUR 400. El cashback se acredita automáticamente a las 04:00 UTC y requiere 1x de apuesta. Debes activarlo cada 4 semanas.</p>
        </div>
        <div class="info-card">
          <h4>Cashback de Casino en Vivo: 25% hasta &euro;350</h4>
          <p>Cashback semanal sobre pérdidas netas en juegos de casino en vivo. La pérdida mínima para cualificar es de EUR 5. Contacta con atención al cliente el lunes después de las 06:00 UTC (antes de las 23:59 UTC) para reclamarlo. Una vez acreditado, el cashback requiere 1x de apuesta antes del retiro.</p>
        </div>
        <div class="info-card">
          <h4>Cashback Deportivo: 10% hasta &euro;500</h4>
          <p>Cubre las pérdidas netas en apuestas deportivas de lunes a domingo. Pérdida mínima de EUR 20 para cualificar. Contacta con soporte el lunes para reclamarlo. El cashback tiene un requisito de apuesta de 3x y solo puede usarse en la sección de Deportes.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sports Promos -->
  <section class="content-section content-section--alt" id="sports-promos">
    <div class="container">
      <h2>Promociones de Apuestas Deportivas</h2>
      <p>Además del bono de bienvenida y el cashback, la sección deportiva incluye varias herramientas diseñadas para añadir valor a tus apuestas.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Accumulator Boost: hasta 100%</div>
        </div>
        <p>Realiza una apuesta combinada con 3 o más selecciones a cuotas de 1,40+ cada una, y tus ganancias reciben un impulso. El multiplicador comienza en un 3% para 3 selecciones y sube hasta el 100% para 21 o más. Solo cuentan las apuestas con dinero real. Solicitar un retiro antes de que se acredite el bono lo anulará.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Pago Anticipado por 2 Goles de Ventaja</div>
        </div>
        <p>Si tu equipo saca una ventaja de 2 goles, tu apuesta pre-partido 1X2 se paga en su totalidad -- sin necesidad de esperar al final del partido. Esta oferta se aplica solo a apuestas de victoria local o visitante. Las apuestas en vivo y las apuestas al empate quedan excluidas, y el cobro anticipado cancelará el pago anticipado.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Bet Builder: 50% Sin Riesgo hasta &euro;50</div>
        </div>
        <p>Realiza un Bet Builder con cuotas de 1,70 o más usando al menos EUR 20 en dinero real. Si pierdes, recibes una apuesta gratuita del 50% de tu apuesta (hasta EUR 50). Disponible una vez por semana. La apuesta gratuita debe usarse en un plazo de 3 días y tiene un requisito de apuesta de 3x con cuotas de 1,50+.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Cuotas Mejoradas</div>
        </div>
        <p>Algunos mercados pre-partido 1X2 seleccionados ofrecen ocasionalmente cuotas aumentadas. Busca el indicador "Enhanced Prices" en la descripción del mercado. Las ganancias de apuestas con cuotas mejoradas se pagan como dinero real sin apuesta adicional.</p>
      </div>
    </div>
  </section>

  <!-- VIP, Shop, Crab -->
  <section class="content-section" id="vip">
    <div class="container">
      <h2>Programa VIP &amp; Extras</h2>
      <div class="two-col">
        <div>
          <h3>Programa VIP</h3>
          <p><?php echo SITE_NAME; ?> cuenta con un programa de fidelidad multinivel por el que progresas según tu actividad de apuestas. A medida que subes de rango, desbloqueas beneficios como un gestor de cuenta personal, límites de retiro más altos, ofertas de bonos exclusivas y porcentajes de cashback más altos. Los niveles VIP más altos dan acceso a las mejores ofertas semanales de cashback y un procesamiento más rápido en los pagos.</p>

          <h3>Bonus Crab</h3>
          <p>Cada depósito de EUR 20 o más te otorga 1 crédito de Bonus Crab. Úsalo para "atrapar" un premio aleatorio de la Máquina de Garra -- las posibles recompensas incluyen dinero de bono, giros gratis o monedas. Es un pequeño extra diario que añade variedad a tus sesiones.</p>
        </div>
        <div>
          <h3>Tienda Exclusiva</h3>
          <p>Las monedas ganadas a través del juego, desafíos y promociones se pueden gastar en la tienda. Las recompensas van desde giros gratis en tragamonedas seleccionadas (ej. 5 giros en Sweet Bonanza por 30 monedas) hasta dinero de bono (EUR 5 por 50 monedas, hasta EUR 250 por 1.200 monedas). Es una buena forma de convertir tu fidelidad en recompensas tangibles a tu propio ritmo.</p>

          <h3>Desafíos</h3>
          <p>Los desafíos semanales te premian por cumplir objetivos sencillos. Los desafíos de casino pueden pedirte que hagas apuestas de EUR 0,30 en tragamonedas específicas, mientras que los desafíos deportivos pueden requerir apuestas de EUR 15 en partidos con cuotas mínimas de 2,0. Cada desafío completado te da monedas, y completar 20 en una semana trae un bono de 50 monedas.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- No-Deposit Info -->
  <section class="content-section content-section--alt" id="no-deposit">
    <div class="container container--narrow">
      <h2>Bono Sin Depósito de <?php echo SITE_NAME; ?></h2>
      <p>Actualmente, <?php echo SITE_NAME; ?> no ofrece un bono clásico sin depósito. Sin embargo, la función Bonus Crab recompensa cada depósito de EUR 10 o más con un intento gratuito en la Máquina de Garra, donde puedes ganar giros, dinero de bono, monedas o premios en efectivo sin requisito de apuesta adicional sobre ese premio inicial. Funciona como lo más parecido a un beneficio sin depósito disponible actualmente en la plataforma.</p>
      <p>Estate atento a la sección de Promociones y vuelve a consultarla regularmente, ya que el casino rota sus ofertas con frecuencia y puede introducir ofertas sin depósito o códigos de bono gratuitos en el futuro.</p>
    </div>
  </section>

  <!-- Bonus FAQ -->
  <section class="content-section" id="bonus-faq">
    <div class="container container--narrow">
      <h2>FAQ de Bonos</h2>

      <details class="faq-item">
        <summary>¿Puedo usar un código promo en <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Sí. Durante el registro, verás una opción para introducir un código promo después de seleccionar tu bono de bienvenida preferido. Si tienes un código válido, introdúcelo ahí para activar las ventajas asociadas.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Puedo combinar varios bonos?</summary>
        <div class="faq-answer">
          <p>No. Los bonos de bienvenida y las promociones de recarga no se pueden acumular. Debes completar o cancelar cualquier bono activo antes de reclamar uno nuevo. Algunos bonos se pueden cancelar desde la sección de Perfil o contactando con soporte.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Qué pasa si solicito un retiro antes de completar el requisito de apuesta?</summary>
        <div class="faq-answer">
          <p>Solicitar un retiro antes de completar los requisitos de apuesta anulará el bono y las ganancias asociadas. Asegúrate de haber cumplido completamente el rollover antes de solicitar un pago.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Todos los juegos contribuyen igual al requisito de apuesta?</summary>
        <div class="faq-answer">
          <p>No. Los diferentes tipos de juegos contribuyen a tasas diferentes. Las tragamonedas suelen contribuir al 100%, mientras que los juegos de mesa y los títulos de casino en vivo pueden contribuir menos. Consulta los términos del bono para la tabla de contribución exacta.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Los depósitos con Skrill y Neteller son elegibles para bonos?</summary>
        <div class="faq-answer">
          <p>En la mayoría de los casos, los depósitos realizados a través de Skrill o Neteller no cualifican para los bonos de bienvenida. Consulta los términos de la promoción específica para excepciones.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
