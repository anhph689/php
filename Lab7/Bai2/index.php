<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng nhập</title>
</head>
<body>
    <?php
    //Khởi tạo session
    session_start();

    //Kiểm tra xem người dùng đã đăng nhập chưa
    if(isset($_SESSION['user_id'])){
        //Nếu đã đăng nhập, chuyển hướng đến trang thông tin người dùng
        header("Location: profile.php");
    }

    //Kiểm tra xem người dùng đã gửi biểu mẫu đăng nhập chưa
    if(isset($_POST['login'])){
        //Lấy thông tin đăng nhập từ biểu mẫu
        $username = $_POST['username'];
        $password = $_POST['password'];

        //Thực hiện xác minh thông tin đăng nhập (ở đây chúng ta sử dụng thông tin cứng)
        if($username === 'admin' && $password === '123456'){
            //Nếu đăng nhập thành công, lưu ID người dùng vào phiên
            $_SESSION['user_id'] = 1; //Giả sử có ID người dùng là 1

            //Chuyển hướng đến trang thông tin người dùng
            header("Location: profile.php");
        }else{
            //Nếu đăng nhập không thành công, hiển thị thông báo lỗi
            echo "Đăng nhập không thành công. Vui lòng thử lại.";
        }
    }
    ?>
    <h1>Đăng Nhập</h1>
    <form action="" method="post">
        <label for="username">Tên người dùng:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Mật khẩu:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <input type="submit" name="login" value="Đăng Nhập">
    </form>
</body>
</html>