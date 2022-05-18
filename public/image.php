<?php
require_once '../vendor/autoload.php';

use Config\Config;
use Classes\ImagesList;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$imagesList = ImagesList::getInstance();

try {
    $loader = new FilesystemLoader(Config::getRoot() . '/templates');
    $twig = new Environment($loader);

    $page = $twig->render('image.html.twig', [
            'title' => 'image',
            'image' => $imagesList->getImageById((int) $_GET['imageId']),
        ]
    );

    echo $page;
} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}
