<?php
/**
 * Support Page - WestAce (Polish)
 */
$page_title = 'WestAce Obsługa Klienta - Czat Na Żywo 24/7 i Email';
$page_description = 'Skontaktuj się z obsługą klienta ' . SITE_NAME . ' Casino przez czat na żywo 24/7 lub email na support@westace.com. Uzyskaj pomoc w sprawach wpłat, wypłat, bonusów, konta i problemów technicznych.';
$current_page = 'support';
$lang_prefix = '/pl';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Obsługa Klienta';
$hero_description = 'Jesteśmy tu, by pomóc w każdej sprawie dotyczącej konta, wpłat, wypłat, bonusów i problemów technicznych. Skontaktuj się z nami w dowolnym momencie.';
$hero_cta = 'Otwórz Czat Na Żywo';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Contact Options -->
  <section class="content-section" id="contact">
    <div class="container">
      <h2>Jak się z nami skontaktować</h2>
      <p><?php echo SITE_NAME; ?> oferuje dwa kanały kontaktu, dzięki czemu zawsze możesz uzyskać pomoc, gdy jej potrzebujesz. Niezależnie od tego, czy masz szybkie pytanie o promocję, czy potrzebujesz pomocy w rozwiązaniu problemu z płatnością, nasz zespół jest dostępny przez całą dobę.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128172;</div>
          <h4>Czat na żywo</h4>
          <p>Najszybszy sposób na uzyskanie pomocy. Kliknij ikonę czatu na dowolnej stronie, aby rozpocząć rozmowę z konsultantem. Nasi konsultanci odpowiadają zazwyczaj w ciągu 5 minut. Dostępny 24 godziny na dobę, 7 dni w tygodniu.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9993;</div>
          <h4>Pomoc mailowa</h4>
          <p>W przypadku szczegółowych pytań lub przesyłania dokumentów najlepsza jest opcja mailowa. Wyślij zapytanie na adres <strong>support@westace.com</strong> i oczekuj odpowiedzi w ciągu 24 godzin. Dołącz dane konta i opis problemu.</p>
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
            <td>Do 5 minut</td>
            <td>Szybkie pytania, pomoc z bonusami, problemy z wpłatą</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>24/7</td>
            <td>Do 24 godzin</td>
            <td>Przesyłanie dokumentów, złożone sprawy, reklamacje</td>
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
      <h2>W czym może pomóc obsługa klienta?</h2>
      <p>Nasz zespół obsługi klienta zajmuje się szerokim zakresem spraw. Oto najczęstsze tematy, w których gracze proszą o pomoc:</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Konto i rejestracja</h4>
          <p>Pomoc przy zakładaniu konta, aktualizacji danych osobowych, resetowaniu hasła i rozwiązywaniu problemów z logowaniem. Jeśli Twoje konto zostało zablokowane lub ograniczone, obsługa może sprawdzić jego status.</p>
        </div>
        <div class="info-card">
          <h4>Wpłaty i płatności</h4>
          <p>Pomoc przy nieudanych wpłatach, pytaniach o metody płatności i sprawdzaniu statusu transakcji. Obsługa może również pomóc, jeśli wpłata nie pojawia się na Twoim saldzie.</p>
        </div>
        <div class="info-card">
          <h4>Wypłaty</h4>
          <p>Pytania dotyczące czasu realizacji wypłat, oczekujących zleceń i odrzuconych płatności. Szczegółowe informacje o wypłatach znajdziesz na <a href="<?php echo $lang_prefix; ?>/withdrawal">stronie Wypłat</a>.</p>
        </div>
        <div class="info-card">
          <h4>Bonusy i promocje</h4>
          <p>Wyjaśnienia dotyczące warunków bonusów, wymagań obrotu, aktywacji ofert i anulowania aktywnych bonusów. Obsługa może wyjaśnić szczegóły konkretnej promocji i warunki kwalifikacji.</p>
        </div>
        <div class="info-card">
          <h4>Weryfikacja i KYC</h4>
          <p>Wskazówki dotyczące przesyłania dokumentów, statusu weryfikacji, akceptowanych typów dokumentów i szacowanego czasu. Obsługa może pomóc, jeśli pojawią się problemy w trakcie weryfikacji.</p>
        </div>
        <div class="info-card">
          <h4>Problemy techniczne</h4>
          <p>Pomoc przy grach, które się nie ładują, błędach strony, problemach z kompatybilnością mobilną i kwestiach przeglądarki. Obsługa może zdiagnozować problem i przekazać zgłoszenie zespołowi technicznemu.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Contacting Support -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Jak najlepiej wykorzystać zgłoszenie do obsługi</h2>
      <p>Kilka prostych kroków może pomóc naszemu zespołowi rozwiązać Twój problem szybciej:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Przygotuj dane konta.</strong> Nazwa użytkownika lub adres email pomogą obsłudze szybko zlokalizować Twoje konto. Jeśli sprawa dotyczy konkretnej transakcji, miej pod ręką numer referencyjny.
          </div>
        </li>
        <li>
          <div>
            <strong>Opisz problem jasno.</strong> Wyjaśnij, co się stało, kiedy to nastąpiło i czego oczekiwałeś. Zrzuty ekranu są pomocne przy problemach technicznych lub spornych transakcjach.
          </div>
        </li>
        <li>
          <div>
            <strong>Wybierz odpowiedni kanał.</strong> W pilnych sprawach (zablokowane konto, nieudana wpłata) czat na żywo jest najlepszą opcją. Przy przesyłaniu dokumentów lub złożonych sprawach wymagających dochodzenia email na support@westace.com daje zespołowi więcej miejsca do działania.
          </div>
        </li>
        <li>
          <div>
            <strong>Sprawdź najpierw FAQ.</strong> Wiele typowych pytań dotyczących bonusów, wypłat i zarządzania kontem jest omówionych w sekcjach FAQ na tej stronie.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Responsible Gambling -->
  <section class="content-section content-section--alt" id="responsible">
    <div class="container container--narrow">
      <h2>Odpowiedzialna gra i samowykluczenie</h2>
      <p><?php echo SITE_NAME; ?> poważnie podchodzi do odpowiedzialnej gry. Jeśli czujesz, że Twoje nawyki hazardowe stają się problemem, nasz zespół wsparcia może pomóc Ci w samowykluczeniu z platformy.</p>
      <p>Samowykluczenie jest dostępne na określony czas lub na stałe. Po aktywacji samowykluczenia nie można go cofnąć do upływu wyznaczonego okresu. W czasie samowykluczenia nie możesz się zalogować ani stawiać zakładów. Skontaktuj się z obsługą przez czat na żywo lub email na support@westace.com, aby złożyć wniosek o samowykluczenie.</p>

      <h3>Samoocena</h3>
      <p>Zadaj sobie poniższe pytania, aby ocenić, czy hazard może wpływać na Twoje życie:</p>
      <ul>
        <li>Czy Twoje wydatki wymykają się spod kontroli?</li>
        <li>Czy pożyczasz pieniądze, żeby dalej grać?</li>
        <li>Czy spędzasz mniej czasu z rodziną i przyjaciółmi?</li>
        <li>Czy opinie innych o Twoim hazardzie zaczęły Cię niepokoić?</li>
        <li>Czy straciłeś zainteresowanie swoimi hobby lub aktywnościami?</li>
        <li>Czy czujesz przygnębienie lub niepokój z powodu strat w grze?</li>
        <li>Czy kiedykolwiek okłamywałeś kogoś co do czasu lub pieniędzy wydawanych na hazard?</li>
      </ul>
      <p>Jeśli na kilka z tych pytań odpowiedziałeś twierdząco, zalecamy kontakt z organizacją pomocową:</p>
      <ul>
        <li><strong>Anonimowi Hazardziści Polska</strong> - spotkania grup wsparcia i wzajemna pomoc - <a href="https://www.anonimowihazardzisci.org" target="_blank" rel="noopener noreferrer">anonimowihazardzisci.org</a></li>
        <li><strong>Telefon Zaufania</strong> - bezpłatna i poufna pomoc psychologiczna - 116 123</li>
        <li><strong>Gambling Therapy</strong> - bezpłatne wsparcie i poradnictwo online - <a href="https://www.gamblingtherapy.org" target="_blank" rel="noopener noreferrer">gamblingtherapy.org</a></li>
        <li><strong>Ministerstwo Finansów</strong> - informacje o regulacjach hazardowych w Polsce - <a href="https://www.gov.pl/web/finanse" target="_blank" rel="noopener noreferrer">gov.pl/web/finanse</a></li>
      </ul>

      <h3>Przydatne wskazówki</h3>
      <ul>
        <li>Nie traktuj hazardu jako źródła dochodu</li>
        <li>Ustal budżet na czas i pieniądze i trzymaj się go</li>
        <li>Graj tylko za pieniądze, na których stratę możesz sobie pozwolić</li>
        <li>Unikaj hazardu, gdy jesteś zestresowany, przygnębiony lub pod wpływem alkoholu</li>
      </ul>
    </div>
  </section>

  <!-- Support FAQ -->
  <section class="content-section" id="support-faq">
    <div class="container container--narrow">
      <h2>Najczęściej zadawane pytania o obsługę</h2>

      <details class="faq-item">
        <summary>Czy obsługa <?php echo SITE_NAME; ?> jest dostępna 24/7?</summary>
        <div class="faq-answer">
          <p>Tak. Zarówno czat na żywo, jak i pomoc mailowa są dostępne przez całą dobę, 24 godziny na dobę, 7 dni w tygodniu.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jak szybko odpowiada czat na żywo?</summary>
        <div class="faq-answer">
          <p>Konsultanci czatu na żywo odpowiadają zazwyczaj w ciągu 5 minut. W godzinach szczytu czas oczekiwania może być nieco dłuższy.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jaki jest adres email obsługi?</summary>
        <div class="faq-answer">
          <p>Możesz skontaktować się z obsługą <?php echo SITE_NAME; ?> pod adresem <strong>support@westace.com</strong>. Podaj nazwę użytkownika lub email rejestracyjny, opis problemu i ewentualne zrzuty ekranu. Oczekuj odpowiedzi w ciągu 24 godzin.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy obsługa może pomóc mi anulować bonus?</summary>
        <div class="faq-answer">
          <p>Tak. Jeśli chcesz anulować aktywny bonus, skontaktuj się z obsługą przez czat na żywo lub email. Pamiętaj, że anulowanie bonusu powoduje usunięcie kwoty bonusu oraz wszystkich wygranych z niego wygenerowanych.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Co zrobić, jeśli moja sprawa nie zostanie rozwiązana?</summary>
        <div class="faq-answer">
          <p>Jeśli nie jesteś zadowolony z pierwszej odpowiedzi, poproś o eskalację sprawy do starszego konsultanta. Podaj jak najwięcej szczegółów, aby pomóc zespołowi dokładnie zbadać Twoją sprawę.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy mogę poprosić o samowykluczenie?</summary>
        <div class="faq-answer">
          <p>Tak. Skontaktuj się z obsługą przez czat na żywo lub email, aby uzgodnić samowykluczenie na określony czas lub na stałe. Możesz też skontaktować się z Anonimowymi Hazardzistami pod adresem <a href="https://www.anonimowihazardzisci.org" target="_blank" rel="noopener noreferrer">anonimowihazardzisci.org</a> lub zadzwonić na Telefon Zaufania pod numer 116 123. W czasie samowykluczenia nie możesz się zalogować ani stawiać zakładów.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
