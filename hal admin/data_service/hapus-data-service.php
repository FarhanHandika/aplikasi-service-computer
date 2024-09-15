<?php
include '../config.php';

$id_customer_service = $_GET['id_customer_service'];

$query = "DELETE FROM tservice_customer WHERE id_customer_service = '$id_customer_service'";
$sql = mysqli_query($koneksi, $query);

header("Location: data-service.php");
?>