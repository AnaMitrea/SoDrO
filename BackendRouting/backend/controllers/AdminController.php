<?php

namespace Controller;

use Handlers\DatabaseHandler;
const root = '/BackendRouting';
class AdminController extends DatabaseHandler
{
    private $pdo;

    /**
     * constructor that uses database handler
     */
    public function __construct() {
        $this->pdo = $this->getConn();
    }

    /**
     * @param $uid
     * @param $email
     * @return bool|void
     */
    protected function checkUser($uid, $email) {
        $stmt = $this->pdo->prepare('SELECT username FROM users WHERE username = ? OR email = ?;');

        if(!$stmt->execute(array($uid, $email))) { // statement couldn't be executed
            $stmt = null;
            header("location: " . root . "/profile?admin=true&error=stmtfailed");
            //header("location: ../pages/admin.php");
            exit();
        }

        $resultCheck = true;
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        }
        return $resultCheck;
    }

    /**
     * @param $uid
     * @param $pwd
     * @param $email
     * @param $dob
     * @return void
     */
    protected function setUser($uid, $pwd, $email, $dob) {
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        $stmt = $this->pdo->prepare('INSERT INTO users(email, password, username, birthdate, isadmin) VALUES (?, ?, ?, ?, ?);');

        if(!$stmt->execute(array($email, $hashedPwd, $uid, $dob, 'f'))) { // statement couldn't be executed
            $stmt = null;
            header("location: " . root . "/profile?admin=true&error=stmtfailed");
            //header("location: ../pages/admin.php");
            exit();
        }
        $stmt = null;
    }
}