# Dokumentasi Pertemuan 6 (P6) - Pemrograman Web Dasar

Nama: [Indra Heriansyah]  
NIM:[2611500012]  
Kelas:[TI1A]  

# Persiapan Pengembangan P6

# Verifikasi Baseline P5 dan Lingkungan Kerja
- Lokasi Proyek: C:\laragon\www\pwd\2627o\ti1a\2611500012-PWD-TI1A-2627O\pertemuan-06
- Layanan Peladen Lokal (Laragon)
  - Apache: Berjalan pada Port 80 / 443
  - MySQL: Berjalan pada Port 3306

- **Verifikasi Berkas Baseline P5:**
  - `img/foto-profil.jpg` (Tersedia)
  - `style.css` (Tersedia)
  - `script.js` (Tersedia)
  - `index.html` (Telah diubah namanya menjadi `index.php`)

### Hasil Verifikasi Akses Localhost
- Alamat URL Akses: https://localhost/pwd/2627o/ti1a/2611500012-PWD-TI1A-2627O/pertemuan-06/.

- Hasil Pengujian Akses
  - Halaman `index.php` berhasil diproses oleh peladen Apache dan dibuka melalui peramban tanpa adanya galat (*error*).
  - Tampilan visual, gaya CSS, interaksi JavaScript, serta struktur navigasi dari baseline P5 tetap berfungsi dan dipertahankan dengan baik.

  ## C. Dasar PHP dan Integrasi dengan HTML

### C.1 - C.3 Pengujian Tag PHP, Komentar, Echo, dan Print
- **Pengujian Tag PHP (`<?php ?>`):** Kode PHP berhasil diproses oleh peladen Apache. Saat diperiksa via View Page Source (`Ctrl + U`), kode sumber PHP mentah dan komentar tidak dikirimkan ke peramban.
- Pengujian `echo` vs `print`:
  - `echo` digunakan untuk mencetak keluaran teks secara langsung.
  - `print` juga berhasil mencetak keluaran teks pada halaman.