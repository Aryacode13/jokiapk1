# Cara Menjalankan Website JokiAPK.id

Website ini adalah static website (HTML/CSS/JavaScript murni), jadi sangat mudah dijalankan!

## 🚀 Cara 1: Buka Langsung (Paling Mudah)

1. Buka File Explorer (Windows Explorer)
2. Navigasi ke folder `e:\jokiapk.id`
3. Double-click file `index.html`
4. Website akan terbuka di browser default Anda

**Catatan:** Beberapa fitur mungkin tidak berfungsi sempurna jika dibuka langsung (terutama JavaScript), jadi lebih baik gunakan local server.

---

## 🌐 Cara 2: Menggunakan Local Server (Recommended)

### Opsi A: Menggunakan Python (Paling Mudah)

**Windows:**
```powershell
# Buka PowerShell di folder project
cd e:\jokiapk.id

# Jalankan server
python -m http.server 8000
```

**Jika Python belum terinstall:**
- Download dari https://www.python.org/downloads/
- Atau gunakan opsi B (PHP)

**Mac/Linux:**
```bash
cd /path/to/jokiapk.id
python3 -m http.server 8000
```

Kemudian buka browser dan akses: **http://localhost:8000**

---

### Opsi B: Menggunakan PHP

**Windows:**
```powershell
# Buka PowerShell di folder project
cd e:\jokiapk.id

# Jalankan server
php -S localhost:8000
```

**Mac/Linux:**
```bash
cd /path/to/jokiapk.id
php -S localhost:8000
```

Kemudian buka browser dan akses: **http://localhost:8000**

---

### Opsi C: Menggunakan Node.js (http-server)

Jika sudah install Node.js:

```bash
# Install http-server global
npm install -g http-server

# Jalankan di folder project
cd e:\jokiapk.id
http-server -p 8000
```

Kemudian buka browser dan akses: **http://localhost:8000**

---

## 📝 Langkah-langkah Detail (Windows)

1. **Buka PowerShell:**
   - Tekan `Windows + X`
   - Pilih "Windows PowerShell" atau "Terminal"

2. **Navigasi ke folder project:**
   ```powershell
   cd e:\jokiapk.id
   ```

3. **Jalankan server (pilih salah satu):**
   ```powershell
   # Opsi 1: Python
   python -m http.server 8000
   
   # Opsi 2: PHP
   php -S localhost:8000
   ```

4. **Buka browser:**
   - Buka browser (Chrome, Firefox, Edge, dll)
   - Ketik di address bar: `http://localhost:8000`
   - Tekan Enter

5. **Untuk menghentikan server:**
   - Tekan `Ctrl + C` di PowerShell

---

## ✅ Checklist Sebelum Menjalankan

- [ ] Pastikan file `index.html` ada di folder
- [ ] Pastikan folder `css/`, `js/`, dan `images/` ada
- [ ] Pastikan koneksi internet aktif (untuk load Tailwind CSS dari CDN)

---

## 🐛 Troubleshooting

### Error: "python is not recognized"
- Install Python dari https://www.python.org/downloads/
- Atau gunakan PHP: `php -S localhost:8000`

### Error: "php is not recognized"
- Install PHP atau gunakan Python
- Atau buka langsung `index.html` di browser

### Website tidak muncul gambar
- Pastikan folder `images/` ada dan berisi semua file gambar
- Cek path gambar di HTML (harus `images/logo.png`, bukan `public/images/logo.png`)

### JavaScript tidak berfungsi
- Pastikan menggunakan local server (bukan buka langsung)
- Buka Developer Tools (F12) dan cek Console untuk error

---

## 🌍 Deploy ke Internet

Setelah website berjalan dengan baik di local, Anda bisa deploy ke:

- **GitHub Pages** (Gratis)
- **Netlify** (Gratis)
- **Vercel** (Gratis)
- **Cloudflare Pages** (Gratis)

Lihat `README.md` untuk detail deploy.

---

## 📞 Butuh Bantuan?

- Email: aryahidayat1111@gmail.com
- WhatsApp: +62 815 2486 6651
