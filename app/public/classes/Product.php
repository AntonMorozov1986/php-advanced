<?php
abstract class Product
{
    protected string $name;
    protected int $price;
    protected int $productIncome;

    public function __construct($name, $price, $productIncome)
    {
        $this->name = $name;
        $this->price = $price;
        $this->productIncome = $productIncome;
    }

    abstract public function getTotalCost();

    abstract public function getSalesIncome();

    abstract public function getProductInfo();
}
