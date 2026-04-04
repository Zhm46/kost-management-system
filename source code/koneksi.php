<?php
$koneksi = mysqli_connect("localhost","root","","kost");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
