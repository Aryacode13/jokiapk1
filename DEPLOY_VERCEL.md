# Cara Deploy Website ke Vercel

Panduan lengkap untuk deploy website JokiAPK.id ke Vercel.

## 📋 Prerequisites

- Akun GitHub (gratis)
- Akun Vercel (gratis)
- Website sudah siap di folder lokal

---

## 🚀 Metode 1: Deploy via Vercel Dashboard (Paling Mudah)

### Langkah 1: Push ke GitHub

1. **Buat Repository GitHub:**
   - Buka https://github.com
   - Klik "New repository"
   - Nama: `jokiapk.id` (atau nama lain)
   - Pilih "Public" atau "Private"
   - Jangan centang "Initialize with README"
   - Klik "Create repository"

2. **Push Code ke GitHub:**

   ```powershell
   # Buka PowerShell di folder project
   cd e:\jokiapk.id

   # Inisialisasi Git (jika belum)
   git init

   # Tambahkan semua file
   git add .

   # Commit
   git commit -m "Initial commit - Static website"

   # Tambahkan remote repository (ganti YOUR_USERNAME dengan username GitHub Anda)
   git remote add origin https://github.com/YOUR_USERNAME/jokiapk.id.git

   # Push ke GitHub
   git branch -M main
   git push -u origin main
   ```

   **Catatan:** Jika belum install Git, download dari https://git-scm.com/downloads

### Langkah 2: Deploy ke Vercel

1. **Login ke Vercel:**
   - Buka https://vercel.com
   - Klik "Sign Up" atau "Log In"
   - Login dengan GitHub account

2. **Import Project:**
   - Klik "Add New..." → "Project"
   - Pilih repository `jokiapk.id` yang sudah dibuat
   - Klik "Import"

3. **Konfigurasi Project:**
   - **Framework Preset:** Pilih "Other" atau biarkan auto-detect
   - **Root Directory:** Biarkan kosong (`.`)
   - **Build Command:** Kosongkan (tidak perlu build)
   - **Output Directory:** Kosongkan (atau isi `.`)
   - **Install Command:** Kosongkan (tidak perlu install)

4. **Deploy:**
   - Klik "Deploy"
   - Tunggu beberapa detik
   - Website akan otomatis ter-deploy!

5. **Akses Website:**
   - Vercel akan memberikan URL seperti: `https://jokiapk-id.vercel.app`
   - Website sudah live! 🎉

---

## 🔧 Metode 2: Deploy via Vercel CLI (Advanced)

### Langkah 1: Install Vercel CLI

```powershell
# Install Vercel CLI global
npm install -g vercel
```

**Catatan:** Butuh Node.js terlebih dahulu. Download dari https://nodejs.org

### Langkah 2: Login ke Vercel

```powershell
vercel login
```

Ikuti instruksi di browser untuk login.

### Langkah 3: Deploy

```powershell
# Masuk ke folder project
cd e:\jokiapk.id

# Deploy
vercel

# Atau untuk production
vercel --prod
```

Ikuti prompt yang muncul:
- **Set up and deploy?** → Yes
- **Which scope?** → Pilih akun Anda
- **Link to existing project?** → No (untuk pertama kali)
- **Project name?** → `jokiapk-id` (atau nama lain)
- **Directory?** → `.` (current directory)
- **Override settings?** → No

Website akan ter-deploy dan mendapatkan URL!

---

## ⚙️ Konfigurasi Vercel (Opsional)

Buat file `vercel.json` di root folder untuk konfigurasi khusus:

```json
{
  "version": 2,
  "builds": [
    {
      "src": "**",
      "use": "@vercel/static"
    }
  ],
  "routes": [
    {
      "src": "/(.*)",
      "dest": "/$1"
    }
  ]
}
```

**Catatan:** Untuk static website sederhana, file ini tidak wajib. Vercel akan auto-detect.

---

## 🔄 Update Website

Setelah deploy pertama, setiap kali Anda push ke GitHub:

