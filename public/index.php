<?php
require_once dirname(__DIR__) . '/app/init_app.php';

use Classes\Router;

$uri = parse_url($_SERVER['REQUEST_URI']);
$path_parts = explode('/', $uri['path']);
$controller = Router::getInstance()->getController($path_parts[1]);
$controller->render();
