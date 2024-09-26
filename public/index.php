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
