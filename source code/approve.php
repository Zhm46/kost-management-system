<?php
include 'koneksi.php';

$id = $_GET['id'];

// ubah status booking
mysqli_query($koneksi, "UPDATE booking SET status='approved' WHERE id='$id'");

// redirect balik
header("Location: booking_admin.php");