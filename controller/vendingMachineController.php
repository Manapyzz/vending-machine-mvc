<?php

require(__DIR__.'/../model/VendingMachineManager.php');
require(__DIR__.'/../model/VendingMachine.php');

function createVendingMachineAction()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['money']) && isset($_POST['capacity'])) {
        if ((int)$_POST['money'] > 0 && (int)$_POST['capacity'] > 0) {
            $vendingMachine = new VendingMachine($_POST['money'], $_POST['capacity']);
            $vendingMachineManager = new VendingMachineManager();
            $vendingMachineManager->insertVendingMachine($vendingMachine);
        }
    }

    require(__DIR__.'/../view/create-vending-machine.html');
}