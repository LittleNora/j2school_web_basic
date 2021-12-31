<?php
$ten = $_POST['name'];
$gioi_tinh = $_POST['gioi_tinh'];
$email = $_POST['email'];
$mat_khau = $_POST['password'];
$ngay_sinh = $_POST['ngay_sinh'];
$dia_chi = $_POST['address'];
$value_so_thich = $_POST['so_thich'];

switch ($value_so_thich) {
    case 1:
        $so_thich = 'Nhảy dây';
        break;
    case 2:
        $so_thich = 'Bắn bi';
        break;
    case 3:
        $so_thich = 'Đá cầu';
        break;
}

echo 'Sjn chào ' . $ten . '!<br>';
echo 'Bạn là ' . $gioi_tinh . '.<br>';
echo 'Email của bạn là: ' . $email . '<br>';
echo 'Mật khẩu bạn chọn là: ' . $mat_khau . '<br>';
echo 'Bạn sinh ngày: ' . date("d-m-Y", strtotime($ngay_sinh)) . '<br>';
echo 'Bạn sống tại: ' . $dia_chi . '<br>';
echo 'Sở thích của bạn là: ' . $so_thich . '<br>';