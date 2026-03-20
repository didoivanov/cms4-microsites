<?php
/**
 * Política de Privacidad - WestAce ES
 */
$lang_prefix = '/es';
$page_title = 'Política de Privacidad - ' . SITE_NAME_SHORT;
$page_description = 'Política de privacidad de ' . DOMAIN . '. Conoce cómo gestionamos tus datos como sitio web afiliado independiente de reseñas.';
$current_page = 'privacy';

require_once __DIR__ . '/../../includes/header.php';
?>

<main>
  <section class="content-section legal-page">
    <div class="container container--narrow">
      <h1>Política de Privacidad</h1>
      <p class="legal-updated">Última actualización: 20 de marzo de 2026</p>

      <h2>Quiénes somos</h2>
      <p><?php echo DOMAIN; ?> es un sitio web afiliado independiente que publica contenido informativo y reseñas sobre <?php echo SITE_NAME; ?> Casino. No somos un casino, no aceptamos apuestas y no procesamos transacciones de juego de ningún tipo. Al hacer clic en determinados enlaces de nuestro sitio, es posible que seas redirigido al sitio web del operador del casino, que se rige por su propia política de privacidad y condiciones de uso.</p>

      <h2>Qué datos recopilamos</h2>
      <p>Mantenemos la recogida de datos en un mínimo absoluto. No es necesario registrarse, crear cuentas ni facilitar datos personales para navegar por este sitio. Los datos que podemos recopilar incluyen:</p>
      <ul>
        <li><strong>Datos analíticos anonimizados</strong> - visitas a páginas, región geográfica aproximada, tipo de dispositivo y fuente de referencia. Esto nos ayuda a entender cómo se utiliza el sitio y a mejorar nuestros contenidos.</li>
        <li><strong>Cookies y tecnologías similares</strong> - pequeños archivos de texto almacenados en tu navegador para análisis y funcionalidad básica del sitio. Consulta nuestra <a href="<?php echo $lang_prefix; ?>/cookies">Política de Cookies</a> para obtener información completa.</li>
        <li><strong>Registros del servidor</strong> - tu dirección IP, tipo de navegador y páginas visitadas pueden ser registrados automáticamente por nuestro proveedor de alojamiento por motivos de seguridad y operativos. Estos registros se conservan durante un período limitado y no se utilizan con fines de marketing.</li>
      </ul>
      <p>No recopilamos nombres, direcciones de correo electrónico, números de teléfono, datos de pago ni ninguna otra información personal identificable a través de este sitio web. No almacenamos datos financieros, historial de apuestas ni información de cuentas de clientes.</p>

      <h2>Cómo utilizamos los datos</h2>
      <p>Los datos recopilados se utilizan únicamente para:</p>
      <ul>
        <li>Comprender el tráfico de visitantes y mejorar el contenido del sitio</li>
        <li>Garantizar el correcto funcionamiento del sitio</li>
        <li>Detectar y prevenir abusos o amenazas de seguridad</li>
      </ul>
      <p>No vendemos, alquilamos ni compartimos datos personales con terceros con fines de marketing.</p>

      <h2>Servicios de terceros</h2>
      <p>Podemos utilizar los siguientes servicios de terceros, cada uno de los cuales se rige por su propia política de privacidad:</p>
      <ul>
        <li><strong>Google Analytics</strong> - para el análisis anonimizado del tráfico</li>
        <li><strong>Cloudflare</strong> - para la entrega de contenido y la seguridad</li>
        <li><strong>Enlaces de socios afiliados</strong> - cuando haces clic en un enlace para visitar <?php echo SITE_NAME; ?> Casino, abandonas nuestro sitio y quedas sujeto a las prácticas de privacidad del operador del casino</li>
      </ul>

      <h2>Tus derechos bajo el RGPD y la LOPD-GDD</h2>
      <p>De acuerdo con el Reglamento General de Protección de Datos (RGPD) y la Ley Orgánica 3/2018 de Protección de Datos Personales y garantía de los derechos digitales (LOPD-GDD), tienes derecho a:</p>
      <ul>
        <li>Solicitar acceso a los datos personales que podamos tener sobre ti</li>
        <li>Solicitar la corrección o supresión de dichos datos</li>
        <li>Oponerte al tratamiento o solicitar su limitación</li>
        <li>Portabilidad de datos - recibir tus datos en un formato estructurado y legible por máquina</li>
        <li>Retirar el consentimiento en cualquier momento (por ejemplo, desactivando las cookies en tu navegador)</li>
        <li>Presentar una reclamación ante la autoridad de control competente</li>
      </ul>
      <p>Dado que no recopilamos datos personales a través de este sitio, es poco probable que estos derechos sean relevantes en la práctica. No obstante, si tienes alguna duda o consulta, no dudes en ponerte en contacto con nosotros.</p>
      <p>La autoridad de control en España es la <a href="https://www.aepd.es" target="_blank" rel="noopener noreferrer">Agencia Española de Protección de Datos (AEPD)</a>, ante la que puedes presentar una reclamación si consideras que el tratamiento de tus datos infringe la normativa vigente.</p>

      <h2>Conservación de datos</h2>
      <p>Los registros del servidor se conservan durante un máximo de 90 días. Los datos analíticos se agregan y anonimizan. No mantenemos ninguna base de datos con información de usuarios.</p>

      <h2>Transferencias internacionales</h2>
      <p>Algunos servicios de terceros que utilizamos (como Google Analytics y Cloudflare) pueden tratar datos fuera del Espacio Económico Europeo. Cuando esto ocurra, se aplicarán las salvaguardias adecuadas de conformidad con los requisitos del RGPD.</p>

      <h2>Menores de edad</h2>
      <p>Este sitio web está destinado a personas mayores de 18 años. No recopilamos conscientemente datos de menores de 18 años.</p>

      <h2>Contacto</h2>
      <p>Si tienes preguntas sobre esta política de privacidad, puedes contactarnos en <a href="mailto:info@westace.site">info@westace.site</a> o visitar nuestra página de <a href="<?php echo $lang_prefix; ?>/support">Ayuda</a>.</p>

      <h2>Cambios en esta política</h2>
      <p>Podemos actualizar esta política periódicamente. Cualquier cambio se publicará en esta página con una fecha de revisión actualizada.</p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
