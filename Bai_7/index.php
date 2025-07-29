<?php
/**
 * Cookie và Session
 * 1. Cookie
 * - Cookie được sử dụng để lưu trữ thông tin ở phía máy tính của client
 * - Cookie là 1 tập tin nhỏ (4KB) mà webserver chỉ định lưu trữ trên client
 * - Cookie ko bị mất đi khi đóng ứng dụng. Cookie phụ thuộc vào thời gian
 * sống được thiết lập
 * - Cookie thường được thiết lập trên HTTP header
 * - Thiết lập cookie với PHP
 * - Dùng hàm setcookie
 * - Setcookie phải được gọi trước bất kỳ output nào được gửi đến trình duyệt
 * - Setcookie có tổng 5 tham số nhưng thường được chứa 3 tham số
 * chính là name, value và expiration date
 * - Cú pháp (thường sử dụng):
 *   Setcookie("lastvisit", data("H:i:s"), time() + 60*60);
 *   Giải thích các tham số:
 * + Name: tên cookie
 * + Value: được thiết lập bằn hàm update
 * + Expiration date (ngày hết hạn) được đo bằng giây và thường được thiết lập
 * tương đối so với thời gian hiện tại tính bằng giây, được truy xuất
 * thông qua hàm time
 * + Có thể cung cấp thêm 2 đối số tùy chọn: path và domain
 */
$cookie_name = 'user';
$cookie_value = 'Nguyễn Văn An';
setcookie($cookie_name, $cookie_value, time() + (84600 * 30), "/"); //1 ngày = 84600 giây
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!isset($_COOKIE[$cookie_name])){
        echo "Tên cookie của '" . $cookie_name . "' chưa được thiết lập";
    }else{
        echo "Tên cookie " . $cookie_name . " đã được thiết lập <br>";
        echo "Giá trị: " . $cookie_value;
    }
    ?>
</body>
</html>