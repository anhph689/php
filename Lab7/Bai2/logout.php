<?php
//Khởi tạo phiên (session)
session_start();

//Hủy phiên (session)
session_destroy();

//Chuyển hướng đến trang đăng nhập
header("Location: index.php");
?>