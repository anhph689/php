<?php
//Bài 1: Hàm ẩn danh
// $string = function($world){
//     echo "Hello " . $world;
// };
// $string("World");

// function myCaller($myCallBack){
//     echo $myCallBack();
// }
// myCaller(function(){
//     echo "Hello Friends";
// });

// $a = [1,2,3,4,5];
// $b = array_map(function($n){
//     return $n * $n * $n;
// }, $a);
// print_r($b);

//Bài 2: Generator
// function countToFive(){
//     yield 1;
//     yield from [2,3,4];
//     yield 5;
// }
// foreach(countToFive() as $v)
//     echo $v;
//     echo "</br>";

//Bài 3: Dùng mã PHP để chia chuỗi theo ví dụ sau
//Ví dụ: 082307 => 08:23:07
//Gợi ý: dùng substr và chunk_split
// $a = "082307";
// $chunk = chunk_split($a, 2, ":");
// $chunk = rtrim($chunk, ":");
// echo $chunk;

//Bài 4: Dùng mã PHP để chuyển chuỗi thành các phần tử của mảng
$string = "Twinkle, twinkle, little star,
\nHow I wonder what you are.
\nUp above the world so high,
\nLike a diamond in the sky.";

$array = explode("\n", $string);
echo "<pre>";
var_dump($array);
echo "</pre>";
?>