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
  6. jenis_pesan -> VARCHAR(20) untuk 
  ## E. Membuat Basis Data dan Tabel Menggunakan phpMyAdmin
- E.1 & E.2 Pembuatan Basis Data: Berhasil membuat basis data db_pwd_2611500012 melalui menu Databases pada phpMyAdmin dengan collation bawaan.
- E.3 & E.4 Pembuatan Tabel dan Kolom: Berhasil membuat tabel tbl_kontak_2611500012 dengan 9 kolom (id, nama, email, semester, tanggal, jenis_pesan, minat, prodi, pesan). Kolom id ditetapkan sebagai PRIMARY KEY dengan AUTO_INCREMENT.
- E.5 & E.6 Pemeriksaan Struktur dan DDL: Memahami perintah DDL CREATE DATABASE, USE, dan CREATE TABLE yang merepresentasikan struktur tabel. Hasil pengecekan melalui tab Structure dan perintah DESCRIBE tbl_kontak_2611500012 sudah sesuai dengan rancangan pada Bagian D.menyimpan pilihan pertanyaan atau saran.
  7. minat -> VARCHAR(50) untuk menyimpan pilihan topik yang dipisahkan koma.
  8. prodi -> VARCHAR(2) untuk menyimpan kode program studi (SI atau TI).
  9. pesan -> VARCHAR(300) untuk menyimpan isi pesan (maksimal 300 karakter).
  ## E. Membuat Basis Data dan Tabel Menggunakan phpMyAdmin
- E.1 & E.2 Pembuatan Basis Data: Berhasil membuat basis data db_pwd_2611500012 melalui menu Databases pada phpMyAdmin dengan collation bawaan.
- E.3 & E.4 Pembuatan Tabel dan Kolom: Berhasil membuat tabel tbl_kontak_2611500012 dengan 9 kolom (id, nama, email, semester, tanggal, jenis_pesan, minat, prodi, pesan). Kolom id ditetapkan sebagai PRIMARY KEY dengan AUTO_INCREMENT.
- E.5 & E.6 Pemeriksaan Struktur dan DDL: Memahami perintah DDL CREATE DATABASE, USE, dan CREATE TABLE yang merepresentasikan struktur tabel. Hasil pengecekan melalui tab Structure dan perintah DESCRIBE tbl_kontak_2611500012 sudah sesuai dengan rancangan pada Bagian D.
## F. Memasukkan dan Memeriksa Data Awal
- F.1 Memasukkan Data via Insert: Berhasil menambahkan data pertama (Indra Heriansyah) melalui tab Insert phpMyAdmin dengan mengosongkan kolom id agar terisi otomatis oleh AUTO_INCREMENT.
- F.2 Memasukkan Data via SQL INSERT: Berhasil menambahkan data kedua (Andi) menggunakan perintah DML INSERT INTO pada tab SQL.
- F.3 & F.4 Pemeriksaan Data via Browse: Melalui tab Browse, kedua baris data tampil lengkap dengan id 1 dan 2 serta seluruh isi atribut sudah sesuai dengan ketentuan formulir P9.
## G. Mengekspor Struktur dan Data Basis Data
- G.1 & G.2 Pengaturan dan Proses Ekspor: Berhasil mengekspor basis data db_pwd_2611500012 menggunakan metode Quick dan format SQL. Berkas hasil ekspor db_pwd_2611500012.sql telah dipindahkan ke dalam direktori pertemuan-10\.
- G.3 Pemeriksaan Berkas Ekspor SQL: Setelah diperiksa menggunakan VS Code, berkas db_pwd_2611500012.sql telah memuat definisi struktur tabel (CREATE TABLE tbl_kontak_2611500012) beserta 9 atributnya serta data awal (INSERT INTO) sesuai dengan yang tampil pada phpMyAdmin.

## H. Pengujian Akhir
- Seluruh tahapan analisis kebutuhan data, perancangan 9 kolom, pembuatan basis data dan tabel di phpMyAdmin, pemasukan data awal, serta ekspor ke berkas db_pwd_2611500012.sql telah selesai diuji dan berjalan sesuai instruksi modul P10.
- Berkas pada direktori pertemuan-09\ tetap terjaga utuh tanpa perubahan.