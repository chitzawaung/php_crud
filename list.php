<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/list.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->

</head>

<body>

    <div class="container-fluid containercss">
        <div class="row">
            <div class="col-md-12 ">
                <h1 class="list_title">Welcome Page</h1>
                <form action="" method="post">
                    <input type="text" name="search" placeholder="search">
                    <input type="submit" name="submit" value="search">
                </form>
                <?php include("confs/auth.php") ?>

                <?php
                include("confs/config.php");

                if (isset($_POST['search'])) {
                    $search = $_POST['search'];
                    $show = "SELECT * FROM webojt where title LIKE '%$search%' or description LIKE '%$search%'";
                    $searchresult = mysqli_query($conn, $show);
                    if ($searchresult->num_rows > 0) { ?>
                        <div class="fruids">
                            <?php while ($row = mysqli_fetch_assoc($searchresult)) : ?>
                                <b><?php echo $row['title'] ?></b>
                                <img src="images/<?php echo $row['image'] ?>" alt="" height="140">
                                <div><?php echo $row['description'] ?></div>
                                <a href="delete.php?id=<?php echo $row['id'] ?>" class="del">Del</a>
                                <a href="edit.php?id=<?php echo $row['id'] ?>" class="edit">Edit</a>
                            <?php endwhile; ?>
                        </div>
                    <?php } else {
                    echo "Your search query doesn't match any data!";
                }
            } else {
                $result = mysqli_query($conn, "SELECT * FROM webojt");
                if ($result->num_rows > 0) { ?>
                        <div class="fruids">
                            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                                <b><?php echo $row['title'] ?></b>
                                <img src="images/<?php echo $row['image'] ?>" alt="" height="140">
                                <div><?php echo $row['description'] ?></div>
                                <a href="delete.php?id=<?php echo $row['id'] ?>" class="del">Delete</a>
                                <a href="edit.php?id=<?php echo $row['id'] ?>" class="edit">Edit</a>
                                <hr>
                            <?php endwhile; ?>
                        </div>
                    <?php
                }
            } ?>
                <div>
                    <a href="new.php" class="new">New Post</a>
                    <a href="logout.php" class="logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>