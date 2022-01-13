<?php

require '../check_supper_admin_login.php';

if (empty($_POST['id'])) {
    header('location: index.php?error=Phải truyền mã để sửa');
    exit;
}

$id = $_POST['id'];

if (empty($_POST['name']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['image'])) {
    header("location: form_update.php?id=$id&error=Phải điền đủ thông tin");
    exit;
}

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$image = $_POST['image'];

require '../connect.php';

$sql_update = "update manufacturers
set
name = '$name',
address = '$address',
phone = '$phone',
image = '$image'
where
id = '$id'
";

mysqli_query($connect, $sql_update);
$error = mysqli_error($connect);

mysqli_close($connect);

if (empty($error)) {
    header('location: index.php?success=Sửa thành công');
} else{
    header("location: index.php?id=$id&error=Lỗi truy vấn");
}
