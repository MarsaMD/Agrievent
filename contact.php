<?php
include 'db-connect.php';
 if(isset($_POST['email']))
 {
       $Name = $_POST['name'];
       $Email = $_POST['email'];
       $Phone = $_POST['phone'];
       $Message = $_POST['message'];

            $in = mysqli_query($connect,"INSERT INTO contact(name,email,phone,message) VALUES('$Name','$Email','$Phone','$Message')");

           if(!$in) { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
             echo "<script>window.alert('Pesan gagal dikirim');history.go(-1)</script>";
              }
          else { // Jika berhasil alihkan ke halaman tampil.php
            echo "<script>window.alert('Pesan anda telah berhasil terkirim')</script>";
           echo "<meta http-equiv='refresh' content='0; url=index.php'>";
         }
       //echo "<script>alert('Format email salah, silahkan cek kembali');history.go(-1)</script>";
     }
?>
