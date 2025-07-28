<?php
$file_path = "delete.txt";

if(file_exists($file_path)){
    if(unlink($file_path)){
        echo "Tệp $file_path đã được xóa thành công";
    }else{
        echo "Có lỗi xảy ra khi xóa tệp $file_path.";
    }
}else{
    echo "Tệp $file_path không tồn tại.";
}
?>