<?php
 include("hal customer/config.php");

 if (isset($_POST['signin'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $alamat=$_POST['alamat'];
    $no_telepon=$_POST['no_telepon'];

    
    if ($username=="" or $password=="") {
        echo("isi data");

    } 
    
    else {
        $sql="INSERT INTO l_customer VALUES (null,'$username','$password','$alamat','$no_telepon')";
    $result =mysqli_query($koneksi,$sql);
    header("location:login.php");
    }

 }

 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signin.css">
    <title>Document</title>

</head>
<body>
    <div class="sign">  
        <h1>Sign in</h1>
       
        <form action="" method="post">
            <input type="text"  name="username" class="input-box" placeholder="username"/><br/><br/>
            <input type="password" name="password" class="input-box" placeholder="password"/><br/><br/>
            <input type="text" name="alamat" class="input-box" placeholder="alamat"/><br/><br/>
            <input type="text" name="no_telepon" class="input-box" placeholder="no_telepon"/><br/><br/>
            <input type="submit" name="signin" class="button" value="Sign in"></br></br>
            <a>Sudah Memiliki Akun?</a><a href="login.php">Login</a>
        </form>
    </div>
</body>
</html>