<?php
//require_once '../config/config.php';
require_once '../vendor/autoload.php';

use Config\Config;
use Classes\ImagesList;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$imagesList = ImagesList::getInstance();

try {
    $loader = new FilesystemLoader(Config::getRoot() . '/templates');
    $twig = new Environment($loader);

    $page = $twig->render('gallery.html.twig', [
            'title' => 'image gallery',
            'images' => $imagesList->getImages(),
        ]
    );

    echo $page;
} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}
