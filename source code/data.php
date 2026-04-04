<?php
session_start();
include 'koneksi.php';
$isAdmin = isset($_SESSION['admin']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Kamar</title>

    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/data.css">
</head>
<body>

<nav class="navbar">
    <div class="logo-wrap">
        <img src="assets/logo.png">
        <span class="logo-text">kost<span>.in</span></span>
    </div>
    <div class="nav-menu">
        <a href="index.php">Beranda</a>
        <a class="active" href="data.php">Data Kamar</a>

        <?php if($isAdmin): ?>
            <a href="tambah.php" class="btn-nav">Tambah</a>
            <a href="logout.php" class="btn-nav danger">Logout</a>
        <?php else: ?>
            <a href="login.php" class="btn-nav">Login</a>
        <?php endif; ?>
    </div>
</nav>

<section class="container">
    <h2 class="section-title">Pilihan Kamar Terbaik Untuk Anda</h2>
    <p class="subtitle">Harga transparan · Lokasi strategis · Siap huni</p>
    <div class="kamar-grid">
<?php
$q = mysqli_query($koneksi,"SELECT * FROM kamar");
while($k = mysqli_fetch_assoc($q)):
?>
    <div class="kamar-card <?= $k['status']; ?>">

        <div class="kamar-thumb">
            <img src="uploads/<?= $k['gambar']; ?>" alt="Kamar">


            <!-- ✅ SATU BADGE SAJA -->
            <span class="badge <?= $k['status']; ?>">
                <?= ucfirst($k['status']); ?>
            </span>
        </div>

        <div class="kamar-body">
            <?php if(!$isAdmin): ?>
            <a href="https://wa.me/6281957319081?text=Halo%20Admin,%20saya%20tertarik%20dengan%20Kamar%20<?= $k['nomor_kamar']; ?>"
            class="btn-kamar"
            target="_blank">
            Pesan via WhatsApp
        </a>
        <?php endif; ?>

            <h3>Kamar <?= $k['nomor_kamar']; ?></h3>
            <p><?= $k['tipe_kamar']; ?></p>
            <p class="harga">Rp <?= number_format($k['harga']); ?> /Bulan</p>

            <?php if($isAdmin): ?>
            <div class="aksi-admin">
                <a href="edit.php?id=<?= $k['id_kamar']; ?>" class="btn btn-edit">Edit</a>
                <a href="hapus.php?id=<?= $k['id_kamar']; ?>" 
                   class="btn btn-hapus"
                   onclick="return confirm('Yakin hapus?')">Hapus</a>
            </div>
            <?php endif; ?>
        </div>

    </div>
<?php endwhile; ?>
</div>
</section>

<footer>
    <p>© <?= date('Y'); ?> Kost.in </p>
</footer>

</body>
</html>
