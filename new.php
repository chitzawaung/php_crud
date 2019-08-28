<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/new.css">
    <!-- <style>
        form label {
            display: block;
            margin-top: 8px;
        }

        h1 {
            color: gold;
            background-color: black;
            text-align: center;
        }

        input.add_post {
            background: aliceblue;
            padding-left: 10px;
            padding-top: 7px;
            padding-bottom: 7px;
            padding-right: 10px;
            border-radius: 7px;
            color: greenyellow;
        }

        input.add_post:hover {
            border: 1px solid green;
            text-decoration: none;
            color: green;
        }
    </style> -->
</head>

<body>
    <?php include("confs/auth.php") ?>

    <h1>Insert Form</h1>

    <form action="add.php" method="post" enctype="multipart/form-data">

        <label for="cover">Choose image</label>
        <input type="file" name="image" id="image">

        <label for="name">Title</label>
        <input type="text" name="title" id="title" required>

        <label for="title">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" required></textarea>

        <br><br>
        <input type="submit" value="Add Post" class="add_post">
    </form>
</body>

</html>