<?php
/**
 * Homepage – Polish
 */
$page_title = SITE_NAME . ' Casino - Kasyno online, zakłady sportowe i ponad 8 000 gier';
$page_description = SITE_NAME . ' Casino oferuje ponad 8 000 gier od 103+ dostawców, stoły z krupierami na żywo, zakłady sportowe na 30+ dyscyplin i bonus powitalny do 2 000 EUR plus 300 darmowych spinów na trzy depozyty. Dołącz i graj.';
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
    <p class="hero__subtitle">Ponad 8 000 gier od 103+ dostawców, pełna oferta zakładów sportowych na 30+ dyscyplin, stoły z krupierami na żywo i wielopoziomowy pakiet powitalny, który nagradza Twoje trzy pierwsze depozyty.</p>
    <div class="hero__bonus-card">
      <div class="hero__bonus-label">Pakiet powitalny</div>
      <div class="hero__bonus-value"><?php echo WELCOME_BONUS; ?></div>
      <div class="hero__bonus-extra">Bonus sportowy: 100% do &euro;500 &middot; Min. depozyt &euro;20</div>
    </div>
    <div class="hero__ctas">
      <a href="/play" class="btn btn--primary btn--lg" rel="nofollow"><?php echo __('cta_play', 'Graj teraz'); ?></a>
      <a href="/pl/bonuses" class="btn btn--outline btn--lg">Zobacz bonusy</a>
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
      <h2>Witamy w <?php echo SITE_NAME; ?> Casino</h2>
      <p><?php echo SITE_NAME; ?> to kasyno online i serwis zakładów sportowych uruchomiony w 2025 roku na licencji Curacao OGL/2024/129/0131, prowadzony przez 130 group N.V. Platforma łączy ponad 8 000 gier od 103+ dostawców -- automaty, stoły z krupierami na żywo, gry stołowe, gry błyskawiczne oraz pełną ofertę zakładów sportowych z opcjami pre-match i live na ponad 30 dyscyplin. Nowi gracze otrzymują pakiet powitalny na trzy depozyty o wartości do 2 000 EUR plus 300 darmowych spinów po stronie kasyna lub do 500 EUR na trzy depozyty sportowe.</p>

      <!-- Quick info table -->
      <table class="quick-table">
        <tr><th>Start</th><td><?php echo SITE_YEAR; ?></td></tr>
        <tr><th>Licencja</th><td>Curacao OGL/2024/129/0131</td></tr>
        <tr><th>Gry</th><td>8 000+ (automaty, gry stołowe, kasyno na żywo, gry błyskawiczne)</td></tr>
        <tr><th>Dostawcy</th><td>103+ (Play'n GO, Playtech, Pragmatic Play, BGaming, Hacksaw Gaming i więcej)</td></tr>
        <tr><th>Sport</th><td>30+ dyscyplin, esport, sporty wirtualne</td></tr>
        <tr><th>Bonus powitalny</th><td><?php echo WELCOME_BONUS_TEXT; ?></td></tr>
        <tr><th>Min. depozyt</th><td>EUR 10 (EUR 20 dla większości bonusów)</td></tr>
        <tr><th>Waluty</th><td>EUR, CHF, USD, CAD, AUD, NZD, PLN, BRL, NOK, ZAR, CZK, HUF, CLP</td></tr>
        <tr><th>Pomoc</th><td>Czat na żywo 24/7, email i Telegram</td></tr>
        <tr><th>Mobilnie</th><td>W pełni responsywna strona, bez potrzeby instalacji aplikacji</td></tr>
      </table>

      <h3>Dlaczego gracze wybierają <?php echo SITE_NAME; ?></h3>
      <ul class="check-list">
        <li>Ponad 8 000 gier od 103+ licencjonowanych dostawców</li>
        <li>Pakiet powitalny na trzy depozyty do 2 000 EUR + 300 darmowych spinów</li>
        <li>Pełna oferta zakładów sportowych z opcjami pre-match i live na 30+ dyscyplin</li>
        <li>Bonus powitalny na sport do 500 EUR na trzy depozyty</li>
        <li>Cotygodniowe bonusy doładowania, programy cashback i turnieje</li>
        <li>5-poziomowy program VIP z osobistym opiekunem konta i wyższymi limitami</li>
        <li>20+ metod płatności, w tym Visa, Mastercard, Skrill, kryptowaluty i portfele elektroniczne</li>
        <li>Pomoc 24/7 na czacie, przez email i Telegram</li>
      </ul>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#127920;</div>
          <h4>Gry kasynowe</h4>
          <p>Tysiące automatów, odmiany blackjacka i ruletki, poker, bakarat, teleturnieje, gry crash i stoły z krupierami na żywo od studiów takich jak Play'n GO, Pragmatic Play i Hacksaw Gaming.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Zakłady sportowe</h4>
          <p>Zakłady pre-match i na żywo na największe ligi: Liga Mistrzów UEFA, NBA, NHL i turnieje wielkoszlemowe. Esport obejmujący Dota 2, CS2 i League of Legends. Sporty wirtualne dostępne całą dobę.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127873;</div>
          <h4>Promocje</h4>
          <p>Pakiety powitalne na trzy depozyty dla kasyna i sportu, cotygodniowe bonusy doładowania, 15% cashback sportowy, turnieje i 5-poziomowy program VIP z ekskluzywnymi nagrodami.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Social Proof / Recent Winners -->
  <section class="content-section winners-section" id="winners">
    <div class="container">
      <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--space-4);margin-bottom:var(--space-2)">
        <h2 style="margin-bottom:0">Ostatni zwycięzcy</h2>
        <span class="live-dot">Live</span>
      </div>
      <div class="jackpot-label">Aktualna pula jackpota</div>
      <div class="jackpot-amount" id="jackpotCounter">&euro;2,847,391</div>
      <div class="winners-grid" id="winnersGrid">
        <!-- Winners populated by JS -->
      </div>
    </div>
  </section>

  <!-- Game Grid -->
  <section class="content-section content-section--alt" id="games">
    <div class="container">
      <h2>Popularne gry w <?php echo SITE_NAME; ?></h2>
      <p>Sprawdź najchętniej grane tytuły w kasynie. Od automatów o wysokiej zmienności po klasyczne gry stołowe i sale z krupierami na żywo -- każdy gracz znajdzie tu coś dla siebie.</p>

      <div class="game-tabs">
        <button class="game-tab active">Wszystkie gry</button>
        <button class="game-tab">Automaty</button>
        <button class="game-tab">Kasyno na żywo</button>
        <button class="game-tab">Gry stołowe</button>
        <button class="game-tab">Teleturnieje</button>
        <button class="game-tab">Gry crash</button>
      </div>

      <div class="game-grid" id="gameGrid">
        <!-- Games populated by JS -->
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-8) 0">
        <div>
          <h3 style="margin-top:0">Najlepsi dostawcy gier</h3>
          <p>Katalog jest zasilany szerokim wachlarzem studiów -- od liderów branży po obiecujących niezależnych deweloperów:</p>
          <div class="provider-logos">
