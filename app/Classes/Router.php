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
        'cart' => [
            'controller' => 'Controllers\CartController',
            'linkText' => 'Корзина'
        ],
        'logout' => [
            'controller' => 'Controllers\LogoutController',
            'linkText' => 'Выход',
        ],
        'good' => [
            'controller' => 'Controllers\GoodController',
        ],
    ];

    public static function getController($mainRoute, ...$params): BaseController
    {
        if ($mainRoute === '') {
            return new MainPageController();
        }
        if (in_array($mainRoute, array_keys(self::$routes))) {
            $controllerName = self::$routes[$mainRoute]['controller'];
            return new $controllerName($params);
        }
        return new MissingPageController();
    }

    public static function getRoutesLinks(): array
    {
        $routesWithText = array_filter(self::$routes, function ($route)
        {
            return (bool) $route['linkText'];
        });

        return array_map(function ($route, $routeName)
        {
            return [
                'href' => '/' . $routeName,
                'text' => $route['linkText'],
            ];
        }, $routesWithText,array_keys($routesWithText));
    }

    public static function getRequestMethode()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
