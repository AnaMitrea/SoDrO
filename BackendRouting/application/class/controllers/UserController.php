<?php

namespace App\Controller;

use App\Model\User;
require_once 'application/class/models/User.php';

class UserController extends User
{
    public $maxUserId;

    public function __construct(array $params = []) {
        parent::__construct($params);
    }

    /**
     * @return string
     */
    public function getMaxUserId() : string
    {
        $stmt = $this->pdo->prepare("SELECT MAX(id) + 1 FROM users");
        $stmt->execute();
        $row1 = $stmt->fetch();
        $this->maxUserId = $row1[0];
        return $this->maxUserId;
    }

    public function getAdminFlag() : bool {
        $stmt = $this->pdo->prepare("SELECT isadmin FROM users WHERE email LIKE '$this->email'");
        $stmt->execute();
        $row2 = $stmt->fetch();
        $this->isAdmin = $row2[0];
        return $this->isAdmin;
    }
}