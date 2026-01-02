# Fix Error "Target [Illuminate\Contracts\Foundation\MaintenanceMode] is not instantiable"

## Masalah
Error terjadi karena Laravel mencoba resolve MaintenanceMode contract tapi tidak ada binding untuknya.

## Solusi yang Sudah Diterapkan

1. ✅ Menambahkan FoundationServiceProvider di bootstrap/app.php
2. ✅ Menambahkan FoundationServiceProvider di AppServiceProvider
3. ✅ FoundationServiceProvider sudah memiliki binding untuk MaintenanceMode

## Test

Coba akses: http://localhost:8000

Website seharusnya sudah bisa diakses sekarang!

## Jika Masih Error

Pastikan FoundationServiceProvider terdaftar sebelum service provider lainnya.

