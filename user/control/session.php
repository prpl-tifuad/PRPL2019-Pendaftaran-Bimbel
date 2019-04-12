<?php
session_start();
if ( !isset($_SESSION['email'])){

	header('location:../login/');
	exit();
}
else{
	$nama = $_SESSION['nama'];
	$email = $_SESSION['email'];
	$password = $_SESSION['password'];
	$no_hp = $_SESSION['no_hp'];
	$status = $_SESSION['status'];
	$foto = $_SESSION['fotoprofile'];
}
?>