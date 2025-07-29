<?php
//Tạo Cookie với thời gian tồn tại 1 giờ
$cookie_name = "my_cookie";
$cookie_value = "Hello, this is my cookie!";
$cookie_expire = time() + 3600; //3600 giây = 1 giờ;

setcookie($cookie_name, $cookie_value, $cookie_expire);

//Tạo Phiên với thời gian tồn tại 30 phút
session_start();
$session_expire = 1800; //1800 giây = 30 phút

if(isset($_SESSION['start_time'])){
    $elapsed_time = time() - $_SESSION['start_time'];
    if($elapsed_time > $session_expire){
        //Phiên hết hẹn, đăng xuất người dùng hoặc làm gì đó khác
        session_unset();
        session_destroy();
    }
}

$_SESSION['start_time'] = time();

//Hiển thị thời gian còn lại của Cookie và Phiên
$cookie_expires_in = 60;
$session_expires_in = 45;

$cookie_expire_in = round(($cookie_expire - time()) / 60); //Đổi sang phút
$session_expire_in = round(($session_expire = $elapsed_time) / 60); //Đổi sang phút
echo "Thời gian còn lại của Cookie: {$cookie_expires_in} phút<br>";
echo "Thời gian còn lại của Phiên: {$session_expires_in} phút"
?>