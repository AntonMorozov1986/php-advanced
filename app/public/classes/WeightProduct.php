<?php
class WeightProduct extends Product
{
    protected float $weight;
    public function __construct($name, $price, $productIncome, $productWeight)
    {
        parent::__construct($name, $price, $productIncome);
        $this->weight = $productWeight;
    }

    public function getTotalCost()
    {
        return $this->price * $this->weight;
    }

    public function getSalesIncome()
    {
        return ($this->getTotalCost() / 100) * $this->productIncome;
    }

    public function getProductInfo(): string
    {
        return "Весовой продукт: {$this->name}; Вес продукта: {$this->weight}; Стоимость продукта: {$this->getTotalCost()}; Прибыль: {$this->getSalesIncome()}";
    }
}
