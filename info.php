<?php
 include "hal customer/config.php";
 session_start();
 $nama=$_SESSION['username'];
 $password=$_SESSION['password'];
 $query=mysqli_query($koneksi, "SELECT * FROM l_customer WHERE username='$nama'&& password='$password'");
 $data=mysqli_fetch_array($query);
 $alamat=$data['alamat'];
 $no_telepon=$data['no_telpon'];
 
 ?>