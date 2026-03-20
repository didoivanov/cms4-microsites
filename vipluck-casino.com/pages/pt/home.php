<?php
/**
 * Homepage – Portuguese (European Portuguese / PT-PT)
 */
$page_title = SITE_NAME . ' Casino - Casino Online, Apostas Desportivas & 8.000+ Jogos';
$page_description = SITE_NAME . ' Casino tem 8.000+ jogos de 103+ fornecedores, mesas com dealer ao vivo, apostas desportivas em 30+ modalidades e um bónus de boas-vindas até 2.000 EUR mais 300 Rodadas Grátis em três depósitos. Regista-te e joga já.';
$current_page = 'home';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__badge">Aberto agora - jogadores de todo o mundo bem-vindos</div>
    <h1>
      <span class="brand-name"><?php echo SITE_NAME; ?></span><br>
      <span class="brand-type">Casino</span>
    </h1>
    <p class="hero__subtitle">Mais de 8.000 jogos de 103+ fornecedores, apostas desportivas completas em 30+ modalidades, mesas com dealer ao vivo e um pacote de boas-vindas escalonado pelas tuas primeiras três entradas.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Pacote de Boas-Vindas</div>
      <div class="hero__bonus-value"><?php echo WELCOME_BONUS; ?></div>
      <div class="hero__bonus-extra">Bónus Desportivo: 100% até &euro;500 &middot; Depósito mínimo &euro;20</div>
    </div>
    <div class="hero__ctas">
      <a href="/play" class="btn btn--primary btn--lg" rel="nofollow"><?php echo __('cta_play', 'Jogar agora'); ?></a>
      <a href="/pt/bonuses" class="btn btn--outline btn--lg">Ver bónus</a>
    </div>
  </div>
</section>

<!-- STATS BAR -->
<section class="stats-bar">
  <div class="container">
    <div class="stats-bar__grid">
<?php foreach ($STATS as $stat): ?>
      <div class="stat">
        <div class="stat__value"><?php echo $stat['value']; ?></div>
        <div class="stat__label"><?php echo $stat['label']; ?></div>
      </div>
<?php endforeach; ?>
    </div>
  </div>
</section>

