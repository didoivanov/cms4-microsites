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
  // WINNERS DATA POOL (155 entries)
  // UK-sounding names, shuffled on every page load, 8 shown at a time
  // ================================================================
  var winnersPool = [
    { name: 'James W.', game: 'Sweet Bonanza', amount: 3420 },
    { name: 'Sophie T.', game: 'Gates of Olympus', amount: 187 },
    { name: 'Oliver B.', game: 'Book of Dead', amount: 8750 },
    { name: 'Charlotte M.', game: 'Crazy Time', amount: 42 },
    { name: 'Harry P.', game: 'Lightning Roulette', amount: 1290 },
    { name: 'Emily R.', game: 'Big Bass Bonanza', amount: 560 },
    { name: 'George K.', game: 'Starburst', amount: 95 },
    { name: 'Amelia L.', game: 'Reactoonz', amount: 2100 },
    { name: 'Jack D.', game: 'Dead or Alive 2', amount: 6340 },
    { name: 'Isla F.', game: 'Sugar Rush', amount: 28 },
    { name: 'Thomas H.', game: 'Mega Wheel', amount: 410 },
    { name: 'Mia C.', game: 'Turbo Plinko', amount: 73 },
    { name: 'William S.', game: 'Sweet Bonanza', amount: 1850 },
    { name: 'Grace N.', game: 'Gonzo\'s Quest', amount: 320 },
    { name: 'Henry A.', game: 'Book of Ra', amount: 15 },
    { name: 'Poppy E.', game: 'Wolf Gold', amount: 4670 },
    { name: 'Daniel J.', game: 'Crazy Time', amount: 890 },
    { name: 'Lily G.', game: 'The Dog House', amount: 165 },
    { name: 'Samuel V.', game: 'Jammin\x27 Jars', amount: 52 },
    { name: 'Evie B.', game: 'Razor Shark', amount: 7200 },
    { name: 'Charlie R.', game: 'Fire Joker', amount: 38 },
    { name: 'Rosie W.', game: 'Monopoly Live', amount: 1540 },
    { name: 'Oscar T.', game: 'Immortal Romance', amount: 430 },
    { name: 'Freya M.', game: 'Gates of Olympus', amount: 9100 },
    { name: 'Alfie P.', game: 'Lightning Roulette', amount: 260 },
    { name: 'Isabella K.', game: 'Sweet Bonanza Xmas', amount: 82 },
    { name: 'Leo D.', game: 'Fruit Party', amount: 3050 },
    { name: 'Daisy H.', game: 'Blackjack VIP', amount: 1200 },
    { name: 'Archie C.', game: 'Mega Moolah', amount: 14500 },
    { name: 'Ruby F.', game: 'European Roulette', amount: 175 },
    { name: 'Freddie L.', game: 'Starburst XXXtreme', amount: 620 },
    { name: 'Sienna S.', game: 'Big Bass Splash', amount: 47 },
    { name: 'Noah A.', game: 'Wanted Dead or a Wild', amount: 5800 },
    { name: 'Ella N.', game: 'Aviator', amount: 340 },
    { name: 'Ethan G.', game: 'Dream Catcher', amount: 93 },
    { name: 'Florence J.', game: 'Buffalo King', amount: 2450 },
    { name: 'Theo E.', game: 'Cash or Crash', amount: 710 },
    { name: 'Matilda V.', game: 'Eye of Horus', amount: 18 },
    { name: 'Liam B.', game: 'Gonzo\'s Quest', amount: 1380 },
    { name: 'Willow R.', game: 'Hot Fiesta', amount: 56 },
    { name: 'Jacob W.', game: 'Book of Dead', amount: 4200 },
    { name: 'Phoebe T.', game: 'XXXtreme Lightning Roulette', amount: 890 },
    { name: 'Lucas M.', game: 'Starlight Princess', amount: 135 },
    { name: 'Harper P.', game: 'Gates of Olympus 1000', amount: 7650 },
    { name: 'Max K.', game: 'Blackjack Classic', amount: 300 },
    { name: 'Alice D.', game: 'Release the Kraken', amount: 67 },
    { name: 'Logan H.', game: 'Crazy Time', amount: 2780 },
    { name: 'Ivy C.', game: 'Wild West Gold', amount: 490 },
    { name: 'Finley F.', game: 'Baccarat Lobby', amount: 1050 },
    { name: 'Scarlett L.', game: 'Floating Dragon', amount: 22 },
    { name: 'Harrison S.', game: 'Starburst', amount: 3690 },
    { name: 'Elsie A.', game: 'Madame Destiny', amount: 210 },
    { name: 'Adam N.', game: 'Lightning Blackjack', amount: 780 },
    { name: 'Millie G.', game: 'John Hunter', amount: 44 },
    { name: 'Ryan J.', game: 'Sweet Bonanza', amount: 5400 },
    { name: 'Maisie E.', game: 'Plinko', amount: 155 },
    { name: 'Ben V.', game: 'Fruit Party 2', amount: 920 },
    { name: 'Layla B.', game: 'The Hand of Midas', amount: 31 },
    { name: 'Nathan R.', game: 'Book of Fallen', amount: 2350 },
    { name: 'Erin W.', game: 'Roulette Live', amount: 680 },
    { name: 'Alexander T.', game: 'Gems Bonanza', amount: 1700 },
    { name: 'Thea M.', game: 'Power of Thor', amount: 59 },
    { name: 'Callum P.', game: 'Dead or Alive 2', amount: 8400 },
    { name: 'Aria K.', game: 'Big Bamboo', amount: 365 },
    { name: 'Dylan D.', game: 'Monopoly Big Baller', amount: 120 },
    { name: 'Imogen H.', game: 'Fire in the Hole', amount: 4900 },
    { name: 'Lewis C.', game: 'European Roulette', amount: 75 },
    { name: 'Hannah F.', game: 'Sugar Rush 1000', amount: 1480 },
    { name: 'Connor L.', game: 'Cash or Crash', amount: 540 },
    { name: 'Martha S.', game: 'Wanted Dead or a Wild', amount: 11200 },
    { name: 'Tyler A.', game: 'Razor Returns', amount: 290 },
    { name: 'Chloe N.', game: 'Mega Wheel', amount: 88 },
    { name: 'Joshua G.', game: 'Gates of Olympus', amount: 3100 },
    { name: 'Abigail J.', game: 'Wild West Duels', amount: 195 },
    { name: 'Sam E.', game: 'Blackjack Party', amount: 650 },
    { name: 'Ellie V.', game: 'Extra Chilli', amount: 35 },
    { name: 'Jake B.', game: 'Sweet Bonanza', amount: 6700 },
    { name: 'Jasmine R.', game: 'Pragmatic Drops & Wins', amount: 440 },
    { name: 'Toby W.', game: 'Lightning Roulette', amount: 1100 },
    { name: 'Lucy T.', game: 'Joker Troupe', amount: 160 },
    { name: 'Matthew M.', game: 'Book of Dead', amount: 2900 },
    { name: 'Bethany P.', game: 'Multi Hand Blackjack', amount: 380 },
    { name: 'Aiden K.', game: 'Viking Voyage', amount: 63 },
    { name: 'Olivia D.', game: 'Crazy Time', amount: 7800 },
    { name: 'Harvey H.', game: 'Rise of Olympus', amount: 510 },
    { name: 'Molly C.', game: 'Aztec Bonanza', amount: 24 },
    { name: 'Kai F.', game: 'Reactoonz 2', amount: 1950 },
    { name: 'Paige L.', game: 'Speed Baccarat', amount: 830 },
    { name: 'Edward S.', game: 'Big Bass Bonanza', amount: 275 },
    { name: 'Summer A.', game: 'Mental', amount: 4350 },
    { name: 'Joseph N.', game: 'Dream Catcher', amount: 105 },
    { name: 'Esme G.', game: 'Gonzo\'s Quest Megaways', amount: 1620 },
    { name: 'Isaac J.', game: 'Eye of Horus Megaways', amount: 47 },
    { name: 'Darcy E.', game: 'Gates of Olympus', amount: 5250 },
    { name: 'Owen V.', game: 'Fire Joker', amount: 190 },
    { name: 'Penelope B.', game: 'Wild West Gold Megaways', amount: 730 },
    { name: 'Luke R.', game: 'Starburst', amount: 33 },
    { name: 'Violet W.', game: 'Book of Ra Deluxe', amount: 2680 },
    { name: 'Sebastian T.', game: 'Lightning Roulette', amount: 460 },
    { name: 'Katie M.', game: 'Sweet Bonanza', amount: 86 },
    { name: 'Reuben P.', game: 'The Dog House Megaways', amount: 3850 },
    { name: 'Harriet K.', game: 'European Roulette', amount: 570 },
    { name: 'Brandon D.', game: 'Immortal Romance', amount: 1350 },
    { name: 'Clara H.', game: 'Aviator', amount: 225 },
    { name: 'Elliot C.', game: 'Dead or Alive 2', amount: 9500 },
    { name: 'Amber F.', game: 'Floating Dragon Hold & Spin', amount: 48 },
    { name: 'Dominic L.', game: 'Mega Moolah', amount: 16700 },
    { name: 'Gracie S.', game: 'Turbo Plinko', amount: 310 },
    { name: 'Cameron A.', game: 'Crazy Time', amount: 1780 },
    { name: 'Nina N.', game: 'Buffalo King Megaways', amount: 640 },
    { name: 'Aaron G.', game: 'Book of Dead', amount: 55 },
    { name: 'Eva J.', game: 'Sweet Bonanza', amount: 4100 },
    { name: 'Kieran E.', game: 'Cash or Crash', amount: 145 },
    { name: 'Zara V.', game: 'Razor Shark', amount: 2550 },
    { name: 'Declan B.', game: 'Monopoly Live', amount: 920 },
    { name: 'Faith R.', game: 'Lightning Blackjack', amount: 385 },
    { name: 'Scott W.', game: 'Extra Chilli', amount: 71 },
    { name: 'Orla T.', game: 'Gates of Olympus 1000', amount: 6100 },
    { name: 'Patrick M.', game: 'Starlight Princess 1000', amount: 250 },
    { name: 'Naomi P.', game: 'Fruit Party', amount: 1060 },
    { name: 'Caleb K.', game: 'Baccarat Squeeze', amount: 490 },
    { name: 'Holly D.', game: 'Gems Bonanza', amount: 29 },
    { name: 'Marcus H.', game: 'Wanted Dead or a Wild', amount: 7350 },
    { name: 'Emilia C.', game: 'Power of Thor Megaways', amount: 170 },
    { name: 'Ross F.', game: 'Big Bass Splash', amount: 840 },
    { name: 'Georgia L.', game: 'Roulette Live', amount: 1430 },
    { name: 'Rhys S.', game: 'Sweet Bonanza Xmas', amount: 355 },
    { name: 'Fiona A.', game: 'Fire in the Hole', amount: 5600 },
    { name: 'Craig N.', game: 'Plinko', amount: 112 },
    { name: 'Rachel G.', game: 'European Roulette', amount: 2200 },
    { name: 'Luca J.', game: 'Sugar Rush', amount: 78 },
    { name: 'Megan E.', game: 'Book of Fallen', amount: 3280 },
    { name: 'Fraser V.', game: 'Crazy Time', amount: 445 },
    { name: 'Lauren B.', game: 'Lightning Roulette', amount: 1870 },
    { name: 'Joel R.', game: 'Starburst XXXtreme', amount: 590 },
    { name: 'Beth W.', game: 'Dead or Alive 2', amount: 12300 },
    { name: 'Gareth T.', game: 'Mega Wheel', amount: 205 },
    { name: 'Tilly M.', game: 'Wolf Gold', amount: 3750 },
    { name: 'Ewan P.', game: 'Blackjack VIP', amount: 950 },
    { name: 'Sadie K.', game: 'Big Bamboo', amount: 130 },
    { name: 'Stuart D.', game: 'Gonzo\'s Quest', amount: 1580 },
    { name: 'Leah H.', game: 'Rise of Olympus', amount: 68 },
    { name: 'Angus C.', game: 'Hot Fiesta', amount: 2970 },
    { name: 'Robyn F.', game: 'Dream Catcher', amount: 415 },
    { name: 'Hamish L.', game: 'The Hand of Midas', amount: 740 },
    { name: 'Tessa S.', game: 'Sweet Bonanza', amount: 19 },
    { name: 'Murray A.', game: 'Reactoonz 2', amount: 4680 },
    { name: 'Niamh N.', game: 'Speed Baccarat', amount: 285 },
    { name: 'Callum G.', game: 'Gold Rush with Johnny Cash', amount: 1740 },
    { name: 'Brooke J.', game: 'Burning Chilli X', amount: 520 },
    { name: 'Iain E.', game: 'Le Bandit', amount: 3100 },
    { name: 'Skye V.', game: 'Sakura Fortune', amount: 680 },
    { name: 'Keith B.', game: 'Gravity Roulette', amount: 2350 }
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

  // Currency config (injected by PHP in footer, falls back to GBP)
  var cur = window.CASINO_CURRENCY || { symbol: '\u00A3', suffix: '', multiplier: 1, locale: 'en-GB', jackpotBase: 1847391 };

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
  // GAMES DATA POOL (65 entries)
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
    { name: 'Turbo Plinko', provider: 'Hacksaw Gaming', badge: null, color: '#00cec9' },
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
    { name: 'Jammin\x27 Jars', provider: 'Push Gaming', badge: null, color: '#9932cc' },
    { name: 'Dream Catcher', provider: 'Evolution', badge: null, color: '#8fbc8f' },
    { name: 'Mega Moolah', provider: 'Microgaming', badge: 'jackpot', color: '#ffd700' },
    { name: 'Wild West Gold', provider: 'Pragmatic Play', badge: null, color: '#d2691e' },
    { name: 'Wanted Dead or a Wild', provider: 'Hacksaw Gaming', badge: 'hot', color: '#8b4513' },
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
    { name: 'Gonzo\'s Quest Megaways', provider: 'Red Tiger', badge: null, color: '#386641' },
    { name: 'Burning Chilli X', provider: 'BGaming', badge: 'hot', color: '#c0392b' },
    { name: 'Gold Rush with Johnny Cash', provider: 'BGaming', badge: 'new', color: '#d4a017' },
    { name: 'Gravity Roulette', provider: 'Evolution', badge: null, color: '#34495e' },
    { name: 'Le Bandit', provider: 'Hacksaw Gaming', badge: null, color: '#2c3e50' },
    { name: 'Sakura Fortune', provider: 'Quickspin', badge: null, color: '#e91e63' }
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
