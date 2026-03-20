<?php
/**
 * Login Page – Portuguese (PT-PT)
 */
$page_title = SITE_NAME . ' Login - Aceder à sua Conta de Casino';
$page_description = 'Aceda à sua conta ' . SITE_NAME . ' Casino. Jogos, bónus e saldo ao alcance de um clique. Problemas ao entrar? Redefina a palavra-passe, recupere o nome de utilizador ou contacte o suporte.';
$current_page = 'login';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Login';
$hero_description = 'Inicie sessão para aceder à sua conta, jogos e bónus.';
$hero_cta = 'Criar conta';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Login Help -->
  <section class="content-section content-section--alt" id="login-help">
    <div class="container container--narrow">
      <h2>Como Entrar na sua Conta <?php echo SITE_NAME; ?> Casino</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <p style="margin-top:0">Entrar na sua conta <?php echo SITE_NAME; ?> demora apenas alguns segundos. Eis como funciona no computador e em dispositivos móveis:</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-login.png" alt="<?php echo SITE_NAME; ?> Casino ecrã de login com campo de nome de utilizador e palavra-passe" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>

      <h3>Acesso via Computador</h3>
      <p>Visite o site do <?php echo SITE_NAME; ?> e clique no botão "Entrar" no canto superior direito da página, junto ao botão "Registar". Introduza o seu nome de utilizador ou endereço de e-mail e a palavra-passe, depois clique em "Entrar" para aceder à sua conta. Os links "Esqueceu a palavra-passe?" e "Esqueceu o nome de utilizador?" estão disponíveis logo abaixo do formulário, caso precise de recuperar os seus dados de acesso.</p>

      <h3>Acesso via Dispositivo Móvel</h3>
      <p>No seu smartphone ou tablet, abra o site do <?php echo SITE_NAME; ?> no browser móvel. O botão "Entrar" fica visível no topo da página. Toque nele, introduza o nome de utilizador ou e-mail e a palavra-passe, depois toque em "Entrar". A versão móvel oferece as mesmas funcionalidades que a versão de computador, incluindo recuperação de palavra-passe, recuperação de nome de utilizador e registo de conta.</p>

      <h3>Jogadores Habituais</h3>
      <p>O <?php echo SITE_NAME; ?> utiliza cookies para reconhecer jogadores habituais. Se já iniciou sessão anteriormente no mesmo dispositivo e browser, o nome de utilizador ou e-mail pode aparecer preenchido no formulário de acesso. Basta introduzir a palavra-passe e clicar em "Entrar". Limpar os cookies do browser ou utilizar o modo de navegação privada requer a introdução dos dados de acesso completos.</p>

      <h3>Problemas ao Entrar?</h3>
      <p>Se tiver dificuldade em aceder à sua conta, verifique os seguintes pontos:</p>
      <ul>
        <li>Confirme que está a introduzir o nome de utilizador (ou e-mail) e a palavra-passe corretos. As palavras-passe são sensíveis a maiúsculas e minúsculas.</li>
        <li>Limpe a cache e os cookies do browser e tente novamente.</li>
        <li>Verifique se a sua ligação à Internet está estável.</li>
        <li>Se esqueceu a palavra-passe, utilize o link "Esqueceu a palavra-passe?" para solicitar um e-mail de redefinição.</li>
        <li>Se esqueceu o nome de utilizador, utilize o link "Esqueceu o nome de utilizador?" para o receber no e-mail registado.</li>
      </ul>
      <p>Se nenhuma destas soluções resultar, contacte o <a href="/pt/support">apoio ao cliente</a> por chat ao vivo, e-mail para support@vipluck.com ou Telegram.</p>
    </div>
  </section>

  <!-- Registration Overview -->
  <section class="content-section" id="register">
    <div class="container container--narrow">
      <h2>Criar uma Nova Conta</h2>
      <p>Se ainda não tem conta no <?php echo SITE_NAME; ?>, o registo é rápido e demora cerca de um minuto. Não é necessária confirmação por e-mail ou telefone. O processo funciona da seguinte forma:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Clicar em "Registar" no site.</strong> O botão de registo fica no canto superior direito da página. Abre-se uma janela onde pode escolher o bónus de boas-vindas preferido (casino, depósito múltiplo ou desporto) ou optar por não ativar nenhum bónus.
          </div>
        </li>
        <li>
          <div>
            <strong>Escolher nome de utilizador, introduzir e-mail e criar palavra-passe.</strong> O nome de utilizador é utilizado juntamente com o e-mail para entrar na conta. Se tiver um código promocional, pode introduzi-lo aqui.
          </div>
        </li>
        <li>
          <div>
            <strong>Preencher os dados pessoais.</strong> É necessário indicar o nome completo, data de nascimento, sexo, número de telefone e morada. Estas informações são utilizadas para verificação de identidade no primeiro levantamento.
          </div>
        </li>
        <li>
          <div>
            <strong>Concluir o registo.</strong> Clique em "Criar perfil" para ativar a sua conta. Não é necessária confirmação por e-mail ou telefone - a conta fica ativa imediatamente. Pode fazer o primeiro depósito e começar a jogar de imediato.
          </div>
        </li>
      </ol>

      <p>Após o registo, recomenda-se que envie os documentos de verificação o quanto antes. Isso acelera o processo no primeiro levantamento. A área de envio está disponível em "Definições - Verificação de Conta" no seu perfil.</p>
    </div>
  </section>

  <!-- Account Recovery -->
  <section class="content-section content-section--alt" id="recovery">
    <div class="container container--narrow">
      <h2>Recuperação de Conta</h2>

      <div class="two-col">
        <div>
          <h3>Esqueceu a palavra-passe?</h3>
          <p>Clique no link "Esqueceu a palavra-passe?" no formulário de acesso. Introduza o endereço de e-mail registado e será enviado um link de redefinição para a sua caixa de entrada. Clique no link do e-mail para criar uma nova palavra-passe. O link tem validade limitada - utilize-o o mais depressa possível.</p>
          <p>Se não receber o e-mail em alguns minutos, verifique a pasta de spam ou lixo. Se o e-mail mesmo assim não chegar, contacte o <a href="/pt/support">apoio ao cliente</a>.</p>
        </div>
        <div>
          <h3>Esqueceu o nome de utilizador?</h3>
          <p>Clique no link "Esqueceu o nome de utilizador?" no formulário de acesso. Introduza o endereço de e-mail associado à sua conta e o nome de utilizador será enviado para esse e-mail. É útil quando se registou há algum tempo e já não se lembra do nome de utilizador escolhido.</p>
          <p>Se já não tem acesso ao endereço de e-mail registado, contacte o suporte por chat ao vivo ou e-mail para support@vipluck.com para confirmar a sua identidade e recuperar a conta.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Login FAQ -->
  <section class="content-section" id="login-faq">
    <div class="container container--narrow">
      <h2>FAQ de Login</h2>

      <details class="faq-item">
        <summary>O que preciso para entrar na conta?</summary>
        <div class="faq-answer">
          <p>Precisa do nome de utilizador (ou endereço de e-mail) e da palavra-passe criada no registo. Se esqueceu a palavra-passe, clique em "Esqueceu a palavra-passe?" no formulário de acesso para receber um link de redefinição por e-mail. Se esqueceu o nome de utilizador, clique em "Esqueceu o nome de utilizador?" para o receber no e-mail registado.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso entrar com o nome de utilizador ou com o e-mail?</summary>
        <div class="faq-answer">
          <p>Sim. O <?php echo SITE_NAME; ?> aceita tanto o nome de utilizador como o endereço de e-mail registado para aceder. Utilize o que for mais fácil de lembrar.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>O site reconhece-me nas visitas seguintes?</summary>
        <div class="faq-answer">
          <p>O <?php echo SITE_NAME; ?> utiliza cookies para reconhecer jogadores habituais. Se já iniciou sessão anteriormente no mesmo dispositivo e browser, o nome de utilizador ou e-mail pode aparecer preenchido no formulário. Por razões de segurança, é sempre necessário introduzir a palavra-passe.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso aceder ao <?php echo SITE_NAME; ?> com VPN?</summary>
        <div class="faq-answer">
          <p>O <?php echo SITE_NAME; ?> não bloqueia tecnicamente ligações por VPN. No entanto, utilizar uma VPN para aceder à plataforma a partir de uma região restrita viola os Termos e Condições. Se se ligar a partir de uma região onde o casino está disponível, a utilização de VPN não deve criar problemas. O casino reserva-se, contudo, o direito de analisar contas com padrões de ligação invulgares.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>A minha conta está bloqueada. O que devo fazer?</summary>
        <div class="faq-answer">
          <p>O bloqueio de conta pode ocorrer por razões de segurança, como várias tentativas de acesso falhadas ou atividade suspeita. Contacte o apoio ao cliente por chat ao vivo ou e-mail para support@vipluck.com para analisar e, se aplicável, desbloquear a sua conta.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Como altero a minha palavra-passe?</summary>
        <div class="faq-answer">
          <p>Após entrar na conta, aceda às definições da conta para alterar a palavra-passe. Se não conseguir entrar, utilize a função de redefinição de palavra-passe na página de login. Um link de redefinição será enviado para o seu endereço de e-mail registado.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Preciso de confirmar o e-mail para me registar?</summary>
        <div class="faq-answer">
          <p>Não. O <?php echo SITE_NAME; ?> não exige confirmação de e-mail ou telefone para criar conta. A conta fica ativa imediatamente após o registo e pode começar a jogar de imediato. Os documentos de verificação são pedidos mais tarde, no primeiro levantamento.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Que dados são necessários para o registo?</summary>
        <div class="faq-answer">
          <p>Para o registo são necessários nome de utilizador, endereço de e-mail, palavra-passe, nome completo, data de nascimento, sexo, número de telefone, país, cidade e código postal. Estas informações servem para verificação de identidade e cumprimento das obrigações legais.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
