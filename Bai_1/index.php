<?php
//I. Làm quen với PHP
//1. Lệnh chú thích (Comment)
//Không biên dịch được trên server
//Gõ 2 dấu // hoặc /** */ ở đầu hoặc sử dung tổ hợp phím Ctrl + /

//Ghi chú thích tại đây

/**
 * Hoặc chú thích tại đây
 * 
 */

//Chú thích (Commment)
//echo "Hello world";

//2. Chuỗi giá trị
//Echo và print

//Đối với print
//print true;

//3. Khai báo biến
// $message = "Hello World";
// echo $message;

//4. Các kiểu dữ liệu
//Kiểu số nguyên(Interger - Int)
// $int = 1000;
// echo $int;

//Kiểu số thập phân(Float)
// $float = 1.6868;
// echo $float;

//Kiểu dữ liệu Boolean
// $boolean = true; //hoặc false
// echo $boolean;

//Kiểu dữ liệu null
// $null = null;
// echo $null;

//Kiểu dữ liệu chuỗi(String)
// $string = "Hello ";
// $b = "World";
// echo $string .= $b;

//II. Toán tử, kiểu và ép kiểu
//1. Các toán tử trong PHP
//Toán tử cộng
// $x = 123 + 45;
// echo $x;

//Toán tử trừ
// $y = 888 - 66;
// echo "Kết quả là: " . $y;

//Toán tử nhân
// $z = 55 * 16;
// echo "Kết quả là: " . $z;

//Toán tử chia
// $t = 20 % 3;
// echo "Kết quả là: " . $t;

//Toán tử lũy thừa
// $k = 4**2;
// echo "Kết quả là: " . $k;

//2. Toán tử gán kết hợp
/**
 * Là sử dụng toán tử gán (=) kết hợp với các toán tử số học
 * như là cộng, trừ, nhân, chia, lũy thừa
 */
// $x = 5;
// $x -= 3; //$x = $x - 3
// echo $x;

//3. Toán tử tăng, giảm
/**
 * Được sử dụng để tăng hoặc giảm giá trị
 * Sử dụng phía trước hoặc sau một biến
 * 
 * - Sử dụng phía trước biến (Tiền tố)
 * Thay đổi biến trước và sau đó trả về giá trị
 * 
 * - Sử dụng phía sau biến (Hậu tố)
 * Trả về giá trị gốc trước khi nó thay đổi biến
 */
//Tiền tố
// $x = 1;
// $y = ++$x;

// echo "Kết quả là: " . $y;

//Hậu tố
// $a = 10;
// $c = $a--;

// echo "Kết quả là: " . $a;

//4. Toán tử so sánh
/**
 * Khi thực hiện so sánh 2 giá trị, sẽ trả về true hoặc false
 */
// $x = (2 == 3); //False
// echo $x;

// $y = (2 != 3); //True
// echo $y;

// $z = (2 <> 3); //False
// echo $z;

// $t = (2 !== 3); //True
// echo $t;

// $k = (2 > 3); //False
// echo $k;

// $j = (2 < 3); //True
// echo $j;

// $h = (3 >= 3); //True
// echo $h;

// $g = (4 <= 4); //True
// echo $g;

/**
 * Thực hiện so sánh cả kiểu dữ liệu vè giá trị
 */
// $x = (2 === '2');
// var_dump($x);

//5. Toán tử so sánh Spaceship Operator
/**
 * So sánh 2 giá trị và trả về 0 nếu cả 2 bằng nhau, 
 * 1 nếu giá trị bên trái lớn hơn và -1 nếu giá trị bên phải lớn hơn
 */
// $x = 2 <=> 4;
// echo $x;

//6. Toán tử logic
/**
 * && là true nếu cả bên trái và bên phải là true
 * || là true nếu cả bên trái và bên phải là true
 */

//Đối với &&
// $a = 10;
// $b = 40;

// if($a > 10 && $a > $b){
//     echo "Đã đủ điều kiện . ";
// }else{
//     echo "Chưa đủ điều kiện";
// }

//Đối với ||
// $a = 10;
// $b = 40;

// if($a >= 10 || $a > $b){
//     echo "Đã đủ điều kiện . ";
// }else{
//     echo "Chưa đủ điều kiện";
// }

//7. Ký tự đặc biệt
/**
 * Được sử dụng để viết các ký tự đặc biệt như
 * backslashes (dấu gạch chéo ngược), dòng mới, dấu ngoặc đơn,...
 */
// $a = "Hello\nWorld";
// echo nl2br($a);

// $b = "Hello\tWorld";
// echo nl2br($b);

// $c = "Hello\fWorld";
// echo nl2br($c);

/**
 * Các ký tự trong chuỗi có thể đucợ tham chiếu bằng cách chỉ định
 * index(chỉ số) của ký tự mong muốn trong dấu ngoặc vuông sau biến chuỗi
 * Có thể được sử dụng để truy cập và sửa đổi các ký tự đơn lẻ
 */
// $a = "Hello";
// $a[0] = 'J';

// echo $a;

//8. Biến và biến của biến
/**
 * - Biến là 1 tên đại diện cho 1 giá trị và
 * có thể thay đổi trong quá trình thực thi chương trình
 * - Biến của biến là một khái niệm cho phép
 * bạn sử dụng giá trị của 1 biến để định nghĩa tên của 1 biến khác
 */
// $a = "Hello";
// $$a = "World";

// echo $$a;

//9. Ép kiểu
/**
 * - PHP tự động chuyển đổi kiểu dữ liệu của 1 biến khi cần thiết
 * dựa trên ngữ cảnh mà nó được sử dụng
 * - Tuy nhiên, kiểu của 1 biến haocwj biểu thức có thể được thay đổi bằng cách
 * thực hiện ép kiểu trong PHP
 */
//Kiểu boolean
$boolean = true;

//Kiểu số nguyên
$int = (int)$boolean;

var_dump($int);
?>