<?php
/**
 * Site Configuration
 * Change these values per domain/brand.
 */

// ─── Brand ───────────────────────────────────────────────────────
define('SITE_NAME',       'Casea');
define('SITE_DOMAIN',     'casea.site');
define('SITE_URL',        'https://' . SITE_DOMAIN);
define('SITE_TAGLINE',    'Online Casino, Sports Betting & 10,000+ Games');
define('SITE_YEAR',       '2026');

// ─── CTA / Affiliate ────────────────────────────────────────────
define('CTA_URL',         '/play');
define('CTA_LABEL',       'Play Now');
define('CTA_SIGNUP_URL',  '/play');
define('CTA_SIGNUP_LABEL','Sign Up');

// ─── Tracking / Play Redirect ────────────────────────────────────
// /play/ redirects to TRACKING_DOMAIN with ref parameter
define('TRACKING_DOMAIN', 'https://playzzz.app');
define('TRACKING_REF',    'casea');

// ─── SEO ─────────────────────────────────────────────────────────
define('META_TITLE_SUFFIX', ' - ' . SITE_NAME . ' Casino');
define('META_OG_TYPE',      'website');

// ─── Bonus Info (used in headers, sticky CTA, etc.) ──────────────
define('WELCOME_BONUS',     '100% up to &euro;500 + 200 Free Spins');
define('WELCOME_BONUS_TEXT','100% up to EUR 500 + 200 Free Spins');

// ─── Theme Colors (CSS variables override) ───────────────────────
// These get injected into :root so you can reskin per domain
$THEME = [
    'color-bg'          => '#0a0e1a',
    'color-surface'     => '#111827',
    'color-surface-alt' => '#0d1322',
    'color-border'      => '#1e293b',
    'color-text'        => '#e2e8f0',
    'color-text-muted'  => '#94a3b8',
    'color-accent'      => '#d4af37',
    'color-accent-hover'=> '#e5c54b',
    'color-cta-text'    => '#0a0e1a',
    'color-hero-glow'   => '#d4af3715',
];

// ─── Languages ───────────────────────────────────────────────────
// code => [label, native_name, active, flag_emoji]
$LANGUAGES = [
    'en' => ['English',    'English',    true,  "\xF0\x9F\x87\xAC\xF0\x9F\x87\xA7"],
    'de' => ['Deutsch',    'Deutsch',    true,  "\xF0\x9F\x87\xA9\xF0\x9F\x87\xAA"],
    'el' => ['Greek',      'Ελληνικά',   true,  "\xF0\x9F\x87\xAC\xF0\x9F\x87\xB7"],
    'pl' => ['Polski',     'Polski',     true,  "\xF0\x9F\x87\xB5\xF0\x9F\x87\xB1"],
    'it' => ['Italiano',   'Italiano',   true,  "\xF0\x9F\x87\xAE\xF0\x9F\x87\xB9"],
    'fr' => ['Français',   'Français',   true,  "\xF0\x9F\x87\xAB\xF0\x9F\x87\xB7"],
    'es' => ['Español',    'Español',    true,  "\xF0\x9F\x87\xAA\xF0\x9F\x87\xB8"],
    'hu' => ['Magyar',     'Magyar',     true,  "\xF0\x9F\x87\xAD\xF0\x9F\x87\xBA"],
    'fi' => ['Suomi',      'Suomi',      false, "\xF0\x9F\x87\xAB\xF0\x9F\x87\xAE"],
    'no' => ['Norsk',      'Norsk',      false, "\xF0\x9F\x87\xB3\xF0\x9F\x87\xB4"],
    'cs' => ['Čeština',    'Čeština',    false, "\xF0\x9F\x87\xA8\xF0\x9F\x87\xBF"],
    'pt' => ['Português',  'Português',  false, "\xF0\x9F\x87\xB5\xF0\x9F\x87\xB9"],
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
    'Visa', 'Mastercard', 'Skrill', 'Neteller', 'Paysafecard',
    'Interac', 'Revolut', 'eVoucher', 'CashToCode',
    'Bitcoin', 'Ethereum', 'Litecoin', 'Tether', 'Ripple',
    'USD Coin', 'Dogecoin', 'Cardano'
];

// ─── Casino Stats ────────────────────────────────────────────────
$STATS = [
    ['value' => '10,000+', 'label' => 'Games'],
    ['value' => '90+',     'label' => 'Providers'],
    ['value' => '&euro;500','label' => 'Welcome Bonus'],
    ['value' => '24/7',    'label' => 'Live Support'],
];

// ─── Providers ───────────────────────────────────────────────────
$PROVIDERS = [
    'Pragmatic Play', 'Evolution', 'Microgaming', 'Novomatic', 'Playtech',
    'NetEnt', 'Yggdrasil', 'Red Tiger', 'Quickspin', 'Betsoft',
    'Thunderkick', 'Hacksaw', 'Nolimit City', "Play'n GO", 'Wazdan',
    'ELK', 'Big Time Gaming', 'Endorphina', 'Iron Dog', 'Playson',
    'Booming Games', 'Evoplay', 'Spinomenal'
];
