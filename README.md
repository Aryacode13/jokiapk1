# JokiAPK - Company Profile Website

Company profile website untuk layanan joki web dan mobile development dengan tema ungu, hitam, dan dark grey.

## 🚀 Quick Start

### Cara Paling Mudah:
1. **Double-click `START.bat`** (Windows)
2. Buka browser: **http://localhost:8000**

Selesai! Website langsung jalan! 🎉

## 📋 Setup Lengkap (Pertama Kali)

Jika belum pernah setup, double-click:
- **`setup.bat`** - Setup otomatis semua + jalankan server

Atau manual:

```bash
# 1. Install dependencies
composer install --ignore-platform-req=ext-fileinfo
npm install

# 2. Setup environment
copy .env.example .env
php generate-key.php

# 3. Build assets
npm run build

# 4. Jalankan server
php -S localhost:8000 -t public
```

## 📁 File yang Tersedia

- **`START.bat`** / **`START.ps1`** - Langsung jalankan server (paling mudah)
- **`setup.bat`** / **`setup.ps1`** - Setup lengkap + jalankan server
- **`generate-key.php`** - Generate APP_KEY otomatis

## 🌐 Akses Website

Setelah server berjalan:
- **http://localhost:8000**

## ✨ Fitur

- ✅ Responsive design (mobile, tablet, desktop)
- ✅ Sticky footer yang mengikuti konten
- ✅ Tema ungu, hitam, dark grey
- ✅ Design clean dan simple
- ✅ Navigation dengan mobile menu
- ✅ Halaman Home, About, Services, Portfolio, Contact

## 🛠️ Teknologi

- Laravel 10
- Tailwind CSS
- Alpine.js
- Vite

## 📝 Halaman

- `/` - Homepage dengan hero section, services, dan CTA
- `/about` - Tentang perusahaan, visi, misi, dan values
- `/services` - Detail layanan yang ditawarkan
- `/portfolio` - Showcase project yang telah dikerjakan
- `/contact` - Form kontak dan informasi kontak

## ⚙️ Konfigurasi

File `.env` sudah dikonfigurasi dengan:
- `SESSION_DRIVER=array` (tidak perlu database)
- `CACHE_STORE=array` (tidak perlu database)
- `FILESYSTEM_DISK=local`

## 🔧 Troubleshooting

### Port 8000 sudah digunakan?
Edit `START.bat`, ganti `8000` dengan port lain (misalnya `8001`)

### Assets tidak muncul?
```bash
npm run build
```

### Error "APP_KEY is not set"?
```bash
php generate-key.php
```

## 📚 Dokumentasi Lengkap

Lihat `README_SETUP.md` untuk dokumentasi setup lengkap.

## 📄 License

MIT
