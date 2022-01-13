<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>

<?php 
if(isset($_GET['error'])){
    echo $_GET['error'];
} 
?>
    <form action="process_signup.php" method="POST">
        <h1>Form đăng kí</h1>
        Tên: <input type="text" name="name">
        <br>
        Email: <input type="email" name="email">
        <br>
        Mật khẩu: <input type="password" name="password">
        <br>
        Số điện thoại: <input type="text" name="phone_number">
        <br>
        Địa chỉ: <input type="text" name="address">
        <br>
        <button type="submit">Đăng ký</button>
    </form>
</body>
</html>