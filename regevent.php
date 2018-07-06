<?php
include 'db-connect.php';
 if(isset($_POST['q30_email']))
 {
      var_dump($_POST);
        $FirstName = $_POST['q15_namaPj']['first'];
       $LastName = $_POST['q15_namaPj']['last'];
       $EventName = $_POST['q19_namaEvent'];
       $Email = $_POST['q30_email'];
       $Phone = $_POST['q31_nomorTelepon[full]'];
       $EventDesc = $_POST['q33_deskripsiEvent'];
       $DayDate = $_POST['q35_tanggalAcara']['day'];
       $MonthDate = $_POST['q35_tanggalAcara']['month'];
       $YearDate  = $_POST['q35_tanggalAcara']['year'];
       $Ticket = $_POST['q34_jumlahTiket'];

            $in = mysqli_query($connect,"INSERT INTO regevent(FirstName,LastName,EventName,Email,Phone,EventDesc,DayDate,MonthDate,YearDate,
              Ticket) VALUES('$FirstName','$LastName','$EventName','$Email','$Phone','$EventDesc','$DayDate','$MonthDate','$YearDate','$Ticket')");

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
