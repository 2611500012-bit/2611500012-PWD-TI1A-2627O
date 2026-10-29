<?php
session_start();

// 1. Inisialisasi variabel awal agar tidak error saat pertama kali dibuka (GET)
$nama         = '';
$email        = '';
$semesterForm = '';
$tanggal      = '';
$jenisPesan   = '';
$prodi        = '';
$pesan        = '';
$minat        = [];
$pesankesalahan = '';

// 2. Pemrosesan Data ketika Formulir Dikirim melalui POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Normalisasi & Sanitasi Masukan
    $nama         = trim((string) ($_POST['nama'] ?? ''));
    $email        = trim((string) ($_POST['email'] ?? ''));
    $semesterForm = trim((string) ($_POST['semester'] ?? ''));
    $tanggal      = trim((string) ($_POST['tanggal'] ?? ''));
    $jenisPesan   = trim((string) ($_POST['jenis_pesan'] ?? ''));
    $prodi        = trim((string) ($_POST['prodi'] ?? ''));
    $pesan        = trim((string) ($_POST['pesan'] ?? ''));
    $minatInput   = $_POST['minat'] ?? [];
    $minat        = is_array($minatInput) ? array_map(static fn ($value) => is_string($value) ? $value : '', $minatInput) : [];
    if (!is_array($minatInput)) {
        $pesankesalahan .= 'Format pilihan topik tidak valid. ';
    }

    // Validasi Kelengkapan Data
    if (trim($nama) === '') { $pesankesalahan .= 'Nama lengkap wajib diisi. '; }
    elseif (strlen($nama) < 3 || strlen($nama) > 50) { $pesankesalahan .= 'Nama lengkap harus terdiri dari 3 sampai 50 karakter. '; }
    if (trim($email) === '') { $pesankesalahan .= 'Email wajib diisi. '; }
    if (trim($semesterForm) === '') { $pesankesalahan .= 'Semester wajib diisi. '; }
    if (trim($tanggal) === '') { $pesankesalahan .= 'Tanggal kunjungan wajib diisi. '; }
    if ($jenisPesan === '') { $pesankesalahan .= 'Jenis pesan wajib dipilih. '; }
    if ($prodi === '') { $pesankesalahan .= 'Program studi wajib dipilih. '; }
    if (trim($pesan) === '') { $pesankesalahan .= 'Pesan wajib diisi. '; }
    if (empty($minat)) { $pesankesalahan .= 'Minat wajib dipilih minimal satu. '; }

    // Validasi Format Email & Semester
    if (trim($semesterForm) !== '') {
        $semesterValid = filter_var($semesterForm, FILTER_VALIDATE_INT);
        if ($semesterValid === false || $semesterValid < 1 || $semesterValid > 14) {
            $pesankesalahan .= 'Semester harus berupa bilangan bulat antara 1 dan 14. ';
        }
    }

    if (trim($email) !== '') {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $pesankesalahan .= 'Format email tidak valid. ';
        }
    }

    $tanggalValid = DateTime::createFromFormat('!Y-m-d', $tanggal);
    if ($tanggal !== '' && (!$tanggalValid || $tanggalValid->format('Y-m-d') !== $tanggal)) {
        $pesankesalahan .= 'Format tanggal kunjungan tidak valid. ';
    }
    if (strlen($pesan) > 300) {
        $pesankesalahan .= 'Pesan maksimal 300 karakter. ';
    }

    // Validasi Pilihan
    if (!in_array($jenisPesan, ['pertanyaan', 'saran'], true)) {
        $pesankesalahan .= 'Jenis pesan tidak valid. ';
    }

    if (!in_array($prodi, ['si', 'ti', 'SI', 'TI'], true)) {
        $pesankesalahan .= 'Program studi tidak valid. ';
    }

    $minatDiizinkan = ['web', 'design'];
    foreach ($minat as $topik) {
        if (!in_array($topik, $minatDiizinkan, true)) {
            $pesankesalahan .= 'Pilihan topik tidak valid. ';
            break;
        }
    }

    // Simpan ke Session & Lakukan Redirect (Pola PRG)
    $_SESSION['pesankesalahan'] = $pesankesalahan;
    $_SESSION['data_form'] = [
        'nama' => $nama,
        'email' => $email,
        'semester' => $semesterForm,
        'tanggal' => $tanggal,
        'jenis_pesan' => $jenisPesan,
        'prodi' => $prodi,
        'minat' => $minat,
        'pesan' => $pesan,
    ];

    header('Location: index.php');
    exit;
}

