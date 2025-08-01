<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];
    
    // Đọc dữ liệu danh bạ từ tệp CSV
    $danhBa = array();
    if (($handle = fopen("contacts.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $danhBa[] = $data;
        }
        fclose($handle);
    }
    
    // Xóa liên hệ theo ID
    foreach ($danhBa as $key => $lienHe) {
        if ($lienHe[2] == $id) {
            unset($danhBa[$key]);
            break;
        }
    }
    
    // Ghi lại dữ liệu vào tệp CSV
    $file = fopen("contacts.csv", "w");
    foreach ($danhBa as $lienHe) {
        fputcsv($file, $lienHe);
    }
    fclose($file);
    
    header("Location: index.php");
}
?>