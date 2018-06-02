<?php
include 'db-connect.php';

//if($_SERVER['REQUEST_METHOD'] == 'POST'){
 if(isset($_POST['uname']))
 {
       $Username = $_POST['uname'];
       $Email = $_POST['email'];
       $Password = $_POST['password1'];
       $Password2 = $_POST['password2'];
       $pswd1 = md5($Password);
       $pswd2 = md5($Password2);

       $pswd1 = hash('md5', $Password);
       $pswd2 = hash('md5', $Password2);

       if ($pswd2==$pswd1) {
//proses simpan data, $_POST['pw'] dan $_POST['pw1'] adalah name dari masing masing text password

        // Memeriksa apakah variabel judul dan pengarang sudah terisi,jika sudah jalankan query dibawah
        if(!empty($Username))
            $in = mysqli_query($connect,"INSERT INTO register(username,email,password,sebagai) VALUES('$Username','$Email','$pswd1','user')");

           if(!$in) { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
             echo "<script>window.alert('User atau email sudah ada yang menggunakan');history.go(-1)</script>";
              }
          else { // Jika berhasil alihkan ke halaman tampil.php
            echo "<script>window.alert('Akun anda berhasil terdaftar, Silahkan Log In')</script>";
           echo "<meta http-equiv='refresh' content='0; url=indexlogin.html'>";
         }
       //echo "<script>alert('Format email salah, silahkan cek kembali');history.go(-1)</script>";

     }
     else {
     echo "<script>alert('Password yang Anda Masukan Tidak Sama');history.go(-1)</script>";
     }
   }
//}
?>
