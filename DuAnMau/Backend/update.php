<?php
include "connection.php";
if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM sanpham WHERE id = $id";
    $result = $conn->query($sql);
    if($result){
        if($result->num_rows > 0){
            $product = $result->fetch_assoc();
        }else{
            echo 'Không có sản phẩm';
        }
    }else{
        echo 'Lỗi truy vấn';
    }
}

$conn->close();
?>