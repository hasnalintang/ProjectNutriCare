<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>NutriCare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/index.css">
</head>

<body class="bd-index">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm px-4">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-primary"><img src="assets/logo02.png" width="100px"></a>

            <div class="collapse navbar-collapse justify-content-center">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#fitur">Fitur</a></li>
                    <li class="nav-item"><a class="nav-link" href="#artikel">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang Kami</a></li>
                </ul>
            </div>

            <div>
                <a href="login.php" class="btn btn-outline-primary me-2">Login</a>
                <a href="regis.php" class="btn btn-primary rounded-pill">Register</a>
            </div>
        </div>
    </nav>

    <section class="container py-5" id="home">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="fw-bold">
                    Cek Kesehatan Tubuhmu <br>
                    <span class="text-primary">Secara Mudah</span>
                </h1>

                <p class="text-muted mt-3">
                    Hitung BMI, kebutuhan kalori, dan dapatkan rekomendasi gizi
                    sesuai kondisi tubuhmu untuk hidup yang lebih sehat.
                </p>

                <div class="mt-4">
                    <a href="login.php" class="btn btn-primary me-2 px-4">Mulai Sekarang</a>
                    <a href="...." class="btn btn-outline-primary px-4">Pelajari Lebih Lanjut</a>
                </div>

                <div class="mt-3 small text-muted bii">
                    <l class="bi bi-shield-check fw-bold">Akurat</l>
                    <l class="bi bi-lock fw-bold">Aman</l>
                    <l class="bi bi-check2-circle fw-bold">Gratis</l>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="assets/hero.png" class="img-fluid" style="max-height: 350px;">
            </div>

        </div>
    </section>

    <section class="container text-center py-5" id="fitur">
        <p class="text-primary fw-semibold">FITUR UTAMA</p>
        <h2 class="fw-bold mb-4">
            Semua yang Kamu Butuhkan <br>
            Untuk Hidup <span class="text-primary">Lebih Sehat</span>
        </h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card fitur-card p-3 d-flex flex-row align-items-center shadow-sm border-0 h-100">
                    <img src="assets/kalku.png" class="fitur-img">
                    <div class="ms-3 text-start">
                        <h5>Perhitungan BMI</h5>
                        <p class="text-muted small">
                            Hitung indeks massa tubuhmu dengan mudah dan ketahui kategori berat badanmu.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card fitur-card p-3 d-flex flex-row align-items-center shadow-sm border-0 h-100">
                    <img src="assets/kalori.png" class="fitur-img">
                    <div class="ms-3 text-start">
                        <h5>Kalori Harian</h5>
                        <p class="text-muted small">
                            Dapatkan informasi kebutuhan kalori harian sesuai aktivitas dan tujuan berat badanmu.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card fitur-card p-3 d-flex flex-row align-items-center shadow-sm border-0 h-100">
                    <img src="assets/rice.png" class="fitur-img">
                    <div class="ms-3 text-start">
                        <h5>Rekomendasi Gizi</h5>
                        <p class="text-muted small">
                            Dapatkan saran pola makan dan tips kesehatan sesuai kondisi tubuhmu.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="why-section container mt-2" id="artikel">
        <div class="why-box">

            <div class="row align-items-center">

                <div class="col-md-4">
                    <h5 class="fw-bold">
                        Kenapa Memilih <span class="text-primary">NutriCare?</span>
                    </h5>
                    <p class="small text-muted">
                        Kami berkomitmen membantu kamu mencapai gaya hidup sehat
                        dengan cara yang mudah dan menyenangkan.
                    </p>
                </div>

                <div class="col-md-8">
                    <div class="row text-center">

                        <div class="col-md-3">
                            <div class="why-item">
                                <i class="bi bi-calculator"></i>
                                <h6>Perhitungan Akurat</h6>
                                <p class="small">Algoritma terpercaya dan berbasis data</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="why-item">
                                <i class="bi bi-shield-check"></i>
                                <h6>Data Aman</h6>
                                <p class="small">Informasi pribadimu terlindungi dengan baik</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="why-item">
                                <i class="bi bi-person-check"></i>
                                <h6>Mudah Digunakan</h6>
                                <p class="small">Antarmuka sederhana dan nyaman</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="why-item">
                                <i class="bi bi-heart-fill"></i>
                                <h6>100% Gratis</h6>
                                <p class="small">Semua fitur dapan digunakan tanpa biaya</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="cta-section mt-2 mx-5">
        <div class="container d-flex justify-content-between align-items-center flex-wrap">

            <div class="cta-left">
                <img src="assets/timbang.png" width="170">
            </div>

            <div class="cta-text text-center">
                <h3 class="fw-bold">Mulai hidup sehat dari sekarang!</h3>
                <p>Hitung BMI dan dapatkan rekomendasi gizi terbaik untukmu</p>
                <a href="login.php" class="btn btn-light px-4">Hitung Sekarang →</a>
            </div>

            <div class="cta-right">
                <img src="assets/makanan.png" width="170">
            </div>
        </div>
    </section>

    <footer class="footer-index mt-2" id="tentang">
        <div class="container d-flex justify-content-between flex-wrap">

            <div>
                <img src="assets/logoo2.png" width="200">
                <p class="small">Platform perhitungan gizi dan rekomendasi kesehatan <br> untuk hidup lebih sehat.</p>
                <div class="text-start mt-3 small">
                    © 2026 NutriCare. All rights reserved.
                </div>
            </div>

            <div>
                <h6>Menu</h6>
                <p class="small">
                    <l class="bii bi-house-fill">Home<br></l>
                    <l class="bii bi-sliders">Fitur<br></l>
                    <l class="bii bi-newspaper">Artikel<br></l>
                    <l class="bii bi-info-circle">Tentang kami<br></l>
                </p>
            </div>

            <div>
                <h6>Kontak</h6>
                <p class="small">
                    <l class="bii bi-exclamation-circle">info@nutricare.id <br></l>
                    <l class="bii bi-person-circle">+62 812-3456-7890 <br></l>
                    <l class="bii bi-geo-alt-fill">Indonesia<br></l>
                </p>
            </div>

            <div>
                <h6>Ikuti Kami</h6>
                <p class="small">
                    <l class="bii bi-instagram">@nutricare.id<br></l>
                    <l class="bii bi-twitter">@nutricare.id<br></l>
                    <l class="bii bi-tiktok">@nutricare.id<br></l>
                    <l class="bii bi-facebook">NutriCare<br></l>
                </p>
            </div>

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>