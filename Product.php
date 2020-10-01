<?php

class Product
{
    public string $product;
    public float $price;
    public int $quantity;

    public function __construct(string $product, float $price, int $quantity)
    {
        $this->product = $product;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getProduct(): string
    {
        return $this->product;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity($amount)
    {
        $this->quantity += $amount;
    }
}