<?php
include '../config.php';
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>upgrade</title>
  </head>
  <body>
    <center>
    <form action="trans-upgrade-edit-action.php" method="post">

       

        <h1><legend> EDIT DATA </legend></h1>
        <?php

            // MENGAMBIL DATA YANG AKAN DI EDIT BERDASARKAN ID 
            $no_trans_upgrade= $_GET['no_trans_upgrade'];
            $query = "SELECT * FROM transaksi_upgrade WHERE no_trans_upgrade = '$no_trans_upgrade'";

            //MENJALANKAN QUERY
            $sql = mysqli_query($koneksi, $query);

            //MENAMPILKAN DATA YANG AKAN DI EDIT KE FORM EDIT
            foreach ($sql as $tampil) {
                # code...
            


        ?>
            <table>
            <input type="hidden" name="no_trans_upgrade" value="<?= $tampil['no_trans_upgrade'] ?>">
                <tr>
                    <td><label for="nama"> NAMA </label></td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama" value="<?= $tampil['nama'] ?>"></td>
                </tr>
                <tr>
                    <td>NAMA BARANG & HARGA</td>
                    <td>:</td>
                    <td><select name="nama_barang_harga" id="nama_barang_harga">
                <option value="storage disk 600000">storage disk 600000</option>
                <option value="ram 500000">ram 500000</option>
                <option value="batrai 650000">batrai 650000</option>
                <option value="processor 500000">processor 500000</option>
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