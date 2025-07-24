<?php
//1. Tạo mảng và truy cập các phần tử trong mảng
$tenList = array("John", "Mary", "David", "Alice", "Robert");
$index = rand(0, count($tenList) - 1);
$tenNgauNhien = $tenList[$index];
echo "Tên ngẫu nhiên từ mảng là: " . $tenNgauNhien . "<br>";

//2. Đếm số phần tử trong mảng
$myArray = array("apple", "banana", "cherry", "date", "fig");
$soLuong = count($myArray);
echo "Số lượng phần tử trong mảng là: " . $soLuong . "<br>";

//3. Tìm GTLN và GTNN trong mảng
$array = array(15, 3, 9, 25, 7, 11, 4);
$max = $array[0];
$min = $array[0];

foreach($array as $so){
    if($so > $max){
        $max = $so;
    }
    if($so < $min){
        $min = $so;
    }
}

echo "Giá trị lớn nhất trong mảng là: " . $max . "<br>";
echo "Giá trị nhỏ nhất trong mảng là: " . $min . "<br>";

//4. Tìm các số chẵn trong mảng
$array = array(15, 3, 9, 25, 7, 11, 4, 8, 10);
foreach($array as $so){
    if($so % 2 == 0){
        $soChanArray[] = $so;
    }
}
echo "Các số chẵn trong mảng là: " . "<br>";
foreach($soChanArray as $soChan){
    echo $soChan . "" . "<br>";
}

//5. Tìm phần tử trong mảng
$array = array(15, 3, 9, 25, 7, 11, 4, 8, 10);
$phanTuCanTim = 11;

for($i = 0; $i < count($array); $i++){
    if($array[$i] == $phanTuCanTim){
        echo "Phần tử $phanTuCanTim được tìm thấy tại vị trí $i trong mảng." . "<br>";
        break;
    }
}

if($i == count($array)){
    echo "Không tìm thấy phần tử $phanTuCanTim trong mảng." . "<br>";
}

//6. Tạo mảng đa chiều
$hocSinh = array(
    array(
        "ten" => "Nguyễn Văn A",
        "tuoi" => 15,
        "diem" => 8.5
    ),
    array(
        "ten" => "Trần Thị B",
        "tuoi" => 16,
        "diem" => 9.2
    ),
    array(
        "ten" => "Lê Văn C",
        "tuoi" => 15,
        "diem" => 7.8
    ),
);

$hocSinhBatKy = $hocSinh[1];
echo "Tên học sinh: " . $hocSinhBatKy["ten"] . "<br>";
echo "Tuổi: " . $hocSinhBatKy["tuoi"] . " tuổi<br>";
echo "Điểm số: " . $hocSinhBatKy["diem"] . "<br>";

//7. Sử dụng cấu trúc điều kiện if-else
$soNguyen = 25;
if($soNguyen % 2 == 0){
    echo $soNguyen . " là số chẵn." . "<br>";
}else{
    echo $soNguyen . " là số lẻ." . "<br>";
}

//8. Sử dụng vòng lặp for
for($i = 1; $i <= 10; $i++){
    echo "Bảng cửu chương của $i:<br>";
    for($j = 1; $j <= 10; $j++){
        $ketQua = $i * $j;
        echo "$i x $j = $ketQua<br>";
    }
    echo "<br>";
}

//9. Sử dụng vòng lặp while
$tong = 0;
$i = 1;

while($i <= 100){
    $tong += $i;
    $i++;
}

echo "Tổng của các số tự nhiên từ 1 đến 100 là: " . $tong . "<br>";

//10. Sử dụng cấu trúc điều kiện switch
$diem = 85;
switch(true){
    case($diem >= 90):
        $xepLoai = "A";
        break;
    case($diem >= 80):
        $xepLoai = "B";
        break;
    case($diem >= 70):
        $xepLoai = "C";
        break;
    case($diem >= 60):
        $xepLoai = "D";
        break;
    default:
        $xepLoai = "F";
        break;
}

echo "Xếp loại của điểm số $diem là: $xepLoai" . "<br>";

//11. Sử dụng cấu trúc điều kiện lồng nhau
$nam = 2024;
if(($nam % 4 == 0 && $nam % 100 != 0) || ($nam % 400 == 0)){
    echo "$nam là năm nhuận." . "<br>";
}else{
    echo "$nam không là năm nhuận." . "<br>";
}

//12. Sử dụng vòng lặp foreach
$array = array(10, 20, 30, 40, 50);
$tong = 0;

foreach($array as $so){
    $tong += $so;
}

echo "Tổng của các số trong mảng là: " . $tong . "<br>";

//13. Sử dụng vòng lặp do-while
// $soNguyen = (int)readline("Nhập một số nguyên: ");
// if($soNguyen <= 0){
//     echo "Số bạn đã nhập không hợp lệ. Vui lòng nhập một số nguyên dương.";
// }else{
//     $i = 1;
//     do{
//         $ketQua = $soNguyen * $i;
//         echo "$soNguyen x $i = $ketQua\n";
//         $i++;
//     }while($i <= 10);
// }

//14. Kết hợp cấu trúc điều kiện và vòng lặp
for($i = 1; $i <= 100; $i++){
    if($i % 3 == 0 && $i % 5 == 0){
        echo "FizzBuzz";
    }elseif($i % 3 == 0){
        echo "Fizz";
    }elseif($i % 5 == 0){
        echo "Buzz";
    }else{
        echo $i . "";
    }
}
?>