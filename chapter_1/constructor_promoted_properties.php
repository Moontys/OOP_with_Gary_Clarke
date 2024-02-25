<?php

class Product
{
    public function __construct(public $name = 'Sun Soap', public $price = 100)
    {

    }

    public function priceFromCentsToEuro($divisor = 100, $currencySymbol = '€')
    {
        $priceFromCentsToEuro = $this->price / $divisor;

        return $currencySymbol . $priceFromCentsToEuro;
    }
}

$objectProduct = new Product(price: 200);
print $objectProduct->name . PHP_EOL;
print $objectProduct->price . PHP_EOL;