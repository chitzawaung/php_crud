<?php
session_start();
header('location: list.php');

$con = mysqli_connect('localhost','cza', '123' );

mysqli_select_db($con, 'test' );

$name =$_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
    // $_SESSION['username'] = $name;
    $_SESSION['auth'] = true;
    header('location: list.php');    // list.php
} else {
    header('location:index.html');
}
