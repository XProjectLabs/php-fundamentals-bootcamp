<?php

class Product
{
    public string $name;
    public float $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = (float) $price;
    }

    public function isExpensive(): bool
    {
        return $this->price > 100;
    }

    public function hasDiscount(): bool
    {
        return $this->price < 50;
    }

    public function getDiscount(): float
    {
        // If the product is expensive, apply a 10% discount
        if ($this->isExpensive()) {
            return $this->price * 0.10;
        }
        // If the product is cheap (has discount), apply a 20% discount
        elseif ($this->hasDiscount()) {
            return $this->price * 0.20;
        }
        // No discount for other cases
        return 0.0;
    }

    public function getDiscountedPrice(): float
    {
        // Return the price after discount
        return $this->price - $this->getDiscount();
    }
}

$product1 = new Product('Expensive Product', 120);
$product2 = new Product('Cheap Product', 40);
$product3 = new Product('Regular Product', 80);

echo "Product 1 Discount: " . $product1->getDiscount() . "\n"; // 12 (10% of 120)
echo "Product 1 Discounted Price: " . $product1->getDiscountedPrice() . "\n"; // 108

echo "Product 2 Discount: " . $product2->getDiscount() . "\n"; // 8 (20% of 40)
echo "Product 2 Discounted Price: " . $product2->getDiscountedPrice() . "\n"; // 32

echo "Product 3 Discount: " . $product3->getDiscount() . "\n"; // 0 (no discount)
echo "Product 3 Discounted Price: " . $product3->getDiscountedPrice() . "\n"; // 80
