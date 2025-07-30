<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <style>
        input[type=text]{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type=submit]{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            border-radius: 4px;
            color: white;
            background-color: green;
            border: none;
        }

        textarea{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <h2>Thêm sản phẩm</h2>
    <form action="../Backend/add_product.php" method="post">
        <label for="name">Tên sản phẩm</label><br>
        <input type="text" name="name" placeholder="Nhập tên sản phẩm" required><br>

        <label for="name">Giá tiền</label><br>
        <input type="text" name="price" placeholder="Nhập giá tiền" required><br>

        <label for="name">Mô tả</label><br>
        <textarea name="description" id="" required></textarea><br>

        <input type="submit" value="Thêm sản phẩm">
    </form>
</body>
</html>