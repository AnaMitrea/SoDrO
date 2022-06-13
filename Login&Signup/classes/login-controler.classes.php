<?php

class LoginControler extends Login{
    private $email;
    private $password;

    public function __construct($email, $password){
        $this->email = $email;
        $this->password = $password;
    }

    public function loginUser(){
        if($this->emptyInput() == false){
            exit();
        }
        $this->getUser($this->email,$this->password);
    }

    private function emptyInput(){
        if(empty($this->email) || empty($this->password)){
            $res = false;
        }
        else{
            $res = true;
        }
        return $res;
    }
}