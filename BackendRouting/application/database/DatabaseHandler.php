<?php

namespace App\Database;

use PDO;
use PDOException;

class DatabaseHandler {
    private $pdoHandler;

    protected function connect() {
        $credentials = [];
        $credentials = include "database.config.php";

        try {
            $dsn = "pgsql:host=" . $credentials['host'] . ";port=" . $credentials['port'] . ";dbname=" . $credentials['db'] . ";";
            $this->pdoHandler = new PDO(
                $dsn,
                $credentials['user'],
                $credentials['password'],
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
            return $this->pdoHandler;

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getConn() {
        if ($this->pdoHandler == null) {
            $this->connect();
        }
        return $this->pdoHandler;
    }
}