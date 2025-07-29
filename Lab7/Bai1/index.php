<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Ẽample</title>
</head>
<body>
    <?php
    //Kiểm tra xem người dùng đã gửi biểu mẫu chưa
    if(isset($_POST['submit'])){
        //Lấy tên người dùng từ biểu mẫu
        $username = $_POST['username'];

        //Tạo 1 cookie với tên là "user" và giá trị là tên người dùng
        setcookie("user", $username, time() + 3600, "/"); //Thời gian tồn tại của cookie: 1 giờ

        //Hiển thị thông báo người dùng
        echo "Xin chào, $username! Tên của bạn được lưu.";
    }else{
        //Nếu người dùng chưa gửi biểu mẫu, hiển thị biểu mẫu nhập tên người dùng
        echo '<form method="post" action="">
                Tên người dùng: <input type="text" name="username">
                <input type="submit" name="submit" value="Lưu">
              </form>';
    }
    ?>
    <br>
    <?php
    //Kiểm tra xem cookie "user" đã được lưu trữ hay chưa
    if(isset($_COOKIE['user'])){
        //Lấy giá trị tên người dùng từ cookie
        $savedUsername = $_COOKIE['user'];
        echo "Tên người dùng đã lưu từ cookie: $savedUsername";
    }
    ?>
</body>
</html>