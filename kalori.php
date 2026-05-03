<?php
$hasil = null;

if(isset($_POST['hitung'])) {

    $usia = $_POST['usia'];
    $jk = $_POST['jk'];
    $berat = $_POST['berat'];
    $tinggi = $_POST['tinggi'];
    $aktivitas = $_POST['aktivitas'];

    // BMR
    if($jk == "L") {
        $bmr = 10*$berat + 6.25*$tinggi - 5*$usia + 5;
    } else {
        $bmr = 10*$berat + 6.25*$tinggi - 5*$usia - 161;
    }

    // TDEE
    $tdee = $bmr * $aktivitas;

    // Defisit
    $defisit = $tdee - 500;

    $hasil = [
        "bmr" => round($bmr),
        "tdee" => round($tdee),
        "defisit" => round($defisit)
    ];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kebutuhan Kalori</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">

    <!-- KIRI: FORM -->
    <div class="card-kal form-card">
        <h3>Data Perhitungan</h3>

        <form method="POST">
            <label>Usia</label>
            <input type="number" name="usia" required>

            <label>Jenis Kelamin</label>
            <select name="jk">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>

            <label>Berat Badan (kg)</label>
            <input type="number" name="berat" required>

            <label>Tinggi Badan (cm)</label>
            <input type="number" name="tinggi" required>

            <label>Tingkat Aktivitas</label>
            <select name="aktivitas">
                <option value="1.2">Ringan</option>
                <option value="1.55">Sedang</option>
                <option value="1.725">Berat</option>
            </select>

            <button type="submit" name="hitung">Hitung Kalori</button>
        </form>
    </div>

    <!-- KANAN: HASIL -->
    <div class="card-kal hasil-card">
        <h3>Hasil Kebutuhan Kalori</h3>

        <?php if($hasil) { ?>

        <div class="hasil-box">
            <p>Kebutuhan Kalori Harian Anda</p>
            <h1><?= $hasil['tdee'] ?></h1>
            <span>kkal/hari</span>
        </div>

        <div class="detail-box">

            <div class="item">
                <div class="icon">🔥</div>
                <div>
                    <p>BMR (Metabolisme Basal)</p>
                    <b><?= $hasil['bmr'] ?> kkal</b>
                </div>
            </div>

            <div class="item">
                <div class="icon">⚡</div>
                <div>
                    <p>TDEE (Total Estimasi)</p>
                    <b><?= $hasil['tdee'] ?> kkal</b>
                </div>
            </div>

            <div class="item">
                <div class="icon">🎯</div>
                <div>
                    <p>Defisit untuk Turun Berat Badan</p>
                    <b><?= $hasil['defisit'] ?> kkal</b>
                    <small>(500 kkal/hari)</small>
                </div>
            </div>

        </div>

        <?php } else { ?>
            <p class="placeholder">Isi data dulu ya untuk lihat hasilnya 😊</p>
        <?php } ?>

    </div>

</div>

</body>
</html>