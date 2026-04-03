<?php
session_start();
include 'koneksi.php';

if(isset($_POST['login'])){
    $u = $_POST['username'];
    $p = $_POST['password'];

    $q = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$u' AND password='$p'");
    if(mysqli_num_rows($q)){
        $_SESSION['admin'] = $u;
        header("Location: data.php");
        exit;
    }
    $error = "Login gagal!";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>

<div class="login-wrapper">
    <div class="login-card">
        <h2>Login Admin</h2>
        <p class="login-desc">Masuk untuk mengelola data kost</p>

        <form method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required placeholder="Masukkan username">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required placeholder="Masukkan password">
            </div>

            <button type="submit" name="login" class="btn-login">Login</button>
        </form>

        <a href="index.php" class="back-link">← Kembali ke Beranda</a>
    </div>
</div>


</body>
</html>
