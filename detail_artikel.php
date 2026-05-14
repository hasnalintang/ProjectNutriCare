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
    Meningkatkan kualitas hidup adalah impian banyak orang. Salah satu cara terbaik menurut NutriCare adalah menerapkan pola makan sehat setiap hari.
    </p>

    <p>
    Pola makan sehat membantu menjaga energi, meningkatkan daya tahan tubuh, serta menjaga berat badan ideal agar tubuh tetap fit untuk menjalani aktivitas harian.
    </p>

    <h2>1. Mulailah dengan Sarapan Sehat</h2>

    <p>
    Sarapan membantu meningkatkan metabolisme tubuh dan memberikan energi untuk memulai hari. Pilih makanan seperti oatmeal, telur, atau smoothie buah.
    </p>

    <h2>2. Perbanyak Konsumsi Sayur dan Buah</h2>

    <p>
    Sayur dan buah mengandung vitamin, mineral, dan serat yang penting untuk kesehatan tubuh menurut rekomendasi NutriCare.
    </p>

    <h2>3. Pilih Karbohidrat Kompleks</h2>

    <p>
    Karbohidrat kompleks seperti nasi merah, kentang, dan gandum utuh membuat kenyang lebih lama dan memberi energi stabil.
    </p>

    <h2>4. Jaga Asupan Protein</h2>

    <p>
    Protein membantu pembentukan otot dan memperbaiki jaringan tubuh. Konsumsi ikan, ayam, telur, atau tahu dan tempe.
    </p>

    <h2>5. Batasi Konsumsi Gula</h2>

    <p>
    Gula berlebihan dapat meningkatkan risiko obesitas dan diabetes. Kurangi minuman manis dan makanan olahan.
    </p>

    <h2>6. Pilih Lemak Sehat</h2>

    <p>
    Lemak sehat seperti alpukat, ikan, dan minyak zaitun baik untuk jantung dan membantu penyerapan vitamin.
    </p>

    <h2>7. Tetapkan Jadwal Makan Teratur</h2>

    <p>
    Makan tepat waktu membantu menjaga energi dan mengontrol nafsu makan.
    </p>

    <h2>8. Hindari Fast Food</h2>

    <p>
    Fast food biasanya tinggi garam, gula, dan lemak jenuh yang kurang baik bagi tubuh.
    </p>

    <h2>9. Minum Air Putih yang Cukup</h2>

    <p>
    NutriCare menyarankan untuk memenuhi kebutuhan cairan harian agar tubuh tetap terhidrasi dan sehat.
    </p>

    <h2>10. Monitoring Pola Makan</h2>

    <p>
    Catat makanan yang dikonsumsi agar kebutuhan nutrisi tetap seimbang dan tubuh lebih sehat.
    </p>

    <p>
    Dengan menerapkan pola makan sehat secara konsisten, kualitas hidup dapat meningkat dan tubuh terasa lebih segar setiap hari.
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
    Air merupakan komponen utama tubuh manusia dan sangat penting untuk menjaga fungsi organ tetap optimal.
    </p>

    <p>
    Menurut NutriCare, menjaga hidrasi tubuh membantu meningkatkan energi, fokus, dan kesehatan secara keseluruhan.
    </p>

    <h2>Manfaat Minum Air Putih</h2>

    <ul>
        <li>Mencegah dehidrasi.</li>
        <li>Membantu melancarkan pencernaan.</li>
        <li>Mengatur suhu tubuh.</li>
        <li>Meningkatkan fungsi otak.</li>
        <li>Menjaga kesehatan kulit.</li>
        <li>Membantu penyerapan nutrisi.</li>
        <li>Meningkatkan sirkulasi darah.</li>
    </ul>

    <h2>Dampak Kurang Minum Air</h2>

    <p>
    Kekurangan cairan dapat menyebabkan tubuh lemas, sakit kepala, sulit fokus, hingga meningkatkan risiko dehidrasi.
    </p>

    <p>
    NutriCare menyarankan untuk mengonsumsi air putih secara rutin terutama saat cuaca panas atau setelah beraktivitas fisik.
    </p>

    <h2>Tips Meningkatkan Konsumsi Air</h2>

    <ul>
        <li>Bawa botol minum sendiri.</li>
        <li>Minum sebelum makan.</li>
        <li>Kurangi minuman manis.</li>
        <li>Pasang pengingat minum air.</li>
    </ul>

    <p>
    Dengan memenuhi kebutuhan cairan harian, tubuh akan terasa lebih segar, sehat, dan berenergi sepanjang hari.
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
    Tetap aktif di rumah sangat penting untuk menjaga kesehatan tubuh dan kebugaran fisik.
    </p>

    <p>
    NutriCare merekomendasikan beberapa olahraga ringan tanpa alat yang bisa dilakukan kapan saja.
    </p>

    <h2>1. Burpee</h2>

    <p>
    Burpee membantu melatih kekuatan tubuh sekaligus membakar kalori dengan cepat.
    </p>

    <h2>2. Jumping Jack</h2>

    <p>
    Gerakan ini membantu melancarkan aliran darah dan meningkatkan detak jantung.
    </p>

    <h2>3. Squat Jump</h2>

    <p>
    Squat jump melatih otot kaki dan meningkatkan keseimbangan tubuh.
    </p>

    <h2>4. Zumba</h2>

    <p>
    Aktivitas menari seperti zumba membuat olahraga terasa lebih menyenangkan dan membantu membakar lemak.
    </p>

    <h2>5. Naik Turun Tangga</h2>

    <p>
    Tangga rumah dapat digunakan untuk latihan kardio sederhana yang efektif.
    </p>

    <h2>6. Jogging di Tempat</h2>

    <p>
    Jogging di tempat dapat menjadi alternatif saat tidak bisa olahraga di luar rumah.
    </p>

    <p>
    Dengan rutin berolahraga, tubuh menjadi lebih sehat, pikiran lebih segar, dan aktivitas harian terasa lebih ringan menurut NutriCare.
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
    Protein adalah nutrisi penting yang dibutuhkan tubuh untuk membangun dan memperbaiki jaringan.
    </p>

    <p>
    NutriCare menjelaskan bahwa protein juga membantu pembentukan otot, hormon, dan sistem kekebalan tubuh.
    </p>

    <h2>Sumber Protein Hewani</h2>

    <ul>
        <li>Dada ayam.</li>
        <li>Ikan salmon dan tuna.</li>
        <li>Daging sapi tanpa lemak.</li>
        <li>Telur.</li>
        <li>Susu dan yogurt.</li>
    </ul>

    <h2>Sumber Protein Nabati</h2>

    <ul>
        <li>Tempe dan tahu.</li>
        <li>Kacang almond.</li>
        <li>Edamame.</li>
        <li>Chia seeds.</li>
    </ul>

    <h2>Manfaat Protein</h2>

    <p>
    Protein membantu menjaga massa otot, meningkatkan rasa kenyang, dan mendukung kesehatan tulang.
    </p>

    <p>
    Mengonsumsi protein yang cukup setiap hari membantu tubuh tetap sehat dan berfungsi optimal menurut NutriCare.
    </p>
    "
]

];

$data = $artikel[$id];
?>

<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $data['judul']; ?></title>

    <link rel="stylesheet" href="css/detail_artikel.css">

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
                    <a href="#">
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

        <a href="artikel.php" class="back-btn">
            <i class="fa-solid fa-arrow-left"></i>
            Kembali ke Artikel
        </a>

        <div class="article-card">

            <img src="<?= $data['gambar']; ?>" class="banner">

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

</body>
</html>