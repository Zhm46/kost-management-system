<?php 
include 'auth.php';
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM kamar WHERE id_kamar='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Kamar</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/admin.css">

</head>
<body>

<div class="container form-container">
    <h2>Edit Data Kamar</h2>

    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nomor Kamar</label>
            <input type="text" name="nomor_kamar" value="<?= $d['nomor_kamar']; ?>" required>
        </div>

        <div class="form-group">
            <label>Tipe Kamar</label>
            <select name="tipe_kamar" required>
                <option value="AC" <?= ($d['tipe_kamar']=='AC')?'selected':''; ?>>AC</option>
                <option value="Non-AC" <?= ($d['tipe_kamar']=='Non-AC')?'selected':''; ?>>Non-AC</option>
            </select>
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="harga" value="<?= $d['harga']; ?>" required>
        </div>

        <div class="form-group">
            <label>Status</label>
            <select name="status" required>
                <option value="tersedia" <?= ($d['status']=='tersedia')?'selected':''; ?>>Tersedia</option>
                <option value="terisi" <?= ($d['status']=='terisi')?'selected':''; ?>>Terisi</option>
            </select>
        </div>

        <div class="form-group">
            <label>Gambar Saat Ini</label><br>
            <img src="uploads/<?= $d['gambar']; ?>" style="width:180px;border-radius:8px">
        </div>

        <div class="form-group">
            <label>Ganti Gambar (opsional)</label>
            <input type="file" name="gambar" accept="image/*">
        </div>

        <div class="form-action">
            <button type="submit" name="update" class="btn btn-primary">Update</button>
            <a href="data.php" class="btn btn-secondary">⬅ Kembali</a>
        </div>
    </form>
</div>

<?php
if (isset($_POST['update'])) {

    $nomor  = $_POST['nomor_kamar'];
    $tipe   = $_POST['tipe_kamar'];
    $harga  = $_POST['harga'];
    $status = $_POST['status'];

    // gambar lama
    $gambar = $d['gambar'];

    // kalau upload gambar baru
    if (!empty($_FILES['gambar']['name'])) {
        $tmp = $_FILES['gambar']['tmp_name'];
        $ext = pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION);
        $namaBaru = 'kamar_' . time() . '.' . $ext;

        move_uploaded_file($tmp, 'uploads/' . $namaBaru);
        $gambar = $namaBaru;
    }

    mysqli_query($koneksi, "
        UPDATE kamar SET
        nomor_kamar='$nomor',
        tipe_kamar='$tipe',
        harga='$harga',
        status='$status',
        gambar='$gambar'
        WHERE id_kamar='$id'
    ");

    echo "<script>
        alert('Data berhasil diperbarui');
        window.location='data.php';
    </script>";
}

?>

</body>
</html>
