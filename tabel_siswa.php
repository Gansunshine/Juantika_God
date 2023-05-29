<?php
include 'database.php';
$data_tampil = 'SELECT * FROM siswa';
$tampil_data = mysqli_query($conn ,$data_tampil);

?>

<html>

<head>
    <title>Data Absen</title>
    <style>
        body {
            font-family: Arial;
            margin-top: 10%;
        }
    </style>
</head>

<body>
    <p align='center'>
        <font size="10"> <b>Daftar Hadir</b> </font> <a href="admin.php" style="text-decoration:none; color:blue;"> <strong> Home </strong> </a>
    </p> <br>
    <center>
        <table width='80%' border='1'>
            <th>ID Siswa</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Absen</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal</th>

            <tr>
                <?php foreach ($tampil_data as $data_siswa) : ?>
                <td align="center"><?php echo $data_siswa["ID_siswa"];?></td>
                <td align="center"><?php echo $data_siswa["Email"];?></td>
                <td align="center"><?php echo $data_siswa["Nama_siswa"];?></td>
                <td align="center"><?php echo $data_siswa["Kelas"];?></td>
                <td align="center"><?php echo $data_siswa['kehadiran']; ?></td>
                <td align="center"><?php echo $data_siswa['Jenis_Kelamin']; ?></td>
                <td align="center"><?php echo $data_siswa['tang']; ?></td>
                
            </tr>
            <?php endforeach ?>
        </table>
</body>

</html>