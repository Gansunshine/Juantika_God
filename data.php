<?php
include 'database.php';

    $NIS = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelaz'];
    $hadir = $_POST['absensi'];
    $JK = $_POST['jenisKelamin'];
    $tgl = $_POST['TANGGAL'];
    $kirim = "INSERT INTO `siswa`(`ID_siswa`, `Email`, `Nama_siswa`, `Kelas`, `Jenis_Kelamin`, `kehadiran`, `tang`) VALUES ('','$NIS','$nama','$kelas','$JK','$hadir','$tgl')";
    $ambil = mysqli_query($conn,$kirim);

?>

<html>

    <head>
        <title>Deleting</title>
    </head>

    <body align="center">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <?php echo "<h1> Data Berhasil Diinput! </h1>"; ?>
        <?php echo "<meta http-equiv=refresh content=1;URL='index.php'>"; ?>
    </body>

</html>