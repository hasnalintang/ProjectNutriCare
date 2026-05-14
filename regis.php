<?php
session_start();
include 'koneksi.php';

if (isset($_SESSION['nama'])) {
    header("Location: dashboard.php");
}

if (isset($_POST['register'])) {

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi_password'];

    if ($password != $konfirmasi) {

        echo "
        <script>
            alert('Konfirmasi password tidak sama!');
        </script>
        ";
    } else {

        $cek = mysqli_query(
            $conn,
            "SELECT * FROM users WHERE email='$email'"
        );

        if (mysqli_num_rows($cek) > 0) {

            echo "
            <script>
                alert('Email sudah terdaftar!');
            </script>
            ";
        } else {

            $query = mysqli_query(
                $conn,
                "INSERT INTO users(nama,email,password,role)
            VALUES('$username','$email','$password','user')"
            );

            if ($query) {

                echo "
                <script>
                    alert('Register berhasil!');
                    window.location='login.php';
                </script>
                ";
            } else {

                echo "
                <script>
                    alert('Register gagal!');
                </script>
                ";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="log">
    <div class="auth-card">
        <div class="auth-header">
            <h2 style="color: #b883f9;">Daftar</h2>
            <p class="text-muted small">
                Buat akun barumu sekarang.
            </p>
        </div>

        <form method="POST">
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email Aktif" required>
            </div>
            <div class="mb-3">
                <input type="text" name="username" class="form-control" placeholder="Buat Username" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="mb-4">
                <input type="password" name="konfirmasi_password" class="form-control" placeholder="Ulangi Password" required>
            </div>
            <button type="submit" name="register" class="btn btn-regis btn-custom w-100">BUAT AKUN</button>
        </form>

        <div class="text-center mt-4">
            <span class="small text-muted">
                Sudah ada akun?
                <a href="login.php"
                    class="fw-bold text-decoration-none"
                    style="color: #b883f9;">
                    Login
                </a>
            </span>
        </div>

    </div>

</body>

</html>