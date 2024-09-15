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
    <form action="data-service-edit-action.php" method="post">

       

        <h1><legend> EDIT DATA </legend></h1>
        <?php

            // MENGAMBIL DATA YANG AKAN DI EDIT BERDASARKAN ID 
            $id_customer_service = $_GET['id_customer_service'];
            $query = "SELECT * FROM tservice_customer WHERE id_customer_service = '$id_customer_service'";

            //MENJALANKAN QUERY
            $sql = mysqli_query($koneksi, $query);

            //MENAMPILKAN DATA YANG AKAN DI EDIT KE FORM EDIT
            foreach ($sql as $tampil) {
                # code...
            


        ?>
            <table>
            <input type="hidden" name="id_customer" value="<?= $tampil['id_customer_service'] ?>">
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
                    <td>KELUHAN</td>
                    <td>:</td>
                    <td><input type="text" name="keluhan" id="keluhan" value="<?= $tampil['keluhan'] ?>"></td>
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
                    <td>TINGKAT KESULITAN & HARGA</td>
                    <td>:</td>
                    <td><select name="harga" id="harga">
                <option value="mudah 250000">mudah 250000</option>
                <option value="sedang 500000">sedang 500000</option>
                <option value="sulit 1000000">sulit 1000000</option>
            </select></td>
                </tr>

                <tr>
                    <td>TANGGAL SERVICE</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal" id="tanggal" value="<?= $tampil['tgl_service'] ?>"></td>
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