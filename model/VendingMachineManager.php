<?php

require (__DIR__.'/../config/Database.php');

class VendingMachineManager extends Database
{
    public function insertVendingMachine(VendingMachine $vendingMachine)
    {
        $query = $this->dbHelper->prepare('INSERT INTO `vending_machine`(`money`, `capacity`) VALUES (:money,:capacity)');
        $query->execute([
            'money' => $vendingMachine->getMoney(),
            'capacity' => $vendingMachine->getCapacity()
        ]);
    }

    public function readVendingMachine($id)
    {
    }

    public function readVendingMachines()
    {
    }

    public function updateVendingMachine($id)
    {
    }

    public function deleteVendingMachine($id)
    {
    }
}