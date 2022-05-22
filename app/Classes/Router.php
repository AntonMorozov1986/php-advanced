<?php
namespace Classes;

use Controllers\BaseController;
use Traits\SingletoneTrait;

use Controllers\MainPageController;
use Controllers\AuthController;
use Controllers\CatalogController;
use Controllers\RegisterController;
use Controllers\MissingPageController;

class Router
{
    use SingletoneTrait;

    private array $routes = [];
    public static string $currentRoute = '';

    protected function instanceInit(): void
    {
        // TODO: Implement instanceInit() method.
        $this->routes = [
            'auth' => [
                'controller' => new AuthController(),
                'linkText' => 'Авторизация',
            ],
            'register' => [
                'controller' => new RegisterController(),
                'linkText' => 'Регистрация',
            ],
            'catalog' => [
                'controller' => new CatalogController(),
                'linkText' => 'Каталог Товаров',
            ],
        ];
    }

    private function isPostRequest()
    {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }

    public function getController($route): BaseController
    {
        if ($route === '') {
            return new MainPageController();
        }
        if (in_array($route, array_keys($this->routes))) {
            $controller = $this->routes[$route]['controller'];
            if ($this->isPostRequest()) {
                $controller->handlePostRequest();
            }
            return $this->routes[$route]['controller'];
        }
        return new MissingPageController();
    }

    public function getRoutesLinks(): array
    {
        return array_map(function ($route, $routeName)
        {
            return [
                'href' => '/' . $routeName,
                'text' => $route['linkText'],
            ];
        }, $this->routes,array_keys($this->routes));
    }
}
