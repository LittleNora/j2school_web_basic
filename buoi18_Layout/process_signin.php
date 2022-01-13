<?php

$email = $_POST['email'];
$password = $_POST['password'];
if (isset($_POST['signin_remember'])) {
    $remember = true;
} else {
    $remember = false;
}

require './admin/connect.php';
$sql = "select * from customers
where email = '$email' and password = '$password'";
$result = mysqli_query($connect, $sql);
$number_rows = mysqli_num_rows($result);

session_start();
if ($number_rows == 1) {
    $each = mysqli_fetch_array($result);
    $id = $each['id'];
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $each['name'];
    if ($remember) {
        $token = uniqid('user_', true);
        $sql_token = "update customers
        set
        token = '$token'
        where
        id = '$id'
        ";
        mysqli_query($connect, $sql_token);
        setcookie('remember', $token, time() + (60 * 60 * 24 * 30));
    }

    header('location: index.php');
    mysqli_close($connect);
    exit;
} else {
    $error = "Sai thông tin";
    $_SESSION['error'] = $error;
    header('location: signin.php');
}
