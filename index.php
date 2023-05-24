<?php
include 'database.php';

$data_tampil = 'SELECT * FROM siswa';
$tampil_data = mysqli_query($conn ,$data_tampil);
?>


<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  

</head>



<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="./assets/img/favicon.png">

<title>

  
</title>


<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">


<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->



<link id="pagestyle" href="./assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />

<style>
  .form-control {
  display: block;
  width: 100%;
  padding: 0.5rem 0;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1.5rem;
  color: #495057;
  background-color: transparent;
  background-clip: padding-box;
  border: 1px solid #d2d6da;
  appearance: none;
  border-radius: 0.375rem;
  transition: 0.2s ease;
}

</style>

</head>

<body class="index-page bg-gray-200">
  
  
  <!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0"><div class="row"><div class="col-12" >
<nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
  <div class="container-fluid px-0" >
    <img src="minitikas.png">
    <a class="navbar-brand font-weight-bolder ms-sm-3" href="" rel="tooltip" data-placement="bottom" target="_blank">
      Juantika Absen
    </a>
    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
      <ul class="navbar-nav navbar-nav-hover dropdown-menu ms-auto">
        <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-icons opacity-6 me-2 text-md"></i>
            Pages
            <img src="assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
          </a>
          <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
     
  <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
    Landing Pages
  </h6>
  <a href="pages/contact-us.php" class="dropdown-item border-radius-md ">
    <span>Contact Us</span>
  </a>
  <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
    Account
  </h6>
  <a href="pages/sign-in.php" class="dropdown-item border-radius-md">
    <span>Sign In</span>
  </a>
  <a href="pages/reg-anti-user.php" class="dropdown-item border-radius-md">
    <span>Register</span>
  </a>
  <a href="pages/sign-in.php" class="dropdown-item border-radius-md">
    <span>Logout</span>
  </a>
</div>
        <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-icons opacity-6 me-2 text-md"></i>
            Inventaris
            <img src="./assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
        <li class="dropdown-item py-2 ps-3 border-radius-md">
          <a class="">
            <div class="w-100 d-flex align-items-center justify-content-between">
              <div>
              <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/page-sections/peminjaman.php">
              Peminjaman Inventaris
            </a>
              </div>
              <img src="./assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
            </div>
          </a>
   
        </li>
      </div>    
    </div>
  </div>
</nav>
<!-- End Navbar -->
</div></div></div>

  

  



<header class="header-2">
  <div class="page-header min-vh-75 relative" style="background-image: url('./assets/img/bg2.jpg')">
    <span class="mask bg-gradient-primary opacity-4"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">
          <br>
          <br>
          <br>
          <br>
          <br>
          <h1 class="text-white pt-3 mt-n5">JUANTIKA  </h1>
          <p class="lead text-white mt-3">IR. H. DJUANDA & RD. DEWI SARTIKA <br>B.28.075 - B.28.076<br/> SMK NEGERI 1 KATAPANG </p>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n4">

<img src="demo.jpg" class="img-thumbnail" alt="...">

<div class="container">
  <h3 class="text-center">Absensi Pramuka Juantika</h3>
  <form action="data.php" method="post" class="row g-3">
    <div class="col-12">
      <label for="inputAddress" class="form-label">NIS</label>
      <input type="text" class="form-control" name="nis" id="inputAddress" >
    </div>

    <div class="col-12">
      <label for="inputAddress2" class="form-label">Nama Lengkap</label>
      <input type="text" class="form-control" name="nama" id="inputAddress2" >
    </div>

    <div class="col-12">
      <label for="inputAddress2" class="form-label">Kelas-Jurusan</label>
      <input type="text" class="form-control" name="kelaz" id="inputAddress2" >
    </div>

    <div class="col-12">
      <label for="inputAddress2" class="form-label">Keterangan</label>
    <select class="form-select" name="absensi" aria-label="Default select example">
      <option selected>Keterangan...</option>
      <option value="Hadir">Hadir</option>
      <option value="Izin">Izin</option>
      <option value="Sakit">Sakit</option>
    </select>
  </div>
  <div class="col-12">
    <div class="col-sm-10">
      <label for="inputAddress2" class="form-label">Jenis Kelamin</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jenisKelamin" id="jenisKelamin1" value="Laki-Laki" checked>
        <label class="form-check-label" for="jenisKelamin1">
          Laki-Laki
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jenisKelamin" id="jenisKelamin2" value="Perempuan">
        <label class="form-check-label" for="jenisKelamin2">
          Perempuan
        </label>
     </div>  
  </div> 
  </div>
  
  <div class="col-12">
    <label for="inputAddress2"  class="form-label">Tanggal</label>
    <input type="date" class="form-control" name="TANGGAL" id="inputEmail3">
  </div>
   
    <div class="col-12">
      <center>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>





  <!-- ------- MENAMPILKAN DATA YANG TELAH DISUBMIT    -------- -->

  <br> <center><h3>DATA  ABSENSI</h3><br>
  <table class="table table-striped table-hover">
    

 <tr>
         
            <td align="center" style="font-weight:bold;">NIS</td>
            <td align="center" style="font-weight:bold;">Nama Siswa</td>
            <td align="center" style="font-weight:bold;">Kelas</td>
            <td align="center" style="font-weight:bold;">Absen</td>
            <td align="center" style="font-weight:bold;">Jenis Kelamin</td>
            <td align="center" style="font-weight:bold;">Tanggal</td>

</tr>
            <tr>
                <?php foreach ($tampil_data as $data_siswa) : ?>
                
                <td align="center"><?php echo $data_siswa["Email"];?></td>
                <td align="center"><?php echo $data_siswa["Nama_siswa"];?></td>
                <td align="center"><?php echo $data_siswa["Kelas"];?></td>
                <td align="center"><?php echo $data_siswa['kehadiran']; ?></td>
                <td align="center"><?php echo $data_siswa['Jenis_Kelamin']; ?></td>
                <td align="center"><?php echo $data_siswa['tang']; ?></td>

                  

            </tr>
          
            <?php endforeach ?>
            
</table>
</div>
  

<!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
</form>
</div>

  <footer class="footer pt-5 mt-5">
  <div class="container">
    <div class=" row">
      <div class="col-12">
        <div class="text-center">
          <p class="text-dark my-4 text-sm font-weight-normal">
            Juantika. Copyright © <script>document.write(new Date().getFullYear())</script> Agan Sunarya. <br> XI-PPLG2
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
