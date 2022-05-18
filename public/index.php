<?php
require_once dirname(__DIR__) . '/app/init_app.php';

use Config\Config;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

use Controllers\GetGoods;

$all = GetGoods::all();
var_dump(sizeof($all));
$goodsList = GetGoods::some(5, 2);
var_dump($goodsList);

try {
    $loader = new FilesystemLoader(Config::getRoot() . '/templates');
    $twig = new Environment($loader);

    $page = $twig->render('catalog.html.twig', [
            'title' => 'catalog',
            'goods' => GetGoods::some(5, 20),
        ]
    );

    echo $page;
} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}
