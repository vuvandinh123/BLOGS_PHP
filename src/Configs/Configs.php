<?php
require __BASE_PATH__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

// ERROR HANDLING
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// DATABASE
// chỉ định thư mục chứa file .env
$dotenv = Dotenv::createImmutable(__BASE_PATH__);
$dotenv->load();

require_once __PATH_CONFIG__ . '/Databases.php';
