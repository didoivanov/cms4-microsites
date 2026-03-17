<?php
/**
 * Bonuses Page – Italian
 */
$page_title = SITE_NAME . ' Bonus - Bonus di Benvenuto, Giri Gratuiti, Cashback e Premi VIP';
$page_description = 'Tutti i bonus di ' . SITE_NAME . ' Casino in un unico posto. Pacchetto di benvenuto fino a 2.000 EUR + 300 giri gratuiti su 3 depositi, benvenuto sport fino a 500 EUR, offerte ricarica settimanali, programmi cashback, premi VIP e molto altro.';
$current_page = 'bonuses';

require_once __DIR__ . '/../../includes/header.php';

$hero_title = 'Bonus di ' . SITE_NAME . ' Casino';
$hero_description = 'Tutte le promozioni attive, le offerte di benvenuto e le ricompense fedelt&agrave; attualmente disponibili. Si prega di leggere i termini prima di richiedere qualsiasi offerta.';
$hero_cta = 'Richiedi il tuo bonus';
require_once __DIR__ . '/../../includes/page-hero.php';
?>

<main>
  <!-- Welcome Casino Package -->
  <section class="content-section" id="welcome">
    <div class="container">
      <h2>Bonus di benvenuto per i nuovi giocatori</h2>
      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <p style="margin-top:0">I nuovi giocatori di <?php echo SITE_NAME; ?> possono scegliere tra un pacchetto di benvenuto casin&ograve; o un pacchetto di benvenuto sport. L'offerta casin&ograve; si distribuisce sui primi tre depositi con un valore complessivo fino a &euro;2.000 + 300 giri gratuiti. Il pacchetto sport offre fino a &euro;500 su tre depositi. Ogni opzione &egrave; disponibile sul primo deposito idoneo e non pu&ograve; essere combinata con altre promozioni.</p>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-promotions.png" alt="<?php echo SITE_NAME; ?> Casino promotions page showing welcome package and VIP cashback offers" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>

      <!-- Casino Welcome – Deposit 1 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">1&ordm; deposito: 100% fino a &euro;500 + 100 giri gratuiti</div>
          <span class="bonus-card__tag">Casin&ograve;</span>
        </div>
        <p>Effettua il tuo primo deposito di almeno &euro;20 e ricevi un bonus del 100% fino a &euro;500. In aggiunta, 100 giri gratuiti vengono accreditati in lotti di 20 al giorno per 5 giorni consecutivi. Il primo lotto &egrave; disponibile subito dopo la conferma del deposito. Ogni lotto deve essere utilizzato entro 24 ore, altrimenti scade. Un deposito di &euro;10 o pi&ugrave; garantisce anche 1 credito Bonus Crab per una possibilit&agrave; alla Macchina Artiglio, dove i premi includono monete, giri gratuiti, fondi bonus o premi in denaro.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Deposito min.</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Requisito di puntata</div>
            <div class="bonus-detail__value">35x (bonus + deposito)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Puntata giri gratuiti</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validit&agrave;</div>
            <div class="bonus-detail__value">10 giorni</div>
          </div>
          <div>
            <div class="bonus-detail__label">Puntata max.</div>
            <div class="bonus-detail__value">&euro;5</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome – Deposit 2 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2&ordm; deposito: 75% fino a &euro;750 + 75 giri gratuiti</div>
          <span class="bonus-card__tag">Casin&ograve;</span>
        </div>
        <p>Il secondo deposito di &euro;20 o pi&ugrave; d&agrave; diritto a un bonus del 75% fino a &euro;750, pi&ugrave; 75 giri gratuiti su una slot in evidenza. I giri gratuiti vengono accreditati in lotti di 25 al giorno per 3 giorni. Si applicano gli stessi requisiti di puntata e periodi di validit&agrave; del bonus sul primo deposito.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Deposito min.</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Requisito di puntata</div>
            <div class="bonus-detail__value">35x (bonus + deposito)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Puntata giri gratuiti</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validit&agrave;</div>
            <div class="bonus-detail__value">10 giorni</div>
          </div>
        </div>
      </div>

      <!-- Casino Welcome – Deposit 3 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">3&ordm; deposito: 50% fino a &euro;750 + 125 giri gratuiti</div>
          <span class="bonus-card__tag">Casin&ograve;</span>
        </div>
        <p>Il terzo deposito di &euro;20 o pi&ugrave; garantisce un bonus del 50% fino a &euro;750, insieme a 125 giri gratuiti distribuiti in lotti di 25 al giorno per 5 giorni. Questo porta il pacchetto di benvenuto totale a &euro;2.000 in fondi bonus e 300 giri gratuiti sui primi tre depositi.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Deposito min.</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Requisito di puntata</div>
            <div class="bonus-detail__value">35x (bonus + deposito)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Puntata giri gratuiti</div>
            <div class="bonus-detail__value">40x</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validit&agrave;</div>
            <div class="bonus-detail__value">10 giorni</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome – Deposit 1 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">1&ordm; deposito sport: 100% fino a &euro;200</div>
          <span class="bonus-card__tag">Sport</span>
        </div>
        <p>Gli scommettitori sportivi ricevono un bonus del 100% sul primo deposito fino a &euro;200. L'importo massimo del bonus varia in base alla regione: i giocatori da Finlandia, Germania, Norvegia, Svizzera e Austria possono ricevere fino a &euro;200. I giocatori italiani ricevono fino a &euro;150. I giocatori da Kazakistan, Uzbekistan, Kirghizistan, Tagikistan, Georgia e Azerbaigian ricevono fino a &euro;50. Per attivare il bonus, l'intero importo del deposito deve essere scommesso su puntate sportive con quota minima di 1,50.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Deposito min.</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Requisito di puntata</div>
            <div class="bonus-detail__value">5x o 6x (varia per paese)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Quota min.</div>
            <div class="bonus-detail__value">2.0 singole / 1.5 multiple</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validit&agrave;</div>
            <div class="bonus-detail__value">30 giorni</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome – Deposit 2 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">2&ordm; deposito sport: 75% fino a &euro;150</div>
          <span class="bonus-card__tag">Sport</span>
        </div>
        <p>Il secondo deposito sportivo di &euro;20 o pi&ugrave; d&agrave; diritto a un bonus del 75% fino a &euro;150. Si applicano le stesse condizioni di attivazione e puntata del primo bonus sportivo. Il deposito deve essere interamente scommesso su puntate sportive con quota minima di 1,50 prima che il bonus venga accreditato.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Deposito min.</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Requisito di puntata</div>
            <div class="bonus-detail__value">5x o 6x (varia per paese)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validit&agrave;</div>
            <div class="bonus-detail__value">30 giorni</div>
          </div>
        </div>
      </div>

      <!-- Sports Welcome – Deposit 3 -->
      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">3&ordm; deposito sport: 50% fino a &euro;150</div>
          <span class="bonus-card__tag">Sport</span>
        </div>
        <p>Il terzo deposito sportivo di &euro;20 o pi&ugrave; d&agrave; diritto a un bonus del 50% fino a &euro;150. Questo completa il pacchetto di benvenuto sport con un valore complessivo fino a &euro;500 su tre depositi. Tutti i requisiti di puntata devono essere soddisfatti entro 30 giorni da ciascun deposito.</p>
        <div class="bonus-card__details">
          <div>
            <div class="bonus-detail__label">Deposito min.</div>
            <div class="bonus-detail__value">&euro;20</div>
          </div>
          <div>
            <div class="bonus-detail__label">Requisito di puntata</div>
            <div class="bonus-detail__value">5x o 6x (varia per paese)</div>
          </div>
          <div>
            <div class="bonus-detail__label">Validit&agrave;</div>
            <div class="bonus-detail__value">30 giorni</div>
          </div>
        </div>
      </div>

      <div class="two-col" style="align-items:center;gap:var(--space-8);margin:var(--space-6) 0">
        <div>
          <div class="highlight-box" style="margin:0">
            <h4>Codice promozionale <?php echo SITE_NAME; ?></h4>
            <p>Se hai un codice promozionale, puoi inserirlo durante il processo di registrazione. Il campo del codice appare nel modulo di iscrizione, subito dopo aver selezionato il bonus di benvenuto preferito. I codici promozionali possono sbloccare offerte speciali o condizioni bonus modificate, quindi vale la pena controllare prima di depositare.</p>
          </div>
        </div>
        <div style="text-align:center;flex-shrink:0">
          <img src="/assets/img/vipluck-account.png" alt="<?php echo SITE_NAME; ?> Casino bonus selection screen showing casino and sports welcome options" style="max-width:260px;width:100%;border-radius:24px;box-shadow:0 8px 32px rgba(26,35,64,.15)">
        </div>
      </div>

      <div class="highlight-box" style="margin-top: var(--space-4);">
        <h4>Regola sulla vincita massima</h4>
        <p>I giocatori residenti in Brasile, Cile, Giappone, Per&ugrave; e Thailandia sono soggetti a un limite massimo di vincita pari a 10 volte l'importo del bonus su tutto il gioco finanziato con bonus. Questo si applica ai bonus di benvenuto, ai bonus ricarica e a qualsiasi altra offerta promozionale. Le vincite che superano questo limite verranno adeguate di conseguenza.</p>
      </div>
    </div>
  </section>

  <!-- Reload & Weekly -->
  <section class="content-section content-section--alt" id="reload">
    <div class="container">
      <h2>Bonus ricarica settimanali</h2>
      <p><?php echo SITE_NAME; ?> mantiene attive le promozioni ben oltre la fase di benvenuto. Queste offerte ricorrenti si rinnovano ogni settimana, dando ai giocatori attivi qualcosa da richiedere ogni settimana.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Boost settimanale: 50 giri gratuiti</div>
          <span class="bonus-card__tag">Luned&igrave; - Gioved&igrave;</span>
        </div>
        <p>Deposita &euro;20 o pi&ugrave; tra luned&igrave; e gioved&igrave; e ricevi 50 giri gratuiti su una slot in evidenza. Devi attivare l'offerta ogni settimana prima di depositare. I giri devono essere utilizzati entro 7 giorni e le vincite hanno un requisito di puntata di 40x con un periodo di completamento di 10 giorni. Puntata max. con bonus attivo: &euro;5.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Ricarica weekend: 50% fino a &euro;500 + 75 giri gratuiti</div>
          <span class="bonus-card__tag">Venerd&igrave; - Domenica</span>
        </div>
        <p>Deposita almeno &euro;20 nel weekend e ottieni un bonus del 50% fino a &euro;500. Se il deposito &egrave; di &euro;50 o pi&ugrave;, ricevi anche 75 giri gratuiti su una slot selezionata. Devi attivare l'offerta prima di depositare. Il requisito di puntata &egrave; 35x su deposito e bonus, e 40x sulle vincite dei giri gratuiti. Hai 10 giorni per completare i requisiti.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Speciale domenica: 30% fino a &euro;300 + 50 giri gratuiti</div>
          <span class="bonus-card__tag">Solo domenica</span>
        </div>
        <p>Un'offerta aggiuntiva valida solo la domenica per i giocatori che vogliono una spinta extra per iniziare la nuova settimana. Deposita &euro;20 o pi&ugrave; e ricevi un bonus del 30% fino a &euro;300 pi&ugrave; 50 giri gratuiti. L'attivazione &egrave; obbligatoria. La puntata &egrave; 35x su deposito e bonus, 40x sulle vincite dei giri gratuiti, con un periodo di completamento di 10 giorni.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Ricarica sport settimanale: 55% fino a &euro;300</div>
          <span class="bonus-card__tag">Sport</span>
        </div>
        <p>Una volta a settimana, il tuo deposito pi&ugrave; alto d&agrave; diritto a un bonus sport del 55% fino a &euro;300. Il deposito deve essere scommesso una volta su puntate sportive con quota minima di 1,50 prima che il bonus venga accreditato. Puoi quindi richiederlo tramite live chat o email. I requisiti di puntata devono essere completati entro 30 giorni e il prelievo massimo da questo bonus &egrave; 10 volte il suo valore.</p>
      </div>
    </div>
  </section>

  <!-- Cashback -->
  <section class="content-section" id="cashback">
    <div class="container">
      <h2>Programmi cashback</h2>
      <p><?php echo SITE_NAME; ?> offre tre programmi cashback separati: cashback giornaliero per i giochi del casin&ograve;, cashback settimanale per il casin&ograve; live e cashback settimanale per le scommesse sportive. Ogni programma ha i propri termini e il proprio processo di richiesta.</p>

      <div class="info-grid">
        <div class="info-card">
          <h4>Cashback giornaliero casin&ograve;</h4>
          <p>Disponibile dal livello VIP 3 in su. Il VIP 3 riceve il 5% giornaliero fino a &euro;200. Il VIP 4 ottiene il 10% fino a &euro;300. Il VIP 5 riceve il 15% fino a &euro;500. Il cashback viene accreditato automaticamente alle 04:00 UTC con un requisito di puntata di 1x. Devi riattivare l'offerta ogni 4 settimane.</p>
        </div>
        <div class="info-card">
          <h4>Cashback casin&ograve; live: 25% fino a &euro;350</h4>
          <p>Cashback settimanale sulle perdite nette dai giochi del casin&ograve; live. La perdita minima idonea &egrave; di &euro;5. Contatta l'assistenza il luned&igrave; dopo le 06:00 UTC (prima delle 23:59 UTC) per richiedere. Una volta accreditato, il cashback ha un requisito di puntata di 1x prima del prelievo.</p>
        </div>
        <div class="info-card">
          <h4>Cashback sport: 15% fino a &euro;500</h4>
          <p>Copre le perdite nette dalle scommesse sportive piazzate da luned&igrave; a domenica. Una perdita minima di &euro;20 &egrave; necessaria per qualificarsi. Contatta l'assistenza il luned&igrave; per richiedere. Il cashback prevede un requisito di puntata di 3x e pu&ograve; essere utilizzato solo nella sezione Sport.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sports Promos -->
  <section class="content-section content-section--alt" id="sports-promos">
    <div class="container">
      <h2>Promozioni scommesse sportive</h2>
      <p>Oltre al bonus di benvenuto e al cashback, la sezione scommesse sportive include diversi strumenti che aggiungono valore alle tue puntate.</p>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Boost multipla: fino al 100%</div>
        </div>
        <p>Piazza una scommessa multipla con 3 o pi&ugrave; selezioni, ciascuna con quota di almeno 1,40, e le tue vincite ricevono un bonus. Il moltiplicatore parte dal 3% per 3 selezioni e arriva fino al 100% per 21 o pi&ugrave; selezioni. Contano solo le scommesse con denaro reale. Richiedere un prelievo prima che il boost venga accreditato annulla il bonus.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Pagamento anticipato con 2 gol di vantaggio</div>
        </div>
        <p>Se la tua squadra va in vantaggio di 2 gol, la tua scommessa pre-match 1X2 viene pagata per intero come vincente -- senza aspettare il fischio finale. Questa offerta si applica solo alle scommesse su vittoria casa o trasferta. Le scommesse live e le scommesse sul pareggio sono escluse, e il cash out anticipato annulla il pagamento anticipato.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Boost sport: 20% fino a &euro;100</div>
        </div>
        <p>Un boost sportivo settimanale disponibile per tutti i giocatori attivi. Deposita &euro;20 o pi&ugrave; e ricevi un bonus del 20% fino a &euro;100 per le scommesse sportive. Il bonus deve essere scommesso 5x con quota minima di 1,50 entro 14 giorni. L'attivazione &egrave; obbligatoria tramite il tuo profilo.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Vantaggio venerd&igrave;: scommessa gratuita fino a &euro;50</div>
        </div>
        <p>Ogni venerd&igrave;, piazza una scommessa sportiva idonea di &euro;20 o pi&ugrave; con quota minima di 1,80. Se la scommessa perde, ricevi una scommessa gratuita pari al 50% della tua puntata, fino a &euro;50. La scommessa gratuita deve essere usata entro 3 giorni e ha un requisito di puntata di 3x con quota minima di 1,50.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Ricarica sport weekend: 40% fino a &euro;200</div>
        </div>
        <p>Deposita &euro;20 o pi&ugrave; il sabato o la domenica e ricevi un bonus sport del 40% fino a &euro;200. Il deposito deve essere scommesso una volta su puntate sportive con quota minima di 1,50 prima che il bonus si attivi. I requisiti di puntata devono essere completati entro 30 giorni e il pagamento massimo da questo bonus &egrave; 10 volte il suo valore.</p>
      </div>

      <div class="bonus-card">
        <div class="bonus-card__header">
          <div class="bonus-card__title">Quote maggiorate</div>
        </div>
        <p>Alcuni mercati pre-match 1X2 presentano occasionalmente quote potenziate. Cerca l'etichetta "Enhanced Prices" nella descrizione del mercato. Le vincite dalle scommesse con quote maggiorate vengono pagate come denaro reale senza requisiti di puntata aggiuntivi.</p>
      </div>
    </div>
  </section>

  <!-- VIP, Shop, Crab -->
  <section class="content-section" id="vip">
    <div class="container">
      <h2>Programma VIP &amp; Extra</h2>
      <div class="two-col">
        <div>
          <h3>Programma VIP</h3>
          <p><?php echo SITE_NAME; ?> gestisce un programma fedelt&agrave; a cinque livelli in cui avanzi in base alla tua attivit&agrave; di gioco. I livelli sono Bronze, Silver, Gold, Platinum e Diamond. Man mano che sali, sblocchi vantaggi come un account manager personale, limiti di prelievo pi&ugrave; alti, offerte bonus esclusive e percentuali di cashback superiori. I membri Diamond hanno accesso alle migliori offerte di cashback settimanali, prelievi prioritari e inviti a eventi esclusivi.</p>

          <h4>Vantaggi dei livelli VIP</h4>
          <table class="quick-table">
            <tr><th>Livello</th><th>Vantaggi</th></tr>
            <tr><td>Bronze</td><td>Tassi cashback base, accesso alle promozioni standard, ricompense in monete sull'attivit&agrave;</td></tr>
            <tr><td>Silver</td><td>Cashback migliorato (3%), elaborazione prelievi pi&ugrave; rapida, bonus compleanno</td></tr>
            <tr><td>Gold</td><td>5% cashback fino a &euro;200/giorno, account manager personale, limiti di prelievo pi&ugrave; alti</td></tr>
            <tr><td>Platinum</td><td>10% cashback fino a &euro;300/giorno, promozioni esclusive, assistenza prioritaria</td></tr>
            <tr><td>Diamond</td><td>15% cashback fino a &euro;500/giorno, limiti massimi, eventi VIP, offerte personalizzate</td></tr>
          </table>

          <h3>Bonus Crab</h3>
          <p>Ogni deposito di &euro;10 o pi&ugrave; garantisce 1 credito Bonus Crab. Usalo per "catturare" un premio casuale dalla Macchina Artiglio -- i premi possibili includono fondi bonus, giri gratuiti o monete. Un piccolo extra giornaliero che aggiunge variet&agrave; alla tua esperienza di gioco.</p>
        </div>
        <div>
          <h3>Monete &amp; Negozio</h3>
          <p>Le monete si guadagnano giocando, completando sfide e tramite promozioni. Puoi spenderle nel Negozio di <?php echo SITE_NAME; ?> per ricompense che vanno dai giri gratuiti su slot selezionate (es. 5 giri su Sweet Bonanza per 30 monete) a fondi bonus (&euro;5 per 50 monete, fino a &euro;250 per 1.200 monete). Un ottimo modo per trasformare la tua fedelt&agrave; in ricompense tangibili al tuo ritmo.</p>

          <h3>Sfide</h3>
          <p>Le sfide settimanali ti premiano per il completamento di obiettivi semplici. Le sfide casin&ograve; possono chiederti di piazzare puntate da &euro;0,50 su slot specifiche, mentre le sfide sport possono richiedere scommesse da &euro;15 su partite con quota minima di 2,0. Ogni sfida completata fa guadagnare monete, e completarne 20 in una settimana sblocca un bonus di 50 monete.</p>

          <h3>Speciale anniversario</h3>
          <p>Nell'anniversario della registrazione del tuo account, <?php echo SITE_NAME; ?> offre un pacchetto bonus speciale. L'offerta varia in base al tuo livello VIP e all'attivit&agrave; dell'account, e viene consegnata automaticamente al tuo account nella data dell'anniversario. Controlla le notifiche o contatta l'assistenza se ritieni che il tuo bonus anniversario manchi.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- No-Deposit Info -->
  <section class="content-section content-section--alt" id="no-deposit">
    <div class="container container--narrow">
      <h2>Bonus senza deposito <?php echo SITE_NAME; ?></h2>
      <p>Attualmente, <?php echo SITE_NAME; ?> non offre un classico bonus senza deposito. Tuttavia, la funzione Bonus Crab premia ogni deposito di &euro;10 o pi&ugrave; con una prova gratuita alla Macchina Artiglio, dove puoi vincere giri, fondi bonus, monete o premi in denaro senza requisiti di puntata aggiuntivi sul premio originale. Questa &egrave; l'opzione pi&ugrave; vicina a un vantaggio senza deposito attualmente disponibile sulla piattaforma.</p>
      <p>Tieni d'occhio la sezione Promozioni e controlla regolarmente, perch&eacute; il casin&ograve; ruota frequentemente le sue offerte e potrebbe introdurre offerte senza deposito o codici bonus gratuiti in futuro.</p>
    </div>
  </section>

  <!-- Bonus FAQ -->
  <section class="content-section" id="bonus-faq">
    <div class="container container--narrow">
      <h2>FAQ sui bonus</h2>

      <details class="faq-item">
        <summary>Posso usare un codice promozionale su <?php echo SITE_NAME; ?>?</summary>
        <div class="faq-answer">
          <p>S&igrave;. Durante la registrazione hai la possibilit&agrave; di inserire un codice promozionale dopo aver selezionato il bonus di benvenuto preferito. Se hai un codice valido, inseriscilo per attivare i vantaggi associati.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Posso combinare pi&ugrave; bonus?</summary>
        <div class="faq-answer">
          <p>No. I bonus di benvenuto e le promozioni ricarica non possono essere cumulati. Devi completare o annullare qualsiasi bonus attivo prima di richiederne uno nuovo. Alcuni bonus possono essere annullati dalla sezione Profilo o contattando l'assistenza.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Cosa succede se richiedo un prelievo prima di completare i requisiti di puntata?</summary>
        <div class="faq-answer">
          <p>Richiedere un prelievo prima che i requisiti di puntata siano soddisfatti annuller&agrave; il bonus e tutte le vincite associate. Assicurati di aver completato interamente il rollover prima di richiedere un prelievo.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Tutti i giochi contribuiscono allo stesso modo ai requisiti di puntata?</summary>
        <div class="faq-answer">
          <p>No. Diversi tipi di gioco contribuiscono con percentuali diverse. Le slot di solito contribuiscono al 100%, mentre i giochi da tavolo e i titoli del casin&ograve; live contribuiscono in misura inferiore. Consulta i termini del bonus per la tabella di contribuzione esatta.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>I depositi con Skrill e Neteller sono idonei per i bonus?</summary>
        <div class="faq-answer">
          <p>Nella maggior parte dei casi, i depositi effettuati tramite Skrill o Neteller non sono idonei per i bonus di benvenuto. Consulta i termini della promozione specifica per eventuali eccezioni.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>La regola sulla vincita massima si applica a me?</summary>
        <div class="faq-answer">
          <p>Il limite di vincita massima di 10x si applica ai residenti di Brasile, Cile, Giappone, Per&ugrave; e Thailandia. Se risiedi in uno di questi paesi, le tue vincite dal gioco finanziato con bonus sono limitate a 10 volte l'importo del bonus. I giocatori di altre regioni non sono soggetti a questa regola.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Come funziona il bonus anniversario?</summary>
        <div class="faq-answer">
          <p>Ogni anno, nell'anniversario della tua registrazione, <?php echo SITE_NAME; ?> consegna un bonus speciale al tuo account. La dimensione e il tipo dell'offerta dipendono dal tuo livello VIP e dall'attivit&agrave; complessiva. Il bonus viene accreditato automaticamente -- controlla le notifiche o contatta l'assistenza se non lo ricevi.</p>
        </div>
      </details>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>