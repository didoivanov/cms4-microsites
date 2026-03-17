<?php
/**
 * Site Configuration - VipLuck Casino
 * Change these values per domain/brand.
 */

// ─── Brand ───────────────────────────────────────────────────────
define('SITE_NAME',       'VipLuck');
define('SITE_DOMAIN',     'vipluck.onl');
define('SITE_URL',        'https://' . SITE_DOMAIN);
define('SITE_TAGLINE',    'Online Casino, Sports Betting & 8,000+ Games');
define('SITE_YEAR',       '2025');

// ─── CTA / Affiliate ────────────────────────────────────────────
define('CTA_URL',         '/play');
define('CTA_LABEL',       'Play Now');
define('CTA_SIGNUP_URL',  '/play');
define('CTA_SIGNUP_LABEL','Sign Up');

// ─── Tracking / Play Redirect ────────────────────────────────────
// /play/ redirects to TRACKING_DOMAIN with ref parameter
define('TRACKING_DOMAIN', 'https://playzzz.app');
define('TRACKING_REF',    'vipluck');

// ─── SEO ─────────────────────────────────────────────────────────
define('META_TITLE_SUFFIX', ' - ' . SITE_NAME . ' Casino');
define('META_OG_TYPE',      'website');

// ─── Bonus Info (used in headers, sticky CTA, etc.) ──────────────
define('WELCOME_BONUS',     '100% up to &euro;2,000 + 300 Free Spins');
define('WELCOME_BONUS_TEXT','100% up to EUR 2,000 + 300 Free Spins');

// ─── Theme Colors (CSS variables override) ───────────────────────
// Light luxury theme: cream/beige background, deep navy text, muted gold accents
$THEME = [
    'color-bg'          => '#f5f0e8',
    'color-surface'     => '#ece5d8',
    'color-surface-alt' => '#e8e0d0',
    'color-surface-2'   => '#e8e0d0',
    'color-border'      => '#d4cab8',
    'color-text'        => '#1a2340',
    'color-text-muted'  => '#5a6478',
    'color-text-faint'  => '#8a94a6',
    'color-accent'      => '#b8963e',
    'color-accent-hover'=> '#c9a64e',
    'color-accent-dark' => '#9a7d34',
    'color-cta'         => '#b8963e',
    'color-cta-hover'   => '#c9a64e',
    'color-cta-text'    => '#ffffff',
    'color-hero-gradient-start' => '#1a2340',
    'color-hero-gradient-end'   => '#2a3558',
];

// ─── Languages ───────────────────────────────────────────────────
// code => [label, native_name, active, flag_emoji]
$LANGUAGES = [
    'en' => ['English',    'English',    true,  "\xF0\x9F\x87\xAC\xF0\x9F\x87\xA7"],
    'de' => ['Deutsch',    'Deutsch',    true,  "\xF0\x9F\x87\xA9\xF0\x9F\x87\xAA"],
    'no' => ['Norsk',      'Norsk',      false, "\xF0\x9F\x87\xB3\xF0\x9F\x87\xB4"],
    'fr' => ['Français',   'Français',   true,  "\xF0\x9F\x87\xAB\xF0\x9F\x87\xB7"],
    'it' => ['Italiano',   'Italiano',   true,  "\xF0\x9F\x87\xAE\xF0\x9F\x87\xB9"],
    'es' => ['Español',    'Español',    false, "\xF0\x9F\x87\xAA\xF0\x9F\x87\xB8"],
    'pt' => ['Português',  'Português',  false, "\xF0\x9F\x87\xB5\xF0\x9F\x87\xB9"],
    'el' => ['Greek',      'Ελληνικά',   false, "\xF0\x9F\x87\xAC\xF0\x9F\x87\xB7"],
    'pl' => ['Polski',     'Polski',     true,  "\xF0\x9F\x87\xB5\xF0\x9F\x87\xB1"],
    'hu' => ['Magyar',     'Magyar',     false, "\xF0\x9F\x87\xAD\xF0\x9F\x87\xBA"],
    'fi' => ['Suomi',      'Suomi',      false, "\xF0\x9F\x87\xAB\xF0\x9F\x87\xAE"],
    'cs' => ['Čeština',    'Čeština',    false, "\xF0\x9F\x87\xA8\xF0\x9F\x87\xBF"],
    'ar' => ['العربية',    'العربية',    false, "\xF0\x9F\x87\xB8\xF0\x9F\x87\xA6"],
];

// Detect current language from URL or default
$CURRENT_LANG = 'en';
if (isset($_GET['lang']) && array_key_exists($_GET['lang'], $LANGUAGES)) {
    $CURRENT_LANG = $_GET['lang'];
}

// ─── Navigation ──────────────────────────────────────────────────
$NAV_ITEMS = [
    ['url' => '/bonuses',    'label' => 'Bonuses',    'page' => 'bonuses'],
    ['url' => '/withdrawal', 'label' => 'Withdrawal', 'page' => 'withdrawal'],
    ['url' => '/support',    'label' => 'Support',    'page' => 'support'],
];

// ─── Payment Methods ─────────────────────────────────────────────
$PAYMENT_METHODS = [
    'Visa', 'Mastercard', 'Bank Transfer', 'Skrill', 'Neteller',
    'Jeton', 'MiFinity', 'eZeeWallet', 'Google Pay', 'Flexepin',
    'Paysafecard', 'Bitcoin', 'Ethereum', 'Tether', 'Ripple',
    'USD Coin', 'ADA', 'Dogecoin', 'Litecoin', 'Bitcoin Cash', 'Solana'
];

// ─── Casino Stats ────────────────────────────────────────────────
$STATS = [
    ['value' => '8,000+', 'label' => 'Games'],
    ['value' => '103+',   'label' => 'Providers'],
    ['value' => '&euro;2,000','label' => 'Welcome Bonus'],
    ['value' => '24/7',    'label' => 'Live Support'],
];

// ─── Providers ───────────────────────────────────────────────────
$PROVIDERS = [
    "Play'n GO", 'Playtech', 'Betsoft', 'BGaming', 'Endorphina',
    'Novomatic', 'Wazdan', 'Push Gaming', 'Hacksaw Gaming', 'Yggdrasil',
    'Big Time Gaming', 'Spribe', 'Pragmatic Play', 'Evoplay', 'Thunderkick',
    'Spinomenal', '3 Oaks Gaming', 'Playson', 'Booming Games', 'Swintt',
    'KA Gaming', 'Tom Horn', 'Gaming Corps', 'Kalamba'
];
