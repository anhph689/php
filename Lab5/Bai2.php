<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị Ngày và Giờ theo Định dạng tùy chỉnh</title>
</head>
<body>
    <h1>Ngày và Giờ hiện tại</h1>
    <?php
    $ngayGioHienTai = date("\N\g\à\y: d/m/Y, \G\i\ờ: H:i:s");
    echo "<p>$ngayGioHienTai</p>"
    ?>
</body>
</html>