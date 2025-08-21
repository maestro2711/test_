<?php
require_once 'Transaction.php'; // Include the Transaction class file
require_once 'PaymentProfile.php';
require_once 'Customer.php';
require_once 'inheritance.php'; // Include the Inheritance class file
require_once 'child.php'; // Include the Child class file
require_once __DIR__ . '/../superglobals/routing.php';
require_once __DIR__ . '/../superglobals/RouteNotFoundException.php'; # Include the RouteNotFoundException class file
require_once __DIR__ . '/../superglobals/superglobals.php';
require_once __DIR__ . '/../superglobals/Home.php';

$toaster = new ToasterPro();

$toaster->addSlice('Whole Wheat');
$toaster->addSlice('Rye');
$toaster->addSlice('Sourdough');
$toaster->addSlice('Bagel');

$toaster->toastbagel();

$transaction= new Transaction(100,'transaction 1'); // Create a new instance of the Transaction class
$transaction1= new Transaction(100,'transaction 2'); // Create another instance of the Transaction class
#$transaction->customer = new Customer(); // Assign a new Customer instance to the transaction
$transaction->customer?->paymentProfile->id;
#$transaction->amount = 100; // Set the amount property
$transaction->addTax(10)->applyDiscount(10); // Add tax to the transaction amount, that is the chained method calls
#$transaction->applyDiscount(10);
# another method should be :
# $amount=(new Transaction(100,'transaction 1'))
#       ->addTax(10)
#       ->applyDiscount(10)
#       ->getAmount();
#var_dump($amount); // Output the final amount after tax and discount


echo $transaction->getDetails(); // Output the transaction details
var_dump($transaction->getAmount()); // Output the transaction object to verify its creation

$router = new Router();
$router->register('/home', function() {
    echo "Welcome to the home page!";
});
$router->register('/about', function() {
    echo "This is the about page!";
});

// Simulate a request to the home route
echo $router->resolve($_SERVER['REQUEST_URI'] ?? '/home'); // Resolve the request URI to the appropriate route