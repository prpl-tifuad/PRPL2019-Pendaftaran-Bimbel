<?php
	include('../../database/config.php');
	include '../control/session.php';
	$email =$_SESSION['email'];

	// murid
	$kelas = $_POST['kelas'];
	$mapel  = $_POST['mapel'];

	$masukin = "INSERT INTO pilihmapel(id, email, kelas) VALUES ('$mapel','$email','$kelas')";
	if(mysqli_query($koneksi, $masukin)){
			header("location:../index.php?pesan=suksesditambah");
		}
		else{
			echo "$kelas";
			echo "$mapel";
			echo "$email";
			//header("location:../index.php?pesan=gagal");
		}

		
?>