// 3. Mengambil Data dari Session Setelah Redirect (GET)
$pesankesalahan = $_SESSION['pesankesalahan'] ?? '';
$dataForm = $_SESSION['data_form'] ?? [];
unset($_SESSION['pesankesalahan'], $_SESSION['data_form']);
$nama           = $dataForm['nama'] ?? '';
$email          = $dataForm['email'] ?? '';
$semesterForm   = $dataForm['semester'] ?? '';
$tanggal        = $dataForm['tanggal'] ?? '';
$jenisPesan     = $dataForm['jenis_pesan'] ?? '';
$prodi          = $dataForm['prodi'] ?? '';
$minat          = $dataForm['minat'] ?? [];
$pesan          = $dataForm['pesan'] ?? '';
$formBerhasil = $pesankesalahan === '' && $nama !== '';

// 4. Data Baseline P6
$nim = "2611500012";
$namaMahasiswa = "Indra Heriansyah";
$programStudi = "TI";
$tahunAkademik = "2026/2027";
$semester = 1;
$statusAktif = true;
$catatanTambahan = null;

const NAMA_MATA_KULIAH = "Pemrograman Web Dasar";
const PROFIL_GITHUB = "2611500012-bit";

$batasSemester = 8;
$sisaSemester = $batasSemester - $semester;
$semesterValid = ($semester >= 1 && $semester <= $batasSemester);
$statusSemester = ($semesterValid && $statusAktif) ? "Sesuai rentang" : "Perlu diperiksa";

if ($semester < 3) {
    $keteranganSemester = "Semester awal";
} elseif ($semester <= 6) {
    $keteranganSemester = "Semester menengah";
} else {
    $keteranganSemester = "Semester akhir";
}

