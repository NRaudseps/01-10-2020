<?php declare(strict_types=1);

require_once 'Product/Product.php';
require_once 'Product/ProductStorage.php';
require_once 'Customer/Customer.php';
require_once 'Customer/CustomerList.php';

//The customers data gets collected from the file
$costumer = CustomerList::getCustomers('customer-info.txt');

//Creates a new storage of products. Money is written in cents
$storage = new ProductStorage();
$storage->add(new Product('Sandwich', 152, 0));
$storage->add(new Product('Baguette', 90, 62));
$storage->add(new Product('Ice Cream', 112, 104));

//Displays all the products
foreach ($storage->getStorage() as $product) {
    echo 'Item: ' . $product->getProduct() . PHP_EOL;
    echo 'Price: ' . number_format($product->getPrice()/100, 2) . '$' . PHP_EOL;
    echo 'Quantity: ' . $product->getQuantity() . PHP_EOL;
    echo PHP_EOL;
}

//Gives the customer the option of buying from the selection
$choice = (string) readline('Would you like to buy anything? ');
//Buys the individual product
$storage->buy($choice, $costumer);
//Changes the customers data
CustomerList::setCustomers($costumer, 'customer-info.txt');

//Gives the option of displaying what kind of products the customer has
$printProducts = (string) readline('Would you like to see what you have bought (yes or no)? ');
if(strtolower($printProducts) === 'yes'){
    echo $costumer->getBroughtProducts() . PHP_EOL;
}
else {
    exit;
}