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
    date_default_timezone_set('Asia/Ho_Chi_Minh');

    $ngayGioHienTai = new DateTime();

    echo "<p>Ngày: " . $ngayGioHienTai->format("d/m/Y") . ", Giờ: " . $ngayGioHienTai->format("H:i:s") . "</p>";
    ?>
</body>
</html>