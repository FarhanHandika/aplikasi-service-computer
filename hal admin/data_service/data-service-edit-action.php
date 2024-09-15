<?php
include '../config.php';

//BUAT VARIABLE UNTUK MENERIMA INPUT DARI FORM
// _POST['id'] id tersebut diambil dari input name="id" yg ada di form
$id_customer_service = $_POST['id_customer'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_tlp = $_POST['no_tlp'];
$jbarang = $_POST['jbarang'];
$keluhan = $_POST['keluhan'];
$status = $_POST['status'];
$tingkat_kesulitan = $_POST['harga'];
$tgl_service = $_POST['tanggal'];

//query untuk update data table 
$query = "UPDATE tservice_customer SET 
                nama = '$nama',
                alamat = '$alamat',
                no_tlp = '$no_tlp',
                jbarang = '$jbarang',
                keluhan = '$keluhan',
                sts = '$status',
                tingkat_kesulitan_harga = '$tingkat_kesulitan',
                tgl_service = '$tgl_service'
                WHERE id_customer_service = '$id_customer_service'";
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
header("Location: data-service.php");
exit();

?>