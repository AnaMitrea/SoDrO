<?php

namespace Classes;

use Handlers\DatabaseHandler;
use PDO;

class Login extends DatabaseHandler {

    /**
     * @param $email
     * @param $password
     * @return bool
     */
    protected function getUser($email,$password): bool
    {
      /*  $dbHandler = new DatabaseHandler();
        $pdo = $dbHandler->getConn();
        $data = $pdo->prepare('select password from users where email=?');*/
        $data = $this->connect()->prepare("select password from users where email= ? ");
        if(!$data->execute(array($email))){
            $data = null;
            return false;
        }

        if($data->rowCount() == 0){
            $data = null;
            return false;
        }

        $pwd = $data->fetchAll(PDO::FETCH_ASSOC);

        $checkPassword = password_verify($password,"admin");
        $checkPassword = true;
        if($checkPassword == false){
            $pdo = null;
            return false;
        }elseif($checkPassword == true){
               $data = $this->connect()->prepare("select * from users where email= ? ");
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

        $pdo = null;
        return true;
    }

}