<?php
session_start();
require '../../database/config.php';

if ( isset($_POST['email']) && isset($_POST['password']) ) {
    $sql_check = "SELECT * FROM siswa WHERE email=? AND password=? LIMIT 1";

    $check_log = $koneksi->prepare($sql_check);
    $check_log->bind_param('ss', $email, $password);

    $email = $_POST['email'];
    $password = md5( $_POST['password'] );

    $check_log->execute();

    $check_log->store_result();

    if ( $check_log->num_rows == 1 ) {
        $check_log->bind_result($nama, $email, $password, $no_hp, $status, $fotoprofile);

        while ( $check_log->fetch() ) {
            $_SESSION['nama'] = $nama;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION['no_hp'] = $no_hp;
            $_SESSION['status'] = $status;
            $_SESSION['fotoprofile'] = $fotoprofile;
            

        }

        $check_log->close();
        header('location:../../user/');
        exit();

    } else {
        header('location: ../?error='.base64_encode('Username dan Password Salah!!!'));
        exit();
    }


} else {
    header('location:../');
    exit();
}