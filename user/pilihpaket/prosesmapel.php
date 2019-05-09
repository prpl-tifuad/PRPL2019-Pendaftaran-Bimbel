<?php
	include('../../database/config.php');
	include '../control/session.php';
	$email =$_SESSION['email'];

	// murid
	$kelas = $_POST['kelas'];
	$mapel  = $_POST['mapel'];

	if($kelas=="Kelas 4"){
		$biaya = 500000;
	}
	else if($kelas=="Kelas 5"){
		$biaya = 1000000;
	}
	else if($kelas=="Kelas 6"){
		$biaya = 1300000;
	}

	$masukin = "INSERT INTO pilihmapel(id, email, kelas, Status, Biaya) VALUES ('$mapel','$email','$kelas','Pending','$biaya')";
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