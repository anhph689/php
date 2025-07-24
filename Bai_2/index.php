<?php
//I. Mảng và hằng số
/**
 * 1. Mảng
 * - Mảng được sử dụng để lưu trữ một tập các giá trị trong cũng 1 biến duy nhất.
 * - Mảng trong PHP bao gồm cặp key-value.
 * - Key (khóa) có thể là 1 số nguyên (mảng có - numeric array),
 * một chuỗi (mảng kết hợp) hoặc cả hai (mảng hỗn hợp).
 * - Value có thể là bất kỳ kiểu dữ liệu nào.
 * - Mảng được tạo bằng cách sử dụng array constructor
 * - Có thể khai báo mảng bằng cách ngắn hơn đó là bằng cặp ngoặc vuông
 */
//Cách thứ nhất
//$a = array(1,2,4,5);

//Cách thứ hai
//$b = [1,2,4,5,6,7];

/**
 * 1.1 Mảng liên kết
 * - Khóa là 1 chuỗi thay vì 1 số nguyên. Key chính là cung cấp tên cho phần tử này thay vì dùng số.
 * - Khi tạo mảng liên kết, sử dụng toán tử mũi tên kép để biết được khóa này tham chiếu đến giá trị nào.
 * - PHP ko phân biệt mảng liên kết và mảng số, do đó các
 * phần tử của mỗi loại có thể đucợ kết hợp trong cùng 1 mảng
 * 
 */
// $a = array(
//     "một" => 1,
//     "hai" => 2,
//     "ba" => '3'
// );
// var_dump($a);

// $b = [
//     1 => "Hello",
//     'Hai' => 2,
//     3 => 3
// ];
// var_dump($b);

/**
 * 1.2 Mảng đa chiều
 * Mảng đa chiều là 1 mảng có chứa mảng khác
 * Thường xuất hiện trong các bài tập hay dự án liên quan đến ma trận
 */
// $a = [
//     [1,2,3,4,5],
//     ['Java', 'Python', 'PHP']
// ];
// echo $a[0][0] .' '. $a[1][0] .' '. $a[1][2];

/**
 * 2. Hằng số
 * Hằng (constant): là 1 biến với giá trị ko thay đổi trong quá trình thực thi
 * PHP cung cấp 2 phương pháp tạo hằng:
 * - Const modifier
 * - Hàm define
 */

//Const
//const PI = 3.14;

//Define function
//define('PI', 3.14);

//II. Các kiểu câu điều khiển
/**
 * 1. Cấu trúc câu điều khiển
 * Cấu trúc câu điều khiển: Các câu lệnh điều khiển đucợ sử dụng để thực thi các khối mã khác nhau
 * dựa trên các điều kiện khác nhau
 */
//1.1 Cấu trúc điều khiển IF
// $x = 2;
// if($x == 1){
//     echo "X bằng 1";
// }elseif($x == 2){
//     echo "X bằng 2";
// }else{
//     echo "X là giá trị khác";
// }

/**
 * 1.2 Switch case
 * Sử dụng để kiểm tra 1 giá trị và đưa ra quyết định dựa trên kết quả
 * của việc so khớp giá trị
 */
// $x = 3;
// switch($x){
//     case 1:
//         echo 'X bằng 1';
//         break;
//     case 2:
//         echo 'X bằng 2';
//         break;
//     case 3:
//         echo 'X bằng 3';
//         break;
//     default:
//         echo 'X thuộc giá trị khác';
//         break;
// }

/**
 * 1.3 Toán tử bậc hai
 * Toán tử này có thể thay thế mệnh đề if/else. Toán tử cần 3 giá trị.
 * Nếu câu đầu tiên đánh giá là true, thì biểu thức thứ 2 là giá trị trả về,
 * và nếu là false, cái thứ 3 được trả về.
 */
// $x = 10;
// ($x >= 10) ? print 'X lớn hơn hoặc bằng 10 ' : print 'X khác 10';

/**
 * 2. Vòng lặp
 * 2.1 While
 * - Chỉ chạy qua khối mã nếu điều khiển của nó là true
 * - Lưu ý rằng điều kiện chỉ được kiểm tra khi bắt đầu mỗi lần lặp
 */
// $i = 0;
// $num = 50;

// while($i < 10){
//     $num--;
//     $i++;
// }
// echo "Vòng lặp dừng i = $i và num = $num";

/**
 * 2.2 Do while
 * Kiểm tra điều kiện sau khối mã. Do đó, do...while chạy qua khối mã ít nhất 1 lần.
 */
// $a = 1;
// do{
//     echo nl2br("Số thứ tự : $a\n");
//     $a++;
// }while($a <= 5);

/**
 * 2.3 For
 * - Sử dụng lặp lại 1 khối mã và chạy nó đến khi điều kiện được đáp ứng
 * - Được sử dụng nếu có số lần lặp được biết trước
 */
// $a = array(1,2,3);
// for($i=0; $i < sizeof($a); $i++){
//     echo $a[$i];
// }

/**
 * 2.4 Foreach
 * Sử dụng để duyệt qua các phần tử của mảng
 */
// $a = [
//     'Messi', 'M10', "GOAT"
// ];

// foreach($a as $c){
//     echo $c . ' ';
// }

/**
 * 3. Break, COntinue
 * 3.1 Break
 * Kết thúc quá trình thực thi vòng lặp
 */
// $i = 0;
// while($i < 5){
//     $i++;
//     if($i == 3) break;
// }

// echo "Vòng lặp sẽ dừng khi i = $i.";

/**
 * 3.2 Continue
 * Tạm dừng việc lặp lại hiện tại của vòng lặp nhưng nó không kết thúc vòng lặp.
 */
// $array = [1,2,3,4,5];
// foreach($array as $value){
//     if($value == 3) continue;
//     echo nl2br("Số thứ tự $value\n");
// }

/**
 * 4. Goto
 * Goto: thực hiện bước nhảy đến label được chỉ định
 * Label: là 1 tên, phía sau có dấu hai chấm (:)
 */
$a = 1;
if($a == 5){
    goto end;
}

echo nl2br("Chương trình không được thực hiện vì ko thỏa mãn điều kiện\n");

end:
echo "Chương trình kết thúc"
?>