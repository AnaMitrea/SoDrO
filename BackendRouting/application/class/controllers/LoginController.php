<?php

namespace App\Controller;

/**
 * Login Controller class that handles the login form information validation
 */
class LoginController extends Login{
    private $email;
    private $password;

    /**
     * @param $email
     * @param $password
     */
    public function __construct($email, $password){
        parent::__construct();

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
        return $this->verifyUser($this->email,$this->password);
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