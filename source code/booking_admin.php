<?php
session_start();
include 'koneksi.php';

// cek admin
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit;
}

// ambil data booking + join kamar
$q = mysqli_query($koneksi, "
SELECT booking.*, kamar.nomor_kamar 
FROM booking 
JOIN kamar ON booking.kamar_id = kamar.id_kamar
ORDER BY booking.id DESC
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Booking</title>
    <link rel="stylesheet" href="css/booking_admin.css">
</head>
<body>

<h2>Data Booking</h2>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>No HP</th>
        <th>Kamar</th>
        <th>Tanggal Masuk</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>

<?php $no=1; while($b = mysqli_fetch_assoc($q)): ?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $b['nama']; ?></td>
    <td><?= $b['no_hp']; ?></td>
    <td>Kamar <?= $b['nomor_kamar']; ?></td>
    <td><?= $b['tanggal_masuk']; ?></td>
    <td><?= $b['status']; ?></td>
    <td>
        <?php if($b['status'] == 'pending'): ?>
            <a href="approve.php?id=<?= $b['id']; ?>">Approve</a>
            <a href="reject.php?id=<?= $b['id']; ?>">Reject</a>
        <?php else: ?>
            -
        <?php endif; ?>
    </td>
</tr>
<?php endwhile; ?>

</table>

</body>
</html>