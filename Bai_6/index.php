<?php
/**
 * File inclution
 * - Mã(code) giống nhau cần được gọi trên nhiều trang. Điều này
 * có thể thực hiện bằng cách đặt các mã giống nhau trong một
 * tập tin. Sau đó chèn tập tin đó bằng lệnh include.
 * - Include lấy tất cả văn bản trong tập tin được chỉ định chèn đến
 * vị trí đã include
 * - Inlude là 1 cấu trúc đặc biệt và không phải là hàm,
 * vì vậy ko nên sử dụng dấu ngoặc đơn khi include tập tin.
 * - Include path: tập tin cần include có thể được chỉ định
 * bằng đường dẫn tương đối (relative path), đường dẫn
 * tuyệt đối (absolute) hoặc không đường dẫn (without a path).
 * + Relative path: liên quan đến thư mục của tập tin
 * + Absolute path: đường dẫn đầy đủ của tập tin
 * - Ngoài Include ra còn có require, include_once và required_once
 * + Require: Khi quá trình import tập tin chỉ định ko thành công > tạm dừng
 * các tập lệnh có lõi bằng cách phát ra các warning.
 * + Include_once: Hoạt động giống include
 * + Require_once: Hoạt động giống require
 */
//include 'mypage.php';

//Relative path:
//include 'Bai_6/mypage.php';

//Absolute path:
//include 'D:/www/PHP/Bai_6/mypage.php';

// if((require 'mypage.php') == 'Oke'){
//     echo 'Oke';
// }else{
//     echo 'Not oke';
// }

/**
 * LÀM VIỆC VỚI HỆ THỐNG TẬP TIN
 * - Magic constants . $_FILE_
 * + FILE: ho biết đường dẫn tuyệt đối của tập tin đang chạy
 * + DIR: Thư mục chứa file PHP đang chạy (thực thi)
 * + Mkdir: tạo thư mục
 * + Rename: đối tên thư mục
 * + Rmdir: xóa thư mục
 * - Đọc tập tin và folders bên trong thư mục
 */
//FILE:
//echo "Tập tin hiện tại " . __FILE__;

//DIR:
//echo "Tập tin hiện tại " . __DIR__;

//Mkdir:
//mkdir('test');

//Rename
//rename('test','new');

//Rmdir
//rmdir('new');

//Đọc tập tin
// $files = scandir('./');

// echo "<pre>";

// var_dump($files);
// echo "</pre>";

/**
 * LÀM VIỆC VỚI HỆ THỐNG TẬP TIN (tiếp)
 * - file_get_contents: lấy nội dung của tập tin
 * - file_put_contents: ghi nội dung vào tập tin.
 * Nếu tập tin ko tồn tại, hàm sẽ tạo file và ghi nội dung vào đó.
 * - File_exists: kiểm tra tập tin có tồn tại hay ko. Nếu có trả về true
 * - Filesize: lấy kích thước của tập tin
 * - Unlink: xóa tập tin
 */
// $lorem = file_get_contents('lorem.txt');
// echo $lorem;
// echo '</br>';
// file_put_contents('lorem.txt', 'Câu đầu tiên' . PHP_EOL . $lorem);

/**
 * Upload file và gửi email
 * 1.1 PHP Upload File
 * - HTML form có input type cho phép tải tập rin lên máy chủ
 * - Để tải lên có thể làm việc, thuộc tính enctype của form
 * phải được thiết lập là "multipart/form-data"
 * - Tập tin nhận chỉ được lưu trữ tạm thời trên máy chủ. Nếu ko
 * được lưu bởi script, tập tin này sẽ bị loại
 */
// if (isset($_FILES['myfile'])) {
//     $dest = 'upload/' . basename($_FILES['myfile']['name']);
//     $file = $_FILES['myfile']['tmp_name'];
//     $err = $_FILES['myfile']['error'];

//     if($err == 0 && move_uploaded_file($file, $dest)){
//         echo 'File đã được upload thành công';
//     }
// }else{
//     echo 'Chưa có file nào được upload';
// }

