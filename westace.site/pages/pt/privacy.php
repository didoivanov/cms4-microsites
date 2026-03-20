<?php
/**
 * Política de Privacidade - WestAce PT
 */
$lang_prefix = '/pt';
$page_title = 'Política de Privacidade - ' . SITE_NAME_SHORT;
$page_description = 'Política de privacidade de ' . DOMAIN . '. Saiba como tratamos os seus dados enquanto site afiliado independente de análise de casinos.';
$current_page = 'privacy';

require_once __DIR__ . '/../../includes/header.php';
?>

<main>
  <section class="content-section legal-page">
    <div class="container container--narrow">
      <h1>Política de Privacidade</h1>
      <p class="legal-updated">Última atualização: 18 de março de 2026</p>

      <h2>Quem Somos</h2>
      <p><?php echo DOMAIN; ?> é um site afiliado independente que publica conteúdo informativo e análises sobre o Casino <?php echo SITE_NAME; ?>. Não somos um casino, não aceitamos apostas e não processamos quaisquer transações de jogo. Quando clica em determinadas ligações no nosso site, poderá ser redirecionado para o site do operador de casino, que é regido pela sua própria política de privacidade e termos e condições.</p>

      <h2>Que Dados Recolhemos</h2>
      <p>Mantemos a recolha de dados no mínimo absoluto. Não exigimos registo, conta ou dados pessoais para navegar neste site. Os dados que podemos recolher incluem:</p>
      <ul>
        <li><strong>Dados analíticos anonimizados</strong> - páginas visitadas, região geográfica aproximada, tipo de dispositivo e origem do tráfego. Estes dados ajudam-nos a compreender como o site é utilizado e a melhorar o nosso conteúdo.</li>
        <li><strong>Cookies e tecnologias semelhantes</strong> - pequenos ficheiros de texto guardados no seu navegador para fins analíticos e de funcionamento básico do site. Consulte a nossa <a href="<?php echo $lang_prefix; ?>/cookies">Política de Cookies</a> para mais detalhes.</li>
        <li><strong>Registos do servidor</strong> - o seu endereço IP, tipo de navegador e páginas visitadas podem ser registados automaticamente pelo nosso fornecedor de alojamento para fins de segurança e operação. Estes registos são conservados por um período limitado e não são utilizados para fins de marketing.</li>
      </ul>
      <p>Não recolhemos nomes, endereços de e-mail, números de telemóvel, dados de pagamento nem qualquer outra informação de identificação pessoal através deste site. Não guardamos dados financeiros, historial de apostas nem qualquer informação de conta de cliente.</p>

      <h2>Como Utilizamos os Dados</h2>
      <p>Os dados recolhidos são utilizados exclusivamente para:</p>
      <ul>
        <li>Compreender o tráfego de visitantes e melhorar o conteúdo do site</li>
        <li>Garantir o correto funcionamento do site</li>
        <li>Detetar e prevenir abusos ou ameaças de segurança</li>
      </ul>
      <p>Não vendemos, alugamos nem partilhamos dados pessoais com terceiros para fins de marketing.</p>

      <h2>Serviços de Terceiros</h2>
      <p>Podemos utilizar os seguintes serviços de terceiros, cada um regido pela sua própria política de privacidade:</p>
      <ul>
        <li><strong>Google Analytics</strong> - para análise de tráfego anonimizada</li>
        <li><strong>Cloudflare</strong> - para entrega de conteúdo e segurança</li>
        <li><strong>Ligações de parceiros afiliados</strong> - quando clica numa ligação para visitar o Casino <?php echo SITE_NAME; ?>, sai do nosso site e fica sujeito às práticas de privacidade do operador de casino</li>
      </ul>

      <h2>Os Seus Direitos ao Abrigo do RGPD</h2>
      <p>Ao abrigo do Regulamento Geral sobre a Proteção de Dados (RGPD), tem direito a:</p>
      <ul>
        <li>Solicitar acesso a quaisquer dados pessoais que mantenhamos sobre si</li>
        <li>Solicitar a correção ou eliminação desses dados</li>
        <li>Opor-se ao tratamento ou restringi-lo</li>
        <li>Portabilidade de dados - receber os seus dados num formato estruturado e legível por máquina</li>
        <li>Retirar o consentimento a qualquer momento (por exemplo, desativando cookies no seu navegador)</li>
        <li>Apresentar uma reclamação junto da Comissão Nacional de Proteção de Dados (CNPD) ou de outra autoridade de controlo competente</li>
      </ul>
      <p>Uma vez que não recolhemos dados pessoais através deste site, estes direitos dificilmente serão relevantes na prática. Ainda assim, se tiver alguma preocupação, por favor contacte-nos.</p>

      <h2>Conservação de Dados</h2>
      <p>Os registos do servidor são conservados até 90 dias. Os dados analíticos são agregados e anonimizados. Não mantemos qualquer base de dados com informações de utilizadores.</p>

      <h2>Transferências Internacionais</h2>
      <p>Alguns serviços de terceiros que utilizamos, como o Google Analytics e a Cloudflare, podem processar dados fora do Espaço Económico Europeu. Quando tal sucede, estão implementadas salvaguardas adequadas em conformidade com os requisitos do RGPD.</p>

      <h2>Menores de Idade</h2>
      <p>Este site destina-se a adultos com idade igual ou superior a 18 anos. Não recolhemos intencionalmente dados de menores de 18 anos.</p>

      <h2>Contacto</h2>
      <p>Se tiver dúvidas sobre esta política de privacidade, pode contactar-nos através de <a href="mailto:info@westace.site">info@westace.site</a> ou visitar a nossa página de <a href="<?php echo $lang_prefix; ?>/support">Apoio</a>.</p>

      <h2>Alterações a Esta Política</h2>
      <p>Podemos atualizar esta política periodicamente. Quaisquer alterações serão publicadas nesta página com uma data de revisão atualizada.</p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
