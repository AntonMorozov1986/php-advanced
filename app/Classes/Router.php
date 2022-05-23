<?php
namespace Classes;

use Controllers\BaseController;
use Controllers\MainPageController;
use Controllers\MissingPageController;

class Router {
    private static array $routes = [
        'auth' => [
            'controller' => 'Controllers\AuthController',
            'linkText' => 'Авторизация',
        ],
        'register' => [
            'controller' => 'Controllers\RegisterController',
            'linkText' => 'Регистрация',
        ],
        'catalog' => [
            'controller' => 'Controllers\CatalogController',
            'linkText' => 'Каталог Товаров',
        ],
    ];

    public static function getController($route): BaseController
    {
        if ($route === '') {
            return new MainPageController();
        }
        if (in_array($route, array_keys(self::$routes))) {
            $controllerName = self::$routes[$route]['controller'];
            return new $controllerName();
        }
        return new MissingPageController();
    }

    public static function getRoutesLinks(): array
    {
        return array_map(function ($route, $routeName)
        {
            return [
                'href' => '/' . $routeName,
                'text' => $route['linkText'],
            ];
        }, self::$routes,array_keys(self::$routes));
    }

    public static function getRequestMethode()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
