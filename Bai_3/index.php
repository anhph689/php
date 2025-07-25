<?php
//Hàm
/**
 * Là các khối mã có thể tái sử dụng và chỉ thực thi khi được gọi.
 * Bao gồm: Hàm có sẵn và hàm tự định nghĩa
 * Tạo hàm: sử dụng từ khóa function, theo sau là tên hàm, dấu ngoặc đơn và 1 khối mã
 * Được phép gội hàm trước khi khai báo hàm thực hiện
 */
// function hello(){
//     echo "Hello world";
// }
// hello();

//Hàm có tham số và trả về kết quả
// function HinhChuNhat($chieudai , $chieurong){
//     return $chieudai * $chieurong;
// }
// echo "Diện tích hình chữ nhật: ". HinhChuNhat(10, 20);

//Hàm có tham số tùy chọn
/**
 * - Có thể chỉ định các giá trị mặc định cho các tham số bằng cách gán cho chúng
 * một giá trị bên trong danh sách các tham số
 * - Nếu đổi số đó ko được chỉ định hàm được gọi, thì giá trị mặc định
 * sẽ đucợ sử dụng thay thế
 */
// function helloWorld($x , $y = 'World'){
//     echo $x . $y;
// }
// helloWorld('Hello');

//Name arguments (đối số được đặt tên)
/**
 * - Cho phép 1 đối số được truyền theo bất kỳ thứ tự nào bằng cách chỉ định
 * tên của tham số tương ứng với nó.
 * - Tính năng này bổ sung cho optional parameter bằng cách
 * cho phép bỏ qua các giá trị mặc định
 */
// function value($a, $b = 2, $c = 3){
//     echo $a . ' ' . $b . ' ' . $c;
// }
// value(5, 8, 9);

//Variable parameter lists (Danh sách các tham biến)
/**
 * - func_get_arg : để nhận 1 đối số tại 1 thời điểm. Hàm này
 * nhận 1 đối số duy nhất, là tham số được trả về, bắt đầu bằng 0
 * - func_num_args: nhân số lượng đối số đucợ truyền vào
 * - func_get_args: trả về 1 mảng chứa tất cả các đối số đó.
 */
// function value(){
//     $args = func_get_args();
//     $num = func_num_args();

//     for($i = 0; $i < $num; $i++){
//         echo $args[$i];
//     }
// }
// value(1,6,8);

//Variadic parameter (tham số mặc định)
/**
 * Variadic parameter hoạt động như 1 mảng và 
 * phải luôn là tham số cuối cũng trong danh sách.
 */
// function arg(...$args){
//     foreach($args as $val){
//         echo $val;
//     }
// }
// arg(1,2,3,4,5);

/**
 * Anonymous function (Hàm ẩn danh):
 * - Cho phép hàm được truyền dưới dạng đối số và đucợ gán cho 1 bên
 * - Biến sau đó có thể được gọi như 1 hàm.
 */
// $a = function($name){
//     echo "Hello " . $name;
// };
// $a('World');

/**
 * Array_map(): trả về 1 mảng chứa tất cả các phần tử của mảng
 * sau khi đã áp dụng hàm callback
 */
// function value($n){
//     return ($n * $n * $n);
// }
// $a = [1,2,3,4,5];
// $b = array_map('value', $a);
// print_r($b);

/**
 * Closure
 * - Là 1 hàm ẩn danh (anynomous function) và nó có thể truy cập các
 * biến bên ngoài phạm vi và nó được tạo ra
 * - Closure function sẽ có từ khóa use phía sau tên của hàm.
 */
// $x = 1;
// $y = 2;

// $value = function ($z) use ($x, $y){
//     return $x + $y + $z;
// };

// echo $value(3);

/**
 * Arrow function
 * - Là 1 cú pháp ngắn gọn hơn của hàm ẩn danh
 * - Dùng từ khóa fn thay cho funtion
 * - Chỉ cho phép 1 biểu thức trả về duy nhất và ko sử dụng từ khóa return.
 */
// $x = 1;
// $y = 2;

// $value = fn ($z) => $x + $y + $z;
// echo $value(3);

/**
 * Generator
 * - Là 1 hàm được sử dụng để tạo ra 1 dãy các giá trị
 * - Mỗi giá trị trả về với lệnh yield
 * - Yield lưu trạng thái của hàm, cho phép tiếp tục (từ vị trí đã dùng) khi được gọi lại
 */
// function getNumbers(){
//     for ($i=0; $i < 5; $i++) { 
//         yield $i;
//     }
// }

// $numbers = getNumbers();
// foreach($numbers as $number){
//     echo $number . ' ';
// }

/**
 * Hàm xử lý chuỗi
 * - PHP tích hợp sắn 1 số hàm để xử lý và thao tác trên chuỗi
 */
//$a = 'String';

//Hàm tìm kiếm và thay thế
// $b = str_replace('i', 'o', $a);
// echo $b;

//Hàm chèn thêm từ vào vị trí
// $c = substr_replace($a, 'My ', 0, 0);
// echo $c;

//Hàm lấy ký tự trong chuỗi
// $d = substr($a, 0, 3);
// echo $d;

//Hàm tìm vị trí dựa theo ký tự
// $e = strpos($a, 'i');
// echo $e;

//Hàm lấy độ dài của chuỗi
// $i = strlen($a);
// echo $i;

/**
 * Kiểu hàm trả về
 * - PHP7 hỗ trợ khai báo kiểu trả về của hàm
 * - Kiểu trả về của hàm được khai báo sau danh sách tham số, bắt đầu bằng dấu hai chấm (:)
 */
// function sum($a, $b): float{
//     return $a + $b;
// }

// var_dump(sum(1, 2));

/**
 * Kiểu nullable
 * - Từ PHP7.1, một kiểu khai báo được đánh dấu là nullable bằng
 * cách đặt trước kiểu đó bằng dấu chấm hỏi (?)
 * - Kiểu nullable cho phép giữ null ngoài bất kỳ giá trị kiểu nào được chỉ định
 */
// function nullable(?int $i){
//     $i == null ? print 'null' : print 'int';
// };

// nullable(0);

/**
 * PHP và HTML
 * - Người dùng yêu cầu 1 trang (page) bằng cách nhập vào URL
 * Ví dụ: localhost://php/index.php
 * - Máy chủ chạy mã index.php (root của site). Kết quả của quá trình này là HTML code
 * - HTML code được gửi đến client thông qua internet
 * - HTML code được thông dịch, sau đó kết cuất được hiển thị trong trình duyệt (browser)
 */
// print "<html>";
// print "<head><title>Document</title>";
// print "<body>";
// print "<h1>Hello World</h1>";
// print "</body>";
// print "</html>";
?>

<!-- HTML trong PHP -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //print "<h1>Hello World, my name is Hoang Anh</h1>"

    // $a = 25;
    // $b = 36;

    // if($a > $b){
    //     echo "Biến a lớn hơn biến b";
    // }else{
    //     echo "Biến a nhỏ hơn biến b";
    // }

    for ($i=0; $i <= 6; $i++) { 
        echo "Đây là số " . $i . "</br>";
    }
    ?>
</body>
</html>