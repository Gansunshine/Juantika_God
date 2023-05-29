<?php
include 'database.php';
$data_tampil = 'SELECT * FROM siswa';
$tampil_data = mysqli_query($conn ,$data_tampil);
?>

<html>

    <head>
        <title>Delete Data</title>
        <style>
            body {
                font-family: Arial;
                margin-top: 10%;
            }
        </style>
    </head>

    <body>
        <center>
            <table border="0" bgcolor="white" style="border-radius: 15px;" cellspacing="5" width="60%" height="10%">
                <tr >
                    <td><center>
                        <h1>Hapus Data</h1>
                    <td>
                </tr>


                <tr valign="center">
                    <td>
                        <center>
                            <table border='1' width="100%">
                                <tr>
                                    <?php foreach ($tampil_data as $data_siswa) : ?>
                                    <td align="center"><?php echo $data_siswa["ID_siswa"];?></td>
                                    <td align="center"><?php echo $data_siswa["Email"];?></td>
                                    <td align="center"><?php echo $data_siswa["Nama_siswa"];?></td>
                                    <td align="center"><?php echo $data_siswa["Kelas"];?></td>
                                    <td align="center"><?php echo $data_siswa['kehadiran']; ?></td>
                                    <td align="center"><?php echo $data_siswa['Jenis_Kelamin']; ?></td>
                                    <th> <a href="Proses_Delete.php?kode=<?php echo $data_siswa['ID_siswa']?>"
                                            style="color:red; text-decoration:none;"> <strong> Delete </strong> </a></th>

                                </tr>
                                <?php endforeach ?>

                            </table>
                        </center>
                        </form>

                        <center><a href="admin.php"
                            style="margin-left:20px; border-radius:15px; color:blue; text-decoration:none;">
                            <strong>Kembali</strong> </a>
                    </td>
                </tr>
            </table>
        </center>
    </body>

</html>



