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
    <form action="tadmin-add-action.php" method="post">
    <div class="container">
    <div class="mt-5 col-8 m-auto">
    <h1>Add Data</h1>
<br>
    <form action="tadmin-add-action.php" method="POST">
        <div class="mb-3">
			<label for="username"> Username </label>      			
			<input type="text" class="form-control" name= "username" placeholder="Masukan username" required>      			
		</div>	
<br>
        <div class="mb-3">
			<label for="stok">password</label>      			
			<input type="text" class="form-control" name= "password" placeholder="Masukan password" required>      			
		</div>    

        <form class="d-flex" role="submit">
<br>
        <button class="btn btn-outline-success" type="submit">Submit</button>
    </form>
    
</center>
  </body>
  </body>
</html>