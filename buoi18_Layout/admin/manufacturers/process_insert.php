<?php

require '../check_supper_admin_login.php';

if (empty($_POST['name']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['image'])) {
    header('location: form_insert.php?error=Phải điền đủ thông tin');
}

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$image = $_POST['image'];

require '../connect.php';

$sql_insert = "insert into manufacturers(name, address, phone, image)
values('$name', '$address', '$phone', '$image')";

mysqli_query($connect, $sql_insert);
$error = mysqli_error($connect);

mysqli_close($connect);
if (isset($error)) {

    header('location: index.php?error=Không thể thêm vì có lỗi');
} else {
    header('location: index.php?success=Thêm thành công');
}

