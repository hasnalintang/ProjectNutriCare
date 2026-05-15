<?php
session_start();

if (!isset($_SESSION['nama'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pelajari Selengkapnya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/selengkapnya.css">
</head>

<body class="learn-body">
    <div class="db-topbar">
        <div class="left-head">
            <a href="dashboard.php" class="back-btn">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <div>
                <h1 class="fw-bold mb-1" style="color:#1B2559;">
                    Selengkapnya
                </h1>
                <p class="text-muted mb-1 m-left-1">
                    Dashboard >
                    <span style="color:#3563E9;font-weight:600;">
                        Selengkapnya
                    </span>
                </p>

            </div>

        </div>
    </div>

    <div class="container py-4">
        <div class="hero-learn">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <span class="guide">
                        NutriCare Guide
                    </span>
                    <h1>
                        Kenali tubuhmu,<br>
                        mulai dari informasi yang tepat.
                    </h1>
                    <p>
                        Di sini kamu bisa mempelajari lebih dalam tentang
                        kesehatan, gizi, dan cara menjaga berat badan ideal.
                    </p>
                </div>
                <div class="col-md-6 text-end">
                    <img src="./assets/buku.png">
                </div>
            </div>
        </div>
        <h3 class="judul">
            Fitur yang Tersedia
        </h3>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="fitur-card">
                    <div class="icon blue">
                        <i class="fa-solid fa-calculator"></i>
                    </div>
                    <h5>Hitung BMI</h5>
                    <p>
                        Hitung indeks massa tubuh
                        untuk mengetahui status
                        berat badan kamu.
                    </p>
                    <a href="bmi.php">
                        Pelajari lebih lanjut →
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="fitur-card">
                    <div class="icon orange">
                        <i class="fa-solid fa-fire"></i>
                    </div>
                    <h5>Kalori Harian</h5>
                    <p>
                        Temukan kebutuhan kalori
                        harian sesuai aktivitas.
                    </p>
                    <a href="kalori.php">
                        Pelajari lebih lanjut →
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="fitur-card">
                    <div class="icon green">
                        <i class="fa-solid fa-bowl-food"></i>
                    </div>
                    <h5>Rekomendasi Gizi</h5>
                    <p>
                        Dapatkan rekomendasi
                        makanan sehat setiap hari.
                    </p>
                    <a href="rekomendasi.php">
                        Pelajari lebih lanjut →
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="fitur-card">
                    <div class="icon purple">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <h5>Riwayat</h5>
                    <p>
                        Lihat riwayat perkembangan
                        dan hasil perhitunganmu.
                    </p>
                    <a href="riwayat.php">
                        Pelajari lebih lanjut →
                    </a>
                </div>
            </div>
        </div>
        <h3 class="judul mt-5">
            Artikel Kesehatan Populer
        </h3>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="artikel-card">
                    <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438">
                    <div>
                        <h5>
                            Pentingnya Minum Air Putih
                            Setiap Hari
                        </h5>
                        <p>
                            Air putih membantu tubuh
                            tetap optimal.
                        </p>
                        <span>12 Mei 2025</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="artikel-card">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c">
                    <div>
                        <h5>
                            Tips Pola Makan
                            Sehat dan Seimbang
                        </h5>
                        <p>
                            Mulai pola makan sehat
                            untuk hidup lebih baik.
                        </p>
                        <span>10 Mei 2025</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="artikel-card">
                    <img src="https://images.unsplash.com/photo-1518611012118-696072aa579a">
                    <div>
                        <h5>
                            Olahraga Ringan yang
                            Bisa Kamu Coba
                        </h5>
                        <p>
                            Aktivitas sederhana
                            yang baik untuk tubuh.
                        </p>
                        <span>8 Mei 2025</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="cara-box">
            <h3>
                Cara Menggunakan NutriCare
            </h3>
            <div class="step-area">
                <div class="step">
                    <div class="circle">
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <h6>1. Buat Akun</h6>
                    <p>
                        Daftar akun NutriCare
                        gratis
                    </p>
                </div>
                <div class="step">
                    <div class="circle">
                        <i class="fa-regular fa-clipboard"></i>
                    </div>
                    <h6>2. Isi Data</h6>
                    <p>
                        Isi data tubuhmu
                        dengan lengkap
                    </p>
                </div>
                <div class="step">
                    <div class="circle">
                        <i class="fa-solid fa-calculator"></i>
                    </div>
                    <h6>3. Hitung</h6>
                    <p>
                        Dapatkan hasil
                        analisis kesehatan
                    </p>
                </div>
                <div class="step">
                    <div class="circle">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                    <h6>4. Jaga Kesehatan</h6>
                    <p>
                        Ikuti saran
                        yang diberikan
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>