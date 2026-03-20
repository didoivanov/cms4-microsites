<?php
/**
 * Bonuses Page - WestAce (Spanish / ES)
 */
$page_title = 'WestAce Bonos - Bono de Bienvenida hasta 2.000 &euro; + 150 Giros Gratis';
$page_description = 'Todos los bonos del casino ' . SITE_NAME . ' en un solo lugar. Paquete de bienvenida de hasta 2.000 € + 150 giros gratis en 3 depósitos, bono crypto, recargas semanales, reembolso diario, cashback de casino en vivo, programa VIP y más.';
$current_page = 'bonuses';
$lang_prefix = '/es';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Bonos del Casino';
$hero_description = 'Todas las promociones activas, ofertas de bienvenida y recompensas de fidelidad disponibles actualmente. Lee los términos antes de reclamar cualquier oferta.';
$hero_cta = 'Reclamar tu Bono';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Welcome Casino Package -->
  <section class="content-section" id="welcome">
    <div class="container">
      <h2>Paquete de Bienvenida para Nuevos Jugadores</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Los nuevos jugadores en <?php echo SITE_NAME; ?> pueden reclamar un paquete de bienvenida en tres depósitos con un valor combinado de hasta 2.000 &euro; + 150 giros gratis. Cada depósito incluye un bono de igualación del 100% y 50 giros gratis. El depósito mínimo para calificar es de 20 &euro; por tramo. No se necesita código promocional: ve a la caja, selecciona la oferta y realiza tu depósito.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-bonuses-screen.png" alt="Página de promociones <?php echo SITE_NAME; ?> Casino con bono de bienvenida y promociones activas" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <!-- Casino Welcome - Deposit 1 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">1.er Depósito: 100% hasta 1.000 &euro; + 50 Giros Gratis</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Realiza tu primer depósito de al menos 20 &euro; y recibe un bono de igualación del 100% hasta 1.000 &euro;. Además, se acreditan 50 giros gratis en una tragaperras seleccionada. El requisito de apuesta es 35x sobre el importe del bono más el depósito. Las ganancias de los giros gratis tienen un requisito de apuesta separado de 40x.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Depósito mín.</div>
            <div class="bonus-detail__value">20 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Requisito de apuesta</div>
            <div class="bonus-detail__value">35x (B+D)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Apuesta GG</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Giros Gratis</div>
            <div class="bonus-detail__value">50 GG</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome - Deposit 2 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2.º Depósito: 100% hasta 500 &euro; + 50 Giros Gratis</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Tu segundo depósito da derecho a un bono de igualación del 100% hasta 500 &euro;, más otros 50 giros gratis. Se aplican los mismos requisitos de apuesta que en el bono del primer depósito.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Depósito mín.</div>
            <div class="bonus-detail__value">20 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Requisito de apuesta</div>
            <div class="bonus-detail__value">35x (B+D)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Apuesta GG</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Giros Gratis</div>
            <div class="bonus-detail__value">50 GG</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome - Deposit 3 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">3.er Depósito: 100% hasta 500 &euro; + 50 Giros Gratis</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>El tercer depósito otorga un bono de igualación del 100% hasta 500 &euro; y 50 giros gratis. Con esto, el paquete de bienvenida total asciende a 2.000 &euro; en fondos de bono y 150 giros gratis repartidos entre tus tres primeros depósitos.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Depósito mín.</div>
            <div class="bonus-detail__value">20 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Requisito de apuesta</div>
            <div class="bonus-detail__value">35x (B+D)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Apuesta GG</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Giros Gratis</div>
            <div class="bonus-detail__value">50 GG</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Crypto Welcome -->
  <section class="content-section content-section--alt" id="crypto-welcome">
    <div class="container">
      <h2>Bono de Bienvenida Crypto</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Crypto: 200% hasta 3.000 USDT</div>
          <span class="bonus-card__tag">Crypto</span>
        </div>
        <p>Si prefieres depositar con criptomonedas, tenemos una oferta de bienvenida exclusiva para ti. Realiza tu primer depósito crypto de al menos 100 USDT y recibe un bono de igualación del 200% hasta 3.000 USDT. El requisito de apuesta es 40x sobre el importe del bono.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Depósito mín.</div>
            <div class="bonus-detail__value">100 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Requisito de apuesta</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Bono máx.</div>
            <div class="bonus-detail__value">3.000 USDT</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Weekly Reload -->
  <section class="content-section" id="weekly-reload">
    <div class="container">
      <h2>Recarga Semanal</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Recarga Semanal: 70 Giros Gratis</div>
          <span class="bonus-card__tag">Lun-Jue</span>
        </div>
        <p>Cada semana, de lunes a jueves, realiza un depósito de al menos 20 &euro; y recibe 70 giros gratis en una tragaperras seleccionada por el casino. Las ganancias de los giros gratis tienen un requisito de apuesta de 40x y deben usarse en un plazo de 10 días.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Depósito mín.</div>
            <div class="bonus-detail__value">20 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Giros Gratis</div>
            <div class="bonus-detail__value">70 GG</div>
          </div>
          <div>
            <div class="bonus-detail__label">Requisito de apuesta</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validez</div>
            <div class="bonus-detail__value">10 días</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Weekend Reload -->
  <section class="content-section content-section--alt" id="weekend-reload">
    <div class="container">
      <h2>Bono de Recarga de Fin de Semana</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Fin de Semana: 50% hasta 500 &euro; + 70 Giros Gratis</div>
          <span class="bonus-card__tag">Fin de semana</span>
        </div>
        <p>Arranca el fin de semana con un bono de igualación del 50% hasta 500 &euro;. Si tu depósito es de 50 &euro; o más, recibes también 70 giros gratis. Los depósitos inferiores a 50 &euro; siguen dando derecho al 50% de igualación, pero sin los giros gratis. El requisito de apuesta es 35x sobre el importe del bono.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Depósito mín.</div>
            <div class="bonus-detail__value">20 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Depósito mín. GG</div>
            <div class="bonus-detail__value">50 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Requisito de apuesta</div>
            <div class="bonus-detail__value">35x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Giros Gratis</div>
            <div class="bonus-detail__value">70 GG</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Crypto Reloads -->
  <section class="content-section" id="crypto-reloads">
    <div class="container">
      <h2>Bonos de Recarga Crypto</h2>
      <p>Los jugadores que depositan con criptomonedas tienen acceso a ofertas de recarga semanales y de fin de semana exclusivas, con porcentajes de igualación más altos.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Crypto Semanal: 60% hasta 1.000 USDT</div>
          <span class="bonus-card__tag">Crypto</span>
        </div>
        <p>Deposita al menos 50 USDT durante la semana y recibe un bono de igualación del 60% hasta 1.000 USDT. El requisito de apuesta es 30x sobre el bono. La ganancia máxima de este bono está limitada a 5 veces el importe del bono.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Depósito mín.</div>
            <div class="bonus-detail__value">50 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Requisito de apuesta</div>
            <div class="bonus-detail__value">30x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Ganancia máx.</div>
            <div class="bonus-detail__value">5x bono</div>
          </div>
        </div>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Crypto Fin de Semana: 75% hasta 750 USDT + 100 GG</div>
          <span class="bonus-card__tag">Crypto</span>
        </div>
        <p>Los fines de semana, los depósitos crypto de 75 USDT o más dan derecho a un bono de igualación del 75% hasta 750 USDT más 100 giros gratis. La ganancia máxima de este bono está limitada a 5 veces el importe del bono.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Depósito mín.</div>
            <div class="bonus-detail__value">75 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Giros Gratis</div>
            <div class="bonus-detail__value">100 GG</div>
          </div>
          <div>
            <div class="bonus-detail__label">Ganancia máx.</div>
            <div class="bonus-detail__value">5x bono</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Daily Cashback -->
  <section class="content-section content-section--alt" id="cashback">
    <div class="container">
      <h2>Reembolso Diario</h2>
      <p>Los jugadores en los niveles VIP 2 al 5 reciben un reembolso diario basado en las pérdidas netas de sus apuestas con dinero real en el casino. El porcentaje aumenta con tu nivel VIP y el requisito de apuesta es de solo 1x: juégalo una vez y el reembolso es tuyo.</p>

      <div class="data-table-wrap">
        <table class="data-table">
          <thead>
            <tr>
              <th>Nivel VIP</th>
              <th>Reembolso %</th>
              <th>Reembolso mín.</th>
              <th>Reembolso máx.</th>
              <th>Req. de apuesta</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Nivel 2</td>
              <td>3%</td>
              <td>1 &euro;</td>
              <td>100 &euro;</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Nivel 3</td>
              <td>5%</td>
              <td>1 &euro;</td>
              <td>200 &euro;</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Nivel 4</td>
              <td>10%</td>
              <td>1 &euro;</td>
              <td>300 &euro;</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Nivel 5</td>
              <td>15%</td>
              <td>1 &euro;</td>
              <td>400 &euro;</td>
              <td>1x</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Live Cashback -->
  <section class="content-section" id="live-cashback">
    <div class="container">
      <h2>Reembolso del Casino en Vivo</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Cashback en Vivo: hasta el 25%</div>
          <span class="bonus-card__tag">Casino en Vivo</span>
        </div>
        <p>Todos los jugadores pueden reclamar hasta un 25% de reembolso sobre las pérdidas netas en juegos de casino en vivo, con un pago máximo de 300 &euro;. El requisito de apuesta es de solo 1x. Este reembolso debe solicitarse manualmente por chat en vivo o email cada lunes entre las 06:00 y las 23:59 UTC. Si no lo solicitas dentro de esa ventana, el reembolso de esa semana se pierde.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Reembolso máx.</div>
            <div class="bonus-detail__value">300 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Req. de apuesta</div>
            <div class="bonus-detail__value">1x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Día de solicitud</div>
            <div class="bonus-detail__value">Lunes</div>
          </div>
          <div>
            <div class="bonus-detail__label">Ventana de solicitud</div>
            <div class="bonus-detail__value">06:00-23:59 UTC</div>
          </div>
        </div>
      </div>

      <div class="highlight-box" style="margin-top: var(--space-4);">
        <h4>Cómo solicitar el Reembolso en Vivo</h4>
        <p>Contacta con nuestro equipo de soporte por chat en vivo o email (support@westace.com) el lunes entre las 06:00 y las 23:59 UTC para solicitar tu reembolso de casino en vivo. El reembolso se calcula sobre tus pérdidas netas de la semana anterior y se acredita en tu cuenta tras procesar la solicitud.</p>
      </div>
    </div>
  </section>

  <!-- VIP -->
  <section class="content-section content-section--alt" id="vip">
    <div class="container">
      <h2>Programa VIP</h2>
      <p>El Programa VIP de <?php echo SITE_NAME; ?> recompensa a los jugadores más fieles a través de cinco niveles. A medida que asciendes, desbloqueas mejores porcentajes de reembolso, mayores límites de retiro, ofertas personalizadas y un gestor VIP dedicado. El programa está abierto a todos los jugadores registrados.</p>

      <h3>Beneficios VIP</h3>
      <ul class="check-list">
        <li>Reembolso diario creciente del 3% al 15% según el nivel VIP</li>
        <li>Límites de depósito y retiro más altos en los niveles superiores</li>
        <li>Gestor VIP personal para los jugadores de mayor nivel</li>
        <li>Ofertas de bono y promociones personalizadas</li>
        <li>Soporte prioritario y procesamiento de retiros más rápido</li>
      </ul>

      <h3>Progresión de Nivel</h3>
      <p>Los criterios exactos para avanzar entre niveles VIP no se publican. La progresión se basa en tu actividad general en el casino. Contacta con nuestro equipo de soporte para obtener información sobre tu estado VIP actual y lo que necesitas para alcanzar el siguiente nivel.</p>

      <table class="quick-table">
        <tr><th>Característica</th><th>Detalles</th></tr>
        <tr><td>Niveles VIP</td><td>5 niveles</td></tr>
        <tr><td>Rango de reembolso</td><td>3% (Nivel 2) hasta el 15% (Nivel 5)</td></tr>
        <tr><td>Req. de apuesta del reembolso</td><td>1x</td></tr>
        <tr><td>Gestor personal</td><td>Disponible en niveles superiores</td></tr>
        <tr><td>Progresión</td><td>Basada en la actividad general (criterios no públicos)</td></tr>
      </table>
    </div>
  </section>

  <!-- No-Deposit Info -->
  <section class="content-section" id="no-deposit">
    <div class="container container--narrow">
      <h2>Bono Sin Depósito en <?php echo SITE_NAME; ?></h2>
      <p>Por el momento, <?php echo SITE_NAME; ?> no ofrece un bono sin depósito. El paquete de bienvenida requiere un primer depósito mínimo de 20 &euro; para activarse. Mantente atento a la sección de Promociones y consulta con regularidad, ya que rotamos nuestras ofertas con frecuencia y podemos introducir bonos sin depósito en el futuro.</p>
    </div>
  </section>

  <!-- Bonus FAQ -->
  <section class="content-section content-section--alt" id="bonus-faq">
    <div class="container container--narrow">
      <h2>Preguntas Frecuentes sobre Bonos</h2>

      <details class="faq-item">
        <summary>¿Necesito un código promocional para reclamar un bono?</summary>
        <div class="faq-answer">
          <p>No. Todos los bonos en <?php echo SITE_NAME; ?> pueden reclamarse sin código promocional. Ve a la caja, selecciona la oferta y realiza el depósito correspondiente. Algunos bonos pueden requerir activación en la sección Mis Bonos de tu cuenta.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Cuál es el valor total del paquete de bienvenida?</summary>
        <div class="faq-answer">
          <p>El paquete de bienvenida completo vale hasta 2.000 &euro; en fondos de bono más 150 giros gratis repartidos en tres depósitos. Cada depósito recibe una igualación del 100%: hasta 1.000 &euro; en el primero y hasta 500 &euro; en cada uno del segundo y tercero.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Puedo combinar varios bonos?</summary>
        <div class="faq-answer">
          <p>No. Debes completar o renunciar a cualquier bono activo antes de reclamar uno nuevo. Los bonos no pueden acumularse.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Qué ocurre si retiro antes de completar los requisitos de apuesta?</summary>
        <div class="faq-answer">
          <p>Solicitar un retiro antes de cumplir el requisito de apuesta anulará el bono y todas las ganancias asociadas. Completa el rollover completo antes de solicitar un cobro.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Cómo funciona el reembolso diario?</summary>
        <div class="faq-answer">
          <p>El reembolso diario está disponible para los niveles VIP 2 al 5. Se calcula sobre las pérdidas netas de tus apuestas con dinero real en el casino. El porcentaje oscila entre el 3% y el 15% según tu nivel VIP. El requisito de apuesta es de solo 1x, lo que significa que solo tienes que jugar el importe del reembolso una vez antes de poder retirarlo.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Todos los juegos contribuyen igual al requisito de apuesta?</summary>
        <div class="faq-answer">
          <p>No. Los distintos tipos de juego contribuyen a diferentes porcentajes. Las tragaperras suelen contribuir al 100%, mientras que los juegos de mesa y los del casino en vivo contribuyen menos. Consulta los términos del bono para ver la tabla exacta de contribución.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Hay un bono independiente para depósitos con criptomonedas?</summary>
        <div class="faq-answer">
          <p>Sí. Los jugadores que depositan con criptomonedas pueden reclamar un bono de igualación del 200% hasta 3.000 USDT como bono de bienvenida, más ofertas de recarga semanales y de fin de semana en crypto. Estas ofertas son independientes de los bonos estándar en EUR y tienen sus propios requisitos de apuesta.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
