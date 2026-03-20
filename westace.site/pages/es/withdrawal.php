<?php
/**
 * Withdrawal Page - WestAce (Spanish / ES)
 */
$page_title = 'WestAce Retiros - Métodos de Pago, Límites y Tiempos de Procesamiento';
$page_description = 'Todo sobre los retiros en ' . SITE_NAME . ' Casino: métodos de pago, tiempos de procesamiento, límites diarios y mensuales, verificación KYC y consejos para cobrar más rápido.';
$current_page = 'withdrawal';
$lang_prefix = '/es';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Retiros y Pagos';
$hero_description = 'Cómo cobrar tus ganancias, qué métodos están disponibles, tiempos de procesamiento, límites y qué esperar durante el proceso de verificación.';
$hero_cta = 'Jugar Ahora';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Resumen de Retiros</h2>
      <p>Retirar tus ganancias en <?php echo SITE_NAME; ?> es sencillo y sin comisiones. Procesamos todas las solicitudes de retiro en un plazo de 24 a 72 horas según el método de pago elegido. Los fondos se devuelven al mismo método que utilizaste para el depósito siempre que sea posible. Es necesario completar la verificación KYC antes del primer retiro.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Retiro Mínimo</h4>
          <p>10 &euro; en todos los métodos de pago. Los importes por debajo de este umbral no pueden procesarse.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Tiempo de Procesamiento</h4>
          <p>24-72 horas para la mayoría de métodos. Las transferencias bancarias pueden tardar entre 1 y 3 días hábiles adicionales.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Límites de Retiro</h4>
          <p>500 &euro; al día, 7.000 &euro; al mes. Los miembros VIP pueden tener límites más elevados.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Payment Methods Table -->
  <section class="content-section content-section--alt" id="methods">
    <div class="container">
      <h2>Métodos de Pago</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>La siguiente tabla muestra todas las opciones de depósito y retiro disponibles en <?php echo SITE_NAME; ?>. Procesamos los pagos al método de depósito original siempre que sea posible. Todos los depósitos y retiros están libres de comisiones por nuestra parte.</p>
          <p>Entre los métodos disponibles encontrarás opciones muy populares en España como Bizum, Visa, Mastercard y PayPal, además de Skrill y una amplia selección de criptomonedas.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-payments-screen.png" alt="<?php echo SITE_NAME; ?> Casino métodos de depósito y retiro: Bizum, Visa, Mastercard, PayPal, Skrill y criptomonedas" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div class="data-table-wrap">
        <table class="data-table">
          <thead>
            <tr>
              <th>Método</th>
              <th>Depósito Mín.</th>
              <th>Depósito Máx.</th>
              <th>Retiro Mín.</th>
              <th>Retiro Máx.</th>
              <th>Procesamiento</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Bizum</td>
              <td>10 &euro;</td>
              <td>2.000 &euro;</td>
              <td>10 &euro;</td>
              <td>3.000 &euro;</td>
              <td>24-72 horas</td>
            </tr>
            <tr>
              <td>Mastercard</td>
              <td>10 &euro;</td>
              <td>2.000 &euro;</td>
              <td>10 &euro;</td>
              <td>3.000 &euro;</td>
              <td>24-72 horas</td>
            </tr>
            <tr>
              <td>Visa</td>
              <td colspan="2">Solo retiro</td>
              <td>10 &euro;</td>
              <td>3.000 &euro;</td>
              <td>24-72 horas</td>
            </tr>
            <tr>
              <td>PayPal</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 horas</td>
            </tr>
            <tr>
              <td>Skrill</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 horas</td>
            </tr>
            <tr>
              <td>Transferencia Bancaria</td>
              <td colspan="2">Solo retiro</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>1-3 días hábiles</td>
            </tr>
            <tr>
              <td>Bitcoin (BTC)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 horas</td>
            </tr>
            <tr>
              <td>Ethereum (ETH)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 horas</td>
            </tr>
            <tr>
              <td>Tether (USDT)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 horas</td>
            </tr>
            <tr>
              <td>Litecoin (LTC)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 horas</td>
            </tr>
            <tr>
              <td>Ripple (XRP)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 horas</td>
            </tr>
            <tr>
              <td>USD Coin (USDC)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 horas</td>
            </tr>
            <tr>
              <td>Bitcoin Cash (BCH)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 horas</td>
            </tr>
            <tr>
              <td>Dogecoin (DOGE)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 horas</td>
            </tr>
            <tr>
              <td>Cardano (ADA)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 horas</td>
            </tr>
          </tbody>
        </table>
      </div>

      <p style="margin-top: var(--space-4);">La disponibilidad exacta de cada método puede variar según tu región. Las transacciones con criptomonedas requieren confirmaciones en blockchain una vez que el casino ha procesado el pago.</p>
    </div>
  </section>

  <!-- Rollover Requirement -->
  <section class="content-section" id="rollover">
    <div class="container container--narrow">
      <h2>Requisito de Movimiento del Depósito</h2>
      <p><?php echo SITE_NAME; ?> aplica un requisito de movimiento de 1x sobre todos los depósitos. Esto significa que debes apostar los fondos depositados al menos una vez antes de solicitar un retiro. Este requisito es independiente de los requisitos de apuesta de cualquier bono activo.</p>
      <p>Si solicitas un retiro sin haber cumplido el movimiento de 1x, se aplicará una comisión:</p>
      <ul>
        <li><strong>Comisión del 10%</strong> sobre el importe del depósito en retiros por cartera electrónica y criptomoneda</li>
        <li><strong>Comisión del 15%</strong> sobre el importe del depósito en retiros por tarjeta bancaria y transferencia bancaria</li>
      </ul>
      <p>Para evitar este cargo, basta con jugar el importe de tu depósito una vez antes de solicitar el pago. Una sola ronda de apuestas, independientemente del importe, es suficiente para cumplir el requisito.</p>
    </div>
  </section>

  <!-- How to Withdraw -->
  <section class="content-section content-section--alt" id="how-to">
    <div class="container">
      <h2>Cómo Realizar un Retiro</h2>
      <p>Sigue estos pasos para solicitar un pago desde tu cuenta de <?php echo SITE_NAME; ?>:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Completa los requisitos de apuesta activos.</strong> Si has reclamado un bono, debes cumplir todos sus requisitos de apuesta antes de poder retirar. Asegúrate también de haber completado el movimiento de 1x del depósito.
          </div>
        </li>
        <li>
          <div>
            <strong>Abre la caja.</strong> Dirígete a la sección de retiros en tu cuenta. La encontrarás en el menú principal o en la configuración de tu cuenta.
          </div>
        </li>
        <li>
          <div>
            <strong>Selecciona tu método de pago y el importe.</strong> Elige entre las opciones disponibles e introduce el importe que deseas retirar. El mínimo es de 10 &euro; en todos los métodos. El límite diario es de 500 &euro; y el mensual de 7.000 &euro;.
          </div>
        </li>
        <li>
          <div>
            <strong>Espera el procesamiento.</strong> <?php echo SITE_NAME; ?> procesa los retiros en 24 a 72 horas. Las transferencias bancarias pueden tardar entre 1 y 3 días hábiles adicionales. Si se necesitan documentos adicionales para la verificación, el equipo de soporte se pondrá en contacto contigo.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- KYC Verification -->
  <section class="content-section" id="verification">
    <div class="container">
      <h2>Verificación de Cuenta (KYC)</h2>
      <p><?php echo SITE_NAME; ?> requiere verificación de identidad antes de aprobar solicitudes de retiro. Es un procedimiento estándar para prevenir el fraude y cumplir con la normativa contra el blanqueo de capitales. Los documentos se aprueban en un plazo máximo de 30 días, y el proceso de verificación tarda hasta 10 días una vez enviados.</p>

      <div class="two-col">
        <div>
          <h3>Documentos Necesarios</h3>
          <ul>
            <li><strong>Prueba de identidad</strong> - pasaporte, permiso de conducir o DNI</li>
            <li><strong>Selfie con el documento</strong> - una foto tuya sosteniendo el documento de identidad</li>
            <li><strong>Prueba de domicilio</strong> - factura de suministros o extracto bancario de los últimos 3 meses</li>
            <li><strong>Origen de los fondos</strong> - documentación que acredite la procedencia de los fondos destinados al juego (requisito antilavado de capitales)</li>
          </ul>
          <p>Dispones de 30 días para enviar los documentos requeridos. Tu cuenta puede estar restringida hasta que se complete la verificación.</p>
        </div>
        <div>
          <h3>Consejos para una Verificación más Rápida</h3>
          <ul>
            <li>Envía tus documentos nada más registrarte, sin esperar al primer retiro</li>
            <li>Asegúrate de que las cuatro esquinas del documento sean visibles en la foto</li>
            <li>En el selfie, comprueba que tanto tu rostro como el texto del documento sean claramente legibles</li>
            <li>Utiliza una factura o extracto bancario reciente como prueba de domicilio</li>
            <li>Si los documentos son rechazados, verifica que las imágenes no estén borrosas y que los documentos no hayan caducado</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Faster Payouts -->
  <section class="content-section content-section--alt" id="tips">
    <div class="container container--narrow">
      <h2>Consejos para Cobrar más Rápido</h2>

      <h3>1. Elige carteras electrónicas o criptomonedas</h3>
      <p>PayPal, Skrill y opciones cripto como Bitcoin, Ethereum o Tether suelen procesarse con mayor rapidez. Si la velocidad es tu prioridad, deposita con uno de estos métodos para que el retiro pueda realizarse por el mismo canal.</p>

      <h3>2. Verifica tu cuenta cuanto antes</h3>
      <p>No esperes al primer retiro para enviar tus documentos. Sube tu DNI o pasaporte, el selfie, la prueba de domicilio y el origen de los fondos tan pronto como te registres. Así, cuando quieras cobrar, no habrá demoras por verificación pendiente.</p>

      <h3>3. Cumple el movimiento del depósito</h3>
      <p>Asegúrate de haber apostado tu depósito al menos una vez antes de solicitar el pago. No hacerlo conllevará una comisión del 10-15% sobre el importe del depósito.</p>

      <h3>4. Usa el mismo método con el que depositaste</h3>
      <p><?php echo SITE_NAME; ?> prefiere devolver los fondos al mismo método utilizado para el depósito. Usar un método diferente puede activar comprobaciones adicionales y ralentizar el proceso.</p>
    </div>
  </section>

  <!-- Fees -->
  <section class="content-section" id="fees">
    <div class="container container--narrow">
      <h2>Comisiones en Retiros</h2>
      <p><?php echo SITE_NAME; ?> no cobra comisiones por depósitos ni retiros. Sin embargo, tu proveedor de pago o banco puede aplicar sus propias tarifas de transacción, cargos por conversión de divisa o costes intermediarios. Consulta con tu proveedor de pago los detalles sobre posibles comisiones de terceros.</p>
      <p>Nota: si retiras sin haber cumplido el requisito de movimiento de 1x del depósito, se aplicará una comisión del 10% (15% para tarjeta bancaria/transferencia) sobre el importe del depósito. No es una comisión de retiro, sino una penalización por incumplimiento del requisito de movimiento.</p>
    </div>
  </section>

  <!-- Withdrawal FAQ -->
  <section class="content-section content-section--alt" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>Preguntas Frecuentes sobre Retiros</h2>

      <details class="faq-item">
        <summary>¿Cuánto tarda un retiro en <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>La mayoría de los retiros se procesan en 24 a 72 horas. Las carteras electrónicas y las criptomonedas suelen llegar antes. Las transferencias bancarias pueden tardar entre 1 y 3 días hábiles adicionales por parte del proveedor.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Cuál es el retiro mínimo en <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>El importe mínimo de retiro es de 10 &euro; para todos los métodos de pago.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Cuáles son los límites de retiro?</summary>
        <div class="faq-answer">
          <p>Los límites estándar son 500 &euro; al día y 7.000 &euro; al mes. Los límites por transacción dependen del método: Visa y Mastercard tienen un máximo de 3.000 &euro; por operación, mientras que Bizum, PayPal, Skrill, transferencias bancarias y todas las criptomonedas permiten hasta 5.000 &euro;. Los jugadores VIP pueden solicitar límites más elevados.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Por qué fue rechazado mi retiro?</summary>
        <div class="faq-answer">
          <p>Los motivos más habituales son: requisitos de apuesta pendientes, movimiento de depósito incompleto, cuenta sin verificar, superar los límites diarios o mensuales, o solicitar el pago a un método diferente al utilizado para el depósito. Ponte en contacto con el soporte para obtener información específica sobre tu caso.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Hay alguna comisión por retiro?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> no cobra comisiones por retiro. Tu proveedor de pago puede aplicar sus propios cargos. Si retiras sin haber cumplido el movimiento de 1x del depósito, se aplica una comisión del 10% (15% para tarjeta bancaria/transferencia) sobre el importe del depósito.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Puedo cancelar un retiro pendiente?</summary>
        <div class="faq-answer">
          <p>Dependiendo de la fase de procesamiento, es posible cancelar una solicitud de retiro pendiente. Contacta con el servicio de atención al cliente a través del chat en vivo para obtener ayuda.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
