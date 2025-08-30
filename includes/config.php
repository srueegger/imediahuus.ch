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
    'Fr: 10:00-13:00',
    '      15:00-19:00',
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

// SEO Meta Descriptions
define('PAGE_DESCRIPTIONS', [
    'home' => '20 Jahre Erfahrung in Basel: Professionelle Handy-Reparaturen, fairer Ankauf & Verkauf. iPhone, Samsung, Huawei - alle Marken. Schnell, günstig, mit Garantie.',
    'reparaturen' => 'Handy kaputt? Display, Akku, Wasserschaden - wir reparieren alle Marken in Basel. Schnell, günstig, 6 Monate Garantie. iPhone, Samsung, Huawei & mehr.',
    'ankauf-verkauf' => 'Handy verkaufen oder kaufen in Basel: Faire Preise für Ihr altes Gerät. Grosse Auswahl geprüfter Gebrauchthandys mit Garantie. Alle Marken verfügbar.'
]);

// SEO Keywords
define('PAGE_KEYWORDS', [
    'home' => 'iMediahuus, Basel, Handy Reparatur, Smartphone Reparatur, iPhone Reparatur, Samsung Reparatur, Handy Ankauf, Handy Verkauf, Güterstrasse',
    'reparaturen' => 'Handy Reparatur Basel, Display Reparatur, Akku Wechsel, Wasserschaden, iPhone Reparatur, Samsung Reparatur, Smartphone Service, Güterstrasse Basel',
    'ankauf-verkauf' => 'Handy Ankauf Basel, Handy Verkauf Basel, Gebrauchte Handys, iPhone kaufen, Samsung kaufen, Smartphone Ankauf, faire Preise, Garantie'
]);
?>