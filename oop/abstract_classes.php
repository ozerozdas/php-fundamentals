<?php

abstract class BankAccount
{
    protected $balance;

    public function __construct($initialBalance)
    {
        $this->balance = $initialBalance;
    }

    // Abstract method for deposit
    abstract public function deposit($amount);

    // Abstract method for withdraw
    abstract public function withdraw($amount);

    // Concrete method for getting the balance
    public function getBalance()
    {
        return $this->balance;
    }
}

class SavingsAccount extends BankAccount
{
    public function deposit($amount)
    {
        $this->balance += $amount;
    }

    public function withdraw($amount)
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "Insufficient balance.";
        }
    }
}

// Create a savings account
$savings = new SavingsAccount(1000);
$savings->deposit(200); // Depositing money
echo "Balance: " . $savings->getBalance(); // Balance: 1200

echo PHP_EOL;

$savings->withdraw(300); // Withdrawing money
echo "Balance: " . $savings->getBalance(); // Balance: 900

/*
If you try to instantiate an abstract class, you will get an error.
$bankAccount = new BankAccount(1000);
echo $bankAccount->getBalance();
*/