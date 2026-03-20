<?php
/**
 * Withdrawal Page - WestAce (Czech)
 */
$page_title = 'WestAce Výběry - Platební Metody, Limity a Doba Zpracování';
$page_description = 'Vše o výběrech v ' . SITE_NAME . ' Casino: platební metody, doby zpracování, denní a měsíční limity, KYC ověření a tipy pro rychlejší výplaty.';
$current_page = 'withdrawal';
$lang_prefix = '/cs';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Výběry';
$hero_description = 'Jak vybrat výhry, dostupné platební metody, doby zpracování, limity a co očekávat při procesu ověřování identity.';
$hero_cta = 'Hrát Nyní';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Přehled výběrů</h2>
      <p>Výběr výher v <?php echo SITE_NAME; ?> je jednoduchý a bezpoplatkový. Všechny žádosti o výběr zpracujeme do 24 až 72 hodin v závislosti na zvolené platební metodě. Prostředky vracíme stejnou metodou, kterou jste použili pro vklad, kdykoli je to možné. Před prvním výběrem musíte dokončit KYC ověření.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Minimální výběr</h4>
          <p>250 Kč pro všechny platební metody. Částky pod tímto limitem nelze zpracovat.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Doba zpracování</h4>
          <p>24-72 hodin pro většinu metod. Bankovní převody mohou trvat 1-3 pracovní dny.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Limity výběrů</h4>
          <p>12 500 Kč denně, 175 000 Kč měsíčně. VIP členové mohou mít nárok na vyšší limity.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Payment Methods Table -->
  <section class="content-section content-section--alt" id="methods">
    <div class="container">
      <h2>Platební metody</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Níže uvedená tabulka zobrazuje všechny možnosti vkladů a výběrů v <?php echo SITE_NAME; ?>. Výplaty provádíme na původní metodu vkladu, kdykoli je to možné. Všechny vklady a výběry jsou z naší strany bezpoplatkové.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-payments-screen.png" alt="<?php echo SITE_NAME; ?> Casino platební metody pro vklady a výběry včetně Visa, Mastercard, Skrill a kryptoměn" style="max-width:280px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div class="data-table-wrap">
        <table class="data-table">
          <thead>
            <tr>
              <th>Metoda</th>
              <th>Min. vklad</th>
              <th>Max. vklad</th>
              <th>Min. výběr</th>
              <th>Max. výběr</th>
              <th>Zpracování</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Mastercard</td>
              <td>250 Kč</td>
              <td>50 000 Kč</td>
              <td>250 Kč</td>
              <td>75 000 Kč</td>
              <td>24-72 hodin</td>
            </tr>
            <tr>
              <td>Paysafecard</td>
              <td>250 Kč</td>
              <td>25 000 Kč</td>
              <td colspan="2">Pouze vklad</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Visa</td>
              <td colspan="2">Pouze výběr</td>
              <td>250 Kč</td>
              <td>75 000 Kč</td>
              <td>24-72 hodin</td>
            </tr>
            <tr>
              <td>Bankovní převod</td>
              <td colspan="2">Pouze výběr</td>
              <td>250 Kč</td>
              <td>125 000 Kč</td>
              <td>1-3 pracovní dny</td>
            </tr>
            <tr>
              <td>Skrill</td>
              <td>250 Kč</td>
              <td>125 000 Kč</td>
              <td>250 Kč</td>
              <td>125 000 Kč</td>
              <td>24-72 hodin</td>
            </tr>
            <tr>
              <td>Neteller</td>
              <td>250 Kč</td>
              <td>125 000 Kč</td>
              <td colspan="2">Pouze vklad</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Bitcoin (BTC)</td>
              <td>250 Kč</td>
              <td>125 000 Kč</td>
              <td>250 Kč</td>
              <td>125 000 Kč</td>
              <td>24-72 hodin</td>
            </tr>
            <tr>
              <td>Ethereum (ETH)</td>
              <td>250 Kč</td>
              <td>125 000 Kč</td>
              <td>250 Kč</td>
              <td>125 000 Kč</td>
              <td>24-72 hodin</td>
            </tr>
            <tr>
              <td>Tether (USDT)</td>
              <td>250 Kč</td>
              <td>125 000 Kč</td>
              <td>250 Kč</td>
              <td>125 000 Kč</td>
              <td>24-72 hodin</td>
            </tr>
            <tr>
              <td>Litecoin (LTC)</td>
              <td>250 Kč</td>
              <td>125 000 Kč</td>
              <td>250 Kč</td>
              <td>125 000 Kč</td>
              <td>24-72 hodin</td>
            </tr>
            <tr>
              <td>Ripple (XRP)</td>
              <td>250 Kč</td>
              <td>125 000 Kč</td>
              <td>250 Kč</td>
              <td>125 000 Kč</td>
              <td>24-72 hodin</td>
            </tr>
            <tr>
              <td>USD Coin (USDC)</td>
              <td>250 Kč</td>
              <td>125 000 Kč</td>
              <td>250 Kč</td>
              <td>125 000 Kč</td>
              <td>24-72 hodin</td>
            </tr>
            <tr>
              <td>Bitcoin Cash (BCH)</td>
              <td>250 Kč</td>
              <td>125 000 Kč</td>
              <td>250 Kč</td>
              <td>125 000 Kč</td>
              <td>24-72 hodin</td>
            </tr>
            <tr>
              <td>Dogecoin (DOGE)</td>
              <td>250 Kč</td>
              <td>125 000 Kč</td>
              <td>250 Kč</td>
              <td>125 000 Kč</td>
              <td>24-72 hodin</td>
            </tr>
            <tr>
              <td>Cardano (ADA)</td>
              <td>250 Kč</td>
              <td>125 000 Kč</td>
              <td>250 Kč</td>
              <td>125 000 Kč</td>
              <td>24-72 hodin</td>
            </tr>
          </tbody>
        </table>
      </div>

      <p style="margin-top: var(--space-4);">Přesný výběr platebních metod se může lišit podle vaší oblasti. Kryptoměnové transakce vyžadují po zpracování kasinem ještě potvrzení v blockchainu.</p>
    </div>
  </section>

  <!-- Rollover Requirement -->
  <section class="content-section" id="rollover">
    <div class="container container--narrow">
      <h2>Požadavek na protočení vkladu</h2>
      <p><?php echo SITE_NAME; ?> uplatňuje požadavek na jednorázové protočení (1x) všech vkladů. To znamená, že vložené prostředky musíte vsadit alespoň jednou, než podáte žádost o výběr. Tento požadavek je nezávislý na požadavcích na protočení bonusu.</p>
      <p>Pokud podáte žádost o výběr bez splnění požadavku 1x protočení, bude odečtena provize:</p>
      <ul>
        <li><strong>10% provize</strong> z výše vkladu u výběrů na e-peněženky a kryptoměny</li>
        <li><strong>15% provize</strong> z výše vkladu u výběrů bankovní kartou nebo bankovním převodem</li>
      </ul>
      <p>Abyste se tomuto poplatku vyhnuli, stačí svůj vklad jednou prosázet před podáním žádosti o výplatu. Jedno kolo sázení v libovolné výši požadavek splní.</p>
    </div>
  </section>

  <!-- How to Withdraw -->
  <section class="content-section content-section--alt" id="how-to">
    <div class="container">
      <h2>Jak provést výběr</h2>
      <p>Postupujte podle těchto kroků a požádejte o výplatu z účtu v <?php echo SITE_NAME; ?>:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Splňte aktivní požadavky na protočení.</strong> Pokud jste využili bonus, musíte před výběrem splnit veškeré požadavky na protočení. Zároveň se ujistěte, že jste splnili požadavek na 1x protočení vkladu.
          </div>
        </li>
        <li>
          <div>
            <strong>Otevřete pokladnu.</strong> Přejděte do sekce výběrů ve svém účtu. Najdete ji v hlavní nabídce nebo v nastavení účtu.
          </div>
        </li>
        <li>
          <div>
            <strong>Vyberte platební metodu a částku.</strong> Zvolte z dostupných možností a zadejte částku, kterou chcete vybrat. Minimum je 250 Kč pro všechny metody. Denní limit je 12 500 Kč, měsíční limit je 175 000 Kč.
          </div>
        </li>
        <li>
          <div>
            <strong>Čekejte na zpracování.</strong> <?php echo SITE_NAME; ?> zpracovává výběry do 24 až 72 hodin. Bankovní převody mohou trvat 1-3 pracovní dny. Budeme vás kontaktovat, pokud bude k ověření potřeba další dokumentace.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- KYC Verification -->
  <section class="content-section" id="verification">
    <div class="container">
      <h2>Ověření účtu (KYC)</h2>
      <p><?php echo SITE_NAME; ?> vyžaduje ověření totožnosti před schválením žádostí o výběr. Jde o standardní postup navržený k prevenci podvodů a dodržování předpisů proti praní špinavých peněz. Dokumenty jsou schváleny do 30 dnů a samotný proces ověřování trvá po odeslání až 10 dní.</p>

      <div class="two-col">
        <div>
          <h3>Požadované dokumenty</h3>
          <ul>
            <li><strong>Doklad totožnosti</strong> - cestovní pas, řidičský průkaz nebo občanský průkaz</li>
            <li><strong>Selfie s dokladem</strong> - fotografie, na které držíte doklad totožnosti</li>
            <li><strong>Doklad o adrese</strong> - výpis z účtu nebo složenka za utilitu z posledních 3 měsíců</li>
            <li><strong>Zdroj prostředků</strong> - dokumentace prokazující původ prostředků určených ke hraní (požadavek AML)</li>
          </ul>
          <p>Máte 30 dní na odeslání požadovaných dokumentů. Váš účet může být omezen až do dokončení ověření.</p>
        </div>
        <div>
          <h3>Tipy pro rychlejší ověření</h3>
          <ul>
            <li>Nahrajte dokumenty ihned po registraci, nečekejte na první výběr</li>
            <li>Zajistěte, aby byly na fotografii viditelné všechny čtyři rohy dokladu totožnosti</li>
            <li>Na selfie se ujistěte, že jsou čitelné jak váš obličej, tak text na dokladu</li>
            <li>Jako doklad o adrese použijte aktuální výpis z účtu nebo složenku za utilitu</li>
            <li>Pokud jsou dokumenty odmítnuty, zkontrolujte, zda fotografie nejsou rozmazané a zda dokumenty nevypršely</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Faster Payouts -->
  <section class="content-section content-section--alt" id="tips">
    <div class="container container--narrow">
      <h2>Tipy pro rychlejší výplaty</h2>

      <h3>1. Zvolte e-peněženku nebo kryptoměnu</h3>
      <p>Skrill a kryptoměny jako Bitcoin, Ethereum a Tether se zpracovávají zpravidla nejrychleji. Pokud vám záleží na rychlosti, vložte prostředky jednou z těchto metod, aby výběr mohl proběhnout stejným kanálem.</p>

      <h3>2. Ověřte účet co nejdříve</h3>
      <p>Nečekejte s odesláním dokumentů na první výběr. Nahrajte doklad totožnosti, selfie, doklad o adrese a zdroj prostředků hned po registraci. Až budete připraveni vybrat výhry, nebude docházet ke zdržením kvůli probíhajícímu ověření.</p>

      <h3>3. Splňte požadavek na protočení vkladu</h3>
      <p>Ujistěte se, že jste svůj vklad prosázeli alespoň jednou před podáním žádosti o výplatu. Nesplnění tohoto požadavku vede k provizi 10-15 % z výše vkladu.</p>

      <h3>4. Používejte původní metodu vkladu</h3>
      <p><?php echo SITE_NAME; ?> preferuje vracení prostředků stejnou metodou, kterou byl proveden vklad. Použití jiné metody může vyvolat dodatečné kontroly a zpracování zpomalit.</p>
    </div>
  </section>

  <!-- Fees -->
  <section class="content-section" id="fees">
    <div class="container container--narrow">
      <h2>Poplatky za výběr</h2>
      <p><?php echo SITE_NAME; ?> neúčtuje poplatky za vklady ani výběry. Váš poskytovatel plateb nebo banka však může uplatňovat vlastní transakční poplatky, poplatky za konverzi měn nebo zprostředkovatelské náklady. Podrobnosti o případných poplatcích třetích stran si ověřte u svého poskytovatele plateb.</p>
      <p>Upozornění: pokud vyberete prostředky bez splnění požadavku na 1x protočení vkladu, bude z výše vkladu odečtena provize 10 % (15 % pro bankovní kartu nebo bankovní převod). Nejde o poplatek za výběr, ale o sankci za nesplnění požadavku na protočení.</p>
    </div>
  </section>

  <!-- Withdrawal FAQ -->
  <section class="content-section content-section--alt" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>Časté otázky o výběrech</h2>

      <details class="faq-item">
        <summary>Jak dlouho trvá výběr v <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Většina výběrů se zpracuje do 24 až 72 hodin. E-peněženky a kryptoměny přicházejí zpravidla nejrychleji. Bankovní převody mohou na straně poskytovatele trvat o 1-3 pracovní dny déle.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jaká je minimální výše výběru v <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Minimální výše výběru je 250 Kč pro všechny platební metody.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jaké jsou limity výběrů?</summary>
        <div class="faq-answer">
          <p>Standardní limity jsou 12 500 Kč denně a 175 000 Kč měsíčně. Limity na transakci závisí na metodě: Visa a Mastercard mají strop 75 000 Kč na transakci, zatímco Skrill, bankovní převody a všechny kryptoměny umožňují výběr až 125 000 Kč. Hráči VIP mohou mít nárok na vyšší limity.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Proč byl můj výběr zamítnut?</summary>
        <div class="faq-answer">
          <p>Mezi obvyklé důvody patří: nesplněné požadavky na protočení, nesplněný požadavek na protočení vkladu, neověřený účet, překročení denních nebo měsíčních limitů, nebo žádost o výplatu na metodu neshodující se s metodou vkladu. Pro konkrétní informace o vašem případu kontaktujte zákaznickou podporu.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jsou za výběr účtovány nějaké poplatky?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> za výběry neúčtuje žádné poplatky. Váš poskytovatel plateb může uplatňovat vlastní poplatky. Pokud vyberete prostředky bez splnění požadavku na 1x protočení vkladu, je na výši vkladu uplatněna provize 10 % (15 % pro bankovní kartu nebo převod).</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mohu zrušit čekající výběr?</summary>
        <div class="faq-answer">
          <p>V závislosti na fázi zpracování může být zrušení čekající žádosti o výběr možné. O pomoc požádejte zákaznickou podporu prostřednictvím živého chatu.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
