<?php
session_start();
// mengecek user login atau belum
if ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != '' ) {
    $halaman = $_SESSION['user_login'];
    //jika sudah
    header('location:on-'. $halaman);
    exit();
} else {
	//jika belum login
    header('location:login.php');
    exit();
}