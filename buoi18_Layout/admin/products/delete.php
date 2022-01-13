<?php
require '../check_admin_login.php';
$id = $_GET['id'];

require '../connect.php';
require '../check_admin_login.php';
$sql = "delete from products where id = '$id'";

$result = mysqli_query($connect, $sql);
mysqli_close($connect);
