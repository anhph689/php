<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "products";

$conn = new mysqli($server, $username, $password, $db_name);

if($conn->connect_error){
    die("Kết nối thất bại" . $conn->connect_error);
}
?>