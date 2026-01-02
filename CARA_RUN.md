# Cara Menjalankan Project JokiAPK

## Step-by-Step Guide

### 1. Pastikan Dependencies Terinstall

```bash
# Install Composer dependencies
composer install --ignore-platform-req=ext-fileinfo

# Install NPM dependencies
npm install
```

### 2. Setup Environment File

```bash
# Copy .env.example ke .env (jika belum ada)
copy .env.example .env

# Atau di PowerShell:
Copy-Item .env.example .env
```

### 3. Generate Application Key

```bash
# Generate APP_KEY
php artisan key:generate
```

**Jika error dengan artisan, edit file `.env` secara manual:**
- Buka file `.env`
- Pastikan ada baris: `APP_KEY=`
- Generate key manual atau gunakan: `APP_KEY=base64:YOUR_RANDOM_32_CHAR_STRING`

### 4. Build Assets

```bash
# Build assets untuk production
npm run build
```

### 5. Jalankan Server

**Opsi 1: Menggunakan PHP Built-in Server (Paling Mudah)**
```bash
php -S localhost:8000 -t public
```

**Opsi 2: Menggunakan Laravel Artisan (jika tidak ada error)**
```bash
php artisan serve
```

**Opsi 3: Menggunakan XAMPP/WAMP**
- Copy folder project ke `htdocs` atau `www`
- Arahkan ke folder `public`
- Akses: `http://localhost/jokiapk.id/public`

### 6. Akses Website

Buka browser dan kunjungi:
- **http://localhost:8000**

## Troubleshooting

### Error: "Target class [files] does not exist"

**Solusi:**
1. Pastikan file `.env` sudah ada
2. Pastikan `CACHE_STORE=array` di file `.env`
3. Pastikan `SESSION_DRIVER=file` di file `.env`

### Error: "APP_KEY is not set"

**Solusi:**
1. Buka file `.env`
2. Tambahkan atau edit: `APP_KEY=base64:YOUR_KEY_HERE`
3. Atau jalankan: `php artisan key:generate` (jika bisa)

### Error: "Class not found"

**Solusi:**
```bash
# Clear cache
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear
```

### Assets tidak muncul

**Solusi:**
```bash
# Rebuild assets
npm run build

# Atau untuk development dengan hot reload
npm run dev
```

## File .env Minimal

Pastikan file `.env` memiliki minimal:

```env
APP_NAME="JokiAPK"
APP_ENV=local
APP_KEY=base64:YOUR_KEY_HERE
APP_DEBUG=true
APP_URL=http://localhost:8000

CACHE_STORE=array
SESSION_DRIVER=file
FILESYSTEM_DISK=local
```

## Catatan Penting

1. **Port 8000 sudah digunakan?**
   - Ganti port: `php -S localhost:8001 -t public`

2. **PHP extension fileinfo tidak aktif?**
   - Edit `php.ini`
   - Uncomment: `extension=fileinfo`
   - Restart web server

3. **Database tidak diperlukan untuk website ini**
   - Website ini adalah static company profile
   - Tidak perlu setup database

## Quick Start (Paling Cepat)

```bash
# 1. Install dependencies
composer install --ignore-platform-req=ext-fileinfo
npm install

# 2. Build assets
npm run build

# 3. Jalankan server
php -S localhost:8000 -t public
```

Buka browser: **http://localhost:8000**

