<?php
function includeClass($clasName)
{
    include_once "./classes/$clasName.php";
}
spl_autoload_register('includeClass');

$productsList = ProductsList::getInstance();
$productsList->addProduct(new DigitalProduct('Подписка на сервис музыки', 100, 8));
$productsList->addProduct(new DigitalProduct('Подписка на сервис картинок', 150, 12));
$productsList->addProduct(new CountableProduct('Телефон', 50, 22, 6));
$productsList->addProduct(new WeightProduct('Картошка', 8, 6, 18.36));

foreach ($productsList->getProducts() as $product) {
    echo $product->getProductInfo();
    echo "<hr>";
}
