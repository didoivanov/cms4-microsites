<?php
/**
 * Withdrawal Page - WestAce (Portuguese / PT)
 */
$page_title = 'WestAce Levantamentos - Métodos de Pagamento, Limites e Prazos de Processamento';
$page_description = 'Tudo sobre levantamentos no ' . SITE_NAME . ' Casino: métodos de pagamento, prazos de processamento, limites diários e mensais, verificação KYC e dicas para receber os seus ganhos mais rapidamente.';
$current_page = 'withdrawal';
$lang_prefix = '/pt';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Levantamentos &amp; Pagamentos';
$hero_description = 'Como levantar os seus ganhos, quais os métodos disponíveis, prazos de processamento, limites e o que esperar durante o processo de verificação.';
$hero_cta = 'Jogar Agora';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Visão Geral dos Levantamentos</h2>
      <p>Levantar os seus ganhos no <?php echo SITE_NAME; ?> é simples e sem comissões da nossa parte. Processamos todos os pedidos de levantamento em 24 a 72 horas, dependendo do método de pagamento. Os fundos são devolvidos ao mesmo método utilizado no depósito sempre que possível. É obrigatório concluir a verificação KYC antes do primeiro levantamento.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Levantamento Mínimo</h4>
          <p>10 &euro; em todos os métodos de pagamento. Valores abaixo deste limite não podem ser processados.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Prazo de Processamento</h4>
          <p>24-72 horas na maioria dos métodos. As transferências bancárias podem demorar 1 a 3 dias úteis.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Limites de Levantamento</h4>
          <p>500 &euro; por dia, 7.000 &euro; por mês. Os membros VIP podem ter acesso a limites mais elevados.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Payment Methods Table -->
  <section class="content-section content-section--alt" id="methods">
    <div class="container">
      <h2>Métodos de Pagamento</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>A tabela abaixo apresenta todas as opções de depósito e levantamento disponíveis no <?php echo SITE_NAME; ?>. Os levantamentos são processados para o mesmo método utilizado no depósito sempre que possível. Os jogadores portugueses podem utilizar MB Way, Multibanco, Visa, Mastercard, Skrill e criptomoedas. Todos os depósitos e levantamentos são gratuitos da nossa parte.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-payments-screen.png" alt="Métodos de depósito e levantamento do <?php echo SITE_NAME; ?> Casino incluindo MB Way, Multibanco, Visa, Mastercard, Skrill e criptomoedas" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div class="data-table-wrap">
        <table class="data-table">
          <thead>
            <tr>
              <th>Método</th>
              <th>Dep. Mínimo</th>
              <th>Dep. Máximo</th>
              <th>Lev. Mínimo</th>
              <th>Lev. Máximo</th>
              <th>Processamento</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>MB Way</td>
              <td>10 &euro;</td>
              <td>2.000 &euro;</td>
              <td>10 &euro;</td>
              <td>3.000 &euro;</td>
              <td>24-72 horas</td>
            </tr>
            <tr>
              <td>Multibanco</td>
              <td>10 &euro;</td>
              <td>2.000 &euro;</td>
              <td colspan="2">Apenas depósito</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Mastercard</td>
              <td>10 &euro;</td>
              <td>2.000 &euro;</td>
              <td>10 &euro;</td>
              <td>3.000 &euro;</td>
              <td>24-72 horas</td>
            </tr>
            <tr>
              <td>Visa</td>
              <td colspan="2">Apenas levantamento</td>
              <td>10 &euro;</td>
              <td>3.000 &euro;</td>
              <td>24-72 horas</td>
            </tr>
            <tr>
              <td>Transferência Bancária</td>
              <td colspan="2">Apenas levantamento</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>1-3 dias úteis</td>
            </tr>
            <tr>
              <td>Skrill</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 horas</td>
            </tr>
            <tr>
              <td>Bitcoin (BTC)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 horas</td>
            </tr>
            <tr>
              <td>Ethereum (ETH)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 horas</td>
            </tr>
            <tr>
              <td>Tether (USDT)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 horas</td>
            </tr>
            <tr>
              <td>Litecoin (LTC)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 horas</td>
            </tr>
            <tr>
              <td>Ripple (XRP)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 horas</td>
            </tr>
            <tr>
              <td>USD Coin (USDC)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 horas</td>
            </tr>
            <tr>
              <td>Bitcoin Cash (BCH)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 horas</td>
            </tr>
            <tr>
              <td>Dogecoin (DOGE)</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>10 &euro;</td>
              <td>5.000 &euro;</td>
              <td>24-72 horas</td>
            </tr>
          </tbody>
        </table>
      </div>

      <p style="margin-top: var(--space-4);">A disponibilidade dos métodos de pagamento pode variar consoante a região. As transações com criptomoedas requerem confirmações na blockchain após o processamento pelo casino.</p>
    </div>
  </section>

  <!-- Rollover Requirement -->
  <section class="content-section" id="rollover">
    <div class="container container--narrow">
      <h2>Requisito de Apostas sobre o Depósito</h2>
      <p>O <?php echo SITE_NAME; ?> aplica um requisito de apostas de 1x sobre todos os depósitos. Isto significa que tem de apostar o valor depositado pelo menos uma vez antes de solicitar um levantamento. Este requisito é independente de quaisquer condições associadas a bónus.</p>
      <p>Se solicitar um levantamento sem cumprir o requisito de 1x, será deduzida uma comissão:</p>
      <ul>
        <li><strong>10% de comissão</strong> sobre o valor do depósito nos levantamentos por carteira eletrónica e criptomoeda</li>
        <li><strong>15% de comissão</strong> sobre o valor do depósito nos levantamentos por cartão bancário e transferência bancária</li>
      </ul>
      <p>Para evitar esta dedução, basta jogar o valor do depósito uma vez antes de solicitar o pagamento. Uma ronda de apostas em qualquer valor é suficiente para cumprir o requisito.</p>
    </div>
  </section>

  <!-- How to Withdraw -->
  <section class="content-section content-section--alt" id="how-to">
    <div class="container">
      <h2>Como Efetuar um Levantamento</h2>
      <p>Siga estes passos para solicitar um levantamento da sua conta <?php echo SITE_NAME; ?>:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Conclua os requisitos de apostas ativos.</strong> Se ativou um bónus, o requisito de apostas completo deve estar cumprido antes de poder levantar. Certifique-se também de que cumpriu o requisito de 1x sobre o depósito.
          </div>
        </li>
        <li>
          <div>
            <strong>Aceda ao caixa.</strong> Navegue até à secção de levantamentos na sua conta. Encontrá-la-á no menu principal ou nas definições da conta.
          </div>
        </li>
        <li>
          <div>
            <strong>Selecione o método de pagamento e o valor.</strong> Escolha uma das opções disponíveis e introduza o valor que pretende levantar. O mínimo é 10 &euro; em todos os métodos. O limite diário é de 500 &euro; e o limite mensal é de 7.000 &euro;.
          </div>
        </li>
        <li>
          <div>
            <strong>Aguarde o processamento.</strong> O <?php echo SITE_NAME; ?> processa os levantamentos em 24 a 72 horas. As transferências bancárias podem demorar 1 a 3 dias úteis adicionais. Será contactado caso sejam necessários documentos adicionais para verificação.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- KYC Verification -->
  <section class="content-section" id="verification">
    <div class="container">
      <h2>Verificação de Identidade (KYC)</h2>
      <p>O <?php echo SITE_NAME; ?> exige verificação de identidade antes de aprovar pedidos de levantamento. Este procedimento é padrão e destina-se a prevenir fraudes e a cumprir as regulamentações anti-branqueamento de capitais. Os documentos são aprovados num prazo máximo de 30 dias, e o processo de verificação demora até 10 dias após a submissão.</p>

      <div class="two-col">
        <div>
          <h3>Documentos Necessários</h3>
          <ul>
            <li><strong>Prova de identidade</strong> - passaporte, carta de condução ou cartão de cidadão</li>
            <li><strong>Selfie com documento</strong> - fotografia sua a segurar o documento de identificação</li>
            <li><strong>Prova de morada</strong> - fatura de serviços ou extrato bancário com data dos últimos 3 meses</li>
            <li><strong>Origem dos fundos</strong> - documentação que comprove a proveniência dos seus fundos de jogo (requisito anti-branqueamento de capitais)</li>
          </ul>
          <p>Tem 30 dias para submeter os documentos solicitados. A sua conta pode estar restrita até a verificação estar concluída.</p>
        </div>
        <div>
          <h3>Dicas para uma Verificação Mais Rápida</h3>
          <ul>
            <li>Submeta os documentos assim que criar conta, sem esperar pelo primeiro levantamento</li>
            <li>Certifique-se de que os quatro cantos do documento são visíveis na fotografia</li>
            <li>Na selfie, garanta que tanto o seu rosto como o texto do documento são claramente legíveis</li>
            <li>Utilize uma fatura recente ou um extrato bancário como prova de morada</li>
            <li>Se os documentos forem recusados, verifique se as imagens não estão desfocadas e se os documentos não estão expirados</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Faster Payouts -->
  <section class="content-section content-section--alt" id="tips">
    <div class="container container--narrow">
      <h2>Dicas para Levantamentos Mais Rápidos</h2>

      <h3>1. Escolha carteiras eletrónicas ou criptomoedas</h3>
      <p>O Skrill e as criptomoedas como Bitcoin, Ethereum e Tether processam geralmente mais depressa. Se a rapidez é uma prioridade, deposite através de um destes métodos para que o levantamento possa ser devolvido pelo mesmo canal. O MB Way também é uma opção popular e conveniente para jogadores portugueses.</p>

      <h3>2. Verifique a sua conta atempadamente</h3>
      <p>Não espere pelo primeiro levantamento para submeter os documentos. Faça o envio do seu documento de identidade, selfie, prova de morada e origem dos fundos logo após o registo. Assim, quando quiser levantar, não haverá atrasos por verificação pendente.</p>

      <h3>3. Cumpra o requisito de apostas sobre o depósito</h3>
      <p>Certifique-se de que apostou o valor do depósito pelo menos uma vez antes de solicitar um levantamento. Não cumprir este requisito resultará numa comissão de 10% a 15% sobre o valor do depósito.</p>

      <h3>4. Utilize o mesmo método do depósito</h3>
      <p>O <?php echo SITE_NAME; ?> prefere devolver os fundos ao mesmo método utilizado no depósito. Usar um método diferente pode desencadear verificações adicionais e atrasar o processo.</p>
    </div>
  </section>

  <!-- Fees -->
  <section class="content-section" id="fees">
    <div class="container container--narrow">
      <h2>Comissões de Levantamento</h2>
      <p>O <?php echo SITE_NAME; ?> não cobra comissões em depósitos nem levantamentos. Contudo, o seu prestador de serviços de pagamento ou banco pode aplicar as suas próprias taxas de transação, encargos de conversão cambial ou custos intermediários. Consulte o seu prestador para obter informações sobre eventuais taxas de terceiros.</p>
      <p>Nota: caso levante sem cumprir o requisito de apostas de 1x sobre o depósito, será aplicada uma comissão de 10% (15% para cartão/transferência bancária) sobre o valor do depósito. Esta comissão não é uma taxa de levantamento, mas sim uma penalização por incumprimento do requisito.</p>
    </div>
  </section>

  <!-- Withdrawal FAQ -->
  <section class="content-section content-section--alt" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>Perguntas Frequentes sobre Levantamentos</h2>

      <details class="faq-item">
        <summary>Quanto tempo demora um levantamento no <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>A maioria dos levantamentos é processada em 24 a 72 horas. As carteiras eletrónicas e as criptomoedas tendem a ser mais rápidas. As transferências bancárias podem demorar mais 1 a 3 dias úteis do lado do prestador.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Qual é o levantamento mínimo no <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>O valor mínimo de levantamento é de 10 &euro; em todos os métodos de pagamento.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Quais são os limites de levantamento?</summary>
        <div class="faq-answer">
          <p>Os limites padrão são de 500 &euro; por dia e 7.000 &euro; por mês. Os limites por transação dependem do método: Visa e Mastercard têm um máximo de 3.000 &euro; por transação, enquanto o Skrill, as transferências bancárias e todas as criptomoedas permitem até 5.000 &euro;. Os jogadores VIP podem ter acesso a limites mais elevados.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Porque é que o meu levantamento foi recusado?</summary>
        <div class="faq-answer">
          <p>As razões mais comuns incluem: requisitos de apostas não cumpridos, requisito de 1x sobre o depósito não satisfeito, conta não verificada, limites diários ou mensais ultrapassados, ou pedido de levantamento para um método diferente do utilizado no depósito. Contacte o apoio para informações específicas sobre o seu caso.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Existem comissões de levantamento?</summary>
        <div class="faq-answer">
          <p>O <?php echo SITE_NAME; ?> não cobra comissões de levantamento. O seu prestador de pagamentos pode aplicar as suas próprias taxas. Se levantar sem cumprir o requisito de apostas de 1x sobre o depósito, é aplicada uma comissão de 10% (15% para cartão/transferência bancária) sobre o valor do depósito.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso cancelar um levantamento pendente?</summary>
        <div class="faq-answer">
          <p>Dependendo da fase de processamento, pode ser possível cancelar um pedido de levantamento pendente. Contacte o apoio ao cliente via chat ao vivo para obter assistência.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
