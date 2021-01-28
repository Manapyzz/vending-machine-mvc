<?php

require(__DIR__.'/../controller/homepageController.php');
require(__DIR__.'/../controller/vendingMachineController.php');

$url = $_SERVER['REQUEST_URI'];

$urlAndParams = explode('/', $url);
array_shift($urlAndParams);

switch ($urlAndParams[0]) {
    case 'homepage':
        getHomepageAction();
        break;
    case 'vending-machine':
        if (isset($urlAndParams[1]) && $urlAndParams[1] === 'create') {
            createVendingMachineAction();
        }
        break;
}
