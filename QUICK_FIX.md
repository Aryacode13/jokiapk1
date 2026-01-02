# Quick Fix untuk Error "Target class [cache.store] does not exist"

## Solusi Cepat

Error ini terjadi karena cache store belum terdaftar dengan benar. Saya sudah memperbaiki dengan:

1. ✅ Menghapus RateLimiter dari RouteServiceProvider (tidak diperlukan untuk company profile)
2. ✅ Mengubah default cache ke 'array' (tidak perlu database)
3. ✅ Memastikan konfigurasi cache benar

## Langkah Menjalankan (Setelah Fix)

```bash
# 1. Pastikan assets sudah di-build
npm run build

# 2. Jalankan server
php -S localhost:8000 -t public
```

## Jika Masih Error

### Opsi 1: Pastikan .env benar
Buka file `.env` dan pastikan:
```env
CACHE_STORE=array
SESSION_DRIVER=file
```

### Opsi 2: Clear semua cache
```bash
# Hapus folder cache
rm -rf bootstrap/cache/*
rm -rf storage/framework/cache/*
rm -rf storage/framework/views/*
```

### Opsi 3: Pastikan folder storage writable
```bash
# Windows PowerShell
icacls storage /grant Users:F /T
icacls bootstrap\cache /grant Users:F /T
```

## Test Server

Setelah fix, coba akses:
- http://localhost:8000

Website seharusnya sudah bisa diakses!

