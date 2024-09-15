<?php
include '../config.php';

//BUAT VARIABLE UNTUK MENERIMA INPUT DARI FORM
// _POST['nis'] nis tersebut diambil dari input name="nis" yg ada di form
$kd_barang = $_POST['kd_barang'];
$nama_barang = $_POST['nama_barang'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];

//query untuk update data table students/siswa
$query = "UPDATE tbarang_upgrade SET 
                nama_barang = '$nama_barang',
                stok = '$stok',
                harga = '$harga'
                WHERE kd_barang = '$kd_barang'";
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
// redirect ke halaman student.php
header("Location: tbarang.php");
exit();

?>