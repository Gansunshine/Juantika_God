
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Barang</title>
</head>
<script src="https://kit.fontawesome.com/f71c921ca4.js" crossorigin="anonymous"></script>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


<body>
    <div class="col px-5">
    <form action="">
    <table class="table table-striped table-bordered table-hover" align="center">
        <tr>
           
            <th>Nama Peminjam</th>
            <th>Kelas - Jurusan</th>
            <th>Nama Barang</th>
            <th>Kode Barang</th>
            <th>Waktu Peminjaman</th>
            <th>Tanggal Peminjaman</th>
            <th>Jumlah Dipinjam</th>
            <th colspan="2">Aksi</th>
            <th colspan="1">kembalikan</th>
        </tr>
        <tr>
            <?php 
            $koneksi = mysqli_connect("localhost","root","","tekstil");
            $angka = 1;

            $sql = "SELECT * FROM barang,tabel_barang WHERE barang.nama_brg = tabel_barang.kd_brg ORDER BY kd_brg DESC";
            $hasil = mysqli_query($koneksi, $sql);
            while($data = mysqli_fetch_array($hasil)) {
                ?>
               
                <td><?php echo $data['nama_p']; ?></td>
                <td><?php echo $data['jurusan']; ?></td>
                <td><?php echo $data['nama_barang']; ?></td>
                <td><?php echo $data['kd_barang']; ?></td>
                <td><?php echo $data['waktu_p']; ?></td>
                <td><?php echo $data['tanggal_p']; ?></td>
                <td><?php echo $data['jumlah_brg']; ?></td>
                <td><a href="tabels.php?kode_brg=<?php echo $data['kode_brg']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                <td><a href="edit_brg.php?kode_brg=<?php echo $data['kode_brg']; ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <td><a href="edit_pengembalian.php?kode_brg=<?php echo $data['kode_brg']; ?>"><box-icon name='transfer-alt'></box-icon></a></td>
            </tr>
            <?php    
            }
            ?>
    </table>
        </form>
        </div>
</body>
</html>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

