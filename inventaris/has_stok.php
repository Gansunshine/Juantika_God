<?php 
$koneksi = mysqli_connect("localhost","root","","tekstil");

error_reporting(0);

$namanya = $_POST['nama'];
$tok = $_POST['stok'];

$cekstok = mysqli_query($koneksi, "select * from tabel_barang where kd_brg='$namanya'");
$ambildata = mysqli_fetch_array($cekstok);

$stoksekarang = $ambildata['stock'];
$tambah = $stoksekarang+$tok;

$adds = mysqli_query($koneksi, "insert into stok (name_brg, stok) values ('$namanya','$tok')");
$update = mysqli_query($koneksi, "update tabel_barang set stock='$tambah' where kd_brg='$namanya'");
if(empty($adds&&$update)) {
    header('location : stok.php');
}else {
    echo '<script>alert("Berhasil Menambahkan Barang");document.location="stok.php"</script>';
}

?>