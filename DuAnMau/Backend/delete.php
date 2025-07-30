<?php
include "connection.php";
if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM sanpham WHERE id = $id";

    if($conn->query($sql)){
        header("Location: ../frontend/index.php");
    }else{
        echo "Không thể xóa sản phẩm";
    }
}
?>