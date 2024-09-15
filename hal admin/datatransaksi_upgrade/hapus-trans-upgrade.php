<?php
include '../config.php';

$no_trans_upgrade = $_GET['no_trans_upgrade'];

$query = "DELETE FROM transaksi_upgrade WHERE no_trans_upgrade = '$no_trans_upgrade'";
$sql = mysqli_query($koneksi, $query);

header("Location: trans-upgrade.php");
?>