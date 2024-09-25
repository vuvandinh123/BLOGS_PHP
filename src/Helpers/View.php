<?php
namespace App\Helpers;

class View
{
    public function render($template, $data = [])
    {
        extract($data);
        include __PATH_VIEW_SITE__ . "/$template.php";
    }
}