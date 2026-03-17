<?php
/**
 * Withdrawal Page – Polish
 */
$page_title = SITE_NAME . ' Wypłaty - Metody, limity i czas realizacji';
$page_description = 'Wszystko o wypłatach w ' . SITE_NAME . ' Casino: metody wypłat, realizacja do 7 dni roboczych, limity dzienne i miesięczne, weryfikacja KYC oraz porady, jak przyspieszyć wypłatę.';
$current_page = 'withdrawal';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = 'Wypłaty w ' . SITE_NAME;
$hero_description = 'Jak wypłacić wygrane, jakie metody są dostępne, czasy realizacji, limity i czego się spodziewać podczas weryfikacji.';
$hero_cta = 'Zacznij grać';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Informacje ogólne o wypłatach</h2>
      <p>Wypłata wygranych w <?php echo SITE_NAME; ?> to prosty proces, gdy znasz zasady. Kasyno stara się realizować zlecenia wypłat w ciągu 72 godzin w dni robocze. Warto pamiętać, że <?php echo SITE_NAME; ?> nie realizuje wypłat w weekendy, więc zlecenia złożone w piątek wieczorem lub w weekend zaczną być przetwarzane w następny poniedziałek.</p>
      <p>W miarę możliwości środki są zwracane tą samą metodą, którą dokonano depozytu. Jeśli ta metoda nie obsługuje przelewów przychodzących, kwota zostanie przelana na Twoje konto bankowe. Przed pierwszą wypłatą musisz przejść weryfikację KYC i spełnić minimalny wymóg obrotu depozytem.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Min. wypłata</h4>
          <p>20 EUR dla wszystkich metod płatności. Kwoty poniżej tego progu nie mogą zostać zrealizowane.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Limit dzienny</h4>
          <p>700 EUR dla standardowych kont. Członkowie VIP mogą wypłacić do 1 500 EUR dziennie.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Limit miesięczny</h4>
          <p>9 000 EUR dla standardowych graczy. Członkowie VIP mają limity tygodniowe do 7 000 EUR i miesięczne do 28 000 EUR.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Payment Methods Table -->
  <section class="content-section content-section--alt" id="methods">
    <div class="container">
      <h2>Metody wypłat</h2>
      <div class="two-col" style="align-items:flex-start;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p style="margin-top:0">Dostępne metody wypłat zależą od kraju i sposobu dokonania depozytu. Zasadniczo <?php echo SITE_NAME; ?> realizuje wypłaty na pierwotną metodę depozytu, gdy jest to możliwe.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-payments.png" alt="<?php echo SITE_NAME; ?> Casino payment methods including Jeton, MiFinity, eZeeWallet, Bitcoin, Ethereum, Tether, Ripple and more" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>

      <table class="data-table">
        <thead>
          <tr>
            <th>Metoda</th>
            <th>Min. wypłata</th>
            <th>Czas realizacji</th>
            <th>Uwagi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Visa / Mastercard</td>
            <td>&euro;20</td>
            <td>1-5 dni roboczych</td>
            <td>Zwrot na kartę użytą do depozytu</td>
          </tr>
          <tr>
            <td>Skrill</td>
            <td>&euro;20</td>
            <td>Do 24 godzin</td>
            <td>Szybka realizacja, szeroka dostępność</td>
          </tr>
          <tr>
            <td>Neteller</td>
            <td>&euro;20</td>
            <td>Do 24 godzin</td>
            <td>Dostępny w większości regionów</td>
          </tr>
          <tr>
            <td>Jeton</td>
            <td>&euro;20</td>
            <td>Do 24 godzin</td>
            <td>Portfel elektroniczny o szerokim zasięgu</td>
          </tr>
          <tr>
            <td>MiFinity</td>
            <td>&euro;20</td>
            <td>Do 24 godzin</td>
            <td>Portfel cyfrowy do szybkich wypłat</td>
          </tr>
          <tr>
            <td>eZeeWallet</td>
            <td>&euro;20</td>
            <td>Do 24 godzin</td>
            <td>Sprawdź dostępność w swoim regionie</td>
          </tr>
          <tr>
            <td>Przelew bankowy</td>
            <td>&euro;20</td>
            <td>3-7 dni roboczych</td>
            <td>Metoda zastępcza, gdy pierwotna jest niedostępna</td>
          </tr>
          <tr>
            <td>Bitcoin</td>
            <td>&euro;20</td>
            <td>Do 24 godzin</td>
            <td>Wymaga potwierdzeń blockchain po przetworzeniu przez kasyno</td>
          </tr>
          <tr>
            <td>Ethereum</td>
            <td>&euro;20</td>
            <td>Do 24 godzin</td>
            <td>Jedna z najszybszych opcji wypłat</td>
          </tr>
          <tr>
            <td>Tether (USDT)</td>
            <td>&euro;20</td>
            <td>Do 24 godzin</td>
            <td>Stablecoin o minimalnych wahaniach ceny</td>
          </tr>
          <tr>
            <td>Ripple (XRP)</td>
            <td>&euro;20</td>
            <td>Do 24 godzin</td>
            <td>Szybkie rozliczenia blockchain</td>
          </tr>
          <tr>
            <td>USD Coin (USDC)</td>
            <td>&euro;20</td>
            <td>Do 24 godzin</td>
            <td>Alternatywa stablecoin wobec USDT</td>
          </tr>
          <tr>
            <td>Cardano (ADA)</td>
            <td>&euro;20</td>
            <td>Do 24 godzin</td>
            <td>Sprawdź dostępność w swoim regionie</td>
          </tr>
          <tr>
            <td>Dogecoin</td>
            <td>&euro;20</td>
            <td>Do 24 godzin</td>
            <td>Niskoprowizyjne wypłaty kryptowalutowe</td>
          </tr>
          <tr>
            <td>Litecoin</td>
            <td>&euro;20</td>
            <td>Do 24 godzin</td>
            <td>Szybsze czasy bloków niż Bitcoin</td>
          </tr>
          <tr>
            <td>Bitcoin Cash</td>
            <td>&euro;20</td>
            <td>Do 24 godzin</td>
            <td>Niższe prowizje w porównaniu ze standardowym Bitcoinem</td>
          </tr>
          <tr>
            <td>Solana (SOL)</td>
            <td>&euro;20</td>
            <td>Do 24 godzin</td>
            <td>Szybki blockchain z bardzo niskimi opłatami</td>
          </tr>
        </tbody>
      </table>

      <p>Akceptowane waluty transakcyjne: EUR, CHF, USD, CAD, AUD, NZD, PLN, BRL, NOK, ZAR, CZK, HUF i CLP.</p>
    </div>
  </section>

  <!-- How to Withdraw -->
  <section class="content-section" id="how-to">
    <div class="container">
      <h2>Jak zlecić wypłatę</h2>
      <p>Wykonaj poniższe kroki, aby zlecić wypłatę z konta <?php echo SITE_NAME; ?>:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Spełnij wymóg obrotu.</strong> Przed pierwszą wypłatą Twój depozyt musi zostać obrócony co najmniej 1x. Jeśli aktywowałeś bonus, najpierw spełnij pełne wymagania obrotu. Niedopełnienie tego warunku może skutkować naliczeniem opłaty za wypłatę.
          </div>
        </li>
        <li>
          <div>
            <strong>Otwórz kasę.</strong> Przejdź do sekcji wypłat w swoim koncie. Znajdziesz ją w menu głównym lub w ustawieniach konta.
          </div>
        </li>
        <li>
          <div>
            <strong>Wybierz metodę płatności i kwotę.</strong> Wybierz jedną z dostępnych opcji i wpisz kwotę, którą chcesz wypłacić. Upewnij się, że mieści się w dopuszczalnych limitach.
          </div>
        </li>
        <li>
          <div>
            <strong>Poczekaj na realizację.</strong> <?php echo SITE_NAME; ?> realizuje wypłaty wyłącznie w dni robocze (poniedziałek-piątek). Standardowy czas przetwarzania to do 72 godzin. Zlecenia złożone w weekend zaczną być realizowane w poniedziałek. Skontaktujemy się z Tobą, jeśli będą potrzebne dodatkowe dokumenty.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- KYC Verification -->
  <section class="content-section content-section--alt" id="verification">
    <div class="container">
      <h2>Weryfikacja konta (KYC)</h2>
      <p><?php echo SITE_NAME; ?> wymaga weryfikacji tożsamości przed zatwierdzeniem zleceń wypłat. To standardowa procedura w branży, mająca na celu zapobieganie oszustwom i zgodność z przepisami o przeciwdziałaniu praniu pieniędzy.</p>

      <div class="two-col">
        <div>
          <h3>Wymagane dokumenty</h3>
          <ul>
            <li>Dokument tożsamości wydany przez organ państwowy (paszport, prawo jazdy lub dowód osobisty)</li>
            <li>Potwierdzenie adresu zamieszkania (rachunek za media lub wyciąg bankowy, wystawiony w ciągu ostatnich 3 miesięcy)</li>
            <li>Potwierdzenie metody płatności (zdjęcie karty, zrzut ekranu portfela elektronicznego lub potwierdzenie portfela kryptowalutowego)</li>
          </ul>
          <p>Masz 30 dni od momentu wezwania do przesłania dokumentów. Jeśli nie dostarczysz ich w tym terminie, Twoje konto może zostać zamknięte.</p>
        </div>
        <div>
          <h3>Termin weryfikacji</h3>
          <p>Standardowy czas weryfikacji dokumentów to do 10 dni roboczych, choć w wyjątkowych przypadkach może być dłuższy. Kasyno może korzystać z zewnętrznych usług weryfikacyjnych lub poprosić o dodatkowe kontrole, takie jak rozmowa wideo lub weryfikacja telefoniczna.</p>
          <p>Dokumenty możesz przesłać w sekcji "Ustawienia - Weryfikacja konta" w swoim profilu. Rób wyraźne, dobrze doświetlone zdjęcia, aby uniknąć opóźnień spowodowanych nieczytelnym dokumentem.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Large Wins -->
  <section class="content-section" id="large-wins">
    <div class="container container--narrow">
      <h2>Duże wygrane i wydłużony czas realizacji</h2>
      <div class="highlight-box">
        <h4>Wypłaty powyżej 5 000 EUR</h4>
        <p>Wygrane powyżej 5 000 EUR mogą wymagać dodatkowej weryfikacji i realizacja może potrwać dłużej niż standardowy czas. Kasyno zastrzega sobie prawo do podziału dużych wypłat na kilka rat w oparciu o obowiązujące limity dzienne i tygodniowe. Członkowie VIP z wyższymi limitami mogą otrzymać szybszą realizację dużych kwot.</p>
      </div>
      <p>Jeśli Twoja wypłata przekracza 5 000 EUR, zespół <?php echo SITE_NAME; ?> może poprosić o dodatkowe dokumenty weryfikacyjne lub przeprowadzić rozszerzoną kontrolę. To standardowa procedura przy dużych transakcjach, chroniąca zarówno gracza, jak i kasyno.</p>
    </div>
  </section>

  <!-- Tips for Faster Payouts -->
  <section class="content-section content-section--alt" id="tips">
    <div class="container container--narrow">
      <h2>Porady, jak przyspieszyć wypłatę</h2>

      <h3>1. Wybierz portfele elektroniczne lub kryptowaluty</h3>
      <p>Skrill, Neteller, Jeton, MiFinity oraz kryptowaluty takie jak Bitcoin, Ethereum czy Solana są zazwyczaj realizowane szybciej niż karty i przelewy bankowe. <?php echo SITE_NAME; ?> obsługuje 10 różnych kryptowalut, co daje jedną z najszerszych ofert wypłat krypto. Jeśli zależy Ci na szybkości, dokonaj depozytu jedną z tych metod, aby wypłata mogła wrócić tym samym kanałem.</p>

      <h3>2. Zweryfikuj konto jak najwcześniej</h3>
      <p>Nie czekaj z przesłaniem dokumentów do pierwszej wypłaty. Prześlij dokument tożsamości, potwierdzenie adresu i weryfikację metody płatności od razu po rejestracji. Dzięki temu, gdy zechcesz wypłacić środki, nie będzie opóźnień związanych z oczekującą weryfikacją.</p>

      <h3>3. Zakończ obrót przed zleceniem wypłaty</h3>
      <p>Jeśli masz aktywny bonus, upewnij się, że wszystkie wymagania obrotu zostały w pełni spełnione. Zlecenie wypłaty przy aktywnym bonusie anuluje bonus i wszystkie powiązane wygrane. Jeśli grałeś wyłącznie za środki z depozytu, pamiętaj o obrocie 1x, który należy spełnić, aby uniknąć dodatkowych opłat.</p>

      <h3>4. Trzymaj się limitów</h3>
      <p>Zlecenia wypłat przekraczające dzienny lub miesięczny limit zostaną odrzucone. Planuj wypłaty z wyprzedzeniem: 700 EUR dziennie dla standardowych kont, 1 500 EUR dziennie dla członków VIP. Limity tygodniowe to 2 250 EUR (standardowe) i 7 000 EUR (VIP).</p>

      <h3>5. Zlecaj wypłaty w dni robocze</h3>
      <p><?php echo SITE_NAME; ?> nie realizuje wypłat w weekendy. Złożenie zlecenia na początku tygodnia daje zespołowi więcej czasu na jego realizację przed weekendem. Zlecenia złożone w piątek wieczorem lub w weekend nie zaczną być przetwarzane do poniedziałku.</p>

      <h3>6. Korzystaj z pierwotnej metody depozytu</h3>
      <p><?php echo SITE_NAME; ?> preferuje zwrot środków tą samą metodą, którą dokonano depozytu. Użycie innej metody może wywołać dodatkowe kontrole i spowolnić proces.</p>
    </div>
  </section>

  <!-- Fees -->
  <section class="content-section" id="fees">
    <div class="container container--narrow">
      <h2>Opłaty za wypłaty</h2>
      <p><?php echo SITE_NAME; ?> nie pobiera żadnych opłat za wypłaty. Jednak Twój dostawca usług płatniczych lub bank może naliczyć własne prowizje transakcyjne, opłaty za przewalutowanie lub koszty pośrednictwa. Sprawdź u swojego dostawcy szczegóły dotyczące ewentualnych opłat od przelewów przychodzących.</p>
      <p>Jeśli nie spełnisz wymogu obrotu 1x depozytem przed wypłatą, może zostać naliczona opłata za przetworzenie. Zawsze spełnij minimalny obrót, aby uniknąć tej dodatkowej opłaty.</p>
    </div>
  </section>

  <!-- Withdrawal FAQ -->
  <section class="content-section content-section--alt" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>FAQ dotyczące wypłat</h2>

      <details class="faq-item">
        <summary>Jak długo trwa wypłata w <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Wypłaty są realizowane w ciągu 72 godzin w dni robocze. <?php echo SITE_NAME; ?> nie realizuje wypłat w weekendy, więc w najgorszym przypadku wypłata może trwać do 7 dni roboczych od złożenia zlecenia do otrzymania środków. Portfele elektroniczne i kryptowaluty są zazwyczaj najszybsze -- często realizowane w ciągu 24 godzin od przetworzenia przez kasyno. Przelewy bankowe i płatności kartą mogą wymagać dodatkowych 1-5 dni roboczych po stronie dostawcy.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jaka jest minimalna kwota wypłaty w <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Minimalna kwota wypłaty to 20 EUR dla wszystkich metod płatności. Nie ma możliwości zlecenia wypłaty poniżej tej kwoty.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Ile mogę wypłacić miesięcznie?</summary>
        <div class="faq-answer">
          <p>Standardowi gracze mogą wypłacić do 9 000 EUR miesięcznie (700 EUR dziennie, 2 250 EUR tygodniowo). Członkowie VIP mają wyższe limity: 1 500 EUR dziennie, 7 000 EUR tygodniowo i 28 000 EUR miesięcznie.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy <?php echo SITE_NAME; ?> realizuje wypłaty w weekendy?</summary>
        <div class="faq-answer">
          <p>Nie. Wypłaty są realizowane wyłącznie w dni robocze (poniedziałek-piątek). Zlecenia złożone w weekendy zaczną być przetwarzane w następny poniedziałek.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Dlaczego moja wypłata została odrzucona?</summary>
        <div class="faq-answer">
          <p>Najczęstsze przyczyny to: niespełnione wymagania obrotu, niezweryfikowane konto, przekroczenie limitów dziennych, tygodniowych lub miesięcznych, bądź zlecenie wypłaty na metodę inną niż ta użyta do depozytu. Skontaktuj się z pomocą, aby uzyskać szczegółowe informacje o swoim przypadku.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy są jakieś opłaty za wypłaty?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> nie pobiera opłat za wypłaty. Twój dostawca usług płatniczych może naliczyć własne prowizje od przelewów przychodzących. Jeśli nie spełnisz wymogu obrotu 1x depozytem przed zleceniem wypłaty, może zostać naliczona opłata za przetworzenie.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Co się dzieje z dużymi wygranymi powyżej 5 000 EUR?</summary>
        <div class="faq-answer">
          <p>Wypłaty powyżej 5 000 EUR mogą wymagać dodatkowej weryfikacji i dłuższego czasu realizacji. Kasyno może podzielić duże wypłaty na raty w oparciu o limity dzienne i tygodniowe. Członkowie VIP zazwyczaj otrzymują szybszą realizację dużych kwot.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy mogę anulować oczekującą wypłatę?</summary>
        <div class="faq-answer">
          <p>W zależności od etapu realizacji możesz anulować oczekujące zlecenie wypłaty. Skontaktuj się z pomocą przez czat na żywo, aby uzyskać pomoc przy anulowaniu.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
