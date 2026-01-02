@echo off
title JokiAPK - Company Profile
color 0A
echo.
echo   ===============================================
echo      JOKIAPK - COMPANY PROFILE WEBSITE
echo   ===============================================
echo.
echo   Starting server...
echo.
echo   Website akan berjalan di: http://localhost:8000
echo.
echo   Tekan Ctrl+C untuk menghentikan server
echo.
echo   ===============================================
echo.
php -S localhost:8000 -t public
pause

