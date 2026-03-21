<?php
/**
 * Login Page - WestAce (Australian English)
 * Note: No login form - we are an affiliate site and do not collect user credentials.
 */
$page_title = 'WestAce Login - Access Your Casino Account';
$page_description = 'Log in to your ' . SITE_NAME . ' Casino account. Access your games, bonuses, and balance in AUD. Having trouble signing in? Find password reset steps and troubleshooting tips here.';
$current_page = 'login';
$lang_prefix = '/au';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Login';
$hero_description = 'Sign in to access your account, games, and bonuses in AUD.';
$hero_cta = 'Sign Up Now';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Login Help -->
  <section class="content-section content-section--alt" id="login-help">
    <div class="container container--narrow">
      <h2>How to Log In to <?php echo SITE_NAME; ?> Casino</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Signing in to your <?php echo SITE_NAME; ?> account takes just a few seconds. Use the email address and password you set up during registration. Your account balance and bonuses are displayed in AUD.</p>

          <h3>Desktop Login</h3>
          <p>Head to the <?php echo SITE_NAME; ?> website and click the "Log In" button in the top right corner of the page. Enter your email address and password, then click "Log In" to get into your account. If you've forgotten your password, click the reset link below the login form.</p>

          <h3>Mobile Login</h3>
          <p>On your phone or tablet, open the <?php echo SITE_NAME; ?> website in your mobile browser. Tap the "Log In" button, enter your email and password, and tap "Log In." The mobile site has the same features as the desktop version - no app download needed, just open your browser and go.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-login-screen.png" alt="<?php echo SITE_NAME; ?> Casino login screen with email and password fields" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div style="text-align:center;margin:var(--space-8) 0">
        <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Log In to <?php echo SITE_NAME; ?></a>
        <p style="margin-top:var(--space-4)">No account yet? <a href="/play" rel="nofollow">Sign up here</a> and claim your welcome bonus.</p>
      </div>

      <h3>Trouble Signing In?</h3>
      <p>If you're having difficulty logging into your account, here are a few things to check:</p>
      <ul>
        <li>Make sure you're entering the correct email and password. Passwords are case-sensitive.</li>
        <li>Clear your browser cache and cookies, then try again.</li>
        <li>Check that your internet connection is stable.</li>
        <li>If you've forgotten your password, use the "Forgot your password?" link to request a reset email.</li>
      </ul>
      <p>If none of that fixes it, get in touch with <a href="<?php echo $lang_prefix; ?>/support">customer support</a> via live chat or email at info@westace.site for a hand.</p>
    </div>
  </section>

  <!-- Registration Overview -->
  <section class="content-section" id="register">
    <div class="container container--narrow">
      <h2>Creating a New Account</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>If you don't have a <?php echo SITE_NAME; ?> account yet, registration is straightforward and takes about two minutes. Enter your email, create a password, choose AUD as your preferred currency, and you're ready to play. The welcome bonus is shown at the top of the sign-up form so you know exactly what you're getting before you commit.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-signup-screen.png" alt="<?php echo SITE_NAME; ?> Casino sign up form showing welcome package and registration fields" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Click "Sign Up" on the website.</strong> The registration button is at the top right of the page.
          </div>
        </li>
        <li>
          <div>
            <strong>Choose your welcome bonus.</strong> Select the bonus you'd like to activate with your first deposit, or skip it if you prefer to play without one.
          </div>
        </li>
        <li>
          <div>
            <strong>Enter your email and create a password.</strong> Pick a strong password to keep your account secure.
          </div>
        </li>
        <li>
          <div>
            <strong>Fill in your personal details.</strong> You'll need to provide your full name, date of birth, phone number, address, country, and preferred currency. Select AUD to keep everything in Australian dollars. This information is required for identity verification when you make your first withdrawal.
          </div>
        </li>
        <li>
          <div>
            <strong>Complete registration.</strong> Finalise your account and make your first deposit to claim the welcome bonus. The minimum qualifying deposit is A$17.
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
      <p>Click the "Forgot your password?" link on the login form. Enter your registered email address and a reset link will be sent to your inbox. Click the link in the email to set a new password. The reset link is valid for a limited time, so use it promptly.</p>
      <p>If the email doesn't arrive within a few minutes, check your spam or junk folder. If it's still not there, contact <a href="<?php echo $lang_prefix; ?>/support">customer support</a> for manual assistance.</p>

      <h3>Account Locked?</h3>
      <p>Account locks can happen for security reasons - for example, multiple failed login attempts or flagged suspicious activity. Contact customer support via live chat or email at info@westace.site to have your account reviewed and get it sorted.</p>

      <h3>Changing Your Email Address</h3>
      <p>To update the email address on your account, contact support directly. For security reasons, email address changes require identity verification before they're processed.</p>
    </div>
  </section>

  <!-- Account Security -->
  <section class="content-section" id="security">
    <div class="container container--narrow">
      <h2>Keeping Your Account Secure</h2>
      <p>A few straightforward habits will help keep your <?php echo SITE_NAME; ?> account safe:</p>

      <ul>
        <li>Use a unique password that you don't use for other sites.</li>
        <li>Never share your login details with anyone, including people claiming to be from <?php echo SITE_NAME; ?> support. The support team will never ask for your password.</li>
        <li>Log out of your account when using shared or public devices.</li>
        <li>If you notice any suspicious activity on your account, contact support immediately.</li>
        <li>Keep the email address linked to your account current and accessible.</li>
      </ul>

      <p>If you suspect your account has been accessed without your permission, change your password straight away and contact <a href="<?php echo $lang_prefix; ?>/support">customer support</a>.</p>
    </div>
  </section>

  <!-- Login FAQ -->
  <section class="content-section content-section--alt" id="login-faq">
    <div class="container container--narrow">
      <h2>Login FAQ</h2>

      <details class="faq-item">
        <summary>What do I need to log in?</summary>
        <div class="faq-answer">
          <p>You need the email address and password you used during registration. If you've forgotten your password, click "Forgot your password?" on the login form to receive a reset link by email.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Will the site remember me on my next visit?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> uses cookies to recognise returning players. If you've logged in previously on the same device and browser, your email may be pre-filled. You'll still need to enter your password for security. Clearing your browser cookies or using private browsing will require you to enter your full credentials again.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>My account is locked. What should I do?</summary>
        <div class="faq-answer">
          <p>Account locks can happen after multiple failed login attempts or due to suspicious activity. Contact customer support via live chat or email at info@westace.site to have your account reviewed and unlocked.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>How do I change my password?</summary>
        <div class="faq-answer">
          <p>Once logged in, go to your account settings to update your password. If you can't log in, use the password reset function on the login page.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What information is needed to register?</summary>
        <div class="faq-answer">
          <p>Registration requires an email address, a password, your full name, date of birth, phone number, address, country, and preferred currency. Choose AUD to play and manage your balance in Australian dollars. This information is used for identity verification and regulatory compliance.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Is there a mobile app for <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>There's no dedicated app, but the website is fully optimised for mobile. Just open <?php echo SITE_NAME; ?> in your mobile browser and log in as normal. All games, sports betting, and account features are accessible on mobile - works on iOS and Android.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Can I have more than one account?</summary>
        <div class="faq-answer">
          <p>No. Each player is permitted one account only. Creating duplicate accounts is a breach of the casino's terms and may result in account suspension and forfeiture of any associated funds.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
