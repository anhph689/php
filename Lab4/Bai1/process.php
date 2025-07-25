<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $so = $_POST["number"];
    $binhPhuong = $so * $so;

    echo "<h1>Kết quả</h1>";
    echo "<p>Bình phương của số $so là: $binhPhuong</p>";
}
?>