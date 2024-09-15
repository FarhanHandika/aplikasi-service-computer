<?php
 include("config.php");
 include("../info.php");

 if (isset($_POST['buttom'])) {
    $id_customer = $_POST['id_customer'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];
    $jbarang = $_POST['jbarang'];
    $nama_barang = $_POST['nama_barang'];
    

    $sql="INSERT INTO tupgrade_customer VALUES (null,'$nama','$alamat','$no_tlp','$jbarang','$nama_barang','$sts','$jbarang_harga','$tgl_upgrade','$stok')";
    $result =mysqli_query($koneksi,$sql);
    header("location:customer.php");
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pemesanan upgrade</title>
    <link rel="stylesheet" href="l_upgrade.css">
   
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
<center>
    <h1>PRODUK UPGRADE</h1>
    <h3>jika ingin membeli isi data pemesanan dibawah</h3>
    </center>

    <div class="sampul">
    <div class="card">
        <img src="asset/storage.jpg" alt="Produk">
        <div class="card-body">
            <h3 class="product-name">Storage Disk</h3>
            <p class="price">Rp.600.000</p>
            <p class="description">Stok:20</p>
        </div>
    </div>

    <div class="card">
        <img src="asset/ram.jpg" alt="Produk">
        <div class="card-body">
            <h3 class="product-name">Ram</h3>
            <p class="price"> Rp.500.000</p>
            <p class="description">Stok:10</p>
        </div>
    </div>

    <div class="card">
        <img src="asset/batrai.jpg" alt="Produk">
        <div class="card-body">
            <h3 class="product-name">Batrai</h3>
            <p class="price">Rp.650.000</p>
            <p class="description">Stok:15</p>
        </div>
    </div>

    <div class="card">
        <img src="asset/processor.jpg" alt="Produk">
        <div class="card-body">
            <h3 class="product-name">processor</h3>
            <p class="price">Rp.500.000</p>
            <p class="description">Stok:25</p>
        </div>
    </div>

</div>

    <div class="conta">
        <form action=" " method="POST">
            <div class="bungkus">
                <div class="input-box">
                    <input type="text" name="nama" value="<?= $nama?>" readonly>
                    <label for="nama">Nama</label>
                </div>
                <div class="input-box">
                    <input type="text" name="alamat" value="<?= $alamat?>" readonly>
                    <label for="alamat">Alamat</label>
                </div>
            </div>
            <div class="bungkus">
                <div class="input-box">
                    <input type="text" name="no_tlp" value="<?= $no_telepon?>" readonly>
                    <label for="no_tlp">No. Telepon</label>
                </div>
                <div class="input-box">
                    <input type="text" name="jbarang" required>
                    <label for="jbarang">Jenis Barang</label>
                </div>
            </div>
            <div class="input-box-special">
                <input class="input" type="text" name="nama_barang" required>
                <label class="label" for="nama_barang">nama barang</label>
            </div>
            <button type="submit" class="button" name="buttom">Order Sekarang</button>
        </form>
    </div>

    
</body>
</html>