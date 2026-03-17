<?php
/**
 * Bonuses Page – Polish
 */
$page_title = SITE_NAME . ' Bonusy - Bonus powitalny, darmowe spiny, cashback i nagrody VIP';
$page_description = 'Wszystkie bonusy ' . SITE_NAME . ' Casino w jednym miejscu. Pakiet powitalny do 2 000 EUR + 300 darmowych spinów na 3 depozyty, bonus sportowy do 500 EUR, cotygodniowe oferty doładowania, programy cashback, nagrody VIP i więcej.';
$current_page = 'bonuses';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = 'Bonusy ' . SITE_NAME . ' Casino';
$hero_description = 'Wszystkie aktywne promocje, oferty powitalne i nagrody lojalnościowe dostępne w tej chwili. Zapoznaj się z regulaminem przed aktywacją oferty.';
$hero_cta = 'Odbierz bonus';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Welcome Casino Package -->
  <section class="content-section" id="welcome">
    <div class="container">
      <h2>Bonusy powitalne dla nowych graczy</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <p style="margin-top:0">Nowi gracze w <?php echo SITE_NAME; ?> mogą wybrać pakiet powitalny kasyna lub pakiet powitalny na sport. Oferta kasynowa rozłożona jest na trzy depozyty o łącznej wartości do 2 000 EUR + 300 darmowych spinów. Pakiet sportowy daje do 500 EUR na trzy depozyty. Każda opcja jest dostępna przy pierwszej kwalifikującej wpłacie i nie może być łączona z innymi promocjami.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-promotions.png" alt="<?php echo SITE_NAME; ?> Casino promotions page showing welcome package and VIP cashback offers" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>

      <!-- Casino Welcome – Deposit 1 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">1. depozyt: 100% do &euro;500 + 100 darmowych spinów</div>
          <span class="bonus-card__tag">Kasyno</span>
        </div>
        <p>Wpłać co najmniej 20 EUR na pierwszy depozyt i otrzymaj 100% dopłaty do 500 EUR. Dodatkowo 100 darmowych spinów zostanie przyznanych w paczkach po 20 dziennie przez 5 kolejnych dni. Pierwsza paczka jest dostępna od razu po zaksięgowaniu depozytu. Każda paczka musi zostać wykorzystana w ciągu 24 godzin, w przeciwnym razie wygasa. Depozyt od 10 EUR daje również 1 kredyt Bonus Crab na próbę w Łapaczu Nagród, gdzie do wygrania są monety, darmowe spiny, środki bonusowe lub nagrody pieniężne.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. depozyt</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obrót</div>
            <div class="bonus-detail__value">35x (bonus + depozyt)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obrót darmowych spinów</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Ważność</div>
            <div class="bonus-detail__value">10 dni</div>
          </div>
          <div>
            <div class="bonus-detail__label">Maks. zakład</div>
            <div class="bonus-detail__value">&euro;5</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome – Deposit 2 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2. depozyt: 75% do &euro;750 + 75 darmowych spinów</div>
          <span class="bonus-card__tag">Kasyno</span>
        </div>
        <p>Drugi depozyt od 20 EUR kwalifikuje się do 75% dopłaty do 750 EUR plus 75 darmowych spinów na wybranym automacie. Spiny są przyznawane w paczkach po 25 dziennie przez 3 dni. Obowiązują te same wymagania obrotu i okresy ważności co przy pierwszym depozycie.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. depozyt</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obrót</div>
            <div class="bonus-detail__value">35x (bonus + depozyt)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obrót darmowych spinów</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Ważność</div>
            <div class="bonus-detail__value">10 dni</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome – Deposit 3 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">3. depozyt: 50% do &euro;750 + 125 darmowych spinów</div>
          <span class="bonus-card__tag">Kasyno</span>
        </div>
        <p>Trzeci depozyt od 20 EUR daje 50% dopłaty do 750 EUR oraz 125 darmowych spinów przyznawanych w paczkach po 25 dziennie przez 5 dni. To zamyka łączną wartość pakietu powitalnego na 2 000 EUR w środkach bonusowych i 300 darmowych spinów na trzy depozyty.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. depozyt</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obrót</div>
            <div class="bonus-detail__value">35x (bonus + depozyt)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obrót darmowych spinów</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Ważność</div>
            <div class="bonus-detail__value">10 dni</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome – Deposit 1 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">1. depozyt sportowy: 100% do &euro;200</div>
          <span class="bonus-card__tag">Sport</span>
        </div>
        <p>Gracze sportowi otrzymują 100% dopłaty do pierwszego depozytu do 200 EUR. Maksymalna kwota bonusu zależy od regionu: gracze z Finlandii, Niemiec, Norwegii, Szwajcarii i Austrii mogą otrzymać do 200 EUR. Gracze z Włoch -- do 150 EUR. Gracze z Kazachstanu, Uzbekistanu, Kirgistanu, Tadżykistanu, Gruzji i Azerbejdżanu -- do 50 EUR. Aby aktywować bonus, pełna kwota depozytu musi zostać postawiona na zakłady sportowe z minimalnym kursem 1,50.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. depozyt</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obrót</div>
            <div class="bonus-detail__value">5x lub 6x (zależnie od kraju)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Min. kurs</div>
            <div class="bonus-detail__value">2.0 singli / 1.5 akumulatory</div>
          </div>
          <div>
            <div class="bonus-detail__label">Ważność</div>
            <div class="bonus-detail__value">30 dni</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome – Deposit 2 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2. depozyt sportowy: 75% do &euro;150</div>
          <span class="bonus-card__tag">Sport</span>
        </div>
        <p>Drugi depozyt sportowy od 20 EUR kwalifikuje się do 75% dopłaty do 150 EUR. Obowiązują te same warunki aktywacji i obrotu co przy pierwszym bonusie sportowym. Depozyt musi zostać w pełni obrócony na zakładach sportowych z minimalnym kursem 1,50, zanim bonus zostanie przyznany.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. depozyt</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obrót</div>
            <div class="bonus-detail__value">5x lub 6x (zależnie od kraju)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Ważność</div>
            <div class="bonus-detail__value">30 dni</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome – Deposit 3 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">3. depozyt sportowy: 50% do &euro;150</div>
          <span class="bonus-card__tag">Sport</span>
        </div>
        <p>Trzeci depozyt sportowy od 20 EUR kwalifikuje się do 50% dopłaty do 150 EUR. To zamyka pakiet powitalny na sport o łącznej wartości do 500 EUR na trzy depozyty. Wymagania obrotu muszą zostać spełnione w ciągu 30 dni od każdego depozytu.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. depozyt</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obrót</div>
            <div class="bonus-detail__value">5x lub 6x (zależnie od kraju)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Ważność</div>
            <div class="bonus-detail__value">30 dni</div>
          </div>
        </div>
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <div class="highlight-box" style="margin:0">
            <h4>Kod promocyjny <?php echo SITE_NAME; ?></h4>
            <p>Jeśli masz kod promocyjny, możesz go wpisać podczas rejestracji. Pole na kod pojawia się w formularzu rejestracyjnym, zaraz po wyborze preferowanego bonusu powitalnego. Kody promocyjne mogą odblokować specjalne oferty lub zmienione warunki bonusu, więc warto sprawdzić przed pierwszym depozytem.</p>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-account.png" alt="<?php echo SITE_NAME; ?> Casino bonus selection screen showing casino and sports welcome options" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>

      <div class="highlight-box" style="margin-top: var(--space-4);">
        <h4>Zasada maksymalnej wygranej</h4>
        <p>Gracze zamieszkali w Brazylii, Chile, Japonii, Peru i Tajlandii podlegają limitowi maksymalnej wygranej w wysokości 10-krotności kwoty bonusu na wszystkie gry z wykorzystaniem środków bonusowych. Dotyczy to bonusów powitalnych, bonusów doładowania i wszystkich innych ofert promocyjnych. Wygrane przekraczające ten limit zostaną odpowiednio skorygowane.</p>
      </div>
    </div>
  </section>

  <!-- Reload & Weekly -->
  <section class="content-section content-section--alt" id="reload">
    <div class="container">
      <h2>Cotygodniowe bonusy doładowania</h2>
      <p><?php echo SITE_NAME; ?> oferuje promocje na bieżąco, długo po zakończeniu fazy powitalnej. Te powtarzalne oferty odnawiają się co tydzień, dając aktywnym graczom coś do odebrania każdego tygodnia.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Tygodniowy boost: 50 darmowych spinów</div>
          <span class="bonus-card__tag">Poniedziałek - Czwartek</span>
        </div>
        <p>Wpłać 20 EUR lub więcej od poniedziałku do czwartku i otrzymaj 50 darmowych spinów na wybranym automacie. Musisz aktywować ofertę (opt-in) każdego tygodnia przed dokonaniem depozytu. Spiny należy wykorzystać w ciągu 7 dni, a wygrane podlegają obrotowi 40x z 10-dniowym terminem realizacji. Maksymalny zakład przy aktywnym bonusie: 5 EUR.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Weekend doładowania: 50% do &euro;500 + 75 darmowych spinów</div>
          <span class="bonus-card__tag">Piątek - Niedziela</span>
        </div>
        <p>Wpłać co najmniej 20 EUR w weekend i otrzymaj 50% dopłaty do 500 EUR. Jeśli Twój depozyt wynosi 50 EUR lub więcej, otrzymasz również 75 darmowych spinów na wybranym automacie. Musisz aktywować ofertę przed dokonaniem depozytu. Wymagany obrót to 35x od depozytu i bonusu oraz 40x od wygranych z darmowych spinów. Na spełnienie wymagań masz 10 dni.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Niedzielna oferta specjalna: 30% do &euro;300 + 50 darmowych spinów</div>
          <span class="bonus-card__tag">Tylko niedziela</span>
        </div>
        <p>Dodatkowa oferta dostępna wyłącznie w niedzielę, dla graczy szukających bonusu na początek nowego tygodnia. Wpłać 20 EUR lub więcej i otrzymaj 30% dopłaty do 300 EUR plus 50 darmowych spinów. Wymagana aktywacja oferty. Obrót: 35x od depozytu i bonusu, 40x od wygranych z darmowych spinów, 10 dni na realizację.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Tygodniowe doładowanie sportowe: 55% do &euro;300</div>
          <span class="bonus-card__tag">Sport</span>
        </div>
        <p>Raz w tygodniu Twój największy depozyt kwalifikuje się do 55% bonusu sportowego o wartości do 300 EUR. Depozyt musi zostać postawiony jednokrotnie na zakładach sportowych z minimalnym kursem 1,50, zanim bonus zostanie przyznany. Następnie możesz go odebrać przez czat na żywo lub email. Wymagania obrotu muszą zostać spełnione w ciągu 30 dni, a maksymalna wypłata z tego bonusu to 10-krotność jego wartości.</p>
      </div>
    </div>
  </section>

  <!-- Cashback -->
  <section class="content-section" id="cashback">
    <div class="container">
      <h2>Programy cashback</h2>
      <p><?php echo SITE_NAME; ?> prowadzi trzy oddzielne programy cashback: codzienny cashback na gry kasynowe, tygodniowy cashback na kasyno na żywo i tygodniowy cashback na zakłady sportowe. Każdy program ma własne warunki i proces odbioru.</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Codzienny cashback kasynowy</h4>
          <p>Dostępny od poziomu VIP 3 wzwyż. VIP 3 otrzymuje 5% dziennie do 200 EUR. VIP 4 -- 10% do 300 EUR. VIP 5 -- 15% do 500 EUR. Cashback jest przyznawany automatycznie o 04:00 UTC z wymaganiem obrotu 1x. Musisz ponownie aktywować ofertę co 4 tygodnie.</p>
        </div>
        <div class="info-card">
          <h4>Cashback na kasyno na żywo: 25% do &euro;350</h4>
          <p>Tygodniowy cashback od strat netto w grach kasyna na żywo. Minimalna kwalifikująca strata to 5 EUR. Skontaktuj się z pomocą techniczną w poniedziałek po 06:00 UTC (przed 23:59 UTC), aby odebrać bonus. Po przyznaniu cashback wymaga obrotu 1x przed wypłatą.</p>
        </div>
        <div class="info-card">
          <h4>Cashback sportowy: 15% do &euro;500</h4>
          <p>Obejmuje straty netto z zakładów sportowych postawionych od poniedziałku do niedzieli. Minimalna strata kwalifikująca to 20 EUR. Skontaktuj się z pomocą w poniedziałek, aby odebrać bonus. Cashback wymaga obrotu 3x i może być wykorzystany wyłącznie w sekcji sportowej.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sports Promos -->
  <section class="content-section content-section--alt" id="sports-promos">
    <div class="container">
      <h2>Promocje na zakłady sportowe</h2>
      <p>Poza bonusem powitalnym i cashbackiem sekcja sportowa zawiera kilka narzędzi, które zwiększają wartość Twoich zakładów.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Boost akumulatora: do 100%</div>
        </div>
        <p>Postaw zakład akumulatorowy z 3 lub więcej wydarzeniami, każde z kursem 1,40+, a Twoje wygrane otrzymają bonus. Mnożnik zaczyna się od 3% za 3 wydarzenia i rośnie do 100% za 21 lub więcej wydarzeń. Liczą się tylko zakłady za prawdziwe pieniądze. Zlecenie wypłaty przed przyznaniem boostu anuluje bonus.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Wcześniejsza wypłata przy prowadzeniu 2 bramkami</div>
        </div>
        <p>Jeśli Twoja drużyna prowadzi różnicą 2 bramek, Twój zakład pre-match 1X2 zostaje rozliczony jako wygrany -- bez czekania na ostatni gwizdek. Oferta dotyczy wyłącznie zakładów na wygraną gospodarzy lub gości. Zakłady live, zakłady na remis oraz wcześniejsza wypłata (cash out) wykluczają tę promocję.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Boost sportowy: 20% do &euro;100</div>
        </div>
        <p>Tygodniowy boost sportowy dostępny dla wszystkich aktywnych graczy. Wpłać 20 EUR lub więcej i otrzymaj 20% bonusu do 100 EUR na zakłady sportowe. Bonus wymaga obrotu 5x z minimalnym kursem 1,50 w ciągu 14 dni. Wymagana aktywacja w profilu konta.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Piątkowa przewaga: darmowy zakład do &euro;50</div>
        </div>
        <p>W każdy piątek postaw kwalifikujący zakład sportowy od 20 EUR z minimalnym kursem 1,80. Jeśli zakład przegra, otrzymasz darmowy zakład o wartości 50% stawki, do 50 EUR. Darmowy zakład musi zostać wykorzystany w ciągu 3 dni i wymaga obrotu 3x z minimalnym kursem 1,50.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Weekendowe doładowanie sportowe: 40% do &euro;200</div>
        </div>
        <p>Wpłać 20 EUR lub więcej w sobotę lub niedzielę i otrzymaj 40% bonusu sportowego do 200 EUR. Depozyt musi zostać postawiony jednokrotnie na zakładach sportowych z minimalnym kursem 1,50, zanim bonus się aktywuje. Wymagania obrotu muszą zostać spełnione w ciągu 30 dni, a maksymalna wypłata z tego bonusu to 10-krotność jego wartości.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Podwyższone kursy</div>
        </div>
        <p>Wybrane rynki pre-match 1X2 czasami oferują podwyższone kursy. Szukaj oznaczenia "Enhanced Prices" w opisie rynku. Wygrane z zakładów na podwyższonych kursach są wypłacane jako prawdziwe pieniądze bez dodatkowych wymagań obrotu.</p>
      </div>
    </div>
  </section>

  <!-- VIP, Shop, Crab -->
  <section class="content-section" id="vip">
    <div class="container">
      <h2>Program VIP i dodatki</h2>
      <div class="two-col">
        <div>
          <h3>Program VIP</h3>
          <p><?php echo SITE_NAME; ?> prowadzi pięciopoziomowy program lojalnościowy, w którym awansujesz na podstawie aktywności zakładowej. Poziomy to Bronze, Silver, Gold, Platinum i Diamond. W miarę awansu odblokowujesz korzyści takie jak osobisty opiekun konta, wyższe limity wypłat, ekskluzywne oferty bonusowe i wyższe procenty cashbacku. Członkowie Diamond mają dostęp do najlepszych tygodniowych ofert cashback, priorytetowych wypłat i zaproszeń na ekskluzywne wydarzenia.</p>

          <h4>Korzyści na poszczególnych poziomach VIP</h4>
          <table class="quick-table">
            <tr><th>Poziom</th><th>Korzyści</th></tr>
            <tr><td>Bronze</td><td>Podstawowe stawki cashback, dostęp do standardowych promocji, monety za aktywność</td></tr>
            <tr><td>Silver</td><td>Lepszy cashback (3%), szybsza realizacja wypłat, bonus urodzinowy</td></tr>
            <tr><td>Gold</td><td>5% cashback do 200 EUR/dzień, osobisty opiekun konta, wyższe limity wypłat</td></tr>
            <tr><td>Platinum</td><td>10% cashback do 300 EUR/dzień, ekskluzywne promocje, priorytetowa pomoc</td></tr>
            <tr><td>Diamond</td><td>15% cashback do 500 EUR/dzień, najwyższe limity, wydarzenia VIP, oferty na zamówienie</td></tr>
          </table>

          <h3>Bonus Crab</h3>
          <p>Każdy depozyt od 10 EUR daje 1 kredyt Bonus Crab. Wykorzystaj go, aby "złapać" losową nagrodę w Łapaczu Nagród -- możliwe wygrane to środki bonusowe, darmowe spiny lub monety. Niewielki codzienny bonus, który urozmaica rozgrywkę.</p>
        </div>
        <div>
          <h3>Monety i Sklep</h3>
          <p>Monety zdobywasz przez grę, wyzwania i promocje. Możesz je wydać w Sklepie <?php echo SITE_NAME; ?> na nagrody od darmowych spinów na wybranych automatach (np. 5 spinów na Sweet Bonanza za 30 monet) po środki bonusowe (5 EUR za 50 monet, do 250 EUR za 1 200 monet). Dobry sposób, by zamienić lojalność w namacalne nagrody we własnym tempie.</p>

          <h3>Wyzwania</h3>
          <p>Cotygodniowe wyzwania nagradzają Cię za realizację prostych celów. Wyzwania kasynowe mogą wymagać postawienia 0,50 EUR na określonych automatach, a wyzwania sportowe -- zakładów za 15 EUR na mecze z minimalnym kursem 2,0. Każde ukończone wyzwanie przynosi monety, a ukończenie 20 wyzwań w tygodniu odblokowuje bonus 50 monet.</p>

          <h3>Oferta rocznicowa</h3>
          <p>W rocznicę rejestracji konta <?php echo SITE_NAME; ?> oferuje specjalny pakiet bonusowy. Oferta zależy od Twojego poziomu VIP i aktywności na koncie i jest przyznawana automatycznie w dniu rocznicy. Sprawdź powiadomienia lub skontaktuj się z pomocą, jeśli bonus rocznicowy się nie pojawił.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- No-Deposit Info -->
  <section class="content-section content-section--alt" id="no-deposit">
    <div class="container container--narrow">
      <h2>Bonus bez depozytu w <?php echo SITE_NAME; ?></h2>
      <p>Obecnie <?php echo SITE_NAME; ?> nie oferuje klasycznego bonusu bez depozytu. Jednak funkcja Bonus Crab nagradza każdy depozyt od 10 EUR darmową próbą w Łapaczu Nagród, gdzie można wygrać spiny, środki bonusowe, monety lub nagrody pieniężne bez dodatkowego obrotu od samej wygranej. To najbliższy odpowiednik bonusu bez depozytu dostępny na platformie.</p>
      <p>Warto regularnie sprawdzać sekcję Promocje, ponieważ kasyno często zmienia oferty i może wprowadzić bonusy bez depozytu lub kody bonusowe w przyszłości.</p>
    </div>
  </section>

  <!-- Bonus FAQ -->
  <section class="content-section" id="bonus-faq">
    <div class="container container--narrow">
      <h2>FAQ dotyczące bonusów</h2>

      <details class="faq-item">
        <summary>Czy mogę użyć kodu promocyjnego w <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Tak. Podczas rejestracji masz możliwość wpisania kodu promocyjnego po wyborze preferowanego bonusu powitalnego. Jeśli masz ważny kod, wpisz go tam, aby aktywować powiązane korzyści.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy mogę łączyć kilka bonusów?</summary>
        <div class="faq-answer">
          <p>Nie. Bonusów powitalnych i promocji doładowania nie można łączyć. Musisz zakończyć lub anulować aktywny bonus, zanim aktywujesz nowy. Niektóre bonusy można anulować w sekcji Profil lub kontaktując się z pomocą.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Co się stanie, jeśli zlecę wypłatę przed ukończeniem obrotu?</summary>
        <div class="faq-answer">
          <p>Zlecenie wypłaty przed spełnieniem wymagań obrotu anuluje bonus i wszystkie powiązane wygrane. Upewnij się, że obrót został w pełni zrealizowany, zanim zlecisz wypłatę.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy wszystkie gry liczą się jednakowo do obrotu?</summary>
        <div class="faq-answer">
          <p>Nie. Różne typy gier mają różny wkład w obrót. Automaty zwykle liczą się w 100%, podczas gdy gry stołowe i tytuły kasyna na żywo liczą się w mniejszym stopniu. Sprawdź regulamin bonusu, aby poznać dokładną tabelę wkładów.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy depozyty przez Skrill i Neteller kwalifikują się do bonusów?</summary>
        <div class="faq-answer">
          <p>W większości przypadków depozyty dokonane przez Skrill lub Neteller nie kwalifikują się do bonusów powitalnych. Sprawdź warunki konkretnej promocji, czy nie ma wyjątków.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy zasada maksymalnej wygranej dotyczy mnie?</summary>
        <div class="faq-answer">
          <p>Limit 10-krotności maksymalnej wygranej dotyczy mieszkańców Brazylii, Chile, Japonii, Peru i Tajlandii. Jeśli mieszkasz w jednym z tych krajów, Twoje wygrane z gry na środkach bonusowych są ograniczone do 10-krotności kwoty bonusu. Gracze z innych regionów nie podlegają tej zasadzie.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jak działa bonus rocznicowy?</summary>
        <div class="faq-answer">
          <p>Co roku w rocznicę rejestracji <?php echo SITE_NAME; ?> przyznaje specjalny bonus na Twoje konto. Rodzaj i wartość oferty zależy od poziomu VIP i ogólnej aktywności. Bonus jest przyznawany automatycznie -- sprawdź powiadomienia lub skontaktuj się z pomocą, jeśli go nie otrzymasz.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
