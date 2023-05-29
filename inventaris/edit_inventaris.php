<?php 
$koneksi = mysqli_connect("localhost","root","","tekstil");

error_reporting(0);
$kd_brg = $_GET['kd_brg'];


if(isset($_POST['ubah'])) {
	$barang = htmlspecialchars($_POST['nb']);
    $tok = htmlspecialchars($_POST['stock']);
	$kate = htmlspecialchars($_POST['kate']);
   
    $cekstok = mysqli_query($koneksi, "SELECT * FROM tabel_barang where kd_brg='$kd_brg'");
    $ambildata = mysqli_fetch_array($cekstok);

    $stoksekarang = $ambildata['stock'];
    $tambah = $stoksekarang-$tok;

    if(empty($barang && $tok && $kate)) {    
        echo "<script>alert('Pastikan anda sudah mengisi semua formulir.');window.location='edit_inventaris.php';</script>";
    }

	$sql = mysqli_query($koneksi, "UPDATE `tabel_barang` SET `nama_barang`='$barang',`stock`='$tok',`categori`='$kate' WHERE kd_brg='$kd_brg'");
	if($sql) {
		echo "<script>alert('Data berhasil di ubah');window.location='datbar.php';</script>";
	} else {
		echo "<script>alert('Data Gagal Diubah.');window.location='edit_brg.php';</script>";
        
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Edit Barang </title>
</head>
<body>
<div class="card-header mt-5">
	<form action="" method="post">
    <table align="center">
        <center><h1>Tambah Stok Barang</h1>
        <br>
        <tr>
        <td>Nama Barang</td>
        <td>:</td>
        <td><select class="form-select form-select-sm" name="nb" aria-label="Default select example">
    <?php
    $sql = "SELECT * FROM tabel_barang WHERE kd_brg='$kd_brg'";
    $hasil = mysqli_query($koneksi,$sql);
    while($data = mysqli_fetch_array($hasil)){
    ?>
        <option value="<?php echo $data['nama_barang']; ?>"><?php echo $data['nama_barang']; ?></option>
    <?php
        }
    ?>
    <?php
    $sql = "SELECT * FROM tabel_barang";
    $hasil = mysqli_query($koneksi,$sql);
    while($data = mysqli_fetch_array($hasil)){
    ?>
        <option value="<?php echo $data['nama_barang']; ?>"><?php echo $data['nama_barang']; ?></option>
    <?php
        }
    ?>
    </select>
    </tr>

    <tr>
            <td>Stock</td>
            <td>:</td>
            <td><?php $sql = mysqli_query($koneksi, "SELECT * FROM tabel_barang WHERE kd_brg='$kd_brg'");
            while($data = mysqli_fetch_array($sql)) {
            ?>
            <input type="tel" value="<?= $data['stock']; ?>" name="stock">
            <?php
            }
                ?>
        </td>
        </tr>
        <tr>
                <td>Kategori</td>
                <td>:</td>
                <td><select class="form-select form-select-sm" aria-label="Default select example" name="kate">
                    <option>--Pilih Kategori--</option>
                    <?php
                    $sql = "SELECT * FROM kategori";
                    $hasil = mysqli_query($koneksi,$sql);
                    while($data = mysqli_fetch_array($hasil)) {
                        ?>
                        <option value="<?php echo $data['kate_brg']; ?>"><?php echo $data['kate_brg']; ?></option>
                    <?php    
                    }
                    ?>
                </select>
            </td>
            </tr>

   
   
    </table>
    <div class="form-group text-center">
      <input type="submit"  class="btn btn-primary" name="ubah">
    </div>
	</form>
</div>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>