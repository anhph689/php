<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id"];
    $tenMoi = $_POST["name"];
    $soDienThoaiMoi = $_POST["phone"];
    
    // Đọc dữ liệu danh bạ từ tệp CSV
    $danhBa = array();
    if (($handle = fopen("contacts.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $danhBa[] = $data;
        }
        fclose($handle);
    }
    
    // Cập nhật liên hệ theo ID
    foreach ($danhBa as &$lienHe) {
        if ($lienHe[2] == $id) {
            $lienHe[0] = $tenMoi;
            $lienHe[1] = $soDienThoaiMoi;
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