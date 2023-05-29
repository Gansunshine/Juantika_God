

<?php

$koneksi = mysqli_connect("localhost","root","","tekstil");

    if($kode = $_GET['kode_brg']) {
        $sql = "DELETE FROM `barang` WHERE kode_brg='$kode'";
        $hasil = mysqli_query($koneksi,$sql);

        echo '<script>alert("Hapus Data Barang?");window.location="barang.php"</script>';
    }
      echo "<meta http equiv-refresh content=2;url='tabel.php'>"; 
    ?>