<?php
/**
 * Bonuses Page – VipLuck Casino (European Portuguese / PT-PT)
 */
$page_title = SITE_NAME . ' Bónus - Bónus de Boas-Vindas, Rodadas Grátis, Cashback & Recompensas VIP';
$page_description = 'Todas as promoções do ' . SITE_NAME . ' Casino num só lugar. Pacote de boas-vindas até €2.000 + 300 Rodadas Grátis em 3 depósitos, bónus desportivo de boas-vindas até €500, recargas semanais, cashback, recompensas VIP e muito mais.';
$current_page = 'bonuses';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Casino Bónus';
$hero_description = 'Todas as promoções ativas, ofertas de boas-vindas e recompensas de fidelidade reunidas. Lê os termos e condições antes de ativares qualquer oferta.';
$hero_cta = 'Obter bónus';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Welcome Casino Package -->
  <section class="content-section" id="welcome">
    <div class="container">
      <h2>Bónus de Boas-Vindas para Novos Jogadores</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <p style="margin-top:0">Os novos jogadores no <?php echo SITE_NAME; ?> têm a escolha entre um pacote de boas-vindas de casino e um pacote desportivo de boas-vindas. A oferta de casino estende-se pelos primeiros três depósitos com um valor total de até &euro;2.000 + 300 Rodadas Grátis. O pacote desportivo oferece até &euro;500 em três depósitos. Cada opção fica disponível a partir do teu primeiro depósito qualificante e não pode ser combinada com outras promoções.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-promotions.png" alt="<?php echo SITE_NAME; ?> Casino promotions page showing welcome package and VIP cashback offers" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>

      <!-- Casino Welcome – Deposit 1 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">1.º Depósito: 100% até &euro;500 + 100 Rodadas Grátis</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Deposita pelo menos &euro;20 e recebe um bónus de 100% até &euro;500. Adicionalmente, 100 Rodadas Grátis são creditadas em pacotes de 20 por dia durante 5 dias consecutivos. O primeiro pacote fica disponível imediatamente após o depósito. Cada pacote deve ser utilizado em 24 horas, caso contrário caduca. Um depósito de &euro;10 ou mais atribui ainda 1 crédito Bonus Crab para a máquina de garras, onde podes ganhar moedas, rodadas grátis, créditos de bónus ou prémios em dinheiro.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Depósito mínimo</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Requisito de apostas</div>
            <div class="bonus-detail__value">35x (bónus + depósito)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Rodadas Grátis - requisito</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validade</div>
            <div class="bonus-detail__value">10 dias</div>
          </div>
          <div>
            <div class="bonus-detail__label">Aposta máxima</div>
            <div class="bonus-detail__value">&euro;5</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome – Deposit 2 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2.º Depósito: 75% até &euro;750 + 75 Rodadas Grátis</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>O teu segundo depósito de &euro;20 ou mais qualifica para um bónus de 75% até &euro;750, mais 75 Rodadas Grátis num slot selecionado. As rodadas são creditadas em pacotes de 25 por dia durante 3 dias. Aplicam-se os mesmos requisitos de apostas e prazos de validade do primeiro bónus de depósito.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Depósito mínimo</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Requisito de apostas</div>
            <div class="bonus-detail__value">35x (bónus + depósito)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Rodadas Grátis - requisito</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validade</div>
            <div class="bonus-detail__value">10 dias</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome – Deposit 3 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">3.º Depósito: 50% até &euro;750 + 125 Rodadas Grátis</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>O terceiro depósito de &euro;20 ou mais dá direito a um bónus de 50% até &euro;750, mais 125 Rodadas Grátis em pacotes de 25 por dia durante 5 dias. Com este terceiro depósito, o pacote total de boas-vindas chega a €2.000 em créditos de bónus e 300 Rodadas Grátis ao longo dos primeiros três depósitos.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Depósito mínimo</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Requisito de apostas</div>
            <div class="bonus-detail__value">35x (bónus + depósito)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Rodadas Grátis - requisito</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validade</div>
            <div class="bonus-detail__value">10 dias</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome – Deposit 1 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">1.º Depósito Desportivo: 100% até &euro;200</div>
          <span class="bonus-card__tag">Desporto</span>
        </div>
        <p>Os apostadores desportivos recebem um bónus de 100% sobre o primeiro depósito até &euro;200. O valor máximo do bónus varia consoante a região: jogadores da Finlândia, Alemanha, Noruega, Suíça e Áustria podem receber até &euro;200. Jogadores italianos recebem até &euro;150. Jogadores do Cazaquistão, Uzbequistão, Quirguizistão, Tajiquistão, Geórgia e Azerbaijão recebem até &euro;50. Para ativar o bónus, o valor total do depósito deve ser apostado em desporto com quota mínima de 1,50.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Depósito mínimo</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Requisito de apostas</div>
            <div class="bonus-detail__value">5x ou 6x (conforme o país)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Quota mínima</div>
            <div class="bonus-detail__value">2,0 apostas simples / 1,5 múltiplas</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validade</div>
            <div class="bonus-detail__value">30 dias</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome – Deposit 2 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2.º Depósito Desportivo: 75% até &euro;150</div>
          <span class="bonus-card__tag">Desporto</span>
        </div>
        <p>O segundo depósito desportivo de &euro;20 ou mais qualifica para um bónus de 75% até &euro;150. Aplicam-se as mesmas condições de ativação e requisitos de apostas do primeiro bónus desportivo. O valor do depósito deve ser apostado integralmente em desporto com quota mínima de 1,50 antes de o bónus ser creditado.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Depósito mínimo</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Requisito de apostas</div>
            <div class="bonus-detail__value">5x ou 6x (conforme o país)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validade</div>
            <div class="bonus-detail__value">30 dias</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome – Deposit 3 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">3.º Depósito Desportivo: 50% até &euro;150</div>
          <span class="bonus-card__tag">Desporto</span>
        </div>
        <p>O terceiro depósito desportivo de &euro;20 ou mais qualifica para um bónus de 50% até &euro;150. Com este terceiro depósito, o pacote desportivo de boas-vindas fica completo com um valor total de até &euro;500 em três depósitos. Todos os requisitos de apostas devem ser cumpridos no prazo de 30 dias após cada depósito.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Depósito mínimo</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Requisito de apostas</div>
            <div class="bonus-detail__value">5x ou 6x (conforme o país)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validade</div>
            <div class="bonus-detail__value">30 dias</div>
          </div>
        </div>
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <div class="highlight-box" style="margin:0">
            <h4><?php echo SITE_NAME; ?> Código Promocional</h4>
            <p>Se tiveres um código promocional, podes introduzi-lo durante o registo. O campo para o código aparece no formulário de inscrição, logo após selecionares o bónus de boas-vindas da tua preferência. Os códigos promocionais podem desbloquear ofertas especiais ou condições de bónus personalizadas - vale a pena verificar antes de fazeres o depósito.</p>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-account.png" alt="<?php echo SITE_NAME; ?> Casino bonus selection screen showing casino and sports welcome options" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>

      <div class="highlight-box" style="margin-top: var(--space-4);">
        <h4>Ganho Máximo</h4>
        <p>Os jogadores residentes no Brasil, Chile, Japão, Peru e Tailândia estão sujeitos a um limite máximo de ganhos de 10x o valor do bónus em todas as apostas financiadas por bónus. Isto aplica-se a bónus de boas-vindas, recargas e quaisquer outras ofertas promocionais. Os ganhos que excedam este limite serão ajustados em conformidade.</p>
      </div>
    </div>
  </section>

  <!-- Reload & Weekly -->
  <section class="content-section content-section--alt" id="reload">
    <div class="container">
      <h2>Recargas Semanais</h2>
      <p><?php echo SITE_NAME; ?> mantém as promoções ativas muito além da fase de boas-vindas. Estas ofertas recorrentes são reposta semanalmente e dão aos jogadores ativos algo novo a cada semana.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Boost Semanal: 50 Rodadas Grátis</div>
          <span class="bonus-card__tag">Segunda - Quinta</span>
        </div>
        <p>Deposita &euro;20 ou mais entre segunda e quinta-feira e recebe 50 Rodadas Grátis num slot selecionado. Tens de te inscrever antes de cada depósito semanal. As rodadas devem ser usadas no prazo de 7 dias. Os ganhos estão sujeitos a um requisito de apostas de 40x com prazo de 10 dias. Aposta máxima durante a atividade de bónus: &euro;5.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Recarga de Fim de Semana: 50% até &euro;500 + 75 Rodadas Grátis</div>
          <span class="bonus-card__tag">Sexta - Domingo</span>
        </div>
        <p>Deposita pelo menos &euro;20 ao fim de semana e recebe um bónus de 50% até &euro;500. Com um depósito de &euro;50 ou mais, recebe ainda 75 Rodadas Grátis num slot selecionado. É necessária inscrição antes do depósito. O requisito de apostas é de 35x sobre o depósito e o bónus, e 40x sobre os ganhos das rodadas grátis. Tens 10 dias para cumprir os requisitos.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Especial de Domingo: 30% até &euro;300 + 50 Rodadas Grátis</div>
          <span class="bonus-card__tag">Apenas Domingo</span>
        </div>
        <p>Uma oferta dominical adicional para jogadores que querem começar a nova semana com um impulso extra. Deposita &euro;20 ou mais e recebe um bónus de 30% até &euro;300 mais 50 Rodadas Grátis. Inscrição obrigatória. Requisito de apostas: 35x sobre o depósito e o bónus, 40x sobre os ganhos das rodadas grátis, com prazo de 10 dias.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Recarga Desportiva Semanal: 55% até &euro;300</div>
          <span class="bonus-card__tag">Desporto</span>
        </div>
        <p>Uma vez por semana, o teu depósito mais elevado qualifica para um bónus desportivo de 55% no valor de até &euro;300. O depósito deve ser apostado uma vez em desporto com quota mínima de 1,50 antes de o bónus ser creditado. Depois disso, podes solicitá-lo por live chat ou e-mail. Os requisitos de apostas devem ser cumpridos no prazo de 30 dias. O levantamento máximo deste bónus é de 10x o seu valor.</p>
      </div>
    </div>
  </section>

  <!-- Cashback -->
  <section class="content-section" id="cashback">
    <div class="container">
      <h2>Programas de Cashback</h2>
      <p><?php echo SITE_NAME; ?> oferece três programas de cashback separados: cashback diário para jogos de casino, cashback semanal para casino ao vivo e cashback semanal para apostas desportivas. Cada programa tem as suas próprias condições e processo de ativação.</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Cashback Diário de Casino</h4>
          <p>Disponível a partir do nível VIP 3. VIP 3 recebe 5% diários até &euro;200. VIP 4 recebe 10% até &euro;300. VIP 5 recebe 15% até &euro;500. O cashback é creditado automaticamente às 04:00 UTC e tem um requisito de apostas de 1x. A inscrição deve ser renovada a cada 4 semanas.</p>
        </div>
        <div class="info-card">
          <h4>Cashback de Casino ao Vivo: 25% até &euro;350</h4>
          <p>Cashback semanal sobre perdas líquidas em jogos de casino ao vivo. A perda mínima qualificante é de &euro;5. Contacta o suporte na segunda-feira a partir das 06:00 UTC (antes das 23:59 UTC) para ativar. Após o crédito, aplica-se um requisito de apostas de 1x antes do levantamento.</p>
        </div>
        <div class="info-card">
          <h4>Cashback Desportivo: 15% até &euro;500</h4>
          <p>Cobre perdas líquidas em apostas desportivas de segunda a domingo. É necessária uma perda mínima de &euro;20. Contacta o suporte na segunda-feira para ativar. O cashback tem um requisito de apostas de 3x e só pode ser usado na área de apostas desportivas.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sports Promos -->
  <section class="content-section content-section--alt" id="sports-promos">
    <div class="container">
      <h2>Promoções Desportivas</h2>
      <p>Para além do bónus de boas-vindas e do cashback, a área de apostas desportivas oferece vários extras que acrescentam valor às tuas apostas.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Multi-Boost: até 100%</div>
        </div>
        <p>Faz uma aposta múltipla com 3 ou mais seleções, cada uma com quota de pelo menos 1,40, e os teus ganhos recebem um bónus. O multiplicador começa em 3% para 3 seleções e sobe até 100% para 21 ou mais. Apenas apostas com dinheiro real contam. Solicitar um levantamento antes de o boost ser creditado torna-o inválido.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Vantagem de 2 Golos: Liquidação Antecipada</div>
        </div>
        <p>Se a tua equipa ficar com 2 golos de vantagem, a tua aposta pré-jogo 1X2 é liquidada como vitória - sem esperar pelo apito final. Esta oferta aplica-se apenas a apostas em vitória da equipa da casa ou visitante. Apostas ao vivo e apostas no empate estão excluídas, e um cashout antecipado manual anula a liquidação antecipada.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Boost Desportivo: 20% até &euro;100</div>
        </div>
        <p>Um boost desportivo semanal para todos os jogadores ativos. Deposita &euro;20 ou mais e recebe um bónus de 20% até &euro;100 para apostas desportivas. O bónus deve ser apostado 5x com quota mínima de 1,50 no prazo de 14 dias. A inscrição é feita através do perfil da conta.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Vantagem de Sexta: Aposta Grátis até &euro;50</div>
        </div>
        <p>Todas as sextas-feiras: faz uma aposta desportiva qualificante de &euro;20 ou mais com quota mínima de 1,80. Se a aposta perder, recebes uma aposta grátis no valor de 50% da tua aposta, até &euro;50. A aposta grátis deve ser usada no prazo de 3 dias e tem um requisito de apostas de 3x com quota mínima de 1,50.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Recarga Desportiva de Fim de Semana: 40% até &euro;200</div>
        </div>
        <p>Deposita &euro;20 ou mais ao sábado ou domingo e recebe um bónus desportivo de 40% até &euro;200. O depósito deve ser apostado uma vez em desporto com quota mínima de 1,50 antes de o bónus ser ativado. Os requisitos de apostas devem ser cumpridos no prazo de 30 dias. O levantamento máximo deste bónus é de 10x o seu valor.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Odds Melhoradas</div>
        </div>
        <p>Mercados 1X2 pré-jogo selecionados oferecem ocasionalmente odds melhoradas. Procura a indicação "Enhanced Prices" na descrição do mercado. Os ganhos de apostas com odds melhoradas são pagos como dinheiro real, sem requisito de apostas adicional.</p>
      </div>
    </div>
  </section>

  <!-- Free Spins -->
  <section class="content-section" id="free-spins">
    <div class="container">
      <h2>Rodadas Grátis</h2>
      <p>As Rodadas Grátis no <?php echo SITE_NAME; ?> estão integradas nos pacotes de bónus - não são oferecidas separadamente como promoção autónoma. Aqui fica um resumo de como funcionam em todas as ofertas ativas:</p>

      <table class="quick-table">
        <tr><th>Promoção</th><th>Rodadas Grátis</th><th>Requisito de Apostas</th><th>Validade</th></tr>
        <tr><td>1.º Depósito - Boas-Vindas</td><td>100 (20/dia durante 5 dias)</td><td>40x ganhos</td><td>10 dias</td></tr>
        <tr><td>2.º Depósito - Boas-Vindas</td><td>75 (25/dia durante 3 dias)</td><td>40x ganhos</td><td>10 dias</td></tr>
        <tr><td>3.º Depósito - Boas-Vindas</td><td>125 (25/dia durante 5 dias)</td><td>40x ganhos</td><td>10 dias</td></tr>
        <tr><td>Boost Semanal (Seg-Qui)</td><td>50</td><td>40x ganhos</td><td>7 dias</td></tr>
        <tr><td>Recarga de Fim de Semana</td><td>75 (depósito mínimo &euro;50)</td><td>40x ganhos</td><td>10 dias</td></tr>
        <tr><td>Especial de Domingo</td><td>50</td><td>40x ganhos</td><td>10 dias</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">As rodadas grátis são sempre atribuídas para um slot específico determinado pelo casino no momento da promoção. O slot elegível é indicado na página de promoções ou comunicado diretamente. Cada rodada é creditada com um valor predefinido, geralmente &euro;0,10 por rodada. Os ganhos das rodadas grátis estão sujeitos ao requisito de apostas de 40x e devem ser cumpridos no prazo definido de cada oferta.</p>
    </div>
  </section>

  <!-- VIP, Shop, Crab -->
  <section class="content-section content-section--alt" id="vip">
    <div class="container">
      <h2>Programa VIP &amp; Extras</h2>
      <div class="two-col">
        <div>
          <h3>Programa VIP</h3>
          <p><?php echo SITE_NAME; ?> oferece um programa de fidelidade de cinco níveis que progrides através da tua atividade de apostas. Os níveis são Bronze, Prata, Ouro, Platina e Diamante. A cada nível, desbloqueias benefícios como gestor de conta pessoal, limites de levantamento mais elevados, ofertas de bónus exclusivas e melhores percentagens de cashback. Os membros Diamante têm acesso às melhores ofertas semanais de cashback, levantamentos prioritários e convites para eventos exclusivos.</p>

          <h4>Resumo dos Níveis VIP</h4>
          <table class="quick-table">
            <tr><th>Nível</th><th>Benefícios</th></tr>
            <tr><td>Bronze</td><td>Cashback padrão, acesso a promoções regulares, recompensas em moedas por atividade</td></tr>
            <tr><td>Prata</td><td>Cashback melhorado (3%), levantamentos mais rápidos, bónus de aniversário</td></tr>
            <tr><td>Ouro</td><td>5% cashback até &euro;200/dia, gestor de conta pessoal, limites de levantamento mais elevados</td></tr>
            <tr><td>Platina</td><td>10% cashback até &euro;300/dia, promoções exclusivas, suporte prioritário</td></tr>
            <tr><td>Diamante</td><td>15% cashback até &euro;500/dia, limites máximos, eventos VIP, ofertas personalizadas</td></tr>
          </table>

          <h3>Bonus Crab</h3>
          <p>Cada depósito de &euro;10 ou mais atribui 1 crédito Bonus Crab. Usa-o para "apanhar" um prémio aleatório na máquina de garras - os prémios possíveis incluem créditos de bónus, rodadas grátis ou moedas. Um pequeno extra diário que traz variedade à tua experiência de jogo.</p>
        </div>
        <div>
          <h3>Moedas &amp; Loja</h3>
          <p>As moedas são ganhas através da atividade de jogo, desafios e promoções. Podes trocá-las na Loja do <?php echo SITE_NAME; ?> por recompensas - desde rodadas grátis em slots selecionados (por exemplo, 5 rodadas em Sweet Bonanza por 30 moedas) a créditos de bónus (&euro;5 por 50 moedas, até &euro;250 por 1.200 moedas). Assim transformas a tua fidelidade em recompensas concretas - ao teu ritmo.</p>

          <h3>Desafios</h3>
          <p>Os desafios semanais recompensam-te por atingires objetivos simples. Os desafios de casino podem exigir apostas de &euro;0,50 em slots específicos, enquanto os desafios desportivos podem exigir apostas de &euro;15 em jogos com quota mínima de 2,0. Cada desafio concluído atribui moedas, e completar 20 desafios numa semana desbloqueia um bónus de 50 moedas.</p>

          <h3>Especial de Aniversário</h3>
          <p>Na data de aniversário do registo da tua conta, o <?php echo SITE_NAME; ?> oferece um pacote de bónus especial. A oferta é determinada pelo teu nível VIP e atividade na conta, e é creditada automaticamente na data do aniversário. Verifica as tuas notificações ou contacta o suporte caso não recebas o teu bónus de aniversário.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- No-Deposit Info -->
  <section class="content-section" id="no-deposit">
    <div class="container container--narrow">
      <h2><?php echo SITE_NAME; ?> Bónus sem Depósito</h2>
      <p>De momento, <?php echo SITE_NAME; ?> não oferece um bónus sem depósito clássico. No entanto, a funcionalidade Bonus Crab recompensa cada depósito de &euro;10 ou mais com uma tentativa gratuita na máquina de garras, onde podes ganhar rodadas grátis, créditos de bónus, moedas ou prémios em dinheiro - sem requisito de apostas adicional sobre o prémio original. Esta é atualmente a alternativa mais próxima de um bónus sem depósito na plataforma.</p>
      <p>Consulta regularmente a área de promoções, pois o casino atualiza frequentemente as suas ofertas e pode vir a introduzir ofertas sem depósito ou códigos de bónus gratuitos no futuro.</p>
    </div>
  </section>

  <!-- Wagering Requirements -->
  <section class="content-section content-section--alt" id="wagering">
    <div class="container">
      <h2>Requisitos de Apostas</h2>
      <p>Antes de levantares ganhos provenientes de bónus, tens de cumprir os requisitos de apostas aplicáveis. Os termos variam consoante a oferta, mas estes são os princípios gerais que se aplicam na maioria das promoções do <?php echo SITE_NAME; ?>:</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Bónus de Casino</h4>
          <p>Os bónus de boas-vindas e as recargas de casino têm tipicamente um requisito de 35x sobre o valor do depósito mais o bónus. Os ganhos das rodadas grátis têm um requisito separado de 40x. Tens 10 dias a partir da ativação para cumprir os requisitos.</p>
        </div>
        <div class="info-card">
          <h4>Bónus Desportivos</h4>
          <p>Os bónus desportivos exigem geralmente 5x ou 6x (dependendo do país) em apostas desportivas com quotas mínimas. Os bónus de recarga desportiva têm normalmente requisitos de 3x a 5x. Tens 30 dias para cumprir os requisitos dos bónus desportivos.</p>
        </div>
        <div class="info-card">
          <h4>Cashback</h4>
          <p>O cashback de casino ao vivo tem um requisito de apostas de 1x, o que significa que apenas tens de apostar o valor recebido uma vez antes de poderes levantar. O cashback desportivo tem um requisito de 3x em apostas desportivas.</p>
        </div>
      </div>

      <h3>Contribuição por Tipo de Jogo</h3>
      <p>Nem todos os jogos contribuem da mesma forma para os requisitos de apostas. Os slots contribuem geralmente a 100%, enquanto os jogos de mesa e o casino ao vivo têm taxas de contribuição mais baixas. Consulta os termos e condições completos de cada bónus para a tabela de contribuição exata.</p>

      <div class="highlight-box">
        <h4>Regras Gerais de Bónus</h4>
        <ul class="check-list">
          <li>A aposta máxima com dinheiro de bónus ativo é de &euro;5 por ronda/aposta</li>
          <li>Não podes solicitar um levantamento enquanto tens um bónus ativo - isso anula o bónus e todos os ganhos associados</li>
          <li>Os bónus de boas-vindas e as recargas não podem ser combinados</li>
          <li>Os bónus de boas-vindas não estão disponíveis para jogadores que utilizam Skrill ou Neteller para o depósito qualificante</li>
          <li>Apenas os depósitos de dinheiro real contam para ativar as promoções - os depósitos com bónus não são elegíveis</li>
          <li>O <?php echo SITE_NAME; ?> reserva-se o direito de alterar, suspender ou cancelar promoções com aviso prévio</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Bonus FAQ -->
  <section class="content-section" id="bonus-faq">
    <div class="container container--narrow">
      <h2>Perguntas Frequentes sobre Bónus</h2>

      <details class="faq-item">
        <summary>Posso utilizar um código promocional no <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Sim. Durante o registo tens a possibilidade de introduzir um código promocional depois de selecionares o teu bónus de boas-vindas preferido. Se tiveres um código válido, introduz-o nesse momento para ativar os benefícios associados.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso combinar vários bónus ao mesmo tempo?</summary>
        <div class="faq-answer">
          <p>Não. Os bónus de boas-vindas e as promoções de recarga não podem ser acumulados. Tens de concluir ou cancelar cada bónus ativo antes de ativar um novo. Alguns bónus podem ser cancelados através da área do perfil ou contactando o suporte.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>O que acontece se solicitar um levantamento antes de cumprir os requisitos de apostas?</summary>
        <div class="faq-answer">
          <p>Solicitar um levantamento antes de cumprir os requisitos de apostas anula o bónus e todos os ganhos associados. Certifica-te de que concluíste as apostas na totalidade antes de solicitares um levantamento.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Todos os jogos contribuem da mesma forma para os requisitos de apostas?</summary>
        <div class="faq-answer">
          <p>Não. Os diferentes tipos de jogos têm taxas de contribuição distintas. Os slots contribuem geralmente a 100%, enquanto os jogos de mesa e os títulos de casino ao vivo têm taxas de contribuição mais baixas. A tabela de contribuição exata está disponível nos termos e condições do bónus.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Os depósitos com Skrill e Neteller são elegíveis para bónus?</summary>
        <div class="faq-answer">
          <p>Na maioria dos casos, os depósitos efetuados com Skrill ou Neteller não são elegíveis para bónus de boas-vindas. Consulta os termos específicos de cada promoção para eventuais exceções.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>O limite de ganho máximo aplica-se a mim?</summary>
        <div class="faq-answer">
          <p>O limite máximo de ganhos de 10x aplica-se a residentes do Brasil, Chile, Japão, Peru e Tailândia. Se resides num desses países, os teus ganhos provenientes de apostas com bónus estão limitados a 10 vezes o valor do bónus. Os jogadores de outras regiões não estão sujeitos a esta regra.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Como funciona o bónus de aniversário?</summary>
        <div class="faq-answer">
          <p>Todos os anos, na data de aniversário do registo, o <?php echo SITE_NAME; ?> credita um bónus especial na tua conta. O tipo e o valor da oferta dependem do teu nível VIP e da atividade global na conta. O bónus é creditado automaticamente - verifica as tuas notificações ou contacta o suporte caso não o recebas.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Como posso acompanhar o progresso dos meus requisitos de apostas?</summary>
        <div class="faq-answer">
          <p>Podes acompanhar o progresso das apostas diretamente na tua conta, na secção de bónus ou promoções. O progresso é atualizado em tempo real à medida que jogas. Se tiveres dúvidas sobre o estado do teu bónus, a equipa de suporte está disponível 24/7 por live chat, e-mail para <a href="mailto:support@vipluck.com">support@vipluck.com</a> ou Telegram.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Há limite de tempo para utilizar as rodadas grátis?</summary>
        <div class="faq-answer">
          <p>Sim. As rodadas grátis são distribuídas em pacotes diários e cada pacote deve ser utilizado no prazo de 24 horas após o crédito, caso contrário caducam. Os ganhos das rodadas grátis ficam depois disponíveis como bónus sujeito ao requisito de apostas de 40x, com um prazo total de 10 dias a partir da data de ativação do bónus principal.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
