<?php 
include 'auth.php';
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Kamar</title>
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/admin.css">

</head>
<body>

<div class="container form-container">
<div class="form-header">
    <div>
        <h2>Tambah Kamar Kost</h2>
        <p>Lengkapi data kamar dengan benar</p>
    </div>
</div>

    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nomor Kamar</label>
            <input type="text" name="nomor_kamar" placeholder="Contoh: A01" required>
        </div>

        <div class="form-group">
            <label>Tipe Kamar</label>
            <select name="tipe_kamar" required>
                <option value="">-- Pilih Tipe --</option>
                <option value="AC">AC</option>
                <option value="Non-AC">Non-AC</option>
            </select>
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="harga" placeholder="Contoh: 500000" required>
        </div>

        <div class="form-group">
            <label>Status</label>
            <select name="status" required>
                <option value="tersedia">Tersedia</option>
                <option value="terisi">Terisi</option>
            </select>
        </div>

        <div class="form-group">
            <label>Gambar Kamar</label>
            <input type="file" name="gambar" accept="image/*" required>
        </div>

        <div class="form-action">
            <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
            <a href="data.php" class="btn btn-secondary">⬅ Kembali</a>
        </div>
    </form>
</div>

<?php
if (isset($_POST['simpan'])) {

    $nomor  = $_POST['nomor_kamar'];
    $tipe   = $_POST['tipe_kamar'];
    $harga  = $_POST['harga'];
    $status = $_POST['status'];

    $gambar = $_FILES['gambar']['name'];
    $tmp    = $_FILES['gambar']['tmp_name'];

    $ext = pathinfo($gambar, PATHINFO_EXTENSION);
    $namaBaru = 'kamar_' . time() . '.' . $ext;

    move_uploaded_file($tmp, 'uploads/' . $namaBaru);

    mysqli_query($koneksi, "
        INSERT INTO kamar (nomor_kamar, tipe_kamar, harga, status, gambar)
        VALUES ('$nomor','$tipe','$harga','$status','$namaBaru')
    ");

    echo "<script>
        alert('Kamar berhasil ditambahkan');
        window.location='data.php';
    </script>";
}

?>

</body>
</html>
