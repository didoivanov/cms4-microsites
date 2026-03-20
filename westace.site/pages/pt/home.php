<?php
/**
 * Homepage - WestAce (Portuguese / PT)
 */
$page_title = 'WestAce Casino - 7.000+ Jogos, Apostas Desportivas e Bónus até 2.000 &euro;';
$page_description = SITE_NAME . ' Casino oferece mais de 7.000 jogos de 100+ fornecedores, apostas desportivas completas com apostas ao vivo, mesas de casino ao vivo e um bónus de boas-vindas de 100% até 1.000 &euro; + 50 rodadas grátis. Registe-se e jogue já.';
$current_page = 'home';
$lang_prefix = '/pt';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__badge"><?php echo __('hero_badge', 'Aberto - 7.000+ jogos e apostas desportivas ao vivo'); ?></div>
    <h1>
      <span class="brand-name"><?php echo SITE_NAME; ?></span><br>
      <span class="brand-type">Casino</span>
    </h1>
    <p class="hero__subtitle">Mais de 7.000 jogos de 100+ fornecedores, mesas de casino ao vivo, apostas desportivas completas com apostas ao vivo e um pacote de boas-vindas que recompensa os seus três primeiros depósitos.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Pacote de Boas-Vindas</div>
      <div class="hero__bonus-value"><?php echo WELCOME_BONUS; ?></div>
      <div class="hero__bonus-extra">1.&deg; Depósito: 100% até 1.000 &euro; + 50 Rodadas Grátis &middot; Depósito mín. 20 &euro;</div>
    </div>
    <div class="hero__ctas">
      <a href="/play" class="btn btn--primary btn--lg" rel="nofollow"><?php echo __('cta_play', 'Jogar Agora'); ?></a>
      <a href="<?php echo $lang_prefix; ?>/bonuses" class="btn btn--outline btn--lg">Ver Bónus</a>
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
      <h2>Bem-vindo ao Casino <?php echo SITE_NAME; ?></h2>
      <p><?php echo SITE_NAME; ?> é um casino online e plataforma de apostas desportivas lançado em 2026. A plataforma reúne mais de 7.000 jogos de 100+ fornecedores, com slots, lobby de casino ao vivo, jogos de mesa, jogos crash, jackpots e programas de jogo. Além do casino, disponibilizamos apostas desportivas completas com mercados pré-jogo e ao vivo, desportos virtuais e corridas de cavalos. Os novos jogadores podem reclamar um pacote de boas-vindas em três depósitos com um valor total até 2.000 &euro; + 150 rodadas grátis.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Lançamento</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Jogos</th><td>7.000+ (slots, jogos de mesa, casino ao vivo, jogos crash, jackpots, programas de jogo)</td></tr>
        <tr><th>Fornecedores</th><td>100+ (Pragmatic Play, Playtech, Novomatic, Red Tiger, Yggdrasil, BGaming, Hacksaw Gaming e mais)</td></tr>
        <tr><th>Bónus de Boas-Vindas</th><td><?php echo WELCOME_BONUS_TEXT; ?></td></tr>
        <tr><th>Depósito Mín.</th><td>10 &euro;</td></tr>
        <tr><th>Moeda</th><td>EUR</td></tr>
        <tr><th>Apoio</th><td>Chat ao vivo 24/7 + e-mail</td></tr>
        <tr><th>Apostas Desportivas</th><td>Sim (desporto, apostas ao vivo, desportos virtuais, corridas de cavalos)</td></tr>
        <tr><th>Telemóvel</th><td>Totalmente responsivo, sem aplicação necessária</td></tr>
      </table>

      <h3>Por Que os Jogadores Escolhem <?php echo SITE_NAME; ?></h3>
      <ul class="check-list">
        <li>Mais de 7.000 jogos de 100+ fornecedores licenciados</li>
        <li>Pacote de boas-vindas em três depósitos até 2.000 &euro; + 150 rodadas grátis</li>
        <li>Apostas desportivas completas com apostas ao vivo, desportos virtuais e corridas de cavalos</li>
        <li>Casino ao vivo com roleta, blackjack, bacará, dados e póquer</li>
        <li>Cashback diário até 15% com requisito de apostas de apenas 1x</li>
        <li>Programa VIP de 5 níveis com gestor pessoal e limites mais elevados</li>
        <li>Compatível com cripto, com bónus de boas-vindas e recargas exclusivos</li>
        <li>Apoio 24/7 via chat ao vivo e e-mail</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Jogos de Casino</h4>
          <p>Milhares de slots, variações de blackjack e roleta, póquer, bacará, jogos crash e mesas de casino ao vivo de estúdios como Pragmatic Play, Playtech, Novomatic, Red Tiger e Yggdrasil.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127183;</div>
          <h4>Casino ao Vivo</h4>
          <p>Jogos com crupiê ao vivo, incluindo roleta, blackjack, bacará, dados e póquer. Crupiês reais em transmissão HD a partir de estúdios profissionais, a qualquer hora do dia.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Apostas Desportivas</h4>
          <p>Plataforma de apostas desportivas completa com mercados pré-jogo e ao vivo. Acompanhe a Liga Portugal, Benfica, Porto e Sporting, com desportos virtuais e corridas de cavalos para completar a oferta.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Social Proof / Recent Winners -->
  <section class="content-section winners-section" id="winners">
    <div class="container">
      <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--space-4);margin-bottom:var(--space-2)">
        <h2 style="margin-bottom:0">Vencedores Recentes</h2>
        <span class="live-dot">Ao Vivo</span>
      </div>
      <div class="jackpot-label">Poço de Jackpot Atual</div>
      <div class="jackpot-amount" id="jackpotCounter">2.847.391 &euro;</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Jogos Populares no <?php echo SITE_NAME; ?></h2>
      <p>Explore alguns dos títulos mais jogados no casino. Desde slots de alta volatilidade a jogos de mesa clássicos, salas de casino ao vivo e mercados desportivos - há algo para cada tipo de jogador.</p>

      <div class="game-tabs">
        <button class="game-tab active">Todos os Jogos</button>
        <button class="game-tab">Slots</button>
        <button class="game-tab">Casino ao Vivo</button>
        <button class="game-tab">Jogos de Mesa</button>
        <button class="game-tab">Jogos Crash</button>
        <button class="game-tab">Jackpots</button>
        <button class="game-tab">Desporto</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Principais Fornecedores de Jogos</h3>
          <p>O nosso catálogo de jogos é alimentado por uma vasta seleção de estúdios, desde líderes de mercado a criadores independentes de referência:</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">100+ no total</span>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-games-screen.png" alt="<?php echo SITE_NAME; ?> Casino lobby de jogos com os melhores slots de fornecedores como Pragmatic Play, Playtech e Novomatic" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section" id="payments">
    <div class="container">
      <h2>Métodos de Pagamento</h2>
      <p><?php echo SITE_NAME; ?> suporta uma variedade de métodos de pagamento, incluindo cartões de crédito, cartões pré-pagos, carteiras eletrónicas e criptomoedas. Os depósitos começam a partir de 10 &euro; e todos os depósitos e levantamentos são isentos de comissões.</p>

      <table class="quick-table">
        <tr><th>Métodos de Depósito</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Depósito Mín.</th><td>10 &euro;</td></tr>
        <tr><th>Levantamento Mín.</th><td>10 &euro;</td></tr>
        <tr><th>Levantamento Máx.</th><td>500 &euro;/dia, 7.000 &euro;/mês</td></tr>
        <tr><th>Prazo de Pagamento</th><td>24-72 horas</td></tr>
        <tr><th>Moeda</th><td>EUR</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">Para uma análise detalhada dos métodos de levantamento, limites, comissões e dicas para agilizar o seu pagamento, visite a <a href="<?php echo $lang_prefix; ?>/withdrawal">página de Levantamentos</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section content-section--alt" id="mobile">
    <div class="container">
      <h2>Casino no Telemóvel</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p><?php echo SITE_NAME; ?> não tem uma aplicação móvel dedicada, mas o site é totalmente compatível com todos os smartphones e tablets. A plataforma baseada em browser oferece as mesmas funcionalidades, jogos e ferramentas de gestão de conta que encontra na versão desktop. Sem downloads necessários - abra o browser no telemóvel, inicie sessão e jogue.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/westace-mobile.png" alt="<?php echo SITE_NAME; ?> Casino lobby no telemóvel com bónus de boas-vindas e navegação de jogos" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>
      <ul class="check-list">
        <li>Biblioteca completa de jogos acessível em browsers móveis</li>
        <li>Mesas de casino ao vivo e apostas desportivas em qualquer lugar</li>
        <li>Faça depósitos e levantamentos diretamente pelo telemóvel</li>
        <li>Apoio via chat ao vivo disponível no telemóvel</li>
        <li>Sem necessidade de descarregar aplicações - funciona em iOS e Android</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section" id="faq">
    <div class="container container--narrow">
      <h2>Perguntas Frequentes</h2>

      <details class="faq-item">
        <summary>Que tipo de jogos posso encontrar no Casino <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> trabalha com 100+ fornecedores, incluindo Pragmatic Play, Playtech, Novomatic, Red Tiger, Yggdrasil, BGaming, Hacksaw Gaming e Quickspin. Pode jogar slots de vídeo, slots com jackpot, blackjack, roleta, bacará, póquer, jogos crash, programas de jogo e títulos de casino ao vivo. Existe ainda uma plataforma de apostas desportivas completa com apostas ao vivo, desportos virtuais e corridas de cavalos.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Qual é o bónus de boas-vindas no Casino <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Os novos jogadores recebem um pacote de boas-vindas em três depósitos: 100% até 1.000 &euro; + 50 rodadas grátis no primeiro depósito, 100% até 500 &euro; + 50 rodadas grátis no segundo e 100% até 500 &euro; + 50 rodadas grátis no terceiro. Valor total: até 2.000 &euro; + 150 rodadas grátis. O depósito mínimo é de 20 &euro; por nível. O requisito de apostas é 35x (bónus + depósito).</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Em quanto tempo são processados os levantamentos?</summary>
        <div class="faq-answer">
          <p>Os levantamentos são processados entre 24 e 72 horas. O levantamento mínimo é de 10 &euro; em todos os métodos de pagamento. O limite diário de levantamento é de 500 &euro; e o limite mensal é de 7.000 &euro;. Não são cobradas comissões nos levantamentos.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary><?php echo SITE_NAME; ?> tem programa VIP?</summary>
        <div class="faq-answer">
          <p>Sim. <?php echo SITE_NAME; ?> tem um programa VIP de 5 níveis. Os benefícios incluem percentagens de cashback mais elevadas (até 15%), limites de levantamento aumentados, processamento prioritário, ofertas personalizadas e um gestor VIP pessoal nos níveis mais altos. Os critérios de progressão entre níveis não são divulgados publicamente.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso jogar no telemóvel?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> não tem aplicação móvel, mas o site é totalmente adaptado a dispositivos móveis. Pode aceder a todos os jogos, às apostas desportivas e às funcionalidades da conta através de qualquer browser moderno num smartphone ou tablet.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Como posso contactar o apoio ao cliente?</summary>
        <div class="faq-answer">
          <p>Pode contactar a equipa de apoio via chat ao vivo 24/7 diretamente no site, ou por e-mail em support@westace.com. Para mais detalhes, visite a <a href="<?php echo $lang_prefix; ?>/support">página de Apoio</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
