# Landing Page Bengkel Motor - Garasi Prima Motor

Website landing page modern, bersih, profesional, dan responsif untuk usaha bengkel motor umum & servis berkala. Dibangun dengan arsitektur **PHP Native Modular** dan **Tailwind CSS**.

---

## 🌟 Fitur Utama

1. **Unified Clean Light Automotive Design**: Desain terang, bersih, dan konsisten tanpa balok hitam yang jomplang, tanpa gradien pelangi, dan bebas dari elemen klise *AI Slop*.
2. **Sistem Tombol Terstandarisasi**: Seluruh tombol memiliki geometri seragam (tinggi 44px, radius 8px) dengan hierarki Primary (merah solid) dan Secondary (putih border netral).
3. **Format Kontak WhatsApp Seluler**: Menggunakan nomor seluler Indonesia format `0812-8765-4321` yang siap diklik langsung ke WhatsApp.
4. **Konfigurasi Terpusat (`config.php`)**: Semua data profil bengkel, jadwal operasional, layanan, harga, keunggulan, FAQ, dan link Google Maps dapat disesuaikan di satu file saja.
5. **Indikator Jam Buka / Tutup Real-Time**: Otomatis mendeteksi status buka/tutup bengkel hari ini secara real-time dan menampilkan badge warna.
6. **Fokus Konversi Datang Langsung**: Tombol navigasi rute Google Maps GPS dan peta interaktif yang memudahkan pelanggan menemukan bengkel.
7. **Komitmen Kejujuran & Bawa Part Sendiri**: Transparansi pengerjaan di depan mata, boleh bawa sparepart/oli sendiri, sparepart bekas wajib dikembalikan, pembayaran QRIS & tunai.
8. **Tanya Jawab (FAQ) Interaktif**: Accordion interaktif untuk menjawab pertanyaan umum pelanggan.
9. **Jadwal Mingguan Lengkap**: Tabel jam operasional mingguan dengan highlight otomatis pada hari yang sedang aktif.

---

## 📁 Struktur File & Folder

```
landing-page-bengkel-motor/
├── config.php                 # Konfigurasi data bengkel (nama, kontak 08xx, jam, layanan, FAQ, peta)
├── index.php                  # Halaman utama yang memuat partials
├── README.md                  # Panduan penggunaan dan kustomisasi
├── includes/
│   └── helpers.php            # Logika perhitungan status buka/tutup & keamanan output
├── partials/
│   ├── head.php               # Header HTML, meta SEO, Tailwind, Google Fonts
│   ├── navbar.php             # Navigasi atas terang, logo, live badge, menu mobile
│   ├── hero.php               # Headline fungsional, tombol standar, kartu keunggulan
│   ├── features.php           # 6 Keunggulan bengkel
│   ├── services.php           # Katalog layanan & estimasi biaya jasa
│   ├── workflow.php           # Alur 4 langkah servis transparan
│   ├── facilities.php         # Komitmen kejujuran bengkel & pembayaran QRIS/Tunai
│   ├── faq.php                # Accordion FAQ interaktif
│   ├── location.php           # Peta Google Maps interaktif & jadwal mingguan
│   └── footer.php             # Clean light footer, kontak WhatsApp, copyright
└── assets/
    ├── css/
    │   └── custom.css         # Styling kustom & sistem tombol .btn-primary / .btn-secondary
    └── js/
        └── main.js            # Interaksi FAQ, mobile menu, & sticky navbar
```

---

## 🚀 Cara Menjalankan di Komputer Lokal

### Menggunakan PHP Built-in Server (Paling Mudah)
Buka terminal/PowerShell di folder proyek ini, lalu jalankan:
```bash
php -S localhost:8000
```
Buka browser dan akses: `http://localhost:8000`

### Menggunakan XAMPP / Laragon / WampServer
1. Pindahkan folder `landing-page-bengkel-motor` ke dalam folder `htdocs` (XAMPP) atau `www` (Laragon).
2. Nyalakan service Apache di kontrol panel XAMPP/Laragon.
3. Akses via browser: `http://localhost/landing-page-bengkel-motor`

---

## ⚙️ Cara Mengubah Data Bengkel

Cukup buka file `config.php` menggunakan text editor (VS Code, Notepad, dll), Anda dapat mengubah:
- **Nama Bengkel**: Ganti nilai `'name'`
- **Alamat & Patokan**: Ganti nilai `'address'` dan `'landmark'`
- **Nomor WhatsApp**: Ganti nilai `'phone'`, `'phone_raw'`, dan `'whatsapp_url'`
- **Link Google Maps**: Ganti `'google_maps_directions'` dan `'google_maps_embed'`
- **Jam Operasional**: Sesuaikan jam buka/tutup untuk setiap hari pada array `'schedule'`
- **Daftar Layanan & Harga**: Tambah atau ubah item pada array `'services'`
- **Tanya Jawab FAQ**: Tambah pertanyaan dan jawaban pada array `'faqs'`
