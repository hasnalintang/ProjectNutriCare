<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['nama'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['id'];

$query = mysqli_query($koneksi, "
    SELECT * FROM data_gizi
    WHERE user_id='$user_id'
    ORDER BY id DESC
    LIMIT 1
");

$data = mysqli_fetch_assoc($query);

if (!$data) {
    header("Location: kalori.php");
    exit;
}

$kalori = round($data['kalori_harian']);

$protein = round(($kalori * 0.20) / 4);
$karbo = round(($kalori * 0.50) / 4);
$lemak = round(($kalori * 0.30) / 9);

$status = $data['status_badan'];
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Gizi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/rekomendasi.css">

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
                        <a href="kalori.php">
                            <i class="fa-solid fa-fire"></i>
                            Kebutuhan Kalori
                        </a>
                    </li>

                    <li>
                        <a href="rekomendasi.php" class="active">
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

            <h1>Rekomendasi Gizi</h1>

            <p class="text-muted mb-0">
                Dashboard >
                <span class="text-primary fw-semibold">
                    Rekomendasi Gizi
                </span>
            </p>
            <br>

            <div class="alert-box">
                <i class="fa-solid fa-circle-check"></i>
                Rekomendasi gizi dibuat berdasarkan data tubuh Anda agar lebih personal dan sesuai kebutuhan harian.
            </div>

            <div class="summary-grid">

                <div class="summary-card">
                    <h3><?= $data['umur'] ?></h3>
                    <p>Usia</p>
                </div>

                <div class="summary-card">
                    <h3><?= round($data['bmi'], 1) ?></h3>
                    <p>BMI</p>
                </div>

                <div class="summary-card">
                    <h3><?= $data['aktivitas'] ?></h3>
                    <p>Aktivitas</p>
                </div>

                <div class="summary-card">
                    <h3><?= $status ?></h3>
                    <p>Status Badan</p>
                </div>

            </div>

            <div class="kalori-card">

                <div class="circle-box">
                    <div class="circle">
                        <?= $kalori ?>
                        <span>kkal</span>
                    </div>
                </div>

                <div class="macro-list">

                    <div class="macro-item">
                        <span>Protein (20%)</span>
                        <strong><?= $protein ?> g</strong>
                    </div>

                    <div class="macro-item">
                        <span>Karbohidrat (50%)</span>
                        <strong><?= $karbo ?> g</strong>
                    </div>

                    <div class="macro-item">
                        <span>Lemak (30%)</span>
                        <strong><?= $lemak ?> g</strong>
                    </div>

                </div>

            </div>

            <div class="makanan-grid">

                <div class="makanan-card">

                    <h2>Sumber Protein</h2>

                    <ul>
                        <li>Dada Ayam</li>
                        <li>Telur</li>
                        <li>Ikan Salmon</li>
                        <li>Tempe</li>
                    </ul>

                </div>

                <div class="makanan-card">

                    <h2>Sumber Karbohidrat</h2>

                    <ul>
                        <li>Nasi Merah</li>
                        <li>Oatmeal</li>
                        <li>Kentang</li>
                        <li>Roti Gandum</li>
                    </ul>

                </div>

                <div class="makanan-card">

                    <h2>Lemak Sehat</h2>

                    <ul>
                        <li>Alpukat</li>
                        <li>Kacang Almond</li>
                        <li>Minyak Zaitun</li>
                        <li>Chia Seed</li>
                    </ul>

                </div>

            </div>

            <div class="tips-card">

                <div class="tips-text">

                    <h2>Tips NutriCare</h2>

                    <ul>
                        <li>Minum air putih minimal 2 liter per hari.</li>
                        <li>Konsumsi sayur dan buah setiap hari.</li>
                        <li>Kurangi makanan tinggi gula dan gorengan.</li>
                        <li>Lakukan olahraga ringan minimal 30 menit per hari.</li>
                    </ul>

                </div>

                <img src="assets/hero.png">

            </div>

        </div>

    </div>

</body>

</html>