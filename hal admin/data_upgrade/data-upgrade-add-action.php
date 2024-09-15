<?php
include '../config.php';

//BUAT VARIABLE UNTUK MENERIMA INPUT DARI FORM
// _POST['id'] id tersebut diambil dari input name="id" yg ada di form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_tlp = $_POST['no_tlp'];
$jbarang = $_POST['jbarang'];
$nama_barang = $_POST['nama_barang'];
$status = $_POST['status'];
$harga = $_POST['harga'];
$tgl_upgrade = $_POST['tanggal'];
$stok = $_POST['stok'];

// die;

// buat query tambah data upgrade
$query = "INSERT INTO tupgrade_customer VALUES('','$nama','$alamat','$no_tlp','$jbarang','$nama_barang','$status','$harga','$tgl_upgrade','$stok')";
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
// redirect ke halaman data-upgrade.php
header("Location: data-upgrade.php");
exit();

?>