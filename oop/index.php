<?php
require_once 'Transaction.php'; // Include the Transaction class file
require_once 'PaymentProfile.php';
require_once 'Customer.php';
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