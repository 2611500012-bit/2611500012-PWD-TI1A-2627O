# Pertemuan-8
##  saya menyiapkan folder bahan ajar ke pertemuan 8 untuk siap uts
1. saya menambahkan menu navigasi rencana kegiatan, menambahkan <section id="kegiatan"> di index sebelum <section id="contact"> dengan menambahkan input kayak gini
    - nama kegiatan (text)
    - Kategori Kegiatan (select)
    - Tanggal Pelaksanaan (date)
    - Lokasi Kegiatan (text)
    - Deskripsi Kegiatan (textarea)
    - Tombol Kirim (submit) & Batal (reset)

 ## Tahap selanjutt nya Pemrosesan Data POST di Sisi Peladen (PHP) dan Pola PRG atau Post redirect get
    - Mengubah logika pemrosesan metode POST untuk membedakan masukan dari formulir kontak dan formulir rencana kegiatan menggunakan nilai form_type.
    - Mengimplementasikan sanitasi/normalisasi masukan menggunakan trim().
    - Menyimpan hasil input formulir kegiatan ke dalam $_SESSION.
    - Menerapkan pola Post redirect Get (PRG) mengarahkan kembali pengguna ke index.php#kegiatan guna mencegah resubmission data saat memuat ulang halaman.

## Validasi JavaScript dan Pengujian Akhir
- Menambahkan script validasi pada script.js untuk mengecek input sebelum dikirim.
- Melakukan tes fungsi pada form kegiatan dan memastikan form kontak lama tetap berjalan normal.

ini hasil pengujian saya
- Navigasi, klik rencana, halaman berpindah ke section kegiatan, `berhasil`

- Validasi JS,Submit formulir saat input masih kosong,Form tidak terkirim dan pesan peringatan muncul, `Berhasil`

- Pemrosesan PHP, Mengisi dan mengirim formulir kegiatan, Data tersimpan di session dan tampil di halaman, `Berhasil`
- Pola PRG, Memuat ulang halaman setelah submit, Data tidak terkirim ganda saat refresh, `Berhasil`

- Fitur Kontak Lama, Mengirim formulir kontak, Fitur kontak tetap berfungsi dengan baik, `Berhasil`