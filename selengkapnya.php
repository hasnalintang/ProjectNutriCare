<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pelajari Selengkapnya | NutriCare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./css/more.css">

</head>

<body class="learn-body">
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
                    <a href="bmi.php" class="active">
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


    <main class="db-main">
        <div class="db-topbar">
            <div>
                <h3 class="fw-bold mb-1">
                    Perhitungan BMI
                </h3>

                <p class="text-muted mb-0">
                    Dashboard >
                    <span class="text-primary fw-semibold">
                        Hitung BMI
                    </span>
                </p>
            </div>

            <div class="db-profile">
                <img src="./assets/profilenc.jpg">
                <span>
                    Hai,
                    <?php echo $_SESSION['nama']; ?>
                </span>
            </div>

        </div>


    <section class="container">
        <div class="learn-hero">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <span class="learn-badge">
                        NutriCare Guide
                    </span>
                    <h1>
                        Pelajari Gizi & Kesehatan
                        Lebih Mudah
                    </h1>
                    <p>
                        Temukan informasi lengkap tentang BMI,
                        kalori, berat badan ideal, dan pola hidup sehat
                        untuk menjaga kesehatanmu.
                    </p>
                    <button class="btn learn-btn">Mulai Membaca<i class="fa-solid fa-arrow-right"></i></button>
                </div>

                <div class="col-lg-6 text-center">
                    <img src="assets/hero-learn.png" class="learn-hero-img">
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="learn-card">
                    <img src="assets/bmi.png">
                    <h4>Apa itu BMI?</h4>
                    <p>
                        Pelajari cara menghitung BMI
                        dan memahami status berat badan.
                    </p>
                    <a href="bmi.php">
                        Pelajari →
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="learn-card">
                    <img src="assets/kalori.png">
                    <h4>Kebutuhan Kalori</h4>
                    <p>
                        Cari tahu kebutuhan energi harian
                        sesuai aktivitasmu.
                    </p>
                    <a href="kalori.php">
                        Pelajari →
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="learn-card">
                    <img src="assets/nutrisi.png">
                    <h4>Pola Gizi Seimbang</h4>
                    <p>
                        Panduan protein, lemak,
                        karbohidrat dan nutrisi harian.
                    </p>
                    <a href="rekomendasi.php">
                        Pelajari →
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="learn-box">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img src="assets/artikel.png"
                        class="img-fluid">
                </div>
                <div class="col-lg-7">
                    <h2>
                        Mengapa menjaga kesehatan penting?
                    </h2>
                    <p>
                        Kesehatan yang baik membantu tubuh
                        berfungsi optimal, meningkatkan energi,
                        dan menjaga kualitas hidup.
                    </p>
                    <ul>
                        <li>
                            Pola makan sehat
                        </li>
                        <li>
                            Aktivitas fisik rutin
                        </li>
                        <li>
                            Tidur cukup
                        </li>
                        <li>
                            Minum air cukup
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</body>

</html>