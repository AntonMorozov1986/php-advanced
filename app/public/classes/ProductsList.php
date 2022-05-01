<?php
class ProductsList
{
    use SingletoneTrait;

    protected array $products = [];

    public function instanceInit() {}

    public function getProducts(): array
    {
        return $this->products;
    }

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }
}
