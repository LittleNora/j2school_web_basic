<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $ma = $_GET['ma'];

    require_once 'connect.php';
    $truy_van = "delete from tin_tuc where ma = '$ma'";

    mysqli_query($ket_noi, $truy_van);

    mysqli_close($ket_noi);
    ?>
    <a href="index.php">Quay lại trang chủ</a>
</body>

</html>