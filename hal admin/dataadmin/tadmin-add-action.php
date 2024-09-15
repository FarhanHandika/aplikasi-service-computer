<?php
include '../config.php';

//BUAT VARIABLE UNTUK MENERIMA INPUT DARI FORM
// _POST['nis'] nis tersebut diambil dari input name="nis" yg ada di form
$username = $_POST['username'];
$password = $_POST['password'];


// die;

// buat query tambah admin
$query = "INSERT INTO admin VALUES('','$username','$password')";
$sql = mysqli_query($koneksi,$query);


// mulai season
session_start();

//atur pesan alert

if ($sql) {
    $_SESSION['alertType'] = "success";
    $_SESSION['alertMessage'] = "data berhasil di insert!";
    //var_dump($_SESSION['alertType']);
    //die;
// jika query gagal di jalankan
}else {
    $_SESSION['alertType'] = "danger";
    $_SESSION['alertMessage'] = "Gagal melakukan insert!";
}
// redirect ke halaman admin.php
header("Location: tadmin.php");
exit();

?>