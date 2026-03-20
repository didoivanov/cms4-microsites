<?php
/**
 * Política de Cookies - WestAce PT
 */
$lang_prefix = '/pt';
$page_title = 'Política de Cookies - ' . SITE_NAME_SHORT;
$page_description = 'Política de cookies de ' . DOMAIN . '. Saiba que cookies utilizamos e como os gerir.';
$current_page = 'cookies';

require_once __DIR__ . '/../../includes/header.php';
?>

<main>
  <section class="content-section legal-page">
    <div class="container container--narrow">
      <h1>Política de Cookies</h1>
      <p class="legal-updated">Última atualização: 18 de março de 2026</p>

      <h2>O Que São Cookies</h2>
      <p>Os cookies são pequenos ficheiros de texto colocados no seu dispositivo quando visita um site. São amplamente utilizados para garantir o correto funcionamento dos sites, memorizar as suas preferências e fornecer dados de utilização anonimizados aos proprietários dos sites.</p>

      <h2>Como Utilizamos Cookies</h2>
      <p><?php echo DOMAIN; ?> é um site afiliado de análise com uma estrutura leve. Não utilizamos cookies para publicidade, personalização nem para rastreamento noutros sites. Os cookies neste site enquadram-se em três categorias:</p>

      <h3>Cookies Essenciais</h3>
      <p>São necessários para o correto funcionamento do site. Incluem cookies definidos pelo nosso fornecedor de alojamento (Cloudflare) para segurança e desempenho, como a deteção de bots e proteção contra ataques DDoS. Não podem ser desativados sem afetar o funcionamento do site.</p>
      <table class="data-table">
        <thead>
          <tr><th>Cookie</th><th>Fornecedor</th><th>Finalidade</th><th>Duração</th></tr>
        </thead>
        <tbody>
          <tr><td>__cf_bm</td><td>Cloudflare</td><td>Gestão de bots e segurança</td><td>30 minutos</td></tr>
          <tr><td>cf_clearance</td><td>Cloudflare</td><td>Verificação de desafio de segurança</td><td>Até 1 ano</td></tr>
        </tbody>
      </table>

      <h3>Cookies Analíticos</h3>
      <p>Podemos utilizar o Google Analytics para compreender como os visitantes interagem com o site, como as páginas mais populares e a forma como os visitantes chegam ao site. Estes dados são anonimizados e agregados. Não é recolhida qualquer informação de identificação pessoal.</p>
      <table class="data-table">
        <thead>
          <tr><th>Cookie</th><th>Fornecedor</th><th>Finalidade</th><th>Duração</th></tr>
        </thead>
        <tbody>
          <tr><td>_ga</td><td>Google Analytics</td><td>Distingue visitantes únicos</td><td>2 anos</td></tr>
          <tr><td>_ga_*</td><td>Google Analytics</td><td>Mantém o estado da sessão</td><td>2 anos</td></tr>
        </tbody>
      </table>

      <h3>Cookies de Marketing e Afiliados</h3>
      <p>Não definimos cookies de marketing por nossa conta. No entanto, quando clica numa ligação de afiliado no nosso site, a plataforma de destino pode definir cookies para rastrear a referência. Esses cookies são definidos por terceiros e regidos pela política de cookies desses terceiros, não pela nossa.</p>

      <h2>Cookies de Terceiros</h2>
      <p>Quando clica numa ligação de afiliado e sai do nosso site, o site de destino pode definir os seus próprios cookies. Não temos controlo sobre estes. Consulte a política de cookies do operador de casino para mais detalhes.</p>

      <h2>Consentimento de Cookies</h2>
      <p>Ao abrigo da Diretiva ePrivacy da UE e do RGPD, somos obrigados a obter o seu consentimento antes de colocar cookies não essenciais no seu dispositivo. Os cookies essenciais estritamente necessários para o funcionamento do site não requerem consentimento. Ao continuar a utilizar este site, consente a utilização de cookies analíticos conforme descrito acima. Pode retirar o consentimento a qualquer momento através das definições do seu navegador.</p>

      <h2>Gerir Cookies</h2>
      <p>Pode controlar e eliminar cookies através das definições do seu navegador. A maioria dos navegadores permite-lhe:</p>
      <ul>
        <li>Ver que cookies estão guardados e eliminá-los individualmente</li>
        <li>Bloquear cookies de terceiros</li>
        <li>Bloquear todos os cookies de sites específicos</li>
        <li>Bloquear todos os cookies</li>
        <li>Eliminar todos os cookies ao fechar o navegador</li>
      </ul>
      <p>Desativar cookies pode afetar o funcionamento do site, em particular as funcionalidades de segurança fornecidas pela Cloudflare.</p>
      <p>Para instruções sobre como gerir cookies no seu navegador:</p>
      <ul>
        <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener noreferrer">Google Chrome</a></li>
        <li><a href="https://support.mozilla.org/pt-PT/kb/cookies-informacoes-armazenadas-por-websites" target="_blank" rel="noopener noreferrer">Mozilla Firefox</a></li>
        <li><a href="https://support.apple.com/pt-pt/guide/safari/sfri11471/mac" target="_blank" rel="noopener noreferrer">Safari</a></li>
        <li><a href="https://support.microsoft.com/pt-pt/microsoft-edge/eliminar-cookies-no-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank" rel="noopener noreferrer">Microsoft Edge</a></li>
      </ul>

      <h2>Alterações a Esta Política</h2>
      <p>Podemos atualizar esta política de cookies periodicamente. Quaisquer alterações serão publicadas nesta página com uma data de revisão atualizada.</p>

      <h2>Contacto</h2>
      <p>Se tiver dúvidas sobre a nossa utilização de cookies, contacte-nos através de <a href="mailto:info@westace.site">info@westace.site</a> ou visite a nossa página de <a href="<?php echo $lang_prefix; ?>/support">Apoio</a>.</p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
