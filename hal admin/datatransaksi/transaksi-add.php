<?php
include '../config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tservice</title>
    <link rel="stylesheet" href="admin_service.css">
</head>
  <body>
    <center>
    <form action="transaksi-add-action.php" method="post">
    <div class="container">
    <div class="mt-5 col-8 m-auto">
    <h1>Add Data</h1>
<br>
    <form action="transaksi-add-action.php" method="POST">
        <div class="mb-3">
			<label for="nama"> Nama </label>      			
			<input type="text" class="form-control" name= "nama" placeholder="Masukan Nama" required>      			
		</div>	
<br>
        <div class="mb-3">
			<label for="keluhan"> keluhan </label>      			
			<input type="text" class="form-control" name= "keluhan" placeholder="Masukan keluhan" required>      			
		</div>    

        <br>
        <div class="mb-3">
			<label for="tingkat_kesulitan_harga"> Tingkat Kesulitan & Harga </label>      			
			<select name="tingkat_kesulitan_harga" id="tingkat_kesulitan_harga">
                <option value="mudah 250000">mudah 250000</option>
                <option value="sedang 500000">sedang 500000</option>
                <option value="sulit 1000000">sulit 1000000</option>
            </select>      			
		</div>

        <br>
<div class="mb-3">
			<label for="bayar"> bayar </label>      			
			<input type="text" class="form-control" name= "bayar" placeholder="bayar" required>      			
		</div> 

    
        <br>
        <div class="mb-3">
			<label for="tanggal_transaksi"> tanggal transaksi </label>      			
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