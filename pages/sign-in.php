<?php
include '../database.php';
if (isset($_POST['login'])) {

  // menangkap data yang dikirim dari form login
  $nis = $_POST['nis'];
  $username = $_POST['user'];
  $password = $_POST['pw'];

  // menyeleksi data user dengan username dan password yang sesuai
  $sql = mysqli_query($conn, "SELECT * FROM tb_user WHERE user='$username' AND nis='$nis' AND pass='$password'");
  // menghitung jumlah data yang ditemukan
  $cek = mysqli_num_rows($sql);

  // cek apakah username dan password di temukan pada database
  if ($cek > 0) {

    $data = mysqli_fetch_assoc($sql);

    // cek jika user login sebagai admin
    if ($data['level'] == "Admin") {

      // buat session login dan username
      $_SESSION['user'] = $username;
      $_SESSION['level'] = "Admin";
      // alihkan ke halaman dashboard admin
      echo "<script>alert('Selamat datang admin');window.location='../admin.php';</script>";

      
      // cek jika user login sebagai User
    } else if ($data['level'] == "User") {
      // buat session login dan username
      $_SESSION['user'] = $username;
      $_SESSION['level'] = "User";
      // alihkan ke halaman dashboard User
      echo "<script>alert('Selamat anda berhasil login');window.location='../index.php';</script>";

    } else {
      echo "<script>alert('Maaf username dan password anda salah');window.location='?page=login';</script>";
    }
  } else {
    echo "<script>alert('Maaf username dan password anda salah');window.location='?page=login';</script>";
  }
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
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                <div class="row mt-3">

                </div>
              </div>
            </div>
            <div class="card-body">
              <form method="post" class="text-start">
                <div class="input-group input-group-outline my-3">
                  <label class="form-label"></label>
                  <input type="tel" name="nis" class="form-control" placeholder="NIS">
                </div>
                <div class="input-group input-group-outline my-3">
                  <label class="form-label"></label>
                  <input type="text" name="user" class="form-control" placeholder="Nama Lengkap">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label"></label>
                  <input type="password" name="pw" class="form-control" placeholder="Password">
                </div>
                <div class="text-center">
                  <button type="submit" name="login" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>