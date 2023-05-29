<?php 
$koneksi = mysqli_connect("localhost","root","","tekstil");



$brg = $_POST['nama'];
$jrs = $_POST['jurusan'];
$np = $_POST['n_p'];
$wp = $_POST['w_p'];
$tok = $_POST['jumlah'];
$tgl = $_POST['tanggal'];

$cekstok = mysqli_query($koneksi, "SELECT * FROM tabel_barang where kd_brg='$brg'");
$ambildata = mysqli_fetch_array($cekstok);

$stoksekarang = $ambildata['stock'];
$tambah = $stoksekarang-$tok;

if ($stoksekarang < $tok) {
        ?>
        <script>
                alert('Maaf Stok Barang Sudah Habis'); document.location = 'peminjaman.php';
        </script>
        <?php
} else {

        $adds = mysqli_query($koneksi, "INSERT INTO `barang`(`nama_brg`, `jurusan`, `nama_p`, `waktu_p`, `jumlah_brg`, `tanggal_p`) VALUES ('$brg','$jrs','$np','$wp','$tok','$tgl')");
        if ($adds) {
                $update = mysqli_query($koneksi,"update tabel_barang set stock='$tambah' where kd_brg='$brg'");
                ?>
                <script>
                        alert('Transaksi Pengeluaran Berhasil'); document.location = 'hasil-dabar.php';
                </script>
                <?php
        } else {
                echo '<div> Oops!.</div>';
        }
}
