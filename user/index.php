<?php 
include './control/session.php';
 ?>
 <html>
 	<title>Dashboard User</title>
 	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<!-- bootstrap grid -->
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap-grid.min.css">
	<!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="../assets/custom/userdashboard.css">
	<body>
		<div class="row">
			<div class="col-lg-3 navigasi">
				<div class="container text-center">
					<div class="row">
						<div class="col">
							<hr>
							<h5 class="DASHBOARD">DASHBOARD USER</h5>
							<hr>
						</div>
					</div>
					<div class="row datauser">
						<div class="col-lg-4">
							<div id="image">
								<div class="crop">
									<img src="<?=$_SESSION['fotoprofile'];?>" class="fotoprofile" alt="">
								</div>
							</div>
						</div>
						<div class="col data">
							<p class="nama"><?=$_SESSION['nama'];?></p>
							<p class="Status"><?=$_SESSION['status'];?> </p>
						</div>
					</div>
					<a href="./pilihpaket/"><button class="btn btn-primary tombolnav"><i class="fab fa-leanpub"></i> Pilih Pelajaran</button></a>
					<a href="./control/logout.php"><button class="btn btn-primary tombolnav"><i class="fas fa-sign-out-alt"></i> Logout</button></a>
					
				</div>
			</div>

			<div class="col-lg-9 content">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<div class="container">
				  		<a class="navbar-brand">
				  		<button class="btn btn-primary tombol">
							<i class="fas fa-bars kotakmenu"></i>
						</button>
				  		RumahBelajar</a>
				  		</div>
				</nav>
				<?php 
                    if(isset($_GET['pesan'])){
                        $pesan = $_GET['pesan'];
                        if($pesan == "suksesditambah"){
                            echo "<div class='alert alert-primary'><a href='#' class='close' onclick='this.parentElement.style.display='none';' data-dismiss='alert' aria-label='Close'>&times;</a>";
                            echo 'Anda berhasil menambah mata pelajaran';
                            echo '</div>';
                        }
                        else if($pesan == "gagal"){
                        	echo "<div class='alert alert-danger'><a href='#' class='close' onclick='this.parentElement.style.display='none';' data-dismiss='alert' aria-label='Close'>&times;</a>";
                            echo 'Gagal Menambah Pelajaran';
                            echo '</div>';
                        }
                    }
                    ?>
                 <div class="container contenttengah">
                 	<?php include './control/tampildata.php'; ?>
                 </div>
			</div>
		</div>

	<!-- Javascript -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
 </html>