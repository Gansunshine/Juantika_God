<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
  <div>
    <br>
    <br>
  <h3 style="font-family:arial; font-weight: bold; margin: 5px; color: grey;"></h3>
  <a href="../admin.php" style="float: left; text-decoration: none; color: black; font-family: arial; font-weight: 700; margin-top: -30px; margin-right: 8px;"><button class="btn btn-secondary">Back</button></a>
</div>
    <!-- Button trigger modal -->
<center><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Data Peminjaman
</button></center>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--- Dalam -->
        <form action="hasil.php" method="post">
      <div class="row g-2">
  <div class="col">
  <label for="">Tanggal</label>
    <input type="date" name="tanggal" class="form-control">
  </div>

  
  <div class="col">
  <label for="">Nama Siswa</label>
    <input type="text" name="n_p" required class="form-control">
  </div>

 
  <label for="">Jurusan</label>
  <select class="form-select" name="jurusan" aria-label="Default select example">
  <option>--Pilih Jurusan--</option>
                    <?php 
                    $koneksi = mysqli_connect("localhost", "root", "", "tekstil");

                    $sql = "SELECT * FROM jurusan";
                    $hasil = mysqli_query($koneksi,$sql);
                    while($data = mysqli_fetch_array($hasil)) {
                        ?>
                    <option value="<?php echo $data['jurusan']; ?>"><?php echo $data['jurusan']; ?></option>
                    <?php } ?>  
</select>
 
<label for="">Nama Barang</label>
<select  id="menu" onChange="aku(this);" class="form-select form-select-sm" name="nama" aria-label="Default select example">';
                    <option>--Pilih Barang--</option>
                    <?php 
                   
                    $koneksi = mysqli_connect("localhost", "root", "", "tekstil");

                    $sql = "SELECT * FROM tabel_barang ORDER BY nama_barang";
                    $hasil = mysqli_query($koneksi,$sql);
                    while($data = mysqli_fetch_array($hasil)) {
                      ?>
                     <option value="<?=$data['kd_brg'];?>"><?=$data['nama_barang'];?></option>
                     <?php  
                    }    
                ?>
                </select>
<div>
  <label for="">Kode Barang</label>
   <input type="text" placeholder="kode" name="code" id="kode" class="input" value="" onchange="total()">
</div>

<div class="col">
  <label for="">Waktu Peminjaman</label>
    <input type="time" name="w_p" required class="form-control">
  </div>

  
  <div class="col">
  <label for="">Jumlah Pinjam</label>
    <input type="text" name="jumlah" required class="form-control">
  </div>

</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" onClick="document.location.reload(true)" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
  </form>
</div>
<br>
    <div>
        <?php include 'tabel.php'; ?>
    </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 <script type="text/javascript">
        function aku(m) {
            var p = document.getElementById("kode");
            p.value = m.value;
        }
    </script>
</body>
</html>
