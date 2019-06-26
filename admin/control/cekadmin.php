<?php
session_start();
if ( !isset($_SESSION['email'])){

	header('location:../login/');
	exit();
}
else if($_SESSION['level']=="admin"){
	$no_id = $_SESSION['no_id']; 
    $nama = $_SESSION['nama'];
    $email =  $_SESSION['email'];
    $password = $_SESSION['password'];
    $image = $_SESSION['image'];
    $level = $_SESSION['level'];
}
else{
	header('location:../user/');
	exit();
}
?>