<?php
include '../config.php';

$kd_barang = $_GET['kd_barang'];

$query = "DELETE FROM tbarang_upgrade WHERE kd_barang = '$kd_barang'";
$sql = mysqli_query($koneksi, $query);

header("Location: tbarang.php");
?>