<?php declare(strict_types=1);

require_once 'Product.php';
require_once 'ProductStorage.php';

$storage = new ProductStorage();
$storage->add(new Product('Sandwich', 1.52, 0));
$storage->add(new Product('Baguette', 0.90, 62));
$storage->add(new Product('Ice Cream', 1.12, 104));

foreach ($storage->getStorage() as $product) {
    echo 'Item: ' . $product->getProduct() . PHP_EOL;
    echo 'Price: ' . number_format($product->getPrice(), 2) . '$' . PHP_EOL;
    echo 'Quantity: ' . $product->getQuantity() . PHP_EOL;
    echo PHP_EOL;
}

$choice = readline('Would you like to buy anything? ');
$storage->buy($choice);
