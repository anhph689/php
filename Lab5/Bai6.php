<!DOCTYPE html>
<html>
<head>
    <title>Ứng dụng Hiển thị Ngày và Giờ</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Ứng dụng Hiển thị Ngày và Giờ</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ngayGioNhap = $_POST["ngay_gio"];

        if (!empty($ngayGioNhap)) {
            // Kiểm tra định dạng người dùng nhập
            $ngayGio = DateTime::createFromFormat('Y-m-d H:i:s', $ngayGioNhap);

            // Nếu định dạng hợp lệ
            if ($ngayGio && $ngayGio->format('Y-m-d H:i:s') === $ngayGioNhap) {
                $ngayTrongTuan = $ngayGio->format('l');
                $dinhDangTuyChinh = $ngayGio->format('d/m/Y, H:i:s');

                echo "<p>Ngày và giờ đã nhập là: <strong>$dinhDangTuyChinh</strong></p>";
                echo "<p>Ngày trong tuần: <strong>$ngayTrongTuan</strong></p>";
            } else {
                echo "<p style='color:red;'>Định dạng không hợp lệ. Vui lòng nhập theo định dạng: <strong>YYYY-MM-DD HH:MM:SS</strong></p>";
            }
        } else {
            echo "<p style='color:red;'>Vui lòng nhập ngày và giờ.</p>";
        }
    }
    ?>

    <form method="post">
        Nhập ngày và giờ (định dạng: YYYY-MM-DD HH:MM:SS):<br>
        <input type="text" name="ngay_gio" required placeholder="Ví dụ: 2025-07-25 14:30:00">
        <br><br>
        <input type="submit" value="Hiển thị">
    </form>
</body>
</html>
