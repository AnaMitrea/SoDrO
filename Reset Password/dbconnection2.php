<?php
        $host = 'ec2-63-32-248-14.eu-west-1.compute.amazonaws.com';
        $db = 'd3gte55iprrt17';
        $user = 'heavdsafillskn';
        $password = '4d93c9ccf6eedb3fc772c3322cec27fd4b22148b007078c4cdf85a8a89807755';

        try {
            $dsn = "pgsql:host=$host;port=5432;dbname=$db;";
            $pdoHandler = new PDO(
                $dsn,
                $user,
                $password,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );

        } catch (PDOException $e) {
            die($e->getMessage());

}