<?php
include 'auth.php';
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM kamar WHERE id_kamar='$id'");
header("Location: data.php");
?>
