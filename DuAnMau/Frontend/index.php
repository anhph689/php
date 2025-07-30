<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị sản phẩm</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2{
            color: #333;
        }

        .product{
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
        }

        .price{
            color: #000;
            font-weight: 600;
        }

        .update{
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <h2>Hiển thị sản phẩm</h2>
    <?php
    include '../Backend/show.php';
    ?>
</body>
</html>