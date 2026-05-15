<?php

session_start();
include 'koneksi.php';

if (!isset($_SESSION['nama'])) {

    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/dashboard.css">
    <title>Dashboard NutriCare</title>
</head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<body class="db-body">
    <div class="db-wrapper">
        <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarMenu">
            <div class="offcanvas-header">

                <h5 class="offcanvas-title logi-img">
                    Menu
                </h5>

                <button type="button"
                    class="btn-close"
                    data-bs-dismiss="offcanvas">
                </button>

            </div>
            <div class="offcanvas-body">
                <div class="logo-area">
                    <div>
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
                </div>

                <a href="logout.php" class="logout-btn">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    Logout
                </a>

        </div>

        <main class="db-main">
            <div class="db-topbar d-flex align-items-center gap-3">
                <button class="btn"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#sidebarMenu">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div>
                    <h4 class="mb-0 fw-bold">
                        Halo, <?php echo $_SESSION['nama']; ?> 👋
                    </h4>
                    <p class="text-muted mb-0">
                        Selamat datang kembali di NutriCare.
                    </p>
                </div>
                <div class="db-profile">
                    <img src="./assets/profilenc.jpg">
                    <span>
                        Hai, <?php echo $_SESSION['nama']; ?>
                    </span>
                </div>
            </div>

            <section class="db-hero">
                <div class="db-hero-left">
                    <img src="./assets/timbang.png" class="db-hero-scale">
                    <div>
                        <h2>
                            Mulai perjalanan sehatmu hari ini!
                        </h2>
                        <p>
                            Pantau kondisi tubuhmu dan dapatkan rekomendasi terbaik.
                        </p>
                        <a href="bmi.php">
                            <button class="btn db-btn-primary">
                                Hitung Sekarang →
                            </button>
                        </a>
                    </div>
                </div>
                <img src="./assets/hero.png" class="db-hero-img">
            </section>

            <section class="db-cards">
                <div class="db-card-item">
                    <div>
                        <p class="db-card-title">Indeks BMI</p>
                        <h1>22.1</h1>
                        <span class="db-badge">
                            Normal
                        </span>
                        <p class="db-small-text">
                            Berat badan ideal
                        </p>
                    </div>
                    <div class="db-card-icon blue">
                        <i class="fa-solid fa-scale-balanced"></i>
                    </div>
                </div>

                <div class="db-card-item">
                    <div>
                        <p class="db-card-title">Kalori Harian</p>
                        <h1>2100</h1>
                        <span class="db-unit">
                            kcal
                        </span>
                        <p class="db-small-text">
                            Kebutuhan kalori harian
                        </p>
                    </div>
                    <div class="db-card-icon orange">
                        <i class="fa-solid fa-fire"></i>
                    </div>
                </div>

                <div class="db-card-item">
                    <div>
                        <p class="db-card-title">Target Berat Badan</p>
                        <h1>53</h1>
                        <span class="db-unit">
                            kg
                        </span>
                        <p class="db-small-text">
                            2 kg lagi menuju target
                        </p>
                    </div>
                    <div class="db-card-icon purple">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>
                </div>
            </section>


            <section class="db-bottom">
                <div class="db-summary">
                    <h4>Ringkasan Hari Ini</h4>
                    <div class="db-progress-box">
                        <div class="d-flex justify-content-between">
                            <span>Asupan Kalori</span>
                            <span>1600 / 2100 kcal</span>
                        </div>
                        <div class="progress mt-2">
                            <div class="progress-bar bg-success"
                                style="width:75%"></div>
                        </div>
                    </div>

                    <div class="db-progress-box">
                        <div class="d-flex justify-content-between">
                            <span>Minum Air</span>
                            <span>6 / 8 Gelas</span>
                        </div>
                        <div class="progress mt-2">
                            <div class="progress-bar bg-primary"
                                style="width:70%"></div>
                        </div>
                    </div>
                </div>

                <div class="db-recommendation">
                    <h4>Rekomendasi Hari Ini</h4>
                    <div class="db-recommend-box">
                        <img src="./assets/makanan.png">
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
            </section>
        </main>
    </div>

    <footer class="footer-index mt-2" id="tentang">
        <div class="container d-flex justify-content-between flex-wrap">

            <div>
                <img src="assets/logoo2.png" width="200">
                <p class="small">Platform perhitungan gizi dan rekomendasi kesehatan <br> untuk hidup lebih sehat.</p>
                <div class="text-start mt-3 small">
                    © 2026 NutriCare. All rights reserved.
                </div>
            </div>

            <div>
                <h6>Menu</h6>
                <p class="small">
                    <l class="bii bi-house-fill"> Home<br></l>
                    <l class="bii bi-sliders"> Fitur<br></l>
                    <l class="bii bi-newspaper"> Artikel<br></l>
                    <l class="bii bi-info-circle"> Tentang kami<br></l>
                </p>
            </div>

            <div>
                <h6>Kontak</h6>
                <p class="small">
                    <l class="bii bi-exclamation-circle"> info@nutricare.id <br></l>
                    <l class="bii bi-person-circle"> +62 812-3456-7890 <br></l>
                    <l class="bii bi-geo-alt-fill"> Indonesia<br></l>
                </p>
            </div>

            <div>
                <h6>Ikuti Kami</h6>
                <p class="small">
                    <l class="bii bi-instagram"> @nutricare.id<br></l>
                    <l class="bii bi-twitter"> @nutricare.id<br></l>
                    <l class="bii bi-tiktok"> @nutricare.id<br></l>
                    <l class="bii bi-facebook"> NutriCare<br></l>
                </p>
            </div>

        </div>
    </footer>
</body>

</html>