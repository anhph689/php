<?php
$upload_dir = "uploads/";

if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

if (isset($_FILES['file'])) {
    $file = $_FILES['file'];

    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];

    $destination = $upload_dir . $file_name;

    if (move_uploaded_file($file_tmp, $destination)) {
        echo "Tệp $file_name đã được tải lên thành công.";
    } else {
        echo "Có lỗi xảy ra khi tải lên tệp $file_name.";
    }
}
?>