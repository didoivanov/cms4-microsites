<?php
/**
 * Site Configuration - WestAce
 * Change these values per domain/brand.
 */

// ─── Brand ───────────────────────────────────────────────────────
define('SITE_NAME',       'WestAce');
define('SITE_NAME_SHORT', 'WestAce');
define('DOMAIN',          'westace.site');
define('SITE_DOMAIN',     'westace.site');
define('SITE_URL',        'https://' . SITE_DOMAIN);
define('SITE_TAGLINE',    'Online Casino, Sportsbook &amp; 7,000+ Games');
define('SITE_YEAR',       '2026');

// ─── CTA / Affiliate ────────────────────────────────────────────
define('CTA_URL',         '/play');
define('CTA_LABEL',       'Play Now');
define('CTA_SIGNUP_URL',  '/play');
define('CTA_SIGNUP_LABEL','Sign Up');

// ─── Tracking / Play Redirect ────────────────────────────────────
define('TRACKING_DOMAIN', 'https://playzzz.app');
define('TRACKING_REF',    'westace');

// ─── SEO ─────────────────────────────────────────────────────────
define('META_TITLE_SUFFIX', ' - ' . SITE_NAME . ' Casino');
define('META_OG_TYPE',      'website');

// ─── Bonus Info (used in headers, sticky CTA, etc.) ──────────────
define('WELCOME_BONUS',     '100% up to &euro;1,000 + 50 Free Spins');
define('WELCOME_BONUS_TEXT','100% up to €1,000 + 50 Free Spins');

// ─── Theme Colors (CSS variables override) ───────────────────────
// Dark brown theme: warm amber tones with gold accents
$THEME = [
    'color-bg'          => '#14100b',
    'color-surface'     => '#1e150e',
    'color-surface-alt' => '#261b12',
    'color-surface-2'   => '#261b12',
    'color-border'      => '#3d2a1a',
    'color-text'        => '#f5f0e8',
    'color-text-muted'  => '#b8a898',
    'color-text-faint'  => '#6b5a4a',
    'color-accent'      => '#d4a017',
    'color-accent-hover'=> '#e8b730',
    'color-accent-dark' => '#b8880f',
    'color-cta'         => '#1db954',
    'color-cta-hover'   => '#22c55e',
    'color-cta-text'    => '#ffffff',
    'color-hero-gradient-start' => '#14100b',
    'color-hero-gradient-end'   => '#1e150e',
];

// ─── Languages ───────────────────────────────────────────────────
// Format: [label, native_name, active, flag_emoji, lang_code]
// lang_code (index 4) overrides the array key for html lang="" and hreflang=""
// If omitted, the array key is used as the lang code
$LANGUAGES = [
    'en' => ['English',      'English',      true,  "\xF0\x9F\x87\xAC\xF0\x9F\x87\xA7", 'en'],
    'nl' => ['Nederlands',   'Nederlands',   true,  "\xF0\x9F\x87\xB3\xF0\x9F\x87\xB1", 'nl'],
    'fr' => ['Français',     'Français',     true,  "\xF0\x9F\x87\xAB\xF0\x9F\x87\xB7", 'fr'],
    'it' => ['Italiano',     'Italiano',     true,  "\xF0\x9F\x87\xAE\xF0\x9F\x87\xB9", 'it'],
    'uk' => ['English (UK)', 'English (UK)', true,  "\xF0\x9F\x87\xAC\xF0\x9F\x87\xA7", 'en-GB'],
    'el' => ['Ελληνικά',     'Ελληνικά',     true,  "\xF0\x9F\x87\xAC\xF0\x9F\x87\xB7", 'el'],
    'pl' => ['Polski',        'Polski',        true,  "\xF0\x9F\x87\xB5\xF0\x9F\x87\xB1", 'pl'],
    'de' => ['Deutsch',       'Deutsch',       true,  "\xF0\x9F\x87\xA9\xF0\x9F\x87\xAA", 'de'],
    'pt' => ['Português',     'Português',     true,  "\xF0\x9F\x87\xB5\xF0\x9F\x87\xB9", 'pt'],
    'es' => ['Español',       'Español',       true,  "\xF0\x9F\x87\xAA\xF0\x9F\x87\xB8", 'es'],
    'hu' => ['Magyar',        'Magyar',        true,  "\xF0\x9F\x87\xAD\xF0\x9F\x87\xBA", 'hu'],
    'cs' => ['Čeština',      'Čeština',      true,  "\xF0\x9F\x87\xA8\xF0\x9F\x87\xBF", 'cs'],
    'au' => ['English (AU)', 'English (AU)', true,  "\xF0\x9F\x87\xA6\xF0\x9F\x87\xBA", 'en-AU'],
    'ca' => ['English (CA)', 'English (CA)', true,  "\xF0\x9F\x87\xA8\xF0\x9F\x87\xA6", 'en-CA'],
];

// Current language (set by router)
$CURRENT_LANG = 'en';

// ─── Navigation ──────────────────────────────────────────────────
$NAV_ITEMS = [
    ['url' => '/bonuses',    'label' => 'Bonuses',    'page' => 'bonuses'],
    ['url' => '/withdrawal', 'label' => 'Withdrawal', 'page' => 'withdrawal'],
    ['url' => '/sports',     'label' => 'Sports',     'page' => 'sports'],
    ['url' => '/support',    'label' => 'Support',    'page' => 'support'],
];

// ─── Payment Methods ─────────────────────────────────────────────
$PAYMENT_METHODS = [
    'Mastercard', 'Paysafecard', 'Skrill', 'Neteller', 'Bank Transfer',
    'Bitcoin', 'Ethereum', 'Tether', 'Litecoin', 'Ripple',
    'USD Coin', 'Bitcoin Cash', 'Dogecoin', 'Cardano'
];

// ─── Casino Stats ────────────────────────────────────────────────
$STATS = [
    ['value' => '7,000+', 'label' => 'Games'],
    ['value' => '100+',   'label' => 'Providers'],
    ['value' => '&euro;1,000', 'label' => 'Welcome Bonus'],
    ['value' => '24/7',   'label' => 'Live Support'],
];

// ─── Providers ───────────────────────────────────────────────────
$PROVIDERS = [
    'Pragmatic Play', 'Playtech', 'Novomatic', 'Red Tiger', 'Yggdrasil',
    'BGaming', 'Hacksaw Gaming', 'Quickspin', 'Betsoft', 'Endorphina',
    "Play'n GO", 'Playson', 'PG Soft', '3 Oaks Gaming', 'Boongo',
    'Gamomat', 'Ezugi', 'Belatra', 'Caleta', 'Amatic',
    'Fantasma', 'Fazi', 'Mancala', 'Spribe', 'Tom Horn'
];
