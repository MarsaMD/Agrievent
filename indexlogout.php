<?php
include 'db-connect.php';
unset($_SESSION['username']);
unset($_SESSION['email']);
unset($_SESSION['sebagai']);
header("location:index.php");

?>
