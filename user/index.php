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
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" type="text/css" rel="stylesheet"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script>new WOW().init();</script>
	<body>

		<div class="row">
			<div class="navigasi" id="navigasi">
					<div class="row">
						<div class="col dashboardjd">
							<h5 class="DASHBOARD">RB <span id="hilang"> - RuangBelajar</span></h5>

						</div>
					</div>
					<div class="row">
						<a href="./pilihpaket/"><button class="btn btn-primary tombolnav">
							<i class="fab fa-leanpub iconnav"></i> 
						<span class="keteranganmenu">
								Pilih Pelajaran
						</span>
						</button></a>
					</div>
					<div class="row">
						<a href="./control/logout.php"><button class="btn btn-primary tombolnav">
							<i class="fas fa-sign-out-alt iconnav"></i> 
							<span class="keteranganmenu">
								Logout
							</span>
						</button></a>
					</div>
			</div>

			<div class="content">

				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
				  		<a class="navbar-brand">
				  		<button class="btn btn-primary tombol" id="tombol">
							<i class="fas fa-bars kotakmenu"></i>
						</button>
				  		Dashboard User</a>
				  		<div class="ml-auto">
				  			<div class="nama">Hai, <span class="panggil"><?=$_SESSION['nama'];?></span></div>
				  			<div id="image">
								<div class="crop">
									<img src="<?=$_SESSION['fotoprofile'];?>" class="fotoprofile" alt="">
								</div>
							</div>
				  		</div>
			  		</div>
				</nav>
				
				<div class="peringatan" style="margin: 10px 0px">
					<div class="row">
						<div class="col">
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
						</div>
					</div>
				
                 </div>

                 <div class="container contenttengah wow rotateInUpLeft" duration="2s" delay="5s">
                 		<div class="row">
                 			<div class="col jmlkelas">
                 				<?php include './control/kelasdiikuti.php'; ?>
                 			</div>
                 			<div class="col kotakakhir">
                 				<?php include './control/kelasdiikuti.php'; ?>
                 			</div>
                 	</div>
                 	<div class="isi">
                 		<?php include './control/tampildata.php'; ?>
                 	</div>
                 </div>

                 <div class="container contenttengah wow rotateInUpLeft" duration="2s" delay="5s">
                 	<div class="isi">
                 		<?php include './control/tampildatasukses.php'; ?>
                 	</div>
                 </div>
			</div>
		</div>

	<!-- Javascript -->
	<script type="text/javascript" src="../assets/custom/header.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
 </html>