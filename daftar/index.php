<html>
	<title>Form Data Diri</title> 
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<!-- bootstrap grid -->
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap-grid.min.css">
	<style>
		body{
			background: #f2f2f2;
		}
		header .row{
			margin: 0px;
		}
		.header{
			padding: 20px;
			background: #f77529;
			color: #fff;
			font-weight: bold;
			box-shadow: 0px 5px 10px 0 rgba(0, 0, 0, 0.28);
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
		}
		.klik:hover{
			background: #d45f1b;
			border-color: #d45f1b;
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
						<input type="submit" value="SUBMIT" class="btn btn-primary klik">
					</form>
					<p align="center">Sudah Punya Akun ? <a href="../login">Masuk Disini</a></p>
				</div>
			</div>
		</div>
	</body>
</html>