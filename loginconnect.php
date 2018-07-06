<?php
include 'db-connect.php';
session_start();
//sesuaikan dengan nama database anda

$Email = $_POST['email'];
$Password = $_POST['password'];

$Pswd = hash('md5', $Password);

$cekin = mysqli_query($connect, "SELECT * FROM register WHERE email = '$Email' AND password = '$Pswd' ");
var_dump($cekin);
if(mysqli_num_rows($cekin))//jika berhasil akan bernilai 1
{
while($cek = mysqli_fetch_array($cekin)){
 $_SESSION['username'] = $cek['username'];
 $_SESSION['email'] = $cek['email'];
 $_SESSION['sebagai'] = $cek['sebagai'];
}
  if($_SESSION['sebagai']=="admin"){
   header("location:indexlogged.php");
   }
   else{
   header("location:indexlogged.php");
  }
}
else{
die("<script>alert('Password yang Anda Masukan Salah');history.go(-1)</script>");
}

?>
