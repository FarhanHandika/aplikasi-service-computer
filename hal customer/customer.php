<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Jasa Service</title>
    <link rel="stylesheet" href="customer.css">
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

#hero {
    background-color: hsl(177, 98%, 51%);
    padding: 100px 0;
    text-align: center;
}

#hero h2 {
    margin: 0;
}

#hero p {
    margin-bottom: 40px;
}

a {
    display: inline-block;
    text-decoration: none;
    padding: 5px;
    border: 2px solid  hsl(177, 98%, 51%);
    border-radius: 5px;
    color: #000000;
    transition: background-color 0.3s ease;
  }
  
  a:hover {
    background-color: #000000;
    color: #ffffff;
  }

  .image {
    float: right;
    margin: 0 0 10px 10px;
    width: 250px;
    height: auto;
  }
  
  a img {
    border: none;
    vertical-align: middle;
    width: 200px;
    height: 100px;
  }



#services {
    padding: 50px 0;
    background-color: #fff;
}

.img{
    float: right;
    margin: 0 0 10px 10px;
    width: 250px;
    height: auto;
}

.service {
    margin-bottom: 30px;
}

.service h3 {
    margin-top: 0;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
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
    <section id="hero">
        <div class="container">
        <img src="asset/vectorindex.png" alt="Image" class="image">
            <h2>Profesionalisme dan Kualitas Terbaik untuk Anda</h2>
            <p>Menyediakan layanan service berkualitas tinggi untuk kebutuhan Anda.</p>
            <a href="l_service.php" >
            <img src="asset/gambar1.jpg" alt="Example Image" /></a>


            <a href="l_upgrade.php" >
                <img src="asset/gambar2.jpg" alt="Example Image" /></a>

        </div>
    </section>
    <section id="services">
        <div class="container">
        <img src="asset/index1.jpg" alt="Image" class="img">
            <h2>Layanan Kami</h2>
            <div class="service">
                <h3>Jasa Perbaikan Elektronik</h3>
                <p>Kami menangani perbaikan komputer dan laptop.</p>
            </div>
            <div class="service">
                <h3>Upgrade Perangkat Elektronik</h3>
                <p>Kami juga menyediakan layanan upgrade ram, ssd, hdd dan lainnya.</p>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>Hak Cipta © 2024. Semua Hak Dilindungi.</p>
        </div>
    </footer>
</body>
</html>
