<?php
/**
 * Login Page - WestAce
 */
$page_title = SITE_NAME . ' Login - Sign In to Your Casino Account';
$page_description = 'Log in to your ' . SITE_NAME . ' Casino account. Access your games, bonuses, and balance. Trouble signing in? Reset your password or contact support for help.';
$current_page = 'login';

require_once __DIR__ . '/../includes/header.php';

$hero_title = SITE_NAME . ' Login';
$hero_description = 'Sign in to access your account, games, and bonuses.';
$hero_cta = 'Sign Up Now';
require_once __DIR__ . '/../includes/page-hero.php';
?>

<main>
  <!-- Login Help -->
  <section class="content-section content-section--alt" id="login-help">
    <div class="container container--narrow">
      <h2>How to Log In to <?php echo SITE_NAME; ?> Casino</h2>
      <p>Signing in to your <?php echo SITE_NAME; ?> account takes just a few seconds. Use the email and password you created during registration.</p>

      <h3>Desktop Login</h3>
      <p>Visit the <?php echo SITE_NAME; ?> website and click the "Log In" button in the top right corner of the page. Enter your email address and password, then click "Log In" to access your account. If you have forgotten your password, click the reset link below the login form.</p>

      <h3>Mobile Login</h3>
      <p>On your phone or tablet, open the <?php echo SITE_NAME; ?> website in your mobile browser. Tap the "Log In" button, enter your email and password, and tap "Log In." The mobile version offers the same features as the desktop site -- no app download needed.</p>

      <div style="text-align:center;margin:var(--space-8) 0">
        <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Log In to <?php echo SITE_NAME; ?></a>
        <p style="margin-top:var(--space-4)">No account yet? <a href="/play" rel="nofollow">Sign up here</a> and claim your welcome bonus.</p>
      </div>

      <h3>Trouble Signing In?</h3>
      <p>If you are having difficulty logging into your account, here are a few things to check:</p>
      <ul>
        <li>Make sure you are entering the correct email and password. Passwords are case-sensitive.</li>
        <li>Clear your browser cache and cookies, then try again.</li>
        <li>Check that your internet connection is stable.</li>
        <li>If you forgot your password, use the "Forgot your password?" link to request a reset email.</li>
      </ul>
      <p>If none of the above resolves the issue, reach out to <a href="/support">customer support</a> via live chat or email at support@westace.com for assistance.</p>
    </div>
  </section>

  <!-- Registration Overview -->
  <section class="content-section" id="register">
    <div class="container container--narrow">
      <h2>Creating a New Account</h2>
      <p>If you do not have a <?php echo SITE_NAME; ?> account yet, registration is quick and takes about two minutes. Here is an overview of the process:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Click "Sign Up" on the website.</strong> The registration button is at the top right of the page.
          </div>
        </li>
        <li>
          <div>
            <strong>Choose your welcome bonus.</strong> Select the bonus you would like to activate with your first deposit, or skip if you prefer to play without a bonus.
          </div>
        </li>
        <li>
          <div>
            <strong>Enter your email and create a password.</strong> Choose a strong password to keep your account secure.
          </div>
        </li>
        <li>
          <div>
            <strong>Fill in your personal details.</strong> You will need to provide your full name, date of birth, phone number, address, country, and preferred currency. This information is needed for account verification when you request your first withdrawal.
          </div>
        </li>
        <li>
          <div>
            <strong>Complete registration.</strong> Finalise your account and make your first deposit to claim the welcome bonus. The minimum qualifying deposit is &euro;20.
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
      <p>If you do not receive the email within a few minutes, check your spam or junk folder. If the email still does not arrive, contact <a href="/support">customer support</a> for manual assistance.</p>

      <h3>Account Locked?</h3>
      <p>Account locks can occur for security reasons, such as multiple failed login attempts or suspicious activity. Contact customer support through live chat or email at support@westace.com to have your account reviewed.</p>
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
        <summary>Will the site remember me on my next visit?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> uses cookies to remember returning players. If you previously logged in on the same device and browser, your email may be pre-filled. You will still need to enter your password for security. Clearing your browser cookies or using private browsing will require you to enter your full credentials again.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>My account is locked. What should I do?</summary>
        <div class="faq-answer">
          <p>Account locks can occur after multiple failed login attempts or due to suspicious activity. Contact customer support through live chat or email at support@westace.com to have your account reviewed and unlocked.</p>
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
          <p>Registration requires an email address, a password, full name, date of birth, phone number, address, country, and preferred currency. This information is used for identity verification and regulatory compliance.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Is there a mobile app for <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>No dedicated app is available, but the website is fully optimised for mobile devices. Simply open <?php echo SITE_NAME; ?> in your mobile browser and log in as normal. All games, sports betting, and features are accessible on mobile.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
