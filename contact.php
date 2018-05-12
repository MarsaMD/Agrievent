<?php
  include 'db-connect.php';
  if(isset($_POST['name'])){
  	$nama = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $query = mysqli_query($connect, "INSERT INTO contact (id, name,email,phone,message) VALUE ('','$nama','$email','$phone','$message')");
    if($query){
    	header('Location: index.php#contact');
    	// echo "berhasil";
    }
    else{
    	echo"Gagal Memasukkan Pesan!";
    }
  }
  else{
  	echo "masukin data coy"; 	
  }
    
?>