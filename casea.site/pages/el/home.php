<?php
/**
 * Homepage - Greek
 */
$page_title = SITE_NAME . ' Casino - Online Καζίνο, Αθλητικά Στοιχήματα & Παιχνίδια με Live Dealer';
$page_description = SITE_NAME . ' Casino προσφέρει 10.000+ παιχνίδια καζίνο, live dealer, αθλητικά στοιχήματα σε 30+ αθλήματα και μπόνους καλωσορίσματος έως EUR 500 συν 200 δωρεάν περιστροφές. Γράψου τώρα και παίξε.';
$current_page = 'home';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__badge">Τώρα ανοιχτό - δεχόμαστε παίκτες από όλο τον κόσμο</div>
    <h1>
      <span class="brand-name"><?php echo SITE_NAME; ?></span><br>
      <span class="brand-type">Casino</span>
    </h1>
    <p class="hero__subtitle">Πάνω από 10.000 παιχνίδια από 90+ παρόχους, πλήρες αθλητικό στοίχημα σε 30+ αθλήματα, τραπέζια live dealer και ανταμοιβές που πραγματικά αξίζουν.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Πακέτο Καλωσορίσματος</div>
      <div class="hero__bonus-value"><?php echo WELCOME_BONUS; ?></div>
      <div class="hero__bonus-extra">Αθλητικό Μπόνους: 100% έως &euro;100 &middot; Ελάχιστη κατάθεση &euro;20</div>
    </div>
    <div class="hero__ctas">
      <a href="/play" class="btn btn--primary btn--lg" rel="nofollow"><?php echo CTA_LABEL; ?></a>
      <a href="/bonuses" class="btn btn--outline btn--lg">Δες τα Μπόνους</a>
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
      <h2>Καλώς ήρθες στο <?php echo SITE_NAME; ?> Casino</h2>
      <p>Το <?php echo SITE_NAME; ?> είναι μια σύγχρονη πλατφόρμα online τυχερών παιχνιδιών όπου οι παίκτες μπορούν να εξερευνήσουν χιλιάδες επιλογές στοιχημάτων σε ένα μέρος. Με κατάλογο πάνω από 10.000 προϊόντα που περιλαμβάνουν slots, mini-games, εικονικά παιχνίδια καρτών και τραπεζιού, καθώς και μια επιλογή live dealer lobbies, δεν υπάρχει βαρετή στιγμή. Στο τμήμα αθλητικών στοιχημάτων, οι ανταγωνιστικές αποδόσεις σε πάνω από 30 αθλήματα κρατούν τους φίλους του ποδοσφαίρου, μπάσκετ, τένις και esports σε αγωνία.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Έναρξη</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Παιχνίδια</th><td>10.000+ (slots, επιτραπέζια, live casino, instant games)</td></tr>
        <tr><th>Πάροχοι</th><td>90+ (Pragmatic Play, Evolution, Microgaming, NetEnt, Playtech και άλλοι)</td></tr>
        <tr><th>Αθλήματα</th><td>30+ αθλήματα, esports, virtual sports</td></tr>
        <tr><th>Μπόνους Καλωσορίσματος</th><td><?php echo WELCOME_BONUS_TEXT; ?></td></tr>
        <tr><th>Ελάχιστη Κατάθεση</th><td>EUR 10 (EUR 20 για τα περισσότερα μπόνους)</td></tr>
        <tr><th>Νομίσματα</th><td>EUR, USD, CAD, AUD, CHF, HUF, NOK, PLN, NZD, CZK, BRL, CLP, PEN</td></tr>
        <tr><th>Υποστήριξη</th><td>24/7 live chat και email</td></tr>
        <tr><th>Κινητό</th><td>Πλήρως responsive, δεν χρειάζεται εφαρμογή</td></tr>
      </table>

      <h3>Γιατί οι παίκτες επιλέγουν το <?php echo SITE_NAME; ?></h3>
      <ul class="check-list">
        <li>Πάνω από 10.000 παιχνίδια από 90+ αξιόπιστους παρόχους</li>
        <li>Πλήρες αθλητικό στοίχημα με pre-match και live στοιχηματισμό σε 30+ αθλήματα</li>
        <li>Πολλαπλές επιλογές μπόνους καλωσορίσματος για καζίνο και αθλητικά</li>
        <li>Εβδομαδιαία reload μπόνους, προσφορές cashback και κατάστημα πιστότητας</li>
        <li>Πρόγραμμα VIP με προσωπικό account manager και υψηλότερα όρια ανάληψης</li>
        <li>Πληρωμές μέσω Visa, Mastercard, Skrill, κρυπτονομισμάτων και άλλων</li>
        <li>Εξυπηρέτηση πελατών 24/7 μέσω live chat και email</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Παιχνίδια Καζίνο</h4>
          <p>Χιλιάδες slots, παραλλαγές blackjack και roulette, poker, baccarat, game shows, instant games και τραπέζια live dealer από κορυφαία στούντιο.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Αθλητικά Στοιχήματα</h4>
          <p>Pre-match και live στοιχηματισμός σε μεγάλα πρωταθλήματα όπως UEFA Champions League, NBA, NHL και τουρνουά Grand Slam. Διαθέσιμα επίσης virtual sports και esports.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127873;</div>
          <h4>Προσφορές</h4>
          <p>Μπόνους καλωσορίσματος, εβδομαδιαίες reload προσφορές, πολλαπλά προγράμματα cashback, κατάστημα πιστότητας, challenges και ειδικές προσφορές καθ' όλη τη βδομάδα.</p>
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
      <div class="jackpot-label">Τρέχον Jackpot Pool</div>
      <div class="jackpot-amount" id="jackpotCounter">&euro;2,847,391</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Δημοφιλή Παιχνίδια στο <?php echo SITE_NAME; ?></h2>
      <p>Ανακάλυψε μερικούς από τους πιο δημοφιλείς τίτλους στο καζίνο. Από slots υψηλής μεταβλητότητας μέχρι κλασικά επιτραπέζια παιχνίδια και εμπειρίες live dealer – υπάρχει κάτι για κάθε τύπο παίκτη.</p>

      <div class="game-tabs">
        <button class="game-tab active">Όλα τα Παιχνίδια</button>
        <button class="game-tab">Slots</button>
        <button class="game-tab">Live Casino</button>
        <button class="game-tab">Επιτραπέζια</button>
        <button class="game-tab">Game Shows</button>
        <button class="game-tab">Crash Games</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Κορυφαίοι Πάροχοι Παιχνιδιών</h3>
          <p>Ο κατάλογος τροφοδοτείται από ένα ευρύ μείγμα στούντιο, από ηγέτες της αγοράς μέχρι πολλά υποσχόμενους ανεξάρτητους developers:</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">90+ ακόμα</span>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/casea-games.png" alt="<?php echo SITE_NAME; ?> Casino lobby παιχνιδιών με κορυφαία slots και παρόχους" style="max-width:300px;width:100%;">
        </div>
      </div>
    </div>
  </section>

  <!-- Sportsbook -->
  <section class="content-section" id="sports">
    <div class="container">
      <h2>Αθλητικά Στοιχήματα</h2>
      <div class="two-col">
        <div>
          <p>Το τμήμα αθλητικών στοιχημάτων στο <?php echo SITE_NAME; ?> καλύπτει pre-match και live στοιχηματισμό σε αγώνες τόσο μεγάλων όσο και μικρότερων διοργανώσεων. Οι φίλοι του ποδοσφαίρου μπορούν να ποντάρουν σε τα πάντα, από το UEFA Champions League μέχρι κατώτερες κατηγορίες, ενώ μπάσκετ, τένις, χόκεϊ και δεκάδες ακόμα αθλήματα συμπληρώνουν το πρόγραμμα.</p>
          <p>Virtual sports όπως ποδόσφαιρο, μπάσκετ και κυνοδρομίες είναι διαθέσιμα όλο το 24ωρο. Τα esports στοιχήματα καλύπτουν Dota 2, Counter-Strike, League of Legends, Call of Duty και άλλους δημοφιλείς τίτλους.</p>

          <h3>Διαθέσιμα Αθλήματα</h3>
          <ul class="check-list">
            <li>Ποδόσφαιρο (UEFA Champions League, Premier League, Bundesliga, Serie A, La Liga)</li>
            <li>Μπάσκετ (NBA, EuroLeague, εθνικά πρωταθλήματα)</li>
            <li>Τένις (Grand Slam, ATP, WTA)</li>
            <li>Χόκεϊ επί Πάγου (NHL, KHL, SHL)</li>
            <li>Esports (Dota 2, CS2, League of Legends, Call of Duty)</li>
            <li>Virtual sports, ιπποδρομίες και 25+ ακόμα</li>
          </ul>
        </div>
        <div>
          <div class="highlight-box">
            <h4>Αθλητικό Μπόνους Καλωσορίσματος</h4>
            <p>Οι νέοι παίκτες μπορούν να διεκδικήσουν 100% match στην πρώτη τους αθλητική κατάθεση, έως EUR 100. Παίκτες από Φινλανδία, Γερμανία, Νορβηγία, Ελβετία και Αυστρία δικαιούνται έως EUR 200. Το μπόνους απαιτεί ελάχιστη κατάθεση EUR 20 και απαίτηση στοιχηματισμού 5x ή 6x ανάλογα με τη χώρα σου.</p>
          </div>
          <table class="quick-table" style="margin-top: var(--space-6);">
            <tr><th>Τύποι Στοιχήματος</th><td>Pre-match, live, outrights, παρολί</td></tr>
            <tr><th>Αθλήματα</th><td>30+ συμπεριλαμβανομένων esports και virtuals</td></tr>
            <tr><th>Χαρακτηριστικά</th><td>Accumulator boost, πρόωρη πληρωμή, ενισχυμένες αποδόσεις</td></tr>
            <tr><th>Cashback</th><td>10% εβδομαδιαία έως EUR 500</td></tr>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section content-section--alt" id="payments">
    <div class="container">
      <h2>Μέθοδοι Πληρωμής</h2>
      <p>Το <?php echo SITE_NAME; ?> υποστηρίζει αρκετές δημοφιλείς επιλογές πληρωμής. Η διαθεσιμότητα εξαρτάται από τη χώρα σου και οι καταθέσεις ξεκινούν από μόλις EUR 10.</p>

      <table class="quick-table">
        <tr><th>Μέθοδοι Κατάθεσης</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Ελάχιστη Κατάθεση</th><td>EUR 10 (EUR 20 για τα περισσότερα μπόνους)</td></tr>
        <tr><th>Ελάχιστη Ανάληψη</th><td>EUR 10</td></tr>
        <tr><th>Μέγιστη Ανάληψη (Ημερήσια)</th><td>EUR 500 (VIP: EUR 1,500)</td></tr>
        <tr><th>Μέγιστη Ανάληψη (Μηνιαία)</th><td>EUR 7,000 (VIP: EUR 20,000)</td></tr>
        <tr><th>Χρόνος Επεξεργασίας</th><td>Έως 72 ώρες (e-wallets και crypto είναι τα ταχύτερα)</td></tr>
        <tr><th>Νομίσματα</th><td>EUR, USD, CAD, AUD, CHF, HUF, NOK, PLN, NZD, CZK, BRL, CLP, PEN</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">Για αναλυτική περιγραφή μεθόδων ανάληψης, ορίων, χρεώσεων και συμβουλών για ταχύτερη πληρωμή, επισκέψου τη σελίδα <a href="/withdrawal">Αναλήψεων</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section" id="mobile">
    <div class="container">
      <h2>Καζίνο στο Κινητό</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p>Το <?php echo SITE_NAME; ?> δεν διαθέτει αποκλειστική εφαρμογή κινητού, αλλά ο ιστότοπος είναι πλήρως συμβατός με όλα τα smartphones και tablets. Η πλατφόρμα μέσω browser προσφέρει τα ίδια χαρακτηριστικά, παιχνίδια και εργαλεία διαχείρισης λογαριασμού που θα βρεις στην έκδοση desktop. Δεν χρειάζεται κατέβασμα – απλά άνοιξε τον browser στο κινητό σου, κάνε σύνδεση και παίξε.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/casea-mobile.png" alt="<?php echo SITE_NAME; ?> Casino στο κινητό" style="max-width:320px;width:100%;">
        </div>
      </div>
      <ul class="check-list">
        <li>Πλήρης βιβλιοθήκη παιχνιδιών προσβάσιμη μέσω mobile browser</li>
        <li>Αθλητικά στοιχήματα με live αγορές</li>
        <li>Κατάθεση και ανάληψη απευθείας από το κινητό σου</li>
        <li>Live chat υποστήριξη διαθέσιμη και στο κινητό</li>
        <li>Δεν χρειάζεται λήψη εφαρμογής – λειτουργεί σε iOS και Android</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section content-section--alt" id="faq">
    <div class="container container--narrow">
      <h2>Συχνές Ερωτήσεις</h2>

      <details class="faq-item">
        <summary>Τι παιχνίδια μπορώ να παίξω στο <?php echo SITE_NAME; ?> Casino;</summary>
        <div class="faq-answer">
          <p>Το <?php echo SITE_NAME; ?> συνεργάζεται με πάνω από 90 παρόχους, συμπεριλαμβανομένων των Pragmatic Play, Evolution, Microgaming και Red Tiger. Μπορείς να παίξεις video slots, jackpot slots, τίτλους Megaways, παραλλαγές blackjack, roulette, baccarat, poker, game shows, crash games και πολλά ακόμα. Τα αθλητικά στοιχήματα καλύπτουν 30+ αθλήματα με pre-match και live επιλογές.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Ποιο είναι το μπόνους καλωσορίσματος στο <?php echo SITE_NAME; ?> Casino;</summary>
        <div class="faq-answer">
          <p>Οι νέοι παίκτες καζίνο μπορούν να διεκδικήσουν ένα μπόνους καλωσορίσματος 100% έως EUR 500 συν 200 δωρεάν περιστροφές στην πρώτη τους κατάθεση. Οι παίκτες αθλητικών στοιχημάτων δικαιούνται 100% match έως EUR 100 (ή EUR 200 ανάλογα με τη χώρα). Η ελάχιστη κατάθεση είναι EUR 20.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Ποιο είναι το μέγιστο ποσό ανάληψης στο <?php echo SITE_NAME; ?> Casino;</summary>
        <div class="faq-answer">
          <p>Οι κανονικοί παίκτες μπορούν να κάνουν ανάληψη έως EUR 500 ημερησίως και EUR 7,000 μηνιαίως. Τα μέλη VIP έχουν πρόσβαση σε υψηλότερα όρια – έως EUR 1,500 ημερησίως και EUR 20,000 μηνιαίως. Η ελάχιστη ανάληψη είναι EUR 10.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Έχει το <?php echo SITE_NAME; ?> πρόγραμμα VIP;</summary>
        <div class="faq-answer">
          <p>Ναι. Το <?php echo SITE_NAME; ?> διαθέτει πρόγραμμα VIP βασισμένο στην πιστότητα, όπου η κατάταξή σου αυξάνεται καθώς παίζεις. Τα οφέλη περιλαμβάνουν προσωπικό account manager, υψηλότερα όρια ανάληψης, αποκλειστικές προσφορές και εβδομαδιαίες προσφορές cashback που κλιμακώνονται με το επίπεδό σου.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Μπορώ να παίξω από το κινητό μου;</summary>
        <div class="faq-answer">
          <p>Το <?php echo SITE_NAME; ?> δεν διαθέτει εφαρμογή κινητού, αλλά ο ιστότοπος είναι πλήρως φιλικός προς κινητά. Μπορείς να έχεις πρόσβαση σε όλα τα παιχνίδια, τα αθλητικά στοιχήματα και τις λειτουργίες λογαριασμού μέσω οποιουδήποτε σύγχρονου browser σε smartphone ή tablet.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Πώς μπορώ να επικοινωνήσω με την υποστήριξη πελατών;</summary>
        <div class="faq-answer">
          <p>Μπορείς να επικοινωνήσεις με την ομάδα υποστήριξης μέσω live chat ή email όλο το 24ωρο. Το live chat είναι διαθέσιμο απευθείας στον ιστότοπο για γρήγορες απαντήσεις. Για περισσότερες λεπτομέρειες, επισκέψου τη σελίδα <a href="/support">Υποστήριξης</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
