<?php
/**
 * Cookie Policy - WestAce (Czech / CS)
 */
$page_title = 'WestAce Zásady používání cookies - Jaké cookies používáme';
$page_description = 'Zásady používání cookies pro ' . DOMAIN . '. Zjistěte, jaké cookies používáme a jak je spravovat.';
$current_page = 'cookies';
$lang_prefix = '/cs';

require_once __DIR__ . '/../../includes/header.php';
?>

<main>
  <section class="content-section legal-page">
    <div class="container container--narrow">
      <h1>Zásady používání cookies</h1>
      <p class="legal-updated">Poslední aktualizace: 18. března 2026</p>

      <h2>Co jsou cookies</h2>
      <p>Cookies jsou malé textové soubory ukládané do vašeho zařízení při návštěvě webu. Jsou hojně využívány k zajištění správného fungování webů, zapamatování vašich preferencí a poskytování anonymizovaných statistik provozovatelům webů.</p>

      <h2>Jak používáme cookies</h2>
      <p><?php echo DOMAIN; ?> je jednoduchý affiliate recenzní web. Nepoužíváme cookies pro reklamu, personalizaci ani sledování napříč jinými weby. Cookies na tomto webu spadají do tří kategorií:</p>

      <h3>Nezbytné cookies</h3>
      <p>Jsou vyžadovány pro správné fungování webu. Zahrnují cookies nastavené naším poskytovatelem hostingu (Cloudflare) pro bezpečnost a výkon, například detekci botů a ochranu před DDoS útoky. Tyto cookies nelze zakázat bez ovlivnění funkčnosti webu.</p>
      <table class="data-table">
        <thead>
          <tr><th>Cookie</th><th>Poskytovatel</th><th>Účel</th><th>Platnost</th></tr>
        </thead>
        <tbody>
          <tr><td>__cf_bm</td><td>Cloudflare</td><td>Správa botů a zabezpečení</td><td>30 minut</td></tr>
          <tr><td>cf_clearance</td><td>Cloudflare</td><td>Ověření bezpečnostní výzvy</td><td>Až 1 rok</td></tr>
        </tbody>
      </table>

      <h3>Analytické cookies</h3>
      <p>Můžeme používat Google Analytics k pochopení toho, jak návštěvníci web využívají - například které stránky jsou nejoblíbenější a jak návštěvníci na web přicházejí. Tato data jsou anonymizována a agregována. Nejsou shromažďovány žádné osobně identifikovatelné informace.</p>
      <table class="data-table">
        <thead>
          <tr><th>Cookie</th><th>Poskytovatel</th><th>Účel</th><th>Platnost</th></tr>
        </thead>
        <tbody>
          <tr><td>_ga</td><td>Google Analytics</td><td>Rozlišuje jedinečné návštěvníky</td><td>2 roky</td></tr>
          <tr><td>_ga_*</td><td>Google Analytics</td><td>Udržuje stav sezení</td><td>2 roky</td></tr>
        </tbody>
      </table>

      <h3>Marketingové a affiliate cookies</h3>
      <p>Sami marketingové cookies nenastavujeme. Nicméně pokud kliknete na affiliate odkaz na našem webu, cílová platforma může nastavit cookies ke sledování doporučení. Tyto cookies jsou nastavovány třetí stranou a řídí se jejími zásadami cookies, nikoli našimi.</p>

      <h2>Cookies třetích stran</h2>
      <p>Když kliknete na affiliate odkaz a opustíte náš web, cílový web může nastavit vlastní cookies. Nad těmito cookies nemáme žádnou kontrolu. Podrobnosti naleznete v zásadách cookies provozovatele kasina.</p>

      <h2>Souhlas s cookies</h2>
      <p>Podle směrnice EU o soukromí a elektronických komunikacích (ePrivacy) a GDPR jsme povinni získat váš souhlas před uložením nezbytných cookies do vašeho zařízení. Nezbytné cookies, které jsou nepostradatelné pro fungování webu, souhlas nevyžadují. Dalším používáním tohoto webu souhlasíte s používáním analytických cookies popsaných výše. Souhlas můžete kdykoli odvolat úpravou nastavení prohlížeče.</p>

      <h2>Správa cookies</h2>
      <p>Cookies můžete kontrolovat a mazat prostřednictvím nastavení prohlížeče. Většina prohlížečů umožňuje:</p>
      <ul>
        <li>Zobrazit uložené cookies a jednotlivě je smazat</li>
        <li>Blokovat cookies třetích stran</li>
        <li>Blokovat všechny cookies z konkrétních webů</li>
        <li>Blokovat všechny cookies zcela</li>
        <li>Mazat všechny cookies při zavření prohlížeče</li>
      </ul>
      <p>Zakázání cookies může ovlivnit funkčnost webu, zejména bezpečnostní funkce poskytované Cloudflare.</p>
      <p>Pokyny pro správu cookies ve vašem prohlížeči:</p>
      <ul>
        <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener noreferrer">Google Chrome</a></li>
        <li><a href="https://support.mozilla.org/en-US/kb/cookies-information-websites-store-on-your-computer" target="_blank" rel="noopener noreferrer">Mozilla Firefox</a></li>
        <li><a href="https://support.apple.com/en-gb/guide/safari/sfri11471/mac" target="_blank" rel="noopener noreferrer">Safari</a></li>
        <li><a href="https://support.microsoft.com/en-gb/microsoft-edge/delete-cookies-in-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank" rel="noopener noreferrer">Microsoft Edge</a></li>
      </ul>

      <h2>Změny těchto zásad</h2>
      <p>Tyto zásady cookies můžeme čas od času aktualizovat. Veškeré změny budou zveřejněny na této stránce s aktualizovaným datem revize.</p>

      <h2>Kontakt</h2>
      <p>Máte-li dotazy ohledně našeho používání cookies, kontaktujte nás na <a href="mailto:info@westace.site">info@westace.site</a> nebo navštivte naši stránku <a href="/cs/support">Podpora</a>.</p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
