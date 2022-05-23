<?php
class DatabaseHandler {
    //private static $pdoHandler;

    protected function connect() {
        $host = 'ec2-63-32-248-14.eu-west-1.compute.amazonaws.com';
        $db = 'd402r65h69mmvh';
        $user = 'dkhlzozpfyofur';
        $password = '9eb1ce3e348d0694be81a27b5f4ffc899b6fa83dbb42d2c4cb31c627fb7c3ce5';

        try {
            $dsn = "pgsql:host=$host;port=5432;dbname=$db;";
            $pdoHandler = new PDO(
                $dsn,
                $user,
                $password,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
            return $pdoHandler;

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

   /* public function getConn() {
        if (self::$pdoHandler == null) {
            self::connect();
        }
        else {
            return self::$pdoHandler;
        }
    }*/
}