<?php  
    $dbhost = "localhost";
    $dbuser = "cza";
    $dbpass = "123";
    $dbname = "test";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    mysqli_select_db($conn, $dbname);
?>