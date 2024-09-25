<?php
namespace App\Routers;
use App\Helpers\Router;
use App\Controllers\HomeController;
use App\Controllers\PostController;

class Web
{
    private $router;

    public function __construct()
    {
        $this->router = new Router();
        $this->defineRoutes();
    }
    public function run()
    {
        $requestPath = str_replace('/public', '', $_SERVER['REQUEST_URI']);
        $this->router->dispatch($requestPath);
    }

    private function defineRoutes()
    {
        $this->HomeRoutes();
        $this->PostsRoutes();
        // Thêm các nhóm route khác nếu cần
    }

    private function HomeRoutes()
    {
        $this->router->add('GET', '/', [HomeController::class, 'index']);
    }
    private function PostsRoutes()
    {
        $this->router->add('GET', '/posts', [PostController::class, 'index']);
    }

}
