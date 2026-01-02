# Setup & Run JokiAPK Company Profile

## 🚀 Quick Start (Paling Mudah)

### Windows:
1. **Double-click file `START.bat`** - Langsung jalankan server
2. Atau **Double-click `setup.bat`** - Setup lengkap + jalankan server

### PowerShell:
1. **Double-click file `START.ps1`** - Langsung jalankan server
2. Atau **Double-click `setup.ps1`** - Setup lengkap + jalankan server

## 📋 Setup Manual (Jika Perlu)

### 1. Install Dependencies
```bash
# Composer
composer install --ignore-platform-req=ext-fileinfo

# NPM
npm install
```

### 2. Setup Environment
```bash
# Copy .env
copy .env.example .env

# Generate APP_KEY (otomatis di setup.bat)
php artisan key:generate
```

### 3. Build Assets
```bash
npm run build
```

### 4. Jalankan Server
```bash
# Opsi 1: Menggunakan START.bat
START.bat

# Opsi 2: Manual
php -S localhost:8000 -t public
```

## 🌐 Akses Website

Setelah server berjalan, buka browser:
- **http://localhost:8000**

## 📁 File yang Tersedia

- `START.bat` / `START.ps1` - Langsung jalankan server (paling mudah)
- `setup.bat` / `setup.ps1` - Setup lengkap + jalankan server
- `RUN.bat` / `RUN.ps1` - Alternatif untuk run server

## ⚙️ Konfigurasi

File `.env` sudah dikonfigurasi dengan:
- `SESSION_DRIVER=array` (tidak perlu database)
- `CACHE_STORE=array` (tidak perlu database)
- `FILESYSTEM_DISK=local`

## 🔧 Troubleshooting

### Port 8000 sudah digunakan?
Edit `START.bat` atau `START.ps1`, ganti `8000` dengan port lain (misalnya `8001`)

### Assets tidak muncul?
```bash
npm run build
```

### Error "APP_KEY is not set"?
File `setup.bat` akan otomatis generate APP_KEY. Atau jalankan:
```bash
php artisan key:generate
```

## ✅ Status Setup

- ✅ Dependencies terinstall
- ✅ Assets sudah di-build
- ✅ Environment dikonfigurasi
- ✅ Storage directories dibuat
- ✅ Server siap dijalankan

**Tinggal double-click `START.bat` dan website langsung jalan!** 🎉

