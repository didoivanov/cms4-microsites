<?php
/**
 * Site Configuration - DaytonaSpin UK
 * Change these values per domain/brand.
 */

// ─── Brand ───────────────────────────────────────────────────────
define('SITE_NAME',       'DaytonaSpin');
define('SITE_DOMAIN',     'daytonaspin-uk.com');
define('SITE_URL',        'https://' . SITE_DOMAIN);
define('SITE_TAGLINE',    'Online Casino &amp; 8,000+ Games');
define('SITE_YEAR',       '2023');

// ─── CTA / Affiliate ────────────────────────────────────────────
define('CTA_URL',         '/play');
define('CTA_LABEL',       'Play Now');
define('CTA_SIGNUP_URL',  '/play');
define('CTA_SIGNUP_LABEL','Sign Up');

// ─── Tracking / Play Redirect ────────────────────────────────────
define('TRACKING_DOMAIN', 'https://playzzz.app');
define('TRACKING_REF',    'daytonaspin-uk');

// ─── SEO ─────────────────────────────────────────────────────────
define('META_TITLE_SUFFIX', ' - ' . SITE_NAME . ' Casino');
define('META_OG_TYPE',      'website');

// ─── Bonus Info (used in headers, sticky CTA, etc.) ──────────────
define('WELCOME_BONUS',     '100% up to &pound;700 + 50 Free Spins');
define('WELCOME_BONUS_TEXT','100% up to £700 + 50 Free Spins');

// ─── Theme Colors (CSS variables override) ───────────────────────
// Dark theme: black background, pink-to-orange gradient accents
$THEME = [
    'color-bg'          => '#0d0d0d',
    'color-surface'     => '#1a1a1a',
    'color-surface-alt' => '#222222',
    'color-surface-2'   => '#222222',
    'color-border'      => '#333333',
    'color-text'        => '#f0f0f0',
    'color-text-muted'  => '#a0a0a0',
    'color-text-faint'  => '#666666',
    'color-accent'      => '#ff0daf',
    'color-accent-hover'=> '#ff3dc0',
    'color-accent-dark' => '#cc0a8c',
    'color-cta'         => '#ff0daf',
    'color-cta-hover'   => '#ff3dc0',
    'color-cta-text'    => '#ffffff',
    'color-hero-gradient-start' => '#0d0d0d',
    'color-hero-gradient-end'   => '#1a1a1a',
];

// ─── Languages ───────────────────────────────────────────────────
// Single language: English (UK)
$LANGUAGES = [
    'en' => ['English', 'English', true, "\xF0\x9F\x87\xAC\xF0\x9F\x87\xA7"],
];

// Current language (always English for this site)
$CURRENT_LANG = 'en';

// ─── Navigation ──────────────────────────────────────────────────
$NAV_ITEMS = [
    ['url' => '/bonuses',    'label' => 'Bonuses',    'page' => 'bonuses'],
    ['url' => '/withdrawal', 'label' => 'Withdrawal', 'page' => 'withdrawal'],
    ['url' => '/support',    'label' => 'Support',    'page' => 'support'],
];

// ─── Payment Methods ─────────────────────────────────────────────
$PAYMENT_METHODS = [
    'Visa', 'Mastercard', 'Skrill', 'Apple Pay', 'Google Pay',
    'Revolut', 'Bank Transfer', 'Bitcoin', 'Ethereum', 'Tether',
    'Litecoin', 'Dogecoin', 'Tron'
];

// ─── Casino Stats ────────────────────────────────────────────────
$STATS = [
    ['value' => '8,000+', 'label' => 'Games'],
    ['value' => '136+',   'label' => 'Providers'],
    ['value' => '&pound;700', 'label' => 'Welcome Bonus'],
    ['value' => '24/7',   'label' => 'Live Support'],
];

// ─── Providers ───────────────────────────────────────────────────
$PROVIDERS = [
    "Play'n GO", 'Pragmatic Play', 'Yggdrasil', 'BGaming', 'Hacksaw Gaming',
    'Quickspin', 'Novomatic', 'Red Tiger', 'Playson', 'PG Soft',
    'Betsoft', 'Endorphina', 'Tom Horn', 'Swintt', '3 Oaks Gaming',
    'Boongo', 'Gamomat', 'Ezugi', 'Belatra', 'Caleta',
    'Amatic', 'Fantasma', 'Fazi', 'Mancala', 'Spribe'
];
