<?php
include '../config.php';

$id_customer = $_GET['id_customer'];

$query = "DELETE FROM tupgrade_customer WHERE id_customer = '$id_customer'";
$sql = mysqli_query($koneksi, $query);

header("Location: data-upgrade.php");
?>