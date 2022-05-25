<?php
require_once dirname(__DIR__) . '/app/init_app.php';

use Classes\Router;

session_start();
$_SESSION['test'] = 'test';

$uri = parse_url($_SERVER['REQUEST_URI']);
$path_parts = explode('/', $uri['path']);
$route = array_slice($path_parts, 1);
$controller = Router::getController(...$route);
$controller->render();
