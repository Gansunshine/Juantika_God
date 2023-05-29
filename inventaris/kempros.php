<?php 
$koneksi = mysqli_connect("localhost","root","","tekstil");
$kode=$_POST['code'];
$brg = $_POST['nama'];
$jrs = $_POST['jurusan'];
$np = $_POST['n_p'];
$wp = $_POST['w_p'];
$tok = $_POST['jumlah'];
$tgl = $_POST['tgl_p'];
$kem = $_POST['tanggal'];


$cekstok = mysqli_query($koneksi, "SELECT * FROM tabel_barang where kd_brg='$brg'");
$ambildata = mysqli_fetch_array($cekstok);

$stoksekarang = $ambildata['stock'];
$tambah = $stoksekarang+$tok;

if ($stoksekarang < $tok) {
        ?>
        <script>
                alert('Maaf Jumlah Pengeluaran Lebih Besar Dari Stok'); document.location = 'barang.php';
        </script>
        <?php
} else {

        $adds = mysqli_query($koneksi, "INSERT INTO `kembali`(`id_siswa`, `nama_siswa`, `kelas`, `nama_alat`, `id_brg`, `jumlah_brg`, `tglpinjam`, `tglkembali`) VALUES ('','$np','$jrs','$brg', '$kode', '$tok','$tgl','$kem')");
        if ($adds) {
                $update = mysqli_query($koneksi,"update tabel_barang set stock='$tambah' where kd_brg='$brg'");
                $del= mysqli_query($koneksi,  "DELETE FROM barang WHERE kode_brg='$kode'");
                ?>
                <script>
                        alert('Transaksi Pengembalian barang berhasil'); document.location = 'pengembalian.php';
                </script>
                <?php
        } else {
                echo '<div> Oops!.</div>';
        }
}
