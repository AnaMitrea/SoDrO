<?php

/**
 * Signup Controller class that handles the form information validation
 */
class ChangeEmailController extends ChangeEmail {

    private $oldEmail;
    private $newEmail;
    private $newEmailRepeat;

    /**
     * @param $oldEmail
     * @param $newEmail
     * @param $newEmailRepeat
     */
    public function __construct($oldEmail, $newEmail, $newEmailRepeat)
    {
        parent::__construct();

        $this->oldEmail = $oldEmail;
        $this->newEmail = $newEmail;
        $this->newEmailRepeat = $newEmailRepeat;
    }

    public function changeEmail() {
        if(!$this->emptyInput()) {
            echo "Empty input!";
            header("location: ../pages/dashboard.php?error=empty");
            //header("location: ../pages/login.php");
            exit();
        }
        if(!$this->invalidEmail()) {
            echo "Empty email!";
            header("location: ../pages/err.php?error=email");
            //header("location: ../pages/login.php");
            exit();
        }
        if(!$this->emailMatch()) {
            echo "Emails don't match!";
            header("location: ../pages/login.php?error=emailmatch");
            //header("location: ../pages/login.php");
            exit();
        }
        if(!$this->oldAndNewEmailDifferent()) {
            echo "Old email and new email are the same!";
            header("location: ../pages/login.php?error=oldandnewmatch");
            //header("location: ../pages/login.php");
            exit();
        }
        if(!$this->checkEmail($this->newEmail)) {
            echo "New email already exists!";
            header("location: ../pages/login.php?error=oldandnewmatch");
            //header("location: ../pages/login.php");
            exit();
        }
        $this->updateEmail($this->oldEmail, $this->newEmail);
    }

    /**
     * @return bool
     */
    private function emptyInput() {
        $result = true;
        if(empty($this->oldEmail)) {
            $result = false;
            echo $this->oldEmail;
            echo "<script>console.log('Debug Objects: " . $this->oldEmail . ' ' .  $this->newEmail . ' ' . $this->newEmailRepeat . "' );</script>";
        }
        if(empty($this->newEmail)) {
            $result = false;
            echo $this->newEmail;
            echo "<script>console.log('Debug Objects: " . $this->oldEmail . ' ' .  $this->newEmail . ' ' . $this->newEmailRepeat . "' );</script>";
        }
        if(empty($this->newEmailRepeat)) {
            $result = false;
            echo $this->newEmailRepeat;
            echo "<script>console.log('Debug Objects: " . $this->oldEmail . ' ' .  $this->newEmail . ' ' . $this->newEmailRepeat . "' );</script>";
        }

        return $result;
    }

    /**
     * checks for invalid email
     * @return bool
     */
    private function invalidEmail() {
        $result = true;
        if(!filter_var($this->oldEmail, FILTER_VALIDATE_EMAIL) || !filter_var($this->newEmail, FILTER_VALIDATE_EMAIL) || !filter_var($this->newEmailRepeat, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        return $result;
    }

    /**
     * checks if newEmail and newEmailRepeat are equal
     * @return bool
     */
    private function emailMatch() {
        $result = true;
        if($this->newEmail !== $this->newEmailRepeat) {
            $result = false;
        }
        return $result;
    }

    /**
     * checks if oldEmail and newEmail are different
     * @return bool
     */
    private function oldAndNewEmailDifferent() {
        $result = true;
        if($this->oldEmail == $this->newEmail) {
            $result = false;
        }
        return $result;
    }
}