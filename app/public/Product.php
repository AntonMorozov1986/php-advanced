<?php
class Product
{
    protected int $code;
    protected string $name;
    protected string $description;
    protected int $price;
    protected int $discount = 0;

    /**
     * @param int $code
     * @param string $name
     * @param string $description
     * @param int $price
     */
    public function __construct(int $code, string $name, string $description, int $price)
    {
        $this->code = $code;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    /**
     * @return array
     */
    public function getProductInfo(): array
    {
        return get_object_vars($this);
    }

    /**
     * @param int $discount
     */
    public function setDiscount(int $discount): void
    {
        $this->discount = $discount;
    }

    /**
     * @return int
     */
    public function getDiscountedPrice(): int
    {
        $absDiscount = ($this->price / 100) * $this->discount;
        return $this->price - $absDiscount;
    }
}
