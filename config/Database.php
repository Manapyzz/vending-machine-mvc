<?php

class Database
{
    protected $dbHelper;

    public function __construct()
    {
        try {
            $this->dbHelper = new PDO('mysql:host=127.0.0.1;dbname=vending_machine_db;charset=utf8', 'root', '');
        } catch (Exception $e) {
            var_dump('Erreur : '.$e->getMessage());die;
        }
    }
}