<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['nama'])) {
    header("Location: login.php");
    exit;
}

$bmr = 0;
$tdee = 0;
$defisit = 0;

$proteinGram = 0;
$karboGram = 0;
$lemakGram = 0;

if (isset($_POST['hitung'])) {

    $umur = $_POST['usia'];
    $gender = $_POST['gender'];
    $berat = $_POST['berat'];
    $tinggi = $_POST['tinggi'];
    $aktivitas = $_POST['aktivitas'];

    // USER ID
    $user_id = $_SESSION['id'];

    // HITUNG BMI
    $tinggiMeter = $tinggi / 100;
    $bmi = $berat / ($tinggiMeter * $tinggiMeter);

    // STATUS BADAN
    if ($bmi < 18.5) {
        $status = "Kurus";
    } elseif ($bmi < 25) {
        $status = "Normal";
    } elseif ($bmi < 30) {
        $status = "Gemuk";
    } else {
        $status = "Obesitas";
    }

    // HITUNG BMR
    if ($gender == "Laki-laki") {
        $bmr = (10 * $berat) + (6.25 * $tinggi) - (5 * $umur) + 5;
    } else {
        $bmr = (10 * $berat) + (6.25 * $tinggi) - (5 * $umur) - 161;
    }

    // TDEE
    if ($aktivitas == "Ringan") {
        $multiplier = 1.375;
    } elseif ($aktivitas == "Sedang") {
        $multiplier = 1.55;
    } else {
        $multiplier = 1.725;
    }

    $tdee = $bmr * $multiplier;

    // DEFISIT
    $defisit = $tdee - 500;

    // MAKRONUTRIEN
    $proteinGram = ($tdee * 0.20) / 4;
    $karboGram = ($tdee * 0.50) / 4;
    $lemakGram = ($tdee * 0.30) / 9;

    // TARGET BERAT
    $target_berat = $berat - 5;

    // SIMPAN KE DATABASE
    mysqli_query($koneksi, "
        INSERT INTO data_gizi
        (
            user_id,
            umur,
            jenis_kelamin,
            tinggi_badan,
            berat_badan,
            target_berat,
            aktivitas,
            bmi,
            kalori_harian,
            status_badan
        )

        VALUES
        (
            '$user_id',
            '$umur',
            '$gender',
            '$tinggi',
            '$berat',
            '$target_berat',
            '$aktivitas',
            '$bmi',
            '$tdee',
            '$status'
        )
    ");
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebutuhan Kalori</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/kalori.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

    <div class="main-container">

        <div class="sidebar">

            <div>

                <div class="logo-area">

                    <img src="assets/logo02.png" class="logo-img">

                    <h3>NutriCare</h3>

                    <p>Sistem Perhitungan Gizi <br>& Berat Badan</p>

                </div>

                <ul class="menu">

                    <li>
                        <a href="dashboard.php">
                            <i class="fa-solid fa-house"></i>
                            Dashboard
                        </a>
                    </li>

                    <li>
                        <a href="bmi.php">
                            <i class="fa-solid fa-calculator"></i>
                            Hitung BMI
                        </a>
                    </li>

                    <li>
                        <a href="target.php">
                            <i class="fa-solid fa-bullseye"></i>
                            Target Berat
                        </a>
                    </li>

                    <li>
                        <a href="kalori.php" class="active">
                            <i class="fa-solid fa-fire"></i>
                            Kebutuhan Kalori
                        </a>
                    </li>

                    <li>
                        <a href="rekomendasi.php">
                            <i class="fa-solid fa-gem"></i>
                            Rekomendasi Gizi
                        </a>
                    </li>

                    <li>
                        <a href="riwayat.php">
                            <i class="fa-regular fa-clock"></i>
                            Riwayat
                        </a>
                    </li>

                    <li>
                        <a href="artikel.php">
                            <i class="fa-regular fa-newspaper"></i>
                            Artikel Kesehatan
                        </a>
                    </li>

                </ul>

                <div class="hero-img">
                    <img src="assets/hero.png">
                </div>

            </div>

            <a href="logout.php" class="logout-btn">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                Logout
            </a>

        </div>

        <div class="content">

            <h1>Kebutuhan Kalori Harian</h1>

            <p class="text-muted mb-0">
                Dashboard >
                <span class="text-primary fw-semibold">
                    Hitung Kalori
                </span>
            </p>

            <div class="top-grid">

                <div class="card-kalori">

                    <h2>Data Perhitungan</h2>

                    <form method="POST">

                        <div class="form-group">
                            <label>Usia</label>

                            <div class="input-flex">
                                <input type="number" name="usia" required>
                                <span>tahun</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>

                            <select name="gender" required>
                                <option value="">Pilih</option>
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Berat Badan</label>

                            <div class="input-flex">
                                <input type="number" name="berat" required>
                                <span>kg</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Tinggi Badan</label>

                            <div class="input-flex">
                                <input type="number" name="tinggi" required>
                                <span>cm</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Tingkat Aktivitas</label>

                            <select name="aktivitas" required>
                                <option value="">Pilih Aktivitas</option>
                                <option>Ringan</option>
                                <option>Sedang</option>
                                <option>Berat</option>
                            </select>
                        </div>

                        <button type="submit" name="hitung" class="btn-hitung">
                            <i class="fa-solid fa-calculator"></i>
                            Hitung Kalori
                        </button>

                    </form>

                </div>

                <div class="hasil-card">

                    <h2>Hasil Kebutuhan Kalori</h2>

                    <div class="kalori-circle">
                        <?= round($tdee) ?>
                        <span>kkal/hari</span>
                    </div>

                    <div class="hasil-item">
                        <span>BMR</span>
                        <strong><?= round($bmr) ?> kkal</strong>
                    </div>

                    <div class="hasil-item">
                        <span>TDEE</span>
                        <strong><?= round($tdee) ?> kkal</strong>
                    </div>

                    <div class="hasil-item">
                        <span>Defisit Diet</span>
                        <strong><?= round($defisit) ?> kkal</strong>
                    </div>

                </div>

            </div>

            <a href="rekomendasi.php" class="btn-rekomendasi">
                Lihat Rekomendasi Gizi
            </a>

            <div class="macro-card">

                <h2>Rincian Makronutrien</h2>

                <div class="macro-top">

                    <div class="donut-chart">

                        <div class="donut-center">
                            <?= round($tdee) ?>
                            <span>kkal</span>
                        </div>

                    </div>

                    <div class="macro-grid">

                        <div class="macro-item">
                            <span>Protein (20%)</span>
                            <strong><?= round($proteinGram) ?> g</strong>
                        </div>

                        <div class="macro-item">
                            <span>Karbohidrat (50%)</span>
                            <strong><?= round($karboGram) ?> g</strong>
                        </div>

                        <div class="macro-item">
                            <span>Lemak (30%)</span>
                            <strong><?= round($lemakGram) ?> g</strong>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>