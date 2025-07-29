<?php
session_start();

//Kiểm tra nếu giỏ hàng không tồn tại, tạo mới
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

//Thêm sản phẩm vào giỏ hàng nếu có yêu cầu thêm
if(isset($_POST['product_id'])){
    $product_id = $_POST['product_id'];
    if(isset($_SESSION['cart'][$product_id])){
        //Nếu sản phẩm đã tồn tại trong giỏ hàng, tăng số lượng lên 1
        $_SESSION['cart'][$product_id]['quantity']++;
    }else{
        //Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm mới
        $_SESSION['cart'][$product_id] = array(
            'name' => $_POST['product_name'],
            'price' => $_POST['product_price'],
            'quantity' => 1
        );
    }
}

//Hiển thị danh sách sản phẩm và giỏ hàng
//Lấy danh sách sản phẩm từ CSDL hoặc mảng sản phẩm giả định
$products = array(
    1 => array('name' => 'Sản phẩm 1', 'price' => 10.00),
    2 => array('name' => 'Sản phẩm 2', 'price' => 15.00),
    3 => array('name' => 'Sản phẩm 3', 'price' => 20.00),
)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang bán hàng</title>
</head>
<body>
    <h1>Danh sách sản phẩm</h1>
    <ul>
        <?php foreach ($products as $id => $product): ?>
            <li>
                <?php echo $product['name']; ?> - $<?php echo $product['price'] ?>
                <form action="index.php" method="post">
                    <input type="hidden" name="product_id" value="<?php echo $id; ?>">
                    <input type="hidden" name="product_name" value="<?php echo $product['name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $product['price']; ?>">
                    <input type="submit" value="Thêm vào giỏ hàng">
                </form>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Giỏ hàng</h2>
    <table>
        <tr>
            <th>Sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tổng cộng</th>
            <th>Xóa</th>
        </tr>
        <?php
        $total_price = 0;
        foreach($_SESSION['cart'] as $product_id => $product):
            $subtotal = $product['price'] * $product['quantity'];
            $total_price += $subtotal;
        ?>
        <tr>
            <td><?php echo $product['name']; ?></td>
            <td>$<?php echo $product['price']; ?></td>
            <td><?php echo $product['quantity']; ?></td>
            <td>$<?php echo $subtotal; ?></td>
            <td>
                <form action="remove_from_cart.php" method="post">
                    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                    <input type="submit" value="Xóa">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3">Tổng cộng:</td>
            <td>$<?php echo $total_price; ?></td>
            <td></td>
        </tr>
    </table>
</body>
</html>