# Pertemuan 7 — Pemrosesan Formulir

Nama: Indra Heriansyah
NIM: 2611500012
Kelompok: TI1A
Tahun Ajaran: 2026/2027 Gasal

## Tujuan

Menerapkan pengiriman formulir dengan metode POST, validasi JavaScript dan PHP, pola POST/Redirect/GET, serta menampilkan kembali data dengan aman.

## Tahapan Pengerjaan

1. **Pemeriksaan awal** — memeriksa baseline profil dan formulir serta perubahan lokal yang sudah ada. Form utama diarahkan memakai POST; berkas lama `indexGet.php` tidak digunakan.
2. **Pemrosesan peladen** — memeriksa kolom wajib, panjang nama dan pesan, format email/tanggal, rentang semester, serta nilai pilihan. Data POST dipindahkan melalui session dan redirect agar refresh tidak mengirim ulang formulir.
3. **Tampilan dan keamanan** — mengisi kembali nilai form setelah redirect, hanya menampilkan ringkasan data bila valid, dan melakukan escaping pada semua nilai yang ditampilkan. Ikon navigasi diperbaiki agar tidak tampil sebagai teks rusak.
4. **Pengujian** — hasil tercatat di bagian berikut.

## Cara Menjalankan

Dari folder ini jalankan:

```sh
php -S localhost:8000
```

Buka `http://localhost:8000` di browser.

## Hasil Pengujian

- `php -l index.php` — lulus, tidak ada kesalahan sintaks.
- `node --check script.js` — lulus, tidak ada kesalahan sintaks.
- Uji POST valid melalui server PHP lokal — menerima redirect HTTP 302 dan menampilkan ringkasan data setelah GET.
- Uji POST tidak valid — menerima redirect, menampilkan umpan balik kesalahan, dan tidak menampilkan ringkasan sebagai data berhasil.
- Uji masukan HTML — nilai dipertahankan dengan aman setelah redirect dan karakter HTML di-escape.

## Catatan Git

README diperbarui untuk tahap pemeriksaan, implementasi, dan pengujian. Seluruh perubahan pertemuan 7 dipublikasikan setelah pemeriksaan selesai.
