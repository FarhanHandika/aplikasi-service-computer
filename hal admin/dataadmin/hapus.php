<?php
include '../config.php';

$login_id = $_GET['login_id'];

$query = "DELETE FROM admin WHERE login_id = '$login_id'";
$sql = mysqli_query($koneksi, $query);

header("Location: tadmin.php");
?>