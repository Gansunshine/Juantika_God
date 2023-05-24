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
      Juantika Home
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
   
        </li>
      </div>    
    </div>
  </div>
</nav>
<!-- End Navbar -->
</div></div></div>

<!-- End Navbar -->


  

  



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
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="GOD.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="dokumentasi/sertijab.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="dokumentasi/tim.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<p align = "center" style = "font-family: Rockwell;">Juantika adalah salah satu ekstrakurikuler Pramuka yang menawarkan pengalaman petualangan dan pembelajaran di alam terbuka. 
<p align = "center" style= "font-family: Rockwell;"> Ekstrakurikuler ini dirancang untuk memberikan pengetahuan, keterampilan, 
    dan nilai-nilai positif kepada para peserta melalui berbagai kegiatan yang melibatkan eksplorasi alam, kegiatan luar ruangan, dan kehidupan di alam bebas.</p>
   </p>
<p align="center" style= "font-family: Rockwell;">Dalam Ekstrakurikuler Pramuka Juantika, peserta akan diajak untuk mengembangkan kemampuan survival di alam, keterampilan orientasi, kreativitas, kepemimpinan, kerjasama tim, serta rasa tanggung jawab terhadap lingkungan. Melalui kegiatan seperti berkemah, hiking, rafting, dan berbagai permainan alam lainnya, para peserta akan belajar bagaimana mengatasi tantangan dan menghadapi situasi di luar ruangan dengan baik.</p>
<p align="center" style= "font-family: Rockwell;">Juantika juga dapat membantu peserta mengembangkan karakter positif, seperti kemandirian, ketekunan, keberanian, dan kepercayaan diri. Dalam suasana yang penuh semangat dan kebersamaan, mereka akan merasakan kegembiraan dan kepuasan saat berhasil menyelesaikan tantangan dan meraih prestasi dalam kegiatan Pramuka. Dengan melibatkan diri dalam ekstrakurikuler Juantika, peserta akan mendapatkan pengalaman tak terlupakan dan berharga yang dapat membentuk kepribadian mereka. Mereka akan belajar untuk menjadi individu yang tangguh, bertanggung jawab, dan peduli terhadap lingkungan sekitar, sambil menciptakan kenangan dan persahabatan yang langgeng dengan sesama anggota Juantika.</p>

<figure class="figure">
  <img src="dokumentasi/latgab.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption ">Dokumentasi Latihan Gabungan persiapan Lomba LK3GT XIX dengan SMKN 1 Soreang</figcaption>
</figure> 

<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="dokumentasi/berkumpul.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>DARMARAKSA 23</h5>
        <p>Ambalan Angkatan 23</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="dokumentasi/story-night.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Malam itu</h5>
        <p>Ketika Darmaraksa dan Brajawisesa dipersatukan</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="dokumentasi/darmaraksa23.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>DARMARAKSA X BRAJAWISESA</h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="dokumentasi/ambalan2223.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>KITA BISA</h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="dokumentasi/ambalan24.jpg" class="d-block w-100" alt="bang">
      <div class="carousel-caption d-none d-md-block">
        <h5>LINGGAWISESA 24</h5>
        <p>A</p>
      </div>
    </div><div class="carousel-item">
      <img src="dokumentasi/eventscout.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Lomba GTP AKA </h5>
        <p>Lomba PBB yang diadakan di sekolah dengan peserta kelas X tahun ajaran 2022 </p>
      </div>
    </div><div class="carousel-item">
      <img src="dokumentasi/mopk.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>PRAMUKA X MPK OSIS</h5>
        <p>Panitia penyelenggara acara sekolah (MOPK)</p>
      </div>
    </div><div class="carousel-item">
      <img src="dokumentasi/darmabakarbakar.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Seleksi Alam</h5>
        <p>KITA HEBAT!!!</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
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
