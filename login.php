 <?php session_start();
 $name = $_POST['name'];
 $password = $_POST['password'];

 if ($name == "cza" and $password == "123") {
 $_SESSION['auth'] = true;
 header("location:list.php");
 } else {
 header("location: index.php");
 }
 ?>
