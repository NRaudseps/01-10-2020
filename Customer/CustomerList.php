<?php


class CustomerList
{
    public static function getCustomers(string $inputFile): Customer
    {
        //Get the data from the file
        $file = file_get_contents($inputFile);
        //Separate into array by semicolon
        $file = explode(':', $file);
        //Add name and money
        $customer = new Customer($file[0], $file[1]);
        //If has products then add to the customers bag
        if(array_key_exists('2', $file)){
            $customer->setBroughtProducts($file[2]);
        }

        return $customer;
    }

    public static function setCustomers(Customer $customer, string $inputFile): void
    {
        //Format the data
        $customer = $customer->name . ':' . $customer->getMoney() . ':' . $customer->getBroughtProducts();
        //Put the data in the file
        file_put_contents($inputFile, $customer);
    }
}