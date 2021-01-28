<?php

class VendingMachine
{
    private $money;
    private $capacity;

    public function __construct($money, $capacity)
    {
        $this->money = $money;
        $this->capacity = $capacity;
    }

    public function getMoney()
    {
        return $this->money;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }
}