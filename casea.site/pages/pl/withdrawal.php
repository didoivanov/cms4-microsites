<?php
/**
 * Withdrawal Page - Polish
 */
$page_title = SITE_NAME . ' Wypłata - Metody Płatności, Limity & Czas Realizacji';
$page_description = 'Wszystko o wypłatach w ' . SITE_NAME . ' Casino: metody płatności, czas realizacji do 72 godzin, dzienne i miesięczne limity, weryfikacja KYC i wskazówki dotyczące szybszych wypłat.';
$current_page = 'withdrawal';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Wypłata &amp; Płatności';
$hero_description = 'Jak wypłacić swoje wygrane, jakie metody są dostępne, czasy realizacji, limity i czego oczekiwać podczas procesu weryfikacji.';
$hero_cta = 'Zacznij Grać';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Przegląd Wypłat</h2>
      <p>Wypłata wygranych z <?php echo SITE_NAME; ?> jest prosta, pod warunkiem że znasz zasady. Płatności są realizowane zazwyczaj w ciągu 72 godzin, a gdy to możliwe, kasyno wysyła środki z powrotem tą samą metodą, której użyłeś do wpłaty. Jeśli ta metoda nie obsługuje transakcji przychodzących, środki zostaną wysłane na Twój rachunek bankowy.</p>
      <p>Przed złożeniem pierwszego wniosku o wypłatę musisz ukończyć weryfikację KYC (Know Your Customer) i upewnić się, że spełniłeś minimalny wymóg obrotu wpłaty.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Minimalna Wypłata</h4>
          <p>40 PLN dla wszystkich metod płatności. Kwoty poniżej tego limitu nie mogą zostać zrealizowane.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Limit Dzienny</h4>
          <p>2 000 PLN dla standardowych kont. Członkowie VIP mogą wypłacić do 6 000 PLN dziennie.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Limit Miesięczny</h4>
          <p>30 000 PLN dla nowych graczy. Członkowie VIP korzystają z limitu do 80 000 PLN miesięcznie.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Payment Methods Table -->
  <section class="content-section content-section--alt" id="methods">
    <div class="container">
      <h2>Metody Płatności</h2>
      <p>Dostępne metody wypłat zależą od Twojego kraju i sposobu wpłaty. Generalnie <?php echo SITE_NAME; ?> realizuje płatności na oryginalną metodę wpłaty, gdy to możliwe.</p>

      <table class="data-table">
        <thead>
          <tr>
            <th>Metoda</th>
            <th>Minimalna Wypłata</th>
            <th>Czas Realizacji</th>
            <th>Uwagi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Visa / Mastercard</td>
            <td>40 PLN</td>
            <td>1-3 dni robocze</td>
            <td>Zwrot na kartę użytą do wpłaty</td>
          </tr>
          <tr>
            <td>Skrill</td>
            <td>40 PLN</td>
            <td>Do 24 godzin</td>
            <td>Szybka realizacja, szeroka dostępność</td>
          </tr>
          <tr>
            <td>Neteller</td>
            <td>40 PLN</td>
            <td>Do 24 godzin</td>
            <td>Dostępne w większości regionów</td>
          </tr>
          <tr>
            <td>Przelew Bankowy</td>
            <td>80 PLN</td>
            <td>2-5 dni roboczych</td>
            <td>Używany jako alternatywa, gdy oryginalna metoda jest niedostępna</td>
          </tr>
          <tr>
            <td>Bitcoin</td>
            <td>40 PLN</td>
            <td>Do 24 godzin</td>
            <td>Wymaga potwierdzeń blockchain po realizacji przez kasyno</td>
          </tr>
          <tr>
            <td>Ethereum</td>
            <td>40 PLN</td>
            <td>Do 24 godzin</td>
            <td>Płatności w krypto są zazwyczaj jednymi z najszybszych</td>
          </tr>
          <tr>
            <td>Litecoin / Tether / Ripple</td>
            <td>40 PLN</td>
            <td>Do 24 godzin</td>
            <td>Sprawdź dostępność dla swojego regionu</td>
          </tr>
        </tbody>
      </table>

      <p>Akceptowane waluty do transakcji: EUR, USD, CAD, AUD, CHF, HUF, NOK, PLN, NZD, CZK, BRL, CLP i PEN.</p>
    </div>
  </section>

  <!-- How to Withdraw -->
  <section class="content-section" id="how-to">
    <div class="container">
      <h2>Jak Wypłacić Środki</h2>
      <p>Wykonaj poniższe kroki, aby złożyć wniosek o wypłatę z konta w <?php echo SITE_NAME; ?>:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Spełnij wymóg obrotu.</strong> Przed pierwszą wypłatą Twoja wpłata musi zostać obrócona co najmniej 1x. Jeśli odebrałeś bonus, najpierw spełnij w pełni wymóg obrotu. W przeciwnym razie może zostać naliczona opłata 10% od wypłaty.
          </div>
        </li>
        <li>
          <div>
            <strong>Otwórz kasę.</strong> Przejdź do sekcji wypłat na swoim koncie. Znajdziesz ją w głównym menu lub w ustawieniach konta.
          </div>
        </li>
        <li>
          <div>
            <strong>Wybierz metodę płatności i kwotę.</strong> Wybierz spośród dostępnych opcji i wpisz kwotę, którą chcesz wypłacić. Upewnij się, że mieści się w dozwolonych limitach.
          </div>
        </li>
        <li>
          <div>
            <strong>Poczekaj na realizację.</strong> Kasyno weryfikuje każdy wniosek i zazwyczaj realizuje płatności w ciągu 3 dni roboczych. Zostaniesz powiadomiony, jeśli będą potrzebne dodatkowe dokumenty.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- KYC Verification -->
  <section class="content-section content-section--alt" id="verification">
    <div class="container">
      <h2>Weryfikacja Konta (KYC)</h2>
      <p><?php echo SITE_NAME; ?> wymaga weryfikacji tożsamości przed zatwierdzeniem wniosków o wypłatę. Jest to standardowa procedura w branży, zaprojektowana w celu zapobiegania oszustwom i zapewnienia zgodności z przepisami dotyczącymi przeciwdziałania praniu pieniędzy.</p>

      <div class="two-col">
        <div>
          <h3>Wymagane Dokumenty</h3>
          <ul>
            <li>Dokument tożsamości wydany przez organy państwowe (paszport, prawo jazdy lub dowód osobisty)</li>
            <li>Potwierdzenie adresu (rachunek za media lub wyciąg bankowy z datą w ciągu ostatnich 3 miesięcy)</li>
            <li>Weryfikacja metody płatności (zdjęcie karty kredytowej/debetowej, screenshot e-portfela lub potwierdzenie portfela krypto)</li>
          </ul>
          <p>Masz 30 dni od pierwszego wezwania do przesłania dokumentów. Jeśli nie dostarczysz ich w tym terminie, Twoje konto może zostać zamknięte.</p>
        </div>
        <div>
          <h3>Czas Weryfikacji</h3>
          <p>Standardowy czas weryfikacji dokumentów to do 10 dni roboczych, choć w wyjątkowych przypadkach może to potrwać dłużej. Kasyno może korzystać z zewnętrznych usług weryfikacyjnych lub wymagać dodatkowych kontroli, takich jak rozmowa wideo lub weryfikacja telefoniczna.</p>
          <p>Dokumenty możesz przesłać w sekcji «Ustawienia - Weryfikacja Konta» w swoim profilu. Zrób wyraźne, dobrze oświetlone zdjęcia, aby uniknąć opóźnień spowodowanych nieczytelną dokumentacją.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Faster Payouts -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Wskazówki dla Szybszych Wypłat</h2>

      <div class="highlight-box">
        <h4>Przyspiesz Wypłatę w <?php echo SITE_NAME; ?></h4>
        <p>Stosuj te praktyki, aby zminimalizować opóźnienia w wypłatach i otrzymać swoje wygrane szybciej.</p>
      </div>

      <h3>1. Wybierz e-portfele lub kryptowaluty</h3>
      <p>Skrill, Neteller i opcje krypto, takie jak Bitcoin czy Ethereum, są zazwyczaj realizowane szybciej niż karta lub przelew bankowy. Jeśli szybkość jest Twoim priorytetem, wpłać jedną z tych metod, aby Twoja wypłata wróciła tym samym kanałem.</p>

      <h3>2. Zweryfikuj konto wcześniej</h3>
      <p>Nie czekaj do pierwszej wypłaty z przesłaniem dokumentów. Prześlij swój dowód tożsamości, potwierdzenie adresu i weryfikację metody płatności zaraz po rejestracji. Dzięki temu, gdy będziesz gotowy do wypłaty, nie będzie opóźnień spowodowanych oczekującą weryfikacją.</p>

      <h3>3. Spełnij warunki obrotu przed złożeniem wniosku</h3>
      <p>Jeśli masz aktywny bonus, upewnij się, że wszystkie wymagania obrotu zostały w pełni spełnione. Złożenie wniosku o wypłatę, gdy bonus jest jeszcze aktywny, spowoduje anulowanie bonusu i wszelkich powiązanych wygranych. Jeśli grałeś tylko za wpłacone środki, pamiętaj, że 1-krotny obrót musi zostać spełniony, aby uniknąć dodatkowej opłaty.</p>

      <h3>4. Trzymaj się w limitach</h3>
      <p>Wnioski o wypłatę przekraczające dzienny lub miesięczny limit zostaną odrzucone. Planuj swoje wypłaty odpowiednio: 2 000 PLN dziennie dla standardowych kont, 6 000 PLN dziennie dla członków VIP.</p>

      <h3>5. Używaj oryginalnej metody wpłaty</h3>
      <p><?php echo SITE_NAME; ?> preferuje zwracanie środków tą samą metodą, której użyłeś do wpłaty. Użycie innej metody może uruchomić dodatkowe kontrole i spowolnić proces.</p>
    </div>
  </section>

  <!-- Withdrawal FAQ -->
  <section class="content-section content-section--alt" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>FAQ Wypłat</h2>

      <details class="faq-item">
        <summary>Ile czasu trwa wypłata w <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Wypłaty są realizowane w ciągu 72 godzin (3 dni robocze). E-portfele i kryptowaluty są zazwyczaj najszybsze, często realizowane w ciągu 24 godzin od przetworzenia przez kasyno. Przelewy bankowe i płatności kartą mogą wymagać dodatkowych 1-5 dni roboczych po stronie dostawcy.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jaka jest minimalna kwota wypłaty w <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Minimalna kwota wypłaty wynosi 40 PLN dla wszystkich metod płatności. Kwoty poniżej tego progu nie mogą zostać zrealizowane.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jaki jest maksymalny limit wypłaty miesięcznie?</summary>
        <div class="faq-answer">
          <p>Standardowi gracze mogą wypłacić do 30 000 PLN miesięcznie. Członkowie VIP mają dostęp do zwiększonego limitu 80 000 PLN miesięcznie. Obowiązują również limity dzienne: 2 000 PLN dla standardowych kont, 6 000 PLN dla VIP.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Dlaczego moja wypłata została odrzucona?</summary>
        <div class="faq-answer">
          <p>Najczęstsze przyczyny to: niespełnione wymagania obrotu, niezweryfikowane konto, przekroczenie dziennych lub miesięcznych limitów, lub wniosek o wypłatę na metodę niezgodną z wpłatą. Skontaktuj się z obsługą, aby uzyskać szczegółowe informacje dotyczące Twojej sytuacji.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy pobierana jest opłata za wypłaty?</summary>
        <div class="faq-answer">
          <p>Standardowa opłata za wypłatę nie jest naliczana. Jednakże, jeśli nie spełnisz wymogu 1-krotnego obrotu wpłaty przed wypłatą, może zostać naliczona opłata 10%. Zawsze spełnij minimalny obrót, aby uniknąć tej opłaty.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy mogę anulować oczekującą wypłatę?</summary>
        <div class="faq-answer">
          <p>W zależności od etapu realizacji, anulowanie oczekującego wniosku o wypłatę może być możliwe. Skontaktuj się z obsługą klienta przez czat na żywo, aby uzyskać pomoc w anulowaniu.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
