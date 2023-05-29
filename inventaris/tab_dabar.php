<?php
error_reporting(0);
$koneksi = mysqli_connect("localhost","root","","tekstil");


    if($kode = $_GET['kd_brg']) {
        $sql = "DELETE FROM `tabel_barang` WHERE kd_brg='$kode'";
        $hasil = mysqli_query($koneksi,$sql);

        echo '<script>alert("Hapus Data Barang?");window.location="datbar.php";</script>';
    } 
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Inventaris</title>
    <script src="https://kit.fontawesome.com/f71c921ca4.js" crossorigin="anonymous"></script>
</head>
<body>
<table align=center width=50% cellpadding=5 cellspacing=0 class="table table-responsive table-striped table-bordered ">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Kategori</th>
            <th colspan=2>Aksi</th>
        </tr>

        <tr> 
            <?php
            $angka = 1;
            
            $sql = "SELECT * FROM tabel_barang";
            $hasil = mysqli_query($koneksi,$sql);
            while($data = mysqli_fetch_array($hasil)) {
                ?>
                <td><?php echo $angka++; ?></td>
                <td><?php echo $data['nama_barang']; ?></td>
                <td><?php echo $data['stock']; ?></td>
                <td><?php echo $data['categori']; ?></td>
                <td><a href="datbar.php?kd_brg=<?php echo $data['kd_brg']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                <td><a href="edit_inventaris.php?kd_brg=<?php echo $data['kd_brg']; ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
        </tr>
            <?php    
            }
            ?>
    </table>
</body>
</html>