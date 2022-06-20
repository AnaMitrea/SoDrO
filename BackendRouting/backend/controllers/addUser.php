<?php

namespace Controller;

class AddUser extends AdminController
{
    private $uid;
    private $email;
    private $pwd;
    private $dob;

    /**
     * @param $uid
     * @param $email
     * @param $pwd
     * @param $dob
     */
    public function __construct($uid, $email, $pwd, $dob) {
        parent::__construct();

        $this->uid = $uid;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->dob = $dob;
    }

    public function addUser() {
        if(!$this->emptyInput()) {
            echo "Empty input!";
            //header("location: ../pages/login.php?error=emptyinput");
            header("location: " . root . "/profile?admin=true&error=emptyinput");
            exit();
        }
        if(!$this->invalidUid()) {
            echo "Invalid username!";
            header("location: " . root . "/profile?admin=true&error=username");
            exit();
        }
        if(!$this->invalidEmail()) {
            echo "Empty email!";
            //header("location: ../pages/login.php?error=email");
            header("location: " . root . "/profile?admin=true&error=emptyemail");
            exit();
        }
        if(!$this->uidTakenCheck()) {
            echo "Username or email taken!";
            header("location: " . root . "/profile?admin=true&error=useremailtaken");
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email, $this->dob);
    }

    /**
     * @return bool
     */
    private function emptyInput(): bool
    {
        $result = true;
        if(empty($this->uid) || empty($this->email) || empty($this->pwd) || empty($this->dob)) {
            $result = false;
        }
        return $result;
    }

    /**
     * @return bool
     */
    private function invalidUid(): bool
    {
        $result = true;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        }
        return $result;
    }

    /**
     * checks for invalid email
     * @return bool
     */
    private function invalidEmail(): bool
    {
        $result = true;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        return $result;
    }
    /**
     * @return bool
     */
    private function uidTakenCheck(): bool
    {
        $result = true;
        if(!$this->checkUser($this->uid, $this->email)) {
            $result = false;
        }
        return $result;
    }
}