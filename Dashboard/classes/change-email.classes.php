<?php

class ChangeEmail extends DatabaseHandler {

    private $pdo;

    /**
     * constructor that uses database handler
     */
    public function __construct() {
        $this->pdo = $this->getConn();
    }

    /**
     * @param $newEmail
     * @return bool|void
     */
    protected function checkEmail($newEmail) {
        $hashedNewEmail = password_hash($newEmail, PASSWORD_DEFAULT);

        $stmt = $this->pdo->prepare('SELECT email FROM users WHERE email = ?;');

        if(!$stmt->execute(array($hashedNewEmail))) { // statement couldn't be executed
            $stmt = null;
            //header("location: ../pages/login.php?error=stmtfailed");
            header("location: ../pages/login.php");
            exit();
        }

        $resultCheck = true;
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        }
        return $resultCheck;
    }


    protected function updateEmail($oldEmail, $newEmail) {
        $hashedOldEmail = password_hash($oldEmail, PASSWORD_DEFAULT);
        $hashedNewEmail = password_hash($newEmail, PASSWORD_DEFAULT);

        echo $hashedOldEmail . ' ' . $hashedNewEmail;

        $stmt = $this->pdo->prepare('UPDATE users SET email = :new_email WHERE email = :old_email');
        $stmt->bindValue(':new_email', $hashedNewEmail);
        $stmt->bindValue(':old_email', $hashedOldEmail);


        if(!$stmt->execute()) { // statement couldn't be executed
            $stmt = null;
            //header("location: ../pages/login.php?error=stmtfailed");
            header("location: ../pages/login.php");
            exit();
        }
        $stmt = null;
    }
}