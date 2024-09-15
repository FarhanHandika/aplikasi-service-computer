<?php
include '../config.php';

//BUAT VARIABLE UNTUK MENERIMA INPUT DARI FORM
// _POST['id'] id tersebut diambil dari input name="id" yg ada di form
$id_transaksi = $_POST['id_transaksi'];
$nama = $_POST['nama'];
$keluhan = $_POST['keluhan'];
$tingkat_kesulitan_harga = $_POST['tingkat_kesulitan_harga'];
$bayar = $_POST['bayar'];
$tanggal_transaksi = $_POST['tanggal_transaksi'];
$sts = $_POST['sts'];

//query untuk update data table 
$query = "UPDATE transaksi_service SET 
                nama = '$nama',
                keluhan = '$keluhan',
                tingkat_kesulitan_harga = '$tingkat_kesulitan_harga',
                bayar = '$bayar',
                tanggal_transaksi = '$tanggal_transaksi',
                sts = '$sts'
                WHERE id_transaksi  = '$id_transaksi'";
//var_dump($query);
//die;
$sql = mysqli_query($koneksi, $query);

// mulai season
session_start();

//atur pesan alert
if ($sql) {
    $_SESSION['alertType'] = "success";
    $_SESSION['alertMessage'] = "data berhasil di update!";
    //var_dump($_SESSION['alertType']);
    //die;
// jika query gagal di jalankan
}else {
    $_SESSION['alertType'] = "danger";
    $_SESSION['alertMessage'] = "Gagal melakukan update!";
}
// redirect ke halaman service.php
header("Location: ttransaksi.php");
exit();

?>