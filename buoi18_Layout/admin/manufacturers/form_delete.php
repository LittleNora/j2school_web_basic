<?php

require '../check_supper_admin_login.php';

if (empty($_GET['id'])) {
    header('location: index.php?error=Phải truyền mã để xóa');
    exit;
}

$id = $_GET['id'];

require '../connect.php';

$sql_delete = "delete from manufacturers
where
id = '$id'
";

mysqli_query($connect, $sql_delete);
$error = mysqli_error($connect);

mysqli_close($connect);

header('location: index.php?success=Xóa thành công');
