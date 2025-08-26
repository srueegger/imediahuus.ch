<?php
/**
 * Helper functions for the iMediahuus website
 */

/**
 * Get the page title based on current page
 */
function getPageTitle($page) {
    return PAGE_TITLES[$page] ?? SITE_TITLE;
}

/**
 * Check if current page is active for navigation
 */
function isActivePage($page, $current_page) {
    return $page === $current_page ? 'active' : '';
}

/**
 * Generate navigation URL
 */
function getNavUrl($page) {
    if ($page === 'home') {
        return './';
    }
    return './' . $page;
}

/**
 * Include a page template
 */
function includePage($page) {
    $file = "pages/{$page}.php";
    if (file_exists($file)) {
        include $file;
    } else {
        include 'pages/home.php'; // Fallback to home
    }
}

/**
 * Escape HTML output
 */
function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

/**
 * Generate phone link
 */
function getPhoneLink() {
    return 'tel:+41755009000';
}

/**
 * Generate email link
 */
function getEmailLink() {
    return 'mailto:' . CONTACT_EMAIL;
}
?>