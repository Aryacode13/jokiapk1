<?php

$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

// Bind kernels
$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

// Register config FIRST (needed by other service providers)
// Load config manually since we're not using normal bootstrap process
$configPath = $app->configPath();
$items = [];
if (file_exists($cached = $app->getCachedConfigPath())) {
    $items = require $cached;
} else {
    // Load config files manually
    $files = [];
    if (is_dir($configPath)) {
        foreach (glob($configPath . '/*.php') as $file) {
            $key = basename($file, '.php');
            $files[$key] = $file;
        }
        foreach ($files as $key => $path) {
            $items[$key] = require $path;
        }
    }
}
$app->instance('config', new \Illuminate\Config\Repository($items));

// Register essential service providers
$app->register(\Illuminate\Foundation\Providers\FoundationServiceProvider::class);
$app->register(\Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class);
$app->register(\Illuminate\Filesystem\FilesystemServiceProvider::class);
$app->register(\Illuminate\Cache\CacheServiceProvider::class);
$app->register(\Illuminate\Session\SessionServiceProvider::class);
$app->register(\Illuminate\View\ViewServiceProvider::class);
$app->register(\Illuminate\Cookie\CookieServiceProvider::class);
$app->register(\Illuminate\Encryption\EncryptionServiceProvider::class);
$app->register(\Illuminate\Hashing\HashServiceProvider::class);
$app->register(\Illuminate\Translation\TranslationServiceProvider::class);
$app->register(\Illuminate\Validation\ValidationServiceProvider::class);
$app->register(\Illuminate\Pagination\PaginationServiceProvider::class);
$app->register(\Illuminate\Database\DatabaseServiceProvider::class);

// Load application service providers
$providers = require __DIR__.'/providers.php';
foreach ($providers as $provider) {
    $app->register($provider);
}

// Ensure cache store is bound
$app->singleton('cache.store', function ($app) {
    return $app['cache']->store();
});

return $app;
