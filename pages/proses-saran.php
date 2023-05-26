<?php
include '../database.php';
    $nama = $_POST["nama"];
    $gmail = $_POST["Email"];
    $pesan = $_POST["message"];
    $kirim = "INSERT INTO `saran` (`nama`, `email`, `ket`) VALUES ('$nama','$gmail','$pesan')";
    $ambil = mysqli_query($conn,$kirim);
    header('location:contact-us.php');

?>