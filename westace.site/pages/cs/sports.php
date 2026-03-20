<?php
/**
 * Sports Betting Page - WestAce (Czech)
 */
$page_title = 'WestAce Sportovní Sázky - Fotbal, Hokej, Tenis a Live Sázení';
$page_description = 'Vsaďte na fotbal, lední hokej, tenis a desítky dalších sportů v ' . SITE_NAME . '. Sparta Praha, Slavia Praha, Extraliga, NHL a Champions League. Live sázení s aktualizací kurzů v reálném čase.';
$current_page = 'sports';
$lang_prefix = '/cs';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Sportovní Sázky';
$hero_description = 'Předzápasové kurzy, live sázení, virtuální sporty a dostihové závodění - vše na jednom místě spolu s plným kasinem.';
$hero_cta = 'Vsadit Nyní';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Sportsbook Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Přehled sportovního sázení</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p><?php echo SITE_NAME; ?> je víc než jen kasino. Nabízíme kompletní sázkovou kancelář pokrývající předzápasové sázení, live sázení, virtuální sporty a dostihy. Ať sledujete Fortuna Ligu, NHL nebo grandslamy, najdete u nás konkurenceschopné kurzy a širokou nabídku trhů na každou velkou událost.</p>
          <p>Naše sázková kancelář funguje vedle kasina, takže mezi automaty, živými dealery a sportovním sázením přepínáte z jednoho účtu s jedním zůstatkem. Žádné oddělené peněženky ani převody.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-sports-screen.png" alt="<?php echo SITE_NAME; ?> sportovní sázení s live kurzy na fotbal a hokej" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#9917;</div>
          <h4>Předzápasové sázení</h4>
          <p>Sázejte na nadcházející zápasy ve více než 30 sportech. Fotbal, hokej, tenis, basketbal, MMA a další - s jedináči, akumulátory a systémovými sázkami.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9889;</div>
          <h4>Live sázení</h4>
          <p>Sázejte na zápasy přímo v průběhu utkání s kurzy aktualizovanými v reálném čase. Sledujte dění s živou statistikou, výsledkovými tabulemi a live trhy napříč všemi hlavními sporty.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#127918;</div>
          <h4>Virtuální sporty</h4>
          <p>Simulované události probíhající nepřetržitě celý den - virtuální fotbal, basketbal, tenis, dostihy a chrti. Výsledky každých pár minut, žádné čekání na skutečné zápasy.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Czech Sports -->
  <section class="content-section content-section--alt" id="sports">
    <div class="container">
      <h2>Sporty a ligy</h2>
      <p>Naše sázková kancelář pokrývá široké spektrum sportů z lig a turnajů celého světa. Pro české hráče nabízíme zvláštní pozornost domácím soutěžím a nejsledovanějším sportům v Česku.</p>

      <div class="two-col">
        <div>
          <h3>Fotbal</h3>
          <ul class="check-list">
            <li>Fortuna Liga - první česká fotbalová liga</li>
            <li>AC Sparta Praha a SK Slavia Praha - největší rivalita české kopané</li>
            <li>UEFA Champions League a Evropská liga</li>
            <li>Bundesliga, La Liga, Serie A, Premier League</li>
            <li>Kvalifikace na mistrovství světa a Evropy</li>
            <li>Stovky lig z celého světa</li>
          </ul>

          <h3 style="margin-top:var(--space-6)">Lední hokej</h3>
          <ul class="check-list">
            <li>Tipsport Extraliga - česká nejvyšší hokejová soutěž</li>
            <li>NHL - sledujte české hvězdy v nejlepší lize světa</li>
            <li>Mistrovství světa v ledním hokeji</li>
            <li>KHL, SHL a další evropské ligy</li>
            <li>Odkaz Jaromíra Jágra žije - hokej je v Čechách náboženství</li>
          </ul>
        </div>
        <div>
          <h3>Tenis</h3>
          <ul class="check-list">
            <li>ATP a WTA turnaje - grandslamy, Masters, Challenger</li>
            <li>Česká republika má bohatou tenisovou tradici</li>
            <li>Australian Open, Roland Garros, Wimbledon, US Open</li>
            <li>Davis Cup a Billie Jean King Cup</li>
          </ul>

          <h3 style="margin-top:var(--space-6)">Další sporty</h3>
          <ul class="check-list">
            <li>Basketbal - NBA, EuroLeague, národní ligy</li>
            <li>MMA a box - UFC, Bellator a hlavní zápasy</li>
            <li>Esports - CS2, Dota 2, League of Legends, Valorant</li>
            <li>Americký fotbal - NFL a vysokoškolský fotbal</li>
            <li>Házená, volejbal, formule 1, cyklistika</li>
            <li>Stolní tenis, šipky, snooker</li>
          </ul>
        </div>
      </div>

      <p style="margin-top: var(--space-6);">Live sázení je dostupné na většinu výše uvedených sportů. Kurzy se aktualizují v reálném čase podle aktuálního průběhu zápasu, takže můžete reagovat na góly, přestávky a změny tempa hry přímo ve chvíli, kdy k nim dochází.</p>
    </div>
  </section>

  <!-- Horse Racing -->
  <section class="content-section" id="horse-racing">
    <div class="container container--narrow">
      <h2>Dostihy</h2>
      <p><?php echo SITE_NAME; ?> pokrývá dostihy ze závodišť v Británii, Irsku, Francii, Austrálii a dalších významných dostihových zemích. Najdete zde ante-post trhy pro velké festivaly i kurzovní nabídky v den závodu s možnostmi win, place a each-way.</p>
      <p>Klíčové akce jako Cheltenham, Royal Ascot, Velká národní a Melbourne Cup jsou pokryty s plnou nabídkou trhů. Pro každodenní dostihy nabízíme standardní sázky win a place na většinu britských a irských závodů.</p>
    </div>
  </section>

  <!-- Virtual Sports -->
  <section class="content-section content-section--alt" id="virtual">
    <div class="container container--narrow">
      <h2>Virtuální sporty</h2>
      <p>Když neprobíhají žádné živé zápasy, naše sekce virtuálních sportů udržuje akci v chodu nepřetržitě 24 hodin denně, 7 dní v týdnu. Události jsou simulovány certifikovanými generátory náhodných čísel, takže výsledky jsou férové a nepředvídatelné.</p>

      <h3>Dostupné virtuální sporty</h3>
      <ul>
        <li><strong>Virtuální fotbal</strong> - simulace celých zápasů s ligovou tabulkou a pohárovou formou</li>
        <li><strong>Virtuální basketbal</strong> - simulace čtvrtina po čtvrtině se standardními basketbalovými trhy</li>
        <li><strong>Virtuální tenis</strong> - sety po setech s možnostmi vítěze zápasu a správného skóre</li>
        <li><strong>Virtuální dostihy</strong> - ploché dostihy i s překážkami s win, place a forecast sázkami</li>
        <li><strong>Virtuální chrti</strong> - krátké závody s trhy win a forecast</li>
      </ul>
      <p>Nové virtuální události startují každé 2-3 minuty, takže je vždy na co sázet.</p>
    </div>
  </section>

  <!-- Sports Betting Tips -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Tipy pro sportovní sázení</h2>
      <p>Několik přímočarých zásad, které udrží vaše sportovní sázení zábavné a udržitelné:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Před začátkem si stanovte rozpočet.</strong> Rozhodněte se, kolik jste ochotni vsadit za týden nebo měsíc, a nepřekračujte tuto hranici. Berte to jako výdaj za zábavu, ne jako investici.
          </div>
        </li>
        <li>
          <div>
            <strong>Sázejte na sporty, kterým rozumíte.</strong> Držte se lig a sportů, kde máte skutečné znalosti. Znalost týmů, hráčů a podmínek vám dá lepší úsudek než honba za náhodnými trhy.
          </div>
        </li>
        <li>
          <div>
            <strong>Nevyhánějte ztráty.</strong> Pokud máte za sebou špatnou sérii, nenavyšujte sázky ve snaze to dohnat. Udělejte přestávku a vraťte se s čistou hlavou.
          </div>
        </li>
        <li>
          <div>
            <strong>Veďte záznamy.</strong> Sledujte své sázky, abyste věděli, co funguje a co ne. Postupem času vám to pomůže odhalit vzorce a přijímat lepší rozhodnutí.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Sports FAQ -->
  <section class="content-section content-section--alt" id="sports-faq">
    <div class="container container--narrow">
      <h2>Časté otázky o sportovním sázení</h2>

      <details class="faq-item">
        <summary>Nabízí <?php echo SITE_NAME; ?> sportovní sázení?</summary>
        <div class="faq-answer">
          <p>Ano. Nabízíme kompletní sázkovou kancelář s předzápasovým sázením, live trhy, virtuálními sporty a dostihy vedle kasina. Mezi kasinem a sporty přepínáte ze stejného účtu.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Na jaké sporty mohu sázet?</summary>
        <div class="faq-answer">
          <p>Pokrýváme více než 30 sportů včetně fotbalu (Fortuna Liga, Champions League), ledního hokeje (Extraliga, NHL), tenisu, basketbalu, MMA, boxu, esportu, dostihů, ragby, amerického fotbalu, baseballu a mnoha dalších. Dostupné jsou jak velké ligy, tak menší soutěže.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Je k dispozici live sázení?</summary>
        <div class="faq-answer">
          <p>Ano. Live sázení je dostupné na většinu sportů. Kurzy se aktualizují v reálném čase s průběhem zápasů a sázky lze podávat po celou dobu utkání.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Co jsou virtuální sporty?</summary>
        <div class="faq-answer">
          <p>Virtuální sporty jsou simulované události poháněné generátory náhodných čísel. Probíhají nepřetržitě s novými událostmi každých pár minut. Nabízíme virtuální fotbal, basketbal, tenis, dostihy a chrti.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mohu pro sportovní sázení použít zůstatek z kasina?</summary>
        <div class="faq-answer">
          <p>Ano. <?php echo SITE_NAME; ?> používá jeden zůstatek pro kasino i sázkovou kancelář. Vklady jdou na jeden účet a stejné prostředky můžete využít pro automaty, živé kasino nebo sportovní sázení bez jakýchkoli převodů.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jaká je minimální sázka na sport?</summary>
        <div class="faq-answer">
          <p>Minimální sázky se liší podle sportu a trhu, ale obvykle jsou velmi nízké - na většině událostí začínají od 12 Kč. Přesné minimum pro každý trh najdete na sázkovém lístku.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
