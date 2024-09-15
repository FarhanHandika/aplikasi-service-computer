<?php
include '../config.php';
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
  </head>
  <body>
    <center>
    <form action="tbarang-edit-action.php" method="post">

       

        <h1><legend> EDIT BARANG </legend></h1>
        <?php

            // MENGAMBIL DATA YANG AKAN DI EDIT BERDASARKAN ID SISWA
            $kd_barang = $_GET['kd_barang'];
            $query = "SELECT * FROM tbarang_upgrade WHERE kd_barang = '$kd_barang'";

            //MENJALANKAN QUERY
            $sql = mysqli_query($koneksi, $query);

            //MENAMPILKAN DATA YANG AKAN DI EDIT KE FORM EDIT
            foreach ($sql as $tampil) {
                # code...
            


        ?>
            <table>
            <input type="hidden" name="kd_barang" value="<?= $tampil['kd_barang'] ?>">
                <tr>
                    <td><label for="nis"> NAMA BARANG </label></td>
                    <td>:</td>
                    <td><input type="text" name="nama_barang" id="nama_barang" value="<?= $tampil['nama_barang'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="nama"> STOK </label></td>
                    <td>:</td>
                    <td><input type="text" name="stok" id="stok" value="<?= $tampil['stok'] ?>" ></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td><input type="text" name="harga" id="harga" value="<?= $tampil['harga'] ?>"></td>
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