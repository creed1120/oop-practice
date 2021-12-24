<?php

    class Transaction
    {
        public $amount;
        public $description;

        public function __construct($amount, $description)
        {
            $this->amount = $amount;
            $this->description = $description;
        }

        public function addTax($rate) {
            $this->amount += $this->amount * $rate / 100;
        }

        public function applyDiscount(float $rate) {
            $this->amount -= $this->amount * $rate / 100;
        }
    }
