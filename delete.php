<?php include("confs/auth.php") ?>

<?php
include("confs/config.php");
$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM webojt WHERE id= $id");

if ($query->num_rows>0) { ?>
    <?php while ($row = mysqli_fetch_assoc($query)) : ?>
        <img src="images/<?php echo $row['image'] ?>" alt="" height="140">
        <?php if (unlink('images/' . $row['image'])) {
            $sql = "DELETE FROM webojt WHERE id= $id";
            mysqli_query($conn, $sql);

            header("location: list.php");
        } ?>
    <?php endwhile; ?>
<?php
} ?>
