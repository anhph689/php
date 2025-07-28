<?php
$file_path = "text.txt";

if(file_exists($file_path)){
    $file_content = file_get_contents($file_path);
    echo "<pre>$file_content</pre>";
}else{
    echo "Tệp không tồn tại";
}
?>