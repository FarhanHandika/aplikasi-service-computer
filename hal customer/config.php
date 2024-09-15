<?php
$db_host ="localhost";
$db_users ="root";
$db_password ="";
$db_name ="db_service";

$koneksi = mysqli_connect($db_host, $db_users, $db_password, $db_name);
if(!$koneksi){
    die("koneksi gagal");
}
