<?php
// Đường dẫn đến thư mục chứa các tệp
$directory = "D:/www/PHP/Lab6/Bai6";

// Kiểm tra xem thư mục tồn tại
if (is_dir($directory)) {
    // Lấy danh sách tất cả các tệp trong thư mục
    $files = scandir($directory);

    // Loại bỏ hai mục '.' và '..' khỏi danh sách
    $files = array_diff($files, array('.', '..'));

    // Liệt kê các tệp
    echo "Danh sách các tệp trong thư mục $directory:<br>";
    foreach ($files as $file) {
        echo "$file<br>";
    }
} else {
    echo "Thư mục $directory không tồn tại.";
}
?>