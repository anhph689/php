<?php
include 'connection.php';

$sql = "SELECT * FROM sanpham";
$result = $conn->query($sql);

if($result -> num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<div class='product'>";
        echo "<h3>{$row['id']}</h3>";
        echo "<p>{$row['name']}</p>";
        echo "<p class='price'>{$row['price']}</p>";
        echo "<p>{$row['description']}</p>";
        echo "<a class='update' href='../Frontend/update_frontend.php?id={$row['id']}'>Cập nhật sản phẩm</a>";
        echo "<a href='../Backend/delete.php?id={$row['id']}'>Xóa sản phẩm</a>";
        echo "</div>";
    }
}
?>