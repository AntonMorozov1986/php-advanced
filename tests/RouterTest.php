<?php
namespace Tests;

use PHPUnit\Framework\TestCase;

use Classes\Router;
use Controllers\BaseController;
use Controllers\MainPageController;
use Controllers\MissingPageController;

class RouterTest extends TestCase
{

    public function testGetRequestMethode()
    {
        echo "test Router::getRequestMethode" . PHP_EOL;

        $requestMethods = [
            'GET',
            'POST',
            'PUT',
            'DELETE',
            'PATCH',
        ];
        foreach ($requestMethods as $method) {
            $_SERVER['REQUEST_METHOD'] = $method;
            $this->assertSame($method, Router::getRequestMethode());
        }
    }

    public function testGetController()
    {
        echo "test Router::getController" . PHP_EOL;

        $this->assertInstanceOf(MainPageController::class, Router::getController(''));
        $this->assertInstanceOf(BaseController::class, Router::getController(''));
        $this->assertInstanceOf(MainPageController::class, Router::getController());
        $this->assertInstanceOf(BaseController::class, Router::getController());
        $fakeRouteList = ['asd', 'test','qwerty', '0', '4568'];
        foreach ($fakeRouteList as $route) {
            $this->assertInstanceOf(MissingPageController::class, Router::getController($route));
            $this->assertInstanceOf(BaseController::class, Router::getController($route));
        }
        $routesList = Router::getRoutes();
        foreach ($routesList as $routeName => $route) {
            echo "test route - \"{$routeName}\"" . PHP_EOL;
            $this->assertInstanceOf($route['controller'], Router::getController($routeName));
            $this->assertInstanceOf(BaseController::class, Router::getController($routeName));
        }
    }

    public function testGetRoutesLinks()
    {
        $routesWithText = array_filter(Router::getRoutes(), function ($route)
        {
            return (bool) $route['linkText'];
        });

        $routeLinks = array_map(function ($route, $routeName)
        {
            return [
                'href' => '/' . $routeName,
                'text' => $route['linkText'],
            ];
        }, $routesWithText,array_keys($routesWithText));

        $this->assertSame($routeLinks, Router::getRoutesLinks());
    }
}
