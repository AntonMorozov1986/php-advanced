<?php
require_once dirname(__DIR__) . '/app/init_app.php';

use Config\Config;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

use Controllers\GetGoods;


$quantity = GetGoods::allQuantity();
$goodsPerPage = 6;
$pagesQuantity = $quantity / $goodsPerPage;

if (isset($_GET['page'])) {
    $currentPage = (int) $_GET['page'];
    $goods = GetGoods::some($currentPage * $goodsPerPage, $goodsPerPage);
} else {
    $currentPage = 1;
    $goods = GetGoods::some(1, $goodsPerPage);
}

try {
    $loader = new FilesystemLoader(Config::getRoot() . '/templates');
    $twig = new Environment($loader);

    $page = $twig->render('catalog.html.twig', [
            'title' => 'catalog',
            'goods' => $goods,
            'pagesQuantity' => $pagesQuantity,
            'currentPage' => $currentPage
        ]
    );

    echo $page;
} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}
