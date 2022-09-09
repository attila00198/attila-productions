<?php

class Database
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "attila_productions";

    protected function connect() {
        $dsn = "mysql:host=".$this->host.";dbname=".$this->dbname;
        $pdo = new PDO($dsn, $this->user, $this->pass);
        try {
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }
        catch(PDOException $e) {
            echo new PDOException($e->getMessage());
            die();
        }
    }
}
