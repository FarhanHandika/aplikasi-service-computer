<?php
include '../config.php';

$id_transaksi = $_GET['id_transaksi'];

$query = "DELETE FROM transaksi_service WHERE id_transaksi = '$id_transaksi'";
$sql = mysqli_query($koneksi, $query);

header("Location: ttransaksi.php");
?>