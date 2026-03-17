<?php
/**
 * Support Page – Polish
 */
$page_title = SITE_NAME . ' Pomoc - Czat na żywo, email, Telegram i centrum pomocy';
$page_description = 'Skontaktuj się z pomocą ' . SITE_NAME . ' Casino przez czat na żywo 24/7, email support@vipluck.com lub Telegram. Pomoc z depozytami, wypłatami, bonusami, kontem i problemami technicznymi.';
$current_page = 'support';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = 'Pomoc ' . SITE_NAME;
$hero_description = 'Jesteśmy tu, aby odpowiedzieć na pytania dotyczące konta, depozytów, wypłat, bonusów i problemów technicznych. Napisz do nas w dowolnym momencie.';
$hero_cta = 'Otwórz czat';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Contact Options -->
  <section class="content-section" id="contact">
    <div class="container">
      <h2>Jak się z nami skontaktować</h2>
      <p><?php echo SITE_NAME; ?> oferuje trzy kanały wsparcia, abyś zawsze mógł uzyskać pomoc, gdy jej potrzebujesz. Niezależnie od tego, czy masz pytanie o promocję, potrzebujesz pomocy z płatnością, czy wolisz komunikować się przez aplikację -- zespół jest gotowy do pomocy.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128172;</div>
          <h4>Czat na żywo</h4>
          <p>Najszybszy sposób na uzyskanie pomocy. Kliknij ikonę czatu na dowolnej stronie kasyna, aby rozpocząć rozmowę z konsultantem. Średni czas odpowiedzi to poniżej 2 minut w standardowych godzinach. Dostępny 24 godziny na dobę, 7 dni w tygodniu.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9993;</div>
          <h4>Email</h4>
          <p>Do szczegółowych pytań lub przesyłania dokumentów email jest najlepszą opcją. Wyślij zapytanie na adres <strong>support@vipluck.com</strong> i oczekuj odpowiedzi w ciągu 24 godzin. Pamiętaj o podaniu danych konta i jasnym opisie problemu.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9992;</div>
          <h4>Telegram</h4>
          <p><?php echo SITE_NAME; ?> prowadzi oficjalny kanał na Telegramie do wsparcia i ogłoszeń. Możesz tam zadawać szybkie pytania, śledzić nowości o promocjach i uzyskać ogólną pomoc. Link do Telegrama znajdziesz na stronie kasyna.</p>
        </div>
      </div>

      <table class="data-table" style="margin-top: var(--space-8);">
        <thead>
          <tr>
            <th>Kanał</th>
            <th>Dostępność</th>
            <th>Czas odpowiedzi</th>
            <th>Najlepszy do</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Czat na żywo</td>
            <td>24/7</td>
            <td>Poniżej 2 minut</td>
            <td>Szybkie pytania, bonusy, problemy z depozytami</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>24/7</td>
            <td>Do 24 godzin</td>
            <td>Przesyłanie dokumentów, złożone sprawy, reklamacje</td>
          </tr>
          <tr>
            <td>Telegram</td>
            <td>24/7</td>
            <td>Różnie</td>
            <td>Szybkie pytania, promocje, ogłoszenia</td>
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
      <h2>W czym może pomóc wsparcie?</h2>
      <p>Zespół pomocy zajmuje się szerokim zakresem tematów. Oto najczęstsze obszary, w których gracze zgłaszają się po pomoc:</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Konto i rejestracja</h4>
          <p>Pomoc przy zakładaniu konta, aktualizacji danych osobowych, resetowaniu haseł, odzyskiwaniu nazw użytkownika i rozwiązywaniu problemów z logowaniem. Jeśli Twoje konto zostało zablokowane lub ograniczone, pomoc może sprawdzić jego status.</p>
        </div>
        <div class="info-card">
          <h4>Depozyty i płatności</h4>
          <p>Pomoc przy nieudanych depozytach, pytaniach o metody płatności, opcjach walutowych i sprawdzaniu statusu transakcji. Pomoc może również pomóc, jeśli depozyt nie pojawił się na Twoim saldzie.</p>
        </div>
        <div class="info-card">
          <h4>Wypłaty</h4>
          <p>Pytania o czas realizacji wypłat, oczekujące zlecenia, odrzucone wypłaty i zmiany limitów. Pamiętaj, że <?php echo SITE_NAME; ?> nie realizuje wypłat w weekendy. Szczegółowe informacje o wypłatach znajdziesz na <a href="/pl/withdrawal">stronie Wypłaty</a>.</p>
        </div>
        <div class="info-card">
          <h4>Bonusy i promocje</h4>
          <p>Wyjaśnienia dotyczące warunków bonusów, wymagań obrotu, aktywacji ofert i anulowania aktywnych bonusów. Pomoc może wyjaśnić szczegóły konkretnej promocji i warunki kwalifikacji.</p>
        </div>
        <div class="info-card">
          <h4>Weryfikacja i KYC</h4>
          <p>Wskazówki dotyczące przesyłania dokumentów, statusu weryfikacji, akceptowanych typów dokumentów i szacowanych terminów. Dokumenty możesz przesłać w ustawieniach konta, ale pomoc techniczna pomoże, jeśli napotkasz problemy.</p>
        </div>
        <div class="info-card">
          <h4>Problemy techniczne</h4>
          <p>Pomoc, gdy gry się nie ładują, występują błędy strony, problemy z kompatybilnością mobilną lub kwestie związane z przeglądarką. Pomoc może rozwiązać problem i przekazać zgłoszenia techniczne do zespołu programistów.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Site Languages -->
  <section class="content-section" id="languages">
    <div class="container container--narrow">
      <h2>Obsługiwane języki</h2>
      <p>Strona <?php echo SITE_NAME; ?> jest dostępna w 13 językach, aby obsługiwać graczy z wielu regionów:</p>
      <div class="info-grid">
        <div class="info-card">
          <h4>Języki europejskie</h4>
          <ul>
            <li>English</li>
            <li>Deutsch (niemiecki)</li>
            <li>Norsk (norweski)</li>
            <li>Fran&ccedil;ais (francuski)</li>
            <li>Italiano (włoski)</li>
            <li>Espa&ntilde;ol (hiszpański)</li>
            <li>Portugu&ecirc;s (portugalski)</li>
            <li>Suomi (fiński)</li>
            <li>&Ccaron;e&scaron;tina (czeski)</li>
          </ul>
        </div>
        <div class="info-card">
          <h4>Pozostałe języki</h4>
          <ul>
            <li>&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940; (grecki)</li>
            <li>&#1575;&#1604;&#1593;&#1585;&#1576;&#1610;&#1577; (arabski)</li>
            <li>Polski</li>
            <li>Magyar (węgierski)</li>
          </ul>
        </div>
      </div>
      <p>Konsultanci wsparcia mogą zazwyczaj pomagać po angielsku i mogą być w stanie pomóc w innych wymienionych językach, w zależności od dostępności.</p>
    </div>
  </section>

  <!-- Tips for Contacting Support -->
  <section class="content-section content-section--alt" id="tips">
    <div class="container container--narrow">
      <h2>Jak skutecznie zgłosić sprawę</h2>
      <p>Kilka prostych kroków może pomóc zespołowi wsparcia szybciej rozwiązać Twój problem:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Przygotuj dane konta.</strong> Nazwa użytkownika lub adres email pomoże szybko zlokalizować Twoje konto. Jeśli problem dotyczy konkretnej transakcji, miej pod ręką numer referencyjny.
          </div>
        </li>
        <li>
          <div>
            <strong>Opisz problem jasno.</strong> Wyjaśnij, co się stało, kiedy to nastąpiło i czego oczekiwałeś. Zrzuty ekranu pomagają przy problemach technicznych lub spornych transakcjach.
          </div>
        </li>
        <li>
          <div>
            <strong>Użyj odpowiedniego kanału.</strong> W pilnych sprawach (zablokowane konto, nieudany depozyt) czat na żywo będzie najszybszy. Do przesyłania dokumentów lub złożonych spraw wymagających analizy email na adres support@vipluck.com da zespołowi więcej czasu na odpowiedź. Na szybkie pytania lub informacje o promocjach sprawdzi się kanał Telegram.
          </div>
        </li>
        <li>
          <div>
            <strong>Sprawdź najpierw FAQ.</strong> Wiele częstych pytań o bonusy, wypłaty i zarządzanie kontem jest opisanych w sekcjach FAQ na tej stronie. Szybkie sprawdzenie może zaoszczędzić Ci oczekiwania.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Responsible Gambling -->
  <section class="content-section" id="responsible">
    <div class="container container--narrow">
      <h2>Odpowiedzialna gra i samowykluczenie</h2>
      <p><?php echo SITE_NAME; ?> traktuje odpowiedzialną grę poważnie. Jeśli czujesz, że Twoje nawyki hazardowe stają się problemem, zespół wsparcia może pomóc Ci ustawić limity depozytów, okresy przerwy lub zorganizować samowykluczenie z platformy.</p>
      <p>Opcje samowykluczenia obejmują zarówno tymczasowe przerwy, jak i trwałe zamknięcie konta. Po aktywacji samowykluczenie nie może zostać cofnięte do upływu ustalonego okresu. Skontaktuj się z pomocą przez czat na żywo, email na adres support@vipluck.com lub Telegram, aby omówić dostępne opcje.</p>
      <p>Po pomoc zewnętrzną możesz zwrócić się do organizacji takich jak GamCare lub Anonimowi Hazardziści, które oferują bezpłatne, poufne porady i wsparcie.</p>
    </div>
  </section>

  <!-- Support FAQ -->
  <section class="content-section content-section--alt" id="support-faq">
    <div class="container container--narrow">
      <h2>FAQ dotyczące pomocy</h2>

      <details class="faq-item">
        <summary>Czy pomoc <?php echo SITE_NAME; ?> jest dostępna w wielu językach?</summary>
        <div class="faq-answer">
          <p>Strona jest dostępna w 13 językach: angielskim, niemieckim, norweskim, francuskim, włoskim, hiszpańskim, portugalskim, greckim, arabskim, polskim, węgierskim, fińskim i czeskim. Konsultanci wsparcia mogą zazwyczaj pomagać po angielsku i mogą być w stanie pomóc w innych wymienionych językach, w zależności od dostępności.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jak szybko odpowiada czat na żywo?</summary>
        <div class="faq-answer">
          <p>W normalnych warunkach odpowiedzi na czacie na żywo pojawiają się w ciągu 1-2 minut. W godzinach szczytu lub przy dużym ruchu czas oczekiwania może być nieco dłuższy, ale zespół stara się ograniczać opóźnienia do minimum.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jaki jest adres email pomocy?</summary>
        <div class="faq-answer">
          <p>Możesz się skontaktować z pomocą <?php echo SITE_NAME; ?> pod adresem <strong>support@vipluck.com</strong>. Podaj swoją nazwę użytkownika lub zarejestrowany email, opis problemu oraz ewentualne zrzuty ekranu lub numery referencyjne transakcji. Odpowiedź powinna nadejść w ciągu 24 godzin.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy mogę skontaktować się z pomocą przez Telegram?</summary>
        <div class="faq-answer">
          <p>Tak. <?php echo SITE_NAME; ?> prowadzi oficjalny kanał na Telegramie, gdzie możesz uzyskać wsparcie, zobaczyć promocje i otrzymywać nowości. Link do oficjalnego kanału znajdziesz na stronie kasyna.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy pomoc może anulować mój bonus?</summary>
        <div class="faq-answer">
          <p>Tak. Jeśli chcesz anulować aktywny bonus, możesz to zrobić samodzielnie w sekcji Profil swojego konta lub skontaktować się z pomocą przez czat na żywo lub email. Pamiętaj, że anulowanie bonusu usuwa kwotę bonusu i wszystkie wygrane z niego wygenerowane.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Co jeśli mój problem nie zostanie rozwiązany?</summary>
        <div class="faq-answer">
          <p>Jeśli nie jesteś zadowolony z pierwszej odpowiedzi, poproś o przekazanie sprawy do starszego konsultanta lub przełożonego. W przypadku nierozwiązanych sporów możesz również odwołać się do procedury reklamacyjnej opisanej w Regulaminie.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy mogę ustawić limity depozytów lub strat?</summary>
        <div class="faq-answer">
          <p>Tak. Skontaktuj się z pomocą, aby ustawić dzienne, tygodniowe lub miesięczne limity depozytów. Możesz również poprosić o limity strat lub przypomnienia o czasie sesji, które pomogą kontrolować aktywność hazardową.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
