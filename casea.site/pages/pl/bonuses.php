<?php
/**
 * Bonuses Page - Polish
 */
$page_title = SITE_NAME . ' Bonusy - Bonus Powitalny, Darmowe Spiny, Kody Promocyjne & Oferty Bez Depozytu';
$page_description = 'Wszystkie bonusy ' . SITE_NAME . ' Casino w jednym miejscu. Bonus powitalny do EUR 500 + 200 darmowych spinów, kody promocyjne bez depozytu, cotygodniowe oferty doładowania, cashback i nagrody VIP.';
$current_page = 'bonuses';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Bonusy Kasynowe';
$hero_description = 'Wszystkie aktywne promocje, oferty powitalne i nagrody lojalnościowe, które są obecnie dostępne. Zapoznaj się z regulaminem przed odebraniem oferty.';
$hero_cta = 'Odbierz Swój Bonus';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Welcome Bonuses -->
  <section class="content-section" id="welcome">
    <div class="container">
      <h2>Bonusy Powitalne dla Nowych Graczy</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <p style="margin-top:0">Gracze dokonujący pierwszej wpłaty w <?php echo SITE_NAME; ?> mogą wybrać spośród kilku ofert powitalnych w zależności od tego, czy wolą gry kasynowe, czy zakłady sportowe. Każda opcja jest dostępna przy pierwszej wpłacie i nie można jej łączyć z innymi promocjami.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/casea-bonuses.png" alt="<?php echo SITE_NAME; ?> Casino promocje i oferty bonusu powitalnego" style="max-width:300px;width:100%;">
        </div>
      </div>

      <!-- Casino Welcome -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">100% do &euro;500 + 200 Darmowych Spinów</div>
          <span class="bonus-card__tag">Casino</span>
        </div>
        <p>Wpłać minimum EUR 20, aby otrzymać pełne 100% dopasowania do pierwszej wpłaty, z limitem EUR 500. Dodatkowo 200 darmowych spinów jest rozdzielanych w paczkach po 20 dziennie przez 10 kolejnych dni. Pierwsza paczka jest dostępna od razu po wpłacie. Musisz odebrać każdą porcję w ciągu 24 godzin, w przeciwnym razie wygasa. Wpłata co najmniej EUR 10 daje Ci również 1 kredyt Bonus Crab na próbę w automacie Claw Machine, gdzie nagrody obejmują monety, darmowe spiny, bonusy lub nagrody pieniężne.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Wpłata</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obrót</div>
            <div class="bonus-detail__value">35x (bonus + wpłata)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obrót Darmowych Spinów</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Ważność</div>
            <div class="bonus-detail__value">10 dni</div>
          </div>
          <div>
            <div class="bonus-detail__label">Maks. Zakład</div>
            <div class="bonus-detail__value">&euro;5</div>
          </div>
        </div>
      </div>

      <!-- Multi-Deposit Welcome -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">250% do &euro;3 000 + 350 Darmowych Spinów</div>
          <span class="bonus-card__tag">Pakiet 4 Wpłat</span>
        </div>
        <p>Wielowpłatowy pakiet powitalny rozłożony na Twoje cztery pierwsze wpłaty. Pierwsza wpłata daje 100% do EUR 1 000 plus 200 darmowych spinów. Druga to 75% dopasowania do EUR 500. Trzecia dodaje 50% do EUR 500 plus 50 darmowych spinów, a czwarta zamyka pakiet z 25% do EUR 1 000 plus 100 darmowych spinów.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Wpłata</div>
            <div class="bonus-detail__value">&euro;20 za wpłatę</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obrót</div>
            <div class="bonus-detail__value">35x za bonus</div>
          </div>
          <div>
            <div class="bonus-detail__label">Maks. Wypłata</div>
            <div class="bonus-detail__value">10x kwoty bonusu</div>
          </div>
          <div>
            <div class="bonus-detail__label">Ważność</div>
            <div class="bonus-detail__value">10 dni za bonus</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">100% Bonus Sportowy do &euro;100</div>
          <span class="bonus-card__tag">Sport</span>
        </div>
        <p>Gracze obstawiający sport mogą odebrać 100% dopasowania do pierwszej wpłaty. Maksymalna kwota bonusu różni się w zależności od regionu: gracze z Finlandii, Niemiec, Norwegii, Szwajcarii i Austrii mogą otrzymać do EUR 200. Gracze z Włoch otrzymują do EUR 150. Gracze z Kazachstanu, Uzbekistanu, Kirgistanu, Tadżykistanu, Gruzji i Azerbejdżanu mogą otrzymać do EUR 50. Aby aktywować bonus, pełna kwota wpłaty musi zostać obrócona na zakładach sportowych z kursem co najmniej 1.50.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Min. Wpłata</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Obrót</div>
            <div class="bonus-detail__value">5x lub 6x (wg kraju)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Min. Kurs</div>
            <div class="bonus-detail__value">2.0 singlowe / 1.5 wielokrotne</div>
          </div>
          <div>
            <div class="bonus-detail__label">Ważność</div>
            <div class="bonus-detail__value">30 dni</div>
          </div>
        </div>
      </div>

      <div class="highlight-box">
        <h4>Kod Promocyjny <?php echo SITE_NAME; ?></h4>
        <p>Jeśli masz kod promocyjny, możesz go wpisać podczas rejestracji. Pole na kod pojawia się w formularzu rejestracyjnym zaraz po wybraniu preferowanego bonusu powitalnego. Kody promocyjne mogą odblokować specjalne oferty lub zmienione warunki bonusu, więc warto sprawdzić przed wpłatą.</p>
      </div>
    </div>
  </section>

  <!-- Reload & Weekly -->
  <section class="content-section content-section--alt" id="reload">
    <div class="container">
      <h2>Cotygodniowe Bonusy Doładowania</h2>
      <p><?php echo SITE_NAME; ?> kontynuuje promocje po fazie powitalnej. Te cykliczne oferty odnawiają się co tydzień, więc aktywni gracze zawsze mają coś do odebrania.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">66 Cotygodniowych Darmowych Spinów</div>
          <span class="bonus-card__tag">Poniedziałek - Czwartek</span>
        </div>
        <p>Dokonaj wpłaty EUR 20 lub więcej od poniedziałku do czwartku, aby otrzymać 66 darmowych spinów na wybranym slocie. Musisz wyrazić zgodę (opt-in) co tydzień przed wpłatą. Spiny należy wykorzystać w ciągu 7 dni, a wygrane podlegają 40-krotnemu obrotowi z 10-dniowym terminem realizacji. Maks. zakład podczas aktywnego bonusu: EUR 5.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Weekendowe Doładowanie: 50% do &euro;777 + 77 Darmowych Spinów</div>
          <span class="bonus-card__tag">Piątek - Niedziela</span>
        </div>
        <p>Wpłać co najmniej EUR 20 w weekend, aby otrzymać 50% dopasowania do EUR 777. Jeśli Twoja wpłata wynosi EUR 50 lub więcej, otrzymujesz także 77 darmowych spinów na wybranym slocie. Wymagana jest zgoda (opt-in) przed wpłatą. Obrót wynosi 35x od wpłaty plus bonusu i 40x od wygranych z darmowych spinów. Masz 10 dni na spełnienie warunków.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Cotygodniowe Doładowanie Sportowe: 55% do &euro;750</div>
          <span class="bonus-card__tag">Sport</span>
        </div>
        <p>Raz w tygodniu Twoja największa wpłata kwalifikuje się do 55% bonusu sportowego do EUR 750. Wpłata musi zostać obrócona jednokrotnie na zakładach sportowych z kursem 1.50 lub wyższym, zanim bonus zostanie przyznany. Następnie możesz go odebrać przez czat na żywo lub email. Wymogi obrotu muszą zostać spełnione w ciągu 30 dni, a maksymalna wypłata z tego bonusu to 10-krotność jego wartości.</p>
      </div>
    </div>
  </section>

  <!-- Cashback -->
  <section class="content-section" id="cashback">
    <div class="container">
      <h2>Programy Cashback</h2>
      <p><?php echo SITE_NAME; ?> prowadzi trzy oddzielne programy cashback: dzienny cashback dla gier kasynowych, tygodniowy cashback dla kasyna na żywo i tygodniowy cashback dla zakładów sportowych. Każdy program ma własne warunki i proces odbioru.</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Dzienny Cashback Kasynowy</h4>
          <p>Dostępny od poziomu VIP 2 wzwyż. VIP 2 otrzymuje 3% do EUR 100 dziennie. VIP 3 otrzymuje 5% do EUR 200. VIP 4 otrzymuje 10% do EUR 300. VIP 5 otrzymuje 15% do EUR 400. Cashback jest przyznawany automatycznie o 04:00 UTC i wymaga 1-krotnego obrotu. Musisz wyrazić zgodę co 4 tygodnie.</p>
        </div>
        <div class="info-card">
          <h4>Cashback Kasyno na Żywo: 25% do &euro;350</h4>
          <p>Tygodniowy cashback od strat netto w grach kasyna na żywo. Minimalna kwalifikująca strata to EUR 5. Skontaktuj się z obsługą klienta w poniedziałek po 06:00 UTC (przed 23:59 UTC), aby odebrać. Po przyznaniu cashback wymaga 1-krotnego obrotu przed wypłatą.</p>
        </div>
        <div class="info-card">
          <h4>Cashback Sportowy: 10% do &euro;500</h4>
          <p>Obejmuje straty netto z zakładów sportowych od poniedziałku do niedzieli. Minimalna strata EUR 20, aby się kwalifikować. Skontaktuj się z obsługą w poniedziałek, aby odebrać. Cashback podlega 3-krotnemu obrotowi i może być wykorzystany tylko w sekcji Sport.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sports Promos -->
  <section class="content-section content-section--alt" id="sports-promos">
    <div class="container">
      <h2>Promocje Zakładów Sportowych</h2>
      <p>Poza bonusem powitalnym i cashbackiem, zakłady sportowe oferują kilka narzędzi zaprojektowanych, aby zwiększyć wartość Twoich zakładów.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Boost Akumulatora: do 100%</div>
        </div>
        <p>Postaw zakład wielokrotny z 3 lub więcej selekcjami z kursem 1.40+ każda, a Twoje wygrane otrzymają boost. Mnożnik zaczyna się od 3% za 3 selekcje i rośnie do 100% za 21 lub więcej. Tylko zakłady za prawdziwe pieniądze się liczą. Złożenie wniosku o wypłatę przed naliczeniem bonusu spowoduje jego anulowanie.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Prowadzenie 2 Bramkami - Wcześniejsza Wypłata</div>
        </div>
        <p>Jeśli Twoja drużyna prowadzi dwoma bramkami, Twój zakład pre-match 1X2 zostaje wypłacony w całości — nie musisz czekać na końcowy gwizdek. Ta oferta dotyczy wyłącznie zakładów na wygraną gospodarzy lub gości. Zakłady na żywo i zakłady na remis są wykluczone, a wypłata przed końcem meczu anuluje wcześniejszą wypłatę.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Bet Builder: 50% Bez Ryzyka do &euro;50</div>
        </div>
        <p>Postaw Bet Builder z kursem 1.70 lub wyższym, używając co najmniej EUR 20 prawdziwych pieniędzy. Jeśli przegrasz, otrzymasz darmowy zakład o wartości 50% Twojej stawki (do EUR 50). Dostępne raz w tygodniu. Darmowy zakład musi zostać wykorzystany w ciągu 3 dni i podlega 3-krotnemu obrotowi z kursem 1.50+.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Ulepszone Kursy</div>
        </div>
        <p>Wybrane rynki pre-match 1X2 czasami oferują podwyższone kursy. Szukaj oznaczenia „Enhanced Prices" w opisie rynku. Wygrane z zakładów z ulepszonymi kursami są wypłacane jako prawdziwe pieniądze bez dodatkowego obrotu.</p>
      </div>
    </div>
  </section>

  <!-- VIP, Shop, Crab -->
  <section class="content-section" id="vip">
    <div class="container">
      <h2>Program VIP &amp; Dodatki</h2>
      <div class="two-col">
        <div>
          <h3>Program VIP</h3>
          <p><?php echo SITE_NAME; ?> prowadzi wielopoziomowy program lojalnościowy, w którym awansujesz na podstawie swojej aktywności w grze. W miarę wspinania się po szczeblach odblokowujesz korzyści takie jak osobisty menedżer konta, wyższe limity wypłat, ekskluzywne oferty bonusowe i wyższy procent cashbacku. Najwyższe poziomy VIP dają dostęp do najlepszych cotygodniowych ofert cashback i szybszej realizacji wypłat.</p>

          <h3>Bonus Crab</h3>
          <p>Każda wpłata EUR 20 lub więcej daje Ci 1 kredyt Bonus Crab. Użyj go, aby „złapać" losową nagrodę z automatu Claw Machine — możliwe nagrody to pieniądze bonusowe, darmowe spiny lub monety. To mały codzienny bonus, który urozmaica Twoje sesje.</p>
        </div>
        <div>
          <h3>Ekskluzywny Sklep</h3>
          <p>Monety zdobyte przez grę, wyzwania i promocje można wydać w sklepie. Nagrody obejmują darmowe spiny na wybranych slotach (np. 5 spinów na Sweet Bonanza za 30 monet) oraz pieniądze bonusowe (EUR 5 za 50 monet, do EUR 250 za 1 200 monet). To miły sposób na zamianę lojalności w wymierne nagrody we własnym tempie.</p>

          <h3>Wyzwania</h3>
          <p>Cotygodniowe wyzwania nagradzają Cię za realizację prostych celów. Wyzwania kasynowe mogą wymagać postawienia zakładów EUR 0,30 na określonych slotach, a wyzwania sportowe — zakładów EUR 15 na mecze z minimalnym kursem 2.0. Za każde ukończone wyzwanie zdobywasz monety, a ukończenie 20 w ciągu tygodnia daje bonus 50 monet.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- No-Deposit Info -->
  <section class="content-section content-section--alt" id="no-deposit">
    <div class="container container--narrow">
      <h2>Bonus Bez Depozytu <?php echo SITE_NAME; ?></h2>
      <p>Obecnie <?php echo SITE_NAME; ?> nie oferuje klasycznego bonusu bez depozytu. Jednakże funkcja Bonus Crab nagradza każdą wpłatę EUR 10 lub więcej darmową próbą w automacie Claw Machine, gdzie możesz wygrać spiny, pieniądze bonusowe, monety lub nagrody pieniężne bez dodatkowego obrotu od tej początkowej nagrody. Działa to jako najbliższy odpowiednik bonusu bez depozytu, jaki jest obecnie dostępny na platformie.</p>
      <p>Śledź sekcję Promocji i sprawdzaj regularnie, ponieważ kasyno często zmienia swoje oferty i może wprowadzić promocje bez depozytu lub darmowe kody bonusowe w przyszłości.</p>
    </div>
  </section>

  <!-- Bonus FAQ -->
  <section class="content-section" id="bonus-faq">
    <div class="container container--narrow">
      <h2>FAQ Bonusów</h2>

      <details class="faq-item">
        <summary>Czy mogę użyć kodu promocyjnego w <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Tak. Podczas rejestracji zobaczysz opcję wpisania kodu promocyjnego po wybraniu preferowanego bonusu powitalnego. Jeśli masz ważny kod, wpisz go tam, aby aktywować powiązane korzyści.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy mogę łączyć kilka bonusów?</summary>
        <div class="faq-answer">
          <p>Nie. Bonusów powitalnych i promocji doładowania nie można łączyć. Musisz ukończyć lub anulować aktywny bonus przed odebraniem nowego. Niektóre bonusy można anulować w sekcji Profil lub kontaktując się z obsługą.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Co się stanie, jeśli złożę wniosek o wypłatę przed spełnieniem warunków obrotu?</summary>
        <div class="faq-answer">
          <p>Złożenie wniosku o wypłatę przed spełnieniem warunków obrotu spowoduje anulowanie bonusu i wszystkich powiązanych wygranych. Upewnij się, że w pełni spełniłeś wymagania obrotu przed złożeniem wniosku o wypłatę.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy wszystkie gry w równym stopniu przyczyniają się do obrotu?</summary>
        <div class="faq-answer">
          <p>Nie. Różne typy gier mają różne wkłady procentowe. Sloty zazwyczaj przyczyniają się w 100%, podczas gdy gry stołowe i tytuły kasyna na żywo mogą mieć niższy wkład. Sprawdź warunki bonusu, aby poznać dokładną tabelę wkładów.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy wpłaty przez Skrill i Neteller kwalifikują się do bonusów?</summary>
        <div class="faq-answer">
          <p>W większości przypadków wpłaty dokonane przez Skrill lub Neteller nie kwalifikują się do bonusów powitalnych. Sprawdź warunki konkretnej promocji, aby dowiedzieć się o wyjątkach.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
