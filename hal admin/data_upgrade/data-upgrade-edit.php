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
    <form action="data-upgrade-edit-action.php" method="post">

       

        <h1><legend> EDIT DATA </legend></h1>
        <?php

            // MENGAMBIL DATA YANG AKAN DI EDIT BERDASARKAN ID 
            $id_customer = $_GET['id_customer'];
            $query = "SELECT * FROM tupgrade_customer WHERE id_customer = '$id_customer'";

            //MENJALANKAN QUERY
            $sql = mysqli_query($koneksi, $query);

            //MENAMPILKAN DATA YANG AKAN DI EDIT KE FORM EDIT
            foreach ($sql as $tampil) {
                # code...
            


        ?>
            <table>
            <input type="hidden" name="id_customer" value="<?= $tampil['id_customer'] ?>">
                <tr>
                    <td><label for="nis"> NAMA </label></td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama" value="<?= $tampil['nama'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="nama"> ALAMAT </label></td>
                    <td>:</td>
                    <td><input type="text" name="alamat" id="alamat" value="<?= $tampil['alamat'] ?>" ></td>
                </tr>
                <tr>
                    <td><label for="nama"> NO TELEPON </label></td>
                    <td>:</td>
                    <td><input type="text" name="no_tlp" id="no_tlp" value="<?= $tampil['no_tlp'] ?>" ></td>
                </tr>
                <tr>
                    <td><label for="nama"> JENIS BARANG </label></td>
                    <td>:</td>
                    <td><input type="text" name="jbarang" id="jbarang" value="<?= $tampil['jbarang'] ?>" ></td>
                </tr>
                <tr>
                    <td>NAMA BARANG</td>
                    <td>:</td>
                    <td><input type="text" name="nama_barang" id="nama_barang" value="<?= $tampil['nama_barang'] ?>"></td>
                </tr>

                <tr>
                    <td>STATUS</td>
                    <td>:</td>
                    <td><select name="status" id="status">
                <option value="pending">pending</option>
                <option value="in progres">in progres</option>
                <option value="completed">completed</option>
            </select></td>
                </tr>


                <tr>
                    <td>NAMA BARANG & HARGA</td>
                    <td>:</td>
                    <td><select name="harga" id="harga">
                <option value="storage disk 600000">storage disk 600000</option>
                <option value="ram 500000">ram 500000</option>
                <option value="batrai 650000">batrai 650000</option>
                <option value="processor 500000">processor 500000</option>
            </select></td>
                </tr>


                <tr>
                    <td>TANGGAL UPGRADE</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal" id="tanggal" value="<?= $tampil['tgl_upgrade'] ?>"></td>
                </tr>

                <td>STOK</td>
                    <td>:</td>
                    <td><input type="text" name="stok" id="stok" value="<?= $tampil['stok'] ?>"></td>
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