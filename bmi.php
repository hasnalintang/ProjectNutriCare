<?php
session_start();

if(!isset($_SESSION['nama'])){
    header("Location: login.php");
    exit;
}

$bmi = 0;
$status = "";
$pesan = "";
$ideal_min = 0;
$ideal_max = 0;

if(isset($_POST['hitung'])){

    $tinggi = $_POST['tinggi'];
    $berat = $_POST['berat'];

    $tinggi_meter = $tinggi / 100;

    $bmi = $berat / ($tinggi_meter * $tinggi_meter);

    $bmi = round($bmi, 2);

    if($bmi < 18.5){

        $status = "Kurus";

        $pesan = "Berat badan Anda masih kurang.";

    }
    elseif($bmi < 25){

        $status = "Normal";

        $pesan = "Berat badan Anda ideal.";

    }
    elseif($bmi < 30){

        $status = "Gemuk";

        $pesan = "Berat badan Anda berlebih.";

    }
    else{

        $status = "Obesitas";

        $pesan = "Disarankan menjaga pola makan.";

    }

    $ideal_min = round(18.5 * ($tinggi_meter * $tinggi_meter),1);

    $ideal_max = round(24.9 * ($tinggi_meter * $tinggi_meter),1);

}
?>

<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hitung BMI</title>

    <link rel="stylesheet" href="css/bmi.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

<button class="menu-toggle" onclick="toggleSidebar()">
    <i class="fa-solid fa-bars"></i>
</button>

<div class="db-wrapper">

    <div class="sidebar" id="sidebar">

        <div>

            <div class="logo-area">

                <img src="assets/logo02.png" class="logo-img">

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
                    <a href="bmi.php" class="active">
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

        <div class="bmi-alert">

            <i class="fa-solid fa-circle-info"></i>

            BMI digunakan untuk mengetahui status berat badan.

        </div>

        <div class="row-area">

            <div class="bmi-card left-card">

                <h4>Masukkan Data Anda</h4>

                <p class="sub-text">
                    Isi data berikut dengan benar
                </p>

                <form method="POST">

                    <label class="bmi-label">
                        Tinggi Badan (cm)
                    </label>

                    <div class="bmi-input-box">

                        <i class="fa-solid fa-ruler-vertical"></i>

                        <input
                        type="number"
                        name="tinggi"
                        placeholder="170"
                        required>

                        <span>cm</span>

                    </div>

                    <label class="bmi-label">
                        Berat Badan (kg)
                    </label>

                    <div class="bmi-input-box">

                        <i class="fa-solid fa-weight-scale"></i>

                        <input
                        type="number"
                        name="berat"
                        placeholder="65"
                        required>

                        <span>kg</span>

                    </div>

                    <button
                    type="submit"
                    name="hitung"
                    class="bmi-btn">

                        <i class="fa-solid fa-calculator"></i>

                        Hitung BMI

                    </button>

                </form>

            </div>

            <div class="bmi-card">

                <h4>Hasil Perhitungan BMI</h4>

                <p class="sub-text">
                    Berikut hasil BMI berdasarkan data Anda
                </p>

                <div class="hasil-flex">

                    <div class="bmi-circle">

                        <div class="bmi-circle-inner">

                            <h1>
                                <?= $bmi > 0 ? $bmi : 0 ?>
                            </h1>

                            <span>BMI Anda</span>

                        </div>

                    </div>

                    <div>

                        <h3>Status Berat Badan</h3>

                        <span class="bmi-status">
                            <?= $status != "" ? $status : "-" ?>
                        </span>

                        <p class="bmi-desc">
                            <?= $pesan != "" ? $pesan : "Silakan isi data terlebih dahulu." ?>
                        </p>

                    </div>

                </div>

                <div class="small-grid">

                    <div class="bmi-small-card">

                        <i class="fa-solid fa-weight-scale"></i>

                        <div>

                            <h5>Berat Badan Ideal</h5>

                            <h3>

                                <?php

                                if($ideal_min > 0){

                                    echo $ideal_min .
                                    " - " .
                                    $ideal_max .
                                    " kg";

                                }
                                else{

                                    echo "-";

                                }

                                ?>

                            </h3>

                        </div>

                    </div>

                    <div class="bmi-small-card">

                        <i class="fa-solid fa-heart-pulse"></i>

                        <div>

                            <h5>Saran</h5>

                            <p>

                                <?php

                                if($status == "Kurus"){

                                    echo "Perbanyak protein.";

                                }
                                elseif($status == "Normal"){

                                    echo "Pertahankan pola hidup sehat.";

                                }
                                elseif($status == "Gemuk"){

                                    echo "Kurangi makanan manis.";

                                }
                                elseif($status == "Obesitas"){

                                    echo "Mulai pola hidup sehat.";

                                }
                                else{

                                    echo "Saran kesehatan muncul di sini.";

                                }

                                ?>

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

</div>

<script>
function toggleSidebar(){
    document.getElementById("sidebar").classList.toggle("active");
}
</script>

</body>
</html>