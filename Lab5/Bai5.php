<!DOCTYPE html>
<html>
<head>
    <title>Hiển thị Lịch Cho Một Tháng và Năm Cụ thể</title>
</head>
<body>
    <h1>Lịch</h1>

    <?php
    // Kiểm tra dữ liệu từ người dùng
    if (isset($_GET['thang']) && isset($_GET['nam'])) {
        $thang = $_GET['thang'];
        $nam = $_GET['nam'];

        // Kiểm tra tính hợp lệ
        if (is_numeric($thang) && is_numeric($nam) && $thang >= 1 && $thang <= 12 && $nam >= 1970) {
            // Lấy số ngày trong tháng
            $soNgayTrongThang = cal_days_in_month(CAL_GREGORIAN, $thang, $nam);

            // Tạo ngày đầu tháng
            $ngay = new DateTime("$nam-$thang-01");

            echo "<h2>Tháng $thang, Năm $nam</h2>";

            // Bắt đầu bảng
            echo "<table border='1' cellpadding='10'>";
            echo "<tr><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th><th>Sun</th></tr><tr>";

            // Thêm ô trống đầu tháng nếu cần
            $thuTrongTuan = $ngay->format('N'); // 1 (Mon) đến 7 (Sun)
            for ($i = 1; $i < $thuTrongTuan; $i++) {
                echo "<td></td>";
            }

            // Hiển thị ngày
            for ($i = 1; $i <= $soNgayTrongThang; $i++) {
                echo "<td>$i</td>";

                // Nếu là Chủ nhật thì xuống dòng
                if ($ngay->format('N') == 7) {
                    echo "</tr>";
                    // Nếu chưa hết tháng thì mở dòng mới
                    if ($i != $soNgayTrongThang) {
                        echo "<tr>";
                    }
                }

                // Tăng ngày
                $ngay->modify('+1 day');
            }

            echo "</tr></table>";
        } else {
            echo "<p>Tháng và năm không hợp lệ.</p>";
        }
    } else {
        echo "<p>Vui lòng nhập tháng và năm.</p>";
    }
    ?>

    <form method="get">
        Tháng: <input type="number" name="thang" min="1" max="12" required>
        Năm: <input type="number" name="nam" min="1970" required>
        <input type="submit" value="Hiển thị">
    </form>
</body>
</html>