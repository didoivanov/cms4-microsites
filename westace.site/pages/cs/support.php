<?php
/**
 * Support Page - WestAce (Czech)
 */
$page_title = 'WestAce Zákaznická Podpora - Live Chat, E-mail a Zodpovědné Hraní';
$page_description = 'Kontaktujte zákaznickou podporu ' . SITE_NAME . ' Casino přes live chat nebo e-mail na adrese support@westace.com. Pomoc s vklady, výběry, bonusy, ověřením účtu a technickými dotazy.';
$current_page = 'support';
$lang_prefix = '/cs';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Zákaznická Podpora';
$hero_description = 'Jsme tu, abychom vám pomohli s jakýmikoli dotazy týkajícími se vašeho účtu, vkladů, výběrů, bonusů nebo technických problémů. Obraťte se na nás kdykoli.';
$hero_cta = 'Spustit Live Chat';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Contact Options -->
  <section class="content-section" id="contact">
    <div class="container">
      <h2>Jak nás kontaktovat</h2>
      <p><?php echo SITE_NAME; ?> nabízí dva kanály podpory, takže pomoc získáte vždy, když ji potřebujete. Ať máte rychlý dotaz k nějaké akci nebo potřebujete vyřešit problém s platbou, náš tým je dostupný nepřetržitě celý den.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128172;</div>
          <h4>Live Chat</h4>
          <p>Nejrychlejší způsob, jak získat pomoc. Klikněte na ikonu chatu na libovolné stránce a zahajte konverzaci s pracovníkem podpory. Naši live agenti obvykle odpoví do 5 minut. K dispozici 24 hodin denně, 7 dní v týdnu.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9993;</div>
          <h4>E-mailová podpora</h4>
          <p>Pro podrobné dotazy nebo odesílání dokumentů je e-mail nejlepší možností. Napište nám na adresu <strong>support@westace.com</strong> a odpověď obdržíte do 24 hodin. Uveďte prosím podrobnosti o svém účtu a jasný popis problému.</p>
        </div>
      </div>

      <table class="data-table" style="margin-top: var(--space-8);">
        <thead>
          <tr>
            <th>Kanál</th>
            <th>Dostupnost</th>
            <th>Doba odezvy</th>
            <th>Vhodné pro</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Live Chat</td>
            <td>24/7</td>
            <td>Do 5 minut</td>
            <td>Rychlé dotazy, bonusy, problémy s vkladem</td>
          </tr>
          <tr>
            <td>E-mail</td>
            <td>24/7</td>
            <td>Do 24 hodin</td>
            <td>Odesílání dokumentů, složitější případy, stížnosti</td>
          </tr>
          <tr>
            <td>Telefon</td>
            <td>Není k dispozici</td>
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
      <h2>S čím vám podpora pomůže?</h2>
      <p>Náš tým zákaznické podpory se věnuje širokému spektru témat. Zde jsou nejčastější oblasti, ve kterých hráči žádají o pomoc:</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Účet a registrace</h4>
          <p>Pomoc se založením účtu, aktualizací osobních údajů, resetováním hesla a řešením problémů s přihlášením. Pokud je váš účet zablokován nebo omezen, podpora může zkontrolovat váš stav.</p>
        </div>
        <div class="info-card">
          <h4>Vklady a platby</h4>
          <p>Asistence při neúspěšných vkladech, dotazech na platební metody a kontrole stavu transakcí. Podpora pomůže také v případě, že se vklad neobjeví na vašem zůstatku.</p>
        </div>
        <div class="info-card">
          <h4>Výběry a výplaty</h4>
          <p>Dotazy ohledně doby zpracování výběrů, čekajících žádostí a zamítnutých výplat. Podrobné informace o výběrech najdete na stránce <a href="/cs/withdrawal">Výběry</a>.</p>
        </div>
        <div class="info-card">
          <h4>Bonusy a akce</h4>
          <p>Objasnění podmínek bonusů, požadavků na protočení, aktivace nabídek a zrušení aktivních bonusů. Podpora vysvětlí podrobnosti konkrétní akce i podmínky nároku.</p>
        </div>
        <div class="info-card">
          <h4>Ověření a KYC</h4>
          <p>Pokyny pro odesílání dokumentů, stav ověření, přijímané typy dokumentů a odhady časového plánu. Podpora pomůže, pokud nastanou problémy při ověřovacím procesu.</p>
        </div>
        <div class="info-card">
          <h4>Technické problémy</h4>
          <p>Pomoc se hrami, které se nenačítají, chybami webu, problémy s mobilitou na mobilních zařízeních a chybami prohlížeče. Podpora může odstraňovat závady a eskalovat technické chyby na vývojový tým.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Contacting Support -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Jak co nejlépe využít kontakt s podporou</h2>
      <p>Několik jednoduchých kroků, které pomohou našemu týmu podpory váš problém vyřešit rychleji:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Mějte připraveny podrobnosti o účtu.</strong> Vaše uživatelské jméno nebo e-mailová adresa umožní podpoře rychle vyhledat váš účet. Pokud se problém týká konkrétní transakce, mějte po ruce referenční číslo.
          </div>
        </li>
        <li>
          <div>
            <strong>Jasně popište problém.</strong> Vysvětlete, co se stalo, kdy se to stalo a co jste očekávali. Pro technické problémy nebo sporné transakce jsou velmi nápomocné snímky obrazovky.
          </div>
        </li>
        <li>
          <div>
            <strong>Zvolte správný kanál.</strong> U naléhavých problémů (blokovaný účet, neúspěšný vklad) je nejlepší live chat. Pro odesílání dokumentů nebo složité případy vyžadující prošetření dejte přednost e-mailu na support@westace.com.
          </div>
        </li>
        <li>
          <div>
            <strong>Nejprve nahlédněte do FAQ.</strong> Mnoho běžných otázek o bonusech, výběrech a správě účtu je zodpovězeno v sekcích FAQ po celém tomto webu.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Responsible Gambling -->
  <section class="content-section content-section--alt" id="responsible">
    <div class="container container--narrow">
      <h2>Zodpovědné hraní a sebeexkluze</h2>
      <p><?php echo SITE_NAME; ?> bere zodpovědné hraní vážně. Pokud máte pocit, že se vaše hráčské návyky stávají problémem, náš tým podpory vám může pomoci zařídit sebeexkluzi z platformy.</p>
      <p>Sebeexkluze je dostupná na stanovenou dobu nebo trvale. Po aktivaci ji nelze odvolat, dokud nestane stanovená lhůta. Po dobu sebeexkluze se nebudete moci přihlásit ani uzavírat sázky. Sebeexkluzi si vyžádejte přes live chat nebo e-mailem na adrese support@westace.com.</p>

      <h3>Sebehodnocení</h3>
      <p>Odpovězte si na následující otázky a zjistěte, zda hazard neovlivňuje váš život:</p>
      <ul>
        <li>Vymkly se vám výdaje na hazard z rukou?</li>
        <li>Půjčujete si peníze, abyste mohli dále hrát?</li>
        <li>Trávíte méně času s rodinou a přáteli?</li>
        <li>Začínají vás znepokojovat názory ostatních na vaše hraní?</li>
        <li>Ztratili jste zájem o své obvyklé koníčky nebo aktivity?</li>
        <li>Cítíte se sklíčeně nebo úzkostlivě kvůli prohrám?</li>
        <li>Lhali jste někdy o tom, kolik času nebo peněz trávíte hraním?</li>
      </ul>
      <p>Pokud jste odpověděli kladně na více otázek, doporučujeme kontaktovat odbornou organizaci:</p>
      <ul>
        <li><strong>Ministerstvo financí ČR</strong> - regulátor hazardních her v ČR - <a href="https://www.mfcr.cz" target="_blank" rel="noopener noreferrer">www.mfcr.cz</a></li>
        <li><strong>Registr vyloučených osob</strong> - pro zápis do národního registru sebeexkluze - <a href="https://www.mfcr.cz" target="_blank" rel="noopener noreferrer">mfcr.cz</a></li>
        <li><strong>Centrum léčby závislostí</strong> - odborná pomoc při problémovém hraní</li>
        <li><strong>Anonymní hráči (Gamblers Anonymous)</strong> - skupiny vzájemné pomoci a kroky k uzdravení</li>
      </ul>

      <h3>Užitečné zásady</h3>
      <ul>
        <li>Neberte hazard jako zdroj příjmu</li>
        <li>Stanovte si rozpočet pro čas i peníze a dodržujte ho</li>
        <li>Hrajte pouze za peníze, o které si můžete dovolit přijít</li>
        <li>Vyhněte se hazardu, když jste ve stresu, rozrušení nebo pod vlivem alkoholu</li>
      </ul>
    </div>
  </section>

  <!-- Support FAQ -->
  <section class="content-section" id="support-faq">
    <div class="container container--narrow">
      <h2>Časté otázky o podpoře</h2>

      <details class="faq-item">
        <summary>Je podpora <?php echo SITE_NAME; ?> dostupná 24/7?</summary>
        <div class="faq-answer">
          <p>Ano. Live chat i e-mailová podpora jsou k dispozici nepřetržitě, 24 hodin denně, 7 dní v týdnu.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jak rychle odpoví live chat?</summary>
        <div class="faq-answer">
          <p>Agenti live chatu obvykle odpoví do 5 minut. Ve špičce může být čekací doba o něco delší.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jaká je e-mailová adresa podpory?</summary>
        <div class="faq-answer">
          <p>Podporu <?php echo SITE_NAME; ?> můžete kontaktovat e-mailem na adrese <strong>support@westace.com</strong>. Uveďte své uživatelské jméno nebo registrovaný e-mail, popis problému a případné snímky obrazovky. Odpověď obdržíte do 24 hodin.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Může podpora pomoci se zrušením bonusu?</summary>
        <div class="faq-answer">
          <p>Ano. Chcete-li zrušit aktivní bonus, kontaktujte podporu přes live chat nebo e-mail. Mějte na paměti, že zrušení bonusu odebere částku bonusu i případné výhry z něj.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Co když můj problém nebude vyřešen?</summary>
        <div class="faq-answer">
          <p>Pokud nejste spokojeni s prvotní odpovědí, požádejte o eskalaci případu na zkušenějšího pracovníka. Poskytněte co nejvíce podrobností, aby tým mohl váš případ důkladně prošetřit.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Mohu požádat o sebeexkluzi?</summary>
        <div class="faq-answer">
          <p>Ano. Sebeexkluzi na stanovenou dobu nebo trvale si vyžádejte přes live chat nebo e-mail. Po dobu sebeexkluze se nelze přihlásit ani uzavírat sázky. Využít lze také národní Registr vyloučených osob spravovaný Ministerstvem financí ČR.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
