<?php 
	include './control/cekadmin.php';
 ?>
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,600,700,700i');
@import url('https://fonts.googleapis.com/css?family=Roboto+Slab:300,400');

html,body{
    height:100%;
}
body{
	font-family: 'Poppins', sans-serif!important;
}
.container{
	position:relative;
}
.nav{
	padding: 20px 20px!important;
    background: #fff;
    box-shadow: 0 3px 5px 0 rgba(0,0,0,.13);
}
.navbar-light .navbar-brand{
  color: #3498db;
}
.canvas{
	background: #fff;
	border: 1px solid #ccc;
	padding: 20px;
	margin-top: 20px;
	padding-bottom:60px;
}
.navbar-brand {
    color: #3498db!important;
}
.footer{
	background: #333;
	margin-top: 50px;
    color: white;
    text-align: center;
    padding: 20px 0px;
    bottom: 0px;
    width: 100%;
}

.footer h6{
	margin: 0px;
}
</style>
<html>
	<head>
		<title>Halaman Admin</title>
		<!-- bootstrap -->
		<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css">
		<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/custom/custom.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light nav" id="myHeader">
			<div class="container">
			  <a class="navbar-brand" href="../"><b>RUANGBELAJAR</b></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
				
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav ml-auto">
					   <li class="nav-item active" >
						    <a class="nav-link" style="color: #000" href="#top">List Pendaftar<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item" >
						    <a class="nav-link" href="./control/logout">Logout<span class="sr-only">(current)</span></a>
						</li>
				    </ul>
				</div>
			</div>
		</nav>
			
			<div class="konten">
				<div class="container">
					<?php 
						if(isset($_GET['editid'])){
					 ?>
					<div class="row">
						<div class="col">
							<div class="canvas">
								<h4 class="judul">Siswa Pendaftar</h4>
								<table class="table table-bordered table-hover table-light">
									<?php 
										include '../database/tampil_update.php';
									?>
								</table>
								<?php 
								if(isset($_GET['detail'])){
									$cari = $_GET['detail'];
									echo "<a href='../admin/'><button class='btn btn-danger'>Kembali</button></a>";		
								} ?>
							</div>
						</div>
					</div>
					<?php }
					 ?>

					<?php 
						if(isset($_GET['detail']) AND !isset($_GET['editid'])){
					 ?>
					<div class="row">
						<div class="col">
							<div class="canvas">
								<?php 
			                    if(isset($_GET['pesan'])){
			                        $pesan = $_GET['pesan'];
			                        if($pesan == "suksesdelete"){
			                            echo "<div class='alert alert-primary'><a href='#' class='close' onclick='this.parentElement.style.display='none';' data-dismiss='alert' aria-label='Close'>&times;</a>";
			                            echo 'Data berhasil dihapus';
			                            echo '</div>';
			                        }
			                        else  if($pesan == "updatesukses"){
			                            echo "<div class='alert alert-primary'><a href='#' class='close' onclick='this.parentElement.style.display='none';' data-dismiss='alert' aria-label='Close'>&times;</a>";
			                            echo 'Data berhasil di update!';
			                            echo '</div>';
			                        }
			                    }
			                    ?>
								<h4 class="judul">Siswa Pendaftar</h4>
								<table class="table table-bordered table-hover table-light">
									<?php 
										include '../database/tampil_detail.php';
									?>
								</table>
								<?php 
								if(isset($_GET['detail'])){
									$cari = $_GET['detail'];
									echo "<a href='../admin/'><button class='btn btn-danger'>Kembali</button></a>";		
								} ?>
							</div>
						</div>
					</div>
					<?php }
					 ?>

					<?php 
						if(!isset($_GET['cari']) AND !isset($_GET['detail']) AND !isset($_GET['editid'])){
					 ?>
					<div class="row">
						<div class="col">
							<div class="canvas">
								<?php 
			                    if(isset($_GET['pesan'])){
			                        $pesan = $_GET['pesan'];
			                        if($pesan == "suksesdelete"){
			                            echo "<div class='alert alert-primary'><a href='#' class='close' onclick='this.parentElement.style.display='none';' data-dismiss='alert' aria-label='Close'>&times;</a>";
			                            echo 'Data berhasil dihapus';
			                            echo '</div>';
			                        }
			                    }
			                    ?>
								<div class="row">
				                    <div class="col">
										<h4 class="judul">Siswa Pendaftar</h4>
									</div>
									<div class="col mr-auto">
										<form class="form-inline my-2 my-lg-0" action="../admin/" method="get">
										  <input class="form-control mr-sm-2 ml-auto" type="search" placeholder="Cari Nama Anak.." aria-label="Search" name="carimapel">
										  <button class="btn btn-primary" type="submit" ><i style="padding: 4px;" class="fas fa-search"></i></button>
										</form>
									</div>
								</div>
								<hr>
								<table class="table table-bordered table-hover table-light">
									<?php 
										include '../database/tampil_data_mapel.php';
									?>
								</table>
								<?php 
								if(isset($_GET['carimapel'])){
									$cari = $_GET['carimapel'];
									echo "<a href='../admin/'><button class='btn btn-danger'>Kembali</button></a>";		
								} ?>
							</div>
						</div>
					</div>
					<?php }
					 ?>
					
					<?php 
						if(!isset($_GET['detail']) AND !isset($_GET['carimapel']) AND !isset($_GET['editid'])){
					 ?> 
					<div class="row">
						<div class="col">
							<div class="canvas">
								<?php 
			                    if(isset($_GET['pesan'])){
			                        $pesan = $_GET['pesan'];
			                        if($pesan == "suksesdelete"){
			                            echo "<div class='alert alert-primary'><a href='#' class='close' onclick='this.parentElement.style.display='none';' data-dismiss='alert' aria-label='Close'>&times;</a>";
			                            echo 'Data berhasil dihapus';
			                            echo '</div>';
			                        }
			                    }
			                    ?>
			                    <div class="row">
				                    <div class="col">
										<h4 class="judul">Data Akun Terdaftar</h4>
									</div>
									<div class="col mr-auto">
										<form class="form-inline my-2 my-lg-0" action="../admin/" method="get">
										  <input class="form-control mr-sm-2 ml-auto" type="search" placeholder="Cari Nama Anak.." aria-label="Search" name="cari">
										  <button class="btn btn-primary" type="submit" ><i style="padding: 4px;" class="fas fa-search"></i></button>
										</form>
									</div>
								</div>
								<hr>
								<table class="table table-bordered table-hover table-light">
									<?php 
										include '../database/tampil_data.php';
									?>
								</table>
								<?php 
								if(isset($_GET['cari'])){
									$cari = $_GET['cari'];
									echo "<a href='../admin/'><button class='btn btn-danger'>Kembali</button></a>";		
								} ?>
							</div>
						</div>
					</div>
					<?php } 
					 ?>
				</div>
			</div>
			<?php 
				if(!isset($_GET['detail']) AND !isset($_GET['carimapel']) AND !isset($_GET['cari'])){
			?>

			<footer class="footer">
				<div class="container">
					<div class="row">
						<div class="col">
							<h6>Copyright &copy 2019 By RuangBelajar.com</h6>
						</div>
					</div>
				</div>
			</footer>
		<?php 	} ?>

		<!-- javascript -->
		<script src="../assets/bootstrap/js/boostrap.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="../assets/bootstrap/js/boostrap.min.js"></script>
		<script src="../assets/bootstrap/js/boostrap.bundle.min.js"></script>
	</body>
</html>