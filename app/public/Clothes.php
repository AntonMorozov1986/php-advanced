<?php
require_once 'Product.php';

class Clothes extends Product
{
    protected string $size;

    /**
     * @param int $code
     * @param string $name
     * @param string $description
     * @param int $price
     * @param string $size
     */
    public function __construct(int $code, string $name, string $description, int $price, string $size)
    {
        parent::__construct($code, $name, $description, $price);
        $this->size = $size;
    }

}
