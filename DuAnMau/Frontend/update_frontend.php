<?php
include "../Backend/update.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật sản phẩm</title>
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
    <h2>Cập nhật sản phẩm</h2>
    <form action="../Backend/edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
        <label for="name">Tên sản phẩm</label><br>
        <input type="text" name="name" value="<?php echo $product['name'] ?>" placeholder="Nhập tên sản phẩm" required><br>

        <label for="name">Giá tiền</label><br>
        <input type="text" name="price" value="<?php echo $product['price'] ?>" placeholder="Nhập giá tiền" required><br>

        <label for="name">Mô tả</label><br>
        <textarea name="description" id="" required><?php echo $product['description'] ?></textarea><br>

        <input type="submit" value="Cập nhật sản phẩm">
    </form>
</body>
</html>