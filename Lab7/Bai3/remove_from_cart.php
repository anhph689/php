<?php
session_start();

if(isset($_POST['product_id'])){
    $product_id = $_POST['product_id'];
    if(isset($_SESSION['cart'][$product_id])){
        //Xóa sản phẩm khỏi giỏ hàng
        unset($_SESSION['cart'][$product_id]);
    }
}

//Chuyển hướng trở lại trang danh sách sản phẩm
header("Location: index.php");
?>