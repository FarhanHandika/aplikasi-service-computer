<?php
include '../config.php';

//BUAT VARIABLE UNTUK MENERIMA INPUT DARI FORM
// _POST['nis'] nis tersebut diambil dari input name="nis" yg ada di form
$nama_barang = $_POST['nama_barang'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];


// die;

// buat query tambah barang
$query = "INSERT INTO tbarang_upgrade VALUES('','$nama_barang','$stok','$harga')";
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
// redirect ke halaman tbarang.php
header("Location: tbarang.php");
exit();

?>