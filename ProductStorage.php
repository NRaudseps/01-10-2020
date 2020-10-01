<?php


class ProductStorage
{
    protected array $storage;

    public function add(Product $product): void
    {
        $this->storage[] = $product;
    }

    public function getStorage()
    {
        return $this->storage;
    }

    public function buy(string $choice): void
    {
        if(in_array($choice, array_column($this->storage, 'product'))){
            $index = array_search($choice, array_column($this->storage, 'product'));
            if(!$this->storage[$index]->getQuantity() <= 0) {
                $this->storage[$index]->setQuantity(-1);
            }
        }
    }
}