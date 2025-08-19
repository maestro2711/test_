<?php
class Transaction {
    private $amount;
    private $description;
    public ?Customer $customer = null;

    public function __construct($amount = 0, $description = '') {
        $this->amount = $amount;
        $this->description = $description;
    }

    public function addTax($taxRate):Transaction {
        $this->amount += $this->amount * $taxRate/ 100;
        return $this;
    }

    public function applyDiscount($discountRate):Transaction {
        $this->amount -= $this->amount * $discountRate / 100;
        return $this;
    }

    public function getDetails() {
        return "Transaction: {$this->description}, Amount: {$this->amount}";
    }
    public function getAmount() {
        return $this->amount;
    }
}