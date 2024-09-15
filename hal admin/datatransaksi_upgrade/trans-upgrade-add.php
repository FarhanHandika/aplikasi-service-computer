<?php
include '../config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upgrade</title>
    <link rel="stylesheet" href="admin_service.css">
</head>
  <body>
    <center>
    <form action="trans-upgrade-add-action.php" method="post">
    <div class="container">
    <div class="mt-5 col-8 m-auto">
    <h1>Add Data</h1>
<br>
    <form action="trans-upgrade-add-action.php" method="POST">
        <div class="mb-3">
			<label for="nama"> Nama </label>      			
			<input type="text" class="form-control" name= "nama" placeholder="Masukan Nama" required>      			
		</div>	

        <br>
        <div class="mb-3">
			<label for="nama_barang_harga"> Nama Barang & Harga </label>      			
			<select name="nama_barang_harga" id="nama_barang_harga">
      <option value="storage disk 600000">storage disk 600000</option>
                <option value="ram 500000">ram 500000</option>
                <option value="batrai 650000">batrai 650000</option>
                <option value="processor 500000">processor 500000</option>
            </select>      			
		</div>
<br>
        <div class="mb-3">
			<label for="bayar"> Bayar </label>      			
			<input type="text" class="form-control" name= "bayar" placeholder="bayar" required>      			
		</div>    

        <br>
        <div class="mb-3">
			<label for="tanggal_transaksi"> Tanggal Transaksi </label>      			
			<input type="date" class="form-control" name= "tanggal_transaksi" required>      			
		</div>

        <br>
        <div class="mb-3">
			<label for="sts"> Status </label>      			
			<select name="sts" id="sts">
                <option value="belum bayar">belum bayar</option>
                <option value="sudah lunas">sudah lunas</option>
            </select>
		</div>


        <form class="d-flex" role="submit">
<br>
        <button class="btn btn-outline-success" type="submit">Submit</button>
    </form>
    
</center>
  </body>
  </body>
</html>