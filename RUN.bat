@echo off
echo ====================================
echo   JokiAPK - Company Profile
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

