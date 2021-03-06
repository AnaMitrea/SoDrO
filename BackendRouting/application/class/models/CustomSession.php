<?php
namespace App\Model;

use App\Database\DatabaseHandler;
use PDO;
use PDOException;
use SessionHandlerInterface;

class CustomSession extends DatabaseHandler implements SessionHandlerInterface
{
    private $pdo;

    /**
     * constructor that uses database handler
     */
    public function __construct()
    {
        $this->pdo = $this->getConn();
        if(!defined('SESSION_DURATION'))
        {
            define('SESSION_DURATION',86400);
            // Make Sessions valid for 1 day be default
        }
    }

    /**
     * @param $savePath
     * @param $sessionName
     * @return bool
     */
    public function open($savePath = NULL, $sessionName = NULL): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function close(): bool
    {
        return true;
    }

    /**
     * @param $session_id
     * @return false|mixed|string|void
     */
    public function read($session_id)
    {
        try
        {
            $statement = $this->pdo->prepare('SELECT data FROM sessions WHERE sessions.id=:session_id');
            $statement->bindParam(':session_id', $session_id, PDO::PARAM_STR);
            if ($statement->execute() && 1 === $statement->rowCount())
            {
                $row = $statement->fetch();
                return $row['data'];
            }
        }
        catch(PDOException $error)
        {
            error_log($error);
            //Show a nice decent Database Connection Error page
            //without the details of database host, username and the password
            exit;
        }
        return '';
    }

    /**
     * @param $session_id
     * @param $data
     * @return bool|void
     */
    public function write($session_id, $data)
    {
        try
        {
            $current_time = time();
            $expiry_time = $current_time + SESSION_DURATION;

            $statement = $this->pdo->prepare('INSERT into sessions("id","last_updated","expiry","data") VALUES (:id,:last_updated,:expiry,:data)
                        ON CONFLICT(id) DO UPDATE SET "data"=:data,"last_updated"=:last_updated,"expiry"=:expiry WHERE "sessions"."id"=:id;');

            $statement->bindParam(':data',$data, PDO::PARAM_STR);
            $statement->bindParam(':last_updated',$current_time, PDO::PARAM_INT);
            $statement->bindParam(':expiry',$expiry_time, PDO::PARAM_INT);
            $statement->bindParam(':id',$session_id, PDO::PARAM_STR);

            if($statement->execute())
            {
                return true;
            }
        }
        catch(PDOException $error)
        {
            error_log($error);
            exit;
        }
        return false;
    }

    /**
     * @param $session_id
     * @return bool|void
     */
    public function destroy($session_id)
    {
        try
        {
            $statement = $this->pdo->prepare('DELETE from "sessions" WHERE  "sessions"."id" = :session_id');
            $statement->bindParam(':session_id',$session_id, PDO::PARAM_STR);
            if($statement->execute())
            {
                return true;
            }
        }
        catch(PDOException $error)
        {
            error_log($error);

            exit;
        }
        return false;
    }

    /**
     * @param $maxlifetime
     * @return bool|void
     */
    public function gc($maxlifetime = SESSION_DURATION)
    {
        try
        {
            $current_time = time();
            $statement = $this->pdo->prepare('DELETE from "sessions" WHERE  "sessions"."expiry" < :current_time');
            $statement->bindParam(':current_time',$current_time, PDO::PARAM_INT);
            if($statement->execute())
            {
                return true;
            }
        }
        catch(PDOException $error)
        {
            error_log($error);
            exit;
        }
        return false;
    }
}
