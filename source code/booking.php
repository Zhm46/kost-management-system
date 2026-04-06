<?php
include 'koneksi.php';

$id = $_GET['id'];

$q = mysqli_query($koneksi, "SELECT * FROM kamar WHERE id_kamar='$id'");
$k = mysqli_fetch_assoc($q);
?>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Booking Kamar</title>

    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/booking.css">

</head>
<body>

<div class="booking-container">
    <h2>Booking Kamar</h2>

    <div class="info-kamar">
    <img src="uploads/<?= $k['gambar']; ?>" class="img-kamar">
        <p><strong>Kamar:</strong> <?= $k['nomor_kamar']; ?></p>
        <p><strong>Tipe:</strong> <?= $k['tipe_kamar']; ?></p>
        <p><strong>Harga:</strong> Rp <?= number_format($k['harga']); ?>/bulan</p>
    </div>

    <?php if(isset($_GET['success'])): ?>
    <div class="success-msg">
        Booking berhasil dikirim! Tunggu konfirmasi admin.
    </div>
    <?php endif; ?>

    <?php if(isset($_GET['error'])): ?>
    <div class="error-msg">
        Semua field wajib diisi!
    </div>
    <?php endif; ?>

    <form action="proses_booking.php" method="POST">
        <input type="hidden" name="kamar_id" value="<?= $k['id_kamar']; ?>">

        <label>Nama</label>
        <input type="text" name="nama" required>

        <label>No HP</label>
        <input type="text" name="no_hp" required>

        <label>Tanggal Masuk</label>
        <input type="date" name="tanggal_masuk" required>

        <button type="submit">Booking Sekarang</button>
    </form>
</div>

</body>
</html>
