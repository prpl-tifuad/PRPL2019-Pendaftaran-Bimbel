<?php 

include '../../database/config.php';
$nama = $_POST['nama'];
$email = $_POST['email'];
$nohp = $_POST['nomer'];
$kelas = $_POST['kelas'];
$pass = $_POST['pass'];
$repass = $_POST['repass'];

$cekdata="select email from siswa where email='$email'";
    $ada=mysqli_query($koneksi, $cekdata) or die(mysql_error());
    if(mysqli_num_rows($ada)>0)
    { 
        ! $insert != mysqli_query($koneksi, $sql);
        header('location: ../index.php?error=' .base64_encode('Email Sudah Terdaftar, Gunakan Email Lain'));   
    }
    else{
    	if (empty($nama)) {
            ! $insert != mysqli_query($koneksi, $sql);
            header('location: ../index?error=' .base64_encode('Nama Tidak Boleh Kosong'));   
        }

        else if (empty($email)) {
            ! $insert != mysqli_query($koneksi, $sql);
            header('location: ../index?error=' .base64_encode('Email Tidak Boleh Kosong'));   
        }

        else if (empty($nohp)) {
            ! $insert != mysqli_query($koneksi, $sql);
            header('location: ../index?error=' .base64_encode('Nomor Hp Tidak Boleh Kosong'));   
        }

    	else if (empty($pass)) {
            ! $insert != mysqli_query($koneksi, $sql);
            header('location: ../index?error=' .base64_encode('Password Tidak Boleh Kosong'));   
        }

        else if (empty($repass)) {
            ! $insert != mysqli_query($koneksi, $sql);
            header('location: ../index?error=' .base64_encode('Password Tidak Boleh Kosong'));   
        }

        else if ($repass != $pass) {
            ! $insert != mysqli_query($koneksi, $sql);
            header('location: ../index?error=' .base64_encode('Konfirmasi Password Salah'));   
        }

        else{
    	    $pass = md5($pass);   // encryption dengan md5
    	    // SQL Insert
    	    $sql = "INSERT INTO siswa (nama, email, password, no_hp, status, fotoprofile) VALUES ('$nama', '$email', '$pass', '$nohp', '$kelas', '../assets/image/userdefault.png')";
    	    $insert = mysqli_query($koneksi, $sql);
            if ($insert) {
                header('location: ../../login?pesan=berhasil');  
            }
    	     
            
        }
    }




 ?>