<?php
include 'database.php';
$QUERY = mysqli_query($conn,"SELECT * FROM siswa WHERE ID_siswa='$_GET[kode]'");
$data = mysqli_fetch_array($QUERY);
?>

<html>

<head>
    <title>Edit Data</title>
    <style>
        body {
            font-family:Arial;
            margin-top:10%;
            
        }

        .button:hover{
                color:white;
            }
    </style>
</head>

<body>
    <center>
    <table border="0" bgcolor="white" style="border-radius: 15px;" cellspacing="9" width="30%" height="50%">
        <tr>
            <td valign="top">
                <h1>Edit Data Siswa</h1>
            <td>
        </tr>
        <tr valign="center">
            <td>
                <form action="Proses_Edit.php" method="post">
                    <table>
                        <tr>
                            <td width="120"> ID Siswa </td>
                            <td> <input type="text" name="id" value="<?php echo $data['ID_siswa']; ?>"
                                    style="border-radius:15px;padding:5px;" autocomplete="off" readonly> </td>
                        </tr>
                        <tr>
                            <td> NIS </td>
                            <td> <input type="text" name="nisn" value="<?php echo $data['Email']; ?>"
                                    style="border-radius:15px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td> Nama </td>
                            <td> <input type="text" name="name" value="<?php echo $data['Nama_siswa']; ?>"
                                    style="border-radius:15px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td> Kelas </td>
                            <td> <input type="text" name="class" value="<?php echo $data['Kelas']; ?>"
                                    style="border-radius:15px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td> Absen </td>
                            <td> <input type="text" name="absen" value="<?php echo $data['kehadiran']; ?>"
                                    style="border-radius:15px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td> Jenis Kelamin </td>
                            <td> Laki - Laki<input type="radio" name="jKelamin" value="Laki - Laki"
                                    style="border-radius:15px;padding:5px;" autocomplete="off">  
                                    
                                Perempuan<input type="radio" name="jKelamin" value="Perempuan"
                                    style="border-radius:15px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="proses" id="proses" value="Simpan" class="button"
                                    style="margin-left:-13px; margin-top:40px; background-color:lightgreen; border-radius:15px; padding:5px; width:70%; cursor:pointer;">
                            </td>
                        </tr>
                        
                    </table>
                </form>
                <a href="Edit.php"
                    style="margin-left:47%; border-radius:15px; color:red; text-decoration:none;">
                    <strong>Batal</strong> </a>
            </td>
        </tr>
    </table>
</body>

</html>