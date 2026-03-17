<?php
/**
 * Withdrawal Page - Slovenian
 */
$page_title = SITE_NAME . ' Izplačilo - Načini izplačila, limiti in čas obdelave';
$page_description = 'Vse o izplačilih pri ' . SITE_NAME . ' Casino: načini izplačila, čas obdelave do 72 ur, dnevni in mesečni limiti, KYC verifikacija ter nasveti za hitrejše izplačilo.';
$current_page = 'withdrawal';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Izplačila &amp; Nakazila';
$hero_description = 'Kako izplačati svoje dobitke, kateri načini so na voljo, časi obdelave, limiti in kaj lahko pričakuješ med postopkom verifikacije.';
$hero_cta = 'Začni igrati';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Overview -->
  <section class="content-section" id="overview">
    <div class="container">
      <h2>Pregled izplačil</h2>
      <p>Izplačilo dobitkov pri <?php echo SITE_NAME; ?> je preprosto, ko poznaš pravila. Izplačila so običajno obdelana v 72 urah, kadar koli je mogoče pa casino pošlje sredstva nazaj na isti način, ki si ga uporabil za polog. Če ta način ne podpira dohodnih transakcij, bodo sredstva nakazana na tvoj bančni račun.</p>
      <p>Pred prvim izplačilom moraš opraviti KYC (Spoznaj svojo stranko) verifikacijo in izpolniti minimalno zahtevo za obračanje pologa.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128176;</div>
          <h4>Min. izplačilo</h4>
          <p>EUR 10 pri vseh plačilnih metodah. Zneskov pod tem pragom ni mogoče obdelati.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128200;</div>
          <h4>Dnevni limit</h4>
          <p>EUR 500 za standardne račune. VIP člani lahko izplačajo do EUR 1.500 na dan.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#128197;</div>
          <h4>Mesečni limit</h4>
          <p>EUR 7.000 za nove igralce. VIP člani imajo na voljo do EUR 20.000 na mesec.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Payment Methods Table -->
  <section class="content-section content-section--alt" id="methods">
    <div class="container">
      <h2>Načini izplačila</h2>
      <p>Razpoložljivi načini izplačila so odvisni od tvoje države in načina pologa. Na splošno <?php echo SITE_NAME; ?> izplačila obdela na prvotni način pologa, kadar je to mogoče.</p>

      <table class="data-table">
        <thead>
          <tr>
            <th>Način</th>
            <th>Min. izplačilo</th>
            <th>Čas obdelave</th>
            <th>Opombe</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Visa / Mastercard</td>
            <td>&euro;10</td>
            <td>1-3 delovne dni</td>
            <td>Vrnjeno na kartico, uporabljeno za polog</td>
          </tr>
          <tr>
            <td>Skrill</td>
            <td>&euro;10</td>
            <td>Do 24 ur</td>
            <td>Hitra obdelava, široko dostopno</td>
          </tr>
          <tr>
            <td>Neteller</td>
            <td>&euro;10</td>
            <td>Do 24 ur</td>
            <td>Na voljo v večini regij</td>
          </tr>
          <tr>
            <td>Bančno nakazilo</td>
            <td>&euro;20</td>
            <td>2-5 delovnih dni</td>
            <td>Uporablja se kot nadomestni način, ko prvotni ni na voljo</td>
          </tr>
          <tr>
            <td>Bitcoin</td>
            <td>&euro;10</td>
            <td>Do 24 ur</td>
            <td>Po obdelavi s strani casina so potrebne potrditve na verigi blokov</td>
          </tr>
          <tr>
            <td>Ethereum</td>
            <td>&euro;10</td>
            <td>Do 24 ur</td>
            <td>Kripto izplačila so običajno med najhitrejšimi</td>
          </tr>
          <tr>
            <td>Litecoin / Tether / Ripple</td>
            <td>&euro;10</td>
            <td>Do 24 ur</td>
            <td>Preveri razpoložljivost za svojo regijo</td>
          </tr>
        </tbody>
      </table>

      <p>Sprejete valute za transakcije: EUR, USD, CAD, AUD, CHF, HUF, NOK, PLN, NZD, CZK, BRL, CLP in PEN.</p>
    </div>
  </section>

  <!-- How to Withdraw -->
  <section class="content-section" id="how-to">
    <div class="container">
      <h2>Kako opraviti izplačilo</h2>
      <p>Sledij tem korakom za zahtevek izplačila iz svojega <?php echo SITE_NAME; ?> računa:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Izpolni zahtevo za obračanje.</strong> Pred prvim izplačilom mora biti tvoj polog obstavljen vsaj 1x. Če si uveljavljal bonus, najprej izpolni celotno zahtevo za obračanje. V nasprotnem primeru se lahko zaračuna 10% provizija za izplačilo.
          </div>
        </li>
        <li>
          <div>
            <strong>Odpri blagajno.</strong> Pojdi v sekcijo za izplačila v svojem računu. Najdeš jo v glavnem meniju ali v nastavitvah računa.
          </div>
        </li>
        <li>
          <div>
            <strong>Izberi plačilni način in znesek.</strong> Izberi med razpoložljivimi možnostmi in vnesi znesek, ki ga želiš izplačati. Prepričaj se, da je znotraj dovoljenih limitov.
          </div>
        </li>
        <li>
          <div>
            <strong>Počakaj na obdelavo.</strong> Casino pregleda vsak zahtevek in običajno obdela izplačila v 3 delovnih dneh. Kontaktirali te bodo, če bodo potrebni dodatni dokumenti.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- KYC Verification -->
  <section class="content-section content-section--alt" id="verification">
    <div class="container">
      <h2>Verifikacija računa (KYC)</h2>
      <p><?php echo SITE_NAME; ?> zahteva preverjanje identitete pred odobritvijo zahtevkov za izplačilo. To je standardni postopek v industriji, zasnovan za preprečevanje prevar in skladnost s predpisi proti pranju denarja.</p>

      <div class="two-col">
        <div>
          <h3>Zahtevani dokumenti</h3>
          <ul>
            <li>Osebni dokument, ki ga izda državni organ (potni list, vozniško dovoljenje ali osebna izkaznica)</li>
            <li>Dokazilo o naslovu (račun za komunalne storitve ali bančni izpisek, ne starejši od 3 mesecev)</li>
            <li>Preverjanje plačilnega sredstva (fotografija kreditne/debetne kartice, posnetek zaslona e-denarnice ali potrditev kripto denarnice)</li>
          </ul>
          <p>Za oddajo dokumentov imaš 30 dni od prvotne zahteve. Če jih ne predložiš v tem roku, je tvoj račun lahko zaprt.</p>
        </div>
        <div>
          <h3>Časovnica verifikacije</h3>
          <p>Standardni čas obdelave za pregled dokumentov je do 10 delovnih dni, čeprav v izjemnih primerih lahko traja dlje. Casino lahko uporabi storitve tretjih oseb za preverjanje ali zahteva dodatna preverjanja, kot so video klic ali telefonska verifikacija.</p>
          <p>Dokumente lahko naložiš v sekciji «Nastavitve - Verifikacija računa» v svojem profilu. Naredi jasne, dobro osvetljene fotografije, da se izogneš zamudam zaradi nečitljivih dokumentov.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Faster Payouts -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Nasveti za hitrejša izplačila</h2>

      <div class="highlight-box">
        <h4>Pospeši svoje <?php echo SITE_NAME; ?> izplačilo</h4>
        <p>Upoštevaj te prakse, da zmanjšaš zamude pri izplačilih in hitreje prejmeš svoje dobitke.</p>
      </div>

      <h3>1. Izberi e-denarnice ali kriptovalute</h3>
      <p>Skrill, Neteller in kripto možnosti, kot sta Bitcoin ali Ethereum, se običajno obdelajo hitreje kot kartice ali bančna nakazila. Če ti je hitrost najpomembnejša, opravi polog prek enega od teh načinov, da bo tvoje izplačilo vrnjeno po istem kanalu.</p>

      <h3>2. Verificiraj račun čim prej</h3>
      <p>Ne čakaj na prvo izplačilo, da oddaš dokumente. Naloži osebni dokument, dokazilo o naslovu in preverjanje plačilnega sredstva takoj po registraciji. Tako ob izplačilu ne bo zamud zaradi čakajoče verifikacije.</p>

      <h3>3. Izpolni zahteve za obračanje pred zahtevkom</h3>
      <p>Če imaš aktiven bonus, se prepričaj, da je vsaka zahteva za obračanje v celoti izpolnjena. Zahtevek za izplačilo med aktivnim bonusom razveljavi bonus in vse povezane dobitke. Če si igral samo s položenimi sredstvi, ne pozabi na 1x obračanje, ki ga moraš izpolniti za izognitev dodatni proviziji.</p>

      <h3>4. Ostani znotraj limitov</h3>
      <p>Zahtevki za izplačilo, ki presegajo dnevno ali mesečno omejitev, bodo zavrnjeni. Načrtuj svoja izplačila ustrezno: EUR 500 na dan za standardne račune, EUR 1.500 na dan za VIP člane.</p>

      <h3>5. Uporabi prvotni način pologa</h3>
      <p><?php echo SITE_NAME; ?> daje prednost vračilu sredstev na isti način, ki si ga uporabil za polog. Uporaba drugačnega načina lahko sproži dodatna preverjanja in upočasni postopek.</p>
    </div>
  </section>

  <!-- Withdrawal FAQ -->
  <section class="content-section content-section--alt" id="withdrawal-faq">
    <div class="container container--narrow">
      <h2>Pogosta vprašanja o izplačilih</h2>

      <details class="faq-item">
        <summary>Kako dolgo traja izplačilo pri <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Izplačila se obdelajo v 72 urah (3 delovne dni). E-denarnice in kriptovalute so običajno najhitrejše in pogosto zaključene v 24 urah po obdelavi s strani casina. Bančna nakazila in plačila s karticami lahko na strani ponudnika trajajo dodatnih 1-5 delovnih dni.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kakšno je minimalno izplačilo pri <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Minimalni znesek izplačila je EUR 10 za vse plačilne metode. Zneskov pod tem ni mogoče zahtevati.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kolikšen je najvišji znesek, ki ga lahko izplačam na mesec?</summary>
        <div class="faq-answer">
          <p>Standardni igralci lahko izplačajo do EUR 7.000 na mesec. VIP člani imajo dostop do povišanega limita EUR 20.000 mesečno. Veljajo tudi dnevne omejitve: EUR 500 za standardne račune, EUR 1.500 za VIP.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Zakaj je bilo moje izplačilo zavrnjeno?</summary>
        <div class="faq-answer">
          <p>Pogosti razlogi vključujejo: neizpolnjene zahteve za obračanje, neverificiran račun, prekoračitev dnevnega ali mesečnega limita ali zahtevek za izplačilo na način, ki se ne ujema s tvojim pologom. Za podrobne informacije o tvojem primeru kontaktiraj podporo.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Ali se za izplačila zaračuna provizija?</summary>
        <div class="faq-answer">
          <p>Standardne provizije za izplačilo ni. Če pa ne izpolniš 1x zahteve za obračanje pologa pred izplačilom, se lahko zaračuna 10% provizija. Vedno izpolni minimalno zahtevo za obračanje, da se izogneš tej proviziji.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Ali lahko prekličem čakajoče izplačilo?</summary>
        <div class="faq-answer">
          <p>Odvisno od faze obdelave je morda mogoče preklicati čakajoči zahtevek za izplačilo. Za pomoč pri preklicu kontaktiraj podporo strankam prek klepeta v živo.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
