
<?php

function connectDB() {
    // Thay đổi các giá trị sau phù hợp với thông tin kết nối của bạn
    $servername = "localhost"; // Tên máy chủ MySQL
    $username = "root"; // Tên người dùng MySQL
    $password = ""; // Mật khẩu MySQL
    $dbname = "data"; // Tên CSDL MySQL

    // Tạo kết nối đến MySQL
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối tới CSDL thất bại: " . $conn->connect_error);
    }
    return $conn;
}

connectDB();




?>

