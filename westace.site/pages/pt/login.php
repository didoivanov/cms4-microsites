<?php
/**
 * Login Page - WestAce (Portuguese / PT)
 */
$page_title = 'WestAce Iniciar Sessão - Acesso à Sua Conta de Casino';
$page_description = 'Aceda à sua conta ' . SITE_NAME . ' Casino. Jogue, consulte os seus bónus e saldo. Para iniciar sessão ou criar conta, clique em Jogar Agora.';
$current_page = 'login';
$lang_prefix = '/pt';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Iniciar Sessão';
$hero_description = 'Aceda à sua conta para jogar, consultar os seus bónus e fazer levantamentos.';
$hero_cta = 'Registar Agora';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Login Redirect -->
  <section class="content-section content-section--alt" id="login-access">
    <div class="container container--narrow">
      <h2>Como Aceder à Sua Conta <?php echo SITE_NAME; ?></h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>O acesso à sua conta <?php echo SITE_NAME; ?> é feito diretamente na plataforma do casino. Clique no botão abaixo para aceder - o formulário de início de sessão e registo estão disponíveis no site oficial.</p>
          <h3>Acesso em Computador</h3>
          <p>Aceda ao site <?php echo SITE_NAME; ?> e clique no botão "Iniciar Sessão" no canto superior direito da página. Introduza o seu endereço de e-mail e palavra-passe e clique em "Iniciar Sessão" para entrar na sua conta. Se se esqueceu da palavra-passe, utilize a ligação de recuperação abaixo do formulário.</p>
          <h3>Acesso em Telemóvel</h3>
          <p>No seu telemóvel ou tablet, abra o site <?php echo SITE_NAME; ?> no browser. Prima o botão "Iniciar Sessão", introduza o e-mail e a palavra-passe e prima "Iniciar Sessão". A versão para telemóvel oferece as mesmas funcionalidades que a versão de computador - não é necessário descarregar nenhuma aplicação.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-login-screen.png" alt="<?php echo SITE_NAME; ?> Casino - acesso à conta com e-mail e palavra-passe" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div style="text-align:center;margin:var(--space-8) 0">
        <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Iniciar Sessão no <?php echo SITE_NAME; ?></a>
        <p style="margin-top:var(--space-4)">Ainda não tem conta? <a href="/play" rel="nofollow">Registe-se aqui</a> e reclame o seu bónus de boas-vindas.</p>
      </div>

      <h3>Problemas ao Iniciar Sessão?</h3>
      <p>Se tiver dificuldades em aceder à sua conta, verifique os seguintes pontos:</p>
      <ul>
        <li>Certifique-se de que está a introduzir o e-mail e a palavra-passe corretos. As palavras-passe distinguem maiúsculas de minúsculas.</li>
        <li>Limpe a cache e os cookies do browser e tente novamente.</li>
        <li>Verifique se a sua ligação à internet está estável.</li>
        <li>Se se esqueceu da palavra-passe, utilize a ligação "Esqueceu a palavra-passe?" para receber um e-mail de recuperação.</li>
      </ul>
      <p>Se nenhuma das soluções acima resolver o problema, contacte o <a href="<?php echo $lang_prefix; ?>/support">apoio ao cliente</a> via chat ao vivo ou por e-mail em support@westace.com.</p>
    </div>
  </section>

  <!-- Registration Overview -->
  <section class="content-section" id="register">
    <div class="container container--narrow">
      <h2>Criar uma Nova Conta</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Se ainda não tem uma conta <?php echo SITE_NAME; ?>, o registo é rápido e demora cerca de dois minutos. Introduza o seu e-mail, crie uma palavra-passe, escolha a moeda preferida e está pronto para jogar. O bónus de boas-vindas é apresentado no topo do formulário de registo para saber exatamente o que irá receber.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-signup-screen.png" alt="<?php echo SITE_NAME; ?> Casino - formulário de registo com o pacote de boas-vindas" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Clique em "Registar" no site.</strong> O botão de registo encontra-se no canto superior direito da página.
          </div>
        </li>
        <li>
          <div>
            <strong>Escolha o seu bónus de boas-vindas.</strong> Selecione o bónus que pretende ativar com o primeiro depósito, ou ignore se preferir jogar sem bónus.
          </div>
        </li>
        <li>
          <div>
            <strong>Introduza o seu e-mail e crie uma palavra-passe.</strong> Escolha uma palavra-passe segura para proteger a sua conta.
          </div>
        </li>
        <li>
          <div>
            <strong>Preencha os seus dados pessoais.</strong> Terá de indicar o seu nome completo, data de nascimento, número de telemóvel, morada, país e moeda preferida. Estes dados são necessários para a verificação de identidade no primeiro levantamento.
          </div>
        </li>
        <li>
          <div>
            <strong>Conclua o registo.</strong> Finalize a criação da conta e efetue o primeiro depósito para receber o bónus de boas-vindas. O depósito mínimo qualificante é de 20 &euro;.
          </div>
        </li>
      </ol>

      <div style="text-align:center;margin:var(--space-8) 0">
        <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Criar a Sua Conta</a>
      </div>
    </div>
  </section>

  <!-- Account Recovery -->
  <section class="content-section content-section--alt" id="recovery">
    <div class="container container--narrow">
      <h2>Recuperação de Conta</h2>

      <h3>Esqueceu a Palavra-passe?</h3>
      <p>Clique na ligação "Esqueceu a palavra-passe?" no formulário de início de sessão. Introduza o endereço de e-mail registado e será enviada uma ligação de recuperação para a sua caixa de entrada. Clique na ligação do e-mail para criar uma nova palavra-passe. A ligação de recuperação tem validade limitada, por isso utilize-a prontamente.</p>
      <p>Se não receber o e-mail em alguns minutos, verifique a pasta de spam ou lixo. Se o e-mail ainda não chegar, contacte o <a href="<?php echo $lang_prefix; ?>/support">apoio ao cliente</a> para assistência manual.</p>

      <h3>Conta Bloqueada?</h3>
      <p>Os bloqueios de conta podem ocorrer por razões de segurança, como múltiplas tentativas de início de sessão falhadas ou atividade suspeita. Contacte o apoio ao cliente via chat ao vivo ou por e-mail em support@westace.com para que a sua conta seja revista.</p>
    </div>
  </section>

  <!-- Login FAQ -->
  <section class="content-section" id="login-faq">
    <div class="container container--narrow">
      <h2>Perguntas Frequentes sobre o Acesso</h2>

      <details class="faq-item">
        <summary>O que preciso para iniciar sessão?</summary>
        <div class="faq-answer">
          <p>Precisa do endereço de e-mail e da palavra-passe que criou durante o registo. Se se esqueceu da palavra-passe, clique em "Esqueceu a palavra-passe?" no formulário para receber uma ligação de recuperação por e-mail.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>O site vai lembrar-se de mim na próxima visita?</summary>
        <div class="faq-answer">
          <p>O <?php echo SITE_NAME; ?> utiliza cookies para reconhecer jogadores que regressam. Se iniciou sessão anteriormente no mesmo dispositivo e browser, o e-mail pode estar pré-preenchido. Ainda assim, terá de introduzir a palavra-passe por razões de segurança. Limpar os cookies do browser ou utilizar navegação privada obriga-o a introduzir as credenciais completas novamente.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>A minha conta está bloqueada. O que devo fazer?</summary>
        <div class="faq-answer">
          <p>Os bloqueios de conta podem ocorrer após múltiplas tentativas de início de sessão falhadas ou por atividade suspeita. Contacte o apoio ao cliente via chat ao vivo ou por e-mail em support@westace.com para que a sua conta seja revista e desbloqueada.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Como posso alterar a minha palavra-passe?</summary>
        <div class="faq-answer">
          <p>Após iniciar sessão, aceda às definições da sua conta para atualizar a palavra-passe. Se não conseguir entrar, utilize a função de recuperação de palavra-passe na página de início de sessão.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Que informações são necessárias para o registo?</summary>
        <div class="faq-answer">
          <p>O registo requer endereço de e-mail, palavra-passe, nome completo, data de nascimento, número de telemóvel, morada, país e moeda preferida. Estas informações são utilizadas para verificação de identidade e cumprimento regulatório.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Existe uma aplicação para telemóvel do <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Não existe uma aplicação dedicada, mas o site está totalmente otimizado para dispositivos móveis. Basta abrir o <?php echo SITE_NAME; ?> no browser do seu telemóvel e iniciar sessão normalmente. Todos os jogos, apostas desportivas e funcionalidades estão acessíveis em telemóvel.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
