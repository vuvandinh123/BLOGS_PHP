<?php 
namespace App\Controllers;

use App\Helpers\View as HelpersView;
use App\Models\Posts;

class HomeController
{
    private $view;
    public function __construct()
    {
        $this->view = new HelpersView();
    }
    public function index()
    {
        $posts = Posts::all();
        $data = [
            'posts' => $posts
        ];
        return $this->view->render('Home', $data);
    }
}