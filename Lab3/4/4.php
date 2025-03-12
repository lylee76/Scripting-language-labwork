<?php
class Product
{

    private $description;
    private $quantity;
    private $price;


    public function __construct($description, $quantity, $price)
    {
        if (!is_string($description)) {
            throw new Exception("Description must be a string.");
        }
        if (!is_numeric($quantity) || !is_numeric($price)) {
            throw new Exception("Quantity and Price must be numeric.");
        }

        $this->description = $description;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getPrice()
    {
        return $this->price;
    }


    public function setDescription($description)
    {
        if (!is_string($description)) {
            throw new Exception("Description must be a string.");
        }
        $this->description = $description;
    }

    public function setQuantity($quantity)
    {
        if (!is_numeric($quantity)) {
            throw new Exception("Quantity must be numeric.");
        }
        $this->quantity = $quantity;
    }

    public function setPrice($price)
    {
        if (!is_numeric($price)) {
            throw new Exception("Price must be numeric.");
        }
        $this->price = $price;
    }


    public function calculatePrice()
    {
        return $this->quantity * $this->price;
    }
}


try {
    $product1 = new Product("Tv", 2, 100000);
    $product2 = new Product("Speaker", 3, 50000);

    echo "Product 1: " . $product1->getDescription() . " - Total: Rs." . $product1->calculatePrice() . PHP_EOL ;
    echo "Product 2: " . $product2->getDescription() . " - Total: Rs." . $product2->calculatePrice() . PHP_EOL;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
