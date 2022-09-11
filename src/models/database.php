<?php
include 'src/config/config.php';
class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

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
