<?php
/**
 * Login Page
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
      <p>Signing in to your <?php echo SITE_NAME; ?> account takes just a few seconds. Here is what to do on desktop and mobile:</p>

      <h3>Desktop Login</h3>
      <p>Visit the <?php echo SITE_NAME; ?> website and click the "Log In" button located in the top right corner of the page, next to the "Register" button. Enter your registered email address and password, then click "Log In" to access your account. The "Forgot your password?" link is right below the form if you need to reset your credentials.</p>

      <h3>Mobile Login</h3>
      <p>On your phone or tablet, open the <?php echo SITE_NAME; ?> website in your mobile browser. The "Log In" button is visible in the header area. Tap it, enter your email and password, and tap "Log In." The mobile version offers the same features as the desktop site, including password recovery and account registration.</p>

      <h3>Trouble Signing In?</h3>
      <p>If you are having difficulty logging into your account, here are a few things to check:</p>
      <ul>
        <li>Make sure you are entering the correct email address and password. Passwords are case-sensitive.</li>
        <li>Clear your browser cache and cookies, then try again.</li>
        <li>Check that your internet connection is stable.</li>
        <li>If you have forgotten your password, use the "Forgot your password?" link to request a reset email.</li>
        <li>Avoid using a VPN, as <?php echo SITE_NAME; ?> does not allow VPN access. Attempting to log in through a VPN may result in account restrictions.</li>
      </ul>
      <p>If none of the above resolves the issue, reach out to <a href="/support">customer support</a> via live chat for real-time assistance.</p>
    </div>
  </section>

  <!-- Registration Overview -->
  <section class="content-section" id="register">
    <div class="container container--narrow">
      <h2>Creating a New Account</h2>
      <p>If you do not have a <?php echo SITE_NAME; ?> account yet, registration is quick and takes about a minute. Here is an overview of the process:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Click "Register" on the website.</strong> The registration button is at the top right of the page. A popup will appear where you can choose your preferred welcome bonus (casino, multi-deposit, or sports) or opt out of bonuses entirely.
          </div>
        </li>
        <li>
          <div>
            <strong>Enter your email and create a password.</strong> These will be your login credentials going forward. If you have a promo code, you can enter it at this stage.
          </div>
        </li>
        <li>
          <div>
            <strong>Fill in your personal details.</strong> You will need to provide your full name, date of birth, gender, phone number, and physical address. This information is needed for account verification.
          </div>
        </li>
        <li>
          <div>
            <strong>Complete registration.</strong> Click "Create Profile" to finalize your account. Once done, you can make your first deposit and start playing.
          </div>
        </li>
      </ol>

      <p>After registration, consider uploading your verification documents right away. This speeds up the process when you request your first withdrawal. You can find the document upload section under "Settings - Account Verification" in your profile.</p>
    </div>
  </section>

  <!-- Login FAQ -->
  <section class="content-section content-section--alt" id="login-faq">
    <div class="container container--narrow">
      <h2>Login FAQ</h2>

      <details class="faq-item">
        <summary>What do I need to log in?</summary>
        <div class="faq-answer">
          <p>You need the email address and password you used during registration. If you forgot your password, click "Forgot your password?" on the login form to receive a reset link by email.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Can I use a VPN to access <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>No. <?php echo SITE_NAME; ?> strictly prohibits VPN usage. Logging in through a VPN may result in your account being suspended and any associated winnings forfeited. The casino delivers a country-specific experience tailored to each region.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>My account is locked. What should I do?</summary>
        <div class="faq-answer">
          <p>Account locks can occur for security reasons, such as multiple failed login attempts or suspicious activity. Contact customer support through live chat or email to have your account reviewed and potentially unlocked.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>How do I change my password?</summary>
        <div class="faq-answer">
          <p>Once logged in, go to your account settings to update your password. If you cannot log in, use the password reset function on the login page. A reset link will be sent to your registered email address.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>What information is needed to register?</summary>
        <div class="faq-answer">
          <p>Registration requires your email, a password, full name, date of birth, gender, phone number, country, city, and postal code. This information is used for identity verification and complying with regulatory requirements.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