$namaProdi = ($programStudi == "SI") ? "Sistem Informasi" : (($programStudi == "TI") ? "Teknik Informatika" : "Lainnya");

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
        <div class="header-top">
            <h1>Profil Mahasiswa</h1>
            <button id="navToggle" aria-expanded="false" aria-label="Buka navigasi">&#9776;</button>
        </div>
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
            <article>
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
                for ($i = 1; $i <= 5; $i++) {
                    echo "<li>Target belajar ke-" . $i . ": ";
                    switch ($i) {
                        case 1: echo "Memahami sintaks dasar PHP."; break;
                        case 2: echo "Menggunakan variabel dan konstanta."; break;
                        case 3: echo "Menerapkan operator dan percabangan."; break;
                        case 4: echo "Menggunakan perulangan for dan while."; break;
                        default: echo "Belum dipetakan"; break;
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
            </article>
        </section>

        <section id="contact">
            <h2>Kontak Saya</h2>

            <!-- Pesan Kesalahan PHP Validation (Session Flash Message) -->
            <?php if ($pesankesalahan !== ''): ?>
                <p class="form-feedback-error">
                    <?= htmlspecialchars($pesankesalahan, ENT_QUOTES, 'UTF-8') ?>
                </p>
            <?php endif; ?>

            <p>
                Kunjungi <a target="_blank" href="https://github.com/<?= PROFIL_GITHUB ?>">profil GitHub saya</a>.
            </p>

            <div id="formFeedback"></div>

            <form id="contactForm" action="index.php" method="post" novalidate>
                <div class="form-group">
                    <label for="nama">Nama Lengkap:</label><br />
                    <input type="text" id="nama" name="nama" class="input-form" minlength="3" maxlength="50" value="<?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') ?>" required />
                </div>

                <div class="form-group">
                    <label for="email">Email:</label><br />
                    <input type="email" id="email" name="email" class="input-form" value="<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>" required />
                </div>

                <div class="form-group">
                    <label for="semester">Semester:</label><br />
                    <input type="number" id="semester" name="semester" class="input-form" min="1" max="14" value="<?= htmlspecialchars($semesterForm, ENT_QUOTES, 'UTF-8') ?>" required />
                </div>

                <div class="form-group">
                    <label for="tanggal">Tanggal Kunjungan:</label><br />
                    <input type="date" id="tanggal" name="tanggal" class="input-form" value="<?= htmlspecialchars($tanggal, ENT_QUOTES, 'UTF-8') ?>" required />
                </div>

                <div class="form-group">
                    <label>Jenis Pesan:</label><br />
                    <input type="radio" id="pertanyaan" name="jenis_pesan" value="pertanyaan" <?= $jenisPesan === 'pertanyaan' ? 'checked' : '' ?> required />
                    <label for="pertanyaan">Pertanyaan</label>
                    <input type="radio" id="saran" name="jenis_pesan" value="saran" <?= $jenisPesan === 'saran' ? 'checked' : '' ?> />
                    <label for="saran">Saran</label>
                </div>

                <div class="form-group">
                    <label>Topik Minat:</label><br />
                    <input type="checkbox" id="web" name="minat[]" value="web" <?= in_array('web', $minat, true) ? 'checked' : '' ?> />
                    <label for="web">HTML</label>
                    <input type="checkbox" id="design" name="minat[]" value="design" <?= in_array('design', $minat, true) ? 'checked' : '' ?> />
                    <label for="design">CSS</label>
                </div>

                <div class="form-group">
                    <label for="prodi">Program Studi:</label><br />
                    <select id="prodi" name="prodi" class="input-form" required>
                        <option value="">-- Pilih Program Studi --</option>
                        <option value="ti" <?= $prodi === 'ti' ? 'selected' : '' ?>>Teknik Informatika</option>
                        <option value="si" <?= $prodi === 'si' ? 'selected' : '' ?>>Sistem Informasi</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="pesan">Pesan:</label><br />
                    <textarea id="pesan" name="pesan" class="input-form" maxlength="300" required><?= htmlspecialchars($pesan, ENT_QUOTES, 'UTF-8') ?></textarea>
                </div>

                <button type="submit">Kirim Pesan</button>
                <button type="reset">Batal</button>
            </form>

            <!-- Tampilan Output Data Peladen -->
            <?php if ($formBerhasil): ?>
                <h3>Data yang Diterima Peladen</h3>
                <p>Nama: <?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') ?></p>
                <p>Email: <?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?></p>
                <p>Semester: <?= htmlspecialchars($semesterForm, ENT_QUOTES, 'UTF-8') ?></p>
                <p>Tanggal kunjungan: <?= htmlspecialchars($tanggal, ENT_QUOTES, 'UTF-8') ?></p>
                <p>Jenis pesan: <?= htmlspecialchars($jenisPesan, ENT_QUOTES, 'UTF-8') ?></p>
                <p>Program studi: <?= htmlspecialchars($prodi, ENT_QUOTES, 'UTF-8') ?></p>
                <p>Minat:</p>
                <?php if (is_array($minat) && count($minat) > 0): ?>
                    <ul>
                    <?php foreach ($minat as $topik): ?>
                        <li><?= htmlspecialchars((string) $topik, ENT_QUOTES, 'UTF-8') ?></li>
                    <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <p>Tidak ada minat yang dipilih.</p>
                <?php endif; ?>
                <p>Pesan:</p>
                <p><?= nl2br(htmlspecialchars($pesan, ENT_QUOTES, 'UTF-8')) ?></p>
            <?php endif; ?>
        </section>
    </main>

    <footer>
        <p>&copy; <?= date("Y") ?> <?php echo $namaMahasiswa; ?> [<?= $nim ?>]</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>
