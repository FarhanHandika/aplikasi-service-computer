<?php
include '../config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tbarang</title>
    <link rel="stylesheet" href="../admin_service.css">
    <style>
        .my-4 {
            margin: 20px 90px;
        }

        .center-button {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        table {
            margin: 0 auto;
            width: 80%;
            border-collapse: collapse;
            margin-left:250px;
        } 

        .table th{
            background-color: blue;
        }

        th, td {
            text-align: center;
            vertical-align: middle;
            padding: 8px;
            border: 1px solid #ddd;
        }

        .alert {
            margin: 20px auto;
            width: 80%;
        }

        
    </style>
</head>
<body>
<header>
        <div class="navbar">
            <center>
        <img src="../asset2/pp.jpg"  class="image">
        </center>
            <nav>
                <ul>
                <a href="../admin_service.php">Dashboard</a>
                <a href="../dataadmin/tadmin.php">Login Admin</a>
                <a href="../databarang/tbarang.php">Data Barang</a>
                <a href="../datacustomer/tcustomer.php">Login Customer</a>
                <a href="../data_service/data-service.php">Data Service</a>
                <a href="../data_upgrade/data-upgrade.php">Data Upgrade</a>
                <a href="../datatransaksi/ttransaksi.php">Ttransaksi Service</a>
                <a href="../datatransaksi_upgrade/trans-upgrade.php">Ttransaksi Upgrade</a>
                </ul>
            </nav>
        </div>
    </header><
    <center>
    <h1> -- Data Barang -- </h1>
</center>

<?php
if (isset($_SESSION['alertType']) && isset($_SESSION['alertMessage'])) {
    $alertType = $_SESSION['alertType'];
    $alertMessage = $_SESSION['alertMessage'];
?>
    <div class="alert alert-<?= $alertType ?> alert-dismissible fade show" role="alert">
        <?= $alertMessage ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
    // Hapus session setelah menampilkan alert
    unset($_SESSION['alertType']);
    unset($_SESSION['alertMessage']);
}
?>

<form action="" method="GET">
<div class="container">
    <input type="text" name="p">
    <button type="submit" name="c">cari</button>
</div>

<div class="center-button">
    <a href="tbarang-add.php" class="btn btn-primary">Tambah Data</a>
</div>

<table class="table table-bordered table-hover">
    <thead class="thead-light">
       <tr>
          <th scope="col">ID</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Stok</th>
          <th scope="col">Harga</th>
          <th scope="col">Action</th>
       </tr>
    </thead>
    <tbody>
    <?php 
        include '../config.php';
         
        if (isset($_GET['c'])) {
            $no = 1;
            $c =$_GET['p'];       
              $query =mysqli_query($koneksi,"SELECT * FROM tbarang_upgrade WHERE nama_barang LIKE'%$c%'");
              foreach ($query as $tampil) {
                ?>
                <tr>
        <td scope="row"><?= $no ?></td>
        <td><?= $tampil['nama_barang']; ?></td>
        <td><?= $tampil['stok']; ?></td>
        <td><?= $tampil['harga']; ?></td>
        <td>
            <a href="tbarang-edit.php?kd_barang=<?= $tampil['kd_barang']?>">Edit</a> |
            <a href="hapus-barang.php?kd_barang=<?= $tampil['kd_barang']?>">Hapus</a>
        </td>
    </tr>
                <?php
                }
        }else {
            $no = 1;
            $query = "SELECT * FROM tbarang_upgrade";
            $sql = mysqli_query($koneksi, $query);
            foreach ($sql as $tampil) {
            ?>
    <tr>
        <td scope="row"><?= $no ?></td>
        <td><?= $tampil['nama_barang']; ?></td>
        <td><?= $tampil['stok']; ?></td>
        <td><?= $tampil['harga']; ?></td>
        <td>
            <a href="tbarang-edit.php?kd_barang=<?= $tampil['kd_barang']?>">Edit</a> |
            <a href="hapus-barang.php?kd_barang=<?= $tampil['kd_barang']?>">Hapus</a>
        </td>
    </tr>
    <?php
    $no++;
    }
        }
        
        ?>


    </tbody>
</table>

</body>
</html>
