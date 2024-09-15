<?php
include '../config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tadmin</title>
    <link rel="stylesheet" href="admin_service.css">
</head>
  <body>
    <center>
    <form action="tbarang-add-action.php" method="post">
    <div class="container">
    <div class="mt-5 col-8 m-auto">
    <h1>Add Barang</h1>
<br>
    <form action="tbarang-add-action.php" method="POST">
        <div class="mb-3">
			<label for="nama_barang"> Nama Barang </label>      			
			<input type="text" class="form-control" name= "nama_barang" placeholder="Masukan Nama Barang" required>      			
		</div>	
<br>
        <div class="mb-3">
			<label for="stok">Stok</label>      			
			<input type="text" class="form-control" name= "stok" placeholder="Masukan Stok" required>      			
		</div>    
<br>
        <div class="mb-3">
			<label for="harga"> Harga </label>      			
			<input type="text" class="form-control" name= "harga" placeholder="Masukan Harga" required>      			
		</div>

        <form class="d-flex" role="submit">
<br>
        <button class="btn btn-outline-success" type="submit">Submit</button>
    </form>
    
</center>
  </body>
  </body>
</html>