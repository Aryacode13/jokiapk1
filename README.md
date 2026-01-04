# JokiAPK.id - Static Website

Website portfolio JokiAPK.id versi HTML/CSS/JavaScript murni (tanpa PHP/Laravel).

## Struktur Project

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
├── images/                # Folder gambar
│   ├── logo.png
│   ├── dev.jpeg
│   ├── company.png
│   ├── company-profile-2.png
│   ├── companytum.png
│   ├── mobileapps.png
│   └── mobiletum.png
├── favicon.ico            # Favicon
├── robots.txt             # Robots.txt
└── README.md              # File ini

```

## Cara Menjalankan

### Opsi 1: Buka Langsung
Buka file `index.html` langsung di browser.

### Opsi 2: Local Server (Recommended)

**Windows (PowerShell):**
```powershell
python -m http.server 8000
# atau
php -S localhost:8000
```

**Mac/Linux:**
```bash
python3 -m http.server 8000
# atau
php -S localhost:8000
```

Kemudian buka: `http://localhost:8000`

## Deploy ke Hosting

Website ini dapat di-deploy ke berbagai platform static hosting:

- **Vercel** (Recommended): Lihat `DEPLOY_VERCEL.md` untuk panduan lengkap
- **GitHub Pages**: Push ke repository dan aktifkan GitHub Pages
- **Netlify**: Drag & drop folder atau connect ke Git
- **Cloudflare Pages**: Upload folder atau connect ke Git

**Panduan Deploy Vercel:** Lihat file `DEPLOY_VERCEL.md` untuk instruksi detail.

## Fitur

- ✅ Responsive Design
- ✅ Header fade effect saat scroll
- ✅ Mobile Menu Toggle
- ✅ Active Navigation State
- ✅ Tailwind CSS via CDN
- ✅ Vanilla JavaScript

## Teknologi

- HTML5
- Tailwind CSS (via CDN)
- Vanilla JavaScript
- Custom CSS

## Support

- Email: aryahidayat1111@gmail.com
- WhatsApp: +62 815 2486 6651
