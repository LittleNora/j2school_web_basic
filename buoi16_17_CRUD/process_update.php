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
    $ma = $_POST['ma'];
    $tieu_de = $_POST['tieu_de'];
    $noi_dung = $_POST['noi_dung'];
    $anh = $_POST['anh'];

    require_once 'connect.php';

    $truy_van = "update tin_tuc
    set
    tieu_de = '$tieu_de',
    noi_dung = '$noi_dung',
    anh = '$anh'
    where
    ma = '$ma'";

    mysqli_query($ket_noi, $truy_van);
    $loi = mysqli_error($ket_noi);
    echo $loi;

    mysqli_close($ket_noi);
    ?>
    <a href="index.php">Quay lại trang chủ</a>
</body>

</html>