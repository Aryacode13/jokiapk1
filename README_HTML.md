# JokiAPK.id - HTML/CSS/JavaScript Version

Website portfolio JokiAPK.id yang dikonversi dari Laravel (PHP) menjadi HTML, CSS, dan JavaScript murni.

## Struktur File

```
jokiapk.id/
├── index.html              # Halaman Home
├── about.html              # Halaman About
├── services.html           # Halaman Services
├── portfolio.html          # Halaman Portfolio
├── contact.html            # Halaman Contact
├── company-profile.html    # Halaman Company Profile Projects
├── mobile-apps.html        # Halaman Mobile Apps Projects
├── css/
│   └── style.css          # Custom CSS
├── js/
│   └── main.js            # JavaScript untuk interaktivitas
└── images/                # Folder gambar (logo, portfolio, dll)
    ├── logo.png
    ├── dev.jpeg
    ├── company.png
    ├── company-profile-2.png
    ├── companytum.png
    ├── mobileapps.png
    └── mobiletum.png
```

## Cara Menjalankan

### Opsi 1: Buka Langsung di Browser
1. Buka file `index.html` langsung di browser
2. Semua halaman sudah terhubung dengan link relatif

### Opsi 2: Menggunakan Local Server (Recommended)

#### Windows (PowerShell):
```powershell
# Menggunakan Python (jika sudah terinstall)
python -m http.server 8000

# Atau menggunakan PHP
php -S localhost:8000
```

#### Windows (Command Prompt):
```cmd
# Menggunakan Python
python -m http.server 8000

# Atau menggunakan PHP
php -S localhost:8000
```

#### Mac/Linux:
```bash
# Menggunakan Python
python3 -m http.server 8000

# Atau menggunakan PHP
php -S localhost:8000
```

Kemudian buka browser dan akses: `http://localhost:8000`

## Fitur

- ✅ Responsive Design (Mobile, Tablet, Desktop)
- ✅ Header dengan efek fade out saat scroll
- ✅ Mobile Menu Toggle
- ✅ Navigation dengan active state
- ✅ Tailwind CSS via CDN
- ✅ Vanilla JavaScript (tanpa framework)
- ✅ Smooth scrolling
- ✅ Custom scrollbar

## Teknologi yang Digunakan

- **HTML5** - Struktur halaman
- **Tailwind CSS** - Framework CSS via CDN
- **Vanilla JavaScript** - Interaktivitas tanpa framework
- **Custom CSS** - Styling tambahan

## Catatan

- Semua gambar harus berada di folder `images/`
- Path relatif sudah disesuaikan untuk struktur folder ini
- Tidak memerlukan server backend atau database
- Dapat di-deploy ke hosting static (GitHub Pages, Netlify, Vercel, dll)

## Deploy ke Hosting Static

Website ini dapat di-deploy ke berbagai platform static hosting:

1. **GitHub Pages**: Push ke repository GitHub dan aktifkan GitHub Pages
2. **Netlify**: Drag & drop folder atau connect ke Git repository
3. **Vercel**: Deploy via CLI atau connect ke Git repository
4. **Cloudflare Pages**: Upload folder atau connect ke Git repository

## Perbedaan dengan Versi Laravel

- Tidak menggunakan PHP atau Blade templating
- Tidak memerlukan Composer atau NPM build process
- Semua file adalah static HTML/CSS/JS
- Tidak ada routing server-side, semua routing via file HTML
- Tidak ada database atau backend API

## Support

Jika ada pertanyaan atau masalah, hubungi:
- Email: aryahidayat1111@gmail.com
- WhatsApp: +62 815 2486 6651


