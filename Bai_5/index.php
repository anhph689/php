<?php
/**
 * PHP và Form
 * - HTML form có 2 thuộc tính bắt buộc: Action và Method
 * + Action chỉ định tập tin mà dữ liệu từ form được gửi đến khi form submit
 * + Method là phương thức sẽ thực hiện khi submit form
 * - Thuộc tính bắt buộc thứ 2 của form là phương thức gửi, có 2 loại GET và POST
 * - Gửi dữ liệu với POST:
 * + Dữ liệu được gửi sẽ không hiển thị trên thanh url
 * + Khi form được submit, trình duyệt tải trang mypage.php và gửi dữ liệu của form
 * - Gửi dữ liệu với GET:
 * + Phương thức GET sẽ gửi dữ liệu trong url
 * + Dữ liệu gửi đi sẽ được nhận thông qua mảng $_GET
 * - Nếu ko sử dụng $_POST, $_GET thì có thể sử dụng $_REQUEST
 * - Mảng $_REQUEST chứa cả $_GET và $_POST
 * - Nó giúp bạn dễ dàng truy cập các dữ liệu này mà ko cần biết chúng đến từ đâu
 * - Việc chỉnh sửa cac thành phần của $_POST hoặc $_GET
 * hoàn toàn ko ảnh hưởng đến các thành phần của $_REQUEST
 * - Mối quan tâm và bảo mật:
 * + Hỏi dữ liệu để người dùng cung cấp đều cung cấp đều có thể bị thao túng.
 * Do đó càn được xác nhận và cải thiện (sanitized) trước khi sử dụng.
 * + Validation (Xác thực) có nghĩa là đảm bảo rằng dữ liệu
 * cần đúng hình thức mình muốn như kiểm dữ liệu, phạm vi, nội dung.
 * + Dữ liệu đo người dùng cung cấp dưới dạng test, htmlspecialchars
 * sẽ được sử dụng
 * + Htmlspecialchars vô hiệu hóa bất kỳ đánh dấu HTML nào
 * để đầu vào của người dùng hiển thị nhưng ko đc diễn giải
 */
// $email = "example@gmail.com";
// if(filter_var($email, FILTER_VALIDATE_EMAIL)){
//     echo 'Email hợp lệ';
// }else{
//     echo 'Email không hợp lệ';
// }

$input = "<script></script>"
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mypage.php" method="">
        <input type="text" name="Name" />
        <input type="Submit" />
    </form>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mypage.php" method="post">
        <input type="text" name="myString" />
        <input type="submit" />
    </form>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mypage.php" method="get">
        <label for="user">Tên
            <input type="text" name="input_text"/><br><br>
        </label>
        <label for="user">Email
            <input type="email" name="input_email"/><br><br>
        </label>
        <input type="submit" />
    </form>
</body>
</html> -->