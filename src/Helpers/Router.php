<?php

namespace App\Helpers;
// use App\Controllers\HomeController;
class Router
{
    private array $routes = [];
    public function add(string $method, string $path, array $controller)
    {
        $path = $this->normalizePath($path);
        $this->routes[] = [
            'path' => $path,
            'method' => strtoupper($method),
            'controller' => $controller,
            'middlewares' => []
        ];

    }
    private function normalizePath(string $path): string
    {
        $path = trim($path, '/');
        $path = "/{$path}/";
        $path = preg_replace('#[/]{2,}#', '/', $path);
        return $path;

    }
    public function dispatch(string $path)
    {
        // Chuẩn hóa đường dẫn
        $path = $this->normalizePath($path);
        $method = strtoupper($_SERVER['REQUEST_METHOD']);

        foreach ($this->routes as $route) {
            $pattern = preg_replace('#\{[a-zA-Z0-9_]+\}#', '([a-zA-Z0-9_]+)', $route['path']);

            $matches = [];
            $matchResult = preg_match("#^{$pattern}$#", $path, $matches);

            if (!$matchResult || $route['method'] !== $method) {
                continue;
            }

            [$class, $function] = $route['controller'];
            $controllerInstance = new $class;

            // Gọi phương thức của controller và truyền tham số động
            $controllerInstance->{$function}(...$matches);
        }
    }


}