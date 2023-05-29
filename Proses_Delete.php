<?php
    include "database.php";

    if(isset($_GET['kode'])){
    mysqli_query($conn,"DELETE FROM siswa WHERE ID_siswa='$_GET[kode]'");
    }

    ?>

<html>

    <head>
        <title>Deleting</title>
    </head>

    <body align="center">
        <?php echo "<h1> Data Berhasil Dihapus! </h1>"; ?>
        <?php echo "<meta http-equiv=refresh content=1.5;URL='Delete.php'>"; ?>
    </body>

</html>