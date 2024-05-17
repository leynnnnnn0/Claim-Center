<?php

class Database {
    public $connection;

    public function __construct() {
        $dsn = "mysql:host=localhost;dbname=claimcenter;charset=utf8";
        $this->connection = new PDO($dsn, 'root', '');
    }
}

