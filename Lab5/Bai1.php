<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị Ngày và Giờ hiện tại</title>
</head>
<body>
    <h1>Hiển thị Ngày và Giờ hiện tại</h1>
    <?php
    $ngayGioHienTai = date("d/m/Y H:i:s");
    echo "<p>Ngày và giờ hiện tại là: $ngayGioHienTai</p>"
    ?>
</body>
</html>