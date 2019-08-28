<?php
    include("confs/config.php");

    $id = $_POST['id'];
    $title = $_POST['title'];
    $image = $_FILES[ "image"]["name"];
    $description  = $_POST['description'];
    $tmp = $_FILES[ "image"]["tmp_name"];
    $type = $_FILES[ "image"]["type"];
    if ($image) {
        move_uploaded_file($tmp, "images/$image");
    }

    $sql = "UPDATE webojt SET title='$title',image='$image', description='$description',
            modified_date=now() WHERE id = $id"; 
     mysqli_query($conn, $sql);

     header("location: list.php");
?>

