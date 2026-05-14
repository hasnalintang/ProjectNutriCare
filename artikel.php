<?php
session_start();

if (!isset($_SESSION['nama'])) {
    header("Location: login.php");
    exit;
}

$artikel = [

    [
        "id" => 1,
        "judul" => "10 Tips Pola Makan Sehat untuk Hidup Lebih Baik",
        "kategori" => "diet",
        "gambar" => "https://images.unsplash.com/photo-1546069901-ba9599a7e63c",
        "deskripsi" => "Pola makan sehat membantu menjaga tubuh tetap sehat, meningkatkan energi, dan menjaga berat badan ideal.",
        "tanggal" => "20 Mei 2024",
        "waktu" => "8 menit baca"
    ],

    [
        "id" => 2,
        "judul" => "Pentingnya Minum Air Putih Setiap Hari",
        "kategori" => "nutrisi",
        "gambar" => "https://images.unsplash.com/photo-1517836357463-d25dfeac3438",
        "deskripsi" => "Air putih membantu menjaga tubuh tetap terhidrasi.",
        "tanggal" => "20 Mei 2024",
        "waktu" => "5 menit baca"
    ],

    [
        "id" => 3,
        "judul" => "Olahraga Ringan yang Bisa Dilakukan di Rumah",
        "kategori" => "olahraga",
        "gambar" => "https://images.unsplash.com/photo-1518611012118-696072aa579a",
        "deskripsi" => "Tetap aktif dan sehat tanpa perlu pergi ke gym.",
        "tanggal" => "19 Mei 2024",
        "waktu" => "6 menit baca"
    ],

    [
        "id" => 4,
        "judul" => "Mengenal Sumber Protein Baik untuk Tubuh",
        "kategori" => "nutrisi",
        "gambar" => "https://images.unsplash.com/photo-1490645935967-10de6ba17061",
        "deskripsi" => "Protein penting untuk membangun dan menjaga otot.",
        "tanggal" => "18 Mei 2024",
        "waktu" => "5 menit baca"
    ]

];

$cari = isset($_GET['cari']) ? strtolower($_GET['cari']) : '';
$kategori = isset($_GET['kategori']) ? $_GET['kategori'] : 'semua';

$hasil = [];

foreach ($artikel as $a) {

    $cocokCari =
        strpos(strtolower($a['judul']), $cari) !== false;

    $cocokKategori =
        ($kategori == 'semua' || $a['kategori'] == $kategori);

    if ($cocokCari && $cocokKategori) {
        $hasil[] = $a;
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Artikel Kesehatan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/artikel.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

    <div class="main-container">

        <div class="sidebar">

            <div>

                <div class="logo-area">

                    <img src="assets/logo02.png" class="logo-img">

                    <div>
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
                        <a href="artikel.php" class="active">
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

            <h1>Artikel Kesehatan</h1>

            <p class="text-muted mb-0">
                Dashboard >
                <span class="text-primary fw-semibold">
                    Artikel Kesehatan
                </span>
            </p>
            <br>

            <form method="GET">

                <div class="top-bar">

                    <div class="search-box">

                        <i class="fa-solid fa-magnifying-glass"></i>

                        <input
                            type="text"
                            name="cari"
                            placeholder="Cari artikel..."
                            value="<?= $cari ?>">

                    </div>

                    <select name="kategori" onchange="this.form.submit()">

                        <option value="semua"
                            <?= $kategori == 'semua' ? 'selected' : '' ?>>
                            Semua Kategori
                        </option>

                        <option value="nutrisi"
                            <?= $kategori == 'nutrisi' ? 'selected' : '' ?>>
                            Nutrisi
                        </option>

                        <option value="diet"
                            <?= $kategori == 'diet' ? 'selected' : '' ?>>
                            Diet Sehat
                        </option>

                        <option value="olahraga"
                            <?= $kategori == 'olahraga' ? 'selected' : '' ?>>
                            Olahraga
                        </option>

                    </select>

                </div>

            </form>

            <a href="detail_artikel.php?id=1" class="artikel-link">

                <div class="featured-card">

                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c">

                    <div class="featured-content">

                        <span>Artikel Unggulan</span>

                        <h2>
                            10 Tips Pola Makan Sehat untuk Hidup Lebih Baik
                        </h2>

                        <p>
                            Pola makan sehat membantu menjaga tubuh tetap sehat,
                            meningkatkan energi, dan menjaga berat badan ideal.
                        </p>

                        <div class="featured-info">
                            <small>20 Mei 2024</small>
                            <small>8 menit baca</small>
                        </div>

                    </div>

                </div>

            </a>

            <div class="kategori-box">

                <a href="artikel.php?kategori=semua"
                    class="kategori <?= $kategori == 'semua' ? 'active-kategori' : '' ?>">
                    Semua
                </a>

                <a href="artikel.php?kategori=nutrisi"
                    class="kategori <?= $kategori == 'nutrisi' ? 'active-kategori' : '' ?>">
                    Nutrisi
                </a>

                <a href="artikel.php?kategori=diet"
                    class="kategori <?= $kategori == 'diet' ? 'active-kategori' : '' ?>">
                    Diet Sehat
                </a>

                <a href="artikel.php?kategori=olahraga"
                    class="kategori <?= $kategori == 'olahraga' ? 'active-kategori' : '' ?>">
                    Olahraga
                </a>

            </div>

            <div class="artikel-list">

                <?php foreach ($hasil as $row) { ?>

                    <a href="detail_artikel.php?id=<?= $row['id'] ?>"
                        class="artikel-link">

                        <div class="artikel-item">

                            <img src="<?= $row['gambar'] ?>">

                            <div class="artikel-content">

                                <h3>
                                    <?= $row['judul'] ?>
                                </h3>

                                <p>
                                    <?= $row['deskripsi'] ?>
                                </p>

                                <small>
                                    <?= $row['tanggal'] ?> • <?= $row['waktu'] ?>
                                </small>

                            </div>

                            <i class="fa-solid fa-chevron-right"></i>

                        </div>

                    </a>

                <?php } ?>

            </div>

        </div>

    </div>

</body>

</html>