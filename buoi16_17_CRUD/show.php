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

    $sql = "select * from tin_tuc
    where ma = $ma";
    $ket_qua = mysqli_query($ket_noi, $sql);
    $bai_dang = mysqli_fetch_array($ket_qua);
    ?>
    <h1>
        <?php echo $bai_dang['tieu_de'] ?>
    </h1>
    <p>
        <?php echo nl2br($bai_dang['noi_dung']) ?>
    </p>
    <img src="<?php echo $bai_dang['anh'] ?>" alt="" width="50%"><br>
    <a href="index.php">Quay lại trang chủ</a>
    <?php mysqli_close($ket_noi);?>
</body>

</html>