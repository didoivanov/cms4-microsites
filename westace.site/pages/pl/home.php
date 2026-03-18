<?php
/**
 * Homepage - WestAce (Polish / PL)
 */
$page_title = 'WestAce Kasyno - 7 000+ Gier, Zakłady Sportowe & Bonus Powitalny do 8 600 zł';
$page_description = SITE_NAME . ' Kasyno oferuje 7 000+ gier od 100+ dostawców, pełne zakłady sportowe z grą na żywo, stoły z krupierem na żywo i bonus powitalny 100% do 4 300 zł + 50 darmowych spinów. Dołącz i graj.';
$current_page = 'home';
$lang_prefix = '/pl';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__badge">Już otwarte - 7 000+ gier i zakłady sportowe na żywo</div>
    <h1>
      <span class="brand-name"><?php echo SITE_NAME; ?></span><br>
      <span class="brand-type">Casino</span>
    </h1>
    <p class="hero__subtitle">Ponad 7 000 gier od 100+ dostawców, stoły z krupierem na żywo, pełne zakłady sportowe z grą na żywo oraz pakiet powitalny nagradzający Twoje pierwsze trzy depozyty.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Pakiet Powitalny</div>
      <div class="hero__bonus-value"><?php echo WELCOME_BONUS; ?></div>
      <div class="hero__bonus-extra">1. Depozyt: 100% do 4 300 zł + 50 Darmowych Spinów &middot; Min depozyt 85 zł</div>
    </div>
    <div class="hero__ctas">
      <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Graj Teraz</a>
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
      <h2>Witamy w <?php echo SITE_NAME; ?> Kasyno</h2>
      <p><?php echo SITE_NAME; ?> to kasyno online i platforma zakładów sportowych uruchomiona w 2026 roku. Platforma łączy ponad 7 000 gier od 100+ dostawców, obejmując automaty, lobby z krupierem na żywo, gry stołowe, gry crash, tytuły z jackpotem i gry show. Oprócz kasyna oferujemy pełne zakłady sportowe z obstawianiem przed meczem i na żywo, sporty wirtualne oraz wyścigi konne. Nowi gracze mogą odebrać pakiet powitalny na trzy depozyty o łącznej wartości do 8 600 zł + 150 darmowych spinów.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Uruchomienie</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Gry</th><td>7 000+ (automaty, gry stołowe, kasyno na żywo, gry crash, jackpoty, gry show)</td></tr>
        <tr><th>Dostawcy</th><td>100+ (Pragmatic Play, Playtech, Novomatic, Red Tiger, Yggdrasil, BGaming, Hacksaw Gaming i więcej)</td></tr>
        <tr><th>Bonus Powitalny</th><td><?php echo WELCOME_BONUS_TEXT; ?></td></tr>
        <tr><th>Min Depozyt</th><td>45 zł</td></tr>
        <tr><th>Waluta</th><td>PLN</td></tr>
        <tr><th>Pomoc</th><td>Czat na żywo 24/7 + e-mail</td></tr>
        <tr><th>Zakłady Sportowe</th><td>Tak (sport, zakłady na żywo, sporty wirtualne, wyścigi konne)</td></tr>
        <tr><th>Mobilnie</th><td>W pełni responsywna strona, aplikacja nie jest wymagana</td></tr>
      </table>

      <h3>Dlaczego gracze wybierają <?php echo SITE_NAME; ?></h3>
      <ul class="check-list">
        <li>Ponad 7 000 gier od 100+ licencjonowanych dostawców</li>
        <li>Pakiet powitalny na trzy depozyty do 8 600 zł + 150 darmowych spinów</li>
        <li>Pełne zakłady sportowe z grą na żywo, sportami wirtualnymi i wyścigami konnymi</li>
        <li>Kasyno na żywo z ruletką, blackjackiem, bakaratem, kośćmi i pokerem</li>
        <li>Codzienny cashback do 15% z wymogiem obrotu zaledwie 1x</li>
        <li>Program VIP z 5 poziomami, osobistym opiekunem i wyższymi limitami</li>
        <li>Przyjazne dla kryptowalut - osobny bonus powitalny i oferty doładowania</li>
        <li>Pomoc 24/7 przez czat na żywo i e-mail</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Gry Kasynowe</h4>
          <p>Tysiące automatów, odmiany blackjacka i ruletki, poker, bakarat, gry crash i stoły z krupierem na żywo od studiów takich jak Pragmatic Play, Playtech, Novomatic, Red Tiger i Yggdrasil.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127183;</div>
          <h4>Kasyno na Żywo</h4>
          <p>Gry z krupierem na żywo, w tym ruletka, blackjack, bakarat, kości i poker. Prawdziwi krupierzy transmitujący w HD z profesjonalnych studiów przez całą dobę.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Zakłady Sportowe</h4>
          <p>Pełna platforma zakładów sportowych z rynkami przed meczem i na żywo. Ekstraklasa, Champions League, sporty wirtualne i wyścigi konne uzupełniają ofertę dla fanów sportu.</p>
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
      <div class="jackpot-amount" id="jackpotCounter">12 243 781 zł</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Popularne Gry w <?php echo SITE_NAME; ?></h2>
      <p>Przeglądaj najchętniej wybierane tytuły w kasynie. Od automatów o wysokiej zmienności po klasyczne gry stołowe, pokoje z krupierem na żywo i rynki sportowe - każdy gracz znajdzie coś dla siebie.</p>

      <div class="game-tabs">
        <button class="game-tab active">Wszystkie Gry</button>
        <button class="game-tab">Automaty</button>
        <button class="game-tab">Kasyno na Żywo</button>
        <button class="game-tab">Gry Stołowe</button>
        <button class="game-tab">Crash Games</button>
        <button class="game-tab">Jackpoty</button>
        <button class="game-tab">Sport</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Najlepsi Dostawcy Gier</h3>
          <p>Nasz katalog gier tworzą studia od liderów branży po obiecujących niezależnych deweloperów:</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">100+ łącznie</span>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-games-screen.png" alt="<?php echo SITE_NAME; ?> Kasyno lobby gier z najlepszymi automatami od dostawców Pragmatic Play, Playtech i Novomatic" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section" id="payments">
    <div class="container">
      <h2>Metody Płatności</h2>
      <p><?php echo SITE_NAME; ?> obsługuje szeroki zakres metod płatności, w tym karty kredytowe, karty przedpłacone, portfele elektroniczne i kryptowaluty. Depozyty zaczynają się od 45 zł, a wszystkie wpłaty i wypłaty są bez prowizji.</p>

      <table class="quick-table">
        <tr><th>Metody Wpłaty</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Min Depozyt</th><td>45 zł</td></tr>
        <tr><th>Min Wypłata</th><td>45 zł</td></tr>
        <tr><th>Maks Wypłata</th><td>2 150 zł/dzień, 30 000 zł/miesiąc</td></tr>
        <tr><th>Czas Wypłaty</th><td>24-72 godziny</td></tr>
        <tr><th>Waluta</th><td>PLN</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">Szczegółowe informacje o metodach wypłat, limitach, opłatach i wskazówkach przyspieszających wypłatę znajdziesz na stronie <a href="<?php echo $lang_prefix; ?>/withdrawal">Wypłaty</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section content-section--alt" id="mobile">
    <div class="container">
      <h2>Kasyno Mobilne</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p><?php echo SITE_NAME; ?> nie posiada dedykowanej aplikacji mobilnej, ale strona jest w pełni kompatybilna ze wszystkimi smartfonami i tabletami. Platforma w przeglądarce zapewnia te same funkcje, gry i narzędzia zarządzania kontem, co wersja desktopowa. Bez pobierania - wystarczy otworzyć przeglądarkę mobilną, zalogować się i grać.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/westace-mobile.png" alt="<?php echo SITE_NAME; ?> Kasyno mobilne lobby z bonusem powitalnym i nawigacją gier" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>
      <ul class="check-list">
        <li>Pełna biblioteka gier dostępna w przeglądarce mobilnej</li>
        <li>Stoły z krupierem na żywo i zakłady sportowe w podróży</li>
        <li>Wpłaty i wypłaty bezpośrednio z telefonu</li>
        <li>Czat na żywo dostępny na urządzeniach mobilnych</li>
        <li>Bez pobierania aplikacji - działa na iOS i Androidzie</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section" id="faq">
    <div class="container container--narrow">
      <h2>Najczęściej Zadawane Pytania</h2>

      <details class="faq-item">
        <summary>W jakie gry mogę grać w <?php echo SITE_NAME; ?> Kasyno?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> współpracuje ze 100+ dostawcami, w tym Pragmatic Play, Playtech, Novomatic, Red Tiger, Yggdrasil, BGaming, Hacksaw Gaming i Quickspin. Dostępne są automaty wideo, automaty z jackpotem, blackjack, ruletka, bakarat, poker, gry crash, gry show i tytuły z krupierem na żywo. Platforma oferuje również pełne zakłady sportowe z grą na żywo, sporty wirtualne i wyścigi konne.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jaki jest bonus powitalny w <?php echo SITE_NAME; ?> Kasyno?</summary>
        <div class="faq-answer">
          <p>Nowi gracze otrzymują pakiet powitalny na trzy depozyty: 100% do 4 300 zł + 50 darmowych spinów na pierwszy depozyt, 100% do 2 150 zł + 50 darmowych spinów na drugi i 100% do 2 150 zł + 50 darmowych spinów na trzeci. Łączna wartość: do 8 600 zł + 150 darmowych spinów. Minimalny depozyt to 85 zł na każdy poziom. Wymóg obrotu wynosi 35x (bonus + depozyt).</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jak szybko przetwarzane są wypłaty?</summary>
        <div class="faq-answer">
          <p>Wypłaty są przetwarzane w ciągu 24 do 72 godzin. Minimalna wypłata to 45 zł dla wszystkich metod płatności. Dzienny limit wypłat wynosi 2 150 zł, a miesięczny 30 000 zł. Wypłaty są bez prowizji.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy <?php echo SITE_NAME; ?> posiada program VIP?</summary>
        <div class="faq-answer">
          <p>Tak. <?php echo SITE_NAME; ?> prowadzi program VIP z 5 poziomami. Korzyści obejmują wyższe procenty cashbacku (do 15%), zwiększone limity wypłat, priorytetowe przetwarzanie, spersonalizowane oferty i osobistego opiekuna VIP na najwyższych poziomach. Dokładne kryteria awansu między poziomami nie są publicznie ujawniane.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy mogę grać na telefonie?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> nie posiada aplikacji mobilnej, ale strona jest w pełni przystosowana do urządzeń mobilnych. Wszystkie gry, zakłady sportowe i funkcje konta są dostępne przez przeglądarkę każdego nowoczesnego smartfona lub tabletu.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jak skontaktować się z obsługą klienta?</summary>
        <div class="faq-answer">
          <p>Z zespołem pomocy można skontaktować się przez czat na żywo 24/7 bezpośrednio na stronie lub e-mailem pod adresem support@westace.com. Więcej informacji znajdziesz na stronie <a href="<?php echo $lang_prefix; ?>/support">Pomoc</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
