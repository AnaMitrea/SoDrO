<?php

namespace App\Model;

use App\Database\DatabaseHandler;

class User extends DatabaseHandler
{
    protected $pdo;
    public $email;
    public $username;
    public $isAdmin;

    public function __construct(array $params = [])
    {
        $this->pdo = $this->getConn();
        $this->email = $params[0];
        $this->username = $params[1];
    }
}