<?php foreach ($PROVIDERS as $provider): ?>
            <span class="provider-tag"><?php echo $provider; ?></span>
<?php endforeach; ?>
            <span class="provider-tag">103+ łącznie</span>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-games-screen.png" alt="<?php echo SITE_NAME; ?> Casino game lobby showing top slots from providers like Novomatic, Play'n GO and Hacksaw Gaming" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>
    </div>
  </section>

  <!-- Sportsbook -->
  <section class="content-section" id="sports">
    <div class="container">
      <h2>Zakłady sportowe</h2>
      <div class="two-col" style="align-items:flex-start;gap:var(--space-8)">
        <div>
          <p>Oferta zakładów sportowych <?php echo SITE_NAME; ?> obejmuje zakłady pre-match i na żywo na wydarzenia zarówno z dużych, jak i mniejszych lig. Fani piłki nożnej mogą obstawiać wszystko -- od Ligi Mistrzów UEFA po niższe ligi, a koszykówka, tenis, hokej na lodzie i kilkanaście innych dyscyplin uzupełniają rozkład.</p>
          <p>Sporty wirtualne, takie jak piłka nożna, koszykówka i wyścigi chartów, dostępne są całą dobę. Zakłady esportowe obejmują Dota 2, Counter-Strike 2, League of Legends, Call of Duty i inne tytuły turniejowe.</p>

          <h3>Dostępne dyscypliny</h3>
          <ul class="check-list">
            <li>Piłka nożna (Liga Mistrzów UEFA, Premier League, Bundesliga, Serie A, La Liga)</li>
            <li>Koszykówka (NBA, EuroLeague, ligi krajowe)</li>
            <li>Tenis (Grand Slam, ATP, WTA)</li>
            <li>Hokej na lodzie (NHL, KHL, SHL)</li>
            <li>Esport (Dota 2, CS2, League of Legends, Call of Duty)</li>
            <li>Sporty wirtualne, wyścigi konne i 25+ więcej</li>
          </ul>
        </div>
        <div>
          <div style="text-align:center;margin-bottom:var(--space-6)">
            <img src="/assets/img/vipluck-sports.png" alt="<?php echo SITE_NAME; ?> sportsbook showing live Champions League odds and sports betting interface" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
          </div>
          <div class="highlight-box">
            <h4>Bonus powitalny na sport</h4>
            <p>Nowi gracze mogą odebrać do 500 EUR w bonusach sportowych na trzy pierwsze depozyty: 100% do 200 EUR na pierwszy, 100% do 150 EUR na drugi i 100% do 150 EUR na trzeci. Minimalny depozyt to 20 EUR. Wymagany obrót: 6x przy minimalnym kursie 1,60.</p>
          </div>
          <table class="quick-table" style="margin-top: var(--space-6);">
            <tr><th>Rodzaje zakładów</th><td>Pre-match, na żywo, długoterminowe, akumulatory</td></tr>
            <tr><th>Dyscypliny</th><td>30+ łącznie z esportem i wirtualnymi</td></tr>
            <tr><th>Funkcje</th><td>Boost akumulatora, wcześniejsza wypłata, podwyższone kursy</td></tr>
            <tr><th>Cashback</th><td>15% tygodniowo do 500 EUR</td></tr>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- Payments Overview -->
  <section class="content-section content-section--alt" id="payments">
    <div class="container">
      <h2>Metody płatności</h2>
      <p><?php echo SITE_NAME; ?> obsługuje ponad 20 metod płatności, w tym karty kredytowe, portfele elektroniczne, karty prepaid i 10 kryptowalut. Dostępność zależy od kraju, a depozyty zaczynają się od 10 EUR.</p>

      <table class="quick-table">
        <tr><th>Metody wpłat</th><td><?php echo implode(', ', $PAYMENT_METHODS); ?></td></tr>
        <tr><th>Min. depozyt</th><td>EUR 10 (EUR 20 dla większości bonusów)</td></tr>
        <tr><th>Min. wypłata</th><td>EUR 20</td></tr>
        <tr><th>Maks. wypłata (dziennie)</th><td>EUR 700 (VIP: EUR 1 500)</td></tr>
        <tr><th>Maks. wypłata (tygodniowo)</th><td>EUR 2 250 (VIP: EUR 7 000)</td></tr>
        <tr><th>Maks. wypłata (miesięcznie)</th><td>EUR 9 000 (VIP: EUR 28 000)</td></tr>
        <tr><th>Czas realizacji</th><td>Do 72 godzin, bez realizacji w weekendy (do 7 dni roboczych łącznie)</td></tr>
        <tr><th>Waluty</th><td>EUR, CHF, USD, CAD, AUD, NZD, PLN, BRL, NOK, ZAR, CZK, HUF, CLP</td></tr>
      </table>

      <p style="margin-top: var(--space-6);">Szczegółowe informacje o metodach wypłat, limitach, opłatach i poradach, jak przyspieszyć wypłatę, znajdziesz na <a href="/pl/withdrawal">stronie Wypłaty</a>.</p>
    </div>
  </section>

  <!-- Mobile -->
  <section class="content-section" id="mobile">
    <div class="container">
      <h2>Kasyno mobilne</h2>
      <div class="two-col" style="align-items:center">
        <div>
          <p><?php echo SITE_NAME; ?> nie posiada dedykowanej aplikacji mobilnej, ale strona jest w pełni kompatybilna ze wszystkimi smartfonami i tabletami. Platforma przeglądarkowa oferuje te same funkcje, gry i narzędzia do zarządzania kontem, co wersja desktopowa. Bez pobierania -- wystarczy otworzyć przeglądarkę mobilną, zalogować się i grać.</p>
        </div>
        <div style="text-align:center">
          <img src="/assets/img/vipluck-lobby.png" alt="<?php echo SITE_NAME; ?> Casino mobile lobby with welcome bonus and game navigation" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>
      <ul class="check-list">
        <li>Pełna biblioteka gier dostępna na przeglądarkach mobilnych</li>
        <li>Zakłady sportowe z rynkami na żywo</li>
        <li>Wpłaty i wypłaty bezpośrednio z telefonu</li>
        <li>Czat na żywo i Telegram dostępne na urządzeniach mobilnych</li>
        <li>Bez konieczności pobierania aplikacji -- działa na iOS i Android</li>
      </ul>
    </div>
  </section>

  <!-- FAQ -->
  <section class="content-section content-section--alt" id="faq">
    <div class="container container--narrow">
      <h2>Najczęściej zadawane pytania</h2>

      <details class="faq-item">
        <summary>W jakie gry mogę grać w <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> współpracuje ze 103+ dostawcami, w tym Play'n GO, Playtech, Pragmatic Play, BGaming i Hacksaw Gaming. Do dyspozycji są automaty wideo, automaty z jackpotem, tytuły Megaways, blackjack, ruletka, bakarat, poker, teleturnieje, gry crash i wiele innych. Zakłady sportowe obejmują 30+ dyscyplin z opcjami pre-match i na żywo.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jaki jest bonus powitalny w <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>Nowi gracze kasyna otrzymują pakiet powitalny na trzy depozyty: 100% do 500 EUR + 100 darmowych spinów na pierwszy depozyt, 100% do 750 EUR + 75 darmowych spinów na drugi i 100% do 750 EUR + 125 darmowych spinów na trzeci. Łączna wartość: do 2 000 EUR + 300 darmowych spinów. Gracze sportowi mogą odebrać do 500 EUR na trzy depozyty. Minimalny depozyt to 20 EUR.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jaka jest maksymalna wypłata w <?php echo SITE_NAME; ?> Casino?</summary>
        <div class="faq-answer">
          <p>Standardowi gracze mogą wypłacić do 700 EUR dziennie, 2 250 EUR tygodniowo i 9 000 EUR miesięcznie. Członkowie VIP mają wyższe limity: 1 500 EUR dziennie, 7 000 EUR tygodniowo i 28 000 EUR miesięcznie. Minimalna wypłata to 20 EUR. Wypłaty są realizowane w ciągu 72 godzin w dni robocze.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy <?php echo SITE_NAME; ?> ma program VIP?</summary>
        <div class="faq-answer">
          <p>Tak. <?php echo SITE_NAME; ?> prowadzi 5-poziomowy program VIP z awansem tylko na zaproszenie. Korzyści obejmują osobistego opiekuna konta, wyższe limity wypłat, ekskluzywne bonusy i priorytetową realizację wypłat. Im wyższy poziom, tym lepsze nagrody i procenty cashbacku.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Czy mogę grać na telefonie?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> nie ma aplikacji mobilnej, ale strona jest w pełni przystosowana do urządzeń mobilnych. Masz dostęp do wszystkich gier, zakładów sportowych i funkcji konta z poziomu dowolnej nowoczesnej przeglądarki na smartfonie lub tablecie.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jak skontaktować się z pomocą?</summary>
        <div class="faq-answer">
          <p>Zespół pomocy jest dostępny przez czat na żywo, email pod adresem support@vipluck.com lub Telegram -- całą dobę. Czat na żywo znajdziesz bezpośrednio na stronie i zapewnia szybkie odpowiedzi. Więcej szczegółów na <a href="/pl/support">stronie Pomoc</a>.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
