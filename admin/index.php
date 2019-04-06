<html>
	<head>
		<title>Halaman Admin</title>
		<!-- bootstrap -->
		<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css">
		<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/custom/custom.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark navigasi">
			<div class="container">
				<a class="navbar-brand" href="#">RuangBelajar</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
			    	<a class="nav-link" href="../">Home <span class="sr-only">(current)</span></a>
				</li>
				<!-- <li class="nav-item">
			    	<a class="nav-link" href="#">Link</a>
				</li> -->
			</ul>
				<form class="form-inline my-2 my-lg-0" action="../admin/" method="get">
				  <input class="form-control mr-sm-2" type="search" placeholder="Cari Nama Anak.." aria-label="Search" name="cari">
				  <button class="btn btn-primary" type="submit">Cari</button>
				</form>
				</div>
			</div>
			</nav>

			<div class="konten">
				<div class="container">
					<div class="row">
						<div class="col">
							<h3 class="judul">Data Siswa</h3>
							<table class="table table-bordered table-light">
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
			</div>

		<!-- javascript -->
		<script src="../assets/bootstrap/js/boostrap.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="../assets/bootstrap/js/boostrap.min.js"></script>
		<script src="../assets/bootstrap/js/boostrap.bundle.min.js"></script>
	</body>
</html>