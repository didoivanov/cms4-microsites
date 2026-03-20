<?php
/**
 * Bonuses Page - WestAce (Deutsch / DE)
 */
$page_title = 'WestAce Boni - Willkommenspaket bis zu 2.000 &euro; + 150 Freispiele';
$page_description = 'Alle ' . SITE_NAME . ' Casino Boni auf einen Blick. Willkommenspaket bis zu 2.000 € + 150 Freispiele über 3 Einzahlungen, Krypto-Willkommensbonus, wöchentliche Reloads, täglicher Cashback, Live-Cashback, VIP-Programm und mehr.';
$current_page = 'bonuses';
$lang_prefix = '/de';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Casino Boni';
$hero_description = 'Alle aktiven Aktionen, Willkommensangebote und Treueprämien im Überblick. Bitte lies die Bedingungen, bevor du ein Angebot beanspruchst.';
$hero_cta = 'Bonus beanspruchen';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Welcome Casino Package -->
  <section class="content-section" id="welcome">
    <div class="container">
      <h2>Willkommenspaket für neue Spieler</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Neue Spieler bei <?php echo SITE_NAME; ?> können ein Willkommenspaket über drei Einzahlungen mit einem kombinierten Wert von bis zu 2.000 &euro; + 150 Freispielen beanspruchen. Jede Einzahlung wird mit einem 100% Match-Bonus und 50 Freispielen belohnt. Die Mindesteinzahlung beträgt 20 &euro; pro Stufe. Ein Bonuscode ist nicht erforderlich - einfach zur Kasse gehen, das Angebot auswählen und die qualifizierende Einzahlung tätigen.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-bonuses-screen.png" alt="<?php echo SITE_NAME; ?> Casino Aktionsseite mit Willkommensbonus und aktiven Promotionen" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <!-- Casino Welcome - Deposit 1 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">1. Einzahlung: 100% bis zu 1.000 &euro; + 50 Freispiele</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Tätige deine erste Einzahlung von mindestens 20 &euro; und erhalte einen 100% Match-Bonus bis zu 1.000 &euro;. Zusätzlich werden 50 Freispiele auf einem ausgewählten Spielautomaten gutgeschrieben. Die Umsatzbedingungen betragen 35-fach auf Bonus + Einzahlungsbetrag. Gewinne aus Freispielen unterliegen einer separaten 40-fachen Umsatzbedingung.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Mind. Einzahlung</div>
            <div class="bonus-detail__value">20 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Umsatz</div>
            <div class="bonus-detail__value">35x (B+E)</div>
          </div>
          <div>
            <div class="bonus-detail__label">FS Umsatz</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Freispiele</div>
            <div class="bonus-detail__value">50 FS</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome - Deposit 2 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2. Einzahlung: 100% bis zu 500 &euro; + 50 Freispiele</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Deine zweite Einzahlung berechtigt zu einem 100% Match-Bonus bis zu 500 &euro; sowie weiteren 50 Freispielen. Es gelten dieselben Umsatzbedingungen wie beim ersten Einzahlungsbonus.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Mind. Einzahlung</div>
            <div class="bonus-detail__value">20 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Umsatz</div>
            <div class="bonus-detail__value">35x (B+E)</div>
          </div>
          <div>
            <div class="bonus-detail__label">FS Umsatz</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Freispiele</div>
            <div class="bonus-detail__value">50 FS</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome - Deposit 3 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">3. Einzahlung: 100% bis zu 500 &euro; + 50 Freispiele</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Die dritte Einzahlung bringt einen 100% Match-Bonus bis zu 500 &euro; und 50 Freispiele. Damit beläuft sich das gesamte Willkommenspaket auf 2.000 &euro; an Bonusguthaben und 150 Freispiele über deine ersten drei Einzahlungen.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Mind. Einzahlung</div>
            <div class="bonus-detail__value">20 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Umsatz</div>
            <div class="bonus-detail__value">35x (B+E)</div>
          </div>
          <div>
            <div class="bonus-detail__label">FS Umsatz</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Freispiele</div>
            <div class="bonus-detail__value">50 FS</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Crypto Welcome -->
  <section class="content-section content-section--alt" id="crypto-welcome">
    <div class="container">
      <h2>Krypto-Willkommensbonus</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Krypto: 200% bis zu 3.000 USDT</div>
          <span class="bonus-card__tag">Krypto</span>
        </div>
        <p>Wer lieber mit Kryptowährung einzahlt, profitiert von einem separaten Willkommensangebot. Tätige eine erste Krypto-Einzahlung von mindestens 100 USDT und erhalte einen 200% Match-Bonus bis zu 3.000 USDT. Die Umsatzbedingungen betragen 40-fach auf den Bonusbetrag.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Mind. Einzahlung</div>
            <div class="bonus-detail__value">100 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Umsatz</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max. Bonus</div>
            <div class="bonus-detail__value">3.000 USDT</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Weekly Reload -->
  <section class="content-section" id="weekly-reload">
    <div class="container">
      <h2>Wöchentlicher Reload</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Wöchentlicher Reload: 70 Freispiele</div>
          <span class="bonus-card__tag">Mo-Do</span>
        </div>
        <p>Jeden Montag bis Donnerstag erhältst du bei einer Einzahlung von mindestens 20 &euro; 70 Freispiele auf einem vom Casino ausgewählten Spielautomaten. Gewinne aus den Freispielen unterliegen einer 40-fachen Umsatzbedingung und müssen innerhalb von 10 Tagen genutzt werden.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Mind. Einzahlung</div>
            <div class="bonus-detail__value">20 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Freispiele</div>
            <div class="bonus-detail__value">70 FS</div>
          </div>
          <div>
            <div class="bonus-detail__label">Umsatz</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Gültigkeit</div>
            <div class="bonus-detail__value">10 Tage</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Weekend Reload -->
  <section class="content-section content-section--alt" id="weekend-reload">
    <div class="container">
      <h2>Wochenend-Reload-Bonus</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Wochenende: 50% bis zu 500 &euro; + 70 Freispiele</div>
          <span class="bonus-card__tag">Wochenende</span>
        </div>
        <p>Starte das Wochenende mit einem 50% Reload-Bonus bis zu 500 &euro;. Bei einer Einzahlung von 50 &euro; oder mehr gibt es zusätzlich 70 Freispiele. Einzahlungen unter 50 &euro; berechtigen weiterhin zum 50% Match-Bonus, jedoch ohne Freispiele. Die Umsatzbedingungen betragen 35-fach auf den Bonusbetrag.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Mind. Einzahlung</div>
            <div class="bonus-detail__value">20 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Mind. Einzahlung FS</div>
            <div class="bonus-detail__value">50 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Umsatz</div>
            <div class="bonus-detail__value">35x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Freispiele</div>
            <div class="bonus-detail__value">70 FS</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Crypto Reloads -->
  <section class="content-section" id="crypto-reloads">
    <div class="container">
      <h2>Krypto-Reload-Boni</h2>
      <p>Spieler, die mit Kryptowährung einzahlen, haben Zugang zu exklusiven wöchentlichen und Wochenend-Reload-Angeboten mit höheren Match-Prozentsätzen.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Krypto Wöchentlich: 60% bis zu 1.000 USDT</div>
          <span class="bonus-card__tag">Krypto</span>
        </div>
        <p>Zahle unter der Woche mindestens 50 USDT ein und erhalte einen 60% Match-Bonus bis zu 1.000 USDT. Die Umsatzbedingungen betragen 30-fach auf den Bonus. Der maximale Gewinn aus diesem Bonus ist auf das 5-fache des Bonusbetrags begrenzt.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Mind. Einzahlung</div>
            <div class="bonus-detail__value">50 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Umsatz</div>
            <div class="bonus-detail__value">30x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max. Gewinn</div>
            <div class="bonus-detail__value">5x Bonus</div>
          </div>
        </div>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Krypto Wochenende: 75% bis zu 750 USDT + 100 FS</div>
          <span class="bonus-card__tag">Krypto</span>
        </div>
        <p>Am Wochenende berechtigen Krypto-Einzahlungen von 75 USDT oder mehr zu einem 75% Match-Bonus bis zu 750 USDT plus 100 Freispiele. Der maximale Gewinn aus diesem Bonus ist auf das 5-fache des Bonusbetrags begrenzt.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Mind. Einzahlung</div>
            <div class="bonus-detail__value">75 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Freispiele</div>
            <div class="bonus-detail__value">100 FS</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max. Gewinn</div>
            <div class="bonus-detail__value">5x Bonus</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Daily Cashback -->
  <section class="content-section content-section--alt" id="cashback">
    <div class="container">
      <h2>Täglicher Cashback</h2>
      <p>Spieler auf VIP-Stufen 2 bis 5 erhalten täglichen Cashback auf Nettoverluste aus Echtgeld-Casino-Einsätzen. Der Prozentsatz steigt mit deiner VIP-Stufe, und die Umsatzbedingung beträgt nur 1-fach - einmal durchspielen und der Cashback gehört dir.</p>

      <div class="data-table-wrap">
        <table class="data-table">
          <thead>
            <tr>
              <th>VIP-Stufe</th>
              <th>Cashback %</th>
              <th>Mind. Cashback</th>
              <th>Max. Cashback</th>
              <th>Umsatz</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Stufe 2</td>
              <td>3%</td>
              <td>1 &euro;</td>
              <td>100 &euro;</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Stufe 3</td>
              <td>5%</td>
              <td>1 &euro;</td>
              <td>200 &euro;</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Stufe 4</td>
              <td>10%</td>
              <td>1 &euro;</td>
              <td>300 &euro;</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Stufe 5</td>
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
      <h2>Live Casino Cashback</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Live Cashback: bis zu 25%</div>
          <span class="bonus-card__tag">Live Casino</span>
        </div>
        <p>Alle Spieler können bis zu 25% Cashback auf Nettoverluste aus Live-Casino-Spielen beanspruchen, mit einer maximalen Auszahlung von 300 &euro;. Die Umsatzbedingung beträgt nur 1-fach. Dieser Cashback muss jedoch jeden Montag zwischen 06:00 und 23:59 UTC manuell per Live-Chat oder E-Mail angefordert werden. Wird das Antragensfenster verpasst, verfällt der Cashback für diese Woche.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Max. Cashback</div>
            <div class="bonus-detail__value">300 &euro;</div>
          </div>
          <div>
            <div class="bonus-detail__label">Umsatz</div>
            <div class="bonus-detail__value">1x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Antragstag</div>
            <div class="bonus-detail__value">Montag</div>
          </div>
          <div>
            <div class="bonus-detail__label">Antragsfenster</div>
            <div class="bonus-detail__value">06:00-23:59 UTC</div>
          </div>
        </div>
      </div>

      <div class="highlight-box" style="margin-top: var(--space-4);">
        <h4>So beantragst du den Live Cashback</h4>
        <p>Wende dich jeden Montag zwischen 06:00 und 23:59 UTC über den Live-Chat oder per E-Mail an support@westace.com, um deinen Live-Casino-Cashback anzufordern. Der Cashback wird auf Basis deiner Nettoverluste aus der Vorwoche berechnet und nach Bearbeitung deines Antrags auf deinem Konto gutgeschrieben.</p>
      </div>
    </div>
  </section>

  <!-- VIP -->
  <section class="content-section content-section--alt" id="vip">
    <div class="container">
      <h2>VIP-Programm</h2>
      <p>Das VIP-Programm von <?php echo SITE_NAME; ?> belohnt treue Spieler über fünf Stufen. Mit jeder Stufe schaltest du bessere Cashback-Raten, höhere Auszahlungslimits, personalisierte Angebote und einen persönlichen VIP-Manager frei. Das Programm steht allen registrierten Spielern offen.</p>

      <h3>VIP-Vorteile</h3>
      <ul class="check-list">
        <li>Täglicher Cashback von 3% bis 15% je nach VIP-Stufe</li>
        <li>Höhere Ein- und Auszahlungslimits auf den oberen Stufen</li>
        <li>Persönlicher VIP-Manager für Spieler auf den höchsten Stufen</li>
        <li>Personalisierte Bonusangebote und Aktionen</li>
        <li>Prioritäts-Support und schnellere Auszahlungsbearbeitung</li>
      </ul>

      <h3>Stufenaufstieg</h3>
      <p>Die genauen Kriterien für den Aufstieg zwischen VIP-Stufen werden nicht öffentlich bekannt gegeben. Der Fortschritt basiert auf deiner Gesamtaktivität im Casino. Wende dich an unser Support-Team für mehr Informationen zu deinem aktuellen VIP-Status und den Voraussetzungen für die nächste Stufe.</p>

      <table class="quick-table">
        <tr><th>Merkmal</th><th>Details</th></tr>
        <tr><td>VIP-Stufen</td><td>5 Stufen</td></tr>
        <tr><td>Cashback-Bereich</td><td>3% (Stufe 2) bis 15% (Stufe 5)</td></tr>
        <tr><td>Cashback-Umsatz</td><td>1x</td></tr>
        <tr><td>Persönlicher Manager</td><td>Auf höheren Stufen verfügbar</td></tr>
        <tr><td>Aufstieg</td><td>Basiert auf Gesamtaktivität (Kriterien nicht öffentlich)</td></tr>
      </table>
    </div>
  </section>

  <!-- No-Deposit Info -->
  <section class="content-section" id="no-deposit">
    <div class="container container--narrow">
      <h2><?php echo SITE_NAME; ?> Bonus ohne Einzahlung</h2>
      <p>Derzeit bietet <?php echo SITE_NAME; ?> keinen Bonus ohne Einzahlung an. Das Willkommenspaket erfordert eine erste Mindesteinzahlung von 20 &euro;, um aktiviert zu werden. Schau regelmäßig in den Aktionsbereich - wir wechseln unsere Angebote häufig und könnten in Zukunft auch No-Deposit-Deals einführen.</p>
    </div>
  </section>

  <!-- Bonus FAQ -->
  <section class="content-section content-section--alt" id="bonus-faq">
    <div class="container container--narrow">
      <h2>Bonus FAQ</h2>

      <details class="faq-item">
        <summary>Brauche ich einen Bonuscode, um einen Bonus zu beanspruchen?</summary>
        <div class="faq-answer">
          <p>Nein. Alle Boni bei <?php echo SITE_NAME; ?> können ohne Bonuscode beansprucht werden. Einfach zur Kasse gehen, das Angebot auswählen und die qualifizierende Einzahlung tätigen. Manche Boni müssen möglicherweise im Bereich "Meine Boni" deines Kontos aktiviert werden.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wie hoch ist der Gesamtwert des Willkommenspakets?</summary>
        <div class="faq-answer">
          <p>Das vollständige Willkommenspaket ist bis zu 2.000 &euro; an Bonusguthaben plus 150 Freispiele über drei Einzahlungen wert. Jede Einzahlung erhält einen 100% Match-Bonus: bis zu 1.000 &euro; auf die erste sowie bis zu 500 &euro; jeweils auf die zweite und dritte.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kann ich mehrere Boni gleichzeitig nutzen?</summary>
        <div class="faq-answer">
          <p>Nein. Du musst einen aktiven Bonus abschließen oder verwirken, bevor du einen neuen beanspruchst. Boni können nicht gestapelt werden.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Was passiert, wenn ich vor Erfüllung der Umsatzbedingungen auszahle?</summary>
        <div class="faq-answer">
          <p>Eine Auszahlungsanfrage vor Erfüllung der Umsatzbedingungen führt zur Stornierung des Bonus und aller damit verbundenen Gewinne. Schließe den gesamten Rollover ab, bevor du eine Auszahlung beantragst.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wie funktioniert der tägliche Cashback?</summary>
        <div class="faq-answer">
          <p>Der tägliche Cashback ist für VIP-Stufen 2 bis 5 verfügbar. Er wird auf Basis deiner Nettoverluste aus Echtgeld-Casino-Einsätzen berechnet. Der Prozentsatz reicht je nach VIP-Stufe von 3% bis 15%. Die Umsatzbedingung beträgt nur 1-fach, was bedeutet, dass du den Cashback-Betrag nur einmal durchspielen musst, bevor du auszahlen kannst.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Tragen alle Spiele gleichermaßen zur Umsatzbedingung bei?</summary>
        <div class="faq-answer">
          <p>Nein. Unterschiedliche Spielkategorien tragen zu verschiedenen Anteilen bei. Spielautomaten tragen in der Regel 100% bei, während Tischspiele und Live-Casino-Titel weniger beitragen. Die genaue Beitragstabelle findest du in den Bonusbedingungen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Gibt es einen separaten Bonus für Krypto-Einzahlungen?</summary>
        <div class="faq-answer">
          <p>Ja. Krypto-Einzahler können einen 200% Match-Bonus bis zu 3.000 USDT als Willkommensbonus beanspruchen, dazu wöchentliche und Wochenend-Krypto-Reload-Angebote. Diese sind von den Standard-EUR-Boni getrennt und haben eigene Umsatzbedingungen.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
