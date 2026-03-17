<?php
/**
 * Bonuses Page – VipLuck Casino (German)
 */
$page_title = SITE_NAME . ' Boni - Willkommensbonus, Freispiele, Cashback & VIP-Belohnungen';
$page_description = 'Alle ' . SITE_NAME . ' Casino Boni auf einen Blick. Willkommenspaket bis zu EUR 2.000 + 300 Freispiele über 3 Einzahlungen, Sport-Willkommensbonus bis zu EUR 500, wöchentliche Reload-Angebote, Cashback-Programme, VIP-Belohnungen und mehr.';
$current_page = 'bonuses';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Casino Boni';
$hero_description = 'Alle aktiven Aktionen, Willkommensangebote und Treueprämien im Überblick. Bitte lesen Sie die Bedingungen, bevor Sie ein Angebot aktivieren.';
$hero_cta = 'Bonus sichern';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Welcome Casino Package -->
  <section class="content-section" id="welcome">
    <div class="container">
      <h2>Willkommensboni für neue Spieler</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <p style="margin-top:0">Neue Spieler bei <?php echo SITE_NAME; ?> haben die Wahl zwischen einem Casino-Willkommenspaket und einem Sport-Willkommenspaket. Das Casino-Angebot erstreckt sich über Ihre ersten drei Einzahlungen mit einem Gesamtwert von bis zu &euro;2.000 + 300 Freispiele. Das Sportpaket bietet bis zu &euro;500 über drei Einzahlungen. Jede Option steht ab Ihrer ersten qualifizierenden Einzahlung zur Verfügung und kann nicht mit anderen Aktionen kombiniert werden.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-promotions.png" alt="<?php echo SITE_NAME; ?> Casino promotions page showing welcome package and VIP cashback offers" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>

      <!-- Casino Welcome – Deposit 1 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">1. Einzahlung: 100% bis zu &euro;500 + 100 Freispiele</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Zahlen Sie mindestens &euro;20 ein und erhalten Sie einen 100%-Match bis zu &euro;500. Zusätzlich werden 100 Freispiele in Paketen von 20 pro Tag über 5 aufeinanderfolgende Tage gutgeschrieben. Das erste Paket steht sofort nach Ihrer Einzahlung bereit. Jedes Paket muss innerhalb von 24 Stunden genutzt werden, sonst verfällt es. Eine Einzahlung von &euro;10 oder mehr bringt ausserdem 1 Bonus-Crab-Guthaben für die Greifmaschine, bei der Münzen, Freispiele, Bonusguthaben oder Bargeldpreise zu gewinnen sind.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Mindesteinzahlung</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Umsatz</div>
            <div class="bonus-detail__value">35x (Bonus + Einzahlung)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Freispiel-Umsatz</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Gültigkeit</div>
            <div class="bonus-detail__value">10 Tage</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max. Einsatz</div>
            <div class="bonus-detail__value">&euro;5</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome – Deposit 2 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2. Einzahlung: 75% bis zu &euro;750 + 75 Freispiele</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Ihre zweite Einzahlung von &euro;20 oder mehr qualifiziert für einen 75%-Match bis zu &euro;750, plus 75 Freispiele auf einem ausgewählten Slot. Die Freispiele werden in Paketen von 25 pro Tag über 3 Tage gutgeschrieben. Es gelten dieselben Umsatzanforderungen und Gültigkeitszeiträume wie beim ersten Einzahlungsbonus.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Mindesteinzahlung</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Umsatz</div>
            <div class="bonus-detail__value">35x (Bonus + Einzahlung)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Freispiel-Umsatz</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Gültigkeit</div>
            <div class="bonus-detail__value">10 Tage</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome – Deposit 3 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">3. Einzahlung: 50% bis zu &euro;750 + 125 Freispiele</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Die dritte Einzahlung von &euro;20 oder mehr bringt einen 50%-Match bis zu &euro;750, dazu 125 Freispiele in Paketen von 25 pro Tag über 5 Tage. Damit beläuft sich das gesamte Willkommenspaket auf &euro;2.000 an Bonusguthaben und 300 Freispiele über Ihre ersten drei Einzahlungen.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Mindesteinzahlung</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Umsatz</div>
            <div class="bonus-detail__value">35x (Bonus + Einzahlung)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Freispiel-Umsatz</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Gültigkeit</div>
            <div class="bonus-detail__value">10 Tage</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome – Deposit 1 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">1. Sporteinzahlung: 100% bis zu &euro;200</div>
          <span class="bonus-card__tag">Sports</span>
        </div>
        <p>Sportwetter erhalten einen 100%-Match auf ihre erste Einzahlung bis zu &euro;200. Der maximale Bonusbetrag variiert je nach Region: Spieler aus Finnland, Deutschland, Norwegen, der Schweiz und Österreich können bis zu &euro;200 erhalten. Italienische Spieler erhalten bis zu &euro;150. Spieler aus Kasachstan, Usbekistan, Kirgisistan, Tadschikistan, Georgien und Aserbaidschan erhalten bis zu &euro;50. Zur Aktivierung des Bonus muss der gesamte Einzahlungsbetrag auf Sportwetten mit einer Mindestquote von 1,50 umgesetzt werden.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Mindesteinzahlung</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Umsatz</div>
            <div class="bonus-detail__value">5x oder 6x (je nach Land)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Mindestquote</div>
            <div class="bonus-detail__value">2,0 Einzelwetten / 1,5 Kombiwetten</div>
          </div>
          <div>
            <div class="bonus-detail__label">Gültigkeit</div>
            <div class="bonus-detail__value">30 Tage</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome – Deposit 2 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2. Sporteinzahlung: 75% bis zu &euro;150</div>
          <span class="bonus-card__tag">Sports</span>
        </div>
        <p>Die zweite Sporteinzahlung von &euro;20 oder mehr qualifiziert für einen 75%-Match bis zu &euro;150. Es gelten dieselben Aktivierungs- und Umsatzbedingungen wie beim ersten Sportbonus. Die Einzahlung muss vollständig auf Sportwetten mit einer Mindestquote von 1,50 umgesetzt werden, bevor der Bonus gutgeschrieben wird.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Mindesteinzahlung</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Umsatz</div>
            <div class="bonus-detail__value">5x oder 6x (je nach Land)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Gültigkeit</div>
            <div class="bonus-detail__value">30 Tage</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome – Deposit 3 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">3. Sporteinzahlung: 50% bis zu &euro;150</div>
          <span class="bonus-card__tag">Sports</span>
        </div>
        <p>Die dritte Sporteinzahlung von &euro;20 oder mehr qualifiziert für einen 50%-Match bis zu &euro;150. Damit ist das Sport-Willkommenspaket mit einem Gesamtwert von bis zu &euro;500 über drei Einzahlungen komplett. Alle Umsatzanforderungen müssen innerhalb von 30 Tagen nach jeder Einzahlung erfüllt werden.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Mindesteinzahlung</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Umsatz</div>
            <div class="bonus-detail__value">5x oder 6x (je nach Land)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Gültigkeit</div>
            <div class="bonus-detail__value">30 Tage</div>
          </div>
        </div>
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <div class="highlight-box" style="margin:0">
            <h4><?php echo SITE_NAME; ?> Promo Code</h4>
            <p>Wenn Sie einen Promo Code haben, können Sie diesen während der Registrierung eingeben. Das Codefeld erscheint im Anmeldeformular, direkt nach der Auswahl Ihres bevorzugten Willkommensbonus. Promo Codes können besondere Angebote oder angepasste Bonusbedingungen freischalten -- es lohnt sich also, vor der Einzahlung nachzusehen.</p>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-account.png" alt="<?php echo SITE_NAME; ?> Casino bonus selection screen showing casino and sports welcome options" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>

      <div class="highlight-box" style="margin-top: var(--space-4);">
        <h4>Maximaler Gewinn</h4>
        <p>Spieler mit Wohnsitz in Brasilien, Chile, Japan, Peru und Thailand unterliegen einer maximalen Gewinnobergrenze von 10x dem Bonusbetrag bei allen bonusfinanzierten Einsätzen. Dies gilt für Willkommensboni, Reload-Boni und alle anderen Aktionsangebote. Gewinne, die diese Obergrenze überschreiten, werden entsprechend angepasst.</p>
      </div>
    </div>
  </section>

  <!-- Reload & Weekly -->
  <section class="content-section content-section--alt" id="reload">
    <div class="container">
      <h2>Wöchentliche Reload-Boni</h2>
      <p><?php echo SITE_NAME; ?> hält die Aktionen weit über die Willkommensphase hinaus am Laufen. Diese wiederkehrenden Angebote werden wöchentlich zurückgesetzt und geben aktiven Spielern jede Woche etwas Neues.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Wöchentlicher Boost: 50 Freispiele</div>
          <span class="bonus-card__tag">Montag - Donnerstag</span>
        </div>
        <p>Zahlen Sie zwischen Montag und Donnerstag &euro;20 oder mehr ein und erhalten Sie 50 Freispiele auf einem ausgewählten Slot. Sie müssen sich jede Woche vor der Einzahlung anmelden. Die Spins müssen innerhalb von 7 Tagen genutzt werden. Gewinne unterliegen einer 40x-Umsatzanforderung mit einem 10-Tage-Zeitfenster. Max. Einsatz während der Bonusaktivität: &euro;5.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Wochenend-Reload: 50% bis zu &euro;500 + 75 Freispiele</div>
          <span class="bonus-card__tag">Freitag - Sonntag</span>
        </div>
        <p>Zahlen Sie am Wochenende mindestens &euro;20 ein und erhalten Sie einen 50%-Match bis zu &euro;500. Bei einer Einzahlung von &euro;50 oder mehr gibt es zusätzlich 75 Freispiele auf einem ausgewählten Slot. Sie müssen sich vor der Einzahlung anmelden. Die Umsatzanforderung beträgt 35x auf Einzahlung und Bonus sowie 40x auf Freispielgewinne. Sie haben 10 Tage Zeit, die Anforderungen zu erfüllen.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Sonntags-Special: 30% bis zu &euro;300 + 50 Freispiele</div>
          <span class="bonus-card__tag">Nur Sonntag</span>
        </div>
        <p>Ein zusätzliches Sonntagsangebot für Spieler, die mit einem Extra-Boost in die neue Woche starten möchten. Zahlen Sie &euro;20 oder mehr ein und erhalten Sie einen 30%-Match bis zu &euro;300 plus 50 Freispiele. Anmeldung erforderlich. Umsatz: 35x auf Einzahlung und Bonus, 40x auf Freispielgewinne, mit einem 10-Tage-Zeitfenster.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Wöchentlicher Sport-Reload: 55% bis zu &euro;300</div>
          <span class="bonus-card__tag">Sports</span>
        </div>
        <p>Einmal pro Woche qualifiziert Ihre grösste Einzahlung für einen 55%-Sportbonus im Wert von bis zu &euro;300. Die Einzahlung muss einmal auf Sportwetten mit einer Mindestquote von 1,50 umgesetzt werden, bevor der Bonus gutgeschrieben wird. Anschliessend können Sie ihn per Live-Chat oder E-Mail anfordern. Die Umsatzanforderungen müssen innerhalb von 30 Tagen erfüllt werden. Die maximale Auszahlung aus diesem Bonus beträgt 10x dessen Wert.</p>
      </div>
    </div>
  </section>

  <!-- Cashback -->
  <section class="content-section" id="cashback">
    <div class="container">
      <h2>Cashback-Programme</h2>
      <p><?php echo SITE_NAME; ?> bietet drei separate Cashback-Programme: tägliches Cashback für Casino-Spiele, wöchentliches Cashback für Live-Casino und wöchentliches Cashback für Sportwetten. Jedes Programm hat eigene Bedingungen und einen eigenen Aktivierungsprozess.</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Tägliches Casino-Cashback</h4>
          <p>Verfügbar ab VIP-Stufe 3. VIP 3 erhält 5% täglich bis zu &euro;200. VIP 4 erhält 10% bis zu &euro;300. VIP 5 erhält 15% bis zu &euro;500. Das Cashback wird automatisch um 04:00 UTC gutgeschrieben und hat eine 1x-Umsatzanforderung. Die Anmeldung muss alle 4 Wochen erneuert werden.</p>
        </div>
        <div class="info-card">
          <h4>Live-Casino-Cashback: 25% bis zu &euro;350</h4>
          <p>Wöchentliches Cashback auf Nettoverluste bei Live-Casino-Spielen. Der qualifizierende Mindestverlust beträgt &euro;5. Kontaktieren Sie den Support am Montag nach 06:00 UTC (vor 23:59 UTC), um es zu aktivieren. Nach Gutschrift gilt eine 1x-Umsatzanforderung vor der Auszahlung.</p>
        </div>
        <div class="info-card">
          <h4>Sport-Cashback: 15% bis zu &euro;500</h4>
          <p>Deckt Nettoverluste aus Sportwetten von Montag bis Sonntag ab. Ein Mindestverlust von &euro;20 ist erforderlich. Kontaktieren Sie den Support am Montag zur Aktivierung. Das Cashback hat eine 3x-Umsatzanforderung und kann nur im Sportwetten-Bereich eingesetzt werden.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sports Promos -->
  <section class="content-section content-section--alt" id="sports-promos">
    <div class="container">
      <h2>Sportwetten-Aktionen</h2>
      <p>Neben dem Willkommensbonus und dem Cashback bietet der Sportwetten-Bereich verschiedene Extras, die Ihren Wetten zusätzlichen Wert verleihen.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Kombiboost: bis zu 100%</div>
        </div>
        <p>Platzieren Sie eine Kombiwette mit 3 oder mehr Auswahlen, jede mit einer Quote von mindestens 1,40, und Ihre Gewinne erhalten einen Bonus. Der Multiplikator startet bei 3% für 3 Auswahlen und steigt auf bis zu 100% bei 21 oder mehr. Nur Echtgeld-Einsätze zählen. Eine Auszahlungsanfrage vor der Gutschrift des Boosts macht diesen ungültig.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2-Tore-Vorsprung: Vorzeitige Auszahlung</div>
        </div>
        <p>Geht Ihr Team mit 2 Toren in Führung, wird Ihre Pre-Match-1X2-Wette vollständig als Gewinn abgerechnet -- kein Warten auf den Abpfiff. Dieses Angebot gilt nur für Heim- oder Auswärtssieg-Wetten. Live-Wetten und Unentschieden-Wetten sind ausgeschlossen, und ein vorzeitiger Cash-out macht die vorzeitige Auszahlung ungültig.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Sport-Boost: 20% bis zu &euro;100</div>
        </div>
        <p>Ein wöchentlicher Sport-Boost für alle aktiven Spieler. Zahlen Sie &euro;20 oder mehr ein und erhalten Sie einen 20%-Bonus bis zu &euro;100 für Sportwetten. Der Bonus muss 5x bei einer Mindestquote von 1,50 innerhalb von 14 Tagen umgesetzt werden. Anmeldung über Ihr Kontoprofil erforderlich.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Freitags-Vorteil: Gratiswette bis zu &euro;50</div>
        </div>
        <p>Jeden Freitag: Platzieren Sie eine qualifizierende Sportwette von &euro;20 oder mehr bei einer Mindestquote von 1,80. Verliert die Wette, erhalten Sie eine Gratiswette im Wert von 50% Ihres Einsatzes, bis zu &euro;50. Die Gratiswette muss innerhalb von 3 Tagen genutzt werden und hat eine 3x-Umsatzanforderung bei einer Mindestquote von 1,50.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Wochenend-Sport-Reload: 40% bis zu &euro;200</div>
        </div>
        <p>Zahlen Sie am Samstag oder Sonntag &euro;20 oder mehr ein und erhalten Sie einen 40%-Sportbonus bis zu &euro;200. Die Einzahlung muss einmal auf Sportwetten mit einer Mindestquote von 1,50 umgesetzt werden, bevor der Bonus aktiviert wird. Die Umsatzanforderungen müssen innerhalb von 30 Tagen erfüllt werden. Die maximale Auszahlung aus diesem Bonus beträgt 10x dessen Wert.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Erhöhte Quoten</div>
        </div>
        <p>Ausgewählte Pre-Match-1X2-Märkte bieten gelegentlich erhöhte Quoten. Achten Sie auf die Kennzeichnung "Enhanced Prices" in der Marktbeschreibung. Gewinne aus Wetten mit erhöhten Quoten werden als Echtgeld ohne zusätzliche Umsatzanforderung ausgezahlt.</p>
      </div>
    </div>
  </section>

  <!-- VIP, Shop, Crab -->
  <section class="content-section" id="vip">
    <div class="container">
      <h2>VIP-Programm &amp; Extras</h2>
      <div class="two-col">
        <div>
          <h3>VIP-Programm</h3>
          <p><?php echo SITE_NAME; ?> bietet ein fünfstufiges Treueprogramm, das Sie durch Ihre Wettaktivität durchlaufen. Die Stufen sind Bronze, Silber, Gold, Platin und Diamant. Mit jeder Stufe schalten Sie Vorteile wie einen persönlichen Account-Manager, höhere Auszahlungslimits, exklusive Bonusangebote und bessere Cashback-Prozentsätze frei. Diamant-Mitglieder erhalten Zugang zu den besten wöchentlichen Cashback-Angeboten, bevorzugten Auszahlungen und Einladungen zu exklusiven Events.</p>

          <h4>VIP-Stufen im Überblick</h4>
          <table class="quick-table">
            <tr><th>Stufe</th><th>Vorteile</th></tr>
            <tr><td>Bronze</td><td>Standard-Cashback, Zugang zu regulären Aktionen, Münzen-Belohnungen bei Aktivität</td></tr>
            <tr><td>Silber</td><td>Verbessertes Cashback (3%), schnellere Auszahlungen, Geburtstagsbonus</td></tr>
            <tr><td>Gold</td><td>5% Cashback bis zu &euro;200/Tag, persönlicher Account-Manager, höhere Auszahlungslimits</td></tr>
            <tr><td>Platin</td><td>10% Cashback bis zu &euro;300/Tag, exklusive Aktionen, bevorzugter Support</td></tr>
            <tr><td>Diamant</td><td>15% Cashback bis zu &euro;500/Tag, höchste Limits, VIP-Events, individuelle Angebote</td></tr>
          </table>

          <h3>Bonus Crab</h3>
          <p>Jede Einzahlung von &euro;10 oder mehr bringt 1 Bonus-Crab-Guthaben. Nutzen Sie es, um einen zufälligen Preis an der Greifmaschine zu "fangen" -- mögliche Gewinne sind Bonusguthaben, Freispiele oder Münzen. Ein kleines tägliches Extra, das Abwechslung in Ihr Spielerlebnis bringt.</p>
        </div>
        <div>
          <h3>Münzen &amp; Shop</h3>
          <p>Münzen werden durch Spielaktivität, Challenges und Aktionen verdient. Sie können sie im <?php echo SITE_NAME; ?> Shop für Belohnungen einlösen -- von Freispielen auf ausgewählten Slots (z.B. 5 Spins auf Sweet Bonanza für 30 Münzen) bis zu Bonusguthaben (&euro;5 für 50 Münzen, bis zu &euro;250 für 1.200 Münzen). So verwandeln Sie Ihre Treue in greifbare Belohnungen -- ganz in Ihrem Tempo.</p>

          <h3>Challenges</h3>
          <p>Wöchentliche Challenges belohnen Sie für das Erreichen einfacher Ziele. Casino-Challenges verlangen z.B. &euro;0,50-Einsätze auf bestimmten Slots, während Sport-Challenges &euro;15-Wetten auf Spiele mit einer Mindestquote von 2,0 erfordern können. Jede abgeschlossene Challenge bringt Münzen, und 20 Challenges in einer Woche schalten einen 50-Münzen-Bonus frei.</p>

          <h3>Jubiläums-Special</h3>
          <p>Am Jahrestag Ihrer Kontoregistrierung bietet <?php echo SITE_NAME; ?> ein spezielles Bonuspaket. Das Angebot richtet sich nach Ihrer VIP-Stufe und Kontoaktivität und wird automatisch an Ihrem Jubiläumsdatum gutgeschrieben. Prüfen Sie Ihre Benachrichtigungen oder kontaktieren Sie den Support, falls Sie Ihren Jubiläumsbonus nicht erhalten haben.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- No-Deposit Info -->
  <section class="content-section content-section--alt" id="no-deposit">
    <div class="container container--narrow">
      <h2><?php echo SITE_NAME; ?> Bonus ohne Einzahlung</h2>
      <p>Aktuell bietet <?php echo SITE_NAME; ?> keinen klassischen Bonus ohne Einzahlung an. Die Bonus-Crab-Funktion belohnt allerdings jede Einzahlung von &euro;10 oder mehr mit einem Gratisversuch an der Greifmaschine, bei der Sie Freispiele, Bonusguthaben, Münzen oder Bargeldpreise gewinnen können -- ohne zusätzlichen Umsatz auf den ursprünglichen Preis. Das ist derzeit die nächste Alternative zu einem Bonus ohne Einzahlung auf der Plattform.</p>
      <p>Schauen Sie regelmässig im Aktionsbereich vorbei, denn das Casino wechselt seine Angebote häufig und könnte in Zukunft Angebote ohne Einzahlung oder Gratis-Bonuscodes einführen.</p>
    </div>
  </section>

  <!-- Bonus FAQ -->
  <section class="content-section" id="bonus-faq">
    <div class="container container--narrow">
      <h2>Bonus-FAQ</h2>

      <details class="faq-item">
        <summary>Kann ich bei <?php echo SITE_NAME; ?> einen Promo Code verwenden?</summary>
        <div class="faq-answer">
          <p>Ja. Während der Registrierung haben Sie die Möglichkeit, einen Promo Code einzugeben, nachdem Sie Ihren bevorzugten Willkommensbonus ausgewählt haben. Wenn Sie einen gültigen Code haben, geben Sie ihn dort ein, um die zugehörigen Vorteile zu aktivieren.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kann ich mehrere Boni kombinieren?</summary>
        <div class="faq-answer">
          <p>Nein. Willkommensboni und Reload-Aktionen können nicht gestapelt werden. Sie müssen jeden aktiven Bonus abschliessen oder stornieren, bevor Sie einen neuen aktivieren. Einige Boni können über den Profilbereich oder per Support-Kontakt storniert werden.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Was passiert, wenn ich eine Auszahlung vor Erfüllung der Umsatzanforderungen beantrage?</summary>
        <div class="faq-answer">
          <p>Eine Auszahlungsanfrage vor Erfüllung der Umsatzanforderungen macht den Bonus und alle damit verbundenen Gewinne ungültig. Stellen Sie sicher, dass Sie den Umsatz vollständig abgeschlossen haben, bevor Sie eine Auszahlung beantragen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Tragen alle Spiele gleich zu den Umsatzanforderungen bei?</summary>
        <div class="faq-answer">
          <p>Nein. Verschiedene Spieltypen tragen unterschiedlich bei. Spielautomaten zählen in der Regel zu 100%, während Tischspiele und Live-Casino-Titel weniger beitragen. Die genaue Beitragstabelle finden Sie in den Bonusbedingungen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Sind Skrill- und Neteller-Einzahlungen für Boni qualifiziert?</summary>
        <div class="faq-answer">
          <p>In den meisten Fällen sind Einzahlungen über Skrill oder Neteller nicht für Willkommensboni qualifiziert. Prüfen Sie die spezifischen Aktionsbedingungen für mögliche Ausnahmen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Gilt die maximale Gewinnregel für mich?</summary>
        <div class="faq-answer">
          <p>Die 10x-Gewinnobergrenze gilt für Einwohner von Brasilien, Chile, Japan, Peru und Thailand. Wenn Sie in einem dieser Länder wohnen, sind Ihre Gewinne aus bonusfinanziertem Spiel auf das 10-Fache des Bonusbetrags begrenzt. Spieler aus anderen Regionen sind von dieser Regel nicht betroffen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Wie funktioniert der Jubiläumsbonus?</summary>
        <div class="faq-answer">
          <p>Jedes Jahr am Jahrestag Ihrer Registrierung liefert <?php echo SITE_NAME; ?> einen speziellen Bonus auf Ihr Konto. Art und Umfang des Angebots hängen von Ihrer VIP-Stufe und Gesamtaktivität ab. Der Bonus wird automatisch gutgeschrieben -- prüfen Sie Ihre Benachrichtigungen oder kontaktieren Sie den Support, falls Sie ihn nicht erhalten haben.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
