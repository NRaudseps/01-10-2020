<?php

class Product
{
    public string $product;
    public int $price;
    public int $quantity;

    public function __construct(string $product, int $price, int $quantity)
    {
        $this->product = $product;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getProduct(): string
    {
        return $this->product;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $amount): void
    {
        $this->quantity += $amount;
    }
}