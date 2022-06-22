<?php

namespace App\Controller;

class RemoveUser extends Admin
{
    /**
     * @param $uid
     * @param $email
     * @param $pwd
     * @param $dob
     */
    public function __construct($email) {
        parent::__construct();
        $this->email = $email;
    }

    /**
     * @return void
     */
    public function remove() {
        if(!$this->emptyInput()) {
            echo "Empty input!";
            header("location: " . root . "/profile?admin=true&error=emptyinput");
            exit();
        }
        if(!$this->invalidEmail()) {
            echo "Empty email!";
            header("location: " . root . "/profile?admin=true&error=emptyemail");
            exit();
        }
        if($this->uidTakenCheck()) {
            echo "Username or email isn't registered!";
            header("location: " . root . "/profile?admin=true&error=useremailtaken");
            exit();
        }
        $this->removeUser($this->email);
    }

    /**
     * @return bool
     */
    private function emptyInput(): bool
    {
        $result = true;
        if(empty($this->email)) {
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
