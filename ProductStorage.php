<?php


class ProductStorage
{
    protected array $storage;

    public function add(Product $product)
    {
        $this->storage[] = $product;
    }

    public function getStorage()
    {
        return $this->storage;
    }
}