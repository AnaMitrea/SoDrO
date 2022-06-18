<?php

namespace Classes;

class LoginController extends Login{
    private $email;
    private $password;

    /**
     * @param $email
     * @param $password
     */
    public function __construct($email, $password){
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return bool|void
     */
    public function loginUser(){
        if(!$this->emptyInput()){
            exit();
        }
        else{
            return $this->getUser($this->email,$this->password);
        }

    }

    /**
     * @return bool
     */
    private function emptyInput(): bool
    {
        if(empty($this->email) || empty($this->password)){
            $res = false;
        }
        else{
            $res = true;
        }
        return $res;
    }
}