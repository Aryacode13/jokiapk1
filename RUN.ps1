Write-Host "====================================" -ForegroundColor Cyan
Write-Host "  JokiAPK - Company Profile" -ForegroundColor Cyan
Write-Host "====================================" -ForegroundColor Cyan
Write-Host ""
Write-Host "Starting server..." -ForegroundColor Green
Write-Host ""
Write-Host "Server akan berjalan di: http://localhost:8000" -ForegroundColor Yellow
Write-Host ""
Write-Host "Tekan Ctrl+C untuk menghentikan server" -ForegroundColor Yellow
Write-Host ""
php -S localhost:8000 -t public

