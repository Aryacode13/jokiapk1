@echo off
echo ====================================
echo   JokiAPK - Setup & Run
echo ====================================
echo.

echo [1/4] Checking dependencies...
if not exist "vendor" (
    echo Installing Composer dependencies...
    composer install --ignore-platform-req=ext-fileinfo --no-interaction
    if errorlevel 1 (
        echo ERROR: Failed to install Composer dependencies
        pause
        exit /b 1
    )
)

if not exist "node_modules" (
    echo Installing NPM dependencies...
    call npm install
    if errorlevel 1 (
        echo ERROR: Failed to install NPM dependencies
        pause
        exit /b 1
    )
)

echo [2/4] Setting up environment...
if not exist ".env" (
    echo Creating .env file...
    copy .env.example .env >nul 2>&1
)

echo Checking APP_KEY...
php generate-key.php

echo [3/4] Building assets...
call npm run build
if errorlevel 1 (
    echo WARNING: Failed to build assets, but continuing...
)

echo [4/4] Creating storage directories...
if not exist "storage\framework\cache" mkdir "storage\framework\cache"
if not exist "storage\framework\sessions" mkdir "storage\framework\sessions"
if not exist "storage\framework\views" mkdir "storage\framework\views"
if not exist "storage\logs" mkdir "storage\logs"

echo.
echo ====================================
echo   Setup Complete!
echo ====================================
echo.
echo Starting server...
echo.
echo Server akan berjalan di: http://localhost:8000
echo.
echo Tekan Ctrl+C untuk menghentikan server
echo.
php -S localhost:8000 -t public
pause

