<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="xu_ly.php">
        Tên: <input type="text" name="name" id="ten">
        <br>
        Giới tính: 
        <input type="radio" id="gioi_tinh" name="gioi_tinh" value="Nam" checked>Nam
        <input type="radio" id="gioi_tinh" name="gioi_tinh" value="Nữ">Nữ
        <br>
        Email: <input type="email" name="email" id="email">
        <br>
        Mật khẩu: <input type="password" name="password" id="mat_khau">
        <br>
        Ngày sinh: <input type="date" name="ngay_sinh" id="ngay_sinh">
        <br>
        Địa chỉ: <input type="text" name="address">
        <br>
        Sở thích: 
        <select name="so_thich" id="so_thich">
            <option value="1">Nhảy dây</option>
            <option value="2">Bắn Bi</option>
            <option value="3">Đá cầu</option>
        </select>
        <br>
        <button type="submit">Đăng kí</button>
    </form>
</body>
</html>