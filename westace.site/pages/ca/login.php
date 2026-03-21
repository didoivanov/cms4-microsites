<?php
/**
 * Login Page - WestAce (Canadian English)
 */
$page_title = 'WestAce Login - Access Your Casino Account in Canada';
$page_description = 'Access your ' . SITE_NAME . ' Casino Canada account. Find out how to sign in, recover your password, and troubleshoot login issues. New player? Sign up and claim your welcome bonus.';
$current_page = 'login';
$lang_prefix = '/ca';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Login';
$hero_description = 'Everything you need to know about accessing your account, recovering your password, and getting started.';
$hero_cta = 'Sign Up Now';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Login Help -->
  <section class="content-section content-section--alt" id="login-help">
    <div class="container container--narrow">
      <h2>How to Log In to <?php echo SITE_NAME; ?> Casino</h2>
      <p>Logging in to your <?php echo SITE_NAME; ?> account takes just a few seconds. Use the email address and password you set up during registration. If you are a new player, head to the sign-up section below - registration is quick and your welcome bonus of up to C$1,500 is waiting.</p>

      <p><strong>Note:</strong> This page does not host a login form. We are an independent affiliate review site - we do not collect account credentials or any personal information. To access your <?php echo SITE_NAME; ?> account, visit the casino directly using the button below.</p>

      <div style="text-align:center;margin:var(--space-8) 0">
        <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Go to <?php echo SITE_NAME; ?> Login</a>
        <p style="margin-top:var(--space-4)">No account yet? <a href="/play" rel="nofollow">Sign up here</a> and claim your welcome bonus up to C$1,500.</p>
      </div>

      <h3>Desktop Login</h3>
      <p>Visit the <?php echo SITE_NAME; ?> website and click the "Log In" button in the top right corner of the page. Enter your email address and password, then click "Log In" to access your account. If you have forgotten your password, click the reset link on the login form.</p>

      <h3>Mobile Login</h3>
      <p>On your phone or tablet, open the <?php echo SITE_NAME; ?> website in your mobile browser. Tap the "Log In" button, enter your email and password, and tap "Log In." The mobile version has the same features as the desktop site - no app download is needed.</p>

      <h3>Trouble Signing In?</h3>
      <p>If you are having difficulty logging into your account, here are a few things to check:</p>
      <ul>
        <li>Make sure you are entering the correct email and password. Passwords are case-sensitive.</li>
        <li>Clear your browser cache and cookies, then try again.</li>
        <li>Check that your internet connection is stable.</li>
        <li>If you forgot your password, use the "Forgot your password?" link on the login form to request a reset email.</li>
        <li>If you are using a VPN, try disabling it temporarily - some VPN locations may cause login issues.</li>
      </ul>
      <p>If none of the above resolves the issue, reach out to <a href="<?php echo $lang_prefix; ?>/support">customer support</a> via live chat or email at info@westace.site for assistance.</p>
    </div>
  </section>

  <!-- Registration Overview -->
  <section class="content-section" id="register">
    <div class="container container--narrow">
      <h2>Creating a New Account</h2>
      <p>If you do not have a <?php echo SITE_NAME; ?> account yet, registration is straightforward and takes about two minutes. Enter your email, create a password, choose Canadian dollars as your currency, and you are ready to play. The welcome bonus - up to C$1,500 across your first deposits - is shown right at the top of the sign-up form.</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Click "Sign Up" on the website.</strong> The registration button is at the top right of the page.
          </div>
        </li>
        <li>
          <div>
            <strong>Choose your welcome bonus.</strong> Select the offer you want to activate with your first deposit, or skip if you prefer to play without a bonus.
          </div>
        </li>
        <li>
          <div>
            <strong>Enter your email and create a password.</strong> Choose a strong password to keep your account secure.
          </div>
        </li>
        <li>
          <div>
            <strong>Fill in your personal details.</strong> You will need to provide your full name, date of birth, phone number, address, province, and preferred currency (CAD). This information is needed for account verification when you request your first withdrawal.
          </div>
        </li>
        <li>
          <div>
            <strong>Complete registration.</strong> Finalise your account and make your first deposit to claim the welcome bonus. The minimum qualifying deposit is C$15.
          </div>
        </li>
      </ol>

      <div style="text-align:center;margin:var(--space-8) 0">
        <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Create Your Account</a>
      </div>
    </div>
  </section>

  <!-- Account Recovery -->
  <section class="content-section content-section--alt" id="recovery">
    <div class="container container--narrow">
      <h2>Account Recovery</h2>

      <h3>Forgot Your Password?</h3>
      <p>Click the "Forgot your password?" link on the login form. Enter your registered email address and a reset link will be sent to your inbox. Click the link in the email to create a new password. The reset link is valid for a limited time, so use it promptly.</p>
      <p>If you do not receive the email within a few minutes, check your spam or junk folder. If it still does not arrive, contact <a href="<?php echo $lang_prefix; ?>/support">customer support</a> for manual assistance.</p>

      <h3>Account Locked?</h3>
      <p>Account locks can occur for security reasons, such as multiple failed login attempts or suspicious activity. Contact customer support through live chat or email at info@westace.site to have your account reviewed.</p>

      <h3>Account Verification</h3>
      <p>Before your first withdrawal, <?php echo SITE_NAME; ?> will ask you to verify your identity. This is a standard requirement for all Canadian players and typically involves submitting a government-issued ID and proof of address. The verification process usually takes 24 to 72 hours. Contact support if your verification has been pending longer than expected.</p>
    </div>
  </section>

  <!-- Login FAQ -->
  <section class="content-section" id="login-faq">
    <div class="container container--narrow">
      <h2>Login FAQ</h2>

      <details class="faq-item">
        <summary>What do I need to log in?</summary>
        <div class="faq-answer">
          <p>You need the email address and password you created during registration. If you forgot your password, click "Forgot your password?" on the login form to receive a reset link by email.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Does the site remember me on my next visit?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> uses cookies to remember returning players. If you previously logged in on the same device and browser, your email may be pre-filled. You will still need to enter your password for security. Clearing your browser cookies or using a private/incognito window will require you to enter your full credentials again.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>My account is locked. What should I do?</summary>
        <div class="faq-answer">
          <p>Account locks can occur after multiple failed login attempts or due to suspicious activity. Contact customer support through live chat or email at info@westace.site to have your account reviewed and unlocked.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>How do I change my password?</summary>
        <div class="faq-answer">
          <p>Once logged in, go to your account settings to update your password. If you cannot log in, use the password reset function on the login page.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What information is needed to register?</summary>
        <div class="faq-answer">
          <p>Registration requires an email address, a password, full name, date of birth, phone number, address, province, and preferred currency. This information is used for identity verification and regulatory compliance. Canadian players must be of legal gambling age - 18 in Alberta, Manitoba, and Quebec, and 19 in all other provinces and territories.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Is there a mobile app for <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>There is no dedicated app, but the website is fully optimised for mobile devices. Open <?php echo SITE_NAME; ?> in your mobile browser and log in as usual. All games, promotions, and account features are accessible on mobile without an app download.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What is the minimum deposit after registering?</summary>
        <div class="faq-answer">
          <p>The minimum deposit at <?php echo SITE_NAME; ?> Canada is C$15. This also qualifies for the welcome bonus on your first deposit. All amounts are displayed and processed in Canadian dollars.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>I have not received my verification email. What should I do?</summary>
        <div class="faq-answer">
          <p>Check your spam or junk mail folder first. If it is not there, try requesting the verification email again from the account settings page. If the problem continues, contact support at info@westace.site with your registered email address so the team can send it manually.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
