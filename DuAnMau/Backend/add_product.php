<?php
include 'connection.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "INSERT INTO sanpham(name, price, description) VALUES ('$name', '$price', '$description')";
    if($conn->query($sql) === TRUE){
        header("Location: ../frontend/index.php");
    }else{
        echo "Không thể thêm dữ liệu";
    }
}
?>