# pertemuan-05
# P5 - JavaScript Dasar, DOM, Event, dan Validasi Sisi Klien

## Deskripsi
Dokumentasi pengerjaan modul Pertemuan 5 (P5) untuk menerapkan JavaScript pada halaman web, meliputi manipulasi DOM, event listener, menu navigasi responsif, dan validasi formulir di sisi klien.

## Fitur dan Pengembangan
- Penyiapan Baseline P5: Menyiapkan folder `pertemuan-05/` dan menyalin berkas `index.html`, `style.css`, serta folder `img/` dari P4.
- Menghubungkan JavaScript: Menambahkan tag script untuk menghubungkan file `script.js` di dalam `index.html`.
- Interaksi Navigasi Responsif: Membuat fungsi klik pada tombol hamburger menu menggunakan `addEventListener` dan `classList.toggle()` untuk membuka/menutup menu di layar HP.
- Validasi Formulir: Mencegah form reload otomatis dengan `event.preventDefault()`, mengecek apakah semua input sudah diisi, dan mengecek format email.
- Umpan Balik: Menampilkan pesan alert pemberitahuan saat data belum lengkap atau saat form berhasil dikirim.

## Pengujian
- Tes Tombol Navigasi: Mencoba klik tombol menu di tampilan mobile, menu berhasil muncul dan sembunyi saat diklik ulang.
- Tes Validasi Input Kosong: Mencoba kirim form tanpa isi data, muncul alert pemberitahuan bahwa data harus diisi.
- Tes Format Email: Mencoba isi email tanpa simbol `@` atau domain, muncul alert bahwa format email salah.
- Tes Kirim Berhasil: Mengisi form dengan benar, muncul alert sukses dan isian form otomatis di-reset.
- Cek DevTools Console: Membuka inspect elemen di browser, tidak ada error JavaScript yang muncul.

## Riwayat Pengembangan
- Siapkan baseline P5 dari artefak P4: Salin berkas baseline P4 ke folder P5 dan cek kondisi awal.
- Tambah interaksi navigasi dan validasi formulir sisi klien: Menambahkan fitur JavaScript di file script.js.
- Selesaikan pengujian, debugging, dan dokumentasi P5: Pengujian fitur dan penyelesaian berkas README.md.