<!-- <?php 
// header("location:./daftar/");
?> -->
<html>
	<head>
		<title>Ruang Belajar</title>
		<link rel="stylesheet" type="text/css" href="./assets/bootstrap/css/bootstrap.min.css">
	<!-- bootstrap grid -->
	<link rel="stylesheet" type="text/css" href="./assets/bootstrap/css/bootstrap-grid.min.css">
	<!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="./assets/custom/landingpage.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" type="text/css" rel="stylesheet"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script>new WOW().init();</script>
	</head>
	<body>
		<div id="top"></div>
		<nav class="navbar navbar-expand-lg navbar-light nav sticky-top" id="myHeader">
			<div class="container">
			  <a class="navbar-brand" href="#top"><b>RUANGBELAJAR</b></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav ml-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="#top">Home <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a data-scroll class="nav-link" href="#about">Tentang Kami</a>
				      </li>
				      <li class="nav-item">
				        <a data-scroll class="nav-link" href="#kelas">Kelas Kami</a>
				      </li>
				      <li class="nav-item">
				        <a data-scroll class="nav-link" href="#testi">Testimoni</a>
				      </li>
				       <li class="nav-item">
				        <a data-scroll class="nav-link login" style="color: #fff" href="./login/">Sign In</a>
				      </li>
				      <li class="nav-item">
				        <a data-scroll class="nav-link daftar" style="color: #fff" href="./daftar/">Mendaftar</a>
				      </li>
				    </ul>
				</div>
			</div>
		</nav>

		<section class="slider">
			<div class="container">
				<div class="row">
					<div class="col">
						<h1 style="color: #fff;">Belajar Asik dengan RUANGBELAJAR<span style="color: #ff0000">.</span></h1>
						<h1 style="font-weight: bold; color: #fff">
							<br>
						#MENJADIPINTAR</h1>
					</div>
					<div class="col text-center">
						<img style="width: 60%;" src="./assets/image/ABOUTME.svg" alt="">
					</div>
				</div>
			</div>
		</section>

		<section class="about" id="about">
			<div class="container">
				<div class="row">
					<div class="col">
						<h5 class="judulabout">Tentang Kami</h5>
						<p class="ketabout">RuangBelajar merupakan sebuah tempat bimbingan belajar di Indonesia yang berfokus pada layanan berbasis pendidikan dan telah memiliki guru - guru terdidik yang siap untuk memberikan tutor sebaik mungkin</p>
					</div>
					<div class="col">
						
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="menjadipintar">
							<h5 style="margin: 0px">BANGGA <b>#MENJADIPINTAR</b></h5>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="kelas" id="kelas">
			<div class="container">
				<div class="row">
					<div class="col">
						<h5>Pilih kelas sesuai minat dan kebutuhanmu<br>
						Lebih dekat dengan ilmu dimana saja, kapan saja.</h5>
					</div>
				</div>
				<div class="row wow fadeInUp" duration="2s" delay="5s">
					<div class="col">
						<div class="kotak">
							<div class="gambar">
								<i class="fas fa-calculator"></i>
							</div>
							<div class="nama">
								Matematika
							</div>
							
						</div>
					</div>
					<div class="col">
						<div class="kotak">
							<div class="gambar">
								<i class="fas fa-language"></i>
							</div>
							<div class="nama">
								Bahasa Inggris
							</div>
							
						</div>
					</div>
					<div class="col">
						<div class="kotak">
							<div class="gambar">
								<i class="fas fa-atom"></i>
							</div>
							<div class="nama">
								Fisika
							</div>
							
						</div>
					</div>
					<div class="col">
						<div class="kotak">
							<div class="gambar">
								<i class="fas fa-dna"></i>
							</div>
							<div class="nama">
								Biologi
							</div>
							
						</div>
					</div>
					<div class="col">
						<div class="kotak">
							<div class="gambar">
								<i class="fas fa-bong"></i>
							</div>
							<div class="nama">
								Kimia
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="testimoni" id="testi">
			<div class="container">
				<div class="row">
					<div class="col">
						<h5 style="font-weight: bold; margin: 30px 0px;">TESTIMONI</h5>
					</div>
				</div>
				<div class="row wow bounceIn" duration="2s" delay="5s">
					<div class="col">
						<div class="kotaktesti">
							<div class="imageku">
								<div id="image">
									<div class="crop">
										<img src="./assets/fotoprofiletesti/2.jpg" class="fotoprofile" alt="">
									</div>
								</div>
							</div>
								<div class="komentest">
									<p>"Cara belajarnya gampang dimengerti dan belajarnya juga asik banget dan seru"</p>
								</div>
								<div class="komentartest">
									<h6>Arfi Maulana</h6>
								</div>

						</div>
					</div>

					<div class="col">
						<div class="kotaktesti">
							<div class="imageku">
								<div id="image">
									<div class="crop">
										<img src="./assets/fotoprofiletesti/3.jpg" class="fotoprofile" alt="">
									</div>
								</div>
							</div>
								<div class="komentest">
									<p>"Les di RB itu menyenangkan, tentornya asik dan mengajarkan materi dengan baik. Terimakasih RB karena telah memberikan ilmu dan pijakan saya masuk ke SMP Terbaik."</p>
								</div>
								<div class="komentartest">
									<h6>Amanda</h6>
								</div>

						</div>
					</div>

					<div class="col">
						<div class="kotaktesti">
							<div class="imageku">
								<div id="image">
									<div class="crop">
										<img src="./assets/fotoprofiletesti/4.jpg" class="fotoprofile" alt="">
									</div>
								</div>
							</div>
								<div class="komentest">
									<p>"Belajarnya asik dan harganya terjangkau"</p>
								</div>
								<div class="komentartest">
									<h6>Joseph Maulana</h6>
								</div>

						</div>
					</div>

					<div class="col">
						<div class="kotaktesti">
							<div class="imageku">
								<div id="image">
									<div class="crop">
										<img src="./assets/fotoprofiletesti/5.jpg" class="fotoprofile" alt="">
									</div>
								</div>
							</div>
								<div class="komentest">
									<p>"Materi yang dipelajari sangat mudah dimengerti dan pengajar sungguh - sungguh sabar dalam mengajari kami semua"</p>
								</div>
								<div class="komentartest">
									<h6>Kirito </h6>
								</div>

						</div>
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

	<script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.0.3/smooth-scroll.min.js"></script>
		<script>
			var scroll = new SmoothScroll('a[href*="#"]', {
				speed: 1000,
				speedAsDuration: true
			});
		</script>
		<script src="./assets/custom/header.js"></script>
		 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    	<script src="./assets/bootstrap/js/bootstrap.min.js"></script>

	</body>
</html>