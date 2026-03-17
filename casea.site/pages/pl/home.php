<?php
/**
 * Homepage - Polish
 */
$page_title = SITE_NAME . ' Casino - ' . SITE_TAGLINE;
$page_description = SITE_NAME . ' Casino oferuje ponad 10 000 gier kasynowych, krupierów na żywo, zakłady sportowe na 30+ dyscyplin oraz bonus powitalny do 2 000 PLN plus 200 darmowych spinów. Dołącz teraz i graj.';
$current_page = 'home';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__badge">Już otwarte - przyjmujemy graczy z całego świata</div>
    <h1>
      <span class="brand-name"><?php echo SITE_NAME; ?></span><br>
      <span class="brand-type">Casino</span>
    </h1>
    <p class="hero__subtitle">Ponad 10 000 gier od 90+ dostawców, pełne zakłady sportowe na 30+ dyscyplin, stoły z krupierami na żywo i nagrody, które naprawdę się opłacają.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Pakiet Powitalny</div>
      <div class="hero__bonus-value">100% do 2 000 PLN + 200 darmowych spinów</div>
      <div class="hero__bonus-extra">Bonus Sportowy: 100% do 400 PLN &middot; Min. wpłata 80 PLN</div>
    </div>
    <div class="hero__ctas">
      <a href="/play" class="btn btn--primary btn--lg" rel="nofollow"><?php echo __('cta_play', 'Play Now'); ?></a>
      <a href="<?php echo $lang_prefix; ?>/bonuses" class="btn btn--outline btn--lg">Zobacz Bonusy</a>
    </div>
  </div>
</section>

<!-- STATS BAR -->
<section class="stats-bar">
  <div class="container">
    <div class="stats-bar__grid">
<?php foreach ($STATS as $stat): ?>
      <div class="stat">
        <div class="stat__value"><?php echo $stat['value']; ?></div>
        <div class="stat__label"><?php echo $stat['label']; ?></div>
      </div>
<?php endforeach; ?>
    </div>
  </div>
</section>

