<?php
/**
 * Responsible Gambling - VipLuck
 */
$page_title = 'Responsible Gambling - ' . SITE_NAME . ' Casino';
$page_description = 'Responsible gambling information and resources. Find help with gambling problems through GamCare, GambleAware, Gambling Therapy, and Gamblers Anonymous.';
$current_page = 'responsible-gambling';

require_once __DIR__ . '/../includes/header.php';
?>

<main>
  <section class="content-section legal-page">
    <div class="container container--narrow">
      <h1>Responsible Gambling</h1>

      <h2>Our Position</h2>
      <p><?php echo SITE_DOMAIN; ?> is an independent affiliate site. We do not operate a casino, accept bets, or handle customer funds. However, because we link to real-money gambling platforms, we take responsible gambling seriously and want to make sure you have the information and resources you need.</p>

      <h2>Gambling Should Be Fun</h2>
      <p>Gambling is a form of entertainment, not a way to make money. Most players lose over time, and no strategy can guarantee a profit. Before you play, set clear limits on how much time and money you are willing to spend, and stick to them.</p>

      <h2>Self-Assessment</h2>
      <p>Problem gambling can develop gradually. Ask yourself the following questions honestly:</p>
      <ul>
        <li>Are you spending more money on gambling than you can afford to lose?</li>
        <li>Do you borrow money or sell possessions to fund gambling?</li>
        <li>Has gambling caused arguments or strained relationships?</li>
        <li>Do you find it difficult to stop once you start?</li>
        <li>Do you chase losses, trying to win back money you have lost?</li>
        <li>Do you gamble to escape stress, boredom, or negative feelings?</li>
        <li>Have you lied about how much time or money you spend gambling?</li>
        <li>Have you neglected work, studies, or family responsibilities because of gambling?</li>
        <li>Do you feel restless or irritable when trying to cut down on gambling?</li>
        <li>Have you lost interest in hobbies or activities you used to enjoy?</li>
      </ul>
      <p>If you answered yes to several of these, it may be time to seek support.</p>

      <h2>Setting Limits</h2>
      <p>Before you start playing at any online casino, consider setting the following limits:</p>
      <ul>
        <li><strong>Deposit limits</strong> - set a daily, weekly, or monthly cap on how much you can deposit</li>
        <li><strong>Loss limits</strong> - decide the maximum amount you are prepared to lose in a given period</li>
        <li><strong>Time limits</strong> - set a timer or alarm to remind yourself when to stop</li>
        <li><strong>Session reminders</strong> - many casinos offer reality check pop-ups that tell you how long you have been playing</li>
      </ul>
      <p>Most reputable online casinos, including <?php echo SITE_NAME; ?>, provide these tools within your account settings. Use them.</p>

      <h2>Practical Tips</h2>
      <ul>
        <li>Set a budget before you start and do not exceed it</li>
        <li>Set a time limit for each session</li>
        <li>Never gamble with money you need for bills, rent, or essentials</li>
        <li>Do not chase losses</li>
        <li>Do not gamble under the influence of alcohol or drugs</li>
        <li>Take regular breaks</li>
        <li>Keep gambling as entertainment, not a source of income</li>
        <li>Balance gambling with other activities and hobbies</li>
      </ul>

      <h2>Self-Exclusion</h2>
      <p>If you feel you need a break from gambling, most casino operators offer self-exclusion options. At <?php echo SITE_NAME; ?> Casino, you can request to be excluded from the platform for a set period or permanently by contacting their support team. During a self-exclusion period, you will not be able to log in or place bets.</p>
      <p>Make sure to withdraw any available balance before requesting self-exclusion, as access to your account will be restricted during that time.</p>

      <h2>Underage Gambling</h2>
      <p>Gambling is strictly for people aged 18 and over. If you share a device with someone under 18, consider using parental controls or filtering software such as:</p>
      <ul>
        <li><a href="https://www.netnanny.com" target="_blank" rel="noopener noreferrer">Net Nanny</a></li>
        <li><a href="https://www.cyberpatrol.com" target="_blank" rel="noopener noreferrer">CyberPatrol</a></li>
        <li><a href="https://www.gamblock.com" target="_blank" rel="noopener noreferrer">GamBlock</a></li>
      </ul>

      <h2>Where to Get Help</h2>
      <p>If you or someone you know has a gambling problem, the following organisations offer free, confidential support:</p>
      <div class="info-grid">
        <div class="info-card">
          <h4>GamCare</h4>
          <p>Free information, support, and counselling for anyone affected by gambling. Helpline available 24/7.</p>
          <p><a href="https://www.gamcare.org.uk" target="_blank" rel="noopener noreferrer">www.gamcare.org.uk</a><br>Phone: 0808 8020 133</p>
        </div>
        <div class="info-card">
          <h4>GambleAware</h4>
          <p>Provides information and practical advice on gambling harm, including a directory of treatment services.</p>
          <p><a href="https://www.begambleaware.org" target="_blank" rel="noopener noreferrer">www.begambleaware.org</a></p>
        </div>
        <div class="info-card">
          <h4>Gambling Therapy</h4>
          <p>Free online support and counselling for anyone affected by problem gambling worldwide, including live chat and forums.</p>
          <p><a href="https://www.gamblingtherapy.org" target="_blank" rel="noopener noreferrer">www.gamblingtherapy.org</a></p>
        </div>
        <div class="info-card">
          <h4>Gamblers Anonymous</h4>
          <p>A fellowship of men and women who share their experience to help each other recover from a gambling problem. Meetings available worldwide.</p>
          <p><a href="https://www.gamblersanonymous.org" target="_blank" rel="noopener noreferrer">www.gamblersanonymous.org</a></p>
        </div>
      </div>

      <h2>Our Commitment</h2>
      <p>Although we are an affiliate site and not the casino operator, we are committed to promoting responsible gambling. We will never target vulnerable individuals, minors, or people who have self-excluded. If you feel our content is inappropriate or harmful, please contact us at <a href="mailto:info@<?php echo SITE_DOMAIN; ?>">info@<?php echo SITE_DOMAIN; ?></a> or through our <a href="/support">Support</a> page.</p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
