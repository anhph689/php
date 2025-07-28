<?php
$data = $_POST['data'];

$file_path = 'data.txt';

$file = fopen($file_path, 'a'); //'a' để thêm dữ liệu vào cuối tệp

if($file){
    fwrite($file, $data . PHP_EOL); //PHP_EOL để thêm ký tự xuống dòng
    fclose($file);
    echo "Dữ liệu đã được lưu vào tệp văn bản thành công.";
}else{
    echo "Có thể xảy ra khi mở tệp văn bản.";
}
?>