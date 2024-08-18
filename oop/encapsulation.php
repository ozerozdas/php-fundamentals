<?php

// Define the BankAccount class
class BankAccount
{
    private $balance;

    // Constructor method to initialize the object
    public function __construct($initialBalance)
    {
        $this->balance = $initialBalance;
    }

    // Method to deposit money into the account
    public function deposit($amount)
    {
        $this->balance += $amount;
    }

    // Method to withdraw money from the account
    public function withdraw($amount)
    {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
        } else {
            echo "Insufficient funds!";
        }
    }

    // Method to get the current balance of the account
    public function getBalance()
    {
        return $this->balance;
    }
}

// Create a BankAccount object with an initial balance of 1000
$myAccount = new BankAccount(1000);

// Deposit some money into the account
$myAccount->deposit(500);
echo "Current balance: " . $myAccount->getBalance() . PHP_EOL;

// Withdraw some money from the account
$myAccount->withdraw(200);
echo "Current balance: " . $myAccount->getBalance() . PHP_EOL;

// echo $myAccount->balance; // This will not work because balance is private in the BankAccount class