<?php
session_start();

if(!isset($_SESSION['nama'])){
    header("Location: login.php");
    exit;
}

$id = isset($_GET['id']) ? $_GET['id'] : 1;

$artikel = [

    1 => [

        "judul" => "10 Tips Pola Makan Sehat untuk Hidup Lebih Baik",
        "kategori" => "Nutrisi",
        "tanggal" => "20 Mei 2024",
        "waktu" => "8 menit baca",
        "gambar" => "https://images.unsplash.com/photo-1546069901-ba9599a7e63c",

        "isi" => "

        <p>
        Meningkatkan kualitas hidup adalah impian banyak orang.
        Salah satu cara terbaik adalah menerapkan pola makan sehat setiap hari.
        </p>

        <p>
        Pola makan sehat membantu menjaga energi,
        meningkatkan daya tahan tubuh,
        serta menjaga berat badan ideal.
        </p>

        <h2>1. Mulailah dengan Sarapan Sehat</h2>

        <p>
        Sarapan membantu meningkatkan metabolisme tubuh
        dan memberikan energi untuk memulai hari.
        </p>

        <h2>2. Perbanyak Konsumsi Sayur dan Buah</h2>

        <p>
        Sayur dan buah mengandung vitamin,
        mineral, dan serat yang penting untuk tubuh.
        </p>

        <h2>3. Minum Air Putih</h2>

        <p>
        Pastikan kebutuhan cairan tubuh terpenuhi setiap hari.
        </p>
        "
    ],

    2 => [

        "judul" => "Pentingnya Minum Air Putih Setiap Hari",
        "kategori" => "Nutrisi",
        "tanggal" => "20 Mei 2024",
        "waktu" => "5 menit baca",
        "gambar" => "https://images.unsplash.com/photo-1517836357463-d25dfeac3438",

        "isi" => "

        <p>
        Air putih sangat penting untuk menjaga tubuh tetap terhidrasi.
        </p>

        <p>
        Tubuh manusia sebagian besar terdiri dari air,
        sehingga kebutuhan cairan harus dipenuhi setiap hari.
        </p>

        <h2>Manfaat Air Putih</h2>

        <p>
        Membantu menjaga suhu tubuh,
        meningkatkan fokus,
        dan menjaga kesehatan kulit.
        </p>
        "
    ],

    3 => [

        "judul" => "Olahraga Ringan yang Bisa Dilakukan di Rumah",
        "kategori" => "Olahraga",
        "tanggal" => "19 Mei 2024",
        "waktu" => "6 menit baca",
        "gambar" => "https://images.unsplash.com/photo-1518611012118-696072aa579a",

        "isi" => "

        <p>
        Anda tetap bisa sehat tanpa pergi ke gym.
        </p>

        <p>
        Banyak olahraga ringan yang dapat dilakukan di rumah
        seperti stretching, yoga, dan skipping.
        </p>

        <h2>Tips Olahraga di Rumah</h2>

        <p>
        Lakukan olahraga minimal 30 menit setiap hari
        agar tubuh tetap aktif dan bugar.
        </p>
        "
    ],

    4 => [

        "judul" => "Mengenal Sumber Protein Baik untuk Tubuh",
        "kategori" => "Nutrisi",
        "tanggal" => "18 Mei 2024",
        "waktu" => "5 menit baca",
        "gambar" => "https://images.unsplash.com/photo-1490645935967-10de6ba17061",

        "isi" => "

        <p>
        Protein membantu membangun dan memperbaiki jaringan tubuh.
        </p>

        <p>
        Konsumsi protein yang cukup penting
        untuk menjaga massa otot dan daya tahan tubuh.
        </p>

        <h2>Sumber Protein Sehat</h2>

        <p>
        Dada ayam, telur, ikan, tempe,
        dan susu adalah sumber protein yang baik.
        </p>
        "
    ]

];

if(!isset($artikel[$id])){
    $id = 1;
}

$data = $artikel[$id];
?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title><?= $data['judul']; ?></title>

    <link rel="stylesheet"
    href="css/detail_artikel.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

<button class="menu-toggle"
onclick="toggleSidebar()">

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
                    <a href="artikel.php" class="active">
                        <i class="fa-regular fa-newspaper"></i>
                        <span>Artikel Kesehatan</span>
                    </a>
                </li>

            </ul>

            <div class="hero-img">
                <img src="assets/hero.png">
            </div>

        </div>

        <a href="logout.php"
        class="logout-btn">

            <i class="fa-solid fa-arrow-right-from-bracket"></i>

            <span>Logout</span>

        </a>

    </div>

    <div class="content">

        <a href="artikel.php"
        class="back-btn">

            <i class="fa-solid fa-arrow-left"></i>

            Kembali ke Artikel

        </a>

        <div class="article-card">

            <img src="<?= $data['gambar']; ?>"
            class="banner">

            <div class="article-info">

                <span class="kategori">
                    <?= $data['kategori']; ?>
                </span>

                <h1>
                    <?= $data['judul']; ?>
                </h1>

                <div class="meta">

                    <div>
                        <i class="fa-regular fa-calendar"></i>
                        <?= $data['tanggal']; ?>
                    </div>

                    <div>
                        <i class="fa-regular fa-clock"></i>
                        <?= $data['waktu']; ?>
                    </div>

                </div>

                <?= $data['isi']; ?>

            </div>

        </div>

    </div>

</div>

<script>

function toggleSidebar(){
    document.getElementById("sidebar").classList.toggle("active");
}

</script>

</body>
</html>