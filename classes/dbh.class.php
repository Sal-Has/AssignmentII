<?php

class DBH implements DBI{
    private $hostname="localhost";
    private $user="root";
    private $pwd="208hr882";
    private $dbName="phpdb";


    public function connect(){
        $dsn = "mysql:host=" . $this->hostname . ";dbname=" . $this->dbName;


        $pdo = new PDO($dsn,$this->user,$this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $pdo;
    }

}