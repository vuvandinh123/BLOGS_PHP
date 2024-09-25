<?php
// public/index.php

// Hằng số
require_once __DIR__ . '/../src/Configs/Path.php';
// Cấu hình ứng dụng
require_once __DIR__ . '/../src/Configs/Configs.php';

// Router ứng dụng
use App\Routers\Web;

$route = new Web();
$route->run();

// $servername = "mysql"; // Hoặc tên dịch vụ MySQL nếu đang chạy trong Docker
// $username = "dinhdev"; // Tên người dùng MySQL
// $password = "06012003asVN"; // Mật khẩu của người dùng
// $dbname = "blogs_app"; // Tên cơ sở dữ liệu bạn muốn kết nối
// $port = 3306; // Cổng MySQL (mặc định là 3306)

// // Tạo kết nối
// $conn = new mysqli($servername, $username, $password, $dbname, $port);

// // Kiểm tra kết nối
// if ($conn->connect_error) {
//     die("Kết nối thất bại: " . $conn->connect_error);
// }
// echo "Kết nối thành công!";

// // Đóng kết nối
// $conn->close();