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
    <form action="data-service-add-action.php" method="post">
    <div class="container">
    <div class="mt-5 col-8 m-auto">
    <h1>Add Data</h1>
<br>
    <form action="data-service-add-action.php" method="POST">
        <div class="mb-3">
			<label for="nama"> Nama </label>      			
			<input type="text" class="form-control" name= "nama" placeholder="Masukan Nama" required>      			
		</div>	
<br>
        <div class="mb-3">
			<label for="alamat"> Alamat </label>      			
			<input type="text" class="form-control" name= "alamat" placeholder="Masukan Alamat" required>      			
		</div>    
<br>
<div class="mb-3">
			<label for="no_tlp"> No Telepon </label>      			
			<input type="text" class="form-control" name= "no_tlp" placeholder="Masukan No Telepon" required>      			
		</div>    
<br>
<div class="mb-3">
			<label for="jbarang"> Jenis Barang </label>      			
			<input type="text" class="form-control" name= "jbarang" placeholder="Masukan Jenis Barang" required>      			
		</div>    
<br>
        <div class="mb-3">
			<label for="keluhan"> Keluhan </label>      			
			<input type="text" class="form-control" name= "keluhan" placeholder="Masukan Keluhan" required>      			
		</div>

    <br>
        <div class="mb-3">
			<label for="status"> Status </label>      			
			<select name="status" id="status">
                <option value="pending">pending</option>
                <option value="in progres">in progres</option>
                <option value="completed">completed</option>
            </select>
		</div>

    <br>
        <div class="mb-3">
			<label for="harga"> Tingkat Kesulitan & Harga </label>      			
			<select name="harga" id="harga">
                <option value="mudah 250000">mudah 250000</option>
                <option value="sedang 500000">sedang 500000</option>
                <option value="sulit 1000000">sulit 1000000</option>
            </select>      			
		</div>

    <br>
        <div class="mb-3">
			<label for="tanggal"> Tanggal Service </label>      			
			<input type="date" class="form-control" name= "tanggal" required>      			
		</div>


        <form class="d-flex" role="submit">
<br>
        <button class="btn btn-outline-success" type="submit">Submit</button>
    </form>
    
</center>
  </body>
  </body>
</html>