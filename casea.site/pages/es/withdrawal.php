<?php
/**
 * Withdrawal Page – Spanish
 */
$page_title = SITE_NAME . ' Retiro - Métodos de Pago, Límites & Tiempos de Procesamiento';
$page_description = 'Todo sobre los retiros de ' . SITE_NAME . ' Casino: métodos de pago, tiempos de procesamiento de hasta 72 horas, límites diarios y mensuales, verificación KYC y consejos para acelerar tu cobro.';
$current_page = 'withdrawal';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Retiros &amp; Pagos';
$hero_description = 'Cómo cobrar tus ganancias, qué métodos están disponibles, tiempos de procesamiento, límites y qué esperar durante el proceso de verificación.';
$hero_cta = 'Empieza a Jugar';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Resumen de Retiros</h2>
      <p>Cobrar tus ganancias en <?php echo SITE_NAME; ?> es sencillo una vez que conoces las reglas. Los pagos se procesan normalmente en un plazo de 72 horas y, siempre que sea posible, el casino envía los fondos al mismo método que usaste para tu depósito. Si ese método no admite transacciones entrantes, los fondos se enviarán a tu cuenta bancaria.</p>
      <p>Antes de solicitar tu primer retiro, deberás completar una verificación KYC (Conoce a Tu Cliente) y asegurarte de haber cumplido el requisito mínimo de rollover del depósito.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Retiro Mín.</h4>
          <p>EUR 10 en todos los métodos de pago. Los importes inferiores a este umbral no pueden ser procesados.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Límite Diario</h4>
          <p>EUR 500 para cuentas estándar. Los miembros VIP pueden retirar hasta EUR 1.500 al día.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Límite Mensual</h4>
          <p>EUR 7.000 para nuevos jugadores. Los miembros VIP disfrutan de un máximo de EUR 20.000 al mes.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Payment Methods Table -->
  <section class="content-section content-section--alt" id="methods">
    <div class="container">
      <h2>Métodos de Pago</h2>
      <p>Los métodos disponibles para retirar dependen de tu país y de cómo realizaste tu depósito. En general, <?php echo SITE_NAME; ?> procesa los pagos al método de depósito original cuando es posible.</p>

      <table class="data-table">
        <thead>
          <tr>
            <th>Método</th>
            <th>Retiro Mín.</th>
            <th>Tiempo de Procesamiento</th>
            <th>Notas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Visa / Mastercard</td>
            <td>&euro;10</td>
            <td>1-3 días laborables</td>
            <td>Se devuelve a la tarjeta usada para el depósito</td>
          </tr>
          <tr>
            <td>Skrill</td>
            <td>&euro;10</td>
            <td>Hasta 24 horas</td>
            <td>Procesamiento rápido, amplia disponibilidad</td>
          </tr>
          <tr>
            <td>Neteller</td>
            <td>&euro;10</td>
            <td>Hasta 24 horas</td>
            <td>Disponible en la mayoría de regiones</td>
          </tr>
          <tr>
            <td>Transferencia Bancaria</td>
            <td>&euro;20</td>
            <td>2-5 días laborables</td>
            <td>Se usa como alternativa cuando el método original no está disponible</td>
          </tr>
          <tr>
            <td>Bitcoin</td>
            <td>&euro;10</td>
            <td>Hasta 24 horas</td>
            <td>Requiere confirmaciones en blockchain tras el procesamiento del casino</td>
          </tr>
          <tr>
            <td>Ethereum</td>
            <td>&euro;10</td>
            <td>Hasta 24 horas</td>
            <td>Los pagos en cripto suelen ser de los más rápidos</td>
          </tr>
          <tr>
            <td>Litecoin / Tether / Ripple</td>
            <td>&euro;10</td>
            <td>Hasta 24 horas</td>
            <td>Consulta la disponibilidad para tu región</td>
          </tr>
        </tbody>
      </table>

      <p>Divisas aceptadas para transacciones: EUR, USD, CAD, AUD, CHF, HUF, NOK, PLN, NZD, CZK, BRL, CLP y PEN.</p>
    </div>
  </section>

  <!-- How to Withdraw -->
  <section class="content-section" id="how-to">
    <div class="container">
      <h2>Cómo Realizar un Retiro</h2>
      <p>Sigue estos pasos para solicitar un pago de tu cuenta de <?php echo SITE_NAME; ?>:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Cumple el requisito de rollover.</strong> Antes de tu primer retiro, tu depósito debe haberse apostado al menos 1x. Si reclamaste un bono, completa primero el requisito de apuesta completo. No hacerlo puede resultar en una comisión del 10% en el retiro.
          </div>
        </li>
        <li>
          <div>
            <strong>Abre la caja.</strong> Navega a la sección de retiros de tu cuenta. La encontrarás en el menú principal o en el área de configuración de la cuenta.
          </div>
        </li>
        <li>
          <div>
            <strong>Selecciona tu método de pago y el importe.</strong> Elige entre las opciones disponibles e introduce el importe que deseas retirar. Asegúrate de que esté dentro de los límites permitidos.
          </div>
        </li>
        <li>
          <div>
            <strong>Espera el procesamiento.</strong> El casino revisa cada solicitud y normalmente procesa los pagos en un plazo de 3 días laborables. Se te contactará si se necesitan documentos adicionales.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- KYC Verification -->
  <section class="content-section content-section--alt" id="verification">
    <div class="container">
      <h2>Verificación de Cuenta (KYC)</h2>
      <p><?php echo SITE_NAME; ?> requiere verificación de identidad antes de aprobar solicitudes de retiro. Este es un procedimiento estándar en la industria, diseñado para prevenir el fraude y cumplir con las regulaciones contra el blanqueo de capitales.</p>

      <div class="two-col">
        <div>
          <h3>Documentos Requeridos</h3>
          <ul>
            <li>Un documento de identidad oficial (pasaporte, carné de conducir o DNI)</li>
            <li>Prueba de domicilio (factura de servicios o extracto bancario, con fecha de los últimos 3 meses)</li>
            <li>Verificación del método de pago (foto de tarjeta de crédito/débito, captura de pantalla del monedero electrónico o confirmación de wallet cripto)</li>
          </ul>
          <p>Tienes 30 días desde la solicitud inicial de documentos para enviar tus papeles. Si no los proporcionas dentro de este plazo, tu cuenta puede ser cerrada.</p>
        </div>
        <div>
          <h3>Plazo de Verificación</h3>
          <p>El tiempo de procesamiento estándar para la revisión de documentos es de hasta 10 días laborables, aunque puede tardar más en casos excepcionales. El casino puede utilizar servicios de verificación de terceros o solicitar comprobaciones adicionales como una videollamada o verificación telefónica.</p>
          <p>Puedes subir documentos en la sección «Ajustes - Verificación de Cuenta» de tu perfil. Toma fotos claras y bien iluminadas para evitar retrasos por documentos ilegibles.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Faster Payouts -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Consejos para Pagos Más Rápidos</h2>

      <div class="highlight-box">
        <h4>Acelera Tu Retiro en <?php echo SITE_NAME; ?></h4>
        <p>Sigue estas prácticas para minimizar los retrasos en los pagos y recibir tus ganancias antes.</p>
      </div>

      <h3>1. Elige monederos electrónicos o criptomonedas</h3>
      <p>Skrill, Neteller y las opciones cripto como Bitcoin o Ethereum generalmente se procesan más rápido que las transferencias con tarjeta o bancarias. Si la velocidad es tu prioridad, deposita usando uno de estos métodos para que tu retiro pueda devolverse por el mismo canal.</p>

      <h3>2. Verifica tu cuenta cuanto antes</h3>
      <p>No esperes a tu primer retiro para enviar tus documentos. Sube tu identificación, prueba de domicilio y verificación del método de pago tan pronto como te registres. De esta forma, cuando estés listo para cobrar, no habrá retrasos por verificación pendiente.</p>

      <h3>3. Completa el requisito de apuesta antes de solicitar</h3>
      <p>Si tienes un bono activo, asegúrate de que todos los requisitos de apuesta estén completamente cumplidos. Solicitar un retiro mientras un bono está activo anulará el bono y las ganancias relacionadas. Si solo jugaste con fondos depositados, recuerda el rollover de 1x que debe completarse para evitar la comisión adicional.</p>

      <h3>4. Mantente dentro de los límites</h3>
      <p>Las solicitudes de retiro que excedan el límite diario o mensual serán rechazadas. Planifica tus cobros en consecuencia: EUR 500 al día para cuentas estándar, EUR 1.500 al día para miembros VIP.</p>

      <h3>5. Usa tu método de depósito original</h3>
      <p><?php echo SITE_NAME; ?> prefiere devolver los fondos al mismo método utilizado para tu depósito. Usar un método diferente puede activar comprobaciones adicionales y ralentizar el proceso.</p>
    </div>
  </section>

  <!-- Withdrawal FAQ -->
  <section class="content-section content-section--alt" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>FAQ de Retiros</h2>

      <details class="faq-item">
        <summary>¿Cuánto tarda un retiro en <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Los retiros se procesan en un plazo de 72 horas (3 días laborables). Los monederos electrónicos y las criptomonedas suelen ser los más rápidos, completándose a menudo dentro de las 24 horas siguientes al procesamiento del casino. Las transferencias bancarias y los pagos con tarjeta pueden tardar de 1 a 5 días laborables adicionales por parte del proveedor.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Cuál es el retiro mínimo en <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>El importe mínimo de retiro es de EUR 10 para todos los métodos de pago. No se pueden solicitar importes inferiores.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Cuál es el máximo que puedo retirar al mes?</summary>
        <div class="faq-answer">
          <p>Los jugadores estándar pueden retirar hasta EUR 7.000 al mes. Los miembros VIP tienen acceso a un límite aumentado de EUR 20.000 mensuales. También se aplican límites diarios: EUR 500 para cuentas estándar, EUR 1.500 para VIP.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Por qué fue rechazado mi retiro?</summary>
        <div class="faq-answer">
          <p>Las razones más comunes incluyen: requisitos de apuesta incompletos, cuenta no verificada, exceder los límites diarios o mensuales, o solicitar un pago a un método diferente al de tu depósito. Contacta con soporte para información específica sobre tu caso.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Hay alguna comisión por retiros?</summary>
        <div class="faq-answer">
          <p>No hay comisión estándar por retiros. Sin embargo, si no cumples el requisito de rollover de 1x del depósito antes de cobrar, se puede aplicar una comisión del 10%. Completa siempre primero el rollover mínimo para evitar este cargo.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Puedo cancelar un retiro pendiente?</summary>
        <div class="faq-answer">
          <p>Dependiendo de la fase de procesamiento, es posible cancelar una solicitud de retiro pendiente. Contacta con atención al cliente a través del chat en vivo para asistencia con la cancelación.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
