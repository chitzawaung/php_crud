<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/edit.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        form label {
            display: block;
            margin-top: 8px;
        }
    </style>
</head>

<body>
    <h1>Edit Post</h1>
    <?php include("confs/auth.php") ?>
    <?php
    include("confs/config.php");

    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM webojt WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
    ?>
    <div class="edit">
        <form action="update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" title="id" value="<?php echo $row['id'] ?>">

            <img src="images/<?php echo $row['image'] ?>" alt="" srcset="" height="100px">
            <label for="image">Change image:</label>
            <input type="file" name="image" id="image">

            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="<?php echo $row['title'] ?>">

            <label for="description">Description::</label>
            <textarea name="description" id="description" cols="30" rows="5"><?php echo $row['description'] ?></textarea>


            <br>
            <input type="submit" class="update" value="Update">
        </form>
    </div>
</body>

</html>