<?php 
$koneksi = mysqli_connect("localhost","root","","tekstil");
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div>
    <center>
    <br>
  <h3 style="font-family:arial; font-weight: bold; margin: 5px; color: grey;">Tambah Barang</h3>
  <a href="../admin.php" style="float: left; text-decoration: none; color: black; font-family: arial; font-weight: 700; margin-top: -30px; margin-right: 8px;"><button class="btn btn-secondary">Back</button></a>
</div>
<br>
<form action="hasil_dabar.php" method="post" class="f">
        <table  align="center" class="tab">
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" class="form-control form-control-sm" name="nama"></td>
            </tr>

            <tr>
                <td>Jumlah Stok</td>
                <td>:</td>
                <td><input type="text" class="form-control form-control-sm" name="stok"></td>
            </tr>

            <tr>
                <td>Kategori</td>
                <td>:</td>
                <td><select class="form-select form-select-sm" aria-label="Default select example" name="kate">
                    <option>--Pilih Kategori--</option>
                    <?php
                    $sql = "SELECT * FROM kategori";
                    $hasil = mysqli_query($koneksi,$sql);
                    while($data = mysqli_fetch_array($hasil)) {
                        ?>
                        <option value="<?php echo $data['kate_brg']; ?>"><?php echo $data['kate_brg']; ?></option>
                    <?php    
                    }
                    ?>
                </select>
            </td>
            </tr>

            <tr>
                <th colspan="4" style="text-align: center; padding: 10px;"><button type="submit" class="btn btn-outline-primary btn-sm">Tambah Data</button></th>
            </tr>
        </table>
                </div>
    </form>
   
        <div>
            <?php include 'tab_dabar.php'; ?>
        </div>    
       
</body>
</html>