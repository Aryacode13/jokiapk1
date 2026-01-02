$Host.UI.RawUI.WindowTitle = "JokiAPK - Company Profile"
Write-Host ""
Write-Host "   ===============================================" -ForegroundColor Cyan
Write-Host "      JOKIAPK - COMPANY PROFILE WEBSITE" -ForegroundColor Cyan
Write-Host "   ===============================================" -ForegroundColor Cyan
Write-Host ""
Write-Host "   Starting server..." -ForegroundColor Green
Write-Host ""
Write-Host "   Website akan berjalan di: http://localhost:8000" -ForegroundColor Yellow
Write-Host ""
Write-Host "   Tekan Ctrl+C untuk menghentikan server" -ForegroundColor Yellow
Write-Host ""
Write-Host "   ===============================================" -ForegroundColor Cyan
Write-Host ""
php -S localhost:8000 -t public

