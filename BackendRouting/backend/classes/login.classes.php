<?php

namespace Classes;

use Handlers\DatabaseHandler;
use PDO;

class Login extends DatabaseHandler {
    private $pdo;

    /**
     * constructor that uses database handler
     */
    public function __construct() {
        $this->pdo = $this->getConn();
    }

    /**
     * @param $email
     * @return string
     */
    protected function getPwd($email) : string
    {
        $data = $this->pdo->prepare("select password from users where email = ? ");
        if (!$data->execute(array($email))) {
            $data = null;
            return "false";
        }

        if ($data->rowCount() == 0) {
            $data = null;
            return "false";
        }
        $pwd = $data->fetchAll(PDO::FETCH_ASSOC);
        return $pwd[0]["password"];
    }

    // TODO check user if it is normal user or admin user
    /**
     * @param $email
     * @param $password
     * @return bool
     */
    protected function verifyUser($email,$password): bool
    {
        $pwd = $this->getPwd($email);
        if($pwd == "false") {
            $this->pdo = null;
            return false;
        }

        $checkPassword = password_verify($password,$pwd);
        if(!$checkPassword){
            $this->pdo = null;
            return false;
        }else {
           $data = $this->pdo->prepare("select * from users where email= ? ");
           if(!$data->execute(array($email))){
               $data = null;
               return false;
           }
           if($data->rowCount() == 0){
              $data = null;
               return false;
           }
           $user = $data->fetchAll();
            if(!isset($_SESSION)) {
                session_start();
            }
           echo session_id();
           $_SESSION["username"] = $user[0]["username"];
           $data = null;
        }

        $this->pdo = null;
        return true;
    }

}