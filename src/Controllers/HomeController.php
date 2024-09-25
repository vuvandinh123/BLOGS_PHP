<?php 
namespace App\Controllers;
class HomeController
{
    public function index()
    {
        require_once __PATH_VIEW_SITE__ . '/Home.php';
    }
}