<!-- MAIN CONTENT -->
<main>
  <!-- About -->
  <section class="content-section" id="about">
    <div class="container">
      <h2>Bem-vindo ao <?php echo SITE_NAME; ?> Casino</h2>
      <p><?php echo SITE_NAME; ?> é um casino online e operador de apostas desportivas lançado em 2025 sob a licença de Curaçau OGL/2024/129/0131, operado pela 130 group N.V. A plataforma reúne mais de 8.000 jogos de 103+ fornecedores - slots, mesas com dealer ao vivo, jogos de mesa, títulos de ganho instantâneo e apostas desportivas completas com mercados pré-jogo e ao vivo em 30+ modalidades. Os novos jogadores recebem um pacote de boas-vindas em três depósitos no valor de até €2.000 mais 300 Rodadas Grátis no casino, ou até €500 em três depósitos desportivos.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Fundado</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Licença</th><td>Curaçau OGL/2024/129/0131</td></tr>
        <tr><th>Jogos</th><td>8.000+ (slots, jogos de mesa, casino ao vivo, jogos instantâneos)</td></tr>
        <tr><th>Fornecedores</th><td>103+ (Play'n GO, Playtech, Pragmatic Play, BGaming, Hacksaw Gaming e muitos mais)</td></tr>
        <tr><th>Desporto</th><td>30+ modalidades, eSports, desportos virtuais</td></tr>
        <tr><th>Bónus de Boas-Vindas</th><td><?php echo WELCOME_BONUS_TEXT; ?></td></tr>
        <tr><th>Depósito mínimo</th><td>€10 (€20 para a maioria dos bónus)</td></tr>
        <tr><th>Moedas</th><td>EUR, CHF, USD, CAD, AUD, NZD, PLN, BRL, NOK, ZAR, CZK, HUF, CLP</td></tr>
        <tr><th>Suporte</th><td>Live chat 24/7, e-mail e Telegram</td></tr>
        <tr><th>Mobile</th><td>Totalmente responsivo, sem necessidade de app</td></tr>
      </table>

      <h3>Por que os jogadores escolhem o <?php echo SITE_NAME; ?></h3>
      <ul class="check-list">
        <li>Mais de 8.000 jogos de 103+ fornecedores licenciados</li>
        <li>Pacote de boas-vindas em três depósitos até €2.000 + 300 Rodadas Grátis</li>
        <li>Apostas desportivas completas com mercados pré-jogo e ao vivo em 30+ modalidades</li>
        <li>Bónus desportivo de boas-vindas até €500 em três depósitos</li>
        <li>Recargas semanais, programas de cashback e torneios</li>
        <li>Programa VIP de 5 níveis com gestor de conta pessoal e limites mais elevados</li>
        <li>20+ métodos de pagamento incluindo Visa, Mastercard, Skrill, cripto e carteiras eletrónicas</li>
        <li>Suporte 24/7 por live chat, e-mail e Telegram</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Jogos de Casino</h4>
          <p>Milhares de slots, variantes de blackjack e roleta, poker, bacará, game shows, crash games e mesas com dealer ao vivo de estúdios como Play'n GO, Pragmatic Play e Hacksaw Gaming.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Apostas Desportivas</h4>
          <p>Apostas pré-jogo e ao vivo nas grandes ligas como UEFA Champions League, NBA, NHL e Grand Slams. eSports com Dota 2, CS2 e League of Legends. Desportos virtuais disponíveis 24 horas por dia.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127873;</div>
          <h4>Promoções</h4>
          <p>Pacotes de boas-vindas em três depósitos para casino e desporto, recargas semanais, cashback desportivo de 15%, torneios e um programa VIP de 5 níveis com recompensas exclusivas.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Social Proof / Recent Winners -->
  <section class="content-section winners-section" id="winners">
    <div class="container">
      <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--space-4);margin-bottom:var(--space-2)">
        <h2 style="margin-bottom:0">Vencedores Recentes</h2>
        <span class="live-dot">Live</span>
      </div>
      <div class="jackpot-label">Pool de Jackpot Atual</div>
      <div class="jackpot-amount" id="jackpotCounter">&euro;2,847,391</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Jogos Populares no <?php echo SITE_NAME; ?></h2>
      <p>Aqui encontras alguns dos títulos mais jogados no casino. Desde slots de alta volatilidade a jogos de mesa clássicos e salas com dealer ao vivo - há algo para todos os tipos de jogadores.</p>

      <div class="game-tabs">
        <button class="game-tab active">Todos os Jogos</button>
        <button class="game-tab">Slots</button>
        <button class="game-tab">Casino ao Vivo</button>
        <button class="game-tab">Jogos de Mesa</button>
        <button class="game-tab">Game Shows</button>
        <button class="game-tab">Crash Games</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Principais Fornecedores de Jogos</h3>
          <p>O catálogo é alimentado por uma vasta seleção de estúdios - desde líderes de mercado a desenvolvedores independentes de destaque:</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">103+ no total</span>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-games-screen.png" alt="<?php echo SITE_NAME; ?> Casino game lobby showing top slots from providers like Novomatic, Play'n GO and Hacksaw Gaming" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>
    </div>
  </section>

  <!-- Sportsbook -->
  <section class="content-section" id="sports">
    <div class="container">
      <h2>Apostas Desportivas</h2>
      <div class="two-col" style="align-items:flex-start;gap:var(--space-8)">
        <div>
          <p>A área de apostas desportivas do <?php echo SITE_NAME; ?> cobre mercados pré-jogo e ao vivo em grandes e pequenas competições. Os adeptos de futebol podem apostar em tudo - desde a UEFA Champions League às ligas secundárias. Basquetebol, ténis, hóquei no gelo e dezenas de outras modalidades completam a oferta.</p>
          <p>Os desportos virtuais como futebol, basquetebol e corridas de galgos estão disponíveis 24 horas por dia. As apostas em eSports abrangem Dota 2, Counter-Strike 2, League of Legends, Call of Duty e outros títulos competitivos.</p>

          <h3>Modalidades Disponíveis</h3>
          <ul class="check-list">
            <li>Futebol (UEFA Champions League, La Liga, Premier League, Bundesliga, Serie A)</li>
            <li>Basquetebol (NBA, EuroLiga, ligas nacionais)</li>
            <li>Ténis (Grand Slam, ATP, WTA)</li>
            <li>Hóquei no gelo (NHL, KHL, SHL)</li>
            <li>eSports (Dota 2, CS2, League of Legends, Call of Duty)</li>
            <li>Desportos virtuais, corridas de cavalos e 25+ modalidades adicionais</li>
          </ul>
        </div>
        <div>
          <div style="text-align:center;margin-bottom:var(--space-6)">
            <img src="/assets/img/vipluck-sports.png" alt="<?php echo SITE_NAME; ?> sportsbook showing live Champions League odds and sports betting interface" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
          </div>
          <div class="highlight-box">
            <h4>Bónus de Boas-Vindas Desportivo</h4>
            <p>Os novos jogadores podem receber até €500 em bónus desportivos nos primeiros três depósitos: 100% até €200 no primeiro, 100% até €150 no segundo e 100% até €150 no terceiro. Depósito mínimo de €20. Requisito de apostas: 6x com quota mínima de 1,60.</p>
          </div>
          <table class="quick-table" style="margin-top: var(--space-6);">
            <tr><th>Tipos de Aposta</th><td>Pré-jogo, ao vivo, aposta a longo prazo, múltiplas</td></tr>
            <tr><th>Modalidades</th><td>30+ incluindo eSports e desportos virtuais</td></tr>
            <tr><th>Funcionalidades</th><td>Multi-boost, cashout antecipado, odds melhoradas</td></tr>
            <tr><th>Cashback</th><td>15% semanal até €500</td></tr>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section content-section--alt" id="payments">
    <div class="container">
      <h2>Métodos de Pagamento</h2>
      <p><?php echo SITE_NAME; ?> suporta mais de 20 métodos de pagamento, incluindo cartões de crédito, carteiras eletrónicas, cartões pré-pagos e 10 criptomoedas. A disponibilidade depende do teu país. Os depósitos começam a partir de €10.</p>

      <table class="quick-table">
        <tr><th>Métodos de Depósito</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Depósito mínimo</th><td>€10 (€20 para a maioria dos bónus)</td></tr>
        <tr><th>Levantamento mínimo</th><td>€20</td></tr>
        <tr><th>Levantamento máx. (diário)</th><td>€700 (VIP: €1.500)</td></tr>
        <tr><th>Levantamento máx. (semanal)</th><td>€2.250 (VIP: €7.000)</td></tr>
        <tr><th>Levantamento máx. (mensal)</th><td>€9.000 (VIP: €28.000)</td></tr>
        <tr><th>Tempo de processamento</th><td>Até 72 horas em dias úteis, sem processamento ao fim de semana (até 7 dias úteis no total)</td></tr>
        <tr><th>Moedas</th><td>EUR, CHF, USD, CAD, AUD, NZD, PLN, BRL, NOK, ZAR, CZK, HUF, CLP</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">Para uma lista completa dos métodos de levantamento, limites, taxas e dicas para levantamentos mais rápidos, visita a <a href="/pt/withdrawal">página de levantamentos</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section" id="mobile">
    <div class="container">
      <h2>Casino Mobile</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p><?php echo SITE_NAME; ?> não tem uma app móvel dedicada, mas o site é totalmente compatível com todos os smartphones e tablets. A plataforma baseada em browser oferece as mesmas funcionalidades, jogos e ferramentas de gestão de conta que a versão de computador. Sem downloads necessários - basta abrir o browser no telemóvel, iniciar sessão e começar a jogar.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/vipluck-lobby.png" alt="<?php echo SITE_NAME; ?> Casino mobile lobby with welcome bonus and game navigation" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>
      <ul class="check-list">
        <li>Biblioteca completa de jogos acessível através do browser móvel</li>
        <li>Apostas desportivas com mercados ao vivo</li>
        <li>Depósitos e levantamentos diretamente do telemóvel</li>
        <li>Suporte por live chat e Telegram disponível no mobile</li>
        <li>Sem necessidade de app - funciona em iOS e Android</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section content-section--alt" id="faq">
    <div class="container container--narrow">
      <h2>Perguntas Frequentes</h2>

      <details class="faq-item">
        <summary>Que jogos estão disponíveis no <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> trabalha com 103+ fornecedores, incluindo Play'n GO, Playtech, Pragmatic Play, BGaming e Hacksaw Gaming. Podes jogar video slots, slots com jackpot, títulos Megaways, blackjack, roleta, bacará, poker, game shows, crash games e muito mais. As apostas desportivas cobrem 30+ modalidades com opções pré-jogo e ao vivo.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Como funciona o bónus de boas-vindas no <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>Os novos jogadores de casino recebem um pacote de boas-vindas em três depósitos: 100% até €500 + 100 Rodadas Grátis no primeiro depósito, 75% até €750 + 75 Rodadas Grátis no segundo e 50% até €750 + 125 Rodadas Grátis no terceiro. Valor total: até €2.000 + 300 Rodadas Grátis. Os apostadores desportivos podem receber até €500 em três depósitos. O depósito mínimo é de €20.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Qual é o levantamento máximo no <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>Os jogadores padrão podem levantar até €700 por dia, €2.250 por semana e €9.000 por mês. Os membros VIP têm limites mais elevados: €1.500 diários, €7.000 semanais e €28.000 mensais. O levantamento mínimo é de €20. Os levantamentos são processados em até 72 horas em dias úteis.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Existe um programa VIP no <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Sim. <?php echo SITE_NAME; ?> tem um programa de fidelidade de 5 níveis com progressão baseada na atividade de jogo. Os benefícios incluem gestor de conta pessoal, limites de levantamento mais elevados, bónus exclusivos e melhores percentagens de cashback. Os membros Diamante têm acesso às melhores ofertas semanais de cashback, levantamentos prioritários e convites para eventos exclusivos.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso jogar no telemóvel?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> não tem app móvel, mas o site é totalmente otimizado para mobile. Podes aceder a todos os jogos, apostas desportivas e funções de conta através de qualquer browser moderno em smartphone ou tablet.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Como posso contactar o apoio ao cliente?</summary>
        <div class="faq-answer">
          <p>Podes contactar a equipa de suporte por live chat, por e-mail para support@vipluck.com ou via Telegram - disponível 24 horas por dia, 7 dias por semana. O live chat está disponível diretamente no site para respostas rápidas. Para mais informações, visita a <a href="/pt/support">página de suporte</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
