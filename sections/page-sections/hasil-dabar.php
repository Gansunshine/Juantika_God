<?php
   $koneksi = mysqli_connect("localhost","root","","tekstil");
    
    $sql = "INSERT INTO `tabel_barang`(`nama_barang`, `stock`, `categori`) VALUES ('".$_POST['nama']."','".$_POST['stok']."','".$_POST['kate']."')";
    $hasil = mysqli_query($koneksi,$sql);
    header("location: peminjaman.php");
    ?>