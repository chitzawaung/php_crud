<?php
include("confs/config.php");

$title = $_POST['title'];
$description = $_POST['description'];
$image = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

if ($image) {
    move_uploaded_file($tmp, "images/$image");
}

$sql = "INSERT INTO webojt (title, image, description, created_date,
    modified_date) VALUES ('$title', '$image', '$description', now(), now())";

mysqli_query($conn, $sql);

header("location: list.php");
