<?php

interface Product
{
    public function getType();
}

class ConcreteProductA implements Product
{
    public function getType()
    {
        return "Product A";
    }
}

class ConcreteProductB implements Product
{
    public function getType()
    {
        return "Product B";
    }
}

class ProductFactory
{
    public static function createProduct($type)
    {
        if ($type === 'A') {
            return new ConcreteProductA();
        } elseif ($type === 'B') {
            return new ConcreteProductB();
        }
        throw new \Exception("Invalid product type");
    }
}

// Usage
$product = ProductFactory::createProduct('A');
echo $product->getType(); // Output: Product A
