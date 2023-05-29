<?php
include 'database.php';
$data_tampil = 'SELECT * FROM siswa';
$tampil_data = mysqli_query($conn ,$data_tampil);
?>

<html>

<head>
    <title>Edit</title>
    <style>
        body {
            font-family: Arial;
            margin-top: 10%;
        }
    </style>
</head>

<body>
    <center>
        <table border="0" bgcolor="white" style="border-radius: 15px;" cellspacing="5" width="80%" height="30%">
            <tr>
                <td align="center">
                    <h2>Pilih Data yang Ingin Diubah</h2>
                <td>
            </tr>

            <tr valign="center">
                <td>
                    <center>
                        <table border='1' width="100%">
                            <th>ID Siswa</th>
                            <th>NISN</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Absen</th>
                            <th>Jenis Kelamin</th>
                            <th colspan='2'>Action</th>

                            <tr>
                                <?php foreach ($tampil_data as $data_siswa) : ?>
                                <td align="center"><?php echo $data_siswa["ID_siswa"];?></td>
                                <td align="center"><?php echo $data_siswa["Email"];?></td>
                                <td align="center"><?php echo $data_siswa["Nama_siswa"];?></td>
                                <td align="center"><?php echo $data_siswa["Kelas"];?></td>
                                <td align="center"><?php echo $data_siswa['kehadiran']; ?></td>
                                <td align="center"><?php echo $data_siswa['Jenis_Kelamin']; ?></td>
                                <th> <a href="Menu_Edit.php?kode=<?php echo $data_siswa['ID_siswa']?>"
                                        style="color:blue; text-decoration:none;"> <strong> Edit </strong> </a></th>
                            </tr>
                            <?php endforeach ?>

                        </table>
                    </center>
                    </form> <br>
                    <a href="tabel_siswa.php"
                        style="margin-left:20px; border-radius:15px; color:red; text-decoration:none;">
                        <strong> <font size="6"> ← </font> </strong> </a> 
                </td> 
            </tr> 
         </table> 
    </body> 
</html>