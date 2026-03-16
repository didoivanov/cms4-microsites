<?php
/**
 * Login Page - Polish
 */
$page_title = SITE_NAME . ' Logowanie - Zaloguj się do Swojego Konta Casino';
$page_description = 'Zaloguj się do swojego konta w ' . SITE_NAME . ' Casino. Uzyskaj dostęp do gier, bonusów i salda. Problem z logowaniem? Zresetuj hasło lub skontaktuj się z obsługą.';
$current_page = 'login';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Logowanie';
$hero_description = 'Zaloguj się, aby uzyskać dostęp do konta, gier i bonusów.';
$hero_cta = 'Zarejestruj się Teraz';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Login Help -->
  <section class="content-section content-section--alt" id="login-help">
    <div class="container container--narrow">
      <h2>Jak Zalogować się do <?php echo SITE_NAME; ?> Casino</h2>
      <p>Logowanie do konta w <?php echo SITE_NAME; ?> zajmuje zaledwie kilka sekund. Oto co zrobić na komputerze i telefonie:</p>

      <h3>Logowanie na Komputerze</h3>
      <p>Odwiedź stronę <?php echo SITE_NAME; ?> i kliknij przycisk «Zaloguj się» w prawym górnym rogu strony, obok przycisku «Rejestracja». Wpisz swój adres email podany przy rejestracji i hasło, a następnie kliknij «Zaloguj się», aby uzyskać dostęp do konta. Link «Nie pamiętasz hasła?» znajduje się tuż pod formularzem, jeśli potrzebujesz zresetować swoje dane.</p>

      <h3>Logowanie na Telefonie</h3>
      <p>Na telefonie lub tablecie otwórz stronę <?php echo SITE_NAME; ?> w przeglądarce mobilnej. Przycisk «Zaloguj się» jest widoczny w nagłówku strony. Kliknij go, wpisz email i hasło, a następnie naciśnij «Zaloguj się». Wersja mobilna oferuje te same funkcje co wersja desktopowa, w tym odzyskiwanie hasła i rejestrację konta.</p>

      <h3>Problem z Logowaniem?</h3>
      <p>Jeśli masz trudności z zalogowaniem się na swoje konto, oto kilka rzeczy do sprawdzenia:</p>
      <ul>
        <li>Upewnij się, że wpisujesz prawidłowy adres email i hasło. Hasła rozróżniają wielkie i małe litery.</li>
        <li>Wyczyść pamięć podręczną i pliki cookie przeglądarki, a następnie spróbuj ponownie.</li>
        <li>Sprawdź, czy Twoje połączenie internetowe jest stabilne.</li>
        <li>Jeśli zapomniałeś hasła, użyj linku «Nie pamiętasz hasła?», aby otrzymać email z linkiem do resetu.</li>
        <li>Unikaj korzystania z VPN, ponieważ <?php echo SITE_NAME; ?> nie zezwala na dostęp przez VPN. Próba logowania przez VPN może skutkować ograniczeniami konta.</li>
      </ul>
      <p>Jeśli żadne z powyższych nie rozwiąże problemu, skontaktuj się z <a href="/support">obsługą klienta</a> przez live chat, aby uzyskać pomoc w czasie rzeczywistym.</p>
    </div>
  </section>

  <!-- Registration Overview -->
  <section class="content-section" id="register">
    <div class="container container--narrow">
      <h2>Tworzenie Nowego Konta</h2>
      <p>Jeśli nie masz jeszcze konta w <?php echo SITE_NAME; ?>, rejestracja jest szybka i zajmuje około minuty. Oto przegląd procesu:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Kliknij «Rejestracja» na stronie.</strong> Przycisk rejestracji znajduje się w prawym górnym rogu strony. Pojawi się okno, w którym możesz wybrać preferowany bonus powitalny (kasyno, pakiet wielowpłatowy lub sport) lub zrezygnować z bonusów.
          </div>
        </li>
        <li>
          <div>
            <strong>Wpisz swój email i utwórz hasło.</strong> To będą Twoje dane logowania na przyszłość. Jeśli masz kod promocyjny, możesz go wpisać na tym etapie.
          </div>
        </li>
        <li>
          <div>
            <strong>Uzupełnij dane osobowe.</strong> Musisz podać pełne imię i nazwisko, datę urodzenia, płeć, numer telefonu i adres zamieszkania. Te informacje są potrzebne do weryfikacji konta.
          </div>
        </li>
        <li>
          <div>
            <strong>Zakończ rejestrację.</strong> Kliknij «Utwórz Profil», aby sfinalizować konto. Następnie możesz dokonać pierwszej wpłaty i zacząć grać.
          </div>
        </li>
      </ol>

      <p>Po rejestracji rozważ natychmiastowe przesłanie dokumentów weryfikacyjnych. Przyspieszy to proces, gdy złożysz wniosek o pierwszą wypłatę. Sekcję przesyłania dokumentów znajdziesz w «Ustawienia - Weryfikacja Konta» w swoim profilu.</p>
    </div>
  </section>

  <!-- Login FAQ -->
  <section class="content-section content-section--alt" id="login-faq">
    <div class="container container--narrow">
      <h2>FAQ Logowania</h2>

      <details class="faq-item">
        <summary>Co potrzebuję, aby się zalogować?</summary>
        <div class="faq-answer">
          <p>Potrzebujesz adresu email i hasła podanych podczas rejestracji. Jeśli zapomniałeś hasła, kliknij «Nie pamiętasz hasła?» w formularzu logowania, aby otrzymać link do resetu na email.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy mogę używać VPN, aby uzyskać dostęp do <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Nie. <?php echo SITE_NAME; ?> surowo zabrania korzystania z VPN. Logowanie przez VPN może skutkować zawieszeniem konta i utratą wszelkich powiązanych wygranych. Kasyno zapewnia doświadczenie dostosowane do Twojego kraju.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Moje konto jest zablokowane. Co powinienem zrobić?</summary>
        <div class="faq-answer">
          <p>Blokada konta może nastąpić ze względów bezpieczeństwa, takich jak wielokrotne nieudane próby logowania lub podejrzana aktywność. Skontaktuj się z obsługą klienta przez live chat lub email, aby Twoje konto zostało sprawdzone i ewentualnie odblokowane.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jak zmienić hasło?</summary>
        <div class="faq-answer">
          <p>Jeśli jesteś zalogowany, przejdź do ustawień konta, aby zmienić hasło. Jeśli nie możesz się zalogować, skorzystaj z funkcji resetowania hasła na stronie logowania. Link do resetu zostanie wysłany na Twój adres email podany przy rejestracji.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jakie informacje są potrzebne do rejestracji?</summary>
        <div class="faq-answer">
          <p>Rejestracja wymaga adresu email, hasła, pełnego imienia i nazwiska, daty urodzenia, płci, numeru telefonu, kraju, miasta i kodu pocztowego. Te informacje służą do weryfikacji tożsamości i spełnienia wymogów regulacyjnych.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
