<?php
/**
 * Login Page
 */
$page_title = SITE_NAME . ' Login - Sign In to Your Casino Account';
$page_description = 'Log in to your ' . SITE_NAME . ' Casino account. Access your games, bonuses, and balance. Trouble signing in? Reset your password, recover your username, or contact support for help.';
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
      <p>Signing in to your <?php echo SITE_NAME; ?> account takes just a few seconds. Here is what to do on desktop and mobile:</p>

      <h3>Desktop Login</h3>
      <p>Visit the <?php echo SITE_NAME; ?> website and click the "Log In" button located in the top right corner of the page, next to the "Sign Up" button. Enter your username or email address and password, then click "Log In" to access your account. The "Forgot your password?" and "Forgot your username?" links are right below the form if you need to recover your credentials.</p>

      <h3>Mobile Login</h3>
      <p>On your phone or tablet, open the <?php echo SITE_NAME; ?> website in your mobile browser. The "Log In" button is visible in the header area. Tap it, enter your username or email and password, and tap "Log In." The mobile version offers the same features as the desktop site, including password recovery, username recovery, and account registration.</p>

      <h3>Returning Players</h3>
      <p><?php echo SITE_NAME; ?> uses cookies to remember returning players. If you have previously logged in on the same device and browser, your username or email may be pre-filled on the login form. Simply enter your password and click "Log In" to continue. Clearing your browser cookies or using private/incognito mode will require you to enter your full credentials again.</p>

      <h3>Trouble Signing In?</h3>
      <p>If you are having difficulty logging into your account, here are a few things to check:</p>
      <ul>
        <li>Make sure you are entering the correct username (or email) and password. Passwords are case-sensitive.</li>
        <li>Clear your browser cache and cookies, then try again.</li>
        <li>Check that your internet connection is stable.</li>
        <li>If you forgot your password, use the "Forgot your password?" link to request a reset email.</li>
        <li>If you forgot your username, use the "Forgot your username?" link to retrieve it via your registered email address.</li>
      </ul>
      <p>If none of the above resolves the issue, reach out to <a href="/support">customer support</a> via live chat, email at support@vipluck.com, or Telegram for real-time assistance.</p>
    </div>
  </section>

  <!-- Registration Overview -->
  <section class="content-section" id="register">
    <div class="container container--narrow">
      <h2>Creating a New Account</h2>
      <p>If you do not have a <?php echo SITE_NAME; ?> account yet, registration is quick and takes about a minute. No email or phone verification is required to get started. Here is an overview of the process:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Click "Sign Up" on the website.</strong> The registration button is at the top right of the page. A popup will appear where you can choose your preferred welcome bonus (casino, multi-deposit, or sports) or opt out of bonuses entirely.
          </div>
        </li>
        <li>
          <div>
            <strong>Choose a username, enter your email, and create a password.</strong> Your username will be used for logging in alongside your email. If you have a promo code, you can enter it at this stage.
          </div>
        </li>
        <li>
          <div>
            <strong>Fill in your personal details.</strong> You will need to provide your full name, date of birth, gender, phone number, and physical address. This information is needed for account verification when you request your first withdrawal.
          </div>
        </li>
        <li>
          <div>
            <strong>Complete registration.</strong> Click "Create Profile" to finalize your account. No email or phone verification is needed -- your account is active immediately. You can make your first deposit and start playing right away.
          </div>
        </li>
      </ol>

      <p>After registration, consider uploading your verification documents right away. This speeds up the process when you request your first withdrawal. You can find the document upload section under "Settings - Account Verification" in your profile.</p>
    </div>
  </section>

  <!-- Account Recovery -->
  <section class="content-section content-section--alt" id="recovery">
    <div class="container container--narrow">
      <h2>Account Recovery</h2>

      <div class="two-col">
        <div>
          <h3>Forgot Your Password?</h3>
          <p>Click the "Forgot your password?" link on the login form. Enter your registered email address and a reset link will be sent to your inbox. Click the link in the email to create a new password. The reset link is valid for a limited time, so use it promptly.</p>
          <p>If you do not receive the email within a few minutes, check your spam or junk folder. If the email still does not arrive, contact <a href="/support">customer support</a> for manual assistance.</p>
        </div>
        <div>
          <h3>Forgot Your Username?</h3>
          <p>Click the "Forgot your username?" link on the login form. Enter the email address associated with your account, and your username will be sent to that email. This is helpful if you registered some time ago and do not remember the username you chose.</p>
          <p>If you no longer have access to your registered email address, contact support via live chat or email at support@vipluck.com to verify your identity and recover your account.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Login FAQ -->
  <section class="content-section" id="login-faq">
    <div class="container container--narrow">
      <h2>Login FAQ</h2>

      <details class="faq-item">
        <summary>What do I need to log in?</summary>
        <div class="faq-answer">
          <p>You need your username (or email address) and the password you created during registration. If you forgot your password, click "Forgot your password?" on the login form to receive a reset link by email. If you forgot your username, click "Forgot your username?" to have it sent to your registered email.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Can I log in with either my username or email?</summary>
        <div class="faq-answer">
          <p>Yes. <?php echo SITE_NAME; ?> accepts both your username and your registered email address for login. You can use whichever you find easier to remember.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Will the site remember me on my next visit?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> uses cookies to remember returning players. If you previously logged in on the same device and browser, your username or email may be pre-filled on the login form. You will still need to enter your password for security.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Can I use a VPN to access <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> does not technically block VPN connections. However, using a VPN to access the platform from a restricted jurisdiction is against the Terms and Conditions. If you are connecting from a region where the casino is available, VPN usage should not cause issues, but the casino reserves the right to review accounts that show unusual connection patterns.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>My account is locked. What should I do?</summary>
        <div class="faq-answer">
          <p>Account locks can occur for security reasons, such as multiple failed login attempts or suspicious activity. Contact customer support through live chat or email at support@vipluck.com to have your account reviewed and potentially unlocked.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>How do I change my password?</summary>
        <div class="faq-answer">
          <p>Once logged in, go to your account settings to update your password. If you cannot log in, use the password reset function on the login page. A reset link will be sent to your registered email address.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Do I need to verify my email to register?</summary>
        <div class="faq-answer">
          <p>No. <?php echo SITE_NAME; ?> does not require email or phone verification to create an account. Your account is active immediately after registration, and you can start playing right away. Verification documents will be required later when you request your first withdrawal.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What information is needed to register?</summary>
        <div class="faq-answer">
          <p>Registration requires a username, email address, a password, full name, date of birth, gender, phone number, country, city, and postal code. This information is used for identity verification and complying with regulatory requirements.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
