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
        // Close lang selector if open
        document.querySelectorAll('.lang-selector').forEach(function(el) { el.classList.remove('open'); });
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

  // Language selector
  var langBtns = document.querySelectorAll('.lang-selector__toggle');
  langBtns.forEach(function(btn) {
    btn.addEventListener('click', function(e) {
      e.stopPropagation();
      btn.closest('.lang-selector').classList.toggle('open');
    });
  });
  document.addEventListener('click', function() {
    document.querySelectorAll('.lang-selector').forEach(function(el) {
      el.classList.remove('open');
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
  // WINNERS DATA POOL (150 entries)
  // Shuffled on every page load, 8 shown at a time
  // ================================================================
  var winnersPool = [
    { name: 'Alex M.', game: 'Sweet Bonanza', amount: 3420 },
    { name: 'Sophia K.', game: 'Gates of Olympus', amount: 187 },
    { name: 'Marcus T.', game: 'Book of Dead', amount: 8750 },
    { name: 'Elena V.', game: 'Crazy Time', amount: 42 },
    { name: 'James R.', game: 'Lightning Roulette', amount: 1290 },
    { name: 'Yuki S.', game: 'Big Bass Bonanza', amount: 560 },
    { name: 'Oliver B.', game: 'Starburst', amount: 95 },
    { name: 'Mia L.', game: 'Reactoonz', amount: 2100 },
    { name: 'Noah P.', game: 'Dead or Alive 2', amount: 6340 },
    { name: 'Liam D.', game: 'Sugar Rush', amount: 28 },
    { name: 'Emma W.', game: 'Mega Wheel', amount: 410 },
    { name: 'Lucas F.', game: 'Turbo Plinko', amount: 73 },
    { name: 'Hanna R.', game: 'Sweet Bonanza', amount: 1850 },
    { name: 'Viktor P.', game: 'Gonzo\'s Quest', amount: 320 },
    { name: 'Annika S.', game: 'Book of Ra', amount: 15 },
    { name: 'Tomasz K.', game: 'Wolf Gold', amount: 4670 },
    { name: 'Petra M.', game: 'Crazy Time', amount: 890 },
    { name: 'Jan H.', game: 'The Dog House', amount: 165 },
    { name: 'Sanna L.', game: 'Jammin\' Jars', amount: 52 },
    { name: 'Mikael A.', game: 'Razor Shark', amount: 7200 },
    { name: 'Katarina B.', game: 'Fire Joker', amount: 38 },
    { name: 'Diego C.', game: 'Monopoly Live', amount: 1540 },
    { name: 'Ingrid F.', game: 'Immortal Romance', amount: 430 },
    { name: 'Rasmus N.', game: 'Gates of Olympus', amount: 9100 },
    { name: 'Zara T.', game: 'Lightning Roulette', amount: 260 },
    { name: 'Felix W.', game: 'Sweet Bonanza Xmas', amount: 82 },
    { name: 'Anna G.', game: 'Fruit Party', amount: 3050 },
    { name: 'Stefan D.', game: 'Blackjack VIP', amount: 1200 },
    { name: 'Leila K.', game: 'Mega Moolah', amount: 14500 },
    { name: 'Henrik J.', game: 'European Roulette', amount: 175 },
    { name: 'Maria P.', game: 'Starburst XXXtreme', amount: 620 },
    { name: 'Olli V.', game: 'Big Bass Splash', amount: 47 },
    { name: 'Claudia S.', game: 'Wanted Dead or a Wild', amount: 5800 },
    { name: 'Tomas R.', game: 'Aviator', amount: 340 },
    { name: 'Sara E.', game: 'Dream Catcher', amount: 93 },
    { name: 'Pavel K.', game: 'Buffalo King', amount: 2450 },
    { name: 'Elise M.', game: 'Cash or Crash', amount: 710 },
    { name: 'Anders B.', game: 'Eye of Horus', amount: 18 },
    { name: 'Nina T.', game: 'Gonzo\'s Quest', amount: 1380 },
    { name: 'Marco L.', game: 'Hot Fiesta', amount: 56 },
    { name: 'Johanna H.', game: 'Book of Dead', amount: 4200 },
    { name: 'Kalle S.', game: 'XXXtreme Lightning Roulette', amount: 890 },
    { name: 'Laura D.', game: 'Starlight Princess', amount: 135 },
    { name: 'Piotr W.', game: 'Gates of Olympus 1000', amount: 7650 },
    { name: 'Emilia R.', game: 'Blackjack Classic', amount: 300 },
    { name: 'Georg F.', game: 'Release the Kraken', amount: 67 },
    { name: 'Ida N.', game: 'Crazy Time', amount: 2780 },
    { name: 'Lukas G.', game: 'Wild West Gold', amount: 490 },
    { name: 'Thea K.', game: 'Baccarat Lobby', amount: 1050 },
    { name: 'Riku M.', game: 'Floating Dragon', amount: 22 },
    { name: 'Gabriella V.', game: 'Starburst', amount: 3690 },
    { name: 'Erik P.', game: 'Madame Destiny', amount: 210 },
    { name: 'Liisa T.', game: 'Lightning Blackjack', amount: 780 },
    { name: 'Marek B.', game: 'John Hunter', amount: 44 },
    { name: 'Julia A.', game: 'Sweet Bonanza', amount: 5400 },
    { name: 'Sven H.', game: 'Plinko', amount: 155 },
    { name: 'Rosa S.', game: 'Fruit Party 2', amount: 920 },
    { name: 'Daniel L.', game: 'The Hand of Midas', amount: 31 },
    { name: 'Kaisa R.', game: 'Book of Fallen', amount: 2350 },
    { name: 'Patrik E.', game: 'Roulette Live', amount: 680 },
    { name: 'Monika W.', game: 'Gems Bonanza', amount: 1700 },
    { name: 'Artur J.', game: 'Power of Thor', amount: 59 },
    { name: 'Heidi G.', game: 'Dead or Alive 2', amount: 8400 },
    { name: 'Milan K.', game: 'Big Bamboo', amount: 365 },
    { name: 'Vera N.', game: 'Monopoly Big Baller', amount: 120 },
    { name: 'Jakub P.', game: 'Fire in the Hole', amount: 4900 },
    { name: 'Frida M.', game: 'European Roulette', amount: 75 },
    { name: 'Christian S.', game: 'Sugar Rush 1000', amount: 1480 },
    { name: 'Elina T.', game: 'Cash or Crash', amount: 540 },
    { name: 'Robert A.', game: 'Wanted Dead or a Wild', amount: 11200 },
    { name: 'Nadia H.', game: 'Razor Returns', amount: 290 },
    { name: 'Lars B.', game: 'Mega Wheel', amount: 88 },
    { name: 'Tereza D.', game: 'Gates of Olympus', amount: 3100 },
    { name: 'Johan L.', game: 'Wild West Duels', amount: 195 },
    { name: 'Alma K.', game: 'Blackjack Party', amount: 650 },
    { name: 'Timo V.', game: 'Extra Chilli', amount: 35 },
    { name: 'Sandra F.', game: 'Sweet Bonanza', amount: 6700 },
    { name: 'Adrian R.', game: 'Pragmatic Drops & Wins', amount: 440 },
    { name: 'Matilda G.', game: 'Lightning Roulette', amount: 1100 },
    { name: 'Krzysztof E.', game: 'Joker Troupe', amount: 160 },
    { name: 'Elin S.', game: 'Book of Dead', amount: 2900 },
    { name: 'Ondrej M.', game: 'Multi Hand Blackjack', amount: 380 },
    { name: 'Isabella B.', game: 'Viking Voyage', amount: 63 },
    { name: 'Harri P.', game: 'Crazy Time', amount: 7800 },
    { name: 'Agata W.', game: 'Rise of Olympus', amount: 510 },
    { name: 'Nils T.', game: 'Aztec Bonanza', amount: 24 },
    { name: 'Kristina H.', game: 'Reactoonz 2', amount: 1950 },
    { name: 'Werner K.', game: 'Speed Baccarat', amount: 830 },
    { name: 'Cecilia J.', game: 'Big Bass Bonanza', amount: 275 },
    { name: 'Adam N.', game: 'Mental', amount: 4350 },
    { name: 'Helena R.', game: 'Dream Catcher', amount: 105 },
    { name: 'Ville L.', game: 'Gonzo\'s Quest Megaways', amount: 1620 },
    { name: 'Dorota S.', game: 'Eye of Horus Megaways', amount: 47 },
    { name: 'Carl A.', game: 'Gates of Olympus', amount: 5250 },
    { name: 'Tuuli M.', game: 'Fire Joker', amount: 190 },
    { name: 'Rafal G.', game: 'Wild West Gold Megaways', amount: 730 },
    { name: 'Eva D.', game: 'Starburst', amount: 33 },
    { name: 'Per F.', game: 'Book of Ra Deluxe', amount: 2680 },
    { name: 'Martina V.', game: 'Lightning Roulette', amount: 460 },
    { name: 'Jens B.', game: 'Sweet Bonanza', amount: 86 },
    { name: 'Svetlana P.', game: 'The Dog House Megaways', amount: 3850 },
    { name: 'Gunnar T.', game: 'European Roulette', amount: 570 },
    { name: 'Alina K.', game: 'Immortal Romance', amount: 1350 },
    { name: 'Hugo E.', game: 'Aviator', amount: 225 },
    { name: 'Beata R.', game: 'Dead or Alive 2', amount: 9500 },
    { name: 'Oskari H.', game: 'Floating Dragon Hold & Spin', amount: 48 },
    { name: 'Renata S.', game: 'Mega Moolah', amount: 16700 },
    { name: 'Axel L.', game: 'Turbo Plinko', amount: 310 },
    { name: 'Karin M.', game: 'Crazy Time', amount: 1780 },
    { name: 'Tadeusz W.', game: 'Buffalo King Megaways', amount: 640 },
    { name: 'Sigrid N.', game: 'Book of Dead', amount: 55 },
    { name: 'Ivan G.', game: 'Sweet Bonanza', amount: 4100 },
    { name: 'Livia J.', game: 'Cash or Crash', amount: 145 },
    { name: 'Markus D.', game: 'Razor Shark', amount: 2550 },
    { name: 'Daniela F.', game: 'Monopoly Live', amount: 920 },
    { name: 'Eero K.', game: 'Lightning Blackjack', amount: 385 },
    { name: 'Paulina B.', game: 'Extra Chilli', amount: 71 },
    { name: 'Gustav A.', game: 'Gates of Olympus 1000', amount: 6100 },
    { name: 'Simona P.', game: 'Starlight Princess 1000', amount: 250 },
    { name: 'Joakim R.', game: 'Fruit Party', amount: 1060 },
    { name: 'Lenka T.', game: 'Baccarat Squeeze', amount: 490 },
    { name: 'Oscar S.', game: 'Gems Bonanza', amount: 29 },
    { name: 'Agnes L.', game: 'Wanted Dead or a Wild', amount: 7350 },
    { name: 'Matti H.', game: 'Power of Thor Megaways', amount: 170 },
    { name: 'Klara W.', game: 'Big Bass Splash', amount: 840 },
    { name: 'Damian E.', game: 'Roulette Live', amount: 1430 },
    { name: 'Birgitta M.', game: 'Sweet Bonanza Xmas', amount: 355 },
    { name: 'Lauri V.', game: 'Fire in the Hole', amount: 5600 },
    { name: 'Jana K.', game: 'Plinko', amount: 112 },
    { name: 'Kasper G.', game: 'European Roulette', amount: 2200 },
    { name: 'Marta J.', game: 'Sugar Rush', amount: 78 },
    { name: 'Thomas N.', game: 'Book of Fallen', amount: 3280 },
    { name: 'Siiri P.', game: 'Crazy Time', amount: 445 },
    { name: 'Wiktoria R.', game: 'Lightning Roulette', amount: 1870 },
    { name: 'Fabian S.', game: 'Starburst XXXtreme', amount: 590 },
    { name: 'Aino T.', game: 'Dead or Alive 2', amount: 12300 },
    { name: 'Petr B.', game: 'Mega Wheel', amount: 205 },
    { name: 'Linnea D.', game: 'Wolf Gold', amount: 3750 },
    { name: 'Wojciech F.', game: 'Blackjack VIP', amount: 950 },
    { name: 'Maja H.', game: 'Big Bamboo', amount: 130 },
    { name: 'Rolf L.', game: 'Gonzo\'s Quest', amount: 1580 },
    { name: 'Ivana M.', game: 'Rise of Olympus', amount: 68 },
    { name: 'Anton K.', game: 'Hot Fiesta', amount: 2970 },
    { name: 'Elsa W.', game: 'Dream Catcher', amount: 415 },
    { name: 'Jiri G.', game: 'The Hand of Midas', amount: 740 },
    { name: 'Ylva R.', game: 'Sweet Bonanza', amount: 19 },
    { name: 'Bartosz S.', game: 'Reactoonz 2', amount: 4680 },
    { name: 'Vilma A.', game: 'Speed Baccarat', amount: 285 }
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

  // Populate winners grid
  var winnersGrid = document.getElementById('winnersGrid');
  if (winnersGrid) {
    var picked = shuffle(winnersPool).slice(0, 8);
    var html = '';
    for (var i = 0; i < picked.length; i++) {
      var w = picked[i];
      var formatted = w.amount.toLocaleString('en-US');
      html += '<div class="winner-card">'
        + '<div class="winner-card__avatar">' + emojis[i % emojis.length] + '</div>'
        + '<div class="winner-card__info">'
        + '<div class="winner-card__name">' + w.name + '</div>'
        + '<div class="winner-card__game">' + w.game + '</div>'
        + '</div>'
        + '<div style="text-align:right">'
        + '<div class="winner-card__amount">&euro;' + formatted + '</div>'
        + '<div class="winner-card__time">' + times[i % times.length] + '</div>'
        + '</div>'
        + '</div>';
    }
    winnersGrid.innerHTML = html;
  }

  // Jackpot counter animation
  var jackpotEl = document.getElementById('jackpotCounter');
  if (jackpotEl) {
    var baseAmount = 2847391 + Math.floor(Math.random() * 200000);
    setInterval(function() {
      baseAmount += Math.floor(Math.random() * 47) + 3;
      jackpotEl.innerHTML = '&euro;' + baseAmount.toLocaleString('en-US');
    }, 3000);
  }

  // ================================================================
  // GAMES DATA POOL (60 entries)
  // Shuffled on every page load, 12 shown at a time
  // ================================================================
  var gamesPool = [
    { name: 'Sweet Bonanza', provider: 'Pragmatic Play', badge: 'hot', color: '#e84393' },
    { name: 'Gates of Olympus', provider: 'Pragmatic Play', badge: 'hot', color: '#0984e3' },
    { name: 'Book of Dead', provider: "Play'n GO", badge: null, color: '#6c5ce7' },
    { name: 'Crazy Time', provider: 'Evolution', badge: 'hot', color: '#fdcb6e' },
    { name: 'Lightning Roulette', provider: 'Evolution', badge: null, color: '#2d3436' },
    { name: 'Big Bass Bonanza', provider: 'Pragmatic Play', badge: null, color: '#00b894' },
    { name: 'Starburst', provider: 'NetEnt', badge: null, color: '#a29bfe' },
    { name: 'Mega Wheel', provider: 'Pragmatic Play', badge: 'new', color: '#e17055' },
    { name: 'Reactoonz', provider: "Play'n GO", badge: null, color: '#fd79a8' },
    { name: 'Dead or Alive 2', provider: 'NetEnt', badge: 'jackpot', color: '#636e72' },
    { name: 'Sugar Rush', provider: 'Pragmatic Play', badge: 'new', color: '#ff6b81' },
    { name: 'Turbo Plinko', provider: 'Hacksaw', badge: null, color: '#00cec9' },
    { name: 'Wolf Gold', provider: 'Pragmatic Play', badge: 'jackpot', color: '#b8860b' },
    { name: 'Gonzo\'s Quest', provider: 'NetEnt', badge: null, color: '#2e8b57' },
    { name: 'Monopoly Live', provider: 'Evolution', badge: 'hot', color: '#228b22' },
    { name: 'Fire Joker', provider: "Play'n GO", badge: null, color: '#dc143c' },
    { name: 'Immortal Romance', provider: 'Microgaming', badge: null, color: '#8b0000' },
    { name: 'Starlight Princess', provider: 'Pragmatic Play', badge: 'hot', color: '#ff69b4' },
    { name: 'The Dog House', provider: 'Pragmatic Play', badge: null, color: '#cd853f' },
    { name: 'Aviator', provider: 'Spribe', badge: 'hot', color: '#b22222' },
    { name: 'Book of Ra Deluxe', provider: 'Novomatic', badge: null, color: '#daa520' },
    { name: 'Cash or Crash', provider: 'Evolution', badge: null, color: '#4169e1' },
    { name: 'Razor Shark', provider: 'Push Gaming', badge: null, color: '#1e90ff' },
    { name: 'Fruit Party', provider: 'Pragmatic Play', badge: null, color: '#ff4500' },
    { name: 'Rise of Olympus', provider: "Play'n GO", badge: null, color: '#4b0082' },
    { name: 'Extra Chilli', provider: 'Big Time Gaming', badge: null, color: '#ff6347' },
    { name: 'Jammin\' Jars', provider: 'Push Gaming', badge: null, color: '#9932cc' },
    { name: 'Dream Catcher', provider: 'Evolution', badge: null, color: '#8fbc8f' },
    { name: 'Mega Moolah', provider: 'Microgaming', badge: 'jackpot', color: '#ffd700' },
    { name: 'Wild West Gold', provider: 'Pragmatic Play', badge: null, color: '#d2691e' },
    { name: 'Wanted Dead or a Wild', provider: 'Hacksaw', badge: 'hot', color: '#8b4513' },
    { name: 'Lightning Blackjack', provider: 'Evolution', badge: 'new', color: '#191970' },
    { name: 'Big Bamboo', provider: 'Push Gaming', badge: null, color: '#2e8b57' },
    { name: 'Plinko', provider: 'Spribe', badge: null, color: '#20b2aa' },
    { name: 'Fire in the Hole', provider: 'Nolimit City', badge: null, color: '#ff8c00' },
    { name: 'Buffalo King', provider: 'Pragmatic Play', badge: null, color: '#a0522d' },
    { name: 'Sugar Rush 1000', provider: 'Pragmatic Play', badge: 'new', color: '#db7093' },
    { name: 'Floating Dragon', provider: 'Pragmatic Play', badge: null, color: '#6a5acd' },
    { name: 'Gems Bonanza', provider: 'Pragmatic Play', badge: null, color: '#00bfff' },
    { name: 'Reactoonz 2', provider: "Play'n GO", badge: null, color: '#ba55d3' },
    { name: 'Hot Fiesta', provider: 'Pragmatic Play', badge: null, color: '#f4a460' },
    { name: 'Mental', provider: 'Nolimit City', badge: null, color: '#483d8b' },
    { name: 'Eye of Horus', provider: 'Merkur', badge: null, color: '#b8860b' },
    { name: 'Power of Thor', provider: 'Pragmatic Play', badge: null, color: '#4682b4' },
    { name: 'Starburst XXXtreme', provider: 'NetEnt', badge: 'hot', color: '#7b68ee' },
    { name: 'John Hunter', provider: 'Pragmatic Play', badge: null, color: '#556b2f' },
    { name: 'Book of Fallen', provider: 'Pragmatic Play', badge: null, color: '#800000' },
    { name: 'Madame Destiny', provider: 'Pragmatic Play', badge: null, color: '#663399' },
    { name: 'Gates of Olympus 1000', provider: 'Pragmatic Play', badge: 'new', color: '#0077b6' },
    { name: 'Viking Voyage', provider: 'Betsoft', badge: null, color: '#708090' },
    { name: 'XXXtreme Lightning Roulette', provider: 'Evolution', badge: 'hot', color: '#1a1a2e' },
    { name: 'The Hand of Midas', provider: 'Pragmatic Play', badge: null, color: '#c9b037' },
    { name: 'Big Bass Splash', provider: 'Pragmatic Play', badge: null, color: '#008080' },
    { name: 'Joker Troupe', provider: 'Push Gaming', badge: null, color: '#9b2335' },
    { name: 'Aztec Bonanza', provider: 'Pragmatic Play', badge: null, color: '#bf8b2e' },
    { name: 'Starlight Princess 1000', provider: 'Pragmatic Play', badge: 'new', color: '#e75480' },
    { name: 'Release the Kraken', provider: 'Pragmatic Play', badge: null, color: '#005f73' },
    { name: 'Wild West Duels', provider: 'Pragmatic Play', badge: null, color: '#bc6c25' },
    { name: 'Razor Returns', provider: 'Push Gaming', badge: null, color: '#3a86ff' },
    { name: 'Gonzo\'s Quest Megaways', provider: 'Red Tiger', badge: null, color: '#386641' }
  ];

  // Populate game grid
  var gameGrid = document.getElementById('gameGrid');
  if (gameGrid) {
    var selectedGames = shuffle(gamesPool).slice(0, 12);
    var playSvg = '<svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>';
    var gHtml = '';
    selectedGames.forEach(function(g) {
      var badgeHtml = '';
      if (g.badge) {
        badgeHtml = '<div class="game-tile__badge game-tile__badge--' + g.badge + '">' + g.badge + '</div>';
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
