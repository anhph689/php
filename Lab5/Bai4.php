<!DOCTYPE html>
<html>
<head>
    <title>Tính Tuổi từ Ngày Sinh</title>
</head>
<body>
    <h1>Tính Tuổi từ Ngày Sinh</h1>
    <?php
    $ngaySinh = "2005-09-20";

    $ngaySinh = new DateTime($ngaySinh);

    $ngayHienTai = new DateTime();

    $soNamTruoc = date_diff($ngaySinh, $ngayHienTai)->y;

    echo "<p>Tuổi của bạn từ ngày sinh " . $ngaySinh->format("d/m/Y") . " là: $soNamTruoc tuổi</p>";
    ?>
</body>
</html>