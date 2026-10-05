# Pertemuan 4 - CSS3 Layout dan Responsive Web Design

## Pengembangan
- Perubahan yang dilakukan: Membuat halaman profil mahasiswa dengan bagian Beranda, Tentang Saya, dan Kontak. CSS mengatur warna, jarak, tipografi, gambar profil, formulir, navigasi flex, serta tata letak grid dua kolom pada konten utama. Gambar pada bagian Beranda dibatasi agar lebarnya tidak melebihi wadah.
- Commit dan push GitHub: Belum dilakukan.

## Pengujian
- Perangkat bergerak (lebar 375 px): Pemeriksaan aturan CSS menunjukkan layout `main` tetap dua kolom karena tidak ada aturan media query. Tampilan pada browser/perangkat fisik belum diuji; layout ini berpotensi terasa sempit pada layar kecil.
- Desktop (lebar 1366 px): Pemeriksaan aturan CSS menunjukkan `main` menggunakan grid dua kolom dan bagian Kontak membentang selebar grid. Tampilan pada browser belum diuji.
- Galat dan perbaikan: Pemeriksaan CSS menemukan belum ada breakpoint untuk mengubah grid menjadi satu kolom pada layar kecil. Belum ada perubahan CSS yang dilakukan untuk itu.
- Validasi CSS: Pemeriksaan sintaks dasar dengan Node.js menunjukkan 26 kurung kurawal pembuka dan 26 penutup. Validator CSS khusus belum dijalankan.

## Repositori
URL GitHub: https://github.com/2611500012-bit/2611500012-PWD-TI1A-2627O
