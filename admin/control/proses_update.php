<?php 
	$id = $_POST['id'];
	$email = $_POST['email'];
	$status = $_POST['status'];

	include '../../database/config.php';

	$update = mysqli_query($koneksi, "UPDATE `pilihmapel` SET `Status`='$status' WHERE `id` = '$id' and `email` = '$email'");

	if ($update) {
		header("location:../../admin/?detail=$email&pesan=updatesukses");
	}
