<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard admin</title>
    <link rel="stylesheet" href="admin_service.css">
    <style>
        *{
  padding: 0%;
  margin: 0%;
 }
 .navbar  {
    background-color: hsl(0, 0%, 0%);
    width: 210px;
    height: 1100px;
    position: absolute;
    box-shadow: 1px 1px 16px grey;
    margin-top: -25px;
  }

  .navbar a{
    text-decoration: none;
  }

  .image{
    margin-top: 30px;
    width: 100px;
    height: auto;
  }

  ul a {
    text-decoration: none;
    display: flex;
    color: white;
    font-size: 15px;
    padding: 40px;
    width: auto;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    transition: 0.3s;
  }
  
  ul a:hover {
    color: rgb(255, 0, 0);
    background-color: #cad7fda4;
  }

h1{
  font-size: 50px;
  color:  rgb(0, 0, 29);
}


.container{
  border: 2px;
  width: 1000px;
  margin-left: 30%;
  margin-top: 50px;
}

a {
  display: inline-block;
  text-decoration: none;
  padding: 5px;
  transition: background-color 0.3s ease;
}

a:hover {
  color: #ffffff;
}

a img {
  border: none;
  vertical-align: middle;
  width: 100px;
  height: auto;
  margin-left: 40px;
}

a img:hover {
  transform: scale(1.5);
  box-shadow: 7px 7px 7px black;
}
  
    </style>
</head>
<body>
<header>
        <div class="navbar">
            <center>
        <img src="asset2/pp.jpg"  class="image">
        </center>
            <nav>
                <ul>
                    <a href="admin_service.php">Dashboard</a>
                    <a href="dataadmin/tadmin.php">Login Admin</a>
                    <a href="databarang/tbarang.php">Data Barang</a>
                    <a href="datacustomer/tcustomer.php">Login Customer</a>
                    <a href="data_service/data-service.php">Data Service</a>
                    <a href="data_upgrade/data-upgrade.php">Data Upgrade</a>
                    <a href="datatransaksi/ttransaksi.php">Ttransaksi Service</a>
                    <a href="datatransaksi_upgrade/trans-upgrade.php">Ttransaksi Upgrade</a>
                    <a href="../logout.php">Log Out</a>
                </ul>
            </nav>
        </div>
    </header>

    <center>
    <h1>Dashboard</h1>
    </center>

        <div class="container">

            <a href="dataadmin/tadmin.php" >
                <img src="asset2/admin.png" alt="Example Image" /></a>


            <a href="databarang/tbarang.php" >
                <img src="asset2/barang.png" alt="Example Image" /></a>

            <a href="datacustomer/tcustomer.php" >
                <img src="asset2/customer.png" alt="Example Image" /></a>

            <a href="datatransaksi/ttransaksi.php" >
                <img src="asset2/tservice.png" alt="Example Image" /></a>

                <br>
                <br>
                <br>
                <br>
                <br>

                <a href="datatransaksi_upgrade/trans-upgrade.php" >
                <img src="asset2/tupgrade.png" alt="Example Image" /></a>

                <a href="data_service/data-service.php" >
                <img src="asset2/pservice.png" alt="Example Image" /></a>

                <a href="data_upgrade/data-upgrade.php" >
                <img src="asset2/pupgrade.png" alt="Example Image" /></a>

        </div>
</body>
</html>