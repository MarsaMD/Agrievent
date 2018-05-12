<?php
//  $localhost = "107.6.175.205";
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $db_name = "agrievent";
    //create connection
    $connect = mysqli_connect($localhost, $username, $password, $db_name);
    //check connection
    if($connect->connect_error) {
        die("connection failed : ". $connect->connect_error);
    } else {
        //  echo "Successfully Connected";
    }
?>