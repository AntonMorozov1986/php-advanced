<?php
class CountableProduct extends Product
{
    private int $amount;

    public function __construct($name, $price, $productIncome, $amount)
    {
        parent::__construct($name, $price, $productIncome);
        $this->amount = $amount;
    }

    public function getTotalCost()
    {
        return $this->price * $this->amount;
    }

    public function getSalesIncome()
    {
        return ($this->getTotalCost() / 100) * $this->productIncome;
    }

    public function getProductInfo(): string
    {
        return "Считаемый продукт: $this->name; Количество продукта: $this->amount; Стоимость продукта: {$this->getTotalCost()}; Прибыль: {$this->getSalesIncome()}; <br/>";
    }
}