1. **Update code lokal:**
   ```powershell
   git add .
   git commit -m "Update website"
   git push
   ```

2. **Vercel akan otomatis:**
   - Mendeteksi perubahan
   - Rebuild website
   - Deploy versi baru
   - Website otomatis ter-update! ✨

---

## 🌐 Custom Domain (Opsional)

### Menambahkan Domain Custom:

1. **Di Vercel Dashboard:**
   - Buka project Anda
   - Klik "Settings" → "Domains"
   - Klik "Add Domain"
   - Masukkan domain: `jokiapk.id` (atau domain Anda)

2. **Konfigurasi DNS:**
   - Vercel akan memberikan DNS records
   - Tambahkan records tersebut di provider domain Anda
   - Tunggu beberapa menit untuk propagasi DNS

3. **SSL Certificate:**
   - Vercel otomatis menyediakan SSL gratis
   - Website akan menggunakan HTTPS

---

## 📁 Struktur File yang Diperlukan

Pastikan struktur folder seperti ini:

```
jokiapk.id/
├── index.html          ✅ Wajib (entry point)
├── about.html
├── services.html
├── portfolio.html
├── contact.html
├── company-profile.html
├── mobile-apps.html
├── css/
│   └── style.css
├── js/
│   └── main.js
├── images/
│   └── (semua gambar)
├── favicon.ico
├── robots.txt
└── README.md
```

---

## ✅ Checklist Sebelum Deploy

- [ ] Semua file HTML ada
- [ ] Folder `css/`, `js/`, `images/` ada
- [ ] Semua path relatif sudah benar (tidak ada `public/` di path)
- [ ] File `index.html` ada di root
- [ ] Test website di local server dulu
- [ ] Semua gambar ter-load dengan baik
- [ ] JavaScript berfungsi (mobile menu, header fade, dll)

---

## 🐛 Troubleshooting

### Error: "Build failed"
- Pastikan `index.html` ada di root folder
- Pastikan tidak ada file PHP atau Laravel yang tersisa
- Cek log di Vercel dashboard untuk detail error

### Gambar tidak muncul
- Pastikan path gambar benar: `images/logo.png` (bukan `public/images/logo.png`)
- Pastikan semua file gambar ada di folder `images/`

### 404 Error di halaman tertentu
- Pastikan semua file HTML ada
- Pastikan link di navigation menggunakan path relatif: `about.html` (bukan `/about`)

### CSS/JS tidak ter-load
- Pastikan path di HTML benar: `css/style.css` dan `js/main.js`
- Pastikan file ada di folder yang benar

---

## 📊 Monitoring & Analytics

Vercel menyediakan:
- **Analytics:** Traffic, page views, dll (gratis untuk personal)
- **Logs:** Error logs dan build logs
- **Performance:** Speed insights

Akses di dashboard Vercel → Project → Analytics

---

## 💰 Pricing

Vercel **GRATIS** untuk:
- Personal projects
- Unlimited deployments
- Custom domain
- SSL certificate
- CDN global
- Analytics basic

Upgrade ke Pro ($20/bulan) untuk:
- Team collaboration
- Advanced analytics
- More bandwidth

---

## 🔗 Link Penting

- **Vercel:** https://vercel.com
- **Vercel Docs:** https://vercel.com/docs
- **Vercel CLI:** https://vercel.com/cli
- **GitHub:** https://github.com

---

## 📞 Butuh Bantuan?

- **Vercel Support:** https://vercel.com/support
- **Vercel Discord:** https://vercel.com/discord
- **Email:** aryahidayat1111@gmail.com
- **WhatsApp:** +62 815 2486 6651

---

## 🎉 Selesai!

Setelah deploy, website Anda akan:
- ✅ Live di internet
- ✅ Menggunakan HTTPS (SSL)
- ✅ CDN global (cepat di seluruh dunia)
- ✅ Auto-deploy setiap push ke GitHub
- ✅ Gratis selamanya!

**Contoh URL:** `https://jokiapk-id.vercel.app`

Selamat! Website Anda sudah online! 🚀

