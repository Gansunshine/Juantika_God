<?php 
$koneksi = mysqli_connect("localhost","root","","tekstil");

error_reporting(0);
$kd_brg = $_GET['kode_brg'];


if(isset($_POST['ubah'])) {
	$barang = htmlspecialchars($_POST['barang']);
    $wp = htmlspecialchars($_POST['wp']);
	$jb = htmlspecialchars($_POST['jb']);
    $nama = htmlspecialchars($_POST['nama']);
    $tglk = htmlspecialchars($_POST['tgl']);
    $jurusan = htmlspecialchars($_POST['jurusan']);
    

    $cekstok = mysqli_query($koneksi, "SELECT * FROM tabel_barang where kd_brg='$brg'");
    $ambildata = mysqli_fetch_array($cekstok);

    $stoksekarang = $ambildata['stock'];
    $tambah = $stoksekarang-$jb;

    if(empty($nama && $wp && $jb)) {    
        echo "<script>alert('Pastikan anda sudah mengisi semua formulir.');window.location='?p=edit';</script>";
    }

	$sql = mysqli_query($koneksi, "UPDATE `barang` SET `nama_brg`='$barang',`jurusan`='$jurusan',`nama_p`='$nama',`waktu_p`='$wp',`jumlah_brg`='$jb',`tanggal_p`='$tglk' WHERE kode_brg='$kd_brg'");
	if($sql) {
		echo "<script>alert('Data berhasil di ubah');window.location='barang.php';</script>";
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
	<form method="post">
    <table align="center">
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td><input type="text" value="<?php echo date('l,d-M-Y'); ?>" ></td>
        </tr>

        <tr>
            <td>Nama Siswa</td>
            <td>:</td>
            <td> <?php 
            $sql = "SELECT * FROM barang WHERE kode_brg='$kd_brg'";
            $hasil = mysqli_query($koneksi,$sql);
            while($data = mysqli_fetch_array($hasil)) {
                ?>
            <input type="text" name="nama" value="<?php echo $data['nama_p']; ?>" >
        
        <?php } ?>
        </td>
        </tr>

        <tr>
        <td>Jurusan</td>
        <td>:</td>
        <td><select class="form-select form-select-sm" name="jurusan" aria-label="Default select example">
    <?php
    $sql = "SELECT * FROM jurusan WHERE id='$kd_brg'";
    $hasil = mysqli_query($koneksi,$sql);
    while($data = mysqli_fetch_array($hasil)){
    ?>
        <option value="<?php echo $data['jurusan']; ?>"><?php echo $data['jurusan']; ?></option>
    <?php
        }
    ?>
    <?php
    $sql = "SELECT * FROM jurusan";
    $hasil = mysqli_query($koneksi,$sql);
    while($data = mysqli_fetch_array($hasil)){
    ?>
        <option value="<?php echo $data['jurusan']; ?>"><?php echo $data['jurusan']; ?></option>
    <?php
        }
    ?>
    </select>
    </tr>


    <tr>
            <td>Nama Barang</td> 
            <td>:</td> 
    <td><select class="form-select form-select-sm" name="barang" aria-label="Default select example">
    <?php
    $sql = "SELECT * FROM barang WHERE kode_brg='$kd_brg'";
    $hasil = mysqli_query($koneksi,$sql);
    while($data = mysqli_fetch_array($hasil)){
    ?>
        <option value="<?php echo $data['nama_brg']; ?>"><?php echo $data['nama_brg']; ?></option>
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
    </td>
    </tr>

    <tr>
        <td>Waktu Pinjam</td>
        <td>:</td>
        <td><?php 
            $sql = "SELECT * FROM barang WHERE kode_brg='$kd_brg'";
            $hasil = mysqli_query($koneksi,$sql);
            while($data = mysqli_fetch_array($hasil)) {
                ?>
            <input type="time" value="<?php echo $data['waktu_p']; ?>" name="wp" >
        
        <?php } ?></td>
    </tr>

    <tr>
        <td>Jumlah Barang</td>
        <td>:</td>
        <td><?php 
            $sql = "SELECT * FROM barang WHERE kode_brg='$kd_brg'";
            $hasil = mysqli_query($koneksi,$sql);
            while($data = mysqli_fetch_array($hasil)) {
                ?>
            <input type="text" value="<?php echo $data['jumlah_brg']; ?>" name="jb">
        
        <?php } ?></td>
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