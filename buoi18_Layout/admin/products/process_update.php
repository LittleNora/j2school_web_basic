<?php
require '../check_admin_login.php';
$id = $_POST['id'];
$name = $_POST['name'];
$image_new = $_FILES['image_new'];
$image_old = $_POST['image_old'];
if ($image_new['size'] > 0) {
    $folder = 'img/';
    $file_extension = explode('.', $image_new['name'])[1];
    $file_name = time() . '.' . $file_extension;
    $path_file = $folder . $file_name;
    move_uploaded_file($image_new["tmp_name"], $path_file);
} else {
    $file_name = $image_old;
}

$price = $_POST['price'];
$description = $_POST['description'];
$manufacturer_id = $_POST['manufacturer_id'];



require '../connect.php';
$sql = "update products
set
name = '$name',
image = '$file_name',
price = '$price',
description = '$description',
manufacturer_id = '$manufacturer_id'
where
id = '$id'
";

mysqli_query($connect, $sql);
mysqli_close($connect);
