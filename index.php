<?php
session_start();
$isAdmin = isset($_SESSION['admin']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Beranda | Kost Nyaman</title>

    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/data.css">
</head>
<body>

<nav class="navbar">
    <div class="logo-wrap">
        <img src="assets/logo.png">
        <span class="logo-text">kost<span>.in</span></span>
    </div>
    <div class="nav-menu">
        <a class="active" href="index.php">Beranda</a>
        <a href="data.php">Data Kamar</a>
        <?php if($isAdmin): ?>
    <a href="logout.php" class="btn-nav danger">Logout</a>
    <?php else: ?>
    <a href="login.php" class="btn-nav">Login Admin</a>
    <?php endif; ?>
    </div>
</nav>

<section class="hero-modern">
    <div class="hero-overlay"></div>

    <div class="hero-content">
        <h1>Hunian Kost Nyaman<br>Untuk Hidup Lebih Tenang</h1>
        <p>
            Kost bersih, aman, fasilitas lengkap, dan lokasi strategis.
            Cocok untuk mahasiswa & pekerja.
        </p>

        <div class="hero-action">
            <a href="data.php" class="btn btn-success">🔍 Lihat Kamar</a>
            <a href="#keunggulan" class="btn btn-outline">✨ Keunggulan</a>
        </div>
    </div>
</section>

<section class="stats-floating">
    <div class="stat-box">
        <h3>30+</h3>
        <p>Kamar</p>
    </div>
    <div class="stat-box">
        <h3>100+</h3>
        <p>Penyewa</p>
    </div>
    <div class="stat-box">
        <h3>5+</h3>
        <p>Tahun Pengalaman</p>
    </div>
</section>

<section class="container" id="keunggulan">
    <h2 class="section-title">Kenapa Pilih Kost Kami?</h2>
    <p class="section-subtitle">
        Kami memberikan kenyamanan terbaik untuk hunian Anda
    </p>

    <div class="fitur-modern">
        <div class="fitur-card">
            🛏
            <h4>Kamar Nyaman</h4>
            <p>Desain modern, bersih, dan terawat.</p>
        </div>

        <div class="fitur-card">
            🔒
            <h4>Keamanan 24 Jam</h4>
            <p>Lingkungan aman dan tenang.</p>
        </div>

        <div class="fitur-card">
            📍
            <h4>Lokasi Strategis</h4>
            <p>Dekat kampus & pusat aktivitas.</p>
        </div>

        <div class="fitur-card">
            💰
            <h4>Harga Terjangkau</h4>
            <p>Harga transparan tanpa biaya tersembunyi.</p>
        </div>
    </div>
</section>

<section class="container light">
    <h2 class="section-title">Galeri Kost</h2>
    <p class="section-subtitle">Suasana nyaman & bersih</p>

    <div class="galeri-grid">
        <div class="galeri-card">
            <img src="assets/kos1.jpeg" alt="Galeri Kost">
        </div>
        <div class="galeri-card">
            <img src="assets/kos2.jpg" alt="Galeri Kost">
        </div>
        <div class="galeri-card">
            <img src="assets/kos3.jpg" alt="Galeri Kost">
        </div>
    </div>
</section>

<section class="cta-modern">
    <h2>Siap Menempati Kost Impian?</h2>
    <p>Cek ketersediaan kamar sekarang juga</p>
    <a href="data.php" class="btn btn-success">🚀 Lihat Kamar</a>
</section>

<footer>
    <p>© <?= date('Y'); ?> Kost.in</p>
</footer>

</body>
</html>
