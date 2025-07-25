<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang web đơn giản</title>
</head>
<body>
    <h1>Chào mừng bạn đến với trang web đơn giản</h1>
    <p>Nhập một số vào ô dưới đây và nhấn nút "Tính bình phương"</p>
    <form action="process.php" method="post">
        <label for="number">Số:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Tính bình phương">
    </form>
</body>
</html>