<?php
/**
 * Date
 * - Được sử dụng để làm việc với ngày và giờ
 * - PHP cung cấp 1 số hàm và lớp để xử lý và thao tác với ngày và giờ,
 * chẳng hạn như date(), strtotime()
 * - Hàm date_parse: sẽ lấy thông tin cụ thể như
 * năm, tháng, ngày, giờ, phút, giây phục vụ cho quá trình tính toán
 */
//echo date('Y-m-d H:i:s');

// $a = date('Y-m-d H:i:s');
// $b = date_parse($a);
// var_dump($b);

/**
 * Biến cục bộ
 * - Biến toàn cục: có thể được truy cập từ bất cứ nơi nào trong tập lệnh PHP
 * - $GLOBALS: được sử dụng để truy xuất global variables từ bất kỳ đâu trong PHP
 * - PHP lưu trữ tất cả các global variables trong mảng gọi là $GLOBAL[index]
 * với index là tên của biến
 */
// $a = 1;
// $b = 2;
// function test(){
//     global $a, $b, $c;
//     $c = $a + $b;
// }
// test();
// echo $c;

// $a = 100;
// $b = 60;
// function testing(){
//     $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
// }
// testing();
// echo $c;

/**
 * VARIABLE TESTING
 * - PHP xử lý dữ liệu do người dùng cung cấp. Dữ liệu cần được
 * kiểm tra trước khi sử dụng để xác nhận rằng nó tồn tại và có
 * giá trị hợp lệ. PHP cung cấp 1 số cấu trúc dựng sẵn được
 * sử dụng cho mục đích này.
 * - Isset: trả về true nếu biến tồn tại và đã được gán 1 giá trị khác null
 * - Empty: kiểm tra xem biến được chỉ định có giá trị rỗng
 * (empty) hay không - như là null, 0, false hoặc 1 chuỗi
 * rỗng và trả về true nếu đúng
 * - Empty: cũng trả về true nếu điều kiện không tồn tại
 * - Unset: xóa biến khỏi phạm vi hiện tại
 * - Null Coalescing Operator(???) là 1 dạng ngắn gọn của
 * sử dụng toán tử bậc 3 với isset
 * - Variable information: PHP xây dựng sẵn 3 hàm cho việc
 * nhận thông tin về biến: print_r, var_dump và var_export
 * - print_r hiển thị giá trị của biến theo cách mà con người có thể đọc được.
 * Rất hữu ích cho mục đích debug.
 */
// $a = 10;
// var_dump(isset($a));

// $b = false;
// var_dump(empty($b));

// $b = 10;
// unset($b);

// $a = 10;
// $num = isset($a) ? print $a : 'Không biết';

$a = [
    1,2,3,4,5,6,7,8
];
var_export($a);
?>