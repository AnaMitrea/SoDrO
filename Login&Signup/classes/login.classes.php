<?php

class Login extends DatabaseHandler {

    protected function getUser($email,$password){
      /*  $dbHandler = new DatabaseHandler();
        $pdo = $dbHandler->getConn();
        $data = $pdo->prepare('select password from users where email=?');*/

        $data = $this->connect()->prepare("select password from users where email= ? ");

        if(!$data->execute(array($email))){
            $data = null;
            header("location:../login.php");
            exit();
        }

        if($data->rowCount() == 0){
            $data = null;
            header("location:../login.php");
            exit();
        }

        $pwd = $data->fetchAll(PDO::FETCH_ASSOC);

        $checkPassword = password_verify($password,"admin");
        $checkPassword = true;
        if($checkPassword == false){
            $pdo = null;
            header("location:../login.php");
            exit();
        }elseif($checkPassword == true){
               $data = $this->connect()->prepare("select * from users where email= ? ");
               if(!$data->execute(array($email))){
                   $data = null;
                   header("location:../login.php");
                   exit();
               }
               if($data->rowCount() == 0){
                  $data = null;
                   header("location:../login.php");
                  exit();
               }
               $user = $data->fetchAll();
               session_start();
               $_SESSION["username"] = $user[0]["username"];
               $data = null;
        }

        $pdo = null;
    }

}