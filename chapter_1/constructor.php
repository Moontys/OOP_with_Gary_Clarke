<?php

class Product 
{
    public $name;
    public $price;

    public function __construct($name = 'Camping Soap', $price = 250)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function priceFromCentsToEuro($divisor = 100, $currencySymbol = '€')
    {
        $priceFromCentsToEuro = $this->price / $divisor;

        return $currencySymbol . $priceFromCentsToEuro;
    }
}


# Give the constructor arguments default values
# Use Named Arguments to only pass a price argument
$objectProduct = new Product(price: 150);
print $objectProduct->price . PHP_EOL;


#############################################################


// class Product 
// {
//     public $name;
//     public $price;

//     public function __construct($name = 'Camping Soap', $price = 250)
//     {
//         $this->name = $name;
//         $this->price = $price;
//     }

//     public function priceFromCentsToEuro($divisor = 100, $currencySymbol = '€')
//     {
//         $priceFromCentsToEuro = $this->price / $divisor;

//         return $currencySymbol . $priceFromCentsToEuro;
//     }
// }

// $objectProduct = new Product('Hand Soap', 100);
// print $objectProduct->name . PHP_EOL;
// print $objectProduct->price . PHP_EOL;



