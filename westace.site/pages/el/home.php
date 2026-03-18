<?php
/**
 * Homepage - WestAce (Greek / EL)
 */
$page_title = 'WestAce Casino - 7.000+ Παιχνίδια, Αθλητικό Στοίχημα & Μπόνους Καλωσορίσματος έως 2.000 €';
$page_description = 'Το ' . SITE_NAME . ' Casino προσφέρει 7.000+ παιχνίδια από 100+ παρόχους, πλήρες αθλητικό στοίχημα με ζωντανό στοίχημα, τραπέζια ζωντανού καζίνο και μπόνους καλωσορίσματος 100% έως 1.000 € + 50 Δωρεάν Περιστροφές. Γραφτείτε τώρα και παίξτε.';
$current_page = 'home';
$lang_prefix = '/el';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__badge"><?php echo __('hero_badge', 'Τώρα ανοιχτό - 7.000+ παιχνίδια και ζωντανό αθλητικό στοίχημα'); ?></div>
    <h1>
      <span class="brand-name"><?php echo SITE_NAME; ?></span><br>
      <span class="brand-type">Casino</span>
    </h1>
    <p class="hero__subtitle">Πάνω από 7.000 παιχνίδια από 100+ παρόχους, τραπέζια ζωντανού καζίνο, πλήρες αθλητικό στοίχημα με ζωντανό στοίχημα, και πακέτο καλωσορίσματος που επιβραβεύει τις τρεις πρώτες καταθέσεις σας.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Πακέτο Καλωσορίσματος</div>
      <div class="hero__bonus-value"><?php echo WELCOME_BONUS; ?></div>
      <div class="hero__bonus-extra">1η Κατάθεση: 100% έως 1.000 &euro; + 50 Δωρεάν Περιστροφές &middot; Ελάχ. κατάθεση 20 &euro;</div>
    </div>
    <div class="hero__ctas">
      <a href="/play" class="btn btn--primary btn--lg" rel="nofollow"><?php echo __('cta_play', 'Παίξε Τώρα'); ?></a>
      <a href="<?php echo $lang_prefix; ?>/bonuses" class="btn btn--outline btn--lg">Δείτε τα Μπόνους</a>
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
      <h2>Καλώς Ήρθατε στο <?php echo SITE_NAME; ?> Casino</h2>
      <p>Το <?php echo SITE_NAME; ?> είναι ένα online καζίνο και αθλητικό στοίχημα που ξεκίνησε το 2026. Η πλατφόρμα συγκεντρώνει πάνω από 7.000 παιχνίδια από 100+ παρόχους, που καλύπτουν φρουτάκια, ζωντανό καζίνο, επιτραπέζια παιχνίδια, crash games, τίτλους τζάκποτ και game shows. Εκτός από το καζίνο, προσφέρουμε πλήρες αθλητικό στοίχημα με προ-αγώνα και ζωντανό στοίχημα, εικονικά αθλήματα και ιπποδρομίες. Οι νέοι παίκτες μπορούν να διεκδικήσουν ένα πακέτο καλωσορίσματος τριών καταθέσεων αξίας έως 2.000 &euro; + 150 Δωρεάν Περιστροφές.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Έναρξη</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Παιχνίδια</th><td>7.000+ (φρουτάκια, επιτραπέζια, ζωντανό καζίνο, crash games, τζάκποτ, game shows)</td></tr>
        <tr><th>Πάροχοι</th><td>100+ (Pragmatic Play, Playtech, Novomatic, Red Tiger, Yggdrasil, BGaming, Hacksaw Gaming και άλλοι)</td></tr>
        <tr><th>Μπόνους Καλωσορίσματος</th><td><?php echo WELCOME_BONUS_TEXT; ?></td></tr>
        <tr><th>Ελάχ. Κατάθεση</th><td>10 &euro;</td></tr>
        <tr><th>Νόμισμα</th><td>EUR</td></tr>
        <tr><th>Υποστήριξη</th><td>24/7 ζωντανή συνομιλία + email</td></tr>
        <tr><th>Αθλητικό Στοίχημα</th><td>Ναι (αθλήματα, ζωντανό στοίχημα, εικονικά αθλήματα, ιπποδρομίες)</td></tr>
        <tr><th>Κινητό</th><td>Πλήρως responsive, χωρίς εφαρμογή</td></tr>
      </table>

      <h3>Γιατί οι Παίκτες Επιλέγουν το <?php echo SITE_NAME; ?></h3>
      <ul class="check-list">
        <li>Πάνω από 7.000 παιχνίδια από 100+ αδειοδοτημένους παρόχους</li>
        <li>Πακέτο καλωσορίσματος τριών καταθέσεων έως 2.000 &euro; + 150 Δωρεάν Περιστροφές</li>
        <li>Πλήρες αθλητικό στοίχημα με ζωντανό στοίχημα, εικονικά αθλήματα και ιπποδρομίες</li>
        <li>Ζωντανό καζίνο με ρουλέτα, μπλάκτζακ, μπακαρά, ζάρια και πόκερ</li>
        <li>Ημερήσια επιστροφή μετρητών έως 15% με μόνο 1x απαίτηση στοιχηματισμού</li>
        <li>5-επίπεδο πρόγραμμα VIP με προσωπικό διαχειριστή και υψηλότερα όρια</li>
        <li>Φιλικό προς κρυπτονομίσματα με ξεχωριστό μπόνους καλωσορίσματος και προσφορές επαναφόρτισης</li>
        <li>Υποστήριξη 24/7 μέσω ζωντανής συνομιλίας και email</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Παιχνίδια Καζίνο</h4>
          <p>Χιλιάδες φρουτάκια, παραλλαγές μπλάκτζακ και ρουλέτας, πόκερ, μπακαρά, crash games και τραπέζια ζωντανού καζίνο από στούντιο όπως Pragmatic Play, Playtech, Novomatic, Red Tiger και Yggdrasil.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127183;</div>
          <h4>Ζωντανό Καζίνο</h4>
          <p>Παιχνίδια με ζωντανούς ντίλερ, συμπεριλαμβανομένων ρουλέτας, μπλάκτζακ, μπακαρά, ζαριών και πόκερ. Πραγματικοί κρουπιέρηδες σε live streaming HD από επαγγελματικά στούντιο όλο το εικοσιτετράωρο.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Αθλητικό Στοίχημα</h4>
          <p>Πλήρης πλατφόρμα αθλητικού στοιχήματος με αγορές προ-αγώνα και ζωντανού στοιχήματος. Εικονικά αθλήματα και ιπποδρομίες συμπληρώνουν την προσφορά για τους λάτρεις του αθλητισμού.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Social Proof / Recent Winners -->
  <section class="content-section winners-section" id="winners">
    <div class="container">
      <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--space-4);margin-bottom:var(--space-2)">
        <h2 style="margin-bottom:0">Πρόσφατοι Νικητές</h2>
        <span class="live-dot">Live</span>
      </div>
      <div class="jackpot-label">Τρέχον Τζάκποτ</div>
      <div class="jackpot-amount" id="jackpotCounter">&euro;2.847.391</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Δημοφιλή Παιχνίδια στο <?php echo SITE_NAME; ?></h2>
      <p>Περιηγηθείτε σε μερικούς από τους πιο δημοφιλείς τίτλους στο καζίνο. Από φρουτάκια υψηλής διακύμανσης μέχρι κλασικά επιτραπέζια παιχνίδια, αίθουσες ζωντανού καζίνο και αγορές αθλητικού στοιχήματος, υπάρχει κάτι για κάθε τύπο παίκτη.</p>

      <div class="game-tabs">
        <button class="game-tab active">Όλα τα Παιχνίδια</button>
        <button class="game-tab">Φρουτάκια</button>
        <button class="game-tab">Ζωντανό Καζίνο</button>
        <button class="game-tab">Επιτραπέζια</button>
        <button class="game-tab">Crash Games</button>
        <button class="game-tab">Τζάκποτ</button>
        <button class="game-tab">Αθλητικά</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Κορυφαίοι Πάροχοι Παιχνιδιών</h3>
          <p>Ο κατάλογος παιχνιδιών μας τροφοδοτείται από ένα ευρύ μίγμα στούντιο, από ηγέτες του κλάδου έως πολλά υποσχόμενους ανεξάρτητους προγραμματιστές:</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">100+ συνολικά</span>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-games-screen.png" alt="Λόμπι παιχνιδιών <?php echo SITE_NAME; ?> Casino με κορυφαία φρουτάκια από παρόχους όπως Pragmatic Play, Playtech και Novomatic" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section" id="payments">
    <div class="container">
      <h2>Μέθοδοι Πληρωμής</h2>
      <p>Το <?php echo SITE_NAME; ?> υποστηρίζει μια σειρά μεθόδων πληρωμής, συμπεριλαμβανομένων πιστωτικών καρτών, προπληρωμένων καρτών, ηλεκτρονικών πορτοφολιών και κρυπτονομισμάτων. Οι καταθέσεις ξεκινούν από 10 &euro; και όλες οι καταθέσεις και αναλήψεις γίνονται χωρίς χρεώσεις.</p>

      <table class="quick-table">
        <tr><th>Μέθοδοι Κατάθεσης</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Ελάχ. Κατάθεση</th><td>10 &euro;</td></tr>
        <tr><th>Ελάχ. Ανάληψη</th><td>10 &euro;</td></tr>
        <tr><th>Μέγ. Ανάληψη</th><td>500 &euro;/ημέρα, 7.000 &euro;/μήνα</td></tr>
        <tr><th>Χρόνος Πληρωμής</th><td>24-72 ώρες</td></tr>
        <tr><th>Νόμισμα</th><td>EUR</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">Για αναλυτική επισκόπηση των μεθόδων ανάληψης, ορίων, χρεώσεων και συμβουλών για ταχύτερη πληρωμή, επισκεφθείτε τη <a href="<?php echo $lang_prefix; ?>/withdrawal">σελίδα Αναλήψεων</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section content-section--alt" id="mobile">
    <div class="container">
      <h2>Καζίνο Κινητού</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p>Το <?php echo SITE_NAME; ?> δεν διαθέτει αποκλειστική εφαρμογή κινητού, αλλά η ιστοσελίδα είναι πλήρως συμβατή με όλα τα smartphones και tablets. Η πλατφόρμα μέσω προγράμματος περιήγησης παρέχει τα ίδια χαρακτηριστικά, παιχνίδια και εργαλεία διαχείρισης λογαριασμού που θα βρίσκατε στην έκδοση για υπολογιστή. Δεν χρειάζεται λήψη -- απλά ανοίξτε τον browser στο κινητό σας, συνδεθείτε και παίξτε.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/westace-mobile.png" alt="Λόμπι <?php echo SITE_NAME; ?> Casino σε κινητό με μπόνους καλωσορίσματος και πλοήγηση παιχνιδιών" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>
      <ul class="check-list">
        <li>Πλήρης βιβλιοθήκη παιχνιδιών προσβάσιμη σε browsers κινητών</li>
        <li>Τραπέζια ζωντανού καζίνο και αθλητικό στοίχημα εν κινήσει</li>
        <li>Κατάθεση και ανάληψη απευθείας από το τηλέφωνό σας</li>
        <li>Υποστήριξη μέσω ζωντανής συνομιλίας διαθέσιμη σε κινητό</li>
        <li>Χωρίς λήψη εφαρμογής -- λειτουργεί σε iOS και Android</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section" id="faq">
    <div class="container container--narrow">
      <h2>Συχνές Ερωτήσεις</h2>

      <details class="faq-item">
        <summary>Τι είδους παιχνίδια μπορώ να παίξω στο <?php echo SITE_NAME; ?> Casino;</summary>
        <div class="faq-answer">
          <p>Το <?php echo SITE_NAME; ?> συνεργάζεται με 100+ παρόχους όπως Pragmatic Play, Playtech, Novomatic, Red Tiger, Yggdrasil, BGaming, Hacksaw Gaming και Quickspin. Μπορείτε να παίξετε βιντεοφρουτάκια, φρουτάκια τζάκποτ, μπλάκτζακ, ρουλέτα, μπακαρά, πόκερ, crash games, game shows και τίτλους ζωντανού καζίνο. Υπάρχει επίσης πλήρες αθλητικό στοίχημα με ζωντανό στοίχημα, εικονικά αθλήματα και ιπποδρομίες.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Ποιο είναι το μπόνους καλωσορίσματος στο <?php echo SITE_NAME; ?> Casino;</summary>
        <div class="faq-answer">
          <p>Οι νέοι παίκτες λαμβάνουν ένα πακέτο καλωσορίσματος τριών καταθέσεων: 100% έως 1.000 &euro; + 50 Δωρεάν Περιστροφές στην πρώτη κατάθεση, 100% έως 500 &euro; + 50 ΔΠ στη δεύτερη και 100% έως 500 &euro; + 50 ΔΠ στην τρίτη. Συνολική αξία: έως 2.000 &euro; + 150 Δωρεάν Περιστροφές. Η ελάχιστη κατάθεση είναι 20 &euro; ανά βαθμίδα. Η απαίτηση στοιχηματισμού είναι 35x (μπόνους + κατάθεση).</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Πόσο γρήγορα γίνονται οι αναλήψεις;</summary>
        <div class="faq-answer">
          <p>Οι αναλήψεις επεξεργάζονται εντός 24 έως 72 ωρών. Η ελάχιστη ανάληψη είναι 10 &euro; για όλες τις μεθόδους πληρωμής. Το ημερήσιο όριο ανάληψης είναι 500 &euro; και το μηνιαίο όριο είναι 7.000 &euro;. Δεν χρεώνονται προμήθειες στις αναλήψεις.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Έχει το <?php echo SITE_NAME; ?> πρόγραμμα VIP;</summary>
        <div class="faq-answer">
          <p>Ναι. Το <?php echo SITE_NAME; ?> διαθέτει πρόγραμμα VIP 5 επιπέδων. Τα οφέλη περιλαμβάνουν υψηλότερα ποσοστά επιστροφής μετρητών (έως 15%), αυξημένα όρια ανάληψης, προτεραιότητα στην επεξεργασία, εξατομικευμένες προσφορές και προσωπικό VIP manager στα ανώτερα επίπεδα. Τα κριτήρια για την ανέλιξη μεταξύ επιπέδων δεν δημοσιοποιούνται.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Μπορώ να παίξω από το κινητό μου;</summary>
        <div class="faq-answer">
          <p>Το <?php echo SITE_NAME; ?> δεν διαθέτει εφαρμογή κινητού, αλλά η ιστοσελίδα είναι πλήρως φιλική προς κινητά. Μπορείτε να έχετε πρόσβαση σε όλα τα παιχνίδια, το αθλητικό στοίχημα και τις λειτουργίες λογαριασμού μέσω οποιουδήποτε σύγχρονου browser σε smartphone ή tablet.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Πώς μπορώ να επικοινωνήσω με την υποστήριξη πελατών;</summary>
        <div class="faq-answer">
          <p>Μπορείτε να επικοινωνήσετε με την ομάδα υποστήριξης μέσω 24/7 ζωντανής συνομιλίας απευθείας στην ιστοσελίδα, ή μέσω email στο support@westace.com. Για περισσότερες λεπτομέρειες, επισκεφθείτε τη <a href="<?php echo $lang_prefix; ?>/support">σελίδα Υποστήριξης</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
