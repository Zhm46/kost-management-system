<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "UPDATE booking SET status='rejected' WHERE id='$id'");

header("Location: booking_admin.php");
