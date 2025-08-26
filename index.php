<?php
/**
 * iMediahuus Basel - PHP Version
 * Simple routing and templating system
 */

// Error reporting for development
error_reporting(E_ALL);
ini_set('display_errors', 1);

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