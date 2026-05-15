<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['nama'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard NutriCare</title>

    <link rel="stylesheet" href="css/dashboard.css">

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

                <img src="assets/blank.png" class="logo-img">

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
                    <a href="dashboard.php" class="active">
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
                    <a href="target.php">
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

        <div class="topbar">

            <div>
                <h2>
                    Halo, <?= $_SESSION['nama']; ?> 👋
                </h2>

                <p>
                    Selamat datang kembali di NutriCare.
                </p>
            </div>

            <div class="profile">

                <img src="assets/profilenc.jpg">

                <span>
                    Hai, <?= $_SESSION['nama']; ?>
                </span>

            </div>

        </div>

        <div class="hero-section">

            <div class="hero-left">

                <img src="assets/timbang.png" class="hero-scale">

                <div>

                    <h1>
                        Mulai perjalanan sehatmu hari ini!
                    </h1>

                    <p>
                        Pantau kondisi tubuhmu dan dapatkan rekomendasi terbaik.
                    </p>

                    <a href="bmi.php" class="hero-btn">
                        Hitung Sekarang →
                    </a>

                </div>

            </div>

            <img src="assets/hero.png" class="hero-right">

        </div>

        <div class="cards">

            <div class="card-item">

                <div>

                    <small>Indeks BMI</small>

                    <h2>22.1</h2>

                    <span class="badge green">
                        Normal
                    </span>

                    <p>Berat badan ideal</p>

                </div>

                <div class="icon blue">
                    <i class="fa-solid fa-scale-balanced"></i>
                </div>

            </div>

            <div class="card-item">

                <div>

                    <small>Kalori Harian</small>

                    <h2>2100</h2>

                    <span class="unit">
                        kcal
                    </span>

                    <p>Kebutuhan kalori harian</p>

                </div>

                <div class="icon orange">
                    <i class="fa-solid fa-fire"></i>
                </div>

            </div>

            <div class="card-item">

                <div>

                    <small>Target Berat</small>

                    <h2>53</h2>

                    <span class="unit">
                        kg
                    </span>

                    <p>2 kg lagi menuju target</p>

                </div>

                <div class="icon purple">
                    <i class="fa-solid fa-bullseye"></i>
                </div>

            </div>

        </div>

        <div class="bottom-grid">

            <div class="summary-card">

                <h3>Ringkasan Hari Ini</h3>

                <div class="progress-box">

                    <div class="progress-top">
                        <span>Asupan Kalori</span>
                        <span>1600 / 2100 kcal</span>
                    </div>

                    <div class="progress-bar">
                        <div class="progress-fill green-fill"></div>
                    </div>

                </div>

                <div class="progress-box">

                    <div class="progress-top">
                        <span>Minum Air</span>
                        <span>6 / 8 Gelas</span>
                    </div>

                    <div class="progress-bar">
                        <div class="progress-fill blue-fill"></div>
                    </div>

                </div>

            </div>

            <div class="recommend-card">

                <h3>Rekomendasi Hari Ini</h3>

                <div class="recommend-box">

                    <img src="assets/makanan.png">

                    <div>

                        <p>
                            Perbanyak konsumsi protein tanpa lemak
                            dan sayuran hijau untuk menjaga massa otot.
                        </p>

                        <a href="selengkapnya.php">
                            Lihat Selengkapnya →
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<footer class="footer">

    <div class="footer-grid">

        <div>

            <img src="assets/logoo2.png" width="180">

            <p>
                Platform perhitungan gizi dan rekomendasi kesehatan
                untuk hidup lebih sehat.
            </p>

            <small>
                © 2026 NutriCare
            </small>

        </div>

        <div>

            <h4>Menu</h4>

            <p>Home</p>
            <p>Fitur</p>
            <p>Artikel</p>

        </div>

        <div>

            <h4>Kontak</h4>

            <p>info@nutricare.id</p>
            <p>+62 812-3456-7890</p>
            <p>Indonesia</p>

        </div>

    </div>

</footer>

<script>
function toggleSidebar(){

    document
    .getElementById("sidebar")
    .classList
    .toggle("active");

}
</script>

</body>
</html>