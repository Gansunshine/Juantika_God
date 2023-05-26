<?php
include '../database.php';

if(isset($_POST['regis'])) {
    $user = $_POST['user'];
    $nisn = $_POST['nisn'];
    $pass = $_POST['pw'];
    $confir = $_POST['confir'];
    $level = $_POST['select'];

    if($pass != $confir) {
        echo "<script>alert('Maaf password beda');window.location='register.php';</script>";
    } 
    $sql = mysqli_query($conn, "INSERT INTO tb_user(user,nis,pass,level)VALUES('$user', '$nisn', '$confir', '$level')");

    echo "<script>alert('Selamat anda sudah terdaftar');window.location='sign-in.php';</script>";
    
}

?>

<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    sign-in
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="sign-in-basic">
  <!-- Navbar Transparent -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Register</h4>
                <div class="row mt-3">

                </div>
              </div>
            </div>
            <div class="card-body">
              <form method="post" class="text-start">
                <div class="input-group input-group-outline my-3">
                  <input type="tel" name="nisn" class="form-control" placeholder="NIS">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <input type="text" name="user" class="form-control" placeholder="Nama Lengkap">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <input type="password" name="pw" class="form-control" placeholder="Password">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <input type="password" name="confir" class="form-control" placeholder="Repeat Password">
                </div>
    
                <select class="form-select form-select-sm" name="select" aria-label=".form-select-sm example">
                    <option selected>--Pilih Level--</option> 
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM tb_level");
                    while($data = mysqli_fetch_array($sql)) {
                        ?>
                    <option><?= $data['gabungan']; ?></option>
                    <?php
                    }
                    ?>
                </select>
             
                <div class="text-center">
                  <button name="regis" type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Register</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>