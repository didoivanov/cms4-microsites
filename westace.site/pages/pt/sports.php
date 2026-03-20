<?php
/**
 * Sports Betting Page - WestAce (Portuguese / PT)
 */
$page_title = 'WestAce Apostas Desportivas - Futebol, Apostas ao Vivo e Desportos Virtuais';
$page_description = 'Aposte no futebol da Liga Portugal, Benfica, Porto, Sporting CP, Champions League e muito mais no ' . SITE_NAME . '. Apostas ao vivo, desportos virtuais e odds competitivas em mais de 30 modalidades.';
$current_page = 'sports';
$lang_prefix = '/pt';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Apostas Desportivas';
$hero_description = 'Odds pré-jogo, apostas ao vivo, desportos virtuais e corridas de cavalos - tudo num só lugar, a par do nosso casino completo.';
$hero_cta = 'Apostar Agora';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Sportsbook Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Apostas Desportivas no WestAce</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>O <?php echo SITE_NAME; ?> vai muito além de um casino. Disponibilizamos uma secção completa de apostas desportivas com mercados pré-jogo, apostas ao vivo, desportos virtuais e corridas de cavalos. Se acompanha a Liga Portugal, a Champions League ou prefere o futsal e o ciclismo, encontrará odds competitivas e uma vasta oferta de mercados em todos os grandes eventos.</p>
          <p>As apostas desportivas funcionam na mesma conta que o casino, pelo que pode alternar entre slots, mesas de dealer ao vivo e apostas desportivas com um único saldo. Sem necessidade de carteiras separadas nem transferências.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-sports-screen.png" alt="<?php echo SITE_NAME; ?> apostas desportivas com odds ao vivo da Liga Portugal e da Champions League" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Apostas Pré-Jogo</h4>
          <p>Aposte em jogos e eventos em mais de 30 modalidades antes do início. Futebol, ténis, basquetebol, hóquei no gelo, MMA e muito mais - com apostas simples, múltiplas e de sistema disponíveis.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9889;</div>
          <h4>Apostas ao Vivo</h4>
          <p>Aposte durante os jogos com odds em tempo real que se atualizam a cada poucos segundos. Acompanhe a ação com estatísticas ao vivo, marcadores e mercados in-play em todas as principais modalidades.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127918;</div>
          <h4>Desportos Virtuais</h4>
          <p>Eventos simulados a decorrer 24 horas por dia - futebol virtual, basquetebol, ténis, corridas de cavalos e galgos. Resultados de poucos em poucos minutos, sem esperar por jogos reais.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Football / Liga Portugal -->
  <section class="content-section content-section--alt" id="futebol">
    <div class="container">
      <h2>Futebol - A Paixão Portuguesa</h2>
      <div class="two-col">
        <div>
          <p>O futebol é sem dúvida o desporto mais apaixonante em Portugal, e no <?php echo SITE_NAME; ?> cobrimos tudo o que importa. Da Liga Portugal aos grandes palcos europeus, os mercados estão sempre disponíveis para que aposte nos seus favoritos.</p>
          <h3>Liga Portugal</h3>
          <p>Acompanhe e aposte em todos os jogos da Liga Portugal. O eterno duelo entre Benfica, Porto e Sporting CP garante uma das ligas mais disputadas da Europa, com mercados de resultado, número de golos, marcadores, handicap asiático e muito mais.</p>
          <ul class="check-list">
            <li>SL Benfica - o clube com mais títulos nacionais, sempre na luta pela liderança</li>
            <li>FC Porto - campeões europeus com história e tradição de grandes noites na Champions</li>
            <li>Sporting CP - com talentos formados na academia que brilham nos maiores palcos</li>
          </ul>
        </div>
        <div>
          <h3>Competições Europeias</h3>
          <p>A Champions League reúne o melhor futebol do mundo, e Portugal marca sempre presença. Cristiano Ronaldo é o maior marcador de todos os tempos da competição, e a ligação portuguesa à Champions é profunda e orgulhosa. Aposte em todos os jogos da fase de grupos até à final.</p>
          <ul class="check-list">
            <li>UEFA Champions League - todos os jogos, da fase de grupos à final</li>
            <li>UEFA Europa League e Conference League</li>
            <li>Eliminatórias do Campeonato do Mundo e da UEFA Nations League</li>
            <li>Taça de Portugal</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Available Sports -->
  <section class="content-section" id="sports">
    <div class="container">
      <h2>Modalidades Disponíveis</h2>
      <p>A nossa secção de apostas cobre uma grande variedade de desportos de ligas e torneios de todo o mundo. Abaixo estão alguns dos mercados mais populares:</p>

      <div class="two-col">
        <div>
          <h3>Desportos Mais Populares</h3>
          <ul class="check-list">
            <li>Futebol - Liga Portugal, Champions League, La Liga, Premier League, Bundesliga, Serie A, e centenas de ligas secundárias</li>
            <li>Futsal - Liga Nacional de Futsal, competições europeias e Mundiais</li>
            <li>Ciclismo - Volta a Portugal, Tour de France, Giro d'Italia, Vuelta a España</li>
            <li>Ténis - Grand Slams, ATP, WTA e Challenger</li>
            <li>Basquetebol - NBA, EuroLeague, ligas nacionais</li>
            <li>MMA e Boxe - UFC, Bellator e grandes cartões de boxe</li>
            <li>Esports - CS2, Dota 2, League of Legends, Valorant</li>
          </ul>
        </div>
        <div>
          <h3>Outras Modalidades</h3>
          <ul class="check-list">
            <li>Râguebi - União e Liga, competições europeias e internacionais</li>
            <li>Futebol Americano - NFL e universitário</li>
            <li>Basebol - MLB, NPB, KBO</li>
            <li>Andebol - ligas europeias e internacionais</li>
            <li>Voleibol - ligas nacionais e internacionais</li>
            <li>Hóquei no Gelo - NHL, KHL, ligas europeias</li>
            <li>Dardos, Snooker, Fórmula 1</li>
          </ul>
        </div>
      </div>

      <p style="margin-top: var(--space-6);">As apostas ao vivo estão disponíveis na maioria das modalidades listadas acima. As odds atualizam-se em tempo real com base na situação atual do jogo, permitindo-lhe reagir a golos, quebras de serviço e alterações na dinâmica do encontro.</p>
    </div>
  </section>

  <!-- Horse Racing -->
  <section class="content-section content-section--alt" id="corridas">
    <div class="container container--narrow">
      <h2>Corridas de Cavalos</h2>
      <p>O <?php echo SITE_NAME; ?> cobre corridas de cavalos dos principais hipódromos do Reino Unido, Irlanda, França, Austrália e outras nações de referência no turf. Encontrará mercados antecipados para os grandes festivais, bem como odds no próprio dia com opções de vitória, colocação e each-way.</p>
      <p>Grandes encontros como Cheltenham, Royal Ascot, Grand National e Melbourne Cup estão cobertos com uma oferta completa de mercados. Para as corridas do dia-a-dia, disponibilizamos apostas simples de vitória e colocação na maioria dos eventos britânicos e irlandeses.</p>
    </div>
  </section>

  <!-- Virtual Sports -->
  <section class="content-section" id="virtual">
    <div class="container container--narrow">
      <h2>Desportos Virtuais</h2>
      <p>Quando não há jogos ao vivo, a nossa secção de desportos virtuais mantém a ação a funcionar 24 horas por dia, 7 dias por semana. Os eventos são simulados por geradores de números aleatórios certificados, pelo que os resultados são justos e imprevisíveis.</p>

      <h3>Desportos Virtuais Disponíveis</h3>
      <ul>
        <li><strong>Futebol Virtual</strong> - simulações de jogos completos com tabelas e formatos de taça</li>
        <li><strong>Basquetebol Virtual</strong> - simulações período a período com mercados standard de basquetebol</li>
        <li><strong>Ténis Virtual</strong> - encontros set a set com opções de vencedor e resultado correto</li>
        <li><strong>Corridas de Cavalos Virtuais</strong> - corridas em pista plana e obstáculos com apostas de vitória, colocação e previsão</li>
        <li><strong>Galgos Virtuais</strong> - corridas curtas com mercados de vitória e previsão</li>
      </ul>
      <p>Novos eventos virtuais começam a cada 2 a 3 minutos, pelo que há sempre algo em que apostar.</p>
    </div>
  </section>

  <!-- Sports Betting Tips -->
  <section class="content-section content-section--alt" id="dicas">
    <div class="container container--narrow">
      <h2>Dicas para Apostar com Responsabilidade</h2>
      <p>Algumas orientações simples para manter as suas apostas desportivas divertidas e sustentáveis:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Defina um orçamento antes de começar.</strong> Decida quanto está disposto a apostar por semana ou mês, e não ultrapasse esse valor. Trate as apostas como entretenimento, não como uma fonte de rendimento.
          </div>
        </li>
        <li>
          <div>
            <strong>Aposte nas modalidades que conhece.</strong> Mantenha-se nas ligas e desportos em que tem conhecimento genuíno. A familiaridade com as equipas, os jogadores e as condições dá-lhe melhor discernimento do que perseguir mercados aleatórios.
          </div>
        </li>
        <li>
          <div>
            <strong>Não persiga perdas.</strong> Se teve uma má sequência, não aumente as suas apostas para tentar recuperar. Faça uma pausa e volte com a cabeça fria.
          </div>
        </li>
        <li>
          <div>
            <strong>Registe as suas apostas.</strong> Acompanhe os seus registos para perceber o que está a funcionar e o que não está. Com o tempo, isto ajuda-o a identificar padrões e a tomar melhores decisões.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Sports FAQ -->
  <section class="content-section" id="sports-faq">
    <div class="container container--narrow">
      <h2>Perguntas Frequentes sobre Apostas Desportivas</h2>

      <details class="faq-item">
        <summary>O <?php echo SITE_NAME; ?> tem apostas desportivas?</summary>
        <div class="faq-answer">
          <p>Sim. Disponibilizamos uma secção completa de apostas com mercados pré-jogo, apostas ao vivo, desportos virtuais e corridas de cavalos, a par do casino. Pode alternar entre casino e apostas desportivas na mesma conta.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso apostar na Liga Portugal?</summary>
        <div class="faq-answer">
          <p>Sim. A Liga Portugal é uma das ofertas centrais da nossa secção desportiva. Pode apostar em todos os jogos do campeonato, incluindo os clássicos entre Benfica, Porto e Sporting CP, bem como nas eliminatórias europeias e na Taça de Portugal.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso apostar na Champions League?</summary>
        <div class="faq-answer">
          <p>Sim. A UEFA Champions League está totalmente coberta, da fase de grupos até à final. Oferecemos uma vasta gama de mercados em todos os jogos, incluindo os encontros dos clubes portugueses.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>As apostas ao vivo estão disponíveis?</summary>
        <div class="faq-answer">
          <p>Sim. As apostas ao vivo estão disponíveis na maioria das modalidades. As odds atualizam-se em tempo real à medida que os jogos avançam, podendo fazer apostas ao longo de todo o evento.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>O que são os desportos virtuais?</summary>
        <div class="faq-answer">
          <p>Os desportos virtuais são eventos simulados por geradores de números aleatórios. Funcionam 24 horas por dia com novos eventos a cada poucos minutos. Disponibilizamos futebol virtual, basquetebol, ténis, corridas de cavalos e galgos.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso usar o saldo do casino para apostas desportivas?</summary>
        <div class="faq-answer">
          <p>Sim. O <?php echo SITE_NAME; ?> utiliza um saldo único para casino e apostas desportivas. Os depósitos entram numa só conta e pode usar os mesmos fundos em slots, casino ao vivo ou apostas desportivas, sem quaisquer transferências.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Qual é a aposta mínima em desportos?</summary>
        <div class="faq-answer">
          <p>As apostas mínimas variam consoante a modalidade e o mercado, mas geralmente são muito baixas, a partir de 0,50 &euro; na maioria dos eventos. Consulte o boletim de aposta para saber o mínimo exato de cada mercado.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
