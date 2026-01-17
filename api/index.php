<?php

// Show errors for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Re-route Laravel's cache files to the writable /tmp directory
$_ENV['APP_CONFIG_CACHE'] = '/tmp/config.php';
$_ENV['APP_ROUTES_CACHE'] = '/tmp/routes.php';
$_ENV['APP_SERVICES_CACHE'] = '/tmp/services.php';
$_ENV['APP_PACKAGES_CACHE'] = '/tmp/packages.php';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp';

// Set the storage path to /tmp as well
putenv('APP_STORAGE=/tmp');

// Ensure we are pointing to the correct public index
require __DIR__ . '/../public/index.php';
