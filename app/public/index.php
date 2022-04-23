<?php
require_once './Product.php';
require_once './Food.php';
require_once './Clothes.php';

echo "php start";
$product1 = new Product(1, 'product1', 'some desc product 1', 500);
$food1 = new Food(2, 'food1', 'food 1 desc', 30, time() + (7 * 24 * 60 * 60 * 1000));
$food2 = new Food(3, 'food2', 'food 2 desc', 20, time() - (7 * 24 * 60 * 60 * 1000));
$clothes1 = new Clothes(4, 'wear1', 'wear desc', 225, 'XL');

var_dump($product1);
var_dump($food1);
var_dump($clothes1);

echo $product1->getDiscountedPrice() . "<br/>";
$product1->setDiscount(50);
echo $product1->getDiscountedPrice() . "<br/>";
var_dump($food1->checkExpirationDate());
var_dump($food2->checkExpirationDate());
var_dump($clothes1->getProductInfo());
