<?php

// Hide deprecation warnings (common in older Laravel versions on PHP 8.1+)
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED);

// Re-route Laravel's cache files
$_ENV['APP_CONFIG_CACHE'] = '/tmp/config.php';
$_ENV['APP_ROUTES_CACHE'] = '/tmp/routes.php';
$_ENV['APP_SERVICES_CACHE'] = '/tmp/services.php';
$_ENV['APP_PACKAGES_CACHE'] = '/tmp/packages.php';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp';
putenv('APP_STORAGE=/tmp');

// --- DEBUG MIGRATIONS ---
if (isset($_GET['migrate']) && $_GET['migrate'] == 'true') {
    require __DIR__ . '/../vendor/autoload.php';
    $app = require_once __DIR__ . '/../bootstrap/app.php';
    $kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

    echo "<h1>Migration Status</h1>";
    try {
        echo "Attempting to migrate...<br>";
        // Use an Output object to capture the text
        $output = new \Symfony\Component\Console\Output\BufferedOutput;
        $status = $kernel->call('migrate', ['--force' => true], $output);

        echo "<pre>" . $output->fetch() . "</pre>";
        echo "Status Code: " . $status;
    } catch (\Exception $e) {
        echo "<b style='color:red'>FAILED:</b> " . $e->getMessage();
        echo "<pre>" . $e->getTraceAsString() . "</pre>";
    }
    exit;
}

require __DIR__ . '/../public/index.php';
