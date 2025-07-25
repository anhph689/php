<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Danh Bạ</title>
</head>
<body>
    <h1>Quản Lý Danh Bạ</h1>    

    <!-- Form để thêm liên hệ mới -->
    <h2>Thêm Liên Hệ Mới</h2>
    <form action="add_contact.php" method="post">
        <label for="name">Tên:</label>
        <input type="text" id="name" name="name" required>
        <label for="phone">Số Điện Thoại:</label>
        <input type="tel" id="phone" name="phone" required>
        <input type="submit" value="Thêm">
    </form>
    
    <!-- Danh sách liên hệ -->
    <h2>Danh Sách Liên Hệ</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Tên</th>
            <th>Số Điện Thoại</th>
            <th>Thao Tác</th>
        </tr>
        <?php
        // Đọc dữ liệu danh bạ từ tệp CSV
        $danhBa = [];
        if (($handle = fopen("contacts.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                if (count($data) >= 2) {
                    $danhBa[] = $data;
                }
            }
            fclose($handle);
        }

        // Hiển thị danh sách liên hệ
        foreach ($danhBa as $index => $lienHe) {
            $ten = htmlspecialchars($lienHe[0]);
            $sdt = htmlspecialchars($lienHe[1]);
            $id = $index; // dùng chỉ số mảng làm ID giả định

            echo "<tr>";
            echo "<td>$ten</td>";
            echo "<td>$sdt</td>";
            echo "<td>
                    <a href='edit_contact.php?id=$id'>Sửa</a> |
                    <a href='delete_contact.php?id=$id'>Xóa</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
