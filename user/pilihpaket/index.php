<?php
session_start();
if ( !isset($_SESSION['email'])){

	header('location:../../login/');
	exit();
}
else if($_SESSION['level'] == "user"){
	$nama = $_SESSION['nama'];
	$email = $_SESSION['email'];
	$password = $_SESSION['password'];
	$no_hp = $_SESSION['no_hp'];
	$status = $_SESSION['status'];
	$foto = $_SESSION['fotoprofile'];
}else{
	header('location:../admin/');
	exit();
}
?>
<html>
	<title>Form Data Diri</title> 
	<link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.min.css">
	<!-- bootstrap grid -->
	<link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap-grid.min.css">
	<style>
		body{
			background: url("./assets/image/bg.jpg");
		}
		header .row{
			margin: 0px;
		}
		.header{
			padding: 20px;
		    background: #ff7d4b;
		    color: #fff;
		    font-weight: bold;
		    box-shadow: 0px 5px 10px 0 rgba(0, 0, 0, 0.64);
		}
		.header h1{
			font-size: 25px;
		    margin: 0px;
		    padding: 5px 0px 5px 100px;
		}
		.canvas{
			margin: 50px auto;
		    background: #fff;
		    padding: 50px;
		    border-radius: 5px;
		    box-shadow: 0 1px 10px 0 rgba(0,0,0,.12);
		}
		.klik{
		    width: 100%;
		    background: #f77529;
		    text-align: center;
		    border-color: #f77529;
		    font-weight: bold;
		    margin-bottom: 10px;
		}
		.klik:hover{
			background: #d45f1b;
			border-color: #d45f1b;
		}
		.back{
		    width: 100%;
		    background: #22a6c3;
		    text-align: center;
		    border-color: #22a6c3;
		    font-weight: bold;
		}
		.back:hover{
			background: #046980;
			border-color: #046980;
		}
	</style>
	
	<body>
		<header>
			<div class="row">
				<div class="col-lg-12 header">
					<h1>RuangBelajar</h1>
				</div>
			</div>
		</header>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-md-3 canvas">
					<h2 align="center">Pilih Paket</h2>
					<p align="center">Isi data di bawah ini untuk memilih paket Berlangganan <br>
						<b>#MenjadiPintar!</b></p>
					<hr>
					<form action="prosesmapel.php" method="post">
						<table class="table">
							<thead>
							<tr>
							<th scope="col">Nama</th>
							<th scope="col">Email</th>
							<th scope="col">No Handphone</th>
							</tr>
							</thead>
							<tbody>
							<tr>
							<th scope="row"><?=$_SESSION['nama'];?></th>
							<td><?=$_SESSION['email'];?></td>
							<td><?=$_SESSION['no_hp'];?></td>
							</tr>
							</tbody>
							</table>
						<div class="form-group">
							<label for="exampleFormControlInput1 judul"><b>Pilih Pelajaran</b></label><br>
							<div class="form-check form-check">
  							<input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="mapel" value="02">
  							<label class="form-check-label" for="inlineCheckbox1">Bahasa Inggris</label>
							</div>
							<div class="form-check form-check">
  							<input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="mapel" value="01">
  							<label class="form-check-label" for="inlineCheckbox2">Matematika</label>
							</div>
							<div class="form-check form-check">
  							<input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="mapel" value="03">
  							<label class="form-check-label" for="inlineCheckbox2">Fisika </label>
  							</div>
  							<div class="form-check form-check">
  							<input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="mapel" value="04">
  							<label class="form-check-label" for="inlineCheckbox2">Biologi </label>
							</div>
							<div class="form-check form-check">
  							<input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="mapel" value="05">
  							<label class="form-check-label" for="inlineCheckbox2">Kimia</label>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1 judul"><b>Pilih Kelas</b></label>
							 <select class="form-control" name="kelas" id="exampleFormControlSelect1">
      						<option value="Kelas 4">Kelas 4</option>
      						<option value="Kelas 5">Kelas 5</option>
      						<option value="Kelas 6">Kelas 6</option>
							</select>
						</div>
						<input type="submit" value="SUBMIT" class="btn btn-primary klik">
						<a href="../"><input type="button" value="BACK" class="btn btn-primary back"></a>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>s