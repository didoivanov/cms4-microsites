<?php
/**
 * Login Page - WestAce (Spanish / ES)
 * No login form - redirect/info page pointing to /play
 */
$page_title = 'WestAce Iniciar Sesión - Accede a tu Cuenta de Casino';
$page_description = 'Accede a tu cuenta de ' . SITE_NAME . ' Casino. Inicia sesión para jugar, consultar tu saldo y gestionar tus bonos. Haz clic en el botón para entrar directamente.';
$current_page = 'login';
$lang_prefix = '/es';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Iniciar Sesión';
$hero_description = 'Accede a tu cuenta para jugar, consultar tu saldo y gestionar tus bonos.';
$hero_cta = 'Registrarse Ahora';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Login Redirect -->
  <section class="content-section content-section--alt" id="login-acceso">
    <div class="container container--narrow">
      <h2>Acceder a <?php echo SITE_NAME; ?> Casino</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Para iniciar sesión en tu cuenta de <?php echo SITE_NAME; ?>, haz clic en el botón de acceso. El formulario de entrada y todas las funciones de tu cuenta están disponibles directamente en la plataforma del casino.</p>
          <h3>Acceso desde Ordenador</h3>
          <p>Visita el sitio de <?php echo SITE_NAME; ?> y haz clic en el botón "Iniciar Sesión" situado en la esquina superior derecha. Introduce tu email y contraseña para acceder a tu cuenta. Si olvidaste tu contraseña, utiliza el enlace de recuperación que aparece en el formulario.</p>
          <h3>Acceso desde Móvil</h3>
          <p>Desde tu smartphone o tablet, abre el sitio de <?php echo SITE_NAME; ?> en tu navegador móvil. Pulsa el botón de inicio de sesión, introduce tus datos y accede. La versión móvil ofrece las mismas funciones que el escritorio, sin necesidad de descargar ninguna aplicación.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-login-screen.png" alt="<?php echo SITE_NAME; ?> Casino pantalla de inicio de sesión" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div style="text-align:center;margin:var(--space-8) 0">
        <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Iniciar Sesión en <?php echo SITE_NAME; ?></a>
        <p style="margin-top:var(--space-4)">¿Aún no tienes cuenta? <a href="/play" rel="nofollow">Regístrate aquí</a> y reclama tu bono de bienvenida.</p>
      </div>

      <h3>¿Problemas para Entrar?</h3>
      <p>Si tienes dificultades para acceder a tu cuenta, comprueba lo siguiente:</p>
      <ul>
        <li>Asegúrate de introducir el email y la contraseña correctos. Las contraseñas distinguen entre mayúsculas y minúsculas.</li>
        <li>Limpia la caché y las cookies de tu navegador e inténtalo de nuevo.</li>
        <li>Verifica que tu conexión a internet sea estable.</li>
        <li>Si olvidaste tu contraseña, utiliza la opción "¿Olvidaste tu contraseña?" para recibir un email de restablecimiento.</li>
      </ul>
      <p>Si ninguna de las soluciones anteriores resuelve el problema, contacta con <a href="<?php echo $lang_prefix; ?>/support">atención al cliente</a> a través del chat en vivo o por email a support@westace.com.</p>
    </div>
  </section>

  <!-- Registration Overview -->
  <section class="content-section" id="registro">
    <div class="container container--narrow">
      <h2>Crear una Cuenta Nueva</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Si todavía no tienes cuenta en <?php echo SITE_NAME; ?>, el registro es rápido y tarda aproximadamente dos minutos. Introduce tu email, crea una contraseña, elige tu moneda preferida y ya estás listo para jugar. El bono de bienvenida se muestra al inicio del formulario de registro para que sepas exactamente qué te espera.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-signup-screen.png" alt="<?php echo SITE_NAME; ?> Casino formulario de registro con bono de bienvenida" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Haz clic en "Registrarse" en el sitio web.</strong> El botón de registro está en la parte superior derecha de la página.
          </div>
        </li>
        <li>
          <div>
            <strong>Elige tu bono de bienvenida.</strong> Selecciona el bono que quieres activar con tu primer depósito, o salta este paso si prefieres jugar sin bono.
          </div>
        </li>
        <li>
          <div>
            <strong>Introduce tu email y crea una contraseña.</strong> Elige una contraseña segura para proteger tu cuenta.
          </div>
        </li>
        <li>
          <div>
            <strong>Rellena tus datos personales.</strong> Deberás facilitar tu nombre completo, fecha de nacimiento, número de teléfono, dirección, país y moneda preferida. Esta información es necesaria para la verificación de identidad cuando solicites tu primer retiro.
          </div>
        </li>
        <li>
          <div>
            <strong>Completa el registro.</strong> Finaliza la creación de tu cuenta y realiza tu primer depósito para activar el bono de bienvenida. El depósito mínimo para optar al bono es de 20 &euro;.
          </div>
        </li>
      </ol>

      <div style="text-align:center;margin:var(--space-8) 0">
        <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Crear tu Cuenta</a>
      </div>
    </div>
  </section>

  <!-- Account Recovery -->
  <section class="content-section content-section--alt" id="recuperacion">
    <div class="container container--narrow">
      <h2>Recuperación de Cuenta</h2>

      <h3>¿Olvidaste tu Contraseña?</h3>
      <p>Haz clic en el enlace "¿Olvidaste tu contraseña?" en el formulario de acceso. Introduce el email con el que te registraste y recibirás un enlace de restablecimiento en tu bandeja de entrada. Haz clic en el enlace del email para crear una nueva contraseña. El enlace de restablecimiento tiene una validez limitada, así que utilízalo cuanto antes.</p>
      <p>Si no recibes el email en unos minutos, revisa tu carpeta de spam o correo no deseado. Si el email sigue sin llegar, contacta con <a href="<?php echo $lang_prefix; ?>/support">atención al cliente</a> para obtener ayuda manual.</p>

      <h3>¿Cuenta Bloqueada?</h3>
      <p>Los bloqueos de cuenta pueden producirse por razones de seguridad, como varios intentos de acceso fallidos o actividad sospechosa. Contacta con el servicio de atención al cliente a través del chat en vivo o por email a support@westace.com para que revisemos tu situación.</p>
    </div>
  </section>

  <!-- Login FAQ -->
  <section class="content-section" id="login-faq">
    <div class="container container--narrow">
      <h2>Preguntas Frecuentes sobre el Acceso</h2>

      <details class="faq-item">
        <summary>¿Qué necesito para iniciar sesión?</summary>
        <div class="faq-answer">
          <p>Necesitas el email y la contraseña que creaste durante el registro. Si olvidaste tu contraseña, haz clic en "¿Olvidaste tu contraseña?" en el formulario de acceso para recibir un enlace de restablecimiento por email.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿El sitio recordará mis datos en la próxima visita?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> utiliza cookies para reconocer a los jugadores que regresan. Si iniciaste sesión anteriormente desde el mismo dispositivo y navegador, es posible que tu email aparezca rellenado. Aun así, deberás introducir tu contraseña por seguridad. Borrar las cookies del navegador o usar el modo privado requerirá que introduzcas todas tus credenciales de nuevo.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Tengo la cuenta bloqueada. ¿Qué hago?</summary>
        <div class="faq-answer">
          <p>Los bloqueos pueden producirse tras varios intentos de acceso fallidos o por actividad sospechosa. Contacta con el servicio de atención al cliente a través del chat en vivo o por email a support@westace.com para que revisemos y desbloqueemos tu cuenta.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Cómo cambio mi contraseña?</summary>
        <div class="faq-answer">
          <p>Una vez dentro de tu cuenta, accede a la configuración de tu perfil para actualizar la contraseña. Si no puedes iniciar sesión, utiliza la función de restablecimiento de contraseña disponible en el formulario de acceso.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Qué información se necesita para registrarse?</summary>
        <div class="faq-answer">
          <p>El registro requiere un email, una contraseña, nombre completo, fecha de nacimiento, número de teléfono, dirección, país y moneda preferida. Esta información se utiliza para la verificación de identidad y el cumplimiento normativo.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>¿Existe una aplicación móvil de <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>No hay aplicación dedicada, pero el sitio web está completamente optimizado para dispositivos móviles. Abre <?php echo SITE_NAME; ?> en el navegador de tu móvil e inicia sesión de la forma habitual. Todos los juegos, apuestas deportivas y funciones son accesibles desde móvil.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
