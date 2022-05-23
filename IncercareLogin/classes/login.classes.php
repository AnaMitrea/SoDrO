<?php

class Login extends DatabaseHandler {

    protected function getUser($email,$password){
      /*  $dbHandler = new DatabaseHandler();
        $pdo = $dbHandler->getConn();
        $data = $pdo->prepare('select password from users where email=?');*/

        $data = $this->connect()->prepare("select * from users where email='".$email."' ");

        if(!$data->execute()){
            $data = null;
            exit();
        }

        if(!$data->rowCount() == 0){
            $data = null;
            header("location:../admin.php"); //aici intra
            exit();
        }

        $pwd = data->fetchAll();

        $checkPassword = password_verify($pwd,$password);

        if($checkPassword == false){
            $pdo = null;
            //exit();
        }elseif($checkPassword == true){
               $data = $this->connect()->prepare('select password from users where email=?');
               if(!$data->execute(array($email))){
                   $data = null;
                   //exit();
               }
               if(!$data->rowCount() == 0){
                  $data = null;
                  exit();
               }

               $user = $data->fetchAll();
               session_start();
               $_SESSION["username"] = $user[0]["username"];
        }

        $pdo = null;
    }

}