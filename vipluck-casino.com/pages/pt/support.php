<?php
/**
 * Support Page – Portuguese (PT-PT)
 */
$page_title = SITE_NAME . ' Apoio ao Cliente - Chat ao Vivo, E-mail, Telegram & Ajuda';
$page_description = 'Contacte o apoio ao cliente do ' . SITE_NAME . ' Casino via chat ao vivo 24/7, e-mail para support@vipluck.com ou Telegram. Ajuda com depósitos, levantamentos, bónus, problemas de conta e questões técnicas.';
$current_page = 'support';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Apoio ao Cliente';
$hero_description = 'Estamos disponíveis para qualquer questão sobre a sua conta, depósitos, levantamentos, bónus ou problemas técnicos. Entre em contacto a qualquer momento.';
$hero_cta = 'Abrir chat ao vivo';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Contact Options -->
  <section class="content-section" id="contact">
    <div class="container">
      <h2>Como nos Contactar</h2>
      <p>O <?php echo SITE_NAME; ?> disponibiliza três canais de suporte para que obtenha ajuda a qualquer momento. Seja para uma dúvida rápida sobre uma promoção, assistência com um problema de pagamento, ou preferência por comunicação via aplicação de mensagens - a nossa equipa está disponível.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128172;</div>
          <h4>Chat ao Vivo</h4>
          <p>A forma mais rápida de obter ajuda. Clique no ícone de chat em qualquer página do site para iniciar uma conversa com um agente de suporte. O tempo médio de resposta é inferior a 2 minutos. Disponível 24 horas por dia, 7 dias por semana.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9993;</div>
          <h4>Suporte por E-mail</h4>
          <p>Para questões mais detalhadas ou envio de documentos, o e-mail é a melhor opção. Envie a sua questão para <strong>support@vipluck.com</strong> e espere uma resposta no prazo de 24 horas. Indique sempre os dados da sua conta e uma descrição clara do problema.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9992;</div>
          <h4>Telegram</h4>
          <p>O <?php echo SITE_NAME; ?> mantém um canal oficial no Telegram para suporte e avisos. Pode colocar questões rápidas, receber novidades sobre promoções e obter ajuda geral. O link para o Telegram está disponível no site do casino.</p>
        </div>
      </div>

      <table class="data-table" style="margin-top: var(--space-8);">
        <thead>
          <tr>
            <th>Canal</th>
            <th>Disponibilidade</th>
            <th>Tempo de Resposta</th>
            <th>Indicado para</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Chat ao Vivo</td>
            <td>24/7</td>
            <td>Menos de 2 minutos</td>
            <td>Questões rápidas, ajuda com bónus, problemas de depósito</td>
          </tr>
          <tr>
            <td>E-mail</td>
            <td>24/7</td>
            <td>Até 24 horas</td>
            <td>Envio de documentos, casos detalhados, reclamações</td>
          </tr>
          <tr>
            <td>Telegram</td>
            <td>24/7</td>
            <td>Variável</td>
            <td>Questões rápidas, promoções, avisos</td>
          </tr>
          <tr>
            <td>Telefone</td>
            <td>Não disponível</td>
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
      <h2>Como Pode o Suporte Ajudar?</h2>
      <p>A nossa equipa de apoio ao cliente trata de um vasto leque de questões. Estes são os temas mais frequentes em que os jogadores pedem assistência:</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Conta &amp; Registo</h4>
          <p>Ajuda na criação de conta, atualização de dados pessoais, redefinição de palavra-passe, recuperação de nome de utilizador e problemas de acesso. Se a sua conta estiver bloqueada ou restringida, o suporte pode verificar o estado.</p>
        </div>
        <div class="info-card">
          <h4>Depósitos &amp; Pagamentos</h4>
          <p>Assistência com depósitos falhados, questões sobre métodos de pagamento, opções de moeda e consultas sobre o estado de transações. O suporte também ajuda quando um depósito não aparece no saldo.</p>
        </div>
        <div class="info-card">
          <h4>Levantamentos &amp; Pagamento de Ganhos</h4>
          <p>Questões sobre prazos de levantamento, pedidos pendentes, levantamentos recusados e ajuste de limites. Atenção: o <?php echo SITE_NAME; ?> não processa levantamentos ao fim de semana. Consulte a <a href="/pt/withdrawal">página de levantamentos</a> para informação detalhada.</p>
        </div>
        <div class="info-card">
          <h4>Bónus &amp; Promoções</h4>
          <p>Esclarecimento de condições de bónus, requisitos de aposta, ativação de ofertas e cancelamento de bónus ativos. O suporte pode explicar os detalhes de promoções específicas e as condições de participação.</p>
        </div>
        <div class="info-card">
          <h4>Verificação &amp; KYC</h4>
          <p>Ajuda no envio de documentos, estado de verificação, tipos de documentos aceites e prazos. Os documentos podem ser enviados nas definições da conta, mas o suporte auxilia em caso de problemas.</p>
        </div>
        <div class="info-card">
          <h4>Problemas Técnicos</h4>
          <p>Ajuda quando os jogos não carregam, erros no site, problemas de compatibilidade com dispositivos móveis e questões de browser. O suporte pode analisar erros e encaminhar bugs técnicos para a equipa de desenvolvimento.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Site Languages -->
  <section class="content-section" id="languages">
    <div class="container container--narrow">
      <h2>Idiomas Suportados</h2>
      <p>O site do <?php echo SITE_NAME; ?> está disponível em 13 idiomas para servir jogadores de diferentes regiões:</p>
      <div class="info-grid">
        <div class="info-card">
          <h4>Idiomas Europeus</h4>
          <ul>
            <li>English (Inglês)</li>
            <li>Deutsch (Alemão)</li>
            <li>Norsk (Norueguês)</li>
            <li>Fran&ccedil;ais (Francês)</li>
            <li>Italiano (Italiano)</li>
            <li>Espa&ntilde;ol (Espanhol)</li>
            <li>Portugu&ecirc;s (Português)</li>
            <li>Suomi (Finlandês)</li>
            <li>&Ccaron;e&scaron;tina (Checo)</li>
          </ul>
        </div>
        <div class="info-card">
          <h4>Outros Idiomas</h4>
          <ul>
            <li>&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940; (Grego)</li>
            <li>&#1575;&#1604;&#1593;&#1585;&#1576;&#1610;&#1577; (Árabe)</li>
            <li>Polski (Polaco)</li>
            <li>Magyar (Húngaro)</li>
          </ul>
        </div>
      </div>
      <p>Os agentes de suporte prestam assistência habitualmente em inglês e, consoante a disponibilidade, também noutros idiomas da lista.</p>
    </div>
  </section>

  <!-- Tips for Contacting Support -->
  <section class="content-section content-section--alt" id="tips">
    <div class="container container--narrow">
      <h2>Como Tirar o Máximo do Suporte</h2>
      <p>Alguns passos simples ajudam a equipa de suporte a resolver o seu problema mais depressa:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Ter os dados da conta disponíveis.</strong> O seu nome de utilizador ou endereço de e-mail permite que o suporte encontre a sua conta rapidamente. Se a questão envolver uma transação específica, tenha o número de referência à mão.
          </div>
        </li>
        <li>
          <div>
            <strong>Descrever o problema com clareza.</strong> Explique o que aconteceu, quando aconteceu e o que esperava que acontecesse. Capturas de ecrã são úteis em problemas técnicos ou transações contestadas.
          </div>
        </li>
        <li>
          <div>
            <strong>Escolher o canal certo.</strong> Para questões urgentes (conta bloqueada, depósito falhado), o chat ao vivo é a melhor opção. Para envio de documentos ou casos complexos, o e-mail para support@vipluck.com dá à equipa mais margem de análise. Para questões rápidas ou atualizações de promoções, experimente o Telegram.
          </div>
        </li>
        <li>
          <div>
            <strong>Consultar as FAQ primeiro.</strong> Muitas questões comuns sobre bónus, levantamentos e gestão de conta estão respondidas nas secções de FAQ deste site. Uma consulta rápida pode poupar tempo de espera.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Responsible Gambling -->
  <section class="content-section" id="responsible">
    <div class="container container--narrow">
      <h2>Jogo Responsável &amp; Autoexclusão</h2>
      <p>O <?php echo SITE_NAME; ?> leva o jogo responsável a sério. Se sentir que os seus hábitos de jogo se estão a tornar problemáticos, a nossa equipa de suporte pode ajudá-lo a definir limites de depósito, períodos de pausa ou uma autoexclusão da plataforma.</p>
      <p>As opções de autoexclusão vão desde pausas temporárias até ao encerramento permanente da conta. Uma vez ativada, a autoexclusão só pode ser levantada após o término do período definido. Contacte o suporte por chat ao vivo, e-mail para support@vipluck.com ou Telegram para discutir as opções disponíveis.</p>
      <p>Para apoio externo, pode contactar organizações como o Jogo Responsável ou a Linha de Apoio ao Jogador em Portugal, que oferecem aconselhamento gratuito e confidencial.</p>
    </div>
  </section>

  <!-- Support FAQ -->
  <section class="content-section content-section--alt" id="support-faq">
    <div class="container container--narrow">
      <h2>FAQ de Suporte</h2>

      <details class="faq-item">
        <summary>O suporte do <?php echo SITE_NAME; ?> está disponível em vários idiomas?</summary>
        <div class="faq-answer">
          <p>O site está disponível em 13 idiomas: inglês, alemão, norueguês, francês, italiano, espanhol, português, grego, árabe, polaco, húngaro, finlandês e checo. Os agentes de suporte prestam assistência habitualmente em inglês e, consoante a disponibilidade, também noutros idiomas.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Com que rapidez responde o chat ao vivo?</summary>
        <div class="faq-answer">
          <p>Em condições normais, as respostas do chat ao vivo chegam entre 1 e 2 minutos. Em períodos de maior afluência, o tempo de espera pode ser ligeiramente superior, mas a equipa trabalha para minimizar qualquer demora.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Qual é o endereço de e-mail do suporte?</summary>
        <div class="faq-answer">
          <p>Pode contactar o suporte do <?php echo SITE_NAME; ?> por e-mail para <strong>support@vipluck.com</strong>. Indique o seu nome de utilizador ou e-mail registado, uma descrição do problema e quaisquer capturas de ecrã ou referências de transação relevantes. Espere uma resposta no prazo de 24 horas.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso contactar o suporte via Telegram?</summary>
        <div class="faq-answer">
          <p>Sim. O <?php echo SITE_NAME; ?> tem um canal oficial no Telegram onde pode obter suporte, ver promoções e receber atualizações. O link para o canal oficial está disponível no site do casino.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>O suporte pode ajudar-me a cancelar um bónus?</summary>
        <div class="faq-answer">
          <p>Sim. Se pretender cancelar um bónus ativo, pode fazê-lo na secção de perfil da sua conta ou contactar o suporte por chat ao vivo ou e-mail. Tenha em atenção que o cancelamento de um bónus remove o valor do bónus e todos os ganhos gerados com ele.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>E se o meu problema não for resolvido?</summary>
        <div class="faq-answer">
          <p>Se não ficar satisfeito com a resposta inicial, solicite que o seu caso seja escalado para um agente sénior ou supervisor. Em disputas não resolvidas, pode também recorrer aos procedimentos de reclamação descritos nos Termos e Condições.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso definir limites de depósito ou de perdas?</summary>
        <div class="faq-answer">
          <p>Sim. Contacte o suporte para definir limites de depósito diários, semanais ou mensais. Pode também solicitar limites de perdas ou lembretes de duração de sessão para gerir os seus hábitos de jogo.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
