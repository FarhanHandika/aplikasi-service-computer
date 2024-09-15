<?php
 include("config.php");
 include("../info.php");

 if (isset($_POST['buttom'])) {
    $nama = $_POST['nama'];
    $keluhan = $_POST['keluhan'];
    $tingkat_kesulitan_harga = $_POST['tingkat_kesulitan_harga'];
    $bayar = $_POST['bayar'];
    $tanggal_transaksi = $_POST['tanggal_transaksi'];
    $sts = $_POST['sts'];


    $sql="INSERT INTO transaksi_service VALUES ('','$nama','$keluhan','$tingkat_kesulitan_harga','$bayar','$tanggal_transaksi','$sts')";
    $result =mysqli_query($koneksi,$sql);

    header("location:pembayaran.php");

   
 }
   
 
// PHP program to pop an alert 
// message box on the screen 
  
// Display the alert box  
echo '<script>alert("Bayar Pesanan Kamu Sekarang")</script>'; 
  
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>keluhan</title>
    <link rel="stylesheet" href="pembayaran.css">

    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
.container {
    width: 80%;
    margin: 0 auto;
    font-family: Georgia, 'Times New Roman', Times, serif;
}

header {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
}

header h1 {
    margin: 0;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    display: inline-block;
    text-decoration: none;
    padding: 5px;
    border: 2px solid  #333;
    border-radius: 5px;
    color: #ffffff;
    transition: background-color 0.3s ease;
}

a {
    display: inline-block;
    text-decoration: none;
    padding: 5px;
    border: 2px solid #000000;
    border-radius: 5px;
    color: #000000;
    transition: background-color 0.3s ease;
  }
  
  a:hover {
    background-color: #000000;
    color: #ffffff;
  }

  
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.conta{
    margin-top: -100px;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.bungkus {
    display: flex;
}

.input-box {
    position: relative;
    width: 340px;
    height: 50px;
    border-bottom: 2px solid #000;
    margin: 30px;
}

.input-box label {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    font-size: 1em;
    color: #000;
    pointer-events: none;
    transition: .5s;
}

.input-box input:focus~label,
.input-box input:valid~label {
    top: -5px;
}

.input-box input {
    text-transform: capitalize;
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    color: #5ac2dc;
    font-size: 15px;
    letter-spacing: 1px;
}

.input-box-special {
    position: relative;
    width: 740px;
    height: 50px;
    border-bottom: 2px solid #000;
    margin: 30px;
}

.input-box-special .label {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    font-size: 1em;
    color: #000;
    pointer-events: none;
    transition: .5s;
}

.input-box-special .input:focus~.label,
.input-box-special .input:valid~.label {
    top: -5px;
}

.input-box-special .input {
    text-transform: capitalize;
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    color: #5ac2dc;
    font-size: 15px;
    letter-spacing: 1px;
}

button {
    margin-left: 30px;
    width: 740px;
    padding: 1em 2em;
    border: none;
    border-radius: 5px;
    font-weight: bold;
    letter-spacing: 2px;
    color: #000;
    transition: all 1000ms;
    font-size: 15px;
    position: relative;
    overflow: hidden;
    outline: 2px solid #000;
}

button:hover {
    color: #ffffff;
    transform: scale(1);
    outline: 2px solid #AF465A;
    box-shadow: 4px 5px 17px -4px #6B274A;
}

button::before {
    content: "";
    position: absolute;
    left: -50px;
    top: 0;
    width: 0;
    height: 100%;
    background-color: #5ac2dc;
    transform: skewX(45deg);
    z-index: -1;
    transition: width 1000ms;
}

button:hover::before {
    width: 250%;
}
  
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>All Technos</h1>
            <nav>
                <ul>
                <li><a href="customer.php">Beranda</a></li>
                    <li><a href="tentang_kami.php">Tentang Kami</a></li>
                    <li><a href="l_service.php">Service</a></li>
                    <li><a href="l_upgrade.php">Upgrade</a></li>
                    <li><a href="pembayaran.php">Pembayaran Service</a></li>
                    <li><a href="pembayaran_upgrade.php">Pembayaran Upgrade</a></li>
                    <li><a href="../logout.php">Log Out</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <div class="conta">
        <form action=" " method="POST">
            <div class="bungkus">
                <div class="input-box">
                    <input type="text" name="nama" value="<?= $nama?>" readonly>
                    <label for="nama">Nama</label>
                </div>
                <div class="input-box">
                    <input type="text" name="keluhan" required>
                    <label for="keluhan">keluhan</label>
                </div>
            </div>
            <div class="bungkus">
                <div class="input-box">
                <select name="tingkat_kesulitan_harga" id="tingkat_kesulitan_harga">
                <option value="mudah 250000">mudah 250000</option>
                <option value="sedang 500000">sedang 500000</option>
                <option value="sulit 1000000">sulit 1000000</option>
            </select>
                </div>
                <div class="input-box">
                    <input type="text" name="bayar" required>
                    <label for="bayar">bayar</label>
                </div>
            </div>
            <div class="input-box-special">
                <input class="input" type="date" name="tanggal_transaksi" required>
                <label class="label" for="tanggal_transaksi">tanggal transaksi</label>
            </div>
            
                    <input type="hidden" name="sts" required>

            <button type="submit" class="button" name="buttom">Order Sekarang</button>
        </form>
    </div>
</body>
</html>