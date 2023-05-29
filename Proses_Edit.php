<?php
include "database.php";
$kode = $_POST['id'];
if(isset($_POST['proses'])){
mysqli_query($conn, "UPDATE siswa SET Email = '$_POST[nisn]',Nama_siswa ='$_POST[name]',Kelas ='$_POST[class]',kehadiran ='$_POST[absen]',Jenis_Kelamin ='$_POST[jKelamin]' WHERE ID_siswa = '$kode'");
}

?>

<html>

    <head>
        <style>
            body {
                font-family: sans-serif;
                margin-top: 450px;
            }
        </style>
    </head>

    <body align="center">
        <?php echo "<h1> Data Berhasil Diubah! </h1>"; ?>
        <?php echo "<meta http-equiv=refresh content=1.5;URL='Edit.php'>"; ?>
    </body>

</html>