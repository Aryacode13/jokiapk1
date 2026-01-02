# Fix Error "Target class [files] does not exist"

## Masalah
Error terjadi karena Laravel mencoba resolve "files" sebagai class, padahal seharusnya menggunakan filesystem service provider.

## Solusi yang Sudah Diterapkan

1. ✅ Menambahkan FilesystemServiceProvider di AppServiceProvider
2. ✅ Menambahkan SessionServiceProvider di AppServiceProvider
3. ✅ Mengubah urutan registrasi service provider di bootstrap/app.php

## Test

Coba akses: http://localhost:8000

Jika masih error, coba langkah berikut:

### Langkah 1: Pastikan .env benar
```env
SESSION_DRIVER=file
CACHE_STORE=array
FILESYSTEM_DISK=local
```

### Langkah 2: Clear cache
```bash
# Hapus semua cache
Remove-Item -Recurse -Force bootstrap\cache\*
Remove-Item -Recurse -Force storage\framework\cache\*
Remove-Item -Recurse -Force storage\framework\sessions\*
Remove-Item -Recurse -Force storage\framework\views\*
```

### Langkah 3: Rebuild assets
```bash
npm run build
```

### Langkah 4: Jalankan server
```bash
php -S localhost:8000 -t public
```

## Alternatif: Gunakan Session Array

Jika masih error, ubah session driver ke array (tidak perlu filesystem):

Di file `.env`:
```env
SESSION_DRIVER=array
```

Ini akan membuat session disimpan di memory, tidak perlu filesystem.

