<?php
include "connection.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "UPDATE sanpham set name = '$name', price = '$price', description = '$description' 
        WHERE id = '$id'";

    if($conn->query($sql)){
        header("Location: ../Frontend/index.php");
    }else{
        echo "Không thể cập nhật được sản phẩm";
    }
}
?>