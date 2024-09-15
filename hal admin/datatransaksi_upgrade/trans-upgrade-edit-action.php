<?php
include '../config.php';

//BUAT VARIABLE UNTUK MENERIMA INPUT DARI FORM
// _POST['id'] id tersebut diambil dari input name="id" yg ada di form
$no_trans_upgrade = $_POST['no_trans_upgrade'];
$nama = $_POST['nama'];
$nama_barang_harga = $_POST['nama_barang_harga'];
$bayar = $_POST['bayar'];
$tanggal_transaksi = $_POST['tanggal_transaksi'];
$sts = $_POST['sts'];


//query untuk update data table 
$query = "UPDATE transaksi_upgrade SET 
                nama = '$nama',
                nama_barang_harga = '$nama_barang_harga',
                bayar = '$bayar',
                tanggal_transaksi = '$tanggal_transaksi',
                sts = '$sts'
                WHERE no_trans_upgrade = '$no_trans_upgrade'";
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
// redirect ke halaman upgrade.php
header("Location: trans-upgrade.php");
exit();

?>