<!-- MAIN CONTENT -->
<main>
  <!-- About -->
  <section class="content-section" id="about">
    <div class="container">
      <h2>Witaj w <?php echo SITE_NAME; ?> Casino</h2>
      <p><?php echo SITE_NAME; ?> to nowoczesna platforma hazardowa online, na której gracze mogą odkrywać tysiące opcji zakładów w jednym miejscu. Z katalogiem ponad 10 000 produktów obejmującym sloty, mini-gry, wirtualne gry karciane i stołowe oraz wybór lobby z krupierami na żywo, nuda tu nie istnieje. Po stronie zakładów sportowych, korzystne kursy na ponad 30 dyscyplin zapewniają emocje fanom piłki nożnej, koszykówki, tenisa i esportu.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Start</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Gry</th><td>10 000+ (sloty, gry stołowe, kasyno na żywo, gry błyskawiczne)</td></tr>
        <tr><th>Dostawcy</th><td>90+ (Pragmatic Play, Evolution, Microgaming, NetEnt, Playtech i więcej)</td></tr>
        <tr><th>Sport</th><td>30+ dyscyplin, esport, sporty wirtualne</td></tr>
        <tr><th>Bonus Powitalny</th><td>100% do 2 000 PLN + 200 darmowych spinów</td></tr>
        <tr><th>Min. Wpłata</th><td>40 PLN (80 PLN dla większości bonusów)</td></tr>
        <tr><th>Waluty</th><td>EUR, USD, CAD, AUD, CHF, HUF, NOK, PLN, NZD, CZK, BRL, CLP, PEN</td></tr>
        <tr><th>Wsparcie</th><td>Czat na żywo i email 24/7</td></tr>
        <tr><th>Mobilnie</th><td>W pełni responsywna strona, aplikacja nie jest wymagana</td></tr>
      </table>

      <h3>Dlaczego gracze wybierają <?php echo SITE_NAME; ?></h3>
      <ul class="check-list">
        <li>Ponad 10 000 gier od 90+ zaufanych dostawców</li>
        <li>Pełne zakłady sportowe z opcjami pre-match i na żywo na 30+ dyscyplin</li>
        <li>Wiele opcji bonusu powitalnego dla kasyna i sportu</li>
        <li>Cotygodniowe bonusy doładowania, cashback i sklep lojalnościowy</li>
        <li>Program VIP z osobistym menedżerem konta i wyższymi limitami wypłat</li>
        <li>Płatności przez Visa, Mastercard, Skrill, krypto i więcej</li>
        <li>Obsługa klienta 24/7 przez czat na żywo i email</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Gry Kasynowe</h4>
          <p>Tysiące slotów, odmiany blackjacka i ruletki, poker, baccarat, teleturnieje, gry błyskawiczne i stoły z krupierami na żywo od czołowych studiów.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Zakłady Sportowe</h4>
          <p>Zakłady pre-match i na żywo na główne ligi, takie jak UEFA Champions League, NBA, NHL i turnieje Grand Slam. Dostępne są również sporty wirtualne i esport.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127873;</div>
          <h4>Promocje</h4>
          <p>Bonusy powitalne, cotygodniowe oferty doładowania, programy cashback, sklep lojalnościowy, wyzwania i specjalne oferty przez cały tydzień.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Social Proof / Recent Winners -->
  <section class="content-section winners-section" id="winners">
    <div class="container">
      <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--space-4);margin-bottom:var(--space-2)">
        <h2 style="margin-bottom:0">Ostatni Zwycięzcy</h2>
        <span class="live-dot">Live</span>
      </div>
      <div class="jackpot-label">Aktualna Pula Jackpota</div>
      <div class="jackpot-amount" id="jackpotCounter">&euro;2,847,391</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Popularne Gry w <?php echo SITE_NAME; ?></h2>
      <p>Przeglądaj jedne z najczęściej granych tytułów w kasynie. Od slotów o wysokiej zmienności po klasyczne gry stołowe i doświadczenia z krupierem na żywo — znajdziesz tu coś dla każdego typu gracza.</p>

      <div class="game-tabs">
        <button class="game-tab active">Wszystkie Gry</button>
        <button class="game-tab">Sloty</button>
        <button class="game-tab">Kasyno na Żywo</button>
        <button class="game-tab">Gry Stołowe</button>
        <button class="game-tab">Teleturnieje</button>
        <button class="game-tab">Crash Games</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Najlepsi Dostawcy Gier</h3>
          <p>Katalog jest zasilany szerokim wyborem studiów, od liderów branży po obiecujących niezależnych deweloperów:</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">90+ więcej</span>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/casea-games.png" alt="<?php echo SITE_NAME; ?> Casino lobby gier z najlepszymi slotami i dostawcami" style="max-width:300px;width:100%;">
        </div>
      </div>
    </div>
  </section>

  <!-- Sportsbook -->
  <section class="content-section" id="sports">
    <div class="container">
      <h2>Zakłady Sportowe</h2>
      <div class="two-col">
        <div>
          <p>Sekcja zakładów sportowych w <?php echo SITE_NAME; ?> obejmuje zakłady pre-match i na żywo na wydarzenia z głównych i mniejszych rozgrywek. Fani piłki nożnej mogą obstawiać wszystko, od UEFA Champions League po niższe ligi, a koszykówka, tenis, hokej i kilkanaście innych dyscyplin wypełniają harmonogram.</p>
          <p>Sporty wirtualne, takie jak piłka nożna, koszykówka i wyścigi psów, są dostępne przez całą dobę. Zakłady na esport obejmują Dota 2, Counter-Strike, League of Legends, Call of Duty i inne popularne tytuły.</p>

          <h3>Dostępne Dyscypliny</h3>
          <ul class="check-list">
            <li>Piłka nożna (UEFA Champions League, Premier League, Bundesliga, Serie A, La Liga)</li>
            <li>Koszykówka (NBA, EuroLeague, ligi krajowe)</li>
            <li>Tenis (Grand Slam, ATP, WTA)</li>
            <li>Hokej na lodzie (NHL, KHL, SHL)</li>
            <li>Esport (Dota 2, CS2, League of Legends, Call of Duty)</li>
            <li>Sporty wirtualne, wyścigi konne i 25+ więcej</li>
          </ul>
        </div>
        <div>
          <div class="highlight-box">
            <h4>Sportowy Bonus Powitalny</h4>
            <p>Nowi gracze mogą odebrać 100% dopasowania do pierwszej wpłaty sportowej o wartości do 400 PLN. Gracze z Finlandii, Niemiec, Norwegii, Szwajcarii i Austrii kwalifikują się do 800 PLN. Bonus wymaga minimalnej wpłaty 80 PLN i 5- lub 6-krotnego obrotu w zależności od kraju.</p>
          </div>
          <table class="quick-table" style="margin-top: var(--space-6);">
            <tr><th>Typy Zakładów</th><td>Pre-match, na żywo, długoterminowe, akumulatory</td></tr>
            <tr><th>Dyscypliny</th><td>30+ w tym esport i sporty wirtualne</td></tr>
            <tr><th>Funkcje</th><td>Boost akumulatora, wcześniejsza wypłata, ulepszone kursy</td></tr>
            <tr><th>Cashback</th><td>10% tygodniowo do 2 000 PLN</td></tr>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section content-section--alt" id="payments">
    <div class="container">
      <h2>Metody Płatności</h2>
      <p><?php echo SITE_NAME; ?> obsługuje kilka popularnych opcji płatności. Dostępność zależy od Twojego kraju, a wpłaty zaczynają się już od 40 PLN.</p>

      <table class="quick-table">
        <tr><th>Metody Wpłat</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Min. Wpłata</th><td>40 PLN (80 PLN dla większości bonusów)</td></tr>
        <tr><th>Min. Wypłata</th><td>40 PLN</td></tr>
        <tr><th>Maks. Wypłata (Dzienna)</th><td>2 000 PLN (VIP: 6 000 PLN)</td></tr>
        <tr><th>Maks. Wypłata (Miesięczna)</th><td>30 000 PLN (VIP: 80 000 PLN)</td></tr>
        <tr><th>Czas Realizacji</th><td>Do 72 godzin (e-portfele i krypto najszybsze)</td></tr>
        <tr><th>Waluty</th><td>EUR, USD, CAD, AUD, CHF, HUF, NOK, PLN, NZD, CZK, BRL, CLP, PEN</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">Szczegółowe informacje o metodach wypłat, limitach, opłatach i wskazówkach przyspieszających wypłatę znajdziesz na stronie <a href="<?php echo $lang_prefix; ?>/withdrawal">Wypłaty</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section" id="mobile">
    <div class="container">
      <h2>Kasyno Mobilne</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p><?php echo SITE_NAME; ?> nie posiada dedykowanej aplikacji mobilnej, ale strona jest w pełni kompatybilna ze wszystkimi smartfonami i tabletami. Platforma w przeglądarce zapewnia te same funkcje, gry i narzędzia zarządzania kontem, co wersja desktopowa. Nie trzeba niczego pobierać — po prostu otwórz przeglądarkę mobilną, zaloguj się i graj.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/casea-mobile.png" alt="<?php echo SITE_NAME; ?> Casino na telefonie" style="max-width:320px;width:100%;">
        </div>
      </div>
      <ul class="check-list">
        <li>Pełna biblioteka gier dostępna w przeglądarkach mobilnych</li>
        <li>Zakłady sportowe z rynkami na żywo</li>
        <li>Wpłaty i wypłaty bezpośrednio z telefonu</li>
        <li>Czat na żywo dostępny na urządzeniach mobilnych</li>
        <li>Nie trzeba pobierać aplikacji — działa na iOS i Android</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section content-section--alt" id="faq">
    <div class="container container--narrow">
      <h2>Najczęściej Zadawane Pytania</h2>

      <details class="faq-item">
        <summary>W jakie gry mogę grać w <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> współpracuje z ponad 90 dostawcami, w tym Pragmatic Play, Evolution, Microgaming i Red Tiger. Możesz grać w sloty wideo, sloty z jackpotem, tytuły Megaways, odmiany blackjacka, ruletkę, baccarat, pokera, teleturnieje, crash games i wiele więcej. Zakłady sportowe obejmują 30+ dyscyplin z opcjami pre-match i na żywo.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jaki jest bonus powitalny w <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>Nowi gracze kasynowi mogą odebrać 100% bonus powitalny do 2 000 PLN plus 200 darmowych spinów przy pierwszej wpłacie. Gracze zakładów sportowych kwalifikują się do 100% dopasowania do 400 PLN (lub 800 PLN w zależności od kraju). Minimalna wpłata wynosi 80 PLN.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jaki jest maksymalny limit wypłaty w <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>Standardowi gracze mogą wypłacić do 2 000 PLN dziennie i 30 000 PLN miesięcznie. Członkowie VIP mają dostęp do wyższych limitów -- do 6 000 PLN dziennie i 80 000 PLN miesięcznie. Minimalna wypłata wynosi 40 PLN.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy <?php echo SITE_NAME; ?> ma program VIP?</summary>
        <div class="faq-answer">
          <p>Tak. <?php echo SITE_NAME; ?> prowadzi wielopoziomowy program lojalnościowy VIP, w którym Twoja ranga rośnie w miarę gry. Korzyści obejmują osobistego menedżera konta, wyższe limity wypłat, ekskluzywne promocje i cotygodniowe oferty cashback, które rosną z Twoim poziomem.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy mogę grać na telefonie?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> nie ma aplikacji mobilnej, ale strona jest w pełni przystosowana do urządzeń mobilnych. Możesz korzystać ze wszystkich gier, zakładów sportowych i funkcji konta przez dowolną nowoczesną przeglądarkę na smartfonie lub tablecie.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jak mogę skontaktować się z obsługą klienta?</summary>
        <div class="faq-answer">
          <p>Możesz skontaktować się z zespołem wsparcia przez czat na żywo lub email przez całą dobę. Czat na żywo jest dostępny bezpośrednio na stronie i zapewnia szybkie odpowiedzi. Więcej szczegółów znajdziesz na stronie <a href="<?php echo $lang_prefix; ?>/support">Wsparcia</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
