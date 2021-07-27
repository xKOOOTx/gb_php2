<?php


abstract class Abstract_product
{
    public string $name;
    public int $price;

    public function __construct($name, $price) {
        $this -> name = $name;
        $this -> price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    abstract function getFinalPrice(): float;
}
