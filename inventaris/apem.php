<?php

$kode = $_POST["id_siswa"];
$name = $_POST["nama"];
$class = $_POST["keles"];
$brg = $_POST["alat"];
$pjm = $_POST["pinjam"];
$kem = $_POST["kembali"];
$idbrg = $_POST["code"];
$jumlah = $_POST["brp"];

include "koneksi.php";    
   $selSto =mysqli_query($koneksi, "SELECT * FROM stok WHERE id_brg='$idbrg'");
   $sto    =mysqli_fetch_array($selSto);
   $benda    =$sto['jumlah'];

$data = $benda + $jumlah;

if ($benda = 0) {
    ?>
    <script language="JavaScript">
        alert('Oops! Jumlah pengeluaran lebih besar dari stok ...');
        document.location='pinjam.php';
    </script>
    <?php
 }
 else{
    $insert =mysqli_query($koneksi, "INSERT INTO `kembali`(`id_siswa`, `nama_siswa`, `kelas`, `nama_alat`, `kode_brg`, `jumlah_brg`, `tglpinjam`, `tgl_kem`) VALUES ('$kode','$name','$class','$brg','$idbrg','$jumlah','$pjm','$kem')");
       if($insert){
           //update stok
           $upstok= mysqli_query($koneksi,  "UPDATE stok SET jumlah='$data' WHERE id_brg='$idbrg'");
           $del= mysqli_query($koneksi,  "DELETE FROM pinjam WHERE id_siswa='$kode'");
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

?>