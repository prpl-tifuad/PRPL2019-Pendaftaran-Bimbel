	<?php 
		include '../../database/config.php';
		$id = $_GET['id'];
		$email = $_GET['email'];
		$hapus = mysqli_query($koneksi, "DELETE FROM `pilihmapel` WHERE `id` = '$id' and `email` = '$email' ");
		if($hapus){
			header("location: ../?detail=$email&pesan=suksesdelete");
		}
		else{
			echo "gagal bangsat";
		}
		