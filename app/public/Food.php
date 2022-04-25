<?php
require_once 'Product.php';

class Food extends Product
{
    protected int $expirationDate;

    /**
     * @param int $code
     * @param string $name
     * @param string $description
     * @param int $price
     * @param int $expirationDate
     */
    public function __construct(int $code, string $name, string $description, int $price, int $expirationDate)
    {
        parent::__construct($code, $name, $description, $price);
        $this->expirationDate = $expirationDate;
    }

    /**
     * @return bool
     */
    public function checkExpirationDate(): bool
    {
        return $this->expirationDate > time();
    }
}
