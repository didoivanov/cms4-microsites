<?php
/**
 * Sports Betting Page - WestAce (Polish)
 */
$page_title = 'WestAce Zakłady Sportowe - Sport, Zakłady Na Żywo i Sporty Wirtualne';
$page_description = 'Obstawiaj piłkę nożną, tenis, koszykówkę, wyścigi konne i wiele więcej w ' . SITE_NAME . '. Zakłady na żywo, sporty wirtualne i konkurencyjne kursy na ponad 30 dyscyplin.';
$current_page = 'sports';
$lang_prefix = '/pl';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Zakłady Sportowe';
$hero_description = 'Kursy przedmeczowe, zakłady na żywo, sporty wirtualne i wyścigi konne - wszystko w jednym miejscu obok pełnego kasyna.';
$hero_cta = 'Zacznij Obstawiać';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Sportsbook Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Przegląd zakładów sportowych</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p><?php echo SITE_NAME; ?> to nie tylko kasyno. Oferujemy pełną ofertę zakładów sportowych obejmującą zakłady przedmeczowe, rynki na żywo, sporty wirtualne i wyścigi konne. Niezależnie od tego, czy śledzisz Ekstraklasę, Ligę Mistrzów czy turnieje tenisowe Grand Slam, znajdziesz u nas konkurencyjne kursy i szeroki wybór rynków na każde ważne wydarzenie.</p>
          <p>Zakłady sportowe działają równolegle z kasynem, więc możesz przełączać się między automatami, stołami na żywo i obstawianiem sportu z jednego konta z jednym saldem. Nie potrzebujesz osobnych portfeli ani przelewów.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-sports-screen.png" alt="<?php echo SITE_NAME; ?> zakłady sportowe z kursami na żywo na piłkę nożną i rynki Ekstraklasy" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Zakłady przedmeczowe</h4>
          <p>Obstawiaj nadchodzące mecze w ponad 30 dyscyplinach. Piłka nożna, tenis, koszykówka, krykiet, hokej na lodzie, MMA i wiele więcej - z zakładami pojedynczymi, akumulatorami i systemowymi.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9889;</div>
          <h4>Zakłady na żywo</h4>
          <p>Obstawiaj mecze w trakcie trwania z kursami aktualizowanymi co kilka sekund. Śledź akcję dzięki statystykom na żywo, tablicom wyników i rynkom w czasie rzeczywistym we wszystkich głównych dyscyplinach.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127918;</div>
          <h4>Sporty wirtualne</h4>
          <p>Symulowane wydarzenia dostępne całodobowo - wirtualna piłka nożna, koszykówka, tenis, wyścigi konne i wyścigi chartów. Wyniki co kilka minut, bez czekania na realne mecze.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Available Sports -->
  <section class="content-section content-section--alt" id="sports">
    <div class="container">
      <h2>Dostępne dyscypliny</h2>
      <p>Nasza oferta zakładów sportowych obejmuje szeroką gamę dyscyplin z lig i turniejów na całym świecie. Oto niektóre z najpopularniejszych rynków:</p>

      <div class="two-col">
        <div>
          <h3>Popularne dyscypliny</h3>
          <ul class="check-list">
            <li>Piłka nożna - Ekstraklasa, Puchar Polski, Legia Warszawa, Lech Poznań, Liga Mistrzów, Premier League, La Liga, Bundesliga, Serie A, Mistrzostwa Świata i setki niższych lig</li>
            <li>Tenis - Grand Slamy, ATP, WTA i turnieje Challenger</li>
            <li>Koszykówka - NBA, EuroLeague, PLK (Polska Liga Koszykówki), ligi krajowe</li>
            <li>Hokej na lodzie - NHL, KHL, SHL i ligi europejskie</li>
            <li>Siatkówka - PlusLiga, Liga Mistrzów CEV, Liga Narodów</li>
            <li>MMA / Boks - UFC, Bellator i duże gale bokserskie</li>
            <li>Esport - CS2, Dota 2, League of Legends, Valorant</li>
          </ul>
        </div>
        <div>
          <h3>Więcej dyscyplin</h3>
          <ul class="check-list">
            <li>Rugby Union i Rugby League</li>
            <li>Futbol amerykański - NFL, futbol uniwersytecki</li>
            <li>Baseball - MLB, NPB, KBO</li>
            <li>Piłka ręczna - SuperLiga, rozgrywki europejskie i międzynarodowe</li>
            <li>Krykiet - IPL, mecze testowe, T20 World Cup</li>
            <li>Tenis stołowy - turnieje zawodowe i światowe</li>
            <li>Darts, snooker, kolarstwo, Formuła 1</li>
          </ul>
        </div>
      </div>

      <p style="margin-top: var(--space-6);">Zakłady na żywo są dostępne dla większości wymienionych dyscyplin. Kursy aktualizują się w czasie rzeczywistym w zależności od przebiegu meczu, dzięki czemu możesz reagować na gole, przełamania i zmiany dynamiki na bieżąco.</p>
    </div>
  </section>

  <!-- Horse Racing -->
  <section class="content-section" id="horse-racing">
    <div class="container container--narrow">
      <h2>Wyścigi konne</h2>
      <p><?php echo SITE_NAME; ?> obejmuje wyścigi konne z torów w Wielkiej Brytanii, Irlandii, Francji, Australii i innych krajów z tradycjami wyścigowymi. Znajdziesz rynki ante-post na główne festiwale, a także kursy w dniu wyścigu z opcjami na zwycięzcę, miejsce i each-way.</p>
      <p>Kluczowe imprezy takie jak Cheltenham, Royal Ascot, Grand National i Melbourne Cup są obsługiwane z pełnym zakresem rynków. Na co dzień oferujemy standardowe zakłady na zwycięzcę i miejsce na większości brytyjskich i irlandzkich spotkań.</p>
    </div>
  </section>

  <!-- Virtual Sports -->
  <section class="content-section content-section--alt" id="virtual">
    <div class="container container--narrow">
      <h2>Sporty wirtualne</h2>
      <p>Gdy nie ma meczów na żywo do obstawiania, nasza sekcja sportów wirtualnych zapewnia akcję przez całą dobę. Wydarzenia są symulowane przez certyfikowane generatory liczb losowych, więc wyniki są uczciwe i nieprzewidywalne.</p>

      <h3>Dostępne sporty wirtualne</h3>
      <ul>
        <li><strong>Wirtualna piłka nożna</strong> - pełne symulacje meczów z tabelami ligowymi i formatem pucharowym</li>
        <li><strong>Wirtualna koszykówka</strong> - symulacje kwarta po kwarcie ze standardowymi rynkami koszykarskimi</li>
        <li><strong>Wirtualny tenis</strong> - mecze set po secie ze zwycięzcą meczu i dokładnym wynikiem</li>
        <li><strong>Wirtualne wyścigi konne</strong> - wyścigi płaskie i z przeszkodami z zakładami na zwycięzcę, miejsce i prognozę</li>
        <li><strong>Wirtualne wyścigi chartów</strong> - krótkie wyścigi z rynkami na zwycięzcę i prognozę</li>
      </ul>
      <p>Nowe wydarzenia wirtualne startują co 2-3 minuty, więc zawsze jest coś do obstawienia.</p>
    </div>
  </section>

  <!-- Sports Betting Tips -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Porady dotyczące zakładów sportowych</h2>
      <p>Kilka prostych zasad, które pomogą Ci cieszyć się zakładami sportowymi w sposób odpowiedzialny:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Ustal budżet przed rozpoczęciem gry.</strong> Zdecyduj, ile jesteś w stanie przeznaczyć na zakłady w tygodniu lub miesiącu i nie przekraczaj tej kwoty. Traktuj to jako wydatek na rozrywkę, nie inwestycję.
          </div>
        </li>
        <li>
          <div>
            <strong>Obstawiaj dyscypliny, które znasz.</strong> Trzymaj się lig i sportów, które naprawdę rozumiesz. Znajomość drużyn, zawodników i warunków daje lepszą ocenę niż obstawianie losowych rynków.
          </div>
        </li>
        <li>
          <div>
            <strong>Nie ścigaj strat.</strong> Jeśli miałeś złą passę, nie zwiększaj stawek, próbując odzyskać pieniądze. Zrób przerwę i wróć ze świeżą głową.
          </div>
        </li>
        <li>
          <div>
            <strong>Prowadź rejestr zakładów.</strong> Śledź swoje zakłady, żebyś wiedział, co działa, a co nie. Z czasem pomoże Ci to dostrzec wzorce i podejmować lepsze decyzje.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Sports FAQ -->
  <section class="content-section content-section--alt" id="sports-faq">
    <div class="container container--narrow">
      <h2>Najczęściej zadawane pytania o zakłady</h2>

      <details class="faq-item">
        <summary>Czy <?php echo SITE_NAME; ?> oferuje zakłady sportowe?</summary>
        <div class="faq-answer">
          <p>Tak. Oferujemy pełną ofertę zakładów sportowych z kursami przedmeczowymi, rynkami na żywo, sportami wirtualnymi i wyścigami konnymi obok naszego kasyna. Możesz przełączać się między kasynem a zakładami z tego samego konta.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jakie dyscypliny mogę obstawiać?</summary>
        <div class="faq-answer">
          <p>Obejmujemy ponad 30 dyscyplin, w tym piłkę nożną, tenis, koszykówkę, siatkówkę, hokej na lodzie, MMA, boks, esport, wyścigi konne, rugby, futbol amerykański, baseball i wiele innych. Dostępne są zarówno główne ligi, jak i mniejsze rozgrywki.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy dostępne są zakłady na żywo?</summary>
        <div class="faq-answer">
          <p>Tak. Zakłady na żywo są dostępne w większości dyscyplin. Kursy aktualizują się w czasie rzeczywistym w miarę trwania meczów i możesz stawiać zakłady przez cały czas trwania wydarzenia.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czym są sporty wirtualne?</summary>
        <div class="faq-answer">
          <p>Sporty wirtualne to symulowane wydarzenia generowane przez certyfikowane generatory liczb losowych. Działają całodobowo z nowymi wydarzeniami co kilka minut. Oferujemy wirtualną piłkę nożną, koszykówkę, tenis, wyścigi konne i wyścigi chartów.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy mogę użyć salda kasynowego na zakłady sportowe?</summary>
        <div class="faq-answer">
          <p>Tak. <?php echo SITE_NAME; ?> korzysta z jednego salda zarówno dla kasyna, jak i zakładów sportowych. Wpłaty trafiają na jedno konto i możesz używać tych samych środków na automaty, kasyno na żywo lub zakłady sportowe bez żadnych przelewów.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jaki jest minimalny zakład na sport?</summary>
        <div class="faq-answer">
          <p>Minimalne zakłady różnią się w zależności od dyscypliny i rynku, ale zazwyczaj są bardzo niskie - od 2 zł na większości wydarzeń. Sprawdź kupon zakładowy po dokładne minimum na danym rynku.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
