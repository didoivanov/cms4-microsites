<?php
/**
 * Support Page – Spanish
 */
$page_title = SITE_NAME . ' Atención al Cliente - Chat en Vivo, Email & Centro de Ayuda';
$page_description = 'Contacta con el servicio de atención al cliente de ' . SITE_NAME . ' Casino a través del chat en vivo 24/7 o por email. Obtén ayuda con depósitos, retiros, bonos, problemas de cuenta y consultas técnicas.';
$current_page = 'support';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Atención al Cliente';
$hero_description = 'Estamos aquí para ayudarte con cualquier pregunta sobre tu cuenta, depósitos, retiros, bonos o problemas técnicos. Contáctanos en cualquier momento.';
$hero_cta = 'Abrir Chat en Vivo';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Contact Options -->
  <section class="content-section" id="contact">
    <div class="container">
      <h2>Cómo Contactarnos</h2>
      <p><?php echo SITE_NAME; ?> ofrece dos canales de soporte principales, ambos disponibles las 24 horas. Ya sea que tengas una pregunta rápida sobre una promoción o necesites ayuda para resolver un problema de pago, el equipo está listo para asistirte.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128172;</div>
          <h4>Chat en Vivo</h4>
          <p>La forma más rápida de obtener ayuda. Haz clic en el icono de chat en cualquier página del sitio web para iniciar una conversación con un agente de soporte. El tiempo medio de respuesta es inferior a 2 minutos en horario habitual. Disponible las 24 horas del día, los 7 días de la semana.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9993;</div>
          <h4>Soporte por Email</h4>
          <p>Para consultas detalladas o envío de documentos, el email es la mejor opción. Envía tu consulta y espera una respuesta en un plazo de 24 horas. Asegúrate de incluir los datos de tu cuenta y una descripción clara del problema.</p>
        </div>
      </div>

      <table class="data-table" style="margin-top: var(--space-8);">
        <thead>
          <tr>
            <th>Canal</th>
            <th>Disponibilidad</th>
            <th>Tiempo de Respuesta</th>
            <th>Ideal Para</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Chat en Vivo</td>
            <td>24/7</td>
            <td>Menos de 2 minutos</td>
            <td>Preguntas rápidas, ayuda con bonos, problemas de depósito</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>24/7</td>
            <td>Hasta 24 horas</td>
            <td>Envío de documentos, casos detallados, reclamaciones</td>
          </tr>
          <tr>
            <td>Teléfono</td>
            <td>No disponible</td>
            <td>-</td>
            <td>-</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- What Support Can Help With -->
  <section class="content-section content-section--alt" id="topics">
    <div class="container">
      <h2>¿En Qué Puede Ayudarte el Soporte?</h2>
      <p>El equipo de atención al cliente gestiona una amplia variedad de temas. Estas son las áreas más comunes en las que los jugadores solicitan asistencia:</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Cuenta &amp; Registro</h4>
          <p>Ayuda con la creación de cuentas, actualización de información personal, restablecimiento de contraseñas y resolución de problemas de inicio de sesión. Si tu cuenta está bloqueada o restringida, el soporte puede revisar tu estado.</p>
        </div>
        <div class="info-card">
          <h4>Depósitos &amp; Pagos</h4>
          <p>Asistencia con depósitos fallidos, preguntas sobre métodos de pago, opciones de divisas y consultas sobre el estado de las transacciones. El soporte también puede ayudar si un depósito no aparece en tu saldo.</p>
        </div>
        <div class="info-card">
          <h4>Retiros &amp; Cobros</h4>
          <p>Preguntas sobre tiempos de procesamiento de retiros, solicitudes pendientes, pagos rechazados y ajustes de límites. Para información detallada sobre retiros, visita la <a href="<?php echo $lang_prefix; ?>/withdrawal">página de Retiros</a>.</p>
        </div>
        <div class="info-card">
          <h4>Bonos &amp; Promociones</h4>
          <p>Aclaraciones sobre los términos de los bonos, requisitos de apuesta, activación de ofertas y cancelación de bonos activos. El soporte puede explicar los detalles específicos de cada promoción y las condiciones de elegibilidad.</p>
        </div>
        <div class="info-card">
          <h4>Verificación &amp; KYC</h4>
          <p>Orientación sobre el envío de documentos, estado de verificación, tipos de documentos aceptados y plazos estimados. Puedes subir documentos en la configuración de tu cuenta, pero el soporte puede asistirte si surgen problemas.</p>
        </div>
        <div class="info-card">
          <h4>Problemas Técnicos</h4>
          <p>Ayuda con juegos que no cargan, errores del sitio web, problemas de compatibilidad móvil y problemas relacionados con el navegador. El soporte puede solucionar y escalar errores técnicos al equipo de desarrollo.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Contacting Support -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Cómo Aprovechar al Máximo Tu Solicitud de Soporte</h2>
      <p>Unos simples pasos pueden ayudar al equipo de soporte a resolver tu problema más rápido:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Ten los datos de tu cuenta a mano.</strong> Tu dirección de email o nombre de usuario ayuda al soporte a localizar tu cuenta rápidamente. Si el problema involucra una transacción específica, ten el número de referencia preparado.
          </div>
        </li>
        <li>
          <div>
            <strong>Describe el problema con claridad.</strong> Explica qué sucedió, cuándo sucedió y qué esperabas que ocurriera. Las capturas de pantalla son útiles para problemas técnicos o transacciones en disputa.
          </div>
        </li>
        <li>
          <div>
            <strong>Usa el canal adecuado.</strong> Para problemas urgentes (cuenta bloqueada, depósito fallido), el chat en vivo es tu mejor opción. Para envío de documentos o casos complejos que requieren investigación, el email da al equipo más margen para trabajar.
          </div>
        </li>
        <li>
          <div>
            <strong>Consulta primero las FAQ.</strong> Muchas preguntas comunes sobre bonos, retiros y gestión de cuentas están cubiertas en las secciones de FAQ de este sitio. Una consulta rápida puede ahorrarte la espera.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Responsible Gambling -->
  <section class="content-section content-section--alt" id="responsible">
    <div class="container container--narrow">
      <h2>Juego Responsable &amp; Autoexclusión</h2>
      <p><?php echo SITE_NAME; ?> se toma el juego responsable muy en serio. Si sientes que tus hábitos de juego se están convirtiendo en un problema, el equipo de soporte puede ayudarte a establecer límites de depósito, períodos de enfriamiento o gestionar una autoexclusión de la plataforma.</p>
      <p>Las opciones de autoexclusión van desde descansos temporales hasta el cierre permanente de la cuenta. Una vez activada, la autoexclusión no puede revertirse hasta que expire el período establecido. Contacta con el soporte a través del chat en vivo o email para hablar sobre las opciones disponibles.</p>
      <p>Para apoyo externo, puedes contactar con organizaciones como GamCare o Gamblers Anonymous para obtener asesoramiento y orientación gratuita y confidencial.</p>
    </div>
  </section>

  <!-- Support FAQ -->
  <section class="content-section" id="support-faq">
    <div class="container container--narrow">
      <h2>FAQ de Soporte</h2>

      <details class="faq-item">
        <summary>¿El soporte de <?php echo SITE_NAME; ?> está disponible en varios idiomas?</summary>
        <div class="faq-answer">
          <p>El sitio web está disponible en polaco, inglés, finés, alemán, húngaro, noruego, italiano, español, checo y portugués. Los agentes de soporte pueden asistir generalmente en inglés y pueden ayudar en otros idiomas listados según la disponibilidad.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Qué tan rápido responde el chat en vivo?</summary>
        <div class="faq-answer">
          <p>En condiciones normales, las respuestas del chat en vivo llegan en 1-2 minutos. Durante horas punta o períodos de mucho tráfico, los tiempos de espera pueden ser ligeramente más largos, pero el equipo trabaja para minimizar los retrasos.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Puede el soporte ayudarme a cancelar un bono?</summary>
        <div class="faq-answer">
          <p>Sí. Si quieres cancelar un bono activo, puedes hacerlo tú mismo desde la sección de Perfil de tu cuenta, o contactar con el soporte a través del chat en vivo o email. Ten en cuenta que cancelar un bono elimina el importe del bono y cualquier ganancia generada a partir de él.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Qué pasa si mi problema no se resuelve?</summary>
        <div class="faq-answer">
          <p>Si no estás satisfecho con la respuesta inicial, solicita que tu caso sea escalado a un agente senior o supervisor. Para disputas no resueltas, también puedes recurrir a los procedimientos de reclamación del casino descritos en los Términos y Condiciones.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Puedo solicitar límites de depósito o pérdidas?</summary>
        <div class="faq-answer">
          <p>Sí. Contacta con el soporte para establecer límites de depósito diarios, semanales o mensuales. También puedes solicitar límites de pérdidas o recordatorios de tiempo de sesión para ayudarte a gestionar tu actividad de juego.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
