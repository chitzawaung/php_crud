<?php
session_start();
header('location: index.php');

$con = mysqli_connect('localhost','cza', '123' );

mysqli_select_db($con, 'test' );

$name =$_POST[ 'user'];
$pass = $_POST['password'];

$s = "select * from usertable where name = '$name' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
    echo " User Already Taken";
} else {
    $reg = "insert into usertable(name, password) values ('$name', '$pass')";
    mysqli_query($con, $reg);
    echo "Register Successful";
}
