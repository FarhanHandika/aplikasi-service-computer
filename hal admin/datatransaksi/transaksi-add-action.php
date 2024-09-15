<?php
include '../config.php';

//BUAT VARIABLE UNTUK MENERIMA INPUT DARI FORM
// _POST['id'] id tersebut diambil dari input name="id" yg ada di form
$nama = $_POST['nama'];
$keluhan = $_POST['keluhan'];
$tingkat_kesulitan_harga = $_POST['tingkat_kesulitan_harga'];
$bayar = $_POST['bayar'];
$tanggal_transaksi = $_POST['tanggal_transaksi'];
$sts = $_POST['sts'];



// die;

// buat query tambah data service
$query = "INSERT INTO transaksi_service VALUES('','$nama','$keluhan','$tingkat_kesulitan_harga','$bayar','$tanggal_transaksi','$sts')";
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
// redirect ke halaman data-service.php
header("Location: ttransaksi.php");
exit();

?>