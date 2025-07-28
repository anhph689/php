<?php
$file_path = "your_file.txt";

if(file_exists($file_path)){
    echo "Tệp $file_path tồn tại.";
}else{
    echo "Tệp $file_path không tồn tại.";
}
?>