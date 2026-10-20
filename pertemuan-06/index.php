<?php

$nim = "2611500012";
$namaMahasiswa = "Indra Heriansyah";
$programStudi = "TI";
$tahunAkademik = "2026/2027";
$semester = 1;
$statusAktif = true;
$catatanTambahan = null;

const NAMA_MATA_KULIAH = "Pemrograman Web Dasar";
const PROFIL_GITHUB = "2611500012-bit";
// Bagian 2: Operator
$batasSemester = 8;
$sisaSemester = $batasSemester - $semester;
$semesterValid = ($semester >= 1 && $semester <= $batasSemester);
$statusSemester = ($semesterValid && $statusAktif) ? "Sesuai rentang" : "Perlu diperiksa";

// Bagian 3: Percabangan if-elseif-else
if ($semester < 3) {
    $keteranganSemester = "Semester awal";
} elseif ($semester <= 6) {
    $keteranganSemester = "Semester menengah";
} else {
    $keteranganSemester = "Semester akhir";
}

// Bagian 4: Operator Ternary
$namaProdi = ($programStudi == "SI") ? "Sistem Informasi" : (($programStudi == "TI") ? "Teknik Informatika" : "Lainnya");

// Bagian 5: Percabangan switch-case-default
switch ($programStudi) {
    case "SI":
        $fokusProgramStudi = "Sistem informasi dan proses bisnis";
        break;
    case "TI":
        $fokusProgramStudi = "Komputasi dan pengembangan perangkat lunak";
        break;
    default:
        $fokusProgramStudi = "Belum ditentukan";
        break;
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil Mahasiswa</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <header>
        <button id="navToggle" aria-expanded="false" aria-label="Buka navigasi">&#9776;</button>
        <nav id="navMenu">
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home">
            <h2>Selamat Datang</h2>
            <p>Halo, saya <strong><?php echo $namaMahasiswa; ?></strong>. Saya sedang mempelajari matakuliah <strong><?php print NAMA_MATA_KULIAH; ?></strong> pada tahun akademik <?php echo $tahunAkademik; ?>.</p>
            <img src="img/foto-profil.jpeg" alt="Foto Profil Indra Heriansyah" />
        </section>

        <section id="about">
            <h2>Tentang Saya</h2>
            <h3>Profil Singkat</h3>
            <p>Program Studi: <?php echo $namaProdi . " (" . $programStudi . ")"; ?></p>
            <p>Fokus program studi: <?php echo $fokusProgramStudi; ?></p>
            <p>Status mahasiswa: <?php echo $statusAktif ? "Aktif" : "Tidak aktif"; ?></p>
            <p>Semester: <?php echo $semester . " (" . $keteranganSemester . ")"; ?></p>
            <p>Sisa semester hingga batas: <?php echo $sisaSemester; ?></p>
            <p>Pemeriksaan rentang semester: <?php echo $statusSemester; ?></p>
            <p>Saya mahasiswa Program Studi Teknik Informatika.</p>

            <h3>Target Belajar (Perulangan for)</h3>
            <ol>
            <?php
            // Perulangan for tanpa array
            for ($i = 1; $i <= 5; $i++) {
                echo "<li>Target belajar ke-" . $i . ": ";
                switch ($i) {
                    case 1:
                        echo "Memahami sintaks dasar PHP.";
                        break;
                    case 2:
                        echo "Menggunakan variabel dan konstanta.";
                        break;
                    case 3:
                        echo "Menerapkan operator dan percabangan.";
                        break;
                    case 4:
                        echo "Menggunakan perulangan for dan while.";
                        break;
                    default:
                        echo "Belum dipetakan";
                        break;
                }
                echo "</li>";
            }
            ?>
            </ol>

            <h3>Semester (Perulangan while):</h3>
            <ol>
            <?php
            $nomorSemester = 1;
            while ($nomorSemester <= 3) {
                echo "<li>Semester " . $nomorSemester . "</li>";
                $nomorSemester++;
            }
            ?>
            </ol>
        </section>

        <section id="contact">
            <h2>Kontak Saya</h2>

            <p>
    Kunjungi <a target="_blank" href="https://github.com/2611500012-bit<?= PROFIL_GITHUB ?>">profil GitHub saya</a>.
</p>

            <div id="formFeedback"></div>

            <form id="contactForm" action="index.php" method="get" novalidate>
                <div class="form-group">
                    <label for="nama">Nama Lengkap:</label><br />
                    <input type="text" id="nama" name="nama" class="input-form" />
                </div>

                <div class="form-group">
                    <label for="email">Email:</label><br />
                    <input type="email" id="email" name="email" class="input-form" />
                </div>

                <div class="form-group">
                    <label for="semester">Semester:</label><br />
                    <input type="number" id="semester" name="semester" class="input-form" />
                </div>

                <div class="form-group">
                    <label for="tanggal">Tanggal Kunjungan:</label><br />
                    <input type="date" id="tanggal" name="tanggal" class="input-form" />
                </div>

                <div class="form-group">
                    <label>Jenis Pesan:</label><br />
                    <input type="radio" id="pertanyaan" name="jenis_pesan" value="pertanyaan" />
                    <label for="pertanyaan">Pertanyaan</label>
                    <input type="radio" id="saran" name="jenis_pesan" value="saran" />
                    <label for="saran">Saran</label>
                </div>

                <div class="form-group">
                    <label>Topik Minat:</label><br />
                    <input type="checkbox" id="web" name="minat" value="web" />
                    <label for="web">HTML</label>
                    <input type="checkbox" id="design" name="minat" value="design" />
                    <label for="design">CSS</label>
                </div>

                <div class="form-group">
                    <label for="prodi">Program Studi:</label><br />
                    <select id="prodi" name="prodi" class="input-form">
                        <option value="">-- Pilih Program Studi --</option>
                        <option value="ti">Teknik Informatika</option>
                        <option value="si">Sistem Informasi</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="pesan">Pesan:</label><br />
                    <textarea id="pesan" name="pesan" class="input-form"></textarea>
                </div>

                <button type="submit">Kirim Pesan</button>
                <button type="reset">Batal</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; <?= date("Y") ?> <?php echo $namaMahasiswa; ?> [<?= $nim ?>]</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>