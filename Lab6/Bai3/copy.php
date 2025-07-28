<?php
$source_file = "source.txt";
$destination_file = "destination.txt";

if(file_exists($source_file)){
    $source_content = file_get_contents($source_file);

    if(file_put_contents($destination_file, $source_content)){
        echo "Nội dung đã được sao chép thành công vào tệp đích (destination.txt).";
    }else{
        echo "Có lỗi xảy ra khi ghi nội dung vào tệp đích.";
    }
}else{
    echo "Tệp nguồn (source.txt) không tồn tại";
}
?>