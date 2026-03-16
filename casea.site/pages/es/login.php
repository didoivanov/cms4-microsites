<?php
/**
 * Login Page – Spanish
 */
$page_title = SITE_NAME . ' Login - Inicia Sesión en Tu Cuenta del Casino';
$page_description = 'Inicia sesión en tu cuenta de ' . SITE_NAME . ' Casino. Accede a tus juegos, bonos y saldo. ¿Problemas para iniciar sesión? Restablece tu contraseña o contacta con soporte para obtener ayuda.';
$current_page = 'login';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Login';
$hero_description = 'Inicia sesión para acceder a tu cuenta, juegos y bonos.';
$hero_cta = 'Regístrate Ahora';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Login Help -->
  <section class="content-section content-section--alt" id="login-help">
    <div class="container container--narrow">
      <h2>Cómo Iniciar Sesión en <?php echo SITE_NAME; ?> Casino</h2>
      <p>Iniciar sesión en tu cuenta de <?php echo SITE_NAME; ?> solo lleva unos segundos. Esto es lo que debes hacer en escritorio y móvil:</p>

      <h3>Inicio de Sesión en Escritorio</h3>
      <p>Visita el sitio web de <?php echo SITE_NAME; ?> y haz clic en el botón "Log In" ubicado en la esquina superior derecha de la página, junto al botón "Register". Introduce tu dirección de email registrada y tu contraseña, luego haz clic en "Log In" para acceder a tu cuenta. El enlace "Forgot your password?" está justo debajo del formulario si necesitas restablecer tus credenciales.</p>

      <h3>Inicio de Sesión en Móvil</h3>
      <p>En tu teléfono o tableta, abre el sitio web de <?php echo SITE_NAME; ?> en tu navegador móvil. El botón "Log In" es visible en el área del encabezado. Tócalo, introduce tu email y contraseña, y pulsa "Log In." La versión móvil ofrece las mismas funciones que el sitio de escritorio, incluyendo la recuperación de contraseña y el registro de cuenta.</p>

      <h3>¿Problemas para Iniciar Sesión?</h3>
      <p>Si tienes dificultades para acceder a tu cuenta, aquí tienes algunas cosas que verificar:</p>
      <ul>
        <li>Asegúrate de que estás introduciendo la dirección de email y la contraseña correctas. Las contraseñas distinguen entre mayúsculas y minúsculas.</li>
        <li>Borra la caché y las cookies de tu navegador, luego inténtalo de nuevo.</li>
        <li>Verifica que tu conexión a internet sea estable.</li>
        <li>Si has olvidado tu contraseña, usa el enlace "Forgot your password?" para solicitar un email de restablecimiento.</li>
        <li>Evita usar una VPN, ya que <?php echo SITE_NAME; ?> no permite el acceso por VPN. Intentar iniciar sesión a través de una VPN puede resultar en restricciones en tu cuenta.</li>
      </ul>
      <p>Si ninguna de las soluciones anteriores resuelve el problema, contacta con el <a href="/support">servicio de atención al cliente</a> a través del chat en vivo para asistencia en tiempo real.</p>
    </div>
  </section>

  <!-- Registration Overview -->
  <section class="content-section" id="register">
    <div class="container container--narrow">
      <h2>Crear una Nueva Cuenta</h2>
      <p>Si aún no tienes una cuenta en <?php echo SITE_NAME; ?>, el registro es rápido y tarda aproximadamente un minuto. Aquí tienes un resumen del proceso:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Haz clic en "Register" en el sitio web.</strong> El botón de registro está en la esquina superior derecha de la página. Aparecerá una ventana emergente donde podrás elegir tu bono de bienvenida preferido (casino, multidepósito o deportes) o rechazar los bonos por completo.
          </div>
        </li>
        <li>
          <div>
            <strong>Introduce tu email y crea una contraseña.</strong> Estas serán tus credenciales de inicio de sesión de ahora en adelante. Si tienes un código promo, puedes introducirlo en este paso.
          </div>
        </li>
        <li>
          <div>
            <strong>Rellena tus datos personales.</strong> Deberás proporcionar tu nombre completo, fecha de nacimiento, género, número de teléfono y dirección física. Esta información es necesaria para la verificación de la cuenta.
          </div>
        </li>
        <li>
          <div>
            <strong>Completa el registro.</strong> Haz clic en "Create Profile" para finalizar tu cuenta. Una vez hecho, puedes realizar tu primer depósito y empezar a jugar.
          </div>
        </li>
      </ol>

      <p>Después del registro, considera subir tus documentos de verificación de inmediato. Esto acelera el proceso cuando solicites tu primer retiro. Puedes encontrar la sección de carga de documentos en «Ajustes - Verificación de Cuenta» en tu perfil.</p>
    </div>
  </section>

  <!-- Login FAQ -->
  <section class="content-section content-section--alt" id="login-faq">
    <div class="container container--narrow">
      <h2>FAQ de Inicio de Sesión</h2>

      <details class="faq-item">
        <summary>¿Qué necesito para iniciar sesión?</summary>
        <div class="faq-answer">
          <p>Necesitas la dirección de email y la contraseña que usaste durante el registro. Si olvidaste tu contraseña, haz clic en "Forgot your password?" en el formulario de inicio de sesión para recibir un enlace de restablecimiento por email.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Puedo usar una VPN para acceder a <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>No. <?php echo SITE_NAME; ?> prohíbe estrictamente el uso de VPN. Iniciar sesión a través de una VPN puede resultar en la suspensión de tu cuenta y la pérdida de las ganancias asociadas. El casino ofrece una experiencia específica por país adaptada a cada región.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mi cuenta está bloqueada. ¿Qué debo hacer?</summary>
        <div class="faq-answer">
          <p>Los bloqueos de cuenta pueden ocurrir por razones de seguridad, como múltiples intentos fallidos de inicio de sesión o actividad sospechosa. Contacta con el servicio de atención al cliente a través del chat en vivo o email para que revisen tu cuenta y potencialmente la desbloqueen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Cómo cambio mi contraseña?</summary>
        <div class="faq-answer">
          <p>Una vez que hayas iniciado sesión, ve a la configuración de tu cuenta para actualizar tu contraseña. Si no puedes iniciar sesión, usa la función de restablecimiento de contraseña en la página de inicio de sesión. Se enviará un enlace de restablecimiento a tu dirección de email registrada.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Qué información se necesita para registrarse?</summary>
        <div class="faq-answer">
          <p>El registro requiere tu email, una contraseña, nombre completo, fecha de nacimiento, género, número de teléfono, país, ciudad y código postal. Esta información se utiliza para la verificación de identidad y el cumplimiento de los requisitos regulatorios.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
