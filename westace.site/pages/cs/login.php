<?php
/**
 * Login Page - WestAce (Czech)
 */
$page_title = 'WestAce Přihlášení - Přihlaste se ke svému Kasinovému Účtu';
$page_description = 'Přihlaste se do svého ' . SITE_NAME . ' Casino účtu. Přístup k hrám, bonusům a zůstatku. Přihlášení i registrace probíhají přímo na webu kasina.';
$current_page = 'login';
$lang_prefix = '/cs';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Přihlášení';
$hero_description = 'Přihlaste se ke svému účtu a získejte přístup ke hrám, bonusům a zůstatku. Přihlášení probíhá přímo na webu kasina.';
$hero_cta = 'Přihlásit se';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Login Info -->
  <section class="content-section content-section--alt" id="login-help">
    <div class="container container--narrow">
      <h2>Jak se přihlásit do <?php echo SITE_NAME; ?> Casino</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Přihlášení do vašeho <?php echo SITE_NAME; ?> účtu trvá jen pár sekund. Přihlašovací formulář najdete přímo na webu kasina po kliknutí na tlačítko "Přihlásit se" v pravém horním rohu stránky.</p>
          <h3>Přihlášení na počítači</h3>
          <p>Navštivte web <?php echo SITE_NAME; ?> a klikněte na tlačítko "Přihlásit se" v pravém horním rohu. Zadejte e-mailovou adresu a heslo, které jste si zvolili při registraci, a klikněte na "Přihlásit se". Pokud jste zapomněli heslo, použijte odkaz pro jeho obnovení pod přihlašovacím formulářem.</p>
          <h3>Přihlášení na mobilu</h3>
          <p>Na telefonu nebo tabletu otevřete web <?php echo SITE_NAME; ?> v mobilním prohlížeči. Klepněte na tlačítko "Přihlásit se", zadejte e-mail a heslo a klepněte na "Přihlásit se". Mobilní verze nabízí stejné funkce jako desktopová stránka - žádné stahování aplikace není potřeba.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-login-screen.png" alt="<?php echo SITE_NAME; ?> Casino přihlašovací obrazovka" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <div style="text-align:center;margin:var(--space-8) 0">
        <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Přihlásit se do <?php echo SITE_NAME; ?></a>
        <p style="margin-top:var(--space-4)">Ještě nemáte účet? <a href="/play" rel="nofollow">Zaregistrujte se zde</a> a využijte uvítací bonus.</p>
      </div>

      <h3>Problémy s přihlášením?</h3>
      <p>Pokud máte potíže s přihlášením do svého účtu, zkontrolujte následující:</p>
      <ul>
        <li>Ujistěte se, že zadáváte správnou e-mailovou adresu a heslo. Hesla rozlišují velká a malá písmena.</li>
        <li>Vymažte mezipaměť a soubory cookie prohlížeče a zkuste to znovu.</li>
        <li>Zkontrolujte, zda je vaše internetové připojení stabilní.</li>
        <li>Pokud jste zapomněli heslo, použijte odkaz "Zapomněli jste heslo?" k odeslání e-mailu pro obnovení.</li>
      </ul>
      <p>Pokud žádný z výše uvedených postupů problém nevyřeší, obraťte se na <a href="/cs/support">zákaznickou podporu</a> přes live chat nebo e-mail na adrese support@westace.com.</p>
    </div>
  </section>

  <!-- Registration Overview -->
  <section class="content-section" id="register">
    <div class="container container--narrow">
      <h2>Vytvoření nového účtu</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin-bottom:var(--space-6)">
        <div>
          <p>Pokud ještě nemáte účet v <?php echo SITE_NAME; ?>, registrace je rychlá a trvá přibližně dvě minuty. Zadejte e-mail, vytvořte heslo, zvolte preferovanou měnu (CZK) a jste připraveni hrát. Uvítací bonus je zobrazen přímo v registračním formuláři, takže přesně víte, co získáte.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/westace-signup-screen.png" alt="<?php echo SITE_NAME; ?> Casino registrační formulář s uvítacím balíčkem" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(0,0,0,.3)">
        </div>
      </div>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Klikněte na "Registrace" na webu.</strong> Tlačítko pro registraci se nachází v pravém horním rohu stránky.
          </div>
        </li>
        <li>
          <div>
            <strong>Vyberte uvítací bonus.</strong> Zvolte bonus, který chcete aktivovat svým prvním vkladem, nebo ho přeskočte, pokud preferujete hru bez bonusu.
          </div>
        </li>
        <li>
          <div>
            <strong>Zadejte e-mail a vytvořte heslo.</strong> Zvolte silné heslo pro zabezpečení vašeho účtu.
          </div>
        </li>
        <li>
          <div>
            <strong>Vyplňte osobní údaje.</strong> Budete muset uvést celé jméno, datum narození, telefonní číslo, adresu, zemi a preferovanou měnu. Tyto informace jsou potřebné pro ověření totožnosti při prvním výběru.
          </div>
        </li>
        <li>
          <div>
            <strong>Dokončete registraci.</strong> Finalizujte svůj účet a proveďte první vklad pro aktivaci uvítacího bonusu. Minimální kvalifikační vklad je 500 Kč.
          </div>
        </li>
      </ol>

      <div style="text-align:center;margin:var(--space-8) 0">
        <a href="/play" class="btn btn--primary btn--lg" rel="nofollow">Vytvořit účet</a>
      </div>
    </div>
  </section>

  <!-- Account Recovery -->
  <section class="content-section content-section--alt" id="recovery">
    <div class="container container--narrow">
      <h2>Obnovení přístupu k účtu</h2>

      <h3>Zapomněli jste heslo?</h3>
      <p>Klikněte na odkaz "Zapomněli jste heslo?" v přihlašovacím formuláři. Zadejte svou registrovanou e-mailovou adresu a do schránky vám bude zaslán odkaz pro obnovení. Kliknutím na tento odkaz vytvořte nové heslo. Platnost odkazu je omezená, proto ho využijte co nejdříve.</p>
      <p>Pokud e-mail do několika minut neobdržíte, zkontrolujte složku spamu nebo nevyžádané pošty. Pokud e-mail stále nedorazí, obraťte se na <a href="/cs/support">zákaznickou podporu</a> pro ruční pomoc.</p>

      <h3>Zablokovaný účet?</h3>
      <p>Účty mohou být zablokovány z bezpečnostních důvodů, například po opakovaných neúspěšných pokusech o přihlášení nebo při podezřelé aktivitě. Obraťte se na zákaznickou podporu přes live chat nebo e-mail na adrese support@westace.com a nechte si účet prověřit.</p>
    </div>
  </section>

  <!-- Login FAQ -->
  <section class="content-section" id="login-faq">
    <div class="container container--narrow">
      <h2>Časté otázky o přihlášení</h2>

      <details class="faq-item">
        <summary>Co potřebuji k přihlášení?</summary>
        <div class="faq-answer">
          <p>Potřebujete e-mailovou adresu a heslo, které jste si vytvořili při registraci. Pokud jste zapomněli heslo, klikněte na "Zapomněli jste heslo?" v přihlašovacím formuláři a na váš e-mail bude zaslán odkaz pro obnovení.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Zapamatuje si web moje přihlašovací údaje?</summary>
        <div class="faq-answer">
          <p><?php echo SITE_NAME; ?> používá soubory cookie k rozpoznání vracejících se hráčů. Pokud jste se dříve přihlásili na stejném zařízení a v tomtéž prohlížeči, může být váš e-mail předvyplněn. Pro zabezpečení budete stále muset zadat heslo. Vymazáním cookies v prohlížeči nebo použitím anonymního prohlížení budete muset znovu zadat veškeré přihlašovací údaje.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Můj účet je zablokován. Co mám dělat?</summary>
        <div class="faq-answer">
          <p>K blokování účtu může dojít po opakovaných neúspěšných pokusech o přihlášení nebo kvůli podezřelé aktivitě. Obraťte se na zákaznickou podporu přes live chat nebo e-mail na adrese support@westace.com pro prověření a odblokování účtu.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jak změním heslo?</summary>
        <div class="faq-answer">
          <p>Po přihlášení přejděte do nastavení účtu a aktualizujte heslo. Pokud se nemůžete přihlásit, použijte funkci obnovy hesla na přihlašovací stránce.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Jaké informace jsou potřebné k registraci?</summary>
        <div class="faq-answer">
          <p>Registrace vyžaduje e-mailovou adresu, heslo, celé jméno, datum narození, telefonní číslo, adresu, zemi a preferovanou měnu. Tyto informace jsou využívány pro ověření totožnosti a splnění regulatorních požadavků.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Existuje mobilní aplikace pro <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Samostatná aplikace není k dispozici, ale web je plně optimalizován pro mobilní zařízení. Jednoduše otevřete <?php echo SITE_NAME; ?> v mobilním prohlížeči a přihlaste se jako obvykle. Veškeré hry, sportovní sázení i funkce jsou přístupné na mobilu.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
