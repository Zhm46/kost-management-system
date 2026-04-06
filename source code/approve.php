<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "UPDATE booking SET status='approved' WHERE id='$id'");

header("Location: booking_admin.php");
