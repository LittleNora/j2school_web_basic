<?php
$id = $_GET['id'];
require 'admin/connect.php';
$sql = "select * from products
where id = '$id'";
$result = mysqli_query($connect, $sql);
$each = mysqli_fetch_array($result);
mysqli_close($connect);
?>

<div id="giua">
    <?php foreach ($result as $each) : ?>
        <h1>
            <?php echo $each['name'] ?>
        </h1>
        <img src="./admin/products/img/<?php echo $each['image'] ?>" height="100" alt="">
        <p><?php echo $each['price'] ?></p>
        <p><?php echo $each['description'] ?></p>
    <?php endforeach ?>
</div>