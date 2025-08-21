<?php
/**
 * Configuration file for iMediahuus website
 */

// Site configuration
define('SITE_TITLE', 'iMediahuus Basel');
define('SITE_DESCRIPTION', '20 Jahre Vertrauen & Service');
define('SITE_SLOGAN', 'einfach anders denken');

// Contact information
define('CONTACT_ADDRESS', 'Güterstrasse 249<br>4053 Basel');
define('CONTACT_PHONE', '061 554 16 00');
define('CONTACT_EMAIL', 'info@imediahuus.ch');

// Opening hours
define('OPENING_HOURS', [
    'Mo-Do: 10:00-19:00',
    'Fr: 10:00-12:00',
    '      14:00-19:00',
    'Sa: 10:00-18:00',
    'So: Geschlossen'
]);

// Navigation items
define('NAVIGATION', [
    'home' => ['title' => 'Startseite', 'url' => '/'],
    'reparaturen' => ['title' => 'Reparaturen', 'url' => '/reparaturen'],
    'ankauf-verkauf' => ['title' => 'An- & Verkauf', 'url' => '/ankauf-verkauf']
]);

// Page titles
define('PAGE_TITLES', [
    'home' => SITE_TITLE . ' - 20 Jahre Vertrauen & Service',
    'reparaturen' => SITE_TITLE . ' - Handy Reparaturen Basel - Schnell & Günstig',
    'ankauf-verkauf' => SITE_TITLE . ' - Handy Ankauf & Verkauf Basel - Faire Preise'
]);
?>