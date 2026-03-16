<?php
/**
 * Support Page - Polish
 */
$page_title = SITE_NAME . ' Obsługa Klienta - Live Chat, Email & Centrum Pomocy';
$page_description = 'Skontaktuj się z obsługą klienta ' . SITE_NAME . ' Casino przez czat na żywo 24/7 lub email. Pomoc z wpłatami, wypłatami, bonusami, kontem i pytaniami technicznymi.';
$current_page = 'support';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Obsługa Klienta';
$hero_description = 'Jesteśmy tu, aby pomóc z każdym pytaniem dotyczącym Twojego konta, wpłat, wypłat, bonusów lub problemów technicznych. Skontaktuj się o dowolnej porze.';
$hero_cta = 'Otwórz Czat na Żywo';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Contact Options -->
  <section class="content-section" id="contact">
    <div class="container">
      <h2>Jak się z Nami Skontaktować</h2>
      <p><?php echo SITE_NAME; ?> oferuje dwa główne kanały wsparcia, oba dostępne przez całą dobę. Niezależnie od tego, czy masz szybkie pytanie o promocję, czy potrzebujesz pomocy z problemem płatności, zespół jest gotowy do pomocy.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128172;</div>
          <h4>Live Chat</h4>
          <p>Najszybszy sposób na uzyskanie pomocy. Kliknij ikonę czatu na dowolnej stronie, aby rozpocząć rozmowę z przedstawicielem wsparcia. Średni czas odpowiedzi to poniżej 2 minut w normalnych godzinach. Dostępny 24 godziny na dobę, 7 dni w tygodniu.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9993;</div>
          <h4>Wsparcie przez Email</h4>
          <p>Dla szczegółowych zapytań lub przesyłania dokumentów email jest najlepszą opcją. Wyślij swoje zgłoszenie i oczekuj odpowiedzi w ciągu 24 godzin. Dołącz dane swojego konta i jasny opis problemu.</p>
        </div>
      </div>

      <table class="data-table" style="margin-top: var(--space-8);">
        <thead>
          <tr>
            <th>Kanał</th>
            <th>Dostępność</th>
            <th>Czas Odpowiedzi</th>
            <th>Najlepsze Dla</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Live Chat</td>
            <td>24/7</td>
            <td>Poniżej 2 minut</td>
            <td>Szybkie pytania, pomoc z bonusami, problemy z wpłatą</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>24/7</td>
            <td>Do 24 godzin</td>
            <td>Przesyłanie dokumentów, szczegółowe sprawy, reklamacje</td>
          </tr>
          <tr>
            <td>Telefon</td>
            <td>Niedostępny</td>
            <td>-</td>
            <td>-</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- What Support Can Help With -->
  <section class="content-section content-section--alt" id="topics">
    <div class="container">
      <h2>W Czym Może Pomóc Wsparcie?</h2>
      <p>Zespół obsługi klienta zajmuje się szerokim zakresem tematów. Oto najczęstsze obszary, w których gracze szukają pomocy:</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Konto &amp; Rejestracja</h4>
          <p>Pomoc w tworzeniu konta, aktualizacji danych osobowych, resetowaniu haseł i rozwiązywaniu problemów z logowaniem. Jeśli Twoje konto jest zablokowane lub ograniczone, wsparcie może sprawdzić jego status.</p>
        </div>
        <div class="info-card">
          <h4>Wpłaty &amp; Płatności</h4>
          <p>Pomoc z nieudanymi wpłatami, pytaniami o metody płatności, opcje walut i sprawdzanie statusu transakcji. Wsparcie może również pomóc, jeśli wpłata nie pojawia się na Twoim saldzie.</p>
        </div>
        <div class="info-card">
          <h4>Wypłaty &amp; Wypłata Wygranych</h4>
          <p>Pytania o czas realizacji wypłat, oczekujące wnioski, odrzucone płatności i zmiany limitów. Szczegółowe informacje o wypłatach znajdziesz na stronie <a href="/withdrawal">Wypłat</a>.</p>
        </div>
        <div class="info-card">
          <h4>Bonusy &amp; Promocje</h4>
          <p>Wyjaśnienia dotyczące warunków bonusów, wymogów obrotu, aktywacji promocji i anulowania aktywnych bonusów. Wsparcie może wyjaśnić szczegóły i warunki każdej oferty.</p>
        </div>
        <div class="info-card">
          <h4>Weryfikacja &amp; KYC</h4>
          <p>Wskazówki dotyczące przesyłania dokumentów, statusu weryfikacji, akceptowanych typów dokumentów i szacowanego czasu realizacji. Dokumenty możesz przesłać w ustawieniach konta, ale wsparcie może pomóc w razie problemów.</p>
        </div>
        <div class="info-card">
          <h4>Problemy Techniczne</h4>
          <p>Pomoc z grami, które się nie ładują, błędami strony, problemami kompatybilności z urządzeniami mobilnymi i problemami z przeglądarką. Wsparcie może rozwiązywać problemy i eskalować błędy techniczne do zespołu deweloperów.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Contacting Support -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Jak Najlepiej Wykorzystać Zgłoszenie do Wsparcia</h2>
      <p>Kilka prostych kroków może pomóc zespołowi wsparcia rozwiązać Twój problem szybciej:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Przygotuj dane swojego konta.</strong> Twój adres email lub nazwa użytkownika pomagają wsparciu szybko zlokalizować Twoje konto. Jeśli problem dotyczy konkretnej transakcji, miej numer referencyjny pod ręką.
          </div>
        </li>
        <li>
          <div>
            <strong>Opisz problem jasno.</strong> Wyjaśnij, co się stało, kiedy to nastąpiło i czego oczekiwałeś. Screenshoty pomagają w przypadku problemów technicznych lub spornych transakcji.
          </div>
        </li>
        <li>
          <div>
            <strong>Użyj odpowiedniego kanału.</strong> W pilnych sprawach (zablokowane konto, nieudana wpłata) live chat jest najlepszą opcją. Do przesyłania dokumentów lub złożonych spraw wymagających dochodzenia email daje zespołowi więcej czasu.
          </div>
        </li>
        <li>
          <div>
            <strong>Sprawdź najpierw FAQ.</strong> Wiele częstych pytań dotyczących bonusów, wypłat i zarządzania kontem jest omówionych w sekcjach FAQ na tej stronie. Szybkie sprawdzenie może zaoszczędzić Ci czasu oczekiwania.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Responsible Gambling -->
  <section class="content-section content-section--alt" id="responsible">
    <div class="container container--narrow">
      <h2>Odpowiedzialna Gra &amp; Samowykluczenie</h2>
      <p><?php echo SITE_NAME; ?> poważnie traktuje odpowiedzialną grę. Jeśli czujesz, że Twoje nawyki hazardowe stają się problemem, zespół wsparcia może pomóc Ci ustawić limity wpłat, przerwy w grze lub zorganizować samowykluczenie z platformy.</p>
      <p>Opcje samowykluczenia obejmują tymczasowe przerwy aż po trwałe zamknięcie konta. Po aktywacji samowykluczenie nie może zostać cofnięte do momentu upływu wyznaczonego okresu. Skontaktuj się z wsparciem przez czat na żywo lub email, aby omówić dostępne opcje.</p>
      <p>W celu uzyskania zewnętrznego wsparcia możesz skontaktować się z organizacjami takimi jak GamCare lub Gamblers Anonymous, które oferują bezpłatne, poufne porady i pomoc.</p>
    </div>
  </section>

  <!-- Support FAQ -->
  <section class="content-section" id="support-faq">
    <div class="container container--narrow">
      <h2>FAQ Wsparcia</h2>

      <details class="faq-item">
        <summary>Czy wsparcie <?php echo SITE_NAME; ?> jest dostępne w wielu językach?</summary>
        <div class="faq-answer">
          <p>Strona obsługuje język polski, angielski, fiński, niemiecki, węgierski, norweski, włoski, hiszpański, czeski i portugalski. Przedstawiciele wsparcia mogą zazwyczaj pomagać po angielsku i mogą być dostępni w innych językach w zależności od obsady.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jak szybko odpowiada live chat?</summary>
        <div class="faq-answer">
          <p>W normalnych warunkach odpowiedzi na live chacie przychodzą w ciągu 1-2 minut. W godzinach szczytu lub okresach wzmożonego ruchu czasy oczekiwania mogą być nieco dłuższe, ale zespół stara się minimalizować opóźnienia.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy wsparcie może mi pomóc anulować bonus?</summary>
        <div class="faq-answer">
          <p>Tak. Jeśli chcesz anulować aktywny bonus, możesz to zrobić samodzielnie w sekcji Profil swojego konta lub skontaktować się z wsparciem przez live chat albo email. Pamiętaj, że anulowanie bonusu powoduje usunięcie kwoty bonusu i wszelkich wygranych z niego pochodzących.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Co jeśli mój problem nie zostanie rozwiązany?</summary>
        <div class="faq-answer">
          <p>Jeśli nie jesteś zadowolony z początkowej odpowiedzi, poproś o eskalację sprawy do starszego przedstawiciela lub kierownika. W przypadku nierozwiązanych sporów możesz również skorzystać z procedur reklamacyjnych kasyna opisanych w Regulaminie.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy mogę poprosić o limity wpłat lub strat?</summary>
        <div class="faq-answer">
          <p>Tak. Skontaktuj się z wsparciem, aby ustawić dzienne, tygodniowe lub miesięczne limity wpłat. Możesz również poprosić o limity strat lub przypomnienia o czasie sesji, aby zarządzać swoją aktywnością hazardową.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
