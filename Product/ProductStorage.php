<?php


class ProductStorage
{
    protected array $storage;

    public function add(Product $product): void
    {
        $this->storage[] = $product;
    }

    public function getStorage(): array
    {
        return $this->storage;
    }

    public function buy(string $choice, Customer $customer): void
    {
        //If the product the customer has chosen is in the storage then execute if statement
        if(in_array($choice, array_column($this->storage, 'product'))){
            //Search for the index of the product in the storage
            $index = array_search($choice, array_column($this->storage, 'product'));

            //If the storage has at least one product
            //And the customer has enough money to buy the product
            if(!$this->storage[$index]->getQuantity() <= 0 && $this->storage[$index]->getPrice() <= $customer->getMoney()) {
                //Subtract the price of the product from what the costumer has
                $customer->setMoney($this->storage[$index]->getPrice());
                //Add the product to the customers bag
                $customer->setBroughtProducts($this->storage[$index]->getProduct());
            }
            //If not then quit the program
            else {
                exit;
            }
        }
    }
}