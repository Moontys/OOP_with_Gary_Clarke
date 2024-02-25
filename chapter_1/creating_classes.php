<?php

class Product 
{
    public $name = 'face soap';
    public $price;

    public function priceFromCentsToEuro()
    {
        $priceFromCentsToEuro = $this->price /100;

        return $priceFromCentsToEuro;
    }
}

$objectSoap1 = new Product();
$objectSoap1->price = 550;

$objectSoap2 = new Product();
$objectSoap2->price = 800;

$priceCalculatedToEuro = $objectSoap1->priceFromCentsToEuro();
var_dump($priceCalculatedToEuro) . PHP_EOL;


#############################################################
// class Product 
// {
//     public $name = 'face soap';
//     public $price = 10;
// }

// # 1. Create a price property and give it a default integer value
// # 2. Access the price on a product object and print it
// $product = new Product();
// print $product->price . "\n";
// # 3. Change the price 
// $product->price = 20;
// # 4. Access the (new) price on a product object and print it
// print $product->price . "\n";


// $soapObject = new Product();
// print $soapObject->name . "\n";
// $soapObject->name = 'hand soap';
// print $soapObject->name . "\n";

// $product = new Product();
// $anotherProduct = new Product();
// var_dump($product);
// var_dump($anotherProduct);