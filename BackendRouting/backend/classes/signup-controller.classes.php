<?php
namespace Classes;

/**
 * Signup Controller class that handles the form information validation
 */
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
            echo "Empty input!";
            //header("location: ../pages/login.php?error=emptyinput");
            header("location: /BackendRouting/login?error=emptyinput");
            exit();
        }
        if(!$this->invalidUid()) {
            echo "Invalid username!";
            //header("location: ../pages/login.php?error=username");
            header("location: /BackendRouting/login?error=invalidusername");
            exit();
        }
        if(!$this->invalidEmail()) {
            echo "Empty email!";
            //header("location: ../pages/login.php?error=email");
            header("location: /BackendRouting/login?error=invalidemail");
            exit();
        }
        if(!$this->pwdMatch()) {
            echo "Passwords don't match!";
            //header("location: ../pages/login.php?error=passwordmatch");
            header("location: /BackendRouting/login?error=passwordunmatch");
            exit();
        }
        if(!$this->uidTakenCheck()) {
            echo "Username or email taken!";
            //header("location: ../pages/login.php?error=useroremailtaken");
            header("location: /BackendRouting/login?error=uidtaken");
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