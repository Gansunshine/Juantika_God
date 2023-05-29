<?php 
$koneksi = mysqli_connect("localhost","root","","tekstil");

error_reporting(0);
$kd_brg = $_GET['kode_brg'];


if(isset($_POST['ubah'])) {
    $code = htmlspecialchars($_POST['code']);
	$barang = htmlspecialchars($_POST['barang']);
    $wp = htmlspecialchars($_POST['wp']);
	$jb = htmlspecialchars($_POST['jb']);
    $nama = htmlspecialchars($_POST['nama']);
    $jurusan = htmlspecialchars($_POST['jurusan']);
    $tglk = htmlspecialchars($_POST['tgl']);
    $tglp = htmlspecialchars($_POST['tgl_p']);

    $cekstok = mysqli_query($koneksi, "SELECT * FROM tabel_barang where kd_brg='$brg'");
    $ambildata = mysqli_fetch_array($cekstok);

    $stoksekarang = $ambildata['stock'];
    $tambah = $stoksekarang+$jb;

    if ($stoksekarang = 0) {
        ?>
        <script language="JavaScript">
            alert('Oops! Jumlah pengeluaran lebih besar dari stok ...');
            document.location='pinjam.php';
        </script>
        <?php
     }
     else{
        $insert =mysqli_query($koneksi, "INSERT INTO `kembali`(`id_siswa`, `nama_siswa`, `kelas`, `nama_alat`, `jumlah_brg`, `tglpinjam`, `tglkembali`) VALUES ('$code','$nama','$jurusan','$barang','$jumlah','$tglp','$tglk')");
           if($insert){
               //update stok
               $upstok= mysqli_query($koneksi,  "UPDATE tabel_barang SET jumlah='$tambah' WHERE kd_brg='$code'");
               
               ?>
               <script language="JavaScript">
                   alert('Good! Pengembalian barang berhasil ...');
                   document.location='kembali.php';
               </script>
               <?php
           }
           else {
               echo "<div><b>Oops!</b> 404 Error Server.</div>";
           }
     }
    }
    
    ?>


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
	<form action="kempros.php" method="post" >
    <table align="center">
        


        <tr>
            <td>Tanggal Peminjaman</td>
            <td>:</td>
            <td><?php 
            $sql = "SELECT * FROM barang WHERE kode_brg='$kd_brg'";
            $hasil = mysqli_query($koneksi,$sql);
            while($data = mysqli_fetch_array($hasil)) {
                ?>
            <input type="date" name="tgl_p" value="<?php echo $data['tanggal_p']; ?>" >
        
        <?php } ?></td>
        </tr>

        <tr>
            <td>Nama Siswa</td>
            <td>:</td>
            <td> <?php 
            $sql = "SELECT * FROM barang WHERE kode_brg='$kd_brg'";
            $hasil = mysqli_query($koneksi,$sql);
            while($data = mysqli_fetch_array($hasil)) {
                ?>
            <input type="text" name="n_p" value="<?php echo $data['nama_p']; ?>" >
        
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
            <td> nama Barang
            <td>:</td>
            <td><?php 
            $sql = "SELECT * FROM barang WHERE kode_brg='$kd_brg'";
            $hasil = mysqli_query($koneksi,$sql);
            while($data = mysqli_fetch_array($hasil)) {
                ?>
            <input type="text" name="nama" value="<?php echo $data['nama_brg']; ?>" >
        
         <?php } ?></td>
            </td>
        </tr>

    <tr>

    <tr>
            <td> Kode Barang
            <td>:</td>
            <td><?php 
            $sql = "SELECT * FROM barang WHERE kode_brg='$kd_brg'";
            $hasil = mysqli_query($koneksi,$sql);
            while($data = mysqli_fetch_array($hasil)) {
                ?>
            <input type="text" name="code"  value="<?php echo $data['kd_barang']; ?>" >
        
         <?php } ?></td>
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
            <input type="time" value="<?php echo $data['waktu_p']; ?>" name="w_p" >
        
        <?php } ?></td>
    </tr>

    <tr>
        <td>Tanggal Dikembalikan</td>
        <td>:</td>
        <td><input type="date" name="tanggal"></td>
    </tr>

    <tr>
        <td>Jumlah Barang</td>
        <td>:</td>
        <td><?php 
            $sql = "SELECT * FROM barang WHERE kode_brg='$kd_brg'";
            $hasil = mysqli_query($koneksi,$sql);
            while($data = mysqli_fetch_array($hasil)) {
                ?>
            <input type="text" value="<?php echo $data['jumlah_brg']; ?>" name="jumlah">
        
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

