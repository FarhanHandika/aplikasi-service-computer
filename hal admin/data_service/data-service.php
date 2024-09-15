<?php
include '../config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>service</title>
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
    </header>

    <center>
    <h1> -- Data Service -- </h1>
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

<div class="center-button">
    <a href="data-service-add.php" class="btn btn-primary">Tambah Data</a>
</div>

<table class="table table-bordered table-hover">
    <thead class="thead-light">
       <tr>
          <th scope="col">Id Customer</th>
          <th scope="col">Nama</th>
          <th scope="col">Alamat</th>
          <th scope="col">No. Telepon</th>
          <th scope="col">Jenis Barang</th>
          <th scope="col">Keluhan</th>
          <th scope="col">Status</th>
          <th scope="col">Tingkat Kesulitan & Harga</th>
          <th scope="col">Tanggal Service</th>
          <th scope="col">Action</th>
       </tr>
    </thead>
    <tbody>
    <?php
    // menampilkan data dari database
    $no = 1;
    $query = "SELECT * FROM tservice_customer";
    $sql = mysqli_query($koneksi, $query);
    foreach ($sql as $tampil) {
    ?>
    <tr>
        <td scope="row"><?= $no ?></td>
        <td><?= $tampil['nama']; ?></td>
        <td><?= $tampil['alamat']; ?></td>
        <td><?= $tampil['no_tlp']; ?></td>
        <td><?= $tampil['jbarang']; ?></td>
        <td><?= $tampil['keluhan']; ?></td>
        <td><?= $tampil['sts']; ?></td>
        <td><?= $tampil['tingkat_kesulitan_harga']; ?></td>
        <td><?= $tampil['tgl_service']; ?></td>
        <td>
            <a href="data-service-edit.php?id_customer_service=<?= $tampil['id_customer_service']?>">Edit</a> |
            <a href="hapus-data-service.php?id_customer_service=<?= $tampil['id_customer_service']?>">Hapus</a>
        </td>
    </tr>
    <?php
    $no++;
    }
    ?>
    </tbody>
</table>
    
</body>
</html>