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
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<!-- bootstrap grid -->
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
</script>
<body>
		<nav class="navbar navbar-expand-lg navbar-light nav sticky-top" id="myHeader">
			<div class="container">
			  <a class="navbar-brand" href="../"><b>RUANGBELAJAR</b></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
				
				<div class="navbar-nav ml-auto">
					<span>Pendaftaran</span>
				</div>
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav ml-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="#top">Form Login<span class="sr-only">(current)</span></a>
				      </li>
				    </ul>
				</div>
			</div>
		</nav>

	<section class="content">
		<div class="container">
			<div class="row">
				<div class="col login2">
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
			                        else if($pesan == "keluar"){
			                            echo "<div class='alert alert-primary'><a href='#' class='close' onclick='this.parentElement.style.display='none';' data-dismiss='alert' aria-label='Close'>&times;</a>";
			                            echo 'Anda Berhasil Log Out';
			                            echo '</div>';
			                        }
			                    }
			                    ?>
						<h1>Login</h1>
						<form action="./proses/index.php" method="post">
							<div class="textbox">
								<i class="fas fa-user"></i>
								<input type="text" class="w-100" placeholder="Email Anda" name="email">
							</div>

							<div class="textbox">
								<i class="fas fa-lock"></i>
								<input type="password" placeholder="Password Anda" name="password"/>
							</div>			
							<div style="margin-top: 30px">
								<input type="submit" value="Login" class="btn btn-danger">
								<p class="text-center">Belum Punya Akun ? <a href="../daftar/">Daftar Disini</a></p>
							</div>
						</form>
				</div>
			</div>
		</div>
	</section>

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