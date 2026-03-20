<?php
/**
 * Support Page - WestAce (Portuguese / PT)
 */
$page_title = 'WestAce Apoio ao Cliente - Chat ao Vivo, E-mail e Centro de Ajuda';
$page_description = 'Contacte o apoio ao cliente do ' . SITE_NAME . ' Casino via chat ao vivo 24 horas por dia ou por e-mail em support@westace.com. Obtenha ajuda com depósitos, levantamentos, bónus, conta e questões técnicas.';
$current_page = 'support';
$lang_prefix = '/pt';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Apoio ao Cliente';
$hero_description = 'Estamos aqui para responder a qualquer questão sobre a sua conta, depósitos, levantamentos, bónus ou problemas técnicos. Contacte-nos a qualquer hora.';
$hero_cta = 'Abrir Chat ao Vivo';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Contact Options -->
  <section class="content-section" id="contact">
    <div class="container">
      <h2>Como Nos Contactar</h2>
      <p>O <?php echo SITE_NAME; ?> disponibiliza dois canais de apoio para que tenha sempre assistência quando necessita. Seja para uma questão rápida sobre uma promoção ou para resolver um problema de pagamento, a nossa equipa está disponível a qualquer hora.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128172;</div>
          <h4>Chat ao Vivo</h4>
          <p>A forma mais rápida de obter ajuda. Clique no ícone de chat em qualquer página para iniciar uma conversa com um agente de apoio. Os nossos agentes respondem normalmente em menos de 5 minutos. Disponível 24 horas por dia, 7 dias por semana.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9993;</div>
          <h4>Apoio por E-mail</h4>
          <p>Para questões detalhadas ou envio de documentos, o e-mail é a melhor opção. Envie a sua mensagem para <strong>support@westace.com</strong> e receberá resposta em até 24 horas. Inclua os dados da sua conta e uma descrição clara do problema.</p>
        </div>
      </div>

      <table class="data-table" style="margin-top: var(--space-8);">
        <thead>
          <tr>
            <th>Canal</th>
            <th>Disponibilidade</th>
            <th>Tempo de Resposta</th>
            <th>Indicado Para</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Chat ao Vivo</td>
            <td>24/7</td>
            <td>Menos de 5 minutos</td>
            <td>Perguntas rápidas, ajuda com bónus, problemas de depósito</td>
          </tr>
          <tr>
            <td>E-mail</td>
            <td>24/7</td>
            <td>Até 24 horas</td>
            <td>Envio de documentos, casos detalhados, reclamações</td>
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
      <h2>Como Podemos Ajudá-lo?</h2>
      <p>A nossa equipa de apoio ao cliente trata de uma grande variedade de assuntos. Aqui estão as áreas mais comuns em que os jogadores procuram assistência:</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Conta &amp; Registo</h4>
          <p>Ajuda na criação de conta, atualização de dados pessoais, recuperação de palavra-passe e resolução de problemas de acesso. Se a sua conta estiver bloqueada ou restrita, o apoio pode rever o seu estado.</p>
        </div>
        <div class="info-card">
          <h4>Depósitos &amp; Pagamentos</h4>
          <p>Assistência com depósitos falhados, questões sobre métodos de pagamento e verificação do estado de transações. O apoio também pode ajudar se um depósito não aparecer no seu saldo.</p>
        </div>
        <div class="info-card">
          <h4>Levantamentos &amp; Pagamentos</h4>
          <p>Questões sobre prazos de processamento de levantamentos, pedidos pendentes e levantamentos recusados. Para informações detalhadas sobre levantamentos, consulte a <a href="<?php echo $lang_prefix; ?>/withdrawal">página de Levantamentos</a>.</p>
        </div>
        <div class="info-card">
          <h4>Bónus &amp; Promoções</h4>
          <p>Esclarecimentos sobre condições de bónus, requisitos de apostas, ativação de ofertas e cancelamento de bónus ativos. O apoio pode explicar os detalhes e as condições de elegibilidade de cada promoção.</p>
        </div>
        <div class="info-card">
          <h4>Verificação &amp; KYC</h4>
          <p>Orientação sobre submissão de documentos, estado da verificação, tipos de documentos aceites e estimativas de prazos. O apoio pode ajudar caso surjam problemas durante o processo de verificação.</p>
        </div>
        <div class="info-card">
          <h4>Problemas Técnicos</h4>
          <p>Ajuda com jogos que não carregam, erros no site, problemas de compatibilidade em telemóvel e questões relacionadas com o browser. O apoio pode diagnosticar e escalar problemas técnicos para a equipa de desenvolvimento.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Contacting Support -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Como Tirar o Máximo do Apoio ao Cliente</h2>
      <p>Alguns passos simples para ajudar a nossa equipa a resolver o seu problema mais rapidamente:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Tenha os dados da sua conta prontos.</strong> O seu nome de utilizador ou endereço de e-mail ajuda o apoio a localizar a sua conta rapidamente. Se o problema envolve uma transação específica, tenha o número de referência disponível.
          </div>
        </li>
        <li>
          <div>
            <strong>Descreva o problema com clareza.</strong> Explique o que aconteceu, quando aconteceu e o que esperava que acontecesse. As capturas de ecrã são úteis para problemas técnicos ou transações em disputa.
          </div>
        </li>
        <li>
          <div>
            <strong>Escolha o canal adequado.</strong> Para questões urgentes (conta bloqueada, depósito falhado), o chat ao vivo é a melhor opção. Para envio de documentos ou casos complexos que exigem investigação, o e-mail em support@westace.com oferece mais espaço para a equipa trabalhar.
          </div>
        </li>
        <li>
          <div>
            <strong>Consulte as perguntas frequentes primeiro.</strong> Muitas questões comuns sobre bónus, levantamentos e gestão de conta estão respondidas nas secções de FAQ ao longo do site.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Responsible Gambling -->
  <section class="content-section content-section--alt" id="responsible">
    <div class="container container--narrow">
      <h2>Jogo Responsável &amp; Autoexclusão</h2>
      <p>O <?php echo SITE_NAME; ?> leva o jogo responsável muito a sério. Se sentir que os seus hábitos de jogo estão a tornar-se problemáticos, a nossa equipa de apoio pode ajudá-lo a solicitar a autoexclusão da plataforma.</p>
      <p>A autoexclusão está disponível por um período definido ou de forma permanente. Uma vez ativada, não pode ser revertida até o prazo estabelecido expirar. Durante o período de autoexclusão, não poderá iniciar sessão nem fazer apostas. Contacte o apoio via chat ao vivo ou por e-mail em support@westace.com para solicitar a autoexclusão.</p>

      <h3>Recursos de Apoio em Portugal</h3>
      <p>A regulação do jogo em Portugal é da responsabilidade do SRIJ - Serviço de Regulação e Inspeção de Jogos. Se o jogo estiver a afetar a sua vida ou a de alguém próximo, contacte os seguintes serviços de apoio:</p>
      <ul>
        <li><strong>Linha Vida</strong> - apoio nacional em saúde mental e dependências, disponível pelo número <strong>808 200 204</strong> (chamada gratuita, 24 horas por dia)</li>
        <li><strong>SRIJ</strong> - entidade reguladora do jogo em Portugal, com informação sobre jogo responsável em <strong>srij.turismodeportugal.pt</strong></li>
        <li><strong>Gamblers Anonymous Portugal</strong> - grupos de apoio e recuperação para pessoas com dependência do jogo</li>
        <li><strong>GamCare</strong> - aconselhamento gratuito e apoio para problemas relacionados com o jogo</li>
      </ul>

      <h3>Avaliação Pessoal</h3>
      <p>Faça a si próprio as seguintes perguntas para avaliar se o jogo pode estar a afetar a sua vida:</p>
      <ul>
        <li>Os seus gastos com o jogo estão fora de controlo?</li>
        <li>Pede dinheiro emprestado para continuar a jogar?</li>
        <li>Está a passar menos tempo com familiares e amigos por causa do jogo?</li>
        <li>A opinião dos outros sobre o seu comportamento de jogo começa a incomodá-lo?</li>
        <li>Perdeu o interesse nas suas atividades habituais?</li>
        <li>Sente-se em baixo ou ansioso por causa de perdas no jogo?</li>
        <li>Alguma vez mentiu sobre o tempo ou dinheiro que gasta a jogar?</li>
      </ul>
      <p>Se respondeu afirmativamente a várias destas questões, recomendamos que contacte a Linha Vida (808 200 204) ou outro serviço de apoio.</p>

      <h3>Dicas Úteis</h3>
      <ul>
        <li>Não trate o jogo como uma fonte de rendimento</li>
        <li>Defina limites de tempo e dinheiro, e cumpra-os</li>
        <li>Jogue apenas com dinheiro que pode permitir-se perder</li>
        <li>Evite jogar quando está stressado, perturbado ou sob o efeito de álcool</li>
      </ul>
    </div>
  </section>

  <!-- Support FAQ -->
  <section class="content-section" id="support-faq">
    <div class="container container--narrow">
      <h2>Perguntas Frequentes sobre o Apoio</h2>

      <details class="faq-item">
        <summary>O apoio do <?php echo SITE_NAME; ?> está disponível 24 horas por dia?</summary>
        <div class="faq-answer">
          <p>Sim. Tanto o chat ao vivo como o apoio por e-mail estão disponíveis a qualquer hora, 24 horas por dia, 7 dias por semana.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Com que rapidez responde o chat ao vivo?</summary>
        <div class="faq-answer">
          <p>Os agentes do chat ao vivo respondem normalmente em menos de 5 minutos. Em horas de maior afluência, os tempos de espera podem ser ligeiramente superiores.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Qual é o e-mail do apoio ao cliente?</summary>
        <div class="faq-answer">
          <p>Pode contactar o apoio do <?php echo SITE_NAME; ?> por e-mail em <strong>support@westace.com</strong>. Inclua o seu nome de utilizador ou e-mail de registo, uma descrição do problema e eventuais capturas de ecrã. Esperamos responder em até 24 horas.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>O apoio pode ajudar-me a cancelar um bónus?</summary>
        <div class="faq-answer">
          <p>Sim. Se quiser cancelar um bónus ativo, contacte o apoio via chat ao vivo ou e-mail. Tenha em conta que cancelar um bónus remove o valor do bónus e quaisquer ganhos obtidos com o mesmo.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>E se o meu problema não for resolvido?</summary>
        <div class="faq-answer">
          <p>Se não ficar satisfeito com a resposta inicial, peça que o seu caso seja escalado para um agente sénior. Forneça o máximo de detalhe possível para ajudar a equipa a investigar o seu caso de forma completa.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso solicitar a autoexclusão?</summary>
        <div class="faq-answer">
          <p>Sim. Contacte o apoio via chat ao vivo ou e-mail para solicitar a autoexclusão por um período definido ou de forma permanente. Durante a autoexclusão, não poderá iniciar sessão nem fazer apostas.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
