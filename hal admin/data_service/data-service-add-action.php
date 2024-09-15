<?php
include '../config.php';

//BUAT VARIABLE UNTUK MENERIMA INPUT DARI FORM
// _POST['id'] id tersebut diambil dari input name="id" yg ada di form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_tlp = $_POST['no_tlp'];
$jbarang = $_POST['jbarang'];
$keluhan = $_POST['keluhan'];
$status = $_POST['status'];
$tingkat_kesulitan = $_POST['harga'];
$tgl_service = $_POST['tanggal'];


// die;

// buat query tambah data service
$query = "INSERT INTO tservice_customer VALUES('','$nama','$alamat','$no_tlp','$jbarang','$keluhan','$status','$tingkat_kesulitan','$tgl_service')";
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
header("Location: data-service.php");
exit();

?>