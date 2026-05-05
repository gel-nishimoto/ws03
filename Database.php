<?php

class Database
{
    public $conn;

    public function __construct($config)
    {
        $dsn = "mysql:host = {$config['host']}; port={$config['port']}; dbname = {$config['dbname']}";
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

        try {
            $this->conn = new PDO($dsn, $config['username'], $config['password'], $options);
            echo 'connected';
        } catch (PDOEXCEPTION $e) {
            throw new Exception('Database failed connection: ' . $e->getMessage());
        }
    }
}