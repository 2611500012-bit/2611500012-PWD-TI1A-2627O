# Pertemuan-8
# Tahap 1: Setup Folder
- Menyiapkan folder bahan ajar ke pertemuan 8 untuk siap UTS.


## Tahap 2: Menambahkan Menu Navigasi dan Form HTML
- Menambahkan menu navigasi rencana kegiatan.
- Menambahkan <section id="kegiatan"> di index sebelum <section id="contact"> dengan input:
  - Nama kegiatan (text)
  - Kategori Kegiatan (select)
  - Tanggal Pelaksanaan (date)
  - Lokasi Kegiatan (text)
  - Deskripsi Kegiatan (textarea)
  - Tombol Kirim (submit) & Batal (reset)


## Tahap 3: Pemrosesan Data POST di Sisi Peladen (PHP) dan Pola PRG
- Mengubah logika pemrosesan metode POST untuk membedakan masukan dari formulir kontak dan formulir rencana kegiatan menggunakan nilai form_type.
- Mengimplementasikan sanitasi/normalisasi masukan menggunakan trim().
- Menyimpan hasil input formulir kegiatan ke dalam $_SESSION.
- Menerapkan pola Post Redirect Get (PRG) mengarahkan kembali pengguna ke index.php#kegiatan guna mencegah resubmission data saat memuat ulang halaman.


## Tahap 4: Validasi JavaScript dan Pengujian Akhir
- Menambahkan script validasi pada script.js untuk mengecek input sebelum dikirim.
- Melakukan tes fungsi pada form kegiatan dan memastikan form kontak lama tetap berjalan normal.


## Hasil Pengujian
- Navigasi: Klik rencana, halaman berpindah ke section kegiatan -> Berhasil
- Validasi JS: Submit formulir saat input masih kosong, form tidak terkirim dan pesan peringatan muncul -> Berhasil
- Pemrosesan PHP: Mengisi dan mengirim formulir kegiatan, data tersimpan di session dan tampil di halaman -> Berhasil
- Pola PRG: Memuat ulang halaman setelah submit, data tidak terkirim ganda saat refresh -> Berhasil
- Fitur Kontak Lama: Mengirim formulir kontak, fitur kontak tetap berfungsi dengan baik -> Berhasil