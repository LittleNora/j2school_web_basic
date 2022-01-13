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
    session_start();
    include 'menu.php';
    if (isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
    }
    $sum = 0;
    ?>
    <table border="1" width="100%">
        <tr>
            <th>Ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
            <th>Xóa</th>
        </tr>
        <?php if (isset($cart)) { ?>
            <?php foreach ($cart as $id => $each) : ?>
                <tr>
                    <td>
                        <img src="./admin/products/img/<?php echo $each['image'] ?>" height="100">
                    </td>
                    <td><?php echo $each['name'] ?></td>
                    <td><?php echo $each['price'] ?></td>
                    <td>
                        <a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=decre">-</a>
                        <?php echo $each['quantity'] ?>
                        <a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=incre">+</a>
                    </td>
                    <td>
                        <?php
                        $result = $each['price'] * $each['quantity'];
                        $sum += $result;
                        echo $result . ' VNĐ'
                        ?>
                    </td>
                    <td>
                        <a href="delete_from_cart.php?id=<?php echo $id ?>">Xóa</a>
                    </td>
                </tr>
            <?php endforeach ?>
        <?php } ?>
    </table>

    <?php if (isset($cart)) { ?>
        <h1>
            Tổng tiền: $<?php echo $sum ?>
        </h1>
        <?php
        $id = $_SESSION['id'];
        require './admin/connect.php';
        $sql = "select * from customers where id = '$id'";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
        mysqli_close($connect);
        ?>
        <form action="process_checkout.php" method="POST">
            Tên người nhận: <input type="text" name="name_receiver" value="<?php echo $each['name'] ?>">
            <br>
            Sđt người nhận: <input type="text" name="phone_receiver" value="<?php echo $each['phone_number'] ?>">
            <br>
            Địa chỉ người nhận: <input type="text" name="address_receiver" value="<?php echo $each['address'] ?>">
            <br>
            <button type="submit">Đặt hàng</button>
        </form>
    <?php } ?>
</body>

</html>