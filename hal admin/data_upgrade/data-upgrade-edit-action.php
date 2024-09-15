<?php
include '../config.php';

//BUAT VARIABLE UNTUK MENERIMA INPUT DARI FORM
// _POST['id'] id tersebut diambil dari input name="id" yg ada di form
$id_customer = $_POST['id_customer'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_tlp = $_POST['no_tlp'];
$jbarang = $_POST['jbarang'];
$nama_barang = $_POST['nama_barang'];
$status = $_POST['status'];
$harga = $_POST['harga'];
$tgl_upgrade = $_POST['tanggal'];
$stok = $_POST['stok'];

//query untuk update data table 
$query = "UPDATE tupgrade_customer SET 
                nama = '$nama',
                alamat = '$alamat',
                no_tlp = '$no_tlp',
                jbarang = '$jbarang',
                nama_barang = '$nama_barang',
                sts = '$status',
                jbarang_harga = '$harga',
                tgl_upgrade = '$tgl_upgrade',
                stok = '$stok'
                WHERE id_customer = '$id_customer'";
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
header("Location: data-upgrade.php");
exit();

?>