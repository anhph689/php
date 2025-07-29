<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang thông tin Người dùng</title>
</head>
<body>
    <?php
    //Khởi tạo phiên (session)
    session_start();

    //Kiểm tra xem người dùng đã đăng nhập chưa
    if(!isset($_SESSION['user_id'])){
        //Nếu chưa đăng nhâp, chuyển hướng đến trang đăng nhập
        header("Location: index.php");
    }else{
        //Nếu đã đăng nhập, hiển thị thông tin người dùng
        echo "<h1>Thông tin người dùng</h1>";
        echo "Xin chào. bạn đã đăng nhập thành công !";
    }
    ?>
    <br>
    <a href="logout.php">Đăng xuất</a>
</body>
</html>