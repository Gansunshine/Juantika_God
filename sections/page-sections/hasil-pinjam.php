<?php 
$koneksi = mysqli_connect("localhost","root","","tekstil");

$brg = $_POST['nama'];
$jrs = $_POST['jurusan'];
$np = $_POST['n_p'];
$wp = $_POST['w_p'];
$tok = $_POST['jumlah'];
$tgl = $_POST['tanggal'];
$kd = $_POST['code'];

$cekstok = mysqli_query($koneksi, "SELECT * FROM tabel_barang WHERE kd_brg='$brg'");
$ambildata = mysqli_fetch_array($cekstok);

$stoksekarang = $ambildata['stock'];
$tambah = $stoksekarang - $tok;

if ($stoksekarang < $tok) {
        ?>
        <script>
                alert('Maaf Stok Barang Sudah Habis'); document.location = 'peminjaman.php';
        </script>
        <?php
}else{
        $insert =mysqli_query($koneksi, "INSERT INTO `barang`(`kode_brg`, `nama_brg`, `kd_barang`, `jurusan`, `nama_p`, `waktu_p`, `jumlah_brg`, `tanggal_p`) VALUES ('','$brg','$kd','$jrs','$np','$wp','$tok','$tgl')");
            if($insert){
                //update stok
                $upstok= mysqli_query($koneksi,  "UPDATE tabel_barang SET stock='$tambah' WHERE kd_brg='$brg'");
                ?>
                <script language="JavaScript">
                    alert('Good! Input transaksi pengeluaran barang berhasil ...');
                    document.location='hasil-dabar.php';
                </script>
                <?php
            }
            else {
                echo "<div><b>Oops!</b> 404 Error Server.</div>";
            }
     }
     ?>
