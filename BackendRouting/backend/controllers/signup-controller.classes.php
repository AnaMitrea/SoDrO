<?php
namespace Controller;

/**
 * Signup Controller class that handles the form information validation
 */
const root = '/BackendRouting';
class SignupController extends Signup {

    private $uid;
    private $email;
    private $pwd;
    private $pwdRepeat;
    private $dob;

    /**
     * @param $uid
     * @param $email
     * @param $pwd
     * @param $pwdRepeat
     * @param $dob
     */
    public function __construct($uid, $email, $pwd, $pwdRepeat, $dob) {
        parent::__construct();

        $this->uid = $uid;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->dob = $dob;
    }

    public function signupUser() {
        if(!$this->emptyInput()) {
            header("location: " . root . "/signup?error=emptyinput");
            exit();
        }
        if(!$this->invalidUid()) {
            header("location: " . root . "/signup?error=invalidusername");
            exit();
        }
        if(!$this->invalidEmail()) {
            header("location: " . root . "/signup?error=invalidemail");
            exit();
        }
        if(!$this->pwdMatch()) {
            header("location: " . root . "/signup?error=passwordunmatch");
            exit();
        }
        if(!$this->uidTakenCheck()) {
            header("location: " . root . "/signup?error=uidtaken");
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
        if(empty($this->uid) || empty($this->email) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->dob)) {
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
        if(!preg_match("/^[a-zA-Z\d]*$/", $this->uid)) {
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
     * checks if pwd and pwdRepeat are equal
     * @return bool
     */
    private function pwdMatch(): bool
    {
        $result = true;
        if($this->pwd !== $this->pwdRepeat) {
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