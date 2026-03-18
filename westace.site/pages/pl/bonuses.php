<?php
/**
 * Bonuses Page - WestAce (Polish / PL)
 */
$page_title = 'WestAce Bonusy - Bonus Powitalny, Darmowe Spiny, Cashback & Program VIP';
$page_description = 'Wszystkie bonusy ' . SITE_NAME . ' Kasyno w jednym miejscu. Pakiet powitalny do 8 600 zł + 150 darmowych spinów na 3 depozyty, bonus krypto, cotygodniowe doładowania, codzienny cashback, cashback w kasynie na żywo, program VIP i więcej.';
$current_page = 'bonuses';
$lang_prefix = '/pl';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Bonusy Kasynowe';
$hero_description = 'Wszystkie aktywne promocje, oferty powitalne i nagrody lojalnościowe aktualnie dostępne. Zapoznaj się z regulaminem przed skorzystaniem z oferty.';
$hero_cta = 'Odbierz Bonus';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Welcome Casino Package -->
  <section class="content-section" id="welcome">
    <div class="container">
      <h2>Pakiet Powitalny dla Nowych Graczy</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Nowi gracze w <?php echo SITE_NAME; ?> mogą odebrać pakiet powitalny na trzy depozyty o łącznej wartości do 8 600 zł + 150 darmowych spinów. Każdy depozyt wiąże się z bonusem 100% i 50 darmowymi spinami. Minimalny kwalifikujący depozyt to 85 zł na każdy poziom. Kod promocyjny nie jest wymagany - wystarczy odwiedzić kasę, wybrać ofertę i dokonać kwalifikującego depozytu.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-bonuses-screen.png" alt="<?php echo SITE_NAME; ?> Kasyno strona promocji z bonusem powitalnym i aktywnymi ofertami" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <!-- Casino Welcome - Deposit 1 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">1. Depozyt: 100% do 4 300 zł + 50 Darmowych Spinów</div>
          <span class="bonus-card__tag">Kasyno</span>
        </div>
        <p>Dokonaj pierwszego depozytu w wysokości co najmniej 85 zł i otrzymaj bonus 100% do 4 300 zł. Dodatkowo 50 darmowych spinów zostanie przyznanych na wybranym automacie. Wymóg obrotu wynosi 35x od kwoty bonusu + depozytu. Wygrane z darmowych spinów mają osobny wymóg obrotu 40x.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Depozyt</div>
            <div class="bonus-detail__value">85 zł</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obrót</div>
            <div class="bonus-detail__value">35x (B+D)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obrót DS</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Darmowe Spiny</div>
            <div class="bonus-detail__value">50 DS</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome - Deposit 2 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2. Depozyt: 100% do 2 150 zł + 50 Darmowych Spinów</div>
          <span class="bonus-card__tag">Kasyno</span>
        </div>
        <p>Twój drugi depozyt kwalifikuje się do bonusu 100% do 2 150 zł oraz kolejnych 50 darmowych spinów. Obowiązują te same wymagania dotyczące obrotu co w przypadku bonusu na pierwszy depozyt.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Depozyt</div>
            <div class="bonus-detail__value">85 zł</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obrót</div>
            <div class="bonus-detail__value">35x (B+D)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obrót DS</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Darmowe Spiny</div>
            <div class="bonus-detail__value">50 DS</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome - Deposit 3 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">3. Depozyt: 100% do 2 150 zł + 50 Darmowych Spinów</div>
          <span class="bonus-card__tag">Kasyno</span>
        </div>
        <p>Trzeci depozyt przynosi bonus 100% do 2 150 zł i 50 darmowych spinów. Tym samym łączna wartość pakietu powitalnego wynosi 8 600 zł w środkach bonusowych i 150 darmowych spinów na Twoje pierwsze trzy depozyty.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Depozyt</div>
            <div class="bonus-detail__value">85 zł</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obrót</div>
            <div class="bonus-detail__value">35x (B+D)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obrót DS</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Darmowe Spiny</div>
            <div class="bonus-detail__value">50 DS</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Crypto Welcome -->
  <section class="content-section content-section--alt" id="crypto-welcome">
    <div class="container">
      <h2>Krypto Bonus Powitalny</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Krypto: 200% do 3 000 USDT</div>
          <span class="bonus-card__tag">Krypto</span>
        </div>
        <p>Jeśli wolisz wpłacać kryptowalutą, mamy osobną ofertę powitalną specjalnie dla Ciebie. Dokonaj pierwszego depozytu krypto w wysokości co najmniej 100 USDT i otrzymaj bonus 200% do 3 000 USDT. Wymóg obrotu wynosi 40x od kwoty bonusu.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Depozyt</div>
            <div class="bonus-detail__value">100 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obrót</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Maks Bonus</div>
            <div class="bonus-detail__value">3 000 USDT</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Weekly Reload -->
  <section class="content-section" id="weekly-reload">
    <div class="container">
      <h2>Cotygodniowe Doładowanie</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Cotygodniowe Doładowanie: 70 Darmowych Spinów</div>
          <span class="bonus-card__tag">Pon-Czw</span>
        </div>
        <p>Co tydzień od poniedziałku do czwartku dokonaj depozytu w wysokości co najmniej 85 zł i otrzymaj 70 darmowych spinów na wybranym automacie. Wygrane z darmowych spinów mają wymóg obrotu 40x i muszą zostać wykorzystane w ciągu 10 dni.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Depozyt</div>
            <div class="bonus-detail__value">85 zł</div>
          </div>
          <div>
            <div class="bonus-detail__label">Darmowe Spiny</div>
            <div class="bonus-detail__value">70 DS</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obrót</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Ważność</div>
            <div class="bonus-detail__value">10 dni</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Weekend Reload -->
  <section class="content-section content-section--alt" id="weekend-reload">
    <div class="container">
      <h2>Weekendowy Bonus Doładowania</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Weekend: 50% do 2 150 zł + 70 Darmowych Spinów</div>
          <span class="bonus-card__tag">Weekend</span>
        </div>
        <p>Rozpocznij weekend z bonusem 50% do 2 150 zł. Jeśli Twój depozyt wynosi 215 zł lub więcej, otrzymasz również 70 darmowych spinów. Depozyty poniżej 215 zł nadal kwalifikują się do bonusu 50%, ale darmowe spiny nie są wliczone. Wymóg obrotu wynosi 35x od kwoty bonusu.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Depozyt</div>
            <div class="bonus-detail__value">85 zł</div>
          </div>
          <div>
            <div class="bonus-detail__label">DS Min. Depozyt</div>
            <div class="bonus-detail__value">215 zł</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obrót</div>
            <div class="bonus-detail__value">35x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Darmowe Spiny</div>
            <div class="bonus-detail__value">70 DS</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Crypto Reloads -->
  <section class="content-section" id="crypto-reloads">
    <div class="container">
      <h2>Bonusy Doładowania Krypto</h2>
      <p>Gracze wpłacający kryptowalutą mają dostęp do ekskluzywnych cotygodniowych i weekendowych ofert doładowania z wyższymi procentami bonusu.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Krypto Tygodniowy: 60% do 1 000 USDT</div>
          <span class="bonus-card__tag">Krypto</span>
        </div>
        <p>Wpłać co najmniej 50 USDT w ciągu tygodnia i otrzymaj bonus 60% do 1 000 USDT. Wymóg obrotu wynosi 30x od kwoty bonusu. Maksymalna wygrana z tego bonusu jest ograniczona do 5x kwoty bonusu.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Depozyt</div>
            <div class="bonus-detail__value">50 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obrót</div>
            <div class="bonus-detail__value">30x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Maks Wygrana</div>
            <div class="bonus-detail__value">5x bonus</div>
          </div>
        </div>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Krypto Weekend: 75% do 750 USDT + 100 DS</div>
          <span class="bonus-card__tag">Krypto</span>
        </div>
        <p>W weekendy depozyty krypto od 75 USDT kwalifikują się do bonusu 75% do 750 USDT plus 100 darmowych spinów. Maksymalna wygrana z tego bonusu jest ograniczona do 5x kwoty bonusu.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Depozyt</div>
            <div class="bonus-detail__value">75 USDT</div>
          </div>
          <div>
            <div class="bonus-detail__label">Darmowe Spiny</div>
            <div class="bonus-detail__value">100 DS</div>
          </div>
          <div>
            <div class="bonus-detail__label">Maks Wygrana</div>
            <div class="bonus-detail__value">5x bonus</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Daily Cashback -->
  <section class="content-section content-section--alt" id="cashback">
    <div class="container">
      <h2>Codzienny Cashback</h2>
      <p>Gracze na poziomach VIP od 2 do 5 otrzymują codzienny cashback od strat netto z zakładów za prawdziwe pieniądze w kasynie. Procent rośnie wraz z poziomem VIP, a wymóg obrotu to zaledwie 1x - zagraj raz i cashback jest Twój.</p>

      <div class="data-table-wrap">
        <table class="data-table">
          <thead>
            <tr>
              <th>Poziom VIP</th>
              <th>Cashback %</th>
              <th>Min Cashback</th>
              <th>Maks Cashback</th>
              <th>Obrót</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Poziom 2</td>
              <td>3%</td>
              <td>4,30 zł</td>
              <td>430 zł</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Poziom 3</td>
              <td>5%</td>
              <td>4,30 zł</td>
              <td>860 zł</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Poziom 4</td>
              <td>10%</td>
              <td>4,30 zł</td>
              <td>1 290 zł</td>
              <td>1x</td>
            </tr>
            <tr>
              <td>Poziom 5</td>
              <td>15%</td>
              <td>4,30 zł</td>
              <td>1 720 zł</td>
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
      <h2>Cashback w Kasynie na Żywo</h2>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Cashback na Żywo: do 25%</div>
          <span class="bonus-card__tag">Kasyno na Żywo</span>
        </div>
        <p>Wszyscy gracze mogą odebrać do 25% cashbacku od strat netto w grach kasyna na żywo, z maksymalną wypłatą 1 290 zł. Wymóg obrotu to zaledwie 1x. Ten cashback należy jednak zgłosić ręcznie przez czat na żywo lub e-mail w każdy poniedziałek między 06:00 a 23:59 UTC. Jeśli przegapisz okno zgłoszenia, cashback za dany tydzień przepada.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Maks Cashback</div>
            <div class="bonus-detail__value">1 290 zł</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obrót</div>
            <div class="bonus-detail__value">1x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Dzień Zgłoszenia</div>
            <div class="bonus-detail__value">Poniedziałek</div>
          </div>
          <div>
            <div class="bonus-detail__label">Okno Zgłoszenia</div>
            <div class="bonus-detail__value">06:00-23:59 UTC</div>
          </div>
        </div>
      </div>

      <div class="highlight-box" style="margin-top: var(--space-4);">
        <h4>Jak Odebrać Cashback w Kasynie na Żywo</h4>
        <p>Skontaktuj się z zespołem pomocy przez czat na żywo lub e-mail (support@westace.com) w poniedziałek między 06:00 a 23:59 UTC, aby zgłosić cashback w kasynie na żywo. Cashback jest obliczany na podstawie strat netto z poprzedniego tygodnia i zostanie dodany do Twojego konta po przetworzeniu zgłoszenia.</p>
      </div>
    </div>
  </section>

  <!-- VIP -->
  <section class="content-section content-section--alt" id="vip">
    <div class="container">
      <h2>Program VIP</h2>
      <p>Program VIP <?php echo SITE_NAME; ?> nagradza lojalnych graczy przez pięć poziomów. Awansując w hierarchii, odblokowujesz lepsze stawki cashbacku, wyższe limity wypłat, spersonalizowane oferty i dedykowanego opiekuna VIP. Program jest otwarty dla wszystkich zarejestrowanych graczy.</p>

      <h3>Korzyści VIP</h3>
      <ul class="check-list">
        <li>Codzienny cashback rosnący od 3% do 15% w zależności od poziomu VIP</li>
        <li>Wyższe limity depozytów i wypłat na wyższych poziomach</li>
        <li>Osobisty opiekun VIP dla graczy na najwyższym poziomie</li>
        <li>Spersonalizowane oferty bonusowe i promocje</li>
        <li>Priorytetowa obsługa i szybsze przetwarzanie wypłat</li>
      </ul>

      <h3>Awans Między Poziomami</h3>
      <p>Dokładne kryteria awansu między poziomami VIP nie są publicznie ujawniane. Postęp zależy od Twojej ogólnej aktywności w kasynie. Skontaktuj się z zespołem pomocy, aby uzyskać informacje o swoim aktualnym statusie VIP i wymaganiach do osiągnięcia kolejnego poziomu.</p>

      <table class="quick-table">
        <tr><th>Funkcja</th><th>Szczegóły</th></tr>
        <tr><td>Poziomy VIP</td><td>5 poziomów</td></tr>
        <tr><td>Zakres Cashbacku</td><td>3% (Poziom 2) do 15% (Poziom 5)</td></tr>
        <tr><td>Obrót Cashbacku</td><td>1x</td></tr>
        <tr><td>Osobisty Opiekun</td><td>Dostępny na wyższych poziomach</td></tr>
        <tr><td>Awans</td><td>Na podstawie ogólnej aktywności (kryteria niepubliczne)</td></tr>
      </table>
    </div>
  </section>

  <!-- No-Deposit Info -->
  <section class="content-section" id="no-deposit">
    <div class="container container--narrow">
      <h2><?php echo SITE_NAME; ?> Bonus Bez Depozytu</h2>
      <p>Obecnie <?php echo SITE_NAME; ?> nie oferuje bonusu bez depozytu. Pakiet powitalny wymaga minimalnego pierwszego depozytu w wysokości 85 zł do aktywacji. Obserwuj sekcję Promocje i sprawdzaj regularnie, ponieważ często zmieniamy nasze oferty i możemy wprowadzić oferty bez depozytu w przyszłości.</p>
    </div>
  </section>

  <!-- Bonus FAQ -->
  <section class="content-section content-section--alt" id="bonus-faq">
    <div class="container container--narrow">
      <h2>FAQ Bonusów</h2>

      <details class="faq-item">
        <summary>Czy potrzebuję kodu promocyjnego, żeby odebrać bonus?</summary>
        <div class="faq-answer">
          <p>Nie. Wszystkie bonusy w <?php echo SITE_NAME; ?> można odebrać bez kodu promocyjnego. Wystarczy odwiedzić kasę, wybrać ofertę i dokonać kwalifikującego depozytu. Niektóre bonusy mogą wymagać aktywacji w sekcji Mój Bonus na Twoim koncie.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jaka jest łączna wartość pakietu powitalnego?</summary>
        <div class="faq-answer">
          <p>Pełny pakiet powitalny jest warty do 8 600 zł w środkach bonusowych plus 150 darmowych spinów na trzy depozyty. Każdy depozyt otrzymuje bonus 100%: do 4 300 zł na pierwszy i do 2 150 zł na każdy z pozostałych dwóch.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy mogę łączyć wiele bonusów?</summary>
        <div class="faq-answer">
          <p>Nie. Musisz dokończyć lub zrezygnować z aktywnego bonusu przed odebraniem nowego. Bonusy nie mogą być łączone.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Co się stanie, jeśli zlecę wypłatę przed spełnieniem wymogów obrotu?</summary>
        <div class="faq-answer">
          <p>Zlecenie wypłaty przed spełnieniem wymogu obrotu spowoduje anulowanie bonusu i wszelkich powiązanych wygranych. Spełnij pełen wymóg obrotu przed zleceniem wypłaty.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jak działa codzienny cashback?</summary>
        <div class="faq-answer">
          <p>Codzienny cashback jest dostępny dla poziomów VIP od 2 do 5. Jest obliczany od strat netto z zakładów za prawdziwe pieniądze w kasynie. Procent waha się od 3% do 15% w zależności od poziomu VIP. Wymóg obrotu to zaledwie 1x, co oznacza, że wystarczy obrócić kwotę cashbacku raz przed wypłatą.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy wszystkie gry przyczyniają się jednakowo do obrotu?</summary>
        <div class="faq-answer">
          <p>Nie. Różne typy gier przyczyniają się w różnym stopniu. Automaty zazwyczaj przyczyniają się w 100%, podczas gdy gry stołowe i tytuły kasyna na żywo mają niższy wkład. Sprawdź regulamin bonusu, aby poznać dokładną tabelę wkładów.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy istnieje osobny bonus dla depozytów krypto?</summary>
        <div class="faq-answer">
          <p>Tak. Gracze wpłacający kryptowalutą mogą odebrać bonus powitalny 200% do 3 000 USDT, a także cotygodniowe i weekendowe oferty doładowania krypto. Są one oddzielne od standardowych bonusów PLN i mają własne wymagania dotyczące obrotu.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
