<?php
session_start();

if (!isset($_SESSION['nama'])) {
    header("Location: login.php");
    exit;
}

$bmi = 0;
$status = "-";
$bmi_min = 0;
$bmi_max = 0;
$target_berat = 0;
$per_minggu = 0;
$hasil_text = "Masukkan data terlebih dahulu";

if (isset($_POST['hitung'])) {

    $berat = $_POST['berat'];
    $tinggi = $_POST['tinggi'];
    $target_berat = $_POST['target_berat'];
    $durasi = $_POST['durasi'];
    $tujuan = $_POST['tujuan'];

    $tinggi_meter = $tinggi / 100;

    $bmi = $berat / ($tinggi_meter * $tinggi_meter);

    if ($bmi < 18.5) {
        $status = "Kurus";
    } elseif ($bmi < 25) {
        $status = "Normal";
    } elseif ($bmi < 30) {
        $status = "Gemuk";
    } else {
        $status = "Obesitas";
    }

    $bmi_min = 18.5 * ($tinggi_meter * $tinggi_meter);
    $bmi_max = 24.9 * ($tinggi_meter * $tinggi_meter);

    if ($durasi == "1 Bulan") {
        $minggu = 4;
    } elseif ($durasi == "3 Bulan") {
        $minggu = 12;
    } else {
        $minggu = 24;
    }

    $selisih = abs($target_berat - $berat);

    $per_minggu = $selisih / $minggu;

    if ($target_berat > $berat) {

        $hasil_text = "Anda perlu menaikkan +" . round($per_minggu, 2) . " kg/minggu";
    } elseif ($target_berat < $berat) {

        $hasil_text = "Anda perlu menurunkan -" . round($per_minggu, 2) . " kg/minggu";
    } else {

        $hasil_text = "Berat badan sudah sesuai target";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Target Berat Badan</title>

    <link rel="stylesheet" href="css/target.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

    <button class="menu-toggle" onclick="toggleSidebar()">
        <i class="fa-solid fa-bars"></i>
    </button>

    <div class="main-container">

        <div class="sidebar" id="sidebar">

            <div>

                <div class="logo-area">

                    <img src="assets/blank.png"
                        class="logo-img">

                    <div class="logo-text">

                        <h3>NutriCare</h3>

                        <p>
                            Sistem Perhitungan Gizi <br>
                            & Berat Badan
                        </p>

                    </div>

                </div>

                <ul class="menu">

                    <li>
                        <a href="dashboard.php">
                            <i class="fa-solid fa-house"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="bmi.php">
                            <i class="fa-solid fa-calculator"></i>
                            <span>Hitung BMI</span>
                        </a>
                    </li>

                    <li>
                        <a href="target.php" class="active">
                            <i class="fa-solid fa-bullseye"></i>
                            <span>Target Berat</span>
                        </a>
                    </li>

                    <li>
                        <a href="kalori.php">
                            <i class="fa-solid fa-fire"></i>
                            <span>Kebutuhan Kalori</span>
                        </a>
                    </li>

                    <li>
                        <a href="rekomendasi.php">
                            <i class="fa-solid fa-gem"></i>
                            <span>Rekomendasi Gizi</span>
                        </a>
                    </li>

                    <li>
                        <a href="riwayat.php">
                            <i class="fa-regular fa-clock"></i>
                            <span>Riwayat</span>
                        </a>
                    </li>

                    <li>
                        <a href="artikel.php">
                            <i class="fa-regular fa-newspaper"></i>
                            <span>Artikel Kesehatan</span>
                        </a>
                    </li>

                </ul>

                <div class="hero-img">
                    <img src="assets/hero.png">
                </div>

            </div>

            <a href="logout.php" class="logout-btn">

                <i class="fa-solid fa-arrow-right-from-bracket"></i>

                <span>Logout</span>

            </a>

        </div>

        <div class="content">

            <div>

                <h1 class="fw-bold mb-1">
                    Target Berat Badan
                </h1>

                <p class="text-muted mb-4">
                    Dashboard >
                    <span style="color:#3563E9;font-weight:600;">
                        Target Berat Badan
                    </span>
                </p>

            </div>

            <form method="POST">

                <div class="target-grid">

                    <div class="card-target">

                        <h2>Data Saat Ini</h2>

                        <div class="form-group">

                            <label>Berat Badan Saat Ini</label>

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

                        <div class="bmi-box">

                            <div>

                                <small>BMI Saat Ini</small>

                                <h3><?= round($bmi, 1) ?></h3>

                            </div>

                            <span class="status">
                                <?= $status ?>
                            </span>

                        </div>

                    </div>

                    <div class="card-target">

                        <h2>Target yang Ingin Dicapai</h2>

                        <div class="form-group">

                            <label>Berat Badan Target</label>

                            <div class="input-flex">
                                <input type="number" name="target_berat" required>
                                <span>kg</span>
                            </div>

                        </div>

                        <div class="form-group">

                            <label>Target dalam</label>

                            <select name="durasi">
                                <option>1 Bulan</option>
                                <option>3 Bulan</option>
                                <option>6 Bulan</option>
                            </select>

                        </div>

                        <div class="form-group">

                            <label>Tujuan</label>

                            <select name="tujuan">
                                <option>Menurunkan Berat Badan</option>
                                <option>Menaikkan Berat Badan</option>
                            </select>

                        </div>

                        <button type="submit"
                            name="hitung"
                            class="btn-target">

                            <i class="fa-solid fa-calculator"></i>

                            Hitung Target

                        </button>

                    </div>

                    <div class="hasil-card">

                        <h2>Hasil Perhitungan Target</h2>

                        <div class="target-alert">

                            <h3>
                                Target Anda:
                                <?= $target_berat ?> kg
                            </h3>

                            <p>
                                <?= $hasil_text ?>
                            </p>

                        </div>

                        <div class="hasil-item">

                            <div>

                                <small>Berat Ideal (BMI Normal)</small>

                                <h4>
                                    <?= round($bmi_min, 1) ?> -
                                    <?= round($bmi_max, 1) ?> kg
                                </h4>

                            </div>

                        </div>

                        <div class="hasil-item">

                            <div>

                                <small>Berat yang Harus Dicapai</small>

                                <h4>
                                    <?= $target_berat ?> kg
                                </h4>

                            </div>

                        </div>

                        <div class="hasil-item">

                            <div>

                                <small>Perubahan Per Minggu</small>

                                <h4>
                                    <?= round($per_minggu, 2) ?> kg/minggu
                                </h4>

                            </div>

                        </div>

                        <div class="tips-box">

                            <strong>Tips</strong>

                            <p>
                                Perubahan berat badan yang sehat adalah
                                0.5 - 1 kg per minggu.
                            </p>

                        </div>

                    </div>

                </div>

            </form>

        </div>

    </div>

    <script>
        function toggleSidebar() {
            document.getElementById("sidebar").classList.toggle("active");
        }
    </script>

</body>

</html>