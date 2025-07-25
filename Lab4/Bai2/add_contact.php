<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ten = $_POST["name"];
    $soDienThoai = $_POST["phone"];
    
    // Tạo ID ngẫu nhiên cho liên hệ
    $id = uniqid();
    
    // Mở tệp CSV để thêm liên hệ mới
    $file = fopen("contacts.csv", "a");
    fputcsv($file, array($ten, $soDienThoai, $id));
    fclose($file);
    
    header("Location: index.php");
}
?>