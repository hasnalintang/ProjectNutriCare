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
    WHERE user_id = '$user_id'
    ORDER BY id DESC
");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/riwayat.css">

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
                        <a href="rekomendasi.php">
                            <i class="fa-solid fa-gem"></i>
                            Rekomendasi Gizi
                        </a>
                    </li>

                    <li>
                        <a href="riwayat.php" class="active">
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

            <h1>Riwayat Perhitungan</h1>

            <p class="text-muted mb-0">
                Dashboard >
                <span class="text-primary fw-semibold">
                    Riwayat
                </span>
            </p>
            <br>

            <div class="table-card">

                <table>

                    <thead>

                        <tr>
                            <th>Tanggal</th>
                            <th>Umur</th>
                            <th>BB</th>
                            <th>TB</th>
                            <th>BMI</th>
                            <th>Status</th>
                            <th>Kalori</th>
                            <th>Aktivitas</th>
                        </tr>

                    </thead>

                    <tbody>

                        <?php while ($data = mysqli_fetch_assoc($query)) { ?>

                            <tr>

                                <td>
                                    <?= date('d M Y', strtotime($data['created_at'])) ?>
                                </td>

                                <td>
                                    <?= $data['umur'] ?> th
                                </td>

                                <td>
                                    <?= $data['berat_badan'] ?> kg
                                </td>

                                <td>
                                    <?= $data['tinggi_badan'] ?> cm
                                </td>

                                <td>
                                    <?= round($data['bmi'], 1) ?>
                                </td>

                                <td>

                                    <?php
                                    $status = $data['status_badan'];

                                    if ($status == "Normal") {
                                        echo "<span class='status normal'>$status</span>";
                                    } elseif ($status == "Kurus") {
                                        echo "<span class='status kurus'>$status</span>";
                                    } else {
                                        echo "<span class='status gemuk'>$status</span>";
                                    }
                                    ?>

                                </td>

                                <td>
                                    <?= round($data['kalori_harian']) ?> kkal
                                </td>

                                <td>
                                    <?= $data['aktivitas'] ?>
                                </td>

                            </tr>

                        <?php } ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</body>

</html>