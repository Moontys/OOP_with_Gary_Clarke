<?php

class Product 
{
    public $name = 'hand soap';
    public $price = 150;

    public function priceFromCentsToEuro($divisor = 100, $currencySymbol = '€')
    {
        $priceFromCentsToEuro = $this->price / $divisor;

        return $currencySymbol . $priceFromCentsToEuro;
    }
}

$objectSoap = new Product();
print $objectSoap->priceFromCentsToEuro(currencySymbol: '$') . PHP_EOL; // Named Agrguments


// class Product 
// {
//     public $name = 'hand soap';
//     public $price = 150;

//     public function priceFromCentsToEuro($divisor = 100, $currencySymbol = '€')
//     {
//         $priceFromCentsToEuro = $this->price / $divisor;

//         return $currencySymbol . $priceFromCentsToEuro;
//     }
// }

// $objectSoap = new Product();
// print $objectSoap->priceFromCentsToEuro(50, '$') . PHP_EOL;


// class Product 
// {
//     public $name = 'hand soap';
//     public $price = 150;

//     public function priceFromCentsToEuro($currencySymbol = '€')
//     {
//         $priceFromCentsToEuro = $this->price /100;

//         return $priceFromCentsToEuro .' '. $currencySymbol;
//     }
// }

// $objectSoap = new Product();
// // print $objectSoap->priceFromCentsToEuro() . PHP_EOL;
// // print $objectSoap->priceFromCentsToEuro('€') . PHP_EOL;

// print $objectSoap->priceFromCentsToEuro('$') . PHP_EOL; // over writes first argument!