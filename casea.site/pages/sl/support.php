<?php
/**
 * Support Page - Slovenian
 */
$page_title = SITE_NAME . ' Podpora strankam - Klepet v živo, e-pošta in center za pomoč';
$page_description = 'Kontaktiraj podporo strankam ' . SITE_NAME . ' Casino prek klepeta v živo 24/7 ali e-pošte. Poišči pomoč pri pologih, izplačilih, bonusih, težavah z računom in tehničnih vprašanjih.';
$current_page = 'support';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = SITE_NAME . ' Podpora strankam';
$hero_description = 'Tu smo, da ti pomagamo z vsemi vprašanji o tvojem računu, pologih, izplačilih, bonusih ali tehničnih težavah. Kontaktiraj nas kadarkoli.';
$hero_cta = 'Odpri klepet v živo';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Contact Options -->
  <section class="content-section" id="contact">
    <div class="container">
      <h2>Kako nas kontaktiraš</h2>
      <p><?php echo SITE_NAME; ?> ponuja dva glavna kanala podpore, oba dostopna neprekinjeno. Če imaš hitro vprašanje o promociji ali potrebuješ pomoč pri reševanju plačilne težave, je ekipa pripravljena pomagati.</p>

      <div class="info-grid">
        <div class="info-card">
          <div class="info-card__icon">&#128172;</div>
          <h4>Klepet v živo</h4>
          <p>Najhitrejši način za pridobitev pomoči. Klikni ikono klepeta na kateri koli strani spletnega mesta in začni pogovor s podpornim agentom. Povprečni odzivni čas je manj kot 2 minuti med rednimi urami. Na voljo 24 ur na dan, 7 dni v tednu.</p>
        </div>
        <div class="info-card">
          <div class="info-card__icon">&#9993;</div>
          <h4>Podpora po e-pošti</h4>
          <p>Za podrobna vprašanja ali oddajo dokumentov je e-pošta najboljša izbira. Pošlji svojo poizvedbo in pričakuj odgovor v 24 urah. Ne pozabi navesti podatkov o svojem računu in jasnega opisa težave.</p>
        </div>
      </div>

      <table class="data-table" style="margin-top: var(--space-8);">
        <thead>
          <tr>
            <th>Kanal</th>
            <th>Razpoložljivost</th>
            <th>Odzivni čas</th>
            <th>Idealno za</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Klepet v živo</td>
            <td>24/7</td>
            <td>Manj kot 2 minuti</td>
            <td>Hitra vprašanja, pomoč pri bonusih, težave s pologi</td>
          </tr>
          <tr>
            <td>E-pošta</td>
            <td>24/7</td>
            <td>Do 24 ur</td>
            <td>Nalaganje dokumentov, podrobni primeri, pritožbe</td>
          </tr>
          <tr>
            <td>Telefon</td>
            <td>Ni na voljo</td>
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
      <h2>Pri čem ti lahko pomaga podpora?</h2>
      <p>Ekipa za podporo strankam obravnava širok spekter tem. Tukaj so najpogostejša področja, pri katerih se igralci obračajo po pomoč:</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Račun &amp; Registracija</h4>
          <p>Pomoč pri ustvarjanju računa, posodabljanju osebnih podatkov, ponastavitvi gesla in reševanju težav s prijavo. Če je tvoj račun zaklenjen ali omejen, lahko podpora preveri tvoj status.</p>
        </div>
        <div class="info-card">
          <h4>Pologe &amp; Plačila</h4>
          <p>Pomoč pri neuspelih pologih, vprašanjih o plačilnih metodah, valutnih možnostih in preverjanju stanja transakcij. Podpora lahko pomaga tudi, če se polog ne prikaže na tvojem stanju.</p>
        </div>
        <div class="info-card">
          <h4>Izplačila &amp; Nakazila</h4>
          <p>Vprašanja o časih obdelave izplačil, čakajočih zahtevkih, zavrnjenih izplačilih in prilagoditvah limitov. Za podrobne informacije o izplačilih obišči stran <a href="<?php echo $lang_prefix; ?>/withdrawal">Izplačila</a>.</p>
        </div>
        <div class="info-card">
          <h4>Bonusi &amp; Promocije</h4>
          <p>Pojasnila o bonusnih pogojih, zahtevah za obračanje, aktivaciji ponudb in preklicu aktivnih bonusov. Podpora ti lahko razloži podrobnosti posamezne promocije in pogoje upravičenosti.</p>
        </div>
        <div class="info-card">
          <h4>Verifikacija &amp; KYC</h4>
          <p>Vodenje pri oddaji dokumentov, statusu verifikacije, sprejetih vrstah dokumentov in časovnih ocenah. Dokumente lahko naložiš v nastavitvah računa, toda podpora ti lahko pomaga, če se pojavijo težave.</p>
        </div>
        <div class="info-card">
          <h4>Tehnične težave</h4>
          <p>Pomoč pri igrah, ki se ne naložijo, napakah na spletni strani, težavah z mobilno združljivostjo in težavah, povezanih z brskalnikom. Podpora lahko odpravi napake in posreduje tehnične napake razvojni ekipi.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tips for Contacting Support -->
  <section class="content-section" id="tips">
    <div class="container container--narrow">
      <h2>Kako izkoristiti podporo v največji meri</h2>
      <p>Nekaj preprostih korakov lahko pomaga ekipi za podporo hitreje rešiti tvojo težavo:</p>

      <ol class="steps-list">
        <li>
          <div>
            <strong>Imej pripravljene podatke o računu.</strong> Tvoj e-poštni naslov ali uporabniško ime podpori pomaga hitro najti tvoj račun. Če se težava nanaša na določeno transakcijo, imej pri roki referenčno številko.
          </div>
        </li>
        <li>
          <div>
            <strong>Jasno opiši težavo.</strong> Razloži, kaj se je zgodilo, kdaj se je zgodilo in kaj si pričakoval. Posnetki zaslona so koristni pri tehničnih težavah ali spornih transakcijah.
          </div>
        </li>
        <li>
          <div>
            <strong>Uporabi pravi kanal.</strong> Za nujne primere (zaklenjen račun, neuspel polog) je klepet v živo najboljša izbira. Za oddajo dokumentov ali zapletene primere, ki zahtevajo preiskavo, e-pošta daje ekipi več prostora za delo.
          </div>
        </li>
        <li>
          <div>
            <strong>Najprej preveri pogosta vprašanja.</strong> Veliko pogostih vprašanj o bonusih, izplačilih in upravljanju računa je pokritih v razdelkih s pogostimi vprašanji po tej strani. Hiter pregled ti lahko prihrani čakanje.
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Responsible Gambling -->
  <section class="content-section content-section--alt" id="responsible">
    <div class="container container--narrow">
      <h2>Odgovorno igranje &amp; Samoizključitev</h2>
      <p><?php echo SITE_NAME; ?> jemlje odgovorno igranje resno. Če čutiš, da tvoje igralne navade postajajo problematične, ti lahko ekipa za podporo pomaga nastaviti limite pologov, obdobja ohlajanja ali urediti samoizključitev s platforme.</p>
      <p>Možnosti samoizključitve segajo od začasnih premorov do trajnega zaprtja računa. Ko je aktivirana, samoizključitve ni mogoče razveljaviti, dokler se nastavljeno obdobje ne izteče. Kontaktiraj podporo prek klepeta v živo ali e-pošte za razpravo o razpoložljivih možnostih.</p>
      <p>Za zunanjo pomoč se lahko obrneš na organizacije, kot sta GamCare ali Gamblers Anonymous, za brezplačno in zaupno svetovanje.</p>
    </div>
  </section>

  <!-- Support FAQ -->
  <section class="content-section" id="support-faq">
    <div class="container container--narrow">
      <h2>Pogosta vprašanja o podpori</h2>

      <details class="faq-item">
        <summary>Ali je podpora <?php echo SITE_NAME; ?> na voljo v več jezikih?</summary>
        <div class="faq-answer">
          <p>Spletna stran podpira poljščino, angleščino, finščino, nemščino, madžarščino, norveščino, italijanščino, španščino, češčino in portugalščino. Podporni agenti običajno pomagajo v angleščini in morda tudi v drugih navedenih jezikih, odvisno od razpoložljivosti.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kako hitro se odzove klepet v živo?</summary>
        <div class="faq-answer">
          <p>V normalnih pogojih so odgovori v klepetu v živo na voljo v 1-2 minutah. Med konicami ali obdobji z velikim prometom so čakalne dobe lahko nekoliko daljše, toda ekipa si prizadeva, da zamude ostanejo minimalne.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Ali mi podpora lahko pomaga preklicati bonus?</summary>
        <div class="faq-answer">
          <p>Da. Če želiš preklicati aktiven bonus, to lahko storiš sam v sekciji Profil v svojem računu ali kontaktiraš podporo prek klepeta v živo ali e-pošte. Upoštevaj, da preklic bonusa odstrani znesek bonusa in vse dobitke, ustvarjene iz njega.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Kaj če moja težava ni rešena?</summary>
        <div class="faq-answer">
          <p>Če nisi zadovoljen z začetnim odgovorom, zahtevaj, da se tvoj primer posreduje višjemu agentu ali nadrejenemu. Za nerešene spore se lahko sklicuješ tudi na postopke za pritožbe casina, opisane v Splošnih pogojih.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Ali lahko zahtevam limite pologov ali izgub?</summary>
        <div class="faq-answer">
          <p>Da. Kontaktiraj podporo za nastavitev dnevnih, tedenskih ali mesečnih limitov pologov. Zahtеvaš lahko tudi limite izgub ali opomnike o trajanju seje za lažje upravljanje svoje igralne aktivnosti.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
