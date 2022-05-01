<?php
class DigitalProduct extends Product
{
    public function __construct($name, $price, $productIncome)
    {
        parent::__construct($name, $price, $productIncome);
    }

    public function getTotalCost(): int
    {
        return $this->price;
    }

    public function getSalesIncome(): int
    {
        return ($this->price / 100) * $this->productIncome;
    }

    public function getProductInfo(): string
    {
        return "Цифровой продукт: $this->name; Стоимость продукта: {$this->getTotalCost()}; Прибыль: {$this->getSalesIncome()}; <br/>";
    }
}
