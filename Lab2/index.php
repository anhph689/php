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
echo "Điểm số: " . $hocSinhBatKy["diem"];
?>