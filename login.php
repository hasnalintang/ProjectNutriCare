<?php
session_start();
include 'koneksi.php';

if(isset($_SESSION['nama'])){
    header("Location: dashboard.php");
}

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi,
    "SELECT * FROM users
    WHERE email='$email'
    AND password='$password'");

    if(mysqli_num_rows($query) > 0){

        $data = mysqli_fetch_assoc($query);

        $_SESSION['id'] = $data['id'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['role'] = $data['role'];

        header("Location: dashboard.php");

    } else {

        $cek = mysqli_query($koneksi,
        "SELECT * FROM users WHERE email='$email'");

        if(mysqli_num_rows($cek) == 0){

            echo "
            <script>
                alert('Akun belum terdaftar! Silakan daftar dulu.');
                window.location='regis.php';
            </script>
            ";

        } else {

            echo "
            <script>
                alert('Password salah!');
            </script>
            ";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/log.css">
</head>

<body class="log">
<div class="auth-card">
    <div class="auth-header">
        <h2>Login</h2>
        <p class="text-muted small">
            Halo! Masuk untuk cek gizimu hari ini
        </p>
    </div>

    <form method="POST">
        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="mb-4">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <button type="submit" name="login" class="btn btn-login btn-custom w-100">SIGN IN</button>
    </form>

    <div class="text-center mt-4">
        <span class="small text-muted">
            Belum punya akun?
            <a href="regis.php" class="fw-bold text-decoration-none" style="color: #b883f9;">Daftar</a>
        </span>
    </div>

</div>

</body>
</html>