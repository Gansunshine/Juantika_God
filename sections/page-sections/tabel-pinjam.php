
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Barang</title>
</head>
<script src="https://kit.fontawesome.com/f71c921ca4.js" crossorigin="anonymous"></script>

<body>
    <form action="">
    <table class="table table-striped table-bordered table-hover" align="center">
        <tr>
            <th>Nama Peminjam</th>
            <th>Kelas - Jurusan</th>
            <th>Nama Barang</th>
            <th>Waktu Peminjaman</th>
            <th>Tanggal Peminjaman</th>
            <th>Jumlah Dipinjam</th>
        </tr>
        <tr>
            <?php 
            $koneksi = mysqli_connect("localhost","root","","tekstil");
            $angka = 1;

            $sql = "SELECT * FROM barang,tabel_barang WHERE barang.nama_brg = tabel_barang.kd_brg ORDER BY kode_brg DESC";
            $hasil = mysqli_query($koneksi, $sql);
            while($data = mysqli_fetch_array($hasil)) {
                ?>
                
                <td><?php echo $data['nama_p']; ?></td>
                <td><?php echo $data['jurusan']; ?></td>
                <td><?php echo $data['nama_brg']; ?></td>
                <td><?php echo $data['waktu_p']; ?></td>
                <td><?php echo $data['tanggal_p']; ?></td>
                <td><?php echo $data['jumlah_brg']; ?></td>
        </tr>
            <?php    
            }
            ?>
    </table>
        </form>

</body>
</html>
