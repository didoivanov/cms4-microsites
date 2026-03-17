<?php
/**
 * Login Page - Slovenian
 */
$page_title = SITE_NAME . ' Prijava - Vstopi v svoj casino račun';
$page_description = 'Prijavi se v svoj ' . SITE_NAME . ' Casino račun. Dostopaj do svojih iger, bonusov in stanja. Težave s prijavo? Ponastavi geslo ali kontaktiraj podporo za pomoč.';
$current_page = 'login';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Prijava';
$hero_description = 'Prijavi se za dostop do svojega računa, iger in bonusov.';
$hero_cta = 'Registriraj se';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Login Help -->
  <section class="content-section content-section--alt" id="login-help">
    <div class="container container--narrow">
      <h2>Kako se prijaviti v <?php echo SITE_NAME; ?> Casino</h2>
      <p>Prijava v tvoj <?php echo SITE_NAME; ?> račun traja le nekaj sekund. Tukaj je postopek za namizno in mobilno različico:</p>

      <h3>Prijava na namiznem računalniku</h3>
      <p>Obišči spletno stran <?php echo SITE_NAME; ?> in klikni gumb "Log In" v zgornjem desnem kotu strani, poleg gumba "Register". Vnesi svoj registrirani e-poštni naslov in geslo, nato klikni "Log In" za dostop do računa. Povezava "Forgot your password?" se nahaja tik pod obrazcem, če moraš ponastaviti prijavne podatke.</p>

      <h3>Prijava na mobilnem telefonu</h3>
      <p>Na telefonu ali tabličnem računalniku odpri spletno stran <?php echo SITE_NAME; ?> v mobilnem brskalniku. Gumb "Log In" je viden v zgornjem delu strani. Pritisni ga, vnesi svojo e-pošto in geslo ter pritisni "Log In". Mobilna različica ponuja enake funkcije kot namizna stran, vključno s ponastavitvijo gesla in registracijo računa.</p>

      <h3>Težave s prijavo?</h3>
      <p>Če imaš težave pri prijavi v svoj račun, preveri naslednje:</p>
      <ul>
        <li>Prepričaj se, da vnašaš pravilen e-poštni naslov in geslo. Gesla razlikujejo med velikimi in malimi črkami.</li>
        <li>Počisti predpomnilnik in piškotke brskalnika ter poskusi znova.</li>
        <li>Preveri, da je tvoja internetna povezava stabilna.</li>
        <li>Če si pozabil geslo, uporabi povezavo "Forgot your password?" za zahtevo ponastavitvenega e-poštnega sporočila.</li>
        <li>Izogibaj se uporabi VPN, saj <?php echo SITE_NAME; ?> ne dovoljuje dostopa prek VPN. Poskus prijave prek VPN lahko povzroči omejitve računa.</li>
      </ul>
      <p>Če nič od navedenega ne reši težave, se obrni na <a href="<?php echo $lang_prefix; ?>/support">podporo strankam</a> prek klepeta v živo za pomoč v realnem času.</p>
    </div>
  </section>

  <!-- Registration Overview -->
  <section class="content-section" id="register">
    <div class="container container--narrow">
      <h2>Ustvarjanje novega računa</h2>
      <p>Če še nimaš <?php echo SITE_NAME; ?> računa, je registracija hitra in traja priblizno eno minuto. Tukaj je pregled postopka:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Klikni "Register" na spletni strani.</strong> Gumb za registracijo je v zgornjem desnem kotu strani. Pojavilo se bo okno, kjer lahko izbereš želeni dobrodošlični bonus (casino, paket več pologov ali šport) ali se bonusu v celoti odpoveš.
          </div>
        </li>
        <li>
          <div>
            <strong>Vnesi e-pošto in ustvari geslo.</strong> To bodo tvoji prijavni podatki za naprej. Če imaš promocijsko kodo, jo lahko vneseš na tej stopnji.
          </div>
        </li>
        <li>
          <div>
            <strong>Izpolni osebne podatke.</strong> Vnesti boš moral svoje polno ime, datum rojstva, spol, telefonsko številko in fizični naslov. Ti podatki so potrebni za verifikacijo računa.
          </div>
        </li>
        <li>
          <div>
            <strong>Dokonči registracijo.</strong> Klikni "Create Profile" za dokončanje računa. Ko je končano, lahko opraviš svoj prvi polog in začneš igrati.
          </div>
        </li>
      </ol>

      <p>Po registraciji razmisli o takojšnji oddaji verifikacijskih dokumentov. To pospeši postopek, ko zahtevaš prvo izplačilo. Sekcijo za nalaganje dokumentov najdeš pod «Nastavitve - Verifikacija računa» v svojem profilu.</p>
    </div>
  </section>

  <!-- Login FAQ -->
  <section class="content-section content-section--alt" id="login-faq">
    <div class="container container--narrow">
      <h2>Pogosta vprašanja o prijavi</h2>

      <details class="faq-item">
        <summary>Kaj potrebujem za prijavo?</summary>
        <div class="faq-answer">
          <p>Potrebuješ e-poštni naslov in geslo, ki si ju uporabil med registracijo. Če si pozabil geslo, klikni "Forgot your password?" na prijavnem obrazcu za prejem ponastavitvene povezave po e-pošti.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Ali lahko uporabim VPN za dostop do <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>Ne. <?php echo SITE_NAME; ?> strogo prepoveduje uporabo VPN. Prijava prek VPN lahko povzroči začasno ukinitev računa in zaplembo morebitnih dobitkov. Casino zagotavlja izkušnjo, prilagojeno posamezni državi.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Moj račun je zaklenjen. Kaj naj storim?</summary>
        <div class="faq-answer">
          <p>Zaklepanje računa se lahko zgodi iz varnostnih razlogov, kot je več neuspelih poskusov prijave ali sumljiva aktivnost. Kontaktiraj podporo strankam prek klepeta v živo ali e-pošte, da se tvoj račun pregleda in morebitno odklene.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kako spremenim geslo?</summary>
        <div class="faq-answer">
          <p>Ko si prijavljen, pojdi v nastavitve računa za posodobitev gesla. Če se ne moreš prijaviti, uporabi funkcijo za ponastavitev gesla na prijavni strani. Ponastavitvena povezava bo poslana na tvoj registrirani e-poštni naslov.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Katere podatke potrebujem za registracijo?</summary>
        <div class="faq-answer">
          <p>Za registracijo potrebuješ e-pošto, geslo, polno ime, datum rojstva, spol, telefonsko številko, državo, mesto in poštno številko. Ti podatki se uporabljajo za preverjanje identitete in skladnost z regulativnimi zahtevami.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
