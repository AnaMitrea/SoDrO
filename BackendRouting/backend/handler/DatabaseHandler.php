<?php

namespace Handlers;

use PDO;
use PDOException;

class DatabaseHandler {
    private $pdoHandler;

    protected function connect() {
        $host = 'ec2-63-34-180-86.eu-west-1.compute.amazonaws.com';
        $db = 'd3gte55iprrt17';
        $user = 'heavdsafillskn';
        $password = '4d93c9ccf6eedb3fc772c3322cec27fd4b22148b007078c4cdf85a8a89807755';

        try {
            $dsn = "pgsql:host=$host;port=5432;dbname=$db;";
            $this->pdoHandler = new PDO(
                $dsn,
                $user,
                $password,
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