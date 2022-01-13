<?php
session_start();
if (isset($_COOKIE['remember'])) {
    $token = $_COOKIE['remember'];
    require 'admin/connect.php';
    $sql = "select * from customers
    where token = '$token' limit 1
    ";
    $result = mysqli_query($connect, $sql);
    $number_rows = mysqli_num_rows($result);
    if ($number_rows == 1) {
        $each = mysqli_fetch_array($result);
        $_SESSION['id'] = $each['id'];
        $_SESSION['name'] = $each['name'];
    }
}
if (isset($_SESSION['id'])) {
    header('location: index.php');
    exit;
}

if (isset($_SESSION['error'])){
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>

<body>
    <form action="process_signin.php" method="POST">
        Email: <input type="email" name="email">
        <br>
        Mật khẩu: <input type="password" name="password">
        <br>
        Ghi nhớ đăng nhập <input type="checkbox" name="signin_remember">
        <br>
        <button type="submit">Đăng nhập</button>
    </form>
</body>

</html>