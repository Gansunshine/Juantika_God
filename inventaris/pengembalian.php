
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<script src="https://kit.fontawesome.com/f71c921ca4.js" crossorigin="anonymous"></script>

<body>
    <div class="col px-5">
    <form action="">
    <table class="table table-striped table-bordered table-hover " align="center">
        <tr>
           
            <th>Nama Peminjam</th>
            <th>Kelas - Jurusan</th>
            <th>Nama Barang</th>
            <th>Kode Barang</th>
            <th>Jumlah Di Pinjam</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
        </tr>
        <tr>
            <?php 
            $koneksi = mysqli_connect("localhost","root","","tekstil");
            $angka = 1;

            $sql = "SELECT * FROM kembali,tabel_barang WHERE kembali.nama_alat = tabel_barang.kd_brg ORDER BY kd_brg";
            $hasil = mysqli_query($koneksi, $sql);
            while($data = mysqli_fetch_array($hasil)) {
                ?>
               
                <td><?php echo $data['nama_siswa']; ?></td>
                <td><?php echo $data['kelas']; ?></td>
                <td><?php echo $data['nama_alat']; ?></td>
                <td><?php echo $data['id_brg']; ?></td>
                <td><?php echo $data['jumlah_brg']; ?></td>
                <td><?php echo $data['tglpinjam']; ?></td>
                <td><?php echo $data['tglkembali']; ?></td>
        </tr>
            <?php    
            }
            ?>
    </table>    
        </form>
    </div>
   

</body>
</html>
