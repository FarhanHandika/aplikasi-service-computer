<?php
session_start();
include "hal customer/config.php";
$err="";

 
 if (isset ($_POST['login'])) {
     $username=$_POST['username'];
     $password=$_POST['password'];
 
     $sql="SELECT * FROM l_customer WHERE username='$username' AND password='$password'";

     $result =$koneksi ->query($sql);

     if ($result ->num_rows == 1) {
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
         $data= $result->fetch_assoc(); 
         header("location: hal customer/customer.php");
         
     }

     $sql="SELECT * FROM admin WHERE username='$username' AND password='$password'";

     $result =$koneksi ->query($sql);
     
     if ($result ->num_rows == 1) {
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
        header("location: hal admin/admin_service.php");
     }
     
     else {
        $err="data tidak ditemukan";
     }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
    
</head>
<body>
    <div class="app">  
        <h1>Login</h1>
        <?php
        if ($err) {
            echo ($err);
        }
        ?>
       
        
        <form action="" method="post">
            <input type="text"  name="username" class="input-box" placeholder="isikan username"/><br/><br/>
            <input type="password" name="password" class="input-box" placeholder="isikan password"/><br/><br/>
            <input type="submit" name="login" class="button" value="login">

        </form>
    </div>
</body>
</html>