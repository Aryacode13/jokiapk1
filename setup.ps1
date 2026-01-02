Write-Host "====================================" -ForegroundColor Cyan
Write-Host "  JokiAPK - Setup & Run" -ForegroundColor Cyan
Write-Host "====================================" -ForegroundColor Cyan
Write-Host ""

Write-Host "[1/4] Checking dependencies..." -ForegroundColor Yellow
if (-not (Test-Path "vendor")) {
    Write-Host "Installing Composer dependencies..." -ForegroundColor Green
    composer install --ignore-platform-req=ext-fileinfo --no-interaction
    if ($LASTEXITCODE -ne 0) {
        Write-Host "ERROR: Failed to install Composer dependencies" -ForegroundColor Red
        Read-Host "Press Enter to exit"
        exit 1
    }
}

if (-not (Test-Path "node_modules")) {
    Write-Host "Installing NPM dependencies..." -ForegroundColor Green
    npm install
    if ($LASTEXITCODE -ne 0) {
        Write-Host "ERROR: Failed to install NPM dependencies" -ForegroundColor Red
        Read-Host "Press Enter to exit"
        exit 1
    }
}

Write-Host "[2/4] Setting up environment..." -ForegroundColor Yellow
if (-not (Test-Path ".env")) {
    Write-Host "Creating .env file..." -ForegroundColor Green
    Copy-Item .env.example .env -ErrorAction SilentlyContinue
}

Write-Host "Checking APP_KEY..." -ForegroundColor Green
php generate-key.php

Write-Host "[3/4] Building assets..." -ForegroundColor Yellow
npm run build
if ($LASTEXITCODE -ne 0) {
    Write-Host "WARNING: Failed to build assets, but continuing..." -ForegroundColor Yellow
}

Write-Host "[4/4] Creating storage directories..." -ForegroundColor Yellow
$dirs = @(
    "storage\framework\cache",
    "storage\framework\sessions",
    "storage\framework\views",
    "storage\logs"
)
foreach ($dir in $dirs) {
    if (-not (Test-Path $dir)) {
        New-Item -ItemType Directory -Path $dir -Force | Out-Null
    }
}

Write-Host ""
Write-Host "====================================" -ForegroundColor Cyan
Write-Host "  Setup Complete!" -ForegroundColor Green
Write-Host "====================================" -ForegroundColor Cyan
Write-Host ""
Write-Host "Starting server..." -ForegroundColor Green
Write-Host ""
Write-Host "Server akan berjalan di: http://localhost:8000" -ForegroundColor Yellow
Write-Host ""
Write-Host "Tekan Ctrl+C untuk menghentikan server" -ForegroundColor Yellow
Write-Host ""
php -S localhost:8000 -t public