/**
 * Upload file và gửi email (tiếp)
 * 1.2 GỬI EMAIL SỬ DỤNG MAIL()
 * - PHP gửi mail là hàm được xây dựng sẵn được sử dụng để gửi email từ mã PHP
 * - Hàm mail chấp nhận các tham số sau:
 * + $to_email_address: địa chỉ email của người nhận thư
 * + $subject: chủ đề của email
 * + $message: nội dung cần gửi
 * + [$headers]: là tham số tùy chọn, có thể được sử dụng gồm CC, BCC
 */
// $to_email_address = 'name@company.com';
// $subject = 'Testing PHP mail';
// $message = 'This mail is sent using the PHP mail function';
// $headers = 'from: testing@company.com';
// mail($to_email_address, $message, $headers);

/**
 * 2. Sanitizing email user input
 * - Khi tạo form liên hệ và để người dùng điền vào các chi tiết.
 * Người dùng có thể vô tình hoặc cố ý chèn code vào header, dẫn đến việc gửi thư rác.
 * - Để bảo vệ hệ thống khỏi các tấn công như vậy, chúng ta có thể tạo một
 * chức năng tùy chỉnh để cải thiện và xác thực các giá trị trước khi được gửi đi.
 * - Filter_var: được sử dụng để làm sạch và xác thực dữ liệu đầu vào của người dùng.
 * - SANITIZATION TYPE: loại sanitization (4 loại)
 * + FILTER_VALIDATE_EMAIL: trả về true cho địa chỉ email có giá trị
 * + FILTER_SANITIZE_EMAIL: di chuyển những ký tự bất hợp lệ từ
 * địa chỉ email
 * + FILTER_SANITIZE_URL: di chuyển những ký tự bất lệ từ url
 * + FILTER_SANITIZE_STRING: xóa các tag từ giá trị chuỗi
 */
//filter_var($field, SANITIZATION TYPE);

/**
 * 3. Error
 * - Error: là 1 lỗi trong mã mà nhà phát triển cần sửa. Khi
 * một lỗi xảy ra trong php, mặc định là hiển thị thông báo lỗi trong trình duyệt.
 * - Thông báo này bao gồm tên tập tin, số dòng và mô tả lỗi.
 * - Compile và parse error (lỗi biên dịch và cú pháp) thường để
 * phát hiện và sửa chữa, nhưng run-time error có thể khó tìm
 * hơn vì 1 số tình huống nhất định và những lý do ngoài làm kiểm soát.
 * - PHP có 4 loại lỗi cơ bản:
 * + Parse error of syntax error
 * + Fatal error
 * + Warning error
 * + Notice error
 * -----
 * 3.1 EXCEPTION HANDLING
 * - PHP5 đã giới thiệu các ngoại lệ, 1 cơ chế tích hợp để xử lý
 * các lỗi chương trình trong ngữ cảnh mà chúng xyar ra. Không giống
 * như các lỗi thường được chỉnh sửa bởi nhà phát triển, các ngoại lệ
 * được xử lý bởi script.
 * - Die() và exit()
 * + Hai hàm này tương đương nhau
 * + Gọi hàm này để dừng chương trình ngay lập tức
 * - Try_catch
 * + Khối try chứa mã có thể gây ra exception (ngoài ra)
 * + Nếu khối try thực thi thành công, chương trình sẽ tiếp tục chạy sau
 * câu lệnh try-catch
 * + Try: hàm sử dụng ngoại lệ, nếu ngoại lệ kích hoạt, 1 ngoại lệ sẽ bị "thrown"
 * + Throw: Đây là cách kích hoạt exception. Mỗi lần thrown phải có ít nhất 1 catch
 * + Catch: khối catch truy xuất exception và tạo 1 đối tượng chứa thông tin exception
 */
// include 'mypage.php';
// if(!defined('index')){
//     die('Không được gọi từ file mypage.php');
// }

function check($num){
    if($num > 1){
        throw new Exception('Giá trị phải nhỏ hơn hoặc bằng 1');
    }
    return true;
    
}
try{
    check(2);
    echo 'Giá trị phải nhỏ hơn hoặc bằng 1';
}catch(Exception $e){
    echo 'Message: ' . $e->getMessage();
}

finally{
    echo "Hoàn thành. ";
}
?>

<!-- <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="myfile">
    <input type="submit" value="Submit">
</form> -->