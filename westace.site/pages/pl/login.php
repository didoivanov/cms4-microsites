<?php
/**
 * Login Page - WestAce (Polish)
 */
$page_title = 'WestAce Logowanie - Zaloguj się do Swojego Konta';
$page_description = 'Zaloguj się do swojego konta w ' . SITE_NAME . ' Casino. Uzyskaj dostęp do gier, bonusów i salda. Problem z logowaniem? Zresetuj hasło lub skontaktuj się z obsługą.';
$current_page = 'login';
$lang_prefix = '/pl';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Logowanie';
$hero_description = 'Zaloguj się, aby uzyskać dostęp do konta, gier i bonusów.';
$hero_cta = 'Zarejestruj Się';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Login Help -->
  <section class="content-section content-section--alt" id="login-help">
    <div class="container container--narrow">
      <h2>Jak zalogować się do <?php echo SITE_NAME; ?> Casino</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Logowanie do konta <?php echo SITE_NAME; ?> zajmuje zaledwie kilka sekund. Użyj adresu email i hasła, które podałeś podczas rejestracji.</p>
          <h3>Logowanie na komputerze</h3>
          <p>Wejdź na stronę <?php echo SITE_NAME; ?> i kliknij przycisk "Zaloguj się" w prawym górnym rogu strony. Wpisz adres email i hasło, a następnie kliknij "Zaloguj się", aby uzyskać dostęp do konta. Jeśli zapomniałeś hasła, kliknij link resetowania pod formularzem logowania.</p>
          <h3>Logowanie na telefonie</h3>
          <p>Na telefonie lub tablecie otwórz stronę <?php echo SITE_NAME; ?> w mobilnej przeglądarce. Kliknij "Zaloguj się", wpisz email i hasło, a następnie kliknij "Zaloguj się." Wersja mobilna oferuje te same funkcje co wersja desktopowa - nie trzeba pobierać żadnej aplikacji.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-login-screen.png" alt="<?php echo SITE_NAME; ?> Casino formularz logowania z polami email i hasło" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div style="text-align:center;margin:var(--space-8) 0">
        <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Zaloguj się do <?php echo SITE_NAME; ?></a>
        <p style="margin-top:var(--space-4)">Nie masz jeszcze konta? <a href="/play" rel="nofollow">Zarejestruj się tutaj</a> i odbierz bonus powitalny.</p>
      </div>

      <h3>Problem z logowaniem?</h3>
      <p>Jeśli masz trudności z zalogowaniem się na konto, sprawdź poniższe wskazówki:</p>
      <ul>
        <li>Upewnij się, że wpisujesz poprawny email i hasło. Hasła rozróżniają wielkość liter.</li>
        <li>Wyczyść pamięć podręczną przeglądarki i pliki cookie, a następnie spróbuj ponownie.</li>
        <li>Sprawdź, czy połączenie internetowe jest stabilne.</li>
        <li>Jeśli zapomniałeś hasła, użyj linku "Zapomniałeś hasła?", aby otrzymać email z resetem.</li>
      </ul>
      <p>Jeśli żadne z powyższych nie rozwiązuje problemu, skontaktuj się z <a href="<?php echo $lang_prefix; ?>/support">obsługą klienta</a> przez czat na żywo lub email na support@westace.com.</p>
    </div>
  </section>

  <!-- Registration Overview -->
  <section class="content-section" id="register">
    <div class="container container--narrow">
      <h2>Tworzenie nowego konta</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Jeśli nie masz jeszcze konta w <?php echo SITE_NAME; ?>, rejestracja jest szybka i zajmuje około dwóch minut. Podaj email, utwórz hasło, wybierz preferowaną walutę i możesz grać. Bonus powitalny jest wyświetlany na górze formularza rejestracji, więc wiesz dokładnie, co otrzymujesz.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-signup-screen.png" alt="<?php echo SITE_NAME; ?> Casino formularz rejestracji z pakietem powitalnym i polami rejestracyjnymi" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Kliknij "Zarejestruj się" na stronie.</strong> Przycisk rejestracji znajduje się w prawym górnym rogu strony.
          </div>
        </li>
        <li>
          <div>
            <strong>Wybierz bonus powitalny.</strong> Wybierz bonus, który chcesz aktywować przy pierwszej wpłacie, lub pomiń, jeśli wolisz grać bez bonusu.
          </div>
        </li>
        <li>
          <div>
            <strong>Podaj email i utwórz hasło.</strong> Wybierz silne hasło, aby zabezpieczyć swoje konto.
          </div>
        </li>
        <li>
          <div>
            <strong>Uzupełnij dane osobowe.</strong> Musisz podać imię i nazwisko, datę urodzenia, numer telefonu, adres, kraj i preferowaną walutę. Te dane są potrzebne do weryfikacji konta przy pierwszej wypłacie.
          </div>
        </li>
        <li>
          <div>
            <strong>Zakończ rejestrację.</strong> Dokończ zakładanie konta i dokonaj pierwszej wpłaty, aby odebrać bonus powitalny. Minimalna kwalifikująca wpłata to 85 zł.
          </div>
        </li>
      </ol>

      <div style="text-align:center;margin:var(--space-8) 0">
        <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Załóż konto</a>
      </div>
    </div>
  </section>

  <!-- Account Recovery -->
  <section class="content-section content-section--alt" id="recovery">
    <div class="container container--narrow">
      <h2>Odzyskiwanie konta</h2>

      <h3>Zapomniałeś hasła?</h3>
      <p>Kliknij link "Zapomniałeś hasła?" na formularzu logowania. Wpisz swój zarejestrowany adres email, a link resetujący zostanie wysłany na Twoją skrzynkę. Kliknij link w emailu, aby utworzyć nowe hasło. Link resetujący jest ważny przez ograniczony czas, więc użyj go niezwłocznie.</p>
      <p>Jeśli nie otrzymasz emaila w ciągu kilku minut, sprawdź folder spam. Jeśli email nadal nie dociera, skontaktuj się z <a href="<?php echo $lang_prefix; ?>/support">obsługą klienta</a> po pomoc.</p>

      <h3>Konto zablokowane?</h3>
      <p>Blokada konta może nastąpić z powodów bezpieczeństwa, takich jak wielokrotne nieudane próby logowania lub podejrzana aktywność. Skontaktuj się z obsługą klienta przez czat na żywo lub email na support@westace.com, aby Twoje konto zostało sprawdzone.</p>
    </div>
  </section>

  <!-- Login FAQ -->
  <section class="content-section" id="login-faq">
    <div class="container container--narrow">
      <h2>Najczęściej zadawane pytania o logowanie</h2>

      <details class="faq-item">
        <summary>Co jest potrzebne do zalogowania?</summary>
        <div class="faq-answer">
          <p>Potrzebujesz adresu email i hasła, które podałeś podczas rejestracji. Jeśli zapomniałeś hasła, kliknij "Zapomniałeś hasła?" na formularzu logowania, aby otrzymać link resetujący.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy strona zapamięta mnie przy następnej wizycie?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> używa plików cookie do zapamiętywania powracających graczy. Jeśli wcześniej logowałeś się na tym samym urządzeniu i w tej samej przeglądarce, Twój email może być wstępnie wpisany. Ze względów bezpieczeństwa nadal musisz podać hasło. Wyczyszczenie plików cookie lub korzystanie z trybu prywatnego wymaga ponownego wpisania pełnych danych logowania.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Moje konto jest zablokowane. Co powinienem zrobić?</summary>
        <div class="faq-answer">
          <p>Blokada konta może nastąpić po wielokrotnych nieudanych próbach logowania lub z powodu podejrzanej aktywności. Skontaktuj się z obsługą klienta przez czat na żywo lub email na support@westace.com, aby Twoje konto zostało sprawdzone i odblokowane.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jak zmienić hasło?</summary>
        <div class="faq-answer">
          <p>Po zalogowaniu przejdź do ustawień konta, aby zaktualizować hasło. Jeśli nie możesz się zalogować, użyj funkcji resetowania hasła na stronie logowania.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jakie dane są wymagane do rejestracji?</summary>
        <div class="faq-answer">
          <p>Rejestracja wymaga adresu email, hasła, imienia i nazwiska, daty urodzenia, numeru telefonu, adresu, kraju i preferowanej waluty. Te dane służą do weryfikacji tożsamości i zapewnienia zgodności z przepisami.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy <?php echo SITE_NAME; ?> ma aplikację mobilną?</summary>
        <div class="faq-answer">
          <p>Dedykowana aplikacja nie jest dostępna, ale strona jest w pełni zoptymalizowana pod urządzenia mobilne. Wystarczy otworzyć <?php echo SITE_NAME; ?> w mobilnej przeglądarce i zalogować się normalnie. Wszystkie gry, zakłady sportowe i funkcje są dostępne na telefonie.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
