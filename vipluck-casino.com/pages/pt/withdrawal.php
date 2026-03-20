<?php
/**
 * Withdrawal Page – Portuguese (PT-PT)
 */
$page_title = SITE_NAME . ' Levantamento - Métodos, Limites & Prazos de Processamento';
$page_description = 'Tudo sobre levantamentos no ' . SITE_NAME . ' Casino: métodos disponíveis, prazos até 7 dias úteis, limites diários e mensais, verificação KYC e dicas para receber os seus ganhos mais depressa.';
$current_page = 'withdrawal';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Levantamento &amp; Pagamento de Ganhos';
$hero_description = 'Como levantar os seus ganhos: métodos disponíveis, prazos de processamento, limites e o que esperar na verificação de identidade.';
$hero_cta = 'Jogar agora';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Levantamentos - Resumo</h2>
      <p>Levantar ganhos no <?php echo SITE_NAME; ?> é direto quando conhece as regras. Os pedidos de levantamento são processados no prazo de 72 horas nos dias úteis. Atenção: o <?php echo SITE_NAME; ?> não processa levantamentos ao fim de semana. Pedidos submetidos de sexta à noite até domingo ficam em espera e começam a ser tratados a partir de segunda-feira.</p>
      <p>Sempre que possível, o valor é transferido para o mesmo método de pagamento utilizado no depósito. Se esse método não aceitar transferências a receber, o montante é enviado por transferência bancária. Antes do primeiro levantamento, é obrigatório concluir a verificação KYC e cumprir o requisito mínimo de aposta sobre o depósito.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Levantamento Mínimo</h4>
          <p>&euro;20 em todos os métodos de pagamento. Valores abaixo deste limite não podem ser processados.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Limite Diário</h4>
          <p>&euro;700 para contas standard. Membros VIP podem levantar até &euro;1.500 por dia.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Limite Mensal</h4>
          <p>&euro;9.000 para jogadores standard. Membros VIP têm limite semanal de &euro;7.000 e mensal de &euro;28.000.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Payment Methods Table -->
  <section class="content-section content-section--alt" id="methods">
    <div class="container">
      <h2>Métodos de Levantamento</h2>
      <div class="two-col" style="align-items:flex-start;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p style="margin-top:0">Os métodos de levantamento disponíveis dependem do seu país e do método utilizado no depósito. Em regra, o <?php echo SITE_NAME; ?> devolve o valor pelo mesmo canal utilizado para depositar.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-payments.png" alt="<?php echo SITE_NAME; ?> Casino métodos de pagamento: Jeton, MiFinity, eZeeWallet, Bitcoin, Ethereum, Tether, Ripple e mais" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>

      <table class="data-table">
        <thead>
          <tr>
            <th>Método</th>
            <th>Levantamento Mínimo</th>
            <th>Prazo de Processamento</th>
            <th>Notas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Visa / Mastercard</td>
            <td>&euro;20</td>
            <td>1-5 dias úteis</td>
            <td>Devolvido ao cartão utilizado no depósito</td>
          </tr>
          <tr>
            <td>Skrill</td>
            <td>&euro;20</td>
            <td>Até 24 horas</td>
            <td>Processamento rápido, amplamente disponível</td>
          </tr>
          <tr>
            <td>Neteller</td>
            <td>&euro;20</td>
            <td>Até 24 horas</td>
            <td>Disponível na maioria das regiões</td>
          </tr>
          <tr>
            <td>Jeton</td>
            <td>&euro;20</td>
            <td>Até 24 horas</td>
            <td>Carteira digital com cobertura alargada</td>
          </tr>
          <tr>
            <td>MiFinity</td>
            <td>&euro;20</td>
            <td>Até 24 horas</td>
            <td>Carteira digital para levantamentos rápidos</td>
          </tr>
          <tr>
            <td>eZeeWallet</td>
            <td>&euro;20</td>
            <td>Até 24 horas</td>
            <td>Verificar disponibilidade por região</td>
          </tr>
          <tr>
            <td>Google Pay</td>
            <td>&euro;20</td>
            <td>Até 24 horas</td>
            <td>Sujeito a disponibilidade por região</td>
          </tr>
          <tr>
            <td>Transferência Bancária</td>
            <td>&euro;20</td>
            <td>3-7 dias úteis</td>
            <td>Método alternativo quando o original não está disponível</td>
          </tr>
          <tr>
            <td>Bitcoin</td>
            <td>&euro;20</td>
            <td>Até 24 horas</td>
            <td>Requer confirmações na blockchain após processamento</td>
          </tr>
          <tr>
            <td>Ethereum</td>
            <td>&euro;20</td>
            <td>Até 24 horas</td>
            <td>Uma das opções de levantamento mais rápidas</td>
          </tr>
          <tr>
            <td>Tether (USDT)</td>
            <td>&euro;20</td>
            <td>Até 24 horas</td>
            <td>Stablecoin com variação mínima de câmbio</td>
          </tr>
          <tr>
            <td>Ripple (XRP)</td>
            <td>&euro;20</td>
            <td>Até 24 horas</td>
            <td>Liquidação rápida na blockchain</td>
          </tr>
          <tr>
            <td>USD Coin (USDC)</td>
            <td>&euro;20</td>
            <td>Até 24 horas</td>
            <td>Alternativa stablecoin ao USDT</td>
          </tr>
          <tr>
            <td>Cardano (ADA)</td>
            <td>&euro;20</td>
            <td>Até 24 horas</td>
            <td>Verificar disponibilidade por região</td>
          </tr>
          <tr>
            <td>Dogecoin</td>
            <td>&euro;20</td>
            <td>Até 24 horas</td>
            <td>Levantamento cripto com taxas reduzidas</td>
          </tr>
          <tr>
            <td>Litecoin</td>
            <td>&euro;20</td>
            <td>Até 24 horas</td>
            <td>Tempos de bloco mais rápidos que o Bitcoin</td>
          </tr>
          <tr>
            <td>Bitcoin Cash</td>
            <td>&euro;20</td>
            <td>Até 24 horas</td>
            <td>Taxas mais baixas que o Bitcoin standard</td>
          </tr>
          <tr>
            <td>Solana (SOL)</td>
            <td>&euro;20</td>
            <td>Até 24 horas</td>
            <td>Blockchain rápida com taxas muito baixas</td>
          </tr>
        </tbody>
      </table>

      <p>Moedas aceites para transações: EUR, CHF, USD, CAD, AUD, NZD, PLN, BRL, NOK, ZAR, CZK, HUF e CLP.</p>
    </div>
  </section>

  <!-- How to Withdraw -->
  <section class="content-section" id="how-to">
    <div class="container">
      <h2>Como Fazer um Levantamento</h2>
      <p>Siga estes passos para solicitar um levantamento da sua conta <?php echo SITE_NAME; ?>:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Cumprir o requisito de aposta.</strong> Antes do primeiro levantamento, o seu depósito deve ser apostado pelo menos 1x. Se ativou um bónus, cumpra primeiro os requisitos de aposta completos. Caso contrário, pode ser aplicada uma taxa de processamento.
          </div>
        </li>
        <li>
          <div>
            <strong>Aceder à caixa de pagamentos.</strong> Navegue até à secção de levantamentos na sua conta. Pode encontrá-la no menu principal ou nas definições da conta.
          </div>
        </li>
        <li>
          <div>
            <strong>Escolher o método e o valor.</strong> Selecione entre as opções disponíveis e introduza o valor que pretende levantar. Confirme que o montante está dentro dos limites permitidos.
          </div>
        </li>
        <li>
          <div>
            <strong>Aguardar o processamento.</strong> O <?php echo SITE_NAME; ?> processa levantamentos apenas em dias úteis (segunda a sexta). Conte até 72 horas para processamento standard. Pedidos submetidos ao fim de semana começam a ser tratados a partir de segunda-feira. Se forem necessários documentos adicionais, a equipa entrará em contacto.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- KYC Verification -->
  <section class="content-section content-section--alt" id="verification">
    <div class="container">
      <h2>Verificação de Conta (KYC)</h2>
      <p>O <?php echo SITE_NAME; ?> exige verificação de identidade antes de aprovar pedidos de levantamento. Este procedimento é prática comum no setor para prevenir fraude e cumprir as normas anti-branqueamento de capitais.</p>

      <div class="two-col">
        <div>
          <h3>Documentos Necessários</h3>
          <ul>
            <li>Documento de identificação oficial com fotografia (passaporte, carta de condução ou bilhete de identidade)</li>
            <li>Comprovativo de morada (fatura de serviços ou extrato bancário com data de menos de 3 meses)</li>
            <li>Verificação do método de pagamento (fotografia do cartão de crédito/débito, captura de ecrã da carteira digital ou confirmação de carteira cripto)</li>
          </ul>
          <p>Tem 30 dias a partir do primeiro pedido de documentos para os submeter. Caso não cumpra este prazo, a sua conta pode ser encerrada.</p>
        </div>
        <div>
          <h3>Prazo de Verificação</h3>
          <p>O prazo standard de análise dos documentos é de até 10 dias úteis, podendo em casos excecionais ser mais demorado. O casino pode recorrer a serviços de verificação externos ou solicitar verificações adicionais, como uma videochamada ou confirmação por telefone.</p>
          <p>Os documentos podem ser enviados na secção "Definições - Verificação de Conta" do seu perfil. Tire fotografias nítidas e bem iluminadas para evitar atrasos por documentos ilegíveis.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Large Wins -->
  <section class="content-section" id="large-wins">
    <div class="container container--narrow">
      <h2>Ganhos Elevados &amp; Processamento Alargado</h2>
      <div class="highlight-box">
        <h4>Levantamentos acima de &euro;5.000</h4>
        <p>Ganhos superiores a &euro;5.000 podem requerer verificação adicional e demorar mais do que o prazo standard. O casino reserva-se o direito de pagar grandes levantamentos em prestações, de acordo com os limites diários e semanais em vigor. Membros VIP com limites superiores poderão beneficiar de processamento mais rápido em montantes elevados.</p>
      </div>
      <p>Se o seu levantamento ultrapassar &euro;5.000, a equipa do <?php echo SITE_NAME; ?> pode solicitar documentos de verificação adicionais ou realizar uma análise alargada. É prática comum em transações de grande valor e serve para proteger tanto o jogador como o casino.</p>
    </div>
  </section>

  <!-- Tips for Faster Payouts -->
  <section class="content-section content-section--alt" id="tips">
    <div class="container container--narrow">
      <h2>Dicas para Levantamentos Mais Rápidos</h2>

      <h3>1. Optar por carteiras digitais ou criptomoedas</h3>
      <p>Skrill, Neteller, Jeton, MiFinity e opções cripto como Bitcoin, Ethereum ou Solana são geralmente processadas mais depressa do que cartões ou transferências bancárias. Com 10 criptomoedas disponíveis, o <?php echo SITE_NAME; ?> oferece uma das seleções cripto mais alargadas do mercado. Se a velocidade é prioridade, deposite com um destes métodos para que o levantamento seja feito pelo mesmo canal.</p>

      <h3>2. Verificar a conta antecipadamente</h3>
      <p>Não espere pelo primeiro levantamento para enviar os seus documentos. Carregue o documento de identificação, o comprovativo de morada e a verificação do método de pagamento logo após o registo. Assim, não há atrasos por verificações pendentes quando chegar a altura de levantar.</p>

      <h3>3. Cumprir os requisitos de aposta antes de pedir o levantamento</h3>
      <p>Se tiver um bónus ativo, certifique-se de que todos os requisitos de aposta estão completamente cumpridos. Um pedido de levantamento com bónus ativo resulta no cancelamento do bónus e de todos os ganhos associados. Se jogou apenas com dinheiro depositado, lembre-se da aposta mínima de 1x que deve ser cumprida para evitar taxas adicionais.</p>

      <h3>4. Respeitar os limites</h3>
      <p>Pedidos de levantamento que excedam os limites diários ou mensais serão recusados. Planeie os seus levantamentos em conformidade: &euro;700 por dia para contas standard, &euro;1.500 por dia para membros VIP. Os limites semanais são de &euro;2.250 (standard) e &euro;7.000 (VIP).</p>

      <h3>5. Submeter pedidos em dias úteis</h3>
      <p>O <?php echo SITE_NAME; ?> não processa levantamentos ao fim de semana. Submeter o pedido no início da semana dá à equipa mais tempo para tratar o pedido antes do fim de semana. Pedidos de sexta à noite ou do fim de semana só começam a ser processados a partir de segunda-feira.</p>

      <h3>6. Utilizar o mesmo método do depósito</h3>
      <p>O <?php echo SITE_NAME; ?> prefere devolver os fundos pelo mesmo método utilizado no depósito. Optar por um método diferente pode desencadear verificações adicionais e atrasar o processo.</p>
    </div>
  </section>

  <!-- Fees -->
  <section class="content-section" id="fees">
    <div class="container container--narrow">
      <h2>Taxas de Levantamento</h2>
      <p>O <?php echo SITE_NAME; ?> não cobra taxas sobre levantamentos. O seu fornecedor de pagamento ou banco pode, no entanto, aplicar as suas próprias taxas de transação, custos de conversão de moeda ou comissões intermediárias. Consulte o seu fornecedor de pagamento sobre eventuais taxas de terceiros em transferências a receber.</p>
      <p>Se não cumprir o requisito de aposta mínima de 1x sobre o depósito antes de solicitar um levantamento, pode ser aplicada uma taxa de processamento. Cumpra sempre o requisito mínimo de aposta primeiro para evitar esta taxa.</p>
    </div>
  </section>

  <!-- Withdrawal FAQ -->
  <section class="content-section content-section--alt" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>Perguntas Frequentes - Levantamentos</h2>

      <details class="faq-item">
        <summary>Quanto tempo demora um levantamento no <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Os levantamentos são processados no prazo de 72 horas nos dias úteis. O <?php echo SITE_NAME; ?> não processa levantamentos ao fim de semana - no pior caso, pode demorar até 7 dias úteis desde a submissão até à receção do valor. Carteiras digitais e criptomoedas são geralmente as mais rápidas, concluídas muitas vezes em menos de 24 horas após processamento pelo casino. Transferências bancárias e por cartão podem demorar mais 1-5 dias úteis do lado do fornecedor.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Qual é o levantamento mínimo no <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>O levantamento mínimo é de &euro;20 em todos os métodos de pagamento. Valores inferiores a este limite não podem ser solicitados.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Qual o máximo que posso levantar por mês?</summary>
        <div class="faq-answer">
          <p>Jogadores standard podem levantar até &euro;9.000 por mês (&euro;700 por dia, &euro;2.250 por semana). Membros VIP têm limites superiores: &euro;1.500 por dia, &euro;7.000 por semana e &euro;28.000 por mês.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>O <?php echo SITE_NAME; ?> processa levantamentos ao fim de semana?</summary>
        <div class="faq-answer">
          <p>Não. O processamento de levantamentos ocorre apenas em dias úteis (segunda a sexta). Pedidos submetidos ao fim de semana começam a ser processados a partir da segunda-feira seguinte.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Por que razão foi recusado o meu levantamento?</summary>
        <div class="faq-answer">
          <p>Razões comuns incluem: requisitos de aposta não cumpridos, conta não verificada, exceder os limites diários, semanais ou mensais, ou solicitar levantamento para um método diferente do utilizado no depósito. Contacte o suporte para obter detalhes sobre o seu caso específico.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Existem taxas sobre levantamentos?</summary>
        <div class="faq-answer">
          <p>O <?php echo SITE_NAME; ?> não cobra taxas sobre levantamentos. O seu fornecedor de pagamento pode aplicar as suas próprias taxas para receber fundos. Se não cumpriu o requisito de aposta mínima de 1x sobre o depósito antes de solicitar o levantamento, pode ser aplicada uma taxa de processamento.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>O que acontece em caso de ganhos elevados acima de &euro;5.000?</summary>
        <div class="faq-answer">
          <p>Levantamentos acima de &euro;5.000 podem exigir verificação adicional e demorar mais tempo. O casino pode dividir grandes levantamentos em prestações com base nos limites diários e semanais. Membros VIP geralmente beneficiam de processamento mais rápido em montantes elevados.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso cancelar um levantamento pendente?</summary>
        <div class="faq-answer">
          <p>Dependendo do estado de processamento, pode ser possível cancelar um levantamento pendente. Contacte o suporte ao cliente por chat ao vivo para obter ajuda com o cancelamento.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
