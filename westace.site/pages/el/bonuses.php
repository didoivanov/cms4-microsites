<?php
/**
 * Bonuses Page - WestAce (Greek / EL)
 */
$page_title = 'WestAce Μπόνους - Πακέτο Καλωσορίσματος έως 2.000 € + 150 Δωρεάν Περιστροφές';
$page_description = 'Όλα τα μπόνους του ' . SITE_NAME . ' Casino σε μία σελίδα. Πακέτο καλωσορίσματος έως 2.000 € + 150 Δωρεάν Περιστροφές σε 3 καταθέσεις, μπόνους crypto, εβδομαδιαίες επαναφορτίσεις, ημερήσια επιστροφή μετρητών, επιστροφή ζωντανού καζίνο, πρόγραμμα VIP και πολλά ακόμα.';
$current_page = 'bonuses';
$lang_prefix = '/el';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Casino Μπόνους';
$hero_description = 'Κάθε ενεργή προσφορά, μπόνους καλωσορίσματος και ανταμοιβή πιστότητας που είναι αυτή τη στιγμή διαθέσιμη. Διαβάστε τους όρους πριν διεκδικήσετε οποιαδήποτε προσφορά.';
$hero_cta = 'Διεκδικήστε το Μπόνους σας';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Welcome Casino Package -->
  <section class="content-section" id="welcome">
    <div class="container">
      <h2>Πακέτο Καλωσορίσματος για Νέους Παίκτες</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Οι νέοι παίκτες στο <?php echo SITE_NAME; ?> μπορούν να διεκδικήσουν ένα πακέτο καλωσορίσματος τριών καταθέσεων με συνολική αξία έως 2.000 &euro; + 150 Δωρεάν Περιστροφές. Κάθε κατάθεση συνοδεύεται από 100% μπόνους αντιστοίχισης και 50 Δωρεάν Περιστροφές. Η ελάχιστη κατάθεση είναι 20 &euro; ανά βαθμίδα. Δεν χρειάζεται κωδικός προσφοράς -- απλά επισκεφθείτε το ταμείο, επιλέξτε την προσφορά και πραγματοποιήστε την κατάθεσή σας.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-bonuses-screen.png" alt="Σελίδα προσφορών <?php echo SITE_NAME; ?> Casino με μπόνους καλωσορίσματος και ενεργές προσφορές" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <!-- Casino Welcome - Deposit 1 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">1η Κατάθεση: 100% έως 1.000 &euro; + 50 Δωρεάν Περιστροφές</div>
          <span class="bonus-card__tag">Καζίνο</span>
        </div>
        <p>Κάντε την πρώτη σας κατάθεση τουλάχιστον 20 &euro; και λάβετε 100% μπόνους αντιστοίχισης έως 1.000 &euro;. Επιπλέον, 50 Δωρεάν Περιστροφές πιστώνονται σε ένα επιλεγμένο φρουτάκι. Η απαίτηση στοιχηματισμού είναι 35x στο ποσό μπόνους + κατάθεσης. Τα κέρδη από τις Δωρεάν Περιστροφές έχουν ξεχωριστή απαίτηση στοιχηματισμού 40x.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Ελάχ. Κατάθεση</div>
            <div class="bonus-detail__value">20 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Στοιχηματισμός</div>
            <div class="bonus-detail__value">35x (Μ+Κ)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Στοιχ. ΔΠ</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Δωρεάν Περ.</div>
            <div class="bonus-detail__value">50 ΔΠ</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome - Deposit 2 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2η Κατάθεση: 100% έως 500 &euro; + 50 Δωρεάν Περιστροφές</div>
          <span class="bonus-card__tag">Καζίνο</span>
        </div>
        <p>Η δεύτερη κατάθεσή σας δικαιούται 100% μπόνους αντιστοίχισης έως 500 &euro;, συν άλλες 50 Δωρεάν Περιστροφές. Ισχύουν οι ίδιες απαιτήσεις στοιχηματισμού με το μπόνους πρώτης κατάθεσης.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Ελάχ. Κατάθεση</div>
            <div class="bonus-detail__value">20 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Στοιχηματισμός</div>
            <div class="bonus-detail__value">35x (Μ+Κ)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Στοιχ. ΔΠ</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Δωρεάν Περ.</div>
            <div class="bonus-detail__value">50 ΔΠ</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome - Deposit 3 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">3η Κατάθεση: 100% έως 500 &euro; + 50 Δωρεάν Περιστροφές</div>
          <span class="bonus-card__tag">Καζίνο</span>
        </div>
        <p>Η τρίτη κατάθεση αποφέρει 100% μπόνους αντιστοίχισης έως 500 &euro; και 50 Δωρεάν Περιστροφές. Αυτό ολοκληρώνει το πακέτο καλωσορίσματος με συνολική αξία 2.000 &euro; σε μπόνους και 150 Δωρεάν Περιστροφές στις τρεις πρώτες καταθέσεις σας.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Ελάχ. Κατάθεση</div>
            <div class="bonus-detail__value">20 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Στοιχηματισμός</div>
            <div class="bonus-detail__value">35x (Μ+Κ)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Στοιχ. ΔΠ</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Δωρεάν Περ.</div>
            <div class="bonus-detail__value">50 ΔΠ</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Crypto Welcome -->
  <section class="content-section content-section--alt" id="crypto-welcome">
    <div class="container">
      <h2>Μπόνους Καλωσορίσματος Crypto</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Crypto: 200% έως 3.000 USDT</div>
          <span class="bonus-card__tag">Crypto</span>
        </div>
        <p>Αν προτιμάτε να καταθέσετε με κρυπτονόμισμα, έχουμε μια ξεχωριστή προσφορά καλωσορίσματος για εσάς. Κάντε μια πρώτη κατάθεση crypto τουλάχιστον 100 USDT και λάβετε 200% μπόνους αντιστοίχισης έως 3.000 USDT. Η απαίτηση στοιχηματισμού είναι 40x στο ποσό του μπόνους.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Ελάχ. Κατάθεση</div>
            <div class="bonus-detail__value">100 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Στοιχηματισμός</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Μέγ. Μπόνους</div>
            <div class="bonus-detail__value">3.000 USDT</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Weekly Reload -->
  <section class="content-section" id="weekly-reload">
    <div class="container">
      <h2>Εβδομαδιαία Επαναφόρτιση</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Εβδομαδιαία Επαναφόρτιση: 70 Δωρεάν Περιστροφές</div>
          <span class="bonus-card__tag">Δευ-Πεμ</span>
        </div>
        <p>Κάθε εβδομάδα από Δευτέρα έως Πέμπτη, κάντε μια κατάθεση τουλάχιστον 20 &euro; και λάβετε 70 Δωρεάν Περιστροφές σε ένα επιλεγμένο φρουτάκι. Τα κέρδη από τις Δωρεάν Περιστροφές έχουν απαίτηση στοιχηματισμού 40x και πρέπει να χρησιμοποιηθούν εντός 10 ημερών.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Ελάχ. Κατάθεση</div>
            <div class="bonus-detail__value">20 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Δωρεάν Περ.</div>
            <div class="bonus-detail__value">70 ΔΠ</div>
          </div>
          <div>
            <div class="bonus-detail__label">Στοιχηματισμός</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Λήξη</div>
            <div class="bonus-detail__value">10 ημέρες</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Weekend Reload -->
  <section class="content-section content-section--alt" id="weekend-reload">
    <div class="container">
      <h2>Μπόνους Επαναφόρτισης Σαββατοκύριακου</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Σαββατοκύριακο: 50% έως 500 &euro; + 70 Δωρεάν Περιστροφές</div>
          <span class="bonus-card__tag">Σ/Κ</span>
        </div>
        <p>Ξεκινήστε το Σαββατοκύριακο με 50% μπόνους αντιστοίχισης έως 500 &euro;. Αν η κατάθεσή σας είναι 50 &euro; ή περισσότερα, λαμβάνετε επίσης 70 Δωρεάν Περιστροφές. Καταθέσεις κάτω από 50 &euro; δικαιούνται το 50% μπόνους αντιστοίχισης, αλλά χωρίς τις Δωρεάν Περιστροφές. Η απαίτηση στοιχηματισμού είναι 35x στο ποσό του μπόνους.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Ελάχ. Κατάθεση</div>
            <div class="bonus-detail__value">20 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Ελάχ. Κατ. ΔΠ</div>
            <div class="bonus-detail__value">50 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Στοιχηματισμός</div>
            <div class="bonus-detail__value">35x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Δωρεάν Περ.</div>
            <div class="bonus-detail__value">70 ΔΠ</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Crypto Reloads -->
  <section class="content-section" id="crypto-reloads">
    <div class="container">
      <h2>Μπόνους Επαναφόρτισης Crypto</h2>
      <p>Οι παίκτες που καταθέτουν με κρυπτονόμισμα έχουν πρόσβαση σε αποκλειστικές εβδομαδιαίες προσφορές επαναφόρτισης και Σαββατοκύριακου με υψηλότερα ποσοστά αντιστοίχισης.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Crypto Εβδομαδιαίο: 60% έως 1.000 USDT</div>
          <span class="bonus-card__tag">Crypto</span>
        </div>
        <p>Καταθέστε τουλάχιστον 50 USDT κατά τη διάρκεια της εβδομάδας και λάβετε 60% μπόνους αντιστοίχισης έως 1.000 USDT. Η απαίτηση στοιχηματισμού είναι 30x στο μπόνους. Τα μέγιστα κέρδη από αυτό το μπόνους περιορίζονται στο 5x του ποσού μπόνους.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Ελάχ. Κατάθεση</div>
            <div class="bonus-detail__value">50 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Στοιχηματισμός</div>
            <div class="bonus-detail__value">30x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Μέγ. Κέρδος</div>
            <div class="bonus-detail__value">5x μπόνους</div>
          </div>
        </div>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Crypto Σαββατοκύριακο: 75% έως 750 USDT + 100 ΔΠ</div>
          <span class="bonus-card__tag">Crypto</span>
        </div>
        <p>Τα Σαββατοκύριακα, καταθέσεις crypto από 75 USDT και πάνω δικαιούνται 75% μπόνους αντιστοίχισης έως 750 USDT συν 100 Δωρεάν Περιστροφές. Τα μέγιστα κέρδη από αυτό το μπόνους περιορίζονται στο 5x του ποσού μπόνους.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Ελάχ. Κατάθεση</div>
            <div class="bonus-detail__value">75 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Δωρεάν Περ.</div>
            <div class="bonus-detail__value">100 ΔΠ</div>
          </div>
          <div>
            <div class="bonus-detail__label">Μέγ. Κέρδος</div>
            <div class="bonus-detail__value">5x μπόνους</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Daily Cashback -->
  <section class="content-section content-section--alt" id="cashback">
    <div class="container">
      <h2>Ημερήσια Επιστροφή Μετρητών</h2>
      <p>Οι παίκτες στα VIP επίπεδα 2 έως 5 λαμβάνουν ημερήσια επιστροφή μετρητών βάσει των καθαρών απωλειών από στοιχήματα καζίνο με πραγματικά χρήματα. Το ποσοστό αυξάνεται με το VIP επίπεδό σας, και η απαίτηση στοιχηματισμού είναι μόλις 1x -- παίξτε το μία φορά και η επιστροφή μετρητών είναι δική σας.</p>

      <div class="data-table-wrap">
        <table class="data-table">
          <thead>
            <tr>
              <th>VIP Επίπεδο</th>
              <th>Επιστροφή %</th>
              <th>Ελάχ. Επιστροφή</th>
              <th>Μέγ. Επιστροφή</th>
              <th>Στοιχηματισμός</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Επίπεδο 2</td>
              <td>3%</td>
              <td>1 &euro;</td>
              <td>100 &euro;</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Επίπεδο 3</td>
              <td>5%</td>
              <td>1 &euro;</td>
              <td>200 &euro;</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Επίπεδο 4</td>
              <td>10%</td>
              <td>1 &euro;</td>
              <td>300 &euro;</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Επίπεδο 5</td>
              <td>15%</td>
              <td>1 &euro;</td>
              <td>400 &euro;</td>
              <td>1x</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Live Cashback -->
  <section class="content-section" id="live-cashback">
    <div class="container">
      <h2>Επιστροφή Μετρητών Ζωντανού Καζίνο</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Επιστροφή Ζωντανού Καζίνο: έως 25%</div>
          <span class="bonus-card__tag">Ζωντανό Καζίνο</span>
        </div>
        <p>Όλοι οι παίκτες μπορούν να διεκδικήσουν έως 25% επιστροφή μετρητών στις καθαρές απώλειες από παιχνίδια ζωντανού καζίνο, με μέγιστη πληρωμή 300 &euro;. Η απαίτηση στοιχηματισμού είναι μόλις 1x. Ωστόσο, αυτή η επιστροφή πρέπει να ζητηθεί χειροκίνητα μέσω ζωντανής συνομιλίας ή email κάθε Δευτέρα μεταξύ 06:00 και 23:59 UTC. Αν χάσετε το παράθυρο διεκδίκησης, η επιστροφή εκείνης της εβδομάδας χάνεται.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Μέγ. Επιστροφή</div>
            <div class="bonus-detail__value">300 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Στοιχηματισμός</div>
            <div class="bonus-detail__value">1x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Ημέρα Διεκδίκησης</div>
            <div class="bonus-detail__value">Δευτέρα</div>
          </div>
          <div>
            <div class="bonus-detail__label">Ώρες Διεκδίκησης</div>
            <div class="bonus-detail__value">06:00-23:59 UTC</div>
          </div>
        </div>
      </div>

      <div class="highlight-box" style="margin-top: var(--space-4);">
        <h4>Πώς να Διεκδικήσετε την Επιστροφή Ζωντανού Καζίνο</h4>
        <p>Επικοινωνήστε με την ομάδα υποστήριξης μέσω ζωντανής συνομιλίας ή email (support@westace.com) τη Δευτέρα μεταξύ 06:00 και 23:59 UTC για να ζητήσετε την επιστροφή μετρητών ζωντανού καζίνο. Η επιστροφή υπολογίζεται βάσει των καθαρών απωλειών σας από την προηγούμενη εβδομάδα και πιστώνεται στον λογαριασμό σας αφού επεξεργαστεί το αίτημα.</p>
      </div>
    </div>
  </section>

  <!-- VIP -->
  <section class="content-section content-section--alt" id="vip">
    <div class="container">
      <h2>Πρόγραμμα VIP</h2>
      <p>Το πρόγραμμα VIP του <?php echo SITE_NAME; ?> επιβραβεύει τους πιστούς παίκτες μέσω πέντε επιπέδων. Καθώς ανεβαίνετε βαθμίδες, ξεκλειδώνετε καλύτερα ποσοστά επιστροφής μετρητών, υψηλότερα όρια ανάληψης, εξατομικευμένες προσφορές και προσωπικό VIP manager. Το πρόγραμμα είναι ανοιχτό σε όλους τους εγγεγραμμένους παίκτες.</p>

      <h3>Οφέλη VIP</h3>
      <ul class="check-list">
        <li>Ημερήσια επιστροφή μετρητών από 3% έως 15% βάσει VIP επιπέδου</li>
        <li>Υψηλότερα όρια κατάθεσης και ανάληψης στα ανώτερα επίπεδα</li>
        <li>Προσωπικός VIP manager για τους παίκτες κορυφαίου επιπέδου</li>
        <li>Εξατομικευμένες προσφορές μπόνους και προωθητικές ενέργειες</li>
        <li>Προτεραιότητα στην υποστήριξη και ταχύτερη επεξεργασία αναλήψεων</li>
      </ul>

      <h3>Ανέλιξη Επιπέδων</h3>
      <p>Τα ακριβή κριτήρια για τη μετάβαση μεταξύ VIP επιπέδων δεν δημοσιοποιούνται. Η ανέλιξη βασίζεται στη συνολική δραστηριότητά σας στο καζίνο. Επικοινωνήστε με την ομάδα υποστήριξης για περισσότερες πληροφορίες σχετικά με την τρέχουσα VIP κατάστασή σας και τι απαιτείται για να φτάσετε στο επόμενο επίπεδο.</p>

      <table class="quick-table">
        <tr><th>Χαρακτηριστικό</th><th>Λεπτομέρειες</th></tr>
        <tr><td>VIP Επίπεδα</td><td>5 βαθμίδες</td></tr>
        <tr><td>Εύρος Επιστροφής</td><td>3% (Επίπεδο 2) έως 15% (Επίπεδο 5)</td></tr>
        <tr><td>Στοιχηματισμός Επιστροφής</td><td>1x</td></tr>
        <tr><td>Προσωπικός Manager</td><td>Διαθέσιμος στα ανώτερα επίπεδα</td></tr>
        <tr><td>Ανέλιξη</td><td>Βάσει συνολικής δραστηριότητας (κριτήρια μη δημόσια)</td></tr>
      </table>
    </div>
  </section>

  <!-- No-Deposit Info -->
  <section class="content-section" id="no-deposit">
    <div class="container container--narrow">
      <h2>Μπόνους Χωρίς Κατάθεση στο <?php echo SITE_NAME; ?></h2>
      <p>Αυτή τη στιγμή, το <?php echo SITE_NAME; ?> δεν προσφέρει μπόνους χωρίς κατάθεση. Το πακέτο καλωσορίσματος απαιτεί ελάχιστη πρώτη κατάθεση 20 &euro; για ενεργοποίηση. Παρακολουθήστε την ενότητα Προσφορών και ελέγχετε τακτικά, καθώς ανανεώνουμε συχνά τις προσφορές μας και ενδέχεται να εισάγουμε μπόνους χωρίς κατάθεση στο μέλλον.</p>
    </div>
  </section>

  <!-- Bonus FAQ -->
  <section class="content-section content-section--alt" id="bonus-faq">
    <div class="container container--narrow">
      <h2>Συχνές Ερωτήσεις Μπόνους</h2>

      <details class="faq-item">
        <summary>Χρειάζομαι κωδικό προσφοράς για να διεκδικήσω ένα μπόνους;</summary>
        <div class="faq-answer">
          <p>Όχι. Όλα τα μπόνους στο <?php echo SITE_NAME; ?> μπορούν να διεκδικηθούν χωρίς κωδικό προσφοράς. Απλά επισκεφθείτε το ταμείο, επιλέξτε την προσφορά και πραγματοποιήστε την κατάθεση. Ορισμένα μπόνους μπορεί να χρειαστεί να ενεργοποιηθούν στην ενότητα Τα Μπόνους Μου του λογαριασμού σας.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Ποια είναι η συνολική αξία του πακέτου καλωσορίσματος;</summary>
        <div class="faq-answer">
          <p>Το πλήρες πακέτο καλωσορίσματος αξίζει έως 2.000 &euro; σε μπόνους συν 150 Δωρεάν Περιστροφές σε τρεις καταθέσεις. Κάθε κατάθεση λαμβάνει 100% αντιστοίχιση: έως 1.000 &euro; στην πρώτη, και έως 500 &euro; σε κάθε μία από τη δεύτερη και τρίτη.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Μπορώ να συνδυάσω πολλαπλά μπόνους;</summary>
        <div class="faq-answer">
          <p>Όχι. Πρέπει να ολοκληρώσετε ή να ακυρώσετε οποιοδήποτε ενεργό μπόνους πριν διεκδικήσετε ένα νέο. Τα μπόνους δεν μπορούν να συσσωρευτούν.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Τι γίνεται αν κάνω ανάληψη πριν ολοκληρώσω τον στοιχηματισμό;</summary>
        <div class="faq-answer">
          <p>Η υποβολή αιτήματος ανάληψης πριν ολοκληρωθεί η απαίτηση στοιχηματισμού ακυρώνει το μπόνους και τα σχετικά κέρδη. Ολοκληρώστε πρώτα τον πλήρη στοιχηματισμό πριν ζητήσετε πληρωμή.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Πώς λειτουργεί η ημερήσια επιστροφή μετρητών;</summary>
        <div class="faq-answer">
          <p>Η ημερήσια επιστροφή μετρητών είναι διαθέσιμη για VIP επίπεδα 2 έως 5. Υπολογίζεται βάσει των καθαρών απωλειών σας από στοιχήματα καζίνο με πραγματικά χρήματα. Το ποσοστό κυμαίνεται από 3% έως 15% ανάλογα με το VIP επίπεδό σας. Η απαίτηση στοιχηματισμού είναι μόλις 1x, που σημαίνει ότι χρειάζεται να παίξετε το ποσό επιστροφής μόνο μία φορά πριν κάνετε ανάληψη.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Συνεισφέρουν όλα τα παιχνίδια εξίσου στον στοιχηματισμό;</summary>
        <div class="faq-answer">
          <p>Όχι. Διαφορετικοί τύποι παιχνιδιών συνεισφέρουν με διαφορετικά ποσοστά. Τα φρουτάκια συνήθως συνεισφέρουν 100%, ενώ τα επιτραπέζια παιχνίδια και οι τίτλοι ζωντανού καζίνο συνεισφέρουν λιγότερο. Ελέγξτε τους όρους μπόνους για τον ακριβή πίνακα συνεισφοράς.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Υπάρχει ξεχωριστό μπόνους για καταθέσεις crypto;</summary>
        <div class="faq-answer">
          <p>Ναι. Οι παίκτες που καταθέτουν με κρυπτονόμισμα μπορούν να διεκδικήσουν 200% μπόνους αντιστοίχισης έως 3.000 USDT ως μπόνους καλωσορίσματος, συν εβδομαδιαίες και σαββατοκύριακες προσφορές επαναφόρτισης crypto. Αυτά είναι ξεχωριστά από τα τυπικά μπόνους EUR και φέρουν τις δικές τους απαιτήσεις στοιχηματισμού.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
