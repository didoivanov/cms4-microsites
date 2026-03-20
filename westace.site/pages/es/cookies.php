<?php
/**
 * Política de Cookies - WestAce ES
 */
$lang_prefix = '/es';
$page_title = 'Política de Cookies - ' . SITE_NAME_SHORT;
$page_description = 'Política de cookies de ' . DOMAIN . '. Descubre qué cookies utilizamos y cómo gestionarlas.';
$current_page = 'cookies';

require_once __DIR__ . '/../../includes/header.php';
?>

<main>
  <section class="content-section legal-page">
    <div class="container container--narrow">
      <h1>Política de Cookies</h1>
      <p class="legal-updated">Última actualización: 20 de marzo de 2026</p>

      <h2>Qué son las cookies</h2>
      <p>Las cookies son pequeños archivos de texto que se almacenan en tu dispositivo cuando visitas un sitio web. Se utilizan de forma generalizada para que los sitios funcionen correctamente, recuerden tus preferencias y proporcionen datos de uso anonimizados a los propietarios del sitio.</p>

      <h2>Cómo utilizamos las cookies</h2>
      <p><?php echo DOMAIN; ?> es un sitio web afiliado de reseñas de bajo consumo de recursos. No utilizamos cookies con fines publicitarios, de personalización ni para rastrear tu actividad en otros sitios web. Las cookies de este sitio se dividen en tres categorías:</p>

      <h3>Cookies esenciales</h3>
      <p>Son necesarias para el correcto funcionamiento del sitio. Incluyen cookies establecidas por nuestro proveedor de alojamiento (Cloudflare) para la seguridad y el rendimiento, como la detección de bots y la protección contra ataques DDoS. No es posible desactivarlas sin afectar a la funcionalidad del sitio.</p>
      <table class="data-table">
        <thead>
          <tr><th>Cookie</th><th>Proveedor</th><th>Finalidad</th><th>Duración</th></tr>
        </thead>
        <tbody>
          <tr><td>__cf_bm</td><td>Cloudflare</td><td>Gestión de bots y seguridad</td><td>30 minutos</td></tr>
          <tr><td>cf_clearance</td><td>Cloudflare</td><td>Verificación de desafíos de seguridad</td><td>Hasta 1 año</td></tr>
        </tbody>
      </table>

      <h3>Cookies analíticas</h3>
      <p>Podemos utilizar Google Analytics para comprender cómo interactúan los visitantes con el sitio, por ejemplo qué páginas son más populares o cómo llegan los usuarios. Estos datos son anonimizados y agregados. No se recoge ninguna información personal identificable.</p>
      <table class="data-table">
        <thead>
          <tr><th>Cookie</th><th>Proveedor</th><th>Finalidad</th><th>Duración</th></tr>
        </thead>
        <tbody>
          <tr><td>_ga</td><td>Google Analytics</td><td>Distingue visitantes únicos</td><td>2 años</td></tr>
          <tr><td>_ga_*</td><td>Google Analytics</td><td>Mantiene el estado de la sesión</td><td>2 años</td></tr>
        </tbody>
      </table>

      <h3>Cookies de marketing / afiliados</h3>
      <p>No establecemos cookies de marketing propias. No obstante, cuando haces clic en un enlace de afiliado de nuestro sitio, la plataforma de destino puede establecer cookies para registrar la referencia. Estas cookies las establece el tercero y se rigen por su propia política de cookies, no por la nuestra.</p>

      <h2>Cookies de terceros</h2>
      <p>Cuando haces clic en un enlace de afiliado y abandonas nuestro sitio, el sitio web de destino puede establecer sus propias cookies. No tenemos control sobre estas cookies. Consulta la política de cookies del operador del casino para obtener más información.</p>

      <h2>Consentimiento de cookies</h2>
      <p>De conformidad con la Ley 34/2002 de Servicios de la Sociedad de la Información y de Comercio Electrónico (LSSI-CE) y el Reglamento General de Protección de Datos (RGPD), estamos obligados a obtener tu consentimiento antes de instalar cookies no esenciales en tu dispositivo. Las cookies estrictamente necesarias para el funcionamiento del sitio no requieren consentimiento. Al continuar usando este sitio, consientes el uso de cookies analíticas tal y como se describe anteriormente. Puedes retirar tu consentimiento en cualquier momento ajustando la configuración de tu navegador.</p>

      <h2>Gestionar las cookies</h2>
      <p>Puedes controlar y eliminar las cookies a través de la configuración de tu navegador. La mayoría de los navegadores te permiten:</p>
      <ul>
        <li>Ver qué cookies están almacenadas y eliminarlas individualmente</li>
        <li>Bloquear las cookies de terceros</li>
        <li>Bloquear todas las cookies de sitios específicos</li>
        <li>Bloquear todas las cookies de forma general</li>
        <li>Eliminar todas las cookies al cerrar el navegador</li>
      </ul>
      <p>Desactivar las cookies puede afectar a la funcionalidad del sitio, en particular las funciones de seguridad proporcionadas por Cloudflare.</p>
      <p>Instrucciones para gestionar las cookies en los principales navegadores:</p>
      <ul>
        <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener noreferrer">Google Chrome</a></li>
        <li><a href="https://support.mozilla.org/es/kb/cookies-informacion-que-los-sitios-web-guardan-en-" target="_blank" rel="noopener noreferrer">Mozilla Firefox</a></li>
        <li><a href="https://support.apple.com/es-es/guide/safari/sfri11471/mac" target="_blank" rel="noopener noreferrer">Safari</a></li>
        <li><a href="https://support.microsoft.com/es-es/microsoft-edge/eliminar-las-cookies-en-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank" rel="noopener noreferrer">Microsoft Edge</a></li>
      </ul>

      <h2>Cambios en esta política</h2>
      <p>Podemos actualizar esta política de cookies periódicamente. Cualquier cambio se publicará en esta página con una fecha de revisión actualizada.</p>

      <h2>Contacto</h2>
      <p>Si tienes preguntas sobre el uso de cookies en este sitio, puedes contactarnos en <a href="mailto:info@westace.site">info@westace.site</a> o visitar nuestra página de <a href="<?php echo $lang_prefix; ?>/support">Ayuda</a>.</p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
