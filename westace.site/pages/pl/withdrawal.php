<?php
/**
 * Withdrawal Page - WestAce (Polish)
 */
$page_title = 'WestAce Wypłaty - Metody Płatności, Limity i Czas Realizacji';
$page_description = 'Wszystko o wypłatach w ' . SITE_NAME . ' Casino: metody płatności, czas realizacji, dzienne i miesięczne limity, weryfikacja KYC i porady dotyczące szybszych wypłat.';
$current_page = 'withdrawal';
$lang_prefix = '/pl';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Wypłaty';
$hero_description = 'Jak wypłacić wygrane, dostępne metody płatności, czas realizacji, limity i czego oczekiwać podczas procesu weryfikacji.';
$hero_cta = 'Graj Teraz';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Przegląd wypłat</h2>
      <p>Wypłata wygranych w <?php echo SITE_NAME; ?> jest prosta i bezpłatna. Realizujemy wszystkie zlecenia wypłat w ciągu 24 do 72 godzin, w zależności od wybranej metody płatności. Środki zwracamy na tę samą metodę, której użyto do wpłaty, o ile jest to możliwe. Przed pierwszą wypłatą musisz przejść weryfikację KYC.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Minimalna wypłata</h4>
          <p>45 zł dla wszystkich metod płatności. Kwoty poniżej tego progu nie mogą zostać zrealizowane.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Czas realizacji</h4>
          <p>24-72 godziny dla większości metod. Przelewy bankowe mogą zająć 1-3 dni robocze.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Limity wypłat</h4>
          <p>2 150 zł dziennie, 30 000 zł miesięcznie. Członkowie VIP mogą kwalifikować się do wyższych limitów.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Payment Methods Table -->
  <section class="content-section content-section--alt" id="methods">
    <div class="container">
      <h2>Metody płatności</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Poniższa tabela przedstawia wszystkie opcje wpłat i wypłat w <?php echo SITE_NAME; ?>. Wypłaty realizujemy na oryginalną metodę wpłaty, o ile jest to możliwe. Wszystkie wpłaty i wypłaty są bezpłatne z naszej strony.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-payments-screen.png" alt="<?php echo SITE_NAME; ?> Casino metody wpłat i wypłat, w tym Visa, Mastercard, Skrill, Neteller i kryptowaluty" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div class="data-table-wrap">
        <table class="data-table">
          <thead>
            <tr>
              <th>Metoda</th>
              <th>Min. wpłata</th>
              <th>Maks. wpłata</th>
              <th>Min. wypłata</th>
              <th>Maks. wypłata</th>
              <th>Realizacja</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Mastercard</td>
              <td>45 zł</td>
              <td>8 600 zł</td>
              <td>45 zł</td>
              <td>12 900 zł</td>
              <td>24-72 godziny</td>
            </tr>
            <tr>
              <td>Paysafecard</td>
              <td>45 zł</td>
              <td>4 300 zł</td>
              <td colspan="2">Tylko wpłata</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Visa</td>
              <td colspan="2">Tylko wypłata</td>
              <td>45 zł</td>
              <td>12 900 zł</td>
              <td>24-72 godziny</td>
            </tr>
            <tr>
              <td>Przelew bankowy</td>
              <td colspan="2">Tylko wypłata</td>
              <td>45 zł</td>
              <td>21 500 zł</td>
              <td>1-3 dni robocze</td>
            </tr>
            <tr>
              <td>Skrill</td>
              <td>45 zł</td>
              <td>21 500 zł</td>
              <td>45 zł</td>
              <td>21 500 zł</td>
              <td>24-72 godziny</td>
            </tr>
            <tr>
              <td>Neteller</td>
              <td>45 zł</td>
              <td>21 500 zł</td>
              <td colspan="2">Tylko wpłata</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Bitcoin (BTC)</td>
              <td>45 zł</td>
              <td>21 500 zł</td>
              <td>45 zł</td>
              <td>21 500 zł</td>
              <td>24-72 godziny</td>
            </tr>
            <tr>
              <td>Ethereum (ETH)</td>
              <td>45 zł</td>
              <td>21 500 zł</td>
              <td>45 zł</td>
              <td>21 500 zł</td>
              <td>24-72 godziny</td>
            </tr>
            <tr>
              <td>Tether (USDT)</td>
              <td>45 zł</td>
              <td>21 500 zł</td>
              <td>45 zł</td>
              <td>21 500 zł</td>
              <td>24-72 godziny</td>
            </tr>
            <tr>
              <td>Litecoin (LTC)</td>
              <td>45 zł</td>
              <td>21 500 zł</td>
              <td>45 zł</td>
              <td>21 500 zł</td>
              <td>24-72 godziny</td>
            </tr>
            <tr>
              <td>Ripple (XRP)</td>
              <td>45 zł</td>
              <td>21 500 zł</td>
              <td>45 zł</td>
              <td>21 500 zł</td>
              <td>24-72 godziny</td>
            </tr>
            <tr>
              <td>USD Coin (USDC)</td>
              <td>45 zł</td>
              <td>21 500 zł</td>
              <td>45 zł</td>
              <td>21 500 zł</td>
              <td>24-72 godziny</td>
            </tr>
            <tr>
              <td>Bitcoin Cash (BCH)</td>
              <td>45 zł</td>
              <td>21 500 zł</td>
              <td>45 zł</td>
              <td>21 500 zł</td>
              <td>24-72 godziny</td>
            </tr>
            <tr>
              <td>Dogecoin (DOGE)</td>
              <td>45 zł</td>
              <td>21 500 zł</td>
              <td>45 zł</td>
              <td>21 500 zł</td>
              <td>24-72 godziny</td>
            </tr>
            <tr>
              <td>Cardano (ADA)</td>
              <td>45 zł</td>
              <td>21 500 zł</td>
              <td>45 zł</td>
              <td>21 500 zł</td>
              <td>24-72 godziny</td>
            </tr>
          </tbody>
        </table>
      </div>

      <p style="margin-top: var(--space-4);">Dokładny zakres dostępnych metod płatności może się różnić w zależności od regionu. Transakcje kryptowalutowe wymagają potwierdzeń w łańcuchu bloków po przetworzeniu przez kasyno.</p>
    </div>
  </section>

  <!-- Rollover Requirement -->
  <section class="content-section" id="rollover">
    <div class="container container--narrow">
      <h2>Wymóg obrotu depozytem</h2>
      <p><?php echo SITE_NAME; ?> stosuje wymóg jednokrotnego obrotu (1x) na wszystkie depozyty. Oznacza to, że musisz postawić wpłacone środki przynajmniej raz, zanim złożysz zlecenie wypłaty. Jest to niezależne od wymagań dotyczących obrotu bonusem.</p>
      <p>Jeśli złożysz zlecenie wypłaty bez spełnienia wymogu 1x obrotu, zostanie pobrana prowizja:</p>
      <ul>
        <li><strong>10% prowizji</strong> od kwoty depozytu przy wypłatach na portfel elektroniczny i kryptowaluty</li>
        <li><strong>15% prowizji</strong> od kwoty depozytu przy wypłatach kartą bankową i przelewem</li>
      </ul>
      <p>Aby uniknąć tej opłaty, wystarczy raz postawić kwotę depozytu przed zleceniem wypłaty. Jedna runda obstawiania na dowolną kwotę wystarczy do spełnienia wymogu.</p>
    </div>
  </section>

  <!-- How to Withdraw -->
  <section class="content-section content-section--alt" id="how-to">
    <div class="container">
      <h2>Jak zlecić wypłatę</h2>
      <p>Wykonaj poniższe kroki, aby zlecić wypłatę z konta w <?php echo SITE_NAME; ?>:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Spełnij aktywne wymagania dotyczące obrotu.</strong> Jeśli skorzystałeś z bonusu, pełne wymagania dotyczące obrotu muszą zostać spełnione przed wypłatą. Upewnij się również, że spełniłeś wymóg jednokrotnego obrotu depozytem.
          </div>
        </li>
        <li>
          <div>
            <strong>Otwórz kasę.</strong> Przejdź do sekcji wypłat w swoim koncie. Znajdziesz ją w menu głównym lub w ustawieniach konta.
          </div>
        </li>
        <li>
          <div>
            <strong>Wybierz metodę płatności i kwotę.</strong> Wybierz spośród dostępnych opcji i wpisz kwotę, którą chcesz wypłacić. Minimum wynosi 45 zł dla wszystkich metod. Limit dzienny to 2 150 zł, limit miesięczny to 30 000 zł.
          </div>
        </li>
        <li>
          <div>
            <strong>Poczekaj na realizację.</strong> <?php echo SITE_NAME; ?> realizuje wypłaty w ciągu 24 do 72 godzin. Przelewy bankowe mogą zająć 1-3 dni robocze. Skontaktujemy się z Tobą, jeśli potrzebne będą dodatkowe dokumenty do weryfikacji.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- KYC Verification -->
  <section class="content-section" id="verification">
    <div class="container">
      <h2>Weryfikacja konta (KYC)</h2>
      <p><?php echo SITE_NAME; ?> wymaga weryfikacji tożsamości przed zatwierdzeniem zleceń wypłat. Jest to standardowa procedura zapobiegająca oszustwom i zapewniająca zgodność z przepisami o przeciwdziałaniu praniu pieniędzy. Dokumenty są weryfikowane w ciągu 30 dni, a sam proces weryfikacji trwa do 10 dni od przesłania.</p>

      <div class="two-col">
        <div>
          <h3>Wymagane dokumenty</h3>
          <ul>
            <li><strong>Dokument tożsamości</strong> - paszport, prawo jazdy lub dowód osobisty</li>
            <li><strong>Selfie z dokumentem</strong> - zdjęcie, na którym trzymasz dokument tożsamości</li>
            <li><strong>Potwierdzenie adresu</strong> - rachunek za media lub wyciąg bankowy z ostatnich 3 miesięcy</li>
            <li><strong>Źródło środków</strong> - dokumentacja potwierdzająca pochodzenie środków przeznaczonych na grę (wymóg AML)</li>
          </ul>
          <p>Masz 30 dni na przesłanie wymaganych dokumentów. Twoje konto może zostać ograniczone do czasu zakończenia weryfikacji.</p>
        </div>
        <div>
          <h3>Wskazówki dla szybszej weryfikacji</h3>
          <ul>
            <li>Prześlij dokumenty zaraz po rejestracji, nie czekaj na pierwszą wypłatę</li>
            <li>Upewnij się, że wszystkie cztery rogi dokumentu tożsamości są widoczne na zdjęciu</li>
            <li>Na selfie zadbaj o to, by zarówno twarz, jak i tekst na dokumencie były czytelne</li>
            <li>Jako potwierdzenie adresu użyj aktualnego rachunku za media lub wyciągu bankowego</li>
            <li>Jeśli dokumenty zostaną odrzucone, sprawdź czy zdjęcia nie są rozmyte i czy dokumenty nie wygasły</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Faster Payouts -->
  <section class="content-section content-section--alt" id="tips">
    <div class="container container--narrow">
      <h2>Porady dotyczące szybszych wypłat</h2>

      <h3>1. Wybierz portfel elektroniczny lub kryptowalutę</h3>
      <p>Skrill i kryptowaluty takie jak Bitcoin, Ethereum i Tether są zazwyczaj realizowane najszybciej. Jeśli zależy Ci na czasie, wpłać środki jedną z tych metod, aby wypłata mogła wrócić tym samym kanałem.</p>

      <h3>2. Zweryfikuj konto jak najwcześniej</h3>
      <p>Nie czekaj na pierwszą wypłatę z przesłaniem dokumentów. Prześlij dowód tożsamości, selfie, potwierdzenie adresu i źródło środków zaraz po rejestracji. Dzięki temu, gdy będziesz gotowy na wypłatę, nie będzie opóźnień związanych z weryfikacją.</p>

      <h3>3. Spełnij wymóg obrotu depozytem</h3>
      <p>Upewnij się, że postawiłeś depozyt przynajmniej raz przed zleceniem wypłaty. Brak spełnienia wymogu skutkuje prowizją 10-15% od kwoty depozytu.</p>

      <h3>4. Korzystaj z oryginalnej metody wpłaty</h3>
      <p><?php echo SITE_NAME; ?> preferuje zwrot środków na tę samą metodę, którą dokonano wpłaty. Użycie innej metody może wymagać dodatkowych kontroli i spowolnić proces.</p>
    </div>
  </section>

  <!-- Fees -->
  <section class="content-section" id="fees">
    <div class="container container--narrow">
      <h2>Opłaty za wypłatę</h2>
      <p><?php echo SITE_NAME; ?> nie pobiera opłat za wpłaty ani wypłaty. Twój dostawca płatności lub bank może jednak naliczać własne opłaty transakcyjne, opłaty za przewalutowanie lub koszty pośrednictwa. Skontaktuj się ze swoim dostawcą płatności po szczegóły dotyczące ewentualnych opłat stron trzecich.</p>
      <p>Uwaga: jeśli wypłacisz środki bez spełnienia wymogu jednokrotnego obrotu depozytem, zostanie naliczona prowizja 10% (15% dla karty bankowej/przelewu) od kwoty depozytu. Nie jest to opłata za wypłatę, lecz kara za brak obrotu.</p>
    </div>
  </section>

  <!-- Withdrawal FAQ -->
  <section class="content-section content-section--alt" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>Najczęściej zadawane pytania o wypłaty</h2>

      <details class="faq-item">
        <summary>Ile trwa wypłata w <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Większość wypłat jest realizowana w ciągu 24 do 72 godzin. Portfele elektroniczne i kryptowaluty docierają zazwyczaj najszybciej. Przelewy bankowe mogą wymagać dodatkowych 1-3 dni roboczych po stronie dostawcy.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jaka jest minimalna kwota wypłaty w <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Minimalna kwota wypłaty wynosi 45 zł dla wszystkich metod płatności.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jakie są limity wypłat?</summary>
        <div class="faq-answer">
          <p>Standardowe limity to 2 150 zł dziennie i 30 000 zł miesięcznie. Limity na transakcję zależą od metody: Visa i Mastercard mają limit 12 900 zł na transakcję, a Skrill, przelewy bankowe i wszystkie kryptowaluty pozwalają na wypłatę do 21 500 zł. Gracze VIP mogą kwalifikować się do wyższych limitów.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Dlaczego moja wypłata została odrzucona?</summary>
        <div class="faq-answer">
          <p>Najczęstsze przyczyny to: niespełnione wymagania dotyczące obrotu, niespełniony wymóg obrotu depozytem, niezweryfikowane konto, przekroczenie dziennych lub miesięcznych limitów albo zlecenie wypłaty na metodę niezgodną z metodą wpłaty. Skontaktuj się z pomocą techniczną po szczegółowe informacje dotyczące Twojej sprawy.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy pobierane są opłaty za wypłatę?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> nie pobiera opłat za wypłaty. Twój dostawca płatności może naliczać własne opłaty. Jeśli wypłacisz środki bez spełnienia wymogu jednokrotnego obrotu depozytem, naliczana jest prowizja 10% (15% dla karty bankowej/przelewu) od kwoty depozytu.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy mogę anulować oczekującą wypłatę?</summary>
        <div class="faq-answer">
          <p>W zależności od etapu realizacji możesz mieć możliwość anulowania oczekującego zlecenia wypłaty. Skontaktuj się z obsługą klienta przez czat na żywo, aby uzyskać pomoc.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
