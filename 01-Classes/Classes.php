<?php

class BankAccount
{
	public $accountNumber;

	public $balance;

	public function deposit($amount)
	{
		if ($amount > 0) {
			$this->balance += $amount;
		}
	}

	public function withdraw($amount)
	{
		if ($amount <= $this->balance) {
			$this->balance -= $amount;
			return true;
		}
                return false;

	}
}

$class = new BankAccount(123,200);
$deposit=$class->deposit(25);
var_dump($deposit);