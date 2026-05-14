<?php
session_start();

if(!isset($_SESSION['nama'])){
    header("Location: login.php");
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

        $pesan = "Berat badan Anda masih kurang. Perbanyak makanan bergizi dan protein.";

    }
    elseif($bmi < 25){

        $status = "Normal";

        $pesan = "Berat badan Anda ideal. Pertahankan pola hidup sehat.";

    }
    elseif($bmi < 30){

        $status = "Gemuk";

        $pesan = "Berat badan Anda berlebih. Kurangi gula dan olahraga rutin.";

    }
    else{

        $status = "Obesitas";

        $pesan = "Disarankan menjaga pola makan dan rutin konsultasi kesehatan.";

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./css/bmi.css">
</head>

<body class="db-body">
<div class="db-wrapper">
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


        <!-- ALERT -->
        <div class="bmi-alert">

            <i class="fa-solid fa-circle-info"></i>

            BMI (Body Mass Index) digunakan untuk mengetahui
            status berat badan berdasarkan tinggi dan berat badan.

        </div>


        <div class="row g-4 mt-1">

            <!-- FORM -->
            <div class="col-lg-4">

                <div class="bmi-card">

                    <h4 class="fw-bold mb-1">
                        Masukkan Data Anda
                    </h4>

                    <p class="text-muted small mb-4">
                        Isi data berikut dengan benar
                    </p>

                    <form method="POST">

                        <label class="bmi-label">
                            Tinggi Badan (cm)
                        </label>

                        <div class="bmi-input-box mb-4">

                            <i class="fa-solid fa-ruler-vertical"></i>

                            <input type="number"
                            name="tinggi"
                            required
                            placeholder="170">

                            <span>cm</span>

                        </div>


                        <label class="bmi-label">
                            Berat Badan (kg)
                        </label>

                        <div class="bmi-input-box mb-4">

                            <i class="fa-solid fa-weight-scale"></i>

                            <input type="number"
                            name="berat"
                            required
                            placeholder="65">

                            <span>kg</span>

                        </div>


                        <button type="submit"
                        name="hitung"
                        class="btn bmi-btn w-100">

                            <i class="fa-solid fa-calculator"></i>

                            Hitung BMI

                        </button>

                    </form>


                    <!-- TIPS -->
                    <div class="bmi-tips">

                        <div class="d-flex gap-3">

                            <i class="fa-regular fa-lightbulb"></i>

                            <div>

                                <h6 class="fw-bold">
                                    Tips
                                </h6>

                                <p>
                                    Ukur tinggi dan berat badan dengan benar
                                    untuk hasil BMI lebih akurat.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <!-- HASIL -->
            <div class="col-lg-8">

                <div class="bmi-card">

                    <h4 class="fw-bold mb-1">
                        Hasil Perhitungan BMI
                    </h4>

                    <p class="text-muted small mb-4">
                        Berikut hasil BMI berdasarkan data Anda
                    </p>


                    <div class="row align-items-center">

                        <div class="col-md-5 text-center">

                            <div class="bmi-circle">

                                <div class="bmi-circle-inner">

                                    <h1>
                                        <?php
                                        if($bmi > 0){
                                            echo $bmi;
                                        }
                                        else{
                                            echo "0";
                                        }
                                        ?>
                                    </h1>

                                    <span>BMI Anda</span>

                                </div>

                            </div>

                        </div>


                        <div class="col-md-7">

                            <h4 class="fw-bold">
                                Status Berat Badan
                            </h4>

                            <span class="bmi-status">

                                <?php
                                if($status != ""){
                                    echo $status;
                                }
                                else{
                                    echo "-";
                                }
                                ?>

                            </span>

                            <p class="bmi-desc">

                                <?php
                                if($pesan != ""){
                                    echo $pesan;
                                }
                                else{
                                    echo "Silakan isi data terlebih dahulu.";
                                }
                                ?>

                            </p>

                        </div>

                    </div>


                    <hr class="my-4">


                    <!-- BERAT IDEAL -->
                    <div class="row g-3">

                        <div class="col-md-6">

                            <div class="bmi-small-card">

                                <i class="fa-solid fa-weight-scale"></i>

                                <div>

                                    <h6>
                                        Berat Badan Ideal
                                    </h6>

                                    <h3>

                                        <?php

                                        if($ideal_min > 0){

                                            echo
                                            $ideal_min .
                                            " - " .
                                            $ideal_max .
                                            " kg";

                                        }
                                        else{

                                            echo "-";

                                        }

                                        ?>

                                    </h3>

                                    <p>
                                        Kisaran berat badan ideal Anda
                                    </p>

                                </div>

                            </div>

                        </div>


                        <div class="col-md-6">

                            <div class="bmi-small-card">

                                <i class="fa-solid fa-heart-pulse"></i>

                                <div>

                                    <h6>
                                        Saran
                                    </h6>

                                    <p>

                                        <?php

                                        if($status == "Kurus"){

                                            echo
                                            "Perbanyak protein dan makanan bernutrisi.";

                                        }
                                        elseif($status == "Normal"){

                                            echo
                                            "Pertahankan pola hidup sehat dan olahraga.";

                                        }
                                        elseif($status == "Gemuk"){

                                            echo
                                            "Kurangi makanan manis dan perbanyak aktivitas.";

                                        }
                                        elseif($status == "Obesitas"){

                                            echo
                                            "Mulai pola hidup sehat dan konsultasi dokter.";

                                        }
                                        else{

                                            echo
                                            "Saran kesehatan akan muncul di sini.";

                                        }

                                        ?>

                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

</div>

</body>
</html>