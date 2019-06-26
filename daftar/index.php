<?php
session_start();
if ( isset($_SESSION['level'])){
	if ($_SESSION['level']=="user") {
		header("location: ../user");
	}else{
		header("location: ../admin");
	}
}
else{
?>
<html>
	<title>Form Data Diri</title> 
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<!-- bootstrap grid -->
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap-grid.min.css">
	<style>
		/*fonts*/
		@import url('https://fonts.googleapis.com/css?family=Poppins:400,600,700,700i');

		body{
			background: #f2f2f2;
			font-family: poppins;
		}
		.nav{
			padding: 20px 20px;
		    background: #fff;
		    box-shadow: 0 3px 5px 0 rgba(0,0,0,.13);
		}
		.navbar-light .navbar-brand{
		  color: #3498db;
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
		}
		.klik:hover{
			background: #d45f1b;
			border-color: #d45f1b;
		}
		.footer{
		    background: #333;
		    position:relative;
		    color: white;
		    text-align: center;
		    padding: 20px 0px;
		    bottom: 0;
		    float: left;
		    width: 100%;  
		}

		.footer h6{
		  margin: 0px;
		}
	</style>
	
	<body>
		<nav class="navbar navbar-expand-lg navbar-light nav sticky-top" id="myHeader">
			<div class="container">
			  <a class="navbar-brand" href="../"><b>RUANGBELAJAR</b></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav ml-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="#top">Form Pendaftaran<span class="sr-only">(current)</span></a>
				      </li>
				    </ul>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-md-3 canvas">
				<?php
                /* handle error */
                if (isset($_GET['error'])) : ?>
                <div class="alert alert-warning fadein">
                <a href="#" class="close" onclick="this.parentElement.style.display='none';" data-dismiss="alert" aria-label="Close">&times;</a>
                <!--  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button> -->
                <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
                </div>
                <?php endif;?>
                <?php 
                    if(isset($_GET['pesan'])){
                        $pesan = $_GET['pesan'];
                        if($pesan == "berhasil"){
                            echo "<div class='alert alert-primary'><a href='#' class='close' onclick='this.parentElement.style.display='none';' data-dismiss='alert' aria-label='Close'>&times;</a>";
                            echo 'Anda Berhasil Mendaftar';
                            echo '</div>';
                        }
                    }
                    ?>
					<h2 align="center">Form Data Diri</h2>
					<p align="center">Isi data kamu di bawah dengan lengkap untuk mulai merasakan #MenjadiPintar!</p>
					<hr>
					<form action="./proses/index.php" method="post">
						<div class="form-group">
							<label for="exampleFormControlInput1 judul">Nama</label>
							<input type="text" class="form-control inputan" name="nama" placeholder="Nama Anda">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1 judul">Email</label>
							<input type="email" class="form-control inputan" name="email" placeholder="Email Anda">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1 judul">Nomor Handphone</label>
							<input type="text" class="form-control inputan" name="nomer" placeholder="Nomer Handphone">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1 judul">Status</label>
							<select name="kelas" id="kelas" class="form-control inputan">
								<option value="Kelas 4">Kelas 4</option>
								<option value="Kelas 5">Kelas 5</option>
								<option value="Kelas 6">Kelas 6</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1 judul">Password</label>
							<input type="Password" class="form-control inputan" name="pass" placeholder="Password Anda">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1 judul">Konfirmasi Password</label>
							<input type="Password" class="form-control inputan" name="repass" placeholder="Konfimasi Password Anda">
						</div>
						<input type="submit" value="SUBMIT" class="btn btn-danger w-100">
					</form>
					<p align="center">Sudah Punya Akun ? <a href="../login">Masuk Disini</a></p>
				</div>
			</div>
		</div>

			<footer class="footer">
				<div class="container">
					<div class="row">
						<div class="col">
							<h6>Copyright &copy 2019 By RuangBelajar.com</h6>
						</div>
					</div>
				</div>
			</footer>
	
		<!-- Javascript -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>
<?php } ?>