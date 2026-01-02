<?php

require __DIR__.'/vendor/autoload.php';

$envFile = __DIR__.'/.env';

if (!file_exists($envFile)) {
    copy(__DIR__.'/.env.example', $envFile);
    echo "Created .env file\n";
}

$env = file_get_contents($envFile);

// Check if APP_KEY is empty or missing
if (preg_match('/^APP_KEY=\s*$/m', $env) || strpos($env, 'APP_KEY=') === false) {
    $key = 'base64:'.base64_encode(random_bytes(32));
    $env = preg_replace('/^APP_KEY=.*/m', 'APP_KEY='.$key, $env);
    
    // If APP_KEY doesn't exist, add it
    if (strpos($env, 'APP_KEY=') === false) {
        $env = "APP_KEY={$key}\n".$env;
    }
    
    file_put_contents($envFile, $env);
    echo "Generated APP_KEY\n";
} else {
    echo "APP_KEY already exists\n";
}

