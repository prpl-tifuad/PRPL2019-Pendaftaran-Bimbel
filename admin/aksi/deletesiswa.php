	<?php 
		include '../../database/config.php';
		$id = $_GET['id'];
		$hapus = mysqli_query($koneksi, "DELETE FROM `siswa` WHERE email = '$id'");
		if($hapus){
			header("location: ..?pesan=suksesdelete");
		}
		