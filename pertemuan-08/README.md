# Pertemuan-8
## 1. saya menyiapkan folder bahan ajar ke pertemuan 8 untuk siap uts
1. saya menambahkan menu navigasi rencana kegiatan, menambahkan <section id="kegiatan"> di index sebelum <section id="contact"> dengan menambahkan input kayak gini
    - nama kegiatan (text)
    - Kategori Kegiatan (select)
    - Tanggal Pelaksanaan (date)
    - Lokasi Kegiatan (text)
    - Deskripsi Kegiatan (textarea)
    - Tombol Kirim (submit) & Batal (reset)

    ### Tahap selanjutt nya Pemrosesan Data POST di Sisi Peladen (PHP) dan Pola PRG atau Post redirect get
    - Mengubah logika pemrosesan metode POST untuk membedakan masukan dari formulir kontak dan formulir rencana kegiatan menggunakan nilai form_type.
    - Mengimplementasikan sanitasi/normalisasi masukan menggunakan trim().
    - Menyimpan hasil input formulir kegiatan ke dalam $_SESSION.
    - Menerapkan pola Post redirect Get (PRG) mengarahkan kembali pengguna ke index.php#kegiatan guna mencegah resubmission data saat memuat ulang halaman.