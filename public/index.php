<?php
// public/index.php
require_once __DIR__ . '/../vendor/autoload.php';
// Hằng số
require_once __DIR__ . '/../src/Configs/Path.php';
// Cấu hình ứng dụng
require_once __DIR__ . '/../src/Configs/Configs.php';
use App\Routers\Web;

// Router ứng dụng
$route = new Web();
$route->run();