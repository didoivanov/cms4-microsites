<?php
/**
 * Support Page - WestAce (Spanish / ES)
 */
$page_title = 'WestAce Atención al Cliente - Chat en Vivo, Email y Centro de Ayuda';
$page_description = 'Contacta con el equipo de ' . SITE_NAME . ' Casino a través del chat en vivo 24/7 o por email en support@westace.com. Ayuda con depósitos, retiros, bonos, cuenta y problemas técnicos.';
$current_page = 'support';
$lang_prefix = '/es';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Atención al Cliente';
$hero_description = 'Estamos aquí para ayudarte con cualquier duda sobre tu cuenta, depósitos, retiros, bonos o problemas técnicos. Escríbenos cuando lo necesites.';
$hero_cta = 'Abrir Chat en Vivo';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Contact Options -->
  <section class="content-section" id="contact">
    <div class="container">
      <h2>Cómo Contactar con Nosotros</h2>
      <p><?php echo SITE_NAME; ?> pone a tu disposición dos canales de soporte para que puedas obtener ayuda siempre que la necesites. Tanto si tienes una pregunta rápida sobre una promoción como si necesitas resolver un problema con un pago, nuestro equipo está disponible las 24 horas.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128172;</div>
          <h4>Chat en Vivo</h4>
          <p>La forma más rápida de obtener ayuda. Haz clic en el icono del chat en cualquier página para iniciar una conversación con un agente. Nuestros agentes responden normalmente en 5 minutos. Disponible las 24 horas, los 7 días de la semana.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9993;</div>
          <h4>Soporte por Email</h4>
          <p>Para consultas detalladas o envío de documentos, el email es la mejor opción. Escríbenos a <strong>support@westace.com</strong> y recibirás respuesta en un plazo máximo de 24 horas. Incluye los datos de tu cuenta y una descripción clara del problema.</p>
        </div>
      </div>

      <table class="data-table" style="margin-top: var(--space-8);">
        <thead>
          <tr>
            <th>Canal</th>
            <th>Disponibilidad</th>
            <th>Tiempo de Respuesta</th>
            <th>Recomendado Para</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Chat en Vivo</td>
            <td>24/7</td>
            <td>En 5 minutos</td>
            <td>Preguntas rápidas, ayuda con bonos, problemas con depósitos</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>24/7</td>
            <td>Hasta 24 horas</td>
            <td>Envío de documentos, casos complejos, reclamaciones</td>
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
      <h2>En Qué Puede Ayudarte el Soporte</h2>
      <p>Nuestro equipo de atención al cliente gestiona una amplia variedad de temas. Estos son los ámbitos más habituales en los que los jugadores nos solicitan asistencia:</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Cuenta y Registro</h4>
          <p>Ayuda para crear una cuenta, actualizar datos personales, restablecer contraseñas y resolver problemas de acceso. Si tu cuenta está bloqueada o restringida, el soporte puede revisar tu situación.</p>
        </div>
        <div class="info-card">
          <h4>Depósitos y Pagos</h4>
          <p>Asistencia con depósitos fallidos, consultas sobre métodos de pago y comprobación del estado de transacciones. El soporte también puede ayudar si un depósito no aparece en tu saldo.</p>
        </div>
        <div class="info-card">
          <h4>Retiros y Cobros</h4>
          <p>Preguntas sobre tiempos de procesamiento de retiros, solicitudes pendientes y pagos rechazados. Para información detallada sobre retiros, visita nuestra <a href="<?php echo $lang_prefix; ?>/withdrawal">página de Retiros</a>.</p>
        </div>
        <div class="info-card">
          <h4>Bonos y Promociones</h4>
          <p>Aclaraciones sobre condiciones de bonos, requisitos de apuesta, activación de ofertas y cancelación de bonos activos. El soporte puede explicar los detalles y condiciones de elegibilidad de cada promoción.</p>
        </div>
        <div class="info-card">
          <h4>Verificación y KYC</h4>
          <p>Orientación sobre el envío de documentos, estado de la verificación, tipos de documentos aceptados y plazos estimados. El soporte puede ayudar si surgen problemas durante el proceso de verificación.</p>
        </div>
        <div class="info-card">
          <h4>Problemas Técnicos</h4>
          <p>Ayuda con juegos que no cargan, errores en la web, problemas de compatibilidad con móvil y cuestiones relacionadas con el navegador. El soporte puede diagnosticar el problema y escalar los fallos técnicos al equipo de desarrollo.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Contacting Support -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Cómo Agilizar tu Consulta</h2>
      <p>Unos pasos sencillos pueden ayudar a nuestro equipo a resolver tu problema más rápido:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Ten a mano los datos de tu cuenta.</strong> Tu nombre de usuario o dirección de email ayuda al soporte a localizar tu cuenta rápidamente. Si el problema está relacionado con una transacción concreta, ten el número de referencia disponible.
          </div>
        </li>
        <li>
          <div>
            <strong>Describe el problema con claridad.</strong> Explica qué ocurrió, cuándo ocurrió y qué esperabas que pasara. Las capturas de pantalla son muy útiles en casos de problemas técnicos o transacciones en disputa.
          </div>
        </li>
        <li>
          <div>
            <strong>Elige el canal adecuado.</strong> Para problemas urgentes (cuenta bloqueada, depósito fallido), el chat en vivo es tu mejor opción. Para el envío de documentos o casos complejos que requieren investigación, el email a support@westace.com le da al equipo más margen para actuar.
          </div>
        </li>
        <li>
          <div>
            <strong>Consulta primero las preguntas frecuentes.</strong> Muchas dudas habituales sobre bonos, retiros y gestión de cuenta están respondidas en las secciones FAQ de este sitio.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Responsible Gambling -->
  <section class="content-section content-section--alt" id="responsible">
    <div class="container container--narrow">
      <h2>Juego Responsable y Autoexclusión</h2>
      <p><?php echo SITE_NAME; ?> se toma en serio el juego responsable. Si sientes que tus hábitos de juego se están convirtiendo en un problema, nuestro equipo puede ayudarte a gestionar una autoexclusión de la plataforma.</p>
      <p>La autoexclusión puede solicitarse por un periodo determinado o de forma permanente. Una vez activada, no puede revertirse hasta que expire el plazo establecido. Durante el periodo de autoexclusión no podrás acceder a tu cuenta ni realizar apuestas. Contacta con el soporte a través del chat en vivo o por email a support@westace.com para solicitar la autoexclusión.</p>

      <h3>Autoevaluación</h3>
      <p>Hazte estas preguntas para evaluar si el juego puede estar afectando a tu vida:</p>
      <ul>
        <li>¿Tu gasto en juego está fuera de control?</li>
        <li>¿Pides prestado dinero para seguir jugando?</li>
        <li>¿Estás pasando menos tiempo con tu familia y amigos?</li>
        <li>¿Te molesta que otros comenten tu forma de jugar?</li>
        <li>¿Has perdido interés en tus aficiones o actividades habituales?</li>
        <li>¿Te sientes triste o ansioso a causa de las pérdidas en el juego?</li>
        <li>¿Has mentido alguna vez sobre cuánto tiempo o dinero dedicas al juego?</li>
      </ul>
      <p>Si has respondido afirmativamente a varias de estas preguntas, te recomendamos contactar con una organización de ayuda:</p>
      <ul>
        <li><strong>Jugarbien.es</strong> - portal de juego responsable avalado por la DGOJ (Dirección General de Ordenación del Juego)</li>
        <li><strong>Fejar</strong> (Federación Española de Jugadores de Azar Rehabilitados) - línea de ayuda gratuita y grupos de apoyo para jugadores con problemas</li>
        <li><strong>DGOJ</strong> - organismo regulador del juego en España; puedes solicitar el Registro General de Interdicciones de Acceso al Juego (RGIAJ) a través de su web</li>
        <li><strong>Gambling Therapy</strong> - apoyo confidencial en línea disponible en español</li>
      </ul>

      <h3>Consejos Prácticos</h3>
      <ul>
        <li>No trates el juego como una fuente de ingresos</li>
        <li>Establece un presupuesto de tiempo y dinero, y respétalo</li>
        <li>Juega solo con dinero que puedas permitirte perder</li>
        <li>Evita jugar cuando estés estresado, enfadado o bajo los efectos del alcohol</li>
      </ul>
    </div>
  </section>

  <!-- Support FAQ -->
  <section class="content-section" id="support-faq">
    <div class="container container--narrow">
      <h2>Preguntas Frecuentes sobre el Soporte</h2>

      <details class="faq-item">
        <summary>¿El soporte de <?php echo SITE_NAME; ?> está disponible las 24 horas?</summary>
        <div class="faq-answer">
          <p>Sí. Tanto el chat en vivo como el soporte por email están disponibles en todo momento, las 24 horas del día, los 7 días de la semana.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Cuánto tarda en responder el chat en vivo?</summary>
        <div class="faq-answer">
          <p>Los agentes del chat en vivo suelen responder en 5 minutos. En horas de mayor demanda, los tiempos de espera pueden ser ligeramente superiores.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Cuál es el email de soporte?</summary>
        <div class="faq-answer">
          <p>Puedes contactar con el soporte de <?php echo SITE_NAME; ?> por email en <strong>support@westace.com</strong>. Incluye tu nombre de usuario o email registrado, una descripción del problema y cualquier captura de pantalla relevante. Recibirás respuesta en un plazo máximo de 24 horas.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Puede el soporte cancelar un bono activo?</summary>
        <div class="faq-answer">
          <p>Sí. Si quieres cancelar un bono activo, contacta con el soporte a través del chat en vivo o por email. Ten en cuenta que la cancelación de un bono elimina el importe del bono y cualquier ganancia generada a partir de él.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Qué ocurre si mi problema no se resuelve?</summary>
        <div class="faq-answer">
          <p>Si no estás satisfecho con la respuesta inicial, solicita que tu caso sea escalado a un agente de mayor nivel. Proporciona todos los detalles posibles para ayudar al equipo a investigar tu caso en profundidad.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Puedo solicitar la autoexclusión?</summary>
        <div class="faq-answer">
          <p>Sí. Contacta con el soporte a través del chat en vivo o por email para gestionar la autoexclusión por un periodo determinado o de forma permanente. Durante la autoexclusión no podrás acceder a tu cuenta ni realizar apuestas.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
