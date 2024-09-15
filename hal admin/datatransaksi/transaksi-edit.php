<?php
include '../config.php';
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>service</title>
  </head>
  <body>
    <center>
    <form action="transaksi-edit-action.php" method="post">

       

        <h1><legend> EDIT DATA </legend></h1>
        <?php

// MENGAMBIL DATA YANG AKAN DI EDIT BERDASARKAN ID 
if (isset($_GET['id_transaksi'])) {
    $id_transaksi= $_GET['id_transaksi'];
$query = "SELECT * FROM transaksi_service WHERE id_transaksi = '$id_transaksi'";

//MENJALANKAN QUERY
$sql = mysqli_query($koneksi, $query);

}

//MENAMPILKAN DATA YANG AKAN DI EDIT KE FORM EDIT
foreach ($sql as $tampil) {
    # code...



?>
            <table>
            <input type="hidden" name="id_transaksi" value="<?= $tampil['id_transaksi'] ?>">
                <tr>
                    <td><label for="nama"> NAMA </label></td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama" value="<?= $tampil['nama'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="keluhan"> KELUHAN </label></td>
                    <td>:</td>
                    <td><input type="text" name="keluhan" id="keluhan" value="<?= $tampil['keluhan'] ?>" ></td>
                </tr>
                
                <tr>
                    <td>TINGKAT KESULITAN & HARGA</td>
                    <td>:</td>
                    <td><select name="tingkat_kesulitan_harga" id="tingkat_kesulitan_harga">
                <option value="mudah 250000">mudah 250000</option>
                <option value="sedang 500000">sedang 500000</option>
                <option value="sulit 1000000">sulit 1000000</option>
            </select></td>
                </tr>

                <tr>
                    <td><label for="bayar"> BAYAR </label></td>
                    <td>:</td>
                    <td><input type="text" name="bayar" id="bayar" value="<?= $tampil['bayar'] ?>" ></td>
                </tr>
                <tr>
                    <td>TANGGAL TRANSAKSI</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_transaksi" id="tanggal_transaksi" value="<?= $tampil['tanggal_transaksi'] ?>"></td>
                </tr>
                <tr>
                    <td>STATUS</td>
                    <td>:</td>
                    <td><select name="sts" id="sts">
                <option value="belum bayar">belum bayar</option>
                <option value="sudah lunas">sudah lunas</option>
            </select></td>
                </tr>
               
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="submit"></td>
                </tr>
            </table>
    </form>
    <?php
            }
    ?>
    
  </body>
  </body>
</html>