<?php 
	include 'database.php';
	
	$data_tampil = 'SELECT * FROM siswa WHERE Email';
    $tampil_data = mysqli_query($conn ,$data_tampil);
?>
<html>
	<head>
		<title>print</title>
		<link rel="stylesheet" href="assets/css/material-kit.css">
	</head>
	<body>
		<script>window.print();</script>
		<div class="container">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<center>
					
					
					<table class="table table-bordered" style="width:100%;">
						<tr>
                        <td align="center" style="font-weight:bold;">NIS</td>
                        <td align="center" style="font-weight:bold;">Nama Siswa</td>
                        <td align="center" style="font-weight:bold;">Kelas</td>
                        <td align="center" style="font-weight:bold;">Absen</td>
                        <td align="center" style="font-weight:bold;">Jenis Kelamin</td>
                        <td align="center" style="font-weight:bold;">Tanggal</td>


						</tr>
						<?php foreach($tampil_data as $data_siswa){?>
						<tr>
                        <td align="center"><?php echo $data_siswa["Email"];?></td>
                        <td align="center"><?php echo $data_siswa["Nama_siswa"];?></td>
                        <td align="center"><?php echo $data_siswa["Kelas"];?></td>
                        <td align="center"><?php echo $data_siswa['kehadiran']; ?></td>
                        <td align="center"><?php echo $data_siswa['Jenis_Kelamin']; ?></td>
                        <td align="center"><?php echo $data_siswa['tang']; ?></td>
						</tr>
						<?php  }?>
					</table>
					<div class="pull-right">
					
					<div class="clearfix"></div>
					<center>
						<p>Terima Kasih</p>
                        <br><p>Laporan Diterima</p>
					</center>
				</div>
				<div class="col-sm-4"></div>
			</div>
		</div>
	</body>
</html>