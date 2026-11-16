# pertemuan-10


## B. Persiapan Pengembangan P10
- **B.1 Verifikasi Baseline:** Berhasil menyalin artefak dari `pertemuan-09\` ke `pertemuan-10\` (`index.php`, `fungsi.php`, `script.js`, `style.css`, `README.md`, `img/foto-profil.jpg`). Aplikasi berjalan normal di `localhost`.
- **B.2 Lingkungan Pengembangan:** Layanan Apache dan MySQL pada Laragon berstatus *started*.
- **B.3 Kesiapan phpMyAdmin:** Berhasil mengakses `http://localhost/phpmyadmin/` dan terhubung ke server MySQL (`root@localhost`).

## C. Analisis Kebutuhan Data Formulir Kontak
- C.1 & C.2 Identifikasi Data: Berdasarkan pengecekan pada pertemuan-10\index.php, terdapat 8 input dari formulir Kontak yang akan disimpan ke basis data, yaitu nama, email, semester, tanggal, jenis_pesan, minat[], prodi, dan pesan. Informasi profil statis mahasiswa (seperti NIM dan IPK) tidak dimasukkan.
- C.3 Penanganan Field minat[]: Karena pada P10 ini hanya menggunakan satu tabel, nilai dari checkbox minat[] (HTML dan/atau CSS) akan disimpan dalam satu kolom minat berbentuk teks yang dipisahkan koma (contohnya: HTML, CSS).

## D. Merancang Struktur Tabel MySQL
- D.1 Penamaan Basis Data dan Tabel:
  - Nama Basis Data: db_pwd_2611500012
  - Nama Tabel: tbl_kontak_2611500012
- D.2 - D.4 Rancangan Struktur 9 Kolom:
  1. id -> INT (PRIMARY KEY, AUTO_INCREMENT) sebagai identitas unik otomatis.
  2. nama -> VARCHAR(50) untuk menyimpan nama lengkap (maksimal 50 karakter).
  3. email -> VARCHAR(255) untuk menyimpan alamat email.
  4. semester -> TINYINT untuk menyimpan angka semester.
  5. tanggal -> DATE untuk menyimpan tanggal kunjungan.
  6. jenis_pesan -> VARCHAR(20) untuk menyimpan pilihan pertanyaan atau saran.
  7. minat -> VARCHAR(50) untuk menyimpan pilihan topik yang dipisahkan koma.
  8. prodi -> VARCHAR(2) untuk menyimpan kode program studi (SI atau TI).
  9. pesan -> VARCHAR(300) untuk menyimpan isi pesan (maksimal 300 karakter).