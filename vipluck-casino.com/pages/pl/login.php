<?php
/**
 * Login Page – Polish
 */
$page_title = SITE_NAME . ' Logowanie - Zaloguj się do konta w kasynie';
$page_description = 'Zaloguj się do konta ' . SITE_NAME . ' Casino. Uzyskaj dostęp do gier, bonusów i salda. Problemy z logowaniem? Zresetuj hasło, odzyskaj nazwę użytkownika lub skontaktuj się z pomocą.';
$current_page = 'login';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = 'Logowanie do ' . SITE_NAME;
$hero_description = 'Zaloguj się, aby uzyskać dostęp do konta, gier i bonusów.';
$hero_cta = 'Zarejestruj się';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Login Help -->
  <section class="content-section content-section--alt" id="login-help">
    <div class="container container--narrow">
      <h2>Jak zalogować się do <?php echo SITE_NAME; ?> Casino</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <p style="margin-top:0">Logowanie do konta <?php echo SITE_NAME; ?> zajmuje kilka sekund. Oto jak to zrobić na komputerze i na telefonie:</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-login.png" alt="<?php echo SITE_NAME; ?> Casino login screen with username and password fields" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>

      <h3>Logowanie na komputerze</h3>
      <p>Wejdź na stronę <?php echo SITE_NAME; ?> i kliknij przycisk "Zaloguj się" w prawym górnym rogu, obok przycisku "Zarejestruj się". Wpisz nazwę użytkownika lub adres email i hasło, a następnie kliknij "Zaloguj się", aby uzyskać dostęp do konta. Linki "Zapomniałeś hasła?" i "Zapomniałeś nazwy użytkownika?" znajdują się pod formularzem, gdybyś potrzebował odzyskać dane logowania.</p>

      <h3>Logowanie na telefonie</h3>
      <p>Na telefonie lub tablecie otwórz stronę <?php echo SITE_NAME; ?> w przeglądarce mobilnej. Przycisk "Zaloguj się" jest widoczny w nagłówku strony. Stuknij go, wpisz nazwę użytkownika lub email i hasło, a następnie stuknij "Zaloguj się". Wersja mobilna oferuje te same funkcje co wersja desktopowa, w tym odzyskiwanie hasła, odzyskiwanie nazwy użytkownika i rejestrację konta.</p>

      <h3>Powracający gracze</h3>
      <p><?php echo SITE_NAME; ?> korzysta z plików cookie, aby zapamiętywać powracających graczy. Jeśli wcześniej logowałeś się na tym samym urządzeniu i w tej samej przeglądarce, Twoja nazwa użytkownika lub email mogą być już wpisane w formularzu logowania. Wystarczy podać hasło i kliknąć "Zaloguj się", aby kontynuować. Wyczyszczenie plików cookie przeglądarki lub korzystanie z trybu prywatnego/incognito wymaga ponownego wpisania pełnych danych logowania.</p>

      <h3>Problemy z logowaniem?</h3>
      <p>Jeśli masz trudności z zalogowaniem się na konto, sprawdź poniższe wskazówki:</p>
      <ul>
        <li>Upewnij się, że wpisujesz poprawną nazwę użytkownika (lub email) i hasło. Hasła rozróżniają wielkość liter.</li>
        <li>Wyczyść pamięć podręczną i pliki cookie przeglądarki, a następnie spróbuj ponownie.</li>
        <li>Sprawdź, czy połączenie internetowe jest stabilne.</li>
        <li>Jeśli zapomniałeś hasła, kliknij link "Zapomniałeś hasła?", aby otrzymać email z resetem.</li>
        <li>Jeśli zapomniałeś nazwy użytkownika, kliknij link "Zapomniałeś nazwy użytkownika?", aby odzyskać ją przez zarejestrowany adres email.</li>
      </ul>
      <p>Jeśli żadne z powyższych nie rozwiąże problemu, skontaktuj się z <a href="/pl/support">pomocą techniczną</a> przez czat na żywo, email na adres support@vipluck.com lub Telegram.</p>
    </div>
  </section>

  <!-- Registration Overview -->
  <section class="content-section" id="register">
    <div class="container container--narrow">
      <h2>Zakładanie nowego konta</h2>
      <p>Jeśli nie masz jeszcze konta w <?php echo SITE_NAME; ?>, rejestracja jest szybka i zajmuje około minuty. Nie jest wymagana weryfikacja emaila ani telefonu, aby rozpocząć. Oto przegląd procesu:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Kliknij "Zarejestruj się" na stronie.</strong> Przycisk rejestracji znajduje się w prawym górnym rogu. Pojawi się okno, w którym możesz wybrać preferowany bonus powitalny (kasyno, wielodepozytowy lub sport) lub zrezygnować z bonusów.
          </div>
        </li>
        <li>
          <div>
            <strong>Wybierz nazwę użytkownika, podaj email i utwórz hasło.</strong> Nazwa użytkownika będzie służyć do logowania obok emaila. Jeśli masz kod promocyjny, możesz go wpisać na tym etapie.
          </div>
        </li>
        <li>
          <div>
            <strong>Wypełnij dane osobowe.</strong> Musisz podać imię i nazwisko, datę urodzenia, płeć, numer telefonu i adres zamieszkania. Te informacje są potrzebne do weryfikacji konta przy pierwszej wypłacie.
          </div>
        </li>
        <li>
          <div>
            <strong>Zakończ rejestrację.</strong> Kliknij "Utwórz profil", aby sfinalizować konto. Nie jest wymagana weryfikacja emaila ani telefonu -- Twoje konto jest aktywne od razu. Możesz dokonać pierwszego depozytu i zacząć grać natychmiast.
          </div>
        </li>
      </ol>

      <p>Po rejestracji warto od razu przesłać dokumenty weryfikacyjne. Przyspieszy to proces przy pierwszej wypłacie. Sekcję przesyłania dokumentów znajdziesz w "Ustawienia - Weryfikacja konta" w swoim profilu.</p>
    </div>
  </section>

  <!-- Account Recovery -->
  <section class="content-section content-section--alt" id="recovery">
    <div class="container container--narrow">
      <h2>Odzyskiwanie konta</h2>

      <div class="two-col">
        <div>
          <h3>Zapomniałeś hasła?</h3>
          <p>Kliknij link "Zapomniałeś hasła?" w formularzu logowania. Wpisz zarejestrowany adres email, a link do resetu zostanie wysłany na Twoją skrzynkę. Kliknij link w emailu, aby utworzyć nowe hasło. Link jest ważny przez ograniczony czas, więc użyj go jak najszybciej.</p>
          <p>Jeśli nie otrzymasz emaila w ciągu kilku minut, sprawdź folder spam lub śmieci. Jeśli email nadal nie dociera, skontaktuj się z <a href="/pl/support">pomocą techniczną</a> w celu ręcznej pomocy.</p>
        </div>
        <div>
          <h3>Zapomniałeś nazwy użytkownika?</h3>
          <p>Kliknij link "Zapomniałeś nazwy użytkownika?" w formularzu logowania. Wpisz adres email powiązany z kontem, a Twoja nazwa użytkownika zostanie wysłana na ten email. To przydatne, jeśli rejestrowałeś się jakiś czas temu i nie pamiętasz wybranej nazwy użytkownika.</p>
          <p>Jeśli nie masz już dostępu do zarejestrowanego adresu email, skontaktuj się z pomocą przez czat na żywo lub email na adres support@vipluck.com, aby zweryfikować tożsamość i odzyskać konto.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Login FAQ -->
  <section class="content-section" id="login-faq">
    <div class="container container--narrow">
      <h2>FAQ dotyczące logowania</h2>

      <details class="faq-item">
        <summary>Czego potrzebuję, żeby się zalogować?</summary>
        <div class="faq-answer">
          <p>Potrzebujesz nazwy użytkownika (lub adresu email) i hasła utworzonego podczas rejestracji. Jeśli zapomniałeś hasła, kliknij "Zapomniałeś hasła?" w formularzu logowania, aby otrzymać link do resetu. Jeśli zapomniałeś nazwy użytkownika, kliknij "Zapomniałeś nazwy użytkownika?", aby otrzymać ją na zarejestrowany email.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy mogę zalogować się nazwą użytkownika lub emailem?</summary>
        <div class="faq-answer">
          <p>Tak. <?php echo SITE_NAME; ?> akceptuje zarówno nazwę użytkownika, jak i zarejestrowany adres email do logowania. Możesz użyć tego, co łatwiej zapamiętasz.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy strona zapamięta mnie przy kolejnej wizycie?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> korzysta z plików cookie, aby zapamiętywać powracających graczy. Jeśli wcześniej logowałeś się na tym samym urządzeniu i w tej samej przeglądarce, Twoja nazwa użytkownika lub email mogą być wstępnie wypełnione w formularzu. Ze względów bezpieczeństwa nadal musisz wpisać hasło.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy mogę korzystać z VPN, aby grać w <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> nie blokuje technicznie połączeń VPN. Jednak korzystanie z VPN w celu uzyskania dostępu do platformy z jurysdykcji objętej ograniczeniami jest niezgodne z Regulaminem. Jeśli łączysz się z regionu, w którym kasyno jest dostępne, korzystanie z VPN nie powinno powodować problemów, ale kasyno zastrzega sobie prawo do weryfikacji kont wykazujących nietypowe wzorce połączeń.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Moje konto jest zablokowane. Co mam zrobić?</summary>
        <div class="faq-answer">
          <p>Blokada konta może nastąpić ze względów bezpieczeństwa, na przykład po wielu nieudanych próbach logowania lub podejrzanej aktywności. Skontaktuj się z pomocą przez czat na żywo lub email na adres support@vipluck.com, aby sprawdzić status konta i ewentualnie je odblokować.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jak zmienić hasło?</summary>
        <div class="faq-answer">
          <p>Po zalogowaniu przejdź do ustawień konta, aby zaktualizować hasło. Jeśli nie możesz się zalogować, skorzystaj z funkcji resetu hasła na stronie logowania. Link do resetu zostanie wysłany na zarejestrowany adres email.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy muszę weryfikować email, żeby się zarejestrować?</summary>
        <div class="faq-answer">
          <p>Nie. <?php echo SITE_NAME; ?> nie wymaga weryfikacji emaila ani telefonu do założenia konta. Twoje konto jest aktywne natychmiast po rejestracji i możesz od razu zacząć grać. Dokumenty weryfikacyjne będą potrzebne później, przy pierwszej wypłacie.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jakie dane są potrzebne do rejestracji?</summary>
        <div class="faq-answer">
          <p>Rejestracja wymaga podania nazwy użytkownika, adresu email, hasła, imienia i nazwiska, daty urodzenia, płci, numeru telefonu, kraju, miasta i kodu pocztowego. Te informacje służą do weryfikacji tożsamości i spełnienia wymogów regulacyjnych.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
