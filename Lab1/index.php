<?php
/**
 * Ví dụ về xuất chuỗi, biến
 * 1. Xuất chuỗi
 */
echo "Hello <br>";
echo ("Hello <br>");
echo "Hello World <br>";
echo "Hello", " World <br>";

/**
 * 2. Xuất biến
 */
$str = 'Hello World';
$x = 100;
$y = 1.23;

echo "Chuỗi là : $str <br>";
echo "Số nguyên là : $x <br>";
echo "Số thập phân là : $y <br>";

//3. Tạo biến
$tenBien = "Hello, World!";
echo $tenBien . "<br>";

//4. Kiểm tra số chẵn/lẻ
$soNguyen = 10;
if($soNguyen % 2 == 0){
    echo $soNguyen . " là số chẵn." . "<br>";
}else{
    echo $soNguyen . " là số lẻ." . "<br>";
}

//5. Tính tuổi từ năm sinh
$namHienTai = date("Y");
$namSinh = 2005;

$tuoiNguoiDung = $namHienTai - $namSinh;
echo "Tuổi của bạn là: " . $tuoiNguoiDung . " tuổi" . "<br>";

//6. Tính chỉ số BMI
$chieuCao = 1.75;
$canNang = 70;

$bmi = $canNang / ($chieuCao * $chieuCao);
echo "Chỉ số BMI của bạn là: " . $bmi . "<br>";

if($bmi < 18.5){
    echo "Dưới trọng lượng." . "<br>";
}elseif($bmi >= 18.5 && $bmi < 24.9){
    echo "Bình thường." . "<br>";
}elseif($bmi >= 25 && $bmi < 29.9){
    echo "Thừa cân." . "<br>";
}else{
    echo "Béo phì." . "<br>";
}

//7. Quy đổi tiền tệ
$soTienUSD = 100;
$tyGiaEUR = 0.85; //Tỷ giá USD sang EUR
$tyGiaVND = 23000; //Tỷ giá USD sang VND

$soTienEUR = $soTienUSD * $tyGiaEUR;
$soTienVND = $soTienUSD * $tyGiaVND;

echo "$soTienUSD USD tương đương với $soTienEUR EUR<br>";
echo "$soTienUSD USD tương đương với $soTienVND VND";
?>