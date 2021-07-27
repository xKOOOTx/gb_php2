<?php


class Real_product extends Abstract_product
{
    private int $count;

    public function __construct($name, $price, $count)
    {
        $this->count = $count;
        parent::__construct($name, $price);
    }

    public function getFinalPrice(): float
    {
        return $this->getFinalPrice();
    }
}
