<?php


class Customer
{
    public string $name;
    protected int $money;
    protected array $broughtProducts;

    public function __construct(string $name, int $money, array $broughtProducts = [])
    {
        $this->name = $name;
        $this->money = $money;
        $this->broughtProducts = $broughtProducts;
    }

    public function getMoney(): int
    {
        return $this->money;
    }

    public function setMoney(int $amount): void
    {
        $this->money -= $amount;
    }

    public function getBroughtProducts(): string
    {
        //Return the products as a string
        return implode(',', $this->broughtProducts);
    }

    public function setBroughtProducts(string $item): void
    {
        if($item !== '') {
            $this->broughtProducts[] = $item;
        }
    }
}