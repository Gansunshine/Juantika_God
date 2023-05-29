<?php
include 'database.php';
$data_tampil = 'SELECT * FROM siswa';
$tampil_data = mysqli_query($conn ,$data_tampil);

?>

<html>

<head>
    <title>Admin</title>
    <style>
        body {
            font-family: Arial;
            margin-top: 10%;
        }
    </style>
</head>

<body>
    
    <p align='center'>
        <font size="6"> <b>DATA KEHADIRAN</b> </font> <a href="home.php" style="text-decoration:none; color:blue;"></a>
    </p> <br>
    <form action="print.php">
        
    <center>
        <table width='60%' border='2' class="table-bordered">
           
            <td align="center" style="font-weight:bold;">NISN</td>
            <td align="center" style="font-weight:bold;">Nama Siswa</td>
            <td align="center" style="font-weight:bold;">Kelas</td>
            <td align="center" style="font-weight:bold;">Absen</td>
            <td align="center" style="font-weight:bold;">Jenis Kelamin</td>
            <td align="center" style="font-weight:bold;">Tanggal</td>
            <td align="center" style="font-weight:bold;" colspan='2'>Action</td>

            <tr>
                <?php foreach ($tampil_data as $data_siswa) : ?>
                    
                <td align="center"><?php echo $data_siswa["Email"];?></td>
                <td align="center"><?php echo $data_siswa["Nama_siswa"];?></td>
                <td align="center"><?php echo $data_siswa["Kelas"];?></td>
                <td align="center"><?php echo $data_siswa['kehadiran']; ?></td>
                <td align="center"><?php echo $data_siswa['Jenis_Kelamin']; ?></td>
                <td align="center"><?php echo $data_siswa['tang']; ?></td>
               <th> <a href="Edit.php" style="color:blue; text-decoration:none;"> <strong> Edit </strong> </a></th>
                <th><a href="Delete.php" style="color:red; text-decoration:none;"> <strong> Delete </strong> </a></th>
 
            </tr>
            <?php endforeach ?>
        </table>
        <center >
    <div class="col-12">
      <button type="submit" class="btn btn-danger" href="print.php">Print</button>
    </div>

        <table border="0" width="100%" height="530" >
      <tr>
        <td align="center">
            <h3>INVENTARIS
                <br>
                <br>
        <div class="d-grid gap-4 col-3 mx-auto">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
           <button class="btn btn-success btn-lg" type="button"><a href="inventaris/barang.php">Peminjaman Inventaris</a></button>
           <button class="btn btn-success btn-lg" type="button"><a href="inventaris/datbar.php"> Data Inventaris</a></button>
           <button class="btn btn-success btn-lg" type="button"><a href="inventaris/pengembalian.php"> pengembalian Inventaris</a></button>
        </div>
        </br>
        
      </tr>
    </table>

    </body>

</html>

<!DOCTYPE html>
<html>

    <head>
        <title></title>
        <link rel="" type="" href="">
        <style>
            body{
                background-image: url('');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;

            }
            .class > a{
              text-decoration: none;
              color: White;
            }
            .class>a:hover{
              color : green;
              transition: 0.5s;
              background-color: skyblue;
            }
            .tekstil{
              letter-spacing: 10px;
              color: white;
              font-size: 80px;
              font-family: arial;
            }
            .penyulaman{
              color: white;
              font-size: large;
              font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            }
            button > a {
                text-decoration: none;
                color: white;
                font-family: arial;
            }
            button > a:hover {
                color: white;
            }
        </style>
    </head>
    </body>

</html>