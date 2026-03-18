// Mobile nav toggle
document.addEventListener('DOMContentLoaded', function() {
  var toggle = document.querySelector('.nav-toggle');
  var navMobile = document.getElementById('navMobile');

  if (toggle && navMobile) {
    toggle.addEventListener('click', function(e) {
      e.stopPropagation();
      var isOpen = navMobile.classList.contains('open');
      if (isOpen) {
        toggle.classList.remove('active');
        navMobile.classList.remove('open');
        document.body.style.overflow = '';
      } else {
        toggle.classList.add('active');
        navMobile.classList.add('open');
        document.body.style.overflow = 'hidden';
      }
    });
    navMobile.querySelectorAll('a').forEach(function(link) {
      link.addEventListener('click', function() {
        toggle.classList.remove('active');
        navMobile.classList.remove('open');
        document.body.style.overflow = '';
      });
    });
  }

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
    anchor.addEventListener('click', function(e) {
      var target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });

  // Sticky CTA on scroll
  var stickyCta = document.getElementById('stickyCta');
  if (stickyCta) {
    var showThreshold = 600;
    var footerEl = document.querySelector('.site-footer');
    window.addEventListener('scroll', function() {
      var scrollY = window.scrollY || window.pageYOffset;
      var footerTop = footerEl ? footerEl.getBoundingClientRect().top + scrollY : Infinity;
      var windowBottom = scrollY + window.innerHeight;
      if (scrollY > showThreshold && windowBottom < footerTop + 100) {
        stickyCta.classList.add('visible');
      } else {
        stickyCta.classList.remove('visible');
      }
    });
  }

  // ================================================================
  // WINNERS DATA POOL (157 entries)
  // International European names, shuffled on every page load, 8 shown
  // ================================================================
  var winnersPool = [
    { name: 'Marco T.', game: 'Sweet Bonanza', amount: 3420 },
    { name: 'Sophie K.', game: 'Gates of Olympus', amount: 187 },
    { name: 'Lars H.', game: 'Le Bandit', amount: 8750 },
    { name: 'Isabella R.', game: 'Crazy Time', amount: 42 },
    { name: 'Dimitri V.', game: 'Lightning Roulette', amount: 1290 },
    { name: 'Annika S.', game: 'Big Bass Bonanza', amount: 560 },
    { name: 'Pierre L.', game: 'Starburst', amount: 95 },
    { name: 'Elena M.', game: 'Reactoonz', amount: 2100 },
    { name: 'Jan W.', game: 'Dead or Alive 2', amount: 6340 },
    { name: 'Katarina B.', game: 'Sugar Rush', amount: 28 },
    { name: 'Luca F.', game: 'Mega Wheel', amount: 410 },
    { name: 'Nadia P.', game: 'Plinko Cup', amount: 73 },
    { name: 'Henrik J.', game: 'Sweet Bonanza', amount: 1850 },
    { name: 'Maria G.', game: 'Chicken Road', amount: 320 },
    { name: 'Tomas C.', game: 'Book of Ra', amount: 15 },
    { name: 'Franziska D.', game: 'Wolf Gold', amount: 4670 },
    { name: 'Aleksander N.', game: 'Crazy Time', amount: 890 },
    { name: 'Chiara L.', game: 'The Dog House', amount: 165 },
    { name: 'Marek Z.', game: 'Bash Bros', amount: 52 },
    { name: 'Astrid E.', game: 'Razor Shark', amount: 7200 },
    { name: 'Rafael A.', game: 'Fire Joker', amount: 38 },
    { name: 'Ingrid O.', game: 'Monopoly Live', amount: 1540 },
    { name: 'Matteo B.', game: 'Immortal Romance', amount: 430 },
    { name: 'Elina K.', game: 'Gates of Olympus', amount: 9100 },
    { name: 'Bjorn S.', game: 'Lightning Roulette', amount: 260 },
    { name: 'Carmen R.', game: 'Sweet Bonanza Xmas', amount: 82 },
    { name: 'Felix W.', game: 'Fruit Party', amount: 3050 },
    { name: 'Margot H.', game: 'Blackjack VIP', amount: 1200 },
    { name: 'Piotr M.', game: 'Aviator', amount: 14500 },
    { name: 'Hanna T.', game: 'European Roulette', amount: 175 },
    { name: 'Stefan J.', game: 'Starburst XXXtreme', amount: 620 },
    { name: 'Lucia V.', game: 'Big Bass Splash', amount: 47 },
    { name: 'Niklas G.', game: 'Wanted Dead or a Wild', amount: 5800 },
    { name: 'Amelie F.', game: 'Aviator', amount: 340 },
    { name: 'Ruben C.', game: 'Dream Catcher', amount: 93 },
    { name: 'Zuzana P.', game: 'Buffalo King', amount: 2450 },
    { name: 'Giovanni D.', game: 'Cash or Crash', amount: 710 },
    { name: 'Maja L.', game: 'Eye of Horus', amount: 18 },
    { name: 'Florian B.', game: 'Le Bandit', amount: 1380 },
    { name: 'Petra N.', game: 'Hot Fiesta', amount: 56 },
    { name: 'Jakub K.', game: 'Book of Dead', amount: 4200 },
    { name: 'Celine A.', game: 'XXXtreme Lightning Roulette', amount: 890 },
    { name: 'Anders E.', game: 'Starlight Princess', amount: 135 },
    { name: 'Valentina S.', game: 'Gates of Olympus 1000', amount: 7650 },
    { name: 'Klaus W.', game: 'Blackjack Classic', amount: 300 },
    { name: 'Miriam R.', game: 'Release the Kraken', amount: 67 },
    { name: 'Sven H.', game: 'Crazy Time', amount: 2780 },
    { name: 'Adriana M.', game: 'Wild West Gold', amount: 490 },
    { name: 'Willem T.', game: 'Baccarat Lobby', amount: 1050 },
    { name: 'Silvia G.', game: 'Floating Dragon', amount: 22 },
    { name: 'Mikkel J.', game: 'Starburst', amount: 3690 },
    { name: 'Eva F.', game: 'Madame Destiny', amount: 210 },
    { name: 'Tomasz D.', game: 'Lightning Blackjack', amount: 780 },
    { name: 'Noemi V.', game: 'Chicken Road', amount: 44 },
    { name: 'Carlos B.', game: 'Sweet Bonanza', amount: 5400 },
    { name: 'Leonie P.', game: 'Plinko', amount: 155 },
    { name: 'Kristian L.', game: 'Fruit Party 2', amount: 920 },
    { name: 'Alina C.', game: 'The Hand of Midas', amount: 31 },
    { name: 'Hugo N.', game: 'Book of Fallen', amount: 2350 },
    { name: 'Dorota K.', game: 'Roulette Live', amount: 680 },
    { name: 'Anton A.', game: 'Gems Bonanza', amount: 1700 },
    { name: 'Sigrid E.', game: 'Power of Thor', amount: 59 },
    { name: 'Davide S.', game: 'Dead or Alive 2', amount: 8400 },
    { name: 'Katrin W.', game: 'Big Bamboo', amount: 365 },
    { name: 'Joost R.', game: 'Monopoly Big Baller', amount: 120 },
    { name: 'Emilia H.', game: 'Fire in the Hole', amount: 4900 },
    { name: 'Olivier M.', game: 'European Roulette', amount: 75 },
    { name: 'Birgit T.', game: 'Sugar Rush 1000', amount: 1480 },
    { name: 'Artur J.', game: 'Cash or Crash', amount: 540 },
    { name: 'Cecilia G.', game: 'Wanted Dead or a Wild', amount: 11200 },
    { name: 'Erik F.', game: 'Razor Returns', amount: 290 },
    { name: 'Ines D.', game: 'Mega Wheel', amount: 88 },
    { name: 'Martin V.', game: 'Gates of Olympus', amount: 3100 },
    { name: 'Karin B.', game: 'Wild West Duels', amount: 195 },
    { name: 'Paulo P.', game: 'Blackjack Party', amount: 650 },
    { name: 'Theresa L.', game: 'Extra Chilli', amount: 35 },
    { name: 'Jurgen C.', game: 'Sweet Bonanza', amount: 6700 },
    { name: 'Renata N.', game: 'Bash Bros', amount: 440 },
    { name: 'Viktor K.', game: 'Lightning Roulette', amount: 1100 },
    { name: 'Frida A.', game: 'Treasure Island', amount: 160 },
    { name: 'Sebastien E.', game: 'Book of Dead', amount: 2900 },
    { name: 'Milena S.', game: 'Multi Hand Blackjack', amount: 380 },
    { name: 'Krzysztof W.', game: 'Viking Voyage', amount: 63 },
    { name: 'Simone R.', game: 'Crazy Time', amount: 7800 },
    { name: 'Oskar H.', game: 'Rise of Olympus', amount: 510 },
    { name: 'Beatriz M.', game: 'Aztec Bonanza', amount: 24 },
    { name: 'Romain T.', game: 'Reactoonz 2', amount: 1950 },
    { name: 'Katja J.', game: 'Speed Baccarat', amount: 830 },
    { name: 'Alberto G.', game: 'Big Bass Bonanza', amount: 275 },
    { name: 'Ylva F.', game: 'Mental', amount: 4350 },
    { name: 'Dieter D.', game: 'Dream Catcher', amount: 105 },
    { name: 'Natalia V.', game: 'Plinko Cup', amount: 1620 },
    { name: 'Mathieu B.', game: 'Eye of Horus Megaways', amount: 47 },
    { name: 'Livia P.', game: 'Gates of Olympus', amount: 5250 },
    { name: 'Rasmus L.', game: 'Fire Joker', amount: 190 },
    { name: 'Monika C.', game: 'Wild West Gold Megaways', amount: 730 },
    { name: 'Joris N.', game: 'Starburst', amount: 33 },
    { name: 'Giulia K.', game: 'Book of Ra Deluxe', amount: 2680 },
    { name: 'Ernst A.', game: 'Lightning Roulette', amount: 460 },
    { name: 'Ana E.', game: 'Sweet Bonanza', amount: 86 },
    { name: 'Morten S.', game: 'The Dog House Megaways', amount: 3850 },
    { name: 'Reka W.', game: 'European Roulette', amount: 570 },
    { name: 'Claudio R.', game: 'Immortal Romance', amount: 1350 },
    { name: 'Solveig H.', game: 'Aviator', amount: 225 },
    { name: 'Pawel M.', game: 'Dead or Alive 2', amount: 9500 },
    { name: 'Elodie T.', game: 'Floating Dragon Hold and Spin', amount: 48 },
    { name: 'Giuseppe J.', game: 'Agent Spinity', amount: 16700 },
    { name: 'Astrid G.', game: 'Plinko', amount: 310 },
    { name: 'Daan F.', game: 'Crazy Time', amount: 1780 },
    { name: 'Ivana D.', game: 'Buffalo King Megaways', amount: 640 },
    { name: 'Manuel V.', game: 'Book of Dead', amount: 55 },
    { name: 'Elin B.', game: 'Sweet Bonanza', amount: 4100 },
    { name: 'Ondrej P.', game: 'Cash or Crash', amount: 145 },
    { name: 'Aurelia L.', game: 'Razor Shark', amount: 2550 },
    { name: 'Bram C.', game: 'Monopoly Live', amount: 920 },
    { name: 'Tereza N.', game: 'Lightning Blackjack', amount: 385 },
    { name: 'Jorge K.', game: 'Extra Chilli', amount: 71 },
    { name: 'Dagmar A.', game: 'Gates of Olympus 1000', amount: 6100 },
    { name: 'Fabio E.', game: 'Starlight Princess 1000', amount: 250 },
    { name: 'Sandra S.', game: 'Fruit Party', amount: 1060 },
    { name: 'Lukas W.', game: 'Baccarat Squeeze', amount: 490 },
    { name: 'Rosa R.', game: 'Gems Bonanza', amount: 29 },
    { name: 'Thierry H.', game: 'Wanted Dead or a Wild', amount: 7350 },
    { name: 'Greta M.', game: 'Power of Thor Megaways', amount: 170 },
    { name: 'Matias T.', game: 'Big Bass Splash', amount: 840 },
    { name: 'Helga J.', game: 'Roulette Live', amount: 1430 },
    { name: 'Andrei G.', game: 'Sweet Bonanza Xmas', amount: 355 },
    { name: 'Colette F.', game: 'Fire in the Hole', amount: 5600 },
    { name: 'Nicolai D.', game: 'Plinko Cup', amount: 112 },
    { name: 'Magdalena V.', game: 'European Roulette', amount: 2200 },
    { name: 'Enrico B.', game: 'Sugar Rush', amount: 78 },
    { name: 'Johanna P.', game: 'Book of Fallen', amount: 3280 },
    { name: 'Karel L.', game: 'Crazy Time', amount: 445 },
    { name: 'Fleur C.', game: 'Lightning Roulette', amount: 1870 },
    { name: 'Henrik N.', game: 'Starburst XXXtreme', amount: 590 },
    { name: 'Teresa K.', game: 'Dead or Alive 2', amount: 12300 },
    { name: 'Wim A.', game: 'Mega Wheel', amount: 205 },
    { name: 'Sabine E.', game: 'Wolf Gold', amount: 3750 },
    { name: 'Alessandro S.', game: 'Blackjack VIP', amount: 950 },
    { name: 'Johanne W.', game: 'Big Bamboo', amount: 130 },
    { name: 'Zdenko R.', game: 'Le Bandit', amount: 1580 },
    { name: 'Hannelore H.', game: 'Rise of Olympus', amount: 68 },
    { name: 'Mikael M.', game: 'Hot Fiesta', amount: 2970 },
    { name: 'Daria T.', game: 'Sweet Bonanza Candyland', amount: 415 },
    { name: 'Roland J.', game: 'The Hand of Midas', amount: 740 },
    { name: 'Vivienne G.', game: 'Sweet Bonanza', amount: 19 },
    { name: 'Tadeas F.', game: 'Reactoonz 2', amount: 4680 },
    { name: 'Isabelle D.', game: 'Speed Baccarat', amount: 285 },
    { name: 'Kristof V.', game: 'Dice Roulette', amount: 1740 },
    { name: 'Serena B.', game: 'Burning Chilli X', amount: 520 },
    { name: 'Magnus P.', game: 'Le Bandit', amount: 3100 },
    { name: 'Francesca L.', game: 'Sakura Fortune', amount: 680 },
    { name: 'Vojtech C.', game: 'Gravity Roulette', amount: 2350 },
    { name: 'Sanne N.', game: 'Chicken Road', amount: 415 },
    { name: 'Radek K.', game: 'Aviator', amount: 1920 },
    { name: 'Anja A.', game: 'Bash Bros', amount: 88 }
  ];

  var emojis = ['&#127920;','&#127183;','&#9824;','&#127922;','&#128176;','&#127919;','&#9830;','&#9829;','&#9827;','&#127921;'];
  var times = ['just now','1 min ago','2 min ago','3 min ago','5 min ago','7 min ago','9 min ago','12 min ago','15 min ago','18 min ago','22 min ago','28 min ago','35 min ago','42 min ago','50 min ago','1 hr ago'];

  // Fisher-Yates shuffle
  function shuffle(arr) {
    var a = arr.slice();
    for (var i = a.length - 1; i > 0; i--) {
      var j = Math.floor(Math.random() * (i + 1));
      var tmp = a[i]; a[i] = a[j]; a[j] = tmp;
    }
    return a;
  }

  // Currency config (injected by PHP in footer, falls back to EUR)
  var cur = window.CASINO_CURRENCY || { symbol: '\u20AC', suffix: '', multiplier: 1, locale: 'de-DE', jackpotBase: 2847391 };

  function formatCurrency(amount) {
    var converted = Math.round(amount * cur.multiplier);
    var formatted = converted.toLocaleString(cur.locale);
    return cur.symbol + formatted + cur.suffix;
  }

  // Populate winners grid
  var winnersGrid = document.getElementById('winnersGrid');
  if (winnersGrid) {
    var picked = shuffle(winnersPool).slice(0, 8);
    var html = '';
    for (var i = 0; i < picked.length; i++) {
      var w = picked[i];
      html += '<div class="winner-card">'
        + '<div class="winner-card__avatar">' + emojis[i % emojis.length] + '</div>'
        + '<div class="winner-card__info">'
        + '<div class="winner-card__name">' + w.name + '</div>'
        + '<div class="winner-card__game">' + w.game + '</div>'
        + '</div>'
        + '<div style="text-align:right">'
        + '<div class="winner-card__amount">' + formatCurrency(w.amount) + '</div>'
        + '<div class="winner-card__time">' + times[i % times.length] + '</div>'
        + '</div>'
        + '</div>';
    }
    winnersGrid.innerHTML = html;
  }

  // Jackpot counter animation
  var jackpotEl = document.getElementById('jackpotCounter');
  if (jackpotEl) {
    var baseAmount = cur.jackpotBase + Math.floor(Math.random() * Math.round(cur.jackpotBase * 0.07));
    setInterval(function() {
      baseAmount += Math.floor(Math.random() * Math.max(3, Math.round(cur.multiplier * 12))) + 3;
      var formatted = baseAmount.toLocaleString(cur.locale);
      jackpotEl.innerHTML = cur.symbol + formatted + cur.suffix;
    }, 3000);
  }

  // ================================================================
  // GAMES DATA POOL (68 entries)
  // Shuffled on every page load, 12 shown at a time
  // ================================================================
  var gamesPool = [
    { name: 'Sweet Bonanza', provider: 'Pragmatic Play', badge: 'hot', color: '#e84393' },
    { name: 'Gates of Olympus', provider: 'Pragmatic Play', badge: 'hot', color: '#0984e3' },
    { name: 'Le Bandit', provider: 'Hacksaw Gaming', badge: 'hot', color: '#2c3e50' },
    { name: 'Crazy Time', provider: 'Evolution', badge: 'live', color: '#fdcb6e' },
    { name: 'Lightning Roulette', provider: 'Evolution', badge: 'live', color: '#2d3436' },
    { name: 'Aviator', provider: 'Spribe', badge: 'hot', color: '#b22222' },
    { name: 'Bash Bros', provider: 'Hacksaw Gaming', badge: 'new', color: '#6c5ce7' },
    { name: 'Chicken Road', provider: 'BGaming', badge: 'new', color: '#f39c12' },
    { name: 'Plinko Cup', provider: 'Spribe', badge: 'new', color: '#20b2aa' },
    { name: 'Big Bass Bonanza', provider: 'Pragmatic Play', badge: null, color: '#00b894' },
    { name: 'Starburst', provider: 'NetEnt', badge: null, color: '#a29bfe' },
    { name: 'Mega Wheel', provider: 'Pragmatic Play', badge: null, color: '#e17055' },
    { name: 'Reactoonz', provider: "Play'n GO", badge: null, color: '#fd79a8' },
    { name: 'Dead or Alive 2', provider: 'NetEnt', badge: 'jackpot', color: '#636e72' },
    { name: 'Sugar Rush', provider: 'Pragmatic Play', badge: 'new', color: '#ff6b81' },
    { name: 'Book of Dead', provider: "Play'n GO", badge: null, color: '#6c5ce7' },
    { name: 'Wolf Gold', provider: 'Pragmatic Play', badge: 'jackpot', color: '#b8860b' },
    { name: 'Monopoly Live', provider: 'Evolution', badge: 'live', color: '#228b22' },
    { name: 'Fire Joker', provider: "Play'n GO", badge: null, color: '#dc143c' },
    { name: 'Immortal Romance', provider: 'Microgaming', badge: null, color: '#8b0000' },
    { name: 'Starlight Princess', provider: 'Pragmatic Play', badge: 'hot', color: '#ff69b4' },
    { name: 'The Dog House', provider: 'Pragmatic Play', badge: null, color: '#cd853f' },
    { name: 'Book of Ra Deluxe', provider: 'Novomatic', badge: null, color: '#daa520' },
    { name: 'Cash or Crash', provider: 'Evolution', badge: 'live', color: '#4169e1' },
    { name: 'Razor Shark', provider: 'Push Gaming', badge: null, color: '#1e90ff' },
    { name: 'Fruit Party', provider: 'Pragmatic Play', badge: null, color: '#ff4500' },
    { name: 'Rise of Olympus', provider: "Play'n GO", badge: null, color: '#4b0082' },
    { name: 'Treasure Island', provider: 'Pragmatic Play', badge: 'new', color: '#2e8b57' },
    { name: 'Sweet Bonanza Candyland', provider: 'Pragmatic Play', badge: 'live', color: '#e75480' },
    { name: 'Agent Spinity', provider: 'Playtech', badge: 'new', color: '#5f27cd' },
    { name: 'Dice Roulette', provider: 'Evolution', badge: 'live', color: '#34495e' },
    { name: 'Burning Chilli X', provider: 'BGaming', badge: 'hot', color: '#c0392b' },
    { name: 'Gravity Roulette', provider: 'Evolution', badge: 'live', color: '#34495e' },
    { name: 'Sakura Fortune', provider: 'Quickspin', badge: null, color: '#e91e63' },
    { name: 'Extra Chilli', provider: 'Big Time Gaming', badge: null, color: '#ff6347' },
    { name: 'Dream Catcher', provider: 'Evolution', badge: 'live', color: '#8fbc8f' },
    { name: 'Mega Moolah', provider: 'Microgaming', badge: 'jackpot', color: '#ffd700' },
    { name: 'Wild West Gold', provider: 'Pragmatic Play', badge: null, color: '#d2691e' },
    { name: 'Wanted Dead or a Wild', provider: 'Hacksaw Gaming', badge: 'hot', color: '#8b4513' },
    { name: 'Lightning Blackjack', provider: 'Evolution', badge: 'live', color: '#191970' },
    { name: 'Big Bamboo', provider: 'Push Gaming', badge: null, color: '#2e8b57' },
    { name: 'Plinko', provider: 'Spribe', badge: null, color: '#20b2aa' },
    { name: 'Fire in the Hole', provider: 'Nolimit City', badge: null, color: '#ff8c00' },
    { name: 'Buffalo King', provider: 'Pragmatic Play', badge: null, color: '#a0522d' },
    { name: 'Sugar Rush 1000', provider: 'Pragmatic Play', badge: 'new', color: '#db7093' },
    { name: 'Floating Dragon', provider: 'Pragmatic Play', badge: null, color: '#6a5acd' },
    { name: 'Gems Bonanza', provider: 'Pragmatic Play', badge: null, color: '#00bfff' },
    { name: 'Hot Fiesta', provider: 'Pragmatic Play', badge: null, color: '#f4a460' },
    { name: 'Mental', provider: 'Nolimit City', badge: null, color: '#483d8b' },
    { name: 'Eye of Horus', provider: 'Novomatic', badge: null, color: '#b8860b' },
    { name: 'Power of Thor', provider: 'Pragmatic Play', badge: null, color: '#4682b4' },
    { name: 'Starburst XXXtreme', provider: 'NetEnt', badge: 'hot', color: '#7b68ee' },
    { name: 'Book of Fallen', provider: 'Pragmatic Play', badge: null, color: '#800000' },
    { name: 'Gates of Olympus 1000', provider: 'Pragmatic Play', badge: 'new', color: '#0077b6' },
    { name: 'Viking Voyage', provider: 'Betsoft', badge: null, color: '#708090' },
    { name: 'XXXtreme Lightning Roulette', provider: 'Evolution', badge: 'live', color: '#1a1a2e' },
    { name: 'The Hand of Midas', provider: 'Pragmatic Play', badge: null, color: '#c9b037' },
    { name: 'Gold Rush with Johnny Cash', provider: 'BGaming', badge: null, color: '#d4a017' },
    { name: 'Monopoly Big Baller', provider: 'Evolution', badge: 'live', color: '#228b22' },
    { name: 'Big Bass Splash', provider: 'Pragmatic Play', badge: null, color: '#008080' },
    { name: 'Aztec Bonanza', provider: 'Pragmatic Play', badge: null, color: '#bf8b2e' },
    { name: 'Starlight Princess 1000', provider: 'Pragmatic Play', badge: 'new', color: '#e75480' },
    { name: 'Lucky Streak 3', provider: 'Endorphina', badge: null, color: '#27ae60' },
    { name: 'Sun of Egypt 3', provider: '3 Oaks Gaming', badge: null, color: '#e67e22' },
    { name: 'Holmes and the Stolen Stones', provider: 'Yggdrasil', badge: 'jackpot', color: '#2c3e50' },
    { name: 'Valley of the Gods', provider: 'Yggdrasil', badge: null, color: '#d4a017' },
    { name: 'Crystal Ball', provider: 'Gamomat', badge: null, color: '#9b59b6' },
    { name: 'Piggy Bank Bills', provider: 'Pragmatic Play', badge: null, color: '#e74c3c' }
  ];

  // Badge color map
  var badgeColors = {
    hot: '#dc2626',
    new: '#2563eb',
    jackpot: '#7c3aed',
    live: '#1db954'
  };

  // Populate game grid
  var gameGrid = document.getElementById('gameGrid');
  if (gameGrid) {
    var selectedGames = shuffle(gamesPool).slice(0, 12);
    var playSvg = '<svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>';
    var gHtml = '';
    selectedGames.forEach(function(g) {
      var badgeHtml = '';
      if (g.badge) {
        var bColor = badgeColors[g.badge] || '#666';
        badgeHtml = '<div class="game-tile__badge game-tile__badge--' + g.badge + '" style="background:' + bColor + '">' + g.badge + '</div>';
      }
      gHtml += '<div class="game-tile">'
        + '<div style="width:100%;height:100%;background:linear-gradient(135deg,' + g.color + ',' + g.color + '88);display:flex;align-items:center;justify-content:center;font-size:2.5rem;color:rgba(255,255,255,0.2)">&#127920;</div>'
        + '<div class="game-tile__gradient"></div>'
        + badgeHtml
        + '<div class="game-tile__play">' + playSvg + '</div>'
        + '<div class="game-tile__info">'
        + '<div class="game-tile__name">' + g.name + '</div>'
        + '<div class="game-tile__provider">' + g.provider + '</div>'
        + '</div>'
        + '</div>';
    });
    gameGrid.innerHTML = gHtml;
  }

  // Wrap data-tables in scrollable container for mobile
  document.querySelectorAll('.data-table').forEach(function(table) {
    if (!table.parentElement.classList.contains('data-table-wrap')) {
      var wrapper = document.createElement('div');
      wrapper.className = 'data-table-wrap';
      table.parentNode.insertBefore(wrapper, table);
      wrapper.appendChild(table);
    }
  });
});
