<?php
/**
 * Bonuses Page - German
 */
$page_title = SITE_NAME . ' Boni - Willkommensbonus, Freispiele, Promo-Codes & Angebote ohne Einzahlung';
$page_description = 'Alle ' . SITE_NAME . ' Casino Boni auf einen Blick. Willkommensbonus bis zu EUR 500 + 200 Freispiele, Promo-Codes ohne Einzahlung, wöchentliche Reload-Angebote, Cashback-Deals und VIP-Belohnungen.';
$current_page = 'bonuses';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Casino Boni';
$hero_description = 'Alle aktiven Aktionen, Willkommensangebote und Treueprämien auf einen Blick. Lies dir die Bedingungen durch, bevor du ein Angebot beanspruchst.';
$hero_cta = 'Bonus sichern';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Welcome Bonuses -->
  <section class="content-section" id="welcome">
    <div class="container">
      <h2>Willkommensboni für neue Spieler</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <p style="margin-top:0">Ersteinzahler bei <?php echo SITE_NAME; ?> können aus mehreren Willkommensangeboten wählen – je nachdem, ob sie Casino-Spiele oder Sportwetten bevorzugen. Jede Option ist bei deiner allerersten Einzahlung verfügbar und kann nicht mit anderen Aktionen kombiniert werden.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/casea-bonuses.png" alt="<?php echo SITE_NAME; ?> Casino Aktionen und Willkommensbonus-Angebote" style="max-width:300px;width:100%;">
        </div>
      </div>

      <!-- Casino Welcome -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">100% bis zu &euro;500 + 200 Freispiele</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Zahle mindestens EUR 20 ein, um einen vollen 100%-Match auf deine erste Einzahlung zu erhalten – bis maximal EUR 500. Obendrauf gibt es 200 Freispiele, die in Paketen von 20 pro Tag über 10 aufeinanderfolgende Tage verteilt werden. Das erste Paket ist direkt nach deiner Einzahlung verfügbar. Du musst jedes Set innerhalb von 24 Stunden beanspruchen, sonst verfällt es. Bei einer Einzahlung von mindestens EUR 10 erhältst du außerdem 1 Bonus Crab Credit für einen Versuch an der Claw Machine, bei der Münzen, Freispiele, Boni oder Bargeldpreise winken.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Mindesteinzahlung</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Umsatzanforderung</div>
            <div class="bonus-detail__value">35x (Bonus + Einzahlung)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Freispiele-Umsatz</div>
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

      <!-- Multi-Deposit Welcome -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">250% bis zu &euro;3.000 + 350 Freispiele</div>
          <span class="bonus-card__tag">4-Einzahlungspaket</span>
        </div>
        <p>Ein mehrstufiges Willkommenspaket, verteilt auf deine ersten vier Einzahlungen. Die erste Einzahlung bringt dir 100% bis zu EUR 1.000 plus 200 Freispiele. Die zweite liefert einen 75%-Match bis zu EUR 500. Die dritte gibt 50% bis zu EUR 500 plus 50 Freispiele, und die vierte rundet das Ganze mit 25% bis zu EUR 1.000 plus 100 Freispielen ab.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Mindesteinzahlung</div>
            <div class="bonus-detail__value">&euro;20 pro Einzahlung</div>
          </div>
          <div>
            <div class="bonus-detail__label">Umsatzanforderung</div>
            <div class="bonus-detail__value">35x pro Bonus</div>
          </div>
          <div>
            <div class="bonus-detail__label">Max. Auszahlung</div>
            <div class="bonus-detail__value">10x Bonusbetrag</div>
          </div>
          <div>
            <div class="bonus-detail__label">Gültigkeit</div>
            <div class="bonus-detail__value">10 Tage pro Bonus</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">100% Sportbonus bis zu &euro;100</div>
          <span class="bonus-card__tag">Sports</span>
        </div>
        <p>Sportwetten-Spieler können einen 100%-Match auf ihre erste Einzahlung erhalten. Der maximale Bonus variiert je nach Region: Spieler aus Finnland, Deutschland, Norwegen, der Schweiz und Österreich erhalten bis zu EUR 200. Italienische Spieler bekommen bis zu EUR 150. Spieler aus Kasachstan, Usbekistan, Kirgisistan, Tadschikistan, Georgien und Aserbaidschan können bis zu EUR 50 erhalten. Um den Bonus zu aktivieren, muss der gesamte Einzahlungsbetrag bei Sportwetten mit einer Mindestquote von 1,50 umgesetzt werden.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Mindesteinzahlung</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Umsatzanforderung</div>
            <div class="bonus-detail__value">5x oder 6x (je nach Land)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Mindestquote</div>
            <div class="bonus-detail__value">2.0 Einzelwetten / 1.5 Kombiwetten</div>
          </div>
          <div>
            <div class="bonus-detail__label">Gültigkeit</div>
            <div class="bonus-detail__value">30 Tage</div>
          </div>
        </div>
      </div>

      <div class="highlight-box">
        <h4><?php echo SITE_NAME; ?> Promo-Code</h4>
        <p>Wenn du einen Promo-Code hast, kannst du ihn während der Registrierung eingeben. Das Code-Feld erscheint im Anmeldeformular direkt nachdem du deinen bevorzugten Willkommensbonus ausgewählt hast. Promo-Codes können besondere Angebote oder angepasste Bonusbedingungen freischalten – es lohnt sich also, vor der Einzahlung nachzuschauen.</p>
      </div>
    </div>
  </section>

  <!-- Reload & Weekly -->
  <section class="content-section content-section--alt" id="reload">
    <div class="container">
      <h2>Wöchentliche Reload-Boni</h2>
      <p><?php echo SITE_NAME; ?> hält auch nach der Willkommensphase die Aktionen am Laufen. Diese wiederkehrenden Angebote werden jede Woche erneuert, sodass aktive Spieler immer etwas zum Beanspruchen haben.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">66 wöchentliche Freispiele</div>
          <span class="bonus-card__tag">Montag - Donnerstag</span>
        </div>
        <p>Tätige eine Einzahlung von EUR 20 oder mehr zwischen Montag und Donnerstag, um 66 Freispiele für einen ausgewählten Slot zu erhalten. Du musst dich jede Woche vor der Einzahlung anmelden. Die Spins müssen innerhalb von 7 Tagen genutzt werden, und Gewinne unterliegen einer 40x Umsatzanforderung mit einem 10-tägigen Erfüllungszeitraum. Max. Einsatz bei aktivem Bonus: EUR 5.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Wochenend-Reload: 50% bis zu &euro;777 + 77 Freispiele</div>
          <span class="bonus-card__tag">Freitag - Sonntag</span>
        </div>
        <p>Zahle am Wochenende mindestens EUR 20 ein, um einen 50%-Match bis zu EUR 777 zu erhalten. Bei einer Einzahlung ab EUR 50 bekommst du zusätzlich 77 Freispiele für einen ausgewählten Slot. Eine Anmeldung vor der Einzahlung ist erforderlich. Die Umsatzanforderung beträgt 35x auf Einzahlung plus Bonus und 40x auf Freispielgewinne. Du hast 10 Tage, um die Anforderungen zu erfüllen.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Wöchentlicher Sport-Reload: 55% bis zu &euro;750</div>
          <span class="bonus-card__tag">Sports</span>
        </div>
        <p>Einmal pro Woche qualifiziert sich deine größte Einzahlung für einen 55%-Sportbonus bis zu EUR 750. Die Einzahlung muss einmal bei Sportwetten mit einer Quote von 1,50 oder höher umgesetzt werden, bevor der Bonus gutgeschrieben wird. Anschließend kannst du ihn per Live-Chat oder E-Mail anfordern. Die Umsatzanforderungen müssen innerhalb von 30 Tagen erfüllt werden, und die maximale Auszahlung aus diesem Bonus beträgt das 10-fache seines Werts.</p>
      </div>
    </div>
  </section>

  <!-- Cashback -->
  <section class="content-section" id="cashback">
    <div class="container">
      <h2>Cashback-Programme</h2>
      <p><?php echo SITE_NAME; ?> betreibt drei separate Cashback-Programme: tägliches Cashback für Casino-Spiele, wöchentliches Cashback fürs Live Casino und wöchentliches Cashback für Sportwetten. Jedes Programm hat seine eigenen Bedingungen und seinen eigenen Beanspruchungsprozess.</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Tägliches Casino-Cashback</h4>
          <p>Verfügbar ab VIP-Level 2. VIP 2 erhält 3% bis zu EUR 100 täglich. VIP 3 bekommt 5% bis zu EUR 200. VIP 4 erhält 10% bis zu EUR 300. VIP 5 bekommt 15% bis zu EUR 400. Das Cashback wird automatisch um 04:00 UTC gutgeschrieben und erfordert einen 1x Umsatz. Du musst dich alle 4 Wochen erneut anmelden.</p>
        </div>
        <div class="info-card">
          <h4>Live Casino Cashback: 25% bis zu &euro;350</h4>
          <p>Wöchentliches Cashback auf Nettoverluste bei Live Casino Spielen. Der Mindestverlust beträgt EUR 5. Kontaktiere den Kundenservice am Montag nach 06:00 UTC (vor 23:59 UTC), um es zu beanspruchen. Nach der Gutschrift erfordert das Cashback einen 1x Umsatz vor der Auszahlung.</p>
        </div>
        <div class="info-card">
          <h4>Sport-Cashback: 10% bis zu &euro;500</h4>
          <p>Deckt Nettoverluste bei Sportwetten von Montag bis Sonntag ab. Mindestverlust von EUR 20 erforderlich. Kontaktiere den Support am Montag zur Beanspruchung. Das Cashback hat eine 3x Umsatzanforderung und kann nur im Sportwetten-Bereich verwendet werden.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sports Promos -->
  <section class="content-section content-section--alt" id="sports-promos">
    <div class="container">
      <h2>Sportwetten-Aktionen</h2>
      <p>Neben dem Willkommensbonus und dem Cashback bietet der Sportwetten-Bereich mehrere Tools, die deinen Wetten zusätzlichen Wert verleihen.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Kombiwetten-Boost: bis zu 100%</div>
        </div>
        <p>Platziere eine Kombiwette mit 3 oder mehr Auswahlen bei Quoten von jeweils 1,40+, und deine Gewinne erhalten einen Boost. Der Multiplikator startet bei 3% für 3 Tipps und steigt auf 100% bei 21 oder mehr. Nur Echtgeld-Wetten zählen. Eine Auszahlungsanforderung vor der Gutschrift des Bonus macht diesen ungültig.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2-Tore-Vorsprung Frühzeitige Auszahlung</div>
        </div>
        <p>Wenn dein Team mit 2 Toren in Führung geht, wird deine Pre-Match 1X2-Wette sofort voll ausgezahlt – du musst nicht auf den Abpfiff warten. Dieses Angebot gilt nur für Heim- oder Auswärtssieg-Wetten. Live-Wetten und Unentschieden-Wetten sind ausgeschlossen, und ein Cashout storniert die frühzeitige Auszahlung.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Bet Builder: 50% risikofrei bis zu &euro;50</div>
        </div>
        <p>Platziere einen Bet Builder mit einer Quote von 1,70 oder höher und setze mindestens EUR 20 Echtgeld ein. Bei einer Niederlage erhältst du eine Gratiswette im Wert von 50% deines Einsatzes (bis zu EUR 50). Einmal pro Woche verfügbar. Die Gratiswette muss innerhalb von 3 Tagen genutzt werden und hat eine 3x Umsatzanforderung bei Quoten von 1,50+.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Enhanced Odds</div>
        </div>
        <p>Ausgewählte Pre-Match 1X2-Märkte bieten gelegentlich verbesserte Quoten. Achte auf den „Enhanced Prices"-Hinweis in der Marktbeschreibung. Gewinne aus Enhanced-Odds-Wetten werden als Echtgeld ausgezahlt, ohne zusätzliche Umsatzanforderungen.</p>
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
          <p><?php echo SITE_NAME; ?> betreibt ein mehrstufiges Treueprogramm, in dem du basierend auf deiner Wettaktivität aufsteigst. Mit jedem Rang schaltest du Vorteile wie einen persönlichen Account Manager, höhere Auszahlungslimits, exklusive Bonusangebote und höhere Cashback-Prozentsätze frei. Die höchsten VIP-Stufen bieten Zugang zu den besten wöchentlichen Cashback-Deals und schnellerer Auszahlungsbearbeitung.</p>

          <h3>Bonus Crab</h3>
          <p>Jede Einzahlung von EUR 20 oder mehr bringt dir 1 Bonus Crab Credit. Nutze ihn, um an der Claw Machine einen Zufallspreis zu „fangen" – mögliche Gewinne sind Bonusgeld, Freispiele oder Münzen. Ein kleiner täglicher Bonus, der deinen Sessions etwas Abwechslung verleiht.</p>
        </div>
        <div>
          <h3>Exklusiver Shop</h3>
          <p>Münzen, die du durch Spielen, Challenges und Aktionen verdienst, kannst du im Shop ausgeben. Die Belohnungen reichen von Freispielen auf ausgewählten Slots (z.B. 5 Spins bei Sweet Bonanza für 30 Münzen) bis hin zu Bonusgeld (EUR 5 für 50 Münzen, bis zu EUR 250 für 1.200 Münzen). Eine tolle Möglichkeit, deine Treue in deinem eigenen Tempo in echte Belohnungen umzuwandeln.</p>

          <h3>Challenges</h3>
          <p>Wöchentliche Challenges belohnen dich für das Erreichen einfacher Ziele. Casino-Challenges können dich zum Beispiel auffordern, EUR 0,30-Einsätze auf bestimmten Slots zu platzieren, während Sport-Challenges EUR 15-Wetten auf Spiele mit einer Mindestquote von 2,0 verlangen können. Jede abgeschlossene Challenge bringt Münzen, und 20 Abschlüsse in einer Woche bringen einen 50-Münzen-Bonus.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- No-Deposit Info -->
  <section class="content-section content-section--alt" id="no-deposit">
    <div class="container container--narrow">
      <h2><?php echo SITE_NAME; ?> Bonus ohne Einzahlung</h2>
      <p>Derzeit bietet <?php echo SITE_NAME; ?> keinen klassischen Bonus ohne Einzahlung an. Allerdings belohnt das Bonus Crab Feature jede Einzahlung ab EUR 10 mit einem kostenlosen Versuch an der Claw Machine, bei der du Spins, Bonusgeld, Münzen oder Bargeldpreise gewinnen kannst – ohne zusätzliche Umsatzanforderungen für den ersten Gewinn. Das kommt einem Bonus ohne Einzahlung auf der Plattform derzeit am nächsten.</p>
      <p>Behalte den Aktionsbereich im Auge und schau regelmäßig vorbei – das Casino wechselt seine Angebote häufig und könnte in Zukunft Angebote ohne Einzahlung oder kostenlose Bonus-Codes einführen.</p>
    </div>
  </section>

  <!-- Bonus FAQ -->
  <section class="content-section" id="bonus-faq">
    <div class="container container--narrow">
      <h2>Bonus-FAQ</h2>

      <details class="faq-item">
        <summary>Kann ich einen Promo-Code bei <?php echo SITE_NAME; ?> verwenden?</summary>
        <div class="faq-answer">
          <p>Ja. Bei der Registrierung siehst du eine Option zur Eingabe eines Promo-Codes, nachdem du deinen bevorzugten Willkommensbonus ausgewählt hast. Wenn du einen gültigen Code hast, gib ihn dort ein, um die damit verbundenen Vorteile zu aktivieren.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kann ich mehrere Boni kombinieren?</summary>
        <div class="faq-answer">
          <p>Nein. Willkommensboni und Reload-Aktionen können nicht kombiniert werden. Du musst einen aktiven Bonus abschließen oder stornieren, bevor du einen neuen beanspruchst. Manche Boni können über den Profilbereich oder durch Kontakt mit dem Support storniert werden.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Was passiert, wenn ich eine Auszahlung beantrage, bevor die Umsatzanforderung erfüllt ist?</summary>
        <div class="faq-answer">
          <p>Eine Auszahlungsanforderung vor Abschluss der Umsatzanforderungen macht den Bonus und alle damit verbundenen Gewinne ungültig. Stelle sicher, dass du den Umsatz vollständig erfüllt hast, bevor du eine Auszahlung beantragst.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Tragen alle Spiele gleich zum Umsatz bei?</summary>
        <div class="faq-answer">
          <p>Nein. Verschiedene Spieltypen tragen unterschiedlich bei. Slots tragen in der Regel 100% bei, während Tischspiele und Live Casino Titel weniger beitragen können. Die genaue Beitragstabelle findest du in den Bonusbedingungen.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Sind Einzahlungen über Skrill und Neteller bonusfähig?</summary>
        <div class="faq-answer">
          <p>In den meisten Fällen qualifizieren sich Einzahlungen über Skrill oder Neteller nicht für die Willkommensboni. Prüfe die jeweiligen Aktionsbedingungen für mögliche Ausnahmen.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
