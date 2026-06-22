<?php
/**
 * iMediahuus Basel - PHP Version
 * Simple routing and templating system
 */

// Error reporting: show errors only in local dev (DDEV), never in production
$is_dev = getenv('IS_DDEV_PROJECT') === 'true';
error_reporting($is_dev ? E_ALL : 0);
ini_set('display_errors', $is_dev ? '1' : '0');
ini_set('log_errors', '1');

// Simple router
$request_uri = $_SERVER['REQUEST_URI'];
$path = parse_url($request_uri, PHP_URL_PATH);
$path = trim($path, '/');

// Define routes
$routes = [
    '' => 'home',
    'index.php' => 'home',
    'reparaturen' => 'reparaturen',
    'ankauf-verkauf' => 'ankauf-verkauf',
];

// Get current page
$current_page = $routes[$path] ?? 'home';

// Include the template
include 'includes/template.php';
?>