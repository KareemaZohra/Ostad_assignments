<?php

class Product {

    public int $id;
    public string $name;
    public float $price;

    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }


    // TODO: Add getFormattedPrice method
    public function getFormattedPrice(){
        return "$".number_format($this->price, 2);
    }

    // TODO: Add showDetails method
    public function showDetails(){
        echo "ID : $this->id \n";
        echo "Name : $this->name \n";
        echo "Price : ".$this->getFormattedPrice();
    }
}

$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();