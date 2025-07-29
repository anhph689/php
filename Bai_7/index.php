<?php
/**
 * Cookie và Session
 * 1.1 Cookie
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
 * - Để sửa đổi cookie chỉ cần đặt lại cookie bằng hàm setcookie()
 * - Có thể xóa cookie theo cách thủ công bằng cách tạo lại cookie đó
 * với ngày hết hạn cũ. Sau đó, nó sẽ bị gỡ bỏ khi đóng trình duyệt
 * Ví dụ: setcookie("lastvisit", 0, 0);
 * - Hoặc điều chỉnh thời gian hết hạn:
 *   setcookie("user", "", time() - 3600);
 * - Kiểm tra cookie có được bật hay không: count($_COOKIE) > 0
 * 1.2 Cookie array
 * - CÓ thể đặt cookie cho người dùng (user), cookie này sẽ được gửi
 * cùng lần tiếp theo khi người dùng đó xem 1 trang trên cùng
 * domain. Sau đó, nó có thể được truy cập thông qua mảng $_COOKIE
 * 2. SESSION
 * - Session là cách để lưu trữ thông tin vào trong các biến trên nhiều pages
 * - Biến session lưu trữ thông tin người dùng được sử dụng trên nhiều page
 * (username, shopping cart,...)
 * - Biến session kéo dài cho đến khi người dùng đóng trình duyệt
 * 2.1 Bắt đầu bằng session
 * - Để bắt đầu session, sử dụng hàm session_start. Hàm này phải xuất hiện
 * trước bất kỳ output nào được gửi đến web
 * - Hàm session_start đặt trên máy tính của khách hàng, chứa 1 id
 * được sử dụng để liên kết máy khách với phiên. Nếu máy khách đã
 * có 1 phiên đang diễn ra, chức năng sẽ tiếp tục phiên đó thay vì
 * bắt đầu bằng 1 phiên mới
 * 2.2 Session array
 * - Khi phiên bắt đầu, mảng $_SESSION được sử dụng để
 * lưu trữ dữ liệu phiên cũng như truy xuất dữ liệu đó.
 * 2.3 Xóa session
 * - Một session được đảm bảo sẽ kéo dài cho đến khi người dùng rời
 * khỏi trang web. Sau đó, trình thu gom rác có quyền xóa session đó.
 * - Để loại bỏ 1 biến session theo cách thủ công, có thể sử dụng
 * hàm unset. Để loại bỏ tất cả các biện pháp, có hàm session_destroy
 */
// $cookie_name = 'user';
// $cookie_value = 'Nguyễn Văn An';
// setcookie($cookie_name, $cookie_value, time() + (84600 * 30), "/"); //1 ngày = 84600 giây

session_start();
?>

<!-- <!DOCTYPE html>
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
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //session_start();

    if(isset($_SESSION['views'])){
        $_SESSION['views'] += 1;
        echo 'Views: ' . $_SESSION['views'];
    }else{
        $_SESSION['views'] = 1;
    }

    unset($_SESSION['views']);
    ?>
</body>
</html>